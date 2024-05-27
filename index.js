// function Person(name){
//     this.name = name;
//     this.introDuction = function(){
//         console.log(`Hi, this is ${this.name}`);
//     }
// }

// const Lucie = new Person('lucie');
// Lucie.introDuction();


// const Recca = new Person('Recca');
// Recca.introDuction();

// //onject prototypes

// const myObject = {
//     city: 'Dhaka',
//     greet(){
//         console.log(`greetings from ${this.city}!`);
//     }
// }

// myObject.greet();


// //https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Test_your_skills:_Object-oriented_JavaScript

// class Shape{
//     name; sides; sideLength;

//     constructor(name, sides, sideLength){
//         this.name = name;
//         this.sides = sides;
//         this.sideLength = sideLength;
//     }

//     calcPerimeter(){
//         console.log(`Length of the ${this.name} is : ${this.sides * this.sideLength}`);
//     }

// }

// const newShape = new Shape('Square', 4, 5);
// newShape.calcPerimeter();

// const anotherShapce = new Shape('Triangle', 3, 3);
// anotherShapce.calcPerimeter();

// class Square extends Shape
// {
//     constructor(sideLength){
//         super('square'); //Must call super constructor in derived class before accessing 'this' or returning from derived constructor
//         this.sides = 4;
//         this.sideLength = sideLength;
//     }
//     calcArea(){
//      console.log(`${this.name} area: ${this.sideLength ** 2}`);
//     }
//  }

//  const square = new Square(5);
//  square.calcArea();
//  square.calcPerimeter();


 //we declare the requestURL variable to store the GitHub URL
 //we use the URL to initialize a new Request object.
 //we make the network request using the fetch() function, and this returns a Response object
 //we retrieve the response as JSON using the json() function of the Response object.

// parse(): Accepts a JSON string as a parameter, and returns the corresponding JavaScript object.
// stringify(): Accepts an object as a parameter, and returns the equivalent JSON string.


const section = document.querySelector('.section');

let para1 = document.createElement('p');
let para2 = document.createElement('p');
let motherInfo = 'The mother cats are called ';
let kittenInfo;
const requestURL = 'https://mdn.github.io/learning-area/javascript/oojs/tasks/json/sample.json';

fetch(requestURL)
  .then(response => response.text())
  .then(text => displayCatInfo(text))

function displayCatInfo(catString) {
  let total = 0;
  let male = 0;
let cats = JSON.parse(catString);
for(let i = 0; i < cats.length; i++){
    for(const kitten of cats[i].kittens){
        total++;
        //console.log(total);
        if(kitten.gender === 'm'){
        male++;
        }

        if(i < cats.length -1){
            motherInfo += `${cats[i].name},`;
        }else{
            motherInfo += `and ${cats[i].name}.`;
        }
    }
}

kittenInfo = `Total number of Kitten is ${total}, male is ${male} and female is ${total - male}.`;

// Add your code here

// Don't edit the code below here!

  para1.textContent = motherInfo;
  para2.textContent = kittenInfo;
}

section.appendChild(para1);
section.appendChild(para2);
    