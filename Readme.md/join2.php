<?php
include ('config.php');
?>

<?php
$paring="SELECT articles.id, articles.title, articles.text, id_user, users.username FROM articles JOIN users ON articles.id_user=users.id";
$output=mysqli_query($connection, $paring);

while ($line=mysqli_fetch_assoc ($output)) {
	echo 'ID: '.$line['id']. '<br>';
	echo 'Название: '.$line['title'].'<br>';
	echo 'Текст: '.$line['text'].'<br>';
	echo 'ID клиента: '.$line['id_user'].'<br>';
	echo 'Имя клиена: '.$line['username'].'<br><br>';
}
?>