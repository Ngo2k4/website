<?php
require_once '../_config.php';
if ($duysexy == true) {
    header('location: /home');
    die();
}
$title = 'Đăng nhập';
require_once '../includes/header.php';
?>
<div class="row flex-center min-vh-100 py-6">
    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <a class="d-flex flex-center mb-4" href="/"><img class="me-2"
                src="../../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="58" /><span
                class="font-sans-serif fw-bolder fs-5 d-inline-block">AutoMxh.Co</span>
        </a>
        <div class="card">
            <div class="card-body p-4 p-sm-5">
                <div class="row flex-between-center mb-2">
                    <div class="col-auto">
                        <h5>ĐĂNG KÝ</h5>
                    </div>
                    <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">Bạn đã có tài
                            khoản?</span> <span><a href="/auth/login">Đăng nhập</a></span>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <input class="form-control" id="user_username" type="text" placeholder="Tên tài khoản..." />
                    </div>
                    <div class="row gx-2">
                        <div class="mb-3 col-sm-6">
                            <input class="form-control" type="password" id="user_password"
                                placeholder="Nhập mật khẩu..." />
                        </div>
                        <div class="mb-3 col-sm-6">
                            <input class="form-control" type="password" id="user_confirm_password"
                                placeholder="Nhập lại mật khẩu..." />
                        </div>
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
                            onclick="register();">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function register() {
    var user_username = $('#user_username').val();
    var user_password = $('#user_password').val();
    var user_confirm_password = $('#user_confirm_password').val();
    var user_checkbox = $('input[id=user_checkbox]:checked').val();
    if (!user_username) {
        swal('Trường tài khoản không được bỏ trống.', 'error');
        return;
    }
    if (!user_password) {
        swal('Trường mật khẩu không được bỏ trống.', 'error');
        return;
    }
    if (!user_confirm_password) {
        swal('Trường nhập mật khẩu không được bỏ trống.', 'error');
        return;
    }
    if (!user_checkbox) {
        swal('Bạn chưa chấp nhận điều khoản.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'auth/register.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'register',
            user_username: user_username,
            user_password: user_password,
            user_confirm_password: user_confirm_password
        },
        beforeSend: function() {
            wait('#submit', false);
        },
        complete: function() {
            wait('#submit', true, 'Đăng ký');
        },
        success: (data) => {
            if (data.error) {
                swal(data.msg, "error");
            } else {
                swal(data.msg, "success");
                setTimeout(function() {
                    window.location.href = '/auth/login';
                }, 1000);
            }
        }
    })
}
</script>
<?php require_once '../includes/footer.php'; ?>