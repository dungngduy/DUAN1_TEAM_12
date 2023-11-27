    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/bg-trangsp.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chi tiết sản phẩm</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <?php extract($onesp); ?> 
    <section class="product-details spad">
    <div class="container">
        <div class="row">
            <?php
                $img_pro = $img_path . $img;
            ?>
            <div class='col-lg-6 col-md-6'>
                <div class='product__details__pic'>
                    <div class='product__details__pic__item'>
                        <img class='product__details__pic__item--large' src='<?=$img_pro; ?>' alt=''>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/details/product-details-1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div> -->
            <div class='col-lg-6 col-md-6'>
                <div class='product__details__text'>
                    <h3><?=$name; ?></h3>
                    <div class='product__details__rating'>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star'></i>
                        <i class='fa fa-star-half-o'></i>
                        <span>(<?=$luotxem; ?>)</span>
                    </div>
                    <div class='product__details__price'><?=number_format($price, 0, ',', '.'); ?>đ</div>
                    <p><?=$mota; ?></p>
                    <?php
                        foreach($ctsp as $key){
                            extract($key);
                            echo "<div class='color'>
                                    <a href=''>".$color."</a>
                                </div>";
                        }
                    ?>
                    <?php
                        foreach($ctsp as $key){
                            extract($key);
                            echo "<div class='size'>
                                    <input type='button' value='Size ".$size."'>
                                </div>";
                        }
                    ?>
                    <?php
                        foreach($ctsp as $key){
                            extract($key);
                        }
                    ?>
                    <?php
                        include "model/offset.php";
                        $sql = mysqli_query($conn, "SELECT * FROM chi_tiet_san_pham");
                        if($result = $sql->num_rows > 0){
                            $row = $sql->fetch_assoc();
                            $soLuong = $row['soluong'];
                        }
                    ?>
                    <div class='product__details__quantity'>
                        <form method="post" action="index.php?act=cart">
                            <input type="hidden" name="id" value="<?=$id;?>">
                            <input type="hidden" name="name" value="<?=$name;?>">
                            <input type="hidden" name="img" value="<?=$img;?>">
                            <input type="hidden" name="price" value="<?=$price;?>">
                            <!-- <input type="hidden" name="soluong" value="1">    -->
                            <div class='product__details__quantity'>
                                <div class='quantity'>
                                    <div class='pro-qty'>
                                        <input type="text" value="1">
                                        <input type="hidden" value="1" name="qty">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <a href='#' class='primary-btn'>Mua ngay</a>
                            <input type='submit' class='primary-btn' name='cart' value="Thêm vào giỏ hàng"></input>
                        </form>
                    </div>
                </div>
            </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Miêu tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá <span>(<?=$count; ?>)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Miêu tả</h6>
                                    <p><?=$mota; ?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Thông tin</h6>
                                    <p>Bảng size: <br>
                                        - Size S: Cân nặng: 53-60kg; Ngang vai: 45cm; Rộng ngực: 51cm; Dài áo: 70cm <br>
                                        - Size M: Cân nặng 60-68kg; Ngang vai: 46cm; Rộng ngực: 53cm; Dài áo: 72cm <br>
                                        - Size L:  Cân nặng 68-78kg; Ngang vai:47cm; Rộng ngực: 55cm; Dài áo: 74cm <br>
                                        - Size XL: Cân nặng 78-85kg; Ngang vai: 48cm; Rộng ngực: 57cm; Dài áo: 76cm <br>
                                        
                                        Chất liệu: Jean 100% Cotton <br>
                                        Form áo: Regular <br>
                                        Đặc điểm: <br>
                                        Áo Khoác Jean Drafting All Black Basic là sự kết hợp hoàn hảo giữa phong
                                        cách đương đại và sự thoải mái. Với thiết kế màu đen đơn giản và tối màu, 
                                        sản phẩm này là lựa chọn hoàn hảo cho những ngày se lạnh hoặc để tạo điểm nhấn
                                        cho trang phục của bạn. Áo khoác jean với cổ cài nút giúp bạn thể hiện phong cách
                                        cổ điển và cá nhân hóa, túi hai bên đựng đồ cá nhân và giữ tay ấm. Thiết kế rã rập
                                        đem đến hơi hướng sáng tạo đột phá, không theo lối mòn.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <iframe src="view/comment/form-comment.php?idpro=<?php echo $id; ?>" frameborder="0" width="100%" min-height="300px"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach($sanpham_cungloai as $sanpham_cungloai){
                        extract($sanpham_cungloai);
                        $img_pro = $img_path . $img;
                        $link = "index.php?act=ctsanpham&idsp=" . $id;
                        echo "
                        <div class='col-lg-3 col-md-4 col-sm-6'>
                            <div class='product__item'>
                                <div class='product__item__pic set-bg' data-setbg='" . $img_pro . "'>
                                    <ul class='product__item__pic__hover'>
                                        <li><a href='#'><i class='fa fa-heart'></i></a></li>
                                        <li><a href='#'><i class='fa fa-retweet'></i></a></li>
                                        <li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                    </ul>
                                </div>
                                <div class='product__item__text'>
                                    <h6><a href='".$link."'>".$name."</a></h6>
                                    <h5>".number_format($price, 0, ',', '.')."đ</h5>
                                </div>
                            </div>
                        </div>
                        ";
                    } 
                ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->