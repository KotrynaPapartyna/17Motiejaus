<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Ajax</title>

    <?php require_once("../includes.php"); ?>


</head>
<body>
    <?php //parodysim visas knygas ?>
    <button id="show">Parodyk knygas</button>
    



    <i class="fa fa-arrow-up sort-heading" id="desc-knygos-ID"></i>
    <i class="fa fa-arrow-down sort-heading" id="asc-knygos-ID "></i>
    
    <i class="fa fa-arrow-up desc" id="desc-knygos-pavadinimas"></i>
    <i class="fa fa-arrow-down asc" id="asc-knygos-pavadinimas"></i>
    
    <i class="fa fa-arrow-up desc" id="desc-knygos-santrauka"></i>
    <i class="fa fa-arrow-down asc" id="asc-knygos-santrauka"></i>
    
    <i class="fa fa-arrow-up desc" id="desc-autoriai-vardas"></i>
    <i class="fa fa-arrow-down asc" id="asc-autoriai-vardas"></i>
    
    <i class="fa fa-arrow-up desc" id="desc-autoriai-pavarde"></i>
    <i class="fa fa-arrow-down asc" id="asc-autoriai-pavarde"></i>
    
    
    
    <div id="result">

    </div>
    
    <script src="script_test.js"></script>
</body>
</html>