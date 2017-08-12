
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

function afficherCacherElement(ClickButton, element1,element2){
	$(ClickButton).click(function(){
		$(element1).show();
		$(element2).hide();
	})
	return ;
}
var $window = $(window);

$window.scroll(function () {
    if ($window.scrollTop() > 200){
       $( "#figure-1" ).animate({ "top": "11rem" }, 3500 )
       $( "#article-1" ).animate({ "top": "42rem" }, 3500 )
    }
    if ($window.scrollTop() > 900){
       $( "#figure-2" ).animate({ "top": "7rem" }, 3500 )
       $( "#article-2" ).animate({ "top": "30rem" }, 3500 )
    }
    if ($window.scrollTop() > 1600){
       $( "#figure-3" ).animate({ "top": "10rem" }, 3000 )
       $( "#article-3" ).animate({ "top": "31rem" }, 3000 )
    }
});

// APPELS FONCTIONS

afficherElement('#btn-menu', '#menu');
afficherElement('#btn-connexion', '#login');
afficherCacherElement('#btn-inscription', '#inscription','#login');
cacherElement('#btn-close', '#menu');
cacherElement('#btn-close2', '#login');
cacherElement('#btn-close3', '#inscription');

