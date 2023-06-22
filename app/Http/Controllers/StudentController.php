<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function addStudent(Request $request) {
        $incomingFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'sign' => 'nullable',
            'group' => 'required',
            'age' => 'required|integer',
        ]);
        
        Students::create($incomingFields);
        return 'Hello from adding function';
    }
}
