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
                        <h5>ĐĂNG NHẬP</h5>
                    </div>
                    <div class="col-auto fs--1 text-600"><span class="mb-0 undefined"></span> <span><a
                                href="/auth/register">Tạo tài khoản</a></span>
                    </div>
                </div>
                <form>
                    <div class="mb-3">
                        <input class="form-control" type="text" id="user_username" placeholder="Nhập tên tài khoản" />
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" id="user_password" placeholder="Nhập mật khẩu" />
                    </div>
                    <div class="row flex-between-center">
                        <div class="col-auto">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="basic-checkbox" checked="checked" />
                                <label class="form-check-label" for="basic-checkbox">Nhớ mật khẩu</label>
                            </div>
                        </div>
                        <div class="col-auto"><a class="fs--1" href="/">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-block w-100 mt-3" type="button" id="submit"
                            onclick="login();">Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function login() {
    var user_username = $('#user_username').val();
    var user_password = $('#user_password').val();
    if (!user_username) {
        swal('Trường tài khoản không được bỏ trống.', 'error');
        return;
    }
    if (!user_password) {
        swal('Trường mật khẩu không được bỏ trống.', 'error');
        return;
    }
    $.ajax({
        url: WEBSITE_URL + prefix + 'auth/login.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            type: 'login',
            user_username: user_username,
            user_password: user_password
        },
        beforeSend: function() {
            wait('#submit', false);
        },
        complete: function() {
            wait('#submit', true, 'Đăng nhập');
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