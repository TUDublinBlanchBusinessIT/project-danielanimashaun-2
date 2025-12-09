<?php
session_start();
if (!isset($_POST['confirm'])) {
    header("Location: finalStep.php");
    exit;
}

$fn = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
$sn = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';
$em = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$ct = isset($_SESSION['classType']) ? $_SESSION['classType'] : '';
$equipment = isset($_SESSION['equipment']) ? $_SESSION['equipment'] : 0;

if ($equipment == 1) {
    $m = isset($_SESSION['mats']) ? $_SESSION['mats'] : 0;
    $b = isset($_SESSION['blocks']) ? $_SESSION['blocks'] : 0;
} else {
    $m = 0;
    $b = 0;
}

include("dbcon.php");

$sql = "insert into signups(firstname,surname,email,classType,equipmentNeeded,mats,blocks) values ";
$sql .= "('$fn','$sn','$em','$ct','$equipment','$m','$b')";

if (mysqli_query($conn, $sql)) {
  echo "Your Pilates signup was created successfully<br>";
  echo "Name: $fn $sn<br>";
  echo "Email: $em<br>";
  echo "Class: $ct<br>";
  echo "Equipment: $equipment, Mats: $m, Blocks: $b<br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

session_destroy();
?>
