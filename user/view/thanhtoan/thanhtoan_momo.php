<?php
$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

$orderInfo = "Thanh toán qua MoMo";
$amount = $tong_don; // tổng tiền sẽ hiện trên hoá đơn
$orderId = rand(00, 999999);
$redirectUrl = "http://localhost/duan_sach/index.php?act=dh_thanhcong";
$ipnUrl = "http://localhost/duan_sach/index.php?act=dh_thanhcong";
$extraData = "";


if (!empty($_POST)) {
    $partnerCode = $partnerCode ;
    $accessKey = $accessKey;
    $serectkey = $secretKey;
    $orderId = $ma_hoadon; // Mã đơn hàng
    $orderInfo = $orderInfo;
    $amount = $tong_don;// tổng tiền sẽ hiện trên hoá đơn
    $ipnUrl = $ipnUrl;
    $redirectUrl = $redirectUrl;
    $extraData = $extraData;

    $requestId = time() . "";
    $requestType = "payWithATM"; // thanh toán atm
    // $requestType = "captureWallet"; // thanh toán QRcode

    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $serectkey);
    $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result =execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there
    echo "<script>window.location.href='{$jsonResult['payUrl']}';</script>";

    // header('Location: ' . $jsonResult['payUrl']);
}
?>