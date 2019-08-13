<?php

class OPTS {

    private $database;
    private $fivesockets;

    public function __construct() {
        $explore            = $this->ExploreConfigurations();
        $this->database     = $explore['databases'];
        $this->fivesockets  = $explore['fivesockets'];
    }

    public function fivesockets() {
        return $this->fivesockets;
    }

    private function ExploreConfigurations() {
        $path       = (realpath(__DIR__ . '/..').'/app/identifiers.json');
        $config     = file_get_contents($path);
        $config     = json_decode($config, true);
        return $config;
    }

    public function database(string $db) {
        if (!empty($this->database[$db])) {
            return $this->database[$db];
        } else {
            return false;
        }
    }
    
    public function sha2(string $string) {
        return hash('sha256', $string);
    }

    /* 
    * Blacklisted variable name for autotype in router
    */

    public function _forbidden_keys() {
        return [
            '_SESSION',
            '_SERVER',
            '_COOKIE'
        ];
    }

}

$OPTS = new OPTS;

?>