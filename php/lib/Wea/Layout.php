<?php

namespace Wea\Layout;

class Layout{
    
    private $header;
    private $footer;

    public function __construct($layout = null) {
        $this->setLayout($layout);
    }
    
    public function setLayout($layout = null){
        include 'config/layouts.php';
        $lay = is_null($layout)?'default':$layout;
        $lay = isset($layouts[$lay])?$lay:'default';
        $this->header = $layouts[$lay]['header'];
        $this->footer = $layouts[$lay]['footer'];
    }
    
    public function getHeader(){
        return $this->header;
    }
    
    public function getFooter(){
        return $this->footer;
    }
}