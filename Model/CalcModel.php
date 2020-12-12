<?php 


class Model{

	public $a;	
	public $b;
	public $result;

	public function method_calc($method){
		switch ($method) {
			case 'cong':
			$this->result = $this->a + $this->b;
			break;

			case 'tru':
			$this->result = $this->a - $this->b;
			break;

			case 'nhan':
			$this->result = $this->a * $this->b;
			break;

			case 'chia':
			$this->result = $this->a / $this->b;
			break;
			
			default:
			$this->result = 'No result';
			break;
		}
	}


//hoac
	public function Tinh($method){
		if($method=='add'){
			$this->result = $this->a + $this->b;
		}else if($method=='sub'){
			$this->result = $this->a - $this->b;
		}else if($method=='nhan'){
			$this->result = $this->a * $this->b;
		}else {
			$this->result = $this->a / $this->b;
		}
	}


}

?>