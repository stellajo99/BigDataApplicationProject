<?php

$db = mysqli_connect("localhost","root","","team05");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>