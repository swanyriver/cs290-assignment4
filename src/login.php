<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>[cs290] assignment 4 muliplication table</title>
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

  <form action = 'layout.html' method='post'>
    Enter UserName:<input type="text" name="username">
    <input type='submit' value="Login">
  </form>

</body>
</html>


