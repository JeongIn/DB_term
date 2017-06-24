<?php
include("../connect.php");

$res_name = $_POST['restaurant'];
$sql = "SELECT table_no,valid from table_list";
$result = $db -> query($sql);

while($row = $result->fetch_row()){
    printf ("%s (%s)\n", $row[0], $row[1]);
}

?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <form method="post" action="">
            <h1>주문신청</h1>
            <input type="text" size="50" maxlength="10" name="restaurant">
            <input type="submit" value="보기">
        </form>
    </body>
</html>