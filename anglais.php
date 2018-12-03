<?php
include_once  ("./autoload.include.php");


$page = new Page();


$page->appendContent(<<<TEXT

<div class="card text-white p-1 mb-3" style="max-width: 18rem;background-color: #6C2022;">
        <div class="card-header">Hello World !</div>
        <div class="card-body">
            <h5 class="card-title">Bienvenue sur mon site !</h5>
            <p class="card-text">tu pourra faire des exercices, apprendre ta leçon et t'amuser si tu es sage <i class="em em-smile"></i> .<br> Attention je te surveille <i class="em em-male-technologist"></i> .</p>
        </div>
    </div>
    
TEXT
);

$page->appendCssUrl("CSS/anglais.css");
$html = $page->toHTML();
echo($html);