<?php include('head.php'); ?>
<h1>My dishes</h1>
Dish name: <form action="action.php"><input name=name><input type=submit name=action value=create></form>
<?php
try {
require('pdo.php');
$db=pdo();
$sql='select * from dishes';
$res=$db->query($sql);
}catch (PDOException $e) {
	echo $e->getMessage();
}
?>
<ul>
<?php foreach($res as $rec) {
$id=htmlentities($rec['id']);
$name=htmlentities($rec['name']);
?>
<li>
<form action="action.php">
<?= $id ?> <?= $name ?>
<input type=hidden name=id value=<?= $id ?>>
<input type=submit name=action value=delete>
<input type=submit name=action value=details>
</form>
</li>
<?php } ?>
</ul>
