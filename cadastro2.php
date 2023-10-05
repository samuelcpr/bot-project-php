<?php

require_once('conn.php');

print_r($_REQUEST);

?>

<?php

$nome_cliente = $_POST['nome'];
$senha_cliente = $_POST['senha'];
$emails_cliente = $_POST['email'];

#busca de emails de clientes
$busca_email = "SELECT * FROM login WHERE email = '$emails_cliente'";
$resultado_busca = mysqli_query($conn, $busca_email);
$total_clientes = mysqli_num_rows($resultado_busca);

echo $total_clientes;

