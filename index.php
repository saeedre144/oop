<?php
require './vendor/autoload.php';

$homeController = new \App\Controllers\HomeController();
$homeController->index();




//class User{
//public $id;
//public $name;
//public $user_name;
//public $email;
//public $password;
//public $is_active;
//public $is_admin;
//
//    public function isAdmin()
//    {
//        $this->is_admin = 'true';
//    }
//
//    public function isActive()
//    {
//        $this->is_active = 'true';
//    }
//
//    public function find()
//    {
//
//    }
//
//    public function save()
//    {
//
//    }
//}
//
//$user = new User();
//$user->name='saeed';
//var_dump($user);