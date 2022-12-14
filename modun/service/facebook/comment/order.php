<?php
require_once '../../../../_config.php';
if ($_REQUEST) {
    $return = array(
        'error' => 0
    );
    $type   = $_REQUEST['type'];
    if ($type === 'buff-comment-facebook') {
        $buff_fb_id              = htmlspecialchars(addslashes($_POST['buff_fb_id']));
        $buff_server             = htmlspecialchars(addslashes($_POST['buff_server']));
        $buff_comment            = htmlspecialchars(addslashes($_POST['buff_comment']));
        $buff_amount             = htmlspecialchars(addslashes($_POST['buff_amount']));
        $buff_note               = htmlspecialchars(addslashes($_POST['buff_note']));
        $buff_present            = 0;
        $buff_status             = 'running';
        $buff_time               = time();
        $check_service           = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_service WHERE service_slug = '$type'"));
        $buff_payment            = $check_service['service_price'] * $buff_amount;
        $history_buy_point_final = $user_point - $buff_payment;
        $service_title           = $check_service['service_title'];
        $urlCreateService        = 'https://automxh.vn/api/service/facebook/comment-sale/order';
        $dataPostCreate          = array(
            'link_post' => $buff_fb_id,
            'comment' => $buff_comment,
            'amount' => $buff_amount,
            'note' => $buff_note
        );
        $resultCreate            = curlAutoMxh($urlCreateService, $dataPostCreate);
        $resultCreateDecode      = json_decode($resultCreate);
        if (!filter_var($buff_fb_id, FILTER_VALIDATE_URL)) {
            $return['error'] = 1;
            $return['msg']   = 'Trường Link bài viết không phải là URL.';
            die(json_encode($return));
        } else if ($user_point < $buff_payment) {
            $return['error'] = 1;
            $return['msg']   = 'Số dư của bạn không đủ để thanh toán, vui lòng nạp thêm.';
            die(json_encode($return));
        } else if ($buff_amount < $check_service['service_min_amount']) {
            $return['error'] = 1;
            $return['msg']   = 'Trường số lượng phải tối thiểu là ' . $check_service['service_min_amount'] . ' Comment.';
            die(json_encode($return));
        } else if ($buff_amount > $check_service['service_max_amount']) {
            $return['error'] = 1;
            $return['msg']   = 'Trường số lượng tối đa là ' . $check_service['service_max_amount'] . ' Comment.';
            die(json_encode($return));
        } else if ($resultCreateDecode->status == false) {
            $return['error'] = 1;
            $return['msg']   = $resultCreateDecode->message;
            die(json_encode($return));
        } else {
            mysqli_query($conn, "UPDATE table_user SET user_point = user_point - '$buff_payment' WHERE user_username = '$user_username'");
            mysqli_query($conn, "INSERT INTO table_history_buy(history_buy_username, history_buy_type, history_buy_point_original, history_buy_point_final, history_buy_content, history_buy_time) 
            VALUES ('$user_username', '$service_title', '$user_point', '$history_buy_point_final', '$buff_note', '$buff_time')");
            mysqli_query($conn, "INSERT INTO table_buff(buff_username, buff_slug, buff_code, buff_fb_id, buff_server, buff_comment, buff_amount, buff_note, buff_present, buff_payment, buff_status, buff_time) 
            VALUES ('$user_username','$type', '".$resultCreateDecode->code_order."', '$buff_fb_id', '$buff_server', '$buff_comment', '$buff_amount', '$buff_note', '$buff_present', '$buff_payment', '$buff_status', '$buff_time')");
            if ($resultCreateDecode->status == true) {
                $return['msg'] = $resultCreateDecode->message;
                die(json_encode($return));
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Có gì đó không ổn.';
                die(json_encode($return));
            }
        }
        
    }
}
?>