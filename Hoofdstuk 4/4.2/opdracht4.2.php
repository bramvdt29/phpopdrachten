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
                    <a href="../../Hoofdstuk%203/3.1/opdracht3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%203/3.2/opdracht3.2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../../Hoofdstuk%203/3.3/opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <?php
    $courseName = "Nederlands";
    $teacherName = "";

    switch ($courseName)
    {
    case    "PHP":
    $teacherName = "Meneer Saebu";
    break;

    case    "Nederlands":
    $teacherName = "Meneer van de Ende";
    break;

    case    "Engels":
    $teacherName = "Meneer Giessen";
    break;

    case    "SQL":
    $teacherName = "Meneer van de Wetering";
    break;

    case    "Javascript":
    $teacherName = "Meneer Evers";
    break;

    case    "ASP":
    $teacherName = "Meneer van Meer";
    break;

    case    "ComputerTekenen":
    $teacherName = "Meneer van de Berg";
    break;

    case    "Burgerschap":
    $teacherName = "Mevrouw de Ruiter";
    break;

    case    "DigitaleVaardigheden":
    $teacherName = "Mevrouw Pielage";
    break;

    case    "Modelleren":
    $teacherName = "Meneer van Bijnen";
    break;
    }

    echo ("Voor het vak " . $courseName . " heb je de docent: " . $teacherName . ".");
    ?>
</main>
</body>