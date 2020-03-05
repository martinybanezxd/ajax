<?php
   // Array with names
   $a[] = "Reymartin Ybanez";
   $a[] = "Noel De Ramos";
   $a[] = "Thommy Calledo";
   $a[] = "Aljun Marcellana";
   $a[] = "Joy Rivera";
   $a[] = "Carl Sarsonas";
   $a[] = "Alfie Villarin";
   $a[] = "Josephine Salanoy";
   $a[] = "Martin Cabatuan";
   $a[] = "Mark Manalop";

   
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
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>