<?php

    require __DIR__ . '/class/autoloader.php'; 
    Autoloader::register();

    (!class_exists('OPTS') ? $OPTS = new OPTS : null);
    (!empty($_SESSION['auth']) && $_SESSION['auth'] != null ? $auth = $_SESSION['auth']: $auth = false);

    /* System core */
    $components = new \SystemCore\components($OPTS, $auth);

    $fivesockets = new \fivesockets\fivesockets($OPTS->fivesockets());

?>