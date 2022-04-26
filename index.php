<?php
session_start(); //Iniciar a sessao
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<heder>
    <meta charset="utf-8">
    <title>Informações para imposto de renda</title>
   <link rel="stylesheet" href="css/style.css">
</heder>
<body class="pagina">
    <h1>Dados</h1>
    
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <div class="form">
        <form method="POST" action="processa.php">
            <h2>Informações</h2>
            
                <label>Declaração: </label>
                <input type="text" name="declaracao" id="caixa" placeholder="Numero declaração"><br>

                <label>Nome: </label>
                <input type="text" name="nome" id="caixa" placeholder="Nome completo" required><br>

                <label>Cpf: </label>
                <input type="text" name="cpf" id="caixa" placeholder="Numero do cpf" required><br>

                <label>Titulo: </label>
                <input type="text" name="titulo" id="caixa" placeholder="titulo de eleitor" required><br>

                <label>E-mail: </label>
                <input type="email" name="email" id="caixa" placeholder="E-mail valido"><br>

                <label>Telefone: </label>
                <input type="text" name="tel" id="caixa" placeholder="Numero do telefone" required><br>
                
                <label>Cep: </label>
                <input type="text" name="cep" id="caixa" placeholder="Cep da rua"><br>

                <label>Rua:</label>
                <input type="text" name="rua" id="caixa" placeholder="Nome da rua"><br>

                <label>Numero:</label>
                <input type="text" name="numero" id="caixa" placeholder="Numero da residência"><br>
            
    
                <input type="submit" value="Enviar" name="CadUsuario">
            
        </form>
    </div>
</body>

</html>