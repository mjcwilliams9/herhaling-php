//Var
<?php
$getal=[8];
 ?>

//OEF 1
<?php
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
echo var_dump($klas);
?>

//OEF 2
<?php
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
for ($i=0; $i <4; $i++){
  echo ($klas)[$i],PHP_EOL;
}
?>


//OEF 3
<?php
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
foreach ($klas as $i) {
  echo $i, PHP_EOL;
}
?>

//COMBI
<?php
$bucket_list = [];
$hoeveelheid_activiteiten = readline("hoeveel activiteiten wil je toevoegen aan je bucket list?");
for ($i=0; $i < $hoeveelheid_activiteiten ; $i++) {
  $activiteit = readline("Welke activiteiten wil je toevoegen? ");
}

var_dump($bucket_list);
foreach ($bucket_list as $b) {
  echo $b, PHP_EOL;
}
?>
