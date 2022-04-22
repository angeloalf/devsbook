<?php
/* 
 * Controller página inicial
 * @versão: 1.0.0
 * @autor: Angelo Luis Ferreira
 * @email: angelo.alf@gmail.com
 * @alias: byALF
 * @date: 15/04/2022
 * @packge: devsbook
 * 
 */

use core\Controller;

class homeController extends Controller {
    
    public function __construct() {
       $this->redirect('entrar');
    }
    
    public function index() {
        $data = array();
        $this->loadTemplate('home', $dados);
    }
        
    
} // fim da classe homeControlller

