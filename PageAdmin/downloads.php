<?PHP 
 include('../app/class.php');
 
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>

  <?php
  $student->FilesLogic();
  $users = $getUsers->fetchAll();
   foreach ($users as $user): ?>
    <tr>
      <td><?php echo $users['id']; ?></td>
      <td><?php echo $users['name']; ?></td>
      <td><?php echo floor($users['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $users['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $users['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>