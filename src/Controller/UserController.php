<?php

namespace src\Controller;

require_once('src/Model/UserModel.php');

class UserController extends \Core\Controller
{
    public function indexAction()
    {
        $this->render('index');
    }
    public function addAction()
    {
        $this->render('register'); /**show src/View/User/register.php */
    }
    public function logAction()
    {
        $this->render('login');
        // $params = $this->request->getQueryParams();
        // $user = new \src\Model\UserModel($params);
        // $login = $user->login();
        // if ($login["success"] === 1) {
        //     echo "Password checked ! Please try again" . PHP_EOL;
        //     $_SESSION["user"] = $login["id"];
        //     header('Location: http://localhost/W-PHP-502-MAR-2-1-PiePHP-jennifer.kadri/profile{id}');
        // } elseif ($login["success" === 0]) {
        //     echo "Invalid password ! Please try again" . PHP_EOL;
        // } else {
        //     echo "There is no account using this email" . PHP_EOL;
        // }
    }
    public function registerAction()
    {
        $params = $this->request->getQueryParams();
        $user = new UserModel($params);
        if (!$user->id)
        {
            $user->save();
            self::$_render = "Your account has been successfully created !" . PHP_EOL;
        }
        header('Location: http://localhost/W-PHP-502-MAR-2-1-PiePHP-jennifer.kadri/');
    }

    public function showAction($id)
    {
        echo "User's ID to show is : $id" . PHP_EOL;

        // if (isset($_SESSION["user"]))
        // {
        //     $params = $this->request->getQueryParams();
        //     $user = new \src\Model\UserModel($params);
        //     $profile = $user->get_info($_SESSION["user"]);
        //     $this->render('show', $profile);
        //     echo "<pre";
        //     print_r($user->get_info());
        //     print_r($user->Read_all($_SESSION["user"]));
        //     // parent::set($profile);
        //     print_r($_SESSION["user"]);
        //     echo "</pre>";
        // } else {
        //     header('Location: http://localhost/W-PHP-502-MAR-2-1-PiePHP-jennifer.kadri/log');
        // }
    }

}