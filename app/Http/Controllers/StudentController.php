<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function addStudent(Request $request) {
        $incomingFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        return 'Hello from adding function';
    }
}
