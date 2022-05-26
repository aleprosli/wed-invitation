<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
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
            'name' => $request->name,
            'email' => $request->email
        ]);

        return to_route('main.index');
    }
}