<?php
$dbconnect = new PDO('mysql:host=localhost;dbname=gimpy;charset=utf8', 'gimpy', 'Omega@Star4');

$test = foreach($db->query('SELECT * FROM table') as $row) {
    echo $row['projectName'].' . '<br />' '.$row['projectDecription']; //etc...
?>