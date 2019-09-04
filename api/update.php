<?php
header("Content-type:application/json");
require 'config.php';
$sql = "UPDATE cyi_user SET user_name = '" . $_POST['user_name'] . "',user_email = '" . $_POST['user_email'] . "',user_address = '" . $_POST['user_address'] . "' WHERE user_id = '" . $_POST['user_id'] . "'";
$result = $mysqli->query($sql);
$sql = "SELECT * FROM cyi_user WHERE user_id = '" . $_POST['user_id'] . "'";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data, JSON_PRETTY_PRINT);
?>