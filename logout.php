<?php
session_start();
require_once('Dashboard/connection.php');

if(isset($_GET['log']))
{
    session_destroy();
    header('location:index.php');
}
?>