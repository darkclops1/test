<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
</head>
<body>
    <h1>Register Form</h1>
    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
