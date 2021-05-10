<div class="white-box">
    <div class="row row-in">
        <div class="col-lg-4 col-sm-6">
            <div class="col-in text-center">
                <h5 class="text-danger">Thống kê review</h5>
                <h3 class="counter"><?=$tongReview?></h3>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="col-in text-center b-r-none">
                <h5 class="text-muted text-warning">Thống kê trường</h5>
                <h3 class="counter"><?=$tongSchool?></h3>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="col-in text-center">
                <h5 class="text-muted text-purple">Thống kê user</h5>
                <h3 class="counter"><?=$tongUser?></h3>
            </div>
        </div>
    </div>
    <div id="morris-area-chart" style="height: 345px;"></div>
</div>
</div>
</div>
<!-- row -->
<div class="row">
<div class="col-md-6 col-xs-12 col-sm-12">
<div class="white-box">
    <h3>Các hoạt động gần đây</h3>
    <ul class="list-task list-group" data-role="tasklist">
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                <label for="inputSchedule"> <span>Lịch họp</span> </label>
            </div>
        </li>
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                <label for="inputCall"> <span>Trả lời coment của người reivew</span> <span
                        class="label label-danger">Hôm nay</span> </label>
            </div>
        </li>
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                <label for="inputBook"> <span>Đặt một chuyến bay cho kỳ nghỉ</span> </label>
            </div>
        </li>
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                <label for="inputForward"> <span>Chuyển tiếp các nhiệm vụ quan trọng</span> <span
                        class="label label-warning">2 tuần</span> </label>
            </div>
        </li>
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputRecieve" name="inputCheckboxesRecieve">
                <label for="inputRecieve"> <span>Cập nhật review mới</span> </label>
            </div>
        </li>
        <li class="list-group-item" data-role="task">
            <div class="checkbox checkbox-info">
                <input type="checkbox" id="inputForward2" name="inputCheckboxesd">
                <label for="inputForward2"> <span>Xóa các review bị spam nhiều</span> <span
                        class="label label-success">1 tuần</span> </label>
            </div>
        </li>
    </ul>
</div>
</div>
<div class="col-md-6 col-xs-12 col-sm-12">
<div class="white-box">
    <h3>Các bình luận gần đây</h3>
    <div class="message-center">
        <?php foreach($reviewList as $r) { ?>
        <a href="#">
            <div class="user-img">
                <img src="../assets/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span
                    class="profile-status online pull-right"></span>
            </div>
            <div class="mail-contnet">
                <h5><?=$r['ho_ten']?></h5>
                <span class="mail-desc"><?=$r['noi_dung']?></span> <span class="time">9:30
                    AM</span>
            </div>
        </a>
        <?php } ?>
    </div>
</div>