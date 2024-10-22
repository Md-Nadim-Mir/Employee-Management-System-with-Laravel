@extends('layout')

@section('page-content')
    
   {{-- <a href="{{ route('home'}}"><button class="btn btn-primary fw-bold">
    Go Back</button></a> --}}

    {{-- <a class='btn btn-primary' href="{{route('home')}}">Go Back</a> --}}

    <legend style=" font-weight: bold; font-size: 32px;" class="text-center mt-5 mb-5">Add Employee Details</legend>

    <div class="text-end ">
        <a class='btn btn-primary fw-bold' href="{{route('home')}}">Go Back</a>
    </div>

    <form action="{{route('employees.store')}}" method="POST"  class="fw-bold ">
        {{ csrf_field() }}
     <div class="d-flex justify-content-between">

        <div  class="mb-3 flex-fill m-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" maxlength="255"  required value={{old('name')}}>
            {{-- error find --}}
            <div>{{$errors->first('name')}}</div>
        </div>
        <div class="mb-3 flex-fill m-2">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" maxlength="100" required value={{old('job_title')}}>
             {{-- error find --}}
             <div>{{$errors->first('job_title')}}</div>
        </div>
             
     </div>

       
   <div class="d-flex justify-content-between">  
      <div class="mb-3 flex-fill m-2">
            <label for="joining_date" class="form-label">Joining Date</label>
            <input type="date" class="form-control" id="joining_date" name="joining_date" required value={{old('joining_date')}}>
             {{-- error find --}}
             <div>{{$errors->first('joining_date')}}</div>
        </div>
        <div class="mb-3 flex-fill m-2">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" id="salary" name="salary"  required value={{old('salary')}}>
            {{-- error find --}}
            <div>{{$errors->first('salary')}}</div>
      </div>
    </div>

    <div class="d-flex justify-content-between">  

        <div class="mb-3 flex-fill m-2">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" id="email" name="email" maxlength="255" value={{old('email')}}>
            {{-- error find --}}
            <div>{{$errors->first('email')}}</div>
        </div>
        <div class="mb-3 flex-fill m-2">
            <label for="mobile_no" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" required value={{old('mobile_no')}}>
            {{-- error find --}}
            <div>{{$errors->first('mobile_no')}}</div>
        </div>

    </div>     

   
    <div class="mb-3 flex-fill m-2 w-1/2">
            <label for="address" class="form-label">Address</label>
         
            <input type="text" class="form-control w-1/2"  id="address" name="address" maxlength="100" required value={{old('address')}}>

            {{-- error find --}}
            <div>{{$errors->first('address')}}</div>
    </div>

     <button type="submit" class="btn btn-primary fw-bold flex-fill">Submit</button>
       

    </form>

@endsection



