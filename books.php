<?php
require("classes/autoloader.php")
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>BOOK</title>
    
     
</head>

<body>

    <header id="header"><p>Knowledge is power</p></header>

    <div id="container">

        <main id="center" class="column">
        <article>
        <?php
            $model = new Model();
            //It is important that the controller and the view share the model
            $controller = new Controller($model);
            $view = new View($model);
            if (isset($_GET['action'])) $controller->{$_GET['action']}();
            echo $view->output(); 
        ?>


        </article>                     
        </main>

        <nav id="left" class="column">
        

            <h3>Useless Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="you fool">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
            </ul>
            <h3> Empty links</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
            </ul>

        </nav>

        <div id="right" class="column">
            <h3>;;OO</h3>
        </div>

    </div>

    <div id="footer-wrapper">
        <footer id="footer">
        <p><?php echo date("Y"); ?> &copy; The Main man my Emporor</p>
        </footer>
    </div>

</body>

</html>