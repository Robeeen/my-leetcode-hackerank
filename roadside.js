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