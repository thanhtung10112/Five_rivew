<main class="container">
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <span class="icon is-small"><i class="fas fa-home"></i></span>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Review <?= $row['ten_school'] ?></li>
            </ol>
        </nav>
    </div>

    <section class="company-info-company-page mb-2">
        <div class="b" style="background-color: rgb(233 236 239);">
            <div class="company-item">
                <div class="row">
                    <div class=" col-2 company-infos ">
                        <img src="../assets/images/logo-schools/<?= $row['hinh_anh'] ?>" alt="">
                    </div>

                    <div class="col-5 ">
                        <div class="company-info__detail">
                            <h4 class="is-size-5 has-text-weight-semibold company-info__name">
                                <a href="chitiet.html" class="txr">
                                    <?= $row['ten_school'] ?>
                                </a>
                                <span class="start">
                                    <?php
                                    if ($row['school_rating'] == 0) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 1) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 2) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 3) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 4) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    }
                                    ?>
                                </span>
                            </h4>
                            <div class="company-info__other">
                                <span style="margin-right: 0.3rem">
                                    <span class="icon"> <i class="fas fa-briefcase"></i></span> <?= $row['he'] ?>
                                </span>
                                <span><span class="icon"> <i class="fas fa-users"></i> </span> <?= $row['nam_thanh_lap'] ?> </span>
                            </div>
                            <div class="company-info__location">
                                <span>
                                    <span class="icon"> <i class="fas fa-building"></i> </span> <?= $row['dia_chi'] ?>
                                </span>
                            </div>

                            <div class="btnsss">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success vietreview" data-toggle="modal" data-target="#exampleModalCenter">
                                    <span class="icon"> <i class="fas fa-pencil-alt"></i> </span> <span>Viết review</span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Viết riview trường Đại học SML</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <section class="modal-card-body">
                                                    <form action="?ctrl=home&act=insertReview" method="post">
                                                        <div class="field">
                                                            <label class="label">Họ và tên:</label>
                                                            <input type="hidden" name="ma_user" value="<?= (isset($_SESSION['admin-ma_user']) == true) ? $_SESSION['admin-ma_user'] : "0"; ?>">
                                                            <input type="hidden" name="ma_school" value="<?= $_GET['ma_school'] ?>">
                                                            <div class="control">
                                                                <div class="input-group mb-3">
                                                                    <input name="ho_ten" type="text" class="form-control" placeholder="Muốn xưng tên thật thì xưng không thì thui" aria-label="Username" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <label class="label">Chức vụ:</label>
                                                            <div class="control">
                                                                <input name="chuc_vu" type="text" class="form-control" placeholder="Sinh viên / Giáo viên / Outsider" aria-label="Dev quèn / HR hay Manager" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                        <div class="field">
                                                            <label class="label">Review của bạn <span class="has-text-danger">(Bắt buộc)</span>
                                                            </label>
                                                            <div class="form-group ">
                                                                <textarea class="form-control" placeholder="Nội dung" name="noi_dung" rows="10" required></textarea>
                                                            </div>
                                                            <p class="help">Nội dung review <b>tối thiếu 20 kí tự</b></p>
                                                        </div>
                                                        <div class="field">
                                                            <label class="label">Cho điểm trường</label>
                                                            <div class="control">
                                                                <div class="rating">
                                                                    <input type="radio" name="star" id="star1" value="5"><label for="star1">
                                                                    </label>
                                                                    <input type="radio" name="star" id="star2" value="4"><label for="star2">
                                                                    </label>
                                                                    <input type="radio" name="star" id="star3" value="3"><label for="star3">
                                                                    </label>
                                                                    <input type="radio" name="star" id="star4" value="2"><label for="star4">
                                                                    </label>
                                                                    <input type="radio" name="star" id="star5" value="1"><label for="star5">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="companyId" value="5f8c6f3d515c3833fe683a47" />
                                                        <div class="g-recaptcha" data-sitekey="6LfaZYYUAAAAAJm3LX9_eCHCnoSQvGM_aydMNExO" data-callback="onReviewCaptchaSuccess"></div>
                                                        <p class="m-t-5">
                                                            Người đăng chịu trách nhiệm về tính xác thực của nội dung chứ
                                                            <b>bên mình không có chịu</b>, okay?
                                                        </p>
                                                </section>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy bỏ</button>
                                                <button type="submit" class="btn btn-primary">Đăng review</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-secondary is-medium is-rounded button-subscribe">
                                    <span class="icon"> <i class="far fa-bell"></i> </span> <span>Nhận thông báo</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="box m-b-10">
                            <h4 class="is-size-5 has-text-weight-bold m-b-10">
                                Tổng Review <span class="is-size-6 has-text-weight-light">
                                    <?php
                                    if ($row['school_rating'] == 0) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 1) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 2) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 3) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else if ($row['school_rating'] == 4) {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='far fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    } else {
                                        echo "
                                            <span class='is-size-6 has-text-weight-light'>
                                                <span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    <span class='icon is-small has-text-warning'>
                                                        <i class='fas fa-star'></i>
                                                    </span>
                                                    
                                            </span>
                                            ";
                                    }
                                    ?>

                                    <span class="company-info__rating-count">(<?= $tong_sao ?>)</span>
                                </span>
                            </h4>

                            <ul class="rivieww">
                                <li>
                                    <!-- Change this to a for filter link later -->
                                    <a href="?score=5" class="review-summary ">
                                        <span class="review-point">5 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($nam_sao * 100) / $tong_sao ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="review-percent"> <?= $nam_sao ?> review</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- Change this to a for filter link later -->
                                    <a href="?score=4" class="review-summary ">
                                        <span class="review-point">4 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($bon_sao * 100) / $tong_sao ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="review-percent"> <?= $bon_sao ?> review</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- Change this to a for filter link later -->
                                    <a href="?score=3" class="review-summary ">
                                        <span class="review-point">3 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($ba_sao * 100) / $tong_sao ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="review-percent"> <?= $ba_sao ?> review</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- Change this to a for filter link later -->
                                    <a href="?score=2" class="review-summary ">
                                        <span class="review-point">2 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($hai_sao * 100) / $tong_sao ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="review-percent"> <?= $hai_sao ?> review</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- Change this to a for filter link later -->
                                    <a href="?score=1" class="review-summary ">
                                        <span class="review-point">1 sao</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: <?= ($mot_sao * 100) / $tong_sao ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="review-percent"> <?= $mot_sao ?> review</span>
                                    </a>
                                </li>
                            </ul>

                            <p class="has-text-weight-medium">Đang hiển thị toàn bộ review</p>
                        </div>
                    </div>


                    <style type="text/css" media="screen">
                        .review-summary {
                            display: flex;
                            flex-direction: row;
                            align-items: center;
                            margin-bottom: 0.5rem;
                            font-size: 0.9rem;
                        }

                        .review-summary progress.progress {
                            margin-bottom: 0;
                        }

                        .review-point {
                            flex-basis: 5rem;
                        }

                        .review-percent {
                            flex-basis: 9.5rem;
                            margin-left: 8px;
                        }
                    </style>

                </div>
            </div>



        </div>
    </section>

    <!-- <div class="review card">
        <header class="card-header container-xl">
            <div class="row container-xl">
                <div class="col-9">
                    <div>
                        <img src="../assets/images/img_avatar.png" alt="Avatar" class="avatar">
                        <p class="card-header-title">
                            Thích thì review (Chuyên gia review) &nbsp;
                            <span><span class="icon is-small has-text-warning">
                                    <i class="fas fa-star"></i>
                                </span><span class="icon is-small has-text-warning">
                                    <i class="fas fa-star"></i>
                                </span><span class="icon is-small has-text-warning">
                                    <i class="fas fa-star"></i>
                                </span><span class="icon is-small has-text-warning">
                                    <i class="fas fa-star"></i>
                                </span><span class="icon is-small has-text-warning">
                                    <i class="fas fa-star"></i>
                                </span></span>

                        </p>
                        <time class="review__time">25 phút trước</time>
                        <i class="fas fa-globe-europe"></i>
                    </div>
                </div>



                <div class="col-3 mr-auto">
                    <div class="d-flex ellipsi">
                        <div class="ml-auto ">
                            <a href="ellipsis"><i class="fas fa-ellipsis-h"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="chat">
            <p>Trường sạch sẽ, thoáng mát, đầy đủ tiện nghi, lịch sự</p>
        </div>

        <hr class="chattop">

        <div class="like">
            <img class="likes" src="../assets/images/like/thích.png" alt="">
            <img class="likes" src="../assets/images/like/haha.png" alt="">
            <img class="likes" src="../assets/images/like/wow.png" alt="">
            <span>1,6K</span>
            <div class="d-flex">
                <span class="ml-auto "><span>160 bình luận</span> &nbsp; <span>30 lượt chia sẻ</span></span>
            </div>
        </div>

        <div class="liketop">
            <hr>
        </div>

        <div class="commnet">
            <div class="row comments">
                <div class="col-4 thums-up react">
                    <div class="btn-like" style="width: 200px;cursor: pointer;">
                        <i style='font-size:17px' class="far fa-thumbs-up doww"></i>
                        Thích
                    </div>

                </div>

                <div class="col-4 thums-up react">
                    <div style="width: 200px;">
                        <i class="far fa-comment-alt doww"></i>
                        <?php
                        if (isset($_SESSION['admin'])) echo "<span class='font-weight-bold'>Bình luận</span>";
                        else echo "<a style='color: rgb(74 74 74); ' href='?ctrl=home&act=dangnhap'>Bình luận</a>";

                        ?>
                    </div>
                </div>

                <div class="col-4 thums-up react">
                    <div style="width: 200px;">
                        <i class="fas fa-share  doww"></i>
                        <span class="font-weight-bold">Chia sẻ</span>
                    </div>
                </div>


            </div>

        </div>
    </div> -->

    <?php if($tong_sao == 0) {echo "<p style='text-align:center;'> Chưa có lượt review nào... </p>";} foreach ($reviewByMaSchools as $review) { ?>
        
        <div class="review card mt-3">
            <header class="card-header container-xl">
                <div class="row container-xl">
                    <div class="col-9">
                        <div>
                            <img src="../assets/images/img_avatar.png" alt="Avatar" class="avatar">
                            <p class="card-header-title">
                                <?= $review['ho_ten'] ?> (<?= $review['chuc_vu'] ?>) &nbsp;
                                <?php
                                if ($review['rating'] == 1) {
                                    echo "
                                    <span class='is-size-6 has-text-weight-light'>
                                        <span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                    </span>
                                    ";
                                } else if ($review['rating'] == 2) {
                                    echo "
                                    <span class='is-size-6 has-text-weight-light'>
                                        <span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            
                                    </span>
                                    ";
                                } else if ($review['rating'] == 3) {
                                    echo "
                                    <span class='is-size-6 has-text-weight-light'>
                                        <span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            
                                    </span>
                                    ";
                                } else if ($review['rating'] == 4) {
                                    echo "
                                    <span class='is-size-6 has-text-weight-light'>
                                        <span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='far fa-star'></i>
                                            </span>
                                            
                                    </span>
                                    ";
                                } else {
                                    echo "
                                    <span class='is-size-6 has-text-weight-light'>
                                        <span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            <span class='icon is-small has-text-warning'>
                                                <i class='fas fa-star'></i>
                                            </span>
                                            
                                    </span>
                                    ";
                                }
                                ?>
                            </p>
                            <time class="review__time"><?= $review['ngay_review'] ?></time>
                            <i class="fas fa-globe-europe"></i>
                        </div>
                    </div>



                    <div class="col-3 mr-auto">
                        <div class="d-flex ellipsi">
                            <div class="ml-auto ">
                                <a href="ellipsis"><i class="fas fa-ellipsis-h"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <div class="chat">
                <p><?= $review['noi_dung'] ?></p>
            </div>

            <div class="liketop">
                <div></div>
            </div>

            <div class="commnet">
                <div class="row comments">
                    <div class="col-4 thums-up react">
                        <div style="width: 600px;">
                            <div id="listCmt">
                                <?php
                                $listCmt = getCmtByReview($review['ma_reviews']);
                                foreach ($listCmt as $c) {
                                    echo "<div class='box-cmt'>
                                                <img src='../assets/images/img_avatar.png' alt='Avatar' class='avatar'>
                                                <p>
                                                    " . $c['ho_ten'] . " đã bình luận
                                                </p>
                                                <div class='box-cmt__noi-dung'>
                                                    " . $c['noi_dung_comment'] . "
                                                </div>
                                            </div>
                                            ";
                                }
                                ?>
                            </div>
                            <div class="cmt<?= $review['ma_reviews'] ?>">
                                <?php
                                if (isset($_SESSION['admin'])) {
                                    echo "<form id='cmt' action='index.php?ctrl=home&act=dangBinhLuan' method='post'>
                                        <input autocomplete='off' name='noi_dung_comment' type='text' placeholder='Bình luận...'>
                                        <input type='hidden' name='ma_user' value='" . $_COOKIE['ma_user'] . "'>
                                        <input type='hidden' name='ma_reviews' value='" . $review['ma_reviews'] . "'>
                                        <input type='hidden' name='ma_school' value='" . $review['ma_school'] . "'>
                                        <input type='hidden' name='ho_ten' value='" . $ho_ten['ho_ten'] . "'>
                                        </form>";
                                } else {
                                    echo "<form id='cmt' action='index.php?ctrl=home&act=dangBinhLuan' method='post'>
                                        <input style='cursor:not-allowed' disabled autocomplete='off' name='noi_dung_comment' type='text' placeholder='Hãy đăng nhập để bình luận'>
                                        </form>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    <?php } ?>

</main>