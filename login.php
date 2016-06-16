<?php 
        $login = $_POST['login'];
	$entrar = $_POST['entrar'];
	$senha = md5($_POST['senha']);


//variável usada para conectar-se ao banco
        $conexao = mysqli_connect("localhost","root","ac16");
//seleciona o banco de dados que será usado
        mysqli_select_db($conexao,"cadastro");

if (isset($entrar)) {
$pesq=("SELECT * FROM usuario WHERE login='$login' and senha='$senha'");
    $sql_check = mysqli_query($conexao,$pesq); 
    $sql_check_num = mysqli_num_rows($sql_check);
    if ($sql_check_num == 0)
     {
echo"<script language='javascript' type='text/javascript'>
alert('Login ou Senha Nao Esta Cadastrado Em Nosso Banco De Dados');
window.location.href='Index.html';
</script>"; } 
             else
{
             if (($login=="admin") and ($senha=="95192c98732387165bf8e396c0f2dad2")){       
echo"<script language='javascript' type='text/javascript'>
alert('Parabens! Login Efetuado com Sucesso.');
window.location.href='admin.html';
</script>";  } 
               else 
{echo"<script language='javascript' type='text/javascript'>
alert('Parabens! Login Efetuado com Sucesso.');
window.location.href='fornecedor.html';
</script>";}
}
}
?>
