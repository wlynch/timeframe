<?php

class IntervalList{

    public $data=array();

    function __construct() {
        $this->data=array();
    }

    // Add element to List
    function add($start,$end){
        print("[".$start." ".$end."]");
        if (!(in_array($start,array_keys($this->data)))){
            print("hi");
            $this->data[$start]=array($end);
        } else {
            print_r($this->data[$start]);
            array_push($this->data[$start],$end);
            print_r($this->data[$start]);
        }
    }

    // Remove element from List
    function remove($start,$end){
        if ($this->exists($start,$end)){
            echo $this->data[$start][array_search($end,$this->data[$start])];
            unset($this->data[$start][array_search($end,$this->data[$start])]);
            if (count($this->data[$start])==0){
                unset($this->data[$start]);
            } 
            return true;
        }
        return false;
    }

    // See if key/value pair already exists in the list
    function exists($start, $end){
        return array_key_exists($start,$this->data) && in_array($end,$this->data[$start]);
    }

}


?>
