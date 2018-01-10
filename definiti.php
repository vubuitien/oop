<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
	function myFunction(a, b, c, d) {
	    return arguments.length; // Đếm số lượng tham số trong hàm
	}
	document.getElementById("demo").innerHTML = myFunction(4, 3, 2, 1);
</script>
--------------------------------------------------------------------------

<p id="demo1"></p>
<script>
	var x = myFunction(4, 3); //giá trị tham số
	document.getElementById("demo1").innerHTML = x;

	function myFunction(a, b) {
	    return a * b; // Biểu thức của tham số
	}
</script>
--------------------------------------------------------------------------

<p id="demo2"></p>
<script>
	function myFunction(a, b) {
	    return a * b;
	}
	document.getElementById("demo2").innerHTML = myFunction.toString(); // Trả giá trị về hàm dạng chuỗi(STRING)
</script>
--------------------------------------------------------------------------

<p id="demo3"></p>
<script>
	function myFunction(a, b) {
	    return a * b;
	}
	document.getElementById("demo3").innerHTML = window.myFunction(10, 2); //window.myFunction() tương tự như myFunction()
</script>
--------------------------------------------------------------------------

<p id="demo4"></p>
<script>
	var myObject = {
	    firstName:"John",
	    lastName: "Doe",
	    fullName: function() {
	        return this.firstName + " " + this.lastName; //show giá trị của hàm theo thứ tự: 'firstname' + '' + 'lastname'
	    }
	}
	document.getElementById("demo4").innerHTML = myObject.fullName(); 
</script>
--------------------------------------------------------------------------

<p id="demo5"></p>
<script>
	function myFunction(arg1, arg2) {
	    this.firstName = arg1;
	    this.lastName  = arg2;
	}

	var x = new myFunction("John","Doe") //Khai báo giá trị tham số
	document.getElementById("demo5").innerHTML = x.firstName; // Gọi giá trị tham số firstName
</script>
--------------------------------------------------------------------------

<p id="demo6"></p>
<script>
	var person = {
	    firstName : "John",
	    lastName  : "Doe",
	    age       : 50,
	    eyeColor  : "blue"
	};

	document.getElementById("demo6").innerHTML =
	person.firstName + " is " + person.age + " years old.";
</script>
--------------------------------------------------------------------------

<p id="demo7"></p>
<script>
	var person = {
	    firstname:"John",
	    lastname:"Doe",
	    age:50,
	    eyecolor:"blue"
	};
	document.getElementById("demo7").innerHTML =
	person["firstname"] + " is " + person["age"] + " years old."; // Thay vì dùng person.firstname thì dùng person["firstname"]
</script>
--------------------------------------------------------------------------

<p id="demo8"></p>
<script>
	var txt = "";
	var person = {fname:"John", lname:"Doe", age:25}; 
	var x;
	for (x in person) {
	    txt += person[x] + " ";
	}
	document.getElementById("demo8").innerHTML = txt; //Hàm trả về giá trị John Doe 25
</script>
--------------------------------------------------------------------------

<p id="demo9"></p>
<script>
	var person = {
	    firstname:"John",
	    lastname:"Doe",
	    age:50,
	    eyecolor:"blue"
	};
	person.nationality = "English"; //Thêm giá trị cho hàm person
	document.getElementById("demo9").innerHTML =
	person.firstname + " is " + person.nationality + "."; //Trả về giá trị: John is English.
</script>
--------------------------------------------------------------------------

<p id="demo10"></p>
<script>
	var person = {
	    firstname:"John",
	    lastname:"Doe",
	    age:50,
	    eyecolor:"blue"
	};
	delete person.age; //Xóa giá trị age:50
	document.getElementById("demo10").innerHTML =
	person.firstname + " is " + person.age + " years old."; //Giá trị trả về :John is undefined years old. Do đã xóa person.age nên trả về giá tị undefined.
</script>
--------------------------------------------------------------------------

<p id="demo11"></p>
<script>
	var person = {
	    firstName: "John",
	    lastName : "Doe",
	    id       : 5566,
	    fullName : function() {
	       return this.firstName + " " + this.lastName;
	    }
	};

	document.getElementById("demo11").innerHTML = person.fullName(); // Nếu có () thi trả về giá trị John Doe
	// or document.getElementById("demo11").innerHTML = person.fullName; // Nếu không có () thì trả về giá trị "function () { return this.firstName + " " + this.lastName; }"
</script>
--------------------------------------------------------------------------

<p id="demo12"></p>
<script>
function Person(first, last, age, eye) { //Khai báo tham số cho hàm
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}

var myFather = new Person("John", "Doe", 50, "blue"); // Khai báo giá trị cho myFather
var myMother = new Person("Sally", "Rally", 48, "green"); // Khai báo giá trị cho myMother

document.getElementById("demo12").innerHTML =
"My father is " + myFather.age + ". My mother is " + myMother.age; 
</script>
--------------------------------------------------------------------------

<p id="demo13"></p>
<script>
	function Person(first, last, age, eye) {
	    this.firstName = first;
	    this.lastName = last;
	    this.age = age;
	    this.eyeColor = eye;
	}
	Person.nationality = "English"; //Khai báo thêm tham số cho hàm Person

	var myFather = new Person("John", "Doe", 50, "blue"); //Khai báo giá trị cho myFather
	var myMother = new Person("Sally", "Rally", 48, "green"); // Khai báo giá trị cho myMother

	document.getElementById("demo13").innerHTML =
	"The nationality of my father is " + myFather.nationality; //Kết quả trả về: The nationality of my father is undefined. Do .nationality chỉ khai báo cho hàm Person chứ không có khai báo cho myFather nên trả kết quả về undefined
</script>
--------------------------------------------------------------------------

<p id="demo14"></p>
<script>
	function Person(first, last, age, eye) {
	    this.firstName = first;
	    this.lastName = last;
	    this.age = age;
	    this.eyeColor = eye;
	}
	Person.prototype.nationality = "English"; //Khai báo giá trị mới cho Person

	var myFather = new Person("John", "Doe", 50, "blue");
	document.getElementById("demo14").innerHTML =
	"My father is " + myFather.nationality;  //.prototype có thể lấy thông số cũ mà không lỗi
</script>
--------------------------------------------------------------------------

<p id="demo15"></p>
<script>
	function findMax() {
	    var i;
	    var max = -Infinity;
	    for(i = 0; i < arguments.length; i++) {
	        if (arguments[i] > max) {
	            max = arguments[i];
	        }
	    }
	    return max;
	} 
	document.getElementById("demo15").innerHTML = findMax(4, 5, 2);// Tìm giá trị lớn nhất trong tham số. =>5
</script>
--------------------------------------------------------------------------
 </br>
<button type="button" onclick="myFunction()">Count!</button>

<p id="demo16">0</p>

<script>
var add = (function () {
    var counter = 0;
    return function () {return counter += 1;}
})();

function myFunction(){
    document.getElementById("demo16").innerHTML = add(); //Khi click vào button tự động tăng thêm 1
}


</script>
</body>
</html>
