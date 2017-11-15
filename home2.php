<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Page</title>
<style>

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
    width: 100%
    
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
    width: 100%
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

.searchBar {
	float: right;
	padding-top: 15px;
		
}

.searchButton {
	float: right;
	background-color: #333;
	border: none;
	text-decoration: none;
	display: block;
	font-size: 12pt;
	color: #f2f2f2;
	padding: 5px;
	padding-top: 8px;
	font-family: "Times New Roman", Times, serif;
	
}

.searchButton:hover {
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
   width: 10%;
   background-color: rgb(194, 1, 27);
   border-style: ridge;
   border-color: #333;
   height: 100%;
   position: fixed; 
}


.column.sideRight {
	Width: 0%
}

/* Middle column */
.column.middle {
	
    width: 90%;
    float: center;
}

.rows {
	width: 70%;
	list-style-type: none;
	float: right;
	column-count: 2;
}

.result-row {
	
	width: 55%;
	border: ridge;
	border-color: #333;
	padding-left: 3px;
	padding-right: 3px;
	margin-bottom: 20px;
	padding-bottom: 10px;
}


/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
   
    }
}

/* Style the footer */
.footer {
    
}

.footer a {
	
}

.footer a:hover {
    
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
  <a href="http://php.radford.edu/~cnewton15/home.php">Home</a>
  <a href="http://php.radford.edu/~dbranch2/NewPost.php">Create Posting</a>
  <a href="#">My Account</a>
  <a href="http://php.radford.edu/~dbranch2/LoginPage.php">Logout</a>
  <div class="searchButton">
  	<button class="searchButton" onclick="alert('Search Function currently unavailable')"
  		type="button">Search</button>
  </div>
  <div class="searchBar">
  	<input class="search" type="text" name="search" placeholder="Search for Books..." size="100"/>
  </div>
  
</div>

<div class="row">
  <div class="column sideLeft">
    Filter Search<br /><br />
        <!-- Radio Buttons for filtering-->
        <input type="checkbox" name="filter01" value="giveAway"/>Give Away<br/>
        <input type="checkbox" name="filter02" value="trade"/>Trade<br/>
        <input type="checkbox" name="filter03" value="sell"/>Sell<br/>
        <br />
        <br />
        <p class="filterText">
            Price:
        </p>
        <input type="text" name="priceBox" placeholder="min" size="8"/>
        <input type="text" name="priceBox" placeholder="max" size="8"/>
        
  </div>
  <div class="column middle">
    <ul class="rows">
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST1
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST2
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST3
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST4
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST5
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST6
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST7
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST8
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST9
    	</li>
    	<li class="result-row">
    	<img src="http://php.radford.edu/~cnewton15/image.jpg" alt="NO PICTURE" style="width:100%;height:100%">
    	<a href="http://php.radford.edu/~cnewton15/Posting.php">Title of the Book</a>
    	<br>
    	TEST10
    	</li>
    </ul>
  </div>
  <div class="column sideRight">
  	
  </div>
</div>

<div class="footer">
  
</div>
  

</body>
</html>
