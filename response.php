<?php
$phone_number = "";
$message = "";

//isset()
$phone_number = isset($_POST["phone_number"]) ? $_POST["phone_number"] : '';

echo "<h2>You have sent</h2>";
echo $_POST["phone_number"];
echo "<br>";
echo $_POST["message"];

?>