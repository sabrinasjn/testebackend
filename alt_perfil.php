<?php
//include 'menu.php';
include 'conexao.php';
//var_dump($_GET);
if (isset($_GET['id_perfil'])) {
    $id_perfil = $_GET['id_perfil'];
    $query = "SELECT * FROM perfil WHERE id_perfil=$id_perfil";
    $result = mysqli_query($conexao, $query);
    //var_dump($result);
    $linha = mysqli_fetch_array($result);

}else {
    //echo '<script>window.location.replace("http://localhost/agrosistema/erro.php")</script>';
    
}
mysqli_close($conexao);
?>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTERAÇÃO DE PERFIL</title>
</head>
<body>
<div class="container mt-3">
      <h1>ALTERAÇÃO DE PERFIL</h1>
      <form name="fromperfil" method="post" action="confalt_perfil.php" id="FORM" class="form-control">
      <div class="mb-3">
        <label class="form-label">PERFIL</label> <input type="text" class="form-control" name="perfil"autofocus required value="<?php echo $linha['perfil'];?>">
      </div>

      <button type="submit" id="submit" name="button" value="Alterar" title="ALTERAR" class="btn btn-primary">Alterar</button>
      <input type="hidden" name="id_perfil" value="<?php echo $linha['id_perfil']; ?>">

      </form>
</div>
</body>
</html>