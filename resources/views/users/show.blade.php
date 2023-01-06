@extends('layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">
    
    
    <div class="row ">
        <div class="col-lg-6 m-auto">
            <div class="card"><br><br>
    <center>
                <img class="rounded-circle w-25" src="{{asset('static/Admin-Profile-PNG-Clipart.png')}}" alt="Card image cap">
    </center>
                <div class="card-body">
                    <div class="m-auto text-center">
                    <h4 class="card-title ">name : {{ auth()->user()->name }} </h4>
                    <br>

                        <h4 class="card-title ">email : {{ auth()->user()->email }} </h4>
                    <br>
                        <a href="{{route('admin.edit',auth()->user()->id)}}" class="btn btn-info btn-rounded waves-effect waves-light" >edit profile</a>
                    </div>
                </div>
            </div>
        </div> 
                                
            
                            </div> 
    
    
    </div>
    </div>
    
    
@endsection