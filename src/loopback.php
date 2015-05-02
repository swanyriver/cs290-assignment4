<?php
header('Content-Type: text/plain');

$jsonObj = array();

//retrive request type
$jsonObj['Type']=$_SERVER['REQUEST_METHOD'];

if($jsonObj['Type'] === 'GET'){
  $_reqVars = $_GET;
} else{
  $_reqVars = $_POST;
}


//add request array as json object property 'paramaters'
if(count($_reqVars)){
  $jsonObj['parameters']=$_reqVars;
} else {
  $jsonObj['parameters']=NULL;
}

//display json string
echo json_encode($jsonObj);

?>