<?php 

include  ('mysql.php');
$db = connect();

$id =$_POST['id'];
$name =$_POST['name'];
$value =$_POST['value'];

$sql = "UPDATE roles SET name='$name', value=$value WHERE id = $id";
$db ->query($sql);

header ('location:index.php');