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
  this.Vdate   = date;
}
  show(){
    console.log( this.title + "\n", this.text + "\n" ,this.author, this.date);
  }
  get date(){
    return this.Vdate.split("-")[2];
  }
  set date( value ){
    if (value.split("-")[2] == 2016 ){
      this.Vdate = value;
    }
    else {
      alert("Hi");
    }
  }
}

var m = new Message("Hello, Ivan!", "Hello Ivan , you play the game Grand Theft Auto V ?", "Moldcell", "15-06-2016");

m.date = "16-06-2017";
alert( m.date );
