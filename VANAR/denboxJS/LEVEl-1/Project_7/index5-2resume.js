//{ object "window"

var website = "www.999.md"; // global
var visits  = 10000000;     // global
function click( user ){     // local - argument
  var link = "/market";     // link - local variable
  visits++;
}

click( "Vano" );
//////////////////////////////////////////////////////////////////
// области переменной где она появляется и где она используется //
//////////////////////////////////////////////////////////////////

//}
