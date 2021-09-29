<?php
$db_host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'portfolio';

try {
    $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $user, $pass);
    $dbh->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
