<?php 
require_once "vendor/autoload.php";


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/src/Views');
$twig = new Environment($loader, ['cache' => false, 'debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());



use Projet\Controllers\UtilisateurControllers;



$uc = new UtilisateurControllers($twig);




$base  = dirname($_SERVER['PHP_SELF']);

if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

$route = new \Klein\Klein();

$route->respond('GET','/', function() use($uc) {
    echo "coucou"; 
});


$route->respond('GET', '/addUtilisateur', function() use($uc) {
    $uc->addUtilisateur();

});

$route->respond('POST','/recordutilisateur', function($req) use ($uc){
    $uc->recordUtilisateur($req->paramsPost());//ajout utilisateur
});



$route->dispatch();










// $route->respond('GET','/acteurs', function() use ($ac) {
//     $ac->listeActeurs(); 

  
//  }) ;



//  // http://localhost/code/mvcobject/mvcobjet1/mvcobject1/acteurs

// $route->respond('GET','/acteur/[:id]', function($req,$res) use($ac) {
//     $ac->getOneActor($req->id);
//     // echo "<pre>";
//     // print_r($a);
//     // echo "</pre>";

    
// //    // http://localhost/code/mvcobject/mvcobjet0/acteur/1

// });


// $route->respond('GET','/genres', function() use ($gr) {
//     $genre = $gr->listeGenres(); 
//     echo "<pre>";
//     print_r($genre);
//     echo "</pre>";
//   }) ;

//         // http://localhost/code/mvcobject/mvcobjet0/genres

// $route->respond('GET','/genre/[:id]', function($req,$res) use($gr) {
//     $genre = $gr->getOneGenre($req->id);
//     echo "<pre>";
//     print_r($genre);
//     echo "</pre>";
// });
// // http://localhost/code/mvcobject/mvcobjet0/genre/1

// $route->respond('GET','/directors', function() use ($dc) {
//     $d = $dc->listeDirectors(); 
//     echo "<pre>";
//     print_r($d);
//     echo "</pre>";
//   }) ;

//    // http://localhost/code/mvcobject/mvcobjet0/directors

//   $route->respond('GET','/director/[:id]', function($req,$res) use($dc) {
//     $director = $dc->getOneDirector($req->id);
//     echo "<pre>";
//     print_r($director);
//     echo "</pre>";
// });

//  // http://localhost/code/mvcobject/mvcobjet0/director/1




//  $route->respond('GET','/movies', function() use ($nm) {
//     $ret =$nm->listeMovies(); 
//     echo "<pre>";
//     print_r($ret);
//     echo "</pre>";
  
//  }) ;

 
//  $route->respond('GET','/movie/[:id]', function($req,$res) use($nm) {
//     $movie = $nm->getOneMovie($req->id);
//     echo "<pre>";
//     print_r($movie);
//     echo "</pre>";
// });



// $route->respond('GET','/addactor', function() use ($ac){
//     $ac->addActor();//affichage d'un formulaire pour ajout acteur
// });

// $route->respond('POST','/recordactor', function($req) use ($ac){
//     $ac->recordActor($req->paramsPost());//ajout acteur
// });

// $route->respond('GET','/creerfilm', function() use ($nm) {
//     $movie = $nm->addMovie();
// });

// $route->respond('POST','/recordmovie', function($req) use ($nm) {
//     $file = $req->files()->all();
//     $nm->recordMovie($req->paramsPost(), $file);
// }
// );



?>