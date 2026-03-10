<!-- //Design a HTML form with two set boxes to taje two numbers from the user.Write the PHP code to 
print the greater number on submission of the form -->
<!DOCTYPE html>
<html>
<head>
    <title>Greater Number Finder</title>
</head>
<body>

<h2>Enter Two Numbers</h2>

<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    <input type="submit" name="submit" value="Find Greater">
</form>

<?php
if(isset($_POST['submit'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    if($n1 > $n2) {
        echo "<h3>Greater Number is: $n1</h3>";
    } 
    else if($n2 > $n1) {
        echo "<h3>Greater Number is: $n2</h3>";
    } 
    else {
        echo "<h3>Both numbers are equal</h3>";
    }
}
?>

</body>
</html>