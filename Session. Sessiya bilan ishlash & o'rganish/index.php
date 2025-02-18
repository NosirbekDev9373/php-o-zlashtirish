<?php 
// Session - sessiya 

session_start();

$_SESSION['username'] = "Nosirbek";
$_SESSION['rang'] = "oq";
//var_dump($_SESSION);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Document</title>
 </head>
 <body>
 	<div>Foydalanuvchi: <?= $_SESSION['username'] ?> </div>
 	<div><?= $_SESSION['rang']?></div>
 
 </body>
 </html>