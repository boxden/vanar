// complex JavaScript literal - object
var estore = {
  // properties
  name   : "WallMart", /// site.about()
  domain : "wallmart.com", ///   site.pages[0].about()
  client : {
    firstname : "Ivan",
    lastname  : "Jorin",
    cart :[
      {
        name     : "beaf",
        quantity : "1kg",
        cost     : 34.50
      },
      {
        name     : "milk",
        quantity : "2.5L",
        cost     : 12.00
      },
      {
        name     : "bread",
        quantity : "3",
        cost     : 24.00
      }
    ]
  },
  bill : function(){ },
};
estone.bill();
// wallmart (wallmart.com)
//------------------------Мне надо что бы так показало в консоле
// Ivan Jorin
// 1. beaf (1kg) -34.50
// 2. milk (2.5L) -12.50
// 3. bread (3) -24.00
// total: 70.50
// -----------------------
//Google Console.
// estore
