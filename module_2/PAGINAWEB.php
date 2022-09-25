<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP BY ROBERTO</title>
</head>

<style>
    table,th,td{
        border: 2px solid black;
    }
</style>

<body>
<!--    Per includere un file php in un altro si usa la funzione include "percorso file" -->

    <form method="get" action="PAGINAWEB.php" id="modulo2">
        <label for="stringa">Inserisci una stringa:</label><br>
        <input type="text" id="stringa" name="stringa"><br>
        <label for="int">Inserisci un numero intero:</label><br>
        <input type="text" id="int" name="int"><br>
        <label for="float">Inserisci un numero float:</label><br>
        <input type="text" id="float" name="float"><br>
        <label for="bool">Inserisci un valore booleano:</label><br>
        <input type="text" id="bool" name="bool"><br><br>
        <button name="action" value="Modulo_Inviato" form="modulo2">Convalida</button><br><br>
        <button name="action" value="Non_Faccio_Nulla" form="modulo2">Fake-Button</button>
    </form>


    <?php

        if(isset($_GET["action"]) && $_GET["action"] == "Modulo_Inviato") {
            $stringa = $_GET["stringa"];
            $numeroIntero = $_GET["int"];
            $numeroFloat = $_GET["float"];
            $valoreBooleano = $_GET["bool"];

            echo
                "<table>" .
                "<tr>" .
                "<th>" . "Dato Variabile" . "</th>" .
                "<th>" . "Tipo Variabile (Dump)" . "</th>" .
                "<th>" . "E' un numero?" . "</th>" .
                "<th>" . "Riesci a capire che tipo è?" . "</th>" .

                "</tr>" .
                "<tr>" .
                "<td>" . $stringa . "</td>" .
                "<td>", var_dump($stringa), "</td>" .
                "<td>", var_dump(is_numeric($stringa)), "</td>" .
                "<td>", var_dump(is_string($stringa)), "</td>" .
                "</tr>" .
                "<tr>" .
                "<td>" . $numeroIntero . "</td>" .
                "<td>", var_dump($numeroIntero), "</td>" .
                "<td>", var_dump(is_numeric($numeroIntero)), "</td>" .
                "<td>", var_dump(is_int($numeroIntero)), "</td>" .
                "</tr>" .
                "<tr>" .
                "<td>" . $numeroFloat . "</td>" .
                "<td>", var_dump($numeroFloat), "</td>" .
                "<td>", var_dump(is_numeric($numeroFloat)), "</td>" .
                "<td>", var_dump(is_float($numeroFloat)), "</td>" .
                "</tr>" .
                "<tr>" .
                "<td>" . $valoreBooleano . "</td>" .
                "<td>", var_dump($valoreBooleano), "</td>" .
                "<td>", var_dump(is_numeric($valoreBooleano)), "</td>" .
                "<td>", var_dump(is_bool($valoreBooleano)), "</td>" .
                "</tr>" .
                "</tr>" .
                "</table>";
        }
    ?>

</body>

</html>