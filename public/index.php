<?php

    require realpath(__DIR__ . '/..') . '/app/config.php';
    require realpath(__DIR__ . '/..') . '/vendor/autoload.php';
    require realpath(__DIR__ . '/..') . '/app/class/SystemCore/views.php';
    require realpath(__DIR__ . '/..') . '/app/class/SystemCore/router/route.php';
    require realpath(__DIR__ . '/..') . '/app/class/SystemCore/router/router.php';

    if (!empty($_GET['url'])) { $URL = $_GET['url']; } else { $URL = '/'; }

    $router     = new \SystemCore\Router($URL);
    $views      = new views($OPTS);

    $router->get('/', function() use ($views) { $views->_get('dashboard'); });

    $router->get('/FSPRT', function() { echo 'En cours de développement'; });

    $router->get('/casier-judiciaire', function() use ($views) { $views->_get('record', 'criminal/'); });

    $router->get('/citoyens-vigilants', function() { echo 'En cours de développement'; });

    $router->get('/espace-juridique', function() use ($views) { $views->_get('legal-space'); });

    $router->run();

?>