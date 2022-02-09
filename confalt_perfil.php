<?php
if (isset($_POST['id_perfil']) && isset($_POST['perfil'])) {
    $id_perfil = $_POST['id_perfil'];
    $perfil = $_POST['perfil'];
    include 'conexao.php';
    $query = "UPDATE perfil SET perfil='$perfil'
    
    WHERE id_perfil=$id_perfil";
    $result = mysqli_query($conexao, $query);
   if ($result)
{
    echo "<h2><b>O perfil: $perfil foi alterado com sucesso!</b></h2>";
}else{
    echo "<h2><b>O perfil não pôde ser alterado!</b></h2>".mysqli_error($conexao);
}
mysqli_close($conexao);
}
?>