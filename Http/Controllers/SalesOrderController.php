<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use App\Models\Inventory;
use App\Models\InventoryLine;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;



class SalesOrderController extends Controller
{
    //
    // show salesorderview which references the inventory
    public function show(Inventory $inventoryData){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $inventorylineData = InventoryLine::first()->filter(request(['search']))->get();
        $saleData = SalesOrder::select()->get();
        return view('salesorder', ['inventorylist'=>$inventoryData , 'inventorylinelist'=>$inventorylineData, 'salelist'=>$saleData]);
        
    }

    //store item salesorder data
    public function store(Request $request){
        $formFields = $request->validate([
            'order_total' =>'required',
            'order_discount' => '',
            'order_senior_discount' => ''
           
        ]);

        SalesOrder::create($formFields);
        return redirect('/salesorder')->with('message', 'A sale was made successfully.');
    }
    /* Not sure if editing and updating entries will be needed as sales are final anyway.
    //show edit form
    
    public function edit(SalesOrder $salesorder){
        return view('edit', ['salesorder'=>$salesorder]);
    }*/

    //update item inventory data
    
    /*
    public function update(Request $request, SalesOrder $salesorder){
        $formFields = $request->validate([
            'order_total' =>'required',
            'order_discount' => '',
            'order_senior_discount' => ''
           
        ]);

        SalesOrder::create($formFields);
        return redirect('/inventory')->with('message', 'An item was updated successfully.');
    }*/

    //delete item
    public function destroy(SalesOrder $salesorder){
        $salesorder->delete();
        return redirect('/inventory')->with('message', 'An item was deleted successfully.');
    }
    
    //update inventory when a sale is made
     public function updateInventory(Request $request){
         
         $input = $request->all();
         $i = 0;
         
         $count = count($input['barcode']);
         while($i < $count){
             
             InventoryLine::where('item_barcode',$input['barcode'][$i])->update(array('inventoryline_quantity'=>$input['oldquantity'][$i] - $input['quantity'][$i]));
             $i++;
         }
         
         /*$count = $input['quantity'];
         dd($count);*/
         
         $this->store($request);
        
        
        return redirect('/salesorder');
    }
    
    
}
