<section>
<?php 	
	extract($this->infosDetail);
	$objStmnt = $app['db']->executeQuery("SELECT * FROM EVENEMENTS WHERE url = '$url'");
	while($tabLigne = $objStmnt->fetch()){
		extract($tabLigne);
		echo
<<<CODEHTML
	<article>
		<h2>$titre</h2>
		<h5>$dateDebut</h5>
		<h5>$dateFin</h5>
		<strong>Prix: $prix €</strong>
		<p>Description: $description<p>
	</article>
CODEHTML;

	}
 ?>
 </section>