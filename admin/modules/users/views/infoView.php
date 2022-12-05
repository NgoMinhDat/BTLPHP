<?php get_header(); ?>

<div id="main-content-wp" class="info-account-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <div id="sidebar" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="?modules=users&controller=index&action=pass" title="">Đổi mật khẩu</a>
                </li>
                <li>
                    <a href="?modules=users&controllers=index&action=logout" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?modules=users&controller=index&action=update">

                        <?php if(!empty($data)) foreach ($data as  $value) {?>

                            <label for="display-name">Tên hiển thị</label>
                            <input type="text" name="fullname" id="display-name" value="<?php echo $value['fullname']; ?>">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" id="username"  readonly="readonly" value="<?php echo $value['username']; ?>">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $value['email']; ?>">
                            <label for="tel">Số điện thoại</label>
                            <input type="tel" name="phone" id="tel" value="<?php echo $value['phone']; ?>">
                            <label for="address">Địa chỉ</label>
                            <textarea name="address" id="address"><?php echo $value['address']; ?></textarea>
                            
                        <?php }; ?>

                        <button type="submit" name="btn_submit" id="btn-submit">Cập nhật</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>