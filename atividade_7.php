<?php
// Definindo a cor do fundo dependendo da idade
$backgroundColor = "white";  // Cor padrão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = isset($_POST['idade']) ? (int) $_POST['idade'] : 0;

    // Verificar se a idade é maior ou igual a 18
    if ($idade >= 18) {
        $backgroundColor = "green";  // Maior de idade, fundo verde
    } else {
        $backgroundColor = "red";  // Menor de idade, fundo vermelho
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            margin: 0;
            background-color:
                <?php echo $backgroundColor; ?>
            ;
            transition: background-color 0.5s ease;
        }

        .container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        input[type ="number"] {
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        h1 {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Verifique sua Idade</h1>
        <p>Digite sua idade para verificar se você é maior de idade ou menor de idade.</p>

        <!-- Formulário que envia a idade -->
        <form method="POST" action="">
            <input type="number" name="idade" placeholder="Digite sua idade" min="0" required>
            <br>
            <button type="submit">Verificar</button>
        </form>
    </div>
</body>

</html>