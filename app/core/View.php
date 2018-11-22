<?php
/*
 +-----------------------------------------------------------------------+
 | app/core/View.php                                                     |
 |                                                                       |
 |                                                                       |
 | MỤC ĐÍCH:                                                             |
 |                                                                       |
 |   Render các file phtml trong thư mục view                            |
 +-----------------------------------------------------------------------+
 | Author: spl4yer                                                       |
 +-----------------------------------------------------------------------+
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