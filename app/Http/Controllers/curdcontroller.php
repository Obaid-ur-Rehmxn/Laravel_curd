<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class curdcontroller extends Controller
{
    function index(){
        $feedbacks = feedback::all();
        return view('welcome',['feedbacks'=>$feedbacks]);
    }

    function add(){
        return view('add');
    }

    function new(Request $request){
        $feedback = new feedback;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect('/');
    }

    function edit($id){
        $feedback = feedback::where('id',$id)->first();
        return view('edit',['feedback'=>$feedback]);
    }

    function update(Request $request, $id){
        $feedback = feedback::where('id',$id)->first();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect('/');
    }

    function destroy($id){
        $feedback = feedback::where('id',$id)->first();
        $feedback->delete();
        return redirect('/');
    }
}
