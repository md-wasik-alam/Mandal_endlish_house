<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function newRequest(){
        $data["newRequest"]=Student::where('status','0')->get();
        $data["title"]="New Addmission Request";
        return view('admin.newrequests',$data);
    }
    public function studentList(){
        $data["newRequest"]=Student::where('status','1')->get();
        $data["title"]="Our Student";
        return view('admin.newrequests',$data);
    }
    public function addmitionAccept($id){
         $data=Student::where('id',$id)->first();
         $data['status']=1;
         $data['password']=$data->contact;
         $data['addmition_date']=Carbon::today();
         $data->save();
         return redirect()->back();

    }
    public function banners(){
        return view('admin.banner');
    }
}
