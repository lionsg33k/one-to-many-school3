<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teachers =  Teacher::all();
        $students =  Student::all();

        return view("student.student", compact("teachers", "students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        request()->validate(
            [
                "name" => "required",
                "teachers.*" => "required|integer"
            ]
        );

        $teachers =  $request->teachers;

        $student =  Student::create([
            "name" => $request->name
        ]);



        $student->teachers()->attach($teachers);


        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
