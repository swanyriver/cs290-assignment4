<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>[cs290] assignment 4 sessions</title>
    <style>
    </style>
  </head>
<body>

<?php
if(session_status() != PHP_SESSION_ACTIVE){
  echo "Problem starting session</body></html>";
  return;
}

//first time from login page
if(!isset($_SESSION['loggedIN'])){

  //bad user name provided
  if(!isset($_POST['username']) || 
    $_POST['username'] == "" || $_POST['username'] == null){
    //redirect to log in page
  }

  $_SESSION['loggedIN'] = true;
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['visitCount'] = 0;
} else {
  //user already loged in, increment visit count
  $_SESSION['visitCount']+=1;
}

//display welcom message and visit count

?>