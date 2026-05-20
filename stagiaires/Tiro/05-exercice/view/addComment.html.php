<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    nav a{

    }

    h1 {
        text-align: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    input[type=text], input[type=email] {
        width: 300px;
        height: 30px;
        margin: 5px;
    }

    textarea {
        width: 305px;
        height: 100px;
    }

    label {
        display: block;
        margin: 5px;
    }
</style>
<body>

    <header>
        <?php
            include ROOT_PROJECT."/view/inc/menu.php";

        ?>
    </header>

    <h1>Ajout de Commentaire</h1>

    <main class="container">

        <form action="">

            <div>
                <label for="name" name="name">Nom prénom</label>
                <input type="text">
            </div>

            <div>
                <label for="email" name="email">Email</label>
                <input type="email">
            </div>

            <div>
                <label for="comm" name="comm">Commentaire</label>
                <textarea name="comm" id="commm"></textarea>
            </div>

            <button type="submit">Envoyer</button>
        
        </form>
    </main>

    


</body>
</html>