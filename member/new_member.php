<doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title>회원가입</title>
	</head>
	<body>
	<form name="join" method="post" action="member_join.php">
		<h1>회원가입</h1>
		<table border="1">
			<tr>
	 	  		<td>ID</td>
	 	  	<td><input type="text" size="30" maxlength="15" name="id"></td>
	  	 	</tr>
 	 		<tr>
 	  			<td>Password</td>
 	  			<td><input type="password" size="30" maxlength="15" name="pwd"></td>
	  		</tr>
 	 		<tr>
 	 			<td>Name(ex.KimJeongIn)</td>
 	  			<td><input type="text" size="30" maxlength="15" name="name"></td>
 	 		</tr>
 	 		<tr>
  	 			<td>Birth(ex.1995-xx-xx)</td>
 	  			<td><input type="text" size="30" maxlength="10" name="birth"></td>
	 		</tr>
 	 		<tr>
 	  			<td>Address</td>
 	  			<td><input type="text" size="30" name="addr"></td>
	 		</tr>
	 		<tr>
 	  			<td>Phone(ex.010xxxx2921)</td>
 	  			<td><input type="text" size="30" maxlength="12" name="phone"></td>
 	 		</tr>
 		</table>
 		<input type=submit value="submit"><input type=reset value="rewrite">
	</form>
</body>
</html>