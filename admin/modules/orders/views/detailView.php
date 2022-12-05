<?php get_header(); ?>

<div id="main-content-wp" class="list-product-page" >
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                    <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(69)</span></a> |</li>
                            <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span> |</a></li>
                            <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <a  style=" <?php if(!$data[count($data) - 1]) echo "pointer-events: none;" ?> display: inline-block; text-align: center; margin-bottom: 20px;background-color: green;color: white; border: none; border-radius: 5px; width: 100px;"  href="?modules=orders&controllers=index&action=confirm&id_order=<?php echo $data[count($data)-2]; ?>">Xác nhận <a/>
                        <a style=" display: inline-block; text-align: center; margin-bottom: 20px;background-color: red;color: white; border: none; border-radius: 5px; width: 100px;"  href="?modules=orders&controllers=index&action=cancel&id_order=<?php echo $data[count($data)-2]; ?>" >Hủy đơn<a/>
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Mã sản phẩm</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Tên sản phẩm</span></td>
                                    <td><span class="thead-text">Giá</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Tổng tiền</span></td>
                                    <td><span class="thead-text">Thông báo</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($data))  foreach ($data as $key => $value) { if($key < count($data) -2){?>
                                <tr>
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text"><?php echo ($key +1) ;?></h3></span>
                                    <td><span class="tbody-text"><?php echo $value['code']; ?></h3></span>
                                    <td>
                                        <div class="tbody-thumb">
                                            <img src="<?php echo $value['image']; ?>" alt="">
                                        </div>
                                    </td>
                                    <td><span class="tbody-text"><?php echo $value['name']; ?></h3></span>
                                    <td><span class="tbody-text"><?php echo $value['price'] ;?></span></td>
                                    <td><span class="tbody-text"><?php echo $value['qty'] ;?></span></td>
                                    <td><span class="tbody-text"><?php echo $value['sub_total_price']; ?></span></td>
                                    <td><span  class="tbody-text"><?php echo $value['mess']; ?></span></td>
                                </tr> 

                            <?php } }; ?>
                            </tbody>
                        </table>
                        <hr>;
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>