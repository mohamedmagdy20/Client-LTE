<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;
class RequestController extends Controller
{
    
    //
    public function index()

    {
        return view('requests.index');
    }
    public function store(Request $request)

    {
        // Validations
            $request->validate([
                'student_name'=>'required',
                'student_university_id'=>'required|numeric',
                'title'=>'required',
                'message'=>'required',
                'student_email'=>'required|email',
                'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
                'type'=>'required'
            ]);
            // // store in db //
            $data = $request->all();
            $email =$request->student_email;

            // check if there are image selected or not
            if($request->file('image'))
            {
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('files'), $filename);
                $data['image']= $filename;
                $request = Requests::create($data);
                if($request)
                {
                    Mail::to($email)->send(new Subscribe($email,$request->student_name,$request->student_university_id));
                    return back()->with('success', 'Report Submited .. Check your Email');
                }else{
                    return back()->with('error', 'Error');
                }
            }
            else{
                $request = Requests::create($data);
                if($request)
                {
                    Mail::to($email)->send(new Subscribe($email,$request->student_name,$request->student_university_id));
                    return back()->with('success', 'Report Submited .. Check your Email');
                }else{
                    return back()->with('error', 'OOPS!');
                }
            }
    }
}
