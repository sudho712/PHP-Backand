<?php
include 'connect.php'; // Ensure the connect.php file contains your database connection code

if (isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend'])) {
    // Extract data from POST
    $nameSend = $_POST['nameSend'];
    $emailSend = $_POST['emailSend'];
    $mobileSend = $_POST['mobileSend'];
    $placeSend = $_POST['placeSend'];

    // SQL query to insert data
    $sql = "INSERT INTO curd (name, email, mobile, place) VALUES ('$nameSend', '$emailSend', '$mobileSend', '$placeSend')";

    // Execute query
    $result = mysqli_query($con, $sql);

    // Check if the query was successful
    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "All fields are required!";
}
?>
