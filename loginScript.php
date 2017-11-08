
<html> 
<head>
	<title>loginScript.php</title>
	
	<script language="Javascript">
	
		function checkPassAndName(){
			if(document.loginform.username.value ==""){
				alert("You must enter a Username");
				return false;
			}
			
			if(document.loginform.password.value == ""){
				alert("You must enter a Password");
				return false;
			}
			
			return true;
		}

	</script>
	
</head>
<body>

	<form name="loginform" id="if" action="https://php.radford.edu/~dbranch2/testPage.php" method="post" onSubmit="return checkPassAndName()">
	
	<p align="center">
		<img src="http://www.radford.edu/~ru-connected/images/RadfordUniversity_Stacked.png">
		<br><br>
		<b>Lets Negotiate<br>
			Please enter your username and password.</b><br>
			
	</p>
	
	<table align="center" border=0 width=40% cellpadding="2" id="login">
		<tr>
			<td valign="bottom" width="195">
				<p align="right">Username:</p>
			</td>
			<td valign="bottom" width="191">
				<input type="text" name="username" value="" maxlength="25" size="25" />
			</td>
		</tr>
		
		<tr>
			<td valign="bottom" width="195">
				<p  align="right">Password:</p>
			</td>
			<td valign="bottom" width="191">
				<input type="text" name="password" maxlength="25" size="25" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="cname" value="cookie_name" />
	<center>
	<input type="submit" value="  Login  " name="submit" />
	</center>
	</form>
	
</body>
</html>
	
	