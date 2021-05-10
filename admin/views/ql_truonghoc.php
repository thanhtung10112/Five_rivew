<div class="white-box">
    <ol class="breadcrumb">
        <li> <a href="#" class="btn btn-warning"><span class="ti-plus"></span>Thêm trường học</a></li>
    </ol>                 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên trường</th>
                    <th>Hệ</th>
                    <th>Số lượt review</th>
                    <th>Năm thành lập</th>
                    <th>Hình ảnh</th>
                    <th>Địa chỉ</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($schoolsList as $s) { ?>
                    <tr>
                        <td><?=$s['ma_school']?></td>
                        <td><?=$s['ten_school']?></td>
                        <td><?=$s['he']?></td>
                        <td><?=getTongLuotReviewByIDSchool($s['ma_school'])?></td>
                        <td><?=$s['nam_thanh_lap']?></td>
                        <td><?=$s['hinh_anh']?></td>
                        <td><?=$s['dia_chi']?></td>
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