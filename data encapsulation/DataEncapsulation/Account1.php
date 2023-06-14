<?php
	class Account   
		{    
			private $balance = 0; 
			
			public function deposit($amount){
				$this->balance += $amount;
				echo "Amount is been deposited in your account</br>";
				echo "New balance is ".$this->balance."</br>";
			}
			
			public function getBalance(){
				return $this->balance;
			}
			
			public function withdraw($amount){
				if($amount<= $this->balance){
					$this->balance -= $amount;
					echo "Amount is withdrawn";
					echo " remaining balance is ".$this->balance ;
				}else{
					echo "Insufficient Balance";
				}
			}

		}   

	$accObj = new Account(); 
	echo $accObj->getBalance();
	$accObj->deposit(100);
	$accObj->withdraw(30);



?>