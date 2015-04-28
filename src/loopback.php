<?php
header('Content-Type: text/plain');

$jsonObj = array();

$jsonObj['Type']=$_SERVER['REQUEST_METHOD'];

$jsonObj['parameters']=$_REQUEST;

echo json_encode($jsonObj);

?>