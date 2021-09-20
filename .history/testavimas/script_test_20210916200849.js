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




});