<?php
    #sessao tem que vir primeiro
    session_start(); #inicia a sessão
?>



<html lang='pt-br'>
    <head>
        <meta charset="UTF-8">
        <title>Iasmin - Email</title>
        <link rel = "shortcut icon" href="favicon.ico" type="image/x-ico">
    </head>

    <body>

    <div class="" style=" font-family: 'Poppins', sans-serif; color: #2d71a1; text-align: center;">
        <br>
        <h1> E-mail enviado com Sucesso !</h1>
        <img src="check.png" class="img-fluid" alt="Imagem responsiva">
        <div style = "color: #000;" >
                  <h3> Agradeço pelo contato! Irei retornar em Breve :)</h3>
              </div> 
              <br>
              
              <a class="btn btn-primary" href="https://iasminmarques.com.br/" role="button">Volte para o Site</a>       
    </div>
      <?php

/* Nome das variaveis dos formulários: name,email,subject,message, telefone*/

#pegar os dados do formulario pelo metodo POST

#laço de verificação se existe algo dentro da variavel
if (isset($_POST ['email']) && !empty ($_POST['email'])) {
    
    #criando e pegando, as variaveis,  os dados do formulario pelo metodo POST
    $name = addslashes($_POST['name']); #O QUE É ADDLASHES?
    $email = addslashes($_POST['email']);
    #$telefone = addslashes($_POST['telefone']);
    $subject = addslashes($_POST['subject']);
    $message = addslashes($_POST['message']);


    #montando o email para enviar
    $to = "iasminimp7@gmail.com"; #o email que vai receber o email do usuario (MODIFICAR O EMAIL ***)
    $body = "Nome: " .$nome. "\r\n".
            "E-mail: ".$email. "\r\n". 
            "Objetivo: " .$subject. "\r\n".
            "Mensagem: " .$message;
    
    #from, tem que ser do dominio do e-mail, nesse caso : @hubdocricare.com.br
    $header = "From: SITE - IASMIN \r\n" . #VERIFICAR E-MAIL (MODIFICAR *** )
    "Reply - to: " .$email. "\r\n".
    "X = Mailer: PHP/" .phpversion(); 
    
    #Laço para verificação se o e-mail foi enviado com sucesso
    if(mail($to, $subject, $body, $header)){
        #echo "<h1> E-mail enviado com Sucesso ! </h1>";

    }else{
        echo "E-mail não pode ser enviado :/";
    }


}

?>
 </body>

</html>
