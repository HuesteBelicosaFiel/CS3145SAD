<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryLine;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class InventoryController extends Controller
{

    // show inventory
    public function show(Inventory $inventoryData){
        if (Inventory::first() && InventoryLine::first()){
        
        /*$inventoryData = Inventory::first()->filter(request(['search']))->paginate(5);
        $inventoryLineData = InventoryLine::first()->filter(request(['search']))->paginate(5);*/
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $inventoryLineData = InventoryLine::first()->filter(request(['search']))->get();    
            

        return view('inventory', ['inventorylist'=>$inventoryData, 'inventorylinelist' =>$inventoryLineData]);
        }
       else return view('inventory', ['inventorylist'=>Inventory::first(), 'inventorylinelist' => InventoryLine::first()]);

    }

    // show procurement
    public function show1(Inventory $inventoryData){

        if (Inventory::first() && InventoryLine::first()){
            $inventoryData = Inventory::first()->filter(request(['search']))->get();
           
            $inventoryLineData = InventoryLine::first()->filter(request(['search']))->get();
            return view('procurement', ['inventorylist'=>$inventoryData, 'inventorylinelist' =>$inventoryLineData]);
            }
           else return view('procurement', ['inventorylist'=>Inventory::first(), 'inventorylinelist' => InventoryLine::first()]);
        
    }

    //show create form
    public function create(){
        return view('create');
    }

    //store item inventory data and inventoryline data
    public function store(Request $request){
        $formFields = $request->validate([
            'item_barcode' =>['required',  Rule::unique('inventories', 'item_barcode')],
            'item_name' => 'required',
            'item_size' => 'required',
            'item_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_procprice' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_description' => 'required',
            'item_discount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
  
        ]);
        $inventoryNew = Inventory::create($formFields);
        $itemid = $inventoryNew->id;
    
        $formFields = $request->validate([
            'item_barcode' =>'required', 
            'item_name' => 'required',
            'item_size' => 'required',
            'inventoryline_quantity' => 'required|integer',
            'inventoryline_restockvalue' => 'required|integer',
            'inventoryline_outofstock' => 'required|integer',
            'inventoryline_expirydate' => 'required'
        ]);
 
        InventoryLine::create(array('inventory_id' => $itemid) + $formFields);
       
        return redirect('/inventory')->with('message', 'An item was created successfully.');
    }

    //show edit form
    public function edit(Inventory $inventory){
        //dd($inventory);
        //dd($inventory->id);
        $inventoryline = InventoryLine::where('inventoryline_id',$inventory->id)->take(1)->get();
        return view('edit', ['inventory'=>$inventory, 'inventoryline'=>$inventoryline]);
    }

    //update item inventory data
    
    public function update(Request $request, Inventory $inventory){
        $input = $request->all();
        $formFields = $request->validate([
            'item_barcode' =>'required',
            'item_name' => 'required',
            'item_size' => 'required',
            'item_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_procprice' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'item_description' => 'required',
            'item_discount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $formFields2 = $request->validate([
            'item_barcode' =>'required', 
            'item_name' => 'required',
            'item_size' => 'required',
            'inventoryline_quantity' => 'required|integer',
            'inventoryline_restockvalue' => 'required|integer',
            'inventoryline_outofstock' => 'required|integer',
            'inventoryline_expirydate' => 'required'
        ]);
        $inventoryLineNew = InventoryLine::where('inventory_id',$inventory->id)->update($formFields2);
        $inventoryNew = Inventory::where('id',$inventory->id)->update($formFields);
        
        return redirect('/inventory')->with('message', 'An item was updated successfully.');
    }

    //delete item
    public function destroy(Inventory $inventory){
        $invid = $inventory->id;
        InventoryLine::where('inventoryline_id', $invid)->delete();
        $inventory->delete();
        return redirect('/inventory')->with('message', 'An item was deleted successfully.');
    }

    
}
