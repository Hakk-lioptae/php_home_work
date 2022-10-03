<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Role Lists</title>
</head>
<body>
  <h1>Role Lists</h1>

  <?php

  include ('mysql.php');

  $db = connect();

  $result = $db->query("SELECT * FROM roles");
  $rows = $result->fetchAll();

  ?>

  <ul>

    <?php foreach ($rows as $row):?>
    <li>
        <a href="del.php?id=<?= $row->id ?> ">Delete</a>
        <a href="edit.php?id=<?= $row->id ?> ">Edit</a>
        <?= $row->name ?> (<?= $row->value ?>)<br>
    </li>
      <?php endforeach ?>
  </ul>

  <a href="new.php">New Role</a>
</body>
</html>