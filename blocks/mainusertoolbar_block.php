<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2019  Btiteam
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////

global $CURUSER, $FORUMLINK, $db_prefix, $btit_settings, $language, $ipb_prefix;
?>
<script type="text/javascript">
function newpm() {
<!--
var answer = confirm ("You have a new PM, please click OK to go to your PM Inbox.")
if (answer)
window.location='index.php?page=usercp&uid=<?php echo $CURUSER["uid"]; ?>&do=pm&action=list&what=inbox'
// -->
}
</script>
<?php

  if (isset($CURUSER) && $CURUSER && $CURUSER["uid"]>1)
  {
  print("<form name=\"jump1\" action=\"index.php\" method=\"post\">\n");
?>
<table class="lista" cellpadding="0" cellspacing="0" width="100%">
<tr>
<?php
$style=style_list();
$langue=language_list();
print("<td align=\"left\" style=\"text-align:left;\"><b>".$language["WELCOME_BACK"]." ".$CURUSER["username"]."</b></td>\n");
print("<td style=\"text-align:left;\" align=\"left\"><b>".$language["USER_LEVEL"].": ".$CURUSER["level"]."</b></td></tr><tr>\n");
print("<td class=\"green\" style=\"text-align:right;\" align=\"center\">&uarr;&nbsp;".makesize($CURUSER['uploaded']));
print("</td><td class=\"red\" style=\"text-align:center;\" align=\"left\">&nbsp;&darr;&nbsp;".makesize($CURUSER['downloaded']));
print("</td><td class=\"yellow\" style=\"text-align:left;\" align=\"left\">&nbsp;(SR ".($CURUSER['downloaded']>0?number_format($CURUSER['uploaded']/$CURUSER['downloaded'],2):"---").")</td>\n");
if ($CURUSER["admin_access"]=="yes")
   print("<td align=\"center\" style=\"text-align:center;\"><a class=\"mainuser\" href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."\">".$language["MNU_ADMINCP"]."</a></td>\n");

print("<td style=\"text-align:center;\" align=\"center\"><a class=\"mainuser\" href=\"index.php?page=usercp&amp;uid=".$CURUSER["uid"]."\">".$language["USER_CP"]."</a></td>\n");

if(substr($FORUMLINK, 0, 3)=="smf")
    $resmail=get_result("SELECT `unread".(($FORUMLINK=="smf")?"M":"_m")."essages` `ur` FROM `{$db_prefix}members` WHERE ".(($FORUMLINK=="smf")?"`ID_MEMBER`":"`id_member`")."=".$CURUSER["smf_fid"],true,$btit_settings['cache_duration']);
elseif($FORUMLINK=="ipb")
    $resmail=get_result("SELECT `msg_count_new` `ur` FROM `{$ipb_prefix}members` WHERE `member_id`=".$CURUSER["ipb_fid"],true,$btit_settings['cache_duration']);
else
    $resmail=get_result("SELECT COUNT(*) `ur` FROM `{$TABLE_PREFIX}messages` WHERE `readed`='no' AND `receiver`=".$CURUSER["uid"],true,$btit_settings['cache_duration']);
if ($resmail && count($resmail)>0)
   {
    $mail=$resmail[0];
    if ($mail['ur']>0) {

       if (substr($_SERVER['PHP_SELF'], -10)!="index.php?page=usercp")
       print( "<script language=\"javascript\">newpm();</script>");
       print("<td style=\"text-align:center;\" align=\"center\"><a class=\"mainuser\" href=\"index.php?page=usercp&amp;uid=".$CURUSER["uid"]."&amp;do=pm&amp;action=list\">".$language["MAILBOX"]."</a> (<font color=\"#FF0000\"><b>".$mail['ur']."</b></font>)</td>\n");
}

    else
		
        print("<td style=\"text-align:center;\" align=\"center\"><a class=\"mainuser\" href=\"index.php?page=usercp&amp;uid=".$CURUSER["uid"]."&amp;do=pm&amp;action=list\">".$language["MAILBOX"]."</a></td>\n");
   }
else
    print("<td style=\"text-align:center;\" align=\"center\"><a class=\"mainuser\" href=\"index.php?page=usercp&amp;uid=".$CURUSER["uid"]."&amp;do=pm&amp;action=list\">".$language["MAILBOX"]."</a></td>\n");

print("<td style=\"text-align:center;\"><select name=\"style\" size=\"1\" onchange=\"location=document.jump1.style.options[document.jump1.style.selectedIndex].value\">");

foreach($style as $a)
               {
               print("<option ");
               if ($a["id"]==$CURUSER["style"])
                  print("selected=\"selected\"");
               print(" value=\"account_change.php?style=".$a["id"]."&amp;returnto=".urlencode($_SERVER['REQUEST_URI'])."\">".$a["style"]."</option>");
               }
print("</select></td>");

print("<td style=\"text-align:center;\"><select name=\"langue\" size=\"1\" onchange=\"location=document.jump1.langue.options[document.jump1.langue.selectedIndex].value\">");
foreach($langue as $a)
               {
               print("<option ");
               if ($a["id"]==$CURUSER["language"])
                  print("selected=\"selected\"");
               print(" value=\"account_change.php?langue=".$a["id"]."&amp;returnto=".urlencode($_SERVER['REQUEST_URI'])."\">".$a["language"]."</option>");
               }
print("</select></td>");

?>
</tr>
</table>
</form>
<?php
}
else
{
    session_id("xbtit");

    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION=array();
    setcookie("xbtit", "", time()-3600, "/");
    session_destroy();

    if (!isset($user)) $user = '';
    ?>
    <form action="index.php?page=login" name="login" method="post">
    <table class="lista" border="0" width="100%" cellpadding="4" cellspacing="1">
    <tr>
    <td class="lista" align="left">
      <table border="0" cellpadding="0" cellspacing="10">
      <tr>
      <td align="right" class="lista"><?php echo $language["USER_NAME"]?>:</td>
      <td class="lista"><input type="text" size="15" name="uid" value="<?php $user ?>" maxlength="40" style="font-size:10px" /></td>
      <td align="right" class="lista"><?php echo $language["USER_PWD"]?>:</td>
      <td class="lista"><input type="password" size="15" name="pwd" maxlength="40" style="font-size:10px" /></td>
      <td class="lista" align="center"><input type="submit" value="<?php echo $language["FRM_LOGIN"]?>" style="font-size:10px" /></td>
      </tr>
      </table>
    </td>
    <td class="lista" align="center"><a class="mainuser" href="index.php?page=signup"><?php echo $language["ACCOUNT_CREATE"]?></a></td>
    <td class="lista" align="center"><a class="mainuser" href="index.php?page=recover"><?php echo $language["RECOVER_PWD"]?></a></td>
    </tr>
    </table>
    </form>
    <?php
}
?>
