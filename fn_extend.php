<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.fn.extend demo</title>
  <style>
  label {
    display: block;
    margin: .5em;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<label><input type="checkbox" name="foo"> Foo</label>
<label><input type="checkbox" name="bar"> Bar</label>
 
<script>
jQuery.fn.extend({
  check: function() {
    return this.each(function() {
      this.checked = true;
    });
  },
  uncheck: function() {
    return this.each(function() {
      this.checked = false;
    });
  }
});
 
// Use the newly created .check() method
$( "input[type='checkbox']" ).check();
</script>
 
</body>
</html>