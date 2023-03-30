// prototyping - massovoe sozdovanie objectov
//-----------------------------------------//
// prototyping - mass object creation
// object ->>> template for objects


// 1) prototype/constructor ES5
// a) - prototype
function Person( firstname, lastname, age){
  // skeleton
  this.firstname = firstname;
  this.lastname  = lastname;
  this.age       = age;
  this.about     = function(){
    console.log("I am a person, my name is " + this.firstname );
  };
}
// b) create new object
var p1 = new Person( "Valerii", "Vasilievic", 80 );
var p2 = new Person( "Mariana", "Petrovna", 40 );
p1.about();
p2.about();
// 2) Class   / constructor ES6
