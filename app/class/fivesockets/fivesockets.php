<?php

/**
 * 
 * FiveSockets - Client version
 * v.1.0.0
 * 
 * Please before reporting error read the documentation
 * http://fivesockets-doc.virtual-roleplay.fr/
 * 
 */

namespace fivesockets;

class fivesockets {

    public $API_URL;
    private $public;
    private $secret;
    private $private_iv;
    private $method;

    public function __construct(array $configurations) {
        $this->RequestParams    = [];
        $this->API_URL          = $configurations['API_URL'];
        $this->public           = $configurations['public'];
        $this->secret           = $configurations['secret'];
        $this->private_iv       = $configurations['private_iv'];
        $this->method           = $configurations['method'];
    }

    /**
     * 
     * Set before a request for give more parameters. (ids, or other)
     * @ (!!! In development !!!) @
     *
     * @param string $params Your spesific parameters
     */

    private function CheckIfParamsIsvalid($params) {
        return true;
    }

    /**
     * 
     * Set before a request for give more parameters. (ids, or other)
     *
     * @param string $params Your spesific parameters
     */

    public function SetParams($params) {
        if ($this->CheckIfParamsIsvalid($params)) {
            $this->params = $params;
        }
    }

    /**
     * 
     * Prepare request before send
     *
     * @param string $request Server response
     * @param string $response Server response
     */

    private function prepare($request, $params) {
        $request = [
            'type'          => $request,
            'identifiers'   => ($params != false? $params['identifiers']: null),
            'headers'       => ($params != false? (!empty($params['headers'])?$params['headers']: false): false)
        ];
        $request = json_encode($request, true);
        $request = $this->encrypt($request);
        return $request;
    }

    /**
     * 
     * Interpet response from server
     *
     * @param string $response Server response
     */

    private function interpet($response) {
        if ($response != false) {
            $response = $this->decrypt($response, true);
            $response = json_decode($response, true);
            if (!empty($response['http_response']) && $response['http_response'] == 200) {
                $response = $response['response'];
            }
        }
        return $response;
    }

    /**
     * 
     * Execute prepared request
     *
     * @param string $request Server request
     */

    private function execute($request) {
        $request = $this->API_URL . 'index.php?token=' . $this->public . '&request=' . $request;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $request);
        curl_setopt($curl, CURLOPT_COOKIESESSION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    /**
     * 
     * Execute and unprepared request
     *
     * @param string $func Name of server function you want executed
     */

    public function SendData(string $func) {
        $request    = $this->prepare($func, (!empty($this->RequestParams) ? $this->RequestParams : false));
        $response   = $this->execute($request);
        $response   = $this->interpet($response);        
        return $response;
    }

    /**
     * 
     * encrypt data
     * 
     * @param string $value encrypt
     */

        private function encrypt($value) {
            return urlencode(rtrim(
                base64_encode(
                    openssl_encrypt(
                        $value,
                        $this->method,
                        $this->secret,
                        OPENSSL_RAW_DATA,
                        hex2bin($this->private_iv)
                    )
                ), "\0"
            ));
        }

    /**
     * 
     * deencrypt data
     * 
     * @param string $value deencrypt
     * @param bool $decode url decode string
     */
        
        private function decrypt($value, bool $decode = true) {
            $value = ($decode?urldecode($value):$value);
            return rtrim(
                openssl_decrypt(
                    base64_decode($value),
                    $this->method,
                    $this->secret,
                    OPENSSL_RAW_DATA,
                    hex2bin($this->private_iv)
                )
            );
        }

}