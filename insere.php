<?php 
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:

$host = "mysql.hostinger.com.br";
$username = "u562093690_root";
$password = "hack123";
$dbname = "u562093690_hack";
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome		= $_POST ['nome'];	//atribuição do campo "nome" vindo do formulário para variavel	
$estado		= $_POST ['estado'];	//atribuição do campo "email" vindo do formulário para variavel
$data		= $_POST ['data'];	//atribuição do campo "ddd" vindo do formulário para variavel
$senha		= $_POST ['senha'];	//atribuição do campo "telefone" vindo do formulário para variavel
$confirmacao= $_POST ['confirmacao'];	//atribuição do campo "telefone" vindo do formulário para variavel
$telefone	= $_POST ['telefone'];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ['endereco'];	//atribuição do campo "telefone" vindo do formulário para variavel
$email		= $_POST ['email'];	//atribuição do campo "telefone" vindo do formulário para variavel
$cpf		= $_POST ['cpf'];	//atribuição do campo "telefone" vindo do formulário para variavel


//Gravando no banco de dados !
 
//conectando com o localhost - mysql
$conexao =new mysqli($host,$username, $password,$dbname);
if (!$conexao)
	die ("Erro de conexão com o servidor, o seguinte erro ocorreu");
//conectando com a tabela do banco de dados
//$banco = mysql_select_db($dbname);
//if (!$banco)
//	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu "); 
 
 
//$query = "INSERT INTO `digital` ( `nome` , `estado` , `data` , `senha`, `confirmacao` , `email` , `telefone` , `cpf` , `endereco`) 
//VALUES ($nome, $estado, $data, $senha, $confirmacao, $email,  $telefone, $cpf ,$endereco )";


//$sql = "INSERT INTO digital ( nome , estado , data , senha, confirmacao , email , telefone , cpf , endereco) 
//VALUES ('$nome', '$estado', '$data', '$senha', '$confirmacao', '$email',  '$telefone', '$cpf' ,'$endereco' )";
 
mysqli_query($conexao,"INSERT INTO digital ( nome , estado , data , senha, confirmacao , email , telefone , cpf , endereco) VALUES ('$nome', '$estado', '$data', '$senha', '$confirmacao', '$email',  '$telefone', '$cpf' ,'$endereco' )");

echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atencao.";
mysqli_close($conexao); 
?> 