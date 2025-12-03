<?php
session_start();

$_SESSION['mats'] = $_POST['mats'];
$_SESSION['blocks'] = $_POST['blocks'];

header("Location: finalStep.php");
?>