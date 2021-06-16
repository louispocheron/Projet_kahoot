<?php 
session_start();

// if (!isset($_SESSION["score"])) $_SESSION["score"] = 0;

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // print_r($_POST);
    $_SESSION["score"] += (int)($_POST["reponse"]);
    // echo $_SESSION["score"];
    echo "Votre score : ".$_SESSION["score"]."/".$_POST["question"]."<br/>";
    if (intval($_POST["question"])<15){
        include "question".(intval($_POST["question"])+1).".php";
    }  else {
       // echo $_SESSION["score"];
    }
    exit;
} else {
     $_SESSION["score"] = 0;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="question_style.css">

<title>quizz</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>



<?php

// isset($_GET["var1"]) && isset($_GET["var2"]);

// $var1 = $_GET['var1'];

// session_start();



try
{
$bdd = new PDO('mysql:host=localhost;dbname=quizz1;charset=utf8', 'margauxcoppi', '@Marslab2506');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

$id = 1;
$sth = $bdd->prepare("SELECT * FROM reponses INNER JOIN bonnes_reponses ON reponses.bonnes_reponses_mensonge = $id AND bonnes_reponses.id = $id;");
$sth->execute();

$donneesq = $sth->fetch();



// $opt1 = $post->verite_1;
// $opt2 = $post->verite2;
// $opt3 = $post->verite3;
// $opt4 = $post->mensonge;
// }

// $reponses = [$opt1, $opt2, $opt3, $opt4];

// shuffle($reponses);



?>



<header>
      <p class="question_page6">1 mensonge, 3 vérités</p>
    </header>



<main>

<section>
<div id="questions">
<div><button id="verite1" class="reponses" onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse1']; ?> </div></button>
<div><button id="verite2" class="reponses"onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse2']; ?> </div></button>
<div><button id="verite3" class="reponses" onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse3']; ?> </div></button>
<div><button id="verite4" class="reponses" onclick="$('#reponse').val(1);resultat()"> <img src="images_logo/losange.png" alt=""><?php echo $donneesq['mensonge']; ?> </div></button>
</section>

<section>
<img src="images_logo/logo.png" alt="">
</section>

</main>

<input type="hidden" id="reponse" value="0">
<input type="hidden" id="question" value="1">
</div>


<footer class="footer_page6">
     <div id="result"></div>
    </footer>






<?php

$sth->closeCursor();
?>

<script src="pseudo.js"></script>
<script src="ajax.js" ></script>
</body>
</html>