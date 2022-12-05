<?php get_header(); ?>

<div id="main-content-wp" class="cart-page" style="padding-bottom: 300px;">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Mã đơn hàng [---> <?php echo $data[count($data) -1]; ?> <---]</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td>Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if(!empty($data)) foreach ($data as $key => $value) { if($key< count($data)-1){?>
                        <tr>
                            <td><?php echo $value['code']; ?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="<?php echo $value['image'] ;?>" alt="">
                                </a>
                            </td>
                            <td><?php echo $value['name']; ?> </td>
                            <td><?php echo $value['price'].' .VNĐ'; ?></td>
                            <td>
                                <input type="text" name="num-order" value="<?php echo $value['qty'] ;?>" class="num-order">
                            </td>
                            <td><?php echo $value['sub_total_price'].' .VNĐ'; ?></td>
                        </tr>
                        <?php }}; ?>

                    </tbody>
                    
                </table>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            
        </div>
    </div>
</div>

<?php get_footer(); ?>