//function call for all the buttons mention in html page
function showAlert() {
  alert("Hello Nishan ! How are you?");
}

//show prompt
function showPrompt() {
  var myname = prompt("Enter your name ");
  if (myname) {
    document.getElementById(
      "message"
    ).textContent = `Hello ${myname}! How are you?`;
  }
}

//show conform

function showConfirm() {
  var response = confirm("Do you want to continue?");
  if (response) {
    document.getElementById("message").innerHTML = "You clicked Ok";
  } else {
    document.getElementById("message").textContent = "You clicked Cancel";
  }
}

//show url

function showUrl() {
  var url = window.location.href;

  document.getElementById("message").textContent = `This is your url ${url}`;
}

//redirect to google
function redirectToGoogle() {
  window.location.href = "https://www.google.com";
}

//start timeout
function startTimeOut() {
  var time = setTimeout((e) => {
    alert("Time Out");
  });
}

//stop timeout
function stopTimeOut() {
  clearTimeout(time);
}

function startInterval() {
  var interval = setInterval((e) => {
    alert("Inerval");
  }, 3000);
}

function stopInterval() {
  clearInterval(interval);
}

function showDate() {
  var date = new Date();
  document.getElementById("message").textContent = `Current Date is ${date}`;
}

//using arrow function

let timeoutID;
startTimeOut = () => {
  timeoutID = setTimeout(() => {
    alert("Time Out");
  }, 5000);
  document.getElementById("message").textContent = "Timeout started";
};

stopTimeOut = () => {
  clearTimeout(timeoutID);
  document.getElementById("message").textContent = "Timeout cleared";
};

startInterval = () => {
  timeoutID = setInterval(() => {
    alert("Interval");
  }, 5000);
  document.getElementById("message").textContent = "Interval started";
};

stopInterval = () => {
  clearInterval(timeoutID);
  document.getElementById("message").textContent = "Interval stopped";
};

// String Object in JS
console.log("String in JS");
var str = "nishan dhakal";
console.log("Length:", str.length);
console.log("Uppercase:", str.toUpperCase());
console.log("Lowercase:", str.toLowerCase());
console.log(
  "Replace 'nishan' with 'javascript':",
  str.replace("dhakal", "javascript")
);
console.log("First character:", str[0]);
console.log("Substring (0,5):", str.substring(0, 5));
console.log("Split into array:", str.split(""));

// Number Methods
console.log("\nNumber Methods in JS");
var num = 123.456;
console.log("Fixed(0):", num.toFixed(0));
console.log("Fixed(2) (Round off):", num.toFixed(2));
console.log("Precision(5):", num.toPrecision(5));
console.log("Is Integer:", Number.isInteger(num));
console.log("Is Safe Integer:", Number.isSafeInteger(num));
console.log("Is NaN:", Number.isNaN(num));
console.log("Is Finite:", Number.isFinite(num));

// Boolean Object
console.log("\nBoolean Object in JS");
var bool = true;
console.log("To String:", bool.toString());
console.log("Value Of:", bool.valueOf());

// Date Object
console.log("\nDate Object in JS");
var date = new Date();
console.log("Current Date:", date);
console.log("Year:", date.getFullYear());
console.log("Month (0-based):", date.getMonth());
console.log("Date:", date.getDate());
console.log("Hours:", date.getHours());
console.log("Minutes:", date.getMinutes());
console.log("Seconds:", date.getSeconds());
console.log("Time in milliseconds since Jan 1, 1970:", date.getTime());
console.log("Day of the week (0-Sunday, 6-Saturday):", date.getDay());
console.log("Timezone Offset:", date.getTimezoneOffset());
console.log("Date String:", date.toDateString());

// Math Object
console.log("\nMath Object in JS");
console.log("PI:", Math.PI);
console.log("Euler's Number (E):", Math.E);
console.log("Round(2.5):", Math.round(2.5));
console.log("Ceil(2.5):", Math.ceil(2.5));
console.log("Floor(2.5):", Math.floor(2.5));
console.log("Power (2^3):", Math.pow(2, 3));
console.log("Square Root of 4:", Math.sqrt(4));
console.log("Absolute Value of -5:", Math.abs(-5));
console.log("Sine of 90 radians:", Math.sin(90));
console.log("Cosine of 90 radians:", Math.cos(90));
console.log("Tangent of 45 radians:", Math.tan(45));
console.log("Minimum of (1, 2, 3, 4, 5, 6):", Math.min(1, 2, 3, 4, 5, 6));
console.log("Maximum of (1, 2, 3, 4, 5, 6):", Math.max(1, 2, 3, 4, 5, 6));
