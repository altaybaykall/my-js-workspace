<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="devam.css">
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

<button>SDSDSDSD</button>



</body>

</html>