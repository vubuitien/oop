<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.extend demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div id="log"></div>
 
<script>
var object1 = {
  apple: 0,
  banana: { weight: 52, price: 100 },
  cherry: 97
};
var object2 = {
  banana: { price: 200 },
  durian: 100
};
 
// Merge object2 into object1, recursively
$.extend( true, object1, object2 );
 
// Assuming JSON.stringify - not available in IE<8
$( "#log" ).append( JSON.stringify( object1 ) );
</script>
 
</body>
</html>