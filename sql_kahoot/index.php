<?php

$dsn ='mysql:host=localhost;dbname=test';
$pdo = new PDO($dsn, 'louis' , 'Galardo39-');

try {

$pdo = new PDO($dsn, 'louis' , 'Galardo39-);

}
catch (PDOException $exception) {

mail('pocheron.louis@gmail.com', 'PDOException', $exception->getMessage());
exit('Erreur de connexion à la base de données');
};

$query = $pdo->query("SELECT * FROM reponses");

$resultat = $query->fetchAll();

print("<table border=\"1\">");

foreach ($resultat as $key => $variable)
{
print("<tr>");
print("<td>".$resultat[$key]['membres']."</td>");
print("<td>".$resultat[$key]['nom_dpt']."</td>");
print("<tr>");


print("</table>");

?>