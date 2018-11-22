<?php
/**
 * Created by PhpStorm.
 * User: splayer12
 * Date: 11/22/2018
 * Time: 3:59 PM
 */

class userController extends Controller
{
    public function index()
    {
        $this->model('user');
        $this->view('user' . DIRECTORY_SEPARATOR . 'index', ['users' => $this->model->getUsers()]);
        $this->view->render();

    }
}