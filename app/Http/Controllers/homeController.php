<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homepage() {
        return view('main');
    }

    public function studentspage() {
        return view('student-management');
    }
}
