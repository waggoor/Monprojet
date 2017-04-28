<?php 
if (!empty($_POST['nom'])&!empty($_POST['prenom'])&!empty($_POST['login'])&!empty($_POST['password']))
{
//
	$nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $role=$_POST['role'];
    if(!empty($_POST['role'])){
    	$role="admin";
    }else{
    	$role="user";
    }
	$login	 =	$_POST['login'];
	$password	=	$_POST['password'];
	$bdd = new PDO('mysql:host=localhost;dbname=2017_projet2_questionnaires;charset=utf8', 'root', '');
	$requete=$bdd->query("INSERT INTO users VALUES(null,'$nom','$prenom','$login','$password','$role')");
	

header('location:login.php');
		
}else {
	header('location:inscription.php');

}




?>