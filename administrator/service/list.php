<?php
require_once '../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Danh sách dịch vụ';
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
                        Danh sách dịch vụ</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-0">

    <div class="card mb-3">
        <div class="card-header bg-light">
            <div class="row justify-content-between">
                <div class="col-md-auto">
                    <h5 class="mb-3 mb-md-0">Danh sách dịch vụ</h5>
                </div>
                <div class="col-md-auto"><a class="btn btn-falcon-primary btn-sm" href="/administrator/service/create"><i
                            class="fas fa-plus fs--2 mr-1"></i> Thêm dịch vụ</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="tableExample2"
                data-list='{"valueNames":["service_id","service_time","service_title","service_category","service_min_amount","service_max_amount","service_status"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="service_id"><b>#</b>
                                </th>
                                <th class="sort" data-sort="service_time"><b>Thời gian</b>
                                </th>
                                <th class="sort" data-sort="service_title"><b>Tiêu đề</b>
                                </th>
                                <th class="sort" data-sort="service_category"><b>Loại</b>
                                </th>
                                <th class="sort" data-sort="service_min_amount"><b>Số lượng nhỏ nhất</b>
                                </th>
                                <th class="sort" data-sort="service_max_amount"><b>Số lượng lớn nhất</b>
                                </th>
                                <th class="sort" data-sort="service_status"><b>Trạng thái</b>
                                </th>
                                <th class="sort" data-sort="sd"><b>Hành động</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php 
                            $result = mysqli_query($conn, "SELECT * FROM table_service ORDER BY service_id DESC LIMIT 0,100");
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($row['service_status'] == 0) {
                                    $service_status = '<span class="badge bg-secondary">Không hoạt động</span>';
                                } else if ($row['service_status'] == 1) {
                                    $service_status = '<span class="badge bg-success">Hoạt động</span>';
                                }              
                            ?>
                            <tr>
                                <td class="service_id"><?=$row['service_id']?></td>
                                <td class="service_time"><?=date('d-m-Y', $row['service_time']);?></td>
                                <td class="service_title"><?=$row['service_title']?></td>
                                <td class="service_category"><?=$row['service_category']?></td>
                                <td class="service_min_amount"><?=number_format($row['service_min_amount'])?></td>
                                <td class="service_max_amount"><?=number_format($row['service_max_amount'])?></td>
                                <td class="service_status"><?=$service_status?></td>
                                <td class="text-end">
                                    <div class="dropdown font-sans-serif position-static">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-ellipsis-h fs--1"></span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end border py-0">
                                            <div class="bg-white py-2"><a class="dropdown-item"
                                                    href="/administrator/user/service/id-<?=$row['service_id']?>">Chỉnh
                                                    sửa</a><a class="dropdown-item text-danger"
                                                    onclick="delete_service(<?=$row['service_id']?>);">Xóa bỏ</a>
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
function delete_service(id) {
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
                url: WEBSITE_URL + prefix + 'administrator/service/delete.php',
                type: 'POST',
                dataType: 'JSON',
                data: {
                    type: 'delete-service',
                    service_id: id
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