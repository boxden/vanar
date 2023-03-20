var images = [
  "http://blah/blah/1.jpg",
  "photos/2.jpg"
];




for (var index in images) {
  var url = images[ index ];

  // 1) -> name
  var parts = url.split("/");
  var name = parts.pop();

  // 2) -> format
  parts = name.split(".");
  var format = parts.pop();
  console.log( index, url, name, format  );

}
