<html>
    <head>
        <meta charset='utf-8'>
    </head>
<?php
include("../connect.php");

session_start();

$master_id = $_SESSION['login_user'];
$sql = "SELECT *
            from orders natural join employee
                where employee_id ='$master_id'";;
$result = $db -> query($sql);

while($row = $result->fetch_row()){
    printf("order_id: %s  member_id: %s  #: %s people  date: %s  contents: %s\n, ", $row[2], $row[1], $row[4], $row[3], $row[5]);
    ?> <br> <?php
}

?>

<a href="../master/master_choose.php">직원 메뉴로 간다.</a>

</html>