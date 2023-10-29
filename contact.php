<?php
require_once("connect.php");

$aboba = $_POST["aboba"];
$valera = $_POST["valera"];

mysqli_query($connect, "INSERT INTO king228 (id,aboba,valera)
VALUES (NULL, '$aboba', '$valera')");
header("Location: success.php");
?>
