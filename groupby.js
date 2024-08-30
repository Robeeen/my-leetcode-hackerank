const products = [
    { name: "T-shirt", category: "cloths", price: 50 },
    { name: "Apple", category: "foods", price: 5 },
    { name: "Orange", category: "foods", price: 4 },
    { name: "Trousers", category: "cloths", price: 20 }
];


const groupbyProducts = Object.groupBy(products, (p) => p.category);


console.log(groupbyProducts);