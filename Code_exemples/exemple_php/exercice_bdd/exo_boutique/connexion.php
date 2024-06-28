<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display:flex;
            justify-content:space-around;
        }
    </style>
</head>
<body>
    <form action="connexion_bdd.php" method="POST">
        <label for="email">Votre adresse email</label>
        <input type="email" name="email" placholder="adresse@mail.com" required>

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" required>

        <input type="submit"value="Se connecter">
    </form>
    <br>
  <h3><a href="creation.php">Pas de compte? Par ici pour en créer un</a></h3>
</body>
</html>