<?php
function id(){
	$id=$_REQUEST['id'];
	if(!ctype_digit($id))die('invalid id');
	else return $id;
}
