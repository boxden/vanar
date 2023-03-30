// callback -
//<tag onevent="code_jss" >
//<h1 onclick="alert('Hey!')"> Click this guy!!</h1>
// alert - callback
setTimeout( callback, interval_ms )// устанавливает вызов функции через интервал
setInterval( callback, interval_ms)
claerTimeout( timer )
claerInterval( timer )
//=--==--==--==--==--==--==--==--==-//
console.log("Hello");
function hello(){
  console.log("Hello lazy!!");
}
setTimeout( hello , 3000    );
