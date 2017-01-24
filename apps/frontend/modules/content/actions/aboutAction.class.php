<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aboutAction
 *
 * @author antonio
 */
class aboutAction extends sfAction{
    //put your code here
    
    public function execute($request) 
    {
        $this->msg = "About Us";
    }

}
