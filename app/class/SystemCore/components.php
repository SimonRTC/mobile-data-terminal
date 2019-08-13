<?php

namespace SystemCore;

class components {

    private $OPTS;
    private $auth;

    public function __construct($OPTS, $auth = false) {
        $this->OPTS         = $OPTS;
        $this->auth         = $auth;
    }

    public function header($pagetitle = 'Sans titre', $required_auth = false, $others = false) {
        if ($others != false) {
            foreach ($others as $k=>$other) {
                ${$k} = $other;
            }
        }
        $auth = $this->auth;
        if ($required_auth == false || $auth != false) {
            return require realpath(__DIR__ . '/../..') . '/components/header.php';
        } else {
            header('location: /connexion/');
            exit();
        }
    }

    public function footer($spc = true) {
        $auth = $this->auth;
        return require realpath(__DIR__ . '/../..') . '/components/footer.php';
    }

}