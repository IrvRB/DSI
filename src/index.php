<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];

// Si solo quieres ir a la carpeta actual, no te compliques:
header('Location: '.$uri.'/DSI30/'); 
exit;
?>