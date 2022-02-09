<!DOCTYPE html>

<html lang="pt-br">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

     
          <h2>Lista de Animais</h2>
          
          <table class="striped" class="highlight" class="centered" class="responsive-table" >
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Classe</th>
                    <th>Nome</th>
                    <th>Peso</th>
                    <th>Sexo</th>
                    <th>Data de nascimento</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
               </tr>
                    </thead>
                    
                         <tbody>
          <?php
          include 'conexao.php';



          $query = "SELECT id_animal, classe_animal, nome, peso, sexo, data_de_nascimento FROM animal";
          $result = mysqli_query($conexao, $query);

          while ($linha = mysqli_fetch_array($result)) {

               echo "
                          <tr>
                             <td> $linha[id_animal] </td>
                             <td>  $linha[classe_animal] </td>
                             <td>  $linha[nome] </td>
                             <td>  $linha[peso]</td>
                             <td>  $linha[sexo]</td>
                             <td>  $linha[data_de_nascimento]</td>                             
                             <td>  <a href='alt-animal.php?id_animal=$linha[id_animal]'>Alterar</a></td>
                             <td> <a href='exc-animal.php?id_animal=$linha[id_animal]' onclick=\"return confirm('Deseja realmente excluir:$linha[nome]?'); \">Excluir</a></td>
                           </tr>   
                    
               ";
          }
          mysqli_close($conexao);
         // <a href='contato.php?id_animal=$linha[id_animal]'>
          
          ?>
</tbody>
               </table>
</body>

</html>