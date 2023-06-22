<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function addStudent(Request $request) {
        $incomingFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        User::create($incomingFields);
        return 'Hello from adding function';
    }
}
