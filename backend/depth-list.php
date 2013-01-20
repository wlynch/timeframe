<?php

include('./interval-list.php');

/*
 * Class to keep track of the various depths of events.
 */

class DepthList{

    private $data; // Array of data
    private $thresh; // Min threshold of events

    function __construct($thresh){
        $this->data=array(0=>new IntervalList());
        $this->data[0]->add(0,2359);
        $this->thresh=$thresh;
    }

    function add($start,$end){
        foreach(array_keys($this->data) as $depth){
            foreach(array_keys($this->data[$depth]) as $key){
                if ($end < $key){
                    continue;
                }
                $added=false;
                foreach($depth[$key] as $val){
                    //Case 1: No conflict
                    if ($start > $val){
                        continue;
                    }
                    if (($key > $start && $val < $end) || ($key < $start && $val > $end)){
                        //Case 2: Complete overlap
                        //Remove previous key-value pair
                        $this->data[$depth]->remove($key,$value);
                        addEvent(min($start,$key),max($start,$key),$depth);
                        addEvent(max($start,$key),min($end,$val),$depth+1);
                        addEvent(min($end,$val),max($start,$key),$depth);
                    } else {
                        //Case 3: Partial overlap
                        //Remove previous key-value pair
                        $this->data[$depth]->remove($key,$value);
                        addEvent(min($start,$key),max($start,$key),$depth);
                        addEvent(max($start,$key),min($end,$val),$depth+1);
                        addEvent(min($end,$val),max($start,$key),$depth);

                    }
                }
                //No conflict
                if ($added==false){
                    addEvent($start,$end,$depth); 
                } 
            } 
        }
    }

    function addEvent($start,$end,$depth){

        if (!in_array($depth,array_keys($this->data))){
            $this->data[$depth]=new IntervalList();
        }
        $this->data[$depth]->add($start,$end);
    
    }

}


?>
