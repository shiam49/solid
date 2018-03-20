<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 3/19/2018
 * Time: 2:14 AM
 */
class Login
{
    private $db;
    
    public function __construct(Database $db) {
        
        $this->db = $db;               
    }
    
    public function checkLogin()
    {
        $this->db->query('SELECT FROM user WHERE user_name=? AND password=?');
    }        
}