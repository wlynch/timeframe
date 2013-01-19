<?php

class IntervalList{

    $data=array();

    // Add element to List
    function add($start,$end){
        if ($data[$start]==NULL)
            array_push($data,$start=>array($end));
        else
            array_push($data[$start],$end);
    }

    // Remove element from List
    function remove($start,$end){
        if ($data[$start]!=NULL){
            if (exists($start,$end)){
                unset($data[$start][$end]);
                if (count($data[$start]==0){
                    unset(count($data[$start]));
                } 
                return true;
            }
        }
        return false;
    }

    // See if key/value pair already exists in the list
    function exists($start, $end){
        return $data[$start][$end]!=NULL
    }

}


?>
