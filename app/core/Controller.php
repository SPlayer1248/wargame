<?php
/**
 * Created by PhpStorm.
 * User: splayer12
 * Date: 11/22/2018
 * Time: 12:36 PM
 */

class Controller
{
    protected $view;
    protected $model;

    public function view($viewName, $data = [])
    {
        $this->view = new View($viewName, $data);
        return $this->view;
    }

    public function model($modelName, $data = [])
    {
        if (file_exists(MODEL . $modelName . '.php')) {
            require MODEL . $modelName . '.php';
            $this->model = new $modelName;
        }
    }
}