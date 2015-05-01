<?php
header('Content-Type: text/plain');

$jsonObj = array();

//retrive request type
$jsonObj['Type']=$_SERVER['REQUEST_METHOD'];

//add request array as json object property 'paramaters'
if(count($_REQUEST)){
  $jsonObj['parameters']=$_REQUEST;
} else {
  $jsonObj['parameters']=NULL;
}

//display json string
echo json_encode($jsonObj);

?>