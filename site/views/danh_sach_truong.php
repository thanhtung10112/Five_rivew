<?php foreach ($ds as $row) { ?>
    <div class="company-item">
        <div class="row">
            <div class=" col-3 company-info ">
                <img src="../assets/images/logo-schools/<?= $row['hinh_anh'] ?>" alt="">
            </div>
            <div class="col-9">
                <div class="company-info__detail">
                    <h4 class="is-size-5 has-text-weight-semibold company-info__name">
                        <a href="?act=chitiet&ma_school=<?= $row['ma_school'] ?>" class="txr">

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
                                                <span class='icon is-small has-text-warning'>
                                                    <i class='far fa-star'></i>
                                                </span>
                                        </span>
                                        ";
                                }
                                else if ($row['school_rating'] == 1) {
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
                            <span class="one">(<?= $row['so_luot_review'] ?>)</span>
                        </span>
                    </h4>
                    <div class="company-info__other">
                        <span style="-margin-right: 0.3rem">
                            <span class="icon"> <i class="fas fa-briefcase"></i></span> <?= $row['he'] ?>
                        </span>
                        <span><span class="icon"> <i class="fas fa-users"></i> </span> <?= $row['nam_thanh_lap'] ?>
                        </span>
                    </div>
                    <div class="company-info__location">
                        <span>
                            <span class="icon"> <i class="fas fa-building"></i> </span> <?= $row['dia_chi'] ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
<?php } ?>