    <?php
        if(isset($_SESSION["ID"])){ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">DEMO PHP</a>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <form class="form-inline my-2 my-lg-0" action="../controllers/Login.php">
                        <input type="submit" class="btn" name="logout" value="Logout">
            </form>
            </ul>
        </div>
    </nav>

    <?php } else{?>
    <nav class="navbar navbar-expand-lg navStyle">
        <a class="brand-navbar text-white">DEMO PHP</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
            <span><i class="fas fa-align-right iconStyle"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <li class="nav-item active"><a href="index.php" class="nav-link"><i class="fas fa-home"></i>HOME<span
                            class="sr-only">(current)</span></a></li>
                <li class="nav-item">
                    <a href="Register.php" class="nav-link"><i class="fas fa-cogs"></i>REGISTER</a>
                </li>
                <li class="nav-item">
                    <a href="Login.php" class="nav-link"><i class="fas fa-briefcase"></i>LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    }
 ?>