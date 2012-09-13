<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teste
 *
 * @author rafael
 */
class teste extends CI_Controller {
    public function __construct() {
        parent::__construct();
        }
        public function index(){
            echo "ola teste";
        }
        public function  email(){
            $this->load->library('email');
            
            $this->email->from('rsc.suporte@gmail.com', 'RS Support');
            $this->email->to('rsc1982.ads@gmail.com');
            
            $this->email->subject('Primeiro email pelo codegniter');
            $this->email->message('Fulano respondeu seu ticket');
            $this->email->send();
            echo $this->email->print_debugger();
        }
}

?>
