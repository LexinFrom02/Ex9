<?php
$conn = new mysqli("host.docker.internal", "root", "secret", "NewDataBase", 33062);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query('select * from Zakaz');
while ($row = $result->fetch_assoc()) {
    printf("%s (%s)\n", $row["Name"], $row["Fam"]);
}
​
?>