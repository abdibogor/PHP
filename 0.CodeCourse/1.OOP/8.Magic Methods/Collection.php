<?php

class Collection implements countable, JsonSerializable {
	protected $items = [];

    //__construct()
    //__set()
    //__get()
    //__toString()

   public function __set($key, $value){
   	  $this->set($key, $value);
   }	

	public function set($key, $value){
		$this->items[$key] = $value;
	}

    public function __call($func, $args) {
        echo $func . ' has been called with arguments';
    }

    public function __toString() {
    	return $this->jsonSerialize;
    }

     public function add($value) {
		$this->items[] = $value;
	}

	public function get($key){
		return array_key_exists($key, $this->items) ? $this->items[$key] : null;
	}

	 public function JsonSerialize() {
	 	return json_encode($this->items);
	 }

	 public function count() {
	 	return count($this->items);
	 }

     public function all() {
     	 return $this->items;
     }

}
?>