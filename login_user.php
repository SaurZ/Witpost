<?php

class DBphp extends SQLite3

{

function __construct()

{

$this->open('test.db');

}

}

$db = new DBphp();
$query1="SELECT username, password FROM User where username='".$_POST['username']."' and password='".$_POST['password']."';";
echo $query1;
$result = $db->query($query1); // result returns False if credentials not found in database

if ($row = $result->fetchArray()){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    echo "found user!";
    header("Location: http://localhost:8008/witPost/home.php");
}
else{
header("Location: http://localhost:8008/witPost/index.php");
}


$db->close();
?>