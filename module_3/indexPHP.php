<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MODULO_3 | PHP BY ROBERTO</title>
</head>

<style>

    table,th,td{
        border: 2px solid black;
    }

    fieldset{
        display: inline-block;
        margin: 30px;
    }

    .message{
        box-sizing: border-box;
        margin: 30px;
        padding: 30px;
        background: lightsalmon;
        display: block;
        width: 25%;
        position: absolute;
    }

</style>

<body>
<!--    Per includere un file php in un altro si usa la funzione include "percorso file" -->
    <fieldset> <legend>GET-FORM</legend>
        <form method="GET" action="indexPHP.php" id="getFormID">
            <label for="nick">Username:</label><br>
            <input type="text" id="nick" name="nick"><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br><br>
            <button name="action" value="getMethod" form="getFormID">USA GET</button>
        </form>
    </fieldset>

    <fieldset> <legend>POST-FORM</legend>
        <form method="POST" action="indexPHP.php" id="postFormID">
            <label for="nick">Username:</label><br>
            <input type="text" id="nick" name="nick"><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="pwd" name="pwd"><br><br>
            <button name="action" value="postMethod" form="postFormID">USA POST</button>
        </form>
    </fieldset>

    <?php

        $username = "";
        $pswrd = "";
        $done = false;
        //Metodo GET

        if(isset($_GET["action"]) && $_GET["action"] == "getMethod") {
            $username = $_GET["nick"];
            $pswrd = $_GET["pwd"];
            $done = true;
        }

        if(isset($_POST["action"]) && $_POST["action"] == "postMethod") {
            $username = $_POST["nick"];
            $pswrd = $_POST["pwd"];
            $done = true;
        }

        if($done)
        echo "<div class='message'>Username: $username <br>Password: $pswrd </div>";


    ?>

</body>

</html>