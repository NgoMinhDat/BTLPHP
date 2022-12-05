<?php get_header(); ?>
<?php 

    if(!empty($_SESSION['success'])) 
        {echo " <script type='text/javascript'> alert('Chúc mừng bạn đã đặt hàng thành công!!!');</script>";
        unset($_SESSION['success']);}

 ?>
<div id="main-content-wp" class="cart-page" style="padding-bottom: 500px;">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Lịch sử đơn hàng</a>
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
                            <td>STT</td>
                            <td>Mã đơn hàng</td>
                            <td>Thời gian đặt</td>
                            <td>Tổng sản phẩm</td>
                            <td>Tổng giá tiền</td>
                            <td>Trạng thái</td>
                            <td>Hoàn tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($data)) foreach ($data as $key => $value) {?>
                        <tr>
                            <td><?php echo ($key +1); ?></td>
                            <td><?php echo $value['code']; ?></td>
                            <td><?php echo $value['create_date']; ?></td>
                            <td><?php echo $value['total_num_product']; ?></td>
                            <td><?php echo $value['total_price'].' .VNĐ' ?></td>
                            <td><?php echo $value['status'] ;?></td>
                            <td><a href="?modules=checkouts&controllers=index&action=detailStory&idOrder=<?php echo $value['id']; ?>&code=<?php echo $value['code']; ?>" title="" class="name-product">Chi tiết</a></td>
                           <?php }; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>