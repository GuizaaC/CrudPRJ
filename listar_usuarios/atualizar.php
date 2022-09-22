<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>

<body>

    <header class="topo"><img src="../assets/Logo.png" alt="Logo" class="logo">
        <a href="../index.html">
            <button class="voltar">Voltar</button>
        </a>
    </header>
    
<br> <br><br>
    <div class="container">
<form id="formSalvar" action='salvar.php' method="POST" onsubmit>
    <label class="titulo">Nome</label> <br>
        <input class="entrada" name='Nome_Cliente' id="Nome_Cliente" placeholder="Nome" required> <br>
    <label class="titulo">Endereço</label> <br>
        <input class="entrada" name='Endereco_Cliente' id="Endereco_Cliente" value="" required>  <br>
    <label class="titulo">Telefone</label> <br>
        <input class="entrada" type="tel" max="11"name='Telefone_Cliente' id="Telefone_Cliente" placeholder="(00)90000-0000" required> <br>
    <label class="titulo">CPF</label> <br>
        <input class="entrada" max="11"name='Cpf_Cliente' id="CPF_Cliente" placeholder="000.000.000-00" required > <br>
    <label class="titulo">Data de Nascimento</label> <br>
        <input class="entrada" min="1900-01-01" max="2050-12-31" type="date" name='Data_Nascimento_Cliente' id="Data_Cliente" placeholder="DD/MM/AAAA" required> <br>
    <label class="titulo">Email</label> <br>
        <input class="entrada" type="email" max="70" name='Email_Cliente' id="email_Cliente" placeholder="Email" required> <br>
    <label class="titulo">Senha</label>
        <input class="entrada" type="password" min="5" max="10" name="Senha_Cliente" id="senha_cliente" placeholder="Senha" required><br>
    <input class="entrada" type="hidden" name="Id_Cliente" id="Id_Cliente" value="<?php echo $_POST["Id_Cliente"]; ?>"><br>
        

<input class="enviar" type=button value="Enviar" onclick="fnValidar();">

<a href="resultadoConsulta.php">listar Clientes</a>
</form> 
 <script src="/cadastro/cadastro.js"></script>
</body>
</html>