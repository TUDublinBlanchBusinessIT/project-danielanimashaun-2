<?php
session_start();

if (!isset($_POST['confirm'])) {
    header("Location: finalStep.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Signup Confirmed</title>
</head>
<body>
<h1>Your Pilates signup is complete.</h1>
<p>In a later version this will insert into the database.</p>
</body>
</html>
