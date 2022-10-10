<?php
require_once '../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Thêm thông báo mới';
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
                        Thêm thông báo mới</li>
                </ol>
            </div>

        </div>
    </div>
</div>


<div class="row g-0">
    <div class="col-lg-12">
        <div class="card h-lg-100 overflow-hidden">
            <div class="card-header bg-light">
                <div class="row justify-content-between">
                    <div class="col-md-auto">
                        <h5 class="mb-3 mb-md-0">Thêm thông báo mới</h5>
                    </div>
                    <div class="col-md-auto"><a class="btn btn-falcon-default btn-sm"
                            href="/administrator/noti/list"><span class="fas fa-list fs--2 mr-1"></span> Danh sách
                            thông báo</a>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                <p class="mb-0">
                <form action="" method="POST" accept-charset="utf-8" class="user">
                    <div class="mb-3">
                        <label>Nội dung:</label>
                        <textarea type="text" id="noti_content" class="form-control" rows="3"
                            placeholder="Nhập nội dung của thông báo" required=""></textarea>
                    </div>
                    <center>
                        <button type="button" class="btn btn-primary btn-rounded btn-block" id="submit"
                            onclick="create_noti();"><i class="fa fa-info"></i> Thực hiện</button>
                    </center>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function create_noti() {
    var noti_content = $('#noti_content').val();
    if (!noti_content) {
        swal('Trường ID tài khoản không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'administrator/noti/create.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'create-noti',
            noti_content: noti_content
        },
        beforeSend: function() {
            wait('#submit', false);
        },
        complete: function() {
            wait('#submit', true, '<i class="fa fa-primary"></i> Thực hiện');
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
    })
}
</script>

<?php require_once '../../includes/footer.php'; ?>