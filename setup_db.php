<?php

class DBphp extends SQLite3

{

function __construct()

{

$this->open('test.db');

}

}

$db = new DBphp();

$res=$db->exec("CREATE TABLE User (username TEXT PRIMARY KEY NOT NULL
,password TEXT NOT NULL);");

if($res)

echo "Table created!!!\n";

else

echo "Oops!!! Something went wrong!!!";

$res=$db->exec("CREATE TABLE Questions (username TEXT NOT NULL
,question TEXT NOT NULL,
answer TEXT,
liked_or_not INTEGER);");

if($res)

echo "Table Question created!!!\n";

else

echo "Oops!!! Something went wrong!!!";




$db->close();

?>