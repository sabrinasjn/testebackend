<?php

//include 'menu.php';
include 'conexao.php';

$query = "SELECT * FROM usuario ORDER BY id_usuario DESC";
//query do mysql workbench
$result = mysqli_query($conexao, $query);
//variável recebe uma função que acessa o banco de dados e recebe os parâmetros:
//query do mysql e a conexão necessária, além de executar a query
echo " <div class=\"container mt-3\"> <h1>LISTA DE USUARIOS</h1> <table class=\"table table-dark table-hover\"> <thead> <tr> <th> Id </th> <th> Perfil</th> <th> Nome</th> <th>Login</th> <th>email</th> <th> Alterar </th> <th> Excluir </th> </tr> </thead> ";

//var_dump($result);

while ($linha = mysqli_fetch_array($result))
//função que recebe uma variável e retorna uma matriz
{
    echo "<tbody><tr><td>$linha[id_usuario]</td>
        <td>$linha[perfil_usuario]</td>
        <td>$linha[nome]</td>
        <td>$linha[login]</td>
        <td>$linha[email]</td>
        <td><a href='alt_usuario.php?id_usuario=$linha[id_usuario]' onclick=\"return confirm('Deseja realmente alterar: $linha[login]?');\">Alterar</a></td>
          <td><a href='exc_usuario.php?id_usuario=$linha[id_usuario]' onclick=\"return confirm('Deseja realmente excluir: $linha[login]?');\">Excluir</a></td>
    "; //A interrogação depois do exc_usuario.php tem como objetivo passar um parâmetro,
    //no caso a variável que contém os atributos é $linha
    //ela recebe o atributo 'id_usuario' que é chave primária.
}
echo "</table> </tbody> </div>";
mysqli_close($conexao);
?>
