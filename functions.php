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
        $t1 = rand(1,6);
        $t2 =  rand (1,6);

         $t3 = ($t1+$t2)%2;
        $t4 = $t1+$t2;
        $n1 = readline("Please enter 'Odd' or 'Even' : ");
        if ($t3 == 0){

                $t3 = "Even";
        } else {$t3 = "Odd";}
         if ($n1 == $t3) {

                echo "You Win"."\n";
         } else {echo "You Lose"."\n";}

         echo "Generated Random ".$t4."\n";
}



//hol();
eo();
?>
