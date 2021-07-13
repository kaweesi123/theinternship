<?php
$mysqli_connection =new mysqli("localhost","root","");
$mysqli_connection->query("CREATE DATABASE IF NOT EXISTS nema_register");
mysqli_select_db($mysqli_connection,"nema_register");



$mysqli_connection->query("CREATE TABLE districts(district_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(district_id),district_name varchar(20) NOT NULL UNIQUE)");




$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('WAKISO')");
$mysqli_connection->query("DELETE FROM districts where district_id=1");

$insert = $mysqli_connection->query("INSERT INTO districts(district_name) VALUES('MUKONO')");
if($insert) echo "inserted successfully";
else $mysqli_connection->error;





$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('WAKISO')");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('KAMPALA')");


$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('MASAKA')");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('ARUA')");

$delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name = 'WAKISO'");
if($delete) echo "inserted successfully";
else $mysqli_connection->error;


$mysqli_connection->query("CREATE TABLE tree_types(treetype_id int(11) NOT NULL ,PRIMARY KEY(treetype_id),treetype_name varchar(20) NOT NULL UNIQUE)");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetypes_name) VALUES(30,'kalitunsi')");
$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetypes_name) VALUES(31,'muvule')");
$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetypes_name) VALUES(32,'musabu')");
$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetypes_name) VALUES(33,'musizi')");
$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetypes_name) VALUES(34,'eucaplitus')");

$insert = $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(32,'musabu')");
if($insert) echo "inserted successfully";
else $mysqli_connection->error;


$mysqli_connection->query("UPDATE tree_types SET treetype_name='muvuule' WHERE treetype_id=31");

	$mysqli_connection->query("CREATE TABLE members(member_id int(11) NOT NULL , PRIMARY KEY(member_id),member_name varchar(20) NOT NULL UNIQUE, PASSWORD varchar(100) NOT NULL, EMAIL_ADDRESS VARCHAR(30) NOT NULL UNIQUE, district_id int(11) NOT NULL, FOREIGN KEY(district_id) REFERENCES districts(district_id))");

	$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(20,'fahim','601','fahim@gmail.com','2')");

		$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(21,'rahim','600','rahim@gmail.com','4')");
	$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(23,'tom','603','tom@gmail.com','3')");

		$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(24,'joan','604','joan@gmail.com','6')");
	$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(27,'ben','605','ben@gmail.com','9')");

		$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS'district_id) VALUES(29,'eric','609','fahim@gmail.com','5')");

	$mysqli_connection->query("CREATE TABLE trees(tree_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(tree_id),member_id int(11) NOT NULL,FOREIGN KEY(member_id) REFERENCES members(member_id),district_id int(11) NOT NULL, FOREIGN KEY (district_id) REFERENCES districts(district_id),number_of_trees int(50) NOT NULL, treetype_id int(11)  NOT NULL,FOREIGN KEY (treetype_id) REFERENCES tree_types(treetype_id)");

		$delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name ='WAKISO'");
		if($delete) echo "inserted successfully";
		else $mysqli_connection->error;

		$mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(12,22,300,12)");

		$mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(13,23,301,13)");
		
		$mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(14,24,302,14)");
		
		$mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(15,25,308,17)");


		$insert = $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(54,18,569,19)");
		if($insert) echo "inserted successfully";
		else echo $mysqli_connection->error;
		
