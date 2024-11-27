<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">   
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="breg.php" method="POST">
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" id="name" name="fname" required>
            </div>

            <div class="form-group">
                <label for="name">Last Name:</label>
                <input type="text" id="name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="name">Date of Birth:</label>
                <input type="text" id="name" name="fname" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
