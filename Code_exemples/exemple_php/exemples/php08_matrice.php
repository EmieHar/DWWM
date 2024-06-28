<?php
declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrice</title>
    <style>
        table{
            border: 1px solid;
            border-collapse: collapse;
        }
        td{
            border: 1px solid;
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    require_once "debug.php";

    $matrice = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    ?>

    <table>
        <?php foreach ($matrice as $ligne) {
            // debug($ligne);
            // echo "<br>";
        ?>
            <tr>
                <?php foreach ($ligne as $cell) {
                    // echo $cell.":" ;
                ?>
                    <td>
                        <?= $cell;?>
                    </td>
                <?php };?>
            </tr>
        <?php };?>
    </table>

</body>

</html>