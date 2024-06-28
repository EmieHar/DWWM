<?php
header("Access-Control-Allow-Origin: *");      
$inputJSON = file_get_contents('php://input');
$inputreçu = json_decode($inputJSON, TRUE);
echo "<pre>";
print_r($inputreçu);
echo "</pre>";


?>