<?php
require_once("settings/config.php");
require_once("settings/function.php");

?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="tr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="10 Days">
    <title><?php echo $siteTitle; ?></title>
    <meta name="description" content="<?php echo $siteDescription; ?>">
    <meta name="keywords" content="<?php echo $siteKeywords ?>">
    <link type="text/css" rel="stylesheet" href="style/css/style.css">
    <script type="text/javascript" src="style/js/function.js" language="javascript"></script>
    <script type="text/javascript" src="framework/Jquery/jquery-3.6.0.min.js" language="javascript"></script>

</head>

<body>

    <table width="1065" height="100%" bgcolor="white" align="center" border="0" cellpadding="0">

        <tr>
            <td height="40px" bgcolor="red">
                <img src="images/free-delivery.png" width="1065" border="0" alt="">
            </td>
        </tr>
        <tr>
            <td >
                <table width="1065" height="30" align="center" border="0" cellspacing="0" cellpadding="0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp</td>
                        <td width="20"><a href="#"><img src="images/login.png" border="0" style="margin-top:5px;" alt=""></a></td>
                        <td width="70"><a href="#" class="whiteText"> Login</a></td>
                        <td width="20"><a href="#"><img src="images/login.png" border="0" style="margin-top:5px;" alt=""></a></td>
                        <td width="85"><a href="#" class="whiteText"> Sing Up</a></td>
                        <td width="20"><a href="#" class="img"><img src="images/login.png" border="0" style="margin-top:5px;" alt=""></a></td>
                        <td width="110"><a href="#" class="whiteText">Basket</a></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="30px">
                <img src="images/logo.png" width="190px" height="87px" alt="">
            </td>
        </tr>







    </table>
















</body>

</html>


<?php
$dbConnect = null;
?>