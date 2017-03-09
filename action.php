<?php
try {
$action=$_REQUEST['action'];

require('pdo.php');
$db=pdo();

require('id.php');

if($action=='delete'){
	$id=id();
	$sql = 'delete from dishes where id=:id';
	$db->prepare($sql)->execute([':id'=>$id]);
	header('Location: dishes.php'); }

elseif($action=='details'){
	$id=id();
	header('Location: details.php?id='.$id); }
	
elseif($action=='create'){

	$sql = 'insert into dishes (name) values (:name)';
	$db->prepare($sql)->execute([':name'=>$_REQUEST['name']]);
	header('Location: dishes.php');
}

elseif($action=='update'){
	$id=id();
	$sql = 'update dishes set name=:name where id=:id';
	$db->prepare($sql)->execute([':name'=>$_REQUEST['name'], ':id'=>$id]);
	header('Location: dishes.php');   
}

}catch (PDOException $e) {
	echo $e->getMessage();
}
