<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
</head>
<body>
    <form action="{{ route('studentStore')}}" method="POST"> 
        @csrf
        <div>
            <select name="address_type" id="address_type">
                @foreach ($addressTypes as $key => $addressType)
                    <option value="{{ $key }}">{{ $addressType }}</option>  
                @endforeach 
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Save </button>
    </form>
</body>
</html>