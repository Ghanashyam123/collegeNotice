// Arrays
console.log("Arrays in JS");
var arr = [1, 2, 3, 4, 5];
console.log("Array:", arr);
console.log("First Element:", arr[0]);
console.log("Second Element:", arr[1]);
console.log("Third Element:", arr[2]);
console.log("Fourth Element:", arr[3]);
console.log("Fifth Element:", arr[4]);

// foreach loop
console.log("Using foreach loop");
arr.forEach((e) => {
  console.log(e);
});

// Operations on Array

// push
arr.push(6);
console.log("After push");
console.log(arr);

// pop
arr.pop();
console.log("After pop");
console.log(arr);

// shift
arr.shift();
console.log("After shift");
console.log(arr);

// unshift
arr.unshift(1);
console.log("After unshift");
console.log(arr);

// splice
arr.splice(2, 0, 2.5);
console.log("After splice");
console.log(arr);

// slice
console.log("After slice");
var arr2 = arr.slice(1, 2);
console.log(arr2);

// indexOf
console.log("Using indexOf");
console.log(arr.indexOf(3));

// lastIndexOf
console.log("Using lastIndexOf");
console.log(arr.lastIndexOf(3));

// length
console.log("Length of array");
console.log(arr.length);

// includes
console.log("Using includes");
console.log(arr.includes(3));
