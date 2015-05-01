<?php
session_start();
if(session_status() != PHP_SESSION_ACTIVE){
  echo "Problem starting session</body></html>";
  return;
}

if(isset($_SESSION['loggedIN'])){
  if(isset($_GET['logout'])){
    //destroy session
    session_unset();
    session_destroy();
  }
  else {
    //redirect to content 1 page
    //using code example from lecture that first makes a string array seperated
    // by / excluding the last string, then creates a string from that array inserting
    // slashes back in, using this as the prefix for redirection
    $path = explode('/', $_SERVER['PHP_SELF'], -1);
    $path = implode('/',$path);
    $redirect = "http://" . $_SERVER['HTTP_HOST'] . $path;
    header("Location: {$redirect}/content1.php", true);
    exit();
  }
}

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

  <form action = 'content1.php' method='post'>
    Enter UserName:<input type="text" name="username">
    <input type='submit' value="Login">
  </form>

</body>
</html>


