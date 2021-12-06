<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<h1> Cadastro do Clientes</h1>  
<p>Sistema para cadastro de clientes.</p>
 
<form action="Salvarcliente.php" method="get">
    <label for="nome">Nome do cliente</label>
    <input type="text" name="nome" id="nome"><br>
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf"><br>
    <label for="fone">telefone</label>
    <input type="phone" name="fone" id="fone"><br>
    <label for="email">email</label>
    <input type="email" name="email" id="email"><br>
 
<input type="submit" name="Salvar" value= "salvar Cliente">
 
 
</form>
<a href="logout.php">sair</a>

</body>
</html>
