<?php
$mysqli = new mysqli("localhost", "team05", "team05", "team05");
if($mysqli->connect_errno) {
    echo "Error: " . $mysqli->connect_error;
}
?>