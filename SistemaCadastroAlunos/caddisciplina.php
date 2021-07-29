<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body{
    font-family:'Rubik', sans-serif;
}
</style>
<?php
$conexao = new mysqli("localhost", "root", "", "escola");

$coddisci = $_POST["txtCoddisciplina"];
$nomedisci = $_POST["txtNome"];

$sql = "INSERT INTO disciplinas(coddisciplina, nomedisciplina)
Values('$coddisci','$nomedisci');";

$conexao->query($sql);
echo ("Os registros que foram inseridos com sucesso são: " . "<br> Código da disciplina : " .$coddisci .
"<br> Nome da disciplina : " .$nomedisci) ;
?>
<br>
<a href="caddisciplina.html">Voltar</a>