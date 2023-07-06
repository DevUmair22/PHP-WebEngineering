<?php
// Assuming you have already fetched the user data from the database

// Check if a search term is provided
$userData="SELECT * FROM users"
if (isset($_GET['search'])) {
  $searchTerm = $_GET['search'];

  // Filter the user data based on the search term
  $filteredData = array_filter($userData, function($user) use ($searchTerm) {
    $fullName = $user['fullName'];
    return stripos($fullName, $searchTerm) !== false;
  });

  // Display the filtered user data
  if (!empty($filteredData)) {
    foreach ($filteredData as $user) {
      echo '<div class="card-outer">';
      echo '<h3>Full Name: ' . $user['fullName'] . '</h3>';
      echo '<p>Phone Number: ' . $user['phoneNumber'] . '</p>';
      echo '<p>Email Address: ' . $user['email'] . '</p>';
      echo '</div>';
      echo '<button class="button">Delete User</button>';
      echo '<button class="button">Update User</button>';
    }
  } else {
    echo 'No users found.';
  }
} else {
  // Display all user data if no search term is provided
  foreach ($userData as $user) {
    echo '<div class="card-outer">';
    echo '<h3>Full Name: ' . $user['fullName'] . '</h3>';
    echo '<p>Phone Number: ' . $user['phoneNumber'] . '</p>';
    echo '<p>Email Address: ' . $user['email'] . '</p>';
    echo '</div>';
    echo '<button class="button">Delete User</button>';
    echo '<button class="button">Update User</button>';
  }
}
?>