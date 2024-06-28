<?php
    $tab =[2,3,4,5,6];

    $tab2=[12,13,14];

    array_push($tab,7);//ajoute un élément à la liste

    array_pop($tab);//supprime le dernier élément

    array_unshift($tab,0);//ajoute un élément au début

    array_shift($tab);//supprime un élément au début

    unset($tab[2]);//supprime une variable à une position donnée

    $liste = array_merge($tab,$tab2);

    $annuaire = [
        "john" => "123456789",
        "POL" => "0987654321",
        "Jak" => "0174258963"
    ];

    echo $annuaire["POL"];//accès par les clés puisque tableau associatif

    echo"<hr>";

    print_r(array_keys($annuaire));//renvoi les clés de l'annuaire

    echo"<hr>";

    print_r(array_values($annuaire));
    
    echo"<hr>";

    if(array_key_exists('POL',$annuaire)){
        echo"POL existe et son num est: ". $annuaire["POL"]."<hr>";
    }else{
        echo " Pas de POL"."<hr>";
    }
?>