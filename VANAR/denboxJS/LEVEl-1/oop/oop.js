// img.src
// document.querySelector()

// object literal
var person ={
  // properties
  fullname: "Johny Deppppp",
  job:      "Actor",
  age:      50,
  address:  "NY, 289/a",
  // method
  hello: function(){
    console.log("Hello, im a person!");
    console.log("Im living on" + this.address );
  }
};

console.log( person.fullname );
console.log( person.jo );
console.log( person.age );
