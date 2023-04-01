

// a)
function f(){
for (var i = 0; i < 10; i++) {
  var x = i * i;
  // b)
  }
}
// c)
/////////////////////////


// a)
for (var i = 0; i < 10; i++) {
  let x = i * i;
  // b)
}
// c)
////////////////////////////////



// a)
var y;
for (var i = 0; i < 10; i++) {
  var x = i * i;
  // b)
  y = x;
}
// c)



// 1) visibility of x ? b, c
// 2) where to use x ?
      // - c ? x = last
      // - b ? x = current
