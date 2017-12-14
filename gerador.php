<!DOCTYPE html>
<html>
    <head>
        <title>Titulo</title>
    </head>
    <body>

        <h1>Gerador de nome com 6 caracteres</h1>
        <?php
        $characters = "ABCDEFGHIJKLMAEIOUNOPQRSTUVWXYZAEIOU";
        $senhaAleatoria = "";
        for ($j = 0; $j < 50; $j++) {
            for ($i = 0; $i < 6; $i++) {
                $senhaAleatoria .= $characters[rand(0, strlen($characters) - 1)];
            }
            echo "<br> $j " . $senhaAleatoria;
            $senhaAleatoria = null;
        }
        ?>
    </body>
</html>
