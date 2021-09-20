$(document).ready(function() {
    
    
    
    
    //paprasta Javascript
    // document.querySelector("#show").addEventListener("click", function() {
    //     //"veiksmai"
    // });

    //Jquery 
    $("#show").click(function() {
        //mygtuko show paspaudimas
        console.log("Jquery pasirinkimas veikia");

        $.ajax({
            url: "action.php",
            type: "get", // method get/post
            success: function(response) {
                $("#result").html(response);

                // document.querySelector("#result").innerHtml = response;
                // document.querySelector("#output").innerHTML = this.responseText; // 

            }
        });

    });

    //rodykliu paspaudimai

    $(".asc, .desc").click(function() {
        //mygtuko show paspaudimas

        var pressedButton = $(this); //sugeba atskirti elementa kuris yra paspaustas
        var sortOrder = pressedButton //rikiavimo tvarka

        console.log("Rodykle paspausta");

        // $.ajax({
        //     url: "action.php",
        //     type: "get", // method get/post
        //     success: function(response) {
        //         $("#result").html(response);
                 
        //         // document.querySelector("#result").innerHtml = response;
        //         // document.querySelector("#output").innerHTML = this.responseText; // 

        //     }
        // });

    });




});