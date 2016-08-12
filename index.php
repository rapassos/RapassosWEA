<?php
ob_start( 'ob_gzhandler' );

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/php'));

set_include_path(implode(PATH_SEPARATOR, array(
    APPLICATION_PATH,
    realpath(APPLICATION_PATH . '/lib'),
    get_include_path(),
)));

//echo get_include_path();

require_once 'Wea/App.php';

$arqConfig = 'config/config.php';
$arqPaginas = 'config/router.php';

$app = new Wea\App($arqConfig,$arqPaginas);

$app->run();

//echo '<pre>';
//print_r($app->getRoteador());
//echo '</br>';
//print_r($app->roteador->getPagina());
//echo '</br>';
//print_r($app->roteador->analisadorRequisicao->getParametros());
//echo '</br>';
//print_r($_REQUEST);
//echo '</pre>';

//phpinfo(33);


//require_once 'config/config.php';
//require_once 'config/router.php';
//require_once 'tools/basic_engine.php';

