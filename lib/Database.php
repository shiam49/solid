<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 3/19/2018
 * Time: 2:12 AM
 */
interface Database
{
    public  function connect();
    
    public function query($sql);
    
    public function DBclose();
    
    
}