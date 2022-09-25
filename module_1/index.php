<?php

    $variabile = "Le variabili vanno dichiarate con il $ e non è possibile tipizzarle";

    /*La concatenazione diversamente da java, c++ etc... avviene con il "."
    * quindi:
    */
    echo ($variabile . ", in php la concatenazione avviene con il \".\"");



/*ESISTONO DUE FUNZIONI PER MANDARE A SCHERMO QUALCOSA:
    print ->
        - è più lento nell'esecuzione;
        - non accetta più parametri per cui siamo costretti ad usare la concatenazione;
        - restituisce 1 come risposta, perciò può essere usato nell'espressioni.
    echo ->
        - più veloce rispetto a print;
        - accetta più parametri;
        - non restituisce 1 come risposta.
  con entrami i metodi è possibile incorporare codice html,js ecc..;
*/


    //Print con più argomenti (quindi useremo la  , ):
    //print("<h1>" , "NON FUNZIONA" , "</h1>");

    //Print con la concatenazione (quindi useremo il . ):
    print ("<h1>" . "Questo output usa la funzione print(), che ricordiamo essere più lenta rispetto a echo()" . "<br>" .
           "come puoi vedere accetta la concatenazione ma non il passaggio di più argomenti" . "</h1>"
    );

    //verifichiamo che restituisca uno :
    if(print("") == 1){
        echo "Restituisce UNO";
    }else{
        echo "Non restituisce UNO";
    }

    echo ("<h3>" . "Hello World con echo" . "</h3>"); //è possibile rimuovere le () -> es: echo "hello world";
    echo("<h1>" . "Questo output usa la funzione echo()," . "<br>" .
        "accetta la concatenazione e anche il passaggio di più argomenti" . "</h1>");

    echo "argomento 1", " argomento 2" , " argomento 3";

