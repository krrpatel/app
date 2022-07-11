
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">

<script src='https://www.google.com/recaptcha/api.js' async defer ></script>
</head>
<body class="bg-blue-100 flex justify-center ">
<?php
//Created by INFOTECH 

$link=$_POST['link'];
if($link){
$id=substr(str_shuffle("AbcDeFGhIJkLkNOgQrtTjVWgYv1234567890"), 0, 5);    
mkdir($id);
$data="<?php
header('Location: $link');
?>";
file_put_contents("$id/index.php",$data);
$domain=$_SERVER['SERVER_NAME'];
echo"<center><div class='box'>
<br><br><br>
<input type='text' class='form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' value='https://$domain/$id' id='link' readonly><br>
<button class='      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out' value='Create' onclick='copy()'>Copy Link</button></div></center>"; 
}else{
echo"<center><div class='box'>
<br><br><br>

<form method='POST' action='' autocomplete='off'>

<input type='link' class='form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none' name='link' placeholder ='Paste Link' required><br>
<input type='submit' class='      w-full
      px-6
      py-2.5
      bg-blue-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      shadow-md
      hover:bg-blue-700 hover:shadow-lg
      focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
      active:bg-blue-800 active:shadow-lg
      transition
      duration-150
      ease-in-out' value='Create'>

</form></div><center>";
}

//Created by INFOTECH
?>
<script>
function copy() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Short Link Copied");
}</script>
</body>
</html>