<?php 
    // Passo 1 - ABRIR CONEXÃO 
    $servidor   = "INSIRA AQUI O SEU SERVIDOR (EX: LOCALHOST)";
    $usuario    = "INSIRA AQUI O SEU USUARIO DO SERVIDOR";
    $senha      = "INSIRA AQUI A SUA SENHA DO SERVIDOR, SE NÃO HOUVER SENHA DEIXE EM BRANCO";
    $banco      = "INSIRA AQUI O NOME DO BANCO";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);

    //Passo 2 - TESTAR CONEXAO
    if(mysqli_connect_errno() ){
        die("Conexao falhou: " . mysqli_connect_errno()); 
    }
    
?>
