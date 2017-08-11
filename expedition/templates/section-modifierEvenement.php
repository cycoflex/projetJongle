<section>
<?php 	
	extract($this->infosDetail);
	$objStmnt = $app['db']->executeQuery("SELECT * FROM EVENEMENTS WHERE url = '$url'");
	while($tabLigne = $objStmnt->fetch()){
		extract($tabLigne);
		echo
<<<CODEHTML
	<article>
		<form method="GET">
			<label>Titre: </label>
			<input type="text" name="titre">

			<label>Date de début: </label>
			<input type="date" name="dateDebut">
			
			<label>Date de fin: </label>
			<input type="date" name="dateFin">
			
			<label>Description: </label>
			<textarea name="description" placeholder="Entrez le descriptif..."></textarea>
			
			<button>Modifier</button>
			<input type="hidden" name="traitement" value="creerEvenement">
		</form>
	</article>
CODEHTML;

	}
 ?>
 </section>