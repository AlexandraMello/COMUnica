
// envia os dados da página para o banco de dados//
<?php

if (isset($_POST['temail'])) && !empaty($_POST['temail']){
  // code...

  $email = addslashes($_POST['temail']);
  $nome = addslashes($_POST['tnome']);
  $cpf = addslashes($_POST['tcpf']);
  $endereço = addslashes($_POST['tend']);
  $produto = addslashes($_POST['tprod']);
  $validade = addslashes($_POST['tval']);
  $quantidade = addslashes($_POST['tquant']);


  $to = "contatoCOMUnic@br.com";
  $subject = "Contato projeto COMUnica";
  $body = "Nome:" .$nome. "\r\n".
          "Email:" .$email. "\r\n".
          "CPF" .$cpf. "\r\n".
          "Endereço" .$endereço. "\r\n".
          "Produto" .$produto. "\r\n".
          "validade" .$validade. "\r\n".
          "Quantidade" .$quantidade. "\r\n";

  $header = "From = contatoCOMUNIc@br.com"."\r\n". "Replay-To:" .$email."\r\n". "X-Malier: PHP/"phpversion();
  $error = new mysqli ($to, $subject, $body, $header)

  if (email($to, $subject, $body, $header)) {
      echo ("Cadastro enviado com sucesso para analise");
  }else {
      echo "Falha ao enviar cadastro (".$error->connect_errno.") ". $error->connect_errno;
  }


}



 ?>
