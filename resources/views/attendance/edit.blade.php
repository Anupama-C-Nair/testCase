<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
</head>
<body>
   <form action="{{ route('attendanceUpdate',['id' =>$attendance->id]) }}" method="POST">
        @csrf
        @method('PUT')
        {{$attendance->student->Name}}
        <div>
            <label for="adate"> Date </label>
            <input type="date" name="attendance_date" value= '{{ $attendance->attendance_date}}'>
        </div>
        <div>
            <label for="Morning Pick-Up">Morning Pick-Up </label>
            <input type="checkbox" name="m_pickup" value="m_pickup" {{$attendance->morning_pickup == 'Yes' ? 'Checked' : ' '}}>
        </div>
        <div>
            <label for="Morning Drop-Off">Morning Drop-Off </label>
            <input type="checkbox" name="m_dropOff" value="m_dropOff" {{$attendance->morning_dropOff == 'Yes' ? 'Checked' : ' '}}>
        </div>
        <div>
            <label for="Evening Pick-UP">Evening Pick-Up </label>
            <input type="checkbox" name="e_pickup" value="e_pickup" {{$attendance->evening_pickup == 'Yes' ? 'Checked' : ' '}}>
        </div>
        <div>
            <label for="Evening Drop-Off">Evening Drop-Off </label>
            <input type="checkbox" name="e_dropOff" value="e_dropOff" {{$attendance->evening_dropOff == 'Yes' ? 'Checked' : ' '}}>
        </div>
        <button type="submit"> Save </button>
    </form> 
</body>
</html>