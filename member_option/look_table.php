<?php
include("../connect.php");

$restaurant_name = $_POST['restaurant'];
$sql = "SELECT table_no,valid from table_list where restaurant_id ='$restaurant_name'";;
$result = $db -> query($sql);

while($row = $result->fetch_row()){
    printf ("%s (%s)\n", $row[0], $row[1]);
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>table 확인</title>
    </head>
    
    <body>
        <form method="post" action="">
            <h2>음식점의 id를 입력하세요</h2>
            <input type="text" size="50" maxlength="10" name="restaurant">
            <input type="submit" value="보기">
        </form>
    </body>
</html>