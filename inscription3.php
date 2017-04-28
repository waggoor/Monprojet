<html>
<head>
<Title> Inscription </title>
</head>
<body>
<form name="form3" action="inscription3.php" method="post">
<fieldset> <legend> INSCRIPTION </legend> 
<pre>
<b>
qid            <input type="number" name="qid" size="8" required>   
intitule       <input type="text" name="intitule" size="8" placeholder="intitule..." required>
uid            <input type="text" name="uid" size="8"  required>      
</body>
</html>	
<?php 
if (!empty($_POST['qid'])&!empty($_POST['intitule'])&!empty($_POST['uid']))
{
//
	$qid=$_POST['qid'];
    $intitule=$_POST['intitule'];
    $uid=$_POST['uid'];
	$bdd = new PDO('mysql:host=localhost;dbname=2017_projet2_questionnaires;charset=utf8', 'root', '');
	$requete=$bdd->query("INSERT INTO questionnaires VALUES('$qid','$intitule','$uid')");

header('location:login.php');
		
}else {
	header('location:inscription.php');

}




?>	  


