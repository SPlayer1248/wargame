<?php
/*
 +-----------------------------------------------------------------------+
 | app/core/Controller.php                                               |
 |                                                                       |
 |                                                                       |
 | MỤC ĐÍCH:                                                             |
 |                                                                       |
 |   Class controller cơ bản                                             |
 |   Định nghĩa view và model cho các controller con                     |
 +-----------------------------------------------------------------------+
 | Author: spl4yer                                                       |
 +-----------------------------------------------------------------------+
*/

class Controller
{
    protected $view;
    protected $model;

//    Gọi tới file view tương ứng cùng với param
    public function view($viewName, $data = [])
    {
        $this->view = new View($viewName, $data);
        return $this->view;
    }

//    Gọi tới file model tương ứng để khởi tạo model
    public function model($modelName, $data = [])
    {
        if (file_exists(MODEL . $modelName . '.php')) {
            require MODEL . $modelName . '.php';
            $this->model = new $modelName;
        }
    }
}