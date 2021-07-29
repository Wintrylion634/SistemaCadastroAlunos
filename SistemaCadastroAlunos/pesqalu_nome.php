<meta charset="UTF-8">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
body{
    font-family:'Rubik', sans-serif;
    text-align: center;
    align: center;
}
th#titulo{
   background: #FFD700;
   font-weight: bold;
}
table{
    border-color: #FFD700;
    box-shadow:2px 2px 3px black 
}

</style>

<?php
$conexao = new mysqli("localhost", "root", "", "escola");
mysqli_set_charset($conexao,'UTF8');

$nome= $_POST["txtNome"];

$sql = "SELECT * FROM alunos where nome like '%$nome%'
order by nome"; 

$res = mysqli_query($conexao,$sql);
    echo '<table border="1">
        <tr>
            <th style="width:1324px" id="titulo"><p align="center">Alunos em Ordem Alfabética</p></th>
        </tr>
        </table>';


    echo '<table border="1">
        <tr>
            <th style="width:250px"><p align="center">Matricula</p></th>
            <th style="width:250px"><p align="center">Nome</p></th>
            <th style="width:300px"><p align="center">Endereço</p></th>
            <th style="width:250px"><p align="center">Cidade</p></th>
            <th style="width:250px"><p align="center">Cód.Curso</p></th>
        </tr>
    </table> '; 

    while($select = mysqli_fetch_array($res, MYSQLI_BOTH)) {
        echo '<table border="1">
        <tr>
            <td style="width:250px"><p align="center">'.$select["matricula"].'</p></td>
            <td style="width:250px"><p align="center">'.$select["nome"].'</p></td>
            <td style="width:300px"><p align="center">'.$select["endereco"].'</p></td>
            <td style="width:250px"><p align="center">'.$select["cidade"].'</p></td>
            <td style="width:250px"><p align="center">'.$select["codcurso"].'</p></td>
        </tr>
    </table>' ;
       }

?>
<br>
<a href="pesqalu_nome.html">Voltar</a> <br>
<a href="index.html">Voltar ao menu principal</a>
