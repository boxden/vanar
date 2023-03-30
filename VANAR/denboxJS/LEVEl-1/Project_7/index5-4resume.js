var x = 10;
function f1(){
  var x = 100;
  x--;
  window.x++; // global Глобальное обращение
  console.log( x );
}

f1();
console.log( x );
