@extends('layout')

@section('page-content')
    <legend style=" font-weight: bold; font-size: 32px;" class="text-center mt-5">All Employee Information
    </legend>

    <div style="justify-items: center; margin-top:16px">
        <table class="table table-striped rounded-top" border="1" style="margin-bottom: 12px">

            {{--  thead-dark--}}
        <thead class="table-primary">
            <th  class=" p-2">Id</th>
            <th  class=" p-2">Name</th>
            <th class=" p-2">Title</th>
            <th class=" p-2">Option</th>
        </thead>
            @foreach ($emplyees as $e)
                <tr>
                    <td style="padding-left: 5px; padding-right: 5px;">{{ $e->id }}</td>
                    <td style="padding-left: 5px; padding-right: 5px;">{{ $e->name }}</td>
                    <td style="padding-left: 5px; padding-right: 5px;">{{ $e->job_title }}</td>
                    <td class="rounded-2" style="padding-left: 5px; padding-right: 5px;"><a href="{{ route('details', $e->id) }}"><button>View
                                Details</button></a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <div style="justify-items: center">
        {{ $emplyees->links() }}
    </div>

    {{-- <ol>
      @foreach ($emplyees as $singleEmployee)
       <li>{{$singleEmployee->name}}</li>
       <li>{{$singleEmployee->job_title}}</li>
          
      @endforeach
   </ol> --}}

    {{-- <form method="" action="#">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="title" name="title"
                       placeholder="Title">
                <div class="invalid-feedback">Error message</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form> --}}
@endsection
