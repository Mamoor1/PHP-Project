 <?php include("db_connect.php");?>

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
    width: 40%;
}
 
 </style>
</head>
<body background="df.jpg">
  
   <form action="yearresult.php" method="POST">
  <input type="text" name="search" placeholder="Search..">
</form>
    
</body>
</html>