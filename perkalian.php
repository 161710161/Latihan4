<?php 
	class perkalian{
		public $bil1,$bil2;

		function set_nilai($bilangan1,$bilangan2)
		{
			$this->bil1 = $bilangan1;
			$this->bil2 = $bilangan2;
		}
		function get_nilai(){
			return $this->bil1 * $this->bil2;
		}
	}
	$perkalian1 = new perkalian;
	$perkalian1->set_nilai(6,14);
	echo "Hasil : ".$perkalian1->get_nilai();
?>