<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Admin || Trans Banyumas</title>
</head>

<body>
    <!-- sidebar -->
    <input type="checkbox" id="check" onclick="menu_active();" />
    <div class="sidebar">
        <div class="menu-sidebar">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        Home
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="index.html#info"><button class="dropdown-item" type="button">Informasi umum</button></a></li>
                        <li><a href="index.html#testi"><button class="dropdown-item" type="button">Testimoni</button></a></li>
                        <li><a href="index.html#berita"><button class="dropdown-item" type="button">Berita</button></a></li>
                        <li><a href="index.html#keuntungan"><button class="dropdown-item" type="button">Keuntungan</button></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="rute.html">Rute</a></li>
                <li class="nav-item"><a href="layanan.html">Layanan</a></li>
                <li class="nav-item"><a href="tentang.html">Tentang</a></li>
            </ul>
        </div>
    </div>
    <!-- Header -->
    <header>
        <img src="img/logo-white.png" />
        <label class="toggle-menu" for="check">
            <img class="toggle" src="img/toggle.png" alt="" />
        </label>
        <div class="row">
            <div class="col-sm-12 trans">
                <img class="h1" src="img/trans.png" alt="" />
            </div>
        </div>
        <div class="clear"></div>
    </header>

    <!-- form login -->
    <main>
        <div class="login">
            <form action="">
                <div class="contain-logo">
                    <div class="logo">
                        <img src="img/logo.png" alt="logo">
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" name="user" id="user" required>
                    <label for="user">Username</label>
                </div>
                <div class="input-group">
                    <input type="text" name="pass" id="pass" required>
                    <label for="pass">Password</label>
                </div>
                <div class="tombol">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>