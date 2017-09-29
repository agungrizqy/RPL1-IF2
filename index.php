<?php
	$arr = array(
	'Jangan lupa bahagia, meskipun doi sama yang lain.<br> karena bahagia bisa tanpa doi<br>- om',
	'Jangan lupa bahagia, mesikpun gada doi kudu bahagia<br> - hehe',
	'Jodoh itu bisa kemana-mana dulu, raisa aja dijagain dulu sama keenan baru sama hamis',
	'Jagain jodoh orang is REAL'
	);
	
	$ran = array_rand($arr);
	echo "<br><br><br><br><h1><center> $arr[$ran] </center></h1>";
?>