<?php
session_start();

$_SESSION['classType'] = $_POST['classType'];

if ($_SESSION['equipment'] == 1) {
    header("Location: equipmentForm.html");
} else {
    header("Location: finalStep.php");
}
?>
