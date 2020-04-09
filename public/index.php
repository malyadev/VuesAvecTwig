<?php
require_once '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$beers = ['Corona', 'Mort subite', 'Leffe Blonde', 'Duvel Triple', 'Blanche du Mont Blanc', 'Chouffe'];


echo $twig->render('index.html.twig', ['beers' => $beers] );


?>
