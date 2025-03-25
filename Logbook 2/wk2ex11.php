<?php
  
  $mymarks["CS101"] = 85;  
  $mymarks["CS102"] = 90;  
  $mymarks["CS201"] = 78;  
  $mymarks["CS202"] = 88;  
  $mymarks["CS303"] = 92; 
  $mymarks["CS304"] = 80;  


  $sum = 0;
  $count = 0;


  foreach ($mymarks as $moduleCode => $marks) {
    echo "Module Code: $moduleCode - Marks: $marks <br/>";
    
  
    $sum += $marks;
    $count++;
  }


  $average = $sum / $count;

  echo "<br/>The average mark for all modules is: $average";
?>
