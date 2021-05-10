<div class="white-box">
    <ol class="breadcrumb">
        <li> <a href="?ctrl=users&act=addnew" class="btn btn-warning"><span class="ti-plus"></span>Thêm người dùng</a></li>
    </ol>                 
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Trạng thái email</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientList as $c) { ?>
                    <tr>
                        <td><?=$c['ma_user']?></td>
                        <td>
                            <?=$c['ho_ten']?>
                            <?=($a['trang_thai']==0)? "<span class='label label-warning'>Offline</span>":"<span class='label label-success'>Online</span>"; ?>
                        </td>
                        <td><?=$c['email']?></td>
                        <td><?=md5($c['mat_khau'])?></td>
                        <td><?=($c['trang_thai']==0)? "Chưa kích hoạt":"Đã kích hoạt"; ?></td>
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
                   