 <?php include("db_connect.php");?>

<?php

    $data= $_POST['search'];
	$query = "
		SELECT *
		FROM movielist where ReleaseYear like '%$data%'  order by Rating;
	";

	$ReleaseYear = mysqli_query($conn, $query);
?>



<html>
<head>
 <style>
  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
 
 </style>
</head>
<body>
 <div class="cont">

<table width="900" border="1" align="center" cellpadding="5">
  <tr id="tableheader">
    <td width="100">Title</td>
    <td width="200">Duration</td>
    <td width="50">Release year</td>
    <td width="50">Artist</td>
	 <td width="50">Rating</td>
  </tr>

   <?php
			while($shop = mysqli_fetch_array($ReleaseYear)) {
			
  ?>
  <tr>
 	
    <td><?php echo $shop['Title'] ?></td>
    <td><?php echo $shop['Duration'] ?></td>
    <td><?php echo $shop['ReleaseYear'] ?></td>
    <td><?php echo $shop['Artist'] ?></td>
	  <td><?php echo $shop['Rating'] ?></td>
    
    
  </tr>
<?php
}

?>
<?php echo "<a href='year.php'>Go Back </a>"; ?>

    
</body>
</html>