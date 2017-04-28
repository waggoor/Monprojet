<?php 
if (!empty($_POST['login'])&!empty($_POST['password'])) {

	$login	 =	$_POST['login'];
	$password	=	$_POST['password'];
	$bdd = new PDO('mysql:host=localhost;dbname=2017_projet2_questionnaires;charset=utf8', 'root', '');
		//$db1=$bdd->query("SELECT COUNT(id_etud) as nbp FROM etudiant where id_etud='$num'");
		$db1=$bdd->query("SELECT uid, login, mdp,role FROM users where login='$login'");
		$mb=$db1->fetch();
		if($mb['mdp']==$password){
			session_start();
			$_SESSION['login']=$_POST['login'];
			$_SESSION['uid']=$mb['uid'];

				if ($mb['role']=="user") {
					# code...
				header('location:connexion.php');
				}else {
					# code...
				
					header('location:connexionAdmin.php');
				}

			//header('location:connexion.php');
		}else{
			header('location:login.php');
		}

	# code...
}else {
	header('location:login.php');

}




?>