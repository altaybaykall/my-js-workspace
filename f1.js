

  var redbull = document.getElementById('redbull');
  var redbullbrand = document.getElementById('redbullbrand');
  var p1 = document.getElementById('pilot1');
  var p2 = document.getElementById('pilot2');
  var title = document.querySelector('span');

  title.style.color = "yellow";
  title.style.fontSize = "2rem";
  title.style.position = "absolute";
  title.style.textAl

  var brandInfo = [
    { logo: 'logos/ferrari.png', brand: 'Ferrari', p1: 'Leclerc', p2: 'Sainz' },
    { logo: 'logos/mercedes.png', brand: 'Mercedes', p1: 'Russell', p2: 'Hamilton' },
    { logo: 'logos/redbull.png', brand: 'RedBull', p1: 'Verstappen', p2: 'Ricciardio' }
  ];

  let getIndex = 0;

  function changeLogo() {
    var currentBrand = brandInfo[getIndex];
    redbull.src = currentBrand.logo;
    redbullbrand.innerText = currentBrand.brand;
    p1.innerText = currentBrand.p1;
    p2.innerText = currentBrand.p2;
    getIndex = (getIndex + 1) % brandInfo.length;
  }

  changeLogo();
  setInterval(changeLogo, 600);

  const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']; //PLEASE DON'T CHANGE THIS LINE!

var heads = document.querySelectorAll('span');

for(let tt in heads) {
    tt.style.color = colors[tt];
}
