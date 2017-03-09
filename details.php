<?php include('head.php'); ?>
<?php

include('pdo.php');
$db=pdo();

require('id.php');
$id = id();

$sql = 'select * from dishes where id=:id';
$stmt=$db->prepare($sql);
$stmt->execute([':id'=>$id]);
$res=$stmt->fetch();

$name=htmlentities($res['name']);
?>
<h1><?= $name ?> details</h1>
Id: <?= $id ?>
<form action="action.php">
	<input name=name value="<?= $name ?>">
	<input type=hidden name=id value="<?= $id ?>">
<input type=submit name=action value=update></form>
