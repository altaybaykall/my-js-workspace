
const mylist = ['Cupra Leon','R34 Skyline'];

chat =  prompt("Ne Yapmak istersiniz ?"); 

while (chat  !== 'end') {
  chat =  prompt("Ne Yapmak istersiniz ?"); 
  
  if(chat == 'liste') {
   for(let i = 0 ; i < mylist.length; i++) {
       console.log([i],mylist[i]) ;
   }

  }
  else if(chat == 'new') {
    const newTodo =  prompt("Listeye ne eklemek istersin ?"); 
     mylist.push(newTodo);
     console.log(mylist)
  }
  else if(chat == 'delete') {
    const removeTodo =  prompt("Listeden neyi silmek istersin? index gir"); 
     const deleted = mylist.splice(removeTodo,1); 
     console.log(`Tamam ${deleted[0]} Silindi`)
  }


  
}

// Girilen sayıya göre gün dönen fonskiyon

function returnDay(day) {
  const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]; 
  if(day >= 1 && day <= 7) {
      let name = dayNames[day-1];
      return name;
    }
    else {
        return null
    }
}


// Verilen string'in son harfini print ediyor

function lastElement(arr) {
  if (arr.length === 0) {
    return null;
  } else {
    return arr[arr.length - 1];
  }
}

// toplam
function topla(...nums) {
  let sum = 0 ;
  for(let arg of nums) 
  sum+= arg; 
  return sum; 
  }


  function bankRobbery() {
    const heroes = ['Batman', 'Spiderman', 'Superman'];
  
    function Helpus() {
      for (let hero of heroes) {
        console.log(`Yardım edin pls ${hero}`)
      }
    }
    Helpus();
  }
  
  
  bankRobbery();


  function betweenNums(start,end) {
    for(let i = start ; end >= i ; i ++) {
        console.log(i)
    }
  }
  

