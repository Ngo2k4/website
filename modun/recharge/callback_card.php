<?php
require_once '../../_config.php';
$card_status     = $_GET['status'];
$card_message    = $_GET['message'];
$card_request_id = $_GET['request_id'];
$declared_value  = $_GET['declared_value'];
$card_value      = $_GET['value'];
$card_amount     = $_GET['amount'];
$card_pin        = $_GET['code'];
$card_serial     = $_GET['serial'];
$card_type       = $_GET['telco'];
$card_code       = $_GET['trans_id'];
$callback_sign   = $_GET['callback_sign'];
$card_time       = time();
$check_card      = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_card WHERE card_request_id = '$card_request_id'"));
if ($card_status == 1) {
    mysqli_query($conn, "UPDATE table_user SET user_point = user_point + '$card_amount' WHERE user_username = '" . $check_card['card_username'] . "'");
    mysqli_query($conn, "UPDATE table_card SET card_code = '$card_code', card_value = '$card_value', card_status = '$card_message' WHERE card_request_id = '$card_request_id'");
    $return['msg'] = 'OK ' . $card_amount . '';
    die(json_encode($return));
} else {
    mysqli_query($conn, "UPDATE table_user SET card_code = '$card_code', card_value = '$card_value', card_status = '$card_message' WHERE card_request_id = '$card_request_id'");
    $return['error'] = 1;
    $return['msg']   = 'Nạp sai mệnh giá.';
    die(json_encode($return));
}
?>