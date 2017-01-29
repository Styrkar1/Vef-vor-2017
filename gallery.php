<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Gallery</title>
    
     
</head>

<body>

    <header id="header"><p>Welcome to the gallery</p></header>

    <div id="container">

        <main id="center" class="column">
            <article>
            <h3>The OOP results.</h3>
            <?php 
            
            class game //classin sem leyfir mér að nota object
            {
                public $user; //Public svog að hver sem er getur kallað á þetta
                private $kills; //það er private svog að það er ekki hægt að breyta því utan við classan
                const region = "EU"; //constant breytist alrdey

                public function __construct($kills) //constructor executar alltaf þegar nýtt object er búið til
                {
                    echo "The game results are in <br />";
                    $this->setkills($kills);
                }

                function __set($attribName, $attribValue) //__set getur breytt hvaða private variable sem er
                {
                    echo "__set was used to change " . $attribName . "<br />";
                    $this->$attribName = $attribValue; //setur attribute name úr þessum classa sem attribvalue
                }

                function __get($attribName) //__get getur fengið aðgang úr hvaða variable sem er hvort að það sé private eða ekki
                {
                    echo "__get was used show " . $attribName . "<br />";
                    return $this->$attribName;
                }

                public function setkills($SentKills) //þetta function getur breytt $kills variableanum.
                {
                    $this->kills = $SentKills;
                    //$this er að tala um það sem er inní þessum classa
                }

                public function getkills() //þessi function er til að ná í það sem er í $kills variableanum
                {
                    return $this->kills;
                    //return skilar eitthverju þegar það er kallað á það
                }
            }

            $player = new game(); // þetta object býr til nýtt instance af classanum og runnar öll constructor í honum
            $player->user = "skullman3k"; //þetta setur user variablein
            $playername = $player->user;

            $player->setkills(50); //þetta setur kills með setkills functioninu

            $player->kills = 100; //þetta notar __set functionið til að breyta private variable
            echo $player->kills . "<br />"; //þetta notar __get functionið til að ná í það sem er í private variable

            echo "The player's username is " . $playername . "<br />"; //echoar það sem er í $playername variableanu
            echo "And he has " . $player->getkills() . " Kills <br />"; //notar getkills til að ná í það sem er í $kills variableanu

            echo "and the player's region is " . $player::region . "<br />"; //þetta nær í constant variable og sýnir það

             ?>
            
            </article>                              
        </main>

        <nav id="left" class="column">
        <?php include 'include/navbar.php';?>

            <h3>Useless Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
            </ul>
            <h3>Empty links</h3>
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