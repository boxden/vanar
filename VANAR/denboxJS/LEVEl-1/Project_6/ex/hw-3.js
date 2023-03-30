var my_friends = ["Tanea", "Ivan", "Katea"];
var her_friends = ["Olesik", "Musik", "Katea"];

for(var m = 0; m < my_friends.length; m++){
  if( her_friends.indexOf( my_friends[ m ] ) == -1 ) // esli ne naiden drug v her_friends
  {
      her_friends.push( my_friends );
  }

}
var our_friend = her_friends;
console.log(our_friend);
