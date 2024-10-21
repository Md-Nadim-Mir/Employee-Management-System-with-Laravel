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
      // Employee::create($request->all());
      // return redirect()->route("employees.index");
    }


}
