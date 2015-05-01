<?php
session_start();
?>

<?php
if(session_status() != PHP_SESSION_ACTIVE){
  echo "Problem starting session</body></html>";
  return;
}

//first time from login page
if(!isset($_SESSION['loggedIN'])){

  //user not logged in and not coming from logged-in
  if(!isset($_POST['username'])){
    //redirect to login.php
    echo "bad access";
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

<?php echo "Hello {$_SESSION['username']} you have visited this page {$_SESSION['visitCount']} times before. 
Click <a href='login.php?logout=true'>here</a> to logout."; ?>

</body>
</html>