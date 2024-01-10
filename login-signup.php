<!-- create session -->
<?php
session_start();
?>

<html>
    <head>  <link rel="stylesheet" type="text/css" href="asset/css/login-signup.css">
	<style>
      
        .notification {
            position: fixed;
            top: 0;
            right: 0;
            background-color: #4CAF50;
            color: #fff;
            padding: 15px;
            margin: 15px;
            border-radius: 5px;
            display: none;
        }
    </style>
    </head>
    <body>
		

<div id="notification" class="notification">
    <?php if (isset($notificationMessage)) echo $notificationMessage; ?>
</div>





<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="asset/php/signup.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" class="username" name="username" placeholder="Name" />
			<input type="email" class="email" name="email" placeholder="Email" />
			<input type="text" class="password" name="password" placeholder="Password" />
			<!-- signup page action button -->
			<button type="submit">Sign Up</button>
		</form>
	</div>

	

	<div class="form-container sign-in-container">
		<form action="asset/php/loginconn.php"  method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
            <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        
			<a href="#">Forgot your password?</a>
			
			<!--  sign in page action button -->
			<button type="submit">Login</button>
		</form>
	</div>

	<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wad";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // check conn
    if ($conn->connect_error) {
        $notificationMessage = "Database connection failed: " . $conn->connect_error;
    } else {
        $notificationMessage = "Database connection successful!";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
		$stmt = $conn->prepare("SELECT user_ID, name, password FROM user WHERE BINARY name = ?");
        $stmt->bind_param("s", $username);

        // Execute the prepared statement
        $stmt->execute();

        // Bind the result variables
        $stmt->bind_result($userId, $dbUsername, $dbPassword);

        // Fetch the result
        if ($stmt->fetch()) {
            // Check if the password is correct
            if (password_verify($password, $dbPassword)) {
                // Redirect to index.html
                header("Location: index.html");
                exit;
            } else {
               echo ("Invalid Password");
            }
        } else {
            echo ("Invalid Username ");
        }

        $stmt->close();
    }

	
    $conn->close();
    ?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->close();
?>


	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				
				<button class="ghost" id="signUp">Sign Up</button>
				<input type ="submit">
			</div>
		</div>
	</div>
</div>
<script src="asset/js/login-signup-slider.js"></script>
<script>
   
    var notificationMessage = "<?php echo isset($notificationMessage) ? $notificationMessage : ''; ?>";

    
    if (notificationMessage !== "") {
        var notificationContainer = document.getElementById("notification");
        notificationContainer.innerHTML = notificationMessage;
        notificationContainer.style.display = "block";

      
        setTimeout(function () {
            notificationContainer.style.display = "none";
        }, 3000);
    }
</script>
</body>
</html>

