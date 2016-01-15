<?php
   session_start();
   // If logged in, delete session variables to log out
   if (isset($_SESSION['user_id'])) {
      // Delete session variables by clearing $_SESSION array
      $_SESSION = array();
      // Delete session cookie by setting expiration date to time in the past
      if (isset($_COOKIE[session_name()])) {
         setcookie(session_name(), '', time() - 3600);
      }
      // Destroy session
      session_destroy();
   }
   //Delete cookies
   setcookie('user_id', '', time() - 3600);
   setcookie('username', '', time() - 3600);
   //Redirect to home page
   header("Location: index.php");
?>
