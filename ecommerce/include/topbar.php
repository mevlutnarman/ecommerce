<?php
require_once("application/config/database.php");
require_once("application/config/config.php");
require_once("application/config/function.php");
?>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" target="_blank" href="<?php echo UndoConversions($mediaFacebook); ?>">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" target="_blank" href="<?php echo UndoConversions($mediaTwitter); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" target="_blank" href="<?php echo UndoConversions($mediaLinkedin); ?>">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" target="_blank" href="<?php echo UndoConversions($mediaInstagram); ?>">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" target="_blank" href="<?php echo UndoConversions($mediaYoutube); ?>">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-dark pl-2" target="_blank" href="<?php echo UndoConversions($mediaPinterest); ?>">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span><?php echo $siteName; ?></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <?php
    ?>