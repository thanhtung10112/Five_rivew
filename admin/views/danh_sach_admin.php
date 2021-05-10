<div class="white-box">
    <h3>Tài khoản</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Trạng thái online</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adminList as $a) { ?>
                    <tr>
                        <td><?= $a['ma_user'] ?></td>
                        <td><?= $a['ho_ten'] ?></td>
                        <td><?= $a['email'] ?></td>
                        <td>
                            <?=($a['trang_thai_online']==0)? "<span class='label label-warning'>Offline</span>":"<span class='label label-success'>Online</span>"; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>