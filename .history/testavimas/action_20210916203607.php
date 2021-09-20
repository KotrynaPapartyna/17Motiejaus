<?php require_once("../connection.php"); ?>


<?php 

    $sortOrder = $_GET["sortOrder"]; //desc-knygos-ID

    $sortArray = explode("-", $sortOrder);

    // $sortArray[0] = "desc"; //rikiavimo kintamasis
    // $sortArray[1] = "knygos"; //duomenu bazes lenteles pavadinimas
    // $sortArray[2] = "ID"; //stulpelio pavadinimas

    $sort=$sortArray[0]; // rikiavimo kintamasis
    $tableName = $sortArray[1]; //lenteles pavadinimas
    $columnName = $sortArray[2] 

    // echo $sortOrder;

?>

<table>

<?php 
            
            $sql = "SELECT knygos.ID, knygos.pavadinimas, knygos.santrauka, autoriai.vardas, autoriai.pavarde FROM `knygos` 
            LEFT JOIN autoriai ON knygos.autoriai_id = autoriai.ID
            WHERE 1
            -- ORDER BY knygos.ID $sortOrder
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