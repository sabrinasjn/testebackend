
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
          <?php include 'menu.php'; ?>  
    </ul>
  </div>

</nav>
    <title>Excluir Animal</title>
</head>
<body>
    
</body>
</html>
<?php
                                            // Colocar o nome do banco de dados onde for necessário
include 'conexao.php';
$id_animal = $_GET['id_animal'];
                        //alterar o "DELETE" se for necessário
 $query = "DELETE FROM animal WHERE id_animal = $id_animal"; 
$result = mysqli_query($conexao,$query);
if ($result) {
    echo "O animal: $nome foi deletado";

}else {
    echo "O animal não pôde ser deletado".mysqli_error($conexao);
}

mysqli_close($conexao);
header("Location: cad-animal.php");
?>
