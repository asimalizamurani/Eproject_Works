<?php
include('dbcon.php'); // Include the database connection

// Assuming form data is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Note: You should hash passwords for security reasons

    // Check if email already exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $connection->query($query);

    if($result->num_rows > 0) {
        echo "Email already taken. Please choose another email.";
    } else {

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO `users` (f_name, l_name, email, password) VALUES ('$fname', '$lname', '$email', '$hashed_password')";

    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect to a success page or do something else
        header("Location: viewpage.html");
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

    // Close database connection
    $connection->close();
}
?>
