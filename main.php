<?php
require_once __DIR__.'/vendor/autoload.php';

$app      = new Silex\Application();
$mdRender = new Michelf\MarkdownExtra();

$app->get('/', function () use ($app, $mdRender) {
    $mdDocs  = file_get_contents('public/kameleon_docs.md', true);
    $content = $mdRender->transform($mdDocs);

    ob_start();
    include 'view/template.php';
    return ob_get_clean();
})
;
$app->run();
