<?php 

session_start();

//$_SESSION['rang'] = "qizil";
//session_unset();
//session_destroy();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documnet</title>
</head>
<body>
	<div>Biz haqimizda</div>
	<div>Foydalanuvchi: <?= $_SESSION['username']?> </div>
 	<div><?= $_SESSION['rang']?></div>

</body>
</html>
