<?php
include ('config.php');
?>

<?php
$paring="SELECT goods.id, goods.title, clients_id, clients.name FROM goods JOIN clients ON goods.clients_id=clients.id";
$output=mysqli_query($connection, $paring);

while ($line=mysqli_fetch_assoc ($output)) {
	echo 'ID товара: '.$line['id']. '<br>';
	echo 'Название товарв: '.$line['title'].'<br>';
	echo 'ID клиента: '.$line['clients_id'].'<br>';
	echo 'Имя клиена: '.$line['name'].'<br><br>';
}
?>