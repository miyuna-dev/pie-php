<?php

try 
{
    require_once "Core/autoload.php";
    
    define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
    // require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
    
    $app = new Core\Core();
    $uri = $_SERVER['REQUEST_URI'];
    $url = substr($uri, 7, strlen($uri));
    
    // $app->runStatic($url);
    $app->runDynamicUrl($url);
    // $app->runDynamically();

} catch (\Exception $e) 
{
    echo $e->getMessage();
}
