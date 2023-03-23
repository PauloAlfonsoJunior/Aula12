<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     require_once 'Mamifero.php';
     require_once 'Reptil.php';
     require_once 'Peixe.php';
     require_once 'Ave.php';
     require_once 'Canguru.php';
     require_once 'Cachorro.php';
     require_once 'Cobra.php';
     require_once 'Tartaruga.php';
     require_once 'GoldFish.php';
     require_once 'Arara.php';

     $m = New Mamifero();
     $a = New Ave();
     $r = New Reptil();
     $c = New Canguru();
     $k = New Cachorro();
     $t = New Tartaruga();
     $p = New Peixe();
     $g = New GoldFish();
    
     //$m->locomover();
     //$c->locomover();
     //$k->locomover();
     //$t->locomover();
     $g->locomover();


     //$m->emitirsom();
     //$k->emitirsom();
     //$c->emitirsom();
     //$a->emitirSom();
     //$p->emitirSom();  
     //$g->emitirSom();    
    ?>
</body>
</html>