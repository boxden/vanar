// JIT ( Just In Time compiler ) / TransPainer
// Google Chrome V8 ( Microsoft Chakra Core )
// - optimization!!!!

// GC - Garbage Collector ( Зборщик мусора )
// delete
var x = 10;
//
//
//
//
x = null; // Hey GC, delete "x"
//
// Console Google
var x = 10;
x++;
x = null;
console.log(x);
// Start in Console
//
// Трюки на javascript
//
// Console Google
function f(){

  function ifn(){

  }
  inf();
}
outf();
// Start if Console
//
// Console Google
function f(){

  var local = 100;
  local ++;
  local = function(){
    console.log( "local running" );
  }
  local()
}
// Start in Console
//=--==--==--==--==--==--==--==--==-//
var a = 1;
function go(){
  //var a; <<< JIT
  console.log(a); // undefined      //
  var a =2;
}
//=--==--==--==--==--==--==--==--==-//
