<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "pccoe", "grocery");
		return $this->con;
	}
}

?>