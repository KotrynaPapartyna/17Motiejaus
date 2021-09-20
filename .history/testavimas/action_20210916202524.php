<?php require_once("../connection.php"); ?>


<?php 

    $sortOrder = $_GET["sortOrder"];
    echo $sortOrder;

?>

<table>

<?php 
            
            $sql = "SELECT knygos.ID, knygos.pavadinimas, knygos.santrauka, autoriai.vardas, autoriai.pavarde FROM `knygos` 
            LEFT JOIN autoriai ON knygos.autoriai_id = autoriai.ID
            WHERE 1
            ORDER BY knygos.ID
            ";

            $result = $conn->query($sql);

            while($books = mysqli_fetch_array($result)) {
                echo "<tr>";
                   echo "<td>". $books["ID"]."</td>";
                   echo "<td>". $books["pavadinimas"]."</td>";
                   echo "<td>". $books["santrauka"]."</td>";
                   echo "<td>". $books["vardas"]."</td>";
                   echo "<td>". $books["pavarde"]."</td>";
                echo "</tr>";
            }
            
?>

</table>