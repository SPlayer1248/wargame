<?php
/*
 +-----------------------------------------------------------------------+
 | app/controller/userController.php                                     |
 |                                                                       |
 |                                                                       |
 | MỤC ĐÍCH:                                                             |
 |                                                                       |
 |   Controller của trang user                                           |
 |   Render các file view trong thư mực app/view/user/                   |
 +-----------------------------------------------------------------------+
 | Author: spl4yer                                                       |
 +-----------------------------------------------------------------------+
*/

class userController extends Controller
{
    public function index()
    {
        // Sử dụng model user
        $this->model('user');

        /*
         * Set view ở thư mục user/index/
         * Giá trị biến users là kết quả của hàm getUsers() trong model user
         * Truyền biến users vào view
         */
        $this->view('user' . DIRECTORY_SEPARATOR . 'index', ['users' => $this->model->getUsers()]);
        $this->view->render();

    }
}