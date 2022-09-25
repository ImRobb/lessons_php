<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP BY ROBERTO</title>
</head>
<body>
<!--    Per includere un file php in un altro si usa la funzione include "percorso file" -->
    <?php include 'indexPHP.php' ?>
    <table style="border: 1px solid black">
        <tr>
            <th>Autore</th>
            <th>Titolo</th>
            <th>Argomenti</th>
            <th>Contatti</th>
        </tr>
        <tr>
            <td><?php echo $autore?></td>
            <td><?php echo $titolo?></td>
            <td>
                <?php
                for($i = 0 ; $i<sizeof($argomenti); $i++)
                    echo $argomenti[$i] . "<br>";
                ?>
            </td>
            <td>
                <?php
                for($i = 0 ; $i<sizeof($contatti); $i++)
                    echo $contatti[$i] . "<br>";
                ?>
            </td>
        </tr>
    </table>
</body>
</html>