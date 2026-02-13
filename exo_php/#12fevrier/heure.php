<?php
$heure=19;
if($heure>0 and $heure<=12){
    echo"c'est le matin";
}
elseif($heure<=18){
    echo"c'est l'apres-midi";
}
elseif($heure<24){
    echo"c'est la nuit";
    }
else  
    echo"heure invalide";   

?>