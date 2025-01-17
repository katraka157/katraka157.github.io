<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .welcome-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .btn-cadastrar {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-cadastrar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h1>Bem-vindo ao Nosso Site!</h1>
    <p>Clique abaixo para se cadastrar.</p>
    <a href="cadastro.php" class="btn-cadastrar">Cadastrar</a>
</div>

</body>
</html>
