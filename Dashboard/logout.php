<?php
session_start();
if(isset($_SESSION["user"])!=null)
{
session_destroy();
header("Location:Login.php");
}
?>