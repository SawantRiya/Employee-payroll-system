<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM employees");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Records | AkshRiya</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>📋 Employee Records</h1>
    <a href="index.html" class="back">⬅ Back to Home</a>
  </header>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Designation</th>
      <th>Basic (₹)</th>
      <th>HRA</th>
      <th>DA</th>
      <th>Gross (₹)</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['designation']) ?></td>
        <td><?= $row['basic_salary'] ?></td>
        <td><?= $row['hra'] ?></td>
        <td><?= $row['da'] ?></td>
        <td><strong><?= $row['gross_salary'] ?></strong></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
