<?php

/** First Method */
spl_autoload_register( function ($className)
{
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . ".php";
    if (file_exists($file))
    {
        require $file;
        return true;
    } else {
        return false;
    }
});

/** Second Method */
// spl_autoload_register(function ($className)
// {
//     if (file_exists($className . ".php"))
//     {
//         include $className . '.php';
//     }

//     if (file_exists("Core" . $className . ".php"))
//     {
//         include "Core" . $className . ".php";
//     }

//     if (file_exists("src" . $className . ".php"))
//     {
//         include "src" . $className . ".php";
//     }

//     if (file_exists("src/Controller" . $className . ".php"))
//     {
//         include "src" . $className . ".php";
//     }

//     if (file_exists("src/Model" . $className . ".php"))
//     {
//         include "src/Model" . $className . ".php";
//     }

//     if (file_exists("src/View" . $className . ".php"))
//     {
//         include "src/View" . $className . ".php";
//     }
// });
