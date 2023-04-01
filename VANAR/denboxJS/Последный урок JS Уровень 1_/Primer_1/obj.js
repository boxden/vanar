'use strict';
// ES6 classes & objects

// Page ( url, title, content \ print()  )

function Page ( url, title, content){
  this.url      = url;
  this.title    = title;
  this.content  = content;

  this.print = function(){
    console.log( this.url, this.title, this.content);
  };
}
  // ES6 classes & object
class Page{
  constructor(url, title, content) {
    this.url      = url;
    this.title    = title;
    this.content  = content;
  }
  print(){
    console.log( this.url, this.title, this.content );
  }
}

var p = new Page( "1.html" , "My page", "Lorem");
p.print();
