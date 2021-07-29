<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body{
    font-family:'Rubik', sans-serif;
}
</style>

<?php
$conexao = new mysqli("localhost", "root", "", "escola");

$matricula = $_POST["txtMatricula"];
$nome= $_POST["txtNome"];
$endereco = $_POST["txtEndereco"];
$cidade = $_POST["txtCidade"];
$codcurso = $_POST["txtCodcurso"];

$sql = "INSERT INTO alunos(matricula, nome, endereco, cidade,
codcurso)Values('$matricula','$nome','$endereco','$cidade','$codcurso');";

$conexao->query($sql);
echo ("Os registros que foram inseridos com sucesso são: " . "<br> Matricula: " .$matricula .
"<br> Nome: " .$nome . "<br> Endereco: " .$endereco . "<br> Cidade: " .$cidade. "<br> Codcurso: " .$codcurso) ;
?>
<br>
<a href="cadaluno.html">Voltar</a>