<html>
<?php
include('menue.php');
?>
<head charset="utf-8"></head>
<!--<link rel="stylesheet" type="text/css" href="administrateur.css">-->
<link rel="stylesheet" type="text/css" href="acceuil1.css">
<script  type="text/javascript" src="recherche.js"></script>

<main>
	<aside>
		<article id="recherche">
			<!--<div id="d1" > Stage par ville</div>-->
			<form id="form1">
				<div id="d1" ></div><br>
				<label>Domaine</label>
				<input id="domain"type="text" name="">
			<!--	<input id="ville"type="text" name="">-->
				<label>Ville</label>
				<input id="ville" list="browsersn" type="text"  name="ville" required placeholder="Rouen" title=" veillez entrer la ville" autocomplete="on">
					 <datalist id="browsersa">
    						<option value="Rouen">
 						    <option value="Paris">
                            <option value="Saint">
                            <option value="Lyon">
                            <option value="Havre">
                            <option value="Antony">
                     </datalist>
                <label>Année </label>
                <input type="date" id="date">
				<input id="rech"type="button" name="" value="Recherche" onclick='rechercher()'>
			</form>
		
		</article>
	</aside>
	<section id="corp">
		<!--<article id="recherche">
			<div id="d1" > Stage par ville</div>
			<form id="form1">
				<input id="domain"type="text" name="">
			<!-	<input id="ville"type="text" name="">-->
			<!--	<input id="ville" list="browsersn" type="text"  name="ville" required placeholder="Rouen" title=" veillez entrer la ville" autocomplete="on">
					 <datalist id="browsersa">
    						<option value="Rouen">
 						    <option value="Paris">
                            <option value="Saint">
                            <option value="Lyon">
                            <option value="Havre">
                            <option value="Antony">
                     </datalist>

				<input id="rech"type="button" name="" value="Recherche" onclick='rechercher()'>
			</form>
		
		</article> -->

		<article id="resultat">
			je siiso
		</article>
	</section>
</main>

</html>