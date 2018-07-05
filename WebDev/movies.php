<?php
  $genreid = $_GET['genid'];
  $cateid = $_GET['cid'];
  
  include("db_connect.php");

  $query = "
    SELECT *
    FROM movielist where genres=$genreid and categories=$cateid;
  ";

  $movies = mysqli_query($conn, $query);
?>

<head>
 <style >
 	header{
			text-align: center;
		}
		table{
			text-align: center;
			margin-top: 100px;
		}

		#tableheader{
			background-color: skyblue;
			font-size: xx-large;
			color: white;
		}
		tr{
			height: 40px;
		}
		.cont{
			display: block;
			float: left;
			position: relative;
			left: 20%;
		}
		

 </style>

</head>

<header>
	<h1>
		Movie List
	</h1>
</header>

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
			while($shopitem = mysqli_fetch_array($movies)) {
			
  ?>
  <tr>
 	
    <td><?php echo $shopitem['Title'] ?></td>
    <td><?php echo $shopitem['Duration'] ?></td>
    <td><?php echo $shopitem['ReleaseYear'] ?></td>
    <td><?php echo $shopitem['Artist'] ?></td>
	<td><?php echo $shopitem['Rating'] ?></td>
    
    
  </tr>
<?php
}

?>

</table>

</div>

