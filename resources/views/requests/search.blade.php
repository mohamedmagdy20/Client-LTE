@extends('front.app')
@section('front')
<section>
    <form  method="GET" action="{{route('request.search')}}" class="search_form"  >
        <input class="search-input"  name="report_number"
               type="search" placeholder="Search With Report Number">
        <button type="submit" class="search-button" value="search" >
          <i class="fa fa-search" aria-hidden="true"></i> 
    </form>
    
</section>
<section id="search-result">
    <div class="container">
        @if(empty($report))
        <div style="text-align: center"> 
            <h2>No data found</h2>
        </div> 
    @else 
    <div class="search-container">
        <h4 style="margin: 8px">Student Information</h4>
        <div class="list-info">
            <ul>
                <li><span>Student Name: </span>{{$report->student_name}}</li>
                <li><span>Student code: </span>{{$report->student_university_id}}</li>
            </ul> 
            <ul>
                <li><span>Student Email: </span>{{$report->student_email}}</li>
                <li><span>Report Number: </span>{{$report->report_number}}</li>
            </ul>
        </div>

       <h4 style="margin: 8px">Report Details</h4>
       <div class="search-details">
            <div class="list-details">
                <h3 style="text-align:center;color:#333" >{{$report->title}}</h3>
                <div class="row mb-3">
                    <div class="col-sm-11">
                        <textarea name="responce" disabled class="form-control" id="" cols="30" rows="10">{{$report->message}}</textarea>
                    
                    </div>
                </div>
                <!-- end row -->
                <div class="file-src">
                    <a href="{{asset('files/'.$report->image)}}"><img  src="{{asset('files/'.$report->image)}}" alt="gg"></a> 
                </div>
            </div>

       </div>

       <h4 style="margin: 8px">Replay Details</h4>
       @if ($report->response == null)
       <div class="container">
            <div style="text-align: center"> 
                <h5>No Replay yet</h5>
            </div> 
       </div>
          @else

          <div class="row mb-3">
            <div class="col-sm-11">
                <textarea name="r" disabled class="form-control" id="responce" cols="30" rows="10" >{{$report->response}}</textarea>
            
            </div>
        </div>
        
       @endif
       
    </div>
    </div>
    @endif 
    </div>
    
</section>


  @endsection