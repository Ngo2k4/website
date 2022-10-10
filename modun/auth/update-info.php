<?php
require_once '../../_config.php';
if ($_REQUEST) {
    $return = array('error' => 0);
    $type   = $_REQUEST['type'];
    if ($type === 'update-info') {
        $user_fullname      = htmlspecialchars(addslashes($_POST['user_fullname']));
        $user_phone         = htmlspecialchars(addslashes($_POST['user_phone']));
        $user_email         = htmlspecialchars(addslashes($_POST['user_email']));
        $user_ip            = $_SERVER['REMOTE_ADDR'];
        $user_level         = true;
        $history_account_ip = $_SERVER['REMOTE_ADDR'];
        $user_time_last     = time();
        if (strlen($user_phone) > 11 || strlen($user_phone) < 10) {
            $return['error'] = 1;
            $return['msg']   = 'Trường số điện thoại phải có tối thiểu từ 10 đến 11 kí tự.';
            die(json_encode($return));
        } else if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $return['error'] = 1;
            $return['msg']   = 'Trường Email không đúng định dạng.';
            die(json_encode($return));
        } else {
            mysqli_query($conn, "INSERT INTO table_history_user(history_user_username, history_user_content, history_user_ip, history_user_time) +
            VALUES ('$user_username', 'Cập nhật thông tin tài khoản', '$history_account_ip', '$user_time_last')");
            if (mysqli_query($conn, "UPDATE table_user SET user_fullname = '$user_fullname', user_phone = '$user_phone', user_email = '$user_email', user_level = '$user_level', user_time_last = '$user_time' WHERE user_username = '$user_username'")) {
                $return['msg'] = 'Cập nhật thông tin tài khoản thành công.';
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