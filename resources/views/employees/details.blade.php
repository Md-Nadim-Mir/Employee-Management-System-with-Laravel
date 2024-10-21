@extends('layout')

@section('page-content')
   

   <legend style="margin-top: 20px; font-weight: bold; font-size: 32px;" class="text-center mt-5">Employee Details</legend>
   
   <table class="table table-striped rounded-top fw-bold" border="1" >

      <tr>
        <th>id</th>
        <td style="padding-right: 20px;">{{$e->id}}</td>
      </tr>
      
      <tr>
        <th>Name</th>
        <td style="padding-right: 20px;">{{$e->name}}</td>
      </tr>

      <tr>
        <th>Joining Date</th>
        <td style="padding-right: 20px;">{{$e->joining_date}}</td>
      </tr>
      
      <tr>
        <th>Salary</th>
        <td style="padding-right: 20px;">{{$e->salary}} tk</td>
      </tr>

      <tr>
        <th>Email</th>
        <td style="padding-right: 20px;">{{$e->email}}</td>
      </tr>
      
      <tr>
        <th>Mobile No</th>
        <td style="padding-right: 20px;">{{$e->mobile_no}}</td>
      </tr>

      <tr>
        <th>Address</th>
        <td style="padding-right: 20px;">{{$e->address}}</td>
      </tr>
      
   </table>

  {{-- <a href="http://127.0.0.1:8000/employees">
      <button>Back to employees table</button>
  </a> --}}
  
  <a href="{{ route('home', $e->id) }}"><button class="btn btn-primary fw-bold">
    Go Back</button></a>
  

@endsection



