<?php
require_once '../../../_config.php';
if ($_REQUEST) {
    $return = array('error' => 0);
    $type   = $_REQUEST['type'];
    if ($type === 'delete-service') {
        $service_id    = htmlspecialchars(addslashes($_POST['service_id']));
        $check_id_available = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM table_service WHERE service_id = '$service_id'"));
        if ($check_id_available == 0) {
            $return['error'] = 1;
            $return['msg']   = 'Trường id này không tồn tại trong hệ thống.';
            die(json_encode($return));
        } else {
            if (mysqli_query($conn, "DELETE FROM table_service WHERE service_id = '$service_id'")) {
                $return['msg'] = 'Xóa dịch vụ có id ' . $service_id . ' thành công.';
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