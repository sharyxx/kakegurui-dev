<?php
DEFINE ("MIN", 1);
DEFINE ("MAX", 13);

//returns temporary returns on choosing high or low
function tr (){
   $r1 = rand(MIN, MAX);
   $r2 = rand(MIN, MAX);
   $nc = rand (0,1);

   return ($nc==1 ? $r1 : $r2 );
}
function hol(){


   //echo ($nc==1 : r1 ? r2 );
   $t1=tr();
   $t2=tr();
   echo $t2."\n"." Debug statment";
   echo "The number generated : ".$t1 ."\n";
   $n1 = readline("High Or Low?");
	
   echo "\n";
   if ($n1 == "High" ) {

        echo ($t1>$t2? "You Win" : "You Lose");
		echo "\n";
   }
   elseif ($n1 == "Lose") {
        echo ($t1<$t2? "You Win" : "You Lose");
		echo "\n";
   }
   else {echo "Error : Please enter valid number";}

}


function eo(){
	echo "Odd or Even"."\n";
	$t1 = rand(1,10);
	$t2 = $t1%2;
	$n1 = readline("Please enter 'Odd' or 'Even' : ");
	if ($t2 == 0){

		$t2 = "Even";
	} else {$t2 = "Odd";}
	 if ($n1 == $t2) {

	 	echo "You Win"."\n";
	 } else {echo "You Lose"."\n";}

	 echo "Generated Random ".$t1."\n";
}

//hol();
//eo();
?>
