<?php
require_once '../../../_config.php';
if ($_REQUEST) {
    $return = array('error' => 0);
    $type   = $_REQUEST['type'];
    if ($type === 'create-noti') {
        $noti_content          = htmlspecialchars(addslashes($_POST['noti_content']));
        $noti_time           = time();
        if($user_level != 4){
            $return['error'] = 1;
            $return['msg']   = 'Bạn không phải là Admin.';
            die(json_encode($return));
        } else {
            if (mysqli_query($conn, "INSERT INTO table_noti(noti_content, noti_time) 
            VALUES ('$noti_content', '$noti_time')")) {
                $return['msg'] = 'Thêm thông báo mới thành công.';
                die(json_encode($return));
            } else {
                $return['error'] = 1;
                $return['msg']   = 'Bạn không có quyền truy cập bản quyền';
                die(json_encode($return));
            }
        }
        
    }
}
?>