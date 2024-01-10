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

    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM user WHERE name = ? AND password = ?";
    $stmt = $conn->prepare($query);

    // Check if the prepare was successful
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION["token"]=$result->fetch_assoc()['access_level'];
        header("Location: ../index.html");
        exit();
    } else {
        $error = "Username or Password is invalid";
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
