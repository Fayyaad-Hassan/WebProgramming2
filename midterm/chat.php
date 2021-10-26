<?php

$db = new mysqli("localhost","root","","chatroom");
if($db->connect_error){
  die("Connection failed: " .  $db->connect_error);
}

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null; // Add null to fix the array not being detected. Along with isset.
$from = isset ($_POST['from']) ? $_POST['from'] : null;

if(!empty($message) && !empty($from)){
  $sql = "INSERT INTO `chatroom` (`message`, `from`) VALUES('".$message."','".$from."')";
  $result['send_status'] = $db->query($sql);
}


$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `chatroom` WHERE `id`> " . $start);
while($row = $items->fetch_assoc()) {
  $result['items'][] = $row;
}

$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
