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

$id = 12;
$sth = $bdd->prepare("SELECT * FROM reponses INNER JOIN bonnes_reponses ON reponses.bonnes_reponses_mensonge = $id AND bonnes_reponses.id = $id;");
$sth->execute();

$donneesq = $sth->fetch();




?>

<div id="questions">
<div><button id="verite1" class="reponses" onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse1']; ?> </div></button>
<div><button id="verite2" class="reponses"onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse2']; ?> </div></button>
<div><button id="verite3" class="reponses" onclick="$('#reponse').val(0);resultat()"><img src="images_logo/losange.png" alt=""> <?php echo $donneesq['reponse3']; ?> </div></button>
<div><button id="verite4" class="reponses" onclick="$('#reponse').val(1);resultat()"> <img src="images_logo/losange.png" alt=""><?php echo $donneesq['mensonge']; ?> </div></button>
<input type="hidden" id="reponse" value="0">
<input type="hidden" id="question" value="<?php echo $id ?>">




<?php

$sth->closeCursor();
?>