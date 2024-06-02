<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

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
            'course' =>'required',
        ]

      );
     Students::create($data);
     echo 'data saved successfully';
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
