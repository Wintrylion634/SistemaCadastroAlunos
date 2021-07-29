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

$sql = "SELECT * FROM disciplinas where nomedisciplina like '%$nome%'
order by nomedisciplina"; 

$res = mysqli_query($conexao,$sql);
    echo '<table border="1">
        <tr>
            <th style="width:507px" id="titulo"><p align="center"> Disciplinas em Ordem Alfabética</p></th>
        </tr>
        </table>';


    echo '<table border="1">
        <tr>
            <th style="width:250px"><p align="center">Coddisciplina</p></th>
            <th style="width:250px"><p align="center">Nomedisciplina</p></th>
        </tr>
    </table> '; 

    while($select = mysqli_fetch_array($res, MYSQLI_BOTH)) {
        echo '<table border="1">
        <tr>
            <td style="width:250px"><p align="center">'.$select["coddisciplina"].'</p></td>
            <td style="width:250px"><p align="center">'.$select["nomedisciplina"].'</p></td>
        </tr>
    </table>' ;
       }

?>
<br>
<a href="pesqdisc_nome.html">Voltar</a> <br>
<a href="index.html">Voltar ao menu principal</a>
