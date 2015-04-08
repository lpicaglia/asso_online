<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Asso-Online</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </head>

    <body>

        <header>
            <?php require_once("view/v_topbar.php"); ?>
        </header>

        <div class="container">
            <div class="row">
                
                <?php
                foreach($views as $view){
                    require_once("view/v_".$view.".php");
                }
                ?>

            </div>
        </div>

        <footer class="footer">
            <?php require_once("view/v_footer.php"); ?>
        </footer>       
    </body>
</html>
