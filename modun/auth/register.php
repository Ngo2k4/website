<?php
require_once '../../_config.php';
if ($_REQUEST) {
    $return = array(
        'error' => 0
    );
    $type   = $_REQUEST['type'];
    if ($type === 'register') {
        $user_token               = generateRandomString(30);
        $user_username            = htmlspecialchars(addslashes($_POST['user_username']));
        $user_password            = md5(htmlspecialchars(addslashes($_POST['user_password'])));
        $user_confirm_password    = md5(htmlspecialchars(addslashes($_POST['user_confirm_password'])));
        $user_ip                  = $_SERVER['REMOTE_ADDR'];
        $user_status              = true;
        $user_time                = time();
        $check_username_available = mysqli_num_rows(mysqli_query($conn, "SELECT user_id FROM table_user WHERE user_username = '$user_username'"));
        if (strlen($user_username) < 6 || strlen($user_username) > 32) {
            $return['error'] = 1;
            $return['msg']   = 'Trường tài khoản phải có tối thiểu 6 kí tự.';
            die(json_encode($return));
        } else if (strlen($user_password) < 6 || strlen($user_password) > 32) {
            $return['error'] = 1;
            $return['msg']   = 'Trường mật khẩu phải có tối thiểu 6 kí tự.';
            die(json_encode($return));
        } else if ($user_password != $user_confirm_password) {
            $return['error'] = 1;
            $return['msg']   = 'Trường nhập lại mật khẩu không đúng.';
            die(json_encode($return));
        } else if (strlen($user_username) > 32 || strlen($user_username) < 5) {
            $return['error'] = 1;
            $return['msg']   = 'Trường họ và tên phải có tối thiểu 6 ký tự.';
            die(json_encode($return));
        } else if (!preg_match("/^[a-zA-Z0-9]*$/", $user_username)) {
            $return['error'] = 1;
            $return['msg']   = 'Trường tài khoản chỉ có thể chứa chữ cái, số và dấu gạch ngang.';
            die(json_encode($return));
        } else if ($check_username_available > 0) {
            $return['error'] = 1;
            $return['msg']   = 'Trường tài khoản đã có trong hệ thống.';
            die(json_encode($return));
        } else {
            if (mysqli_query($conn, "INSERT INTO table_user(user_token, user_username, user_password, user_fullname, user_fb_id, user_phone, user_email, user_point, user_ip, user_level, user_status, user_time_last, user_time) 
            VALUES ('$user_token', '$user_username', '$user_password', '','4', '', '', '0', '$user_ip', '0', '$user_status', '$user_time', '$user_time')")) {
                $return['msg'] = 'Đăng ký tài khoản mới thành công.';
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