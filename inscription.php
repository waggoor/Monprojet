<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Document sans titre</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<section>
<form name="form1" method="post" action="serverInscription.php">
<table>
<tr><td>Nom :</td> <td><input type=" text" name="nom"></td></tr><br>
<tr><td>Prenom :</td><td><input type="text" name="prenom"></td></tr><br>
<tr><td>login</td> <td><input type=" text" name="login"></td></tr><br>
<tr><td>password</td><td><input type="password" name="password"></td></tr><br>
<tr><td>Cochez si vous etes admin</td><td><input type="checkbox" name="role"></td></tr><br>

<tr><td></td><td><input type="submit" name="inscription"></td></tr>
  
</table>

</form>
<div id="div"><a href="login.php"/> precedent</a></div>
</section>
</body>
</html>