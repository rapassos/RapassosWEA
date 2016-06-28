<?php

namespace Wea\Roteador\Requisicao;

class AnalisadorRequisicao{
    
    private $tipoRequisicao;
    private $protocolo;
    private $servidor;
    private $requisicao;
    private $parametros;
    
    public function __construct() {
        $this->setParametros();
        $this->protocolo = getenv('REQUEST_SCHEME');
        $this->servidor = getenv('HTTP_HOST');
        $this->requisicao = getenv('REDIRECT_URL');
        $this->tipoRequisicao = getenv('REQUEST_METHOD');
        echo $this->servidor;
    }
    
    public function getURLCompleta() {
        return $this->protocolo.'://'.$this->servidor.$this->requisicao.(($this->parametros)?'?'.implode('&',$this->parametros):'');
    }
    
    private function setParametros() {
        if($_REQUEST){
            $this->parametros = explode('&',getenv('QUERY_STRING'));
        }else{
            $this->parametros = null;
        }
    }
    
    public function getParametros(){
        return $this->parametros;
    }
    
    public function getRequisicao(){
        return $this->requisicao;
    }
}
