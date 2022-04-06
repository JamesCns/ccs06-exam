<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function start(){
        return view('begin');
    }

    public function studentGrades(){
        return view('enter-grades');
    }


}
