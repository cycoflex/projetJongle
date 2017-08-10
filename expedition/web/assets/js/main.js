
// FONCTIONS

// fonction qui permet d'afficher un element au click
// qui prend deux parametre le selecteur du bouton et en second l'eleement à afficher 
function afficherElement(ClickButton, element){
	$(ClickButton).click(function(){
		$(element).fadeIn();
	})
	return ;
}

function cacherElement(ClickButton, element){
	$(ClickButton).click(function(){
		$(element).hide();
	})
	return ;
}

// APPELS FONCTIONS

afficherElement('#btn-menu', '#menu');
afficherElement('#btn-connexion', '#login');
cacherElement('#btn-close', '#menu');
cacherElement('#btn-close2', '#login');
