 <?php require "dbconnect.php"; ?><?php
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()) {
    echo $row["fname"] . " " . $row["lname"];
    echo "<br/>";
}
?>