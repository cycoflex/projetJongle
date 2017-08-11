<h2>Blog</h2>

<nav>	
	<ul>
<?php 
	$nbArticles = 3;
	$indexDepart = $nbArticles * ($this->lireValeur("numPage") - 1);		
	$nbResultats = $app['db']->fetchColumn("SELECT COUNT(*) FROM article", []);		
	for($i=1 ; $i <= $nbArticles ; $i++) {		
		$urlPage = $app["url_generator"]->generate("blog/page", ["numPage" => $i]);
		echo "<li><a href=$urlPage>page $i</a></li>";
	}
?>
	</ul>
</nav>

<section class="blog">	

<?php 
	$objStmnt = $app['db']->executeQuery("SELECT * FROM ARTICLE LIMIT $indexDepart, $nbArticles", []);
	while($tabLigne = $objStmnt->fetch()){
		extract($tabLigne);
		$routeUrl = $app["url_generator"]->generate("article", ["id" => $id]);
		echo
<<<CODEHTML
	<article>
		<h2>$titre</h2>		
		<p class="resume">$resume</p>
		<a href="$routeUrl">lien</a>
	</article>
CODEHTML;

}
?>
</section>

