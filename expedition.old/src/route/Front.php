<?php 
namespace route;

class Front extends RouteParent{
/*
*******************************************************************************
*******************************************************************************
**	Exemple
*******************************************************************************
*******************************************************************************
*/
	function evenements($numPage = 1){	
		$this->infosDetail["numPage"] = $numPage;
		return $this->construireHtml(["header", "section-evenements", "footer"]);
	}
	// Route dynamique avec $url fourni par Silex
	function detailEvenement($url){	
		$this->infosDetail["url"] = $url;
		return $this->construireHtml(["header", "section-detailEvenement", "footer"]);
	}

/*
*******************************************************************************
*******************************************************************************
**	PAGES STATIQUES
*******************************************************************************
*******************************************************************************
*/
	function accueil(){	
		//	traitement du formulaire

		return $this->construireHtml(["header", "section-accueil", "footer"]);
	}

	function contact(){		
		return $this->construireHtml(["header", "section-contact", "footer"]);		
	}

	function presentation(){		
		return $this->construireHtml(["header", "section-presentation", "footer"]);
	}

	function methodologie(){		
		return $this->construireHtml(["header", "section-methodologie", "footer"]);
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
		return $this->construireHtml(["header", "section-article", "footer"]);
	}

	//
	//	Photos publiques
	//
	function galerie(){		
		return $this->construireHtml(["header", "section-galerie", "footer"]);
	}

/*
*******************************************************************************
*******************************************************************************
**	Ajout d'un utilisateur
*******************************************************************************
*******************************************************************************
*/
	function inscription(){		
		return $this->construireHtml(["header", "section-inscription", "footer"]);
	}

/*
*******************************************************************************
**	Connexion d'un utilisateur
*******************************************************************************
*/
	function connexion(){
		if ($this->urlRedirection == "")
			return $this->construireHtml(["header", "section-connexion", "footer"]);	
		else{
			global $app;
            return $app->redirect($this->urlRedirection);
		}
	}

}


