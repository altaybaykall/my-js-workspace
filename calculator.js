let sonuc =document.getElementById('result')
let top_result =document.getElementById('inv-result')
let nums = []; 
let co_num = 0; 
let say = []; 
let islem = [];

function getValue(num) {
   say.push(num); 
   const combinedNum = say.join('');
   sonuc.value = combinedNum; 
   co_num =combinedNum ;  

}


function getIslem(get_islem) {
   
   const currentNumber = parseInt(say.join(''));
   islem.push({ type: get_islem, value: currentNumber });
   sonuc.value = islem; 
   clear();
}


function getResult() {
    if (say.length > 0) {
        const currentNumber = parseInt(say.join(''));
        islem.push({ type: 'number', value: currentNumber });
        say = [];
    }

    let result = islem[0].value;

    for (let i = 1; i < islem.length; i++) {
        const operation = islem[i].type;
        const value = islem[i].value;

        if (operation === '+') {
            result += value;
        } else if (operation === '-') {
            result -= value;
        } else if (operation === '*') {
            result *= value;
        } else if (operation === '/') {
            result /= value;
        }
    }

    sonuc.value = result;
    islem = [];
}


function getResult2() {
    clear();
    let sum = 0 ;
    const intArray = nums.map((str) => parseInt(str));
    for(let arg of intArray) 
    sum+= arg;  
    sonuc.value = sum;

    
}
function reset() {
    sonuc.value = '...';
    co_num = 0; 
   say = [];
   nums = [];
}
function clear(){
    nums.push(co_num);
   co_num = 0; 
   say = [];
}
