<?php include("mecode/mecode.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>reecode your life!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <? meheader(); ?>
</head>

<body>
<table style="width: 100%; height: 900px" cellpadding="0" cellspacing="0" marginwidth="0" marginheight="0" border="0">
    <tr valign="top">
        <td width="65%" style="background-image:url(img/bg_left_crpd.jpg); background-repeat:repeat-y;
 background-position:right;" align="right">
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td height="450"></td>
                    <td width="40"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right" height="100%" style="padding-right: 32px">
                        <a name="mainframe"/><img src="img/reecode_Typ1.png" alt="reecode"/></td>
                </tr>
            </table>
        </td>
        <!-- BALKAN -->
        <td bgcolor="#313f40"
            style="background-image:url(img/reesourcingstripe01_128-30.gif); background-repeat:repeat-y;" valign="top">
            <img src="img/1x1_trans.gif" width="100" height="2"/></td>
        <!-- RIGHT SIDE -->
        <td width="35%" style="background-image:url(img/bg_right_crpd.jpg); background-repeat:repeat-y;
 background-position:left;">
            <table cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td rowspan="2" width="35"></td>
                    <td height="40"></td>
                </tr>
                <tr>
                    <td align="left">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0" border="0">

                                        <tr>
                                            <td><h1>
                                                I have a code:
                                            </h1>
                                            </td>
                                        </tr>
                                        <tr id="codes">
                                            <td>
                                                <? mecode() ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><h1>
                                                I want to Buy:
                                            </h1>
                                            </td>
                                        </tr>
                                        <tr id="products">
                                            <td>
                                                <? meproducts($products) ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


</body>
</html>
