// Массив array of slides
var slides=[
  "images/1-preloader.gif",
  "images/2-preloader.gif",
  "images/3-preloader.gif"
];

var titles=[
  "Blah blah title 1 , cool",
  "Blah blah title 2 , not cool",
  "Blah blah title 3 , cool"
];

// when document is loaded 1 time
function start(){
  setInterval( changeSlide, 3000 );
}

// Данная функция меняет слайд каждые 3 секунды
function changeSlide(){
  var s = slides[0]; // first slide
  slides.push( slides.shift() );// берём с начала и вставляем в конец

  var img = document.querySelector( "#slider img" );

  img.style.opacity = 0;
  setTimeout( function() { img.src = s;}, 500);
  setTimeout( function() { img.style.opacity = 1; }, 1000 );
  //
  var t = titles[0];
  title.push( titles.shift() );
  var h2 = document.querySelector( "#slider h2" );
  setTimeout( function(){   h2.innerHTML = t; }, 500 );
}

//
function next(){
  changeSlide();
}
function prev(){
   // first slide
  slides.unshift( slides.pop() );// берём с конца и вставляем в начало
  var s = slides[0];
  // css search
  var img = document.querySelector( "#slider img" );
  // DOM
  img.src = s;
}
