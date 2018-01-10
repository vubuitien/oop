<p id="demo7"></p>
    <script>
      function Person() {
  this.firstName = 'Per';
  this.lastName = 'son';
  this.sayName = function() { return firstName + ' ' + lastName };
}

// Viết một Constructor Function khác
function SuperMan(firstName, lastName) {
  this.firstName = firstName;
  this.lastName = lastName;
}

// Ta muốn SuperMan sẽ kế thừa các thuộc tính của Person
// Sử dụng prototype để kế thừa
SuperMan.prototype = new Person();

// Tạo một object mới bằng Constructor Function 
var sm = new SuperMan('Hoang', 'Pham');

document.getElementById("demo7").innerHTML = sm.firstName;
    </script>
