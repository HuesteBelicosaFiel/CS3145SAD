<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Supplier;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
class SupplierController extends Controller
{
    // show supplier
    public function show(Supplier $supplierData){
        if (Supplier::first()){
        $supplierData = Supplier::first()->filter(request(['search']))->get();
        $supplierData = Supplier::paginate(5);

        return view('supplier', ['supplierlist'=>$supplierData]);
        }
        else{
            return view('supplier', ['supplierlist'=>Supplier::first()]);
        }
        
        
    }
    
    public function showPurchase(Supplier $supplier){
        $authid = Auth::id();
        $employeeData = Employee::where('id',$authid)->take(1)->first();
        return view('createpurchaseorder', ['supplier'=>$supplier, 'employee'=>$employeeData]);
        
    }
    
    public function showPurchaseList(PurchaseOrder $purchaseorder){
        if (PurchaseOrder::first()){
        $purchaseData = PurchaseOrder::first()->filter(request(['search']))->get();

        //$purchaseData =  PurchaseOrder::first()->filter(request(['search']))->paginate(5);

        return view('purchaseorder', ['purchaselist'=>$purchaseData]);
        }
        else{
            return view('purchaseorder', ['purchaselist'=>PurchaseOrder::first()]);
        }
        
    }

    //show create form
    public function create(){
        return view('createsupplier');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'sup_name' =>['required',Rule::unique('suppliers', 'sup_name')], 
            'sup_contactPerson' => 'required',
            'sup_address' => 'required',
            'sup_phoneNum' => 'required|numeric|digits:11|unique:suppliers,sup_phoneNum,$id',
            'sup_email' => ['required', 'email',Rule::unique('suppliers', 'sup_email')],
        ]);

        Supplier::create($formFields);
        return redirect('/supplier')->with('message', 'An item was created successfully.');
    }
    
    public function storePurchase(Request $request){
        $formFields = $request->validate([
            'sup_id' =>'required', 
            'emp_id' => 'required',
            'item_name' => 'required',
            'purchase_quantity' => 'required|integer',
            'purchase_cost' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'date_today' => 'required',

        ]);

        PurchaseOrder::create($formFields + array('purchase_status' => "PENDING"));
        return redirect('/supplier')->with('message', 'An item was created successfully.');
    }

    //show edit form
    public function edit(Supplier $supplier){
        return view('editsupplier', ['supplier'=>$supplier]);
    }
    
    public function editPurchase(PurchaseOrder $purchaseorder){
        
        //dd($purchaseorder->emp_id);
        $employeeData = Employee::where('id',$purchaseorder->emp_id)->take(1)->first()->emp_fullName;
        $supplierData = Supplier::where('id',$purchaseorder->sup_id)->take(1)->first()->sup_name;
        return view('editpurchaseorder', ['purchase'=>$purchaseorder, 'employee'=>$employeeData, 'supplier'=>$supplierData]);
    }

    //update item inventory data
    public function update(Request $request, Supplier $supplier){
        $formFields = $request->validate([
            'sup_name' =>'required', 
            'sup_contactPerson' => 'required',
            'sup_address' => 'required',
            'sup_phoneNum' => 'required|numeric|digits:11',
            'sup_email' => ['required', 'email'],
        ]);

        $supplier->update($formFields);
        return redirect('/supplier')->with('message', 'An item was updated successfully.');
    }

    public function updatePurchase(Request $request, PurchaseOrder $purchaseorder){
        $formFields = $request->validate([
            'purchase_status' =>'required'
        ]);

        $purchaseorder->update($formFields);
        return redirect('/procurement')->with('message', 'An item was updated successfully.');
    }
    
    //delete item
    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect('/supplier')->with('message', 'An item was deleted successfully.');
    }
}
