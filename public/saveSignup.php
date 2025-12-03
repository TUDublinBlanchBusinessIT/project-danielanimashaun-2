<?php
session_start();

$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['classType'] = $_POST['classType'];

if (isset($_POST['equipment'])) {
    $_SESSION['equipment'] = 1;
    header("Location: equipmentForm.html");
    exit;
} else {
    $_SESSION['equipment'] = 0;
    header("Location: finalStep.php");
    exit;
}
