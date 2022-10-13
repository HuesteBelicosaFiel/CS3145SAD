<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employee;
use App\Models\attendance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    // // Show all employees


    public function show(Employee $employeeData){
        $authid = Auth::id(); 
        if($authid==1){
        if (Employee::first()){
        $employeeData = Employee::first()->filter(request(['search']))->paginate(5);
        return view('employee', ['employeelist'=>$employeeData]);
        }
        else 
        {
            Employee::create(array(
            'user_id' => 1,
            'emp_fullName'=>"admin", 
            'emp_phoneNum'=>"00000000000", 
            'emp_address' =>"0", 
            'emp_email' => "a00@gmail.com", 
            'emp_gender' =>"0", 
            'emp_birthdate'=>"0", 
            'emp_role'=>"admin"));
        $employeeData = Employee::first()->filter(request(['search']))->paginate(5);
        return view('employee', ['employeelist'=>$employeeData]);}
        }else abort(403);
    }
    
    /*public function showAttendanceCreator(Employee $employee){
        
        return view('employeeattendance', ['employee' => $employee]);
        
    }*/
    
    public function showAttendanceCreator($id){
        $employee = Employee::where('user_id',$id)->take(1)->first();
        if($employee)
        return view('employeeattendance', ['employee' => $employee]);
        else abort(403);
    }

    public function showAttendanceList(Employee $employee){
        $empid = $employee->id;
        return view('employeeattendancelist', ['employee' => $employee, 'attendances' => attendance::where('emp_id', $empid)->filter(request(['search']))->paginate(10)]);
    }

    // Show Create Form
    public function create() {
        
        return view('createemployee');
        
    }

    // Store Employee Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'emp_fullName' =>['required',Rule::unique('employees', 'emp_fullName')], 
            'emp_phoneNum' => 'required|numeric|digits:11|unique:employees,emp_phoneNum,$id',
            'emp_address' => 'required',
            'emp_email' => ['required', 'email',Rule::unique('employees', 'emp_email')],
            'emp_gender' => 'required',
            'emp_birthdate' => 'required',
            'emp_role' => 'required',
        ]);

        // $formFields['user_id'] = auth()->id();
        $userid = $this->storeUser($request);
        Employee::create(array('user_id' => $userid)+$formFields);
        
        return redirect('/employee')->with('message', 'Employee created successfully!');
    }
    
    public function storeAttendance(Request $request) {
        $formFields = $request->validate([
            'emp_id' => 'required',
            'date_today' =>'required'
        ]);

        // $formFields['user_id'] = auth()->id();

        attendance::create($formFields);
     
        return redirect('/')->with('message', 'Attendance created successfully!');
    }

    // Show Edit Form
    public function storeUser(Request $request) {
        $formFields = $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);
        //$input=$request
        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields + array('email' => $request->emp_email, 'name'=>$request->emp_fullName));
        return ($user->id);
        // Login
        //auth()->login($user);
    }
    
    
    public function edit(Employee $employee) {
        $authid = Auth::id(); 
        if($authid==1){
        return view('editemployee', ['employee' => $employee]);
        }else abort(403);
    }

    // Update Listing Data
    public function update(Request $request, Employee $employee) {
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        
        $formFields = $request->validate([
            'emp_fullName' =>'required', 
            'emp_phoneNum' => 'required|numeric|digits:11',
            'emp_address' => 'required',
            'emp_email' => ['required', 'email'],
            'emp_gender' => 'required',
            'emp_birthdate' => 'required',
            'emp_role' => 'required',
        ]);

        $formFields2 = $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);
        $formFields2['password'] = bcrypt($formFields2['password']);
        User::where('id',$employee->user_id)->update($formFields2 + array('email' => $request->emp_email, 'name'=>$request->emp_fullName));
        $employee->update($formFields);
        
        //return back()->with('message', 'Employee updated successfully!');
        return redirect('/employee')->with('message', 'An employee was updated successfully.');
    }

    // Delete Listing
    public function destroy(Employee $employee) {
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        $empid = $employee->id;
        User::where('id',$employee->user_id)->delete();
        attendance::where('emp_id', $empid)->delete();
        $employee->delete();
        return redirect('/employee')->with('message', 'Employee deleted successfully');
    }

    // // Manage Employees
    // public function manage() {
    //     return view('employees.manage', ['employees' => auth()->user()->employee()->get()]);
    // }
}
