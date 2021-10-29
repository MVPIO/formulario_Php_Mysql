<?php
include_once ('conexaoBD.php');

        $nome = filter_input(INPUT_POST, "nome_usuario", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email_usuario", FILTER_VALIDATE_EMAIL);
        $senha = filter_input(INPUT_POST, "senha_usuario", FILTER_SANITIZE_STRING);
      
    $dados_de_cadastro = "INSERT INTO cadastrousuario (nome, email, senha) VALUES ('$nome','$email','$senha')";
    //$dados_cadastrados = mysqli_query($conectar, $dados_de_cadastro);
if(mysqli_query($conectar, $dados_de_cadastro)){
    echo '<script src="mensagem.js"></script>';
}else{
    echo 'deu erro'.$dados_de_cadastro."<br>".mysqli_error($conectar);
}
mysqli_close($conectar);   