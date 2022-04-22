<?php
/* 
 * Controller login, logout e cadastro
 * @versão: 1.0.0
 * @autor: Angelo Luis Ferreira
 * @email: angelo.alf@gmail.com
 * @alias: byALF
 * @date: 15/04/2022
 * @packge: devsbook
 * 
 */

use core\Controller;

class loginController extends Controller {
    
    // login
    public function signin() {
        $data = array();
        
        echo "login";
        
        $this->loadTemplate('signin', $data);
    }
    
    // cadastro
    public function signup() { 
        $data = array();
        
        echo "cadastro";
        
        $this->loadTemplate('signup', $data);
    }
    
    
} // end class