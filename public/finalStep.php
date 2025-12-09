<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirm Signup</title>
</head>
<body>

<h1>Confirm Your Pilates Signup</h1>
<h2>Personal Details</h2>

<p>First Name: <?php echo $_SESSION['firstname']; ?></p>
<p>Surname: <?php echo $_SESSION['surname']; ?></p>
<p>Email: <?php echo $_SESSION['email']; ?></p>
<p>Class Type: <?php echo $_SESSION['classType']; ?></p>

<?php
if ($_SESSION['equipment'] == 1) {
    echo "<p>Mats: " . $_SESSION['mats'] . "</p>";
    echo "<p>Blocks: " . $_SESSION['blocks'] . "</p>";
} else {
    echo "<p>No equipment requested.</p>";
}
?>

<form action="confirm.php" method="post">
    <label><input type="checkbox" name="confirm" required> I confirm</label><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
