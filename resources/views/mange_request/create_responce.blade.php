@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
       <!-- start page title -->
       <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 p-2">Replay a Report</h4>
            </div>
        </div>
    </div>             
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">                
                <form method="post" action="{{ route('responce.add',$request->id) }}"  class="needs-validation"  novalidate >
                    @csrf
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-1 col-form-label">Replay</label>
                    <div class="col-sm-11">
                        <textarea name="responce" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('responce')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <!-- end row -->
                <center>
                    <input type="submit" class="btn btn-info waves-effect waves-light validate" value="Send">
                </center>
                </form>
                 
               
               
            </div>
        </div>
    </div> <!-- end col -->
    </div>
     
    
    
    </div>
    </div>
@endsection
