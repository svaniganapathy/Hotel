<?php
session_start();
$session['username']=$username;
header('location:nav.html');
?>