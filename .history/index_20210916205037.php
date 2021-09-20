<?php    
    require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17 paskaita</title>
    <?php require_once("includes.php"); ?>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            
            <tr>
                <th class="sort-heading" id="id-asc">ID 
                    <i class="fa fa-arrow-up"></i>
                    <i class="fa fa-arrow-down"></i>
                </th>
                <th class="sort-heading" id="pavadinimas-asc">Pavadinimas 
                    <i class="fa fa-arrow-up"></i>
                    <i class="fa fa-arrow-down"></i>
                </th>
                <th class="sort-heading" id="santrauka-asc">Santrauka 
                    <i class="fa fa-arrow-up"></i>
                    <i class="fa fa-arrow-down"></i>
                </th>
                <th class="sort-heading" id="vardas-asc">Autoriaus vardas 
                    <i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i></th>
                <th class="sort-heading" id="pavarde-asc">Autoriaus pavardė <i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i></th>
            </tr>
            
            <?php 
            
            $sql = "SELECT knygos.ID, knygos.pavadinimas, knygos.santrauka, autoriai.vardas, autoriai.pavarde FROM `knygos` 
            LEFT JOIN autoriai ON knygos.autoriai_id = autoriai.ID
            WHERE 1";

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
    </div>
    <?php 
    //ajax - tai yra irankis, kuris mums be perkrovimo leidzia kreiptis i duomenu
    
    //1. nauja duomenu baze, knygos ir autoriai
    //2. knygos
        // ID - unikalus numeris
        // Pavadinimas - 
        // Santrauka - 
        //autoriai_id -
    //3. autoriai
        // ID 
        // Varda
        // Pavarde
        // Slapyvardis
    //4. left join
    
    //5. Pameginsime atvaizduoti lenteleje

    //6. Rikiavimas pagal stulpelius. AJAX principu.



    ?>

    <script src="script.js"></script>
</body>
</html>