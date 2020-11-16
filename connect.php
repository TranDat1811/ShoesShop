<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nienluancoso";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    $conn->error;
} else {
    $conn->character_set_name();
  }
?>