<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Jobs\SendAttendanceJob;
use App\Http\Requests\AttendanceRequest;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance.index');
    }

    public function store(AttendanceRequest $request)
    {
        $attendance =  Attendance::updateOrCreate([
            'email' => $request->email
        ],
        [
            'name' => $request->name,
            'email' => $request->email
        ]);

        SendAttendanceJob::dispatch($attendance);
        
        return to_route('main.index');
    }
}