<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StudentsController extends Controller
{
    public function getAllStudents(){

        $students = Students::all();
       // dd( $students );
       return view('basic',compact('students'));
    }
    public function create(){
        return view('form');
    }
    public function store(Request $request){
     $data = $request->validate(
        [
            'name' =>'required|string|max:20',
            'dob' =>'required',
            'course' =>'required|string',
        ]

      );
     $std = Students::create($data);
        if($std){
             echo 'data saved successfully';
        }else{
            echo 'error occured';
        }

     Mail::send('Html.view', $data, function ($message) {
         $message->from('john@johndoe.com', 'John Doe');
         $message->sender('john@johndoe.com', 'John Doe');
         $message->to('john@johndoe.com', 'John Doe');
         $message->cc('john@johndoe.com', 'John Doe');
         $message->bcc('john@johndoe.com', 'John Doe');
         $message->replyTo('john@johndoe.com', 'John Doe');
         $message->subject('Subject');
         $message->priority(3);
         $message->attach('pathToFile');
     });
    }
}
