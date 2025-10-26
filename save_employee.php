<?php
include 'db_connect.php';

$name = $_POST['name'];
$designation = $_POST['designation'];
$basic = $_POST['basic'];
$hra = $_POST['hra'];
$da = $_POST['da'];
$gross = $_POST['gross'];

$sql = "INSERT INTO employees (name, designation, basic_salary, hra, da, gross_salary)
        VALUES ('$name', '$designation', '$basic', '$hra', '$da', '$gross')";

if ($conn->query($sql) === TRUE) {
    echo "
    <!DOCTYPE html>
    <html>
    <head>
      <title>Employee Added</title>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body>
      <main class='container'>
        <div class='card'>
          <h2>☑️ Employee Added Successfully!</h2>
          <p>You can now manage or view all employee records.</p>
          <div class='buttons'>
            <a href='add_employee.html' class='btn'>➕ Add Employee</a>
            <a href='view_employee.php' class='btn secondary'>📋 View Employees</a>
          </div>
        </div>
      </main>
    </body>
    </html>
    ";
} else {
    echo 'Error: ' . $conn->error;
}

$conn->close();
?>
