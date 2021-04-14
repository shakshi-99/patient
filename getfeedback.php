<?php

$con = mysqli_connect("localhost", "root", "", "patient");

$sql = "SELECT * FROM feedback";
$result = mysqli_query($con, $sql);

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);