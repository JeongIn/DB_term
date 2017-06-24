<html>
    <head>
        <meta charset='utf-8'>
    </head>
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
$res_id = $_POST['res_id'];

$sql2 = "INSERT INTO orders
            VALUES ('$mem_id', $counts, '$date', '$number', '$contents', '$res_id')";

if($db->query($sql2) === TRUE){
    echo 'success to order';
    ?>    <a href="../member/member_choose.php">손님 메뉴로 간다.</a> <?php
}else{
    echo 'fail to order';
}
    
$db->close();

?>

</html>