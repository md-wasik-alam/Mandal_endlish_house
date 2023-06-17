<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
          return view('home');
    }

  
    public function store(Request $request)
    {
      if($request->method()=='POST'){
        $data = $request -> validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contact' => 'required|integer|digits:10|unique:App\Models\Student,contact',
            ]);
             
           

            Student::create($data);

            return redirect()->back();
      }
      return view('applay');
    }

   
}
