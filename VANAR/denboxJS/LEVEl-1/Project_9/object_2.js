// complex JavaScript literal - object
var site = {
  about: function(){
    console.log( this );
  },
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
      about: function(){
        console.log( this );
      },
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
