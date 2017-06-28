<html>
    <head>
        <meta charset='utf-8'>
    </head>

<?php
include("../connect.php");

session_start();

$mem_id = $_SESSION['login_user'];

$sql = "SELECT * FROM book";
$result = $db -> query($sql);
if($result -> num_rows === 0){
    $counts = 0;
}
else{
    $counts = ($result -> num_rows) + 1;
}

$date = $_POST['date'];
$number = $_POST['number'];
$contents = $_POST['contents'];
$res_id = $_POST['res_id'];

$sql = "INSERT INTO book
            VALUES ('$mem_id', $counts, '$date', '$number', '$contents', '$res_id')";

if($db->query($sql) === TRUE){
    echo 'success to order';
    ?>    <a href="../member/member_choose.php">손님 메뉴로 간다.</a> <?php
}else{
    echo 'fail to order';
    
}

?>

</html>