<?php
//-------------------------------------------------------------------
// begin login verfication script
//-------------------------------------------------------------------
// Setup the return url, address of this php page where the user will
// be returned once their username has been validated. 
$desturl = $_SERVER['PHP_SELF']; 

// establish the cookie name you want your application to use! 
//(letters, numbers, underscore) 
$cname = "cookie_name"; 

// set the address for the login script (makes changes easier later)
$login = "https://php.radford.edu/~dbranch2/loginScript.php"; 
// check to see if user is already verified 
if(! isset($_COOKIE[$cname])) 
{ 
// user is not verified so redirect user to login script. 
print "<html><head><title></title> \n"; 
print "<script type=\"text/javascript\"> \n"; 
print "function autosubmit() { \n"; 
print "document.forms[0].submit(); } \n"; 
print "</script> \n"; 
print "</head><body onload=\"autosubmit()\"> \n"; 
print '<form action='; echo "\"$login\""; echo " method=\"post\" > \n"; 
print '<input type='; echo "\"hidden\" name = \"url\" "; echo "value =\"$desturl\" /> \n"; 
print '<input type='; echo "\"hidden\" name = \"cname\" "; echo "value =\"$cname\" /> \n"; 
print "</form> \n"; 
print "<h2>You may have to authorize execution of js in the browswer.</h2>"; 
print '</body>'; 
print '</html>'; 
exit(0); 
} //-------------------------------------------------------------------
// end login verfication script 
//-------------------------------------------------------------------
?> 
<html><head><title> testPage.php </title> </head> <body>

 
Test page to get access too 

</body>
</html>