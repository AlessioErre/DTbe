
<?php 
/*
Author: Adrien Thierry
Licence: GPLv2 or later
http://seraum.com
http://asylum.seraum.com
http://hackmyfortress.com
*/
class Free_Obfusc
{
	var $dic = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_/ ,.:!'=+;";
	function doIt($c, $it){for($i = 0; $i < $it; $i++){ $c = $this->h($c);}return $c;}
	function h($c)
	{
		$c = "?>" . $c;
		$this -> dic = str_shuffle($this -> dic);$mr = rand(1, strlen($this->dic));$ms = $this->di($mr);$c0 = unpack("H*", base64_encode(gzdeflate($this->r(base64_encode($c), $mr, $this -> dic))));
		$crf = $this->sr(rand(4, 10));$eval = $this->sr(rand(4, 10));$b64 = $this->sr(rand(4, 10));$unr = $this->sr(rand(4, 10));
		$gzinflate = $this->sr(rand(4, 10));$pack = $this->sr(rand(4, 10));$master = $this->sr(rand(4, 10));$ur = $this -> ur($unr);
		$rnd = $this->sr(rand(4, 10));$rnd2 = $this->sr(rand(4, 10));$fcrf = $this->cf($crf, '\$' . $rnd . ',\$' . $rnd2, 'return create_function(\$' . $rnd . ',\$' . $rnd2 . ');', $unr, "create_function");
		$rnd = $this->sr(rand(4, 10));$feval = $this->cf($eval, '\$' . $rnd, 'return eval(\$' . $rnd . ');', $unr, '$' . $crf);
		$rnd = $this->sr(rand(4, 10));$fb64 = $this->cf($b64, '\$' . $rnd, 'return base64_decode(\$' . $rnd . ');', $unr, '$' . $crf);
		$rnd = $this->sr(rand(4, 10));$fgz = $this->cf($gzinflate, '\$' . $rnd, 'return gzinflate(\$' . $rnd . ');', $unr, '$' . $crf);
		$rnd = $this->sr(rand(4, 10));$fpack = $this->cf($pack, '\$' . $rnd, 'return pack(\"H*\", \$' . $rnd . ');', $unr, '$' . $crf);
		$ret = "<?php ";$ret .= $this->cj();$ret .= $this->cj();$ret .= $this->cj();
		$ret .= "\$$master=$ms;";$ret .= $fcrf;$c1 = array();
		$c1[] = $ur; $c1[] = $this->cj();$c1[] = $fgz;
		$c1[] = $this->cj();$c1[] = $fb64;$c1[] = $this->cj();
		$c1[] = $feval;$c1[] = $this->cj();$c1[] = $fpack;shuffle($c1);
		$iA = count($c1);for($i = 0; $i < $iA; $i++){$ret .= $c1[$i];}$ret .= "\$$eval(\$$b64(" . $unr . "(\$$gzinflate(\$$b64(\$$pack(\"" . $c0[1] . "\"))), \$" . $master . ", \"" . $this -> dic . "\")));";
		$ret .= $this->cj();$ret .= $this->cj();$ret .= " ?>";
		return $ret;
	}
	function ur($na = "r"){$function = 'function ' . $na . '($s, $n, $nb){$nb = $nb . $nb;$n = (int)$n % (strlen($nb) / 2);for ($i = 0, $l = strlen($s); $i < $l; $i++) {if(strpos($nb, $s[$i]) !== false){$s[$i] = $nb[(strpos($nb, $s[$i]) + (strlen($nb) / 2)) - $n];}}return $s;}';return $function;}	
	function r($s, $n, $nb){$nb = $nb . $nb;$n = (int)$n % (strlen($nb) / 2);for ($i = 0, $l = strlen($s); $i < $l; $i++){if(strpos($nb, $s[$i]) !== false){$s[$i] = $nb[strpos($nb, $s[$i]) + $n];}}return $s;}
	function cf($na, $arg, $c0, $ur, $cname){$dic = str_shuffle($this->dic);$i1 = rand(1, strlen($dic));$i2 = rand(1, strlen($dic));$arg = $this->r($arg, $i1, $dic);$c0 = $this->r($c0, $i2, $dic);$c0 = '$' . $na . ' = ' . $cname . '(' . $ur . '("' . $arg . '", ' . $i1 . ', "' . $dic . '"), ' . $ur . '("' . $c0 . '", ' . $i2 . ', "' . $dic . '"));';return $c0;}
	function cj(){$res = "";$a = rand(1, 2);if($a == 1){$var = "";$value = "";$n = rand(1, 10);for($i = 0; $i < $n; $i++){$var = $this->sr(rand(2, 10));$value = $this->sr(rand(1, 100));$tmp = '$' . $var . '="' . $value . '";';$res .= $tmp;}}else if($a == 2){$value = "";$n = rand(1, 4);for($i = 0; $i < $n; $i++){$value = "//" . $this->sr(rand(1, 1000)) . "\r\n";$res .= $value;}}return $res;}
	function sr($car){$string = "";$chaine = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";srand((double)microtime()*1000000);for($i=0; $i<$car; $i++){$string .= $chaine[rand()%strlen($chaine)];}return $string;}
	function di($int){$res = "";$tmpi = 0;while($int > 0){$tmpi = rand(0, $int);$int = $int - $tmpi;$res .= "$tmpi+";}$res = substr($res, 0, -1);return $res;}
}
?>
