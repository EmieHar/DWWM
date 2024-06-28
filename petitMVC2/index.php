<?php 

// print_r($_GET) ;
// $controller = $_GET['controller'];
// $action = $_GET['action'];
// $argument1 = NULL;


define("_BASE","http://localhost/developpement/petitMVC2");

//si on tape dans l'url "http://localhost/developpement/petitMVC/index.php?action=etudiant/crer"
$action = $_GET['action'];
$tab = explode('/', $action);
//dasn $action je peux avoir:
//controller/action ou
//controller/action/argument

$arg=NULL;
$controller =$tab[0];
$fonction = $tab[1];

if(isset($tab[2])){
    $arg = $tab[2];
}

require('controller/controller_'.$controller.'.php') ;
 
if (isset($arg)) {
   
    $fonction($arg);
} else {
    $fonction();
}
?>