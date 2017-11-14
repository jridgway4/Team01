<?php 

$book_name = $_POST["bookName"];
$isbn = $_POST["ISBN"];
$author = $_POST["authorName"];
$quality = $_POST["quality"];
$sale_type = $_POST["lookingTo"];
$price = $_POST["Price"];
$book_pic = "";
$description = $_POST["comments"];
$username = "jridgway";
$password="Password1";

	$conn = mysqli_connect("localhost", $username, $password, $username );
	if(!$conn){
		die("Connection failed man" . mysql_connect_error());
	}
	$book = "INSERT INTO Books (Name, Author, ISBN, Pic, Description, Price, Quality)
VALUES ($book_name, $author, $isbn, $book_pic, $description, $price, $quality)";
	$bookPost = "INSERT INTO Book_Postings (Sale_Type)
VALUES ($sale_type)";

echo $_POST;

?>