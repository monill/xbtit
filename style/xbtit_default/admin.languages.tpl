<<<<<<< HEAD
<div class="panel panel-default">
  <div class="panel-heading">
    <h4><i class="fa fa-fw fa-cogs"></i>Language Settings</h4>
  </div>
  <div class="panel-body" align="center">
=======
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
<if:language_add>
  <form name="language_add_new" action="<tag:frm_action />" method="post">
    <table class="lista">
      <tr>
        <td class="header">
            <tag:language.LANGUAGE_ADD />
        </td>
        <td class="lista">
            <tag:lang_combo />
        </td>
      </tr>
      <tr>
        <td class="header">
            <tag:language.LANGUAGE />
        </td>
        <td class="lista">
            <input type="text" name="new_language" size="40" maxlength="20" />
        </td>
      </tr>
      <tr>
        <td class="header" align="center" colspan="2">
            <input type="submit" name="confirm" class="btn" value="<tag:language.FRM_CONFIRM />" />&nbsp;&nbsp;&nbsp;
            <input type="submit" name="confirm" class="btn" value="<tag:language.FRM_CANCEL />" />
        </td>
      </tr>
    </table>
  </form>
<else:language_add>
  <table class="lista" width="100%" align="center">
  <tr>
    <td class="header" align="center"><tag:language.LANGUAGE /></td>
    <td class="header" align="center"><tag:language.URL /></td>
    <td class="header" align="center"><tag:language.MEMBERS /></td>
  </tr>
  <loop:languages>
  <tr>
    <td class="lista" align="center"><tag:languages[].language /></td>
    <td class="lista" align="center"><tag:languages[].language_url /></td>
    <td class="lista" align="center"><tag:languages[].language_users /></td>
  </tr>
  </loop:languages>
  <tr>
    <td class="header" align="center" colspan="3"><tag:lang_add_new /></td>
  </tr>
  </table>
<<<<<<< HEAD
</if:language_add>
    </div>
  </div>
=======
</if:language_add>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
