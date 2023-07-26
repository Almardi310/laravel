<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{

    public function index()
    {
        $myCourses = Course::all();
        return view('course.index',compact('myCourses'));
    }


    public function create()
    {
        return view('course.create');
    }


    public function store(StoreCourseRequest $request)
    {
        $myCourse = new Course();
        $myCourse->code = $request->input('code');
        $myCourse->name = $request->input('name');
        $myCourse->description = $request->input('description');
        $myCourse->save();
        return redirect()->route('course.index');
    }


    public function show(Course $course)
    {
        $myCourse = Course::where('id', $course->id)->first();
        if($myCourse){
            return view('course.show', compact('myCourse'));
        }
    }


    public function edit(Course $course)
    {
        $myCourse = Course::where('id', $course->id)->first();
        if($myCourse){
            return view('course.edit', compact('myCourse'));
        }
    }


    public function update(UpdateCourseRequest $request, Course $course)
    {
        $myCourse = Course::where('id', $course->id)->first();
        if($myCourse){
            $myCourse->code = $request->input('code');
            $myCourse->name = $request->input('name');
            $myCourse->description = $request->input('description');
            $myCourse->save();
            return redirect()->route('course.index');
        }
    }


    public function destroy(Course $course)
    {
        Course::findorFail($course->id)->delete();
        return redirect()->route('course.index');
    }
}
