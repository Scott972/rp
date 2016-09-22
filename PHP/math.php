<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 9/22/2016
 */


class Math{
    const ADD = '1';
    const SUBTRACT = '2';
    const MULTIPLY = '3';
    const DIVIDE = '4';

    /**
     * @param array ...$ints
     *
     */
    public function add(...$ints){
        $this->_do_operation(ADD, $ints);
    }

    /**
     * @param array ...$ints
     *
     */
    public function subtract(...$ints){
        $this->_do_operation(SUBTRACT, $ints);
    }

    /**
     * @param array ...$ints
     */
    public function multiply(...$ints){
        $this->_do_operation(MULTIPLY, $ints);
    }

    /**
     * @param array ...$ints
     *
     */
    public function divide(...$ints){
        $this->_do_operation(DIVIDE, $ints);
    }


    private function _do_operation($operation, $values){

        if(count($values) < 2){
            die('You must pass at least 2 arguments, you\'ve only provided '.count($values).'');
        }

        $starting_value = $values[0]; //sets to first value given, this is probably bad :/
        unset($values[0]); //removes the first value from the array, otherwise it will get serviced twice

        switch($operation){
            case '1':
                foreach($values as $int){
                    $starting_value += $int;
                }
                print $starting_value;
                break;

            case '2':
                foreach($values as $int){
                    $starting_value -= $int;
                }
                print $starting_value;
                break;

            case '3':
                $starting_value = $values[0];
                foreach($values as $int){
                    $starting_value *= $int;
                }
                print $starting_value;
                break;

            case '4':
                $starting_value = $values[0];
                foreach($values as $int){
                    $starting_value *= $int;
                }
                print $starting_value;
                break;
            default:
                die('Invalid OPERATION passed');
        }
    }
}