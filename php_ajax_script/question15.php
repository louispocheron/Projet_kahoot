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

$id = 2;
$sth = $bdd->prepare("SELECT * FROM reponses INNER JOIN bonnes_reponses ON reponses.bonnes_reponses_mensonge = $id AND bonnes_reponses.id = $id;");
$sth->execute();

$donneesq = $sth->fetch();




?>




  <div class="podium">
    <img
      class="podium_size"
      src="./images_logo/podium.png"
      alt="logo de mauvaise réponse"
    />
  </div>




<?php

$sth->closeCursor();
?>