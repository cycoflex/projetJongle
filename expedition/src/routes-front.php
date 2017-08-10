<?php 
namespace route;

$app->get('/evenements', "\\route\\Front::evenements")
->bind('evenements')
;
// ROUTE POUR LA PAGINATION
$app->get('/evenements/page/{numPage}', "\\route\\Front::evenements")
->bind('evenements/page')
;

$app->get('/evenement/{url}', "\\route\\Front::detailEvenement")
->bind('detailEvenement')
;

// ROUTE POUR LA PAGE D'ACCUEIL
$app->get('/', "\\route\\Front::accueil")
->bind('accueil')
;

// ROUTE POUR LA PAGE DE CONTACT
$app->get('/contact',"\\route\\Front::contact")
->bind('contact')
;

// ROUTE POUR LA PAGE DE PRESENTATION (membres et projet)
$app->get('/presentation',"\\route\\Front::presentation")
->bind('presentation')
;

// ROUTE POUR LA PAGE DE METHODOLOGIE
$app->get('/pedagogie',"\\route\\Front::pedagogie")
->bind('pedagogie')
;

// ROUTE POUR LA PAGE DE GALERIE
$app->get('/galerie',"\\route\\Front::galerie")
->bind('galerie')
;


// ROUTE POUR LA PAGE DU BLOG
//	On route également pour les éventuels erreurs ds la barre d'adresse
$app->get('/blog',"\\route\\Front::blog")
->bind('blog')
;
// Route pour la pagination du blog
$app->get('/blog/page/{numPage}', "\\route\\Front::blog")
->bind('blog/page')
;


// Routes vers les 
$app->get('/articles', "\\route\\Front::blog")
->bind('articles')
;
$app->get('/article', "\\route\\Front::blog")
->bind('article')
;

// ROUTE POUR LA PAGE D'UN ARTICLE
$app->get('/article/{id}', "\\route\\Front::article")
->bind('article')
;

// ROUTE POUR LA PAGE D'INSCRIPTION D'UN UTILISATEUR
// (MATCH --> POUR UTILISER POST ET GET)
$app->match('/inscription', "\\route\\Front::inscription")
->bind('inscription')
;

// ROUTE POUR LA PAGE DE CONNEXION D'UN UTILISATEUR
$app->match('/connexion', "\\route\\Front::connexion")
->bind('connexion')
;
