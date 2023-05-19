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

    <h3>Guardian:</h3>
    <ul>
            <li>{{ $student->guardian->name }} ({{ $student->guardian->Email }})</li>
            @if ($student->guardian && $student->guardian->address)
            <h3>Address:</h3>
                @foreach ($student->guardian->address as $adrs)
                    <li>{{$adrs->Area}} </li>
                    <li>{{$adrs->type}}</li>
                @endforeach
            @else
                <li> NO DATA AVAILABLE </li>      
            @endif
            

    </ul>
   
    <h3>Attendance</h3>
        <ul>
            @if ($student->attendance)
             @foreach ($student->attendance as $attendance)
                <li>Date:{{ $attendance->attendance_date }}</li>
                <li>morning_dropOff:  {{ $attendance->morning_dropOff }}</li>
                <li>morning_pickup:   {{ $attendance->morning_pickup }}</li>
                <li>evening_pickup:   {{ $attendance->evening_pickup }}</li>
                <li>evening_dropOff:  {{ $attendance->evening_dropOff }}</li>
             @endforeach
             @else
             <li>NO DATA AVAILABLE</li>
             @endif
        </ul>
    @endforeach
            
        </tbody>
    </table>
</div>

</body>
</html>