<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
  
  //index route
     public function index(){
        // $employee = Employee::all();
        $e = Employee::paginate(10);
      //   $e = Employee::limit(100)->get();
        // dd($e);
        return view("employees.index")->with("emplyees",$e);
     }

     


     //   new code 
     // details route

     public function details($emp_id){
      // echo 'employee id :  ', $emp_id;

        $employee = Employee::find($emp_id);
        return view("employees.details")->with("e",$employee);
      
     }





    //  create employee
    public function create(){
       return view("employees.create");
    }

    // store data
    public function store(Request $request){
      //  dd($request->all());

      $validate_rules=[

        "name"=> "required | string| max:255 ",
        "job_title"=> "required|max:100|string",
        "joining_date"=> "required|date",
        "salary"=> "required|numeric|min:0",
        "email"=> "nullable|email|max:255",
        "mobile_no"=> "required|string|max:30",
        "address"=> "required|string",
         
      ];

      $request->validate($validate_rules);

      $e= Employee::create($request->all());
      return redirect()->route("employees.details",$e->id);
    }


    //  edit 
     
    public function edit($emp_id){

       $e= Employee::find($emp_id);
       return view('employees.update')->with('employee',$e);

    }


    //  update 
    public function update(Request $request, $emp_id){


      $validate_rules=[

        "name"=> "required| string | max:255 ",
        "job_title"=> "required|max:100|string",
        "joining_date"=> "required|date",
        "salary"=> "required|numeric|min:0",
        "email"=> "nullable|email|max:255",
        "mobile_no"=> "required|string|max:30",
        "address"=> "required|string",
         
      ];

      $request->validate($validate_rules);

      $employee = Employee::find($emp_id);
      $employee->update($request->all());
      return redirect()->route("employees.details",$employee->id);


    }



    //  delete

    public function destroy($emp_id){
         $e= Employee::find($emp_id);

         $e->delete();  

         return redirect()->route("home");
    }


    //  search 
    public function search(Request $request){
      
       $text='%' . $request->search .'%'; 
       $es= Employee::where('name','LIKE', $text )
                  //  ->orWhere('job_title','LIKE', $text )
                   ->paginate(10);
       
       return view('employees.index')->with('emplyees',$es);             

    }

}
