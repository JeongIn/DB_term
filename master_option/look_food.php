<html>
    <head>
        <meta charset='utf-8'>
    </head>
<?php
include("../connect.php");

session_start();

$master_id = $_SESSION['login_user'];
$sql = "SELECT food_name,food_price,food_contents,food_count
            from (food natural join food_list) natural join employee
                where employee_id ='$master_id'";;
$result = $db -> query($sql);

while($row = $result->fetch_row()){
    printf("name: %s  price: %s  contents:  %s count:  %d \n, ", $row[0], $row[1], $row[2], $row[3]);
    ?> <br> <?php
}

?>

<a href="../master/master_choose.php">직원 메뉴로 간다.</a>

</html>