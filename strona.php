<?php
$serwer = "localhost";
$user = "patyk_portfolio";
$pass = "123";
$baza = "patyk_portfolio";
$c = mysqli_connect($serwer, $user, $pass, $baza);

@$id = $_GET["id"];
@$tekst = $_POST["tekst"];
@$zdjecie = $_POST["zdjecie"];

@$id_p = $_GET["id"];
@$tekst_p = $_POST["tekst"];
@$zdjecie_p = $_POST["zdjecie"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Portfolio</title>
</head>
<body>
    <div class="main">
    <h1>Portfolio</h1>
    </div>
    <div class="section_one">
    <?php
        echo "<div class='section_one_text'>";
            echo "<h1>O mnie</h1>";
            $q = mysqli_query($c, "SELECT * FROM `omnie`;");
            while($h = mysqli_fetch_array($q)){
                echo "<p>" . $h["tekst"] . "</p>";      
                echo "</div>";       
                echo "<div class='section_one_photo'>";
                echo "<img src=\"" . $h["zdjecie"] . "\";>";
        echo "</div>";
            }
        ?>
    </div>
    <div class="section_two">
    <?php
    echo "<div class='section_two_text'>";
        echo "<h1>Projekty</h1>";
         $k = mysqli_query($c, "SELECT * FROM `projekty`;");
            while($g = mysqli_fetch_array($k)){
            echo "<p>" . $g["tekst_p"] . "</p>";
            echo "</div>";
            echo "<div class='section_two_photo'>";
            echo "<img src=\"" . $g["zdjecie_p"] . "\";>";
        echo "</div>";
            }
    ?>
    </div>
    <div class="section_three">
        <p>Kontakt</p>
    </div>
    <div class="section_four">
        <p>Moje umiejętności</p>
        <div class="section_four_progress">
        <label for="file">HTML:</label>
        <progress id="file" max="100" value="70"></progress><h2>70%</h2>
        </div>
        <div class="section_four_progress">
        <label for="file">CSS:</label>
        <progress id="file" max="100" value="50"></progress><h2>50%</h2>
    </div>
    </div>
</body>
</html>