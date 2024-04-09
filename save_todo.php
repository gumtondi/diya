<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "todos";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get todo from POST request
$todo = $_POST['todo'];

// Prepare SQL statement to insert todo into database
$sql = "INSERT INTO todos (todo) VALUES ('$todo')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Todo added successfully"; // You can output a success message
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Output error message if query fails
}

// Close database connection
$conn->close();
header('Location: index.php');
exit();
?>
