<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wad";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve values from the form
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL query to insert data into the 'user' table
    $query = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);

    // Check if the prepare was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "<script type='text/javascript'>alert('Registration successful!');</script>";
        echo "<script type='text/javascript'>setTimeout(function(){ window.location.href = '../login-signup.php'; }, 2000);</script>";

        // You can redirect the user to a login page or any other page here
    } else {
        echo "<script type='text/javascript'>alert('Error in registration:');</script>";
       
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>



