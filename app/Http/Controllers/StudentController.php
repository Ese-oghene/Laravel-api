<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
//use Validator;

class StudentController extends Controller
{
    public function index(){

       $student = Student::all();
       $data = [
        'status'=> 200,
        'student' => $student

       ];
       return response()->json($data, 200);
    }

    public function upload(Request $request){
        $validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required|email'
        ]);
        
        if ($validator->fails()) {
        $data = [
            "status"=>422,
            "message"=>$validator->messages() 
        ];

          return response()->json($data, 422);
        }else {
            $student = new Student;

            $student->name=$request->name;
            $student->email=$request->email;
            $student->phone=$request->phone;

            $student->save();

            $data=[
                'status'=>200,
                'message'=>'Data upload successfully'
            ];

            return response()->json($data, 200);
   
        }
    }
}
