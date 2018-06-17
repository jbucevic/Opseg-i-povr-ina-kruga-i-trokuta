<html>
	<body>
		<h1>Opseg i površina kruga</h1>
		
<?php 
		
	class Krug
		{
			public $r;

			public function __construct($r)
		 
			{
				$this->r = $r;
				
			}

			public function opsegKruga()
			
			{
				return 2 * $this->r * pi();

			}

			public function povrsinaKruga()
			
			{
				return  $this->r * $this->r * pi();
			}
		}

			$r = 12.56;
			$krug = new Krug($r);
			$opseg = $krug -> opsegKruga();
			$povrsina = $krug -> povrsinaKruga();
			echo "Opseg kruga je: $opseg <br>";
			echo "Površina kruga je: $povrsina"
			

?>
	</body>
</html>

	
		









		
			
