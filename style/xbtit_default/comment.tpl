<if:PREVIEW>
<<<<<<< HEAD
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4><i class="fa fa-fw fa-comment"></i>Preview</h4>
    </div>
    <div class="panel-body">
<div width="100%" align="center" class="lista">
<tag:comment_preview />
</div>
      </div>
    </div>
</if:PREVIEW>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4><i class="fa fa-fw fa-comment"></i>Submit Comment</h4>
  </div>
  <div class="panel-body">
<div align="center">
  <form enctype="multipart/form-data" name="comment" method="post" action="index.php?page=comment&id=<tag:comment_id />">
  <input type="hidden" name="info_hash" value="<tag:comment_id />" />
    <table class="lista" border="0" cellpadding="10" width="100%">
=======
<div width="100%" align="center" class="lista">
<tag:comment_preview />
</div>
</if:PREVIEW>
<div align="center">
  <form enctype="multipart/form-data" name="comment" method="post" action="index.php?page=comment&id=<tag:comment_id />">
  <input type="hidden" name="info_hash" value="<tag:comment_id />" />
    <table class="lista" border="0" cellpadding="10">
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
      <tr>
        <td align="left" class="header"><tag:language.USER_NAME /></td>
        <td class="lista" align="left" ><input name="user" TYPE="text" size="20" value="<tag:comment_username />" maxlength="100" disabled; readonly /></td>
      </tr>
      <tr>
        <td align="left" class="header"><tag:language.COMMENT_1 />:</td>
        <td class="lista" align="left"><tag:comment_comment /></td>
      </tr>
      <tr>
        <td class="header" colspan="2" align="center">
        <input type="submit" class="btn" name="confirm" value="<tag:language.FRM_CONFIRM />" />
        &nbsp;&nbsp;&nbsp;
        <input type="submit" class="btn" name="confirm" value="<tag:language.FRM_PREVIEW />" />
        </td>
      </tr>
    </table>
  </form>
</div>
<<<<<<< HEAD
</div>
  </div>
=======
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b

