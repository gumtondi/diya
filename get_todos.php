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

// Retrieve todos from the database
$sql = "SELECT * FROM todos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start building the table markup
    $table_html = '<table border="1">
                        <tr>
                            <th>Todo</th>
                            <th>Time</th>
                        </tr>';
    while ($row = $result->fetch_assoc()) {
        // Format the timestamp
        $timestamp = date("F j, Y, g:i a", strtotime($row["timestamp"]));
        
        // Add each todo with formatted timestamp to the table
        $table_html .= '<tr>
                            <td>' . $row["todo"] . '</td>
                            <td>' . $timestamp . '</td>
                        </tr>';
    }
    $table_html .= '</table>'; // Close the table tag
} else {
    $table_html = '<p>No todos found</p>';
}

// Close database connection
$conn->close();

// Return the table HTML
echo $table_html;
?>
