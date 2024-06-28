<?php

$chaine = "AZZZVRR";
$bonjour='<br>je dis bonjour';

$email="jam@gmail.com";
$num="02.70.92.74.06";

if(preg_match("/[A-Z]+/",$chaine)){
//expression régulière, preg_match est utilisé pour effectuer une correspondance de motif sur une chaîne de caractères
// le + signifie 1 ou plusieurs fois
echo "ok";
}else{
    echo "ko";
}

if(preg_match("/^A{3}+/",$chaine)){//cherche séquence de 3 A donc AAA
    echo "<br>la";
    }else{
        echo "<br>al";
    }

if(preg_match("/^A{1}Z{3}+/",$chaine)){//cherche séquence de AZZZ
    echo "<br>lo";
}else{
    echo "<br>ol";
}

if(preg_match("/^A{1}Z{3}$/",$chaine)){//cherche séquence de AZZZ et c'est tout
    echo "<br>li";
}else{
    echo "<br>il";
}

if(preg_match("/^[a-z]+@[a-z]+\.[a-z]{2.3}$/",$email)){
    echo "<br>lu";
}else{
    echo "<br>ul";
}
if(preg_match("/(0|\+33)[1-9]( *+\.[0-9]{2}){4}/",$num)){
    echo "<br>bien";
}else{
    echo "<br>pas bien";
}

$res= preg_filter('/jour/','soir', $bonjour);// remplace l'expression régulière par une chaîne.
echo $res;

?>