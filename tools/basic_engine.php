<?php

require_once $pages[getenv('REQUEST_URI')];

/* Set Title */
function setTitulo($tituloN){
    global $titulo;
    return $titulo[] = $tituloN;
}
function getTitulo(){
    global $titulo;
    //implode(setSeparator('-'), setTitulo('Teste'));
    if(!is_null($titulo)){
        return implode(setSeparator('-'), $titulo);
    }else{
        return implode($titulo);
    }
}

/* Set Separador de Título */
function setSeparator($separador){
    global $separadorTitulo;
    return $separadorTitulo = ' '.$separador.' ';
}

/* Set Scripts */
function insertScript($path,$opt = null){
    return 0;
}

function insertCSSFile($path,$opt = null){
    return 0;
}

