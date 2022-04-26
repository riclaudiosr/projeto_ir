<link rel="stylesheet" href="./style/style.css">

<?php
session_start(); //Iniciar a sessao

//incluir o arquivo conexão com bd
include_once "conexao.php";

//Receber os dados do formulario
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

//Verificar se o usuario clicou no botao
if(!empty($dados['CadUsuario'])){
   $query_usuario = "INSERT INTO usuario
               (declaracao, nome, cpf, titulo, email, tel, cep, rua, numero ) VALUES
               (:declaracao, :nome, :cpf, :titulo, :email, :tel, :cep, :rua, :numero )";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':declaracao', $dados['declaracao'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':titulo', $dados['titulo'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':tel', $dados['tel'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
    $cad_usuario->execute();
      //Criar a variavel global para salvar a mensagem de sucesso
      $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";

      //Redirecionar o usuario
      header("Location: index.php");
  
  }else{
       //Criar a variavel global para salvar a mensagem de erro
      $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
  
      //Redirecionar o usuario
        header("Location: index.php");
}