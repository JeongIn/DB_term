<?php
include("../connect.php");

session_start();

$mem_id = $_SESSION['login_user'];

$sql1 = "SELECT * FROM orders";
$result = $db -> query($sql1);
$counts = ($result -> num_rows) + 1;

$date = $_POST['date'];
$number = $_POST['number'];
$contents = $_POST['contents'];

$sql2 = "INSERT INTO reservation
            VALUES ('$mem_id', $counts, '$date', '$number', '$contents')";

if($db->query($sql2) === TRUE){
    echo 'success to order';
}else{
    echo 'fail to order';
}

?>