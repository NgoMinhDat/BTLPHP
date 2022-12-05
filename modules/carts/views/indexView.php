<?php get_header(); ?>

<div id="main-content-wp" class="cart-page" style="padding-bottom: 200px;">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Giỏ hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <table class="table">
                    <form action="?modules=carts&controllers=index&action=update" method="post">
                    <thead>
                        <tr>
                            <td>Mã sản phẩm</td>
                            <td>Ảnh sản phẩm</td>
                            <td>Tên sản phẩm</td>
                            <td>Giá sản phẩm</td>
                            <td>Số lượng</td>
                            <td >Thành tiền</td>
                            <td>Hoàn tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) {?>
                        <?php foreach ($_SESSION['cart']['buy'] as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value['code']; ?></td>
                            <td>
                                <a href="" title="" class="thumb">
                                    <img src="<?php echo $value['image']; ?>" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="?modules=products&controllers=index&action=detail&id=<?php echo $value['id']; ?>" title="" class="name-product"><?php echo $value['name']; ?></a>
                            </td>
                            <td><?php echo $value['price']." .VNĐ"; ?></td>
                            <td>
                                <input min="1" max="<?php
                                $con = mysqli_connect("localhost", "root", "", "store");
                                if(!isset($con)){
                                    die("ket noi co so giu lieu khong thanh cong".mysqli_connect_error());
                                }
                                
                                $a=$value['code'];
                            $query = "SELECT *from tbl_product where code='$a'";
                            $result = mysqli_query($con,$query);
                            $data = array();
                            while($row = mysqli_fetch_array($result))
                            {
                                $data[]=$row;
                            }
                            for($i=0;$i<count($data);$i++)
                            {                                    
                                   
                               echo $data[$i]['quantity'];
                                
                            }
                                ?>" style="width: 60px;" type="number" name="qty[<?php echo $value['id']; ?>]" value="<?php echo  $value['qty']; ?>" class="num-order" >
                            </td>
                            <td><?php echo $value['sub_total']." .VNĐ"; ?></td>
                            <td>
                                <p ><a href="?modules=carts&controllers=index&action=delete&id=<?php echo $value['id']; ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a></p>
                            </td>
                        </tr>
                        <?php }}; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p id="total-price" class="fl-right">Tổng giá: <span><?php if(isset($_SESSION['cart']['buy'])&&!empty($_SESSION['id_customer'])) echo $_SESSION['cart']['info']['total']." .VNĐ"; else echo "0 .VNĐ"; ?></span></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7">
                                <div class="clearfix">
                                    <div  class="fl-right">
                                        <a style="margin-right: 660px;background-color: #dc5c2f;" href="?modules=checkouts&controllers=index&action=story" title="" id="checkout-cart">Lịch sử đơn hàng</a>
                                        <input type="submit" id="update-cart" name="btn-update_cart" value="Cập nhật giỏ hàng">
                                        <a href="?modules=checkouts&controllers=index&action=index" title="" id="checkout-cart">Thanh toán</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <hr>
                </form>
            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span style="color: green;">Cập nhật giỏ hàng</span> để cập nhật số lượng. Nhấn vào <span style="color: green;">thanh toán</span> để hoàn tất mua hàng.</p>
                <a href="?modules=home" title="" id="buy-more">Mua tiếp</a><br/>
                <a href="?modules=carts&controllers=index&action=deleteAll" title="" id="delete-cart">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>