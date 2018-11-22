<?php
/*
 +-----------------------------------------------------------------------+
 | app/core/Application.php                                              |
 |                                                                       |
 |                                                                       |
 | MỤC ĐÍCH:                                                             |
 |                                                                       |
 |   Phân tích URL                                                       |
 |   Điều hướng các controller                                           |
 |   Điều hướng hàm và các biến đối với từng controller                  |
 +-----------------------------------------------------------------------+
 | Author: spl4yer                                                       |
 +-----------------------------------------------------------------------+
*/

class Application
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

//    Hàm khởi tạo
    public function __construct()
    {
        $this->prepareURL();

//        Kiểm tra controller có tồn tại thì khởi tạo object từ class controller đó
        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            $this->controller = new $this->controller;

//            Kiểm tra hàm tương ứng với controller tồn tại thì gọi hàm và truyền param vào
            if (method_exists($this->controller, $this->action)) {

                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    protected function prepareURL()
    {
//        Cắt dấu / dư trong request
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)) {
//            Phân tách các phần của request qua dấu / rồi truyền vào mảng url
            $url = explode('/', $request);

            $this->controller = isset($url[0]) ? $url[0] . 'Controller' : 'homeController';

            $this->action = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }


}