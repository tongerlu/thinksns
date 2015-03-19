<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AdminController extends Controller {

    public function indexAction() {
        $a = CURRENT_VIEW_PATH . ACTION_NAME . DS ;
        require $a . 'index.html';
    }

}
