<html>
    <head>
        <meta charset='utf-8'>
    </head>

    <body>
        BEFORE table state.<br>
<?php
include("../connect.php");

session_start();
$master_id = $_SESSION['login_user'];

    $sql = "SELECT table_no,valid from table_list natural join employee where employee_id ='$master_id'";;
    $result = $db -> query($sql);

    while($row = $result->fetch_row()){
        printf ("table %s: ", $row[0]);
        if($row[1] === '0'){
            printf ("can seat");
        }
        else{
            printf ("cannot seat");
        }
        ?> <br> <?php
    } ?>
    
    <h3> what table's state is changed? and input after state</h3>
    <form method="post" action="">
        table number: <input type="text" size="5" maxlength="4" name="table"><br>
        table state : <input type="text" size="5" maxlength="4" name="state"> (0: 사용 가능, 1: 사용 불가능)<br>
        <input type="submit" value="변경">
    </form>
    
    <?php
    $table_num = $_POST['table'];
    $table_state = $_POST['state'];
    $sql = "SELECT restaurant_id from employee where employee_id = '$master_id'";
    $result = $db -> query($sql);
    $row = $result->fetch_row();
    
    $sql = "UPDATE table_list SET valid='$table_state' WHERE table_no='$table_num' and restaurant_id='$row[0]'";
    $result = $db -> query($sql);
    ?>
    <br>
    <a href="../master/master_choose.php">직원 메뉴로 간다.</a><br><br>
    
    AFTER TABLE STATE:<br>
    <?php  
    $sql = "SELECT table_no,valid from table_list natural join employee where employee_id ='$master_id'";;
    $result = $db -> query($sql);

    while($row = $result->fetch_row()){
        printf ("table %s: ", $row[0]);
        if($row[1] === '0'){
            printf ("can seat");
        }
        else{
            printf ("cannot seat");
        }
        ?> <br> <?php
    }
?>

