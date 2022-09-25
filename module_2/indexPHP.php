<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $stringa = $_POST["stringa"];
        $numeroIntero =  $_POST["int"];
        $numeroFloat =  $_POST["float"];
        $valoreBooleano =  $_POST["bool"];

        echo
        "<table style='border: 2px solid black'>".
          "<tr>".
            "<th>"."Dato Variabile"."</th>".
            "<th>". "Tipo Variabile (Dump)" . "</th>".
            "<th>". "Convalida" . "</th>".
          "</tr>".
          "<tr>".
            "<td>". $stringa ."</td>".
            "<td>" . var_dump($stringa) . "</td>".
            "<td>". var_dump(is_string($stringa)) ."</td>".
          "</tr>".
        "</table>";
    }