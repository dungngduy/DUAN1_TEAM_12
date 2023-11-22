<!-- Blog Section Begin -->
<section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php
                    foreach ($list_tintuc as $tintucmoi){
                        extract($tintucmoi);
                        $img_pro = $img_path . $img;
                        echo "
                        <div class='col-lg-4 col-md-4 col-sm-6'>
                    <div class='blog__item'>
                        <div class='blog__item__pic'>
                            <img src='".$img_pro."' alt=''>
                        </div>
                        <div class='blog__item__text'>
                            <ul>
                                <li><i class='fa fa-calendar-o'></i>".$ngaydang."</li>
                                <li><i class='fa fa-comment-o'></i> 5</li>
                            </ul>
                            <h5><a href='#'>
                               ".$tieude."
                            </a></h5>
                            <p>".$noidung." </p>
                        </div>
                    </div>
                </div>
                        ";
                    }
               ?>
                <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">
                                Đồng phục Hải Anh: Bước tiến mới trong thế giới thời trang đa chiều
                            </a></h5>
                            <p>Hãy mặc thep phong cách của bạn </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">
                               Tierra Diamond ra mắt bộ sưu tập nhẫn cưới vàng 18K lấy cảm hứng từ biểu tượng thuần Việt
                            </a></h5>
                            <p>Hãy mặc theo phong cách của bạn </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 2/11/2023</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">
                                Hot girl Lào gốc Việt nổi bật trên đường phố Hà Nội: dáng nuột, mặt xinh
                            </a></h5>
                            <p>Hãy mặc theo phong cách của bạn </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Blog Section End -->