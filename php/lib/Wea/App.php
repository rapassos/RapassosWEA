<?php

namespace Wea;

require_once 'Wea/Config.php';
require_once 'Wea/Roteador.php';
require_once 'Wea/Layout.php';

class App {
    
    protected $config;
    public $roteador;
    public $layout;

    public function __construct($arqConfig = NULL,$arqPaginas = NULL) {
        $this->config = new Config\Config($arqConfig);
        $this->roteador = new Roteador\Roteador($arqPaginas);
        $this->layout = new Layout\Layout();
    }
    
    public function getConfig(){
        return $this->config;
    }

    public function getRoteador(){
        return $this->roteador;
    }
    
    public function Run(){
        $pagina = $this->roteador->getPagina();
        require_once $pagina['caminho'];
    }
}
