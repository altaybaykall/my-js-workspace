console.log("selammm")

let num = 32;
let bak = 'baktım söle geebeş';
const kumem = ['türk','kürt','ermeni']

let random = Math.random();
if (random < 0.5) {
console.log("DOĞRU");
}

const car= {
  brand : 'Bmw',
  model : 'm4',
  year : '2020',
} 

console.log(32 % 2)


const person = {
    firstName: "John",
    lastName: "Doe",
    age: 50,
    eyeColor: "blue"
  }

  console.log(person.firstName)
  document.write(this.bak)
  

  for (let i = 6; i < 10; i++) {
    document.write(bak)
  }


  document.write(`bakk ya ${num} ${kumem[0]}`)
  console.log(kumem.indexOf('türk'))
  console.log(car.brand);

  const restaurant = {
    name: 'Ichiran Ramen',
    address: `${Math.floor(Math.random() * 100) + 1} Johnson Ave`,
    city: 'Brooklyn',
    state: 'NY',
    zipcode: '11206',
}
let fullAddress =` ${restaurant.name} ${restaurant.address} ${restaurant.city} ${restaurant.state}`
console.log(fullAddress);
restaurant.siparis;
restaurant.siparis = '123421';
console.log(restaurant);


const comments = [
  {username:'altay',
  text:'ashahahaha'},
  
  {username:'baykal',
  text:'asfdasdasdas'
}
]

let n = 5; // row or column count
// defining an empty string
let string = "";

for(let i = 1; i <= n; i++) { // external loop
  
  for(let k = 0 ; k <= n-i ; k ++) {
    string += " ";
  }
  
  for(let j = 0; j <= 2*(i-1) ; j++) { // internal loop
    string += "*";
  }
  
  // newline after each row
  string += "\n";
}


// printing the string
let text = '';
const mylist = ['Cupra Leon','R34 Skyline'];


for(let x in mylist ) {
  text += mylist[x] + "<br>";
  for(const y of text[0]){
    text += y ;
  }
}
document.write(text)

const myFunction = function (a, b) {return a * b};

function myFunction2 (a,b) {
  return a+b;
}
let x = myFunction(4, 3);
let m = myFunction2(2,3);


const islem = {
     topla(a,b) {
      return a+b;
     },
     carp : function(a,b) {
      return a*b;
     }

}


const cat = {
  name : 'panda',
  color : 'mixed',
  meow() {
    console.log(this.color + " meowladı" + this.color)
  }
}

const hen = {
  name : 'Helen',
  eggCount : 0,
  layAnEgg () {
      this.eggCount = this.eggCount + 1;
      return console.log('EGG')
  }
}


const texts = ['rofl', 'lol','omg'];
const caps = texts.map(function(text){
     return text.toUpperCase();
})

function buyut2 (a) {
  return a.toUpperCase;
}
const sum = (a,b) => ( a+b )
const buyut = (yazi) => ( yazi.toUpperCase())

const caps2 = texts.map( text => 
   text.toUpperCase()
)

setTimeout(() => {
  console.log("...orada mısnı ?")
}, 2000)


function validUserNames (arr) {
  const filtered = arr.filter(function(name) {
      return name.length < 10;
  })
  return filtered;
}

//const validUserNames = usernames => usernames.filter(usr => usr.length < 10);

