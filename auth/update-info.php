<?php 
require_once '../_config.php'; 
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 1){
    header('location: /home');
    die();
}
$title = 'Cập nhật thông tin tài khoản';
require_once '../includes/header.php'; 
?>
<div class="row flex-center min-vh-100 py-6">
    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <a class="d-flex flex-center mb-4" href="/"><img class="me-2"
                src="../../../assets/img/favicons/logo.png" alt="" width="100" /><span
                class="font-sans-serif fw-bolder fs-5 d-inline-block"></span>
        </a>
        <div class="card">
            <div class="card-body p-4 p-sm-5">
                <div class="row flex-between-center mb-2">
                    <div class="col-auto">
                        <h5>CẬP NHẬT THÔNG TIN</h5>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="bootstrap-wizard-wizard-name">Họ và tên</label>
                        <input class="form-control" type="text" id="user_fullname" placeholder="Nhập họ và tên" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="bootstrap-wizard-wizard-name">Số điện thoại</label>
                        <input class="form-control" type="number" id="user_phone" placeholder="Nhập số điện thoại" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="bootstrap-wizard-wizard-name">Email*</label>
                        <input class="form-control" type="email" id="user_email" placeholder="Nhập Email" />
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="user_checkbox" />
                        <label class="form-label" for="user_checkbox">Tôi chấp nhận <a href="#!">điều khoản
                            </a>và
                            <a href="#!">chính sách bảo mật</a>
                        </label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100 mt-3" type="button" id="submit"
                            onclick="update_info();">Lưu thông tin
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function update_info() {
    var user_fullname = $('#user_fullname').val();
    var user_phone = $('#user_phone').val();
    var user_email = $('#user_email').val();
    var user_checkbox = $('input[id=user_checkbox]:checked').val();
    if (!user_fullname) {
        swal('Trường họ và tên không được bỏ trống.', 'error');
        return;
    }
    if (!user_phone) {
        swal('Trường số điện thoại không được bỏ trống.', 'error');
        return;
    }
    if (!user_email) {
        swal('Trường email không được bỏ trống.', 'error');
        return;
    }
    if (!user_checkbox) {
        swal('Bạn chưa chấp nhận điều khoản.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'auth/update-info.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'update-info',
            user_fullname: user_fullname,
            user_phone: user_phone,
            user_email: user_email
        },
        beforeSend: function() {
            wait('#submit', false);
        },
        complete: function() {
            wait('#submit', true, 'Next');
        },
        success: (data) => {
            if (data.error) {
                swal(data.msg, "error");
            } else {
                swal(data.msg, "success");
                setTimeout(function() {
                    window.location.href = '/home';
                }, 1000);
            }
        }
    })
}
</script>

<?php require_once '../includes/footer.php'; ?>