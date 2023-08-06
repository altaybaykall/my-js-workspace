<!DOCTYPE html>
<html>

<head>
    <title>Formula 1 Nerds</title>
    <link rel="stylesheet" href="loginn.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src=".js"></script>
</head>

<body>

<div class='formula-header'>
    <img src="logos/formula1.png" class='f1logo'>
    <h1> Formula 1 </h1>

    <nav class='formula-header-nav'>
<ul>
    <li><a href="">Formula 1</a>   </li>
    <li><a href="">Formula 2</a>  </li>
    <li><a href="">MotoGP</a>   </li>
    <li><a href="">Superbike</a>    </li>
</ul>
</nav>


</div>
</div>
    
  <span>Span title </span>
    <h2> <span>  Formula 1 pilotları </span> &#9731 </h2>
    <div class='takim'>
        <ul>
        <div class='Redbull'>    
        <img id="redbull" src="logos/redbull.png"  alt="redbull logo">
            <li><a id='redbullbrand' href="https://www.redbull.com/"> Redbull</a> </li>

            <ul>
                <li id="pilot1">Verstappen</li>
                <li id="pilot2">Perez</li>
            </ul>
        </div> 
        <div class='Redbull'>    
        <img src="logos/redbull.png"  alt="redbull logo">
            <li><a  href="https://www.redbull.com/"> Redbull</a> </li>

            <ul>
                <li>Verstappen</li>
                <li>Perez</li>
            </ul>
        </div>
        
        <div class='Mercedes'>    
        <img src="logos/mercedes.png" alt="mercedes logo">
            <li> <a href="https://www.mer"> Mercedes </a> </li>
            <ul>
                <li>Hamilton</li>
                <li>Russell</li>
            </ul>
            </div>
            <div class='Ferrari'>
            <img src="logos/ferrari.png" alt="ferrari logo">
            <li><a href="https://www.ferrari.com/"> Ferrari</a> </li>
            <ul>
                <li> Leclerc<sup>[2]</sup> </li>
                <li> Sainz </li>
                </div>
            </ul>
    </div>
    <table class='Result'>
        <thead>
            <tr>
                <th>Pilot</th>
                <th>Takım</th>
                <th>Pist</th>
                <th>Süre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Hamilton</td>
                <td>Mercedes</td>
                <td>Spa</td>
                <td>1.23</td>
            </tr>
            <tr>
                <td>Russell</td>
                <td>Mercedes</td>
                <td>Silverstone</td>
                <td>1.24</td>
            </tr>
            <tr>
                <td>Leclerc</td>
                <td>Ferrari</td>
                <td>Monza</td>
                <td>1.40</td>
            </tr>
        </tbody>
        <h1>
        <span>R</span>
        <span>A</span>
        <span>I</span>
        <span>N</span>
        <span>B</span>
        <span>O</span>
        <span>W</span>
    </h1>
    </table>
</body>

<footer>
    <p> <b>HELP</b> </p>
</footer>

<script>
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
</script>

</html>