<?php

   class Calculator
   {
   	protected $result;

   	protected $operation;

   	public function setOperation(operatorInterface $operation)
   	{
 	       $this->operation = $operation;
   	}

   	  public function calculate()
   	  {
   	  	//print_r(func_get_args())
   	  	foreach(func_get_args() as $number)
   	  	{
   	  		$this->result = $this->operation->run($number, $this->result);
   	  	}
   	  }

   	     public function getResult()
   	     {
   	     	return $this->result;
   	     }
   }
?>