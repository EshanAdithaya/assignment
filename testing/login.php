<?php
// Replace these credentials with your actual database credentials
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);

    // Execute the prepared statement
    $stmt->execute();

    // Bind the result variables
    $stmt->bind_result($userId, $dbUsername, $dbPassword);

    // Fetch the result
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $dbPassword)) {
        // Password is correct, redirect to a secure page
        header("Location: secure_page.php");
        exit();
    } else {
        // Password is incorrect, display an error message
        echo "Invalid username or password";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
