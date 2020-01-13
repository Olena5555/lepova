<?php
date_default_timezone_set('Europe/Tallinn');
$fname='Olena';
$sname='Lepova';
$course='SKTVRp19';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Мой первый PHP</title>
</head>
<body>
<h1>Первый PHP</h1>
<p>
<?php
echo ' Имя - '.$fname. '<br>'.'Фамилия - '.$sname. '<br>'.' Группа - '.$course.'<br>';

echo date('d.m.Y G:i:s', time());
?>
</p>
</body>
</html>