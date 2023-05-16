<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        width: 320px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
        width: 94%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        
    }

    input[type="submit"] {
        width: 100%;
        padding: 8px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    h3 {
        color: green;
        margin: auto;
        text-align: center;
    }

    h4 {
        color: red;
        margin: auto;
        text-align: center;
    }
</style>



</head>
<body>

    <h2>Login</h2>

    <form method="POST" action="login.php">

        <label for="username"> Usuário:</label>
        <input type="text" id="username" name= "username" required>

        <br>
        <br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <br>
        <br>

        <input type="submit" value="Login">

    </form>
    
</body>
</html>

<?php 
// processar o formulário de login neste mesmo arquivo login.php.


// Verifica se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica as credenciais de login
    $username = "admin"; // nome de usuário válido
    $password = "senha123"; // senha válida

    // obtém os valores digitados no formulário
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // verifica se as credenciais estão correta
    if ($input_username == $username && $input_password == $password) {
        // login bem sucedido
        echo '<br> <br>';
        echo "<h3>Login bem-sucedido! Bem-vindo, $username.</h3>";
        // aqui podemos direcionar para outra página ou fazer qualquer ação deseja após o login
    } else {
        // login inválido
        echo '<br> <br>';
        echo "<h4>Credenciais inválidas. Tente novamente.</h4>";
    }
}

?>