<!--Exe 1-->
<?php

$nombre = 10;

if ($nombre % 2 == 0) {
    echo "Le nombre est pair";
} else {
    echo "Le nombre est impair";
}

?>
<!--Exe 2-->

<?php
$montant=850;
$remise=0;

if($montant>=500){
if($montant>=500 && $montant<=999) {
    $remise =0.05;
}elseif($montant>=1000 && $montant<=1999) {
    $remise=0.1;

}else {
    $remise=0.15;
} 
}
$montantremise=$montant*$remise;
$montantpayer=$montant-$montantremise;
echo "Le montant de la remise : " . $montantremise;
echo "Le montant a payer :" . $montantpayer;