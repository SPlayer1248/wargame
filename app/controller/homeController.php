<?php
/*
 +-----------------------------------------------------------------------+
 | app/controller/homeController.php                                     |
 |                                                                       |
 |                                                                       |
 | MỤC ĐÍCH:                                                             |
 |                                                                       |
 |   Controller của trang home                                           |
 |   Render các file view trong thư mực app/view/home/                   |
 +-----------------------------------------------------------------------+
 | Author: spl4yer                                                       |
 +-----------------------------------------------------------------------+
*/


class homeController extends Controller
{
    //Render trang index của controller home
    public function index($id = '', $name = '')
    {

        $this->view('home\index', [
            'name' => $name,
            'id' => $id
        ]);
//        Set title riêng cho trang /home/index
        $this->view->page_title = 'PIS | Wargame';
        $this->view->render();
    }


    //Render trang about us của controller home
    public function aboutUs()
    {
        $this->view('home\aboutUs');

//        Set title riêng cho trang /home/aboutus
        $this->view->page_title = 'PIS | About us';
        $this->view->render();
    }

}