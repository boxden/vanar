//WORKS
for (var i=0; i<10; i++)
{
    (function(num){
      setTimeout(function(){
        console.log(num);
      }, 1000);
    })(i);
}
