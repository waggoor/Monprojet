<?php 
if (!empty($_POST['profession'])&!empty($_POST['uid'])&!empty($_POST['nom'])&!empty($_POST['type'])&!empty($_POST['ordre']))
{
//
    $profession=$_POST['profession'];
    $uid=$_POST['uid'];
    $nom=$_POST['nom'];
    $type=$_POST['type'];
    $ordre=$_POST['ordre'];
	$bdd = new PDO('mysql:host=localhost;dbname=2017_projet2_questionnaires;charset=utf8', 'root', '');

		$requete=$bdd->query("INSERT INTO questionnaires VALUES(null,'$profession','$uid')");

    $reqs=$bdd->query(" SELECT qid FROM questionnaires ORDER BY qid DESC LIMIT 1 ");
   $mb=$reqs->fetch();
   $valqid=$mb['qid'];



	$requete=$bdd->query("INSERT INTO champs VALUES(null,'$valqid','$nom','$type','$ordre') ");

header('location:connexionAdmin.php');
		
}else {
	header('location:inscription.php');

}




?>	  