// Identifiers are case-sensitive
// Identifiers must start with a letter, underscore, or dollar sign

// Variable Declaration
console.log("Variable Declaration in JS");

// Number
var num1 = 10;
let num2 = 20.5;
const num3 = 0.5;
var num4 = 0.5e-3;
var num5 = 0.5e3;
var num6 = 0.5e3;

console.log("Number Variables");
console.log(num1);
console.log(num2);
console.log(num3);
console.log(num4);
console.log(num5);
console.log(num6);

// String
var str1 = "Hello";
var str2 = "World";

// String Concatenation
var str3 = str1 + " " + str2;
console.log("Concatenated String");
console.log(str3);

// String Length
console.log("String Length");
console.log(str3.length);

// String Index
console.log("First Character of String");
console.log(str3[0]);

// Boolean
var bool1 = true;
var bool2 = false;

console.log("Boolean Values");
console.log(bool1);
console.log(bool2);

// Object
var obj = {
  name: "Nishan",
  age: 20,
};

console.log("Object Properties");
console.log(obj.name);
console.log(obj.age);

// Null
var n = null;

console.log("Null Value");
console.log(n);
console.log("This is " + n);

// Undefined
var u;

console.log("Undefined Variable");
console.log(u);

// Symbol
var sym1 = Symbol("foo");
var sym2 = Symbol("foo");

console.log("Symbol Comparison");
console.log(sym1 === sym2);

// Array
var arr = [1, 2, 3, 4, 5];

console.log("Array Elements");
console.log(arr[0]);
console.log(arr[1]);
console.log(arr[2]);
console.log(arr[3]);
console.log(arr[4]);

// Types of Operators

// Arithmetic Operators
var a = 10;
var b = 20;
var c = 30;

console.log("Arithmetic Operations");
console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);
console.log(a ** b);
console.log(a++);
console.log(a--);
console.log(++a);
console.log(--a);

// Comparison Operators
console.log("Comparison Operations");
console.log(a == b);
console.log(a != b);
console.log(a > b);
console.log(a < b);

// Logical Operators
console.log("Logical Operations");
console.log(a > b && a < c);
console.log(a > b || a < c);
console.log(!(a > b));

// Assignment Operators
console.log("Assignment Operations");
console.log((a += b));
console.log((a -= b));
console.log((a *= b));
console.log((a /= b));
console.log((a %= b));
console.log((a **= b));

// Conditional Operators
var age = 20;
console.log("Eligibility Check");
if (age >= 18) {
  console.log("Eligible to vote");
} else {
  console.log("Not eligible to vote");
}

// Ternary Operator
var age = 15;
var vote = age >= 18 ? "Eligible to vote" : "Not eligible to vote";
console.log("Ternary Operator Result");
console.log(vote);

// Switch Case
var signal = "red"; // Can be 'red', 'yellow', or 'green'

console.log("Traffic Signal Check");
switch (signal) {
  case "red":
    console.log("Stop");
    break;
  case "yellow":
    console.log("Slow down");
    break;
  case "green":
    console.log("Go");
    break;
  default:
    console.log("Invalid traffic signal");
}

// Loops

// For Loop
console.log("For Loop");
for (var i = 0; i < 5; i++) {
  console.log(i);
}

// While Loop
console.log("While Loop");
var i = 0;
while (i < 5) {
  console.log(i);
  i++;
}

// Do While Loop
console.log("Do While Loop");
var i = 0;
do {
  console.log(i);
  i++;
} while (i < 5);

// Foreach Loop
console.log("Foreach Loop");
var arr = [1, 2, 3, 4, 5];
arr.forEach((element) => {
  console.log(element);
});

//alert
alert("Hello Nishan ");

//confirm
confirm("Are you sure?");

//prompt
var myname = prompt("Enter your name");
console.log(myname);

// Function
function Car(name, model) {
  this.name = name;
  this.model = model;
}

// Object Creation
var car = new Car("BMW", "2021");

console.log("Car Object");
console.log(car.name);
console.log(car.model);
