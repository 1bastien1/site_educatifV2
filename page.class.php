<?php

include_once("./autoload.include.php");

class Page extends WebPage
{
    
    
    public function __construct() 
    {
        
        parent::__construct("L'école numérique");
        
        parent::appendToHead(<<<HEAD

        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS / CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            

            <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
            <!-- emoji css @https://afeld.github.io/emoji-css/ -->
            <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

HEAD
    );
        

        parent::appendContent(<<<CARD
        
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6C2022;">
                <a class="navbar-brand" href="./index.php"><img src="./img/icone.png" width="45" height="45" alt="icone"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <form class="form-inline">
                    <a href="./maths.php"> <button class="btn btn-sm btn-outline-secondary" type="button">Maths <i class="em em-100"></i></button> </a>
                    <a href="./fr.php"><button class="btn btn-sm btn-outline-secondary" type="button">Français <i class="em em-book"></i> </button> </a>
                    <a href="./anglais.php"><button class="btn btn-sm btn-outline-secondary" type="button">Anglais <i class="em em-closed_book"></i></button> </a>
                </form>
            </nav>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
CARD
    );

    }

}
