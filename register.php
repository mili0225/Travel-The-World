<?php

include('database.php');


$stmt = $conn->prepare("INSERT INTO places(name, city, mobile) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $name, $city, $mobile);


$name = $_POST['name'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$stmt->execute();


$stmt->close();
$conn->close();
?>
