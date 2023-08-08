const colorButton = document.querySelector('#button');
const colorText = document.querySelector('#rgb');
const body_bg = document.body;

let old_colors= []
let check = false;

colorButton.addEventListener('click', function () {
  randomColor();
});
 
function randomColor() {
   const r =  Math.floor(Math.random()*256);
   const g =  Math.floor(Math.random()*256);
   const b =  Math.floor(Math.random()*256);
   const last_rgb =`rgb(${r},${g},${b})`

   
   if (check) {
    refreshOldColors();
  }
   
   body_bg.style.backgroundColor = last_rgb;
    old_colors.push(last_rgb)
    colorText.innerText = last_rgb;
    check = true;

 
}

function refreshOldColors(){
   const newDiv = document.createElement("div");
    newDiv.className = 'color';
    newDiv.style.backgroundColor = old_colors[old_colors.length -1 ];
    
    const newColorText = document.createElement('h3');
    newColorText.textContent = old_colors[old_colors.length -1 ];
   
    newDiv.appendChild(newColorText);
    const oldColorsDiv = document.querySelector('#old-colors');
    oldColorsDiv.insertBefore(newDiv,oldColorsDiv.firstChild);

}