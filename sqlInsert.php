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

$name = 'daniel';
$age = 17;
$gradeLevel = 12;

$sql = "INSERT INTO students(name,age,gradeLevel) VALUES
('$name', '$age', '$gradeLevel')";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - Name: " . $row["age"]. " " . $row["gradeLevel"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 