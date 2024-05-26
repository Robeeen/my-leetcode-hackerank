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
