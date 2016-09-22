<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */

class Computer{
    
    public function __construct(){
        $this->_power_on();
        $this->_load_serial_devices();
    }
    
    private function _power_on(){
        print 'Powering on...'; 
    }
    
    private function _load_serial_devices(){
        print 'Loading USB devices...';
    }
    
}