<?php
require_once("include/header.php");
require_once("include/topbar.php");
require_once("application/config/database.php");
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


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Bank Informations</span></h2>
    </div>
    <div class="row px-xl-5">
        <table width="1080" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="525">
                    <form action="transferNotificationFormResult.php" method="post">
                        <table width="565" align="center" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="50" style="color: #646869;">
                                    <h4>Transfer Notification Form</h4>
                                </td>
                            </tr>
                            <tr>
                                <td> Transfer Notification Form this area via can sending.</td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <b>Name Nicname:</b>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <input type="text" name="name" id="" style="width: 75%;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <b>Email Adress:</b>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <input type="email" name="email" id="" style="width: 75%;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <b>Phone Number:</b>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <input type="text" name="phone" id="" maxlength="11" style="width: 75%;">
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <b>Payment Banks:</b>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <select name="bank" id="" style="width: 75%;">

                                        <?php
                                        $bankQuery = $dbConnect->query("SELECT * FROM bank ORDER BY bankName ASC");
                                        $bankCount = $bankQuery->rowCount();
                                        $bankRecord = $bankQuery->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($bankRecord as $bank) {
                                        ?>
                                            <option value="<?php echo $bank["id"] ?>"><?php echo $bank["bankName"] ?></option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <b>Description:</b>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <textarea name="description" id="" cols="30" rows="7" style="width: 75%;"></textarea>
                                </td>
                            </tr>
                            <tr height="30">
                                <td>
                                    <input type="submit" name="submit" value="Trasfer Sending">
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
                <td width="20">&nbsp;</td>
                <td width="525">
                    <table width="565" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="40" style="color: #646869;" colspan="2">
                                <h4>Processing</h4>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"> Transfer Notification Form this area via can sending.</td>
                        </tr>
                        <td width="20">&nbsp;</td>
                        <tr height="30">
                            <td><img src="" alt="İmage"></td>
                            <td><b>Trasfer / EFT Process</b></td>
                        </tr>
                        <tr height="30">
                            <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod massa id vestibulum. Nulla sit amet feugiat dolor, sit amet venenatis nulla.</td>
                        </tr>
                        <tr height="30">
                            <td><img src="" alt="İmage"></td>
                            <td><b>Lorem İpsum</b></td>
                        </tr>
                        <tr height="30">
                            <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod massa id vestibulum. Nulla sit amet feugiat dolor, sit amet venenatis nulla.</td>
                        </tr>
                        <tr height="30">
                            <td><img src="" alt="İmage"></td>
                            <td><b>Lorem İpsum</b></td>
                        </tr>
                        <tr height="30">
                            <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod massa id vestibulum. Nulla sit amet feugiat dolor, sit amet venenatis nulla.</td>
                        </tr>
                        <tr height="30">
                            <td><img src="" alt="İmage"></td>
                            <td><b>Lorem Ipsum</b></td>
                        </tr>
                        <tr height="30">
                            <td colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie euismod massa id vestibulum. Nulla sit amet feugiat dolor, sit amet venenatis nulla.</td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>
        </td>
        </tr>
        </table>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<?php
require_once("include/footer.php");
?>
<!-- Footer End -->