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

//----------------------------------------//

//multiple functions in single const

const calc = {
    
}

const result = calc.add(10).multiply(5).substract(20).add(10);
console.log(result.total);