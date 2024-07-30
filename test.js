
const array1 = [
    { name: 'Shams', age: 45, gender: 'Male'},
    
    { name: 'Shams', age: 45, gender: 'Male'},
    
    { name: 'Shams', age: 45, gender: 'Male'},
    
    { name: 'Shams', age: 45, gender: 'Male'},
    
    { name: 'Shams', age: 45, gender: 'Male'}
];

const array2 = [
    { name: 'James', age: 45, gender: 'Male'},
    
    { name: 'James', age: 45, gender: 'Male'},
    
    { name: 'James', age: 45, gender: 'Male'},
    
    { name: 'James', age: 45, gender: 'Male'},
    
    { name: 'James', age: 45, gender: 'Male'}
];

function addTwo (...items){
    const data = items.flat();
    return data;
}

const resulting = addTwo(array1, array2);
console.table(resulting);