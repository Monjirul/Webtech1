
 <?php
     $str = $_GET['Tbox'];
    // echo $query;
   $arr = str_split($str);
  $arLen=count($arr);
  $chars=array();
  $charCount=array();
  $words=array();
  $w;
  // $i=0;
 // echo count($arr);
   for($i=0;$i<$arLen;$i++)
   {
	  
	   if($i==0)
	   {
		   $chars[0]=$arr[0];
		   if ( ! isset($charCount[0])) {
              $charCount[0] = null;
                  }

		   $charCount[0]=$charCount[0]+1;
	   }
	   else{
	      for($j=0;$j<count($chars);$j++)
		  {
       if($arr[$i]==$chars[$j])
        {
	     // $charCount[$j]= $charCount[$j]+1;
		 
           $charCount[$j] = isset($charCount[$j]) ? $charCount[$j]+1 : null;
		 break;
        }	
		else if($j==count($chars)-1)
		{
			$chars[count($chars)]= $arr[$i];
			
			  if ( ! isset($charCount[count($chars)])) {
              $charCount[count($chars)] = null;
                  }
			$charCount[count($chars)]=$charCount[count($chars)]+1;
		}
		  }
   }
	  //echo $arr[$i];
	  //echo "<br>";
   }
   $caLen=count($chars);
  for($i=0;$i<$caLen;$i++)
  {
	  echo $i." ".$chars[$i]." = ".$charCount[$i];
	  echo"<br>";
  }
  
  echo "<br>";
  
  foreach (count_chars($str, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
echo"<br>";
   }
 // $w=array_count_values(str_word_count($str));
  //echo $w;
  foreach (array_count_values(str_word_count($str,true)) as $i => $val) {
   //echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    print($i).": $val ";
  echo"<br>";
   }
  
print_r( array_count_values(str_word_count($str,true)));
 //echo array_count_values(str_word_count($str, 1));
 
 ?>