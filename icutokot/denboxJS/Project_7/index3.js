var bill = "Trebuie sa achitati 0200.00MDL.";

var pos  = bill.search("MDL") - 7;

var suma = bill.substr( pos, 7 );
//xxxx.xxMDL
// -> euro
const coef = 21.50;

var suma_euro = suma / coef;
 ///bill.search("MDL"); console.GOOGLE CHROMEs
/// bill.substr(10,5);

var style = "width: 200px; height: 100px; color: red;";

// width: xxxpx;
// otvet
// wight: 200
// height: 200

// style.search("width")
// style.search("width") + 7
// style.substr( style.search("width") + 7 , 3 )
// Ответ равен = 200 px width;

//!!Na dom!!---------------------

var div = "<div id='box' style='border: 1px solid blue;'>Hello DIV!!!</div>";
 
