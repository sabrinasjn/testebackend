<?php
include 'conexao.php';
$query = "SELECT * FROM perfil ORDER BY id_perfil DESC";
$result = mysqli_query($conexao, $query);
echo " <div class=\"container mt-3\"> <h1>LISTA DE PERFIS</h1> <table class=\"table table-dark table-hover\"> <thead> <tr> <th> Id </th> <th>id_perfil</th> <th>perfil</th> <th> Alterar </th> <th> Excluir </th> </tr> </thead> ";



while ($linha = mysqli_fetch_array($result))

{
    echo "<tbody><tr><td>$linha[id_perfil]</td>
        <td>$linha[perfil]</td>
        <td><a href='alt_perfil.php?id_perfil=$linha[id_perfil]' onclick=\"return confirm('Deseja realmente alterar: $linha[perfil]?');\">Alterar</a></td>
          <td><a href='exc_perfil.php?id_perfil=$linha[id_perfil]' onclick=\"return confirm('Deseja realmente excluir: $linha[perfil]?');\">Excluir</a></td>
    ";
}
echo "</table> </tbody> </div>";
mysqli_close($conexao);
?>
