<?php

    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();   
    $conexao = $banco->getConexao();


    $cliente = new Cliente($conexao);
    $stmt = $cliente->read();
    $clientes->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cliente</title>
</head>
<body>
    <h2>Lista de Cliente</h2>
    
    <table border="1">
    <tr>
        <tr>Id</tr>
        <tr>Nome</tr>
        <tr>Telefone</tr>
        <tr>Email</tr>
        <tr>CPF</tr>
        <tr>Ações</tr>
    </tr>
        <?php foreach ($clientes as $cliente){ ?>

            <tr>
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['telefone']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $cliente['cpf']; ?></td>
                <td>

                    <a href="form_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                    <a href="deleta_atualizaCliente.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>                
    </table>
    <a href="form_cadastroCliente.php"> Cadastrar Novo Cliente </a>
</body>
</html>


