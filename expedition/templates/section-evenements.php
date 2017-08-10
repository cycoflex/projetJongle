<section>

<nav>	
	<ul>
<?php 
	$nbEvenements = 3;
	$indexDepart = $nbEvenements * ($this->lireValeur("numPage") - 1);		
	$nbResultats = $app['db']->fetchColumn("SELECT COUNT(*) FROM evenements", []);	
	for($i=1 ; $i <= $nbEvenements ; $i++) {		
		$urlPage = $app["url_generator"]->generate("evenements/page", ["numPage" => $i]);
		echo "<li><a href=$urlPage>page $i</a></li>";
	}
?>
	</ul>
</nav>
<?php 
	$reqEvenements = "SELECT * FROM evenements LIMIT $indexDepart, $nbEvenements ";
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
?>
	
</section>
