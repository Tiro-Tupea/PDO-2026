<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<style>

    .container {
        display: flex;
        gap: 20px;
        justify-content: center;
        align-items: center;
    }
    .block img {
        width: 300px;
        height: 200px;
        border-radius: 10px;
    }

    .txt {
        margin: 40px;
    }
</style>
<body>
    <header>
        <?php

        // inclu la nav bar 
        include ROOT_PROJECT."/view/inc/menu.php";

        ?>
    </header>
    <h1>Hello Tiro</h1>
    
    <main>

        <section class="container">

            <div class="block">
                <img src="../img/pexels-devansh-rajput-2160987549-37301162.jpg" alt="">
            </div>

            <div class="block">
                <img src="../img/pexels-raulling-35932144.jpg" alt="">
            </div>

            <div class="block">
                <img src="../img/pexels-steve-1269968.jpg" alt="">
            </div>
        </section>

        <section class="txt">

            <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. A doloremque explicabo animi quis, commodi, quibusdam, amet sapiente qui blanditiis consequuntur vero! Sint fuga sit natus veritatis incidunt ratione nam possimus.</span><span>Perspiciatis porro optio distinctio tempore, maiores pariatur repudiandae reprehenderit consequuntur libero sit aliquid totam et voluptate explicabo voluptatem cupiditate assumenda ipsam earum maxime molestiae eum aliquam. Perferendis nulla aspernatur autem?</span><span>Architecto in dicta voluptas accusantium consectetur eveniet magnam, cum libero laborum ullam sequi facere eaque quisquam delectus fugiat, adipisci a sed labore dolorem? Impedit eaque eveniet quibusdam pariatur repellendus! Nobis?</span><span>Explicabo debitis, culpa cupiditate hic molestiae eos sunt consectetur, magni ratione voluptate at quis deleniti facere ut beatae architecto? Vel voluptatibus voluptates adipisci impedit nisi asperiores hic aliquam, harum quod?</span><span>Ab dolorum labore, voluptatum libero sequi, quasi magni ducimus saepe eos corrupti laborum culpa consequuntur quo dignissimos, optio obcaecati sed maiores porro dolore nemo eveniet pariatur. Commodi laudantium dicta doloremque.</span></p>

        </section>
       
        
    </main>
</body>
</html>