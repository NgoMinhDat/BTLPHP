<div id="main-content-wp" class="add-cat-page slider-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm khối</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST">
                        <label for="title">Tên khối</label>
                        <input type="text" name="title" id="title">
                        <label for="title">Mã khối</label>
                        <input type="text" name="slug" id="slug">
                        <label for="desc">Nội dung khối</label>
                        <textarea name="desc" id="desc" class="ckeditor"></textarea>
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>