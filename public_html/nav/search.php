<?php

include_once 'config/conexaoBD.php';
$keyword = filter_input(INPUT_POST, 'txt-buscar');
$conn = conexaoBD();
$sql = "SELECT * FROM single WHERE titulo_single LIKE ? OR conteudo_single LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, "%$keyword%");
$stmt->bindValue(2, "%$keyword%");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<div class=\"table-responsive\">";
echo "<table class=\"table table-striped\">";
echo "<thead>
            <tr>                  
              <th>Id</th>
              <th>Titulo</th>
            </tr>
     </thead>";
echo "<tbody>";
foreach ($resultado as $res) { 
    $id_single = $res['id_single'];
    $titulo_single = $res['titulo_single'];
    echo "<tr>" .
            "<td><a title=\"$titulo_single\" href=\"index.php?pag=$id_single\">" . $res['id_single'] . "</a></td>" .
            "<td><a title=\"$titulo_single\" href=\"index.php?pag=$id_single\">" . $res['titulo_single'] . "</a></td>"
    . "</tr>";   
}
echo "</tbody>";
echo "</table>";
echo "</div>";



