<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use App\Mail\Responce;
use Illuminate\Support\Facades\Mail;

class MangeRequestController extends Controller
{
    //
    public function index()
    {
        $requests = Requests::all();
        return view('mange_request.index',compact('requests'));
    }

    public function show($id)
    {
        $request = Requests::find($id);

        if($request)
        {
            return view('mange_request.show',compact('request'));
        }else{
            return back()->with('error', 'Error');
        }
    }

    public function createRepsonce($id)
    {
        $request = Requests::find($id);
        if($request)
        {
            return view('mange_request.create_responce',compact('request'));
        }else{
            return back()->with('error', 'Error');
        }
    }

    public function makeResponce(Request $request ,$id)
    {
        // return $request->all();
        $requests = Requests::find($id);
        if($requests)
        {
            $requests->response = $request->responce;
            $requests->closed_date = date('Y-m-d H:i:s');
            $requests->status = 'Closed';
            $requests->save();
            Mail::to($requests->student_email)->send(new Responce($requests->student_email));
            return back()->with('success', 'Repsponce Created');

        }else{
            return back()->with('error', 'Error');
        }
    }

}
