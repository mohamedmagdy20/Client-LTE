@extends('layouts.app')
@section('content')
<div class="page-content p-2">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 p-2">Requests</h4>
                </div>
            </div>
        </div>                      
<div class="card">
<div class="card-body">


    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Student Code</th>
            <th>Student Email</th>
            <th>Type</th>
            <th>Title</th>
            <th>Status</th>
            <th>Operations</th>

        </thead>


        <tbody>
            @foreach ($requests as $index => $request )
                <tr>
                    <td>{{$index}}</td>
                    <td>{{$request->student_name}}</td>
                    <td>{{$request->student_university_id}}</td>
                    <td>{{$request->student_email}}</td>
                    @if($request->type == 'Suggestion')
                        <td><span class="badge bg-success">{{$request->type}}</span></td>
                    @else                          
                      <td><span class="badge bg-danger">{{$request->type}}</span></td>
                    @endif
                    <td>{{$request->title}}</td>
                    <td>{{$request->status}}</td>
                    <th>
                        <a href="{{route('manage.request.show',$request->id)}}" class="btn btn-warning text-white"><i class="fa fa-eye"></i></a>
                    </th>
                </tr>    
            @endforeach
            
        
        </tbody>
    </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

     
        
    </div> <!-- container-fluid -->
</div>
@endsection