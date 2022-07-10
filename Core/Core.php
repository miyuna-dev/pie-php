<?php

namespace Core;

class Core
{
    public function runStatic($url)
    {
        require("src/routes.php");
        $route = Router::get($url);
        $className = $route["Controller"] . "Controller";
        $methodName = $route["Action"] . "Action";
        $namespace = "\\src\\Controller";
        $class = "$namespace\\$className";
        $controller = new $class();
        $controller->$methodName();
        // echo $url;
    }

    public function runDynamicUrl($uri)
    {
        $namespace = "src\\Controller";

        $url = explode("/", $uri);
        array_shift($url);

        // echo "<pre>";
        // print_r($url);
        // echo "</pre>";
        
        // print_r($url[0]);

        
        // echo "<pre>";
        // print_r($uri);
        // var_dump($url[0]);
        // echo "</pre>";

        for ($i = 0; $i < count($url); $i++)
        {
            if (in_array($url[$i], $url) && $url[$i] === "")
            {
                unset($url[$i]);
            }
        }

        if (count($url) === 2) {
            if (
            class_exists($namespace . "\\" . ucfirst($url[0] . "Controller")) &&
            method_exists($namespace . "\\" . ucfirst($url[0] . "Controller"), $url[1] . "Action")
            ){
                $className = ucfirst($url[0] . "Controller");
                $methodName = $url[1] . "Action";
            } else {
                $namespace = "\\src\\Controller";
                $className = "ErrorController";
                $methodName = "errorAction";
            }
        }
        elseif (count($url) === 1)
        {
            if (class_exists($namespace . "\\" . ucfirst($url[0] . "Controller")))
            {
                $className = ucfirst($url[0] . "Controller");
                $url[0] === "user" ? $methodName = "addAction" : $methodName = "indexAction";
            } 
            elseif (method_exists($namespace . "\\" . "AppController" , $url[0]. "Action"))
            {
                if ($url[0] === "index")
                {
                    $className = "AppController";
                    $methodName = $url[0] . "Action";   
                }
                elseif ($url[0] === "add") {
                    $className = "UserController";
                    $methodName = "addAction";
                }
            } else {
                $namespace = "\\src\\Controller";
                $className = "ErrorController";
                $methodName = "errorAction";
            }
        } 
        elseif (count($url) === 0)
        {
            $className = "AppController";
            $methodName = "indexAction";
        }
        else {
            $namespace = "\\src\\Controller";
            $className = "ErrorController";
            $methodName = "errorAction";
        }

        $class = "$namespace\\$className";
        $controller = new $class();
        $controller->$methodName();        
    }
}
