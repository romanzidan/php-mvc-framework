<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isPost()){
            echo 'Handle submitted data';
            return;
        }

        return $this->render('auth/login');
    }

    public function register(Request $request)
    {
        if($request->isPost()){
            echo 'Handle submitted data';
            return;
        }

        return $this->render('auth/register');
    }
}

?>