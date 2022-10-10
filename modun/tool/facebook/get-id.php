<?php
$cookie = 'sb=8moQYT8xqDjGiU-pHWfj2d5o; datr=9GoQYbgOvWQIsXJWvnWzp6Qa; c_user=100066166540643; presence=EDvF3EtimeF1630818974EuserFA21B66166540643A2EstateFDutF0CEchF_7bCC; spin=r.1004356479_b.trunk_t.1631031590_s.1_v.2_; xs=33%3APdaXsxirympOeA%3A2%3A1629544122%3A-1%3A7262%3A%3AAcWf1Bky1MU25wn8NF6hG0jgRLQQoePoPo7e66gD_5o; fr=1OkpdFW9oNEPEtPJH.AWXYIv9sbksBiZ3T_NAkZ1OMVaY.BhOCYl.lR.AAA.0.0.BhOCYl.AWWNkosSAvY';
$return = array(
    'error' => 0
);
$url    = curl($_GET['url'], $cookie);
if (preg_match('#name="target" value="(.+?)"#is', $url, $hongphuc)) {
    $userId = $hongphuc[1];
}
if (preg_match('#<title>(.+?)</title>#is', $url, $hongphuc)) {
    $fullName = $hongphuc[1];
}
if (isset($fullName) && isset($userId)) {
    $return['msg']  = $userId;
    $return['name'] = $fullName;
    die(json_encode($return));
} else {
    $return['error'] = 1;
    $return['msg']   = 'Không get được vui lòng thử lại hoặc nhập ID Facebook.';
    die(json_encode($return));
}
function curl($url, $cookie)
{
    $ch = @curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Expect:'
    ));
    $page = curl_exec($ch);
    curl_close($ch);
    return $page;
}
?>