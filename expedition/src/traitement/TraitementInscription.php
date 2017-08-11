<?php 
namespace traitement;
class TraitementInscription extends TraitementCommun{

	//
	//	Récupération des infos du formulaire dès le constructeur
	//
	function __construct($request){
		$this->request = $request;
		$this->inscrire();
	}

	function inscrire(){			
		$this
		->traiterForm("Inscription")			
		->lireEmail("email");
		if (!$this->emailExists())
			$this
			->lireChamps("nom")
			->lireChamps("prenom")
			->lireChamps("pseudo")			
			->lirePassword("password", "password_crypt")				
			->ajouterNameValeur("date_inscription", date("Y-m-d H:i:s"))		
			->ajouterNameValeur("level", 1)		
			->envoyer("user", "email")
			->setMessage("Inscription réussie. Bienvenue !");
		else
			$this->setMessage("Cet email existe déjà.");
	}

}