<section id="section_evenement_1">

<h1>Evenements</h1>

<?php 
	$nbEvenements = 3;
	$indexDepart = $nbEvenements * ($this->lireValeur("numPage") - 1);		
	$nbResultats = $app['db']->fetchColumn("SELECT COUNT(*) FROM evenement", []);		
	if ($nbResultats>0){
?>
	<div id="container" class="contain">';
<?php 
		$reqEvenements = "SELECT * FROM evenement LIMIT $indexDepart, $nbEvenements ";
		$objStmnt = $app['db']->executeQuery($reqEvenements, []);
		while($tabLigne = $objStmnt->fetch()){
			extract($tabLigne);
			$routeUrl = $app["url_generator"]->generate("detailEvenement", ["url"=>$url]);
			echo 
<<<CODEHTML
<article>
	<h2>$titre</h2>		
	<a href=$routeUrl>lien</a>
</article>
CODEHTML;

		}
	echo '</div>';	
?>

<nav>	
	<ul>
<?php 	
		for($i=1 ; $i <= $nbEvenements ; $i++) {		
			$urlPage = $app["url_generator"]->generate("evenements/page", ["numPage" => $i]);
			echo "<li><a href=$urlPage>page $i</a></li>";
		}
?>
	</ul>
</nav>

<?php 
	}
	else
		echo "<p>Pas d'événement prévu pour l'instant</p>";
 ?>	
</section>
