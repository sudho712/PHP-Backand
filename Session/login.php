
// Start session to manage login state
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['username']; // Using 'username' as the email field from the form
    $password = $_POST['password'];

    // Fetch user data directly
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $user = $result->fetch_assoc();

        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        // Redirect to index.php
        header("Location: index.php");
        exit;