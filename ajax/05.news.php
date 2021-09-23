<?php
$ch = curl_init(); // cURL을 사용하기 위해 초기화하는 메서드로, cURL 세션을 생성합니다.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 인증서 검사 여부 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 결괏값을 받을 것인지의 여부 설정
curl_setopt($ch, CURLOPT_HEADER, 0); // 헤더 정보 출력 여부 설정
curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/entertainments/?outputType=xml");
$url_source = curl_exec($ch); // cURL 세션을 실행합니다.
curl_close($ch); // cURL 세션을 종료합니다.

echo $url_source;
?>