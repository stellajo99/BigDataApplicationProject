<?php
	// Host name
	$host = "localhost";

	// User
	$user = "root";

	// Password 
	$password = "";

	// Database name
	$db = "team01";

	// Open a new connection to MySQL server
	$connection = mysqli_connect($host, $user, $password, $db);

	// If the connection fails
	if (!$connection) {

  		// Display message and terminate script
  		die("Connection failed: " . mysqli_connect_error());
	}

	// Path to CSV file
	$file = "C:/xampp/htdocs/bigdata/Jiyoon/input/data/ids.csv";

	// Name of table
	$table = "members3";

	// Load CSV file into a table named 'test' and ignore the first line in file
	$query = <<<eof
                LOAD DATA INFILE '$file'
                INTO TABLE $table
                FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
                LINES TERMINATED BY '\n'
                IGNORE 1 LINES
                ( personid,username,password,age,gender)
                eof;

	// Perform a query on the connected database
	$connection->query($query);
	echo "hello"
?>