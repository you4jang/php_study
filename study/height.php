<?php
$distance = 20;
$angle = 32 * pi() / 180;
$height = $distance * tan($angle);
$height = round($height * 10) / 10;

echo "나무 높이는 {$height}m 입니다.";
