<?php

define('HOME', 'http://localhost/cursos/ws_html5/projeto');
define('THEME', 'html');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

switch ($Url[0]):
    case 'index':
        $pg_title = 'SuportInfo';
        $pg_desc = 'Soluções em TI em geral';
        $pg_url = HOME;
        break;
    
    case 'contato':
        $pg_title = 'Fale Conosco';
        $pg_desc = 'Entre em contato e agende uma consultoria.';
        $pg_url = HOME .'/contato';
        break;
    
    case 'empresa':
        $pg_title = 'Sobre a Empresa';
        $pg_desc = 'Empresa com vasta experiencia em soluções em infraestrutura';
        $pg_url = HOME .'/empresa';
        break;
    
    case 'clientes':
        $pg_title = 'Clientes';
        $pg_desc = 'Satisfação garantida de nosso clientes';
        $pg_url = HOME .'/clientes';
        break;
    
    case 'download':
        $pg_title = 'Download de software';
        $pg_desc = 'Download de software para todos os clientes';
        $pg_url = HOME .'/clientes';
        break;
    
    default :
        $pg_title = '404 Oppsss não encontrada!';
        $pg_desc = 'Você está visualizando agora a página 404, pois não encontramos conteúdo relacionado à <b>'.$setUrl.'</b> !';
        $pg_url = HOME . '/404';
        break;
endswitch;


