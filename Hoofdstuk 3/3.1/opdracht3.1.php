<?php
/**
 * User: Bram van der Tuuk
 * Date: 15-02-2020
 * Time: 12:06 PM
 * File: index.php
 */
?>
<!doctype html>
<head>
    <title></title>
    <style>
        <?php include '../../css/style.css'; ?>
    </style>
</head>

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
                    <a href="../../Hoofdstuk%202/2.1/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%202/2.2/opdracht2.2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../3.2/opdracht3.2.php">Opdracht 3.3</a>
                </li>
                <li>
                    <a href="../3.3/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $elf = "<u>Elfstedentocht</u>";
    $alve = "<u>Alvestêdetocht</u>";
    $km = "<u>200</u>";
    $schaats = "<u>schaatstocht</u>";
    $natuur = "<u>natuurijs</u>";
    $kvdfes = "<u>Koninklijke Vereniging De Friesche Elf Steden</u>";
    $leeuw = "<u>Leeuwarden</u>";
    $fries = "<u>Friesland</u>";
    $num = "<u>15</u>";
    $jaar = "<u>1909</u>";
    $verhaal = "De $elf (Fries: $alve) is een $km
                kilometer lange $schaats over $natuur die wordt
                georganiseerd door de $kvdfes. $leeuw, de hoofdstad van $fries, is start- en
                aankomstplaats. De $elf is inmiddels $num maal
                verreden en werd voor het eerst in $jaar gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal</p>");
    echo ("<br>");

    $verhaal2 = "De " . $elf .  " (Fries: " . $alve . ") is een " . $km . " kilometer lange " . $schaats . " over " . $natuur . " die wordt
                georganiseerd door de " . $kvdfes .". " . $leeuw . ",  de hoofdstad van " . $fries . ",  is start- en
                aankomstplaats. De " . $elf . " is inmiddels " . $num . " maal
                verreden en werd voor het eerst in " . $jaar . " gereden en wordt
                maximaal 1 keer per winter gehouden.";
    echo ("<p>$verhaal2</p>");
    ?>
</main>
</body>
