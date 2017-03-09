<?php include('head.php'); ?>
<?php
try {
require('pdo.php');
$db=pdo();

$sql = 'select * from dishes limit 3';
$stmt=$db->prepare($sql);
$stmt->execute();
$res=$stmt->fetchAll();
}catch (PDOException $e) {
	echo $e->getMessage();
}
?>
<h1>Top dishes</h1>
<ul>
<?php foreach($res as $rec) {
$id=htmlentities($rec['id']);
$name=htmlentities($rec['name']);
	?>
<li><a href="details.php?id=<?= $id ?>"><?= $name ?></a></li>
<?php } ?>
</ul>
<h1>Dish search</h1>
<form action="search.php">
<input name=name>
<input type=submit name=action value=search>
</form>
