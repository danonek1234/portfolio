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
@$value = $_POST["value"];
@$id_u = $_POST["id_u"];
@$nazwa_u = $_POST["nazwa_u"];

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

if(isset($_POST['submit_u'])){
    $a = mysqli_query($c, "UPDATE `umiejetnosci` SET `value` = '$value' WHERE `id_u` = '$id_u';");
    header("Location: admin.php");
    }

if(isset($_POST['submit_um'])){
    $a = mysqli_query($c, "INSERT INTO `umiejetnosci` SET `value` = '$value', `nazwa_u` = '$nazwa_u';");
    header("Location: admin.php");
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
        <?php
            $n = mysqli_query($c, "SELECT * FROM `umiejetnosci`;");
            while($l = mysqli_fetch_array($n)){
                echo "<form method='post'>";
                echo "<input type='hidden' name='id_u' value='" . $l["id_u"] . "'>";
                echo "<label>" . $l["nazwa_u"] . "</label>";
                echo "<input id='tekst_um' type='range' name='value' min='0' max='100' step='5' value='" . $l["value"] . "'>";
                echo "<input id='submit_um' type='submit' name='submit_u' value='edytuj'>";
                echo "</form>";
            }
        ?>
        <div class="formularz">
        <form method="post">
            <label>Dodaj nową umiejętność</label>
            <input id="tekst_u" type="text" name="nazwa_u">
            <input id="tekst_umi" type="range" name="value" min="0" max="100" step="5">
                        <audio id="audio" src="amogus.mp3"></audio>
            <script>
                var audio = document.getElementById("audio");
                var img = document.getElementById("tekst_umi");
                
                function play() {
                audio.play();
                }
                
                function stop() {
                audio.pause();
                }
                
                img.addEventListener('click', play);
                img.addEventListener('mouseover', play);
                img.addEventListener('mouseout', stop);
            </script>
            <input id="submit_u" type="submit" name="submit_um" value="dodaj">

        </form>
        </div>
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