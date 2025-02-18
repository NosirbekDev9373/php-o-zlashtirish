<?php 

// Cookie

setcookie('test', 'bu_uning_qiymati');
setcookie('user_name', "Nosir");

// $_COOKIE
//var_dump($_COOKIE['user_name']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div>Foydalanuvchi: <?php echo $_COOKIE['user_name'] ?></div> 

</body>
</html>
