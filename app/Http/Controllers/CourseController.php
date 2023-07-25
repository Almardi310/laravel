<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $myCourses = Course::all();
        return view('course.index',compact('myCourses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $myCourse = new Course();
        $myCourse->code = $request->input('code');
        $myCourse->name = $request->input('name');
        $myCourse->description = $request->input('description');
        $myCourse->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $myCourse = Course::where('id', $course->id)->first();
        if($myCourse){
            return view('course.show', compact('myCourse'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $myCourse = Course::where('id', $course->id)->first();
        if($myCourse){
            return view('course.edit', compact('myCourse'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        Course::findorFail($course->id)->delete();
        return redirect()->route('course.index');
    }
}
