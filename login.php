<?php

include("connect.php");

session_start(); //세션의 시작

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ID=addslashes($_POST['user_id']);
    $PW=addslashes($_POST['user_pw']);
    $sql = "SELECT * FROM member WHERE mem_id='$ID' and mem_pw='$PW'";
    $result = $db->query($sql); 

    $row = $result->num_rows;

    if($row === 1)
    {
        $_SESSION['login_user']=$ID;
        header("location: member_choose.php");
    }else{
        $error="Your Login Name or Password is invalid";
        echo $error;
    }

}

?>

<html>
    <head>
        <meta charset="utf-8">
        
        <title> 음식점 주문 / 예약 로그인</title>
    </head>
    
    <body>
        
    	<div class="container">
    	
	    <form action="" method="post">
	        <h2 class="form-signin-heading">먼저 로그인하세요</h2>
	        <label for="user_id" class="sr-only">ID</label>
	        <input type="text" id="user_id" class="form-control" name="user_id" placeholder="ID" required autofocus>
	        <label for="user_pw" class="sr-only">Password</label>
	        <input type="password" id="user_pw" class="form-control" name="user_pw" placeholder="Password" required>
            <input type="submit" value="로그인"/></br></br>
            <a href="./newmember.php" class='gaip'>회원가입</a>
	    </form>
	    
	</div> <!-- /container -->
	
    </body>
</html>