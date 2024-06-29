//Caching results Vieo from https://www.youtube.com/watch?v=vxggZffOqek&t=356s


const clumsySquare = (num1, num2) => {
    for ( let i = 0; i <= 100000000; i++ ){}
        return num1 * num2;
};

console.time("First Call");
console.log(clumsySquare(9467, 7649));
console.timeEnd("First Call");

console.time("Second Call");
console.log(clumsySquare(9467, 7649));
console.timeEnd("Second Call");

//If we run the upper code, we see first call takes less time but second call takes much time. 
//To resolve this, here is the code

function myMemoize(fn, context){
    const res = {}; //create a cache object
    return function(...args){
        var argsCache = JSON.stringify(args);
        if(!res[argsCache]){
            res[argsCache] = fn.call(context || this, ...args);
        }
        return res[argsCache];
    };
}

const clumsySquares = (num1, num2) => {
    for ( let i = 0; i <= 100000000; i++ ){}
        return num1 * num2;
};

const newClumsyresult = myMemoize(clumsySquares);

console.time("First Call");
console.log(newClumsyresult(9467, 7649));
console.timeEnd("First Call");

console.time("Second Call");
console.log(newClumsyresult(9467, 7649));
console.timeEnd("Second Call");

//This way first call wud be 99ms but second call wud be 0.00ms

//Understanding the Fibonacci Function, the most common example of memoization

let functionCalled = 0;
const fibonacci = (n) =>{
    if( n <= 1) return 1;
    functionCalled ++;
    return fibonacci(n - 1) + fibonacci(n - 2);
};

console.log(fibonacci(10)); //89
console.log(functionCalled); //88 times called

//To tackle this issue, we can implement memoization

let functionCalledTotal = 0;
const fibonacciRun = (n, memo = {}) => {
    if(n in memo) return memo[n];
    if(n <= 1) return 1;
    functionCalledTotal ++;
    return memo[n] = fibonacciRun(n -1, memo) + fibonacciRun(n - 2, memo);
}

console.log(fibonacciRun(10)); //89
console.log(functionCalledTotal); //9 times called


//----------------------------------------//

//multiple functions in single const

const calc = {
    total : 0,
    add(a){
        this.total += a;
        return this;
    },
    multiply(a){
        this.total *= a;
        return this;
    },
    substract(a){
        this.total -= a;
        return this;
    }
}

const result = calc.add(10).multiply(5).substract(20).add(10);
console.log(result.total);

//Call method - implicit and explicit binding

const person = {
    name: 'Shams',
    age: 46,
    greet: function(){
        console.log(`Hello my name is ${this.name} and my age is: ${this.age}`);
    }
};

const anotherPerson = {
    name: 'Harun',
    age: 35
}

//Call method
person.greet.call(anotherPerson);
//This will console Hello my name is Harun and my age is: 35


//Bind method
const bindPerson = person.greet.bind(anotherPerson);
bindPerson();
//This will console Hello my name is Harun and my age is: 35

//Apply method
