 <!DOCTYPE html>
<html>
<head>


<?php
  $categoryid = $_GET['catid'];


  include("db_connect.php");

  $query = "
    SELECT *
    FROM genre;
  ";

  $categories = mysqli_query($conn, $query);
?>
<style>
ul {
    list-style-type: none;
    margin: 300px;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    border: 1px solid #555;
    
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

body{
  background-image: url('drop.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;


	}
	
</style>



</head>
<body>

 

<ul>

<?php
      while($cat = mysqli_fetch_array($categories)) {
      
  ?>
  <li ><?php echo '<a href="movies.php?genid='.$cat['gid'].'&cid='.$categoryid.'">'.$cat['Genres'].'</a>'?></li>
  
<?php
}

?>
  
</ul>

</body>
</html>
