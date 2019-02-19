<?php

class DBphp extends SQLite3

{

function __construct()

{

$this->open('test.db');

}

}

$db = new DBphp();

$answer = $_POST['answer'];
$username = $_POST['username'];
$question_id = $_POST['question_id'];
$query1 = "INSERT INTO Answers(question_id,answer,likes,dislikes,username) VALUES(".$question_id.",'".$answer."', 0,0,'".$username."');";
error_log($query1,0);
$db->query($query1);
$db->close();
unset($db);


