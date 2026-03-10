<!DOCTYPE html>
<html>
<head>
    <title>Roll No and Section Form</title>
</head>
<body>

<h2>Student Information</h2>

<form method="post">
    Roll No: <input type="text" name="rollno" required><br><br>

    Section:
    <input type="radio" name="section" value="A" required> A
    <input type="radio" name="section" value="B"> B
    <input type="radio" name="section" value="C"> C
    <input type="radio" name="section" value="D"> D
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $roll = $_POST['rollno'];
    $sec = $_POST['section'];

    echo "<h3>Roll Number: $roll</h3>";
    echo "<h3>Selected Section: $sec</h3>";
}
?>

</body>
</html>