<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Login Page</h1>
        <form action="blogin.php" method="post">
            <div class="mb-5">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter User ID" required>
            </div>
            <div class="mb-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Login</button>
                <a href="forget.php" class="btn btn-warning">Forget Password</a>
            </div>
        </form>
    </div>
</body>
</html>
