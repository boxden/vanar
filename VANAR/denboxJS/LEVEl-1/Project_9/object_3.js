// complex JavaScript literal - object
var site = {
  // properties
  name : "Webdesing Portfolio", /// site.about()
  domain : "Webdesing.folio", ///   site.pages[0].about()
  logo : {
    url : "images/logo.svg",  ///
    format : "svg",
    width : 300,          ///
    height: 100
  },
  pages : [
    {
      title : "Homepage",  ///
      url : "/home"        ///
    },     // 0
    {
      title : "Contact Info",
      url : "/contact"
    },     // 1
    {
      title : "About Us",
      url : "/about"
    }      // 2
  ]
};
// for in
for (var n in site.pages) {
  console.log( n , site.pages[ n ].title , site.pages[ n ].url );
}
for (var property in site) {
  console.log( property );
}
// for of // 
