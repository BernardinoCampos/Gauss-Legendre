<?php
	
	// π = 3 + 4/(2*3*4) - 4/(4*5*6) + 4/(6*7*8) - 4/(8*9*10) + 4/(10*11*12) - 4/(12*13*14)

	function CalcParcela($val) {

		$v1 = $val++;
		$v2 = $val++;
		$v3 = $val;

		$f1 = bcmul($v1,bcmul($v2,$v3));

		$ret = bcdiv(4,$f1);

		return $ret;
	}

	bcscale(100000);

	$pi = "3.0";

	$sign = 1;
	for ($aa=2; $aa<200000; $aa+=2) {
		if ($sign==1)
			$pi = bcadd($pi,CalcParcela($aa));
		else
			$pi = bcsub($pi,CalcParcela($aa));
		$sign*=-1;
	}

	echo "{$pi}\n";
