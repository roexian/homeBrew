<?php
$db = new PDO('mysql:host=localhost;dbname=Site;charset=utf8', 'root', 'cd3msMzTeMzZwvHm');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$testlink= foreach($db->query('SELECT * FROM projects') as $row) {
    echo $row['projName'];
    //.' . '<br />' '.$row['projDesc']; //etc...
}
?>
