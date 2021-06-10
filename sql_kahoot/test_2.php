<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Quizoot</title>
</head>
<body>



<?php


try
{
$dtb = new PDO('mysql:host=localhost;dbname=quizz;charset=utf8', 'louis', 'Galardo39-');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>
<?php

$id = 1;
?>

<?php

$response = $dtb->prepare("SELECT * FROM reponses INNER JOIN bonnes_reponses ON reponses.bonnes_reponses_mensonge = bonnes_reponses.id;");
$response->execute();

$question = $dtb->prepare("SELECT * FROM questions WHERE id = $id");
$question->execute();
?>

// if(isset($_POST['id'])){

// $query = "SELECT * FROM Question WHERE idquestions ='".$_POST['id']."'";

// $statement = $connect->prepare($query);
// $statement->execute();
// while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
// $data[] = $row;
// }
// echo json_encode($data);
// }