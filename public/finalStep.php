<?php
include("finalStepHeader.html");
session_start();

echo $_SESSION['firstname'] . "<br>";
echo $_SESSION['surname'] . "<br>";
echo $_SESSION['email'] . "<br>";
echo $_SESSION['classType'] . "<br>";

if ($_SESSION['equipment'] == 1) {
    echo $_SESSION['mats'] . "<br>";
    echo $_SESSION['blocks'] . "<br>";
}
?>
<form method="POST" action="confirm.php">
    <label><input type="checkbox" name="confirm">Yes</label><br><br>
    <button type="submit">Continue</button>
</form>
