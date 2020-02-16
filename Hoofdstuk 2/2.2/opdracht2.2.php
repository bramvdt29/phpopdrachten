<?php
/**
 * User: Bram van der Tuuk
 * Date: 15-02-2020
 * Time: 12:06 PM
 * File: index.php
 */
?>
<?php
    $text1 = "Hallo";
    $text2 = "een makkelijke taal";
    $text3 = "toch zo'n makkelijke taal";
    $text4 = "wat is";
    $text5 = "PHP";
    $text6 = "Nooit gedacht dat";
    $text7 = "De installatie is bes ingewikkeld";
    $text8 = "Fijn";
    $text9 = "?";
    $text10 = ".";
    $text11 = ",";
    $text12 = "<br>";
    $text13 = "is";
    $text14 = "Vind je niet";
    $text15 = "toch";
    $space = "&nbsp;";
?>
<style>
    <?php include '../../css/style.css'; ?>
</style>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../2.1/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="opdracht2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <p>
        <?php
            echo $text1; echo $text11; echo $space; echo $text4; echo $space; echo $text5; echo $space; echo $text15; echo $space; echo $text2; echo $text10; echo $text12;
            echo $text7; echo $text10; echo $space; echo $text8; echo $space; echo $text15; echo $text9; echo $text12;
            echo $text6; echo $space; echo $text5; echo $space; echo $text3; echo $space; echo $text13; echo $text10;
        ?>
    </p>
    <br>
    <p>
        <?php
            echo $text1; echo $text11; echo $text12;
            echo $text8; echo $space; echo $text15; echo $space; echo "dat"; echo $space; echo $text5; echo $space; echo "zo'n makkelijke taal"; echo $space; echo $text13; echo $text10; echo $text12;
            echo $text7; echo $text10; echo $space; echo "Vind je niet?";
        ?>
    </p>
</main>
</body>

