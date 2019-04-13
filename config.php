<?php

//Configura��o do Banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$d_b = "livro_caixa";

//T�tulo do seu livro Caixa, geralmente seu nome
$lc_titulo="PHP";

//Autentica��o simples
$usuario="admin";
$senha="123";

//////////////////////////////////////
//N�o altere a partir daqui!
//////////////////////////////////////

//Conexao com o banco de dados!
$conn = mysqli_connect($host, $user, $pass, $d_b) or die("Erro na conexгo com a base de dados");

//TEste para confirmar login:
if (isset($_SESSION['logado']))
{
    $logado = $_SESSION['logado'];
}
else
{
    $logado = "";
}

$senha_ = md5($senha);


if (isset($_POST['login']) && $_POST['login'] != '') {

    if ($_POST['login'] == $usuario && $_POST['senha'] == $senha) {
        $logado = $_SESSION['logado'] = md5($_POST['senha']);
        header("Location: ./");
        exit();
    }
}

if ($logado != $senha_ && !isset($pagina_login)) {

    header("Location: login.php");

    exit();
}
?>
