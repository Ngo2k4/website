<?php
require_once '../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Danh sách người dùng';
require_once '../../includes/header.php';
require_once '../../includes/navbar.php';
?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item font-sans-serif"><a href="/"><strong><i class="fas fa-globe"></i>
                                <?=$site_name;?></strong></a></li>
                    <li class="breadcrumb-item font-sans-serif active" aria-current="page"><i class="fas fa-link"></i>
                        Danh sách người dùng</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-0">

    <div class="card mb-3">
        <div class="card-header bg-light">
            <h5 class="mb-0">Danh sách người dùng</h5>
        </div>
        <div class="card-body">
            <div id="tableExample2"
                data-list='{"valueNames":["history_user_id","history_user_time","history_user_ip","history_user_content"],"page":5,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="user_id"><b>#</b>
                                </th>
                                <th class="sort" data-sort="user_time"><b>Thời gian</b>
                                </th>
                                <th class="sort" data-sort="user_fullname"><b>Họ và tên</b>
                                </th>
                                <th class="sort" data-sort="user_username"><b>Tài khoản</b>
                                </th>
                                <th class="sort" data-sort="user_phone"><b>Số điện thoại</b>
                                </th>
                                <th class="sort" data-sort="user_point"><b>Số tiền</b>
                                </th>
                                <th class="sort" data-sort="user_status"><b>Trạng thái</b>
                                </th>
                                <th class="sort" data-sort="user_level"><b>Cấp độ</b>
                                </th>
                                <th class="sort" data-sort="sd"><b>Hành động</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php 
                            $result = mysqli_query($conn, "SELECT * FROM table_user ORDER BY user_id DESC LIMIT 0,100");
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['user_status'] == false) {
                                    $user_status = '<span class="badge bg-primary" onclick="unblock_user('.$row['user_id'].');">Mở khóa</span>';
                                } else if ($row['user_status'] == true) {
                                    $user_status = '<span class="badge bg-danger" onclick="block_user('.$row['user_id'].');">Khóa</span>';
                                }
                                if ($row['user_level'] == '1') {
                                    $user_level = '<span class="badge bg-secondary">Thành viên</span>';
                                } else if ($row['user_level'] == '2') {
                                    $user_level = '<span class="badge bg-info">Cộng tác viên</span>';
                                } else if ($row['user_level'] == '3') {
                                    $user_level = '<span class="badge bg-warning">Đại lý</span>';
                                } else if ($row['user_level'] == '4') {
                                    $user_level = '<span class="badge bg-danger">Quản trị viên</span>';
                                }                
                            ?>
                            <tr>
                                <td class="user_id"><?=$row['user_id']?></td>
                                <td class="user_time"><?=date('d-m-Y', $row['user_time']);?></td>
                                <td class="user_fullname"><?=$row['user_fullname']?></td>
                                <td class="user_username"><?=$row['user_username']?></td>
                                <td class="user_phone"><?=$row['user_phone']?></td>
                                <td class="user_point"><?=number_format($row['user_point'])?></td>
                                <td class="user_status"><?=$user_status?></td>
                                <td class="user_level"><?=$user_level?></td>
                                <td class="text-end">
                                    <div class="dropdown font-sans-serif position-static">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                            <div class="bg-white py-2"><a class="dropdown-item"
                                                    href="/administrator/user/edit/id-<?=$row['user_id']?>">Chỉnh
                                                    sửa</a><a class="dropdown-item text-danger"
                                                    onclick="delete_user(<?=$row['user_id']?>);">Xóa bỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                        data-list-pagination="prev">
                        <span class="fas fa-chevron-left">
                        </span>
                    </button>
                    <ul class="pagination mb-0">
                    </ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                        data-list-pagination="next">
                        <span class="fas fa-chevron-right">

                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
function delete_user(id) {
    Swal.fire({
        icon: 'info',
        title: 'Xác nhận?',
        text: `Bạn có chắc muốn xóa người dùng có id ${id}?`,
        showDenyButton: true,
        confirmButtonText: 'OK!',
        denyButtonText: `Cancel`
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: WEBSITE_URL + prefix + 'administrator/user/delete.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    type: 'delete-user',
                    user_id: id
                },
                success: (data) => {
                    if (data.error) {
                        swal(data.msg, "error");
                    } else {
                        swal(data.msg, "success");
                        setTimeout(function() {
                            location.reload();
                        }, 200);
                    }
                }
            });
        } else if (result.isDenied) {
            swal("Bạn đã nhấn hủy.", "error");
        }
    });
}

function block_user(id) {
    Swal.fire({
        icon: 'info',
        title: 'Xác nhận?',
        text: `Bạn có chắc muốn khóa người dùng có id ${id}?`,
        showDenyButton: true,
        confirmButtonText: 'OK!',
        denyButtonText: `Cancel`
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: WEBSITE_URL + prefix + 'administrator/user/block.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    type: 'block-user',
                    user_id: id
                },
                success: (data) => {
                    if (data.error) {
                        swal(data.msg, "error");
                    } else {
                        swal(data.msg, "success");
                        setTimeout(function() {
                            location.reload();
                        }, 200);
                    }
                }
            });
        } else if (result.isDenied) {
            swal("Bạn đã nhấn hủy.", "error");
        }
    });
}

function unblock_user(id) {
    Swal.fire({
        icon: 'info',
        title: 'Xác nhận?',
        text: `Bạn có chắc muốn mở khóa người dùng có id ${id}?`,
        showDenyButton: true,
        confirmButtonText: 'OK!',
        denyButtonText: `Cancel`
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: WEBSITE_URL + prefix + 'administrator/user/unlock.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    type: 'unlock-user',
                    user_id: id
                },
                success: (data) => {
                    if (data.error) {
                        swal(data.msg, "error");
                    } else {
                        swal(data.msg, "success");
                        setTimeout(function() {
                            location.reload();
                        }, 200);
                    }
                }
            });
        } else if (result.isDenied) {
            swal("Bạn đã nhấn hủy.", "error");
        }
    });
}
</script>
<?php require_once '../../includes/footer.php'; ?>