<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <script>

if (expression) {
  // code A
}
else {
  // code B
}
switch (expression) {
  case val1: /* code A */; break;
  case val2: /* code B */; break;
  case val3: /* code C */; break;
      // ...
  default: /* default code*/ break;
}

// 1 -> "Monday"

var day = prompt( "Which day is it:? " );

switch (day) {
  case "1": alert("Modnay"); break;
  case "2": alert("Tuesday"); break;
  case "3": alert("Wednesday"); break;
      // ...
  default: alert("Worng value") break;
}


  </script>
</body>
</html>
