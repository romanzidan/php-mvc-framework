<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\Login;
use app\models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }

    public function login(Request $request, Response $response)
    {
        $loginForm = new Login();

        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()){
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('auth/login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $userModel = new User();
        $this->setLayout('auth');

        if($request->isPost()){
            $userModel->loadData($request->getBody());

            if($userModel->validate() && $userModel->save()){
                Application::$app->session->setFlash('success', 'Thanks for registering');
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

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        Application::$app->session->setFlash('success', 'Logout successfully');
        $response->redirect('/');
    }
    
    public function profile()
    {
        return $this->render('profile');
    }
}

?>