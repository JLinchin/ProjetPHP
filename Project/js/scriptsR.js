//Complete la barre de recherche avec le resultat
//Inutile
function fill(Value) {

    $('#zoneRecherche').val(Value);
    $('#display').hide();
 
 }
 
 $(document).ready(function() {
 
    //Appel de la fonction à chaque fois qu'une touche est appuyé
 
    $("#zoneRecherche").keyup(function() {
 
        var titre = $('#zoneRecherche').val();
 
        if (titre == "") {
 
            $("#display").html("");
 
        }
 
        else {
 
            $.ajax({
 
                type: "POST",
                url: "../Controlers/recherche.php",
                data: {
                    zoneRecherche: titre
                },
                success: function(html) {
 
                    $("#display").html(html).show();
 
                }
 
            });
        }
    });
 });