<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span>
            </button>
            </div>
        <a class="navbar-brand" href="/home" role="button">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="/assets/img/favicons/logo.png" alt="" width="170" /><span
                    class="font-sans-serif"></span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                    <!-- label-->

                    <!-- parent pages-->
                    <a class="nav-link" href="/home" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Trang
                                chủ</span>
                        </div>
                    </a>
                    <!-- parent pages-->
                    <a class="nav-link" href="/user/profile" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">Thông tin
                                tài
                                khoản</span>
                        </div>
                    </a>

                    <a class="nav-link" href="/recharge/banking" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-coins"></span></span><span class="nav-link-text ps-1">Nạp tiền vào
                                tài khoản</span>
                        </div>
                    </a>
                    <!-- parent pages-->

                </li>

                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#service-facebook" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="service-facebook">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-facebook-f"></span></span><span class="nav-link-text ps-1">Dịch vụ
                                Facebook</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="service-facebook">
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-post-sale/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng like Post
                                         sale <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-post/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng like Post
                                         speed <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/comment/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng bình
                                        luận <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/follow-sale/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng theo
                                        dõi sale <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/follow/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng theo
                                        dõi speed <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-page-sale/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng like
                                        trang sale <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/like-page/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng like
                                        trang speed <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/service/facebook/eye-live/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng mắt
                                        livestream <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#service-tiktok" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="service-tiktok">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-tiktok"></span></span><span class="nav-link-text ps-1">Dịch vụ Tiktok</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="service-tiktok">
                        <li class="nav-item">
                            <a class="nav-link" href="/service/tiktok/view-video/order">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tăng lượt xem <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            </a>
                        </li>
                    </ul>
                </li>
                  </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#tools" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="tools">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-toolbox"></span></span><span class="nav-link-text ps-1">Siêu Công Cụ</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="tools">
                        <li class="nav-item">
                            <a class="nav-link" href="/tools/lay2fa">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Get 2Fa</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tools/getid">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lấy ID Facebook</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#service-hotro" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="service-hotro">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-facebook-f"></span></span><span class="nav-link-text ps-1">Liên Hệ & Hỗ Trợ</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="service-hotro">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/Bui.Van.Quyet.Vo.Dich.Thien.Ha.Can.All/">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Facebook Hỗ Trợ
                                         <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://zalo.me/0846745505">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Zalo Hỗ Trợ <i class="fa fa-toggle-on text-success"></i></span>
                                </div>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://chat.zalo.me/?g=wlvqip724">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Box Hỗ Trợ <i class="fa fa-toggle-on text-success"></i></span>
                               </div>
                             </a>
                        </li>
                    </ul>
                </li>     
                <?php if ($user_level == 4) { ?>

                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#administrator" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="administrator">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-toolbox"></span></span><span class="nav-link-text ps-1">Quản trị
                                viên</span>
                        </div>
                    </a>
                    <ul class="nav collapse show" id="administrator">
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/system/config">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cấu hình hệ
                                        thống</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/user/list">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Danh sách người
                                        dùng</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/user/edit-point">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sửa số dư thành
                                        viên</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/list">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Danh sách dịch
                                        vụ</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/noti/list">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Danh sách thông
                                        báo</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/service/facebook/list">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Danh sách đơn Facebook</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administrator/recharge/card/list">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Danh sách nạp tiền</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                    </ul>
                    <div class="settings px-3 px-xl-0"><div class="navbar-vertical-divider px-0"><hr class="navbar-vertical-hr my-3"></div><a class="btn btn-sm btn-block btn-purchase mb-3" href="/sitecon/sitecon"> Site Đại Lý</a></div>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span>
    </button>
    <a class="navbar-brand me-1 me-sm-3" href="/">
        <div class="d-flex align-items-center"><img class="me-2"
                src="../../assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                class="font-sans-serif">falcon</span>
        </div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                            href="/">Default</a><a class="dropdown-item link-600 fw-medium"
                            href="../../dashboard/analytics.html">Analytics</a><a
                            class="dropdown-item link-600 fw-medium" href="../../dashboard/e-commerce.html">E
                            commerce</a><a class="dropdown-item link-600 fw-medium"
                            href="../../dashboard/project-management.html">Management</a><a
                            class="dropdown-item link-600 fw-medium" href="../../dashboard/saas.html">SaaS</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="../../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                    class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                    style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark
                                    all as read</a>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs--1">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="../../assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment
                                            : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="../../assets/img/logos/oxford.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong> created an
                                            event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="../../assets/img/team/10.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to join the
                                            group: United Nations International Children's Fund</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="../../app/social/notifications.html">View all</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle"
                        src="../../https://graph.facebook.com/<?php echo isset($user_fb) ? $user_fb : '4'; ?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                        alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="../../pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../../pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="../../pages/authentication/card/logout.html">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span>
        </button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">facebook</span>
            </div>
        </a>

        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                    href="/user/history"><span class="fa fa-history" data-fa-transform="shrink-7"
                        style="font-size: 33px;"></span><span
                        class="notification-indicator-number"><?=number_format($total_service_buy);?></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                        style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Thông báo gần đây</h6>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                    <?php 
                                    $result1 = mysqli_query($conn, "SELECT * FROM table_noti ORDER BY noti_id DESC LIMIT 0,100");
                                    while ($row1 = mysqli_fetch_assoc($result1)) {              
                                    ?>
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="notification-body">
                                            <p class="mb-1"><?=$row1['noti_content']?></p>
                                            <span
                                                class="notification-time"><?=date('d-m-Y', $row1['noti_time']);?></span>
                                        </div>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle"
                            src="https://graph.facebook.com/<?php echo isset($user_fb) ? $user_fb : '4'; ?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                class="fas fa-crown me-1"></span><span><?php echo isset($user_level_type) ? $user_level_type : 'Khách!'; ?></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/user/profile">Trang cá nhân</a>
                        <a class="dropdown-item" href="/user/history">Lịch sử hoạt động</a>
                        <a class="dropdown-item" href="/recharge/banking">Nạp tiền tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/user/logout">Đăng xuất</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
        data-move-target="#navbarVerticalNav" data-navbar-top="combo">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span>
        </button>
        <a class="navbar-brand me-1 me-sm-3" href="/">
            <div class="d-flex align-items-center"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span>
            </div>
        </a>
        <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        id="dashboards">Dashboard</a>
                    <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium"
                                href="/">Default</a><a class="dropdown-item link-600 fw-medium"
                                href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium"
                                href="dashboard/e-commerce.html">E
                                commerce</a><a class="dropdown-item link-600 fw-medium"
                                href="dashboard/project-management.html">Management</a><a
                                class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                    href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                        data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                        class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                        style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as
                                        read</a>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment :
                                                "Hello world 😍"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">💬</span>Just now</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <div class="avatar-name rounded-circle"><span>AB</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                <strong>Mia Khalifa's</strong> status
                                            </p>
                                            <span class="notification-time"><span
                                                    class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-title border-bottom">EARLIER</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California.
                                                See today's weather.</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🌤️</span>1d</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification-unread  notification notification-flush"
                                        href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>University of Oxford</strong> created an event :
                                                "Causal Inference Hilary 2019"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">✌️</span>1w</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group:
                                                United Nations International Children's Fund</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🙋‍</span>2d</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">View all</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle"
                            src="https://graph.facebook.com/<?php echo isset($user_fb) ? $user_fb : '4'; ?>/picture?width=500&height=500&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">Set status</a>
                        <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                        <a class="dropdown-item" href="#!">Feedback</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <script>
    var navbarPosition = localStorage.getItem('navbarPosition');
    var navbarVertical = document.querySelector('.navbar-vertical');
    var navbarTopVertical = document.querySelector('.content .navbar-top');
    var navbarTop = document.querySelector('[data-layout] .navbar-top');
    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
    if (navbarPosition === 'top') {
        navbarTop.removeAttribute('style');
        navbarTopVertical.remove(navbarTopVertical);
        navbarVertical.remove(navbarVertical);
        navbarTopCombo.remove(navbarTopCombo);
    } else if (navbarPosition === 'combo') {
        navbarVertical.removeAttribute('style');
        navbarTopCombo.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopVertical.remove(navbarTopVertical);
    } else {
        navbarVertical.removeAttribute('style');
        navbarTopVertical.removeAttribute('style');
        navbarTop.remove(navbarTop);
        navbarTopCombo.remove(navbarTopCombo);
    }
    </script>