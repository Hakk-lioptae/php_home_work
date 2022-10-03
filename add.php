<?php

include ('mysql.php');

$db = connect();


$name = $_POST['name'];
$value = $_POST['value'];

$sql = "INSERT INTO roles (name, value) VALUES ('$name',$value)";
$db->query($sql);

header ('location:index.php');