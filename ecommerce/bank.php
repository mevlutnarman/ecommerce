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
                <?php

                $bankQuery = $dbConnect->query("SELECT * FROM bank ");
                $bankCount = $bankQuery->rowCount();
                $bankRecord = $bankQuery->fetchAll(PDO::FETCH_ASSOC);
                $loopNumber = 1;
                $rowCountNumber = 3;
                foreach ($bankRecord as $banks) {
                        ?>
                        <td width="346">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px dashed #CCCCCC; margin-bottom: 20px">
                        <tr height="60">
                            <td colspan="4" align="center">
                                <img src="public/img/<?php echo $banks["bankLogo"];?>" width="150" height="" alt="">
                            </td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="110"><b>Banka Name</b></td>
                            <td width="10"><b>:</b> </td>
                            <td width="200"><?php echo UndoConversions($banks["bankName"]); ?></td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="80"><b>Location</b></td>
                            <td width="20"><b>: </b></td>
                            <td width="200"><?php echo UndoConversions($banks["locationCity"]); ?></td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="80"><b>Branch Name</b></td>
                            <td width="10"><b>: </b></td>
                            <td width="200"><?php echo UndoConversions($banks["branchName"]); ?></td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="80"><b>Currency</b></td>
                            <td width="10"><b>: </b></td>
                            <td width="200"><?php echo UndoConversions($banks["Currency"]); ?></td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="80"><b>Account Number</b></td>
                            <td width="10"><b>: </b></td>
                            <td width="200"><?php echo UndoConversions($banks["accountNumber"]); ?></td>
                        </tr>
                        <tr height="30">
                            <td width="20">&nbsp;</td>
                            <td width="80"><b>IBAN</b></td>
                            <td width="10"><b>: </b></td>
                            <td width="200"><?php echo IbanChange($banks["Iban"]); ?></td>
                        </tr>



                    </table>
                </td>
                <td width="20">
                    &nbsp;
                </td>
<?php
$loopNumber++;
                    
if ($loopNumber >$rowCountNumber) {
    echo "</tr><tr>";
    $loopNumber = 1;}

                    }
                

                ?>


            
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