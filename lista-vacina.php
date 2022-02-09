<!DOCTYPE html>

<html lang="pt-br">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

     
          <h2>Lista de Vacinas</h2>
          
          <table class="striped" class="highlight" class="centered" class="responsive-table" >
                    <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Vacina</th>
                    <th>Data de validade</th>
                    <th>Quantidade</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
               </tr>
                    </thead>
                    
                         <tbody>
          <?php
          include 'conexao.php';



          $query = "SELECT id_vacina, vacina, data_de_validade, quantidade FROM vacina";
          $result = mysqli_query($conexao, $query);

          while ($linha = mysqli_fetch_array($result)) {

               echo "
                          <tr>
                             <td> $linha[id_vacina] </td>
                             <td>   $linha[vacina] </td>
                             <td>  $linha[data_de_validade]</td>
                             <td>  $linha[quantidade]</td>
                             <td>  <a href='alt-vacina.php?id_vacina=$linha[id_vacina]'>Alterar</a></td>
                             <td> <a href='exc-vacina.php?id_vacina=$linha[id_vacina]' onclick=\"return confirm('Deseja realmente excluir:$linha[vacina]?'); \">Excluir</a></td>
                           </tr>   
                    
               ";
          }
          mysqli_close($conexao);
         // <a href='contato.php?id_vacina=$linha[id_vacina]'>
          
          ?>
</tbody>
               </table>
</body>

</html>