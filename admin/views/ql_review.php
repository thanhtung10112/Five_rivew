<div class="white-box">
    <ol class="breadcrumb">
        <li> <a href="#" class="btn btn-warning"><span class="ti-plus"></span>Thêm review</a></li>
    </ol>                 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Mã Review</th>
                    <th>Họ Tên</th>
                    <th>Nội dung review</th>
                    <th>Ngày review</th>
                    <th>Số lượt bình luận</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($reviewList as $r) { ?>
                    <tr>
                        <td><?=$r['ma_reviews']?></td>
                        <td>
                            <?=$r['ho_ten']?>
                            <?=$r['chuc_vu']?>
                            <?=$r['rating']?>
                        </td>
                        <td><?=$r['noi_dung']?></td>
                        <td><?=$r['ngay_review']?></td>
                        <td><?=getTongLuotBinhLuanByIDReview($r['ma_reviews'])?></td>
                        <td><a href="#" class="btn btn-warning">
                            <span class="glyphicon glyphicon-pencil"></span>Sửa</a></td>
                        <td><a href="#" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span> Xóa</a></td> 
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
                    