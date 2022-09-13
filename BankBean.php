<?php
class BankBean{
	 var $AccountNo;
	 var $name;
	 var $NIC;
	 var $balance;
	function  BankBean($account , $Name , $nic , $Balance){
		 $this->AccountNo=$account;
		 $this->name=$Name;
		 $this->NIC=$nic;
		 $this->balance=$Balance;
		 }
		 public function showAccount(){
			 return $this->AccountNo;
			 
			 }
			 public function showname(){
				 return $this->name;
				 }
				 public function showNIC(){
					 return $this->NIC;
					 }
					 public function showbalance(){
						 return $this->balance;
						 }
		 
	 
	
	
	
	}

?>