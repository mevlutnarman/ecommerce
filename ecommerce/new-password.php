<?php
require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
require_once("application/config/config.php");


if (isset($_GET["email"])) {
    $inMail = $_GET["email"];
} else {
    $inMail = "";
}
if (isset($_GET["activationCode"])) {
    $inActivation =  $_GET["activationCode"];
} else {
    $inActivation = "";
}

?>

<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Shirts</a>
                    <a href="" class="nav-item nav-link">Jeans</a>
                    <a href="" class="nav-item nav-link">Swimwear</a>
                    <a href="" class="nav-item nav-link">Sleepwear</a>
                    <a href="" class="nav-item nav-link">Sportswear</a>
                    <a href="" class="nav-item nav-link">Jumpsuits</a>
                    <a href="" class="nav-item nav-link">Blazers</a>
                    <a href="" class="nav-item nav-link">Jackets</a>
                    <a href="" class="nav-item nav-link">Shoes</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <?php require_once("include/navbar.php") ?>
        </div>
    </div>
</div>
<!-- Navbar End -->


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <?php


            $newPasswordQuery = $dbConnect->query("SELECT * FROM user WHERE emailAdress = '$inMail' AND activationCode = '$inActivation'");
            $newPasswordCount = $newPasswordQuery->rowCount();
            $newPasswordRecord = $newPasswordQuery->fetch(PDO::FETCH_ASSOC);
            $ID = $newPasswordRecord["id"];
            if ($newPasswordCount > 0) {
            ?>
                <form class="login100-form validate-form" action="new-password-result.php?ID=<?php echo $ID ?>" method="POST">
                    <span class="login100-form-title p-b-26">
                        <h2 class="section-title px-5"><span class="px-2">New Password</span></h2>
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="try-password" placeholder="Try Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit" type="submit">
                                Send
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don???t have an account?
                        </span>

                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            <?php

            }else{
                echo "Cannot email and activation code in db!";
            }
            ?>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<?php require_once("include/footer.php") ?>

</body>

</html>
<?php

?>