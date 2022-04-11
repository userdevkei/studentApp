<?php

namespace App\Http\Controllers;

use App\Intake;
use Illuminate\Http\Request;

class Applicationmodule extends Controller
{
    public function intakeIndex(){
        $intake = Intake::all();

        return $intake;

        return view('intake.index');
    }

    public function intakeCreate(){
        return view('intake.create');
    }

    public function attedanceIndex(){
        return view('attendance.index');
    }

    public function studylevelIndex(){
        return view('studyLevel.index');
    }

    public function coursesIndex(){
        return view('courses.index');
    }

//    public function attedanceIndex(){
//        return view('intake.create');
//    }
}
