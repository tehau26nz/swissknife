<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
  margin: 0;
  font-family: Tahoma, Helvetica, Verdana;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #0062cc;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 200px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 200px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="index.html">Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


<?php
if(isset($_POST['username'])){
echo"<br> Username entered <br>";

$un =$_POST['username'];
$up =$_POST['password'];
if("Tehaunui"==$un){
echo "<strong>Hello Tehaunui :)</strong>";
}
else{
echo "<strong>:( who are you?</strong>";
}
}
?>
<br>
<?php echo "Today is the " . date("d-m-Y") . "<br>";?>

<html lang="en">
<head>
    <title>Upload an image</title>
</head>
<body>
</br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <br>Please select an image to upload:
    </br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="upload">
</form>

</body>
</html>


