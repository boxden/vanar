var shoot = function(){
//Rjgbhetv cj,snbt d gthtvtyye. e
  var e = window.event;

  var x = e.clientX;
  var y = e.clientY;
  console.log( "you've clicked on " + x + "," + y );
  var box = e.currentTarget;
  var div = document.createElement("div")
  div.className = "mark";
  box.appendChild( div );

  div.style.top = (y - 15) + 'px';
  div.style.left = (x -15) + 'px';
}
