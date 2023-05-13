<?php

if (isset($_SESSION['userid']))
{
echo "<p style='float: right'><i><b>User: ".$_SESSION['fname']." ".$_SESSION['sname']." | User type: ".$_SESSION['userType']. "</b></i></p>";
}
?>.