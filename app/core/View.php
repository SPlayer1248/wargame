<?php
/**
 * Created by PhpStorm.
 * User: splayer12
 * Date: 11/22/2018
 * Time: 12:37 PM
 */

class View
{
    protected $view_file;
    protected $view_data;

    public function __construct($view_file, $view_data)
    {
        $this->view_file = $view_file;
        $this->view_data = $view_data;
    }

    public function render()
    {
        if (file_exists(VIEW . $this->view_file . '.phtml')) {
            include VIEW . $this->view_file . '.phtml';
        }
    }

    public function getAction()
    {
        return (explode('\\', $this->view_file)[1]);
    }
}