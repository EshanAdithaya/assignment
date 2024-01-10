<!-- create session 
<?php

session_start();
	if(!isset($_SESSION["token"])){
		header("Location:login.php");
	}
	?>
	-->
<!DOCTYPE html> 
<html lang="en"> 

<head> 
    <link rel="stylesheet" type="text/css" href="../asset/css/admin1.css">
    <link rel="stylesheet" type="text/css" href="../asset/css/admin2.css">
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>Samee_prducts/Admin</title> 
	
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">Samee_prducts/Admin/Articles</div> 
		</div> 

		

		<div class="message"> 
			<div class="circle"></div> 
			<img src= 
"../asset/icons/bell.png"
				class="icn"
				alt=""> 
			<div class="dp"> 
			<img src= 
"../asset/icons/user (1).png"
					class="dpicn"
					alt="dp"> 
			</div> 
		</div> 

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options">
					<a href="admin.html">  
					<div class="nav-option option2"> 
						<img src= 
"../asset/icons/dashboard (1).png"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 
				</a>

				<a href="#">  
					<div class="option1 nav-option"> 
						<img src= 
"../asset/icons/newspaper (1).png"
							class="nav-img"
							alt="articles"> 
						<h3> Articles</h3> 
					</div> 
</a>

<a href="admin-Report.html">  
					<div class="nav-option option3"> 
						<img src= 
"../asset/icons/report.png"
							class="nav-img"
							alt="report"> 
						<h3> Report</h3> 
					</div>
</a>

<a href="admin-profile.html">  
					<div class="nav-option option5"> 
						<img src= 
"../asset/icons/resume.png"
							class="nav-img"
							alt="blog"> 
						<h3> Profile</h3> 
					</div> 
</a>

<a href="admin-Settings.html">  
					<div class="nav-option option6"> 
						<img src= 
"../asset/icons/settings.png"
							class="nav-img"
							alt="settings"> 
						<h3> Settings</h3> 
					</div> 
</a>

<a href="#">  
					<div class="nav-option logout"> 
						<img src= 
"../asset/icons/exit.png"
							class="nav-img"
							alt="logout"> 
						<h3>Logout</h3> 
					</div> 
</a>


				</div> 
			</nav> 
		</div> 
		<div class="main"> 

			<div class="report-container"> 
				<div class="report-header"> 
					<h1 class="recent-Articles">Recent products</h1> 
					<button class="view">View All</button> 
				</div> 

				<div class="report-body"> 
					<div class="report-topic-heading"> 
						<h3 class="t-op">product</h3> 
						<h3 class="t-op">Views</h3> 
						<h3 class="t-op">Comments</h3> 
						<h3 class="t-op">Status</h3> 
					</div> 

					<div class="items"> 
						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 73</h3> 
							<h3 class="t-op-nextlvl">2.9k</h3> 
							<h3 class="t-op-nextlvl">210</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 72</h3> 
							<h3 class="t-op-nextlvl">1.5k</h3> 
							<h3 class="t-op-nextlvl">360</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 71</h3> 
							<h3 class="t-op-nextlvl">1.1k</h3> 
							<h3 class="t-op-nextlvl">150</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 70</h3> 
							<h3 class="t-op-nextlvl">1.2k</h3> 
							<h3 class="t-op-nextlvl">420</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 69</h3> 
							<h3 class="t-op-nextlvl">2.6k</h3> 
							<h3 class="t-op-nextlvl">190</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 68</h3> 
							<h3 class="t-op-nextlvl">1.9k</h3> 
							<h3 class="t-op-nextlvl">390</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 67</h3> 
							<h3 class="t-op-nextlvl">1.2k</h3> 
							<h3 class="t-op-nextlvl">580</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 66</h3> 
							<h3 class="t-op-nextlvl">3.6k</h3> 
							<h3 class="t-op-nextlvl">160</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

						<div class="item1"> 
							<h3 class="t-op-nextlvl">Article 65</h3> 
							<h3 class="t-op-nextlvl">1.3k</h3> 
							<h3 class="t-op-nextlvl">220</h3> 
							<h3 class="t-op-nextlvl label-tag">Published</h3> 
						</div> 

					</div> 
				</div> 
			</div> 
		</div> 
	</div> 
</body> 
</html>
