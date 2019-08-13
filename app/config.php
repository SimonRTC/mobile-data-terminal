<?php

class OPTS {

    private $database;

    public function __construct() {

        /* Database logins */
        $this->database = [
            'website' => [
                'host'      => 'localhost',
                'charset'   => 'utf8',
                'database'  => 'sandbox',
                'username'  => 'root',
                'password'  => null
            ]
        ];
        
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