<?php
session_start();
?>
 <!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="connexionuser.css">
</head>

<body>
<header>  <table><tr><td> user</td><td><?php if(isset($_SESSION['login'])){ echo  $_SESSION['login'];}?></td><td>
<a href="logout.php">deconnection</a></td></tr></table>  </header>
<main> user diame</main>
</body>
</html>