<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CourseController extends Controller
{
    public function index(){
        $cours = Course::all();
        return Inertia::render('Courses/home',['courses' => $cours]);
    }
}
