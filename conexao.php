<?php  // Conexão procedural
//criar variáveis de conexão
$servidor = "localhost"; 
$usuario = "rodrigo";
$senha = "123456";
$bd = "bdcurso";

//criar conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);

// O mysqli_connect retorna TRUE ( verdadeiro) ou FALSE (falso)

$conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
//var_dump($conexao);
if ($conexao) {
    echo "Conectou ao Banco de Dados";
} else {
    echo "<h1>Falha de Conexão com o Banco de Dados - FAVOR ENTRE EM CONTATO COM O 
    RODRIGO GONZAGA</h1>";
}