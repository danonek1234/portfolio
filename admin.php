<?php
$serwer = "localhost";
$user = "root";
$pass = "";
$baza = "portfolio";
$c = mysqli_connect($serwer, $user, $pass, $baza);

@$id = $_GET["id"];
@$tekst = $_GET["tekst"];
@$tekst = $_POST["tekst"];
@$zdjecie = $_POST["zdjecie"];
@$id_p = $_GET["id"];
@$tekst_p = $_POST["tekst"];
@$zdjecie_p = $_POST["zdjecie"];

if(isset($_POST['wyslij'])){
    $a = mysqli_query($c, "UPDATE `omnie` SET `tekst` = '$tekst';");
    }

if(isset($_POST['submit'])){
    $a = mysqli_query($c, "UPDATE `omnie` SET `zdjecie` = '$zdjecie';");
    }

if(isset($_POST['submitp'])){
    $a = mysqli_query($c, "UPDATE `projekty` SET `tekst_p` = '$tekst_p';");
    }

if(isset($_POST['wyslijp'])){
    $a = mysqli_query($c, "UPDATE `projekty` SET `zdjecie_p` = '$zdjecie_p';");
    }

if(isset($_POST['wyloguj'])){
    header("Location: strona.php");
}
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
    <h1>Witaj w panelu administracyjnym</h1>
    </div>
    <div class="section_one">
    <?php
        echo "<div class='section_one_text'>";
            echo "<h1>O mnie</h1>";
            $q = mysqli_query($c, "SELECT * FROM `omnie`;");
            while($h = mysqli_fetch_array($q)){
                echo "<form method='post'>";
                echo "<textarea type='text' id='text' name='tekst' placeholder='$h[tekst]'></textarea>";
                echo "<input id='submit_text' type='submit' name='wyslij' value='wyslij'>";
                echo "</form>";  
                echo "</div>";       
                echo "<div class='section_one_photo'>";
                echo "<img src=\"" . $h["zdjecie"] . "\";>";
                echo "<form method='post'>";
                echo "<input type='text' id='photo_text' name='zdjecie' placeholder='url zdjecia'>";
                echo "<input id='submit_text' type='submit' name='submit' value='wyslij'>";
                echo "</form>";
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
                echo "<form method='post'>";
                echo "<textarea type='text' id='textp' name='tekst' placeholder='$g[tekst_p]'></textarea>";
                echo "<input id='submit_p' type='submit' name='submitp' value='wyslij'>";
                echo "</form>";  
            echo "</div>";
            echo "<div class='section_two_photo'>";
            echo "<img src=\"" . $g["zdjecie_p"] . "\";>";
            echo "<form method='post'>";
                echo "<input type='text' id='photo_projekt' name='zdjecie' placeholder='url zdjecia'>";
                echo "<input id='submit_projekt' type='submit' name='wyslijp' value='wyslij'>";
                echo "</form>";
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
        <label for="file">HTML:</label>
        <progress id="file" max="100" value="70"></progress><h2>70%</h2>
        </div>
        <div class="section_four_progress">
        <label for="file">CSS:</label>
        <progress id="file" max="100" value="50"></progress><h2>50%</h2>
    </div>
    </div>
    <div class="section_five">
        <h2>Panel Admina</h2>
        <form method="POST">
            <input id='submit' type='submit' name='wyloguj' value='Wyloguj'>
        </form>
    </div>
</body>
</html>