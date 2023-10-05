<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bot';
$conn = mysqli_connect($servidor,$usuario,$senha,$banco );

if(!$conn) {
    #echo "os dados não estão corretos corrija";
} else {
    #echo "deu tudo certo na conexão";
}
?>