@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
       <!-- start page title -->
       <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 p-2">Edit {{Auth::user()->name}} Info</h4>
            </div>
        </div>
    </div>             
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <form method="post" action="{{ route('admin.update',Auth::user()->id) }}"  class="needs-validation"  novalidate >
                    @csrf
    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-1 col-form-label">Name</label>
                    <div class="col-sm-11">
                        <input name="name" class="form-control" value="{{$user->name}}" type="text" id="example-text-input" required>
                        @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
    
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-1 col-form-label">Email</label>
                    <div class="col-sm-11">
                        <input name="email" class="form-control" type="text" id="example-text-input" value="{{$user->email}}" required>
                        @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->
    
    <input type="submit" class="btn btn-info waves-effect waves-light validate" value="Edit">
                </form>
                 
               
               
            </div>
        </div>
    </div> <!-- end col -->
    </div>
     
    
    
    </div>
    </div>
@endsection
