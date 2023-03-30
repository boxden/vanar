var images = [
  "http://blah/blah/1.jpg",
  "photos/2.jpg"
];




for (var index in images) {
  var url = images[ index ];
  console.log( index, url );

  // 1) -> name
  var parts = url.split("/");
  console.log( parts.pop() );
}
