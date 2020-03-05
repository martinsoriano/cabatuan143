<?php
   // Array with names
   $a[] = "Mark Ronald Manalop";
   $a[] = "Josephine Salonoy";
   $a[] = "Carl Sarsonas";
   $a[] = "Thommy calledo";
   $a[] = "Noel deramos";
   $a[] = "Martin ybanez";
   $a[] = "Lovely Joy Rivera";
   $a[] = "alfie Villarin";
   
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $names";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>