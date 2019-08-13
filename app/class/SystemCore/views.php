
<?php

class views {

    private $OPTS;
    private $default_views_directory;

    public function __construct($OPTS) {
        $this->OPTS                         = $OPTS;
        $this->default_views_directory      = realpath(__DIR__ . '/../..') . '/views/';
    }

    public function _get(string $view, string $path = null, array $params = null, bool $autoloader = true) {
        $OPTS           = $this->OPTS;
        $path           =  $this->default_views_directory. $path . $view . ".php";
        if ($path != null) {
            if ($autoloader) { require realpath(__DIR__ . '/../..') . '/autoload.php'; }
            if ($params != null) {
                foreach ($params as $k=>$param) {
                    foreach ($this->OPTS->_forbidden_keys() as $forbidden_key) {
                        if ($k != $forbidden_key) {
                            $param = $param;
                            $param = htmlentities($param);
                            ${$k} = $param;
                        }
                    }
                }
            }
            return require $path;
        } else {
            return false;
        }
    }
}