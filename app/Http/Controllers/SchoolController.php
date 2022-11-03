<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class SchoolController extends Controller
{
    public function index(){
        
        $students = Student::with("course")->get();
        
        return view("list_student", [
            "students" => $students
        ]);
    }

    public function newStudent(){

        return view("new_student");
        
    }

    public function storeStudent(Request $request){

        $course = $request->course;
        $courses = Course::where("name", $course )->get();
        $course_id = 0;
        foreach ($courses as $course ) {

        $course_id = $course->id;

        }

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->course_id = $course_id;

        $student->save();

        $request->session()->flash("success", "sikeres írás");
        return redirect("/");

    }

    public function showStudent(Request $request){

        $name = $request->name;
        $students = Student::with("course")->where("name", $name)->get();
        // print_r($students);

        return view("list_student", [
            "students" => $students
        ]);
    }

    public function showUpdateStudent(Request $request){

        $name = $request->name;
        $student = Student::with("course")->where("name", $name)->first();
        // print_r($students);

        return view("update_student", [
            "student" => $student
        ]);

    }

    public function updateStudent(Request $request){

        $course = $request->course;
        $courses = Course::where("name", $course )->get();
        $course_id = 0;
        foreach ($courses as $course ) {

        $course_id = $course->id;

        $student = Student::where( "name", $request->name)->first();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->course_id = $course_id;
        $student->save();

        return redirect("/");
        }

       
    }
    public function destroy(Request $request){
            
        $student = Student::where("name", $request->name)->delete();
        $id = $student->id;

        $student->delete($id);

        return redirect("/");

    }
}
