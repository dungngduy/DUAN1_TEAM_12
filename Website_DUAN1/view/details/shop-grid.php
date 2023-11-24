<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/bg-trangsp.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản phẩm</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Danh sách</h4>
                        <?php
                            foreach($loadall_danhmuc as $list){
                                extract($list);
                        ?>
                            <ul>
                                <li><a href="index.php?act=dmsanpham&iddm=<?=$id; ?>"><?=$name; ?></a></li>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="sidebar__item">
                        <h4>Giá Thành</h4>
                        <div class="price-range-wrap">
                            <form id="priceFilterForm">
                                <label for="minPrice">Giá tối thiểu:</label>
                                <input type="number" id="minPrice" name="minPrice" value="<?php echo $minPrice; ?>" min="0">

                                <label for="maxPrice">Giá tối đa:</label>
                                <input type="number" id="maxPrice" name="maxPrice" value="<?php echo $maxPrice; ?>" min="0">
                                <br>
                                <input type="submit" value="Lọc">
                            </form>
                        </div>
                    </div>
                    <!-- <div class="sidebar__item">
                        <h4>Màu sắc</h4>
                        <form id="colorFilterForm">
                            <select id="color" name="color">
                                <option value="">Tất cả</option>
                                <option value="Đỏ">Đỏ</option>
                                <option value="Xanh">Xanh</option>
                                <option value="Vàng">Vàng</option>
                                <option value="Đen">Đen</option>
                            </select>
                            <input class="color" type="submit" value="Lọc">
                        </form>
                    </div> -->
                    <!-- <div class="sidebar__item">
                        <h4>Kích thước</h4>
                        <form id="sizeFilterForm">
                            <select id="size" name="size">
                                <option value="">Tất cả</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>

                            <input class="size" type="submit" value="Lọc">
                        </form>
                    </div> -->
                    <div class="sidebar__item">
                         <div class="latest-product__text">
                            <h4>Sản phẩm mới</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                        foreach ($list_danhmuc as $dm) {
                                            extract($dm);
                                            $img_new = $img_path . $img;
                                            echo"
                                            <a href='#' class=latest-product__item'>
                                                <div class='latest-product__item__pic'>
                                                    <img src='".$img_new."' alt=''>
                                                </div>
                                                <div class='latest-product__item__text'>
                                                    <h6>".$name."</h6>
                                                    <span></span>
                                                </div>
                                            </a>
                                            ";
                                        }
                                    ?>
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    <?php
                                        foreach ($list_danhmuc as $dm) {
                                            extract($dm);
                                            $img_new = $img_path . $img;
                                            echo"
                                            <a href='#' class=latest-product__item'>
                                                <div class='latest-product__item__pic'>
                                                    <img src='".$img_new."' alt=''>
                                                </div>
                                                <div class='latest-product__item__text'>
                                                    <h6>".$name."</h6>
                                                    <span></span>
                                                </div>
                                            </a>
                                            ";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Giảm giá</h2>
                    </div>
                    <div class="row">  
                    <?php
                    echo "<div class='product__discount__slider owl-carousel'>";
                    foreach ($list_sp_discount as $list) {
                        extract($list);
                        $img_pro = $img_path . $img;
                        echo "
                        <div class='col-lg-4'>
                            <div class='product__discount__item'>
                                <div class='product__discount__item__pic set-bg' data-setbg='" . $img_pro . "'>
                                    <div class='product__discount__percent'>-20%</div>
                                        <ul class='product__item__pic__hover'>
                                            <li><a href='#'><i class='fa fa-heart'></i></a></li>
                                            <li><a href='#'><i class='fa fa-retweet'></i></a></li>
                                            <li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                        </ul>
                                    </div>
                                    <div class='product__discount__item__text'>
                                        <h5><a href='index.php?act=ctsanpham'>" . $name . "</a></h5>
                                        <div class='product__item__price'>" . $price . " <span>" . $price_old . "</span></div>
                                        </div> 
                                    </div>
                                </div>";
                    }
                    echo "</div>";
                    ?>        
                               <!--  <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-1.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Áo mùa đông</span>
                                        <h5><a href="#">Áo khoác</a></h5>
                                        <div class="product__item__price">300.000 <span>360.000</span></div>
                                    </div> -->
                                <!-- </div>  -->
                            
                            <!-- <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-2.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Áo mùa hè</span>
                                        <h5><a href="#">Áo phông</a></h5>
                                        <div class="product__item__price">200.000 <span>260.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-3.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Áo mùa đông</span>
                                        <h5><a href="#">Áo guchi</a></h5>
                                        <div class="product__item__price">300.000 <span>360.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-4.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Quần mùa đông</span>
                                        <h5><a href="#">Quần dài</a></h5>
                                        <div class="product__item__price">300.000 <span>360.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-5.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Quần áo thể thao</span>
                                        <h5><a href="#">Bộ quần áo MU</a></h5>
                                        <div class="product__item__price">300.000 <span>360.000</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="img/product/discount/pd-6.jpg">
                                        <div class="product__discount__percent">-20%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>Áo lao động</span>
                                        <h5><a href="#">Áo sơ mi trắng</a></h5>
                                        <div class="product__item__price">300.000 <span>360.000</span></div>
                                    </div>
                                </div>
                            </div> -->
                </div>
                <br>
                <br>
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sản phẩm lọc</h2>
                    </div>
                    <div class="row">  
                    <?php
                        foreach ($sp_with_dm as $list) {
                            extract($list);
                            $img_pro = $img_path . $img;
                            echo "
                            <div class='col-lg-4'>
                                <div class='product__discount__item'>
                                    <div class='product__discount__item__pic set-bg' data-setbg='" . $img_pro . "'>
                                        <div class='product__discount__percent'>-20%</div>
                                            <ul class='product__item__pic__hover'>
                                                <li><a href='#'><i class='fa fa-heart'></i></a></li>
                                                <li><a href='#'><i class='fa fa-retweet'></i></a></li>
                                                <li><a href='#'><i class='fa fa-shopping-cart'></i></a></li>
                                            </ul>
                                        </div>
                                        <div class='product__discount__item__text'>
                                            <h5><a href='index.php?act=ctsanpham'>" . $name . "</a></h5>
                                            <div class='product__item__price'>" . $price . " <span>" . $price_old . "</span></div>
                                            </div> 
                                        </div>
                                    </div>";
                        }
                    ?>        
                </div>
                <?php 
                    include "model/offset.php";
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] :1;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] :1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $sql = mysqli_query($conn, "SELECT * FROM san_pham ORDER BY id ASC LIMIT ".$item_per_page." OFFSET ".$offset."");
                    $total = mysqli_query($conn, "SELECT * FROM san_pham");
                    $totalRecords = $total->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                ?>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sắp xếp theo</span>
                                <select>
                                    <option value="0">Mặc định</option>
                                    <option value="0">Xu hướng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?=$totalRecords; ?></span>sản phẩm được tìm thấy</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_array($sql)){
                            $img_pro = $img_path . $row['img'];
                            $link_sp = "index.php?act=ctsanpham&idsp=" . $row['id'];
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?=$img_pro ?>">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="<?=$link_sp ?>"><?=$row['name'] ?></a></h6>
                                    <h5><?=$row['price'] ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo gió nam</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Bộ quần áo MU</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo phông</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo gió nam</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Bộ quần áo MU</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo phông</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo gió nam</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Bộ quần áo MU</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Áo phông</a></h6>
                                <h5>300.000</h5>
                            </div>
                        </div>
                    </div>        -->
                </div>
                <div class="product__pagination">
                    <?php
                        if($current_page > 1){
                            $prev_page = $current_page - 1;
                    ?>      
                        <a href="?act=dmsanpham&per_page=<?=$item_per_page; ?>&page=<?=$prev_page; ?>"><i class="fa fa-long-arrow-left"></i></a>
                    <?php } ?>
                    <?php
                        for($num = 1; $num <= $totalPages; $num++){
                    ?>
                            <?php
                                if($num != $current_page){
                            ?>
                                <?php if($num > $current_page - 2 && $num < $current_page + 2){ ?>
                                    <a href="?act=dmsanpham&per_page=<?=$item_per_page; ?>&page=<?=$num; ?>"><?=$num; ?></a>
                                <?php } ?>
                            <?php }else{ ?>
                                <a style="background-color: #343a40; color: #fff;" href="?act=dmsanpham&per_page=<?=$item_per_page; ?>&page=<?=$num; ?>"><?=$num; ?></a>
                            <?php } ?>
                    <?php } ?>
                    <?php
                        if($current_page < $totalPages + 1){
                            $next_page = $current_page + 1;
                    ?>      
                        <a href="?act=dmsanpham&per_page=<?=$item_per_page; ?>&page=<?=$next_page; ?>"><i class="fa fa-long-arrow-right"></i></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('priceFilterForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô input
        const minPrice = document.getElementById('minPrice').value;
        const maxPrice = document.getElementById('maxPrice').value;

        // Chuyển hướng trang với tham số giá mới
        window.location.href = `index.php?act=dmsanpham&minPrice=${minPrice}&maxPrice=${maxPrice}`;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('colorFilterForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô select
        const selectedColor = document.getElementById('color').value;

        // Chuyển hướng trang với tham số màu sắc mới
        window.location.href = `index.php?act=dmsanpham&color=${selectedColor}`;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('sizeFilterForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        // Lấy giá trị từ ô select
        const selectedSize = document.getElementById('size').value;

        // Chuyển hướng trang với tham số kích thước mới
        window.location.href = `index.php?act=dmsanpham&size=${selectedSize}`;
    });
});
</script>
<!-- Product Section End -->