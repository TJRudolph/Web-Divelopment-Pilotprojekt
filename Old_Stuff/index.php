<!DOCTYPE html>
<html> 

    <head>

        <meta charset="utf-8">
        <title>Meine erste Seite</title>
        <link href="css/design.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap">

    </head>


    <body>

        <section class="top">
            <nav>
                <a href="index.php?page=shop">Shop</a>
                <a href="index.php?page=kontakt">Kontakt</a>
            </nav>
        </section>

    <?php // Das ist der Beginn eines PHP Codeblocks
            switch ($_GET['page']) {
                case "shop":
                    include_once ("shop.html");
                    break;
                case "kontakt":
                    include_once ("kontakt.html");
                    break;
            }
    ?>

    </body>


</html>