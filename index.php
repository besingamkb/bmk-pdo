<?php 

require 'init.php';

$besinga = new Family();
$rows = $besinga->showAll("member");
foreach($rows as $row) {
	echo $row->id ." " . $row->fullname . "<br>";
}

if ( isset($_GET['add']) and $_GET['add'] == 1 ) {
	$data = array();
	$data[':fullname'] = $_GET['fullname'];
	$data[':age'] = $_GET['age'];
	$data[':gender'] = $_GET['gender'];
	//print_r($data);
	$besinga->insert('member', $data);
}

?>