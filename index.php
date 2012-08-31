<?php include("mecode/kv/kv-code.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>reecode</title>
  <? KV_header(); ?>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/cs.js"></script>
  <script type="text/javascript" src="js/waypoints.min.js"></script>
  <script type="text/javascript" src="js/site.js"></script>
</head>

<body>
<table style="width: 100%; height: 100%" cellpadding="0" cellspacing="0" marginwidth="0" marginheight="0" border="0">
  	<tr><td style="background-image:url(img/Bg_120510.jpg); background-attachment:fixed; background-repeat:no-repeat; background-position:center">
    		<table cellpadding="0" cellspacing="0" border="0">
<!-- LEFT SIDE -->
    			<tr valign="top">
                	<td width="65%" height="1100"></td>
                
<!-- DATASTREAM -->
   					<td rowspan="13">
			        	<table width="174" cellpadding="0" cellspacing="0" border="0">
							<tr><td style="background-image:url(img/channel_left.png); background-repeat:repeat-y;" valign="top">
 									<img src="img/1x1_trans.gif" width="40" height="2" /></td>
			    	            <td bgcolor="#275059" style="background-image:url(img/reesourcingstripe01_256-30.gif); background-repeat:repeat-y;" valign="top">
						 			<a href="#mainframe"><img src="img/1x1_trans.gif" width="99" height="6950" border="0" /></a></td>
        	        			<td style="background-image:url(img/channel_right.png); background-repeat:repeat-y;" valign="top">
			 						<img src="img/1x1_trans.gif" width="35" height="2" /></td>
            			    </tr>
						</table></td>       
<!-- REESPONSE CODE -->
					<td width="35%">
                          <div class='KV-code'>
                            <form action='' method='post'>
                              <table cellpadding='0' cellspacing='0' border='0'>
                              	<tr><td height='40'></td>
                        		</tr>
                               <tr><td class='smallwhite'>reesponse code</td></tr>
                                <tr><td>
                                  <input name='code' value='<?= $code ?>' size='11' maxlength='9' class='reesponse' />
                                  <input name='action' type='hidden' value='a_recieve' size='11' maxlength='50' />
                                </td></tr>
                                <tr><td class='smallwhite' height="15" valign='bottom'>email</td></tr>
                                <tr><td><input name='email' value='<?= $email ?>' size='25' maxlength='50' class='smallblack' /></td></tr>
                                <tr>
                                  <td align='right'>
                                    <img src='img/1x1_trans.gif' width='1' height='5' border='0' /><br />
                                    <input name='reeceive' type='submit' value='reeceive...!' />
                                  </td>
                              </table>
                            </form>
                            <?  if ($is_code_invalid) { ?>
                              <label class='err'><br />                            
                                <?  if ($is_code_invalid == 'unknown') { ?> &nbsp;please check your input&nbsp;<br />&nbsp;this code is unknown&nbsp; <? } ?>
                                <?  if ($is_code_invalid == 'used') { ?> &nbsp;schade, somebody ate&nbsp;<br />&nbsp;the cake before&nbsp; <? } ?>
                              </label>
                            <? } ?>
                          </div></td>
				</tr>
<!-- MAIN FRAME -->
                <tr valign="top">
                	<td align="right" height="150">
                		<a name="mainframe" /><img src="img/reecode_Typ1.png" alt="reecode" border="0" /></td>
                    <td></td>
                </tr>
                <tr valign="top">
                	<td align="right" height="100">
                		<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td class="smallwhite" valign="bottom" height="20">
                            		<a href="#board" class="smallblue">board</a> / reeltimed</td>
                        	</tr>
                            <tr><td class="mediumwhite" height="18">
                            		…"grinding links" is ready for master…coming soon</td>
                        	</tr>
                            <tr><td class="smallblue" valign="top" height="30">
                            		<a href="#board" class="smallblue">see all</a> / <a href="#" class="smallblue">see more</a></td>
                        	</tr>
                            <tr><td class="smallwhite" valign="bottom" height="20">
                            		<a href="#board" class="smallblue">board</a> / reesourced</td>
                        	</tr>
                            <tr><td class="mediumwhite" height="18">
                            		reesourced 2879/11….i don't know if i really should do this…</td>
                        	</tr>
                            <tr><td class="smallblue" valign="top" height="30">
                            		<a href="#board" class="smallblue">see all</a> / <a href="#" class="smallblue">see more</a></td>
                        	</tr>
			            </table></td>
                    <td><a href="#board" /><img src="img/menu_board.gif?ro" alt="board" border="0" /></td>
                </tr>
                <tr valign="top">
                	<td align="right">
                		<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td class="smallwhite" valign="bottom" height="20">
                            		<a href="#music" class="smallblue">music</a> / news</td>
                        	</tr>
                            <tr><td class="mediumwhite" height="18">
                            		bonus track "testing times" from the dummy lab project on free download</td>
                        	</tr>
                            <tr><td class="smallblue" valign="top" height="30">
                            		<a href="#music" class="smallblue">see all</a> / <a href="#" class="smallblue">see more</a></td>
                        	</tr>
			            </table></td>
                    <td><a href="#music" /><img src="img/menu_music.gif?ro" alt="music" border="0" /></td>
                </tr>
                <tr valign="top">
                	<td align="right">
                		<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td class="smallwhite" valign="bottom" height="20">
                            		<a href="#media" class="smallblue">media</a> / news</td>
                        	</tr>
                            <tr><td class="mediumwhite" height="18">
                            		new video "empty ocean"</td>
                        	</tr>
                            <tr><td class="smallblue" valign="top" height="30">
                            		<a href="#media" class="smallblue">see all</a> / <a href="#" class="smallblue">see more</a></td>
                        	</tr>
			            </table></td>
                    <td><a href="#media" /><img src="img/menu_media.gif?ro" alt="media" border="0" /></td>
                </tr>
                <tr valign="top">
                	<td align="right">
                		<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td class="smallwhite" valign="bottom" height="20">
                            		<a href="#shows" class="smallblue">shows</a> / next show</td>
                        	</tr>
                            <tr><td class="mediumwhite" height="18">
                            		reecode live at berlinaire festival, zurich, switzerland, on 08/11/2012</td>
                        	</tr>
                            <tr><td class="smallblue" valign="top" height="30">
                            		<a href="#shows" class="smallblue">see all</a> / <a href="#" class="smallblue">see more</a></td>
                        	</tr>
			            </table></td>
                    <td><a href="#shows" /><img src="img/menu_shows.gif?ro" alt="shows" border="0" /></td>
                </tr>
                <tr valign="top">
                	<td align="right" height="1200"></td>
                    <td><a href="#contact" /><img src="img/menu_contact.gif?ro" alt="contact" border="0" /></td>
                </tr>
<!-- MUSIC -->
                 <tr valign="top">
                	<td align="right" height="130">
                    	<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td colspan="2" align="right">
                            		<a name="music" /><img src="img/menu_music.png" alt="music" border="0" /></td>
                        	</tr>
                            <tr><td class="mediumwhite" valign="top" height="18">albums</td>
                            	<td width="6"></td>
                        	</tr>
                            <tr><td><a href="#specials" class="smallblue" />specials</td>
                            	<td></td>
                        	</tr>
			            </table></td>
                    <td></td>
                </tr>
<!-- 25/7 SCORES -->
                <tr valign="top">
                	<td align="right" height="1600">
                		<table class="right" cellpadding="0" cellspacing="0" border="0">
                            <tr><td height="260">
                            		<img src="img/AlbumDummy.png" width="250" height="250" alt="25/7 Score" border="0" /></td>
                            </tr>
                            <tr><td class="largewhite">
                            		<span class="largeblue">reecode</span> the 25/7 scores</td>
                            </tr>
                        	<tr><td class="smallwhite"><br />
                            		<span class="smallblue">01</span> catching the dawn<br />
                        			<span class="smallblue">02</span> take a walk out<br />
                        			<span class="smallblue">03</span> shine on<br />
                                    <span class="smallblue">04</span> place for all<br />
                                    <span class="smallblue">05</span> spreepiraten<br />
                                    <span class="smallblue">06</span> ever after<br />
									<span class="smallblue">07</span> mud'n'bubbles<br />
                                    <span class="smallblue">08</span> ready to riot<br />
                                    <span class="smallblue">09</span> bad rabbit trippin'<br />
                                    <span class="smallblue">10</span> beyond the river<br />
                                    <span class="smallblue">11</span> fin alley<br />
                                    <span class="smallblue">12</span> 25/7 mode (feat. soil ain't solid)<br /><br /></td>
                        	</tr>
                        	<tr><td class="smallblue">
                            		the official scores to the film "bar 25 - days out<br />
                                    of time" and maybe special credits or other needful<br />
                                    info to create keywords for search engines<br />
                            		<span class="smallwhite">reeltimed 21/06/2012</span></td>
                            </tr>
						</table>
                    <td><table cellpadding="0" cellspacing="0" border="0">
							<tr><td class="smallwhite">
									reequest code</td>
							</tr>
                            <tr><td class="reesponse">1TS-rt101<br /><br /></td>
							</tr>
							<tr><td align="right"><img src="img/1x1_trans.gif" width="1" height="5" alt="" border="0" /><br />
									<? KV_product(2, 'buy this...'); ?></td>
                            </tr>
						</table></td>
				</tr>
<!-- SHOWS -->
                <tr valign="top">
                	<td align="right" height="1200">
                    	<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td colspan="2" height="40">
                            		<a name="shows" /><img src="img/menu_shows.png" alt="music" border="0" /></td>
                        	</tr>
                            <tr><td class="mediumwhite" height="30" valign="top">tourdates</td>
                            	<td width="6"></td>
                        	</tr>
                            <tr><td class="smallblue">
                            		thu/<span class="smallwhite"> 08/11/2012/</span> hotel california/<span class="smallwhite"> zurich/</span> switzerland<br />
                                    fri/<span class="smallwhite"> 09/11/2012/</span> entertainment centre/<span class="smallwhite"> brisbane/</span> australia<br />
                                    mon/<span class="smallwhite"> 12/11/2012/</span> entertainment centre/<span class="smallwhite"> sydney/</span> australia<br />
                                    fri/<span class="smallwhite"> 16/11/2012/</span> rod laver arena/<span class="smallwhite"> melbourne/</span> australia<br /></td>
                                <td></td>
                        	</tr>
			            </table></td>
                    <td></td>
                </tr>
<!-- CONTACT -->
                <tr valign="top">
                	<td align="right" height="1200">
                    	<table class="right" cellpadding="0" cellspacing="0" border="0">
            				<tr><td colspan="2" height="40">
                            		<a name="contact" /><img src="img/menu_contact.png" alt="music" border="0" /></td>
                        	</tr>
                            <tr><td class="mediumwhite" height="30" valign="top">booking reequest</td>
                            	<td width="6"></td>
                        	</tr>
                            <tr><td><a href="mailto:booking@reecode.eu" class="smallblue" />booking@reecode.eu</td>
                            	<td></td>
                        	</tr>
			            </table></td>
                    <td></td>
                </tr>
<!-- FOOTER -->
				<tr><td></td>
                	<td valign="bottom" class="smallblue">© public reelation <br /><br /></td>
    			</tr>
			</table></td>
    </tr>
</table>
    

</body>
</html>
