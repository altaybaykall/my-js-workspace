let sonuc =document.getElementById('result')
let top_result =document.getElementById('inv-result')
let co_num = null; 
let say = []; 
let islem = [];
let co_islem = null;

function getValue(num) {
   say.push(num); 
   const combinedNum = say.join('');
   sonuc.value = combinedNum; 
   co_num =combinedNum ;  

}

function getIslem(get_islem) {
    if (co_num !== null ) {
    islem.push({ type: get_islem, value: parseInt(co_num)});
    }
   sonuc.value = '...'
   co_islem = get_islem;
   clear();
   printExpression()
}

function getResult() { 
    if (say.length > 0) {
       if (co_num !== null ) {
        islem.push({ type: co_islem, value: parseInt(co_num) });
       }
        say = [];
    }
   
    let result = parseInt(islem[0].value);

    for(let i = 1 ; i < islem.length; i ++) {

        const operation = islem[i].type;
        const value = parseInt(islem[i].value);
        
        if (operation === '+') {
            result += value;
        } else if (operation === '-') {
            result -= value;
        } else if (operation === '*') {
            result *= value;
        } else if (operation === '/') {
            result /= value;
        } 
        else if (operation === null) {
            result += value;
        }
    }
    sonuc.value = result;
    co_num = null;
    result = 0;
    printExpression()
    
}
function debug() {
    console.log('say'+ say)
    console.log('co_num'+ co_num) 
    console.log(islem)
    
}
function reset() {
    sonuc.value = '...';
    co_num =null; 
   say = [];
   islem= [];
   top_result.innerText= '...'

}
function clear(){
   co_num = null; 
   say = [];
}
function printExpression() {
    let expression = "";
    for (let i = 0; i < islem.length; i++) {
        const operation = islem[i].type;
        const value = islem[i].value;
       
         // 0 için if (-)  {value } + op 
         // 1 için op + value

            if (i == 0) {
                if(operation == '-') {
                    expression = expression +operation + value;
                }
                else {
                    expression += value;
                } 
            }
            else{
                    expression = expression + operation + value  ;
            }
    }
    top_result.innerText = expression
    
}
