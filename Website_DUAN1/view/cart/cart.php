<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Các sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                 $i = 0;
                                 $total_amount = 0;
                                 
                                 foreach ($_SESSION['mycart'] as $cart) {
                                     $img_pro = $img_path . $cart[2];
                                     $xoasp = "<td class='shoping__cart__item__close'>
                                         <a href='index.php?act=delcart&idcart=" . $i . "' class='icon_close'></a>
                                     </td>";
                                     $price = $cart[3];
                                     $quantity = isset($_POST['quantity'][$i]) ? intval($_POST['quantity'][$i]) : $cart[4];
                                     if (!is_numeric($price) || !is_numeric($quantity)) {                
                                 $i += 1;  
                                 continue;
                                     }
                                     $ttien = $price * $quantity;
                                     $total_amount += $ttien;
                                     echo "
                                         <tr>
                                             <td class='shoping__cart__item'>
                                                 <img src='" . $img_pro . "' alt=''>
                                                 <h5>" . $cart[1] . "</h5>
                                             </td>
                                             <td class='shoping__cart__price'>
                                                 " . $price . "đ
                                             </td>
                                             <td class='shoping__cart__quantity'>
                                                 <div class='quantity'>
                                                     <div class='pro-qty'>
                                                         <input type='text' name='quantity[" . $i . "]' value='" . $quantity . "'>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td class='shoping__cart__total'>
                                                 " . $ttien . " đ
                                             </td>
                                             " . $xoasp . "
                                         </tr>
                                     ";
                                 
                                     $i += 1;
                                 }
                                    ?>

                                <!-- <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5>Áo khoác</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-2.jpg" alt="">
                                        <h5>Quần Áo thể thao MU</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-3.jpg" alt="">
                                        <h5>Áo sơ mi trắng</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        300.000 VND
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Cập nhật giỏ hàng</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm mã giảm giá">
                                <button type="submit" class="site-btn">ÁP DỤNG</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng số giỏ hàng</h5>
                        <ul>
                            <?php echo" <li>Tổng cộng <span>".$total_amount." đ</span></li>" ?>
                        </ul>
                        <a href="#" class="primary-btn">TIẾN HÀNH THANH TOÁN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->