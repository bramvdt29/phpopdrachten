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
                    <a href="../3.1/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="opdracht3.2.php">Opdracht 3.2</a>
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
    $trafficLightColor = "Groen";
    $ambulanceComing = false;

    if ($trafficLightColor == "Rood")
        {
            $driveOn = false;
        }
    elseif($trafficLightColor == "Oranje")
    {
        $driveOn = false;
    }
    elseif($ambulanceComing == true)
    {
        $driveOn = false;
    }

    else
        {
            $driveOn = true;
        }

    if ($driveOn = false)
    {
        echo "<p id='stop'>U moet stoppen</p>";
    }

    else
        {
            echo "<p id='door'>U mag doorrijden</p>";
        }

    ?>
    <br>
    <?php
        $countryName = "Nederland";
        $currentAge = 17;


    echo("<p>Je woont in ". $countryName . " en je bent " . $currentAge . " jaar oud.</p>");

    if($countryName == "Nederland" && $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Nederland" && $currentAge < 18)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }

    if($countryName == "België" && $currentAge >= 16 && $currentAge <= 18)
    {
        echo("<p>Je mag hier zwakke alcohol drinken.</p>");
    }
    else if($countryName == "België" && $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "België" && $currentAge < 16)
    {
        echo("<p>hier mag je geen alcohol drinken.</p>");
    }

    if($countryName == "Bulgarije" && $currentAge >= 18)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Cyprus" && $currentAge < 17)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }

    if($countryName == "Cyprus" && $currentAge >= 17)
    {
        echo("<p>Je mag hier sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Cyprus" && $currentAge < 17)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }

    if($countryName == "Zweden" && $currentAge >= 18 && $currentAge <= 19)
    {
        echo("<p>Je mag hier zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Zweden" && $currentAge >= 20)
    {
        echo("<p>Hier mag je sterke en zwakke alcohol drinken.</p>");
    }
    else if($countryName == "Zweden" && $currentAge < 18)
    {
        echo("<p>Hier mag je geen alcohol drinken.</p>");
    }


    ?>

</main>
</body>