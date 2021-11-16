<?php

$db = mysqli_connect("localhost","root","","guestbook");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>