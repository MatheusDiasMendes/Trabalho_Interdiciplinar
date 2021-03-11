<?php
header("Content-type:text/html; charset=utf8");

session_start();

$nome = "";
$email = "";
$senha = "";
$endereco = "";
$perfil = "";

if(isset($_POST["salvar"])) {

    if (isset($_POST["nome"]) && !empty($_POST["nome"])
        && isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["senha"]) && !empty($_POST["senha"])
        && isset($_POST["endereco"]) && !empty($_POST["endereco"])
        && isset($_POST["perfil"]) && !empty($_POST["perfil"])) {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $endereco = $_POST["endereco"];
        $perfil = $_POST["perfil"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["senha"] = $_POST["senha"];

        echo "<script>
alert('Usuario cadastrado com sucesso');
window.location.href = 'index.html';
</script>";

    }else{
        header("location: cadastro_usuario.html");
    }
}

elseif (isset($_POST["entrar"])){

    if (isset($_POST["email"]) && !empty($_POST["email"])
        && isset($_POST["senha"]) && !empty($_POST["senha"]))


        $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == $_SESSION["email"] && $senha == $_SESSION["senha"]) {
        echo "<script>
alert('Bem Vindo');
window.location.href = 'home.html';
</script>";

    }else{
        echo "<script>
alert('Email ou senha incorretos!');
window.location.href = 'index.html';
</script>";
    }

} else {
    header("location: cadastro_usuario.html");
}
?>