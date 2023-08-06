<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="devam.css">
    <style>
        table {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }
          
        input[type="button"] {
            width: 100%;
            padding: 20px 40px;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }
    
          
        input[type="text"] {
            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
        }
        .btn-num {
    background-color: green;
}
.btn-oper {
     background-color: gainsboro;
     color: black;
}
    </style>
</head>

<body>
    <h1> Blablablabla </h1>
    <form action="login.php" method="post">
        <p>
            <label for="isim">İsim gir lan</label>
            <input id="isim" type="text" name="isim" id="isim" minlength="3" maxlength="20" required>
        </p>
        <p>
            <label for="sifre">sifre girin lan</label>
            <input type="password" name="isim" id="sifre" minlength="3" maxlength="20" required>
        </p>
        <p>
            <button type="submit">Gönder lan</button>
        </p>

    </form>
    <form action="https://www.google.com/search">
        <input type="text" name="q">
        <button>Search google</button>
    </form>
    <form action="/test">
        <input type="radio" name="boy" id="sec" value="1">
        <label for="sec">Checkbox</label>
        <input type="radio" name="boy" id="sec1" value="2">
        <label for="sec1">Checkbox11</label>
        <input type="radio" name="boy" id="sec2" value="3">
        <label for="sec1">Checkbox22</label>
        <hr>

        <P>
            <label for="takim">Takım seç</label>
            <select name="takim" id="takim">
                <option value="Mercedes">Mercedes</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Redbull">Redbull</option>
            </select>
        </P>
        <p>
            <label for="aralik">Seç</label>
            <input type="range" name="aralik" id="aralik" min="1" max="100">
         </p>
        <button type="submit">submit</button>

    </form>

<button onclick="getValue()">SDSDSDSD</button>
<table id="calcu">
        <tr>
            <td colspan="3">
                <input type="text" value=""  id="result">
            </td>
            <td><input type="button" class="btn-oper" onclick="reset()" value="c"></td>
        </tr>
  
        <tr>
            <td><input  type="button" class="btn-num" onclick="getValue('1')" value="1"> </td>
            <td><input type="button" class="btn-num" onclick="getValue('2')" value="2"></td>
            <td><input type="button" class="btn-num" onclick="getValue('3')" value="3"></td>
            <td><input type="button"class="btn-num" onclick="getValue('1')" value="/"></td>
        </tr>
        <tr>
            <td><input type="button"class="btn-num" onclick="getValue('4')" value="4"></td>
            <td><input type="button"class="btn-num" onclick="getValue('5')" value="5"></td>
            <td><input type="button" class="btn-num" onclick="getValue('6')"value="6"></td>
            <td><input type="button" class="btn-oper" value="*"></td>
        </tr>
        <tr>k
            <td><input type="button" class="btn-num" onclick="getValue('7')" value="7"></td>
            <td><input type="button" class="btn-num" onclick="getValue('8')" value="8"></td>
            <td><input type="button" class="btn-num" onclick="getValue('9')" value="9"></td>
            <td><input type="button" class="btn-oper" onclick="getValue('-')" value="-"></td>
        </tr>
        <tr>
            <td><input type="button" class="btn-num" onclick="getValue('0')" value="0"></td>
            <td><input type="button" value="."></td>
            <td><input type="button" class="btn-oper" onclick="getToplam()" value="="></td>
            <td><input type="button" class="btn-oper" onclick="getIslem('00')" value="+"></td>
        </tr>
    </table>



</body>
<script>
    let sonuc =document.getElementById('result')
    
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
    function getIslem(islem) {
       nums.push(co_num);
       co_num = 0; 
       say = []
       sonuc.value = '0'; 
       islem.push(islem);
       
    }


    function getToplam() {
        nums.push(co_num);
       co_num = 0; 
       say = [];

    
        let sum = 0 ;
        const intArray = nums.map((str) => parseInt(str));
        for(let arg of intArray) 
        sum+= arg;  
        sonuc.value = sum;
    }
    function reset() {
        sonuc.value = '0';
        co_num = 0; 
       say = [];
       nums = [];
    }

    </script>

</html>