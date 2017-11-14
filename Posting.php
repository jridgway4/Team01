<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Posting</title>
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
  background-color: lightgray;
}

/* Style the header */
.header {
    background-color: rgb(194, 1, 27);
    padding: 5px;
    border-style: ridge;
    border-color: #333;
    border-width: 5px;
    text-align: center;
}

.header a {
	color: black;
    text-decoration: none;
}

.header a:hover {
	background-color: #ddd;
    color: black;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.emailSeller {
	overflow: hidden;
    background-color: #333;
}

.emailSeller a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.emailSeller a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.sideLeft {
    width: 30%;
}


.column.sideRight {
	width: 30%;
	text-align: Left;
	
}

/* Middle column */
.column.middle {
    width: 40%;
    text-align: center;
    border-left-style: ridge;
    border-left-color: #333;
    border-left-width: 5px;
    border-right-style: ridge;
    border-right-color: #333;
    border-right-width: 5px;
    
}




/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
   .column.sideLeft, .columnsideRight, .column.middle{
        width: 100%;
    }
}

/* Style the footer */
.footer {
    background-color: #333;
    text-align: left;
    overflow: hidden;
    border-style: ridge;
    border-color: rgb(194, 1, 27);
    border-width: 5px;
}

.footer a {
	float: left;
	color: white;
    text-decoration: none;
    display: block;
    background-color: #333;
    text-align: center;
    padding: 14px 16px;
}

.footer a:hover {
    background-color: #ddd;
    color: black;
}
</style>
</head>

<body>

<div class="header">
  <h1>
  	<a href="http://php.radford.edu/~cnewton15/home.php">Let's Negotiate</a>
  </h1>
</div>

<div class="topnav">
  <a href="http://php.radford.edu/~cnewton15/home2.php">Home</a>
  <a href="http://php.radford.edu/~dbranch2/NewPost.php">Create Posting</a>
  <a href="#">My Account</a>
  <a href="http://php.radford.edu/~dbranch2/LoginPage.php">Logout</a>
  
  <div class="emailSeller">
  	<a href="#">Email Seller</a>
  </div>
  
</div>

<div class="row">
  <div class="column sideLeft">
    <input type="text" id="commentField" 
      	name="CommentField" placeholder="Enter Comment" size="50">
    <input type="submit" name="submit" value="Comment">  
  </div>
  <div class="column middle">
    <h2>Title Of Book</h2>
    <p>Author of Posting</p>
    <img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:70%;height:80%">
    <br>
    <br>
    
    <br>
    <br>
  </div>
  <div class="column sideRight">
  	<br>
  	<br>
  	<br>
    <p>Title:</p>
    <br>
    <p>Author:</p>
    <br>
    <p>ISBN:</p>
    <br>
    <p>Quality:</p>
    <br>
    <p>Price:</p>
    <br>
    <p>Description:</p>
  </div>
</div>

<div class="footer">
  <br>
  <br>
</div>
  

</body>
</html>
