<?php require_once("connection.php"); ?>


<?php 

    $sortOrder = $_GET["sortOrder"]; //desc-knygos-ID

    $sortArray = explode("-", $sortOrder);

    // $sortArray[0] = "desc"; //rikiavimo kintamasis
    // $sortArray[1] = "knygos"; //duomenu bazes lenteles pavadinimas
    // $sortArray[2] = "ID"; //stulpelio pavadinimas

    $sort=$sortArray[0]; // rikiavimo kintamasis
    $tableName = $sortArray[1]; //lenteles pavadinimas
    $columnName = $sortArray[2]; // stulpelio pavadinimas 

    // echo $sortOrder;

?>

<table class="table table-striped">

<tr>
                    <th>ID 
                        <i class="fa fa-arrow-up sort-heading" id="desc-knygos-ID"></i>
                        <i class="fa fa-arrow-down sort-heading" id="asc-knygos-ID"></i>
                    </th>
                    <th>Pavadinimas 
                        <i class="fa fa-arrow-up sort-heading" id="desc-knygos-pavadinimas"></i>
                        <i class="fa fa-arrow-down sort-heading" id="asc-knygos-pavadinimas"></i>
                    </th>
                    <th>Santrauka 
                        <i class="fa fa-arrow-up sort-heading" id="desc-knygos-santrauka"></i>
                        <i class="fa fa-arrow-down sort-heading" id="asc-knygos-santrauka"></i>
                    </th>
                    <th>Autoriaus vardas 
                        <i class="fa fa-arrow-up sort-heading" id="desc-autoriai-vardas"></i>
                        <i class="fa fa-arrow-down sort-heading" id="asc-autoriai-vardas"></i>
                    </th>
                    <th>Autoriaus pavardė 
                        <i class="fa fa-arrow-up sort-heading" id="desc-autoriai-pavarde"></i>
                        <i class="fa fa-arrow-down sort-heading" id="asc-autoriai-pavarde"></i>
                    </th>
                </tr>

<?php 
            
            $sql = "SELECT knygos.ID, knygos.pavadinimas, knygos.santrauka, autoriai.vardas, autoriai.pavarde FROM `knygos` 
            LEFT JOIN autoriai ON knygos.autoriai_id = autoriai.ID
            WHERE 1
            ORDER BY $tableName.$columnName $sort
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