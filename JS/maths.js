window.onload = function () {

        var number; //valeur qui va changer à chaque calcul
        var numberBis; //valeur de la table choisie
        var res = 0 ;
        var resHuman = 0;
         
        
        localStorage.setItem("tableChoisie", 0);
        localStorage.setItem("bonneRep", 0);
        localStorage.setItem("totalRep", 0);

    //au click du bouton de choix des tables...
    $( ".dropdown-item" ).click(function() {

        number = Math.floor(Math.random() * (10-0) + 0 ); //entier entre 0 et 10 inclus;
        localStorage.setItem("tableChoisie", parseInt( $(this).val(), 10) );
        if($(this).val() == 0){ //toutes les tables
          numberBis = Math.floor(Math.random() * (10-0) + 0 ); 
          //$("#dropdownTable").text("Toutes les tables");
          $("#spanTable").text( "Toutes les tables ");
          $("#spanCalcul").text(numberBis + " x " +number);
        }
        else{ //une table particulière
          $("#spanTable").text ("Table de "+$(this).val());
          numberBis = parseInt( $(this).val(), 10 );
          //$("#dropdownTable").html("Table de "+ $(this).val());
          $("#spanCalcul").html($(this).val() +" x " +number);
          
        }  
        res = parseInt(number*numberBis, 10); //parseInt inutil
        console.log("valeur table ->"+$(this).val());
        console.log("number -> " +number + " | numberBis -> "+ numberBis +" || res -> "+res);
      });

      
        $("#inputCalcul").change(function() {
          console.log(($(this).val()));
          resHuman = parseInt($(this).val(), 10);
        } );

        //au click du bouton ok ...
        $("#finish").click(function(){
          localStorage.setItem("totalRep", parseInt(localStorage.getItem("totalRep"), 10)+1); //on ajoute une réponse au compteur total dans tous les cas
            
          if(res == resHuman){
              localStorage.setItem("bonneRep", parseInt( localStorage.getItem("bonneRep"), 10)+1); //on ajoute une réponse au compteur des bonnes réponses
              bravo("okNotok");
            }
            else if(res != resHuman){
             dommage("okNotok");
            }
         });


        async function bravo(id) {
          $("#"+id+"").html(`<div class="alert alert-success" role="alert">
          Bravo tu as trouvé le résultat ! <i class="em em-upside_down_face"></i>  ${localStorage.getItem("bonneRep")} bonne réponces sur ${localStorage.getItem("totalRep")}
          </div")`);
          $("#"+id+"").delay(2000);
          newCalcul();
        }
        async function dommage(id){
          $("#"+id+"").html(`<div class="alert alert-danger ml-5" role="alert">
          Dommage <i class="em em-face_palm"></i> ${localStorage.getItem("bonneRep")} bonne réponces sur ${localStorage.getItem("totalRep")}. La bonne réponse était : ${res}
        </div>`);
        $("#"+id+"").delay(2000);
        newCalcul();
        }

        function newCalcul(){ 
          //on remet le input vide
          $("#inputCalcul").val("");
          var numberOld = number;
          var numberBisOld = numberBis;

          if(localStorage.getItem("tableChoisie") == 0){ //toutes les tables
            while(numberOld == number || numberBis == numberBisOld)
            {
              number = Math.floor(Math.random() * (10-0) + 0 ); //entier entre 0 et 10 inclus;
              numberBis = Math.floor(Math.random() * (10-0) + 0 );
            }
            $("#spanCalcul").text(numberBis + " x " +number);
          }
          else{ //une table particulière
            while(numberOld == number)
            {
              number = Math.floor(Math.random() * (10-0) + 0 ); //entier entre 0 et 10 inclus;
            }
            numberBis = localStorage.getItem("tableChoisie");
            $("#spanCalcul").html(localStorage.getItem("tableChoisie") +" x " +number);
          }

          res = number*numberBis;  
          console.log("valeur table ->"+ localStorage.getItem("tableChoisie"));
          console.log("number -> " +number + " | numberBis -> "+ numberBis +" || res -> "+res);
          
        }

        
        





  }


