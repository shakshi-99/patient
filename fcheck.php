<?php 
session_start();

$con = mysqli_connect('localhost', 'root');


$db = mysqli_select_db($con, 'project');

if(isset($_POST['submitbtn'])){
    $username = $_POST['uname'];

    $sql = " select * FROM reg WHERE username='$username'";

    $query_run = mysqli_query($con,$sql);
    if(mysqli_num_rows($query_run)>0)
    {
        //valid
        $_SESSION['uname']=$username;
        echo "feedback submitted";               }
    else{
        //invalid
        echo "no feedback";
}
}
    ?>