<main class="container" style="height: auto; min-height: 0px;">
    <section class="banner">
        <div class="textbanner">
            <h1 class="title text-white text-center">Review học phí, đãi ngộ, môi trường, thầy cô giáo và công việc,... gì cũng có
            </h1>
        </div>

        <div class="input-group mb-3 container-xl">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search-location"></i></span>
            </div>
            <div class="search-box w-75">
                <input type="text" autocomplete="off" class="form-control" placeholder="Tìm tên trường" aria-label="Username" aria-describedby="basic-addon1">
                <div class="result"></div>
            </div>
        </div>
    </section>


    <div class="row">
        <div class="columns col-lg-8">
            <section class="companies">
                <div class="tabs">
                    <ul id="removeActive">
                        <li data-tab="top-comments" class="tab is-active">
                            <a href="#page1" class="has-text-weight-bold"><span class="icon has-text-info"> <i class="fas fa-comments"></i></span> Mới cập nhật</a>
                        </li>

                        <li data-tab="top-companies" class="tab ">
                            <a href="#page2" class="has-text-weight-bold"><span class="icon has-text-danger"> <i class="fab fa-hotjar"></i> </span>Nhiều drama</a>
                        </li>
                        <script>
                            $(document).ready(function() {
                                $("#removeActive li a").click(function() {
                                    $("#removeActive li.is-active").removeClass("is-active");
                                });
                            });
                        </script>

                        <li data-tab="top-companies" class="tab ">
                            <a href="#page3" class="has-text-weight-bold"><span class="icon has-text-success"> <i class="fas fa-thumbs-up"></i> </span> Top trường xịn</a>
                        </li>

                        <li data-tab="worst-companies" class="tab ">
                            <a href="#page4" class="has-text-weight-bold"><span class="icon has-text-danger"> <i class="fas fa-thumbs-down"></i> </span> Trường
                                bựa nên né</a>
                        </li>
                    </ul>
                </div>

                <!-- product -->
                <main id="pageContent">
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
                                            <span style="display: block;" class="start">
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
                </main>



                <!-- pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>

        <div class="col-lg-4">
            <h4 class="is-size-5 has-text-weight-bold mt-3">Review gần đây</h4>
            <?php foreach ($review as $r) { ?>
                <?php $flag=1; ?>
                <div class="summary-reviews">
                    <?php 
                        $start_date = new DateTime($r['ngay_review']); 
                        // echo $r['ngay_review'];
                        $since_start = $start_date->diff(new DateTime()); 
                        // if ($since_start->d >= 1){
                        // break;
                        //     echo $since_start->d.' ngày trước';
                        // }
                    ?>
                    <h6>
                        <span class="has-text-weight-bold"> <?= $r['ho_ten'] ?></span>
                        đã review
                        <a href="?ctrl=home&act=chitiet&ma_school=<?= $r['ma_school'] ?>">
                            <?php $school = getTenTruongByID($r['ma_school']);
                            echo $school['ten_school']; ?>
                        </a>
                    </h6>
                    <p>
                        <?php 
                            
                            // echo $since_start->days.' days total<br>'; 
                            // echo $since_start->y.' years<br>'; 
                            // echo $since_start->m.' months<br>'; 
                            // echo $since_start->d.' days<br>'; 
                            // echo $since_start->h.' hours<br>'; 
                            // echo $since_start->i.' minutes<br>'; 
                            
                            // echo $since_start->s.' seconds<br>'; 
                            if ($since_start->i < 1) {
                                echo $since_start->s.' giây trước'; 
                            }
                            else if ($since_start->h < 1) {
                                echo 60-$since_start->i.' phút trước';
                            }
                            else if ($since_start->d < 1) {
                                echo 60-$since_start->i.' phút trước';
                            }
                            else if ($since_start->m < 1){
                                echo $since_start->d.' ngày trước';
                            }
                            else {
                                echo $since_start->m.' tháng trước';
                            }
                        ?>
                        <span class="start">
                            <?php
                            if ($r['rating'] == 1) {
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
                            } else if ($r['rating'] == 2) {
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
                            } else if ($r['rating'] == 3) {
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
                            } else if ($r['rating'] == 4) {
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
                    </p>

                    <p> <?= $r['noi_dung'] ?>
                    </p>
                </div>
            <?php } if($flag!=1) {echo "<i>Chưa có review nào gần đây</i>";} ?>
        </div>
    </div>
</main>

<script>
    $(document).ready(function() { //thực hiện sau khi trang đã được nạp

        checkURL(); //kiểm tra xem URL có một tham chiếu đến một trang web và tải nó

        $('ul li a').click(function(e) { //kiểm tra các đường link và sử lý

            checkURL(this.hash); //.. kiểm tra tham số truyền trên link ( ví dụ như #page1 )

        });

        setInterval("checkURL()", 250); //kiểm tra sự thay đổi trên link sau 250 ms

    });

    var lasturl = ""; //here we store the current URL hash

    function checkURL(hash) {
        if (!hash) hash = window.location.hash; //if no parameter is provided, use the hash value from the current address

        if (hash != lasturl) // if the hash value has changed
        {
            lasturl = hash; //update the current hash
            loadPage(hash); // and load the new page
        }
    }

    function loadPage(url) //nạp trang bằng ajax
    {
        url = url.replace('#page', ''); //kiểm tra và lấy số trang dể xác định là truy cập vào trang số mấy

        $('#loading').css('visibility', 'visible'); // hiển thị hình ảnh khi nạp dữ liệu

        $.ajax({ //tạo đối tượng ajax kết nối tới load_page.php để yêu cầu sử lý
            type: "POST",
            url: "?ctrl=home&act=cat",
            data: 'page=' + url, // tham số kèm theo để file php sử lý
            dataType: "html", // trả về kết quả html khi sử lý xong
            success: function(msg) {

                if (parseInt(msg) != 0) // nối không bị lỗi
                {
                    $('#pageContent').html(msg); // đổ giữ liệu kiểu html vào pageContet khi đã lấy được về
                }
            }

        });

    }
</script>