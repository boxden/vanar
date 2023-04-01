students = [
   "Ion P.",
   "Maria M.",
   "Valentina V"
];
index = 2;
while ( index => 0 ){
   console.log ( students [ index ]);
   index--;
}

///////////////////

students = [
   "Ion P.",
   "Maria M.",
   "Valentina V"
];
name = prompt ("Who?");
index = 0;
while ( index <=2 ){

 if ( name == students [index]){
    console.log ("found", index);
}
index++;
}
