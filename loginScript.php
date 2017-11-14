<?php
$username = 'dbranch2';
$password = 'Cygtpw4!';
$domain = '@radford.edu';
$server = '137.45.26.80';
$port = 389;

$ldap_connection = ldap_connect($server, $port);

if (! $ldap_connection)
{
    echo '<p>LDAP SERVER CONNECTION FAILED</p>';
    exit;
}
else
{
	echo '<p>CONNECTION MADE</p>';
}

ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0);

$ldap_bind = ldap_bind($ldap_connection, $username.$domain, $password);

if (! $ldap_bind)
{
    echo '<p>LDAP BINDING FAILED</p>';
    exit;
}
else 
{
	echo '<p>binding worked!</p>';
}
?>
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

	<form name="loginform" id="if" action="https://php.radford.edu/~dbranch2/LoginHandler.php" method="post" onSubmit="return checkPassAndName()">
	
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
	
	