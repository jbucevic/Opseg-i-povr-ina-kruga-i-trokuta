<html>
	<body>
		<h1>Opseg i površina trokuta</h1>
		
<?php 
		
	class Trokut
		{
			public $a,$b,$c,$v;

			public function __construct($a,$b,$c,$v)
		 
			{
				$this->a = $a;
				$this->b = $b;
				$this->c = $c;
				$this->v = $v;
				
			}

			public function opsegTrokuta()
			
			{
				return $this->a + $this->b + $this->c;

			}

			public function povrsinaTrokuta() 
			
			{
				return $this->c * $this->v/2;
			}
		}

			$a = 3;
			$b = 4;
			$c = 5;
			$v = 6;
			$trokut = new Trokut($a,$b,$c,$v);
			$opseg = $trokut -> opsegTrokuta();
			$povrsina = $trokut -> povrsinaTrokuta();
			echo "Opseg trokuta je: $opseg <br>";
			echo "Površina trokuta je: $povrsina"
			

?>
	</body>
</html>