<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\students;

class studentsController extends Controller
{
    public function store(Request $request){
        // print_r($request->all());
        $request->validate([
            'sname'=>'required',
            'sclass'=>'required',
            'rollno'=>'required',
        ]);
        $student= new students;
        $student->sname=$request['sname'];
        $student->sclass=$request['sclass'];
        $student->rollno=$request['rollno'];
        $student->save();

        return redirect(route("home"));
    }

    public function home(){
        $students=students::all();
        $data=compact('students');
        return view('home') ->with($data);
    }

    public function delete($id){
        students::find($id)->delete();
        return redirect(route("home"));
    }

    public function edit($id){
       $student=students::find($id);
       $data=compact('student');
       return view('layouts.editstudent') ->with($data);
    }

    public function update(Request $request){
        // print_r($request->all());
        $request->validate([
            'sname'=>'required',
            'sclass'=>'required',
            'rollno'=>'required',
            'id'=>'required',
        ]);
        $id=$request['id'];
        $student=students::find($id);
        $student->sname=$request['sname'];
        $student->sclass=$request['sclass'];
        $student->rollno=$request['rollno'];
        $student->save();

        return redirect(route("home"));
    }
}
