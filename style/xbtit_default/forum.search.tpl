<if:results>
<div align="center"><b><tag:language.SEARCHED_FOR /></b>&nbsp;<tag:search_keywords />&nbsp;(<tag:search_hits />)</div>
<table width="100%">
  <tr>
    <td align="left" valign="middle">
      <tag:forum_pager />
    </td>
  </tr>
</table>
<table class="lista" border="1" width="100%" cellspacing="0" cellpadding="5" style="border-color=#FFFFFF;">
  <tr>
    <td class="header" align="center" width="10%" ><tag:language.POST /></td>
    <td class="header" align="center" width="10%" ><tag:language.TOPIC /></td>
    <td class="header" align="center" width="15%" ><tag:language.FORUM /></td>
    <td class="header" align="center" width="10%" ><tag:language.AUTHOR /></td>
  </tr>
  <if:NO_TOPICS>
  <tr>
    <td class="lista" colspan="5" align="center"><tag:language.NO_TOPICS /></td>
  </tr>
  <else:NO_TOPICS>
  <loop:topics>
  <tr>
    <td class="lista" align="center"><tag:topics[].postid /></td>
    <td class="lista" align="center"><tag:topics[].topic /></td>
    <td class="lista" align="center"><tag:topics[].forum /></td>
    <td class="lista" align="center"><tag:topics[].author /></td>
  </tr>
  <tr>
    <td class="lista" align="left" colspan="4"><tag:topics[].body /></td>
  </tr>
  </loop:topics>
  </if:NO_TOPICS>
</table>
<br />
</if:results>
<<<<<<< HEAD
<div style="text-align: center;">
=======
<center>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
<form method="get" action="index.php" name="search">
  <input type="hidden" name="page" value="forum" />
  <input type="hidden" name="action" value="search" />
  <table class="lista" border="1" cellspacing="0" cellpadding="5" style="border-color=#FFFFFF;">
    <tr>
      <td class="header"><tag:language.KEYWORDS /></td>
      <td class="lista" align="left"><input type="text" size="55" name="keywords" value="<tag:search_keywords />" />
      <br />
<<<<<<< HEAD
      <span class="small" style="font-size: smaller; "><tag:language.SEARCH_HELP /></span></td>
=======
      <font class="small" size="-1"><tag:language.SEARCH_HELP /></font></td>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
    </tr>
    <tr>
      <td class="lista" align="center" colspan="2"><input type="submit" value="<tag:language.SEARCH />" class="btn" /></td>
    </tr>
  </table>
</form>
<<<<<<< HEAD
</div>
=======
</center>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
<br />

