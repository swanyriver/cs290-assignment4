<?php
session_start();

if(session_status() != PHP_SESSION_ACTIVE){
  echo "Problem starting session</body></html>";
  return;
}

//first time from login page
if(!isset($_SESSION['loggedIN'])){

  //user not logged in and not coming from logged-in
  if(!isset($_POST['username'])){
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

  //bad user name provided
  if($_POST['username'] == "" || $_POST['username'] == null){
    //display error message and provide link
    echo "A username must be entered. Click 
          <a href='login.php'>here</a> to return to the login screen.";
    echo "</body></html>";
    return;
  }

  $_SESSION['loggedIN'] = true;
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['visitCount'] = 0;
} else {
  //user already loged in, increment visit count
  $_SESSION['visitCount']+=1;
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

<?php 

if(isset($_GET['redirect'])){
  echo "You are already logged in, welcome back to content1 <br><br>";
}

echo "Hello {$_SESSION['username']} you have visited this page {$_SESSION['visitCount']} times before. 
Click <a href='login.php?logout=true'>here</a> to logout."; 

if (isset($_SESSION['loggedIN'])){
  echo "<br><br><a href='content2.php'>content2</a>";
}

?>



</body>
</html>