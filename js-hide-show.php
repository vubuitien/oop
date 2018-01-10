<button onclick="show()" id="button">show</button>
<button onclick="hide()" id="button">hide</button>
<div id="myDIV">
	This is my DIV element.
</div>
<script>
	 var x = function(nd){
	 	return document.getElementById(nd);
	 };

	function show(){
		x("myDIV").style.display = "block";
	}
	
	function hide(){
		x("myDIV").style.display = "none";
	}
</script>