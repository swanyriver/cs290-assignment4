<?php
header('Content-Type: text/plain');

$jsonObj = array();

$jsonObj['Type']=$_SERVER['REQUEST_METHOD'];

if(count($_REQUEST)){
  $jsonObj['parameters']=$_REQUEST;
} else {
  $jsonObj['parameters']=NULL;
}

echo json_encode($jsonObj);

?>