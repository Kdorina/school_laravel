<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
// use App\Model\Student;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/" , [SchoolController::class, "index"]);
Route::get("/uj-tanulo" , [SchoolController::class, "newStudent"]);
Route::post("/submit-student", [SchoolController::class, "storeStudent"]);
Route::get("/keres-tanulo", [SchoolController::class, "showStudent"]);
Route::get("/show-update-student", [SchoolController::class, "showUpdateStudent"]);
Route::post("/update-student", [SchoolController::class, "updateStudent"]);
Route::get("/delete-student", [SchoolController::class, "destroy"]);