<?php
include 'menu.php';

if(isset($_POST['id_classe']) && isset($_POST['classe'])){
                                                //colocar o nome do banco de dados onde for necessário
    $id_classe = $_POST['id_classe'];
    $classe = $_POST['classe'];
    include 'conexao.php';
    $query = "UPDATE classe SET classe='$classe' WHERE id_classe=$id_classe";
    $resultado = mysqli_query($conexao, $query);
    echo $resultado;

    if ($resultado) 
    {
        echo "A Classe do animal:$classe foi alterada com sucesso!";
    }else{
        echo "A Classe não pode ser alterada!" . mysqli_error($conexao);
    }
    mysqli_close($conexao);
    header("Location: cad-classe.php");
}
?>