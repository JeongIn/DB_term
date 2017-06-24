<?php
include "../connect.php";
 
$id=$_POST['id'];
$pw=$_POST['pwd'];
$name=$_POST['name'];
$birth=$_POST['birth'];
$addr=$_POST['addr'];
$phone=$_POST['phone'];
$sql = "INSERT INTO member
    VALUES('$id','$pw','$name','$birth','$addr','$phone')";
if($db->query($sql) === TRUE){
    
    $db->close();
    
}else{
    echo 'fail to insert sql';
}
?>

<script>
location.href='member_login.php';
</script>