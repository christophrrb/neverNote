<?php
$conn = new mysqli('localhost', 'root', '','noteapp');

if ($conn->connect_error) {
  echo "There was a problem connecting to the databse.";
} else {
  // echo "The database connection was successful.";
}
?>
