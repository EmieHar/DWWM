<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonctions sur les chaines de caractères</title>
</head>
<body>
    <a href="https://fr.w3docs.com/apprendre-html/entites-html.html">Documentation</a>
    <div>
    <h1>Fonctions les plus utiles</h1>
    <h2>strlen($chaine)</h2> 
    <p> retourne un entier qui représente le nombre de caractères que contient la chaine</p>
    <h2>strtoupper($chaine)</h2>
    <p> convertir la chaîne $tr en majuscule</p>
    <h2>strtolower($chaine)</h2>
    <p> convertir la chaîne $tr en minuscule</p>
    <h2>ucfirst($chaine)</h2>
    <p> convertir le premier caractère de la chaîne en majuscule</p>
    <h2>trim($chaine)</h2> 
    <p> supprime les espaces de début et de fin de la chaîne</p>
    <h2>rtrim($chaine) ou chop($chaine)</h2>
    <p> supprime les sepaces de fin de la chaîne</p>
    <h2>substr($chaîne,$deb,$nbr)</h2>
    <p> extrait une partie de la chaine de caractères en commençant de la position $deb et en retournant $nbr caractères (Notez que la position du premier caractère de la chaîne est 0).</p>
    <h2>ord($car)</h2>
    <p> retourne le code ASCII du caractère $car.</p>
    <h2>chr($int)</h2> 
    <p>retourne le caractère correspondant au code ASCII $int.</p>
    <h2>addslashes($chaine)</h2> 
    <p> ajoute des antislashs avant les caractères spéciaux comme l'antislash, simple cote ou double cote qui se trouvent dans la chaîne.</p>
    <h2>stripslashes($chaine)</h2>
    <p>supprime les antislashs qui se trouvent dans la chaîne de caractères</p>
    <h2>strip_tags($chaine)</h2>
    <p>supprime les balises HTML qui se trouvent dans la chaîne de caractères</p>
    <h2>htmlentities($chaine)</h2>
    <p>convertit certains caractères de $chaine en mot clés HTML.</p>
    <h2>md5($chaine)</h2>
    <p>calcule le MD5 de la chaîne. MD5 est une fonction de hachage et signifie Message Digest 5. En cryptographie, le hachage désigne chiffrer sans avoir la possibilité de déchiffrer après. Le résultat de la fonction MD5 contient toujours 32 cratères hexadécimaux (16 octets), quelque soit la longueur de la chaîne $str. Elle est très utile surtout quand on souhaite stocker des données confidentielles comme des mots de passe (dans une base de données ou un fichier par exemple).</p>
    <h2>sha1($chine)</h2>
    <p>calcule le SHA1 de la chaîne . SHA1 est une fonction de hachage et signifie Secure Hash Algorythm. Elle agit comme la fonction md5() mais son résultat est constitué de 40 caractères (20 octes).</p>
    <h2>str_replace($occ,$rem,$chaine)</h2>
    <p>retourne une chaîne de caractères où toutes les occurrences définies par $occ sont remplacées une à une par l'entrée respectives définie en $remp au sein de la chaîne de caractères .</p>
</div>
<div>
    <h1>Autres fonctions</h1>
    <h2>addcslashes</h2>
    <p>Ajoute des slash dans une chaîne, à la mode du langage C</p> 
    <h2>addslashes</h2>
    <p>Ajoute des antislashs dans une chaîne</p>
    <h2>bin2hex</h2>
    <p>Convertit des données binaires en représentation hexadécimale</p>
    <h2>chr</h2>
    <p>Générer une chaîne d'un octet à partir d'un nombre</p>
    <h2>chunk_split</h2>
    <p>Scinde une chaîne</p>
    <h2>count_chars</h2>
    <p>Retourne des statistiques sur les caractères utilisés dans une chaîne</p>
    <h2>echo</h2>
    <p>Affiche une chaîne de caractères</p>
    <h2>explode</h2>
    <p>Scinde une chaîne de caractères en segments</p>
    <h2>fprintf</h2>
    <p>Écrit une chaîne formatée dans un flux</p>
    <h2>get_html_translation_table</h2>
    <p>Retourne la table de traduction des entités utilisée par htmlspecialchars et htmlentities</p>
    <h2>html_entity_decode</h2>
    <p>Convertit les entités HTML à leurs caractères correspondant</p>
    <h2>htmlentities</h2>
    <p>Convertit tous les caractères éligibles en entités HTML</p>
    <h2>htmlspecialchars_decode</h2>
    <p>Convertit les entités HTML spéciales en caractères</p>
    <h2>htmlspecialchars</h2>
    <p>Convertit les caractères spéciaux en entités HTML</p>
</div>

<div>
    <h1>Fonction très spécifiques</h1>  
    <h2>Autres langues</h2>
    <p>convert_cyr_string — Convertit une chaîne d'un jeu de caractères cyrillique à l'autre<br>
    hebrev — Convertit un texte logique hébreux en texte visuel<br>
    hebrevc — Convertit un texte logique hébreux en texte visuel, avec retours à la ligne
    </p>

    <h2>chiffrage/autre code</h2>
    <p>
    convert_uudecode — Décode une chaîne au format uuencode<br>
    convert_uuencode — Encode une chaîne de caractères en utilisant l'algorithme uuencode</p>
    crc32 — Calcule la somme de contrôle CRC32<br>
    crypt — Hachage à sens unique (indéchiffrable)<br>
    hex2bin — Convertit une chaîne encodée en hexadécimal vers du binaire<br>
    quoted_printable_decode — Convertit une chaîne quoted-printable en chaîne 8 bits<br>
    quoted_printable_encode — Convertit une chaîne 8 bits en une chaîne quoted-printable<br>
    str_rot13 — Effectue une transformation ROT13
</div>


implode — Rassemble les éléments d'un tableau en une chaîne
join — Alias de implode
lcfirst — Met le premier caractère en minuscule
levenshtein — Calcule la distance Levenshtein entre deux chaînes
localeconv — Lit la configuration locale
ltrim — Supprime les espaces (ou d'autres caractères) de début de chaîne
md5_file — Calcule le md5 d'un fichier
md5 — Calcule le md5 d'une chaîne
metaphone — Calcule la clé metaphone
money_format — Met un nombre au format monétaire
nl_langinfo — Rassemble des informations sur la langue et la configuration locale
nl2br — Insère un retour à la ligne HTML à chaque nouvelle ligne
number_format — Formate un nombre pour l'affichage
ord — Convertit le premier octet d'une chaîne en une valeur entre 0 et 255
parse_str — Analyse une chaîne de caractères d'une variable
print — Affiche une chaîne de caractères
printf — Affiche une chaîne de caractères formatée

quotemeta — Protège les métacaractères
rtrim — Supprime les espaces (ou d'autres caractères) de fin de chaîne
setlocale — Modifie les informations de localisation
sha1_file — Calcule le sha1 d'un fichier
sha1 — Calcule le sha1 d'une chaîne de caractères
similar_text — Calcule la similarité de deux chaînes
soundex — Calcule la clé soundex
sprintf — Retourne une chaîne formatée
sscanf — Analyse une chaîne à l'aide d'un format
str_contains — Determine if a string contains a given substring
str_ends_with — Checks if a string ends with a given substring
str_getcsv — Analyse une chaîne de caractères CSV dans un tableau
str_ireplace — Version insensible à la casse de str_replace
str_pad — Complète une chaîne jusqu'à une taille donnée
str_repeat — Répète une chaîne
str_replace — Remplace toutes les occurrences dans une chaîne

str_shuffle — Mélange les caractères d'une chaîne de caractères
str_split — Convertit une chaîne de caractères en tableau
str_starts_with — Checks if a string starts with a given substring
str_word_count — Compte le nombre de mots utilisés dans une chaîne
strcasecmp — Comparaison insensible à la casse de chaînes binaires
strchr — Alias de strstr
strcmp — Comparaison binaire de chaînes
strcoll — Comparaison de chaînes localisées
strcspn — Trouve un segment de chaîne ne contenant pas certains caractères
strip_tags — Supprime les balises HTML et PHP d'une chaîne
stripcslashes — Décode une chaîne encodée avec addcslashes
stripos — Recherche la position de la première occurrence dans une chaîne, sans tenir compte de la casse
stripslashes — Supprime les antislashs d'une chaîne
stristr — Version insensible à la casse de strstr
strlen — Calcule la taille d'une chaîne
strnatcasecmp — Comparaison de chaînes avec l'algorithme d'"ordre naturel" (insensible à la casse)
strnatcmp — Comparaison de chaînes avec l'algorithme d'"ordre naturel"
strncasecmp — Compare en binaire des chaînes de caractères
strncmp — Comparaison binaire des n premiers caractères
strpbrk — Recherche un ensemble de caractères dans une chaîne de caractères
strpos — Cherche la position de la première occurrence dans une chaîne
strrchr — Trouve la dernière occurrence d'un caractère dans une chaîne
strrev — Inverse une chaîne
strripos — Cherche la position de la dernière occurrence d'une chaîne contenue dans une autre, de façon insensible à la casse
strrpos — Cherche la position de la dernière occurrence d'une sous-chaîne dans une chaîne
strspn — Trouve la longueur du segment initial d'une chaîne contenant tous les caractères d'un masque donné
strstr — Trouve la première occurrence dans une chaîne
strtok — Coupe une chaîne en segments
strtolower — Renvoie une chaîne en minuscules
strtoupper — Renvoie une chaîne en majuscules
strtr — Remplace des caractères dans une chaîne
substr_compare — Compare deux chaînes depuis un offset jusqu'à une longueur en caractères
substr_count — Compte le nombre d'occurrences de segments dans une chaîne
substr_replace — Remplace un segment dans une chaîne
substr — Retourne un segment de chaîne
trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
ucfirst — Met le premier caractère en majuscule
ucwords — Met en majuscule la première lettre de tous les mots
utf8_decode — Convertit une chaîne UTF-8 en ISO-8859-1, en remplaçant les caractères invalides ou non représentables.
utf8_encode — Convertit une chaîne ISO-8859-1 en UTF-8
vfprintf — Écrit une chaîne formatée dans un flux
vprintf — Affiche une chaîne formatée
vsprintf — Retourne une chaîne formatée
wordwrap — Effectue la césure d'une chaîne







</body>
</html>