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
     $std = Students::create($data);
        if($std){
             echo 'data saved successfully';       
        }else{
            echo 'error occured';
        }
     
    }
}
