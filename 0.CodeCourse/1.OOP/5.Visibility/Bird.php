<?php

// public
// protected
// private

class Bird {
 protected $canFly;
 protected $legCount;

  public function __construct($canFly, $legCount){
 	$this->canFly = $canFly;
 	$this->LegCount = $legCount;	 
	 }	

    public function canFly() {
    	return $this->canFly;
    }

     public function getLegCount(){
     	return $this->LegCount;
     }

}

?>