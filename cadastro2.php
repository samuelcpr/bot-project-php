<?php

require_once('conn.php');

print_r($_REQUEST);

?>

<?php
######
# usuario = tipo 1
# administrado = tipo 2

####

$nome_cliente = $_POST['nome'];
$senha_cliente = $_POST['senha'];
$emails_cliente = $_POST['email'];

#busca de emails de clientes
$busca_email = "SELECT * FROM login WHERE email = '$emails_cliente'";
$resultado_busca = mysqli_query($conn, $busca_email);
$total_clientes = mysqli_num_rows($resultado_busca);

echo $total_clientes;

#verificação se o email já esta cadastrado

if($total_clientes > 0){

    #redirecionamento para pagina
    echo "<meta http-equiv='refresh' content='0;url=email_ja_cadastrado.php'>";

}else{
    $sql =  "INSERT INTO login (nome,senha,email,tipo) VALUES('$nome_cliente','$senha_cliente','$emails_cliente','1')";
    $query = mysqli_query($conn, $sql);

    # validando informações
    if(!$query){
        echo "<meta http-equiv='refresh' content='0;url=erro_cadastro.php'>";

    } else{
      #redirecionamento para pagina
    echo "<meta http-equiv='refresh' content='0;url=sucesso.php'>";
    }
}
