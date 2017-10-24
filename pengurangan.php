<?php 
	class pengurangan{
		public $bil1,$bil2;

		function set_nilai($bilangan1,$bilangan2)
		{
			$this->bil1 = $bilangan1;
			$this->bil2 = $bilangan2;
		}
		function get_nilai(){
			return $this->bil1 - $this->bil2;
		}
	}
	$pengurangan1 = new pengurangan;
	$pengurangan1->set_nilai(70,14);
	echo "Hasil : ".$pengurangan1->get_nilai();
?>