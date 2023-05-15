<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>

<div>
    <h1>Student Details</h1>
    @foreach($students as $student)
    <h2>{{ $student->Name }}</h2>

    <h3>Guardian</h3>
    <ul>
            <li>{{ $student->guardian->name }} ({{ $student->guardian->Email }})</li>
            @if ($student->guardian && $student->guardian->address)
                @foreach ($student->guardian->address as $adrs)
                    <li>{{$adrs->Area}} </li>
                    <li>{{$adrs->type}}</li>
                @endforeach
            @else
                <li> NO DATA AVAILABLE </li>      
            @endif
            

    </ul>
    
    <h3>Attendance</h3>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Morning Drop off</th>
                <th>Morning pick up</th>
                <th>Evening Drop off</th>
                <th>Evening pickup</th>
            </tr>
        </thead>
        <tbody>
            @if ($student->attendance)
                @foreach ($student->attendance as $attendance)
                <tr>
                    <td>{{ $attendance->attendance_date }}</td>
                    <td>{{ $attendance->morning_dropOff }}</td>
                    <td>{{ $attendance->morning_pickup }}</td>
                    <td>{{ $attendance->evening_pickup }}</td>
                    <td>{{ $attendance->evening_dropOff }}</td>
                </tr>
            @endforeach
            @else
                <td> NO DATA AVAILABLE </td>
            @endif
    @endforeach
            
        </tbody>
    </table>
</div>

</body>
</html>