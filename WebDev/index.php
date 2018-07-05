  <!DOCTYPE html>
<html>

<title>
MovieGuide  
</title>

 
<head>

<link rel="stylesheet" href="styleIMDB.css">
<link rel="icon" href="eye.ico" type="image/x-icon">



<?php include("db_connect.php");?>

<?php
	$query = "
		SELECT *
		FROM category;
	";

	$categories = mysqli_query($conn, $query);
?>




</head>



<body >






<img src="logo.jpg" alt="logo Icon" style="width:128px;height:128px;">
 <marquee><font color="red">WELCOME TO MOVIE GUIDE</font></marquee>



   <br>
  <div class="q">
   <ul>
  <li ><a href="#home">Home</a></li>
 
  
  
  <div class="dropdown" >
  <span><li><a href='category.html'>Catagory</a></li></span>
  <div class="dropdown-content">
  
  

  <?php
			while($shop = mysqli_fetch_array($categories)) {
			
  ?>
  <li ><?php echo '<a href="FT1.php?catid='.$shop['cid'].'">'.$shop['categories'].'</a>'?></li>
  
  
<?php

}

?>


  </div>
  </div>
  

  <li><a href="Tralier.html">Trailer</a></li>
  <li><a href="signin.php">Reviews</a></li>
  <li><a href="NEWS.html">News</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="signin.php">SignIn/SignUp</a></li>
   
  
  
  
  

   </ul>
   </div>
   
   </br>
   
    
  	 
 
	    <h1> <b>TopBoxOffice</b></h1>
    
		
	<br>	
	<div class="p">
	<div class="img">
    <a target="_blank" href="poster0.php" />
 
	<img src="dorey.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	   <div class="desc">2.5GB HD1080p</div>
    </div>
	</div>
	
	
	<div class="p">
	 <div class="img">
	  <a target="-blank" href="poster1.php">
	<img src="cv.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="poster2.php">
	<img src="dpool.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">2.5 GB 720p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="poster3.php">
	<img src="jbook.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="zoopi.jpg">
	<img src="zoopi.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="sup.jpg">
	<img src="sup.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">2.5 GB HD1080p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="pts.jpg">
	<img src="pts.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1080p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="poster7.php">
	<img src="xmen.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">720p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="kpanda.jpg">
	<img src="kpanda.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">HD1080p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="central.jpg">
	<img src="targan.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="poster10.php">
	<img src="angry.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="central.jpg">
	<img src="central.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="conj.jpg">
	<img src="conj.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="ind.jpg">
	<img src="ind.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="star.jpeg">
	<img src="star.jpeg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>

	<div class="p">
	 <div class="img">
	 <a target="_blank" href="suicide.jpg">
	<img src="suicide.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
		<div class="p">
	 <div class="img">
	 <a target="_blank" href="mebeforeu.jpg">
	<img src="mebeforeu.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
		<div class="p">
	 <div class="img">
	 <a target="_blank" href="purge.jpg">
	<img src="purge.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB</div>
    </div>
	</div>
	
	
	
	</br>
	
	

	
	
	<!---up coming-->
	
	                      <br>  <h1> <b>UpComing</b></h1></br>
    <br>
	<marquee behavior="alternate">
	<div class="p">
	<div class="img">
    <a target="_blank" href="dr.jpg">
	<img src="dr.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">2 GB</div>
    </div>
	</div>
	
		<div class="p">
	 <div class="img">
	  <a target="_blank" href="wri.jpg">
	<img src="wri.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">780MB HD1080p</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="Jatt.jpg">
	<img src="Jatt.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="inception.jpg">
	<img src="inception.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">2.5GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="Raees.jpg">
	<img src="Raees.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">750MB mp4</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="Dab.jpg">
	<img src="Dab.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">Blue ray 1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="r2.jpg">
	<img src="r2.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	  <a target="_blank" href="k1.jpg">
	<img src="k1.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc"> Blue ray 1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="bohu2.jpg">
	<img src="bohu2.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">850MB BLUE RAY</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="sk.jpg">
	<img src="sk.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="alien.jpg">
	<img src="alien.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="livebynight.jpg">
	<img src="livebynight.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="sord.jpg">
	<img src="sord.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="urn.jpg">
	<img src="urn.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="rustom.jpg">
	<img src="rustom.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="mohenjo.jpg">
	<img src="mohenjo.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="kabil.jpg">
	<img src="kabil.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	<div class="p">
	 <div class="img">
	 <a target="_blank" href="sultan.jpg">
	<img src="sultan.jpg" alt="logo Icon" style="width:150px;height:150px;">
	</a>
	  <div class="desc">1GB</div>
    </div>
	</div>
	
	
	
	
	
	</marquee>
	</br>
	
	<!---up coming end--->
	
 
 
 
 
	<!--vedio background body start -->
		<div class="background-wrap">
			<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted"> 
				<source src="X.mp4" type="video/mp4">
				Video not supported
			</video>          
		</div>


	<!--vedio background body end-->
	
	
<footer><font color='red'>Copyright ©AppletCoders.com</footer>
	  

  
 <li><h2 style="text-align:right;"> <a href="http://www.twitter.com"><button type="submit"><img src="twitter.png" alt="logo Icon" style="width:90px;height:50px;"></button></a></h2></li>
 
 
  <li><h2 style="text-align:right;">   <a href="http://www.facebook.com"><button type="submit"><img src="find-us-on-facebook_trans.png" alt="logo Icon" style="width:90px;height:50px;"></button></a></h2> </li>
 

 

</body>




</html>