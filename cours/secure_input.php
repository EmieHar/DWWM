<?php

private function secure_input($data) {
	$data = trim($data); // supprime les espaces en début et fin de chaine
	$data = stripslashes($data); // supprime les "/"
	$data = htmplspecialchars($data); // supprime caractère spéciaux genre <>
	return $data;
}

?>