<?php
function price($unitPrice, $quantity) {
    $shippingfee = 2500;
    $deleveryfee = $unitPrice * $quantity;

    if ($deleveryfee < 10000) {
        $deleveryfee += $shippingfee;
    }
    return $deleveryfee;
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>사용자 정의 함수를 HTML 코드에 넣는다</title>
</head>
<body>
4,000원짜리 2개를 구입할 때의 금액은
<?php
$price1 = price(4000, 2);
echo "{$price1}원";
?>
<br>
2,500원짜리 5개를 구입할 때의 금액은
<?php
$price2 = price(2500, 5);
echo "{$price2}원";
?>
</body>
</html>
