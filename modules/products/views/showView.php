<?php get_header(); ?>

<div id="main-content-wp" class="clearfix category-product-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?modules=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title=""><?php echo($data['0']['name']) ; ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content fl-right">
            <div class="section" id="list-product-wp">
                <div class="section-head clearfix">
                    <h3 class="section-title fl-left"><?php echo($data['0']['name']) ; ?></h3>
                    <div class="filter-wp fl-right">
                        <p class="desc">Hiển thị 45 trên 50 sản phẩm</p>
                        <div class="form-filter">
                            <form method="POST" action="">
                                <select name="select">
                                    <option value="0">Sắp xếp</option>
                                    <option value="1">Từ A-Z</option>
                                    <option value="2">Từ Z-A</option>
                                    <option value="3">Giá cao xuống thấp</option>
                                    <option value="3">Giá thấp lên cao</option>
                                </select>
                                <button type="submit">Lọc</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">

                        <?php foreach ($data['1'] as $key => $value) {?>
                        <li>
                            <a href="?modules=products&controllers=index&action=detail&id=<?php echo $value['id']; ?>" title="" class="thumb">
                                <img src="<?php echo $value['image']; ?>">
                            </a>
                            <a href="?modules=products&controllers=index&action=detail&id=<?php echo $value['id']; ?>" title="" class="product-name"><?php echo $value['name']; ?></a>
                            <div class="price">
                                <span style="display: block;" class="new"><?php echo $value['promotional_price'].'.VND'; ?></span>
                                <span style="display: block;" class="old"><?php echo $value['price'].'.VND'; ?></span>
                            </div>
                            <div class="action clearfix">
                                <a href="<?php $id = $value['id']; if(!empty($_SESSION['id_customer'])) $urlll ="?modules=carts&controllers=index&action=add&id=$id" ;else $urlll ="?modules=users&controllers=index&action=index&report=1" ;echo $urlll;?> " title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="<?php $id = $value['id']; if(!empty($_SESSION['id_customer'])) $urlll ="?modules=carts&controllers=index&action=addByNow&id=$id"; else $urlll ="?modules=users&controllers=index&action=index&report=1" ;echo $urlll;?> " title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <?php }; ?>

                    </ul>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php for ($i=1; $i <= $data['2'] ; $i++) { ?>
                        <li>
                            <a <?php if($i == $data['4']) echo 'style="background-color: green;"';  ?>  href="?modules=products&controllers=index&action=show&id_cat=<?php echo($data['3']) ; ?>&page=<?php echo $i; ?>" title=""><?php echo $i; ?></a>
                        </li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
        </div>
<?php get_sidebar('sidebar02'); ?>
    </div>
</div>

<?php get_footer(); ?>