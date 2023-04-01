var x = 10;
function f1(){
  var x = 100;
  x--;
  window.x++; // global Глобальное обращение
  console.log( x );
}
console.log( x );


function f2(){
  var x = 200;
}
