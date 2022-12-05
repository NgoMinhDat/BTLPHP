<?php get_header(); ?>

<div id="main-content-wp" class="add-cat-page slider-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm Slider</h3>
                    <a href="?modules=sliders&controllers=index&action=list" title="" id="add-new" class="fl-left">Danh sách</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                     <form method="POST" action="?modules=sliders&controllers=index&action=add" enctype="multipart/form-data"">
                        <label for="title">Người tạo</label>
                        <input type="text" name="user" id="title">
                        <label>Kiểu</label>
                        <select name="type">
                            <option value="ngang">Ngang</option>
                            <option value="docj">Dọc</option>
                        </select>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="image" id="upload-thumb">
                            <img src="public/images/img-thumb.png">
                        </div>

                        <input type="submit" name="btn_submit" id="btn-submit" value="Thêm mới">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
