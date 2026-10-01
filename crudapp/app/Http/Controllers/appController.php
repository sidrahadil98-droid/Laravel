<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class appController extends Controller
{
    //First make Controller then model 

    function index(){
               //Model name
        $data = Student::all();

        return view("index", ['students'=> $data]);
                            //table column name
    }
    
     function addUserForm(){
        return view("addUser");
    }

    function addUser(Request $request){
        Student::create($request ->all());

        return redirect("/");

    }

     function delete($id){
        $data = Student::where('uid',$id)->first();
        $data->delete();
        return redirect("/");
    }

    
     function edit($id){
        $data = Student::where('uid',$id)->first();
        return view('/edit', ['student' => $data]);
    }

    function update(Request $request){

        $data = Student::where('uid', $request->uid)->first();

        $data->update($request->all());

        return redirect('/');



    }
}
