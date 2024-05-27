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