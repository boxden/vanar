<?php  //funcion\/
//            show_list ($array) <<< ["Andrei","Vasilii"]
// foreach() -> HTML (ul+li)


function myfu(){
  $array = ["Andrei", "Vasilii"];
}

  foreach (myfu($array) as $i) {
   <ul>
     <li> print $i; <li/>
   <ul/>
 }

myfu();
 ?>
