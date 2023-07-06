<!DOCTYPE html>
<html>
	<head>
		<title>Hajvairy Poultry Traders</title>
		<link rel="stylesheet" href="./style.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
	</head>
	<body>
		<div class="navbar">
			<div class="nav-item navlink">
				<ul>
					<li><a>Chicken</a></li>
					<li><a>Meat</a></li>
					<li><a>Eggs</a></li>
					<li><a>Sea Food</a></li>
				</ul>
			</div>
			<div class="nav-item navlink">
				<a href="./pages/login.html">
					<button class="button">Login</button>
				</a>
				<a href="./pages/register.html">
					<button class="button">SignUp</button></a
				>
			</div>
		</div>
		<section class="herosection">
			<div class="left">
				<div class="title">
					<caption>
						Fresh Meat Since 2001
					</caption>
					<h1>Get fresh meat at your doorstep</h1>
					<p>
						Simply dummy text of the printing and typesetting industry. Lorem
						Ipsum has been the industry's standard dummy
					</p>
				</div>
				<div class="title-bottom">
					<div class="btn-wrapper">
						<div class="button">
							See Our Collection
							<span></span>
						</div>
					</div>

					<div class="rating">
						<div class="left"></div>
						<div class="right"></div>
					</div>
				</div>
			</div>
			<div class="right"></div>
		</section>
		  <!-- Search bar -->
  <div class="search-bar">
	 <form action="search.php" method="GET">
		<input type="text" name="search" placeholder="Search users...">
		<button type="submit" class="button">Search</button>
	 </form>
  </div>


		<div class="main">
			<div class="card">
				<h1 class="dataTitle">All Users</h1>
				<div style="height: 2px; background-color: white"></div>

<?php
// Assuming you have established a database connection using mysqli
$servername = "localhost";
$username = "root";
$password = "your_password";
$dbname = "user_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo 'connection established';
}

// Fetch user data from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="card-outer">';
		echo '<h3>Full Name: ' . $row['full_name'] . '</h3>';
		echo '<p>Phone Number: ' . $row['phone_number'] . '</p>';
		echo '<p>Email Address: ' . $row['email_address'] . '</p>';

		echo '<button class="button" onclick="deleteUser(' . $row['id'] . ')">Delete User</button>';
		echo '<button class="button" onclick="updateUser(' . $row['id'] . ')">Update User</button>';

		echo '</div>';
	}
} else {
	echo 'No user found.';
}

// Close the database connection
mysqli_close($conn);
?>
				
				</div>
			</div>
		</div>

		<div class="footer">
			<h1>This is the footer of website</h1>
		</div>
	</body>
</html>
