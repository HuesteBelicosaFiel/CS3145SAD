<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\SalesOrder;
use App\Models\cardpayment;
use App\Models\cashpayment;

use Illuminate\Http\Request;
use App\Models\InventoryLine;
use App\Models\ordercontents;
use Illuminate\Validation\Rule;



class SalesOrderController extends Controller
{
    //
    // show salesorderview which references the inventory
    public function show(Inventory $inventoryData){
        if (Inventory::first() && InventoryLine::first()){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $inventorylineData = InventoryLine::first()->filter(request(['search']))->get();
        
        return view('salesorder', ['inventorylist'=>$inventoryData , 'inventorylinelist'=>$inventorylineData]);}
        else return view('salesorder', ['inventorylist'=>Inventory::first(), 'inventorylinelist' => InventoryLine::first()]);;
        //return view('salesorder', ['inventorylist'=>$inventoryData , 'salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData]);
    }

    public function showHistory(Inventory $inventoryData){
        $saleData = SalesOrder::select()->get();
        $cashData = cashpayment::select()->get();
        $cardData = cardpayment::select()->get();
        //$cardData = cardpayment::select()->get();
        return view('saleshistory', ['salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData, 'ordercontentlist'=>null]);
    }
    
    public function showContents(SalesOrder $sales){
        //dd("a");
        $saleData = SalesOrder::select()->get();
        $cashData = cashpayment::select()->get();
        $cardData = cardpayment::select()->get();
        //dd($sales->id);
        $contentData = ordercontents::where('order_id',$sales->id)->get();
        
        return view('saleshistory', ['salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData, 'ordercontentlist'=>$contentData]);
    }
    
    //store item salesorder data
    public function store(Request $request){
        $formFields = $request->validate([
            'order_total' =>'required',
            'order_discount' => '',
            'order_senior_discount' => '',
            'date_today' => ''
        ]);

        $ordered = SalesOrder::create($formFields);
        $orderedid = $ordered->id;
   
        $input = $request->all();
       
        if($input['cardmode']) $this->storeCard($request, $orderedid);
        else $this->storeCash($request, $orderedid);
        $this->storeOrderContents($request, $orderedid);
        return redirect('/salesorder')->with('message', 'A sale was made successfully.');
    }
    

    public function updateInventory(Request $request){ //this version of updateInventory will go to InventoryLine instead of Inventory now
         $input = $request->all();
         $i = 0;
         $count = count($input['idd']);
         while($i < $count){
             InventoryLine::where('inventory_id',$input['idd'][$i])->update(array(
                 'inventoryline_quantity'=>$input['oldquantity'][$i] - $input['quantity'][$i])); //search inventoryline for matching item ID, then update the quantity entry.
             $i++;
         }
         $this->store($request); //command to store SalesOrder data
         
        return redirect('/salesorder');
    }
    
    //store info of payment with card
    public function storeCard(Request $request, $orderid){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $input = $request->all();
        CardPayment::create(array('order_id' =>$orderid, 'card_number'=>$input['cardnumber'], 'card_type'=>$input['cardtype'], 'cardpayment_amount' => $input['amount_paid'], 'date_today' => $input['date_today']));
    }
    
    //store info of payment with cash
    public function storeCash(Request $request, $orderid){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $input = $request->all();
        CashPayment::create(array('order_id' =>$orderid, 'cashpayment_amount' => $input['amount_paid'], 'date_today' => $input['date_today']));
    }
     public function storeOrderContents(Request $request, $orderid){
        $input = $request->all();
         $i = 0;
         $count = count($input['idd']);
         
         while($i < $count){
             $itemname = Inventory::where('item_barcode', $input['barcode'][$i])->first()->item_name;
             ordercontents::create(array('order_id' =>$orderid, 'item_name' => $itemname, 'inventoryline_quantity' => $input['quantity'][$i], 'item_price' =>$input['price'][$i], 'item_discount'=>$input['discount'][$i]));

             $i++;
         }
        
     
     }
    //delete an entry
    public function destroy(SalesOrder $salesorder){
        $salesorder->delete();
        return redirect('/inventory')->with('message', 'An item was deleted successfully.');
    }
    
    
    
    /* Not sure if editing and updating entries will be needed as sales are final anyway.
    //show edit form
    
    public function edit(SalesOrder $salesorder){
        return view('edit', ['salesorder'=>$salesorder]);
    }*/

 
    
    
    
    
    
    
}
