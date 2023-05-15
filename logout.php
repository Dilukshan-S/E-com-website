<?php
  session_start();
  $pagename="logout"; //Create and populate a variable called $pagename
  include ("detectlogin.php");
  include("db.php");
  
  echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
  echo "<title>".$pagename."</title>"; //display name of the page as window title
  echo "<body>";
  include ("headfile.html"); //include header layout file 
  echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
  
  echo "<p>Thank you, ".$_SESSION['fname']." ".$_SESSION['sname']." </p>";
  echo "<p>You are now logged out.</p>";

  session_unset();
  session_destroy();

  include("footfile.html"); //include foot layout
  echo "</body>";
?>
