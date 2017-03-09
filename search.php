<?php include('head.php'); ?>
<h1>Search</h1>
<?php

include('pdo.php');
$db=pdo();

$sql = 'select * from dishes where name like :name';
$stmt=$db->prepare($sql);
$stmt->execute([':name'=>'%'.$_REQUEST['name'].'%']);
$res=$stmt->fetchAll();
?>
<ul>
<?php foreach($res as $rec) {
$name=htmlentities($rec['name']);
	?>
<li><?= $name ?></li>
<?php } ?>
</ul>

