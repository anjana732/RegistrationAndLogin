<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration
    </title>
</head>
<body>
    <h1>Register</h1>
    <form action="Register.php" method="post">
        <labe for="username">Username</labe>
        <input type="text" name="username" id="username" placeholder="Enter Username">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter email">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password">
        <label for="cpassword">Confirm Password</label>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
        <button type="submit">Register</button>
    </form>
</body>
</html>