<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit roles</title>
</head>
<body>
    <h1>Edit Roles</h1>

    <?php
    
      include ('mysql.php');
      $db =connect();
      $id=$_GET['id'];
      $result = $db->query("SELECT * FROM roles WHERE id = $id");
      $row = $result->fetch();

    ?>
        <form action="update.php" method="post">
        
      <input type="hidden" name="id" value = "<?= $row->id ?>">
      <input type="text" name="name" value = "<?= $row->name ?>"> Name <br>
      <input type="text" name="value" value = "<?= $row->value ?>"> Value <br>

      <button>Update Role</button>
    </form>
</body>
</html>