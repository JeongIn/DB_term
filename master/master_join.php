<?php
include "../connect.php";
 
$id=$_POST['id'];
$pw=$_POST['pwd'];
$name=$_POST['name'];
$birth=$_POST['birth'];
$addr=$_POST['addr'];
$phone=$_POST['phone'];
$restaurant=$_POST['restaurant'];
$sql = "INSERT INTO member 
    VALUES('$id','$pw','$name','$birth','$addr','$phone', '$restaurant')";
if($db->query($sql) === TRUE){
    
    $db->close();
    
}else{
    echo 'fail to insert sql';
}
?>

<script>
location.href='master_login.php';
</script>