<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body{
    font-family:'Rubik', sans-serif;
}
</style>
<?php
$conexao = new mysqli("localhost", "root", "", "escola");

$codcurso = $_POST["txtCodcurso"];
$nomecurso = $_POST["txtNome"];
$coddisci1 = $_POST["txtCoddisc1"];
$coddisci2 = $_POST["txtCoddisc2"];
$coddisci3 = $_POST["txtCoddisc3"];

$sql = "INSERT INTO cursos(codcurso, nome, coddisc1, coddisc2,
coddisc3)Values('$codcurso','$nomecurso','$coddisci1','$coddisci2','$coddisci3');";

$conexao->query($sql);
echo ("Os registros que foram inseridos com sucesso são: " . "<br> Codcurso: " .$codcurso .
"<br> Nome do curso: " .$nomecurso . "<br> Código da disciplina 1: " .$coddisci1 . "<br> Código da disciplina 2: " .$coddisci2. 
"<br> Código da disciplina 3: " .$coddisci3) ;
?>
<br>
<a href="cadcurso.html">Voltar</a>