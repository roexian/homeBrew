<?php
function testDB() {
	$dbo->query('SELECT FName, LName, Age, Gender FROM mytable WHERE FName = :fname');
	$dbo->bind(':fname', 'Jenny');
	$row = $dbo->single();
	return $row;
}