<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Jobs\SendAttendanceJob;

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
        
        SendAttendanceJob::dispatch($attendance);
        
        return to_route('main.index');
    }
}