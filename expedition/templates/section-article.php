<section>
<?php 	
	extract($this->infosDetail);

	$requeteMediaArticle = "SELECT COUNT(*) 
				FROM MEDIA_ARTICLE
				WHERE MEDIA_ARTICLE.ID_ARTICLE = $id";
	$res = intval($app['db']->executeQuery($requeteMediaArticle)->fetch()["COUNT(*)"]);
	
	$requeteArticle = "SELECT * 
				FROM ARTICLE WHERE ARTICLE.id = $id";
	$objStmnt = $app['db']->executeQuery($requeteArticle);
	

	while($tabLigne = $objStmnt->fetch()){
		extract($tabLigne);
		$contenu = str_replace('src="', 'src="'.$urlRoot, $contenu);				
		
		echo
<<<CODEHTML
	<article class="article">
		<h2>$titre</h2>
		<p class="resume">Description: $resume<p>
		<section class="contenu">
		$contenu
		</section>
	</article>
CODEHTML;

	}
 ?>
 </section>
