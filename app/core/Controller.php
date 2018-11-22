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

    public function view($viewName, $data = [])
    {
        $this->view = new View($viewName, $data);
        return $this->view;
    }
}