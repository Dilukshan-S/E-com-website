<?php
 if (isset($_SESSION['userid']))
 {
    echo "<p style='float: right'><i><b>User: ".$_SESSION['fname']." ".$_SESSION['sname']." | User type: C </b></i></p>";
 }
?>