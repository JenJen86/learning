<?php $_ = chr(121).chr(110).chr(110).chr(101).chr(74); 
    /* Also, ich kann dir sagen welches Password es ist, aber das ergab einfach nur die Logik in meinem Kopf... und das testen^^
    Ich habe absolut keine Ahnung, kein Ansatz dieses zu lösen..*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Aufgabe 3</title>
    </head>
    <body>
        <form>
            <input id="password" type="password" name="password" placeholder="Gib dein Passwort ein">
            <input type="button" onclick="validate();" value="login">
        </form>
    </body>

    <script>
    function validate() {
        var item = document.getElementById("password");
        if (item.value == '<?=$_?>')
            alert("Passwort korrekt!");
        else
            alert("Falsches Passwort!");
    }
    </script>
</html>