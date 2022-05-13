<?php
require_once("include/header.php");
require_once("include/topbar.php");
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


<!-- Page Header Start 
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Sing Up</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Singup</p>
        </div>
    </div>
</div>
Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">

    </div>
    <div class="row px-xl-5">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="sing-up-result.php" method="POST">
                        <span class="login100-form-title p-b-26">
                            <h2 class="section-title px-5"><span class="px-2">SingUp</span></h2>
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100" ></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                            <input class="input100" type="email" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="phone" placeholder="Phone">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass-again" placeholder="Password Again">
                            <span class="focus-input100" ></span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select name="gender" class="input100" id="">
                                <option value="">Enter gender</option>
                                <option value="Man">Man</option>
                                <option value="Women">Woman</option>
                            </select>
                        </div>
                        <div>
                            <input type="checkbox" name="contract" id="" value="1"><a href="#">Member</a> contract ok.
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Sing Up
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Are you have a account?
                            </span>

                            <a class="txt2" href="login.php">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<?php
require_once("include/footer.php");
?>
<!-- Footer End -->