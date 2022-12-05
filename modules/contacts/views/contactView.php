<?php get_header(); ?>
				<div id="main-content-wp" class="checkout-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="" title="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wp-inner clearfix">
        <div class="section" id="customer-info-wp" >
            <div class="section-head">
                <h1 class="section-title">Đóng Góp ý kiến của khách hàng</h1>
            </div>
            <div class="section-detail">
                <form method="POST" action="" name="form-checkout">
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
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Nội dung</label>
                            <textarea name="note"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="btn_submit_crate" id="btn-submit" value="Gửi" style="height: 40px;
                                                                                                border-radius: 60px;
                                                                                                width: 150px;
                                                                                                color: green;
                                                                                                border-color: white;
                                                                                                color: white;
                                                                                                background-color: #48ad48;">
                </form>
            </div>
        </div>
        <div class="section" id="order-review-wp">
            <div class="section-head">
                <h1 class="section-title">Thông tin liên hệ</h1>
            </div>

                    <div class="map">
                        <iframe width="600" height="350" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Vietnam&amp;aq=&amp;sll=14.058324,108.277199&amp;sspn=21.827722,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Vietnam&amp;ll=14.058324,108.277199&amp;spn=8.883583,21.643066&amp;t=m&amp;z=6&amp;output=embed">
                        </iframe>
                  </div>

            <div class="section-detail">
                <table class="shop-table">
                    <thead>
                        <tr>
                            <td>E-Shopper Inc.</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart-item">
                            <td class="product-name">935 W. Webster Ave New Streets Chicago, IL 60614, NYNewyork USA<strong class="product-quantity">x 1</strong></td>
                        </tr>
                        <tr class="cart-item">
                            <td class="product-name">Mobile: +2346 17 38 93<strong class="product-quantity">x 2</strong></td>
                        </tr>
                        <tr class="cart-item">
                            <td class="product-name">Fax: 1-714-252-0026<strong class="product-quantity">x 2</strong></td>
                        </tr>
                        <tr class="order-total">
                            <td><strong class="total-price">Email: info@e-shopper.com</strong></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td><strong class="total-price">Mạng xã hội</strong></td>
                        </tr>
                        <tr class="order-total">
                        	<td>
                        		<strong class="total-price">
                        			<ul>
										<li style="display: inline-block; padding: 0px 20px; font-size: 50px;">
											<a style="color:gray;" href="https://www.facebook.com/anhtruongnd210198/"><i class="fa fa-facebook"></i></a>
										</li >
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="#"><i class="fa fa-google-plus"></i></a>
										</li>
										<li style="display: inline-block;padding: 0px 20px;font-size: 50px;">
											<a style="color:gray;" href="https://www.youtube.com/watch?v=di7QjvmmNGg"><i  class="fa fa-youtube"></i></a>
										</li>
									</ul>
                        		</strong>
                        	</td>
                           	
                        </tr>
                       
                    </tfoot>
                </table>
                
            </div>
        </div>
    </div>
</div>	
<?php get_footer(); ?>