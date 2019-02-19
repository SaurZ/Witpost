<?php

class DBphp extends SQLite3

{

function __construct()

{

$this->open('test.db');

}

}

$db = new DBphp();

echo $_POST['username'];
echo $_POST['password'];
$query1="INSERT INTO User(username,password) VALUES ('".$_POST['username']."','".$_POST['password']."');";
echo $query1;

$db->exec($query1);


$db->close();
echo "Ho gyo kaam";
session_start();
$_SESSION['username'] = $_POST['username'];
header("Location: http://localhost:8008/witPost/home.php");
?>