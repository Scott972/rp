<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */

class WebServer extends Server{
    
    protected $port; 
    
    public function __construct()
    {
        parent::__construct();
        $this->get_port();
        $this->_check_webservice_port(); 
    }
    
    public function start_service(){
        print 'Starting Web Services';
    }
    
    private function _check_webservice_port(){
        if($this->port != 443){
            $this->shutdown();
        }
    }
    
    
    protected function get_port(){
        /**
         * some stuff maybe
         */
        $this->port = 443;
    }
    
    
    protected function shut_down(){
        print "Incorrect port, shutting down"; 
    }
}