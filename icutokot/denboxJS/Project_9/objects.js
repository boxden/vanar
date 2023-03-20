var person = {
  name: "Vasilii T.",
  job : "Developer",
  about: function(){
    alert("I'm a Developer!!!");
    alert("My name is " + this.name );
  }
};
person.about();
////////////////////////////////////////// JSON ///////////// Используется на серверах
var country = {//////////////// JavaScript Object Notation ///////////////////////////
  name: "Moldova",
  population: 3000000,
  capital: {
    name: "Chishinau",
    population: 800000
  },
  about: function(){
    alert( this.capital.name );
  }
};
country.capital.name;
// Вложенность s
