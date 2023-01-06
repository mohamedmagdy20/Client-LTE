@extends('front.app')
@section('front')
<div class="container">
    <form method="POST" action="{{route('request.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <h4>Report</h4>
        <div class="input-group input-group-icon">
          <input type="text" name="student_name" value="" placeholder="Full Name" required/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
          @error('student_name')
        <span style="color: red"> {{ $message }} </span>
        @enderror
        </div>
        
        <div class="input-group input-group-icon">
            <input type="text" name="student_university_id" placeholder="Student Code" required/>
            <div class="input-icon"><i class="fa fa-key"></i></div>
            @error('student_university_id')
        <span style="color: red"> {{ $message }} </span>
        @enderror
          </div>
          
        <div class="input-group input-group-icon">
          <input type="email" name="student_email"  placeholder="Email Adress"/>
          <div class="input-icon"><i class="fa fa-envelope"></i></div>
          @error('student_email')
          <span style="color: red"> {{ $message }} </span>
          @enderror
        </div>
       
      </div>
      <div class="row">
        <h4>Report Type</h4>
        <div class="input-group">
          <input id="complaint" type="radio" name="type" value="1" checked="true"/>
          <label for="complaint"><span><i class="fa fa-cc-visa"></i>Complaint</span></label>
          <input id="Suggestion" type="radio" name="type" value="2"/>
          <label for="Suggestion"> <span><i class="fa fa-messages"></i>Suggestion</span></label>
        
        </div>
      </div>
      <div class="row">
        <h4>Report Details</h4>

        <div class="input-group input-group-icon">
            <input type="test" name="title" placeholder="Title"/>
            <div class="input-icon"><i class="fa fa-heading"></i></div>
            @error('title')
            <span style="color: red"> {{ $message }} </span>
            @enderror
        </div>
        
        <div class="input-group input-group-icon">
        <textarea name="message" id="" cols="62" rows="10"></textarea>
            @error('message')
            <span style="color: red"> {{ $message }} </span>
            @enderror
          
          </div>
         
          (optional)
          <div class="input-group input-group-icon">
            <input type="file" name="image" placeholder="File"/>
            <div class="input-icon"><i class="fa fa-file"></i></div>
          </div>
      </div>
        <center>
            <input type="submit" value="Submit" class="btn btn-warning">
        </center>
    </form>
  </div>
@endsection