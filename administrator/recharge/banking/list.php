<?php
require_once '../../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Danh sách nạp tiền chuyển khoản';
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
                    Danh sách nạp tiền chuyển khoản</li>
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
                    <h5 class="mb-3 mb-md-0">Danh sách nạp tiền chuyển khoản
                    </h5>
                </div>
                <div class="col-md-auto"><a class="btn btn-falcon-primary btn-sm"
                        href="/administrator/recharge/card/list"><span class="fas fa-list fs--2 mr-1"></span> Danh sách nạp tiền thẻ cào</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="tableExample2"
                data-list='{"valueNames":["banking_id","banking_code","banking_time","banking_type","banking_transfer","banking_amount","banking_content"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="banking_id"><b>#</b>
                                </th>
                                <th class="sort" data-sort="banking_code"><b>Mã giao dịch</b>
                                </th>
                                <th class="sort" data-sort="banking_time"><b>Thời gian</b>
                                </th>
                                <th class="sort" data-sort="banking_type"><b>Loại</b>
                                </th>
                                <th class="sort" data-sort="banking_transfer"><b>Người chuyển</b>
                                </th>
                                <th class="sort" data-sort="banking_amount"><b>Thực nhận</b>
                                </th>
                                <th class="sort" data-sort="banking_content"><b>Nội dung</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php 
                        $result = mysqli_query($conn,"SELECT * FROM table_banking ORDER BY banking_id DESC LIMIT 0,100");
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td class="banking_id"><?=$row['banking_id'];?></td>
                                <td class="banking_code"><?=$row['banking_code'];?></td>
                                <td class="banking_time"><?php echo date('d-m-Y', $row['banking_time']);?></td>
                                <td class="banking_type"><?=$row['banking_type'];?></td>
                                <td class="banking_transfer"><?=$row['banking_transfer'];?></td>
                                <td class="banking_amount"><?=$row['banking_amount'];?></td>
                                <td class="banking_content"><?=$row['banking_content'];?></td>
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
<?php require_once '../../../includes/footer.php'; ?>