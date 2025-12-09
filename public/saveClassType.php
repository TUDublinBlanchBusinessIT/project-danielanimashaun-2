<?php
session_start();

$_SESSION['classType'] = $_POST['classType'];

if (isset($_SESSION['equipment']) && $_SESSION['equipment'] == 1) {
    header("Location: equipmentForm.html");
    exit;
} else {
    header("Location: finalStep.php");
    exit;
}
