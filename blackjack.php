<?php
function blackj(){


//deals two hands w 2 randoms from 1 to 13
$x = 0;

$t1 =  rand (1,13);
$t2 =  rand (1,13);
echo "First Card". $t1."\n";
echo "Second Card". $t2."\n";
$t3 = $t1+$t2; 
if ($t3==21){
echo "Blackjack". " You Win "."\n"; 
	}

	elseif($t3>21){

		echo "You Lose " . "\n";
	}
	elseif ($t3<21) {

		echo "Your Current stand is ". $t3."\n";

	} 
	else{
		echo "Error" . "\n";
}
}


blackj();
?>
