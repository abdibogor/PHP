<?php

class Collection implements countable, JsonSerializable {
	protected $items = [];

	public function add($value) {
		$this->items[] = $value;
	}

	public function set($key, $value){
		$this->items[$key] = $value;
	}

	 public function JsonSerialize() {
	 	return json_encode($this->items);
	 }

	 public function count() {
	 	return count($this->items);
	 }
}
?>