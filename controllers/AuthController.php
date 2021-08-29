<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isPost()){
            echo 'Handle submitted data';
            return;
        }
        $this->setLayout('auth');
        return $this->render('auth/login');
    }

    public function register(Request $request)
    {
        $registerModel = new RegisterModel();
        $errors = [];
        $this->setLayout('auth');

        if($request->isPost()){
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                echo 'success';
                return;
            }
            return $this->render('auth/register', [
                'model' => $registerModel,
            ]);
        }

        return $this->render('auth/register', [
            'model' => $registerModel,
        ]);
    }
}

?>