<?php
function pdo(){
	return new PDO("sqlite:sqlite_db.sqlite", "", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] );
}
