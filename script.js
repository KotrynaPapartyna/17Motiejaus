$(document).ready(function() {
    $(".sort-heading").click(function() {
        //mygtuko show paspaudimas

        //sortCollumn

        var pressedButton = $(this); //sugeba atskirti elementa kuris yra paspaustas
        
        $(".sort-heading").removeClass("arrow-active");
        //document.querySelector(".sort-heading").classList.remove("arrow-active")


        pressedButton.addClass("arrow-active");

        //document.querySelector(".sort-heading").classList.add("arrow-active")
        
        var sortOrder = pressedButton.attr("id"); //rikiavimo tvarka asc/desc

        console.log("Rodykle paspausta " + sortOrder);

        $.ajax({
            url: "action.php",
            type: "get", // method get/post
            data: {"sortOrder": sortOrder },
            success: function(response) {
                $("#result").html(response);
                 
                // document.querySelector("#result").innerHtml = response;
                // document.querySelector("#output").innerHTML = this.responseText; // 

            }
        });

    });

});