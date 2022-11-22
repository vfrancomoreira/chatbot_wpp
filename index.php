
<?php

// Conexão com o banco de dados
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bot';

$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// if conn (! = der um erro): 
if(!$conn){
    //echo "ERRO:... não foi possivel conectar no MySQL.";
}
else{
   //echo "Conectado com sucesso.";
}

?>

<?php
$menu1 = "Olá, obrigado por entrar em contato com a *Pizzaria Alfredo.*\n
            Já vamos começar seu atendimento.\n
            Escolha a opção de sua prefêrencia.\n
            ----------Pizza----------\n
            *1* - Pizza de mussarela --- R$20,00\n
            *2*- Pizza de calabresa --- R$20,00\n";

$menu2 = "----------Bebidas----------\n
            *1* - Guaraná 2L --- R$8,00\n
            *2* - Coca Cola 2L --- R$9,00\n";

$menu3 = "Ok tudo foi anotado, escreva abaixo, por favor, o seu endereço completo.";

$menu4 = "Algum ponto de referência?";

$menu5 = "Qual a forma de pagamento?";

$menu6 = "Ok muito obrigado, já entraremos em contato, pra confirmar seu pedido.";

$data = date('d-m-Y');

?>

<?php

// Boas vindas ao cliente
$msg = $_GET['msg'];
$telefone_cliente = $_GET['telefone'];
echo "$msg $telefone_cliente";

// Consulta se é a primeira vez do cliente
$sql = "SELECT * FROM usuario WHERE telefone = '$telefone_cliente'";
$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query);
    
if($total > 0){ // Se encontrar o número no banco
    
}
    if ($status == 2){
        echo $menu2;
        $resposta = $menu2;
    }
    if($status == 3){
        echo $menu3;
        $resposta = $menu3;
        }
    if($status == 4){
        echo $menu4;
        $resposta = $menu4;
        }
    if($status == 5){
        echo $menu5;
        $resposta = $menu5;
        }        
    if($status == 6){
        echo $menu6;
        $resposta = $menu6;
        }
    if($status == 7){
        $menu7 = "Ja ja entramos em contato";
        echo $menu7 ;
        $resposta = $menu7;
        }
else{ // Se não existir o número no banco
    $sql = "INSERT INTO usuario (telefone, status) VALUES  ('$telefone_cliente', '1')";
    $query = mysqli_query($conn, $sql);
    if (!$query){

    }
    else{
        echo $menu1;
    }
}
?>

<?php

$sql = "SELECT * FROM usuario WHERE telefone = '$telefone_cliente'";
$query = mysqli_query($conn, $sql);
$total = mysqli_num_rows($query) ;// Saber o total de telefone_cliente

while($rowns_usuario = mysqli_fetch_array($query)){
    $status = $rows_usuario['status'];
}
if($status < 7){
    $status2 =  $status + 1;
    $sql = "UPDATE usuario SET status = '$status2' WHERE telefone = '$telefone_cliente'";
    $query = mysqli_query($conn, $sql);
}
if(!$query){

}
else{
    echo $menu1;
    $menu1 = $resposta;
}

?>

<?php

$sql = "INSERT INTO historico (telefone, cliente1, bot, data) VALUES ('$telefone_cliente', /
        'msg', '1', '$resposta', 'data')";

$query = mysqli_query($conn, $sql);
if(!$query){

}
else{
}

?>