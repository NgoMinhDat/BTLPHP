<?php get_header(); ?>

<?php 
        if(!empty($_SESSION['messa'])) 
            {echo " <script type='text/javascript'> alert('bạn cần chọn phương thức thanh toán!!!');</script>";
            unset($_SESSION['messa']);}

        if(!empty($_SESSION['messBuy'])) 
            {echo " <script type='text/javascript'> alert('bạn cần mua ít nhất 1 sản phẩm!!!');</script>";
            unset($_SESSION['messBuy']);}

?>

<div id="main-content-wp" class="checkout-page" >
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Thanh toán</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">

        <form method="post" action="?modules=checkouts&controllers=index&action=checkout" name="form-checkout">

            <div class="section" id="customer-info-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin khách hàng</h1>
                </div>
                <div class="section-detail">
                    <?php if(!empty($data)) { foreach ($data as  $value) {?>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" value="<?php echo $value['fullname']; ?>">
                            </div>
                            <div class="form-col fl-right">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $value['mail']; ?>">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" id="address" value="<?php echo $value['address']; ?>">
                            </div>
                            <div class="form-col fl-right">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" name="phone" id="phone" value="<?php echo $value['phone']; ?>">
                            </div>
                        </div>
                    <?php }};if(empty($data)){ ?>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname">
                            </div>
                            <div class="form-col fl-right">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-row clearfix">
                            <div class="form-col fl-left">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" id="address">
                            </div>
                            <div class="form-col fl-right">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" name="phone" id="phone">
                            </div>
                        </div>
                    <?php }; ?>
                        <div class="form-row">
                            <div class="form-col">
                                <label for="notes">Ghi chú</label>
                                <textarea name="note"></textarea>
                            </div>
                        </div>
                </div>
            </div>
            <div class="section" id="order-review-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin đơn hàng</h1>
                </div>
                <div class="section-detail">
                    <table class="shop-table">
                        <thead>
                            <tr>
                                <td>Sản phẩm</td>
                                <td>Tổng</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($_SESSION['cart']['buy']) ){?>
                            <?php foreach ($_SESSION['cart']['buy'] as $key => $value) { ?>
                            <tr class="cart-item">
                                <td class="product-name"><?php echo $value['name']; ?><strong class="product-quantity">x <?php echo $value['qty']; ?></strong></td>
                                <td class="product-total"><?php echo $value['sub_total']; ?></td>
                            </tr>
                             <?php }}; ?>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Tổng đơn hàng:</td>
                                <td><strong class="total-price"><?php if(isset($_SESSION['cart']['buy'])) echo $_SESSION['cart']['info']['total']." VND"; else echo "0 VND"; ?></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div id="payment-checkout-wp">
                        <ul id="payment_methods">
                            <li>
                                <input type="radio" id="direct-payment" name="payment_method" value="card_payment">
                                <label for="direct-payment">Thanh toán online</label>
                            </li>
                            <li>
                                <input type="radio" id="payment-home" name="payment_method" value="home_payment">
                                <label for="payment-home">Thanh toán tại nhà</label>
                            </li>
                        </ul>
                    </div>
                    <div class="place-order-wp clearfix">
                        <input type="submit" id="order-now" value="Đặt hàng" name="btn_submit">
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

<?php get_footer(); ?>