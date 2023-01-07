@extends('layouts.app')
@section('content')
<div class="pt-3">
    <div class="card w-75 m-auto  p-2">
        <img class="card-img-top w-25 m-auto" src="{{asset('files/'.$request->image)}}" alt="Card image cap">
        <div class="card-body ">
          <h3 class="text-center">{{$request->title}}</h3>
          <p class="card-text">{{$request->message}}</p>
          <div class="d-flex m-1">
            <a href="{{route('responce.create',$request->id)}}" class="btn btn-primary">Add Responce</a>
            <a href="{{route('home')}}" class="btn btn-secondary  ml-1">Back</a>
          </div>

        </div>
      </div>
</div>
.
@if ($request->response == Null)
<div class="card w-75 m-auto">
  <div class="card-body">
   There is Not Responce yet.
  </div>
</div>      
@else
<div class="card w-75 m-auto">
  <div class="card-body">
   {{$request->response}}
  </div>
</div>
@endif

@endsection