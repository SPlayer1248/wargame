<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/22/2018
 * Time: 12:10 AM
 */

class homeController extends Controller
{
    public function index($id = '', $name = '')
    {
        $this->view('home\index', [
            'name' => $name,
            'id' => $id
        ]);
        $this->view->page_title = 'PIS | Wargame';
        $this->view->render();
    }


    public function aboutUs()
    {
        $this->view('home\aboutUs');
        $this->view->page_title = 'PIS | About us';
        $this->view->render();
    }

}