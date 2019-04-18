<?php

if (isset($_POST["username"]) && isset($_POST["email"]))
{
  
  $THIS_BASEPATH=str_replace(array('admin','\\'),array('','/'),dirname(__FILE__));
  require("$THIS_BASEPATH/include/functions.php");
  include(load_language("lang_main.php"));
  include(load_language("lang_usercp.php"));
  include(load_language("lang_admin.php"));
  dbconn();

  /* begin just in case someone is trying to fuck us inserting new users without been authorized */

  if (!$CURUSER || ($CURUSER["admin_access"]!="yes" && $CURUSER["edit_users"]!="yes"))
     {
         err_msg($language["ERROR"],$language["NOT_ADMIN_CP_ACCESS"]);
         stdfoot();
         die();
  }

  $aid = max(0, $_POST["user"]);
  $arandom = max(0,$_POST["code"]);

  if (!$aid || empty($aid) || $aid==0 || !$arandom || empty($arandom) || $arandom==0)
  {
         err_msg($language["ERROR"],$language["NOT_ADMIN_CP_ACCESS"]);
         stdfoot();
         die();
  }

  $mqry=do_sqlquery("select u.id, ul.admin_access from {$TABLE_PREFIX}users u INNER JOIN {$TABLE_PREFIX}users_level ul on ul.id=u.id_level WHERE u.id=$aid AND random=$arandom AND (admin_access='yes' OR edit_users='yes') AND username=".sqlesc($CURUSER["username"]),true);

  if (mysql_num_rows($mqry)<1)
  {
         err_msg($language["ERROR"],$language["NOT_ADMIN_CP_ACCESS"]);
         stdfoot();
         die();
  }
  /* end just in case someone is trying to fuck us inserting new users without been authorized */
     

  $out='';
  $username=mysql_real_escape_string($_POST['username']);
  $pwd=mysql_real_escape_string($_POST["pwd"]);
  $email=mysql_real_escape_string($_POST["email"]);
  $idlangue=intval($_POST["language"]);
  $idstyle=intval($_POST["style"]);
  $idlevel=intval($_POST["level"]);

  // duplicate username ???
  $res=do_sqlquery("SELECT `username` FROM `{$TABLE_PREFIX}users` WHERE `username`='$username'",true);
  if (mysql_num_rows($res)>0)
     {
     echo $language["ERR_USER_ALREADY_EXISTS"].'|1';
     die();
  }

  // username with space
  if (strpos(mysql_real_escape_string($username), " ")==true)
     {
     echo $language["ERR_NO_SPACE"].'|1';
     die();
  }

  $bannedchar=array("\\", "/", ":", "*", "?", "\"", "@", "$", "'", "`", ",", ";", ".", "<", ">", "!", "�", "%", "^", "&", "(", ")", "+", "=", "#", "~");
  if (straipos(mysql_real_escape_string($username), $bannedchar)==true)
     {
     echo $language["ERR_SPECIAL_CHAR"].'|1';
     die();
  }

  $pass_to_test=$_POST["pwd"];
  $pass_min_req=explode(",", $btit_settings["secsui_pass_min_req"]);

  if(strlen($pass_to_test)<$pass_min_req[0])
  {
     echo $language["ERR_PASS_LENGTH_1"]." <span style='color:blue;font-weight:bold;'>".$pass_min_req[0]."</span> ".$language["ERR_PASS_LENGTH_2"]."|2";
     die();
  }

  $res=do_sqlquery("SELECT email FROM {$TABLE_PREFIX}users WHERE email='$email'",true);
  if (mysql_num_rows($res)>0)
     {
     echo $language['ERR_EMAIL_ALREADY_EXISTS'].'|3';
     die();
  }

  $lct_count=0;
  $uct_count=0;
  $num_count=0;
  $sym_count=0;
  $pass_end=(int)(strlen($pass_to_test)-1);
  $pass_position=0;
  $pattern1='#[a-z]#';
  $pattern2='#[A-Z]#';
  $pattern3='#[0-9]#';
  $pattern4='/[�!"�$%^&*()`{}\[\]:@~;\'#<>?,.\/\\-=_+\|]/';

  for($pass_position=0;$pass_position<=$pass_end;$pass_position++)
  {
      if(preg_match($pattern1,substr($pass_to_test,$pass_position,1),$matches))
        $lct_count++;
      elseif(preg_match($pattern2,substr($pass_to_test,$pass_position,1),$matches))
        $uct_count++;
      elseif(preg_match($pattern3,substr($pass_to_test,$pass_position,1),$matches))
        $num_count++;
      elseif(preg_match($pattern4,substr($pass_to_test,$pass_position,1),$matches))
        $sym_count++;
  }
  if($lct_count<$pass_min_req[1] || $uct_count<$pass_min_req[2] || $num_count<$pass_min_req[3] || $sym_count<$pass_min_req[4])
  {
      $newpassword=pass_the_salt(30);
      echo $language["ERR_PASS_TOO_WEAK_1"].":<br /><br />".(($pass_min_req[1]>0)?"<li><span style='color:blue;font-weight:bold;'>".$pass_min_req[1]."</span> ".(($pass_min_req[1]==1)?$language["ERR_PASS_TOO_WEAK_2"]:$language["ERR_PASS_TOO_WEAK_2A"])."</li>":"").(($pass_min_req[2]>0)?"<li><span style='color:blue;font-weight:bold;'>".$pass_min_req[2]."</span> ".(($pass_min_req[2]==1)?$language["ERR_PASS_TOO_WEAK_3"]:$language["ERR_PASS_TOO_WEAK_3A"])."</li>":"").(($pass_min_req[3]>0)?"<li><span style='color:blue;font-weight:bold;'>".$pass_min_req[3]."</span> ".(($pass_min_req[3]==1)?$language["ERR_PASS_TOO_WEAK_4"]:$language["ERR_PASS_TOO_WEAK_4A"])."</li>":"").(($pass_min_req[4]>0)?"<li><span style='color:blue;font-weight:bold;'>".$pass_min_req[4]."</span> ".(($pass_min_req[4]==1)?$language["ERR_PASS_TOO_WEAK_5"]:$language["ERR_PASS_TOO_WEAK_5A"])."</li>":"")."<br />".$language["ERR_PASS_TOO_WEAK_6"].":<br /><br /><span style='color:blue;font-weight:bold;'>".$newpassword."</span><br />|2";
      die();
  }

  $floor = 100000;
  $ceiling = 999999;
  srand((double)microtime()*1000000);
  $random = rand($floor, $ceiling);

  // finally insert new user
  $pid=md5(uniqid(rand(),true));

  $multipass=hash_generate(array("salt" => ""), $_POST["pwd"], $_POST["username"]);
  $i=$btit_settings["secsui_pass_type"];

  do_sqlquery("INSERT INTO `{$TABLE_PREFIX}users` (`username`, `password`, `salt`, `pass_type`, `dupe_hash`, `random`, `id_level`, `email`, `style`, `language`, `joined`, `lastconnect`, `pid`) VALUES ('".$username."', '".mysql_real_escape_string($multipass[$i]["rehash"])."', '".mysql_real_escape_string($multipass[$i]["salt"])."', '".$i."', '".mysql_real_escape_string($multipass[$i]["dupehash"])."', ".$random.", ".$idlevel.", '".$email."', ".$idstyle.", ".$idlangue.", NOW(), NOW(),'".$pid."')",true);

  $newuid=mysql_insert_id();

  if (!isset($db_prefix))
     $db_prefix="smf_";

  // Continue to create smf members if they disable smf mode
  // $test=do_sqlquery("SELECT COUNT(*) FROM {$db_prefix}members");
  $test=do_sqlquery("SHOW TABLES LIKE '{$db_prefix}members'");

  if (substr($FORUMLINK,0,3)=="smf" || mysql_num_rows($test))
  {
      $smfpass=smf_passgen($username, $pwd);

      $check_lev=get_result("SELECT `smf_group_mirror` FROM `{$TABLE_PREFIX}users_level` WHERE `id`=".$idlevel);

      $flevel=(($checklev[0]["smf_group_mirror"]>0)?$checklev[0]["smf_group_mirror"]:$idlevel+10);

      if($FORUMLINK=="smf")
          do_sqlquery("INSERT INTO `{$db_prefix}members` (`memberName`, `dateRegistered`, `ID_GROUP`, `realName`, `passwd`, `emailAddress`, `memberIP`, `memberIP2`, `is_activated`, `passwordSalt`) VALUES ('$username', UNIX_TIMESTAMP(), $flevel, '$username', '$smfpass[0]', '$email', '".getip()."', '".getip()."', 1, '$smfpass[1]')");
      else
          do_sqlquery("INSERT INTO `{$db_prefix}members` (`member_name`, `date_registered`, `id_group`, `real_name`, `passwd`, `email_address`, `member_ip`, `member_ip2`, `is_activated`, `password_salt`) VALUES ('$username', UNIX_TIMESTAMP(), $flevel, '$username', '$smfpass[0]', '$email', '".getip()."', '".getip()."', 1, '$smfpass[1]')");
      $fid=mysql_insert_id();
      do_sqlquery("UPDATE `{$db_prefix}settings` SET `value` = $fid WHERE `variable` = 'latestMember'");
      do_sqlquery("UPDATE `{$db_prefix}settings` SET `value` = '$username' WHERE `variable` = 'latestRealName'");
      do_sqlquery("UPDATE `{$db_prefix}settings` SET `value` = UNIX_TIMESTAMP() WHERE `variable` = 'memberlist_updated'");
      do_sqlquery("UPDATE `{$TABLE_PREFIX}users` SET `smf_fid`=$fid WHERE `id`=$newuid");
  }

  // Continue to create ipb members if they disable ipb mode
  $test=do_sqlquery("SHOW TABLES LIKE '{$ipb_prefix}members'");

  if ($FORUMLINK=="ipb" || mysql_num_rows($test))
  {
      $essentials=urlencode(base64_encode(serialize(array("username" => "$username", "email" => "$email", "password" => "$pwd", "id_level" => "$idlevel", "newuid" => "$newuid"))));
  }

  // xbt
  if ($XBTT_USE)
     {
     $resin=do_sqlquery("INSERT INTO xbt_users (uid, torrent_pass) VALUES ($newuid,'$pid')");
     }


  // sending email to user if required
  if ($_POST["emailsend"]=='1')
    {
    if (send_mail($email,"Welcome to " . $btit_settings['name'],sprintf($language["NEW_USER_EMAIL_TEXT"],$username,$btit_settings['name'],$username, $pwd))===true)
    {
       if ($FORUMLINK=="ipb" || mysql_num_rows($test))
           $out="OK|5|".$CURUSER["uid"]."|".$CURUSER["random"]."|".$essentials;
       else
           $out='OK|0';
    }
    else
    {
       if ($FORUMLINK=="ipb" || mysql_num_rows($test))
           $out="OK|6|".$CURUSER["uid"]."|".$CURUSER["random"]."|".$essentials;
       else
           $out='OK|4';
    }
  }
  else
  {
      if ($FORUMLINK=="ipb" || mysql_num_rows($test))
          $out="OK|5|".$CURUSER["uid"]."|".$CURUSER["random"]."|".$essentials;
      else
          $out='OK|0|';
  }

}
else
  $out= "no direct access!";

echo $out;
die;
?>