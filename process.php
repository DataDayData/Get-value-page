
<?php
// Create connection
$connection = new mysqli("localhost", "root", "", "name");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (empty($_POST['name'])) {
    die("Name not provided.");
}

$name = $_POST['name'];

// Store the name in the database
$sql = "INSERT INTO names (the_name) VALUES ('$name')";
if ($connection->query($sql) === true) {
    echo "Hello, " . $name . "!";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>

