<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance.index');
    }

    public function store(Request $request)
    {
        $attendance =  Attendance::create([
            'name' => $request->name
        ]);

        return to_route('main.index');
    }
}