<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource("/student",StudentController::class); 

Route::controller(StudentController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::match(['GET','POST'],'/applay_for_addmition','store')->name('student.Request');
});

Route::get('/admin', [AdminController::class,'index'])->name('admin');

Route::prefix("admin")->group(function () {
    Route::controller(AdminController::class)->group(function () {
        //without auth middleware
        Route::match(["post", "get"], '/login', 'adminlogin')->name('admin.login');
        Route::get('/new-request','newRequest')->name('admin.newRequest');
        Route::get('/students','studentList')->name('admin.students');
        Route::get("/addmition-accept/{id}",'addmitionAccept')->name("admin.addmitionAccept");

        // routes with middleware
        Route::middleware('auth:admin')->group(function () {
           
        });
    });
});


