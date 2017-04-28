<?php
session_start();
?>
 <!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="connexionadmin.css">
</head>

<body>
<header>  <table><tr><td> admin</td><td><?php if(isset($_SESSION['login'])){ echo  $_SESSION['login'];}?></td><td>
<a href="logout.php">deconnection</a></td></tr></table>  </header>
<main> user diame
<br>
<fieldset><legend>  </legend> 
<pre>
<b>
<form action="serverquestionnaire.php" method="post">
profession     <input type="text" name="profession" size="15" placeholder="profession..." required>
uid            <input type="number" name="uid" size="8" value="<?php echo $_SESSION['uid'];?>" >

nom            <input type="text" name="nom" size="15" placeholder="nom..." required>
type           <input type="text" name="type" size="15" placeholder="type..." required>
ordre          <input type="text" name="ordre" size="15" placeholder="ordre..." required> 
envoyer        <input type="submit"  >   
</form>
</b>
</pre>
</fieldset>
</main>
</body>
</html>