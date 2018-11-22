<?php
/**
 * Created by PhpStorm.
 * User: splayer12
 * Date: 11/22/2018
 * Time: 4:05 PM
 */

class user
{
    protected static $data_file;
    protected $info = [];
    protected $username;
    protected $nickname;

    public function __construct()
    {
        self::$data_file = DATA . 'users.txt';
    }

    private function load()
    {
        if (file_exists(DATA . 'users.txt')) {
            $this->info = file(DATA . 'users.txt');
        }
    }


    public function getUsers()
    {
        $this->load();
        return $this->info;
    }
}