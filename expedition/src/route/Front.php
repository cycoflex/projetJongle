<?php 
namespace route;

class Front extends RouteParent{
/*
*******************************************************************************
*******************************************************************************
**	EVENEMENTS
*******************************************************************************
*******************************************************************************
*/
	function evenements($numPage = 1){	
		$this->infosDetail["numPage"] = $numPage;
		return $this->construireHtml(["header_min", "section-evenements", "footer"]);
	}
	// Route dynamique avec $url fourni par Silex
	function detailEvenement($url){	
		$this->infosDetail["url"] = $url;
		return $this->construireHtml(["header_min", "section-detailEvenement", "footer"]);
	}

/*
*******************************************************************************
*******************************************************************************
**	PAGES STATIQUES
*******************************************************************************
*******************************************************************************
*/

	function accueil(){			
		return $this->construireHtml(["header_min", "section-accueil", "footer"]);

	function accueil(){	
		//	traitement du formulaire

		return $this->construireHtml(["header_min", "section-accueil", "section-accueil_2", "section-accueil_3", "section-accueil_4", "footer"]);
	}

	function contact(){		
		return $this->construireHtml(["header", "section-contact", "footer"]);		
	}

	function presentation(){		
		return $this->construireHtml(["header", "section-presentation", "footer"]);
	}

<<<<<<< HEAD
	function pedagogie(){				
		return $this->construireHtml(["header_min", "section-pedagogie", "footer"]);
=======
	function pedagogie(){		
<<<<<<< HEAD
		return $this->construireHtml(["header_min", "section-pedagogie", "footer"]);
>>>>>>> b22cc4228a7d3af9c1c688b43e926489c3e79a1f
=======
		return $this->construireHtml(["header", "section-pedagogie", "footer"]);
>>>>>>> 3995efb4bec06acdfb9a7a516dfa180eb141eb65
	}

/*
*******************************************************************************
*******************************************************************************
**	Partie blog et articles du blog
*******************************************************************************
*******************************************************************************
*/
	function blog($numPage = 1){	
		$this->infosDetail["numPage"] = $numPage;
		return $this->construireHtml(["header", "section-blog", "footer"]);
	}

	function article($id){		
		$this->infosDetail["id"] = $id;			
		return $this->construireHtml(["header_min", "section-article", "footer"]);
	}

	//
	//	Photos publiques
	//
	function galerie(){		
		return $this->construireHtml(["header_min", "section-galerie", "footer"]);
	}

/*
*******************************************************************************
*******************************************************************************
**	Ajout d'un utilisateur
*******************************************************************************
*******************************************************************************
*/
	function inscription(){		
		return $this->construireHtml(["header_min", "section-inscription", "footer"]);
	}

/*
*******************************************************************************
**	Connexion d'un utilisateur
*******************************************************************************
*/
	function connexion(){
		if ($this->urlRedirection == "")
			return $this->construireHtml(["header_min", "section-connexion", "footer"]);	
		else{
			global $app;
            return $app->redirect($this->urlRedirection);
		}
	}

}


