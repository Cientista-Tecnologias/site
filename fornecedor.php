<?php 
	$login = $_POST['login'];
	$senha =MD5($_POST['senha']);
	$connect = mysqli_connect('localhost','root','ac16');
	$db = mysqli_select_db($connect,'cadastro');

$prato =MD5($_POST['prato']);
$preco =MD5($_POST['preco']);

	$query_select = ("SELECT * FROM usuario");
	$select = mysqli_query($connect,$query_select);
	$array = mysqli_fetch_array($select);

	$logarray = $array['login'];
        $sarray = $array['senha'];
echo $prato;
echo $preco;
if(($prato == "") && ($preco=="")){
    $query = "INSERT INTO usuario (prato,preco) VALUES ('$prato','$preco')";
    $insert = mysqli_query($connect,$query);	   
 echo"<script language='javascript' type='text/javascript'>alert('Produto inserido com sucesso!');window.location.href='fornecedor.html'</script>"; }       
        else
{echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel inserir esse produto!');window.location.href='fornecedor.html'</script>";}

?>
