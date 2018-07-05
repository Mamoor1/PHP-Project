<?php include("db_connect.php");?>

<?php
	$query = "
		SELECT *
		FROM hollywood where FlimType='action';
	";

	$listmovie = mysqli_query($conn, $query);

?>

<head>
	<style>
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
	</style>
</head>

<header>
	<h1 >
		List Of Hollywood Action Movies
	</h1>

</header>

 <div class="data">

<table width="900" border="1" align="center" cellpadding="5">
  <tr id="tableheader">
    <td width="100">Title</td>
    <td width="200">Release Year</td>
	<td width="210">Duration</td>
  </tr>

  		<?php
			while($movielist = mysqli_fetch_array($listmovie)) {
			
  ?>
  <tr>
 	
    <td><?php echo $movielist['Title'] ?></td>
    <td><?php echo $movielist['RelaseYear'] ?></td>
    <td><?php echo $movielist['Duration'] ?></td>
    
  </tr>
<?php
}

?>
</table>

</div>

