<?php session_start(); 
if (isset($_SESSION['username'])) { header("Location: dashboard.php"); } ?> 
<form method="POST" action="proses_login.php"> Username: 
    <input type="text" name="username"> Password: 
    <input type="password" name="password"> 
    <input type="submit" value="Login"> 
</form>