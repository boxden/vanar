// Масив с слайдами
var sliders=[
  "img/slide1.jpg",
  "img/slide2.jpg",
  "img/slider3.jpg"
];

var titles = [
  "Title1",
  "Title2",
  "Title3"
]

// Эта функция вызывается когда загрузился документ
function start(){
  setInterval( changeSlide, 3000)
}


function changeSlide(){
var s = sliders[0];
sliders.push( sliders.shift() );
//CSS поиск
var img = document.querySelector( "#slider img" );


img.style.opacity=0;
setTimeout( function(){ img.src = s }, 500 );
setTimeout( function(){ img.style.opacity=1 }, 1000);

var t = titles[0];
titles.push( titles.shift() );
var h2 = document.querySelector( "#slider h2" )
setTimeout( function(){ h2.innerHTML = t; }, 500);
}

function next(){
  changeSlide();
}
function prev(){
  sliders.unshift( sliders.pop() );
  var s = sliders[0];
  //CSS поиск
  var img = document.querySelector( "#slider img" );

  img.src = s;

}
