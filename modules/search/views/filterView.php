<?php get_header(); ?>

<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Search</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left">KẾT QUẢ TÌM KIẾM:</h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Có <?php if(!empty($data)) echo count($data);else echo '0' ;?> sản phẩm.</p>
                        
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">

                    	<?php if(!empty($data)){ foreach ($data as $key => $value) {?>

                        <li>
                            <a href="?modules=products&controllers=index&action=detail&id=<?php echo $value['id']; ?>" title="" class="thumb">
                                <img src="<?php echo $value['image']; ?>">
                            </a>
                            <a href="?modules=products&controllers=index&action=detail&id=<?php echo $value['id']; ?>" title="" class="product-name"><?php echo $value['name']; ?></a>
                            <div class="price">
                                <span class="new"><?php echo $value['promotional_price'].' .VNĐ'; ?></span>
                                <span class="old"><?php echo $value['price'].' .VNĐ'; ?></span>
                            </div>
                            <div class="action clearfix">
                                <a href="<?php $id = $value['id']; if(!empty($_SESSION['id_customer'])) $urlll ="?modules=carts&controllers=index&action=add&id=$id" ;else $urlll ="?modules=users&controllers=index&action=index&report=1" ;echo $urlll;?> " title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="<?php $id = $value['id']; if(!empty($_SESSION['id_customer'])) $urlll ="?modules=carts&controllers=index&action=addByNow&id=$id"; else $urlll ="?modules=users&controllers=index&action=index&report=1" ;echo $urlll;?> " title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                       
                       <?php }} else {echo "Không tìm thấy sản phẩm bạn mong muốn";} ?>
                    </ul>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    
                </div>
            </div>
        </div>
<?php get_sidebar('sidebar02'); ?>
    </div>
</div>

<?php get_footer(); ?>
