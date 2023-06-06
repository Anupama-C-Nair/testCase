<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
</head>
<body>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Student Name</th>
            <th scope="col">Class</th>
            <th scope="col">Date</th>
            <th scope="col">Morning pick-Up</th>
            <th scope="col">Morning Drop-Off</th>
            <th scope="col">Evening pick-Up</th>
            <th scope="col">Evening Drop-Off</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <th scope="row">{{ $attendance->Student->Name }}</th>
                <td>{{ $attendance->Student->Standard }} {{ $attendance->Student->Division}}</td>
                <td>{{ $attendance->attendance_date }}</td>
                <td>{{ $attendance->morning_dropOff }}</td>
                <td>{{ $attendance->morning_pickup }}</td>
                <td>{{ $attendance->evening_pickup }}</td>
                <td>{{ $attendance->evening_dropOff }}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>