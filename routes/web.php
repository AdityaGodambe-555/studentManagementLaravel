<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\studentsController;

Route::get('/',[studentsController::class, 'home'])->name('home');

Route::view('/addstudent', 'layouts.addstudent')->name('addStudent');

//Edit Student Route
Route::get('/editstudent/{id}', [studentsController::class, 'edit'])->name('student.edit');

//Update Student Route
Route::post('/update', [studentsController::class, 'update'])->name('student.update');

//Add Student Route
Route::post('/addstudent', [studentsController::class, 'store'])->name('student.store');

//Delete Student Route
Route::get('/deletestudent/{id}', [studentsController::class, 'delete'])->name('student.delete');


