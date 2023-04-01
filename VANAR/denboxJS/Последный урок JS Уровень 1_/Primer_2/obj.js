// method()
// get
// set
// * generator()
'use strict';
// ES6
// Message ( title, text, author, date | show() -> console )
class Message {
  constructor(title, text, author, date ){
  this.title  = title;
  this.text   = text;
  this.author = author;
  this.date   = date;
}
  show(){
    console.log( this.title + "\n", this.text + "\n" ,this.author, this.date);
  }
}

var m = new Message("Hello, Ivan!", "Hello Ivan , you play the game Grand Theft Auto V ?", "Moldcell", "15.06")

m.date = "16.06";

m.show();
