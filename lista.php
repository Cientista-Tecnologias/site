<?php
//variável usada para conectar-se ao banco
$conexao = mysqli_connect("localhost","root","ac16");

//seleciona o banco de dados que será usado
mysqli_select_db($conexao,"cadastro");

//variáveis usadas na filtragem dos dados
//$pesquisa = ("SELECT * FROM usuario WHERE login = '$login' and senha='$senha'");
$pesquisa = ("SELECT * FROM usuario ");

//filtra e recebe o resultado
$resultado = mysqli_query($conexao,$pesquisa);

//monta array com os dados do resultado
//$array_de_conteudo = mysqli_fetch_array($resultado);

//recebe a qtde de linhas
$linhas = mysqli_num_rows($resultado);

//faz a impressão dos dados se houver resultado, ou seja, se tiver dados para serem impressos
if ($resultado){
print "\nForam encontrados " . $linhas . " dados na tabela.<br>";

while($linhas= mysqli_fetch_array($resultado)) {

//imprime na tela
print "<br>Nome: " . $linhas["login"].
"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .
"Senha: " .$linhas["senha"] .
"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .
"Prato: " .$linhas["prato"].
"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" .
"Preco: " .$linhas["preco"]."";

}

//fecha a conexao e limpa o resultado
mysqli_close($conexao);
mysqli_free_result($resultado);
}else{

//só fecha a conexão pois nao tinha conteudo no resultado
mysqli_close($conexao);

}
?>