<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--  atualiza a pag a cada 1min -->
    <meta http-equiv="refresh" content="60">

    <title>Alterar Vacina</title>
</head>

<?php
include_once 'menu.php';
include 'conexao.php';

if(isset($_GET['id_vacina']))
{

    $id_vacina = $_GET['id_vacina'];
    $query = "SELECT id_vacina,vacina FROM vacina WHERE id_vacina = $id_vacina";
    $resultado = mysqli_query($conexao,$query);
    $linha = mysqli_fetch_array($resultado);

}else {
    header("Location: http://localhost/sistema agropecuario/erro.php");
    exit;
}
mysqli_close($conexao);
?>

<body>
    <h1>Alterar Vacina</h1>

    <form name="Frmvacina" action="confalt-vacina.php" method="post">
        <div class="mb-3 mt-3">
           <label class="form-label" for=""> Nome:</label>
           <input class="form-control" type="text" name="vacina" placeholder="DIGITE O NOME" autofocus required value="<?php echo $linha['vacina']; ?>">  
        </div>
        
        <div class="mb-3 mt-3">
           <label class="form-label" for=""> Data de validade:</label>
           <input class="form-control" type="date" name="data_de_validade" placeholder="DIGITE O NOME" autofocus required value="<?php echo $linha['data_de_validade']; ?>">  
        </div>
        
        <div class="mb-3 mt-3">
        <label class="form-label" for="">quantidade:</label>   
            <input class="form-control" type="number" name="quantidade" placeholder="INFORME A QUANTIDADE" autofocus required value="<?php echo $linha['quantidade']; ?>">  
        </div>
        
        <button type="submit" class="btn btn-primary" value="Atualizar">Atualizar</button>
        
        <input type="hidden" name="id_vacina" value="<?php echo $linha['id_vacina']; ?>">
        
    </form>



</body>
</html>