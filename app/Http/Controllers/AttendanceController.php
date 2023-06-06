<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = attendance::with('Student')->get();
        return view('attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attendanceTypes = attendance::$attendanceTypes;
        $students = Student::get();
        return view('attendance.create',compact('attendanceTypes', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attendance = new attendance([
            'attendance_date' => $request->attendance_date,
            'morning_pickup' => $request->has('m_pickup')  ? 'Yes' : 'No' ,
            'morning_dropOff' => $request->has('m_dropOff')  ? 'Yes' : 'No',
            'evening_pickup' => $request-> has('e_pickup')  ? 'Yes' : 'No',
            'evening_dropOff' => $request-> has('e_dropOff')  ? 'Yes' : 'No',
            'student_id' => $request->sId,
        ]);
        dd($attendance);
        $attendance->save();

        return redirect()->route('attendanceIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $attendance = attendance::find($id);
        dd($attendance);
        return ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attendance = attendance::find($id);
        if($attendance == null){
            return  redirect()->route('attendanceCreate');
        }
        return view('attendance.edit', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $attendance = attendance::find($id);
        if($attendance === null){
            return redirect()->route('attendanceCreate')->with('error','Corresponding Attendance  not found');
        }
        $attendance ->attendance_date = $request->attendance_date;
        $attendance -> morning_pickup = $request -> m_pickup  == 'm_pickup' ? 'Yes' : 'No';
        $attendance -> morning_dropOff = $request -> m_dropOff == 'm_dropOff' ? 'Yes' : 'No';
        $attendance -> evening_pickup = $request -> e_pickup == 'e_pickup'? 'Yes' : 'No';
        $attendance -> evening_dropOff = $request -> e_dropOff == 'e_dropOff' ? 'Yes' : 'No';
        $attendance->save();

        return redirect()->route('attendanceShow', ['id' => $attendance->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
