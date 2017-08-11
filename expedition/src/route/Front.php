<?php 
namespace route;
use \traitement\TraitementInscription;
use \traitement\TraitementConnexion;

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
		return $this->construireHtml(["header", "section-accueil", "footer"]);
	}

	function contact(){		
		return $this->construireHtml(["header", "section-contact", "footer"]);		
	}

	function presentation(){		
		return $this->construireHtml(["header", "section-presentation", "footer"]);
	}

	function pedagogie(){				
		return $this->construireHtml(["header", "section-pedagogie", "footer"]);
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


/*
*******************************************************************************
*******************************************************************************
**	Galerie - Photos et vidéos publiques
*******************************************************************************
*******************************************************************************
*/
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
		// Section vérification infos  - SECURITE
		//	...
		//
		//	CETTE SUITE DOIT POUVOIR SE REDUIRE
		$this->request->query->get('nom');
		$this->request->query->get('prenom');
		$this->request->query->get('pseudo');
		$this->request->query->get('email');
		$this->request->query->get('password');
		$this->request->query->get('password_confirm');
		$this->request->query->get('age');
		$this->request->query->get('genre');											
		$inscription = new TraitementInscription($this->request);
		if (!$inscription->isConnected){
			
			// A MODIFIER
			// $this->connexion
			// $inscription->isConnected = true;
			// $inscription->isInscrit = true;
			// $inscription->urlRedirection = "profil/pseudo";

			// RENVOI VERS LES PAGES IDOINES
			// global $app;
			// $app->redirect($this->urlRedirection);
		
			return "Vous êtes bien inscrit";
		}
		else {

		// MESSAGE D'ERREUR ET LIEN VERS L'ACCUEIL

		return 'Déjà inscrit !';

		}
		
	}

/*
*******************************************************************************
*******************************************************************************
**	Connexion d'un utilisateur
*******************************************************************************
*******************************************************************************
*/
	function connexion(){
		$this->request->query->get('email');
		$this->request->query->get('password');
		$connexion = new TraitementConnexion($this->request);
		if (!$connexion->isConnected){
			
			// A MODIFIER
			// $this->connexion
			// $inscription->isConnected = true;
			// $inscription->isInscrit = true;
			// $inscription->urlRedirection = "";	// page actuelle

			// RENVOI VERS LES PAGES IDOINES
			// global $app;
			// $app->redirect($this->urlRedirection);
		
			return "Vous êtes bien inscrit";
			return 'Connexion réussie';
		}
		else{ 
			// MESSAGE D'ERREUR ET LIEN VERS L'ACCUEIL

			return 'erreur de connexion';
		}
	}

}


