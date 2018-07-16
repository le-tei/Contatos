<?php
  include_once("conectar.php");

   $nome = $_POST['nome'];
   $apelido = $_POST['apelido'];

  $dados_contato  = "INSERT INTO contatos (nome, apelido) VALUES ('$nome', '$apelido')";
  $resultado_contato = mysqli_query($con ,$dados_contato);


?>
