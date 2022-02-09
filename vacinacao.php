<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!DOCTYPE html>


    <title>Cadastro de vacinação</title>
</head>

<body>
    <h1>Cadastro de Vacinação</h1>


<form name="FrmAnimal" action="" method="post">

Animal: <select class="form-control" name="id_animal">
        <?php
        
            include 'conexao.php';
            $query = "SELECT id_animal, nome FROM animal";
            $resultado = mysqli_query($conexao,$query);
            
            while($linha = mysqli_fetch_array($resultado))
            
            {
                    echo "<option value='$linha[id_animal]'>$linha[nome]</option>";

            }
        ?>
        </select><br><br>
        Vacina: <select class="form-control" placeholder="INFORME UMA VACINA" name="id_vacina" >
        <?php
            include 'conexao.php';
            $query = "SELECT id_vacina, vacina, quantidade FROM vacina";
            $resultado = mysqli_query($conexao,$query);
            
            while($linha = mysqli_fetch_array($resultado))
            
            {
                    echo "<option value='$linha[id_vacina]'>$linha[vacina]-$linha[quantidade]</option>";

            }
        ?>
        </select><br><br>
        <hr>
        <input type="submit" value="Enviar" placeholder="ENVIAR"><br><br>    
    </form>


    <?php
if (isset($_POST['id_animal']) && isset($_POST['id_vacina'])) {
    

$id_animal = $_POST['id_animal'];
$id_vacina = $_POST['id_vacina'];

include 'conexao.php';

 $queryselect = "select quantidade FROM vacina where id_vacina=$id_vacina";

 
$resultadoselect = mysqli_query($conexao, $queryselect);
$linhaselect = mysqli_fetch_array($resultadoselect);

if($linhaselect['quantidade']==0){

    include 'email.php';
    //echo '<script>window.location.replace("http://10.10.9.162/agrosistema/index.php")</script>';
}
$query = "update  animal set vacina_animal='$id_vacina' where id_animal='$id_animal'";
$resultado = mysqli_query($conexao, $query);

if ($resultado) {

    echo "Vacina cadastrado com sucesso";
    $query2 = "update  vacina set quantidade=quantidade - 1 where id_vacina='$id_vacina'"; 
    $resultado2 = mysqli_query($conexao, $query2);

} else {
    echo "Erro ao cadastrar";

}


}


?>
    