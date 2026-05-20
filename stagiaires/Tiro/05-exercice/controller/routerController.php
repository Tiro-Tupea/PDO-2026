<?php
// 05-exercice/controller/routerController.php

# Importer le fichier model qui contient nos fonctions de la table commentaire
require ROOT_PROJECT."/model/CommentaireModel.php";

# Création de notre connexion PDO (avec try catch)

# suivant les actions utilisateur, appelez les vues.

// appel de la vue( la home page )
if(!isset($_GET['pg'])){

    // si il n'y a rien on charge la home page par defaut 
    // view/homepage.html.php
    include ROOT_PROJECT."/view/homepage.html.php";

    //si non si
    
}else if(in_array($_GET['pg'], ARRAY_VALID_PAGES)){
    
    // on récupère les autres via la variable 'pg'
    include ROOT_PROJECT."/view/".$_GET['pg'].".html.php";

    // si non
}else{

    // on charge une page d'erreur
    // include ROOT_PATH."/view/error404.php";
    var_dump('erreur');
}

