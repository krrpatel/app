<DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width'>
<title>SOFTWARE LOOTS</title>
<style>
body{
 text-align: center;
  margin-top: 10;
  background: #FFFFFF;
}

html{
  background: #00E5FF;
  border-radius: 10px;
}
input[type="text"],
input[type="email"],
input[type="number"]{
 padding: 15px;
 width: 280px;
 text-align: left;
 color: black;
 font-size: 13px;
 border-radius: 5px;
 outline:0;
 background: #fff;
 border: 3px solid black;
 
  
}
h4{
  font-weight: blue;
  margin-left: 30px;
  margin-right: 30px;
  margin-top: 10px;
  padding: 10px;
  paddin: 7px;
  font-size: 15px;
  
}
h3{
	 color: red;
  margin-left: 30px;
  margin-right: 30px;
  width: match-parent;
  padding: 6px;
}
input[type="submit"]{
  color: white;
  background: #FF6E00;
  border: 2px solid blue;
  padding: 15px;
  width: 280px;
  outline: 0;
  font-weight: bold;
  border-radius: 5px;
  font-size: 13px;
  
}
hr{
  height: 2px ;
  background-image: linear-gradient(to right, #FF0000,#5500FF,#00EBFF);
}
</style>
</head>
<body>
<br><h3>SOFTWARE LOOTS</h3>
<hr>
<h4>EBAY UNLIMITED NUMBER<h4><br><br>
<?php
if(!isset($_POST['sub'])){
	echo'<form action="?" method="POST" autocomplete="off">
	<lable>Enter Access Key</lable><br><input type="text" name="key" placeholder="Enter Access Key"required/><br><br><input type="submit" name="sub" value="GO-NEXT"/>
	</form><br><hr>';
	
}

if(isset($_POST['sub'])){
  $key = $_POST['key'];
 	
if($key == '009'){

	echo "<meta http-equiv='refresh' content='0 url=https://www.workonline81.xyz/'><br>";
   
}
else{
	echo'<script>alert("Please enter valid access key")</script>
	<a href="https://t.me/new_software_loot">Join Channel For Get Access Key</a>';
	
	echo "<meta http-equiv='refresh' content='1 url=https://t.me/new_software_loot'><br>";
}
}

?>

<br><br><br>
<a href="https://t.me/new_software_loot">JOIN OUR TELEGRAM CHANNEL</a>
<br>
<br><br>
</body>
</html> 