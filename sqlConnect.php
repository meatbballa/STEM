 <?php
$servername = "localhost";
$username = "jadhas20";
$password = "hase";
$dbname = "jadhas20";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students WHERE name='jaden'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Age: " . $row["age"]. "Grade Level: -" . $row["gradeLevel"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 