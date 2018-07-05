  <!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 70px;
    padding: 10px;
    width: 200px;
    background-color: #f1f1f1;
    border: 5px solid #555;
	 
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 1px solid #555;
	float:center;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
 
	
 
 
	
</style>
</head>
<body>

 

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="Artist.php">By Artist Name</a></li>
  <li><a href="year.php">By Release Year</a></li>
  <li><a href="Title.php">Title</a></li>
  <li><a href="Duration.php">Duration</a></li>
   <li><a href="Rating.php">Rating</a></li>
  
</ul>

  <body background="leaving.jpg">              

</body>
</html>
