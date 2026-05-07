<?php
# Router, qui agit suivant les actions de l'utilisateur

# Appel de dépendances
require ROOT_PROJECT."/model/LivreModel.php";

// si l'utilisateur a envoyé le formulaire // noms valides
if(isset($_POST['email'],$_POST['title'],$_POST['text'])){
<<<<<<< HEAD
    echo insertLivre($db, $_POST);
=======
    // on reçoit true en cas de réussite, false en cas d'échec
    $insert = insertLivre($db, $_POST);
>>>>>>> 86d1a66f167de1daa8f2284bfc46f1c9ca5ad789
}

// on prend les messages
$livres = readLivres();

// Appel de la vue
include ROOT_PROJECT."/view/homepage.view.php";