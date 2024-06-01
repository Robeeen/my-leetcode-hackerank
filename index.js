function Person(name){
    this.name = name;
    this.introDuction = function(){
        console.log(`Hi, this is ${this.name}`);
    }
}

const Lucie = new Person('lucie');
Lucie.introDuction();


const Recca = new Person('Recca');
Recca.introDuction();

//onject prototypes

const myObject = {
    city: 'Dhaka',
    greet(){
        console.log(`greetings from ${this.city}!`);
    }
}

myObject.greet();


//https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Test_your_skills:_Object-oriented_JavaScript

class Shape{
    name; sides; sideLength;

    constructor(name, sides, sideLength){
        this.name = name;
        this.sides = sides;
        this.sideLength = sideLength;
    }

    calcPerimeter(){
        console.log(`Length of the ${this.name} is : ${this.sides * this.sideLength}`);
    }

}

const newShape = new Shape('Square', 4, 5);
newShape.calcPerimeter();

const anotherShapce = new Shape('Triangle', 3, 3);
anotherShapce.calcPerimeter();

class Square extends Shape
{
    constructor(sideLength){
        super('square'); //Must call super constructor in derived class before accessing 'this' or returning from derived constructor
        this.sides = 4;
        this.sideLength = sideLength;
    }
    calcArea(){
     console.log(`${this.name} area: ${this.sideLength ** 2}`);
    }
 }

 const square = new Square(5);
 square.calcArea();
 square.calcPerimeter();


 //we declare the requestURL variable to store the GitHub URL
 //we use the URL to initialize a new Request object.
 //we make the network request using the fetch() function, and this returns a Response object
 //we retrieve the response as JSON using the json() function of the Response object.

// parse(): Accepts a JSON string as a parameter, and returns the corresponding JavaScript object.
// stringify(): Accepts an object as a parameter, and returns the equivalent JSON string.

//https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/Test_your_skills:_JSON

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
    }

        if(i < cats.length -1){
            motherInfo += `${cats[i].name}, `;
        }else{
            motherInfo += `and ${cats[i].name}.`;
        }
    
}

kittenInfo = `Total number of Kitten is ${total}, male is ${male} and female is ${total - male}.`;

  para1.textContent = motherInfo;
  para2.textContent = kittenInfo;
}

section.appendChild(para1);
section.appendChild(para2);


//Uplaoding a File with Js.  FormData() and fetch().

// async function uploadFiles(){
//     try{
//     const response = await fetch("https://example.com", {
//         method : "PUT",
//         body : FormData,
//     });
//     const result = await response.json();
//     console.log("Success:", result);
//     }
//     catch(error){
//         console.error("Error:", error);
//     }
// }

// const formData = new formData();
// const fileField = document.querySelector('input[type="file"]');

//formData.append('username', '12345');
//formData.append('avatar', fileField.file[0]);

//Pokemon search images project with fetch

async function fetchData(){
    try{
        const pokemonName = document.getElementById('pokemonName').value.toLowerCase();

        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`);
        if( !response.ok){
            throw new Error("There is a problem with the fetch url")
        }
        const result = await response.json(); //now we get the data for specific typed pokemon name
        //console.log(result);
        const pokemonSprite = result.sprites.front_default; //now we get the url of the image to set on image src=""
        const frontEnd = document.getElementById('pokemonFry');

        frontEnd.src = pokemonSprite; //now set the image url it is pokemonFry
        frontEnd.style = 'block'; //unhide the image

    }catch(error){
        console.error("Error:", error);
    }
}

displayData();
async function displayData(){
    try{
        const pokemonList = document.getElementById('pokemonList');
        const newresponse = await fetch('https://pokeapi.co/api/v2/pokemon/');

        if(!newresponse.ok){
            throw new Error("Problem with the URL");
        }
        const data = await newresponse.json();       
        const names = data.results;
        
        for(let name of names){
            pokemonList.innerHTML += `Name: ${name.name}, URL:${name.url} <br>`;
        }        
    }
    catch(error){
        console.error("Error:", error);
    }
}

//Async Function Await Promise : check

function walkDog(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const dogWalk = true;

            if(dogWalk){
                resolve("You have taken walk Dog task");
            }else{
                reject("You missed the walk dog!");
            }
        }, 1500);
    });
}

function cleanDog(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const cleaned = true;
            if(cleaned){
                resolve("You have cleaned the Dog task");            
            }else{
                reject("You missed to clean the dog yet!");
            }
        }, 2500);
    });
}

function feedDog(){
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const feed = true;
            if(feed){
                resolve("You have feeded the dog");
            }else{
                reject("You missed to feed the dog");
            }
        }, 3000);
    });
}

async function doTasks(){
    const firstTask = await walkDog();
    console.log(firstTask);

    const secondTask = await cleanDog();
    console.log(secondTask);

    const thirdTask = await feedDog();
    console.log(thirdTask);

    console.log("You have done all tasks!!")
}

doTasks();

//DOM -  create a simple function — chooseName() — that prints a random name from the provided array (names)\
// to the provided paragraph (paras), and then run it once.

const names = ['prova', 'soma', 'kayak', 'nova', 'hanna'];
const paras = document.createElement('p');
//https://stackoverflow.com/questions/7350363/select-a-random-string-from-an-array
function chooseName(){
    const chosenName = Math.floor(Math.random()*names.length);
    const display = names[chosenName];
    paras.textContent = display;
}

chooseName();
array_name.innerHTML = ' ';
array_name.style.background = '#c2c2c2';

array_name.appendChild(paras);


//Create a function to start drawing rectangle on canvas

const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

const x = 50;
const y = 60;
const width = 100;
const height = 75;
const color = '#c2c2c2';

ctx.beginPath();
ctx.fillStyle = color;//Color has to place in first to get color
ctx.fillRect(x,y,width, height);

//Function: 3



const namesii = ['Chris', 'Li Kang', 'Anne', 'Francesca', 'Mustafa', 'Tina', 'Bert', 'Jada']
const para = document.createElement('p');

// Add your code here

function random(min, max){
   return Math.floor(Math.random() * (max - min + 1) + min);
}

function chooseNames(){
  const cname = random(0,2);
  const randoms = namesii[cname];
  para.textContent = randoms;
}

chooseNames();

// Don't edit the code below here!

section.innerHTML = ' ';

section.appendChild(para);




