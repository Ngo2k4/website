<?php
require_once '../../../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level != 4){
    header('location: /home');
    die();
}
$title = 'Danh sách nạp tiền thẻ cào';
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
                    Danh sách nạp tiền thẻ cào</li>
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
                    <h5 class="mb-3 mb-md-0">Danh sách nạp tiền thẻ cào
                    </h5>
                </div>
                <div class="col-md-auto"><a class="btn btn-falcon-primary btn-sm"
                        href="/administrator/recharge/banking/list"><span class="fas fa-list fs--2 mr-1"></span> Danh sách nạp tiền chuyển khoản</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="tableExample2"
                data-list='{"valueNames":["card_id","card_code","card_time","card_type","card_amount","card_serial","card_pin","card_status"],"page":10,"pagination":true}'>
                <div class="mb-3">
                    <input class="search form-control" placeholder="Search" />
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="card_id"><b>#</b>
                                </th>
                                <th class="sort" data-sort="card_code"><b>Mã giao dịch</b>
                                </th>
                                <th class="sort" data-sort="card_time"><b>Thời gian</b>
                                </th>
                                <th class="sort" data-sort="card_type"><b>Loại thẻ</b>
                                </th>
                                <th class="sort" data-sort="card_amount"><b>Mệnh giá</b>
                                </th>
                                <th class="sort" data-sort="card_serial"><b>Seri</b>
                                </th>
                                <th class="sort" data-sort="card_pin"><b>Mã thẻ</b>
                                </th>
                                <th class="sort" data-sort="card_status"><b>Nội dung</b>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php 
                        $result = mysqli_query($conn,"SELECT * FROM table_card ORDER BY card_id DESC LIMIT 0,100");
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td class="card_id"><?=$row['card_id'];?></td>
                                <td class="card_code"><?=$row['card_code'];?></td>
                                <td class="card_time"><?php echo date('d-m-Y', $row['card_time']);?></td>
                                <td class="card_type"><?=$row['card_type'];?></td>
                                <td class="card_amount"><?=$row['card_amount'];?></td>
                                <td class="card_serial"><?=$row['card_serial'];?></td>
                                <td class="card_pin"><?=$row['card_pin'];?></td>
                                <td class="card_status"><?=$row['card_status'];?></td>
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