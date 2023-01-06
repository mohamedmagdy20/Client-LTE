<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        if($user)
        {
            return view('users.edit',compact($user));   
        }else
        {
            return back()->with('error', 'User not Found');
        }
    }
    public function show()
    {
        return view('users.show');
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $data  =$request->all();
        $user = User::find($id);
        $user->update($data);
        return back()->with('success', 'User Updated');
    }

    public function Approve($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user->approved = true;
            $user->email_verified_at = time();
            $user->save();
            return back()->with('success', 'User Updated');
        }else{
            return back()->with('error', 'ERROR');

        }           
    }

    public function Block($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user->approved = false;
            $user->email_verified_at = time();

            $user->save();
            return back()->with('success', 'User Updated');
        }else{
            return back()->with('error', 'User Updated');

        }
    }
}
