
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KacSilindir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
</head>
<body>
<header class="header-bar mb-3">

       <img class = "mainlogo" src="https://cdn.discordapp.com/attachments/507590421816410112/1090993534972219423/kacsilindir.png">

    <div class="container d-flex flex-column flex-md-row align-items-center p-3">

        <ul class="navbar mr-auto   navbar-expand-sm-bg ">
            <li class="nav-item active px-3"><a href="/">Anasayfa</a></li>
            <li class="nav-item text-white px-3"><a href="/haber/detay">Haberler</a></li>
            <li class="nav-item px-3"><a href="/">Karşılaştırma</a></li>

        </ul>

            <div class="row align-items-right">
                @auth
                <div class="col-md-auto ">
                    <a href="/profile" class="mr-2"><img title="Profilim" data-toggle="tooltip" data-placement="bottom" style="width: 40px; height: 40px; border-radius: 16px" src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/user-profile-icon.png" /></a>
                    <a><form action="/logout" method = "POST" class="position-absolute d-inline-block ">
                    @csrf
                        <button class="btn btn-danger btn-sm mx-2 py-0 mt-2" role="button">Çıkış Yap</button>
                    </form></a>
                @else
                    <a href="/login" class="btn btn-success btn-sm mx-1" role="button">Giriş yap</a>
                    <a href="/register" class="btn btn-info btn-sm mx-1" role="button">Kayıt Ol</a>
                </div>
            </div>

    </div>
    @endauth
</header>



{{$slot}}


<footer class="footer-b border-top text-center small text-muted py-3 ">
    <p class="m-0">Copyright &copy; 2023 <a href="/" class="text-muted">KacSilindir</a>. Tüm hakları Saklıdır.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip()
</script>
</body>
</html>
