<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Password: <input type="password" name="pass" required><br><br>
    <input type="submit" name="submit" value="Login">
</form>

<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    // predefined correct values
    $correct_name = "Abhishek";
    $correct_pass = "23053671";

    if($name == $correct_name && $pass == $correct_pass){
        echo "<h3>Login successful</h3>";
    }
    else{
        echo "<h3>Invalid login</h3>";
    }
}
?>

</body>
</html>