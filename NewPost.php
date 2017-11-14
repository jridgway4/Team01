<?php $title = "New Post Page";
require_once('utils.php');
$quality=array("Great","Good","Fair","Poor");
$lookingTo=array("Give away","Sell","Trade");
?>
<html>
	<head>
		<title><?php echo $title; ?></title>
		
		<script language="Javascript">
	
			function checkInputs(){
				if(document.newPostForm.bookName.value ==""){
					alert("You must enter a Book Name");
					return false;
				}
				
				if(document.newPostForm.ISBN.value == ""){
					alert("You must enter a ISBN number");
					return false;
				}
				if(document.newPostForm.authorName.value == ""){
					alert("You must enter a author name");
					return false;
				}
				
				
				return true;
			}

	</script>
	</head>
	<body bgcolor="CC0000">
		<font color="white">
		<center>
		<h1>Create New Post</h1></br>
		<form name="newPostForm" method="post" action="NewPostHandler.php" onSubmit="return checkInputs()">
			Book Name: <input type="text" name="bookName" value= ""><br><br><br>
			ISBN Number: <input type="text" name="ISBN" value= ""><br><br><br>
			Author Name: <input type="text" name="authorName" value= ""><br><br><br>
			Price: <input type="text" name="Price" value=""><br><br><br>
			Picture of Book: <input type="file" name="bookPic" id="choose-file" /><br><br><br>
			Quality of Book: <select name="quality">
			<option value="">Select...</option>
			<option value="Great">Great</option>
			<option value="Good">Good</option>
			<option value="Fair">Fair</option>
			<option value="Poor">Poor</option>
			</select><br><br>
			Looking To: <select name="lookingTo">
			<option value="">Select...</option>
			<option value="Give Away">Give Away</option>
			<option value="Sell">Sell</option>
			<option value="Trade">Trade</option>
			</select><br><br><br>
			<textarea	id="comments" 
					name="comments" 
					maxlength="5000" 
					placeholder = "Description of Book and Book Condition"
					rows = "5"
					cols="33"></textarea><br><br><br>
			<input 	type="submit" 
				name="submit"
				value="Submit Post"/>
			</font>
		</form>
		</center>
	</body>
</html>