<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($students as $student)
    <p>student name : {{$student->name}}</p>
    <p>student dob : {{$student->dob}}</p>
    <p>student course : {{$student->course}}</p>
    <hr>
@endforeach

</body>
</html>
