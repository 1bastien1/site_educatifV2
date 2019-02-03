<?php
include_once  ('autoload.include.php');

$page = new Page();

$page->appendCssUrl("./CSS/maths.css");
$page->appendJsUrl("./JS/maths.js");

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



//le dernier div permet de fermer le conteneur 
$page->appendContent(<<<CALCUL
    
  
    <div class= ml-5 mt-5 container">
      <div class="mx-auto">
    
        <div id="dropdownTable" class="dropdown mr-4 ">
          <button id="buttonDropdown" class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

    
    <div class="input-group">
      <div class="input-group-prepend">
        <span id="spanTable"class="input-group-text">Choix Table... </span>
        <span id="spanCalcul"class="input-group-text">0 x 0 = </span>
      </div>
      <div class="col-xs-4">
      <input type="text" pattern="^(0|[1-9][0-9]*)$" id="inputCalcul" class="form-control" aria-label="Amount (to the nearest dollar)">
      </div>
      <button id="finish" class="btn btn-danger mb-2">Ok !</button>
    </div>

      
    </div>
    <div class="form-group mx-sm-3 mb-2">
      </div>
      <div id="okNotok"></div>

CALCUL
);

$html = $page->toHTML();
echo($html);