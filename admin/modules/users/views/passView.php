<?php get_header(); ?>

<div id="main-content-wp" class="change-pass-page">
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
                    <a href="?modules=users&controllers=index&action=pass" title="">Cập nhật thông tin</a>
                </li>
                <li>
                    <a href="?modules=users&controllers=index&action=logout" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="post" action="?modules=users&controllers=index&action=changepass">
                        <label for="old-pass">Mật khẩu cũ</label>
                        <input type="password" name="pass_old" id="pass-old">
                        <label for="new-pass">Mật khẩu mới</label>
                        <input type="password" name="pass_new" id="pass-new">
                        <label for="confirm-pass">Xác nhận mật khẩu</label>
                        <input type="password" name="confirm_pass" id="confirm-pass">
                        <input type="submit" name="btn_submit" id="btn-submit" value="Cập Nhật">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>