<?php

namespace Wea\Config;

class Config {

    public $config;

    public function __construct($arqConfig = null) {
        $this->setArqConfig($arqConfig);
        if ($this->config['DisplayErros']) {
            $this->displayErros();
        }
    }

    public function setConfig($config) {
        $this->config = $config;
        return $this->config;
    }

    public function getConfig() {
        return $this->config;
    }

    private function setArqConfig($arqConfig = null) {
        if (!is_null($arqConfig)) {
            require_once $arqConfig;
            $this->config = $config;
        }
    }

    private function displayErros() {
        ini_set('display_errors', 1);
        ini_set('log_errors', 1);
        ini_set('error_log', APPLICATION_PATH  . 'logs/error_log.txt');
        error_reporting(E_ALL);
        //echo 'EnableDisplayErros';
    }

}
