<?php
include 'menu.php';

if(isset($_POST['id_animal']) && isset($_POST['classe_animal']) && isset($_POST['nome']) &&  isset($_POST['peso'])&& isset($_POST['sexo']) && isset($_POST['data_de_nascimento'])&& 
isset($_FILES['foto'])){
                                            
   
    $id_animal = $_POST['id_animal'];
    $classe_animal = $_POST['classe_animal'];
    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $foto = $_FILES['foto'];
    $pasta = "img/";
    $pastafoto = $pasta . basename($_FILES['foto']['name']);
    $foto = $_FILES['foto']['name'];
    $resultadofoto = move_uploaded_file($_FILES['foto']['tmp_name'], $pastafoto);
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d H:i:s');
    include 'conexao.php';
    $query = "UPDATE animal SET classe_animal='$classe_animal', nome='$nome', peso='$peso', sexo='$sexo', data_de_nascimento='$data_de_nascimento', foto='$foto' WHERE id_animal = $id_animal";
    $resultado = mysqli_query($conexao, $query);
    echo $resultado;
    
    if ($resultado) 
    {
        echo "O animal:$nome foi alterado com sucesso!";
    }else{
        echo "O animal não pode ser alterado!" . mysqli_error($conexao);
    }

    mysqli_close($conexao);
    header("Location: cad-animal.php");
echo '<script>window.location.replace("http://10.10.9.162/agrosistema/lista-animal.php")</script>';




}
?>