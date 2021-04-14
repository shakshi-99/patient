<?php

$con = mysqli_connect("localhost", "root", "", "patient");

$communication = $_POST["status"]["communication"];
$service = $_POST["status"]["service"];
$support = $_POST["status"]["support"];

$sql = "INSERT INTO feedback(communication, services, support) VALUES('$
communication', '$service', '$support')";
mysqli_query($con, $sql);

echo "feedback submitted";

?>