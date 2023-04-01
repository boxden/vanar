// Стрельба
var shoot = function(){
  /// copiem evenimentul pentru comoditate in "e"
  var e = window.event;
  /// copiem coordonatele in care a fost apasat mouse-ul
  var x = e.clientX;
  var y = e.clientY;
  console.log( "you've clicked on " + x + "," + y );
  /// cautam div-ul box
  var box = e.currentTarget;
  /// cream un div nou
  var div = document.createElement("div");
  /// atasam clasa "mark"
  div.className = "mark";
  /// adaugam div-ul creat in box
  box.appendChild( div );
  ///
  div.style.top = (y - 15) + 'px';
  div.style.left = (x - 15) + 'px';
  // innerHTML,
}
