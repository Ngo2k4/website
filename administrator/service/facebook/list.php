<?php
require_once '../../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Danh sách đơn';
require_once '../../../includes/header.php';
require_once '../../../includes/navbar.php';
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
                        Danh sách đơn Facebook</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-0">
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto col-lg align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Danh sách đơn Facebook</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active">
                    <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/like-post-sale/list">Tăng like bài viết sale</a>
                    <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/like-post/list">Tăng like bài viết</a>
                    <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/comment/list">Tăng bình luận</a>
                    <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/follow-sale/list">Tăng theo dõi sale</a>
                    <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/follow/list">Tăng theo dõi</a>
                        <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/like-page-sale/list">Tăng like trang sale</a>
                        <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/like-page/list">Tăng like trang</a>
                        <a class="btn btn-falcon-primary ms-sm-2 mt-2"
                        href="/administrator/service/facebook/eye-live/list">Tăng mắt live</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once '../../../includes/footer.php'; ?>