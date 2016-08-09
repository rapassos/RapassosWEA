<?php
$this->layout->setLayout('test');

$pagina = $this->roteador->getPagina();
$pagina['meta'] = [];
$pagina['scripts'] = [];

include_once $this->layout->getHeader();
echo 'Conteúdo';
include_once $this->layout->getFooter();