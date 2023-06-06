<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atendance</title>
</head>
<body>
    <form action="{{route('attendanceStore')}}" method="POST">
        @csrf
        <div>
            Student Name: 
            <select name="sId" id="sName">
            @foreach ($students as $student)
            <option value="{{$student->id}}"> {{$student->Name}} </option>
            @endforeach
        </select>
        </div>
        <div>
            <label for="adate"> Date </label>
            <input type="date" name="attendance_date">
        </div>
        <div>
            <label for="Morning Pick-Up">Morning Pick-Up </label>
            <input type="checkbox" name="m_pickup" value="m_pickup">
        </div>
        <div>
            <label for="Morning Drop-Off">Morning Drop-Off </label>
            <input type="checkbox" name="m_dropOff" value="m_dropOff">
        </div>
        <div>
            <label for="Evening Pick-UP">Evening Pick-Up </label>
            <input type="checkbox" name="e_pickup" value="e_pickup">
        </div>
        <div>
            <label for="Evening Drop-Off">Evening Drop-Off </label>
            <input type="checkbox" name="e_dropOff" value="e_dropOff">
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>