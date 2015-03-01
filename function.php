<?php
/*
	AUTHOR: Güney Çobanoğlu <guneycob@gmail.com>
*/
function calculatePossibleGametes($het, $rand=false) {
	$result=array();
	$characters=range("A", "Z");
	if ($rand) {
		shuffle($characters);
	}
	for ($i=0; $i<pow(2, $het); $i++) {
		$value="";
		$all=pow(2, $het);
		for ($j=0; $j<$het; $j++) {
			$all>>=1;
			$character=$characters[$j];
			if ($i&$all) {
				$character=mb_strtolower($character);
			}
			$value.=$character;
		}
		$result[]=$value;
	}
	return $result;
}
?>