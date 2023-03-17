<?php
    if(isset($_GET['sivu']) == FALSE && $_GET['sivu']!="../src/view/etusivu.php"){
        $sivu = "../src/view/etusivu.php";
        include($sivu);
    }
    
    if(isset($_GET['sivu']) && $_GET['sivu']!=""){
       $sivu = "";
        switch ($_GET['sivu']) {
            case 'meista':
                $sivu = "../src/view/meista.php";
                break;

            case 'yhteystiedot':
                $sivu = "../src/view/yhteystiedot.php";
                break;

            case 'palvelut':
                $sivu = "../src/view/palvelut.php";
                break;

            case 'hinnasto':
                $sivu = "../src/view/hinnasto.php";
                break;
            
            case 'etusivu':
                $sivu = "../src/view/etusivu.php";
                break;

            default:
                header("HTTP/1.0 404 Not Found"); 
                break;
        }
        include($sivu);
    }
?>
