<?php
/*
平凡：zxzi.cn
2023/06/04
*/
$xml = '<?xml version="1.0" encoding="UTF-8"?><root><uid>【uid】</uid><sid>【sid】</sid><OpenUDID2>【OpenUDID2】</OpenUDID2><tmeLoginMethod>2</tmeLoginMethod><fPersonality>0</fPersonality><tmeLoginType>2</tmeLoginType><QIMEI36>【QIMEI36】</QIMEI36><oaid>【oaid】</oaid><taid>【taid】</taid><tmeAppID>qqmusic</tmeAppID><tid>【tid】</tid><tyt_exp_env>0</tyt_exp_env><teenMode>0</teenMode><M-Value>【M-Value】
</M-Value><ui_mode>1</ui_mode><rom>XiaoMi/MIUI/V130</rom><v4ip>【v4ip】</v4ip><OpenUDID>【OpenUDID】</OpenUDID><udid>【udid】</udid><ct>11</ct><cv>12030508</cv><v>12030508</v><chid>73387</chid><os_ver>12</os_ver><aid>【aid】</aid><phonetype>【phonetype】</phonetype><devicelevel>50</devicelevel><newdevicelevel>20</newdevicelevel><deviceScore>464.0</deviceScore><modeSwitch>7</modeSwitch><nettype>1030</nettype><wid>【wid】</wid><psrf_qqaccess_token>【psrf_qqaccess_token】</psrf_qqaccess_token><psrf_access_token_expiresAt>【psrf_access_token_expiresAt】</psrf_access_token_expiresAt><psrf_qqopenid>【psrf_qqopenid】</psrf_qqopenid><qq>【qq】</qq><authst>Q_H_L_578TJIXywWdMA8TDSvHX0DKzdH0BPzlT7WOG2OucHW9U4CZcFtEgd4NHiNd6f7ikx</authst><hotfix>200000000</hotfix><traceid>【traceid】</traceid><cid>228</cid>
<item cmd="1" optime="【optime】" nettype="1030" QQ="【qq】" uid="【uid】" os="12" model="【model】" version="12.3.5.8" songtype="1" playtype="4" from="9,30,330," dts="0" openstore="0" crytype="5" paytype="3" abt="3123_3123001,11708_11708001,10360_13417" ext="【ext】" searchid="285314498293991813," search_ext="eyJyZWdpb25faWQiOiAwfQ==" tjreport="【tjreport】" desktoplyric="0" playdevice="0" playlist_mode="0" outdev="0" url="26" playmode="1" repeat_times="0" string25="normal" string26="n" string29="0" cdn="sjy6.stream.qqmusic.qq.com" cdnip="39.136.94.100" hasFirstBuffer="2" filetype="4" sbTimePoint="" err="0" time="【time】" time2="476" issoftdecode="1" component_type="1" string19="" string30="{&quot;firstBufferActions&quot;:{&quot;0&quot;:[0],&quot;2&quot;:[79],&quot;3&quot;:[83],&quot;4&quot;:[118],&quot;1&quot;:[73],&quot;7&quot;:[509],&quot;6&quot;:[453],&quot;5&quot;:[253]},&quot;secondBufferTimes&quot;:[]}" bandwidth_policy="0" secondCacheCount="0" wait_time="1198" player_retry="0" audiotime="2010000" timekey="【timekey】" co_singer="许嵩" vkey="【vkey】" play_duration_mi="201150" errcode="" play_speed="1.0" vip_level="69632" audio_effect="0:0" mode_string="eyJzdXBlcl9yZXNvbHV0aW9uIjowLCJzb3VuZF9iYWxhbmNlIjowLCJwbGF5X3RpbWVfcmV2IjowLCJ1c2Jfb3V0cHV0X3R5cGUiOjAsImFsYyI6MCwib3V0cHV0X3Nka190eXBlIjowfQ==" string27="eyJzY3JlZW5fb24iOjEsImFwcF9pbiI6MSwiYXBwX3RpbWUiOjE5NiwicGxheXBhZ2VfdGltZSI6MH0=" songid="7335577" singerid="7221" fversion="0"/></root>';

$timestamp = time();
$url = 'https://stat.y.qq.com/android/fcgi-bin/imusic_tj';
$ua = 'QQMusic 12030508(android 12)';
$time = '2010';
$qq = $_GET['qq'];
$timekey = strtoupper(md5($timestamp.$time.$qq.'gk2$Lh-&l4#!4iow'));
$uid = generateRandomNumber(10);
$sid = generateTimestamp().$uid;
$OpenUDID2 = getrandom(32);
$QIMEI36 = getrandom(32);
$oaid = getrandom(50);
$taid = getrandom(88);
$tid = generateRandomNumber(19);
$M_Value = base64_encode($tid);
$v4ip = generateRandomIPv4();
$OpenUDID = getrandom(32);
$udid = getrandom(32);
$aid = getrandom(16);
$phonetype = generateRandomAndroidModel();
$psrf_qqaccess_token = getrandom(32);
$psrf_qqopenid = getrandom(32);
$traceid = generateRandomNumber(2).'_'.generateRandomNumber(11).'_'.$timestamp;
$tjreport = generateString();
$tid = generateRandomNumber(19);
$ext = '{"tjreport":["'.$tjreport.'"]}';
$ext = base64_encode($ext);
$vkey = getrandom(32);

$xml = str_replace('【uid】', $uid, $xml);
$xml = str_replace('【sid】', $sid, $xml);
$xml = str_replace('【OpenUDID2】', $OpenUDID2, $xml);
$xml = str_replace('【QIMEI36】', $QIMEI36, $xml);
$xml = str_replace('【oaid】', $oaid, $xml);
$xml = str_replace('【taid】', $taid, $xml);
$xml = str_replace('【tid】', $tid, $xml);
$xml = str_replace('【M-Value】', $M_Value, $xml);
$xml = str_replace('【v4ip】', $v4ip, $xml);
$xml = str_replace('【OpenUDID】', $OpenUDID, $xml);
$xml = str_replace('【udid】', $udid, $xml);
$xml = str_replace('【aid】', $aid, $xml);
$xml = str_replace('【phonetype】', $phonetype, $xml);
$xml = str_replace('【model】', $phonetype, $xml);
$xml = str_replace('【wid】', $uid, $xml);
$xml = str_replace('【psrf_qqaccess_token】', $psrf_qqaccess_token, $xml);
$xml = str_replace('【psrf_access_token_expiresAt】', $timestamp, $xml);
$xml = str_replace('【psrf_qqopenid】', $psrf_qqopenid, $xml);
$xml = str_replace('【qq】', $qq, $xml);
$xml = str_replace('【traceid】', $traceid, $xml);
$xml = str_replace('【ext】', $ext, $xml);
$xml = str_replace('【optime】', $timestamp, $xml);
$xml = str_replace('【tjreport】', $tjreport, $xml);
$xml = str_replace('【timekey】', $timekey, $xml);
$xml = str_replace('【time】', $time, $xml);
$xml = str_replace('【vkey】', $vkey, $xml);

$gzip_data = gzencode($xml);

$th = posturl($url, $gzip_data);
$th = posturl($url, $gzip_data);

if (strpos($th, "R044000U") !== true) {
  echo $qq.' 操作成功，增加67min。';
} else {
  echo $qq.' 操作失败，请稍后再试。';
}

function generateRandomIPv4() {
    $ip = long2ip(mt_rand(ip2long("1.0.0.0"), ip2long("223.255.255.255")));
    while (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        $ip = long2ip(mt_rand(ip2long("1.0.0.0"), ip2long("223.255.255.255")));
    }
    return $ip;
}

function getrandom($len = 12) {
    $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $strlen = strlen($str);
    $randstr = "";
    for ($i = 0; $i < $len; $i++) {
        $randstr .= $str[mt_rand(0, $strlen - 1)];
    }
    return $randstr;
}

function generateRandomAndroidModel() {
    $brands = ['Samsung', 'Xiaomi', 'Huawei', 'OPPO', 'Vivo', 'OnePlus', 'Lenovo', 'ZTE', 'Meizu'];
    $randomBrandIndex = array_rand($brands);
    $randomBrand = $brands[$randomBrandIndex];
    $modelNumber = rand(1, 9999);
    $modelName = ['Galaxy', 'Mi', 'P', 'Find', 'NEX', 'Mate', 'S', 'Y', 'K'];
    $randomModelNameIndex = array_rand($modelName);
    $randomModelName = $modelName[$randomModelNameIndex].$modelNumber;
    $randomAndroidModel = $randomBrand.' '.$randomModelName;
    return $randomAndroidModel;
}

function generateRandomNumber($length) {
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $result = rand(0, 9);
    }

    return $result;
}

function generateTimestamp($length = 14) {
    $date = date('YmdHis');
    $time = time();
    $timestamp = $date.substr($time, -$length);
    return $timestamp;
}

function generateString() {
    $date = date('YmdHis');
    $time = time();

    $str = '22_10001_1_0_0_0_'.substr($time, -3).'_'.substr($date, 2, 6).'-0';
    return $str;
}

function posturl($url, $data) {
    $content_length = strlen($data);
	$curl = curl_init();
	$headers = array(
		        'User-Agent:QQMusic 12030508(android 12)',
		        'Content-Type: application/x-www-form-urlencoded',
		        'Connection: Keep-Alive',
		        'Content-Encoding: gzip',
		        'Content-Length: '.$content_length
		    );
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLINFO_HEADER_OUT, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 5);
	
	$output = curl_exec($curl);
	curl_close($curl);
	return $output;
}

?>