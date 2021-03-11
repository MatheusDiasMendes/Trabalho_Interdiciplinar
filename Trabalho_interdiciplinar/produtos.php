<?php
header("Content-type:text/html; charset=utf8");

session_start();

$nome= " ";
$preco= 0.0;
$quantidade= 0; 
if(isset($_POST["salvar"])){
   if(isset($_POST["nome"]) && !empty($_POST["nome"])
    && isset($_POST["preco"]) && !empty($_POST["preco"])
    && isset($_POST["quantidade"]) && !empty($_POST["quantidade"])){

      $nome=$_POST["nome"];
      $preco = $_POST[ "preco"];
      $quantidade= $_POST[ "quantidade"];

      $_SESSION["nome"]=$_POST[ "nome"];
      $_SESSION["preco"]=$_POST[ "preco"];
      $_SESSION["quantidade"]=$_POST[ "quantidade"];

    echo "<script>
    alert('produto cadastrado com sucesso');
    window.location.href ='home.html';
         </script>";

   }else{
      echo "<script>
      alert('Favor preecher todos os campos');
      window.location.href = 'cadastro_produtos.html';
         </script>"; 
        }}
?>