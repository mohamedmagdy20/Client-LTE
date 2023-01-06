@extends('layouts.app')
@section('content')
<div class="page-content p-2">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 p-2">Users</h4>
                </div>
            </div>
        </div>                      
<div class="card">
<div class="card-body">


    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>State</th>
            <th>Date Enterd</th>
            <td>Operations</td>
        </thead>


        <tbody>
            @foreach ($users as $index => $user )
                <tr>
                    <td>{{$index}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->approved == 1)
                            <td><span class="badge bg-success">Approved</span></td>
                    @else                          
                      <td><span class="badge bg-warning">Pending</span></td>
                    @endif
                    <td>{{$user->email_verified_at}}</td>
                    <td>
                        @if ($user->id != 1)
                            @if ($user->approved == 0)      
                                <a href="{{route('admin.approve',$user->id)}}" class="btn btn-success">Approved</a>
                            @else
                                <a href="{{route('admin.block',$user->id)}}" class="btn btn-danger">Block</a>
                            @endif
                        @endif

                    </td>
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