<?php

/* This class a Caesar cipher, also known as shift cipher, Caesar's cipher, Caesar's code or Caesar shift
	The encryption of Caesar cipher can be represented using modular arithmetic by first transforming the letters into numbers, according to the scheme, A = 0, B = 1,..., Z = 25. 
	*/
   $newvalue="";
  CaesarEncrypt("A", 3);

	function CaesarEncrypt($str,$shift_value){
	
	$oldvalue="";

	$alphaarray=array("A"=>"0","B"=>"1","C"=>"2","D"=>"3","E"=>"4","F"=>"5","G"=>"6","H"=>"7","I"=>"8","J"=>"9","K"=>"10","L"=>"11","M"=>"12","N"=>"13","O"=>"14","p"=>"15","Q"=>"16","R"=>"17","S"=>"18","T"=>"19","U"=>"20","V"=>"21","W"=>"22","X"=>"23","Y"=>"24","Z"=>"25");// An associative array to store key value pairs of alphabet letters and asscoiated numerical values
	
	$strlen = strlen( $str );
	

	 for($i=0;$i<=$strlen;$i++){
      $char=substr($str, $i, 1);
      $oldvalue=$alphaarray[$char];
      echo $oldvalue; echo "</br>";
      $newvalue=$oldvalue+$shift_value;
      echo $newvalue;echo "</br>";
      if($newValue <= "25"){
      	echo "it's normal";
      }
      //$resetValue=$newValue;
      //echo $resetvalue;

      }
      /*else if($newValue > "25"){
      	$resetvalue=$newvalue-"25";
      } //end of if else statement 
      
      $key=array_search($resetvalue, $alphaarray);
      echo $key;
      */
     }

	





?>
