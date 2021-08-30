<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

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
        $userModel = new User();
        $this->setLayout('auth');

        if($request->isPost()){
            $userModel->loadData($request->getBody());

            if($userModel->validate() && $userModel->save()){
                Application::$app->response->redirect('/');
            }
            return $this->render('auth/register', [
                'model' => $userModel,
            ]);
        }

        return $this->render('auth/register', [
            'model' => $userModel,
        ]);
    }
}

?>