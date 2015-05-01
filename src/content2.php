<?php
session_start();

if(session_status() != PHP_SESSION_ACTIVE){
  echo "Problem starting session</body></html>";
  return;
}

//first time from login page
if(!isset($_SESSION['loggedIN'])){

  //redirect to login
  //using code example from lecture that first makes a string array seperated
  // by / excluding the last string, then creates a string from that array inserting
  // slashes back in, using this as the prefix for redirection
  // then modifies document header
  $path = explode('/', $_SERVER['PHP_SELF'], -1);
  $path = implode('/',$path);
  $redirect = "http://" . $_SERVER['HTTP_HOST'] . $path;
  header("Location: {$redirect}/login.php", true);
  exit();
}
//else make an html link back to content1.php
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

<br><br>
<a href='content1.php'>content1</a>

</body>
</html>