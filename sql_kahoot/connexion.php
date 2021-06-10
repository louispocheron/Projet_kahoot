<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>quizz</title>
</head>
<body>

<!-- <button onclick="add()">ggggg</button> -->

<?php

// isset($_GET["var1"]) && isset($_GET["var2"]);

// $var1 = $_GET['var1'];

// session_start();



try
{
$bdd = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'louis', 'Galardo39-');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

$id = 9;
$sth = $bdd->prepare("SELECT * FROM reponses INNER JOIN bonnes_reponses ON reponses.bonnes_reponses_mensonge = $id AND bonnes_reponses.id = $id;");
$sth->execute();

$donneesq = $sth->fetch();




?>

<div><button id="verite1"> <?php echo $donneesq['reponse1']; ?> </div></button>
<div><button id="verite2"> <?php echo $donneesq['reponse2']; ?> </div></button>
<div><button id="verite3"> <?php echo $donneesq['reponse3']; ?> </div></button>
<div><button id="verite4"> <?php echo $donneesq['mensonge']; ?> </div></button>



<?php

$sth->closeCursor();
?>



</body>
</html>