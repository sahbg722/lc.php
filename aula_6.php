<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo php no html</title>
</head>
<body>
        <h1>Bem vindo</h1>
        <htphp>
        <?php
            function alterarCorFundo($cor){
                echo "<style>body {background-colour: $cor; }</style>";
                
            }
        alterarCorFundo("#ffd700");
        ?>
    </htphp>
    </body>

