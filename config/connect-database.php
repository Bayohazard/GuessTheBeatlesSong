<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "beatles");

// Create connection
$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE_NAME);

// Check connection
if(!$conn) {
  die('Could not connect: ' . mysqli_error($conn));
}
 ?>