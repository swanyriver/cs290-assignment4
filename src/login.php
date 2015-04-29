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
?>

  <form action = 'content1.php' method='post'>
    Enter UserName:<input type="text" name="username">
    <input type='submit' value="Login">
  </form>

</body>
</html>


