<?php
session_start();
if (!isset($_POST['confirm'])) {
    header("Location: finalStep.php");
}

$fn = $_SESSION['firstname'];
$sn = $_SESSION['surname'];
$em = $_SESSION['email'];
$ct = $_SESSION['classType'];
$equipment = $_SESSION['equipment'];

if ($equipment == '1') {
    $m = $_SESSION['mats'];
    $b = $_SESSION['blocks'];
} else {
    $m = 0;
    $b = 0;
}

include("dbcon.php");

$sql = "insert into signups(firstname,surname,email,classType,equipmentNeeded,mats,blocks) values ";
$sql .= "('$fn','$sn','$em','$ct','$equipment','$m','$b')";

if (mysqli_query($conn, $sql)) {
  echo "Your Pilates signup was created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

session_destroy();
?>
