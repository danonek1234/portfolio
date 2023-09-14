<?php
$serwer = "localhost";
$user = "root";
$pass = "";
$baza = "portfolio";
$c = mysqli_connect($serwer, $user, $pass, $baza);

@$id = $_GET["id"];
@$tekst = $_POST["tekst"];
@$zdjecie = $_POST["zdjecie"];
@$id_p = $_GET["id"];
@$tekst_p = $_POST["tekst"];
@$zdjecie_p = $_POST["zdjecie"];
@$id_u = $_GET["id_u"];
@$value = $_GET["value"];
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
        <form method="POST">
        <input id="email" type="email" name="email" placeholder="email">
        <textarea id="msg" name="msg" placeholder="Wiadomość..." rows="8" required></textarea>
        <input id="submit" type="submit" value="przeslij">
        </form> 
    </div>
    <div class="section_four">
        <p>Moje umiejętności</p>
        <div class="section_four_progress">
        <?php
        $f = mysqli_query($c, "SELECT * FROM `umiejetnosci`;");
            while($o = mysqli_fetch_array($f)){
        echo "<label for='file'> " . $o["nazwa_u"] . "</label>";
        echo "<progress id='file' max='100' value='" . $o["value"] . "'></progress><h2>" . $o["value"] . "</h2>";
            }
    ?>
    </div>
    <div class="section_five">
        <h2>Panel Admina</h2>
        <form method="POST">
            <input id='haslo' name='haslo' type='password' placeholder='hasło admina'>
            <input id='submit' type='submit' value='Zaloguj'>
            <?php
            if (isset($_POST['haslo'])) {
                $password = $_POST['haslo'];
                if ($password === '6969') {
                    header('Location: admin.php');
                } else {
                    echo "<p>" . 'Podane hasło jest nieprawidłowe.' . "</p>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>