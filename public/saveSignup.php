<?php
session_start();

$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['email'] = $_POST['email'];

if (isset($_POST['equipment'])) {
    $_SESSION['equipment'] = 1;
} else {
    $_SESSION['equipment'] = 0;
}

header("Location: classType.html");
exit;
