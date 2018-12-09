window.onload = function () {

        var number = Math.floor(Math.random() * (10-0) + 0 ); //entier entre 0 et 10 inclus;
        var numberBis; //valeur de la table choisie
        var res = 0 ;
        var resHuman = 0;
         

        localStorage.setItem("tableChoisie", 0);
        localStorage.setItem("bonneRep", 0);
        localStorage.setItem("totalRep", 0);
   
    $( ".dropdown-item" ).click(function() {

        localStorage.setItem("tableChoisie", $(this).val());
        console.log("valeur table ->"+$(this).val());
        numberBis = $(this).val() //entier entre 0 et la valeur de la table exclus (+1 -> inclus)
        res = number*numberBis;
        console.log("number -> " +number + "| numberBis -> "+ numberBis +"|| res -> "+res);
        if($(this).val() == 0){ //toutes les tables
          numberBis = Math.floor(Math.random() * (10-0) + 0 );
          $("#dropdownTable").text("Toutes les tables");
          $("#spanCalcul").text(numberBis + " x " +number);
          
        }
        else{ //une table particulière
          $("#dropdownTable").text("Table de "+ $(this).val() );
          $("#spanCalcul").html($(this).val() +" x " +number);
          //commennt juste changer le texte entre les balises du button?
        }  
      });

      
        $("#inputCalcul").change(function() {
          console.log(($(this).val()));
          resHuman = parseInt($(this).val(), 10);
        } );

        $("#form").submit(function(){
          localStorage.setItem("totalRep", localStorage.getItem("totalRep")+1);
            if(res == resHuman){
              bravo("okNotok");
              localStorage.setItem("bonneRep", localStorage.getItem("bonneRep")+1);
            }
            else if(res != resHuman){
              dommage("okNotok");
            }
         });


        async function bravo(id) {
          $("#"+id+"").html(`<div class="alert alert-success" role="alert">
          Bravo tu as trouvé le résultat ! <i class="em em-upside_down_face"></i>  ${localStorage.getItem("bonneRep")} bonne réponces sur ${localStorage.getItem("totalRep")}
          </div")`);
          $("#"+id+"").delay(5000).hide();
        }
        async function dommage(id){
          $("#"+id+"").html(`<div class="alert alert-danger ml-5" role="alert">
          Dommage <i class="em em-face_palm"></i> ${localStorage.getItem("bonneRep")} bonne réponces sur ${localStorage.getItem("totalRep")}
        </div>`);
        $("#"+id+"").delay(5000);
        }

        
        function sleep(ms) {
          return new Promise(resolve => setTimeout(resolve, ms));
        }

        function getRandomInt(max) {
          return Math.floor(Math.random() * Math.floor(max));
        }





  }


