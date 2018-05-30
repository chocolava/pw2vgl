<?php 
session_start(); 

$_SESSION[‘word’]=$_GET['word'];

echo $_SESSION[‘word’];
 ?>