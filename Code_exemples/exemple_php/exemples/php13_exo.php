<?php

$x=0;

function ajoute3($arg1){//passage par valeur (la valeur est copiée), donc $x reste la même, elle n'est pas modifiée
    $ret = $arg1 +3;// idem que $arg1 +=3;
    return($ret);// return($arg1)
}

function ajoute4ref(&$arg1){//passage par référence, variable $x est modifiée // &(esperluette)
    $arg1+=4;
}

echo ajoute3($x)."<hr>";
echo $x."<hr>";

ajoute4ref($x);
echo $x."<hr>";
?>