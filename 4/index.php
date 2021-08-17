<meta charset="utf-8"/>

<?
	$array = [];
	for ($i =0 ; $i <= 99; $i++ ) {
		$array[$i] = mt_rand(1,10);
	}
	
	
	$count = 0;
	foreach ($array as $key=>$num) {
		if ( ($key <= (count($array)-2) ) && ($array[ $key+1 ] ===  $array[ $key ] ) ) {
			$count++;
		}
	}
	
	echo "Количество повторяющихся пар : {$count}";
	echo '<pre>';
	print_r ($array);
	echo '</pre>';
	
?>

