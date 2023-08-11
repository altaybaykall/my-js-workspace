const question_num = document.querySelector('.question-num');
const question = document.querySelector('.question');
const quiz_box = document.querySelector('.quiz-box');
const buttons = document.querySelectorAll('#cevap')
const next = document.querySelector('#next')
const start = document.querySelector('.start-box')
const restart = document.querySelector('#restart')
const end_display = document.querySelector('.end-box')
const correct_display = document.querySelector('#correct-count')
const response = document.querySelector('#response')
const dogru_display = document.querySelector('#dogru_display')
const yanlis_display = document.querySelector('#yanlis_display')
const result = document.querySelector('#result')

let quest_num_count = 0;
let quest_correct_count = 0;
let sorular = '' ;

fetch('quiz.json')
  .then(response => response.json())
  .then(data => {
    sorular = data;
  });
next.addEventListener('click',newSoru);
start.addEventListener('click',startGame);
restart.addEventListener('click',startGame);

function startGame() {
   quest_num_count = 0;
  quest_correct_count = 0;
  end_display.style.display = 'none'
  start.style.display = 'none'
  result.style.display = 'none';
    quiz_box.style.display = 'block'
    newSoru()
}
//parseInt(quest_num_count) == sorular.length 
 function endGame() {
  if(quest_num_count == sorular.length) {
   result.style.display = 'block';
   next.style.display = 'none';
     result.addEventListener('click',function(){
      quiz_box.style.display = 'none';
      end_display.style.display = 'block'
      dogru_display.innerText = quest_correct_count + ' ' +'Doğru';
      yanlis_display.innerText = (sorular.length - quest_correct_count) + ' ' + 'Yanlış';
      quest_num_count =  0;
      quest_correct_count = 0;
     });
  }
  return;
 }

function disableQuestion() {
     for(let button of buttons) {
        button.disabled = true;
     }

}

function newSoru() {
  const newSoru = sorular[quest_num_count];
  quest_num_count++;
  question_num.innerText = quest_num_count;
  question.innerText = newSoru.soru;
  correct_display.innerText = quest_correct_count + '/' + (quest_num_count - 1);
  returnResponse('clear');
  updateButtons(newSoru.cevaplar);
}

function updateButtons(cevaplar) {
  for (let i = 0; i < buttons.length; i++) {
      const cevap = cevaplar[Object.keys(cevaplar)[i]];
      updateButton(buttons[i], cevap);
  }
}

function updateButton(button, cevap) {
  button.innerText = cevap;
  button.style.backgroundColor = '#0d6efd';
  next.style.display = 'none';
  button.disabled = false;
  button.removeEventListener('click', buttonClickHandler);
  button.addEventListener('click', buttonClickHandler);
}


function buttonClickHandler() {
  const newSoru = sorular[quest_num_count - 1];
  const correctButton = getCorrectButton(newSoru.cevaplar[newSoru.cevap]);
  const clickedValue = this.innerText;
  
  if (correctButton.innerText === clickedValue) {
      this.style.backgroundColor = 'green';
      next.style.display = 'block';
      quest_correct_count++;
      returnResponse(true);
  } else {
      this.style.backgroundColor = 'red';
      correctButton.style.backgroundColor = 'green';
      next.style.display = 'block';
      returnResponse(false);
  }
  
  disableQuestion();
  endGame();
}





function getCorrectButton(correctValue) {
  for (let i = 0; i < buttons.length; i++) {
      if (buttons[i].innerText === correctValue) {
          return buttons[i];
      }
  }
}

function returnResponse(result) {
   if(result == true) {
    response.innerHTML = "Doğru !!!"
    response.style.display = 'Flex'
    response.style.color = 'green'
   }
   else if (result == 'clear') {
    response.style.display = 'none'
   } 
   else {
    response.innerHTML = "Yanlış Cevap"
    response.style.display = 'Flex'
    response.style.color = 'red'
   }
   
}