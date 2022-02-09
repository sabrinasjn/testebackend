<!DOCTYPE html>

<html lang="pt-br">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

     
          <h2>Lista de Classes</h2>
          
          <table class="striped" class="highlight" class="centered" class="responsive-table" >
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Classe</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
               </tr>
                    </thead>
                    
                         <tbody>
          <?php
          include 'conexao.php';



          $query = "SELECT id_classe, classe FROM classe";
          $result = mysqli_query($conexao, $query);

          while ($linha = mysqli_fetch_array($result)) {

               echo "
                          <tr>
                             <td> $linha[id_classe] </td>
                             <td>   $linha[classe] </td>
                             <td>  <a href='alt-classe.php?id_classe=$linha[id_classe]'>Alterar</a></td>
                             <td> <a href='exc-classe.php?id_classe=$linha[id_classe]' onclick=\"return confirm('Deseja realmente excluir:$linha[classe]?'); \">Excluir</a></td>
                           </tr>   
                    
               ";
          }
          mysqli_close($conexao);
         // <a href='contato.php?id_classe=$linha[id_classe]'>
          
          ?>
</tbody>
               </table>
</body>

</html>
