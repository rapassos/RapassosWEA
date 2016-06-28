<?php

namespace Wea;

require_once 'Wea/Config.php';
require_once 'Wea/Roteador.php';



class App {
    
    protected $config;
    public $roteador;
    


    public function __construct($arqConfig = NULL,$arqPaginas = NULL) {
        $this->config = new Config\Config($arqConfig);
        $this->roteador = new Roteador\Roteador($arqPaginas);
    }
    
    public function getConfig(){
        return $this->config;
    }

    public function getRoteador(){
        return $this->roteador;
    }
    
    
}

