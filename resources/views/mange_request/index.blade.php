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
            <th>Report Number</th>
            <th>Type</th>
            <th>Title</th>
            <th>Closed Date</th>
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
                    <td>{{$request->report_number}}</td>
                    @if($request->type == 'Suggestion')
                        <td><span class="badge bg-success">{{$request->type}}</span></td>
                    @else                          
                      <td><span class="badge bg-danger">{{$request->type}}</span></td>
                    @endif
                    <td>{{$request->title}}</td>
                    @if ($request->closed_date != null)
                        <td>{{$request->closed_date}}</td>
                    @else
                        <td><span class="badge bg-success">Still Open</span></td>
                    @endif

                    @if ($request->status =='Open')
                    <td><span class="badge bg-success">{{$request->status}}</span></td>                   
                    @else
                    <td><span class="badge bg-dark">{{$request->status}}</span></td>                   

                    @endif
                    <th class="p-1">
                        <a href="{{route('manage.request.show',$request->id)}}" class="btn btn-warning text-white"><i class="fa fa-eye"></i></a>
                        @if ($request->status == 'Closed')
                            <a href="{{route('request.open',$request->id)}}" class="btn btn-dark"><i class="fa fa-door-open"></i></a>
                       @else
                            <a href="{{route('request.close',$request->id)}}" class="btn btn-dark"><i class="fa fa-lock"></i></a>
                        @endif
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