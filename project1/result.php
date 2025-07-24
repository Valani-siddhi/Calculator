<?php
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

$personality = $q1 . $q4 . $q2 . $q3;

echo "<h2>Your Personality Type is: $personality</h2>";

// Save to database
include "db.php";
$sql = "INSERT INTO results (personality) VALUES ('$personality')";
$conn->query($sql);
$conn->close();
?>