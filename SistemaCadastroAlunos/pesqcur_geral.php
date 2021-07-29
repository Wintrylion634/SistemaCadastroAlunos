<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body{
    font-family:'Rubik', sans-serif;
    text-align: center;
    align: center;
}

th#titulo{
    font-weight: bold;
    background: #FFD700;
}

table{
    border-color: #FFD700;
    box-shadow:2px 2px 3px black 
}
</style>
<?php
$conexao = new mysqli("localhost", "root", "", "escola");
mysqli_set_charset($conexao,'UTF8');

$sql = "SELECT * FROM cursos ORDER BY nome";

$res = mysqli_query($conexao,$sql);
    echo '<table border="1">
    <tr>
    <th style="width:1324px" id="titulo"><p align="center">Cursos em Ordem Alfabética</p></th>
    </tr>
    </table>';


    echo '<table border="1">  
        <tr>
            <th style="width:250px"><p align="center">Cód.Curso</p></th>
            <th style="width:250px"><p align="center">Nome</p></th>
            <th style="width:300px"><p align="center">Cod.disc1</p></th>
            <th style="width:250px"><p align="center">Cod.disc2</p></th>
            <th style="width:250px"><p align="center">Cod.disc3</p></th>
        </tr>
    </table> '; 

while($select = mysqli_fetch_array($res, MYSQLI_BOTH)) {
    echo '<table border="1">
    <tr>
        <td style="width:250px"><p align="center">'.$select["codcurso"].'</p></td>
        <td style="width:250px"><p align="center">'.$select["nome"].'</p></td>
        <td style="width:300px"><p align="center">'.$select["coddisc1"].'</p></td>
        <td style="width:250px"><p align="center">'.$select["coddisc2"].'</p></td>
        <td style="width:250px"><p align="center">'.$select["coddisc3"].'</p></td>
    </tr>
</table>' ;
   }

?>

<br>

<a href="index.html">Voltar ao menu principal</a>