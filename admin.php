<?php 
	$login = $_POST['login'];
	$senha =MD5($_POST['senha']);
	$connect = mysqli_connect('localhost','root','ac16');
	$db = mysqli_select_db($connect,'cadastro');

	$query_select = ("SELECT * FROM usuario WHERE login = '$login' and senha='$senha'");
	$select = mysqli_query($connect,$query_select);
	$array = mysqli_fetch_array($select);

	$logarray = $array['login'];
        $sarray = $array['senha'];

if(($login == "") || ($senha=='d41d8cd98f00b204e9800998ecf8427e'))
{  echo"<script language='javascript' type='text/javascript'>alert('O campo login e senha devem ser preenchidos');window.location.href='admin.html';</script>"; } 
else
if($logarray ==$login) { echo"<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='admin.html';</script>"; } 
    else          
 if($senha<>"d41d8cd98f00b204e9800998ecf8427e"){  
    $query = "INSERT INTO usuario (login,senha) VALUES ('$login','$senha')";
    $insert = mysqli_query($connect,$query);	   
 echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='admin.html'</script>"; }       
        else
{echo"<script language='javascript' type='text/javascript'>alert('Nao foi possivel realizar o seu cadastrado!');window.location.href='admin.html'</script>";}

?>
