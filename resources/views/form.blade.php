<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="/store" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="course">Course:</label><br>
        <select id="course" name="course">
            <option value="" disabled selected>Select Course</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Engineering">Engineering</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Business">Business</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
