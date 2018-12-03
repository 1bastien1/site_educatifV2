<?php
include_once  ('autoload.include.php');

$page = new Page();

$page->appendCssUrl("./CSS/maths.css");

$page ->appendContent(<<<INFO
    <div id="maths">
        <div class="card text-white p-1 mb-3 " style="max-width: 18rem;background-color: #6C2022;">
            <div class="card-header">Tables de multiplication</div>
            <div class="card-body">
                <h5 class="card-title">Au boulot !</h5>
                <p class="card-text">Ici tu va devoir répondre à des calculs sur les tables de multiplications, rien de bien compliqué <i class="em em-nerd_face"></i> quand tu as finit appuis sur le bouton "OK!" <i class="em em-ok"></i>
                </p>
                
            </div>
        </div>
    </div>

INFO
);

//ajouter bouton de résultat via php et les utiliser via ajax + css div contenant choix table
$page->AppendContent(<<<CHOIXTABLE
        
<div class="mx-auto">
  
      <div class="dropdown ml-5 mt-5 mr-5 mb-5">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Choix Table
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <button class="dropdown-item" type="button" value="0">Toutes les tables</button>
          <button class="dropdown-item" type="button" value="1">Table de 1</button>
          <button class="dropdown-item" type="button" value="2">Table de 2</button>
          <button class="dropdown-item" type="button" value="3">Table de 3</button>
          <button class="dropdown-item" type="button" value="4">Table de 4</button>
          <button class="dropdown-item" type="button" value="5">Table de 5</button>
          <button class="dropdown-item" type="button" value="6">Table de 6</button>
          <button class="dropdown-item" type="button" value="7">Table de 7</button>
          <button class="dropdown-item" type="button" value="8">Table de 8</button>
          <button class="dropdown-item" type="button" value="9">Table de 9</button>
          <button class="dropdown-item" type="button" value="10">Table de 10</button>
          </div>
        </div>
  </div>
    

CHOIXTABLE
);

//le sernier div permet de fermer le conteneur 
$page->appendContent(<<<CALCUL
  <h1><span class="badge badge-danger">7 x 7 = </span></h1>
  <input type="text" class="form-control " id="reponse" aria-describedby="emailHelp" placeholder="Alors ? Combien ça fait ?">
  <small id="reponseHelp" class="form-text text-muted">Trouve la réponse :p .</small>
  <button class="dropdown-item" type="button" value="10">OK !</button>



CALCUL
);





$html = $page->toHTML();
echo($html);



