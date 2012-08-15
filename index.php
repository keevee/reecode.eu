<?php include("mecode/kv/kv-code.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>reecode your life!</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <? KV_header(); ?>
</head>

<body>
<table style="width: 100%; height: 100%" cellpadding="0" cellspacing="0" marginwidth="0" marginheight="0" border="0">
  <tr valign="top">
    <td width="65%" style="background-image:url(img/bg_left_crpd.jpg); background-repeat:repeat-y;
 background-position:right;" align="right">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr><td height="1100"></td>
          <td width="40"></td>
        </tr>
        <tr><td colspan="2" align="right" style="padding-right: 32px">
          <a name="mainframe" /><img src="img/reecode_Typ1.png" alt="reecode" /></td>
        </tr>
        <tr><td colspan="2" height="120"></td>
        </tr>
        <tr><td align="right">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr height="300px">
              <td valign="top" width='200'>
                <img src="img/1.png"/>
              </td><td valign="top">
                <h2> Thousand Miles Left Behind </h2>
            </td></tr>
            <tr height="300px">
              <td valign="top" width='200'>
                <img src="img/2.png"/>
              </td><td valign="top">
                <h2> Dark Roots Of Earth</h2>
            </td></tr>
            <tr height="300px">
              <td valign="top" width='200'>
                <img src="img/3.png"/>
              </td><td valign="top">
                <h2> Welcome To The Fishbowl</h2>
            </td></tr>
          </table></td>
          <td></td>
        </tr>

        <tr><td colspan="2" height="1100"></td>
        </tr>

        <tr><td align="right">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr><td><img src="img/corner_ol.gif" /></td>
              <td></td>
              <td><img src="img/corner_or.gif" /></td>
            </tr>
            <tr><td></td>
              <td width="286" height="186"></td>
              <td></td>
            </tr>
            <tr><td><img src="img/corner_ul.gif" /></td>
              <td></td>
              <td><img src="img/corner_ur.gif" /></td>
            </tr>
          </table></td>
          <td></td>
        </tr>
        <tr><td colspan="2" height="10"></td>
        </tr>
        <tr><td align="right">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr><td width="300" bgcolor="#47595b" align="left">
              <img src="img/1x1_white_anim.gif" width="34%" height="12" /></td>
            </tr>
          </table></td>
          <td></td>
        </tr>
        <tr><td class="textwhite" align="right">
          reesourcing<br />
          progress</td>
          <td></td>
        </tr>

      </table></td>
    <!-- BALKAN -->
    <td bgcolor="#313f40" style="background-image:url(img/reesourcingstripe01_128-30.gif); background-repeat:repeat-y;" valign="top">
      <img src="img/1x1_trans.gif" width="100" height="2" /></td>
    <!-- RIGHT SIDE -->
    <td width="35%" style="background-image:url(img/bg_right_crpd.jpg); background-repeat:repeat-y;
 background-position:left;">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr><td rowspan="2" width="35"></td>
          <td height="40"></td>
        </tr>
        <tr><td align="left">
          <table cellpadding="0" cellspacing="0" border="0">
            <tr><td>
                <? list($code, $err) = KV_code_vars(); ?>
                <div class='KV-code'>
                  <?  if ($err) { echo "<label class='err'>$err</label>"; } ?>
                  <form action='' method='post'>
                    <table cellpadding='0' cellspacing='0' border='0'>
                     <tr><td class='textwhite'>reesponse code</td></tr>
                      <tr><td>
                        <input name='code'                  value='<?= $code ?>'     size='11' maxlength='50' class='reesponse code' />
                        <input name='action'  type='hidden' value='a_recieve' size='11' maxlength='50' />
                      </td></tr>
                      <tr><td class='textwhite'>email</td></tr>
                      <tr><td><input name='email'                 value='<?= $email ?>'    size='25' maxlength='50' /></td></tr>
                      <tr>
                        <td align='right'>
                          <img src='img/1x1_trans.gif' width='1' height='5' alt='' border='0' /><br />
                          <input name='reeceive' type='submit' value='reeceive...!' />
                        </td>
                    </table>
                  </form>
                </div>
            </td>
            </tr>
            <tr><td colspan="2" height="1160"></td>
            </tr>
            <tr height='300'><td>
                <? KV_product(2, 'Reecieve ...'); ?>
            </td>
            </tr>
            <tr height='300'><td>
                <? KV_product(4, 'Reecieve ...'); ?>
            </td>
            </tr>
            <tr height='300'><td>
                <? KV_product(5, 'Reecieve ...'); ?>
            </td>
            </tr>
            <tr><td height="5200" valign="bottom" class="warninggrey">© public reelation force <br /><br /></td>
            </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>


</body>
</html>
