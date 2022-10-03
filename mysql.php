<?php

function connect(){
  $db = new PDO ('mysql:dbhost=localhost;dbname=project', "root", "password", 
[
  PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
]);

return $db;
}